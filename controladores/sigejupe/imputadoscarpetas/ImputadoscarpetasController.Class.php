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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadoscarpetas/ImputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosimputadoscarpetas/TelefonosimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosimputadoscarpetas/TelefonosimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tutoresimputadoscarpetas/TutoresimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tutoresimputadoscarpetas/TutoresimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nacionalidadesimputadoscarpetas/NacionalidadesimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nacionalidadesimputadoscarpetas/NacionalidadesimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosdrogascarpetas/ImputadosdrogascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadosdrogascarpetas/ImputadosdrogascarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/carpetasjudiciales/CarpetasjudicialesController.Class.php");

//carpetas judiciales
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");
//Tipos Carpeta
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");
//Ocupaciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ocupaciones/OcupacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ocupaciones/OcupacionesDAO.Class.php");
//Pa�ses
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/paises/PaisesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/paises/PaisesDAO.Class.php");
//Estados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estados/EstadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estados/EstadosDAO.Class.php");
//Municipios
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/municipios/MunicipiosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/municipios/MunicipiosDAO.Class.php");
//Estados Civiles
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estadosciviles/EstadoscivilesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estadosciviles/EstadoscivilesDAO.Class.php");
//Niveles Instrucciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nivelesinstrucciones/NivelesinstruccionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nivelesinstrucciones/NivelesinstruccionesDAO.Class.php");
//Alfabetismo
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/alfabetismo/AlfabetismoDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/alfabetismo/AlfabetismoDAO.Class.php");
//Espanol
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/espanol/EspanolDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/espanol/EspanolDAO.Class.php");
//Dialecto Indigena
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/dialectoindigena/DialectoindigenaDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/dialectoindigena/DialectoindigenaDAO.Class.php");
//Tipo Familia Linguistica
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipofamilialinguistica/TipofamilialinguisticaDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tipofamilialinguistica/TipofamilialinguisticaDAO.Class.php");
//Interpretes
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/interpretes/InterpretesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/interpretes/InterpretesDAO.Class.php");
//Estados Psicofisicos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estadospsicofisicos/EstadospsicofisicosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estadospsicofisicos/EstadospsicofisicosDAO.Class.php");
//Grupos �tnicos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposednicos/GruposednicosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/gruposednicos/GruposednicosDAO.Class.php");

//Tipos Detenciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposdetenciones/TiposdetencionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposdetenciones/TiposdetencionesDAO.Class.php");
//Ceresos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ceresos/CeresosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ceresos/CeresosDAO.Class.php");
//Tipos Reincidencia
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposreincidencias/TiposreincidenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposreincidencias/TiposreincidenciasDAO.Class.php");
//Etapas Procesales
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/etapasprocesales/EtapasprocesalesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/etapasprocesales/EtapasprocesalesDAO.Class.php");
//Imputados Exhortos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosexhortos/ImputadosexhortosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadosexhortos/ImputadosexhortosDAO.Class.php");
//Consignaciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/consignaciones/ConsignacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/consignaciones/ConsignacionesDAO.Class.php");
//Exhortos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/exhortos/ExhortosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/exhortos/ExhortosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/consignaciones/ConsignacionesDAO.Class.php");
//Domicilios Imputados Carpets
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasDAO.Class.php");
//Concluciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/conclusiones/ConclusionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/conclusiones/ConclusionesDTO.Class.php");

//Modalidades
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/modalidades/ModalidadesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/modalidades/ModalidadesDAO.Class.php");
//Comisiones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/comisiones/ComisionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/comisiones/ComisionesDAO.Class.php");
//Concurso
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/concursos/ConcursosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/concursos/ConcursosDAO.Class.php");
//Clasificaci�n Delito Orden
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/clasificacionesdelitosorden/ClasificacionesdelitosordenDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/clasificacionesdelitosorden/ClasificacionesdelitosordenDAO.Class.php");
//Formas de acciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/formasacciones/FormasaccionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/formasacciones/FormasaccionesDAO.Class.php");
//Imputados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadoscarpetas/ImputadoscarpetasDAO.Class.php");
//Imputado Ofendido Delito
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelcarpetas/ImpofedelcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/impofedelcarpetas/ImpofedelcarpetasDAO.Class.php");
//Conductas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/conductas/ConductasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/conductas/ConductasDAO.Class.php");
//�mbitos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ambitosacosos/AmbitosacososDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ambitosacosos/AmbitosacososDAO.Class.php");
//Detalles conductas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/detallesconductas/DetallesconductasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/detallesconductas/DetallesconductasDAO.Class.php");
//Ofendidos Carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidoscarpetas/OfendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidoscarpetas/OfendidoscarpetasDAO.Class.php");
//Exhortos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/exhortos/ExhortosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/exhortos/ExhortosDAO.Class.php");
//Juzgados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");
//Imputados Sentencias
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossentencias/ImputadossentenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadossentencias/ImputadossentenciasDAO.Class.php");
//Actuaciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuaciones/ActuacionesDAO.Class.php");
//Tipos sentencias
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipossentencias/TipossentenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tipossentencias/TipossentenciasDAO.Class.php");
//Delitos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitos/DelitosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitos/DelitosDAO.Class.php");
//Imputados carpetas conclusiones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetasconclusiones/ImputadoscarpetasconclusionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadoscarpetasconclusiones/ImputadoscarpetasconclusionesDAO.Class.php");
//Imputados sanciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossanciones/ImputadossancionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadossanciones/ImputadossancionesDAO.Class.php");
//Tipos sanciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipossanciones/TipossancionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tipossanciones/TipossancionesDAO.Class.php");
//impofedel
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/impofedelcarpetas/ImpofedelcarpetasController.Class.php");
//Delitos carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitoscarpetas/DelitoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitoscarpetas/DelitoscarpetasDAO.Class.php");
//Imputados Solicitudes
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");
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
//apertura a juicio
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/aperturasjuicio/AperturasjuicioDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/aperturasjuicio/AperturasjuicioDAO.Class.php");
//autos imputados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/autosimputados/AutosimputadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/autosimputados/AutosimputadosDAO.Class.php");
//beneficios
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/beneficioses/BeneficiosesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/beneficioses/BeneficiosesDAO.Class.php");
//formulacion imputacion
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/formulacionimputaciones/FormulacionimputacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/formulacionimputaciones/FormulacionimputacionesDAO.Class.php");
//ejecucion de sentencias
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosejecsentencias/ImputadosejecsentenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadosejecsentencias/ImputadosejecsentenciasDAO.Class.php");
//medidas cautelares
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/medidascautelares/MedidascautelaresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/medidascautelares/MedidascautelaresDAO.Class.php");
//ordenes imputados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ordenesimputados/OrdenesimputadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ordenesimputados/OrdenesimputadosDAO.Class.php");
//quejosos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/quejosos/QuejososDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/quejosos/QuejososDAO.Class.php");
//quejosos promociones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/quejosospromociones/QuejosospromocionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/quejosospromociones/QuejosospromocionesDAO.Class.php");
//reclusos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/reclusos/ReclusosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/reclusos/ReclusosDAO.Class.php");
//suspencion condicionales
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/suspensioncondicionales/SuspensioncondicionalesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/suspensioncondicionales/SuspensioncondicionalesDAO.Class.php");
//Otras Librer�as
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosofendidoscarpetas/DomiciliosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosofendidoscarpetas/DomiciliosofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofenfendidosexhortos/OfenfendidosexhortosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofenfendidosexhortos/OfenfendidosexhortosDTO.Class.php");
//Antecedescarpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/antecedescarpetas/AntecedescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/antecedescarpetas/AntecedescarpetasDAO.Class.php");

class ImputadoscarpetasController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarImputadoscarpetas($ImputadoscarpetasDto) {
        $ImputadoscarpetasDto->setIdImputadoCarpeta(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getIdImputadoCarpeta()))));
        $ImputadoscarpetasDto->setIdCarpetaJudicial(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getIdCarpetaJudicial()))));
        $ImputadoscarpetasDto->setActivo(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getActivo()))));
        $ImputadoscarpetasDto->setFechaRegistro(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getFechaRegistro()))));
        $ImputadoscarpetasDto->setFechaActualizacion(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getFechaActualizacion()))));
        $ImputadoscarpetasDto->setDetenido(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getDetenido()))));
        $ImputadoscarpetasDto->setNombre(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getNombre()))));
        $ImputadoscarpetasDto->setPaterno(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getPaterno()))));
        $ImputadoscarpetasDto->setMaterno(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getMaterno()))));
        $ImputadoscarpetasDto->setRfc(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getRfc()))));
        $ImputadoscarpetasDto->setCurp(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getCurp()))));
        $ImputadoscarpetasDto->setCveTipoDetencion(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getCveTipoDetencion()))));
        $ImputadoscarpetasDto->setLegalDetencion(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getLegalDetencion()))));
        $ImputadoscarpetasDto->setCveGenero(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getCveGenero()))));
        $ImputadoscarpetasDto->setCveTipoReligion(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getCveTipoReligion()))));
        $ImputadoscarpetasDto->setAlias(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getAlias()))));
        $ImputadoscarpetasDto->setFechaDeclaracion(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getFechaDeclaracion()))));
        $ImputadoscarpetasDto->setCvePaisNacimiento(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getCvePaisNacimiento()))));
        $ImputadoscarpetasDto->setCveEstadoNacimiento(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getCveEstadoNacimiento()))));
        $ImputadoscarpetasDto->setCveMunicipioNacimiento(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getCveMunicipioNacimiento()))));
        $ImputadoscarpetasDto->setFechaNacimiento(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getFechaNacimiento()))));
        $ImputadoscarpetasDto->setEdad(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getEdad()))));
        $ImputadoscarpetasDto->setCveTipoPersona(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getCveTipoPersona()))));
        $ImputadoscarpetasDto->setNombreMoral(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getNombreMoral()))));
        $ImputadoscarpetasDto->setCveNivelInstruccion(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getCveNivelInstruccion()))));
        $ImputadoscarpetasDto->setCveEstadoCivil(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getCveEstadoCivil()))));
        $ImputadoscarpetasDto->setCveEspanol(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getCveEspanol()))));
        $ImputadoscarpetasDto->setCveAlfabetismo(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getCveAlfabetismo()))));
        $ImputadoscarpetasDto->setCveDialectoIndigena(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getCveDialectoIndigena()))));
        $ImputadoscarpetasDto->setCveTipoFamiliaLinguistica(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getCveTipoFamiliaLinguistica()))));
        $ImputadoscarpetasDto->setCveOcupacion(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getCveOcupacion()))));
        $ImputadoscarpetasDto->setCveInterprete(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getCveInterprete()))));
        $ImputadoscarpetasDto->setCveEstadoPsicofisico(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getCveEstadoPsicofisico()))));
        $ImputadoscarpetasDto->setFechaImputacion(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getFechaImputacion()))));
        $ImputadoscarpetasDto->setFechaControlDet(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getFechaControlDet()))));
        $ImputadoscarpetasDto->setFecTerminoCons(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getFecTerminoCons()))));
        $ImputadoscarpetasDto->setFecCierreInv(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getFecCierreInv()))));
        $ImputadoscarpetasDto->setEstadoNacimiento(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getEstadoNacimiento()))));
        $ImputadoscarpetasDto->setMunicipioNacimiento(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getMunicipioNacimiento()))));
        $ImputadoscarpetasDto->setRelacionMoral(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getRelacionMoral()))));
        $ImputadoscarpetasDto->setPersonaMoral(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getPersonaMoral()))));
        //$ImputadoscarpetasDto->setcveNacionalidad(strtoupper(str_ireplace("'","",trim($ImputadoscarpetasDto->getcveNacionalidad()))));
        $ImputadoscarpetasDto->setCveCereso(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getCveCereso()))));
        $ImputadoscarpetasDto->setCveEtapaProcesal(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getCveEtapaProcesal()))));
        $ImputadoscarpetasDto->setCveTipoReincidencia(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getCveTipoReincidencia()))));
        $ImputadoscarpetasDto->setIngresoMensual(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getIngresoMensual()))));
        $ImputadoscarpetasDto->setCveGrupoEdnico(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getCveGrupoEdnico()))));
        $ImputadoscarpetasDto->setTieneSobreseimiento(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getTieneSobreseimiento()))));
        $ImputadoscarpetasDto->setFechaSobreseimiento(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasDto->getFechaSobreseimiento()))));
        return $ImputadoscarpetasDto;
    }

    public function selectImputadoscarpetas($ImputadoscarpetasDto, $proveedor = null) {
        $ImputadoscarpetasDto = $this->validarImputadoscarpetas($ImputadoscarpetasDto);
        $ImputadoscarpetasDao = new ImputadoscarpetasDAO();
        $ImputadoscarpetasDto = $ImputadoscarpetasDao->selectImputadoscarpetas($ImputadoscarpetasDto, $proveedor);
        return $ImputadoscarpetasDto;
    }

    public function insertImputadoscarpetas($ImputadoscarpetasDto, $proveedor = null) {
        $ImputadoscarpetasDto = $this->validarImputadoscarpetas($ImputadoscarpetasDto);
        $ImputadoscarpetasDao = new ImputadoscarpetasDAO();
        $ImputadoscarpetasDto = $ImputadoscarpetasDao->insertImputadoscarpetas($ImputadoscarpetasDto, $proveedor);
        return $ImputadoscarpetasDto;
    }

    public function updateImputadoscarpetas($ImputadoscarpetasDto, $proveedor = null) {
        $ImputadoscarpetasDto = $this->validarImputadoscarpetas($ImputadoscarpetasDto);
        $ImputadoscarpetasDao = new ImputadoscarpetasDAO();
        //$tmpDto = new ImputadoscarpetasDTO();
        //$tmpDto = $ImputadoscarpetasDao->selectImputadoscarpetas($ImputadoscarpetasDto,$proveedor);
        //if($tmpDto!=""){//$ImputadoscarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $ImputadoscarpetasDto = $ImputadoscarpetasDao->updateImputadoscarpetas($ImputadoscarpetasDto, $proveedor);
        return $ImputadoscarpetasDto;
        //}
        //return "";
    }

    public function deleteImputadoscarpetas($ImputadoscarpetasDto, $proveedor = null) {
        $ImputadoscarpetasDto = $this->validarImputadoscarpetas($ImputadoscarpetasDto);
        $ImputadoscarpetasDao = new ImputadoscarpetasDAO();
        $ImputadoscarpetasDto = $ImputadoscarpetasDao->deleteImputadoscarpetas($ImputadoscarpetasDto, $proveedor);
        return $ImputadoscarpetasDto;
    }

    /*
     * Insertar datos generales de imputados carpetas
     */

    public function guardarImputado($ImputadoscarpetasDto, $proveedor = null) {
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;
        $indexCount = 0;
        $arrayAuxiliar = array();
        $listaResultados = array();

//        $validacionImputados = $this->validaImputado($ImputadoscarpetasDto);
//        if ($validacionImputados['status'] == "ok") {
        $imputadoscarpetasDao = new ImputadoscarpetasDAO();
        $tmp = new ImputadoscarpetasDTO();
        $ImputadoscarpetasDto = $this->validarImputadoscarpetas($ImputadoscarpetasDto);

        if ($ImputadoscarpetasDto->getCveTipoPersona() == 1) {

            if (!$validacion->text(1, 1, (string) $ImputadoscarpetasDto->getDetenido())) {
                $msg[] = array("No ingreso si esta detenido o no (S o N) en la posicion:" . $count);
                $error = true;
            }

            if (!$validacion->text(1, 1, (string) $ImputadoscarpetasDto->getRelacionMoral())) {
                $msg[] = array("No ingreso si tiene relacion moral (S o N) en la posicion:" . $count);
                $error = true;
            }

            if ($ImputadoscarpetasDto->getRelacionMoral() == 'S') {
                if (!$validacion->text(0, 500, (string) $ImputadoscarpetasDto->getPersonaMoral())) {
                    if ($ImputadoscarpetasDto->getPersonaMoral() == "") {
                        $msg[] = array("El nombre de la persona moral no es valido en la posicion:" . $count);
                        $error = true;
                    }
                }
            }

            if ($ImputadoscarpetasDto->getRfc() != "") {
                if (!$validacion->rfc((string) $ImputadoscarpetasDto->getRfc())) {
                    $msg[] = array("El rfc registrado no es un formato valido en la posicion:" . $count);
                    $error = true;
                }
            }

            if ($ImputadoscarpetasDto->getCurp() != "") {
                if (!$validacion->curp((string) $ImputadoscarpetasDto->getCurp())) {
                    $msg[] = array("La curp ingresada no es valida en la posicion:" . $count);
                    $error = true;
                }
            }

            if (!$validacion->num(1, 2, (int) $ImputadoscarpetasDto->getCveTipoDetencion())) {
                if ($ImputadoscarpetasDto->getCveTipoDetencion() <= 0 && $ImputadoscarpetasDto->getDetenido() == 'S') {
                    $msg[] = array("El tipo de detencion no es valido en la posicion:" . $count);
                    $error = true;
                }
            }

            if ($ImputadoscarpetasDto->getLegalDetencion() != "") {
                if (!$validacion->between(1, 2, (string) $ImputadoscarpetasDto->getLegalDetencion())) {
                    $msg[] = array("No se ha especificado si tiene detencion legal en la posicion:" . $count);
                    $error = true;
                }
            }

            if (!$validacion->num(1, 2, (int) $ImputadoscarpetasDto->getCveGenero())) {
                if ($ImputadoscarpetasDto->getCveGenero() <= 0) {
                    $msg[] = array("El genero seleccionado no es valido en la posicion:" . $count);
                    $error = true;
                }
            }

            if (!$validacion->between(0, 50, (string) $ImputadoscarpetasDto->getAlias())) {
                $msg[] = array("No ingreso un alias correcto en la posicion:" . $count);
                $error = true;
            }



            if (!$validacion->num(1, 3, (int) $ImputadoscarpetasDto->getCvePaisNacimiento())) {
                if ($ImputadoscarpetasDto->getCvePaisNacimiento() <= 0) {
                    $msg[] = array("El pais de nacimiento no es correcto en la posicion:" . $count);
                    $error = true;
                }
            }

            if ($ImputadoscarpetasDto->getCvePaisNacimiento() == 119) {
                if (!$validacion->num(1, 2, (int) $ImputadoscarpetasDto->getCveEstadoNacimiento())) {
                    if ($ImputadoscarpetasDto->getCveEstadoNacimiento() <= 0) {
                        $msg[] = array("El estado de nacimiento es requerido en la posicion:" . $count);
                        $error = true;
                    }
                }

                if (!$validacion->num(1, 5, (int) $ImputadoscarpetasDto->getCveMunicipioNacimiento())) {
                    if ($ImputadoscarpetasDto->getCveMunicipioNacimiento() <= 0) {
                        $msg[] = array("El municipio de nacimiento es requerido en la posicion:" . $count);
                        $error = true;
                    }
                }
            } else {
                if (!$validacion->text(1, 200, (string) $ImputadoscarpetasDto->getEstadoNacimiento())) {
                    if ($ImputadoscarpetasDto->getEstadoNacimiento() == "") {
                        $msg[] = array("El estado de nacimiento es requerido en la posicion:" . $count);
                        $error = true;
                    }
                }

                if (!$validacion->text(1, 200, (string) $ImputadoscarpetasDto->getMunicipioNacimiento())) {
                    if ($ImputadoscarpetasDto->getMunicipioNacimiento() == "") {
                        $msg[] = array("El municipio de nacimiento es requerido en la posicion:" . $count);
                        $error = true;
                    }
                }
            }
            if ($ImputadoscarpetasDto->getEdad() != "") {
                if (!$validacion->num(1, 3, (string) $ImputadoscarpetasDto->getEdad())) {
                    $msg[] = array("La edad ingresada no es valida en la posicion:" . $count);
                    $error = true;
                }
            }

            if (!$validacion->num(1, 2, (int) $ImputadoscarpetasDto->getCveNivelInstruccion())) {
                if ($ImputadoscarpetasDto->getCveNivelInstruccion() <= 0) {
                    $msg[] = array("El nivel de instruccion no es correcto en la posicion:" . $count);
                    $error = true;
                }
            }
            if (!$validacion->num(1, 2, (int) $ImputadoscarpetasDto->getCveEstadoCivil())) {
                if ($ImputadoscarpetasDto->getCveEstadoCivil() <= 0) {
                    $msg[] = array("El estado civil no es correcto en la posicion:" . $count);
                    $error = true;
                }
            }
            if (!$validacion->num(1, 2, (int) $ImputadoscarpetasDto->getCveEspanol())) {
                if ($ImputadoscarpetasDto->getCveEspanol() <= 0) {
                    $msg[] = array("No se identifica la clave para saber si habla espanol en la posicion:" . $count);
                    $error = true;
                }
            }
            if (!$validacion->num(1, 2, (int) $ImputadoscarpetasDto->getCveAlfabetismo())) {
                if ($ImputadoscarpetasDto->getCveAlfabetismo() <= 0) {
                    $msg[] = array("No se identifico una clave valida de alfabetismo en la posicion:" . $count);
                    $error = true;
                }
            }
            if (!$validacion->num(1, 2, (int) $ImputadoscarpetasDto->getCveDialectoIndigena())) {
                if ($ImputadoscarpetasDto->getCveDialectoIndigena() <= 0) {
                    $msg[] = array("No se identifico una clave valida de dialecto indigena en la posicion:" . $count);
                    $error = true;
                }
            }
            if (!$validacion->num(1, 2, (int) $ImputadoscarpetasDto->getCveTipoFamiliaLinguistica())) {
                if ($ImputadoscarpetasDto->getCveTipoFamiliaLinguistica() <= 0) {
                    $msg[] = array("No se identifico una clave valida de tipo de familia linguistica en la posicion:" . $count);
                    $error = true;
                }
            }
            if (!$validacion->num(1, 2, (int) $ImputadoscarpetasDto->getCveOcupacion())) {
                if ($ImputadoscarpetasDto->getCveOcupacion() <= 0) {
                    $msg[] = array("No se identifico una clave valida de tipo de ocupacion en la posicion:" . $count);
                    $error = true;
                }
            }
            if (!$validacion->num(1, 2, (int) $ImputadoscarpetasDto->getCveInterprete())) {
                if ($ImputadoscarpetasDto->getCveInterprete() <= 0) {
                    $msg[] = array("No se identifico una clave valida si requiere interprete en la posicion:" . $count);
                    $error = true;
                }
            }
            if (!$validacion->num(1, 2, (int) $ImputadoscarpetasDto->getCveEstadoPsicofisico())) {
                if ($ImputadoscarpetasDto->getCveEstadoPsicofisico() <= 0) {
                    $msg[] = array("No se identifico una clave valida del estado psicofisico en la posicion:" . $count);
                    $error = true;
                }
            }

            if ($ImputadoscarpetasDto->getDetenido() == "S") {
                if (!$validacion->num(1, 2, (int) $ImputadoscarpetasDto->getCveCereso())) {
                    if ($ImputadoscarpetasDto->getCveCereso() <= 0) {
                        $msg[] = array("No se identifico una clave valida para identificar el cereso en la posicion:" . $count);
                        $error = true;
                    }
                }
            }

            if (!$validacion->num(1, 2, (int) $ImputadoscarpetasDto->getCveGrupoEdnico())) {
                if ($ImputadoscarpetasDto->getCveGrupoEdnico() <= 0) {
                    $msg[] = array("No se identifico una clave valida para tipo de cve grupo etnico en la posicion:" . $count);
                    $error = true;
                }
            }
        } else if ($ImputadoscarpetasDto->getCveTipoPersona() == 2) {

            if ($ImputadoscarpetasDto->getRfc() != "") {
                if (!$validacion->rfc((string) $ImputadoscarpetasDto->getRfc())) {
                    $msg[] = array("El rfc registrado no es un formato valido en la posicion:" . $count);
                    $error = true;
                }
            }
        } else if ($ImputadoscarpetasDto->getCveTipoPersona() == 3) {
            if ($ImputadoscarpetasDto->getRfc() != "") {
                if (!$validacion->rfc((string) $ImputadoscarpetasDto->getRfc())) {
                    $msg[] = array("El rfc registrado no es un formato valido en la posicion:" . $count);
                    $error = true;
                }
            }
            if ($ImputadoscarpetasDto->getDetenido() == "S") {
                if (!$validacion->num(1, 2, (int) $ImputadoscarpetasDto->getCveCereso())) {
                    if ($ImputadoscarpetasDto->getCveCereso() <= 0) {
                        $msg[] = array("No se identifico una clave valida para identificar el cereso en la posicion:" . $count);
                        $error = true;
                    }
                }
            }
        }
        //print_r($msg);
        //echo count($msg) . "<br>";
        //echo $error;
        if ((!$error) && (0 <= count($msg))) {
            if ($ImputadoscarpetasDto->getCveTipoPersona() == 1) {
                $tmp->setNombre($ImputadoscarpetasDto->getNombre());
                $tmp->setPaterno($ImputadoscarpetasDto->getPaterno());
                $tmp->setMaterno($ImputadoscarpetasDto->getMaterno());
                $tmp->setActivo('S');
                $tmp->setIdCarpetaJudicial($ImputadoscarpetasDto->getIdCarpetaJudicial());
            } else if (($ImputadoscarpetasDto->getCveTipoPersona() == 2) || ($ImputadoscarpetasDto->getCveTipoPersona() == 3)) {
                $tmp->setNombreMoral($ImputadoscarpetasDto->getNombreMoral());
                $tmp->setActivo('S');
                $tmp->setIdCarpetaJudicial($ImputadoscarpetasDto->getIdCarpetaJudicial());
            }
            $tmp = $imputadoscarpetasDao->selectImputadoscarpetas($tmp, "", "");
            if ($tmp == "") {
                if ($ImputadoscarpetasDto->getDetenido() == "N") {
                    $ImputadoscarpetasDto->setCveTipoDetencion(4);
                    $ImputadoscarpetasDto->setCveCereso(1);
                    $ImputadoscarpetasDto->setCveTipoReincidencia(5);
                    $ImputadoscarpetasDto->setLegalDetencion('N');
                }
                if ($ImputadoscarpetasDto->getCveTipoPersona() == 2) {
                    $ImputadoscarpetasDto->setCveTipoDetencion(4);
                    $ImputadoscarpetasDto->setLegalDetencion('N');
                    $ImputadoscarpetasDto->setCveNivelInstruccion(11);
                    $ImputadoscarpetasDto->setCveEstadoCivil(3);
                    $ImputadoscarpetasDto->setCveEspanol(4);
                    $ImputadoscarpetasDto->setCveAlfabetismo(4);
                    $ImputadoscarpetasDto->setCveDialectoIndigena(3);
                    $ImputadoscarpetasDto->setCveTipoFamiliaLinguistica(15);
                    $ImputadoscarpetasDto->setCveOcupacion(15);
                    $ImputadoscarpetasDto->setCveInterprete(3);
                    $ImputadoscarpetasDto->setCveEstadoPsicofisico(5);
                    $ImputadoscarpetasDto->setCveCereso(1);
                    $ImputadoscarpetasDto->setCveGrupoEdnico(72);
                    $ImputadoscarpetasDto->setCveGenero(3);
                    $ImputadoscarpetasDto->setCveTipoReligion(8);
                } else if ($ImputadoscarpetasDto->getCveTipoPersona() == 3) {
                    $ImputadoscarpetasDto->setCveNivelInstruccion(11);
                    $ImputadoscarpetasDto->setCveEstadoCivil(3);
                    $ImputadoscarpetasDto->setCveEspanol(4);
                    $ImputadoscarpetasDto->setCveAlfabetismo(4);
                    $ImputadoscarpetasDto->setCveDialectoIndigena(3);
                    $ImputadoscarpetasDto->setCveTipoFamiliaLinguistica(15);
                    $ImputadoscarpetasDto->setCveOcupacion(15);
                    $ImputadoscarpetasDto->setCveInterprete(3);
                    $ImputadoscarpetasDto->setCveEstadoPsicofisico(5);
                    $ImputadoscarpetasDto->setCveGrupoEdnico(72);
                    $ImputadoscarpetasDto->setCveGenero(3);
                    $ImputadoscarpetasDto->setCveTipoReligion(8);
                }
                /*
                 * Consultar la etapa procesal de la carpeta en la que ser� registrado
                 * el imputado
                 */
                $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                $carpetasJudicialesDao = new CarpetasjudicialesDAO();
                $carpetasJudicialesDto->setIdCarpetaJudicial($ImputadoscarpetasDto->getIdCarpetaJudicial());
                $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                if ($carpetasJudicialesDto != "") {
                    $ImputadoscarpetasDto->setCveEtapaProcesal($carpetasJudicialesDto[0]->getCveEtapaProcesal());
                    $ImputadoscarpetasDto = $imputadoscarpetasDao->insertImputadoscarpetas($ImputadoscarpetasDto, "");
                    if ($ImputadoscarpetasDto != "") {
                        $resultado = array(
                            "imputado" => $ImputadoscarpetasDto[0]->getIdImputadoCarpeta(),
                            "idCarpetaJudicial" => $ImputadoscarpetasDto[0]->getIdCarpetaJudicial(),
                            "detenido" => $ImputadoscarpetasDto[0]->getDetenido(),
                            "nombre" => utf8_encode($ImputadoscarpetasDto[0]->getNombre()),
                            "paterno" => utf8_encode($ImputadoscarpetasDto[0]->getPaterno()),
                            "materno" => utf8_encode($ImputadoscarpetasDto[0]->getMaterno()),
                            "rfc" => $ImputadoscarpetasDto[0]->getRfc(),
                            "curp" => $ImputadoscarpetasDto[0]->getCurp(),
                            "cveTipoDetencion" => $ImputadoscarpetasDto[0]->getCveTipoDetencion(),
                            "LegalDetencion" => $ImputadoscarpetasDto[0]->getLegalDetencion(),
                            "cveGenero" => $ImputadoscarpetasDto[0]->getCveGenero(),
                            "cveTipoReligion" => $ImputadoscarpetasDto[0]->getCveTipoReligion(),
                            "alias" => utf8_encode($ImputadoscarpetasDto[0]->getAlias()),
                            "fechaDeclaracion" => $ImputadoscarpetasDto[0]->getFechaDeclaracion(),
                            "cvePaisNacimiento" => $ImputadoscarpetasDto[0]->getCvePaisNacimiento(),
                            "cveEstadoNacimiento" => $ImputadoscarpetasDto[0]->getCveEstadoNacimiento(),
                            "cveMunicipioNacimiento" => $ImputadoscarpetasDto[0]->getCveMunicipioNacimiento(),
                            "fechaNacimiento" => $ImputadoscarpetasDto[0]->getFechaNacimiento(),
                            "edad" => $ImputadoscarpetasDto[0]->getEdad(),
                            "cveTipoPersona" => $ImputadoscarpetasDto[0]->getCveTipoPersona(),
                            "nombreMoral" => utf8_encode($ImputadoscarpetasDto[0]->getNombreMoral()),
                            "cveNivelInstruccion" => $ImputadoscarpetasDto[0]->getCveNivelInstruccion(),
                            "cveEstadoCivil" => $ImputadoscarpetasDto[0]->getCveEstadoCivil(),
                            "cveEspanol" => $ImputadoscarpetasDto[0]->getCveEspanol(),
                            "cveAlfabetismo" => $ImputadoscarpetasDto[0]->getCveAlfabetismo(),
                            "cveDialectoIndigena" => $ImputadoscarpetasDto[0]->getCveDialectoIndigena(),
                            "cveTipoFamiliaLinguistica" => $ImputadoscarpetasDto[0]->getCveTipoFamiliaLinguistica(),
                            "cveOcupacion" => $ImputadoscarpetasDto[0]->getCveOcupacion(),
                            "cveInterprete" => $ImputadoscarpetasDto[0]->getCveInterprete(),
                            "cveEstadoPsicofisico" => $ImputadoscarpetasDto[0]->getCveEstadoPsicofisico(),
                            "fechaImputacion" => $ImputadoscarpetasDto[0]->getFechaImputacion(),
                            "fechaControlDet" => $ImputadoscarpetasDto[0]->getFechaControlDet(),
                            "fecTerminoCons" => $ImputadoscarpetasDto[0]->getFecTerminoCons(),
                            "fecCierreInv" => $ImputadoscarpetasDto[0]->getFecCierreInv(),
                            "estadoNacimiento" => utf8_encode($ImputadoscarpetasDto[0]->getEstadoNacimiento()),
                            "municipioNacimiento" => utf8_encode($ImputadoscarpetasDto[0]->getMunicipioNacimiento()),
                            "relacionMoral" => utf8_encode($ImputadoscarpetasDto[0]->getRelacionMoral()),
                            "personaMoral" => utf8_encode($ImputadoscarpetasDto[0]->getPersonaMoral()),
                            "cveCereso" => $ImputadoscarpetasDto[0]->getCveCereso(),
                            "cveEtapaProcesal" => $ImputadoscarpetasDto[0]->getCveEtapaProcesal(),
                            "cveTipoReincidencia" => $ImputadoscarpetasDto[0]->getCveTipoReincidencia(),
                            "ingresoMensual" => $ImputadoscarpetasDto[0]->getIngresoMensual(),
                            "cveGrupoEdnico" => $ImputadoscarpetasDto[0]->getCveGrupoEdnico(),
                            "TieneSobreseimiento" => $ImputadoscarpetasDto[0]->getTieneSobreseimiento(),
                            "FechaSobreseimiento" => $ImputadoscarpetasDto[0]->getFechaSobreseimiento()
                        );
                        array_push($listaResultados, $resultado);
                        /*
                         * Actualizar el numero de imputados de la carpeta judicial
                         */
                        $imputadosTmp = new ImputadoscarpetasDTO();
                        $imputadosTmp->setIdCarpetaJudicial($ImputadoscarpetasDto[0]->getIdCarpetaJudicial());
                        $imputadosTmp->setActivo("S");
                        $imputadosTmp = $imputadoscarpetasDao->selectImputadoscarpetas($imputadosTmp);
                        $numeroImputados = count($imputadosTmp);

                        $carpetaJudicialDto = new CarpetasjudicialesDTO();
                        $carpetaJudicialDao = new CarpetasjudicialesDAO();
                        $carpetaJudicialDto->setIdCarpetaJudicial($ImputadoscarpetasDto[0]->getIdCarpetaJudicial());
                        $carpetaJudicialDto->setNumImputados($numeroImputados);
                        $carpetaJudicialDto = $carpetaJudicialDao->updateCarpetasjudiciales($carpetaJudicialDto);
                        if ($carpetaJudicialDto != "") {
                            $error = false;
                            //$msg[] = array("Se actualiza el numero de imputados de la carpeta judicial: " . $numeroImputados);
                        } else {
                            $error = true;
                            $msg[] = array("Ocurrio un error al actualizar el numero de imputados de la carpeta judicial");
                        }
                    } else {
                        $msg[] = array("No se logro registrar el imputado debido a algun error en la transaccion ");
                        $error = true;
                    }
                } else {
                    $msg[] = array("No se logro obtener la etapa procesal del imputado");
                    $error = true;
                }
            } else {
                $msg[] = array("Ya existe un imputado con ese nombre dado de alta");
                $error = true;
            }

            if ((!$error)) {
                $result = array(
                    "status" => "Ok",
                    "totalCount" => count($listaResultados),
                    "msj" => $msg,
                    "resultados" => $listaResultados,
                );
                $bitacora = new BitacoramovimientosController();
                $bitacoraOfendido = $bitacora->agregar(168, 'Insercion tblimputadoscarpetas', 'txt', serialize($ImputadoscarpetasDto[0]), '', null);

                if (!count($bitacoraOfendido))
                    throw new Exception('no se pudo guardar la accion insertar imputado en bitacora');
            } else {
                $result = array("status" => "Error", "msj" => $msg);
                $result = ($result);
            }
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
//        } else {
//            $result = array("status" => "Error", "msj" => $validacionImputados['mensaje']);
//            $result = ($result);
//        }

        echo json_encode($result);
    }

    /*
     * Editar datos generales de imputados carpetas
     */

    public function modificarImputado($ImputadoscarpetasDto, $idCarpetaDestino = 0, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $fechaActual = "";
        $this->proveedor->execute("SELECT now() AS fechaActual");
        if (!$this->proveedor->error()) {
            if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                    $fechaActual = $row["fechaActual"];
                }
            }
        } else {
            $fechaActual = date("Y-m-d H:i:s");
        }
        $copiarDatos = false;
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;
        $indexCount = 0;
        $arrayAuxiliar = array();
        $listaResultados = array();
        $cveEtapaProcesalActual = 0;
        $cveEtapaProcesalFinal = $ImputadoscarpetasDto->getCveEtapaProcesal();
        $sobreseimiento = "";
        $imputadoscarpetasDao = new ImputadoscarpetasDAO();
        $bitacora = new BitacoramovimientosController();
        $tmp = new ImputadoscarpetasDTO();
        $ImputadoscarpetasDto = $this->validarImputadoscarpetas($ImputadoscarpetasDto);
        $imputadosTmp = new ImputadoscarpetasDTO();
        $imputadosTmp->setIdImputadoCarpeta($ImputadoscarpetasDto->getIdImputadoCarpeta());
        $imputadosTmp = $imputadoscarpetasDao->selectImputadoscarpetas($imputadosTmp, "", $this->proveedor);
        if ($imputadosTmp != "") {
            $cveEtapaProcesalActual = $imputadosTmp[0]->getCveEtapaProcesal();
        }
//        print_r($ImputadossolicitudesDto);
        if ($ImputadoscarpetasDto->getCveTipoPersona() == 1) {
            if (!$validacion->text(1, 1, (string) $ImputadoscarpetasDto->getDetenido())) {
                $msg[] = array("No ingreso si esta detenido o no (S o N) en la posicion:" . $count);
                $error = true;
            }

            if (!$validacion->text(1, 1, (string) $ImputadoscarpetasDto->getRelacionMoral())) {
                $msg[] = array("No ingreso si tiene relacion moral (S o N) en la posicion:" . $count);
                $error = true;
            }

            if ($ImputadoscarpetasDto->getRelacionMoral() == 'S') {
                if (!$validacion->text(0, 500, (string) $ImputadoscarpetasDto->getPersonaMoral())) {
                    if ($ImputadoscarpetasDto->getPersonaMoral() == "") {
                        $msg[] = array("El nombre de la persona moral no es valido en la posicion:" . $count);
                        $error = true;
                    }
                }
            }


            if ($ImputadoscarpetasDto->getRfc() != "") {
                if (!$validacion->rfc((string) $ImputadoscarpetasDto->getRfc())) {
                    $msg[] = array("El rfc registrado no es un formato valido en la posicion:" . $count);
                    $error = true;
                }
            }

            if ($ImputadoscarpetasDto->getCurp() != "") {
                if (!$validacion->curp((string) $ImputadoscarpetasDto->getCurp())) {
                    $msg[] = array("La curp ingresada no es valida en la posicion:" . $count);
                    $error = true;
                }
            }

            if (!$validacion->num(1, 2, (int) $ImputadoscarpetasDto->getCveGenero())) {
                if ($ImputadoscarpetasDto->getCveGenero() <= 0) {
                    $msg[] = array("El genero seleccionado no es valido en la posicion:" . $count);
                    $error = true;
                }
            }

            if (!$validacion->num(1, 3, (int) $ImputadoscarpetasDto->getCvePaisNacimiento())) {
                if ($ImputadoscarpetasDto->getCvePaisNacimiento() <= 0) {
                    $msg[] = array("El pais de nacimiento no es correcto en la posicion:" . $count);
                    $error = true;
                }
            }

            if ($ImputadoscarpetasDto->getCvePaisNacimiento() == 119) {
                if (!$validacion->num(1, 2, (int) $ImputadoscarpetasDto->getCveEstadoNacimiento())) {
                    if ($ImputadoscarpetasDto->getCveEstadoNacimiento() <= 0) {
                        $msg[] = array("El estado de nacimiento es requerido en la posicion:" . $count);
                        $error = true;
                    }
                }

                if (!$validacion->num(1, 5, (int) $ImputadoscarpetasDto->getCveMunicipioNacimiento())) {
                    if ($ImputadoscarpetasDto->getCveMunicipioNacimiento() <= 0) {
                        $msg[] = array("El municipio de nacimiento es requerido en la posicion:" . $count);
                        $error = true;
                    }
                }
            } else {
                if (!$validacion->text(1, 200, (string) $ImputadoscarpetasDto->getEstadoNacimiento())) {
                    if ($ImputadoscarpetasDto->getEstadoNacimiento() == "") {
                        $msg[] = array("El estado de nacimiento es requerido en la posicion:" . $count);
                        $error = true;
                    }
                }

                if (!$validacion->text(1, 200, (string) $ImputadoscarpetasDto->getMunicipioNacimiento())) {
                    if ($ImputadoscarpetasDto->getMunicipioNacimiento() == "") {
                        $msg[] = array("El municipio de nacimiento es requerido en la posicion:" . $count);
                        $error = true;
                    }
                }
            }
            if ($ImputadoscarpetasDto->getEdad() != "") {
                if (!$validacion->num(1, 3, (string) $ImputadoscarpetasDto->getEdad())) {
                    $msg[] = array("La edad ingresada no es valida en la posicion:" . $count);
                    $error = true;
                }
            }

            if (!$validacion->num(1, 2, (int) $ImputadoscarpetasDto->getCveNivelInstruccion())) {
                if ($ImputadoscarpetasDto->getCveNivelInstruccion() <= 0) {
                    $msg[] = array("El nivel de instruccion no es correcto en la posicion:" . $count);
                    $error = true;
                }
            }
            if (!$validacion->num(1, 2, (int) $ImputadoscarpetasDto->getCveEstadoCivil())) {
                if ($ImputadoscarpetasDto->getCveEstadoCivil() <= 0) {
                    $msg[] = array("El estado civil no es correcto en la posicion:" . $count);
                    $error = true;
                }
            }
            if (!$validacion->num(1, 2, (int) $ImputadoscarpetasDto->getCveEspanol())) {
                if ($ImputadoscarpetasDto->getCveEspanol() <= 0) {
                    $msg[] = array("No se identifica la clave para saber si habla espanol en la posicion:" . $count);
                    $error = true;
                }
            }
            if (!$validacion->num(1, 2, (int) $ImputadoscarpetasDto->getCveAlfabetismo())) {
                if ($ImputadoscarpetasDto->getCveAlfabetismo() <= 0) {
                    $msg[] = array("No se identifico una clave valida de alfabetismo en la posicion:" . $count);
                    $error = true;
                }
            }
            if (!$validacion->num(1, 2, (int) $ImputadoscarpetasDto->getCveDialectoIndigena())) {
                if ($ImputadoscarpetasDto->getCveDialectoIndigena() <= 0) {
                    $msg[] = array("No se identifico una clave valida de dialecto indigena en la posicion:" . $count);
                    $error = true;
                }
            }
            if (!$validacion->num(1, 2, (int) $ImputadoscarpetasDto->getCveTipoFamiliaLinguistica())) {
                if ($ImputadoscarpetasDto->getCveTipoFamiliaLinguistica() <= 0) {
                    $msg[] = array("No se identifico una clave valida de tipo de familia linguistica en la posicion:" . $count);
                    $error = true;
                }
            }
            if (!$validacion->num(1, 2, (int) $ImputadoscarpetasDto->getCveOcupacion())) {
                if ($ImputadoscarpetasDto->getCveOcupacion() <= 0) {
                    $msg[] = array("No se identifico una clave valida de tipo de ocupacion en la posicion:" . $count);
                    $error = true;
                }
            }
            if (!$validacion->num(1, 2, (int) $ImputadoscarpetasDto->getCveInterprete())) {
                if ($ImputadoscarpetasDto->getCveInterprete() <= 0) {
                    $msg[] = array("No se identifico una clave valida si requiere interprete en la posicion:" . $count);
                    $error = true;
                }
            }
            if (!$validacion->num(1, 2, (int) $ImputadoscarpetasDto->getCveEstadoPsicofisico())) {
                if ($ImputadoscarpetasDto->getCveEstadoPsicofisico() <= 0) {
                    $msg[] = array("No se identifico una clave valida del estado psicofisico en la posicion:" . $count);
                    $error = true;
                }
            }

            if ($ImputadoscarpetasDto->getDetenido() == "S") {
                if (!$validacion->num(1, 2, (int) $ImputadoscarpetasDto->getCveCereso())) {
                    if ($ImputadoscarpetasDto->getCveCereso() <= 0) {
                        $msg[] = array("No se identifico una clave valida para identificar el cereso en la posicion:" . $count);
                        $error = true;
                    }
                }
            }

            if (!$validacion->num(1, 2, (int) $ImputadoscarpetasDto->getCveGrupoEdnico())) {
                if ($ImputadoscarpetasDto->getCveGrupoEdnico() <= 0) {
                    $msg[] = array("No se identifico una clave valida para tipo de reincidencia en la posicion:" . $count);
                    $error = true;
                }
            }
            if ($cveEtapaProcesalFinal != $cveEtapaProcesalActual) {
                if ($idCarpetaDestino <= 0) {
                    $msg[] = array("Se debe indicar una carpeta judicial destino para cambiar de etapa procesal al imputado:" . $count);
                    $error = true;
                }
            }
        } else if ($ImputadoscarpetasDto->getCveTipoPersona() == 2) {


            if ($ImputadoscarpetasDto->getRfc() != "") {
                if (!$validacion->rfc((string) $ImputadoscarpetasDto->getRfc())) {
                    $msg[] = array("El rfc registrado no es un formato valido en la posicion:" . $count);
                    $error = true;
                }
            }
            if ($cveEtapaProcesalFinal != $cveEtapaProcesalActual) {
                if ($idCarpetaDestino <= 0) {
                    $msg[] = array("Se debe indicar una carpeta judicial destino para cambiar de etapa procesal al imputado:" . $count);
                    $error = true;
                }
            }
        } else if ($ImputadoscarpetasDto->getCveTipoPersona() == 3) {
            if ($ImputadoscarpetasDto->getRfc() != "") {
                if (!$validacion->rfc((string) $ImputadoscarpetasDto->getRfc())) {
                    $msg[] = array("El rfc registrado no es un formato valido en la posicion:" . $count);
                    $error = true;
                }
            }
            if ($ImputadoscarpetasDto->getDetenido() == "S") {
                if (!$validacion->num(1, 2, (int) $ImputadoscarpetasDto->getCveCereso())) {
                    if ($ImputadoscarpetasDto->getCveCereso() <= 0) {
                        $msg[] = array("No se identifico una clave valida para identificar el cereso en la posicion:" . $count);
                        $error = true;
                    }
                }
            }
            if ($cveEtapaProcesalFinal != $cveEtapaProcesalActual) {
                if ($idCarpetaDestino <= 0) {
                    $msg[] = array("Se debe indicar una carpeta judicial destino para cambiar de etapa procesal al imputado:" . $count);
                    $error = true;
                }
            }
        }
        //print_r($msg);
        if ((!$error) && (0 <= count($msg))) {
            if ($ImputadoscarpetasDto->getDetenido() == "N") {
                $ImputadoscarpetasDto->setCveTipoDetencion(4);
                $ImputadoscarpetasDto->setLegalDetencion("N");
                $ImputadoscarpetasDto->setCveCereso(1);
                $ImputadoscarpetasDto->setCveTipoReincidencia(5);
            }
            if ($ImputadoscarpetasDto->getCveTipoPersona() == 2) {
                $ImputadoscarpetasDto->setCveTipoDetencion(4);
                $ImputadoscarpetasDto->setLegalDetencion("N");
                $ImputadoscarpetasDto->setCveNivelInstruccion(11);
                $ImputadoscarpetasDto->setCveEstadoCivil(3);
                $ImputadoscarpetasDto->setCveEspanol(4);
                $ImputadoscarpetasDto->setCveAlfabetismo(4);
                $ImputadoscarpetasDto->setCveDialectoIndigena(3);
                $ImputadoscarpetasDto->setCveTipoFamiliaLinguistica(15);
                $ImputadoscarpetasDto->setCveOcupacion(15);
                $ImputadoscarpetasDto->setCveInterprete(3);
                $ImputadoscarpetasDto->setCveEstadoPsicofisico(5);
                $ImputadoscarpetasDto->setCveCereso(1);
                $ImputadoscarpetasDto->setCveGrupoEdnico(72);
                $ImputadoscarpetasDto->setCveTipoReincidencia(5);
                $ImputadoscarpetasDto->setCveTipoFamiliaLinguistica(15);
                $ImputadoscarpetasDto->setCveGenero(3);
                $ImputadoscarpetasDto->setCveTipoReligion(8);
            }
            if ($ImputadoscarpetasDto->getCveTipoPersona() == 3) {
                $ImputadoscarpetasDto->setCveNivelInstruccion(11);
                $ImputadoscarpetasDto->setCveEstadoCivil(3);
                $ImputadoscarpetasDto->setCveEspanol(4);
                $ImputadoscarpetasDto->setCveAlfabetismo(4);
                $ImputadoscarpetasDto->setCveDialectoIndigena(3);
                $ImputadoscarpetasDto->setCveTipoFamiliaLinguistica(15);
                $ImputadoscarpetasDto->setCveOcupacion(15);
                $ImputadoscarpetasDto->setCveInterprete(3);
                $ImputadoscarpetasDto->setCveEstadoPsicofisico(5);
                $ImputadoscarpetasDto->setCveGrupoEdnico(72);
                $ImputadoscarpetasDto->setCveTipoFamiliaLinguistica(15);
                $ImputadoscarpetasDto->setCveGenero(3);
                $ImputadoscarpetasDto->setCveTipoReligion(8);
            }
//            if($ImputadoscarpetasDto->getTieneSobreseimiento() == "S"){
//                $fechaSobreseimiento = date("Y-m-d");
//                $ImputadoscarpetasDto->setFechaSobreseimiento($fechaSobreseimiento);
//            }
            /*
             * Si se cambia la etapa procesal del imputado, copiar los datos a la 
             * carpeta judicial destino
             */
            if (($cveEtapaProcesalFinal != $cveEtapaProcesalActual) && $idCarpetaDestino > 0) {
                //Consultar los datos de la carpeta judicial origen
                $carpetaOrigenDto = new CarpetasjudicialesDTO();
                $carpetasJudicialesDao = new CarpetasjudicialesDAO();
                $carpetaOrigenDto->setIdCarpetaJudicial($imputadosTmp[0]->getIdCarpetaJudicial());
                $carpetaOrigenDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetaOrigenDto, '', $this->proveedor);
                if ( $carpetaOrigenDto == "" ) {
                    $error = true;
                    $msg[] = array("Ocurrio un error al consultar los datos de la carpeta judicial origen");
                }
                //Consultar los datos de la carpeta judicial destino
                $carpetaDestinoDto = new CarpetasjudicialesDTO();
                $carpetasJudicialesDao = new CarpetasjudicialesDAO();
                $carpetaDestinoDto->setIdCarpetaJudicial($idCarpetaDestino);
                $carpetaDestinoDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetaDestinoDto, '', $this->proveedor);
                if ( $carpetaDestinoDto == "" ) {
                    $error = true;
                    $msg[] = array("Ocurrio un error al consultar los datos de la carpeta judicial destino");
                }
                if ( (int)$carpetaDestinoDto[0]->getCveTipoCarpeta() > 5 ) {
                    $error = true;
                    $msg[] = array("Tipo de carpeta destino no valido");
                } else if ( (int)$carpetaDestinoDto[0]->getCveTipoCarpeta() < (int)$carpetaOrigenDto[0]->getCveTipoCarpeta() ) {
                    $error = true;
                    $msg[] = array("No se puede regresar a los imputados a una etapa procesal anterior, favor de verificar");
                } else if ( (int)$carpetaOrigenDto[0]->getCveTipoCarpeta() == 1 && (int)$carpetaDestinoDto[0]->getCveTipoCarpeta() > 2 ) {
                    $error = true;
                    $msg[] = array("No se puede copiar a un imputado correspondiente a una carpeta Auxiliar hacia una carpeta de Juicio o Ejecucion directamente, favor de verificar");
                }
//                if ($cveEtapaProcesalActual == 1 && $cveEtapaProcesalFinal == 3) {
//                    $error = true;
//                    $msg[] = array("No se puede copiar a un imputado de Etapa Auxiliar a Etapa de Juicio directamente, favor de verificar");
//                } else {
                else {
                    if ( (int)$carpetaDestinoDto[0]->getCveTipoCarpeta() == 5 ) {
                        /*
                         * Si se desea mover al imputado hacia la etapa procesal de
                         * ejecucion de sentecnias, verificar que no haya mas de
                         * un imputado en la carpeta a donde se requiere mover al imputado
                         */
                        $imputadosCarpetasAux = new ImputadoscarpetasDTO();
                        $imputadosCarpetasAux->setIdCarpetaJudicial($carpetaDestinoDto[0]->getIdCarpetaJudicial());
                        $imputadosCarpetasAux->setActivo('S');
                        $imputadosCarpetasAux = $imputadoscarpetasDao->selectImputadoscarpetas($imputadosCarpetasAux, "", $this->proveedor);
                        if ( $imputadosCarpetasAux == "" ) {
                            $copiarDatos = true;
                        } else {
                            $copiarDatos = false;
                            if ( $imputadosCarpetasAux[0]->getNombre() == $imputadosTmp[0]->getNombre() &&
                                 $imputadosCarpetasAux[0]->getPaterno() == $imputadosTmp[0]->getPaterno() &&
                                 $imputadosCarpetasAux[0]->getMaterno() == $imputadosTmp[0]->getMaterno() &&
                                 $imputadosCarpetasAux[0]->getNombreMoral() == $imputadosTmp[0]->getNombreMoral() ){
                                /*
                                 * El imputado ya existe en la causa de expediente, actualziar
                                 * la etapa procesal del imputado origen
                                 */
                                $tmpImputado = new ImputadoscarpetasDTO();
                                $tmpImputado->setIdImputadoCarpeta($imputadosTmp[0]->getIdImputadoCarpeta());
                                $tmpImputado->setCveEtapaProcesal($carpetaDestinoDto[0]->getCveEtapaProcesal());
                                $tmpImputado->setFechaActualizacion(date("Y-m-d H:i:s"));
                                $tmpImputado = $imputadoscarpetasDao->updateImputadoscarpetas($tmpImputado, $this->proveedor);
                                if ( $tmpImputado != "" ) {
                                    /*
                                    * Validar si todos los imputados se encuentran en una etapa procesal
                                    * posterior a la etapa de la carpeta origen, o si tienen sobreseimiento
                                    * se procede a terminar la carpeta origen
                                    */
                                    $imputadosDto = new ImputadoscarpetasDTO();

                                    $imputadosDto->setIdCarpetaJudicial($imputadosTmp[0]->getIdCarpetaJudicial());
                                    $imputadosDto->setCveEtapaProcesal($carpetaOrigenDto[0]->getCveEtapaProcesal());
                                    $imputadosDto->setActivo("S");
                                    $imputadosDto->setTieneSobreseimiento("N");
                                    $imputadosDto = $imputadoscarpetasDao->selectImputadoscarpetas($imputadosDto, "", $this->proveedor);
                                    if ($imputadosDto != "") {
                                        $totalImputados = count($imputadosDto);
                                    } else {
                                        $totalImputados = 0;
                                    }
                                   /*
                                    * si todos los imputados de la carpeta se encuentran en una etapa procesal diferente
                                    * o tienen sobreseimiento, terminar la carpeta judicial
                                    */

                                    if ($totalImputados == 0) {
                                        $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                                        $carpetasJudicialesDto->setIdCarpetaJudicial($imputadosTmp[0]->getIdCarpetaJudicial());
                                        $carpetasJudicialesDto->setFechaActualizacion(date("Y-m-d H:i:s"));
                                        $carpetasJudicialesDto->setCveEstatusCarpeta(2);
                                        $carpetasJudicialesDto->setFechaTermino(date("Y-m-d H:i:s"));
                                        $carpetasJudicialesDto = $carpetasJudicialesDao->updateCarpetasjudiciales($carpetasJudicialesDto, $this->proveedor);
                                        if ( $carpetasJudicialesDto != "" ) {
                                            $error = false;
                                            $msg[] = array("Se termina la carpeta judicial debido a que todos los imputados se encuentran en una Etapa Procesal Posterior o cuentan con Sobreseimiento");
                                        } else {
                                            $error = true;
                                            $msg[] = array("Ocurrio un error al terminar la carpeta judicial");
                                        }
                                    }
                                } else {
                                    $error = true;
                                    $msg[] = array("Ocurrio un error al actulizar la etapa procesal del imputado");
                                }
                            } else {
                                $error = true;
                                $msg[] = array("No se puede mover al imputado hacia la etapa procesal debido a que ya existe un imputado en dicha etapa (solo puede haber un imputado por Expediente)");
                            }
                        }
                    } else {
                        $copiarDatos = true;
                    }
                    if ( $copiarDatos ) {
                        $param['etapaProcesal'] = "S";
                        $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                        $carpetasJudicialesDto->setIdCarpetaJudicial($idCarpetaDestino);
                        $imputadoDto = new ImputadoscarpetasDTO();
                        $imputadoDto->setIdImputadoCarpeta($ImputadoscarpetasDto->getIdImputadoCarpeta());
                        $carpetasJudicialesController = new CarpetasjudicialesController();
                        $copiar = $carpetasJudicialesController->copiarCarpetasJudiciales($carpetasJudicialesDto, $imputadoDto, $this->proveedor, $param);
                        if ($copiar) {
                            $msg[] = array("Se copia los datos del imputado hacia la carpeta destino seleccionada");
                            $error = false;
                            $cveConclusion = 0;
                            $observaciones = "";
                            /*
                             * Eliminar las terminaciones del imputado origen
                             */
                            $imputadosConclusionesTmp = new ImputadoscarpetasconclusionesDTO();
                            $imputadosConclusionesTmp->setIdImputadoCarpeta($ImputadoscarpetasDto->getIdImputadoCarpeta());
                            $imputadosConclusionesTmp->setActivo("S");
                            $imputadosCarpetasConclusionesDao = new ImputadoscarpetasconclusionesDAO();
                            $imputadosConclusionesTmp = $imputadosCarpetasConclusionesDao->selectImputadoscarpetasconclusiones($imputadosConclusionesTmp, "", $this->proveedor);
                            if ($imputadosConclusionesTmp != "") {
                                foreach ($imputadosConclusionesTmp as $conclusion) {
                                    $conclusionesDto = new ImputadoscarpetasconclusionesDTO();
                                    $conclusionesDto->setIdImputadoCarpetaConclusion($conclusion->getIdImputadoCarpetaConclusion());
                                    $conclusionesDto->setActivo("N");
                                    $conclusionesDto = $imputadosCarpetasConclusionesDao->updateImputadoscarpetasconclusiones($conclusionesDto, $this->proveedor);
                                    if ($conclusionesDto != "") {
                                        $error = false;
                                    } else {
                                        $error = true;
                                    }
                                    if ($error) {
                                        break;
                                    }
                                }
                            }
                            /*
                             * Agregar la terminacion correspondiente al imputado
                             */
                            if ($cveEtapaProcesalActual >= 1 && $cveEtapaProcesalFinal > 2) {
                                if ($cveEtapaProcesalActual == 1 && $cveEtapaProcesalFinal == 4) {
                                    $cveConclusion = 3;
                                    $observaciones = "PROCEDIMIENTO ABREVIADO";
                                } else if ($cveEtapaProcesalActual == 2 && $cveEtapaProcesalFinal == 3) {
                                    $cveConclusion = 2;
                                    $observaciones = "CAMBIO A JUICIO";
                                } else if ($cveEtapaProcesalActual == 3 && $cveEtapaProcesalFinal == 4) {
                                    $cveConclusion = 9;
                                    $observaciones = "SENTENCIA";
                                }
                                if ($cveConclusion > 0) {

                                    if (!$error) {
                                        $imputadosCarpetasConclusionesDto = new ImputadoscarpetasconclusionesDTO();
                                        $imputadosCarpetasConclusionesDto->setIdImputadoCarpeta($ImputadoscarpetasDto->getIdImputadoCarpeta());
                                        $imputadosCarpetasConclusionesDto->setCveConclusion($cveConclusion);
                                        $imputadosCarpetasConclusionesDto->setMontoTotalAcordado(0);
                                        $imputadosCarpetasConclusionesDto->setMontoTotalPagado(0);
                                        $imputadosCarpetasConclusionesDto->setObservaciones($observaciones);
                                        $imputadosCarpetasConclusionesDto->setActivo("S");
                                        $imputadosCarpetasConclusionesDto = $imputadosCarpetasConclusionesDao->insertImputadoscarpetasconclusiones($imputadosCarpetasConclusionesDto, $this->proveedor);
                                        if ($imputadosCarpetasConclusionesDto != "") {
                                            $error = false;
                                            $msg[] = array("Se agrega la conclusion al imputado");
                                        } else {
                                            $error = true;
                                            $msg[] = array("Ocurrio un error al agrega la conclusion al imputado");
                                        }
                                    }
                                }
                            }

                            /*
                             * Verificar si la carpeta judicial debe terminarse debido al
                             * sobreseimiento o cambio de etapa procesal del imputado
                             */
                            $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                            $carpetasJudicialesDto->setIdCarpetaJudicial($ImputadoscarpetasDto->getIdCarpetaJudicial());
                            if ($this->validaSobreseimiento($carpetasJudicialesDto, $this->proveedor)) {
                                $msg[] = array("Se ha terminado la carpeta judicial debido a que todos los imputados tienen sobreseimiento o se encuentran en una etapa posterior");
                            }


                        } else {
                            $msg[] = array("Ocurrio un error al copiar los datos del imputado hacia la carpeta seleccionada");
                        }
                    }
                    
                }
            } else {
                /*
                 * Si la etapa procesal no cambia, actualizar los datos del imputado
                 * varificar previamente si el imputado tenia sobreseimiento, si se
                 * le quita el sobreseimiento y la carpeta judicial estaba cerrada, aperturar la carpeta
                 */
                $imputadoTmp = new ImputadoscarpetasDTO();
                $imputadoTmp->setIdCarpetaJudicial($ImputadoscarpetasDto->getIdCarpetaJudicial());
                $imputadoTmp->setIdImputadoCarpeta($ImputadoscarpetasDto->getIdImputadoCarpeta());
                $imputadoTmp->setActivo("S");
                $imputadoTmp = $imputadoscarpetasDao->selectImputadoscarpetas($imputadoTmp, "", $this->proveedor);
                if ($imputadoTmp != "") {
                    $sobreseimiento = $imputadoTmp[0]->getTieneSobreseimiento();
                }

                $ImputadoscarpetasDto = $imputadoscarpetasDao->modificarImputadoscarpetas($ImputadoscarpetasDto, $this->proveedor);
                if ($ImputadoscarpetasDto != "") {
                    $resultado = array(
                        "imputado" => $ImputadoscarpetasDto[0]->getIdImputadoCarpeta(),
                        "idCarpetaJudicial" => $ImputadoscarpetasDto[0]->getIdCarpetaJudicial(),
                        "detenido" => $ImputadoscarpetasDto[0]->getDetenido(),
                        "nombre" => utf8_encode($ImputadoscarpetasDto[0]->getNombre()),
                        "paterno" => utf8_encode($ImputadoscarpetasDto[0]->getPaterno()),
                        "materno" => utf8_encode($ImputadoscarpetasDto[0]->getMaterno()),
                        "rfc" => $ImputadoscarpetasDto[0]->getRfc(),
                        "curp" => $ImputadoscarpetasDto[0]->getCurp(),
                        "cveTipoDetencion" => $ImputadoscarpetasDto[0]->getCveTipoDetencion(),
                        "LegalDetencion" => $ImputadoscarpetasDto[0]->getLegalDetencion(),
                        "cveGenero" => $ImputadoscarpetasDto[0]->getCveGenero(),
                        "cveTipoReligion" => $ImputadoscarpetasDto[0]->getCveTipoReligion(),
                        "alias" => utf8_encode($ImputadoscarpetasDto[0]->getAlias()),
                        "fechaDeclaracion" => $ImputadoscarpetasDto[0]->getFechaDeclaracion(),
                        "cvePaisNacimiento" => $ImputadoscarpetasDto[0]->getCvePaisNacimiento(),
                        "cveEstadoNacimiento" => $ImputadoscarpetasDto[0]->getCveEstadoNacimiento(),
                        "cveMunicipioNacimiento" => $ImputadoscarpetasDto[0]->getCveMunicipioNacimiento(),
                        "fechaNacimiento" => $ImputadoscarpetasDto[0]->getFechaNacimiento(),
                        "edad" => $ImputadoscarpetasDto[0]->getEdad(),
                        "cveTipoPersona" => $ImputadoscarpetasDto[0]->getCveTipoPersona(),
                        "nombreMoral" => utf8_encode($ImputadoscarpetasDto[0]->getNombreMoral()),
                        "cveNivelInstruccion" => $ImputadoscarpetasDto[0]->getCveNivelInstruccion(),
                        "cveEstadoCivil" => $ImputadoscarpetasDto[0]->getCveEstadoCivil(),
                        "cveEspanol" => $ImputadoscarpetasDto[0]->getCveEspanol(),
                        "cveAlfabetismo" => $ImputadoscarpetasDto[0]->getCveAlfabetismo(),
                        "cveDialectoIndigena" => $ImputadoscarpetasDto[0]->getCveDialectoIndigena(),
                        "cveTipoFamiliaLinguistica" => $ImputadoscarpetasDto[0]->getCveTipoFamiliaLinguistica(),
                        "cveOcupacion" => $ImputadoscarpetasDto[0]->getCveOcupacion(),
                        "cveInterprete" => $ImputadoscarpetasDto[0]->getCveInterprete(),
                        "cveEstadoPsicofisico" => $ImputadoscarpetasDto[0]->getCveEstadoPsicofisico(),
                        "fechaImputacion" => $ImputadoscarpetasDto[0]->getFechaImputacion(),
                        "fechaControlDet" => $ImputadoscarpetasDto[0]->getFechaControlDet(),
                        "fecTerminoCons" => $ImputadoscarpetasDto[0]->getFecTerminoCons(),
                        "fecCierreInv" => $ImputadoscarpetasDto[0]->getFecCierreInv(),
                        "estadoNacimiento" => utf8_encode($ImputadoscarpetasDto[0]->getEstadoNacimiento()),
                        "municipioNacimiento" => utf8_encode($ImputadoscarpetasDto[0]->getMunicipioNacimiento()),
                        "relacionMoral" => utf8_encode($ImputadoscarpetasDto[0]->getRelacionMoral()),
                        "personaMoral" => utf8_encode($ImputadoscarpetasDto[0]->getPersonaMoral()),
                        "cveCereso" => $ImputadoscarpetasDto[0]->getCveCereso(),
                        "cveEtapaProcesal" => $ImputadoscarpetasDto[0]->getCveEtapaProcesal(),
                        "ingresoMensual" => $ImputadoscarpetasDto[0]->getIngresoMensual(),
                        "cveGrupoEdnico" => $ImputadoscarpetasDto[0]->getCveGrupoEdnico(),
                        "TieneSobreseimiento" => $ImputadoscarpetasDto[0]->getTieneSobreseimiento(),
                        "FechaSobreseimiento" => $ImputadoscarpetasDto[0]->getFechaSobreseimiento()
                    );
                    array_push($listaResultados, $resultado);
                    
                    /*
                     * Verificar si todos los imputados pertenecientes a la carpeta
                     * judicial tienen sobreseimiento para proceder a terminar
                     * dicha carpeta
                     */
                    $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                    $carpetasJudicialesDto->setIdCarpetaJudicial($ImputadoscarpetasDto[0]->getIdCarpetaJudicial());
                    if ($this->validaSobreseimiento($carpetasJudicialesDto, $this->proveedor)) {
                        $msg[] = array("Se ha terminado la carpeta judicial debido a que todos los imputados tienen sobreseimiento o se encuentran en otra etapa procesal");
                    }
                    /*
                     * Verificar si se le quita el sobreseimiento a algun imputado
                     * se tiene que aperturar la carpeta judicial
                     */
                    if ($sobreseimiento == "S" && $ImputadoscarpetasDto[0]->getTieneSobreseimiento() == "N") {
                        /*
                         * Verificar el estatus actual de la carpeta, si esta Terminada y 
                         * se le quita el sobreseimiento a algun imputado, aperturar
                         * la carpeta
                         */
                        $carpetasDao = new CarpetasjudicialesDAO();
                        $carpetasTmp = new CarpetasjudicialesDTO();
                        $carpetasTmp->setIdCarpetaJudicial($ImputadoscarpetasDto[0]->getIdCarpetaJudicial());
                        $carpetasTmp = $carpetasDao->selectCarpetasjudiciales($carpetasTmp, "", $this->proveedor);
                        if ($carpetasTmp != "") {
                            if ((int) $carpetasTmp[0]->getCveEstatusCarpeta() == 2) {
                                $carpetasJudicialesTmp = new CarpetasjudicialesDTO();
                                $carpetasJudicialesTmp->setIdCarpetaJudicial($ImputadoscarpetasDto[0]->getIdCarpetaJudicial());
                                $carpetasJudicialesTmp->setCveEstatusCarpeta(1);
                                $carpetasJudicialesTmp = $carpetasDao->aperturarCarpeta($carpetasJudicialesTmp, $this->proveedor);
                                if ($carpetasJudicialesTmp != "") {
                                    $error = false;
                                    $msg[] = array("Se apertura la carpeta judicial ya que se le quit&oacute; el sobreseimiento al imputado");
                                    //                            $bitacoraOfendido = $bitacora->agregar(169, 'Modificacion tblcarpetasjudiciales', 'txt', serialize($carpetasJudicialesTmp[0]), '', $this->proveedor);
                                    //                            if (!count($bitacoraOfendido)) throw new Exception('no se pudo guardar la accion actualizar carpetas judiciales en bitacora');
                                } else {
                                    $error = true;
                                    $msg[] = array("Ocurri&oacute; un error al aperturar la carpeta");
                                }
                            }
                        } else {
                            $error = true;
                            $msg[] = array("Ocurri&oacute; un error al consultar el estatus de la carpeta judicial");
                        }
                    }

                    $bitacoraOfendido = $bitacora->agregar(169, 'Modificacion tblimputadoscarpetas', 'txt', serialize($ImputadoscarpetasDto[0]), '', $this->proveedor);

                    if (!count($bitacoraOfendido))
                        throw new Exception('no se pudo guardar la accion actualizar imputado en bitacora');
                } else {
                    $msg[] = array("No se logro modificar el imputado debido a algun error en la transaccion ");
                    $error = true;
                }
            }

            if ((!$error)) {
                //var_dump($ImputadoscarpetasDto[0]);
                $result = array(
                    "status" => "Ok",
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

    /*
     * Borrado logico de imputados carpetas y sus registros realacionados
     */

    public function eliminaImputado($imputadoscarpetasDto, $proveedor = null, $actualizarCarpeta = 0) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute("BEGIN");
        } else {
            $this->proveedor = $proveedor;
        }


        $imputadosArrayReturn = array();
        $error = false;
        $msg = array();
        $index = 1;
        $count = 0;

        $imputadoscarpetasDao = new ImputadoscarpetasDAO();
        $rsImputados = new ImputadoscarpetasDTO();
        $imputadoscarpetas = new ImputadoscarpetasDTO();

        $imputadoscarpetasDto->setActivo('N');
        $imputadoscarpetasDto = $this->validarImputadoscarpetas($imputadoscarpetasDto);

        $imputadoscarpetas->setIdImputadoCarpeta($imputadoscarpetasDto->getIdImputadoCarpeta());
        $imputadoscarpetas->setActivo('S');
        $rsImputados = $imputadoscarpetasDao->selectImputadoscarpetas($imputadoscarpetas, "", $this->proveedor);
        //echo count($rsImputados);
        if ($rsImputados != "") {
            if ($actualizarCarpeta == 0) {
                /*
                 * Eliminar los datos del imputado sin actualizar el numero de
                 * imputados de la carpeta judicial
                 */
                $eliminarImputadoscarpetasDto = $imputadoscarpetasDao->eliminarImputadoByIdImputadoCarpeta($imputadoscarpetasDto, $this->proveedor);

                if ($eliminarImputadoscarpetasDto) {
                    $telefonosimputadoscarpetasDao = new TelefonosimputadoscarpetasDAO();
                    $telefonosimputadoscarpetasDto = new TelefonosimputadoscarpetasDTO();
                    $telefonoso = new TelefonosimputadoscarpetasDTO();
                    $telefonosimputadoscarpetasDto->setIdImputadoCarpeta($rsImputados[0]->getIdImputadoCarpeta());
                    $rsTelefonosimputadoscarpetasDto = $telefonosimputadoscarpetasDao->selectTelefonosimputadoscarpetas($telefonosimputadoscarpetasDto, "", $this->proveedor);
                    if ($rsTelefonosimputadoscarpetasDto != "") {
                        foreach ($rsTelefonosimputadoscarpetasDto as $arrayTel) {
                            $telefonoso->setIdTelefonoImputadosCarpeta($arrayTel->getIdTelefonoImputadosCarpeta());
                            $telefonoso->setActivo('N');
                            $eliminarTelefonosImputadoscarpetas = $telefonosimputadoscarpetasDao->eliminarTelefonosimputadoscarpetasByIdImputado($telefonoso, $this->proveedor);
                            if (!$eliminarTelefonosImputadoscarpetas) {
                                $msg[] = array("No se encontraron telefonos en la posicion:" . $index);
                                $error = true;
                            }
                        }
                    }
                }

                $defensoresimputadosDao = new DefensoresimputadoscarpetasDAO();
                $defensoresimputadosDto = new DefensoresimputadoscarpetasDTO();
                $defensores = new DefensoresimputadoscarpetasDTO();
                $defensoresimputadosDto->setIdImputadoCarpeta($rsImputados[0]->getIdImputadoCarpeta());
                $rsDefensoresimputadosDto = $defensoresimputadosDao->selectDefensoresimputadoscarpetas($defensoresimputadosDto, "", $this->proveedor);
                if ($rsDefensoresimputadosDto != "") {
                    foreach ($rsDefensoresimputadosDto as $arrayDef) {
                        $defensores->setIdDefensorImputadoCarpeta($arrayDef->getIdDefensorImputadoCarpeta());
                        $defensores->setActivo('N');
                        $eliminarDefensoresImputados = $defensoresimputadosDao->eliminarDefensoresimputadoscarpetasByIdImputado($defensores, $this->proveedor);
                        if (!$eliminarDefensoresImputados) {
                            $msg[] = array("No se encontraron defensores en la posicion:" . $index);
                            $error = true;
                        }
                    }
                }

                $domiciliosImputadosDao = new DomiciliosimputadoscarpetasDAO();
                $domiciliosImputadosDto = new DomiciliosimputadoscarpetasDTO();
                $domicilios = new DomiciliosimputadoscarpetasDTO();
                $domiciliosImputadosDto->setIdImputadoCarpeta($rsImputados[0]->getIdImputadoCarpeta());
                $rsDomiciliosimputadosDto = $domiciliosImputadosDao->selectDomiciliosimputadoscarpetas($domiciliosImputadosDto, "", $this->proveedor);
                if ($rsDomiciliosimputadosDto != "") {
                    foreach ($rsDomiciliosimputadosDto as $arrayDom) {
                        $domicilios->setIdDomicilioImputadoCarpeta($arrayDom->getIdDomicilioImputadoCarpeta());
                        $domicilios->setActivo('N');
                        $eliminarDomiciliosImputados = $domiciliosImputadosDao->eliminarDomiciliosImputadosCarpetasByIdImputado($domicilios, $this->proveedor);
                        if (!$eliminarDomiciliosImputados) {
                            $msg[] = array("No se encontraron domicilios en la posicion:" . $index);
                            $error = true;
                        }
                    }
                }

                $tutoresimputadosDao = new TutoresimputadoscarpetasDAO();
                $tutoresimputadosDto = new TutoresimputadoscarpetasDTO();
                $tutoreso = new TutoresimputadoscarpetasDTO();
                $tutoresimputadosDto->setIdImputadoCarpeta($rsImputados[0]->getIdImputadoCarpeta());
                $rsTutoresimputadosDto = $tutoresimputadosDao->selectTutoresimputadoscarpetas($tutoresimputadosDto, "", $this->proveedor);
                if ($rsTutoresimputadosDto != "") {
                    foreach ($rsTutoresimputadosDto as $arrayTutor) {
                        $tutoreso->setIdTutorImputadoCarpeta($arrayTutor->getIdTutorImputadoCarpeta());
                        $tutoreso->setActivo('N');
                        $tutoresimputados = $tutoresimputadosDao->updateTutoresimputadoscarpetas($tutoreso, $this->proveedor);
                        if ($tutoresimputados == "") {
                            $msg[] = array("No se encontraron tutores en la posicion:" . $index);
                            $error = true;
                        }
                    }
                }

                $nacionalidadesimputadosDao = new NacionalidadesimputadoscarpetasDAO();
                $nacionalidadesimputadosDto = new NacionalidadesimputadoscarpetasDTO();
                $nacionalidades = new NacionalidadesimputadoscarpetasDTO();
                $nacionalidadesimputadosDto->setIdImputadoCarpeta($rsImputados[0]->getIdImputadoCarpeta());
                $rsNacionalidadesimputadosDto = $nacionalidadesimputadosDao->selectNacionalidadesimputadoscarpetas($nacionalidadesimputadosDto, "", $this->proveedor);
                if ($rsNacionalidadesimputadosDto != "") {
                    foreach ($rsNacionalidadesimputadosDto as $arrayNacion) {
                        $nacionalidades->setIdNacionalidadImputadoCarpeta($arrayNacion->getIdNacionalidadImputadoCarpeta());
                        $nacionalidades->setActivo('N');
                        $nacionalidadesimputados = $nacionalidadesimputadosDao->updateNacionalidadesimputadoscarpetas($nacionalidades, $this->proveedor);
                        if ($nacionalidadesimputados == "") {
                            $msg[] = array("No se encontraron nacionalidades en la posicion:" . $index);
                            $error = true;
                        }
                    }
                }

                $imputadosDrogasDao = new ImputadosdrogascarpetasDAO();
                $imputadosDrogasDto = new ImputadosdrogascarpetasDTO();
                $drogas = new ImputadosdrogascarpetasDTO();
                $imputadosDrogasDto->setIdImputadoCarpeta($rsImputados[0]->getIdImputadoCarpeta());
                $rsDrogasDto = $imputadosDrogasDao->selectImputadosdrogascarpetas($imputadosDrogasDto, "", $this->proveedor);
                if ($rsDrogasDto != "") {
                    foreach ($rsDrogasDto as $arrayDrogas) {
                        $drogas->setIdImputadoDrogaCarpeta($arrayDrogas->getIdImputadoDrogaCarpeta());
                        $drogas->setActivo('N');
                        $Drogasimputados = $imputadosDrogasDao->updateImputadosdrogascarpetas($drogas, $this->proveedor);
                        if ($Drogasimputados == "") {
                            $msg[] = array("No se encontraron nacionalidades en la posicion:" . $index);
                            $error = true;
                        }
                    }
                }

                $imputadosCarpetasConclusionesDto = new ImputadoscarpetasconclusionesDTO();
                $imputadosCarpetasConclusionesDao = new ImputadoscarpetasconclusionesDAO();
                $imputadosCarpetasConclusionesDto->setIdImputadoCarpeta($rsImputados[0]->getIdImputadoCarpeta());
                $imputadosCarpetasConclusionesDto->setActivo("S");
                $rsConclusiones = $imputadosCarpetasConclusionesDao->selectImputadoscarpetasconclusiones($imputadosCarpetasConclusionesDto, "", $this->proveedor);
                if ($rsConclusiones != "") {
                    foreach ($rsConclusiones as $conclusiones) {
                        $imputadosConclusionesDto = new ImputadoscarpetasconclusionesDTO();
                        $imputadosConclusionesDto->setIdImputadoCarpetaConclusion($conclusiones->getIdImputadoCarpetaConclusion());
                        $imputadosConclusionesDto->setActivo("N");
                        $rsConclisionesDto = $imputadosCarpetasConclusionesDao->updateImputadoscarpetasconclusiones($imputadosConclusionesDto, $this->proveedor);
                        if ($rsConclisionesDto == "") {
                            $msg[] = array("No se encontraron conclusiones para el imputado");
                            $error = true;
                        }
                    }
                }
                /*
                 * Eliminar la relacion impofedel cuando se elimine logicamente un imputado
                 */
                $ImpofedelcarpetasDto = new ImpofedelcarpetasDTO();
                $ImpofedelcarpetasDto->setIdCarpetaJudicial($rsImputados[0]->getIdCarpetaJudicial());
                $ImpofedelcarpetasDto->setIdImputadoCarpeta($rsImputados[0]->getIdImputadoCarpeta());
                $ImpofedelcarpetasDto->setActivo("S");
                $ImpofedelcarpetasDao = new ImpofedelcarpetasDAO();
                $ImpofedelcarpetasResultado = $ImpofedelcarpetasDao->selectImpofedelcarpetas($ImpofedelcarpetasDto, "", $this->proveedor);
                if ($ImpofedelcarpetasResultado != "") {
                    foreach ($ImpofedelcarpetasResultado as $value) {
                        //eliminar registros de violencia de genero, trata de personas y acoso sexual
                        $impofedelCarpetasController = new ImpofedelcarpetasController();
                        $eliminarViolencia = $impofedelCarpetasController->borrarViolenciaCausas($value, $this->proveedor);
                        if ( $eliminarViolencia ) {
                            $error = false;
                            $ImpofedelcarpetasDto = new ImpofedelcarpetasDTO();
                            $ImpofedelcarpetasDto->setIdImpOfeDelCarpeta($value->getIdImpOfeDelCarpeta());
                            $ImpofedelcarpetasDto->setActivo('N');
                            $ImpofedelcarpetasUpdate = $ImpofedelcarpetasDao->updateImpofedelcarpetas($ImpofedelcarpetasDto, $this->proveedor);
                            if ($ImpofedelcarpetasUpdate == "") {
                                $error = true;
                                $msg[] = array("Ocurrio un error al actualizar la relacion de imputados, ofendidos y delitos");
                            }
                        } else {
                            $error = true;
                            $msg[] = array("Ocurrio un error al borrar la relacion de imputados, ofendidos y delitos, asi como los registros relacionados de violencia de genero");
                        }
                        if ( $error ) {
                            break;
                        }
                    }
                }
                $count++;
                $index++;
            } else {

                /*
                 * Si s�lo hay un imputado indicar al usuario que la carpeta judicial
                 * debe tener al menos un imputado activo
                 */

                $imputadosTmp = new ImputadoscarpetasDTO();
                $imputadosTmp->setIdCarpetaJudicial($rsImputados[0]->getIdCarpetaJudicial());
                $imputadosTmp->setActivo("S");
                //$imputadosTmp->setTieneSobreseimiento("N");
                $imputadosTmp = $imputadoscarpetasDao->selectImputadoscarpetas($imputadosTmp, "", $this->proveedor);
                if ($imputadosTmp != "") {
                    $numImputados = count($imputadosTmp);
                } else {
                    $numImputados = 0;
                }
                if ($numImputados > 1) {
                    $validaEliminar = $this->validaEliminarImputadoCarpeta($imputadoscarpetasDto, $this->proveedor);
                    if ( $validaEliminar['estatus'] == 'ok' ) {
                        $eliminarImputadoscarpetasDto = $imputadoscarpetasDao->eliminarImputadoByIdImputadoCarpeta($imputadoscarpetasDto, $this->proveedor);

                        if ($eliminarImputadoscarpetasDto) {
                            $telefonosimputadoscarpetasDao = new TelefonosimputadoscarpetasDAO();
                            $telefonosimputadoscarpetasDto = new TelefonosimputadoscarpetasDTO();
                            $telefonoso = new TelefonosimputadoscarpetasDTO();
                            $telefonosimputadoscarpetasDto->setIdImputadoCarpeta($rsImputados[0]->getIdImputadoCarpeta());
                            $rsTelefonosimputadoscarpetasDto = $telefonosimputadoscarpetasDao->selectTelefonosimputadoscarpetas($telefonosimputadoscarpetasDto, "", $this->proveedor);
                            if ($rsTelefonosimputadoscarpetasDto != "") {
                                foreach ($rsTelefonosimputadoscarpetasDto as $arrayTel) {
                                    $telefonoso->setIdTelefonoImputadosCarpeta($arrayTel->getIdTelefonoImputadosCarpeta());
                                    $telefonoso->setActivo('N');
                                    $eliminarTelefonosImputadoscarpetas = $telefonosimputadoscarpetasDao->eliminarTelefonosimputadoscarpetasByIdImputado($telefonoso, $this->proveedor);
                                    if (!$eliminarTelefonosImputadoscarpetas) {
                                        $msg[] = array("No se encontraron telefonos en la posicion:" . $index);
                                        $error = true;
                                    }
                                }
                            }
                            /*
                             * Eliminar la relacion impofedel cuando se elimine logicamente un imputado
                             */
                            $ImpofedelcarpetasDto = new ImpofedelcarpetasDTO();
                            $ImpofedelcarpetasDto->setIdCarpetaJudicial($rsImputados[0]->getIdCarpetaJudicial());
                            $ImpofedelcarpetasDto->setIdImputadoCarpeta($rsImputados[0]->getIdImputadoCarpeta());
                            $ImpofedelcarpetasDto->setActivo("S");
                            $ImpofedelcarpetasDao = new ImpofedelcarpetasDAO();
                            $ImpofedelcarpetasResultado = $ImpofedelcarpetasDao->selectImpofedelcarpetas($ImpofedelcarpetasDto, "", $this->proveedor);
                            if ($ImpofedelcarpetasResultado != "") {
                                foreach ($ImpofedelcarpetasResultado as $value) {
                                    //eliminar registros de violencia de genero, trata de personas y acoso sexual
                                    $impofedelCarpetasController = new ImpofedelcarpetasController();
                                    $eliminarViolencia = $impofedelCarpetasController->borrarViolenciaCausas($value, $this->proveedor);
                                    if ( $eliminarViolencia ) {
                                        $error = false;
                                        $ImpofedelcarpetasDto = new ImpofedelcarpetasDTO();
                                        $ImpofedelcarpetasDto->setIdImpOfeDelCarpeta($value->getIdImpOfeDelCarpeta());
                                        $ImpofedelcarpetasDto->setActivo('N');
                                        $ImpofedelcarpetasUpdate = $ImpofedelcarpetasDao->updateImpofedelcarpetas($ImpofedelcarpetasDto, $this->proveedor);
                                        if ($ImpofedelcarpetasUpdate == "") {
                                            $error = true;
                                            $msg[] = array("Ocurrio un error al actualizar la relacion de imputados, ofendidos y delitos");
                                        }
                                    } else {
                                        $error = true;
                                        $msg[] = array("Ocurrio un error al borrar la relacion de imputados, ofendidos y delitos, asi como los registros relacionados de violencia de genero");
                                    }
                                    if ( $error ) {
                                        break;
                                    }
                                }
                            }
                        }

                        $defensoresimputadosDao = new DefensoresimputadoscarpetasDAO();
                        $defensoresimputadosDto = new DefensoresimputadoscarpetasDTO();
                        $defensores = new DefensoresimputadoscarpetasDTO();
                        $defensoresimputadosDto->setIdImputadoCarpeta($rsImputados[0]->getIdImputadoCarpeta());
                        $rsDefensoresimputadosDto = $defensoresimputadosDao->selectDefensoresimputadoscarpetas($defensoresimputadosDto, "", $this->proveedor);
                        if ($rsDefensoresimputadosDto != "") {
                            foreach ($rsDefensoresimputadosDto as $arrayDef) {
                                $defensores->setIdDefensorImputadoCarpeta($arrayDef->getIdDefensorImputadoCarpeta());
                                $defensores->setActivo('N');
                                $eliminarDefensoresImputados = $defensoresimputadosDao->eliminarDefensoresimputadoscarpetasByIdImputado($defensores, $this->proveedor);
                                if (!$eliminarDefensoresImputados) {
                                    $msg[] = array("No se encontraron defensores en la posicion:" . $index);
                                    $error = true;
                                }
                            }
                        }

                        $domiciliosImputadosDao = new DomiciliosimputadoscarpetasDAO();
                        $domiciliosImputadosDto = new DomiciliosimputadoscarpetasDTO();
                        $domicilios = new DomiciliosimputadoscarpetasDTO();
                        $domiciliosImputadosDto->setIdImputadoCarpeta($rsImputados[0]->getIdImputadoCarpeta());
                        $rsDomiciliosimputadosDto = $domiciliosImputadosDao->selectDomiciliosimputadoscarpetas($domiciliosImputadosDto, "", $this->proveedor);
                        if ($rsDomiciliosimputadosDto != "") {
                            foreach ($rsDomiciliosimputadosDto as $arrayDom) {
                                $domicilios->setIdDomicilioImputadoCarpeta($arrayDom->getIdDomicilioImputadoCarpeta());
                                $domicilios->setActivo('N');
                                $eliminarDomiciliosImputados = $domiciliosImputadosDao->eliminarDomiciliosImputadosCarpetasByIdImputado($domicilios, $this->proveedor);
                                if (!$eliminarDomiciliosImputados) {
                                    $msg[] = array("No se encontraron domicilios en la posicion:" . $index);
                                    $error = true;
                                }
                            }
                        }

                        $tutoresimputadosDao = new TutoresimputadoscarpetasDAO();
                        $tutoresimputadosDto = new TutoresimputadoscarpetasDTO();
                        $tutoreso = new TutoresimputadoscarpetasDTO();
                        $tutoresimputadosDto->setIdImputadoCarpeta($rsImputados[0]->getIdImputadoCarpeta());
                        $rsTutoresimputadosDto = $tutoresimputadosDao->selectTutoresimputadoscarpetas($tutoresimputadosDto, "", $this->proveedor);
                        if ($rsTutoresimputadosDto != "") {
                            foreach ($rsTutoresimputadosDto as $arrayTutor) {
                                $tutoreso->setIdTutorImputadoCarpeta($arrayTutor->getIdTutorImputadoCarpeta());
                                $tutoreso->setActivo('N');
                                $tutoresimputados = $tutoresimputadosDao->updateTutoresimputadoscarpetas($tutoreso, $this->proveedor);
                                if ($tutoresimputados == "") {
                                    $msg[] = array("No se encontraron tutores en la posicion:" . $index);
                                    $error = true;
                                }
                            }
                        }

                        $nacionalidadesimputadosDao = new NacionalidadesimputadoscarpetasDAO();
                        $nacionalidadesimputadosDto = new NacionalidadesimputadoscarpetasDTO();
                        $nacionalidades = new NacionalidadesimputadoscarpetasDTO();
                        $nacionalidadesimputadosDto->setIdImputadoCarpeta($rsImputados[0]->getIdImputadoCarpeta());
                        $rsNacionalidadesimputadosDto = $nacionalidadesimputadosDao->selectNacionalidadesimputadoscarpetas($nacionalidadesimputadosDto, "", $this->proveedor);
                        if ($rsNacionalidadesimputadosDto != "") {
                            foreach ($rsNacionalidadesimputadosDto as $arrayNacion) {
                                $nacionalidades->setIdNacionalidadImputadoCarpeta($arrayNacion->getIdNacionalidadImputadoCarpeta());
                                $nacionalidades->setActivo('N');
                                $nacionalidadesimputados = $nacionalidadesimputadosDao->updateNacionalidadesimputadoscarpetas($nacionalidades, $this->proveedor);
                                if ($nacionalidadesimputados == "") {
                                    $msg[] = array("No se encontraron nacionalidades en la posicion:" . $index);
                                    $error = true;
                                }
                            }
                        }

                        $imputadosDrogasDao = new ImputadosdrogascarpetasDAO();
                        $imputadosDrogasDto = new ImputadosdrogascarpetasDTO();
                        $drogas = new ImputadosdrogascarpetasDTO();
                        $imputadosDrogasDto->setIdImputadoCarpeta($rsImputados[0]->getIdImputadoCarpeta());
                        $rsDrogasDto = $imputadosDrogasDao->selectImputadosdrogascarpetas($imputadosDrogasDto, "", $this->proveedor);
                        if ($rsDrogasDto != "") {
                            foreach ($rsDrogasDto as $arrayDrogas) {
                                $drogas->setIdImputadoDrogaCarpeta($arrayDrogas->getIdImputadoDrogaCarpeta());
                                $drogas->setActivo('N');
                                $Drogasimputados = $imputadosDrogasDao->updateImputadosdrogascarpetas($drogas, $this->proveedor);
                                if ($Drogasimputados == "") {
                                    $msg[] = array("No se encontraron nacionalidades en la posicion:" . $index);
                                    $error = true;
                                }
                            }
                        }

                        $imputadosCarpetasConclusionesDto = new ImputadoscarpetasconclusionesDTO();
                        $imputadosCarpetasConclusionesDao = new ImputadoscarpetasconclusionesDAO();
                        $imputadosCarpetasConclusionesDto->setIdImputadoCarpeta($rsImputados[0]->getIdImputadoCarpeta());
                        $imputadosCarpetasConclusionesDto->setActivo("S");
                        $rsConclusiones = $imputadosCarpetasConclusionesDao->selectImputadoscarpetasconclusiones($imputadosCarpetasConclusionesDto, "", $this->proveedor);
                        if ($rsConclusiones != "") {
                            foreach ($rsConclusiones as $conclusiones) {
                                $imputadosConclusionesDto = new ImputadoscarpetasconclusionesDTO();
                                $imputadosConclusionesDto->setIdImputadoCarpetaConclusion($conclusiones->getIdImputadoCarpetaConclusion());
                                $imputadosConclusionesDto->setActivo("N");
                                $rsConclisionesDto = $imputadosCarpetasConclusionesDao->updateImputadoscarpetasconclusiones($imputadosConclusionesDto, $this->proveedor);
                                if ($rsConclisionesDto == "") {
                                    $msg[] = array("No se encontraron conclusiones para el imputado");
                                    $error = true;
                                }
                            }
                        }

                        $count++;
                        $index++;
                        /*
                         * Actualizar el numero de imputados activos en la carpeta judicial
                         */
                        $imputadosTmp = new ImputadoscarpetasDTO();
                        $imputadosTmp->setIdCarpetaJudicial($rsImputados[0]->getIdCarpetaJudicial());
                        $imputadosTmp->setActivo("S");
                        $imputadosTmp = $imputadoscarpetasDao->selectImputadoscarpetas($imputadosTmp, "", $this->proveedor);
                        $numeroImputados = count($imputadosTmp);

                        $carpetaJudicialDto = new CarpetasjudicialesDTO();
                        $carpetaJudicialDao = new CarpetasjudicialesDAO();
                        $carpetaJudicialDto->setIdCarpetaJudicial($rsImputados[0]->getIdCarpetaJudicial());
                        $carpetaJudicialDto->setNumImputados($numeroImputados);
                        $carpetaJudicialDto = $carpetaJudicialDao->updateCarpetasjudiciales($carpetaJudicialDto, $this->proveedor);
                        if ($carpetaJudicialDto != "") {
                            $error = false;
                            $msg[] = array("Se actualiza el numero de imputados de la carpeta judicial: " . $numeroImputados);
                        } else {
                            $error = true;
                            $msg[] = array("Ocurrio un error al actualizar el numero de imputados de la carpeta judicial");
                        }
                        /*
                         * Verificar si el imputado se encuentra en una etapa posterior,
                         * si se encuentra en una etapa posterior, actualizar la etapa
                         * procesal del imputado en la carpeta de antecedes
                         */
                        $antecedesCarpetasDto = new AntecedescarpetasDTO();
                        $antecedesCarpetasDao = new AntecedescarpetasDAO();
                        $antecedesCarpetasDto->setIdCarpetaHija($rsImputados[0]->getIdCarpetaJudicial());
                        $antecedesCarpetasDto->setActivo('S');
                        $antecedesCarpetasDto = $antecedesCarpetasDao->selectAntecedescarpetas($antecedesCarpetasDto, "", $this->proveedor);
                        if ( $antecedesCarpetasDto != "" ) {
                            //Consultar los datos de la carpeta de antecedente
                            $carpetasAntecedeDto = new CarpetasjudicialesDTO();
                            $carpetasAntecedeDto->setIdCarpetaJudicial($antecedesCarpetasDto[0]->getIdCarpetaPadre());
                            $carpetasAntecedeDto = $carpetaJudicialDao->selectCarpetasjudiciales($carpetasAntecedeDto, "", $this->proveedor);
                            if ( $carpetasAntecedeDto != "" ) {
                                $imputadosCarpetasAuxDto = new ImputadoscarpetasDTO();
                                $imputadosCarpetasAuxDto->setIdCarpetaJudicial($carpetasAntecedeDto[0]->getIdCarpetaJudicial());
                                $imputadosCarpetasAuxDto->setNombre($rsImputados[0]->getNombre());
                                $imputadosCarpetasAuxDto->setPaterno($rsImputados[0]->getPaterno());
                                $imputadosCarpetasAuxDto->setMaterno($rsImputados[0]->getMaterno());
                                $imputadosCarpetasAuxDto->setNombreMoral($rsImputados[0]->getNombreMoral());
                                $imputadosCarpetasAuxDto = $imputadoscarpetasDao->selectImputadoscarpetas($imputadosCarpetasAuxDto, "", $this->proveedor);
                                if ( $imputadosCarpetasAuxDto != "" ) {
                                    $imputadoTmpDto = new ImputadoscarpetasDTO();
                                    $imputadoTmpDto->setIdImputadoCarpeta($imputadosCarpetasAuxDto[0]->getIdImputadoCarpeta());
                                    $imputadoTmpDto->setCveEtapaProcesal($carpetasAntecedeDto[0]->getCveEtapaProcesal());
                                    $imputadoTmpDto->setFechaActualizacion(date('Y-m-d H:i:s'));
                                    $imputadoTmpDto = $imputadoscarpetasDao->updateImputadoscarpetas($imputadoTmpDto, $this->proveedor);
                                    if ( $imputadoTmpDto == "" ) {
                                        $error = true;
                                        $msg[] = array("Ocurrio un error al actualizar la etapa procesal del imputado para la carpeta de antecedente");
                                    }
                                }
                            }
                        }
                    } else {
                        $error = true;
                        $msg[] = $validaEliminar['mensaje'];
                    }
                } else {
                    $error = true;
                    $msg[] = array("Debe haber al menos un imputado activo en la carpeta judcial, favor de verificar");
                }
            }
        } else {
            $msg[] = array("No se encontro al imputado");
            $error = true;
        }

        if ((!$error)) {
            $result = array(
                "status" => "Ok",
                "msj" => "Se elimino de forma correcta",
            );
            $bitacora = new BitacoramovimientosController();
            $bitacoraOfendido = $bitacora->agregar(170, 'Borrado logico tblimputadoscarpetas', 'txt', serialize($rsImputados[0]), '', $this->proveedor);
            if (!count($bitacoraOfendido))
                throw new Exception('no se pudo guardar la accion borrado logico imputado en bitacora');
            if ($proveedor == null) {
                $this->proveedor->execute('COMMIT');
            }
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
            if ($proveedor == null) {
                $this->proveedor->execute('ROLLBACK');
            }
        }
        return json_encode($result);
    }

    public function consultaimputadosconsentencia($ImputadoscarpetasDto, $datos, $proveedor = null) {



        $ImputadoscarpetasDto = $this->validarImputadoscarpetas($ImputadoscarpetasDto);
        $ImputadoscarpetasDto->getIdCarpetaJudicial();

        $impofedelCarpetasDto = new ImpofedelcarpetasDTO();
        $impofedelCarpetasDao = new ImpofedelcarpetasDAO();

        $impsenteDAO = new ImputadossentenciasDAO();
        $impsenteDTO = new ImputadossentenciasDTO();

        $dat = [];
        $datselect = [];
        $contsel = 0;
        $contad = 0;
        $ofend = "";
        $delito = "";
        $idimputado = 0;


        $impofedelCarpetasDto->setIdCarpetaJudicial($ImputadoscarpetasDto->getIdCarpetaJudicial());
        $impofedelCarpetasDto->setActivo('S');
        $cons = $impofedelCarpetasDao->selectImpofedelcarpetas($impofedelCarpetasDto);

        if ($cons != "") {
            $idImputado = 0;
            foreach ($cons as $cc) {
                $idImputado = $cc->getIdImpOfeDelCarpeta();
                $impsenteDTO->setIdImpOfeDelCarpeta($idImputado);
                $impsenteDTO->setActivo('S');
                $impsenteDTO->setIdActuacion($datos['idactuac']);
                $consl = $impsenteDAO->selectImputadossentencias($impsenteDTO);
                if ($consl == "") {
                    // echo "quitar-->".$idImputado;
                } else {
                    $idsente = 0;
                    foreach ($consl as $identsentencia) {
                        $idsente = $identsentencia->getIdImputadoSentencia();
                        $idimputado = $identsentencia->getIdImpOfeDelCarpeta();
                    }

                    //echo "agregar-->".$cc->getIdImputadoCarpeta();

                    $imputDAO = new ImputadoscarpetasDAO();
                    $imputDTO = new ImputadoscarpetasDTO();

                    $ofendDAO = new OfendidoscarpetasDAO();
                    $ofendDTO = new OfendidoscarpetasDTO();
                    $ofendDTO->setIdOfendidoCarpeta($cc->getIdOfendidoCarpeta());
                    $ofendDTO->setActivo('S');

                    $imputDTO->setIdImputadoCarpeta($cc->getIdImputadoCarpeta());
                    // $imputDTO->setActivo('S');
                    $consimpc = $imputDAO->selectImputadoscarpetas($imputDTO);



                    if ($consimpc != "") {///////////////////nombre del imputado
                        $nomb = "";
                        foreach ($consimpc as $cimpcc) {

                            if ($cimpcc->getCveTipoPersona() != 1) {
                                $nomb = $cimpcc->getnombreMoral();
                            } else {


                                $nomb = $cimpcc->getPaterno() . " " . $cimpcc->getMaterno() . " " . $cimpcc->getNombre();
                            }
                        }
                    }


                    $consofe = $ofendDAO->ConsultarOfendidoscarpetas($ofendDTO);




                    if ($consofe != "") {///////////////////nombre del ofendido
                        $ofend = "";
                        foreach ($consofe as $cofe) {

                            if ($cofe->getCveTipoPersona() != 1) {
                                $ofend = $cofe->getnombreMoral();
                            } else {

                                $ofend = $cofe->getPaterno() . " " . $cofe->getMaterno() . " " . $cofe->getNombre();
                            }
                        }
                    }


                    $delitoscarpetasDto = new DelitoscarpetasDTO();
                    $delitoscarpetasDto->setIdDelitoCarpeta($cc->getIdDelitoCarpeta());
                    $delitoscarpetasDto->setActivo("S");
                    $delitoscarpetasDao = new DelitoscarpetasDAO();
                    $delitoscarpetasDto = $delitoscarpetasDao->selectDelitoscarpetas($delitoscarpetasDto, "");
                    //var_dump($delitoscarpetasDto);
                    if ($delitoscarpetasDto != "") {
                        foreach ($delitoscarpetasDto as $dca) {
                            $delitosDto = new DelitosDTO();
                            $delitosDto->setCveDelito($dca->getcveDelito());
                            $delitosDto->setActivo('S');

                            $delitosDao = new DelitosDAO();
                            $delitosDto = $delitosDao->selectDelitos($delitosDto, "", $this->proveedor);

                            foreach ($delitosDto as $descdel) {
                                $delito = $descdel->getDesDelito();
                            }
                        }
                    } else {
                        $delito = " ";
                    }

                    $dat[$contad] = array("idsentencia" => $idsente, "nombre" => utf8_encode($nomb), "ofendido" => utf8_encode($ofend), "delito" => utf8_encode($delito), "idimp" => $idimputado);


                    //$datselect[$contsel]=array("id"=>$cc->getIdImpOfeDelCarpeta(),"nombre"=>utf8_encode($nomb),"ofendido"=>utf8_encode($ofend),"delito"=>utf8_encode($delito));
                    $contad++;
                }
            }
        }

        $response = "";
        if ($contad > 0) {
            $response = array("totalCount" => $contad, "data" => $dat);
        } else {
            $response = array("totalCount" => 0);
        }

        return json_encode($response);
    }

    public function consultaimputadossinsentencia($ImputadoscarpetasDto, $actuacion, $proveedor = null) {
        $ImputadoscarpetasDto = $this->validarImputadoscarpetas($ImputadoscarpetasDto);
        $ImputadoscarpetasDto->getIdCarpetaJudicial();

        $impofedelCarpetasDto = new ImpofedelcarpetasDTO();
        $impofedelCarpetasDao = new ImpofedelcarpetasDAO();

        $impsenteDAO = new ImputadossentenciasDAO();
        $impsenteDTO = new ImputadossentenciasDTO();

        $dat = [];
        $datselect = [];
        $contsel = 0;
        $contad = 0;
        $ofend = "";
        $delito = "";
        $nomb = "";


        $impofedelCarpetasDto->setIdCarpetaJudicial($ImputadoscarpetasDto->getIdCarpetaJudicial());
        $impofedelCarpetasDto->setActivo('S');
        $cons = $impofedelCarpetasDao->selectImpofedelcarpetas($impofedelCarpetasDto);



        if ($cons != "") {
            $idImputado = 0;
            foreach ($cons as $cc) {
                $idImputado = $cc->getIdImpOfeDelCarpeta();
                $impsenteDTO->setIdImpOfeDelCarpeta($idImputado);
                $impsenteDTO->setActivo('S');
                // $orden=" and idActuacion=".$actuacion;
                $consl = $impsenteDAO->selectImputadossentencias($impsenteDTO);
                $marcar = 0;
                $idact = 0;

                if ($consl != "") {

                    foreach ($consl as $cv) {
                        $idact = $cv->getidActuacion();
                    }
                    $marcar = 1; // echo "quitar-->".$idImputado;
                }

                //echo "agregar-->".$cc->getIdImputadoCarpeta();

                $imputDAO = new ImputadoscarpetasDAO();
                $imputDTO = new ImputadoscarpetasDTO();

                $ofendDAO = new OfendidoscarpetasDAO();
                $ofendDTO = new OfendidoscarpetasDTO();
                $ofendDTO->setIdOfendidoCarpeta($cc->getIdOfendidoCarpeta());
                $ofendDTO->setActivo('S');

                $imputDTO->setIdImputadoCarpeta($cc->getIdImputadoCarpeta());
                $imputDTO->setActivo('S');
                
                $consimpc = $imputDAO->selectImputadoscarpetas($imputDTO);


                if ($consimpc != "") {///////////////////nombre del imputado
                    
                    $nomb = "";
                    foreach ($consimpc as $cimpcc) {
                        
                        if ($cimpcc->getCveTipoPersona() != 1) {
                            $nomb = $cimpcc->getnombreMoral();
                        } else {
                            $nomb = $cimpcc->getPaterno() . " " . $cimpcc->getMaterno() . " " . $cimpcc->getNombre();
                        }
                    }
                


                $consofe = $ofendDAO->ConsultarOfendidoscarpetas($ofendDTO);
                $ofend = "";
                if ($consofe != "") {///////////////////nombre del ofendido
                    foreach ($consofe as $cofe) {


                        if ($cofe->getCveTipoPersona() != 1) {
                            $ofend = $cofe->getnombreMoral();
                        } else {

                            $ofend = $cofe->getPaterno() . " " . $cofe->getMaterno() . " " . $cofe->getNombre();
                        }
                    }
                }


                $delitoscarpetasDto = new DelitoscarpetasDTO();
                $delitoscarpetasDto->setIdDelitoCarpeta($cc->getIdDelitoCarpeta());
                $delitoscarpetasDto->setActivo("S");
                $delitoscarpetasDao = new DelitoscarpetasDAO();
                $delitoscarpetasDto = $delitoscarpetasDao->selectDelitoscarpetas($delitoscarpetasDto, "");
                //var_dump($delitoscarpetasDto);


                if ($delitoscarpetasDto != "") {
                    foreach ($delitoscarpetasDto as $dca) {
                        $delitosDto = new DelitosDTO();
                        $delitosDto->setCveDelito($dca->getcveDelito());
                        $delitosDto->setActivo('S');


                        if ($dca->getcveDelito() > 0) {
                            $delitosDao = new DelitosDAO();
                            $delitosDto = $delitosDao->selectDelitos($delitosDto, "", $this->proveedor);

                            foreach ($delitosDto as $descdel) {
                                $delito = $descdel->getDesDelito();
                            }
                        }
                    }
                } else {
                    $delito = " ";
                }



                $dat[$contad] = array("id" => $cc->getIdImpOfeDelCarpeta(), "nombre" => utf8_encode(strtoupper($nomb)), "ofendido" => utf8_encode(strtoupper($ofend)), "delito" => utf8_encode($delito), "agregado" => $marcar, "idactuacion" => $idact);


                //$datselect[$contsel]=array("id"=>$cc->getIdImpOfeDelCarpeta(),"nombre"=>utf8_encode($nomb),"ofendido"=>utf8_encode($ofend),"delito"=>utf8_encode($delito));
                $contad++;
                $contsel++;
            
                }
            }
        }


        if ($contad > 0) {
            $response = array("totalCount" => $contad, "data" => $dat);
        } else {
            $response = array("totalCount" => 0, "estatus"=>"Fail");
        }

        return json_encode($response);
    }

    public function consultaImputadoscarpetasTotal($ImputadoscarpetasDto, $proveedor = null) {
        $mensaje = array();
        $error = false;

        $ImputadoscarpetasDto = $this->validarImputadoscarpetas($ImputadoscarpetasDto);
        $ImputadoscarpetasDao = new ImputadoscarpetasDAO();
        $carpetasjudicialesDao = new CarpetasjudicialesDAO();
        $carpetasjudicialesDto = new CarpetasjudicialesDTO();

        $total = 0;
        $rsTotalImputados = $ImputadoscarpetasDao->selectImputadoscarpetas($ImputadoscarpetasDto, $proveedor);
        if ($rsTotalImputados != "") {
            $carpetasjudicialesDto->setIdCarpetaJudicial($ImputadoscarpetasDto->getIdCarpetaJudicial());
            $rsCarpeta = $carpetasjudicialesDao->selectCarpetasjudiciales($carpetasjudicialesDto, $proveedor);
            $rsImputadosCarpeta = (int) $rsCarpeta[0]->getNumImputados();
            //var_dump($rsImputadosCarpeta);
            $totalImputados = count($rsTotalImputados);
            //var_dump($totalImputados);
            if ($totalImputados == $rsImputadosCarpeta) {
                foreach ($rsTotalImputados as $rsImputado) {
                    $domiciliosImputadosDao = new DomiciliosimputadoscarpetasDAO();
                    $domiciliosImputadosDto = new DomiciliosimputadoscarpetasDTO();

                    $defensoresImputadosDao = new DefensoresimputadoscarpetasDAO();
                    $defensoresImputadosDto = new DefensoresimputadoscarpetasDTO();

                    $nacionalidadesImputadosDao = new NacionalidadesimputadoscarpetasDAO();
                    $nacionalidadesImputadosDto = new NacionalidadesimputadoscarpetasDTO();

//                    $domiciliosImputadosDto->setIdImputadoCarpeta($rsImputado->getIdImputadoCarpeta());
//                    $domiciliosImputadosDto->setActivo('S');
//                    $rsDomicilios = $domiciliosImputadosDao->selectDomiciliosimputadoscarpetas($domiciliosImputadosDto);
//                    if ($rsDomicilios == "") {
//                        if ($rsImputado->getCveTipoPersona() == 1) {
//                            $mensaje[] = array("Tiene que agregar al menos un domicilio al imputado " . utf8_encode($rsImputado->getNombre() . " " . $rsImputado->getPaterno() . " " . $rsImputado->getMaterno()) . ". \n ");
//                        } else {
//                            $mensaje[] = array("Tiene que agregar al menos un domicilio al imputado " . utf8_encode($rsImputado->getNombreMoral()) . ".");
//                        }
//
//                        $error = true;
//                    }

                    $defensoresImputadosDto->setIdImputadoCarpeta($rsImputado->getIdImputadoCarpeta());
                    $defensoresImputadosDto->setActivo('S');
                    $rsDefensores = $defensoresImputadosDao->selectDefensoresimputadoscarpetas($defensoresImputadosDto);
                    if ($rsDefensores == "") {
                        if ($rsImputado->getCveTipoPersona() == 1) {
                            $mensaje[] = array("Tiene que agregar al menos un defensor al imputado " . utf8_encode($rsImputado->getNombre() . " " . $rsImputado->getPaterno() . " " . $rsImputado->getMaterno()) . ".");
                        } else {
                            $mensaje[] = array("Tiene que agregar al menos un defensor al imputado " . utf8_encode($rsImputado->getNombreMoral()) . ".");
                        }
                        $error = true;
                    }

                    $nacionalidadesImputadosDto->setIdImputadoCarpeta($rsImputado->getIdImputadoCarpeta());
                    $nacionalidadesImputadosDto->setActivo('S');
                    $rsNacionalidades = $nacionalidadesImputadosDao->selectNacionalidadesimputadoscarpetas($nacionalidadesImputadosDto);
                    if ($rsNacionalidades == "") {
                        if ($rsImputado->getCveTipoPersona() == 1) {
                            $mensaje[] = array("Tiene que agregar al menos una nacionalidad al imputado " . utf8_encode($rsImputado->getNombre() . " " . $rsImputado->getPaterno() . " " . $rsImputado->getMaterno()) . ".");
                        } else {
                            $mensaje[] = array("Tiene que agregar al menos una nacionalidad al imputado " . utf8_encode($rsImputado->getNombreMoral()) . ".");
                        }
                        $error = true;
                    }
                }
            } else if ($totalImputados < $rsImputadosCarpeta) {
                $total = (int) $rsImputadosCarpeta - (int) $totalImputados;
                $mensaje[] = array("Faltan por agregar " . $total . " imputados(s).");
                $error = true;
            } else if ($totalImputados > $rsImputadosCarpeta) {
                $total = (int) $totalImputados - (int) $rsImputadosCarpeta;
                $mensaje[] = array("Tiene agregado(s) " . $total . " imputado(s) demas.");
                $error = true;
            }
            /*
             * Verificar la consignacion de la carpeta judicial, si es mixto, debe
             * haber al menos un imputado detenido, si es detenido, todos los imputados
             * deben tener estatus detenido, si es no detenido o no identificado
             * ningun imputado debe tener estatus detenido
             */
            if ($rsCarpeta[0]->getCveConsignacion() == 1) {
                /*
                 * La consignacion es detenido, verificar que todos los imputados
                 * tengan estatus detenido
                 * NOTA: para el caso de Persona Moral, no aplica la consignacion detenido
                 */
                $imputadosTmp = new ImputadoscarpetasDTO();
                $imputadosTmp->setIdCarpetaJudicial($rsCarpeta[0]->getIdCarpetaJudicial());
                $imputadosTmp->setActivo("S");
                //$imputadosTmp->setDetenido("S");
                $imputadosTmp = $ImputadoscarpetasDao->selectImputadoscarpetas($imputadosTmp);
                if ($imputadosTmp == "") {
                    $error = true;
                    $mensaje[] = array("No hay imputados activos en la carpeta judicial, favor de verificar");
                } else {
//                    $numImputados = count($imputadosTmp);
//                    if ( $numImputados < $rsImputadosCarpeta ) {
//                        $error = true;
//                        $mensaje[] = array("La consignacion indicada para la carpeta judicial es Detenido, todos los imputados deben tener estatus Detenido ");
//                    }
                    foreach ($imputadosTmp as $imputado) {
                        if ($imputado->getCveTipoPersona() == 2) {
                            $error = true;
                            $mensaje[] = array("La consignacion Detenido de la Carpeta Judicial no aplica para Personas Morales, favor de verificar");
                        } else {
                            if ($imputado->getDetenido() == "N") {
                                $error = true;
                                $mensaje[] = array("Cuando la consignacion de la Carpeta Judicial es Detenido, los imputados de tipo Persona Fisica y Otra deben tener el estatus Detenido");
                            }
                        }
                        if ($error) {
                            break;
                        }
                    }
                }
            } else if ($rsCarpeta[0]->getCveConsignacion() == 3) {
                $imputadosTmp = new ImputadoscarpetasDTO();
                $imputadosTmp->setIdCarpetaJudicial($rsCarpeta[0]->getIdCarpetaJudicial());
                $imputadosTmp->setActivo("S");
                $imputadosTmp->setDetenido("S");
                $imputadosTmp = $ImputadoscarpetasDao->selectImputadoscarpetas($imputadosTmp);
                if ($imputadosTmp == "") {
                    $error = true;
                    $mensaje[] = array("La consignacion indicada para la carpeta judicial es Mixto, debe haber al menos un imputado con estatus Detenido ");
                }
            } else {
                $imputadosTmp = new ImputadoscarpetasDTO();
                $imputadosTmp->setIdCarpetaJudicial($rsCarpeta[0]->getIdCarpetaJudicial());
                $imputadosTmp->setActivo("S");
                $imputadosTmp->setDetenido("S");
                $imputadosTmp = $ImputadoscarpetasDao->selectImputadoscarpetas($imputadosTmp);
                if ($imputadosTmp != "") {
                    $error = true;
                    $mensaje[] = array("La consignacion indicada para la carpeta judicial no es Detenido o Mixto, no debe haber imputados con estatus Detenido ");
                }
            }
        } else {
            $mensaje[] = array("No hay imputados relacionados a esta carpeta.");
            $error = true;
        }
        if ((!$error)) {
            $result = array(
                "status" => "ok",
                "msj" => "correcto"
            );
        } else {
            $result = array(
                "status" => 'error',
                "msj" => $mensaje
            );
        }

        return json_encode($result);
    }

    /////////////////////////////////////////////////////////////////////////////
    public function validaImputado($ImputadoscarpetasDto) {
//        $validacion = new Validacion();
        $estatus = 'ok';
        $msg = [];
        $error = false;
        $numImputadosCarpetas = 0;
        $numImputados = 0;

        //validar si puede agregar imputados de a cuerdo al num de imputados en la carpeta judicial.
        $carpetasjudicialesDto = new CarpetasjudicialesDTO();
        $carpetasjudicialesDto->setIdCarpetaJudicial($ImputadoscarpetasDto->getIdCarpetaJudicial());
        $carpetasjudicialesDao = new CarpetasjudicialesDAO();
        $carpetasResponse = $carpetasjudicialesDao->selectCarpetasjudiciales($carpetasjudicialesDto);
        $numImputadosCarpetas = $carpetasResponse[0]->getNumImputados();

        $imputadoDto = new ImputadoscarpetasDTO();
        $imputadoDto->setIdCarpetaJudicial($ImputadoscarpetasDto->getIdCarpetaJudicial());
        $imputadoDto->setActivo('S');
        $imputadosDao = new ImputadoscarpetasDAO();
        $imputadosResponse = $imputadosDao->selectImputadoscarpetas($imputadoDto);
        if ($imputadosResponse != "") {
            $numImputados = count($imputadosResponse);
        }

//        echo $numImputados . "<br>" . $numImputadosAudiencia;

        if ($numImputados == $numImputadosCarpetas) {
            return [
                'status' => "error",
                'mensaje' => '*Ya no puedes agregar mas imputados a esta carpeta judicial.'
            ];
        } else {
            return [
                'status' => "ok",
                'mensaje' => '*ok.'
            ];
        }

        $response = [
            'status' => $estatus,
            'mensaje' => $msg
        ];

        return $response;
    }

    /* ------------------------------GET PAGINAS---------------------------- */

    public function getPaginas($ImputadoscarpetasDto, $param) {

        $ImputadoscarpetasDao = new ImputadoscarpetasDAO();
        $ImputadoscarpetasDto = $this->verificaCeros($ImputadoscarpetasDto);
//                             $imputadoscarpetasDto,$proveedor = null, $orden = "", $param = null, $fields = null
        $numTot = $ImputadoscarpetasDao->selectImputadoscarpetasPag($ImputadoscarpetasDto, null, "", $param, " count(idImputadoCarpeta) as totalCount  ");
        //print_r($numTot);

        $Pages = (int) $numTot[0] / $param["cantxPag"];
        $restoPages = $numTot[0] % $param["cantxPag"];
        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);

        $json = "";
        $json .= '{"type":"OK",';
        $json .= '"totalCount":"' . count($numTot) . '",';
        $json .= '"data":[';
        $x = 1;

        if ($totPages > 1) {
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


        return $json;
    }

    /* --------------------------------------------------------------------------------------------------------- */

    public function getPaginasImp($ImputadoscarpetasDto, $param) {

        $ImputadoscarpetasDao = new ImputadoscarpetasDAO();
        $ImputadoscarpetasDto = $this->verificaCeros($ImputadoscarpetasDto);
//      $imputadoscarpetasDto,$proveedor = null, $orden = "", $param = null, $fields = null
        $numTot = $ImputadoscarpetasDao->selectImputadoscarpetasPag($ImputadoscarpetasDto, null, "", $param, " count(idImputadoCarpeta) as totalCount  ");

        //print_r($numTot);

        $Pages = (int) $numTot[0] / $param["cantxPag"];
        $restoPages = $numTot[0] % $param["cantxPag"];
        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);

        $json = "";
        $json .= '{"type":"OK",';
        $json .= '"totalCount":"' . $numTot[0] . '",';
        $json .= '"data":[';
        $x = 1;

        if ($totPages > 1) {
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


        return $json;
    }

    /* -------------------GET PAGINAS MUJERES----------------------------------------------------------------- */
    #Descripci�n: GetPaginas de la consulta de mujeres en prisi�n
    #Criterios: cveTipoPersona=1, cveGenero=2, detenido='S', Activo='S', fechaControlDet

    public function getPaginasMujeres($ImputadoscarpetasDto, $param) {

        $orden = "";
        if ($param["vnombre"] != "") {
            $orden.=" AND nombre like '%" . $param["vnombre"] . "%' ";
        }
        if ($param["vpaterno"] != "") {
            $orden.=" AND paterno like '%" . $param["vpaterno"] . "%' ";
        }
        if ($param["vmaterno"] != "") {
            $orden.=" AND materno like '%" . $param["vmaterno"] . "%' ";
        }
        if ($param["valias"] != "") {
            $orden.=" AND alias like '%" . $param["valias"] . "%' ";
        }
        if ($param["fechaDetencionDesde"] != "") {
            $fechaDetencionDesde = explode("/", $param["fechaDetencionDesde"]);
        }
        if ($param["fechaDetencionHasta"] != "") {
            $fechaDetencionHasta = explode("/", $param["fechaDetencionHasta"]);
        }
        if ($param["fechaDetencionDesde"] != "") {
            $orden.=" AND fechaControlDet >= '" . $fechaDetencionDesde[2] . "-" . $fechaDetencionDesde[1] . "-" . $fechaDetencionDesde[0] . " 00:00:00' ";
        }
        if ($param["fechaDetencionHasta"] != "") {
            $orden.=" AND fechaControlDet <= '" . $fechaDetencionHasta[2] . "-" . $fechaDetencionHasta[1] . "-" . $fechaDetencionHasta[0] . " 00:00:00' ";
        }
        $ImputadoscarpetasDao = new ImputadoscarpetasDAO();

        $ImputadoscarpetasDto = $this->verificaCeros($ImputadoscarpetasDto);
        //selectImputadoscarpetasPag($imputadoscarpetasDto,$proveedor = null, $orden = "", $param = null, $fields = null) {
        $ImputadoscarpetasDto = $ImputadoscarpetasDao->selectImputadoscarpetasPag($ImputadoscarpetasDto, $proveedor = null, $orden, $param);
        $numTot = count($ImputadoscarpetasDto);
        //print_r($numTot);

        $Pages = (int) $numTot / $param["cantxPag"];
        $restoPages = $numTot % $param["cantxPag"];
        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);

        $json = "";
        $json .= '{"type":"OK",';
        $json .= '"totalCount":"' . $numTot . '",';
        $json .= '"data":[';
        $x = 1;

        if ($totPages > 1) {
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
        else{
            $json .= "{";
            $json .= '"pagina":' . json_encode(utf8_encode(1)) . "";
            $json .= "}";
            $json .= "],";
            $json .= '"pagina":{"total":""},';
            $json .= '"total":"1"';
            $json .= "}";
        }


        return $json;
    }

    /* --------------------- GET P�GINAS CONSULTA DE IMPUTADOS (Varias Tablas) */

    public function getPaginasImpConsulta($ImputadoscarpetasDto, $param) {

        $ImputadoscarpetasDao = new ImputadoscarpetasDAO();
        $ImputadoscarpetasDto->setActivo("");
        $ImputadoscarpetasDto->setCveTipoPersona("");


        if ($ImputadoscarpetasDto->getNombre() != "") {
            $cadena=trim($ImputadoscarpetasDto->getNombre());
            $nombres = explode(' ', trim($ImputadoscarpetasDto->getNombre()));
            $long=count($nombres);
            $nombre=trim($nombres[0]);
            if($long>1){
                $paterno=trim($nombres[1]);
            }else{$paterno='';}
            if($long>2){
                $materno=trim($nombres[2]);
            }else{$materno='';}
        }else{
            $nombre="";
            $paterno="";
            $materno="";
        }
        if ($param["tipo"]=="Imputado") {
            $fields = " ic.idImputadoCarpeta AS id, cj.numero, cj.anio, tc.desTipoCarpeta, ic.nombre AS NombrePer,ic.paterno AS PaternoPer, ic.materno, ic.nombreMoral,ic.cveTipoPersona, 'CJ' AS TipoOrigen,cj.carpetaInv,cj.nuc,j.desjuzgado,'Imputado Carpeta' AS tipo   ";
            $orden = "  ic ";
            $orden.= " LEFT JOIN tblcarpetasjudiciales AS cj   ON cj.idCarpetaJudicial = ic.idCarpetaJudicial ";
            $orden.= " LEFT JOIN tbljuzgados AS j  ON j.cveJuzgado=cj.cveJuzgado     ";
            $orden.= " LEFT JOIN tbltiposcarpetas AS tc  ON tc.cveTipoCarpeta = cj.cveTipoCarpeta      ";
            $orden.= " WHERE ic.activo = 'S'   ";
            $orden.= " AND (ic.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%' ";
            $orden.= " OR ic.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$cadena."%' ";
            $orden.= " OR ic.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%' ";
            $orden.= " OR ic.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%' ";
            $orden.= " OR ic.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%' ";
            $orden.= " OR CONCAT_WS(' ', ic.nombre, ic.paterno, ic.materno) COLLATE utf8_spanish_ci LIKE '%".$cadena."%'";
            $orden.= " OR CONCAT_WS(' ', ic.nombre, ic.paterno, ic.materno) COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%'";
            $orden.= " OR CONCAT_WS(' ', ic.nombre, ic.materno, ic.paterno) COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%'";
            $orden.= " OR CONCAT_WS(' ', ic.paterno, ic.materno, ic.nombre) COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%'";
            $orden.= " OR CONCAT_WS(' ', ic.materno, ic.paterno, ic.nombre) COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%')";
            #Imputados Exhortos
            $orden.= " UNION ALL   ";
            $orden.= " SELECT iex.idImputadoExhorto AS id, exh.numExhorto numero, exh.aniExhorto anio,  ";
            $orden.= " 'NUM EXHORTO ' AS desTipoCarpeta,iex.nombre AS NombrePer,iex.paterno AS PaternoPer, ";
            $orden.= " iex.materno, iex.nombreMoral,iex.cveTipoPersona, 'Exh' AS TipoOrigen,exh.carpetaInv,exh.nuc,j.desjuzgado,'Imputado Exhorto' AS tipo ";
            $orden.= " FROM   tbljuzgados AS j   ";
            $orden.= " LEFT JOIN tblexhortos exh  ON j.cveJuzgado=exh.cveJuzgado     ";
        $orden.= " LEFT JOIN tblimputadosexhortos AS iex  ON exh.idExhorto = iex.idExhorto    ";
            $orden.= " WHERE iex.activo='S'     ";
            $orden.= " AND (iex.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%' ";
            $orden.= " OR iex.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$cadena."%' ";
            $orden.= " OR iex.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%' ";
            $orden.= " OR iex.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%' ";
            $orden.= " OR iex.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%' ";
            $orden.= " OR CONCAT_WS(' ', iex.nombre, iex.materno, iex.paterno) COLLATE utf8_spanish_ci LIKE '%".$cadena."%' ";
            $orden.= " OR CONCAT_WS(' ', iex.nombre, iex.paterno, iex.materno) COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%' ";
            $orden.= " OR CONCAT_WS(' ', iex.nombre, iex.paterno, iex.materno) COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%' ";
            $orden.= " OR CONCAT_WS(' ', iex.paterno, iex.materno, iex.nombre) COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%' ";
            $orden.= " OR CONCAT_WS(' ', iex.materno, iex.paterno, iex.nombre) COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%')";
             $orden.= " UNION ALL   ";
            //$orden.= " #Quejosos Amparos--> Acusado de un perjuicio";------>>>>>>>AQUI
            $orden.= " SELECT q.idQuejoso AS id, a.numAmparo AS num, a.aniAmparo AS anio,'Amparo' AS desTipoCarpeta,  ";
            $orden.= " q.nombreQ AS NombrePer,q.paternoQ AS PaternoPer, q.maternoQ AS materno, q.NombreMoral AS nombreMoral, ";
            $orden.= " q.cveTipoPersona, 'AmparoQ' AS TipoOrigen,a.carpetaInv,'' AS nuc,j.desjuzgado,'Quejoso Amparo' AS tipo ";
            $orden.= " FROM tblquejosos  q ";
            $orden.= " LEFT JOIN tblamparos AS a   ON a.idamparo = q.idQuejoso ";
            $orden.= " LEFT JOIN tbljuzgados AS j  ON j.cveJuzgado=a.cveJuzgado     ";
            $orden.= " WHERE a.activo = 'S'  ";
            $orden.= " AND q.activo='S'  ";
            $orden.= " AND (q.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%' ";
            $orden.= " OR q.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$cadena."%' ";
            $orden.= " OR q.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%' ";
            $orden.= " OR q.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%' ";
            $orden.= " OR q.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%' ";
            $orden.= " OR CONCAT_WS(' ', q.nombreQ, q.paternoQ, q.maternoQ) COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%'";
            $orden.= " OR CONCAT_WS(' ', q.nombreQ, q.paternoQ, q.maternoQ) COLLATE utf8_spanish_ci LIKE '%".$cadena."%'";
            $orden.= " OR CONCAT_WS(' ', q.nombreQ, q.maternoQ, q.paternoQ) COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%'";
            $orden.= " OR CONCAT_WS(' ', q.paternoQ,q.maternoQ, q.nombreQ) COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%'";
            $orden.= " OR CONCAT_WS(' ', q.maternoQ,q.paternoQ, q.nombreQ) COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%')";
            $orden.= " UNION ALL   ";
            //$orden.= " #--Solicitudes Imputados ";
            $orden.= " SELECT isa.idImputadoSolicitud AS id, sa.numero, sa.anio, tc.desTipoCarpeta,  ";
            $orden.= " isa.nombre AS NombrePer,isa.paterno AS PaternoPer, isa.materno, isa.nombreMoral, ";
            $orden.= " isa.cveTipoPersona, 'Solicitud' AS TipoOrigen,sa.carpetaInv,sa.nuc,j.desjuzgado,'Imputado Solicitud' AS tipo ";
            $orden.= " FROM tblimputadossolicitudes  isa ";
            $orden.= " LEFT JOIN tblsolicitudesaudiencias AS sa   ON sa.idSolicitudAudiencia = isa.idSolicitudAudiencia ";
            $orden.= " LEFT JOIN tbljuzgados AS j  ON j.cveJuzgado=sa.cveJuzgado     ";
            $orden.= " LEFT JOIN tbltiposcarpetas AS tc  ON tc.cveTipoCarpeta = sa.cveTipoCarpeta      ";
            $orden.= " WHERE isa.activo = 'S'  ";
            $orden.= " AND sa.activo='S'  ";
            $orden.= " AND sa.cveEstatusSolicitud!=1 ";
            $orden.= " AND (isa.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%' "; 
            $orden.= " OR isa.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$cadena."%' "; 
            $orden.= " OR isa.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%' ";
            $orden.= " OR isa.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%' ";
            $orden.= " OR isa.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%' ";
            $orden.= " OR CONCAT_WS(' ', isa.nombre, isa.paterno, isa.materno) COLLATE utf8_spanish_ci LIKE '%".$cadena."%'";
            $orden.= " OR CONCAT_WS(' ', isa.nombre, isa.paterno, isa.materno) COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%'";
            $orden.= " OR CONCAT_WS(' ', isa.nombre, isa.materno, isa.paterno) COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%'";
            $orden.= " OR CONCAT_WS(' ', isa.paterno, isa.materno, isa.nombre) COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%'";
            $orden.= " OR CONCAT_WS(' ', isa.materno, isa.paterno, isa.nombre) COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%')";
            $orden.= " GROUP BY sa.idreferencia ";
        $imputadoscarpetasDto = new ImputadoscarpetasDTO();
            $response = $ImputadoscarpetasDao->selectImputadoscarpetasPag($imputadoscarpetasDto, null, $orden, null, $fields);
        }
        else{
            #Ofendidos Carpetas
           $OfendidoscarpetasDao = new OfendidoscarpetasDAO();
            $fields = " oc.idOfendidoCarpeta AS id, cj.numero, cj.anio, tc.desTipoCarpeta, oc.nombre AS NombrePer,oc.paterno AS PaternoPer, oc.materno, oc.nombreMoral,oc.cveTipoPersona, 'CJ' AS TipoOrigen,cj.carpetaInv,cj.nuc,j.desjuzgado,'Sujeto Pasivo Carpeta' AS tipo  ";
            $orden = " oc ";
            $orden.= " LEFT JOIN tblcarpetasjudiciales AS cj ON cj.idCarpetaJudicial = oc.idCarpetaJudicial   ";
        $orden.= " LEFT JOIN tbljuzgados AS j  ON j.cveJuzgado=cj.cveJuzgado   ";
            $orden.= " LEFT JOIN tbltiposcarpetas AS tc  ON tc.cveTipoCarpeta = cj.cveTipoCarpeta   ";
            $orden.= " WHERE oc.activo = 'S'   ";
            $orden.= " AND (oc.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%' ";
            $orden.= " OR oc.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%' ";
            $orden.= " OR oc.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%' ";
            $orden.= " OR oc.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%' ";
            $orden.= " OR CONCAT_WS(' ', oc.nombre, oc.paterno, oc.materno) COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%'";
            $orden.= " OR CONCAT_WS(' ', oc.nombre, oc.materno, oc.paterno) COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%'";
            $orden.= " OR CONCAT_WS(' ', oc.materno, oc.paterno, oc.nombre) COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%'";
            $orden.= " OR CONCAT_WS(' ', oc.paterno, oc.materno, oc.nombre) COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%')";
            #Ofendidos Exhortos
            $orden.= " UNION ALL   ";
            $orden.= " SELECT oex.idOfenfendidoExhorto AS id, exh.numExhorto numero, exh.aniExhorto anio,  ";
            $orden.= " 'NUM EXHORTO ' AS desTipoCarpeta,oex.nombre AS NombrePer,oex.paterno AS PaternoPer, ";
            $orden.= " oex.materno, oex.nombreMoral,oex.cveTipoPersona, 'Exh' AS TipoOrigen,exh.carpetaInv, ";
            $orden.= " exh.nuc,j.desjuzgado,'Sujeto Pasivo Exhorto' AS tipo   ";
            $orden.= " FROM   tbljuzgados AS j   ";
            $orden.= " LEFT JOIN tblexhortos exh  ON j.cveJuzgado=exh.cveJuzgado      ";
            $orden.= " LEFT JOIN tblofenfendidosexhortos AS oex  ON exh.idExhorto = oex.idExhorto      ";
            $orden.= " WHERE oex.activo='S'    ";
            $orden.= " AND (oex.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%' ";
            $orden.= " OR oex.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$cadena."%' ";
            $orden.= " OR oex.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%' ";
            $orden.= " OR oex.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%' ";
            $orden.= " OR oex.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%' ";
            $orden.= " OR CONCAT_WS(' ', oex.nombre, oex.paterno, oex.materno) COLLATE utf8_spanish_ci LIKE '%".$cadena."%'";
            $orden.= " OR CONCAT_WS(' ', oex.nombre, oex.paterno, oex.materno) COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%'";
            $orden.= " OR CONCAT_WS(' ', oex.nombre, oex.materno, oex.paterno) COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%'";
            $orden.= " OR CONCAT_WS(' ', oex.paterno, oex.materno, oex.nombre) COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%'";
            $orden.= " OR CONCAT_WS(' ', oex.materno, oex.paterno, oex.nombre) COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%')";
            $orden.= " UNION ALL   ";
            //$orden.= " #Terceros Perjudicados Amparos ----> Ofendido o las partes, que tengan derecho a la reparaci�n del da�o";
            $orden.= " SELECT t.idTercero AS id, a.numAmparo AS num, a.aniAmparo AS anio,'Amparo' AS desTipoCarpeta,  ";
            $orden.= " t.nombreT AS NombrePer,t.paternoT AS PaternoPer, t.maternoT AS materno, t.NombreMoral AS nombreMoral, ";
            $orden.= " t.cveTipoPersona, 'AmparoT' AS TipoOrigen,a.carpetaInv,'' AS nuc,j.desjuzgado,'Tercero Perjudicado Amparo' AS tipo ";
            $orden.= " FROM tbltercerosperjudicados  t ";
            $orden.= " LEFT JOIN tblamparos AS a   ON a.idAmparo = t.idAmparo ";
            $orden.= " LEFT JOIN tbljuzgados AS j  ON j.cveJuzgado=a.cveJuzgado     ";
            $orden.= " WHERE a.activo = 'S'  ";
            $orden.= " AND t.activo='S'  ";
            $orden.= " AND (t.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%' ";
            $orden.= " OR t.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$cadena."%' ";
            $orden.= " OR t.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%' ";
            $orden.= " OR t.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%' ";
            $orden.= " OR t.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%' ";
            $orden.= " OR CONCAT_WS(' ', t.nombreT, t.paternoT, t.maternoT) COLLATE utf8_spanish_ci LIKE  '%".$cadena."%'";
            $orden.= " OR CONCAT_WS(' ', t.nombreT, t.maternoT, t.paternoT) COLLATE utf8_spanish_ci LIKE  '%".$nombre."% %".$materno."% %".$paterno."%'";
            $orden.= " OR CONCAT_WS(' ', t.paternoT,t.maternoT, t.nombreT) COLLATE utf8_spanish_ci  LIKE '%".$paterno."% %".$materno."% %".$nombre."%'";
            $orden.= " OR CONCAT_WS(' ', t.maternoT,t.paternoT, t.nombreT) COLLATE utf8_spanish_ci  LIKE '%".$materno."% %".$paterno."% %".$nombre."%')";
            //$orden.= " #Ofendidos Solicitudes ";
            $orden.= " UNION ALL   ";
            $orden.= " SELECT osa.idOfendidoSolicitud AS id, sa.numero, sa.anio, tc.desTipoCarpeta,  ";
            $orden.= " osa.nombre AS NombrePer,osa.paterno AS PaternoPer, osa.materno, osa.nombreMoral, ";
            $orden.= " osa.cveTipoPersona, 'SolicitudO' AS TipoOrigen,sa.carpetaInv,sa.nuc,j.desjuzgado,'Sujeto Pasivo Solicitud' AS tipo ";
            $orden.= " FROM tblofendidossolicitudes  osa ";
            $orden.= " LEFT JOIN tblsolicitudesaudiencias AS sa   ON sa.idSolicitudAudiencia = osa.idSolicitudAudiencia ";
            $orden.= " LEFT JOIN tbljuzgados AS j  ON j.cveJuzgado=sa.cveJuzgado     ";
            $orden.= " LEFT JOIN tbltiposcarpetas AS tc  ON tc.cveTipoCarpeta = sa.cveTipoCarpeta      ";
            $orden.= " WHERE osa.activo = 'S'  ";
            $orden.= " AND sa.activo='S'  ";
            $orden.= " AND sa.cveEstatusSolicitud!=1 ";
            $orden.= " AND (osa.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%' "; 
            $orden.= " OR osa.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$cadena."%' "; 
            $orden.= " OR osa.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%' ";
            $orden.= " OR osa.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%' ";
            $orden.= " OR osa.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%' ";
            $orden.= " OR CONCAT_WS(' ', osa.nombre, osa.paterno, osa.materno) COLLATE utf8_spanish_ci LIKE '%".$cadena."%'";
            $orden.= " OR CONCAT_WS(' ', osa.nombre, osa.paterno, osa.materno) COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%'";
            $orden.= " OR CONCAT_WS(' ', osa.nombre, osa.materno, osa.paterno) COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%'";
            $orden.= " OR CONCAT_WS(' ', osa.paterno,osa.materno, osa.nombre) COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%'";
            $orden.= " OR CONCAT_WS(' ', osa.materno,osa.paterno, osa.nombre) COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%')";
            $orden.= " GROUP BY sa.idreferencia ";
            //$orden = " #----FIN------ ";
            $OfendidoscarpetasDto = new OfendidoscarpetasDTO();
        $response = $OfendidoscarpetasDao->selectOfendidosVarios($OfendidoscarpetasDto, null, $orden, null, $fields);
        }

        $numTot = 0;
//      foreach ($response as $total) {
//          $numTot = $numTot + $total["totalCount"];
//      }
        $numTot = count($response);
        $json = "";
        $Pages = (int) $numTot / $param["cantxPag"];
        $restoPages = $numTot % $param["cantxPag"];
        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);
        //echo $totPages.'-pags-';

        $json .= '{"type":"OK",';
        $json .= '"totalCount":"' . $numTot . '",';
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
        } else{ 
            $index = 0;
            $json .= "],";
            $json .= "{";
            $json .= '"pagina":' . json_encode(utf8_encode($index)) . "";
            $json .= "}";
            //$json .= '"estatus":"Error",';
            //$json .= '"mensaje":"SIN RESULTADOS A MOSTRAR",';
            $json .= '"pagina":' . json_encode(($index)) . "";
            $json .= '"total":"' . ($index) . '"';
            $json .= "}";
        }
        return $json;
    }

    /* --------------------- GET PÁGINAS CONSULTA DE IMPUTADOS CON O SIN LEGAL DETENCION(Varias Tablas) */

    public function getPaginasImpConsultaLegalDetencion($ImputadoscarpetasDto, $filtroLegalDetencion, $param) {
        $ImputadoscarpetasDao = new ImputadoscarpetasDAO();
        $ImputadoscarpetasDto->setActivo("");
        $ImputadoscarpetasDto->setCveTipoPersona("");
        if ($ImputadoscarpetasDto->getNombre() != "") {
            $cadena = trim($ImputadoscarpetasDto->getNombre());
            $nombres = explode(' ', trim($ImputadoscarpetasDto->getNombre()));
            $long = count($nombres);
            $nombre = trim($nombres[0]);
            if ($long > 1) {
                $paterno = trim($nombres[1]);
            } else {
                $paterno = '';
            }
            if ($long > 2) {
                $materno = trim($nombres[2]);
            } else {
                $materno = '';
            }
        } else {
            $nombre = "";
            $paterno = "";
            $materno = "";
        }
        if ($param["tipo"] == "Imputado") {
            $fields = " ic.idImputadoCarpeta AS id, cj.numero, cj.anio, tc.desTipoCarpeta, ic.nombre AS NombrePer,ic.paterno AS PaternoPer, ic.materno, ic.nombreMoral,ic.cveTipoPersona, 'CJ' AS TipoOrigen,cj.carpetaInv,cj.nuc,j.desjuzgado,'Imputado Carpeta' AS tipo   ";
            $orden = "  ic ";
            $orden.= " LEFT JOIN tblcarpetasjudiciales AS cj   ON cj.idCarpetaJudicial = ic.idCarpetaJudicial ";
            $orden.= " LEFT JOIN tbljuzgados AS j  ON j.cveJuzgado=cj.cveJuzgado     ";
            $orden.= " LEFT JOIN tbltiposcarpetas AS tc  ON tc.cveTipoCarpeta = cj.cveTipoCarpeta      ";
            $orden.= " WHERE ic.activo = 'S'   ";
            if ($filtroLegalDetencion["cveJuzgado"] != "" || $filtroLegalDetencion["cveJuzgado"] != 0) {
                $orden.= " AND cj.cveJuzgado=" . $filtroLegalDetencion["cveJuzgado"];
            }
            if ($filtroLegalDetencion["cveTipoCarpeta"] != "" || $filtroLegalDetencion["cveTipoCarpeta"] != 0) {
                $orden.= " AND cj.cveTipoCarpeta=" . $filtroLegalDetencion["cveTipoCarpeta"];
            }
            if ($filtroLegalDetencion["numero"] != "" || $filtroLegalDetencion["numero"] != 0) {
                $orden.= " AND cj.numero=" . $filtroLegalDetencion["numero"];
            }
            if ($filtroLegalDetencion["anio"] != "" || $filtroLegalDetencion["anio"] != 0) {
                $orden.= " AND cj.anio=" . $filtroLegalDetencion["anio"];
            }
            if ($filtroLegalDetencion["LegalDetencion"] != "" || $filtroLegalDetencion["LegalDetencion"] != 0) {
                $orden.= " AND ic.LegalDetencion=" . $filtroLegalDetencion["LegalDetencion"];
            }
            if ($filtroLegalDetencion["fechaInicialRadicacionLD"] != "") {
                $fechaInicioR = explode("/", $filtroLegalDetencion["fechaInicialRadicacionLD"]);
                $orden.= " AND cj.fechaRadicacion >='" . $fechaInicioR[2] . "-" . $fechaInicioR[1] . "-" . $fechaInicioR[0] . " 00:00:00' ";
                if ($filtroLegalDetencion["fechaFinalRadicacionLD"] != "") {
                    $fechaFinalR = explode("/", $filtroLegalDetencion["fechaFinalRadicacionLD"]);
                    $orden.= " AND  cj.fechaRadicacion <= '" . $fechaFinalR[2] . "-" . $fechaFinalR[1] . "-" . $fechaFinalR[0] . " 23:59:59 ' ";
                }
            }
            $orden.= " AND (ic.nombreMoral COLLATE utf8_spanish_ci LIKE '%" . $nombre . "% %" . $paterno . "% %" . $materno . "%' ";
            $orden.= " OR ic.nombreMoral COLLATE utf8_spanish_ci LIKE '%" . $cadena . "%' ";
            $orden.= " OR ic.nombreMoral COLLATE utf8_spanish_ci LIKE '%" . $nombre . "% %" . $materno . "% %" . $paterno . "%' ";
            $orden.= " OR ic.nombreMoral COLLATE utf8_spanish_ci LIKE '%" . $paterno . "% %" . $materno . "% %" . $nombre . "%' ";
            $orden.= " OR ic.nombreMoral COLLATE utf8_spanish_ci LIKE '%" . $materno . "% %" . $paterno . "% %" . $nombre . "%' ";
            $orden.= " OR CONCAT_WS(' ', ic.nombre, ic.paterno, ic.materno) COLLATE utf8_spanish_ci LIKE '%" . $cadena . "%'";
            $orden.= " OR CONCAT_WS(' ', ic.nombre, ic.paterno, ic.materno) COLLATE utf8_spanish_ci LIKE '%" . $nombre . "% %" . $paterno . "% %" . $materno . "%'";
            $orden.= " OR CONCAT_WS(' ', ic.nombre, ic.materno, ic.paterno) COLLATE utf8_spanish_ci LIKE '%" . $nombre . "% %" . $materno . "% %" . $paterno . "%'";
            $orden.= " OR CONCAT_WS(' ', ic.paterno, ic.materno, ic.nombre) COLLATE utf8_spanish_ci LIKE '%" . $paterno . "% %" . $materno . "% %" . $nombre . "%'";
            $orden.= " OR CONCAT_WS(' ', ic.materno, ic.paterno, ic.nombre) COLLATE utf8_spanish_ci LIKE '%" . $materno . "% %" . $paterno . "% %" . $nombre . "%')";
            $imputadoscarpetasDto = new ImputadoscarpetasDTO();
            $response = $ImputadoscarpetasDao->selectImputadoscarpetasPag($imputadoscarpetasDto, null, $orden, null, $fields);
        }
        $numTot = 0;
        $numTot = count($response);
        $json = "";
        $Pages = (int) $numTot / $param["cantxPag"];
        $restoPages = $numTot % $param["cantxPag"];
        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);
        $json .= '{"type":"OK",';
        $json .= '"totalCount":"' . $numTot . '",';
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
            $index = 0;
            $json .= "],";
            $json .= "{";
            $json .= '"pagina":' . json_encode(utf8_encode($index)) . "";
            $json .= "}";
            $json .= '"pagina":' . json_encode(($index)) . "";
            $json .= '"total":"' . ($index) . '"';
            $json .= "}";
        }
        return $json;
    }

    /* ---------------------------------------------------------------------------------------------------------- */
    /* ---------------VerificaCeros------------------------------------------------------------------------------- */

    public function verificaCeros($OfendidoscarpetasDto) {
        if ($OfendidoscarpetasDto->getCveOcupacion() == "0") {
            $OfendidoscarpetasDto->setCveOcupacion("");
        }
        if ($OfendidoscarpetasDto->getCvePaisNacimiento() == "0") {
            $OfendidoscarpetasDto->setCvePaisNacimiento("");
        }
        if ($OfendidoscarpetasDto->getCveEstadoNacimiento() == "0") {
            $OfendidoscarpetasDto->setCveEstadoNacimiento("");
        }
        if ($OfendidoscarpetasDto->getCveMunicipioNacimiento() == "0") {
            $OfendidoscarpetasDto->setCveMunicipioNacimiento("");
        }
        /*
          if($OfendidoscarpetasDto->getCveEstadoCivil() == "0"){
          $OfendidoscarpetasDto->setCveEstadoCivil("") ;
          }
          if($OfendidoscarpetasDto->getCveNivelInstruccion() == "0"){
          $OfendidoscarpetasDto->setCveNivelInstruccion("") ;
          } */
        if ($OfendidoscarpetasDto->getCveCereso() == "0") {
            $OfendidoscarpetasDto->setCveCereso("");
        }
        if ($OfendidoscarpetasDto->getCveTipoDetencion() == "0") {
            $OfendidoscarpetasDto->setCveTipoDetencion("");
        }

        return $OfendidoscarpetasDto;
    }

    /* ----------------------------------------------------------------------------------------------------------- */

    /*     * ******************* CONSULTA DE MUJERES EN PRISI�N ************************************************************** */
    #Descripci�n: Consulta de mujeres en prisi�n
    #Criterios: cveTipoPersona=1, cveGenero=2, detenido='S', Activo='S', fechaControlDet

    public function consultarMujeresPrision($ImputadoscarpetasDto, $param) {
        $orden = "";
        if ($param["fechaDetencionDesde"] != "") {
            $fechaDetencionDesde = explode("/", $param["fechaDetencionDesde"]);
        }
        if ($param["fechaDetencionHasta"] != "") {
            $fechaDetencionHasta = explode("/", $param["fechaDetencionHasta"]);
        }

        if ($param["vnombre"] != "") {
            $orden.=" AND nombre like '%" . $param["vnombre"] . "%' ";
        }
        if ($param["vpaterno"] != "") {
            $orden.=" AND paterno like '%" . $param["vpaterno"] . "%' ";
        }
        if ($param["vmaterno"] != "") {
            $orden.=" AND materno like '%" . $param["vmaterno"] . "%' ";
        }
        if ($param["valias"] != "") {
            $orden.=" AND alias like '%" . $param["valias"] . "%' ";
        }
        if ($param["fechaDetencionDesde"] != "") {
            $orden.=" AND fechaControlDet >= '" . $fechaDetencionDesde[2] . "-" . $fechaDetencionDesde[1] . "-" . $fechaDetencionDesde[0] . " 00:00:00' ";
        }
        if ($param["fechaDetencionHasta"] != "") {
            $orden.=" AND fechaControlDet <= '" . $fechaDetencionHasta[2] . "-" . $fechaDetencionHasta[1] . "-" . $fechaDetencionHasta[0] . " 00:00:00' ";
        }

        $orden.=" ORDER BY idImputadoCarpeta DESC ";
        $ImputadoscarpetasDao = new ImputadoscarpetasDAO();

        $ImputadoscarpetasDto = $this->verificaCeros($ImputadoscarpetasDto);
        //selectImputadoscarpetasPag($imputadoscarpetasDto,$proveedor = null, $orden = "", $param = null, $fields = null) {
        $ImputadoscarpetasDto = $ImputadoscarpetasDao->selectImputadoscarpetasPag($ImputadoscarpetasDto, $proveedor = null, $orden, $param);
        //$Todos = $ImputadoscarpetasDao->selectImputadoscarpetasPag($ImputadoscarpetasDto,$proveedor = null," ORDER BY idImputadoCarpeta DESC ");
        //print_r($ImputadoscarpetasDto);
        if ($ImputadoscarpetasDto != "") {
            $json = "";
            $json .= '{"type":"OK",';
            $json .= '"totalCount":"' . count($ImputadoscarpetasDto) . '",';
            $json .= '"data":[';
            $x = 1;
            foreach ($ImputadoscarpetasDto as $Imputado) {
                $json .= "{";
                $json .= '"idImputadoCarpeta":' . json_encode(utf8_encode($Imputado->getIdImputadoCarpeta())) . ",";
                $json .= '"nombre":' . json_encode(utf8_encode($Imputado->getNombre())) . ",";
                $json .= '"paterno":' . json_encode(utf8_encode($Imputado->getPaterno())) . ",";
                $json .= '"materno":' . json_encode(utf8_encode($Imputado->getMaterno())) . ",";
                $json .= '"rfc":' . json_encode(utf8_encode($Imputado->getRfc())) . ",";
                $json .= '"curp":' . json_encode(utf8_encode($Imputado->getCurp())) . ",";
                $json .= '"alias":' . json_encode(utf8_encode($Imputado->getAlias())) . ",";

                //"fechaDeclaracion": "2015-11-12",
                if ($Imputado->getFechaDeclaracion() != '') {
                    $tmpFecha = explode('-', $Imputado->getFechaDeclaracion());
                    $fechaDeclaracion = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                    $json .= '"fechaDeclaracion":' . json_encode($fechaDeclaracion) . ",";
                } else {
                    $json .='"fechaDeclaracion": "-",';
                }

                //"fechaImputacion": "2015-11-12",
                if ($Imputado->getFechaImputacion() != '') {
                    $tmpFecha = explode('-', $Imputado->getFechaImputacion());
                    $fechaImputacion = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                    $json .= '"fechaImputacion":' . json_encode($fechaImputacion) . ",";
                } else {
                    $json .='"fechaImputacion": "-",';
                }

                //"fecCierreInv": "2015-11-12"
                if ($Imputado->getFecCierreInv() != '') {
                    $tmpFecha = explode('-', $Imputado->getFecCierreInv());
                    $fecCierreInv = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                    $json .= '"fecCierreInv":' . json_encode($fecCierreInv) . ",";
                } else {
                    $json .='"fecCierreInv": "-",';
                }

                //"fechaSobreseimiento": "2015-11-12",------------
                if ($Imputado->getFechaSobreseimiento() != '') {
                    $tmpFecha = explode('-', $Imputado->getFechaSobreseimiento());
                    $fechaSobreseimiento = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                    $json .= '"fechaSobreseimiento":' . json_encode($fechaSobreseimiento) . ",";
                } else {
                    $json .='"fechaSobreseimiento": "-",';
                }

                //"fechaControl": "2015-11-12 09:35:25",
                if ($Imputado->getFechaControlDet() != '') {
                    $tmpFecha1 = explode(' ', $Imputado->getFechaControlDet());
                    $tmpFecha = explode('-', $tmpFecha1[0]);
                    $fechaControl = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                    $json .= '"fechaControl":' . json_encode($fechaControl) . ",";
                } else {
                    $json .='"fechaControl": "-",';
                }

                //fecTerminoCons": "2015-11-12 09:35:25",
                if ($Imputado->getFecTerminoCons() != '') {
                    $tmpFecha1 = explode(' ', $Imputado->getFecTerminoCons());
                    $tmpFecha = explode('-', $tmpFecha1[0]);
                    $fecTerminoCons = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                    $json .= '"fecTerminoCons":' . json_encode($fecTerminoCons) . ",";
                } else {
                    $json .='"fecTerminoCons": "-",';
                }

                if ($Imputado->getTieneSobreseimiento() == 'N') {
                    $sobre = 'NO';
                } else {
                    $sobre = 'SI';
                }
                $json .= '"tieneSobreseimiento":' . json_encode($sobre) . ",";
                $json .= '"ingresomensual":' . json_encode('$' . $Imputado->getIngresoMensual()) . ",";


                $CarpetaJudicialDto = new CarpetasjudicialesDTO();
                $CarpetaJudicialDao = new CarpetasjudicialesDAO();
                $CarpetaJudicialDto->setIdCarpetaJudicial($Imputado->getidCarpetaJudicial());
                //print_r($CarpetaJudicialDto).'ok';
                $CarpetaJudicialDto = $CarpetaJudicialDao->selectCarpetasjudiciales($CarpetaJudicialDto);

                if ($CarpetaJudicialDto != "") {
                    $cveTipoCarpeta = $CarpetaJudicialDto[0]->getCveTipoCarpeta();
                    $numero = $CarpetaJudicialDto[0]->getNumero();
                    $anio = $CarpetaJudicialDto[0]->getAnio();

                    $carpetaInv = $CarpetaJudicialDto[0]->getCarpetaInv();
                    $nuc = $CarpetaJudicialDto[0]->getNuc();
                    $cveJuzgado = $CarpetaJudicialDto[0]->getCveJuzgado();
                    $JuzgadosDto = new JuzgadosDTO();
                    $JuzgadosDao = new JuzgadosDAO();
                    $JuzgadosDto->setCveJuzgado($CarpetaJudicialDto[0]->getCveJuzgado());
                    $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto);
                    $DesJuzgado = $JuzgadosDto[0]->getDesJuzgado();
                    $TiposCarpetaDto = new TiposcarpetasDTO();
                    $TiposCarpetaDao = new TiposcarpetasDAO();
                    $TiposCarpetaDto->setCveTipoCarpeta($CarpetaJudicialDto[0]->getCveTipoCarpeta());
                    $TiposCarpetaDto = $TiposCarpetaDao->selectTiposcarpetas($TiposCarpetaDto);
                    if ($TiposCarpetaDto != "") {
                        $DesCarpeta = $TiposCarpetaDto[0]->getDesTipoCarpeta();
                    } else {
                        $DesCarpeta = "";
                    }
                    $Carpeta = $DesCarpeta . ' ' . $numero . '/' . $anio;
                } else {
                    $Carpeta = "";
                }

                $json .= '"Carpeta":' . json_encode(utf8_encode($Carpeta)) . ",";
                $json .= '"CarpetaInv":' . json_encode(utf8_encode($carpetaInv)) . ",";
                $json .= '"nuc":' . json_encode(utf8_encode($nuc)) . ",";
                $json .= '"Juzgado":' . json_encode(utf8_encode($DesJuzgado)) . ",";

                /* Datos del Imputado con el delito y el ofendido */
                $ImpofedelcarpetasDto = new ImpofedelcarpetasDTO();
                $ImpofedelcarpetasDao = new ImpofedelcarpetasDAO();
                $ImpofedelcarpetasDto->setIdImputadoCarpeta($Imputado->getIdImputadoCarpeta());
                $ImpofedelcarpetasDto->setActivo('S');
                //print_r($ImpofedelcarpetasDto);
                $ImpofedelcarpetasDto = $ImpofedelcarpetasDao->selectImpofedelcarpetas($ImpofedelcarpetasDto);
                if ($ImpofedelcarpetasDto != "") {
                    $ImputadossentenciasDto = new ImputadossentenciasDTO();
                    $ImputadossentenciasDao = new ImputadossentenciasDAO();
                    $ImputadossentenciasDto->setIdImpOfeDelCarpeta($ImpofedelcarpetasDto[0]->getIdImpOfeDelCarpeta());
                    $ImputadossentenciasDto->setActivo('S');
                    $ImputadossentenciasDto = $ImputadossentenciasDao->selectImputadossentencias($ImputadossentenciasDto);
                    if($ImputadossentenciasDto!="")
                    {
                        $ActuacionesDto = new ActuacionesDTO();
                        $ActuacionesDao = new ActuacionesDAO();
                        $ActuacionesDto->setIdActuacion($ImputadossentenciasDto[0]->getIdActuacion());
                        $ActuacionesDto->setActivo('S');
                        $ActuacionesDto = $ActuacionesDao->selectActuaciones($ActuacionesDto);
                        if($ActuacionesDto!="")
                        {
                            if($ActuacionesDto[0]->getFechaSentencia()!=''){
                            $tmpFecha = explode('-',$ActuacionesDto[0]->getFechaSentencia());
                            $fechaSentencia=$tmpFecha[2]. '/'.$tmpFecha[1].'/'.$tmpFecha[0];
                            $json .= '"fechasentecia":' . json_encode($fechaSentencia) . ",";
                            }else{$json .='"fechasentecia": "",';}
                            
                            if($ActuacionesDto[0]->getFechaEjecutoria()!=''){
                            $tmpFecha = explode('-',$ActuacionesDto[0]->getFechaEjecutoria());
                            $fechaEjecutoria=$tmpFecha[2]. '/'.$tmpFecha[1].'/'.$tmpFecha[0];
                            $json .= '"fechaejecutoria":' . json_encode($fechaEjecutoria) . ",";
                            }else{$json .='"fechaejecutoria": "",';}
                            
                            //$json .= '"fechasentecia":' . json_encode(utf8_encode($ActuacionesDto[0]->getFechaSentencia())).",";
                            //$json .= '"fechaejecutoria":' . json_encode(utf8_encode($ActuacionesDto[0]->getFechaEjecutoria())).",";
                            $TipossentenciasDto = new TipossentenciasDTO();
                            $TipossentenciasDao = new TipossentenciasDAO();
                            $TipossentenciasDto->setCveTipoSentencia($ActuacionesDto[0]->getCveTipoSentencia());
                            $TipossentenciasDto->setActivo('S');
                            $TipossentenciasDto = $TipossentenciasDao->selectTipossentencias($TipossentenciasDto);
                            $json .= '"tiposentencia":' . json_encode(utf8_encode($TipossentenciasDto[0]->getDesTipoSentencia())).",";
                        }
                        else
                        {
                            $json .= '"fechasentecia": "",';
                            $json .= '"fechaejecutoria": "",';
                            $json .= '"tiposentencia": "",';
                        }

                        $ImputadossancionesDto = new ImputadossancionesDTO();
                        $ImputadossancionesDao = new ImputadossancionesDAO();
                        $ImputadossancionesDto->setIdImputadoSentencia($ImputadossentenciasDto[0]->getIdImputadoSentencia());
                        $ImputadossancionesDto->setActivo('S');
                        $ImputadossancionesDto->setCveTipoSancion(1);//Prisi�n
                        $ImputadossancionesDto = $ImputadossancionesDao->selectImputadossanciones($ImputadossancionesDto);
                        if($ImputadossancionesDto!="")
                        {
                            if($ImputadossancionesDto[0]->getFechaInicio()!=''){
                            $tmp = explode(' ',$ImputadossancionesDto[0]->getFechaInicio());
                            $tmpFecha = explode('-',$tmp[0]);
                            
                            $FechaInicioSancion=$tmpFecha[2]. '/'.$tmpFecha[1].'/'.$tmpFecha[0];
                            $json .= '"FechaInicioSancion":' . json_encode($FechaInicioSancion.' '.$tmp[1]) . ",";
                            }else{$json .='"FechaInicioSancion": "",';}

                            if($ImputadossancionesDto[0]->getFechaTermina()!=''){
                            $tmp = explode(' ',$ImputadossancionesDto[0]->getFechaTermina());
                            $tmpFecha = explode('-',$tmp[0]);
                            
                            $FechaFinSancion=$tmpFecha[2]. '/'.$tmpFecha[1].'/'.$tmpFecha[0];
                            $json .= '"FechaFinSancion":' . json_encode($FechaFinSancion.' '.$tmp[1]) . ",";
                            }else{$json .='"FechaFinSancion": "",';}
                            
//                            $json .= '"FechaInicioSancion":' . json_encode(utf8_encode($ImputadossancionesDto[0]->getFechaInicio())).",";
//                            $json .= '"FechaFinSancion":' . json_encode(utf8_encode($ImputadossancionesDto[0]->getFechaTermina())).",";
                            
                            $json .= '"anioPrision":' . json_encode(utf8_encode($ImputadossancionesDto[0]->getAnioPrision())).",";
                            $json .= '"mesPrision":' . json_encode(utf8_encode($ImputadossancionesDto[0]->getMesPrision())).",";
                            $json .= '"diasPrision":' . json_encode(utf8_encode($ImputadossancionesDto[0]->getDiasPrision())).",";
                            $json .= '"cveTipoSancion":' . json_encode(utf8_encode($ImputadossancionesDto[0]->getCveTipoSancion())).",";
                            
                            $TipossancionesDto = new TipossancionesDTO();
                            $TipossancionesDao = new TipossancionesDAO();
                            $TipossancionesDto->setCveTipoSancion($ImputadossancionesDto[0]->getCveTipoSancion());
                            //$TipossancionesDto->setActivo('S');
                            $TipossancionesDto = $TipossancionesDao->selectTipossanciones($TipossancionesDto);
                            $json .= '"tiposancion":' . json_encode(utf8_encode($TipossancionesDto[0]->getDesTipoSancion())).",";
                        }
                        else
                        {
                            $json .= '"FechaInicioSancion": "",';
                            $json .= '"FechaFinSancion": "",';
                            $json .= '"anioPrision": "",';
                            $json .= '"mesPrision": "",';
                            $json .= '"diasPrision": "",';
                            $json .= '"cveTipoSancion": "",';
                            $json .= '"tiposancion": "",';
                        }
                    }
                    else
                    {
                        $json .= '"fechasentecia": "",';
                        $json .= '"fechaejecutoria": "",';
                        $json .= '"tiposentencia": "",';
                        
                        $json .= '"FechaInicioSancion": "",';
                        $json .= '"FechaFinSancion": "",';
                        $json .= '"anioPrision": "",';
                        $json .= '"mesPrision": "",';
                        $json .= '"diasPrision": "",';
                        $json .= '"cveTipoSancion": "",';
                        $json .= '"tiposancion": "",';
                    }
                }
                else{
                    $json .= '"fechasentecia": "",';
                    $json .= '"fechaejecutoria": "",';
                    $json .= '"tiposentencia": "",';
                
                $json .= '"FechaInicioSancion": "",';
                $json .= '"FechaFinSancion": "",';
                $json .= '"anioPrision": "",';
                $json .= '"mesPrision": "",';
                $json .= '"diasPrision": "",';
                $json .= '"cveTipoSancion": "",';
                $json .= '"tiposancion": "",';
                }
                if ($Imputado->getCveOcupacion() != "") {
                    $OcupacionesDto = new OcupacionesDTO();
                    $OcupacionesDao = new OcupacionesDAO();
                    $OcupacionesDto->setCveOcupacion($Imputado->getCveOcupacion());
                    $OcupacionesDto = $OcupacionesDao->selectOcupaciones($OcupacionesDto);
                    $json .= '"desocupacion":' . json_encode(utf8_encode($OcupacionesDto[0]->getDesOcupacion())) . ",";
                } else {
                    $json .= '"desocupacion": "",';
                }

                if ($Imputado->getFechaNacimiento() != "") {
                    $tmpFecha = explode('-', $Imputado->getFechaNacimiento());
                    $fechaNacimiento = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                    $json .= '"fechaNacimiento":' . json_encode($fechaNacimiento) . ",";
                } else {
                    $json .= '"fechaNacimiento": "",';
                }
                $json .= '"edad":' . json_encode(utf8_encode($Imputado->getEdad())) . ",";

                if ($Imputado->getCvePaisNacimiento() != "") {
                    $PaisesDto = new PaisesDTO();
                    $PaisesDao = new PaisesDAO();
                    $PaisesDto->setCvePais($Imputado->getCvePaisNacimiento());
                    $PaisesDto = $PaisesDao->selectPaises($PaisesDto);
                    $json .= '"desPais":' . json_encode(utf8_encode($PaisesDto[0]->getDesPais())) . ",";
                } else {
                    $json .= '"desPais": "",';
                }

                if ($Imputado->getCveEstadoNacimiento() != "" and $Imputado->getCveEstadoNacimiento() != "0") {
                    $EstadosDto = new EstadosDTO();
                    $EstadosDao = new EstadosDAO();
                    $EstadosDto->setCveEstado($Imputado->getCveEstadoNacimiento());
                    $EstadosDto = $EstadosDao->selectEstados($EstadosDto);
                    $json .= '"estadoNacimiento":' . json_encode(utf8_encode($EstadosDto[0]->getDesEstado())) . ",";
                } else {
                    $json .= '"estadoNacimiento":' . json_encode(utf8_encode($Imputado->getEstadoNacimiento())) . ",";
                }

                if ($Imputado->getCveMunicipioNacimiento() != "" and $Imputado->getCveMunicipioNacimiento() != "0") {
                    $MunicipiosDto = new MunicipiosDTO();
                    $MunicipiosDao = new MunicipiosDAO();
                    $MunicipiosDto->setCveMunicipio($Imputado->getCveMunicipioNacimiento());
                    $MunicipiosDto = $MunicipiosDao->selectMunicipios($MunicipiosDto);
                    $json .= '"municipioNacimiento":' . json_encode(utf8_encode($MunicipiosDto[0]->getDesMunicipio())) . ",";
                } else {
                    $json .= '"municipioNacimiento":' . json_encode(utf8_encode($Imputado->getMunicipioNacimiento())) . ",";
                }

                if ($Imputado->getCveEstadoCivil() != "") {
                    $EstadosCivilesDto = new EstadoscivilesDTO();
                    $EstadosCivilesDao = new EstadoscivilesDAO();
                    $EstadosCivilesDto->setCveEstadoCivil($Imputado->getCveEstadoCivil());
                    $EstadosCivilesDto = $EstadosCivilesDao->selectEstadosciviles($EstadosCivilesDto);
                    $json .= '"desEstadoCivil":' . json_encode(utf8_encode($EstadosCivilesDto[0]->getDesEstadoCivil())) . ",";
                } else {
                    $json .= '"desEstadoCivil": "",';
                }

                if ($Imputado->getCveNivelInstruccion() != "") {
                    $NivelInstruccionesDto = new NivelesinstruccionesDTO();
                    $NivelInstruccionesDao = new NivelesinstruccionesDAO();
                    $NivelInstruccionesDto->setCveNivelInstruccion($Imputado->getCveNivelInstruccion());
                    $NivelInstruccionesDto = $NivelInstruccionesDao->selectNivelesinstrucciones($NivelInstruccionesDto);
                    $json .= '"desNivelInstruccion":' . json_encode(utf8_encode($NivelInstruccionesDto[0]->getDesNivelInstruccion())) . ",";
                } else {
                    $json .= '"desNivelInstruccion": "",';
                }

                if ($Imputado->getCveEspanol() != "") {
                    $EspanolDto = new EspanolDTO();
                    $EspanolDao = new EspanolDAO();
                    $EspanolDto->setCveEspanol($Imputado->getCveEspanol());
                    $EspanolDto = $EspanolDao->selectEspanol($EspanolDto);
                    $json .= '"desEspanol":' . json_encode(utf8_encode($EspanolDto[0]->getDesEspanol())) . ",";
                } else {
                    $json .= '"desEspanol": "",';
                }

                if ($Imputado->getCveDialectoIndigena() != "") {
                    $DialectoIndigenaDto = new DialectoindigenaDTO();
                    $DialectoIndigenaDao = new DialectoindigenaDAO();
                    $DialectoIndigenaDto->setCveDialectoIndigena($Imputado->getCveDialectoIndigena());
                    $DialectoIndigenaDto = $DialectoIndigenaDao->selectDialectoindigena($DialectoIndigenaDto);
                    $json .= '"desDialecto":' . json_encode(utf8_encode($DialectoIndigenaDto[0]->getDesDialectoIndigena())) . ",";
                } else {
                    $json .= '"desDialecto": "",';
                }

                if ($Imputado->getCveTipoFamiliaLinguistica() != "") {
                    $FamLinDto = new TipofamilialinguisticaDTO();
                    $FamLinDao = new TipofamilialinguisticaDAO();
                    $FamLinDto->setCveTipoFamiliaLinguistica($Imputado->getCveTipoFamiliaLinguistica());
                    $FamLinDto = $FamLinDao->selectTipofamilialinguistica($FamLinDto);
                    $json .= '"desFamLin":' . json_encode(utf8_encode('-' . $FamLinDto[0]->getDesTipoFamiliaLinguistica())) . ",";
                } else {
                    $json .= '"desFamLin": "",';
                }

                if ($Imputado->getCveInterprete() != "") {
                    $InterpreteDto = new InterpretesDTO();
                    $InterpreteDao = new InterpretesDAO();
                    $InterpreteDto->setCveInterprete($Imputado->getCveInterprete());
                    $InterpreteDto = $InterpreteDao->selectInterpretes($InterpreteDto);
                    $json .= '"interprete":' . json_encode(utf8_encode($InterpreteDto[0]->getDesInterprete())) . ",";
                } else {
                    $json .= '"interprete": "",';
                }

                if ($Imputado->getCveEstadoPsicofisico() != "") {
                    $EdoPsicofisicoDto = new EstadospsicofisicosDTO();
                    $EdoPsicofisicoDao = new EstadospsicofisicosDAO();
                    $EdoPsicofisicoDto->setCveEstadoPsicofisico($Imputado->getCveEstadoPsicofisico());
                    $EdoPsicofisicoDto = $EdoPsicofisicoDao->selectEstadospsicofisicos($EdoPsicofisicoDto);
                    $json .= '"edopsico":' . json_encode(utf8_encode($EdoPsicofisicoDto[0]->getDesEstadoPsicofisico())) . ",";
                } else {
                    $json .= '"edopsico": "",';
                }

                if ($Imputado->getCveGrupoEdnico() != "") {
                    $GrupoEtnicoDto = new GruposednicosDTO();
                    $GrupoEtnicoDao = new GruposednicosDAO();
                    $GrupoEtnicoDto->setCveGrupoEdnico($Imputado->getCveGrupoEdnico());
                    $GrupoEtnicoDto = $GrupoEtnicoDao->selectGruposednicos($GrupoEtnicoDto);
                    $json .= '"grupoetnico":' . json_encode(utf8_encode($GrupoEtnicoDto[0]->getDesGrupoEdnico())) . ",";
                } else {
                    $json .= '"grupoetnico": "",';
                }

                if ($Imputado->getCveTipoDetencion() != "") {
                    $TiposDetencionesDto = new TiposdetencionesDTO();
                    $TiposDetencionesDao = new TiposdetencionesDAO();
                    $TiposDetencionesDto->setCveTipoDetencion($Imputado->getCveTipoDetencion());
                    $TiposDetencionesDto = $TiposDetencionesDao->selectTiposdetenciones($TiposDetencionesDto);
                    $json .= '"tipodetencion":' . json_encode(utf8_encode($TiposDetencionesDto[0]->getDesTipoDetencion())) . ",";
                } else {
                    $json .= '"tipodetencion": "",';
                }

                if ($Imputado->getCveTipoReincidencia() != "") {
                    $ReincidenciasDto = new TiposreincidenciasDTO();
                    $ReincidenciasDao = new TiposreincidenciasDAO();
                    $ReincidenciasDto->setCveTipoReincidencia($Imputado->getCveTipoReincidencia());
                    $ReincidenciasDto = $ReincidenciasDao->selectTiposreincidencias($ReincidenciasDto);
                    $json .= '"reincidencia":' . json_encode(utf8_encode($ReincidenciasDto[0]->getDesTipoReincidencia())) . ",";
                } else {
                    $json .= '"reincidencia": "",';
                }

                if ($Imputado->getCveCereso() != "") {
                    $CeresoDto = new CeresosDTO();
                    $CeresoDao = new CeresosDAO();
                    $CeresoDto->setCveCereso($Imputado->getCveCereso());
                    $CeresoDto = $CeresoDao->selectCeresos($CeresoDto);
                    $json .= '"cereso":' . json_encode(utf8_encode($CeresoDto[0]->getDesCereso())) . ",";
                } else {
                    $json .= '"cereso": "",';
                }

                if ($Imputado->getCveEtapaProcesal() != "") {
                    $EtapaProcesalDto = new EtapasprocesalesDTO();
                    $EtapaProcesalDao = new EtapasprocesalesDAO();
                    $EtapaProcesalDto->setCveEtapaProcesal($Imputado->getCveEtapaProcesal());
                    $EtapaProcesalDto = $EtapaProcesalDao->selectEtapasprocesales($EtapaProcesalDto);
                    $json .= '"EtapaProcesal":' . json_encode(utf8_encode($EtapaProcesalDto[0]->getDesEtapaProcesal()));
                } else {
                    $json .= '"EtapaProcesal": ""';
                }


                $json .= "}";
                $x++;
                if ($x <= count($ImputadoscarpetasDto)) {
                    $json .= ",";
                }
            }
            $json .= "],";
            $json .= '"pagina":' . json_encode(utf8_encode($param["pag"])) . ",";
            $json .= '"total":"' . count($ImputadoscarpetasDto) . '"';
            $json .= "}";

            //echo"Json:---";
            //echo $json;

            return $json;
        } else {
            return "";
        }
    }

    /*     * ******************* TERMINO DE CONSULTA DE MUJERES EN PRISI�N**************************************************** */

    /*     * ******************* CONSULTA DE IMPUTADOS POR NOMBRE ************************************************************** */
    #Nombre: Consulta de imputados por nombre
    #Criterios: nombre, paterno, materno
    #Descripci�n: Se consultan los imputados de carpetas judiciales y exhortos, obteniendo su nombre, direccion y datos del expediente.

    public function consultarImputadosNombre($ImputadoscarpetasDto, $param) {

        $ImputadoscarpetasDao = new ImputadoscarpetasDAO();
        $ImputadoscarpetasDto->setActivo("");
        $ImputadoscarpetasDto->setCveTipoPersona("");

        if ($ImputadoscarpetasDto->getNombre() != "") {
            $cadena=trim($ImputadoscarpetasDto->getNombre());
            $nombres = explode(' ', trim($ImputadoscarpetasDto->getNombre()));
            $long=count($nombres);
            $nombre=trim($nombres[0]);
            if($long>1){
                $paterno=trim($nombres[1]);
            }else{$paterno='';}
            if($long>2){
                $materno=trim($nombres[2]);
            }else{$materno='';}
        }else{
            $nombre="";
            $paterno="";
            $materno="";
        }
        if ($param["tipo"]=="Imputado") {
            $fields = " ic.idImputadoCarpeta AS id, cj.numero, cj.anio, tc.desTipoCarpeta, ic.nombre AS NombrePer,ic.paterno AS PaternoPer, ic.materno, ic.nombreMoral,ic.cveTipoPersona, 'CJ' AS TipoOrigen,cj.carpetaInv,cj.nuc,j.desjuzgado,'Imputado Carpeta' AS tipo   ";
            $orden = "  ic ";
            $orden.= " LEFT JOIN tblcarpetasjudiciales AS cj   ON cj.idCarpetaJudicial = ic.idCarpetaJudicial ";
            $orden.= " LEFT JOIN tbljuzgados AS j  ON j.cveJuzgado=cj.cveJuzgado     ";
            $orden.= " LEFT JOIN tbltiposcarpetas AS tc  ON tc.cveTipoCarpeta = cj.cveTipoCarpeta      ";
            $orden.= " WHERE ic.activo = 'S'   ";
            $orden.= " AND (ic.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%' ";
            $orden.= " OR ic.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$cadena."%' ";
            $orden.= " OR ic.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%' ";
            $orden.= " OR ic.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%' ";
            $orden.= " OR ic.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%' ";
            $orden.= " OR CONCAT_WS(' ', ic.nombre, ic.paterno, ic.materno) COLLATE utf8_spanish_ci LIKE '%".$cadena."%'";
            $orden.= " OR CONCAT_WS(' ', ic.nombre, ic.paterno, ic.materno) COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%'";
            $orden.= " OR CONCAT_WS(' ', ic.nombre, ic.materno, ic.paterno) COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%'";
            $orden.= " OR CONCAT_WS(' ', ic.paterno, ic.materno, ic.nombre) COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%'";
            $orden.= " OR CONCAT_WS(' ', ic.materno, ic.paterno, ic.nombre) COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%')";
            #Imputados Exhortos
            $orden.= " UNION ALL   ";
            $orden.= " SELECT iex.idImputadoExhorto AS id, exh.numExhorto numero, exh.aniExhorto anio,  ";
            $orden.= " 'NUM EXHORTO ' AS desTipoCarpeta,iex.nombre AS NombrePer,iex.paterno AS PaternoPer, ";
            $orden.= " iex.materno, iex.nombreMoral,iex.cveTipoPersona, 'Exh' AS TipoOrigen,exh.carpetaInv,exh.nuc,j.desjuzgado,'Imputado Exhorto' AS tipo ";
            $orden.= " FROM   tbljuzgados AS j   ";
            $orden.= " LEFT JOIN tblexhortos exh  ON j.cveJuzgado=exh.cveJuzgado     ";
            $orden.= " LEFT JOIN tblimputadosexhortos AS iex  ON exh.idExhorto = iex.idExhorto    ";
            $orden.= " WHERE iex.activo='S'     ";
            $orden.= " AND (iex.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%' ";
            $orden.= " OR iex.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$cadena."%' ";
            $orden.= " OR iex.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%' ";
            $orden.= " OR iex.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%' ";
            $orden.= " OR iex.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%' ";
            $orden.= " OR CONCAT_WS(' ', iex.nombre, iex.materno, iex.paterno) COLLATE utf8_spanish_ci LIKE '%".$cadena."%' ";
            $orden.= " OR CONCAT_WS(' ', iex.nombre, iex.paterno, iex.materno) COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%' ";
            $orden.= " OR CONCAT_WS(' ', iex.nombre, iex.paterno, iex.materno) COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%' ";
            $orden.= " OR CONCAT_WS(' ', iex.paterno, iex.materno, iex.nombre) COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%' ";
            $orden.= " OR CONCAT_WS(' ', iex.materno, iex.paterno, iex.nombre) COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%')";
             $orden.= " UNION ALL   ";
            //$orden.= " #Quejosos Amparos--> Acusado de un perjuicio";------>>>>>>>AQUI
            $orden.= " SELECT q.idQuejoso AS id, a.numAmparo AS num, a.aniAmparo AS anio,'Amparo' AS desTipoCarpeta,  ";
            $orden.= " q.nombreQ AS NombrePer,q.paternoQ AS PaternoPer, q.maternoQ AS materno, q.NombreMoral AS nombreMoral, ";
            $orden.= " q.cveTipoPersona, 'AmparoQ' AS TipoOrigen,a.carpetaInv,'' AS nuc,j.desjuzgado,'Quejoso Amparo' AS tipo ";
            $orden.= " FROM tblquejosos  q ";
            $orden.= " LEFT JOIN tblamparos AS a   ON a.idamparo = q.idQuejoso ";
            $orden.= " LEFT JOIN tbljuzgados AS j  ON j.cveJuzgado=a.cveJuzgado     ";
            $orden.= " WHERE a.activo = 'S'  ";
            $orden.= " AND q.activo='S'  ";
            $orden.= " AND (q.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%' ";
            $orden.= " OR q.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$cadena."%' ";
            $orden.= " OR q.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%' ";
            $orden.= " OR q.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%' ";
            $orden.= " OR q.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%' ";
            $orden.= " OR CONCAT_WS(' ', q.nombreQ, q.paternoQ, q.maternoQ) COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%'";
            $orden.= " OR CONCAT_WS(' ', q.nombreQ, q.paternoQ, q.maternoQ) COLLATE utf8_spanish_ci LIKE '%".$cadena."%'";
            $orden.= " OR CONCAT_WS(' ', q.nombreQ, q.maternoQ, q.paternoQ) COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%'";
            $orden.= " OR CONCAT_WS(' ', q.paternoQ,q.maternoQ, q.nombreQ) COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%'";
            $orden.= " OR CONCAT_WS(' ', q.maternoQ,q.paternoQ, q.nombreQ) COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%')";
            $orden.= " UNION ALL   ";
            //$orden.= " #--Solicitudes Imputados ";
            $orden.= " SELECT isa.idImputadoSolicitud AS id, sa.numero, sa.anio, tc.desTipoCarpeta,  ";
            $orden.= " isa.nombre AS NombrePer,isa.paterno AS PaternoPer, isa.materno, isa.nombreMoral, ";
            $orden.= " isa.cveTipoPersona, 'Solicitud' AS TipoOrigen,sa.carpetaInv,sa.nuc,j.desjuzgado,'Imputado Solicitud' AS tipo ";
            $orden.= " FROM tblimputadossolicitudes  isa ";
            $orden.= " LEFT JOIN tblsolicitudesaudiencias AS sa   ON sa.idSolicitudAudiencia = isa.idSolicitudAudiencia ";
            $orden.= " LEFT JOIN tbljuzgados AS j  ON j.cveJuzgado=sa.cveJuzgado     ";
            $orden.= " LEFT JOIN tbltiposcarpetas AS tc  ON tc.cveTipoCarpeta = sa.cveTipoCarpeta      ";
            $orden.= " WHERE isa.activo = 'S'  ";
            $orden.= " AND sa.activo='S'  ";
            $orden.= " AND sa.cveEstatusSolicitud!=1 ";
            $orden.= " AND (isa.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%' "; 
            $orden.= " OR isa.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$cadena."%' "; 
            $orden.= " OR isa.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%' ";
            $orden.= " OR isa.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%' ";
            $orden.= " OR isa.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%' ";
            $orden.= " OR CONCAT_WS(' ', isa.nombre, isa.paterno, isa.materno) COLLATE utf8_spanish_ci LIKE '%".$cadena."%'";
            $orden.= " OR CONCAT_WS(' ', isa.nombre, isa.paterno, isa.materno) COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%'";
            $orden.= " OR CONCAT_WS(' ', isa.nombre, isa.materno, isa.paterno) COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%'";
            $orden.= " OR CONCAT_WS(' ', isa.paterno, isa.materno, isa.nombre) COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%'";
            $orden.= " OR CONCAT_WS(' ', isa.materno, isa.paterno, isa.nombre) COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%')";
            $orden.= " GROUP BY sa.idreferencia ";
        $imputadoscarpetasDto = new ImputadoscarpetasDTO();
        $ImputadoscarpetasDto = $ImputadoscarpetasDao->selectImputadoscarpetasPag($imputadoscarpetasDto, null, $orden, $param, $fields);

        if ($ImputadoscarpetasDto != "") {
            $datos = array("estatus" => "ok", "totalCount" => "", "pagina" => $param["pag"], "total" => "", "mensaje" => "Resultados", "datos" => array());
            foreach ($ImputadoscarpetasDto as $imputado) {
                array_push($datos["datos"], $imputado);
            }
            $datos["totalCount"] = count($datos["datos"]) - 1;
        } else {
            $datos = array("estatus" => "Error", "mensaje" => "Sin Resultados");
        }
        return $datos;
        }    
        else{
            #Ofendidos Carpetas
            $OfendidoscarpetasDao = new OfendidoscarpetasDAO();
            $fields = " oc.idOfendidoCarpeta AS id, cj.numero, cj.anio, tc.desTipoCarpeta, oc.nombre AS NombrePer,oc.paterno AS PaternoPer, oc.materno, oc.nombreMoral,oc.cveTipoPersona, 'CJ' AS TipoOrigen,cj.carpetaInv,cj.nuc,j.desjuzgado,'Sujeto Pasivo Carpeta' AS tipo  ";
            $orden = " oc ";
            $orden.= " LEFT JOIN tblcarpetasjudiciales AS cj ON cj.idCarpetaJudicial = oc.idCarpetaJudicial   ";
            $orden.= " LEFT JOIN tbljuzgados AS j  ON j.cveJuzgado=cj.cveJuzgado   ";
            $orden.= " LEFT JOIN tbltiposcarpetas AS tc  ON tc.cveTipoCarpeta = cj.cveTipoCarpeta   ";
            $orden.= " WHERE oc.activo = 'S'   ";
            $orden.= " AND (oc.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%' ";
            $orden.= " OR oc.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%' ";
            $orden.= " OR oc.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%' ";
            $orden.= " OR oc.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%' ";
            $orden.= " OR CONCAT_WS(' ', oc.nombre, oc.paterno, oc.materno) COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%'";
            $orden.= " OR CONCAT_WS(' ', oc.nombre, oc.materno, oc.paterno) COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%'";
            $orden.= " OR CONCAT_WS(' ', oc.materno, oc.paterno, oc.nombre) COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%'";
            $orden.= " OR CONCAT_WS(' ', oc.paterno, oc.materno, oc.nombre) COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%')";
            #Ofendidos Exhortos
            $orden.= " UNION ALL   ";
            $orden.= " SELECT oex.idOfenfendidoExhorto AS id, exh.numExhorto numero, exh.aniExhorto anio,  ";
            $orden.= " 'NUM EXHORTO ' AS desTipoCarpeta,oex.nombre AS NombrePer,oex.paterno AS PaternoPer, ";
            $orden.= " oex.materno, oex.nombreMoral,oex.cveTipoPersona, 'Exh' AS TipoOrigen,exh.carpetaInv, ";
            $orden.= " exh.nuc,j.desjuzgado,'Sujeto Pasivo Exhorto' AS tipo   ";
            $orden.= " FROM   tbljuzgados AS j   ";
            $orden.= " LEFT JOIN tblexhortos exh  ON j.cveJuzgado=exh.cveJuzgado      ";
            $orden.= " LEFT JOIN tblofenfendidosexhortos AS oex  ON exh.idExhorto = oex.idExhorto      ";
            $orden.= " WHERE oex.activo='S'    ";
            $orden.= " AND (oex.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%' ";
            $orden.= " OR oex.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$cadena."%' ";
            $orden.= " OR oex.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%' ";
            $orden.= " OR oex.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%' ";
            $orden.= " OR oex.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%' ";
            $orden.= " OR CONCAT_WS(' ', oex.nombre, oex.paterno, oex.materno) COLLATE utf8_spanish_ci LIKE '%".$cadena."%'";
            $orden.= " OR CONCAT_WS(' ', oex.nombre, oex.paterno, oex.materno) COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%'";
            $orden.= " OR CONCAT_WS(' ', oex.nombre, oex.materno, oex.paterno) COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%'";
            $orden.= " OR CONCAT_WS(' ', oex.paterno, oex.materno, oex.nombre) COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%'";
            $orden.= " OR CONCAT_WS(' ', oex.materno, oex.paterno, oex.nombre) COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%')";
            $orden.= " UNION ALL   ";
            //$orden.= " #Terceros Perjudicados Amparos ----> Ofendido o las partes, que tengan derecho a la reparaci�n del da�o";
            $orden.= " SELECT t.idTercero AS id, a.numAmparo AS num, a.aniAmparo AS anio,'Amparo' AS desTipoCarpeta,  ";
            $orden.= " t.nombreT AS NombrePer,t.paternoT AS PaternoPer, t.maternoT AS materno, t.NombreMoral AS nombreMoral, ";
            $orden.= " t.cveTipoPersona, 'AmparoT' AS TipoOrigen,a.carpetaInv,'' AS nuc,j.desjuzgado,'Tercero Perjudicado Amparo' AS tipo ";
            $orden.= " FROM tbltercerosperjudicados  t ";
            $orden.= " LEFT JOIN tblamparos AS a   ON a.idAmparo = t.idAmparo ";
            $orden.= " LEFT JOIN tbljuzgados AS j  ON j.cveJuzgado=a.cveJuzgado     ";
            $orden.= " WHERE a.activo = 'S'  ";
            $orden.= " AND t.activo='S'  ";
            $orden.= " AND (t.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%' ";
            $orden.= " OR t.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$cadena."%' ";
            $orden.= " OR t.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%' ";
            $orden.= " OR t.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%' ";
            $orden.= " OR t.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%' ";
            $orden.= " OR CONCAT_WS(' ', t.nombreT, t.paternoT, t.maternoT) COLLATE utf8_spanish_ci LIKE  '%".$cadena."%'";
            $orden.= " OR CONCAT_WS(' ', t.nombreT, t.maternoT, t.paternoT) COLLATE utf8_spanish_ci LIKE  '%".$nombre."% %".$materno."% %".$paterno."%'";
            $orden.= " OR CONCAT_WS(' ', t.paternoT,t.maternoT, t.nombreT) COLLATE utf8_spanish_ci  LIKE '%".$paterno."% %".$materno."% %".$nombre."%'";
            $orden.= " OR CONCAT_WS(' ', t.maternoT,t.paternoT, t.nombreT) COLLATE utf8_spanish_ci  LIKE '%".$materno."% %".$paterno."% %".$nombre."%')";
            //$orden.= " #Ofendidos Solicitudes ";
            $orden.= " UNION ALL   ";
            $orden.= " SELECT osa.idOfendidoSolicitud AS id, sa.numero, sa.anio, tc.desTipoCarpeta,  ";
            $orden.= " osa.nombre AS NombrePer,osa.paterno AS PaternoPer, osa.materno, osa.nombreMoral, ";
            $orden.= " osa.cveTipoPersona, 'SolicitudO' AS TipoOrigen,sa.carpetaInv,sa.nuc,j.desjuzgado,'Sujeto Pasivo Solicitud' AS tipo ";
            $orden.= " FROM tblofendidossolicitudes  osa ";
            $orden.= " LEFT JOIN tblsolicitudesaudiencias AS sa   ON sa.idSolicitudAudiencia = osa.idSolicitudAudiencia ";
            $orden.= " LEFT JOIN tbljuzgados AS j  ON j.cveJuzgado=sa.cveJuzgado     ";
            $orden.= " LEFT JOIN tbltiposcarpetas AS tc  ON tc.cveTipoCarpeta = sa.cveTipoCarpeta      ";
            $orden.= " WHERE osa.activo = 'S'  ";
            $orden.= " AND sa.activo='S'  ";
            $orden.= " AND sa.cveEstatusSolicitud!=1 ";
            $orden.= " AND (osa.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%' "; 
            $orden.= " OR osa.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$cadena."%' "; 
            $orden.= " OR osa.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%' ";
            $orden.= " OR osa.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%' ";
            $orden.= " OR osa.nombreMoral COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%' ";
            $orden.= " OR CONCAT_WS(' ', osa.nombre, osa.paterno, osa.materno) COLLATE utf8_spanish_ci LIKE '%".$cadena."%'";
            $orden.= " OR CONCAT_WS(' ', osa.nombre, osa.paterno, osa.materno) COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$paterno."% %".$materno."%'";
            $orden.= " OR CONCAT_WS(' ', osa.nombre, osa.materno, osa.paterno) COLLATE utf8_spanish_ci LIKE '%".$nombre."% %".$materno."% %".$paterno."%'";
            $orden.= " OR CONCAT_WS(' ', osa.paterno,osa.materno, osa.nombre) COLLATE utf8_spanish_ci LIKE '%".$paterno."% %".$materno."% %".$nombre."%'";
            $orden.= " OR CONCAT_WS(' ', osa.materno,osa.paterno, osa.nombre) COLLATE utf8_spanish_ci LIKE '%".$materno."% %".$paterno."% %".$nombre."%')";
            $orden.= " GROUP BY sa.idreferencia ";
            //$orden = " #----FIN------ ";
            $OfendidoscarpetasDto = new OfendidoscarpetasDTO();
            $OfendidoscarpetasDto = $OfendidoscarpetasDao->selectOfendidosVarios($OfendidoscarpetasDto, null, $orden, $param, $fields);
            if ($OfendidoscarpetasDto != "") {
                $datos = array("estatus" => "ok", "pagina" => $param["pag"], "total" => "", "mensaje" => "Consulta exitosa", "datos" => array());
                foreach ($OfendidoscarpetasDto as $Ofendido) {
                    array_push($datos["datos"], $Ofendido);
                }
            } else {
                $datos = array("estatus" => "Error", "mensaje" => "SIN RESULTADOS A MOSTRAR");
            }
            return $datos;
    }
    }

    /*     * ******************* CONSULTA DE IMPUTADOS CON O SIN LEGAL DETENCION ************************************************************** */
    #Nombre: Reporte de imputados por nombre que tengan o no legal detencion
    #Criterios: nombre, paterno, materno
    #Descripción: Se consultan los imputados de carpetas judiciales de control, donde existe legal detencion

    public function consultarImputadosLegalDetencion($ImputadoscarpetasDto, $filtroLegalDetencion, $param) {
        $ImputadoscarpetasDao = new ImputadoscarpetasDAO();
        $ImputadoscarpetasDto->setActivo("");
        $ImputadoscarpetasDto->setCveTipoPersona("");
        if ($ImputadoscarpetasDto->getNombre() != "") {
            $cadena = trim($ImputadoscarpetasDto->getNombre());
            $nombres = explode(' ', trim($ImputadoscarpetasDto->getNombre()));
            $long = count($nombres);
            $nombre = trim($nombres[0]);
            if ($long > 1) {
                $paterno = trim($nombres[1]);
            } else {
                $paterno = '';
            }
            if ($long > 2) {
                $materno = trim($nombres[2]);
            } else {
                $materno = '';
            }
        } else {
            $nombre = "";
            $paterno = "";
            $materno = "";
        }
        if ($param["tipo"] == "Imputado") {
            $fields = " ic.idImputadoCarpeta AS id, cj.numero, cj.anio,cj.fechaRadicacion, tc.desTipoCarpeta, ic.nombre AS NombrePer,ic.paterno AS PaternoPer, ic.materno, ic.nombreMoral,ic.cveTipoPersona,ic.LegalDetencion, 'CJ' AS TipoOrigen,cj.carpetaInv,cj.nuc,j.desjuzgado,'Imputado Carpeta' AS tipo   ";
            $orden = "  ic ";
            $orden.= " LEFT JOIN tblcarpetasjudiciales AS cj   ON cj.idCarpetaJudicial = ic.idCarpetaJudicial ";
            $orden.= " LEFT JOIN tbljuzgados AS j  ON j.cveJuzgado=cj.cveJuzgado     ";
            $orden.= " LEFT JOIN tbltiposcarpetas AS tc  ON tc.cveTipoCarpeta = cj.cveTipoCarpeta      ";
            $orden.= " WHERE ic.activo = 'S' ";
            if ($filtroLegalDetencion["cveJuzgado"] != "" || $filtroLegalDetencion["cveJuzgado"] != 0) {
                $orden.= " AND cj.cveJuzgado=" . $filtroLegalDetencion["cveJuzgado"];
            }
            if ($filtroLegalDetencion["cveTipoCarpeta"] != "" || $filtroLegalDetencion["cveTipoCarpeta"] != 0) {
                $orden.= " AND cj.cveTipoCarpeta=" . $filtroLegalDetencion["cveTipoCarpeta"];
            }
            if ($filtroLegalDetencion["numero"] != "" || $filtroLegalDetencion["numero"] != 0) {
                $orden.= " AND cj.numero=" . $filtroLegalDetencion["numero"];
            }
            if ($filtroLegalDetencion["anio"] != "" || $filtroLegalDetencion["anio"] != 0) {
                $orden.= " AND cj.anio=" . $filtroLegalDetencion["anio"];
            }
            if ($filtroLegalDetencion["LegalDetencion"] != "" || $filtroLegalDetencion["LegalDetencion"] != 0) {
                $orden.= " AND ic.LegalDetencion=" . $filtroLegalDetencion["LegalDetencion"];
            }
            if ($filtroLegalDetencion["fechaInicialRadicacionLD"] != "") {
                $fechaInicioR = explode("/", $filtroLegalDetencion["fechaInicialRadicacionLD"]);
                $orden.= " AND cj.fechaRadicacion >='" . $fechaInicioR[2] . "-" . $fechaInicioR[1] . "-" . $fechaInicioR[0] . " 00:00:00' ";
                if ($filtroLegalDetencion["fechaFinalRadicacionLD"] != "") {
                    $fechaFinalR = explode("/", $filtroLegalDetencion["fechaFinalRadicacionLD"]);
                    $orden.= " AND  cj.fechaRadicacion <= '" . $fechaFinalR[2] . "-" . $fechaFinalR[1] . "-" . $fechaFinalR[0] . " 23:59:59 ' ";
                }
            }
            $orden.= " AND (ic.nombreMoral COLLATE utf8_spanish_ci LIKE '%" . $nombre . "% %" . $paterno . "% %" . $materno . "%' ";
            $orden.= " OR ic.nombreMoral COLLATE utf8_spanish_ci LIKE '%" . $cadena . "%' ";
            $orden.= " OR ic.nombreMoral COLLATE utf8_spanish_ci LIKE '%" . $nombre . "% %" . $materno . "% %" . $paterno . "%' ";
            $orden.= " OR ic.nombreMoral COLLATE utf8_spanish_ci LIKE '%" . $paterno . "% %" . $materno . "% %" . $nombre . "%' ";
            $orden.= " OR ic.nombreMoral COLLATE utf8_spanish_ci LIKE '%" . $materno . "% %" . $paterno . "% %" . $nombre . "%' ";
            $orden.= " OR CONCAT_WS(' ', ic.nombre, ic.paterno, ic.materno) COLLATE utf8_spanish_ci LIKE '%" . $cadena . "%'";
            $orden.= " OR CONCAT_WS(' ', ic.nombre, ic.paterno, ic.materno) COLLATE utf8_spanish_ci LIKE '%" . $nombre . "% %" . $paterno . "% %" . $materno . "%'";
            $orden.= " OR CONCAT_WS(' ', ic.nombre, ic.materno, ic.paterno) COLLATE utf8_spanish_ci LIKE '%" . $nombre . "% %" . $materno . "% %" . $paterno . "%'";
            $orden.= " OR CONCAT_WS(' ', ic.paterno, ic.materno, ic.nombre) COLLATE utf8_spanish_ci LIKE '%" . $paterno . "% %" . $materno . "% %" . $nombre . "%'";
            $orden.= " OR CONCAT_WS(' ', ic.materno, ic.paterno, ic.nombre) COLLATE utf8_spanish_ci LIKE '%" . $materno . "% %" . $paterno . "% %" . $nombre . "%')";
            $imputadoscarpetasDto = new ImputadoscarpetasDTO();
            $ImputadoscarpetasDto = $ImputadoscarpetasDao->selectImputadoscarpetasPag($imputadoscarpetasDto, null, $orden, $param, $fields);
            if ($ImputadoscarpetasDto != "") {
                $datos = array("estatus" => "ok", "totalCount" => "", "pagina" => $param["pag"], "total" => "", "mensaje" => "Resultados", "datos" => array());
                foreach ($ImputadoscarpetasDto as $imputado) {
                    array_push($datos["datos"], $imputado);
                }
                $datos["totalCount"] = count($datos["datos"]) - 1;
            } else {
                $datos = array("estatus" => "Error", "mensaje" => "Sin Resultados");
            }
            return $datos;
        }
    }

    /* -------------------------------------------------------------------------------------------------- */
    #Nombre: Consulta de del detalle de un imputado
    #Criterios: ID (Carpeta Judicial/Exhorto)
    #Descripci�n: Se consulta el detalle de un imputado (Carpeta Judiciale/Exhortos), obteniendo datos del imputado(personales), direccion y datos del expediente.

    public function consultarUnImputado($ImputadoscarpetasDto, $param) {
        $ImputadoscarpetasDao = new ImputadoscarpetasDAO();
        $ImputadosexhortosDao = new ImputadosexhortosDAO();
        $ImputadosexhortosDto = new ImputadosexhortosDTO();
        $ImputadoscarpetasDto = $this->verificaCeros($ImputadoscarpetasDto);
        @$tipo = $_POST["tipo"];
        @$idImputadoExhorto = $_POST["idImputadoExhorto"];
        //Para que no entre en algunode los dos
        if ($tipo == 'Carpetas') {
            $ImputadosexhortosDto->setIdImputadoExhorto('w');
        }
        if ($tipo == 'Exhortos') {
            $ImputadosexhortosDto->setIdImputadoExhorto($idImputadoExhorto);
            $ImputadoscarpetasDto->setIdImputadoCarpeta('w');
        }

        if ($tipo == 'Exhortos' or $tipo == 'Carpetas') {    
        $ImputadoscarpetasDto = $ImputadoscarpetasDao->selectImputadoscarpetasPag($ImputadoscarpetasDto);
        //Con paginación en imputados Carpetas
        //$ImputadoscarpetasDto = $ImputadoscarpetasDao->selectImputadoscarpetasPag($ImputadoscarpetasDto,$proveedor = null," ORDER BY idImputadoCarpeta DESC ",$param);
        @$nombre = $_POST["nombre"];
        @$paterno = $_POST["paterno"];
        @$materno = $_POST["materno"];
        $ImputadosexhortosDto->setNombre($nombre);
        $ImputadosexhortosDto->setPaterno($paterno);
        $ImputadosexhortosDto->setMaterno($materno);
        $ImputadosexhortosDto->setActivo('S');
        //$ImputadosexhortosDto->setCveTipoPersona('1');
        $ImputadosexhortosDto = $ImputadosexhortosDao->selectImputadosexhortos($ImputadosexhortosDto);

        if ($ImputadoscarpetasDto != "" or $ImputadosexhortosDto != "") {
            $json = "";
            $json .= '{"type":"OK",';
            $total = count($ImputadoscarpetasDto);
            //$total=count($ImputadoscarpetasDto)+count($ImputadosexhortosDto);
            $totalCarpetas = count($ImputadoscarpetasDto);
            $totalExhortos = count($ImputadosexhortosDto);
            $json .= '"totalCount":' . json_encode($total) . ",";
            $json .= '"data":[';
            $x = 1;
            $y = 1;
            $json .= "{";

            $json .= '"ImputadosCarpetas": [';
            if ($ImputadoscarpetasDto != "") {
                foreach ($ImputadoscarpetasDto as $Imputado) {
                    $json .= "{";
                    $json .= '"idImputadoCarpeta":' . json_encode(utf8_encode($Imputado->getIdImputadoCarpeta())) . ",";

                    if ($Imputado->getCveTipoPersona() == 1) {
                        $json .= '"nombre":' . json_encode(utf8_encode($Imputado->getNombre())) . ",";
                        $json .= '"paterno":' . json_encode(utf8_encode($Imputado->getPaterno())) . ",";
                        $json .= '"materno":' . json_encode(utf8_encode($Imputado->getMaterno())) . ",";
                    } else {
                        $json .= '"nombre":' . json_encode(utf8_encode($Imputado->getNombreMoral())) . ",";
                        $json .='"paterno": "",';
                        $json .='"materno": "",';
                    }


                    $json .= '"rfc":' . json_encode(utf8_encode($Imputado->getRfc())) . ",";
                    $json .= '"curp":' . json_encode(utf8_encode($Imputado->getCurp())) . ",";
                    $json .= '"alias":' . json_encode(utf8_encode($Imputado->getAlias())) . ",";

                    $DomiciliosImCarDto = new DomiciliosimputadoscarpetasDTO();
                    $DomiciliosImCarDao = new DomiciliosimputadoscarpetasDAO();
                    $DomiciliosImCarDto->setIdImputadoCarpeta($Imputado->getIdImputadoCarpeta());
                    $DomiciliosImCarDto = $DomiciliosImCarDao->selectDomiciliosimputadoscarpetas($DomiciliosImCarDto);
                    if ($DomiciliosImCarDto != "") {
                        if ($DomiciliosImCarDto[0]->getCvePais() != "" and $DomiciliosImCarDto[0]->getCvePais() != "0") {
                            $PaisesDto = new PaisesDTO();
                            $PaisesDao = new PaisesDAO();
                            $PaisesDto->setCvePais($DomiciliosImCarDto[0]->getCvePais());
                            $PaisesDto = $PaisesDao->selectPaises($PaisesDto);
                            if ($PaisesDto != "") {
                                $pais = $PaisesDto[0]->getDesPais();
                            } else {
                                $pais = "";
                            }
                        } else {
                            $pais = "";
                        }

                        if ($DomiciliosImCarDto[0]->getCveEstado() != "" and $DomiciliosImCarDto[0]->getCveEstado() != "0" and $DomiciliosImCarDto[0]->getCvePais() == "119") {
                            $EstadosDto = new EstadosDTO();
                            $EstadosDao = new EstadosDAO();
                            $EstadosDto->setCveEstado($DomiciliosImCarDto[0]->getCveEstado());
                            $EstadosDto = $EstadosDao->selectEstados($EstadosDto);
                            if ($EstadosDto != "") {
                                $estado = ', ' . $EstadosDto[0]->getDesEstado();
                            } else {
                                $estado = "";
                            }
                        } else {
                            $estado = ', ' . $DomiciliosImCarDto[0]->getEstado();
                        }

                        if ($DomiciliosImCarDto[0]->getCveMunicipio() != "" and $DomiciliosImCarDto[0]->getCveMunicipio() != "0" and $DomiciliosImCarDto[0]->getCvePais() == "119") {
                            $MunicipiosDto = new MunicipiosDTO();
                            $MunicipiosDao = new MunicipiosDAO();
                            $MunicipiosDto->setCveMunicipio($DomiciliosImCarDto[0]->getCveMunicipio());
                            $MunicipiosDto = $MunicipiosDao->selectMunicipios($MunicipiosDto);
                            if ($MunicipiosDto != "") {
                                $municipio = ', ' . $MunicipiosDto[0]->getDesMunicipio();
                            } else {
                                $municipio = "";
                            }
                        } else {
                            $municipio = ', ' . $DomiciliosImCarDto[0]->getMunicipio();
                        }


                        $direccion = ',' . $DomiciliosImCarDto[0]->getDireccion();
                    }
                    $domicilio = $pais . $estado . $municipio . $direccion;
                    $json .= '"domicilio":' . json_encode(utf8_encode($domicilio)) . ",";

                    //"fechaDeclaracion": "2015-11-12",
                    if ($Imputado->getFechaDeclaracion() != '') {
                        $tmpFecha = explode('-', $Imputado->getFechaDeclaracion());
                        $fechaDeclaracion = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                        $json .= '"fechaDeclaracion":' . json_encode($fechaDeclaracion) . ",";
                    } else {
                        $json .='"fechaDeclaracion": "-",';
                    }

                    //"fechaImputacion": "2015-11-12",
                    if ($Imputado->getFechaImputacion() != '') {
                        $tmpFecha = explode('-', $Imputado->getFechaImputacion());
                        $fechaImputacion = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                        $json .= '"fechaImputacion":' . json_encode($fechaImputacion) . ",";
                    } else {
                        $json .='"fechaImputacion": "-",';
                    }

                    //"fecCierreInv": "2015-11-12"
                    if ($Imputado->getFecCierreInv() != '') {
                        $tmpFecha = explode('-', $Imputado->getFecCierreInv());
                        $fecCierreInv = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                        $json .= '"fecCierreInv":' . json_encode($fecCierreInv) . ",";
                    } else {
                        $json .='"fecCierreInv": "-",';
                    }

                    //"fechaSobreseimiento": "2015-11-12",------------
                    if ($Imputado->getFechaSobreseimiento() != '') {
                        $tmpFecha = explode('-', $Imputado->getFechaSobreseimiento());
                        $fechaSobreseimiento = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                        $json .= '"fechaSobreseimiento":' . json_encode($fechaSobreseimiento) . ",";
                    } else {
                        $json .='"fechaSobreseimiento": "-",';
                    }

                    //"fechaControl": "2015-11-12 09:35:25",
                    if ($Imputado->getFechaControlDet() != '') {
                        $tmpFecha1 = explode(' ', $Imputado->getFechaControlDet());
                        $tmpFecha = explode('-', $tmpFecha1[0]);
                        $fechaControl = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                        $json .= '"fechaControl":' . json_encode($fechaControl) . ",";
                    } else {
                        $json .='"fechaControl": "-",';
                    }

                    //fecTerminoCons": "2015-11-12 09:35:25",
                    if ($Imputado->getFecTerminoCons() != '') {
                        $tmpFecha1 = explode(' ', $Imputado->getFecTerminoCons());
                        $tmpFecha = explode('-', $tmpFecha1[0]);
                        $fecTerminoCons = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                        $json .= '"fecTerminoCons":' . json_encode($fecTerminoCons) . ",";
                    } else {
                        $json .='"fecTerminoCons": "-",';
                    }

                    if ($Imputado->getTieneSobreseimiento() == 'N') {
                        $sobre = 'NO';
                    } else {
                        $sobre = 'SI';
                    }
                    $json .= '"tieneSobreseimiento":' . json_encode($sobre) . ",";
                    $json .= '"ingresomensual":' . json_encode('$' . $Imputado->getIngresoMensual()) . ",";


                    $CarpetaJudicialDto = new CarpetasjudicialesDTO();
                    $CarpetaJudicialDao = new CarpetasjudicialesDAO();
                    $CarpetaJudicialDto->setIdCarpetaJudicial($Imputado->getidCarpetaJudicial());
                    //print_r($CarpetaJudicialDto).'ok';
                    $CarpetaJudicialDto = $CarpetaJudicialDao->selectCarpetasjudiciales($CarpetaJudicialDto);

                    if ($CarpetaJudicialDto != "") {
                        $cveTipoCarpeta = $CarpetaJudicialDto[0]->getCveTipoCarpeta();
                        $numero = $CarpetaJudicialDto[0]->getNumero();
                        $anio = $CarpetaJudicialDto[0]->getAnio();

                        $carpetaInv = $CarpetaJudicialDto[0]->getCarpetaInv();
                        $nuc = $CarpetaJudicialDto[0]->getNuc();
                        $cveJuzgado = $CarpetaJudicialDto[0]->getCveJuzgado();
                        $JuzgadosDto = new JuzgadosDTO();
                        $JuzgadosDao = new JuzgadosDAO();
                        $JuzgadosDto->setCveJuzgado($CarpetaJudicialDto[0]->getCveJuzgado());
                        $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto);
                        $DesJuzgado = $JuzgadosDto[0]->getDesJuzgado();
                        $TiposCarpetaDto = new TiposcarpetasDTO();
                        $TiposCarpetaDao = new TiposcarpetasDAO();
                        $TiposCarpetaDto->setCveTipoCarpeta($CarpetaJudicialDto[0]->getCveTipoCarpeta());
                        $TiposCarpetaDto = $TiposCarpetaDao->selectTiposcarpetas($TiposCarpetaDto);
                        if ($TiposCarpetaDto != "") {
                            $DesCarpeta = $TiposCarpetaDto[0]->getDesTipoCarpeta();
                        } else {
                            $DesCarpeta = "";
                        }
                        $Carpeta = $DesCarpeta . ' ' . $numero . '/' . $anio;
                    } else {
                        $Carpeta = "";
                    }

                    $json .= '"Carpeta":' . json_encode(utf8_encode($Carpeta)) . ",";
                    $json .= '"CarpetaInv":' . json_encode(utf8_encode($carpetaInv)) . ",";
                    $json .= '"nuc":' . json_encode(utf8_encode($nuc)) . ",";
                    $json .= '"Juzgado":' . json_encode(utf8_encode($DesJuzgado)) . ",";

                    if ($Imputado->getCveOcupacion() != "") {
                        $OcupacionesDto = new OcupacionesDTO();
                        $OcupacionesDao = new OcupacionesDAO();
                        $OcupacionesDto->setCveOcupacion($Imputado->getCveOcupacion());
                        $OcupacionesDto = $OcupacionesDao->selectOcupaciones($OcupacionesDto);
                        $json .= '"desocupacion":' . json_encode(utf8_encode($OcupacionesDto[0]->getDesOcupacion())) . ",";
                    } else {
                        $json .= '"desocupacion": "",';
                    }

                    if ($Imputado->getFechaNacimiento() != "") {
                        $tmpFecha = explode('-', $Imputado->getFechaNacimiento());
                        $fechaNacimiento = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                        $json .= '"fechaNacimiento":' . json_encode($fechaNacimiento) . ",";
                    } else {
                        $json .= '"fechaNacimiento": "",';
                    }
                    $json .= '"edad":' . json_encode(utf8_encode($Imputado->getEdad())) . ",";

                    if ($Imputado->getCvePaisNacimiento() != "" and $Imputado->getCvePaisNacimiento() != "0") {
                        $PaisesDto = new PaisesDTO();
                        $PaisesDao = new PaisesDAO();
                        $PaisesDto->setCvePais($Imputado->getCvePaisNacimiento());
                        $PaisesDto = $PaisesDao->selectPaises($PaisesDto);
                        if ($PaisesDto != "") {
                            $json .= '"desPais":' . json_encode(utf8_encode($PaisesDto[0]->getDesPais())) . ",";
                        } else {
                            $json .= '"desPais": "",';
                        }
                    } else {
                        $json .= '"desPais": "",';
                    }

                    if ($Imputado->getCveEstadoNacimiento() != "" and $Imputado->getCveEstadoNacimiento() != "0" and $Imputado->getCvePaisNacimiento() == "119") {
                        $EstadosDto = new EstadosDTO();
                        $EstadosDao = new EstadosDAO();
                        $EstadosDto->setCveEstado($Imputado->getCveEstadoNacimiento());
                        $EstadosDto = $EstadosDao->selectEstados($EstadosDto);
                        if ($EstadosDto != "") {
                            $json .= '"estadoNacimiento":' . json_encode(utf8_encode($EstadosDto[0]->getDesEstado())) . ",";
                        } else {
                            $json .= '"estadoNacimiento": "",';
                        }
                    } else {
                        $json .= '"estadoNacimiento":' . json_encode(utf8_encode($Imputado->getEstadoNacimiento())) . ",";
                    }

                    if ($Imputado->getCveMunicipioNacimiento() != "" and $Imputado->getCveMunicipioNacimiento() != "0" and $Imputado->getCvePaisNacimiento() == "119") {
                        $MunicipiosDto = new MunicipiosDTO();
                        $MunicipiosDao = new MunicipiosDAO();
                        $MunicipiosDto->setCveMunicipio($Imputado->getCveMunicipioNacimiento());
                        $MunicipiosDto = $MunicipiosDao->selectMunicipios($MunicipiosDto);
                        if ($EstadosDto != "") {
                            $json .= '"municipioNacimiento":' . json_encode(utf8_encode($MunicipiosDto[0]->getDesMunicipio())) . ",";
                        } else {
                            $json .= '"municipioNacimiento": "",';
                        }
                    } else {
                        $json .= '"municipioNacimiento":' . json_encode(utf8_encode($Imputado->getMunicipioNacimiento())) . ",";
                    }

                    if ($Imputado->getCveEstadoCivil() != "") {
                        $EstadosCivilesDto = new EstadoscivilesDTO();
                        $EstadosCivilesDao = new EstadoscivilesDAO();
                        $EstadosCivilesDto->setCveEstadoCivil($Imputado->getCveEstadoCivil());
                        $EstadosCivilesDto = $EstadosCivilesDao->selectEstadosciviles($EstadosCivilesDto);
                        $json .= '"desEstadoCivil":' . json_encode(utf8_encode($EstadosCivilesDto[0]->getDesEstadoCivil())) . ",";
                    } else {
                        $json .= '"desEstadoCivil": "",';
                    }

                    if ($Imputado->getCveNivelInstruccion() != "") {
                        $NivelInstruccionesDto = new NivelesinstruccionesDTO();
                        $NivelInstruccionesDao = new NivelesinstruccionesDAO();
                        $NivelInstruccionesDto->setCveNivelInstruccion($Imputado->getCveNivelInstruccion());
                        $NivelInstruccionesDto = $NivelInstruccionesDao->selectNivelesinstrucciones($NivelInstruccionesDto);
                        $json .= '"desNivelInstruccion":' . json_encode(utf8_encode($NivelInstruccionesDto[0]->getDesNivelInstruccion())) . ",";
                    } else {
                        $json .= '"desNivelInstruccion": "",';
                    }

                    if ($Imputado->getCveEspanol() != "") {
                        $EspanolDto = new EspanolDTO();
                        $EspanolDao = new EspanolDAO();
                        $EspanolDto->setCveEspanol($Imputado->getCveEspanol());
                        $EspanolDto = $EspanolDao->selectEspanol($EspanolDto);
                        $json .= '"desEspanol":' . json_encode(utf8_encode($EspanolDto[0]->getDesEspanol())) . ",";
                    } else {
                        $json .= '"desEspanol": "",';
                    }

                    if ($Imputado->getCveDialectoIndigena() != "") {
                        $DialectoIndigenaDto = new DialectoindigenaDTO();
                        $DialectoIndigenaDao = new DialectoindigenaDAO();
                        $DialectoIndigenaDto->setCveDialectoIndigena($Imputado->getCveDialectoIndigena());
                        $DialectoIndigenaDto = $DialectoIndigenaDao->selectDialectoindigena($DialectoIndigenaDto);
                        if ($DialectoIndigenaDto) {
                            $json .= '"desDialecto":' . json_encode(utf8_encode($DialectoIndigenaDto[0]->getDesDialectoIndigena())) . ",";
                        } else {
                            $json .= '"desDialecto": "",';
                        }
                    } else {
                        $json .= '"desDialecto": "",';
                    }

                    if ($Imputado->getCveTipoFamiliaLinguistica() != "") {
                        $FamLinDto = new TipofamilialinguisticaDTO();
                        $FamLinDao = new TipofamilialinguisticaDAO();
                        $FamLinDto->setCveTipoFamiliaLinguistica($Imputado->getCveTipoFamiliaLinguistica());
                        $FamLinDto = $FamLinDao->selectTipofamilialinguistica($FamLinDto);
                        $json .= '"desFamLin":' . json_encode(utf8_encode('-' . $FamLinDto[0]->getDesTipoFamiliaLinguistica())) . ",";
                    } else {
                        $json .= '"desFamLin": "",';
                    }

                    if ($Imputado->getCveInterprete() != "") {
                        $InterpreteDto = new InterpretesDTO();
                        $InterpreteDao = new InterpretesDAO();
                        $InterpreteDto->setCveInterprete($Imputado->getCveInterprete());
                        $InterpreteDto = $InterpreteDao->selectInterpretes($InterpreteDto);
                        $json .= '"interprete":' . json_encode(utf8_encode($InterpreteDto[0]->getDesInterprete())) . ",";
                    } else {
                        $json .= '"interprete": "",';
                    }

                    if ($Imputado->getCveEstadoPsicofisico() != "") {
                        $EdoPsicofisicoDto = new EstadospsicofisicosDTO();
                        $EdoPsicofisicoDao = new EstadospsicofisicosDAO();
                        $EdoPsicofisicoDto->setCveEstadoPsicofisico($Imputado->getCveEstadoPsicofisico());
                        $EdoPsicofisicoDto = $EdoPsicofisicoDao->selectEstadospsicofisicos($EdoPsicofisicoDto);
                        $json .= '"edopsico":' . json_encode(utf8_encode($EdoPsicofisicoDto[0]->getDesEstadoPsicofisico())) . ",";
                    } else {
                        $json .= '"edopsico": "",';
                    }

                    if ($Imputado->getCveGrupoEdnico() != "") {
                        $GrupoEtnicoDto = new GruposednicosDTO();
                        $GrupoEtnicoDao = new GruposednicosDAO();
                        $GrupoEtnicoDto->setCveGrupoEdnico($Imputado->getCveGrupoEdnico());
                        $GrupoEtnicoDto = $GrupoEtnicoDao->selectGruposednicos($GrupoEtnicoDto);
                        $json .= '"grupoetnico":' . json_encode(utf8_encode($GrupoEtnicoDto[0]->getDesGrupoEdnico())) . ",";
                    } else {
                        $json .= '"grupoetnico": "",';
                    }

                    if ($Imputado->getCveTipoDetencion() != "") {
                        $TiposDetencionesDto = new TiposdetencionesDTO();
                        $TiposDetencionesDao = new TiposdetencionesDAO();
                        $TiposDetencionesDto->setCveTipoDetencion($Imputado->getCveTipoDetencion());
                        $TiposDetencionesDto = $TiposDetencionesDao->selectTiposdetenciones($TiposDetencionesDto);
                        $json .= '"tipodetencion":' . json_encode(utf8_encode($TiposDetencionesDto[0]->getDesTipoDetencion())) . ",";
                    } else {
                        $json .= '"tipodetencion": "",';
                    }

                    if ($Imputado->getCveTipoReincidencia() != "") {
                        $ReincidenciasDto = new TiposreincidenciasDTO();
                        $ReincidenciasDao = new TiposreincidenciasDAO();
                        $ReincidenciasDto->setCveTipoReincidencia($Imputado->getCveTipoReincidencia());
                        $ReincidenciasDto = $ReincidenciasDao->selectTiposreincidencias($ReincidenciasDto);
                        $json .= '"reincidencia":' . json_encode(utf8_encode($ReincidenciasDto[0]->getDesTipoReincidencia())) . ",";
                    } else {
                        $json .= '"reincidencia": "",';
                    }

                    if ($Imputado->getCveCereso() != "") {
                        $CeresoDto = new CeresosDTO();
                        $CeresoDao = new CeresosDAO();
                        $CeresoDto->setCveCereso($Imputado->getCveCereso());
                        $CeresoDto = $CeresoDao->selectCeresos($CeresoDto);
                        $json .= '"cereso":' . json_encode(utf8_encode($CeresoDto[0]->getDesCereso())) . ",";
                    } else {
                        $json .= '"cereso": "",';
                    }

                    if ($Imputado->getCveEtapaProcesal() != "") {
                        $EtapaProcesalDto = new EtapasprocesalesDTO();
                        $EtapaProcesalDao = new EtapasprocesalesDAO();
                        $EtapaProcesalDto->setCveEtapaProcesal($Imputado->getCveEtapaProcesal());
                        $EtapaProcesalDto = $EtapaProcesalDao->selectEtapasprocesales($EtapaProcesalDto);
                        $json .= '"EtapaProcesal":' . json_encode(utf8_encode($EtapaProcesalDto[0]->getDesEtapaProcesal()));
                    } else {
                        $json .= '"EtapaProcesal": ""';
                    }


                    $json .= "}";
                    $y++;
                    if ($y <= count($ImputadoscarpetasDto)) {
                        $json .= ",";
                    }
                }
            }
            $json .= '],';


            $json .= '"ImputadosExhortos": [';

            if ($ImputadosexhortosDto != "") {
                foreach ($ImputadosexhortosDto as $Imputado) {
                    $json .= "{";
                    $json .= '"idImputadoExhorto":' . json_encode(utf8_encode($Imputado->getIdImputadoExhorto())) . ",";

                    if ($Imputado->getCveTipoPersona() == 1) {
                        $json .= '"nombre":' . json_encode(utf8_encode($Imputado->getNombre())) . ",";
                        $json .= '"paterno":' . json_encode(utf8_encode($Imputado->getPaterno())) . ",";
                        $json .= '"materno":' . json_encode(utf8_encode($Imputado->getMaterno())) . ",";
                    } else {
                        $json .= '"nombre":' . json_encode(utf8_encode($Imputado->getNombreMoral())) . ",";
                        $json .='"paterno": "",';
                        $json .='"materno": "",';
                    }

                    $json .= '"alias":' . json_encode(utf8_encode($Imputado->getAlias())) . ",";
                    //$json .= '"domicilio":' . json_encode(utf8_encode($Imputado->getDomicilio())) . ",";

                    if ($Imputado->getCvePais() != "") {
                        $PaisesDto = new PaisesDTO();
                        $PaisesDao = new PaisesDAO();
                        $PaisesDto->setCvePais($Imputado->getCvePais());
                        $PaisesDto = $PaisesDao->selectPaises($PaisesDto);
                        if ($PaisesDto != "") {
                            $pais = $PaisesDto[0]->getDesPais();
                        } else {
                            $pais = "";
                        }
                    } else {
                        $pais = "";
                    }
                    if ($Imputado->getCveEstado() != "" and $Imputado->getCveEstado() != "0" and $Imputado->getCvePais() == "119") {
                        $EstadosDto = new EstadosDTO();
                        $EstadosDao = new EstadosDAO();
                        $EstadosDto->setCveEstado($Imputado->getCveEstado());
                        $EstadosDto = $EstadosDao->selectEstados($EstadosDto);
                        if ($EstadosDto != "") {
                            $estado = ', ' . $EstadosDto[0]->getDesEstado();
                        } else {
                            $estado = "";
                        }
                    } else {
                        ', ' . $estado = $Imputado->getEstado();
                    }

                    if ($Imputado->getCveMunicipio() != "" and $Imputado->getCveMunicipio() != "0" and $Imputado->getCvePais() == "119") {
                        $MunicipiosDto = new MunicipiosDTO();
                        $MunicipiosDao = new MunicipiosDAO();
                        $MunicipiosDto->setCveMunicipio($Imputado->getCveMunicipio());
                        $MunicipiosDto = $MunicipiosDao->selectMunicipios($MunicipiosDto);
                        if ($MunicipiosDto != "") {
                            $municipio = ', ' . $MunicipiosDto[0]->getDesMunicipio();
                        } else {
                            $municipio = "";
                        }
                    } else {
                        $municipio = ', ' . $Imputado->getMunicipio();
                    }

                    $direccion = ',' . $Imputado->getDomicilio();

                    $domicilio = $pais . $estado . $municipio . $direccion;
                    $json .= '"domicilio":"'.utf8_encode($domicilio).'",';

                    $json .= '"telefono":' . json_encode(utf8_encode($Imputado->getTelefono())) . ",";

                    $ExhortosDto = new ExhortosDTO();
                    $ExhortosDao = new ExhortosDAO();
                    $ExhortosDto->setIdExhorto($Imputado->getIdExhorto());
                    $ExhortosDto = $ExhortosDao->selectExhortos($ExhortosDto);

                    $numero = $ExhortosDto[0]->getNumExhorto();
                    $anio = $ExhortosDto[0]->getAniExhorto();
                    $nuc = $ExhortosDto[0]->getNuc();
                    $CarpetaInv = $ExhortosDto[0]->getCarpetaInv();
                    $Carpeta = 'Exhorto' . ' ' . $numero . '/' . $anio;
                    $json .= '"Carpeta":' . json_encode(utf8_encode($Carpeta)) . ",";
                    $json .= '"CarpetaInv":' . json_encode(utf8_encode($CarpetaInv)) . ",";
                    $json .= '"nuc":' . json_encode(utf8_encode($nuc)) . ",";

                    $JuzgadosDto = new JuzgadosDTO();
                    $JuzgadosDao = new JuzgadosDAO();
                    $JuzgadosDto->setCveJuzgado($ExhortosDto[0]->getCveJuzgado());
                    $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto);
                    $DesJuzgado = $JuzgadosDto[0]->getDesJuzgado();
                    $json .= '"Juzgado":' . json_encode(utf8_encode($DesJuzgado)) . ",";

                    if ($Imputado->getCveCereso() != "") {
                        $CeresoDto = new CeresosDTO();
                        $CeresoDao = new CeresosDAO();
                        $CeresoDto->setCveCereso($Imputado->getCveCereso());
                        $CeresoDto = $CeresoDao->selectCeresos($CeresoDto);
                        $json .= '"cereso":' . json_encode(utf8_encode($CeresoDto[0]->getDesCereso())) . ",";
                    } else {
                        $json .= '"cereso": "",';
                    }

                    if ($Imputado->getCveConsignacion() != "") {
                        $ConsignacionesDto = new ConsignacionesDTO();
                        $ConsignacionesDao = new ConsignacionesDAO();
                        $ConsignacionesDto->setCveConsignacion($Imputado->getCveConsignacion());
                        $ConsignacionesDto = $ConsignacionesDao->selectConsignaciones($ConsignacionesDto);
                        $json .= '"consignacion":' . json_encode(utf8_encode($ConsignacionesDto[0]->getDesConsignacion()));
                    } else {
                        $json .= '"consignacion": ""';
                    }


                    $json .= "}";
                    $x++;
                    if ($x <= count($ImputadosexhortosDto)) {
                        $json .= ",";
                    }
                }
            }
            $json .= '],';
            $json .= '"pagina":' . json_encode(utf8_encode($param["pag"])) . ",";
            //$json .= '"totalImputadosCarpetas":"' . count($ImputadoscarpetasDto) . '",';
            $json .= '"total":"' . count($ImputadoscarpetasDto) . '",';
            $json .= '"totalImputadosExhortos":"' . count($ImputadosexhortosDto) . '"';
            $json .= "}]}"; //Agregué }]
            // echo"Json:---";
            //echo $json;

            return $json;
        } else {
            return "";
        }
    }
        if ($tipo == 'CarpetasOfendido') {    
            $OfendidosDto = new OfendidoscarpetasDTO();
            $OfendidosDao = new OfendidoscarpetasDAO();
            $OfendidosDto->setIdOfendidoCarpeta($idImputadoExhorto);
            //print_r($OfendidosDto);
            $OfendidosDto = $OfendidosDao->selectOfendidosVarios($OfendidosDto);

            if ($OfendidosDto!="") {
                $json = "";
                $json .= '{"type":"OK",';
                $json .= '"totalCount":' . json_encode(1) . ",";
                $json .= '"data":[';
                $json .= "{";
                $json .= '"OfendidosCarpetas": [';
                if ($OfendidosDto != "") {
                    foreach ($OfendidosDto as $Ofendido) {
                        $json .= "{";
                        $json .= '"idOfendidoCarpeta":' . json_encode(utf8_encode($Ofendido->getIdOfendidoCarpeta())) . ",";
                        if ($Ofendido->getCveTipoPersona() == 1) {
                            $json .= '"nombre":' . json_encode(utf8_encode($Ofendido->getNombre())) . ",";
                            $json .= '"paterno":' . json_encode(utf8_encode($Ofendido->getPaterno())) . ",";
                            $json .= '"materno":' . json_encode(utf8_encode($Ofendido->getMaterno())) . ",";
                        } else {
                            $json .= '"nombre":' . json_encode(utf8_encode($Ofendido->getNombreMoral())) . ",";
                            $json .='"paterno": "",';
                            $json .='"materno": "",';
                        }
                        $json .= '"rfc":' . json_encode(utf8_encode($Ofendido->getRfc())) . ",";

                        $DomiciliosImCarDto = new DomiciliosofendidoscarpetasDTO();
                        $DomiciliosImCarDao = new DomiciliosofendidoscarpetasDAO();
                        $DomiciliosImCarDto->setIdOfendidoCarpeta($Ofendido->getIdOfendidoCarpeta());
                        $DomiciliosImCarDto->setActivo($Ofendido->getActivo());
                        $DomiciliosImCarDto = $DomiciliosImCarDao->selectDomiciliosofendidoscarpetas($DomiciliosImCarDto);
                        if ($DomiciliosImCarDto != "") {
                            if ($DomiciliosImCarDto[0]->getCvePais() != "" and $DomiciliosImCarDto[0]->getCvePais() != "0") {
                                $PaisesDto = new PaisesDTO();
                                $PaisesDao = new PaisesDAO();
                                $PaisesDto->setCvePais($DomiciliosImCarDto[0]->getCvePais());
                                $PaisesDto = $PaisesDao->selectPaises($PaisesDto);
                                if ($PaisesDto != "") {
                                    $pais = $PaisesDto[0]->getDesPais();
                                } else {
                                    $pais = "";
                                }
                            } else {
                                $pais = "";
                            }

                            if ($DomiciliosImCarDto[0]->getCveEstado() != "" and $DomiciliosImCarDto[0]->getCveEstado() != "0" and $DomiciliosImCarDto[0]->getCvePais() == "119") {
                                $EstadosDto = new EstadosDTO();
                                $EstadosDao = new EstadosDAO();
                                $EstadosDto->setCveEstado($DomiciliosImCarDto[0]->getCveEstado());
                                $EstadosDto = $EstadosDao->selectEstados($EstadosDto);
                                if ($EstadosDto != "") {
                                    $estado = ', ' . $EstadosDto[0]->getDesEstado();
                                } else {
                                    $estado = "";
                                }
                            } else {
                                $estado = ', ' . $DomiciliosImCarDto[0]->getEstado();
                            }

                            if ($DomiciliosImCarDto[0]->getCveMunicipio() != "" and $DomiciliosImCarDto[0]->getCveMunicipio() != "0" and $DomiciliosImCarDto[0]->getCvePais() == "119") {
                                $MunicipiosDto = new MunicipiosDTO();
                                $MunicipiosDao = new MunicipiosDAO();
                                $MunicipiosDto->setCveMunicipio($DomiciliosImCarDto[0]->getCveMunicipio());
                                $MunicipiosDto = $MunicipiosDao->selectMunicipios($MunicipiosDto);
                                if ($MunicipiosDto != "") {
                                    $municipio = ', ' . $MunicipiosDto[0]->getDesMunicipio();
                                } else {
                                    $municipio = "";
                                }
                            } else {
                                $municipio = ', ' . $DomiciliosImCarDto[0]->getMunicipio();
                            }
                            $direccion = ',' . $DomiciliosImCarDto[0]->getDireccion();
                        $domicilio = $pais . $estado . $municipio . $direccion;
                        }
                        else{$domicilio="";}
                        $json .= '"domicilio":' . json_encode(utf8_encode($domicilio)) . ",";

                        $CarpetaJudicialDto = new CarpetasjudicialesDTO();
                        $CarpetaJudicialDao = new CarpetasjudicialesDAO();
                        $CarpetaJudicialDto->setIdCarpetaJudicial($Ofendido->getidCarpetaJudicial());
                        //print_r($CarpetaJudicialDto).'ok';
                        $CarpetaJudicialDto = $CarpetaJudicialDao->selectCarpetasjudiciales($CarpetaJudicialDto);
                        if ($CarpetaJudicialDto != "") {
                            //echo $CarpetaJudicialDto[0]->getCveTipoCarpeta().'Carpeta';
                            $cveTipoCarpeta = $CarpetaJudicialDto[0]->getCveTipoCarpeta();
                            $numero = $CarpetaJudicialDto[0]->getNumero();
                            $anio = $CarpetaJudicialDto[0]->getAnio();

                            $carpetaInv = $CarpetaJudicialDto[0]->getCarpetaInv();
                            $nuc = $CarpetaJudicialDto[0]->getNuc();
                            $cveJuzgado = $CarpetaJudicialDto[0]->getCveJuzgado();
                            $JuzgadosDto = new JuzgadosDTO();
                            $JuzgadosDao = new JuzgadosDAO();
                            $JuzgadosDto->setCveJuzgado($CarpetaJudicialDto[0]->getCveJuzgado());
                            $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto);
                            $DesJuzgado = $JuzgadosDto[0]->getDesJuzgado();

                            $TiposCarpetaDto = new TiposcarpetasDTO();
                            $TiposCarpetaDao = new TiposcarpetasDAO();
                            $TiposCarpetaDto->setCveTipoCarpeta($CarpetaJudicialDto[0]->getCveTipoCarpeta());
                            $TiposCarpetaDto = $TiposCarpetaDao->selectTiposcarpetas($TiposCarpetaDto);
                            if ($TiposCarpetaDto != "") {
                                $DesCarpeta = $TiposCarpetaDto[0]->getDesTipoCarpeta();
                            } else {
                                $DesCarpeta = "";
                            }
                            $Carpeta = $DesCarpeta . ' ' . $numero . '/' . $anio;
                        } else {//echo "nooooooooooooo";
                            $Carpeta = "";
                        }

                        $json .= '"Carpeta":' . json_encode(utf8_encode($Carpeta)) . ",";
                        $json .= '"CarpetaInv":' . json_encode(utf8_encode($carpetaInv)) . ",";
                        $json .= '"nuc":' . json_encode(utf8_encode($nuc)) . ",";
                        $json .= '"Juzgado":' . json_encode(utf8_encode($DesJuzgado)) . ",";
                        $json .= '"edad":' . json_encode(utf8_encode($Ofendido->getEdad())) . ",";
                        $json .= "}";
                    }
                }
                $json .= ']';
                $json .= "}]}"; //Agregué }]
                // echo"Json:---";
                //echo $json;

                return $json;
            } else {
                return "";
            }
        }    
        if ($tipo == 'ExhortosOfendido') {    
            $OfendidosExhDto = new OfenfendidosexhortosDTO();
            $OfendidosExhDao = new OfenfendidosexhortosDAO();
            $OfendidosExhDto->setIdOfenfendidoExhorto($idImputadoExhorto);
            $OfendidosExhDto=$OfendidosExhDao->selectOfenfendidosexhortos($OfendidosExhDto);
                $json = "";
                $json .= '{"type":"OK",';
                $json .= '"totalCount":' . json_encode(1) . ",";
                $json .= '"data":[';
                $x = 1;
                $y = 1;
                $json .= "{";
                $json .= '"OfendidosExhortos": [';
                if ($OfendidosExhDto != "") {
                    foreach ($OfendidosExhDto as $OfExhorto) {
                        $json .= "{";
                        $json .= '"idOfendidoExhorto":' . json_encode(utf8_encode($OfExhorto->getIdOfenfendidoExhorto())) . ",";

                        if ($OfExhorto->getCveTipoPersona() == 1) {
                            $json .= '"nombre":' . json_encode(utf8_encode($OfExhorto->getNombre())) . ",";
                            $json .= '"paterno":' . json_encode(utf8_encode($OfExhorto->getPaterno())) . ",";
                            $json .= '"materno":' . json_encode(utf8_encode($OfExhorto->getMaterno())) . ",";
                        } else {
                            $json .= '"nombre":' . json_encode(utf8_encode($OfExhorto->getNombreMoral())) . ",";
                            $json .='"paterno": "",';
                            $json .='"materno": "",';
                        }

//                        if ($OfExhorto->getCvePais()!= "") {
//                            $PaisesDto = new PaisesDTO();
//                            $PaisesDao = new PaisesDAO();
//                            $PaisesDto->setCvePais($Imputado->getCvePais());
//                            $PaisesDto = $PaisesDao->selectPaises($PaisesDto);
//                            if ($PaisesDto != "") {
//                                $pais = $PaisesDto[0]->getDesPais();
//                            } else {
//                                $pais = "";
//                            }
//                        } else {
//                            $pais = "";
//                        }
//                        if ($OfExhorto->getCveEstado() != "" and $OfExhorto->getCveEstado() != "0" and $OfExhorto->getCvePais() == "119") {
                        if ($OfExhorto->getCveEstado() != "" and $OfExhorto->getCveEstado() != "0") {
                            $EstadosDto = new EstadosDTO();
                            $EstadosDao = new EstadosDAO();
                            $EstadosDto->setCveEstado($OfExhorto->getCveEstado());
                            $EstadosDto = $EstadosDao->selectEstados($EstadosDto);
                            if ($EstadosDto != "") {
                                //$estado = ', ' . $EstadosDto[0]->getDesEstado();
                                $estado = $EstadosDto[0]->getDesEstado();
                            } else {
                                $estado = "";
                            }
                        } else {
                           // ', ' . $estado = $OfExhorto->getEstado();
                            $estado = $OfExhorto->getEstado();
                        }

                        //if ($OfExhorto->getCveMunicipio() != "" and $OfExhorto->getCveMunicipio() != "0" and $OfExhorto->getCvePais() == "119") {
                        if ($OfExhorto->getCveMunicipio() != "" and $OfExhorto->getCveMunicipio() != "0") {
                            $MunicipiosDto = new MunicipiosDTO();
                            $MunicipiosDao = new MunicipiosDAO();
                            $MunicipiosDto->setCveMunicipio($OfExhorto->getCveMunicipio());
                            $MunicipiosDto = $MunicipiosDao->selectMunicipios($MunicipiosDto);
                            if ($MunicipiosDto != "") {
                                $municipio = ', ' . $MunicipiosDto[0]->getDesMunicipio();
                            } else {
                                $municipio = "";
                            }
                        } else {
                            $municipio = ', ' . $OfExhorto->getMunicipio();
                        }

                        $direccion = ',' . $OfExhorto->getDomicilio();

                        //$domicilio = $pais . $estado . $municipio . $direccion;
                        $domicilio=$estado . $municipio . $direccion;
                        $json .= '"domicilio":' . json_encode($domicilio) . ",";

                        $json .= '"telefono":' . json_encode(utf8_encode($OfExhorto->getTelefono())) . ",";

                        $ExhortosDto = new ExhortosDTO();
                        $ExhortosDao = new ExhortosDAO();
                        $ExhortosDto->setIdExhorto($OfExhorto->getIdExhorto());
                        $ExhortosDto = $ExhortosDao->selectExhortos($ExhortosDto);
                        $numero = $ExhortosDto[0]->getNumExhorto();
                        $anio = $ExhortosDto[0]->getAniExhorto();
                        $nuc = $ExhortosDto[0]->getNuc();
                        $CarpetaInv = $ExhortosDto[0]->getCarpetaInv();
                        $Carpeta = 'Exhorto' . ' ' . $numero . '/' . $anio;
                        $json .= '"Carpeta":' . json_encode(utf8_encode($Carpeta)) . ",";
                        $json .= '"CarpetaInv":' . json_encode(utf8_encode($CarpetaInv)) . ",";
                        $json .= '"nuc":' . json_encode(utf8_encode($nuc)) . ",";

                        $JuzgadosDto = new JuzgadosDTO();
                        $JuzgadosDao = new JuzgadosDAO();
                        $JuzgadosDto->setCveJuzgado($ExhortosDto[0]->getCveJuzgado());
                        $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto);
                        $DesJuzgado = $JuzgadosDto[0]->getDesJuzgado();
                        $json .= '"Juzgado":' . json_encode(utf8_encode($DesJuzgado));
                        $json .= '}';
                    }
                }
                $json .= ']';
                $json .= "}]}"; //Agregué }]
                // echo"Json:---";
                //echo $json;

                return $json;
            } else {
                return "";
            }
        }   
    
    /*     * ******************* TERMINO DE CONSULTA DE IMPUTADOS POR NOMBRE**************************************************** */

    /* -------------------------------------------------------------------------------------------------- */
    #Nombre: Consulta de del detalle de un imputado con o sin legal detencion
    #Criterios: ID (Carpeta Judicial: Causa de Control)
    #Descripción: Se consulta el detalle de un imputado (Carpeta Judicial: Causa de control), obteniendo datos del imputado(personales), direccion y datos del expediente.

    public function consultarUnImputadoLegalDetencion($ImputadoscarpetasDto, $param) {
        $ImputadoscarpetasDao = new ImputadoscarpetasDAO();
        $ImputadosexhortosDao = new ImputadosexhortosDAO();
        $ImputadosexhortosDto = new ImputadosexhortosDTO();
        $ImputadoscarpetasDto = $this->verificaCeros($ImputadoscarpetasDto);
        @$tipo = $_POST["tipo"];
        //Para que no entre en algunode los dos
        if ($tipo == 'Carpetas') {
            $ImputadosexhortosDto->setIdImputadoExhorto('w');
        }
        if ($tipo == 'Carpetas') {
            $ImputadoscarpetasDto = $ImputadoscarpetasDao->selectImputadoscarpetasPag($ImputadoscarpetasDto);
            //Con paginacion en imputados Carpetas
            @$nombre = $_POST["nombre"];
            @$paterno = $_POST["paterno"];
            @$materno = $_POST["materno"];
            if ($ImputadoscarpetasDto != "") {
                $json = "";
                $json .= '{"type":"OK",';
                $total = count($ImputadoscarpetasDto);
                $totalCarpetas = count($ImputadoscarpetasDto);
                $json .= '"totalCount":' . json_encode($total) . ",";
                $json .= '"data":[';
                $x = 1;
                $json .= "{";
                $json .= '"ImputadosCarpetas": [';
                if ($ImputadoscarpetasDto != "") {
                    foreach ($ImputadoscarpetasDto as $Imputado) {
                        $json .= "{";
                        $json .= '"idImputadoCarpeta":' . json_encode(utf8_encode($Imputado->getIdImputadoCarpeta())) . ",";
                        if ($Imputado->getCveTipoPersona() == 1) {
                            $json .= '"nombre":' . json_encode(utf8_encode($Imputado->getNombre())) . ",";
                            $json .= '"paterno":' . json_encode(utf8_encode($Imputado->getPaterno())) . ",";
                            $json .= '"materno":' . json_encode(utf8_encode($Imputado->getMaterno())) . ",";
                        } else {
                            $json .= '"nombre":' . json_encode(utf8_encode($Imputado->getNombreMoral())) . ",";
                            $json .='"paterno": "",';
                            $json .='"materno": "",';
                        }
                        $json .= '"rfc":' . json_encode(utf8_encode($Imputado->getRfc())) . ",";
                        $json .= '"curp":' . json_encode(utf8_encode($Imputado->getCurp())) . ",";
                        $json .= '"LegalDetencion":' . json_encode(utf8_encode($Imputado->getLegalDetencion())) . ",";
                        $json .= '"alias":' . json_encode(utf8_encode($Imputado->getAlias())) . ",";
                        $DomiciliosImCarDto = new DomiciliosimputadoscarpetasDTO();
                        $DomiciliosImCarDao = new DomiciliosimputadoscarpetasDAO();
                        $DomiciliosImCarDto->setIdImputadoCarpeta($Imputado->getIdImputadoCarpeta());
                        $DomiciliosImCarDto = $DomiciliosImCarDao->selectDomiciliosimputadoscarpetas($DomiciliosImCarDto);
                        if ($DomiciliosImCarDto != "") {
                            if ($DomiciliosImCarDto[0]->getDireccion() != "") {
                                $direccion = $DomiciliosImCarDto[0]->getDireccion();
                            } else {
                                $direccion = "";
                            }
                            if ($DomiciliosImCarDto[0]->getColonia() != "") {
                                $colonia = ', COL.: ' . $DomiciliosImCarDto[0]->getColonia();
                            } else {
                                $colonia = "";
                            }
                            if ($DomiciliosImCarDto[0]->getNumInterior() != "") {
                                $numeroInterior = ', N.I.: ' . $DomiciliosImCarDto[0]->getNumInterior();
                            } else {
                                $numeroInterior = "";
                            }
                            if ($DomiciliosImCarDto[0]->getCp() != "") {
                                $cp = ', C.P.: ' . $DomiciliosImCarDto[0]->getCp();
                            } else {
                                $cp = "";
                            }
                            if ($DomiciliosImCarDto[0]->getCveMunicipio() != "" and $DomiciliosImCarDto[0]->getCveMunicipio() != "0" and $DomiciliosImCarDto[0]->getCvePais() == "119") {
                                $MunicipiosDto = new MunicipiosDTO();
                                $MunicipiosDao = new MunicipiosDAO();
                                $MunicipiosDto->setCveMunicipio($DomiciliosImCarDto[0]->getCveMunicipio());
                                $MunicipiosDto = $MunicipiosDao->selectMunicipios($MunicipiosDto);
                                if ($MunicipiosDto != "") {
                                    $municipio = ', ' . $MunicipiosDto[0]->getDesMunicipio();
                                } else {
                                    $municipio = "";
                                }
                            } else {
                                $municipio = ', ' . $DomiciliosImCarDto[0]->getMunicipio();
                            }
                            if ($DomiciliosImCarDto[0]->getCveEstado() != "" and $DomiciliosImCarDto[0]->getCveEstado() != "0" and $DomiciliosImCarDto[0]->getCvePais() == "119") {
                                $EstadosDto = new EstadosDTO();
                                $EstadosDao = new EstadosDAO();
                                $EstadosDto->setCveEstado($DomiciliosImCarDto[0]->getCveEstado());
                                $EstadosDto = $EstadosDao->selectEstados($EstadosDto);
                                if ($EstadosDto != "") {
                                    $estado = ', ' . $EstadosDto[0]->getDesEstado();
                                } else {
                                    $estado = "";
                                }
                            } else {
                                $estado = ', ' . $DomiciliosImCarDto[0]->getEstado();
                            }
                            if ($DomiciliosImCarDto[0]->getCvePais() != "" and $DomiciliosImCarDto[0]->getCvePais() != "0") {
                                $PaisesDto = new PaisesDTO();
                                $PaisesDao = new PaisesDAO();
                                $PaisesDto->setCvePais($DomiciliosImCarDto[0]->getCvePais());
                                $PaisesDto = $PaisesDao->selectPaises($PaisesDto);
                                if ($PaisesDto != "") {
                                    $pais = ', ' . $PaisesDto[0]->getDesPais();
                                } else {
                                    $pais = "";
                                }
                            } else {
                                $pais = "";
                            }
                        }
                        $domicilio = $direccion . $colonia . $numeroInterior . $cp . $municipio . $estado . $pais;
                        $json .= '"domicilio":' . json_encode(utf8_encode($domicilio)) . ",";
                        if ($Imputado->getFechaDeclaracion() != '') {
                            $tmpFecha = explode('-', $Imputado->getFechaDeclaracion());
                            $fechaDeclaracion = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                            $json .= '"fechaDeclaracion":' . json_encode($fechaDeclaracion) . ",";
                        } else {
                            $json .='"fechaDeclaracion": "-",';
                        }
                        if ($Imputado->getFechaImputacion() != '') {
                            $tmpFecha = explode('-', $Imputado->getFechaImputacion());
                            $fechaImputacion = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                            $json .= '"fechaImputacion":' . json_encode($fechaImputacion) . ",";
                        } else {
                            $json .='"fechaImputacion": "-",';
                        }
                        if ($Imputado->getFecCierreInv() != '') {
                            $tmpFecha = explode('-', $Imputado->getFecCierreInv());
                            $fecCierreInv = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                            $json .= '"fecCierreInv":' . json_encode($fecCierreInv) . ",";
                        } else {
                            $json .='"fecCierreInv": "-",';
                        }
                        if ($Imputado->getFechaSobreseimiento() != '') {
                            $tmpFecha = explode('-', $Imputado->getFechaSobreseimiento());
                            $fechaSobreseimiento = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                            $json .= '"fechaSobreseimiento":' . json_encode($fechaSobreseimiento) . ",";
                        } else {
                            $json .='"fechaSobreseimiento": "-",';
                        }
                        if ($Imputado->getFechaControlDet() != '') {
                            $tmpFecha1 = explode(' ', $Imputado->getFechaControlDet());
                            $tmpFecha = explode('-', $tmpFecha1[0]);
                            $fechaControl = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                            $json .= '"fechaControl":' . json_encode($fechaControl) . ",";
                        } else {
                            $json .='"fechaControl": "-",';
                        }
                        if ($Imputado->getFecTerminoCons() != '') {
                            $tmpFecha1 = explode(' ', $Imputado->getFecTerminoCons());
                            $tmpFecha = explode('-', $tmpFecha1[0]);
                            $fecTerminoCons = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                            $json .= '"fecTerminoCons":' . json_encode($fecTerminoCons) . ",";
                        } else {
                            $json .='"fecTerminoCons": "-",';
                        }
                        if ($Imputado->getTieneSobreseimiento() == 'N') {
                            $sobre = 'NO';
                        } else {
                            $sobre = 'SI';
                        }
                        $json .= '"tieneSobreseimiento":' . json_encode($sobre) . ",";
                        $json .= '"ingresomensual":' . json_encode('$' . $Imputado->getIngresoMensual()) . ",";
                        $CarpetaJudicialDto = new CarpetasjudicialesDTO();
                        $CarpetaJudicialDao = new CarpetasjudicialesDAO();
                        $CarpetaJudicialDto->setIdCarpetaJudicial($Imputado->getidCarpetaJudicial());
                        $CarpetaJudicialDto = $CarpetaJudicialDao->selectCarpetasjudiciales($CarpetaJudicialDto);
                        if ($CarpetaJudicialDto != "") {
                            $cveTipoCarpeta = $CarpetaJudicialDto[0]->getCveTipoCarpeta();
                            $numero = $CarpetaJudicialDto[0]->getNumero();
                            $anio = $CarpetaJudicialDto[0]->getAnio();
                            $carpetaInv = $CarpetaJudicialDto[0]->getCarpetaInv();
                            $fechaRadicacion = $CarpetaJudicialDto[0]->getFechaRadicacion();
                            $nuc = $CarpetaJudicialDto[0]->getNuc();
                            $cveJuzgado = $CarpetaJudicialDto[0]->getCveJuzgado();
                            $JuzgadosDto = new JuzgadosDTO();
                            $JuzgadosDao = new JuzgadosDAO();
                            $JuzgadosDto->setCveJuzgado($CarpetaJudicialDto[0]->getCveJuzgado());
                            $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto);
                            $DesJuzgado = $JuzgadosDto[0]->getDesJuzgado();
                            $TiposCarpetaDto = new TiposcarpetasDTO();
                            $TiposCarpetaDao = new TiposcarpetasDAO();
                            $TiposCarpetaDto->setCveTipoCarpeta($CarpetaJudicialDto[0]->getCveTipoCarpeta());
                            $TiposCarpetaDto = $TiposCarpetaDao->selectTiposcarpetas($TiposCarpetaDto);
                            if ($TiposCarpetaDto != "") {
                                $DesCarpeta = $TiposCarpetaDto[0]->getDesTipoCarpeta();
                            } else {
                                $DesCarpeta = "";
                            }
                            $Carpeta = $DesCarpeta . ' ' . $numero . '/' . $anio;
                        } else {
                            $Carpeta = "";
                        }
                        $json .= '"Carpeta":' . json_encode(utf8_encode($Carpeta)) . ",";
                        $json .= '"fechaRadicacion":' . json_encode(utf8_encode($fechaRadicacion)) . ",";
                        $json .= '"CarpetaInv":' . json_encode(utf8_encode($carpetaInv)) . ",";
                        $json .= '"nuc":' . json_encode(utf8_encode($nuc)) . ",";
                        $json .= '"Juzgado":' . json_encode(utf8_encode($DesJuzgado)) . ",";
                        if ($Imputado->getCveOcupacion() != "") {
                            $OcupacionesDto = new OcupacionesDTO();
                            $OcupacionesDao = new OcupacionesDAO();
                            $OcupacionesDto->setCveOcupacion($Imputado->getCveOcupacion());
                            $OcupacionesDto = $OcupacionesDao->selectOcupaciones($OcupacionesDto);
                            $json .= '"desocupacion":' . json_encode(utf8_encode($OcupacionesDto[0]->getDesOcupacion())) . ",";
                        } else {
                            $json .= '"desocupacion": "",';
                        }
                        if ($Imputado->getFechaNacimiento() != "") {
                            $tmpFecha = explode('-', $Imputado->getFechaNacimiento());
                            $fechaNacimiento = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                            $json .= '"fechaNacimiento":' . json_encode($fechaNacimiento) . ",";
                        } else {
                            $json .= '"fechaNacimiento": "",';
                        }
                        $json .= '"edad":' . json_encode(utf8_encode($Imputado->getEdad())) . ",";
                        if ($Imputado->getCvePaisNacimiento() != "" and $Imputado->getCvePaisNacimiento() != "0") {
                            $PaisesDto = new PaisesDTO();
                            $PaisesDao = new PaisesDAO();
                            $PaisesDto->setCvePais($Imputado->getCvePaisNacimiento());
                            $PaisesDto = $PaisesDao->selectPaises($PaisesDto);
                            if ($PaisesDto != "") {
                                $json .= '"desPais":' . json_encode(utf8_encode($PaisesDto[0]->getDesPais())) . ",";
                            } else {
                                $json .= '"desPais": "",';
                            }
                        } else {
                            $json .= '"desPais": "",';
                        }
                        if ($Imputado->getCveEstadoNacimiento() != "" and $Imputado->getCveEstadoNacimiento() != "0" and $Imputado->getCvePaisNacimiento() == "119") {
                            $EstadosDto = new EstadosDTO();
                            $EstadosDao = new EstadosDAO();
                            $EstadosDto->setCveEstado($Imputado->getCveEstadoNacimiento());
                            $EstadosDto = $EstadosDao->selectEstados($EstadosDto);
                            if ($EstadosDto != "") {
                                $json .= '"estadoNacimiento":' . json_encode(utf8_encode($EstadosDto[0]->getDesEstado())) . ",";
                            } else {
                                $json .= '"estadoNacimiento": "",';
                            }
                        } else {
                            $json .= '"estadoNacimiento":' . json_encode(utf8_encode($Imputado->getEstadoNacimiento())) . ",";
                        }
                        if ($Imputado->getCveMunicipioNacimiento() != "" and $Imputado->getCveMunicipioNacimiento() != "0" and $Imputado->getCvePaisNacimiento() == "119") {
                            $MunicipiosDto = new MunicipiosDTO();
                            $MunicipiosDao = new MunicipiosDAO();
                            $MunicipiosDto->setCveMunicipio($Imputado->getCveMunicipioNacimiento());
                            $MunicipiosDto = $MunicipiosDao->selectMunicipios($MunicipiosDto);
                            if ($EstadosDto != "") {
                                $json .= '"municipioNacimiento":' . json_encode(utf8_encode($MunicipiosDto[0]->getDesMunicipio())) . ",";
                            } else {
                                $json .= '"municipioNacimiento": "",';
                            }
                        } else {
                            $json .= '"municipioNacimiento":' . json_encode(utf8_encode($Imputado->getMunicipioNacimiento())) . ",";
                        }
                        if ($Imputado->getCveEstadoCivil() != "") {
                            $EstadosCivilesDto = new EstadoscivilesDTO();
                            $EstadosCivilesDao = new EstadoscivilesDAO();
                            $EstadosCivilesDto->setCveEstadoCivil($Imputado->getCveEstadoCivil());
                            $EstadosCivilesDto = $EstadosCivilesDao->selectEstadosciviles($EstadosCivilesDto);
                            $json .= '"desEstadoCivil":' . json_encode(utf8_encode($EstadosCivilesDto[0]->getDesEstadoCivil())) . ",";
                        } else {
                            $json .= '"desEstadoCivil": "",';
                        }
                        if ($Imputado->getCveNivelInstruccion() != "") {
                            $NivelInstruccionesDto = new NivelesinstruccionesDTO();
                            $NivelInstruccionesDao = new NivelesinstruccionesDAO();
                            $NivelInstruccionesDto->setCveNivelInstruccion($Imputado->getCveNivelInstruccion());
                            $NivelInstruccionesDto = $NivelInstruccionesDao->selectNivelesinstrucciones($NivelInstruccionesDto);
                            $json .= '"desNivelInstruccion":' . json_encode(utf8_encode($NivelInstruccionesDto[0]->getDesNivelInstruccion())) . ",";
                        } else {
                            $json .= '"desNivelInstruccion": "",';
                        }
                        if ($Imputado->getCveEspanol() != "") {
                            $EspanolDto = new EspanolDTO();
                            $EspanolDao = new EspanolDAO();
                            $EspanolDto->setCveEspanol($Imputado->getCveEspanol());
                            $EspanolDto = $EspanolDao->selectEspanol($EspanolDto);
                            $json .= '"desEspanol":' . json_encode(utf8_encode($EspanolDto[0]->getDesEspanol())) . ",";
                        } else {
                            $json .= '"desEspanol": "",';
                        }
                        if ($Imputado->getCveDialectoIndigena() != "") {
                            $DialectoIndigenaDto = new DialectoindigenaDTO();
                            $DialectoIndigenaDao = new DialectoindigenaDAO();
                            $DialectoIndigenaDto->setCveDialectoIndigena($Imputado->getCveDialectoIndigena());
                            $DialectoIndigenaDto = $DialectoIndigenaDao->selectDialectoindigena($DialectoIndigenaDto);
                            if ($DialectoIndigenaDto) {
                                $json .= '"desDialecto":' . json_encode(utf8_encode($DialectoIndigenaDto[0]->getDesDialectoIndigena())) . ",";
                            } else {
                                $json .= '"desDialecto": "",';
                            }
                        } else {
                            $json .= '"desDialecto": "",';
                        }
                        if ($Imputado->getCveTipoFamiliaLinguistica() != "") {
                            $FamLinDto = new TipofamilialinguisticaDTO();
                            $FamLinDao = new TipofamilialinguisticaDAO();
                            $FamLinDto->setCveTipoFamiliaLinguistica($Imputado->getCveTipoFamiliaLinguistica());
                            $FamLinDto = $FamLinDao->selectTipofamilialinguistica($FamLinDto);
                            $json .= '"desFamLin":' . json_encode(utf8_encode('-' . $FamLinDto[0]->getDesTipoFamiliaLinguistica())) . ",";
                        } else {
                            $json .= '"desFamLin": "",';
                        }
                        if ($Imputado->getCveInterprete() != "") {
                            $InterpreteDto = new InterpretesDTO();
                            $InterpreteDao = new InterpretesDAO();
                            $InterpreteDto->setCveInterprete($Imputado->getCveInterprete());
                            $InterpreteDto = $InterpreteDao->selectInterpretes($InterpreteDto);
                            $json .= '"interprete":' . json_encode(utf8_encode($InterpreteDto[0]->getDesInterprete())) . ",";
                        } else {
                            $json .= '"interprete": "",';
                        }
                        if ($Imputado->getCveEstadoPsicofisico() != "") {
                            $EdoPsicofisicoDto = new EstadospsicofisicosDTO();
                            $EdoPsicofisicoDao = new EstadospsicofisicosDAO();
                            $EdoPsicofisicoDto->setCveEstadoPsicofisico($Imputado->getCveEstadoPsicofisico());
                            $EdoPsicofisicoDto = $EdoPsicofisicoDao->selectEstadospsicofisicos($EdoPsicofisicoDto);
                            $json .= '"edopsico":' . json_encode(utf8_encode($EdoPsicofisicoDto[0]->getDesEstadoPsicofisico())) . ",";
                        } else {
                            $json .= '"edopsico": "",';
                        }
                        if ($Imputado->getCveGrupoEdnico() != "") {
                            $GrupoEtnicoDto = new GruposednicosDTO();
                            $GrupoEtnicoDao = new GruposednicosDAO();
                            $GrupoEtnicoDto->setCveGrupoEdnico($Imputado->getCveGrupoEdnico());
                            $GrupoEtnicoDto = $GrupoEtnicoDao->selectGruposednicos($GrupoEtnicoDto);
                            $json .= '"grupoetnico":' . json_encode(utf8_encode($GrupoEtnicoDto[0]->getDesGrupoEdnico())) . ",";
                        } else {
                            $json .= '"grupoetnico": "",';
                        }
                        if ($Imputado->getCveTipoDetencion() != "") {
                            $TiposDetencionesDto = new TiposdetencionesDTO();
                            $TiposDetencionesDao = new TiposdetencionesDAO();
                            $TiposDetencionesDto->setCveTipoDetencion($Imputado->getCveTipoDetencion());
                            $TiposDetencionesDto = $TiposDetencionesDao->selectTiposdetenciones($TiposDetencionesDto);
                            $json .= '"tipodetencion":' . json_encode(utf8_encode($TiposDetencionesDto[0]->getDesTipoDetencion())) . ",";
                        } else {
                            $json .= '"tipodetencion": "",';
                        }
                        if ($Imputado->getCveTipoReincidencia() != "") {
                            $ReincidenciasDto = new TiposreincidenciasDTO();
                            $ReincidenciasDao = new TiposreincidenciasDAO();
                            $ReincidenciasDto->setCveTipoReincidencia($Imputado->getCveTipoReincidencia());
                            $ReincidenciasDto = $ReincidenciasDao->selectTiposreincidencias($ReincidenciasDto);
                            $json .= '"reincidencia":' . json_encode(utf8_encode($ReincidenciasDto[0]->getDesTipoReincidencia())) . ",";
                        } else {
                            $json .= '"reincidencia": "",';
                        }
                        if ($Imputado->getCveCereso() != "") {
                            $CeresoDto = new CeresosDTO();
                            $CeresoDao = new CeresosDAO();
                            $CeresoDto->setCveCereso($Imputado->getCveCereso());
                            $CeresoDto = $CeresoDao->selectCeresos($CeresoDto);
                            $json .= '"cereso":' . json_encode(utf8_encode($CeresoDto[0]->getDesCereso())) . ",";
                        } else {
                            $json .= '"cereso": "",';
                        }
                        if ($Imputado->getCveEtapaProcesal() != "") {
                            $EtapaProcesalDto = new EtapasprocesalesDTO();
                            $EtapaProcesalDao = new EtapasprocesalesDAO();
                            $EtapaProcesalDto->setCveEtapaProcesal($Imputado->getCveEtapaProcesal());
                            $EtapaProcesalDto = $EtapaProcesalDao->selectEtapasprocesales($EtapaProcesalDto);
                            $json .= '"EtapaProcesal":' . json_encode(utf8_encode($EtapaProcesalDto[0]->getDesEtapaProcesal()));
                        } else {
                            $json .= '"EtapaProcesal": ""';
                        }
                        $json .= "}";
                    }
                }
                $json .= '],';
                $json .= '"pagina":' . json_encode(utf8_encode($param["pag"])) . ",";
                $json .= '"total":"' . count($ImputadoscarpetasDto) . '"';
                $json .= "}]}";
                return $json;
            } else {
                return "";
            }
        }
    }

    /*
     * Metodo que valida si todos los imputados pertenecientes a una carpeta judicial
     * tienen sobreseimiento o se encuentran en una etapa procesal diferente
     * a la etapa de la carpeta judicial para proceder a cerrar dicha carpeta
     */

    public function validaSobreseimiento($CarpetasJudicialesDto, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $sobreseimiento = array();
        $bandera = false;
        $idCarpetaJudicial = $CarpetasJudicialesDto->getIdCarpetaJudicial();
        /*
         * Consultar la etapa procesal actual de la carpeta judicial
         */
        $cveEtapaProcesal = 0;
        $carpetasJudicialesDto = new CarpetasjudicialesDTO();
        $carpetasJudicialesDao = new CarpetasjudicialesDAO();
        $carpetasJudicialesDto->setIdCarpetaJudicial($idCarpetaJudicial);
        $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto, "", $this->proveedor);
        if ($carpetasJudicialesDto != "") {
            $cveEtapaProcesal = (int) $carpetasJudicialesDto[0]->getCveEtapaProcesal();
        }
        $dtoImputadoCarpeta = new ImputadoscarpetasDTO();
        $imputadoscarpetasDao = new ImputadoscarpetasDAO();
        $dtoImputadoCarpeta->setIdCarpetaJudicial($idCarpetaJudicial);
        $dtoImputadoCarpeta->setActivo("S");
        $dtoImputadoCarpeta = $imputadoscarpetasDao->selectImputadoscarpetas($dtoImputadoCarpeta, "", $this->proveedor);
        if ($dtoImputadoCarpeta != "") {
            foreach ($dtoImputadoCarpeta as $dto) {
                if ($dto->getTieneSobreseimiento() == "S" || (int) $dto->getCveEtapaProcesal() != $cveEtapaProcesal) {
                    $sobreseimiento[] = $dto->getIdImputadoCarpeta();
                }
            }
        }
        /*
         * Si todos los imputados activos que pertenecen a la carpeta judicial
         * seleccionada tienen sobreseimiento o se encuentran en una etapa procesal
         * diferente a la etapa de la carpeta judicial, se procede a 
         * cerrar la carpeta judicial
         */
        if (count($dtoImputadoCarpeta) == count($sobreseimiento)) {
            $carpetasJudicialesDto = new CarpetasjudicialesDTO();
            $auxCarpetasJudicialesDto = new CarpetasjudicialesDTO();
            $carpetasjudicialesDao = new CarpetasjudicialesDAO();
            $conclusionesDto = new ConclusionesDTO();
            $conclusionesDao = new ConclusionesDAO();
            $fechaTermino = "";
            $fechaActual = "";
            $this->proveedor->execute("SELECT NOW() AS FechaActual");
            if (!$this->proveedor->error()) {
                if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                    while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                        $fechaActual = $row['FechaActual'];
                        $fechaTermino = explode(" ", $fechaActual);
                    }
                } else {
                    $fechaActual = "";
                    $fechaTermino = "";
                }
            }
            $auxCarpetasJudicialesDto->setIdCarpetaJudicial($idCarpetaJudicial);
            $auxCarpetasJudicialesDto->setActivo("S");
            $auxCarpetasJudicialesDto = $carpetasjudicialesDao->selectCarpetasjudiciales($auxCarpetasJudicialesDto, "", $this->proveedor);
            $carpetasJudicialesDto->setIdCarpetaJudicial($idCarpetaJudicial);
            $carpetasJudicialesDto->setFechaTermino($fechaTermino[0]);
            /*
             * La conclusion debe ser de sobresimiento
             */
            $conclusionesDto->setActivo("S");
            $conclusionesDto->setDesConclusion("SOBRESIMIENTO");
            if ($auxCarpetasJudicialesDto[0]->getCveEtapaProcesal() == 3) {
                $conclusionesDto->setJuicio("S");
            } else {
                $conclusionesDto->setJuicio("N");
            }
            $conclusionesDto = $conclusionesDao->selectConclusiones($conclusionesDto, "", $this->proveedor);
            //var_dump($conclusionesDto);
            //$carpetasJudicialesDto->setCveConclucion($conclusionesDto[0]->getCveConclusion());
            $carpetasJudicialesDto->setCveEstatusCarpeta(2);
            $carpetasJudicialesDto->setFechaActualizacion($fechaActual);
            $carpetasJudicialesDto = $carpetasjudicialesDao->updateCarpetasjudiciales($carpetasJudicialesDto, $this->proveedor);
            if ($carpetasJudicialesDto != "") {
                $bandera = true;
            } else {
                $bandera = false;
            }
        } else {
            $bandera = false;
        }
        return $bandera;
    }

    /* --------------------- GET P�GINAS AGRESORES (Varias Tablas) */
    #Nombre: GET Paginas de los agresores
    #Descripci�n: Relaci�n de la v�ctima, imputado y delito, obteniendo los imputados cuyo ofendido ha sido v�ctima
    #de acoso, victima de trata o v�ctima de violencia de g�nero.
    ##Criterios: cveVictimaDeAcoso=1, cveVictimaDeTrata=1, cveVictimaDeViolenciaDeGenero=1

    public function getPaginasAgresores($ImputadoscarpetasDto, $param) {
        $ImputadoscarpetasDao = new ImputadoscarpetasDAO();
        //$fields = " count(ic.idImputadoCarpeta) as totalCount  ";
        if ($param["fechaDelitoDesde"] != "") {
            $fechaDelitoDesde = explode("/", $param["fechaDelitoDesde"]);
        }
        if ($param["fechaDelitoHasta"] != "") {
            $fechaDelitoHasta = explode("/", $param["fechaDelitoHasta"]);
        }

        $fields = " ic.idImputadoCarpeta ";

        $orden = " ic,tblcarpetasjudiciales cj,tbltiposcarpetas tc, ";
        $orden.=" tblofendidoscarpetas oc, ";
        $orden.=" tblimpofedelcarpetas iodc, ";
        $orden.=" tbldelitoscarpetas dc, ";
        $orden.=" tblclasificacionesdelitos cd, ";
        $orden.=" tbldelitos d, ";
        $orden.=" tblconsignacionesacciones ca ";
        $orden.=" WHERE ca.cveConsignacionA=cj.cveConsignacionA ";
        $orden.=" AND cj.idCarpetaJudicial=oc.idCarpetaJudicial ";
        $orden.=" AND tc.cveTipoCarpeta=cj.cveTipoCarpeta ";
        $orden.=" AND oc.idOfendidoCarpeta=iodc.idOfendidoCarpeta ";
        $orden.=" AND ic.idImputadoCarpeta=iodc.idImputadoCarpeta ";
        $orden.=" AND dc.idDelitoCarpeta=iodc.idDelitoCarpeta ";
        $orden.=" AND cd.cveClasificacionDelito=iodc.cveClasificacionDelito ";
        $orden.=" AND d.cveDelito=dc.cveDelito ";
        $orden.=" AND (oc.cveVictimaDeAcoso=1 OR oc.cveVictimaDeTrata=1 OR oc.cveVictimaDeViolenciaDeGenero=1) ";
        $orden.=" AND ic.activo='S' ";
        $orden.=" AND oc.activo='S' ";
        $orden.=" AND iodc.activo='S' ";
        $orden.=" AND dc.activo='S' ";
        $orden.=" AND ic.cveTipoPersona=1  ";

//        if($ImputadoscarpetasDto->getNombre()!=""){
//        $orden.= " AND (ic.nombre like '%".$ImputadoscarpetasDto->getNombre()."%' OR ic.nombreMoral like '%".$ImputadoscarpetasDto->getNombre()."%') ";
//        }
//        if($ImputadoscarpetasDto->getPaterno()!=""){
//        $orden.= " AND ic.paterno like '%".$ImputadoscarpetasDto->getPaterno()."%' ";
//        }
//        if($ImputadoscarpetasDto->getMaterno()!=""){
//        $orden.= " AND ic.materno like '%".$ImputadoscarpetasDto->getMaterno()."%' ";
//        }
        if ($param["fechaDelitoDesde"] != "") {
            $orden.=" AND iodc.fechaDelito >= '" . $fechaDelitoDesde[2] . "-" . $fechaDelitoDesde[1] . "-" . $fechaDelitoDesde[0] . " 00:00:00' ";
        }
        if ($param["fechaDelitoHasta"] != "") {
            $orden.=" AND iodc.fechaDelito <= '" . $fechaDelitoHasta[2] . "-" . $fechaDelitoHasta[1] . "-" . $fechaDelitoHasta[0] . " 00:00:00' ";
        }
//        if($param["cveClasificacionDelito"]!="0"){
//            $orden.= " AND cd.cveClasificacionDelito=".$param["cveClasificacionDelito"];
//        }
        if ($param["cveTipoCarpeta"] != "0" and $param["cveTipoCarpeta"] != "") {
            $orden.= " AND tc.cveTipoCarpeta=" . $param["cveTipoCarpeta"];
        }
        $orden.= " GROUP BY ic.idImputadoCarpeta ";

        //                                                          $imputadoscarpetasDto,$proveedor = null, $orden = "", $param = null, $fields = null
        $imputadoscarpetasDto = new ImputadoscarpetasDTO();
        $response = $ImputadoscarpetasDao->selectImputadoscarpetasPag($imputadoscarpetasDto, null, $orden, null, $fields);
        //print_r($response);
        $numTot = 0;
//        foreach ($response as $total) {
//           $numTot =  $numTot +$total["totalCount"];
//        }
        //echo $numTot.'--Num--';
        $numTot = count($response);
        $json = "";
        $Pages = (int) $numTot / $param["cantxPag"];
        $restoPages = $numTot % $param["cantxPag"];
        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);
        //echo $totPages.'-pags-';

        $json .= '{"type":"OK",';
        $json .= '"totalCount":"' . $numTot . '",';
        $json .= '"data":[';
        $x = 1;

        if ($totPages > 1) {
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
            $index = 0;
            $json .= "],";
            $json .= "{";
            $json .= '"pagina":' . json_encode(utf8_encode($index)) . "";
            $json .= "}";
            $json .= '"estatus":"Error",';
            $json .= '"mensaje":"SIN RESULTADOS A MOSTRAR",';
            $json .= '"pagina":' . json_encode(($index)) . "";
            $json .= '"total":"' . ($index) . '"';
            $json .= "}";
        }
        //echo $json.'--Json--';
        return $json;
    }

    /* ---------------------------------------------------------------------------------------------------------- */

    /*     * ******************* CONSULTA DE AGRESORES ************************************************************** */
    #Nombre: Consulta de los imputados agresores
    #Descripci�n: Relaci�n de la v�ctima, imputado y delito, obteniendo los imputados cuyo ofendido ha sido v�ctima
    #de acoso, victima de trata o v�ctima de violencia de g�nero.
    ##Criterios: cveVictimaDeAcoso=1, cveVictimaDeTrata=1, cveVictimaDeViolenciaDeGenero=1

    public function consultarAgresores($ImputadoscarpetasDto, $param) {

        $ImputadoscarpetasDao = new ImputadoscarpetasDAO();
        if ($param["fechaDelitoDesde"] != "") {
            $fechaDelitoDesde = explode("/", $param["fechaDelitoDesde"]);
        }
        if ($param["fechaDelitoHasta"] != "") {
            $fechaDelitoHasta = explode("/", $param["fechaDelitoHasta"]);
        }

        $fields = " ic.idImputadoCarpeta,ic.nombre,ic.paterno,ic.materno,oc.idOfendidoCarpeta,ic.cveTipoPersona, ";
        $fields.= " oc.nombre nombreOf,oc.paterno paternoOf,oc.materno maternoOf,tc.cveTipoCarpeta,tc.desTipoCarpeta, ";
        $fields.= " cj.numero,cj.anio,cj.carpetaInv,cj.nuc,j.desJuzgado,iodc.fechaDelito,cd.desClasificacionDelito,d.desDelito, ";
        $fields.= " ca.desConsignacionA,oc.cveVictimaDeAcoso,oc.cveVictimaDeTrata,oc.cveVictimaDeViolenciaDeGenero ";

        $orden = " ic,tblcarpetasjudiciales cj,tbltiposcarpetas tc, ";
        $orden.=" tblofendidoscarpetas oc, ";
        $orden.=" tblimpofedelcarpetas iodc, ";
        $orden.=" tbldelitoscarpetas dc, ";
        $orden.=" tblclasificacionesdelitos cd, ";
        $orden.=" tbldelitos d, ";
        $orden.=" tbljuzgados j, ";
        $orden.=" tblconsignacionesacciones ca ";
        $orden.=" WHERE ca.cveConsignacionA=cj.cveConsignacionA ";
        $orden.=" AND cj.idCarpetaJudicial=oc.idCarpetaJudicial ";
        $orden.=" AND j.cveJuzgado=cj.cveJuzgado ";
        $orden.=" AND tc.cveTipoCarpeta=cj.cveTipoCarpeta ";
        $orden.=" AND oc.idOfendidoCarpeta=iodc.idOfendidoCarpeta ";
        $orden.=" AND ic.idImputadoCarpeta=iodc.idImputadoCarpeta ";
        $orden.=" AND dc.idDelitoCarpeta=iodc.idDelitoCarpeta ";
        $orden.=" AND cd.cveClasificacionDelito=iodc.cveClasificacionDelito ";
        $orden.=" AND d.cveDelito=dc.cveDelito ";
        $orden.=" AND (oc.cveVictimaDeAcoso=1 OR oc.cveVictimaDeTrata=1 OR oc.cveVictimaDeViolenciaDeGenero=1) ";
        $orden.=" AND ic.activo='S' ";
        $orden.=" AND oc.activo='S' ";
        $orden.=" AND iodc.activo='S' ";
        $orden.=" AND dc.activo='S' ";
        $orden.=" AND ic.cveTipoPersona=1  ";

//        if($ImputadoscarpetasDto->getNombre()!=""){
//        $orden.= " AND (ic.nombre like '%".$ImputadoscarpetasDto->getNombre()."%' OR ic.nombreMoral like '%".$ImputadoscarpetasDto->getNombre()."%') ";
//        }
//        if($ImputadoscarpetasDto->getPaterno()!=""){
//        $orden.= " AND ic.paterno like '%".$ImputadoscarpetasDto->getPaterno()."%' ";
//        }
//        if($ImputadoscarpetasDto->getMaterno()!=""){
//        $orden.= " AND ic.materno like '%".$ImputadoscarpetasDto->getMaterno()."%' ";
//        }

        if ($param["fechaDelitoDesde"] != "") {
            $orden.=" AND iodc.fechaDelito >= '" . $fechaDelitoDesde[2] . "-" . $fechaDelitoDesde[1] . "-" . $fechaDelitoDesde[0] . " 00:00:00' ";
        }
        if ($param["fechaDelitoHasta"] != "") {
            $orden.=" AND iodc.fechaDelito <= '" . $fechaDelitoHasta[2] . "-" . $fechaDelitoHasta[1] . "-" . $fechaDelitoHasta[0] . " 00:00:00' ";
        }
//        if($param["cveClasificacionDelito"]!="0"){
//            $orden.= " AND cd.cveClasificacionDelito=".$param["cveClasificacionDelito"];
//        }
        if ($param["cveTipoCarpeta"] != "0" and $param["cveTipoCarpeta"] != "") {
            $orden.= " AND tc.cveTipoCarpeta=" . $param["cveTipoCarpeta"];
        }
        if ($param["idImputado"] != "") {
            $orden.= " AND ic.idImputadoCarpeta=" . $param["idImputado"];
        } else {
            $orden.= " GROUP BY ic.idImputadoCarpeta ";
        }
        //                                                                                $imputadoscarpetasDto,$proveedor = null, $orden = "", $param = null, $fields = null
        $imputadoscarpetasDto = new ImputadoscarpetasDTO();
        $ImputadoscarpetasDto = $ImputadoscarpetasDao->selectImputadoscarpetasPag($imputadoscarpetasDto, null, $orden, $param, $fields);

        if ($ImputadoscarpetasDto != "") {
            $datos = array("estatus" => "ok", "totalCount" => "", "pagina" => $param["pag"], "total" => "", "mensaje" => "Resultados", "datos" => array());
            foreach ($ImputadoscarpetasDto as $imputado) {
                array_push($datos["datos"], $imputado);
            }
            $datos["totalCount"] = count($datos["datos"]) - 1;
        } else {
            $datos = array("estatus" => "Error", "mensaje" => "Sin Resultados");
        }
        return $datos;
    }

    /* -------------------------------------------------------------------------------------------------- */

    /* -------------------------------------------------------------------------------------------------- */
    #Nombre: consulta de imputados con delito
    #Descripci�n: Obtenci�n de la informaci�n del delito de un imputado

    public function consultarImputadoDelito($ImputadoscarpetasDto, $param) {
        $ImputadoscarpetasDao = new ImputadoscarpetasDAO();
        //print_r($ImputadoscarpetasDto);
        $ImputadoscarpetasDto = $ImputadoscarpetasDao->selectImputadoscarpetas($ImputadoscarpetasDto);

        if ($ImputadoscarpetasDto != "") {
            $json = "";
            $json .= '{"type":"OK",';
            $json .= '"totalCount":"' . count($ImputadoscarpetasDto) . '",';
            $json .= '"data":[';
            $x = 1;
            if ($ImputadoscarpetasDto != "") {
                foreach ($ImputadoscarpetasDto as $Imputado) {
                    $json .= "{";
                    $json .= '"idImputadoCarpeta":' . json_encode(utf8_encode($Imputado->getIdImputadoCarpeta())) . ",";
                    $json .= '"nombre":' . json_encode(utf8_encode($Imputado->getNombre())) . ",";
                    $json .= '"paterno":' . json_encode(utf8_encode($Imputado->getPaterno())) . ",";
                    $json .= '"materno":' . json_encode(utf8_encode($Imputado->getMaterno())) . ",";
                    $json .= '"rfc":' . json_encode(utf8_encode($Imputado->getRfc())) . ",";
                    $json .= '"curp":' . json_encode(utf8_encode($Imputado->getCurp())) . ",";
                    $json .= '"alias":' . json_encode(utf8_encode($Imputado->getAlias())) . ",";

                    $DomiciliosImCarDto = new DomiciliosimputadoscarpetasDTO();
                    $DomiciliosImCarDao = new DomiciliosimputadoscarpetasDAO();
                    $DomiciliosImCarDto->setIdImputadoCarpeta($Imputado->getIdImputadoCarpeta());
                    $DomiciliosImCarDto = $DomiciliosImCarDao->selectDomiciliosimputadoscarpetas($DomiciliosImCarDto);
                    if ($DomiciliosImCarDto != "") {
                        $json .= '"domicilio":' . json_encode(utf8_encode($DomiciliosImCarDto[0]->getDireccion())) . ",";
                    } else {
                        $json .='"domicilio": "-",';
                    }

                    //"fechaDeclaracion": "2015-11-12",
                    if ($Imputado->getFechaDeclaracion() != '') {
                        $tmpFecha = explode('-', $Imputado->getFechaDeclaracion());
                        $fechaDeclaracion = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                        $json .= '"fechaDeclaracion":' . json_encode($fechaDeclaracion) . ",";
                    } else {
                        $json .='"fechaDeclaracion": "-",';
                    }

                    //"fechaImputacion": "2015-11-12",
                    if ($Imputado->getFechaImputacion() != '') {
                        $tmpFecha = explode('-', $Imputado->getFechaImputacion());
                        $fechaImputacion = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                        $json .= '"fechaImputacion":' . json_encode($fechaImputacion) . ",";
                    } else {
                        $json .='"fechaImputacion": "-",';
                    }

                    //"fecCierreInv": "2015-11-12"
                    if ($Imputado->getFecCierreInv() != '') {
                        $tmpFecha = explode('-', $Imputado->getFecCierreInv());
                        $fecCierreInv = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                        $json .= '"fecCierreInv":' . json_encode($fecCierreInv) . ",";
                    } else {
                        $json .='"fecCierreInv": "-",';
                    }

                    //"fechaSobreseimiento": "2015-11-12",------------
                    if ($Imputado->getFechaSobreseimiento() != '') {
                        $tmpFecha = explode('-', $Imputado->getFechaSobreseimiento());
                        $fechaSobreseimiento = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                        $json .= '"fechaSobreseimiento":' . json_encode($fechaSobreseimiento) . ",";
                    } else {
                        $json .='"fechaSobreseimiento": "-",';
                    }

                    //"fechaControl": "2015-11-12 09:35:25",
                    if ($Imputado->getFechaControlDet() != '') {
                        $tmpFecha1 = explode(' ', $Imputado->getFechaControlDet());
                        $tmpFecha = explode('-', $tmpFecha1[0]);
                        $fechaControl = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                        $json .= '"fechaControl":' . json_encode($fechaControl) . ",";
                    } else {
                        $json .='"fechaControl": "-",';
                    }

                    //fecTerminoCons": "2015-11-12 09:35:25",
                    if ($Imputado->getFecTerminoCons() != '') {
                        $tmpFecha1 = explode(' ', $Imputado->getFecTerminoCons());
                        $tmpFecha = explode('-', $tmpFecha1[0]);
                        $fecTerminoCons = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                        $json .= '"fecTerminoCons":' . json_encode($fecTerminoCons) . ",";
                    } else {
                        $json .='"fecTerminoCons": "-",';
                    }

                    if ($Imputado->getTieneSobreseimiento() == 'N') {
                        $sobre = 'NO';
                    } else {
                        $sobre = 'SI';
                    }
                    $json .= '"tieneSobreseimiento":' . json_encode($sobre) . ",";
                    $json .= '"ingresomensual":' . json_encode('$' . $Imputado->getIngresoMensual()) . ",";


                    $CarpetaJudicialDto = new CarpetasjudicialesDTO();
                    $CarpetaJudicialDao = new CarpetasjudicialesDAO();
                    $CarpetaJudicialDto->setIdCarpetaJudicial($Imputado->getidCarpetaJudicial());
                    $CarpetaJudicialDto = $CarpetaJudicialDao->selectCarpetasjudiciales($CarpetaJudicialDto);
                    $cveTipoCarpeta = $CarpetaJudicialDto[0]->getCveTipoCarpeta();
                    $numero = $CarpetaJudicialDto[0]->getNumero();
                    $anio = $CarpetaJudicialDto[0]->getAnio();

                    $TiposCarpetaDto = new TiposcarpetasDTO();
                    $TiposCarpetaDao = new TiposcarpetasDAO();
                    $TiposCarpetaDto->setCveTipoCarpeta($CarpetaJudicialDto[0]->getCveTipoCarpeta());
                    $TiposCarpetaDto = $TiposCarpetaDao->selectTiposcarpetas($TiposCarpetaDto);
                    $DesCarpeta = $TiposCarpetaDto[0]->getDesTipoCarpeta();

                    if ($CarpetaJudicialDto != "") {
                        $cveTipoCarpeta = $CarpetaJudicialDto[0]->getCveTipoCarpeta();
                        $numero = $CarpetaJudicialDto[0]->getNumero();
                        $anio = $CarpetaJudicialDto[0]->getAnio();

                        $carpetaInv = $CarpetaJudicialDto[0]->getCarpetaInv();
                        $nuc = $CarpetaJudicialDto[0]->getNuc();
                        $cveJuzgado = $CarpetaJudicialDto[0]->getCveJuzgado();
                        $JuzgadosDto = new JuzgadosDTO();
                        $JuzgadosDao = new JuzgadosDAO();
                        $JuzgadosDto->setCveJuzgado($CarpetaJudicialDto[0]->getCveJuzgado());
                        $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto);
                        $DesJuzgado = $JuzgadosDto[0]->getDesJuzgado();
                        $TiposCarpetaDto = new TiposcarpetasDTO();
                        $TiposCarpetaDao = new TiposcarpetasDAO();
                        $TiposCarpetaDto->setCveTipoCarpeta($CarpetaJudicialDto[0]->getCveTipoCarpeta());
                        $TiposCarpetaDto = $TiposCarpetaDao->selectTiposcarpetas($TiposCarpetaDto);
                        if ($TiposCarpetaDto != "") {
                            $DesCarpeta = $TiposCarpetaDto[0]->getDesTipoCarpeta();
                        } else {
                            $DesCarpeta = "";
                        }
                        $Carpeta = $DesCarpeta . ' ' . $numero . '/' . $anio;
                    } else {
                        $Carpeta = "";
                    }

                    $json .= '"Carpeta":' . json_encode(utf8_encode($Carpeta)) . ",";
                    $json .= '"CarpetaInv":' . json_encode(utf8_encode($carpetaInv)) . ",";
                    $json .= '"nuc":' . json_encode(utf8_encode($nuc)) . ",";
                    $json .= '"Juzgado":' . json_encode(utf8_encode($DesJuzgado)) . ",";

                    if ($Imputado->getCveOcupacion() != "") {
                        $OcupacionesDto = new OcupacionesDTO();
                        $OcupacionesDao = new OcupacionesDAO();
                        $OcupacionesDto->setCveOcupacion($Imputado->getCveOcupacion());
                        $OcupacionesDto = $OcupacionesDao->selectOcupaciones($OcupacionesDto);
                        $json .= '"desocupacion":' . json_encode(utf8_encode($OcupacionesDto[0]->getDesOcupacion())) . ",";
                    } else {
                        $json .= '"desocupacion": "",';
                    }

                    if ($Imputado->getFechaNacimiento() != "") {
                        $tmpFecha = explode('-', $Imputado->getFechaNacimiento());
                        $fechaNacimiento = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                        $json .= '"fechaNacimiento":' . json_encode($fechaNacimiento) . ",";
                    } else {
                        $json .= '"fechaNacimiento": "",';
                    }
                    $json .= '"edad":' . json_encode(utf8_encode($Imputado->getEdad())) . ",";

//                if ($Imputado->getCvePaisNacimiento() != "") {
//                    $PaisesDto = new PaisesDTO();
//                    $PaisesDao = new PaisesDAO();
//                    $PaisesDto->setCvePais($Imputado->getCvePaisNacimiento());
//                    $PaisesDto = $PaisesDao->selectPaises($PaisesDto);
//                    if($PaisesDto!=""){
//                    $json .= '"desPais":' . json_encode(utf8_encode($PaisesDto[0]->getDesPais())) . ",";
//                    }else{$json .= '"desPais": "",';}
//                }   
//                else{$json .= '"desPais": "",';}
//                
//                if ($Imputado->getCveEstadoNacimiento() != "") {
//                    $EstadosDto = new EstadosDTO();
//                    $EstadosDao = new EstadosDAO();
//                    $EstadosDto->setCveEstado($Imputado->getCveEstadoNacimiento());
//                    $EstadosDto = $EstadosDao->selectEstados($EstadosDto);
//                    if($EstadosDto!=""){
//                    $json .= '"estadoNacimiento":' . json_encode(utf8_encode($EstadosDto[0]->getDesEstado())) . ",";
//                    }
//                    else{$json .= '"estadoNacimiento": "",';}
//                }
//                else{$json .= '"estadoNacimiento":' . json_encode(utf8_encode($Imputado->getEstadoNacimiento())) . ",";}
//                
//                if ($Imputado->getCveMunicipioNacimiento() != "") {
//                    $MunicipiosDto = new MunicipiosDTO();
//                    $MunicipiosDao = new MunicipiosDAO();
//                    $MunicipiosDto->setCveMunicipio($Imputado->getCveMunicipioNacimiento());
//                    $MunicipiosDto = $MunicipiosDao->selectMunicipios($MunicipiosDto);
//                    if($EstadosDto!=""){
//                    $json .= '"municipioNacimiento":' . json_encode(utf8_encode($MunicipiosDto[0]->getDesMunicipio())) . ",";
//                    }
//                    else{$json .= '"municipioNacimiento": "",';}
//                }
//                
//                else{$json .= '"municipioNacimiento":' . json_encode(utf8_encode($Imputado->getMunicipioNacimiento())) . ",";}
//
//                if ($Imputado->getCveEstadoCivil() != "") {
//                    $EstadosCivilesDto = new EstadoscivilesDTO();
//                    $EstadosCivilesDao = new EstadoscivilesDAO();
//                    $EstadosCivilesDto->setCveEstadoCivil($Imputado->getCveEstadoCivil());
//                    $EstadosCivilesDto = $EstadosCivilesDao->selectEstadosciviles($EstadosCivilesDto);
//                    $json .= '"desEstadoCivil":' . json_encode(utf8_encode($EstadosCivilesDto[0]->getDesEstadoCivil())) . ",";
//                }
//                else{$json .= '"desEstadoCivil": "",';}
//
//                if ($Imputado->getCveNivelInstruccion() != "") {
//                    $NivelInstruccionesDto = new NivelesinstruccionesDTO();
//                    $NivelInstruccionesDao = new NivelesinstruccionesDAO();
//                    $NivelInstruccionesDto->setCveNivelInstruccion($Imputado->getCveNivelInstruccion());
//                    $NivelInstruccionesDto = $NivelInstruccionesDao->selectNivelesinstrucciones($NivelInstruccionesDto);
//                    $json .= '"desNivelInstruccion":' . json_encode(utf8_encode($NivelInstruccionesDto[0]->getDesNivelInstruccion())) . ",";
//                }
//                else{$json .= '"desNivelInstruccion": "",';}
//
//                if ($Imputado->getCveEspanol() != "") {
//                    $EspanolDto = new EspanolDTO();
//                    $EspanolDao = new EspanolDAO();
//                    $EspanolDto->setCveEspanol($Imputado->getCveEspanol());
//                    $EspanolDto = $EspanolDao->selectEspanol($EspanolDto);
//                    $json .= '"desEspanol":' . json_encode(utf8_encode($EspanolDto[0]->getDesEspanol())) . ",";
//                }
//                else{$json .= '"desEspanol": "",';}
//                
//                if ($Imputado->getCveDialectoIndigena() != "") {
//                    $DialectoIndigenaDto = new DialectoindigenaDTO();
//                    $DialectoIndigenaDao = new DialectoindigenaDAO();
//                    $DialectoIndigenaDto->setCveDialectoIndigena($Imputado->getCveDialectoIndigena());
//                    $DialectoIndigenaDto = $DialectoIndigenaDao->selectDialectoindigena($DialectoIndigenaDto);
//                   if($DialectoIndigenaDto){
//                    $json .= '"desDialecto":' . json_encode(utf8_encode($DialectoIndigenaDto[0]->getDesDialectoIndigena())) . ",";
//                   }else{$json .= '"desDialecto": "",';}
//                }
//                else{$json .= '"desDialecto": "",';}
//                
//                if ($Imputado->getCveTipoFamiliaLinguistica() != "") {
//                    $FamLinDto = new TipofamilialinguisticaDTO();
//                    $FamLinDao = new TipofamilialinguisticaDAO();
//                    $FamLinDto->setCveTipoFamiliaLinguistica($Imputado->getCveTipoFamiliaLinguistica());
//                    $FamLinDto = $FamLinDao->selectTipofamilialinguistica($FamLinDto);
//                    $json .= '"desFamLin":' . json_encode(utf8_encode('-'.$FamLinDto[0]->getDesTipoFamiliaLinguistica())) . ",";
//                }
//                else{$json .= '"desFamLin": "",';}                
//
//                if ($Imputado->getCveInterprete() != "") {
//                    $InterpreteDto = new InterpretesDTO();
//                    $InterpreteDao = new InterpretesDAO();
//                    $InterpreteDto->setCveInterprete($Imputado->getCveInterprete());
//                    $InterpreteDto = $InterpreteDao->selectInterpretes($InterpreteDto);
//                    $json .= '"interprete":' . json_encode(utf8_encode($InterpreteDto[0]->getDesInterprete())) . ",";
//                }
//                else{$json .= '"interprete": "",';}                      
//                
//                if ($Imputado->getCveEstadoPsicofisico() != "") {
//                    $EdoPsicofisicoDto = new EstadospsicofisicosDTO();
//                    $EdoPsicofisicoDao = new EstadospsicofisicosDAO();
//                    $EdoPsicofisicoDto->setCveEstadoPsicofisico($Imputado->getCveEstadoPsicofisico());
//                    $EdoPsicofisicoDto = $EdoPsicofisicoDao->selectEstadospsicofisicos($EdoPsicofisicoDto);
//                    $json .= '"edopsico":' . json_encode(utf8_encode($EdoPsicofisicoDto[0]->getDesEstadoPsicofisico())) . ",";
//                }
//                else{$json .= '"edopsico": "",';}                
// 
//                if ($Imputado->getCveGrupoEdnico() != "") {
//                    $GrupoEtnicoDto = new GruposednicosDTO();
//                    $GrupoEtnicoDao = new GruposednicosDAO();
//                    $GrupoEtnicoDto->setCveGrupoEdnico($Imputado->getCveGrupoEdnico());
//                    $GrupoEtnicoDto = $GrupoEtnicoDao->selectGruposednicos($GrupoEtnicoDto);
//                    $json .= '"grupoetnico":' . json_encode(utf8_encode($GrupoEtnicoDto[0]->getDesGrupoEdnico())). ",";
//                }
//                else{$json .= '"grupoetnico": "",';}  
//                
//                if ($Imputado->getCveTipoDetencion() != "") {
//                    $TiposDetencionesDto = new TiposdetencionesDTO();
//                    $TiposDetencionesDao = new TiposdetencionesDAO();
//                    $TiposDetencionesDto->setCveTipoDetencion($Imputado->getCveTipoDetencion());
//                    $TiposDetencionesDto = $TiposDetencionesDao->selectTiposdetenciones($TiposDetencionesDto);
//                    $json .= '"tipodetencion":' . json_encode(utf8_encode($TiposDetencionesDto[0]->getDesTipoDetencion())). ",";
//                }
//                else{$json .= '"tipodetencion": "",';}  
//                
//                if ($Imputado->getCveTipoReincidencia() != "") {
//                    $ReincidenciasDto = new TiposreincidenciasDTO();
//                    $ReincidenciasDao = new TiposreincidenciasDAO();
//                    $ReincidenciasDto->setCveTipoReincidencia($Imputado->getCveTipoReincidencia());
//                    $ReincidenciasDto = $ReincidenciasDao->selectTiposreincidencias($ReincidenciasDto);
//                    $json .= '"reincidencia":' . json_encode(utf8_encode($ReincidenciasDto[0]->getDesTipoReincidencia())). ",";
//                }
//                else{$json .= '"reincidencia": "",';}  

                    if ($Imputado->getCveCereso() != "") {
                        $CeresoDto = new CeresosDTO();
                        $CeresoDao = new CeresosDAO();
                        $CeresoDto->setCveCereso($Imputado->getCveCereso());
                        $CeresoDto = $CeresoDao->selectCeresos($CeresoDto);
                        $json .= '"cereso":' . json_encode(utf8_encode($CeresoDto[0]->getDesCereso())) . ",";
                    } else {
                        $json .= '"cereso": "",';
                    }

                    if ($Imputado->getCveEtapaProcesal() != "") {
                        $EtapaProcesalDto = new EtapasprocesalesDTO();
                        $EtapaProcesalDao = new EtapasprocesalesDAO();
                        $EtapaProcesalDto->setCveEtapaProcesal($Imputado->getCveEtapaProcesal());
                        $EtapaProcesalDto = $EtapaProcesalDao->selectEtapasprocesales($EtapaProcesalDto);
                        $json .= '"EtapaProcesal":' . json_encode(utf8_encode($EtapaProcesalDto[0]->getDesEtapaProcesal())) . "";
                    } else {
                        $json .= '"EtapaProcesal": ""';
                    }
//
//                /*Datos del Imputado con el delito y el ofendido*/
//                $ImpofedelcarpetasDto = new ImpofedelcarpetasDTO();
//                $ImpofedelcarpetasDao = new ImpofedelcarpetasDAO();
//                $ImpofedelcarpetasDto->setIdImputadoCarpeta($Imputado->getIdImputadoCarpeta());
//                //print_r($ImpofedelcarpetasDto);
//                $ImpofedelcarpetasDto = $ImpofedelcarpetasDao->selectImpofedelcarpetas($ImpofedelcarpetasDto);
//                if($ImpofedelcarpetasDto!="")
//                {
//                $y = 1;
//                $json .= '"OfendidoDetalle": [';    
//                foreach ($ImpofedelcarpetasDto as $Ofendido) { 
//                    $json.="{";
//                    if($Ofendido->getFechaDelito()!=""){
//                        //echo $ImpofedelcarpetasDto[0]->getFechaDelito()."-- Fecha --";
//                        $tmpFecha = explode(' ',$Ofendido->getFechaDelito());
//                        //echo $tmpFecha[0].'Fecha';
//                        $fecha = explode('-',$tmpFecha[0]);
//                        //echo"aqui";
//                        $fechaDelito=$fecha[2]. '/'.$fecha[1].'/'.$fecha[0];
//                        //echo $fechaDelito.'-fecha-';
//                        $json .= '"fechaDelito":' . json_encode($fechaDelito) . ",";
//                    }else{$json .= '"fechaDelito": "",';} 
//                   
//                    $ModalidadesDto = new ModalidadesDTO();
//                    $ModalidadesDao = new ModalidadesDAO();
//                    $ModalidadesDto->setCveModalidad($Ofendido->getCveModalidad());
//                    $ModalidadesDto = $ModalidadesDao->selectModalidades($ModalidadesDto);
//                    //print_r($ModalidadesDto).'-Mod-';
//                    $json .= '"modalidad":' . json_encode(utf8_encode($ModalidadesDto[0]->getDesModalidad())) . ",";
//
//                    $ComisionesDto = new ComisionesDTO();
//                    $ComisionesDao = new ComisionesDAO();
//                    $ComisionesDto->setCveComision($Ofendido->getCveComision());
//                    $ComisionesDto = $ComisionesDao->selectComisiones($ComisionesDto);
//                    $json .= '"comision":' . json_encode(utf8_encode($ComisionesDto[0]->getDesComision())) . ",";
//
//                    $ClasificacionesdelitosDto = new ClasificacionesdelitosordenDTO();
//                    $ClasificacionesdelitosDao = new ClasificacionesdelitosordenDAO();
//                    $ClasificacionesdelitosDto->setCveClasificacionDelitoOrden($Ofendido->getCveClasificacionDelitoOrden());
//                    $ClasificacionesdelitosDto = $ClasificacionesdelitosDao->selectClasificacionesdelitosorden($ClasificacionesdelitosDto);
//                    $json .= '"clasificacion":' . json_encode(utf8_encode($ClasificacionesdelitosDto[0]->getDesClasificacionDelitoOrden())) . ",";
//
//                    $FormasaccionesDto = new FormasaccionesDTO();
//                    $FormasaccionesDao = new FormasaccionesDAO();
//                    $FormasaccionesDto->setCveFormaAccion($Ofendido->getCveFormaAccion());
//                    $FormasaccionesDto = $FormasaccionesDao->selectFormasacciones($FormasaccionesDto);
//                    $json .= '"formaaccion":' . json_encode(utf8_encode($FormasaccionesDto[0]->getDesFormaAccion())) . ",";
//
//                    $DelitosCarpetasDto = new DelitoscarpetasDTO();
//                    $DelitosCarpetasDao = new DelitoscarpetasDAO();
//                    $DelitosCarpetasDto->setIdDelitoCarpeta($Ofendido->getIdDelitoCarpeta());
//                    //$DelitosCarpetasDto->setCveDelito($param["cveDelito"]);
//                    $DelitosCarpetasDto->setActivo('S');
//                    $DelitosCarpetasDto = $DelitosCarpetasDao->selectDelitoscarpetas($DelitosCarpetasDto);
//                    
//                    $DelitosDto = new DelitosDTO();
//                    $DelitosDao = new DelitosDAO();
//                    $DelitosDto->setCveDelito($DelitosCarpetasDto->getCveDelito());
//                    $DelitosDto->setActivo('S');
//                    print_r($DelitosDto);
//                    $DelitosDto = $DelitosDao->selectDelitos($DelitosDto);
//                    $json .= '"delito":' . json_encode(utf8_encode($DelitosDto[0]->getDesDelito())) . ",";
//
//                    $OfendidosDto = new OfendidoscarpetasDTO();
//                    $OfendidosDao = new OfendidoscarpetasDAO();
//                    $OfendidosDto->setIdOfendidoCarpeta($Ofendido->getIdOfendidoCarpeta());
//                    $OfendidosDto = $OfendidosDao->selectOfendidosCarpetas($OfendidosDto);
//                    
//                    $nombreOfendido=$OfendidosDto[0]->getNombre().' '.$OfendidosDto[0]->getPaterno().' '.$OfendidosDto[0]->getMaterno();
//                    $json .= '"nombreOfendido":' . json_encode(utf8_encode($nombreOfendido));
//
//                    if ($y <= count($DelitosCarpetasDto)) {
//                        $json .= '}';
//                        $json .= ",";
//                    }
//                    $y++;
                }
                $json .= "}";
            }
            $json .= ']}';
//                /*Final ImpOfeDelCarpeta*/
//                $json .= "}";
//                $y++;
//                if ($y <= count($ImputadoscarpetasDto)) {
//                    $json .= ",";
//        }
            return $json;
        }
        //$json .= '"total":"' . count($ImputadoscarpetasDto) . '"';
        //$json .= "}]}";//Agregué }]
        //echo"Json:---";
        //echo $json;
        else {
            return "";
        }
    }

    /* -------------------------------------------------------------------------------------------------- */
    
    /*
     * Metodo para copiar los datos personales de un imputado correspondiente a una causa origen
     * hacie un imputado correspondiente a una causa destino indicado por el usuario
     * se copiar�n los datos generales del imputado as� como sus domicilios, telefonos
     * defensores, drogas, tutores y nacionalidades
     */
    public function copiarDatosPersona($imputadoscarpetasDto, $param, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute("BEGIN");
        } else {
            $this->proveedor = $proveedor;
        }
        $fechaActual = "";
        $this->proveedor->execute("SELECT now() AS fechaActual");
        if (!$this->proveedor->error()) {
            if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                    $fechaActual = $row["fechaActual"];
                }
            }
        } else {
            $fechaActual = date("Y-m-d H:i:s");
        }
        $error = false;
        $result = array();
        $totalImputados = 0;
        $msg = array();
        $logger = new Logger("/../../logs/", "ImputadosCarpetas");
        $logger->w_onError("**********COMIENZA EL PROCESO DE COPIA DE DATOS PERSONALES DE UN IMPUTADO ORIGEN HACIA UN IMPUTADO DESTINO**********");
        
        $imputadosCarpetasDao = new ImputadoscarpetasDAO();
        $carpetasJudicialesDao = new CarpetasjudicialesDAO();
        
        $datos = json_decode($param['idImputados']);
        //print_r($datos);
        for ( $x = 0; $x < count($datos); $x++ ) {
            //print_r($datos[$x]->idImputadoOrigen);
            //print_r($datos[$x]->idImputadoDestino);
            
            if ( (int)$datos[$x]->idImputadoDestino == 0 ) {
                $logger->w_onError("**********EL ID DEL IMPUTADO DESTINO ES 0, LO QUE SIGNIFICA QUE SE VA GENERAR UN NUEVO REGISTRO");
                /*
                 * Se trata de un registro nuevo, se copiaran los datos del imputado origen
                 * en la carpeta destino seleccionada por el usuairo
                 */
                $logger->w_onError("**********SE CONSULTAN LOS DATOS DEL IMPUTADO ORIGEN PARA REALIZAR LA COPIA DE DATOS");
                $imputadoCopia = new ImputadoscarpetasDTO();
                $imputadoCopia->setIdImputadoCarpeta($datos[$x]->idImputadoOrigen);
                $imputadoCopia = $imputadosCarpetasDao->selectImputadoscarpetas($imputadoCopia, "", $this->proveedor);
                if ( $imputadoCopia != "" ) {
                    $logger->w_onError("**********SE ENCUENTRAN LOS DATOS DEL IMPUTADO ORIGEN, ID DEL IMPUTADO: " . $imputadoCopia[0]->getIdImputadoCarpeta());
                    //Seleccionar los datos de la carpeta destino
                    $carpetaDestinoDto = new CarpetasjudicialesDTO();
                    $carpetaDestinoDto->setIdCarpetaJudicial($param['idCarpetaJudicialDestino']);
                    
                    $rsCarpetaDestino = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetaDestinoDto, "", $this->proveedor);
                    $logger->w_onError("**********SE CONSULTAN LOS DATOS DE LA CARPETA JUDICIAL DESTINO EN DONDE SE INSERTARA EL REGISTRO DEL IMPUTADO");
                    if ( $rsCarpetaDestino != "" ) {
                        
                            /*
                             * Si se desea copiar datos hacia una carpeta de ejecucion de
                             * sentencias validar que no existan imputados activos
                             */
                        $imputadosAuxDto = new ImputadoscarpetasDTO();
                        $imputadosAuxDto->setIdCarpetaJudicial($rsCarpetaDestino[0]->getIdCarpetaJudicial());
                        $imputadosAuxDto->setActivo('S');
                        $imputadosAuxDto = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosAuxDto, "", $this->proveedor);
                        if ( $imputadosAuxDto != "" ) {
                            $totalImputados = count($imputadosAuxDto);
                        } else {
                            $totalImputados = 0;
                        }
                        if ( (int)$rsCarpetaDestino[0]->getCveTipoCarpeta() == 5 && $totalImputados > 0 ) {
                            $error = true;
                            $msg[] = array("No se puede agregar al imputado seleccionado debido a que ya existe un imputado activo en el expediente destino seleccionado");
                            $logger->w_onError("**********NO SE PUEDE AGREGAR AL IMPUTADO SELECCIONADO DEBIDO A QUE YA EXISTE UN IMPUTADO ACTIVO EN LA CAUSA DE EXPEDIENTE");
                        } else {
                            
                            $logger->w_onError("**********SE ENCUENTRAN LOS DATOS DE LA CARPETA JUDICIAL DESTINO, ID DE LA CARPETA JUDICIAL: " . $rsCarpetaDestino[0]->getIdCarpetaJudicial());
                            $logger->w_onError("**********CONSULTAR SI EL IMPUTADO YA EXISTE EN LA CARPETA DESTINO SELECCIONADA: " . $rsCarpetaDestino[0]->getIdCarpetaJudicial());
                            $logger->w_onError("**********NOMBRE: " . $imputadoCopia[0]->getNombre());
                            $logger->w_onError("**********PATERNO: " . $imputadoCopia[0]->getPaterno());
                            $logger->w_onError("**********MATERNO: " . $imputadoCopia[0]->getMaterno());
                            $logger->w_onError("**********NOMBRE MORAL: " . $imputadoCopia[0]->getNombreMoral());
                            $tmp = new ImputadoscarpetasDTO();
                            if ( (int)$imputadoCopia[0]->getCveTipoPersona() == 1 ) {
                                $tmp->setNombre($imputadoCopia[0]->getNombre());
                                $tmp->setPaterno($imputadoCopia[0]->getPaterno());
                                $tmp->setMaterno($imputadoCopia[0]->getMaterno());
                            } else {
                                $tmp->setNombreMoral($imputadoCopia[0]->getNombreMoral());
                            }

                            $tmp->setActivo('S');
                            $tmp->setIdCarpetaJudicial($param['idCarpetaJudicialDestino']);
                            $tmp = $imputadosCarpetasDao->selectImputadoscarpetas($tmp, "", $this->proveedor);
                            if ( $tmp == "" ) {
                                $logger->w_onError("**********EL IMPUTADO NO EXISTE EN LA CARPETA JUDICIAL SELECCIONADA, SE PROCEDE A INSERTARLO");
                                $imputadoDestinoDto = new ImputadoscarpetasDTO();
                                $imputadoDestinoDto = clone $imputadoCopia[0];
                                $imputadoDestinoDto->setIdImputadoCarpeta("");
                                $imputadoDestinoDto->setIdCarpetaJudicial($rsCarpetaDestino[0]->getIdCarpetaJudicial());
                                $imputadoDestinoDto->setCveEtapaProcesal($rsCarpetaDestino[0]->getCveEtapaProcesal());
                                $imputadoDestinoDto = $imputadosCarpetasDao->insertImputadoscarpetas($imputadoDestinoDto, $this->proveedor);
                                if ( $imputadoDestinoDto == "" ) {
                                    $logger->w_onError("**********OCURRIO UN ERROR AL INSERTAR LOS DATOS DEL IMPUADO DESTINO");
                                    $logger->w_onError("**********ID CARPETA JUDICIAL DESTINO: " . $rsCarpetaDestino[0]->getIdCarpetaJudicial());
                                    $logger->w_onError("**********ETAPA PROCESAL: " . $rsCarpetaDestino[0]->getCveEtapaProcesal());
                                    $logger->w_onError("**********ID IMPUTADO ORIGEN: " . $datos[$x]->idImputadoOrigen);

                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurri� un error al registrar al imputado destino'));
                                } else {
                                    $logger->w_onError("**********SE INSERTA EL REGISTRO DEL IMPUTADO DESTINO, ID DE IMPUTADO: " . $imputadoDestinoDto[0]->getIdImputadoCarpeta());
                                    $logger->w_onError("**********NOMBRE: " . $imputadoDestinoDto[0]->getNombre());
                                    $logger->w_onError("**********PATERNO: " . $imputadoDestinoDto[0]->getPaterno());
                                    $logger->w_onError("**********MATERNO: " . $imputadoDestinoDto[0]->getMaterno());
                                    $logger->w_onError("**********NOMBRE MORAL: " . $imputadoDestinoDto[0]->getNombreMoral());
                                    $logger->w_onError("**********ID CARPETA JUDICIAL DESTNO: " . $rsCarpetaDestino[0]->getIdCarpetaJudicial());
                                    $logger->w_onError("**********ETAPA PROCESAL: " . $rsCarpetaDestino[0]->getCveEtapaProcesal());
                                    $logger->w_onError("**********ID IMPUTADO ORIGEN: " . $datos[$x]->idImputadoOrigen);
                                    $bitacora = new BitacoramovimientosController();
                                    $bitacoraOfendido = $bitacora->agregar(168, 'Insercion tblimputadoscarpetas', 'txt', serialize($imputadoDestinoDto[0]), '', $this->proveedor);

                                    if (!count($bitacoraOfendido)) {
                                        $error = true;
                                        $msg[] = array(utf8_encode('Ocurri� un error al guardar en bitacora la acci�n realizada por el usuario'));
                                    }
                                }

                            } else {
                                $error = true;
                                if ( (int)$imputadoCopia[0]->getCveTipoPersona() == 1 ) {
                                    $mensajeError = "El imputado: " . utf8_encode($imputadoCopia[0]->getNombre()) . " " . utf8_encode($imputadoCopia[0]->getPaterno()) . " " . utf8_encode($imputadoCopia[0]->getMaterno()) . " ya se encuentra registrado en la carpeta judicial destino, favor de verificar";
                                } else {
                                    $mensajeError = "El imputado: " . utf8_encode($imputadoCopia[0]->getNombreMoral()) . " ya se encuentra registrado en la carpeta judicial destino, favor de verificar";
                                }
                                $msg[] = array($mensajeError);
                                $logger->w_onError("**********EL IMPUTADO YA EXISTE EN LA CARPETA DESTINO SELECCIONADA: " . $rsCarpetaDestino[0]->getIdCarpetaJudicial());
                                $logger->w_onError("**********NOMBRE: " . $tmp[0]->getNombre());
                                $logger->w_onError("**********PATERNO: " . $tmp[0]->getPaterno());
                                $logger->w_onError("**********MATERNO: " . $tmp[0]->getMaterno());
                                $logger->w_onError("**********NOMBRE MORAL: " . $tmp[0]->getNombreMoral());
                            }
                        }
                        
                        
                        
                    } else {
                        $error = true;
                        $msg[] = array(utf8_encode('Ocurri� un error al consultar los datos de la carpeta judicial destino'));
                        $logger->w_onError("**********OCURRIO UN ERROR AL CONSULTAR LOS DATOS DE LA CARPETA JUDICIAL DESTINO");
                    }
                } else {
                    $error = true;
                    $msg[] = array(utf8_encode('Ocurri� un error al consultar los datos del imputado origen'));
                    $logger->w_onError("**********OCURRIO UN ERROR AL CONSULTAR LOS DATOS DEL IMPUTADO ORIGEN");
                }
            } else {
                /*
                 * Consultar los datos generales del imputado destino
                 */
                $logger->w_onError("**********CONSULTAR LOS DATOS DEL IMPUTADO DESTINO");
                $imputadoDestinoDto = new ImputadoscarpetasDTO();
                $imputadoDestinoDto->setIdImputadoCarpeta($datos[$x]->idImputadoDestino);
                $imputadoDestinoDto->setIdCarpetaJudicial($param['idCarpetaJudicialDestino']);
                $imputadoDestinoDto->setActivo('S');
                $imputadoDestinoDto = $imputadosCarpetasDao->selectImputadoscarpetas($imputadoDestinoDto, "", $this->proveedor);
                if ( $imputadoDestinoDto == "" ) {
                    $error = true;
                    $msg[] = array('No se encontraron los datos del imputado destino, favor de verificar');
                    $logger->w_onError("**********NO SE ENCONTRARON DATOS DEL IMPUTADO DESTINO");
                } else {
                    $logger->w_onError("**********ID DEL IMPUTADO DESTINO: " . $imputadoDestinoDto[0]->getIdImputadoCarpeta());
                }
            }
            
            /*
             * Consultar los datos generales del imputado origen
             */
            if ( !$error ) {
                $logger->w_onError("**********CONSULTAR DATOS DEL IMPUTADO ORIGEN");
                $imputadoscarpetasDto = new ImputadoscarpetasDTO();
                $imputadoscarpetasDto->setIdImputadoCarpeta($datos[$x]->idImputadoOrigen);
                $imputadoscarpetasDto->setActivo('S');
                $imputadoscarpetasDto = $imputadosCarpetasDao->selectImputadoscarpetas($imputadoscarpetasDto, "", $this->proveedor);
                if ( $imputadoscarpetasDto != "" ) {
                    $error = false;
                    $logger->w_onError("**********ID DEL IMPUTADO ORIGEN: " . $imputadoscarpetasDto[0]->getIdImputadoCarpeta());

                    /*
                     * Copiar datos de domicilios hacia el imputado destino
                     */
                    $logger->w_onError("**********CONSULTAR LOS DATOS DE DOMICILIOS DEL IMPUTADO: " . $imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                    $domiciliosImputadosCarpetasDto = new DomiciliosimputadoscarpetasDTO();
                    $domiciliosImputadosCarpetasDao = new DomiciliosimputadoscarpetasDAO();
                    $domiciliosImputadosCarpetasDto->setIdImputadoCarpeta($imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                    $domiciliosImputadosCarpetasDto->setActivo('S');
                    $domiciliosImputadosCarpetasDto = $domiciliosImputadosCarpetasDao->selectDomiciliosimputadoscarpetas($domiciliosImputadosCarpetasDto, "", $this->proveedor);
                    if ( $domiciliosImputadosCarpetasDto != "" ) {
                        foreach ( $domiciliosImputadosCarpetasDto as $domicilio ) {
                            $domicilioTmp = new DomiciliosimputadoscarpetasDTO();
                            $domicilioTmp = clone $domicilio;
                            $domicilioTmp->setIdDomicilioImputadoCarpeta("");
                            $domicilioTmp->setIdImputadoCarpeta($imputadoDestinoDto[0]->getIdImputadoCarpeta());
                            $domicilioTmp = $domiciliosImputadosCarpetasDao->insertDomiciliosimputadoscarpetas($domicilioTmp, $this->proveedor);
                            if ( $domicilioTmp != "" ) {
                                $error = false;
                                $logger->w_onError("**********SE INSERTA EL DOMICILIO PARA EL IMPUTADO: " . $imputadoDestinoDto[0]->getIdImputadoCarpeta() . ", DOMICILIO INSERTADO: " . $domicilioTmp[0]->getIdDomicilioImputadoCarpeta());
                            } else {
                                $error = true;
                                $msg[] = array(utf8_encode('Ocurri� un error al copiar datos de domicilios del imputado origen'));
                                $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR EL DOMICILIO: " . $domicilio->getIdDomicilioImputadoCarpeta());
                            }
                            if ( $error ) {
                                break;
                            }
                        }
                    } else {
                        $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS ACTIVOS DE DOMICILIOS PARA EL IMPUTADO ORIGEN: " . $imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                    }

                    /*
                     * Copiar datos de telefonos hacia el imputado destino
                     */
                    if ( !$error ) {
                        $logger->w_onError("**********CONSULTAR LOS DATOS DE TELEFONOS DEL IMPUTADO: " . $imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                        $telefonosImputadosCarpetasDto = new TelefonosimputadoscarpetasDTO();
                        $telefonosImputadosCarpetasDao = new TelefonosimputadoscarpetasDAO();
                        $telefonosImputadosCarpetasDto->setIdImputadoCarpeta($imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                        $telefonosImputadosCarpetasDto->setActivo('S');
                        $telefonosImputadosCarpetasDto = $telefonosImputadosCarpetasDao->selectTelefonosimputadoscarpetas($telefonosImputadosCarpetasDto, "", $this->proveedor);
                        if ( $telefonosImputadosCarpetasDto != "" ) {
                            foreach ( $telefonosImputadosCarpetasDto as $telefono ) {
                                $telefonosTmp = new TelefonosimputadoscarpetasDTO();
                                $telefonosTmp = clone $telefono;
                                $telefonosTmp->setIdTelefonoImputadosCarpeta("");
                                $telefonosTmp->setIdImputadoCarpeta($imputadoDestinoDto[0]->getIdImputadoCarpeta());
                                $telefonosTmp = $telefonosImputadosCarpetasDao->insertTelefonosimputadoscarpetas($telefonosTmp, $this->proveedor);
                                if ( $telefonosTmp != "" ) {
                                    $error = false;
                                    $logger->w_onError("**********SE INSERTA EL TELEFONO PARA EL IMPUTADO: " . $imputadoDestinoDto[0]->getIdImputadoCarpeta() . ", TELEFONO INSERTADO: " . $telefonosTmp[0]->getIdTelefonoImputadosCarpeta());
                                } else {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurri� un error al insertar datos de tel�fonos'));
                                    $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR EL TELEFONO: " . $telefono->getIdTelefonoImputadosCarpeta());
                                }
                                if ( $error ) {
                                    break;
                                }
                            }
                        } else {
                            $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS ACTIVOS DE TELEFONOS PARA EL IMPUTADO ORIGEN: " . $imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                        }
                    }

                    /*
                     * Copiar los datos de defensores
                     */
                    if ( !$error ) {
                        $logger->w_onError("**********CONSULTAR LOS DATOS DE DEFENSORES DEL IMPUTADO: " . $imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                        $defensoresImputadosCarpetasDto = new DefensoresimputadoscarpetasDTO();
                        $defensoresImputadosCarpetasDao = new DefensoresimputadoscarpetasDAO();
                        $defensoresImputadosCarpetasDto->setIdImputadoCarpeta($imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                        $defensoresImputadosCarpetasDto->setActivo('S');
                        $defensoresImputadosCarpetasDto = $defensoresImputadosCarpetasDao->selectDefensoresimputadoscarpetas($defensoresImputadosCarpetasDto, "", $this->proveedor);
                        if ( $defensoresImputadosCarpetasDto != "" ) {
                            foreach ( $defensoresImputadosCarpetasDto as $defensor ) {
                                $defensorTmp = new DefensoresimputadoscarpetasDTO();
                                $defensorTmp = clone $defensor;
                                $defensorTmp->setIdDefensorImputadoCarpeta("");
                                $defensorTmp->setIdImputadoCarpeta($imputadoDestinoDto[0]->getIdImputadoCarpeta());
                                $defensorTmp = $defensoresImputadosCarpetasDao->insertDefensoresimputadoscarpetas($defensorTmp, $this->proveedor);
                                if ( $defensorTmp != "" ) {
                                    $error = false;
                                    $logger->w_onError("**********SE INSERTA EL DEFENSOR PARA EL IMPUTADO: " . $imputadoDestinoDto[0]->getIdImputadoCarpeta() . ", DEFENSOR INSERTADO: " . $defensorTmp[0]->getIdDefensorImputadoCarpeta());
                                } else {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurri� un error al guardar datos del defensor'));
                                    $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR EL DEFENSOR: " . $defensor->getIdDefensorImputadoCarpeta());
                                }
                                if ( $error ) {
                                    break;
                                }
                            }
                        } else {
                            $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS ACTIVOS DE DEFENSORES PARA EL IMPUTADO ORIGEN: " . $imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                        }
                    }

                    /*
                     * Copiar datos de drogas al imputado destino
                     */
                    if ( !$error ) {
                        $imputadosDrogasCarpetasDto = new ImputadosdrogascarpetasDTO();
                        $imputadosDrogasCarpetasDao = new ImputadosdrogascarpetasDAO();
                        $imputadosDrogasCarpetasDto->setIdImputadoCarpeta($imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                        $imputadosDrogasCarpetasDto->setActivo('S');
                        $imputadosDrogasCarpetasDto = $imputadosDrogasCarpetasDao->selectImputadosdrogascarpetas($imputadosDrogasCarpetasDto, "", $this->proveedor);
                        if ( $imputadosDrogasCarpetasDto != "" ) {
                            foreach ( $imputadosDrogasCarpetasDto as $droga ) {
                                $imputadosDrogasTmp = new ImputadosdrogascarpetasDTO();
                                $imputadosDrogasTmp = clone $droga;
                                $imputadosDrogasTmp->setIdImputadoDrogaCarpeta("");
                                $imputadosDrogasTmp->setIdImputadoCarpeta($imputadoDestinoDto[0]->getIdImputadoCarpeta());
                                $imputadosDrogasTmp = $imputadosDrogasCarpetasDao->insertImputadosdrogascarpetas($imputadosDrogasTmp, $this->proveedor);
                                if ( $imputadosDrogasTmp != "" ) {
                                    $error = false;
                                    $logger->w_onError("**********SE INSERTA LA DROGA PARA EL IMPUTADO: " . $imputadoDestinoDto[0]->getIdImputadoCarpeta() . ", ID IMPUTADO DROGA CARPETA: " . $imputadosDrogasTmp[0]->getIdImputadoDrogaCarpeta());
                                } else {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurri� un error al guardar datos de drogas'));
                                    $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR DROGAS: " . $droga->getIdImputadoDrogaCarpeta());
                                }
                                if ( $error ) {
                                    break;
                                }
                            }
                        } else {
                            $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS ACTIVOS DE DROGAS PARA EL IMPUTADO ORIGEN: " . $imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                        }
                    }

                    /*
                     * Copiar datos de tutores hacia el imputado destino
                     */
                    if ( !$error ) {
                        $tutoresImputadosCarpetasDto = new TutoresimputadoscarpetasDTO();
                        $tutoresImputadosCarpetasDao = new TutoresimputadoscarpetasDAO();
                        $tutoresImputadosCarpetasDto->setIdImputadoCarpeta($imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                        $tutoresImputadosCarpetasDto->setActivo('S');
                        $tutoresImputadosCarpetasDto = $tutoresImputadosCarpetasDao->selectTutoresimputadoscarpetas($tutoresImputadosCarpetasDto, "", $this->proveedor);
                        if ( $tutoresImputadosCarpetasDto != "" ) {
                            foreach ( $tutoresImputadosCarpetasDto as $tutor ) {
                                $tutorTmp = new TutoresimputadoscarpetasDTO();
                                $tutorTmp = clone $tutor;
                                $tutorTmp->setIdTutorImputadoCarpeta("");
                                $tutorTmp->setIdImputadoCarpeta($imputadoDestinoDto[0]->getIdImputadoCarpeta());
                                $tutorTmp = $tutoresImputadosCarpetasDao->insertTutoresimputadoscarpetas($tutorTmp, $this->proveedor);
                                if ( $tutorTmp != "" ) {
                                    $error = false;
                                    $logger->w_onError("**********SE INSERTA EL TUTOR PARA EL IMPUTADO: " . $imputadoDestinoDto[0]->getIdImputadoCarpeta() . ", ID TUTOR: " . $tutorTmp[0]->getIdTutorImputadoCarpeta());
                                } else {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurri� un error al guardar datos de tutores'));
                                    $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR TUTORES: " . $tutor->getIdTutorImputadoCarpeta());
                                }
                                if ( $error ) {
                                    break;
                                }
                            }
                        } else {
                            $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS ACTIVOS DE TUTORES PARA EL IMPUTADO ORIGEN: " . $imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                        }
                    }

                    /*
                     * Copiar datos de nacionalidades
                     */
                    if ( !$error ) {
                        $nacionalidadesImputadosCarpetasDto = new NacionalidadesimputadoscarpetasDTO();
                        $nacionalidadesImputadosCarpetasDao = new NacionalidadesimputadoscarpetasDAO();
                        $nacionalidadesImputadosCarpetasDto->setIdImputadoCarpeta($imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                        $nacionalidadesImputadosCarpetasDto->setActivo('S');
                        $nacionalidadesImputadosCarpetasDto = $nacionalidadesImputadosCarpetasDao->selectNacionalidadesimputadoscarpetas($nacionalidadesImputadosCarpetasDto, "", $this->proveedor);
                        if ( $nacionalidadesImputadosCarpetasDto != "" ) {
                            foreach ( $nacionalidadesImputadosCarpetasDto as $nacionalidad ) {
                                $nacionalidadTmp = new NacionalidadesimputadoscarpetasDTO();
                                $nacionalidadTmp->setCvePais($nacionalidad->getCvePais());
                                $nacionalidadTmp->setActivo('S');
                                $nacionalidadTmp->setIdImputadoCarpeta($imputadoDestinoDto[0]->getIdImputadoCarpeta());
                                $nacionalidadTmp = $nacionalidadesImputadosCarpetasDao->insertNacionalidadesimputadoscarpetas($nacionalidadTmp, $this->proveedor);
                                if ( $nacionalidadTmp != "" ) {
                                    $error = false;
                                    $logger->w_onError("**********SE INSERTA LA NACIONALIDAD PARA EL IMPUTADO: " . $imputadoDestinoDto[0]->getIdImputadoCarpeta() . ", ID NACIONALIDAD: " . $nacionalidadTmp[0]->getIdNacionalidadImputadoCarpeta());
                                } else {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurri� un error al guardar datos de la nacionalidad'));
                                    $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR DATOS DE NACIONALIDAD: " . $nacionalidad->getIdNacionalidadImputadoCarpeta());
                                }
                                if ( $error ) {
                                    break;
                                }
                            }
                        } else {
                            $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS ACTIVOS DE NACIONALIDADES PARA EL IMPUTADO ORIGEN: " . $imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                        }
                    }
                    
                    if ( (int)$datos[$x]->idImputadoDestino > 0 ) {
                        if ( !$error ) {
                            /*
                             * Actualizar los datos del imputado destino, para ello se utilizan
                             * los datos generales del imputado origen
                             */
                            $imputadoTmp = new ImputadoscarpetasDTO();
                            $imputadoTmp = clone $imputadoscarpetasDto[0];
                            $imputadoTmp->setIdImputadoCarpeta($imputadoDestinoDto[0]->getIdImputadoCarpeta());
                            $imputadoTmp->setIdCarpetaJudicial($imputadoDestinoDto[0]->getIdCarpetaJudicial());
                            $imputadoTmp->setCveEtapaProcesal($imputadoDestinoDto[0]->getCveEtapaProcesal());
                            $imputadoTmp->setFechaActualizacion($fechaActual);
                            $imputadoTmp = $imputadosCarpetasDao->modificarImputadoscarpetas($imputadoTmp, $this->proveedor);
                            if ( $imputadoTmp != "" ) {
                                $error = false;
                                $logger->w_onError("**********SE MODIFICAN LOS DATOS GENERALES DEL IMPUTADO CON ID: " . $imputadoDestinoDto[0]->getIdImputadoCarpeta());
                                $bitacora = new BitacoramovimientosController();
                                $bitacoraOfendido = $bitacora->agregar(169, 'Modificacion tblimputadoscarpetas', 'txt', serialize($imputadoTmp[0]), serialize($imputadoDestinoDto[0]), $this->proveedor);

                                if (!count($bitacoraOfendido)) {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurri� un error al guardar la acci�n realizada en bit�cora'));
                                }
                            } else {
                                $error = true;
                                $msg[] = array(utf8_encode('Ocurri� un error al actualizar los datos generales del imputado destino'));
                                $logger->w_onError("**********OCURRIO UN ERROR AL MODIFICAR LOS DATOS GENERALES DEL IMPUTADO: " . $imputadoDestinoDto[0]->getIdImputadoCarpeta());
                            }
                        }
                    }
                    
                } else {
                    $error = true;
                    $msg[] = array('No se encontraron datos del imputado origen, favor de verificar');
                    $logger->w_onError("**********NO SE ENCONTRARON DATOS DEL IMPUTADO ORIGEN");
                }
                
            }
            if ( $error ) {
                break;
            }
        }
        
        if ( !$error ) {
            $logger->w_onError("**********SE PROCEDE A ACTUALIZAR EL NUMERO DE IMPUTADOS, OFENDIDOS, DELITOS Y PONDERACION DE LA CARPETA JUDICIAL CON ID: " . $param['idCarpetaJudicialDestino']);
            $imputados = new ImputadoscarpetasDTO();
            $imputadosDao = new ImputadoscarpetasDAO();
            $imputados->setIdCarpetaJudicial($param['idCarpetaJudicialDestino']);
            $imputados->setActivo("S");
            $imputados = $imputadosDao->selectImputadoscarpetas($imputados, "", $this->proveedor);
            if ($imputados != "") {
                $numImputados = count($imputados);
            } else {
                $numImputados = 0;
            }
            $logger->w_onError("**********NUMERO DE IMPUTADOS: " . $numImputados);
            $ofendidos = new OfendidoscarpetasDTO();
            $ofendidosDao = new OfendidoscarpetasDAO();
            $ofendidos->setIdCarpetaJudicial($param['idCarpetaJudicialDestino']);
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
            $delitos->setIdCarpetaJudicial($param['idCarpetaJudicialDestino']);
            $delitos->setActivo("S");
            $delitos = $delitosDao->selectDelitoscarpetas($delitos, "", $this->proveedor);
            if ($delitos != "") {
                $numDelitos = count($delitos);
            } else {
                $numDelitos = 0;
            }
            $pesoDelito = 0;
            $logger->w_onError("**********NUMERO DE DELITOS: " . $numDelitos);
            /*
             * Obtener el peso de los delitos correspondientes a la carpeta judicial
             */
            $impofedel = new ImpofedelcarpetasDTO();
            $impofedelCarpetaDao = new ImpofedelcarpetasDAO();
            $delitosCarpetasDao = new DelitoscarpetasDAO();
            $delitoDao = new DelitosDAO();
            $impofedel->setIdCarpetaJudicial($param['idCarpetaJudicialDestino']);
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
            $carpetasTmp->setIdCarpetaJudicial($param['idCarpetaJudicialDestino']);
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
                $bitacora = new BitacoramovimientosController();
                $bitacoraCarpeta = $bitacora->agregar(357, 'Modificacion tblicarpetasjudiciales', 'txt', serialize($carpetasTmp[0]), '', $this->proveedor);

                if (!count($bitacoraCarpeta)) {
                    $error = true;
                    $msg[] = array(utf8_encode("Error al guardar la acci�n del usuario en bitacora"));
                }
            } else {
                $error = true;
                $msg[] = array("Ocurrio un error al modificar el numero de imputados, ofendidos y delitos de la carpeta judicial destino");
                $logger->w_onError("**********OCURRIO UN ERROR AL ACTUALIZAR EL NUMERO DE IMPUTADOS, OFENDIDOS Y DELITOS DE LA CARPETA JUDICIAL: " . $param['idCarpetaJudicialDestino']);
            }
        }
        
        //$imputadoscarpetasDto = $this->validarImputadoscarpetas($imputadoscarpetasDto);
        
        
        if ( !$error ) {
            if ( $proveedor == null ) {
                $this->proveedor->execute('COMMIT');
            }
            $result = array(
                'estatus' => 'ok',
                'msj'     => 'Datos guardados correctamente'
            );
            $logger->w_onError("**********EL PROCESO TERMINA CORRECTAMENTE");
        } else {
            if ( $proveedor == null ) {
                $this->proveedor->execute('ROLLBACK');
            }
            $result = array(
                'estatus' => 'error',
                'msj'     => $msg
            );
            $logger->w_onError("**********OCURRIO ALGUN ERROR DURANTE EL PROCESO, TERMINAR LA EJECUCION Y APLICAR ROLLBACK");
        }
        
        return json_encode($result);
    }
    
    public function copiarDatosSolicitud($imputadoscarpetasDto, $param, $proveedor = null){
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute("BEGIN");
        } else {
            $this->proveedor = $proveedor;
        }
        $fechaActual = "";
        $this->proveedor->execute("SELECT now() AS fechaActual");
        if (!$this->proveedor->error()) {
            if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                    $fechaActual = $row["fechaActual"];
                }
            }
        } else {
            $fechaActual = date("Y-m-d H:i:s");
        }
        $error = false;
        $result = array();
        
        $msg = array();
        $logger = new Logger("/../../logs/", "ImputadosCarpetas");
        $logger->w_onError("**********COMIENZA EL PROCESO DE COPIA DE DATOS PERSONALES DE UN IMPUTADO ORIGEN HACIA UN IMPUTADO DE SOLICITUD DE AUDIENCIA**********");
        
        $imputadosCarpetasDao = new ImputadoscarpetasDAO();
        $carpetasJudicialesDao = new CarpetasjudicialesDAO();
        $imputadosSolicitudesDao = new ImputadossolicitudesDAO();
        $domiciliosImputadoSolicitudesDao = new DomiciliosimputadossolicitudesDAO();
        $telefonosImputadosSolicitudesDao = new TelefonosimputadossolicitudesDAO();
        $defensoresImputadosSolicitudesDao = new DefensoresimputadossolicitudesDAO();
        $drograsImputadosSolicitudesDao = new ImputadosdrogasDAO();
        $tutoresImputadosSolicitudesDao = new TutoresimputadosDAO();
        $nacionalidadesImputadosSolicitudesDao = new NacionalidadesimputadossolicitudesDAO();
        
        $datos = json_decode($param['idImputados']);
        //print_r($datos);
        for ( $x = 0; $x < count($datos); $x++ ) {
            //print_r($datos[$x]->idImputadoOrigen);
            //print_r($datos[$x]->idImputadoDestino);
            
            if ( (int)$datos[$x]->idImputadoDestino == 0 ) {
                $logger->w_onError("**********EL ID DEL IMPUTADO DESTINO ES 0, LO QUE SIGNIFICA QUE SE VA GENERAR UN NUEVO REGISTRO EN SOLICITUD DE AUDIENCIA");
                /*
                 * Se trata de un registro nuevo, se copiaran los datos del imputado origen
                 * en la solicitud de audiencia seleccionada por el usuario
                 */
                $logger->w_onError("**********SE CONSULTAN LOS DATOS DEL IMPUTADO ORIGEN PARA REALIZAR LA COPIA DE DATOS");
                $imputadoCopia = new ImputadoscarpetasDTO();
                $imputadoCopia->setIdImputadoCarpeta($datos[$x]->idImputadoOrigen);
                $imputadoCopia = $imputadosCarpetasDao->selectImputadoscarpetas($imputadoCopia, "", $this->proveedor);
                if ( $imputadoCopia != "" ) {
                    $logger->w_onError("**********SE ENCUENTRAN LOS DATOS DEL IMPUTADO ORIGEN, ID DEL IMPUTADO: " . $imputadoCopia[0]->getIdImputadoCarpeta());
                    //Seleccionar los datos de la solicitud de audiencia
                    $solicitudAudienciaDto = new SolicitudesaudienciasDTO();
                    $solicitudAudienciaDao = new SolicitudesaudienciasDAO();
                    $solicitudAudienciaDto->setIdSolicitudAudiencia($param['idSolicitudAudiencia']);
                    
                    $rsSolicitudAudiencia = $solicitudAudienciaDao->selectSolicitudesaudiencias($solicitudAudienciaDto, "", "", $this->proveedor);
                    $logger->w_onError("**********SE CONSULTAN LOS DATOS DE LA SOLICITUD DE AUDIENCIA DESTINO EN DONDE SE INSERTARA EL REGISTRO DEL IMPUTADO");
                    if ( $rsSolicitudAudiencia != "" ) {
                        
                        $logger->w_onError("**********SE ENCUENTRAN LOS DATOS DE LA SOLICITUD DE AUDIENCIA, ID DE LA SOLICITUD DE AUDIENCIA: " . $rsSolicitudAudiencia[0]->getIdSolicitudAudiencia());
                        $logger->w_onError("**********CONSULTAR SI EL IMPUTADO YA EXISTE EN LA CARPETA DESTINO SELECCIONADA: " . $rsSolicitudAudiencia[0]->getIdSolicitudAudiencia());
                        $logger->w_onError("**********NOMBRE: " . $imputadoCopia[0]->getNombre());
                        $logger->w_onError("**********PATERNO: " . $imputadoCopia[0]->getPaterno());
                        $logger->w_onError("**********MATERNO: " . $imputadoCopia[0]->getMaterno());
                        $logger->w_onError("**********NOMBRE MORAL: " . $imputadoCopia[0]->getNombreMoral());
                            
                        $tmp = new ImputadossolicitudesDTO();

                        if ( (int)$imputadoCopia[0]->getCveTipoPersona() == 1 ) {
                            $tmp->setNombre($imputadoCopia[0]->getNombre());
                            $tmp->setPaterno($imputadoCopia[0]->getPaterno());
                            $tmp->setMaterno($imputadoCopia[0]->getMaterno());
                        } else {
                            $tmp->setNombreMoral($imputadoCopia[0]->getNombreMoral());
                        }

                        $tmp->setActivo('S');
                        $tmp->setIdSolicitudAudiencia($param['idSolicitudAudiencia']);
                        $tmp = $imputadosSolicitudesDao->selectImputadossolicitudes($tmp, "", $this->proveedor);
                        if ( $tmp == "" ) {
                            $logger->w_onError("**********EL IMPUTADO NO EXISTE EN LA SOLICITUD DE AUDIENCIA SELECCIONADA, SE PROCEDE A INSERTARLO");
                            $imputadoDestinoDto = new ImputadossolicitudesDTO();

                            $imputadoDestinoDto->setIdImputadoCarpeta("");
                            $imputadoDestinoDto->setIdSolicitudAudiencia($rsSolicitudAudiencia[0]->getIdSolicitudAudiencia());
                            $imputadoDestinoDto->setActivo('S');
                            $imputadoDestinoDto->setDetenido($imputadoCopia[0]->getDetenido());
                            $imputadoDestinoDto->setNombre($imputadoCopia[0]->getNombre());
                            $imputadoDestinoDto->setPaterno($imputadoCopia[0]->getPaterno());
                            $imputadoDestinoDto->setMaterno($imputadoCopia[0]->getMaterno());
                            $imputadoDestinoDto->setRfc($imputadoCopia[0]->getRfc());
                            $imputadoDestinoDto->setCurp($imputadoCopia[0]->getCurp());
                            $imputadoDestinoDto->setCveTipoDetencion($imputadoCopia[0]->getCveTipoDetencion());
                            $imputadoDestinoDto->setCveGenero($imputadoCopia[0]->getCveGenero());
                            $imputadoDestinoDto->setAlias($imputadoCopia[0]->getAlias());
                            $imputadoDestinoDto->setFechaDeclaracion($imputadoCopia[0]->getFechaDeclaracion());
                            $imputadoDestinoDto->setCvePaisNacimiento($imputadoCopia[0]->getCvePaisNacimiento());
                            $imputadoDestinoDto->setCveEstadoNacimiento($imputadoCopia[0]->getCveEstadoNacimiento());
                            $imputadoDestinoDto->setCveMunicipioNacimiento($imputadoCopia[0]->getCveMunicipioNacimiento());
                            $imputadoDestinoDto->setFechaNacimiento($imputadoCopia[0]->getFechaNacimiento());
                            $imputadoDestinoDto->setEdad($imputadoCopia[0]->getEdad());
                            $imputadoDestinoDto->setCveTipoPersona($imputadoCopia[0]->getCveTipoPersona());
                            $imputadoDestinoDto->setCveTipoReligion($imputadoCopia[0]->getCveTipoReligion());
                            $imputadoDestinoDto->setNombreMoral($imputadoCopia[0]->getNombreMoral());
                            $imputadoDestinoDto->setCveNivelInstruccion($imputadoCopia[0]->getCveNivelInstruccion());
                            $imputadoDestinoDto->setCveEstadoCivil($imputadoCopia[0]->getCveEstadoCivil());
                            $imputadoDestinoDto->setCveEspanol($imputadoCopia[0]->getCveEspanol());
                            $imputadoDestinoDto->setCveAlfabetismo($imputadoCopia[0]->getCveAlfabetismo());
                            $imputadoDestinoDto->setCveDialectoIndigena($imputadoCopia[0]->getCveDialectoIndigena());
                            $imputadoDestinoDto->setCveTipoFamiliaLinguistica($imputadoCopia[0]->getCveTipoFamiliaLinguistica());
                            $imputadoDestinoDto->setCveOcupacion($imputadoCopia[0]->getCveOcupacion());
                            $imputadoDestinoDto->setCveInterprete($imputadoCopia[0]->getCveInterprete());
                            $imputadoDestinoDto->setCveEstadoPsicofisico($imputadoCopia[0]->getCveEstadoPsicofisico());
                            $imputadoDestinoDto->setFechaImputacion($imputadoCopia[0]->getFechaImputacion());
                            $imputadoDestinoDto->setFechaControlDet($imputadoCopia[0]->getFechaControlDet());
                            $imputadoDestinoDto->setFecTerminoCons($imputadoCopia[0]->getFecTerminoCons());
                            $imputadoDestinoDto->setFecCierreInv($imputadoCopia[0]->getFecCierreInv());
                            $imputadoDestinoDto->setEstadoNacimiento($imputadoCopia[0]->getEstadoNacimiento());
                            $imputadoDestinoDto->setMunicipioNacimiento($imputadoCopia[0]->getMunicipioNacimiento());
                            $imputadoDestinoDto->setRelacionMoral($imputadoCopia[0]->getRelacionMoral());
                            $imputadoDestinoDto->setPersonaMoral($imputadoCopia[0]->getPersonaMoral());
                            $imputadoDestinoDto->setCveCereso($imputadoCopia[0]->getCveCereso());
                            $imputadoDestinoDto->setCveEtapaProcesal($rsSolicitudAudiencia[0]->getCveEtapaProcesal());
                            $imputadoDestinoDto->setCveTipoReincidencia($imputadoCopia[0]->getCveTipoReincidencia());
                            $imputadoDestinoDto->setIngresoMensual($imputadoCopia[0]->getIngresoMensual());
                            $imputadoDestinoDto->setCveGrupoEdnico($imputadoCopia[0]->getCveGrupoEdnico());
                            $imputadoDestinoDto->setTieneSobreseimiento($imputadoCopia[0]->getTieneSobreseimiento());
                            $imputadoDestinoDto->setFechaSobreseimiento($imputadoCopia[0]->getFechaSobreseimiento());
                            $imputadoDestinoDto->setIdImputadoCarpeta($imputadoCopia[0]->getIdImputadoCarpeta());

                            $imputadoDestinoDto = $imputadosSolicitudesDao->insertImputadossolicitudes($imputadoDestinoDto, $this->proveedor);
                            if ( $imputadoDestinoDto == "" ) {
                                $logger->w_onError("**********OCURRIO UN ERROR AL INSERTAR LOS DATOS DEL IMPUADO DESTINO");
                                $logger->w_onError("**********ID SOLICITUD AUDIENCIA DESTINO: " . $rsSolicitudAudiencia[0]->getIdSolicitudAudiencia());
                                $logger->w_onError("**********ETAPA PROCESAL: " . $rsSolicitudAudiencia[0]->getCveEtapaProcesal());
                                $logger->w_onError("**********ID IMPUTADO ORIGEN: " . $datos[$x]->idImputadoOrigen);

                                $error = true;
                                $msg[] = array(utf8_encode('Ocurri� un error al registrar al imputado destino'));
                            } else {
                                $logger->w_onError("**********SE INSERTA EL REGISTRO DEL IMPUTADO DESTINO, ID DE IMPUTADO: " . $imputadoDestinoDto[0]->getIdImputadoSolicitud());
                                $logger->w_onError("**********NOMBRE: " . $imputadoDestinoDto[0]->getNombre());
                                $logger->w_onError("**********PATERNO: " . $imputadoDestinoDto[0]->getPaterno());
                                $logger->w_onError("**********MATERNO: " . $imputadoDestinoDto[0]->getMaterno());
                                $logger->w_onError("**********NOMBRE MORAL: " . $imputadoDestinoDto[0]->getNombreMoral());
                                $logger->w_onError("**********ID SOLICITUD AUDIENCIA: " . $rsSolicitudAudiencia[0]->getIdSolicitudAudiencia());
                                $logger->w_onError("**********ETAPA PROCESAL: " . $rsSolicitudAudiencia[0]->getCveEtapaProcesal());
                                $logger->w_onError("**********ID IMPUTADO ORIGEN: " . $datos[$x]->idImputadoOrigen);
                                $bitacora = new BitacoramovimientosController();
                                $bitacoraOfendido = $bitacora->agregar(130, 'Insercion tblimputadossolicitudes', 'txt', serialize($imputadoDestinoDto[0]), '', $this->proveedor);

                                if (!count($bitacoraOfendido)) {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurri� un error al guardar en bitacora la acci�n realizada por el usuario'));
                                }
                            }

                        } else {
                            $error = true;
                            if ( (int)$imputadoCopia[0]->getCveTipoPersona() == 1 ) {
                                $mensajeError = "El imputado: " . utf8_encode($imputadoCopia[0]->getNombre()) . " " . utf8_encode($imputadoCopia[0]->getPaterno()) . " " . utf8_encode($imputadoCopia[0]->getMaterno()) . " ya se encuentra registrado en la solicitud de audiencia destino, favor de verificar";
                            } else {
                                $mensajeError = "El imputado: " . utf8_encode($imputadoCopia[0]->getNombreMoral()) . " ya se encuentra registrado en la solicitud de audiencia destino, favor de verificar";
                            }
                            $msg[] = array($mensajeError);
                            $logger->w_onError("**********EL IMPUTADO YA EXISTE EN LA SOLICITUD DE AUDIENCIA DESTINO SELECCIONADA: " . $rsSolicitudAudiencia[0]->getIdSolicitudAudiencia());
                            $logger->w_onError("**********NOMBRE: " . $tmp[0]->getNombre());
                            $logger->w_onError("**********PATERNO: " . $tmp[0]->getPaterno());
                            $logger->w_onError("**********MATERNO: " . $tmp[0]->getMaterno());
                            $logger->w_onError("**********NOMBRE MORAL: " . $tmp[0]->getNombreMoral());
                        }
                            
                    } else {
                        $error = true;
                        $msg[] = array(utf8_encode('Ocurri� un error al consultar los datos de la solicitud de audiencia destino'));
                        $logger->w_onError("**********OCURRIO UN ERROR AL CONSULTAR LOS DATOS DE LA SOLICITUD DE AUDIENCIA DESTINO");
                    }
                } else {
                    $error = true;
                    $msg[] = array(utf8_encode('Ocurri� un error al consultar los datos del imputado origen'));
                    $logger->w_onError("**********OCURRIO UN ERROR AL CONSULTAR LOS DATOS DEL IMPUTADO ORIGEN");
                }
            } else {
                /*
                 * Consultar los datos generales del imputado destino
                 */
                $logger->w_onError("**********CONSULTAR LOS DATOS DEL IMPUTADO DESTINO");
                $imputadoDestinoDto = new ImputadossolicitudesDTO();
                $imputadoDestinoDao = new ImputadossolicitudesDAO();
                $imputadoDestinoDto->setIdImputadoSolicitud($datos[$x]->idImputadoDestino);
                $imputadoDestinoDto->setIdSolicitudAudiencia($param['idSolicitudAudiencia']);
                $imputadoDestinoDto->setActivo('S');
                $imputadoDestinoDto = $imputadoDestinoDao->selectImputadossolicitudes($imputadoDestinoDto, "", $this->proveedor);
                if ( $imputadoDestinoDto == "" ) {
                    $error = true;
                    $msg[] = array('No se encontraron los datos del imputado destino, favor de verificar');
                    $logger->w_onError("**********NO SE ENCONTRARON DATOS DEL IMPUTADO DESTINO");
                } else {
                    $logger->w_onError("**********ID DEL IMPUTADO DESTINO: " . $imputadoDestinoDto[0]->getIdImputadoSolicitud());
                }
            }
            
            /*
             * Verificar que la solicitud y carpeta tengan la misma etapa procesal
             * para realizar la copia, en caso de tener etapas diferentes, notificar al usuario
             */
            $imputadoCarpetaDto = new ImputadoscarpetasDTO();
            $imputadoCarpetaDao = new ImputadoscarpetasDAO();
            
            $imputadoCarpetaDto->setIdImputadoCarpeta($datos[$x]->idImputadoOrigen);
            $imputadoCarpetaDto = $imputadoCarpetaDao->selectImputadoscarpetas($imputadoCarpetaDto, "", $this->proveedor);
            $imputadosSolicitudDto = new ImputadossolicitudesDTO();
            $imputadosSolicitudDao = new ImputadossolicitudesDAO();
            
            $imputadosSolicitudDto->setIdImputadoSolicitud($datos[$x]->idImputadoDestino);
            $imputadosSolicitudDto = $imputadosSolicitudDao->selectImputadossolicitudes($imputadosSolicitudDto, "", $this->proveedor);
            if ( (int)$imputadoCarpetaDto[0]->getCveEtapaProcesal() == (int)$imputadosSolicitudDto[0]->getCveEtapaProcesal() ) {
                $error = false;
                $logger->w_onError("**********EL IMPUTADO ORIGEN TIENE ETAPA PROCESAL: " . $imputadoCarpetaDto[0]->getCveEtapaProcesal() . " Y EL IMPUTADO DESTINO TIENE ETAPA PROCESAL: " . $imputadosSolicitudDto[0]->getCveEtapaProcesal());
            } else {
                $error = true;
                $msg[] = array(utf8_encode('Los imputados u ofendidos de origen deben tener la misma etapa procesal que los imputados u ofendidos destino para poder realizar la copia de datos, favor de verificar'));
                $logger->w_onError("**********EL IMPUTADO ORIGEN TIENE ETAPA PROCESAL: " . $imputadoCarpetaDto[0]->getCveEtapaProcesal() . " MIENTRAS QUE EL IMPUTADO DESTINO TIENE ETAPA: " . $imputadosSolicitudDto[0]->getCveEtapaProcesal());
                $logger->w_onError("**********NO SE PUEDE REALIZAR LA COPIA DE DATOS");
            }
            
            /*
             * Consultar los datos generales del imputado origen
             */
            if ( !$error ) {
                $logger->w_onError("**********CONSULTAR DATOS DEL IMPUTADO ORIGEN");
                $imputadoscarpetasDto = new ImputadoscarpetasDTO();
                $imputadoscarpetasDto->setIdImputadoCarpeta($datos[$x]->idImputadoOrigen);
                $imputadoscarpetasDto->setActivo('S');
                $imputadoscarpetasDto = $imputadosCarpetasDao->selectImputadoscarpetas($imputadoscarpetasDto, "", $this->proveedor);
                if ( $imputadoscarpetasDto != "" ) {
                    $error = false;
                    $logger->w_onError("**********ID DEL IMPUTADO ORIGEN: " . $imputadoscarpetasDto[0]->getIdImputadoCarpeta());

                    /*
                     * Copiar datos de domicilios hacia el imputado destino
                     */
                    $logger->w_onError("**********CONSULTAR LOS DATOS DE DOMICILIOS DEL IMPUTADO: " . $imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                    $domiciliosImputadosCarpetasDto = new DomiciliosimputadoscarpetasDTO();
                    $domiciliosImputadosCarpetasDao = new DomiciliosimputadoscarpetasDAO();
                    $domiciliosImputadosCarpetasDto->setIdImputadoCarpeta($imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                    $domiciliosImputadosCarpetasDto->setActivo('S');
                    $domiciliosImputadosCarpetasDto = $domiciliosImputadosCarpetasDao->selectDomiciliosimputadoscarpetas($domiciliosImputadosCarpetasDto, "", $this->proveedor);
                    if ( $domiciliosImputadosCarpetasDto != "" ) {
                        foreach ( $domiciliosImputadosCarpetasDto as $domicilio ) {
                            $domicilioTmp = new DomiciliosimputadossolicitudesDTO();
                            
                            $domicilioTmp->setIdImputadosolicitud($imputadoDestinoDto[0]->getIdImputadoSolicitud());
                            $domicilioTmp->setDomicilioProcesal($domicilio->getDomicilioProcesal());
                            $domicilioTmp->setCvePais($domicilio->getCvePais());
                            $domicilioTmp->setCveEstado($domicilio->getCveEstado());
                            $domicilioTmp->setCveMunicipio($domicilio->getCveMunicipio());
                            $domicilioTmp->setDireccion($domicilio->getDireccion());
                            $domicilioTmp->setColonia($domicilio->getColonia());
                            $domicilioTmp->setNumInterior($domicilio->getNumInterior());
                            $domicilioTmp->setNumExterior($domicilio->getNumExterior());
                            $domicilioTmp->setCp($domicilio->getCp());
                            $domicilioTmp->setLatitud($domicilio->getLatitud());
                            $domicilioTmp->setLongitud($domicilio->getLongitud());
                            $domicilioTmp->setRecidenciaHabitual($domicilio->getRecidenciaHabitual());
                            $domicilioTmp->setEstado($domicilio->getEstado());
                            $domicilioTmp->setMunicipio($domicilio->getMunicipio());
                            $domicilioTmp->setCveConvivencia($domicilio->getCveConvivencia());
                            $domicilioTmp->setCveTipoDeVivienda($domicilio->getCveTipoDeVivienda());
                            $domicilioTmp->setActivo('S');
                            
                            $domicilioTmp = $domiciliosImputadoSolicitudesDao->insertDomiciliosimputadossolicitudes($domicilioTmp, $this->proveedor);
                            if ( $domicilioTmp != "" ) {
                                $error = false;
                                $logger->w_onError("**********SE INSERTA EL DOMICILIO PARA EL IMPUTADO: " . $imputadoDestinoDto[0]->getIdImputadoSolicitud() . ", DOMICILIO INSERTADO: " . $domicilioTmp[0]->getIdDomicilioImputadoSolicitud());
                            } else {
                                $error = true;
                                $msg[] = array(utf8_encode('Ocurri� un error al copiar datos de domicilios del imputado origen'));
                                $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR EL DOMICILIO: " . $domicilio->getIdDomicilioImputadoCarpeta());
                            }
                            if ( $error ) {
                                break;
                            }
                        }
                    } else {
                        $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS ACTIVOS DE DOMICILIOS PARA EL IMPUTADO ORIGEN: " . $imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                    }
                    /*
                     * Copiar datos de telefonos hacia el imputado destino
                     */
                    if ( !$error ) {
                        $logger->w_onError("**********CONSULTAR LOS DATOS DE TELEFONOS DEL IMPUTADO: " . $imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                        $telefonosImputadosCarpetasDto = new TelefonosimputadoscarpetasDTO();
                        $telefonosImputadosCarpetasDao = new TelefonosimputadoscarpetasDAO();
                        $telefonosImputadosCarpetasDto->setIdImputadoCarpeta($imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                        $telefonosImputadosCarpetasDto->setActivo('S');
                        $telefonosImputadosCarpetasDto = $telefonosImputadosCarpetasDao->selectTelefonosimputadoscarpetas($telefonosImputadosCarpetasDto, "", $this->proveedor);
                        if ( $telefonosImputadosCarpetasDto != "" ) {
                            foreach ( $telefonosImputadosCarpetasDto as $telefono ) {
                                $telefonosTmp = new TelefonosimputadossolicitudesDTO();
                                $telefonosTmp->setIdImputadoSolicitud($imputadoDestinoDto[0]->getIdImputadoSolicitud());
                                $telefonosTmp->setTelefono($telefono->getTelefono());
                                $telefonosTmp->setCelular($telefono->getCelular());
                                $telefonosTmp->setEmail($telefono->getEmail());
                                $telefonosTmp->setActivo("S");
                                $telefonosTmp = $telefonosImputadosSolicitudesDao->insertTelefonosimputadossolicitudes($telefonosTmp, $this->proveedor);
                                if ( $telefonosTmp != "" ) {
                                    $error = false;
                                    $logger->w_onError("**********SE INSERTA EL TELEFONO PARA EL IMPUTADO: " . $imputadoDestinoDto[0]->getIdImputadoCarpeta() . ", TELEFONO INSERTADO: " . $telefonosTmp[0]->getIdTelefonoImputadosSolicitud());
                                } else {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurri� un error al insertar datos de tel�fonos'));
                                    $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR EL TELEFONO: " . $telefono->getIdTelefonoImputadosCarpeta());
                                }
                                if ( $error ) {
                                    break;
                                }
                            }
                        } else {
                            $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS ACTIVOS DE TELEFONOS PARA EL IMPUTADO ORIGEN: " . $imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                        }
                    }

                    /*
                     * Copiar los datos de defensores
                     */
                    if ( !$error ) {
                        $logger->w_onError("**********CONSULTAR LOS DATOS DE DEFENSORES DEL IMPUTADO: " . $imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                        $defensoresImputadosCarpetasDto = new DefensoresimputadoscarpetasDTO();
                        $defensoresImputadosCarpetasDao = new DefensoresimputadoscarpetasDAO();
                        $defensoresImputadosCarpetasDto->setIdImputadoCarpeta($imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                        $defensoresImputadosCarpetasDto->setActivo('S');
                        $defensoresImputadosCarpetasDto = $defensoresImputadosCarpetasDao->selectDefensoresimputadoscarpetas($defensoresImputadosCarpetasDto, "", $this->proveedor);
                        if ( $defensoresImputadosCarpetasDto != "" ) {
                            foreach ( $defensoresImputadosCarpetasDto as $defensor ) {
                                $defensorTmp = new DefensoresimputadossolicitudesDTO();
                                $defensorTmp->setIdImputadoSolicitud($imputadoDestinoDto[0]->getIdImputadoSolicitud());
                                $defensorTmp->setCveTipoDefensor($defensor->getCveTipoDefensor());
                                $defensorTmp->setNombre($defensor->getNombre());
                                $defensorTmp->setTelefono($defensor->getTelefono());
                                $defensorTmp->setCelular($defensor->getCelular());
                                $defensorTmp->setEmail($defensor->getEmail());
                                $defensorTmp->setActivo("S");
                                $defensorTmp = $defensoresImputadosSolicitudesDao->insertDefensoresimputadossolicitudes($defensorTmp, $this->proveedor);
                                if ( $defensorTmp != "" ) {
                                    $error = false;
                                    $logger->w_onError("**********SE INSERTA EL DEFENSOR PARA EL IMPUTADO: " . $imputadoDestinoDto[0]->getIdImputadoSolicitud() . ", DEFENSOR INSERTADO: " . $defensorTmp[0]->getIdDefensorImputadoSolicitud());
                                } else {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurri� un error al guardar datos del defensor'));
                                    $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR EL DEFENSOR: " . $defensor->getIdDefensorImputadoCarpeta());
                                }
                                if ( $error ) {
                                    break;
                                }
                            }
                        } else {
                            $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS ACTIVOS DE DEFENSORES PARA EL IMPUTADO ORIGEN: " . $imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                        }
                    }

                    /*
                     * Copiar datos de drogas al imputado destino
                     */
                    if ( !$error ) {
                        $imputadosDrogasCarpetasDto = new ImputadosdrogascarpetasDTO();
                        $imputadosDrogasCarpetasDao = new ImputadosdrogascarpetasDAO();
                        $imputadosDrogasCarpetasDto->setIdImputadoCarpeta($imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                        $imputadosDrogasCarpetasDto->setActivo('S');
                        $imputadosDrogasCarpetasDto = $imputadosDrogasCarpetasDao->selectImputadosdrogascarpetas($imputadosDrogasCarpetasDto, "", $this->proveedor);
                        if ( $imputadosDrogasCarpetasDto != "" ) {
                            foreach ( $imputadosDrogasCarpetasDto as $droga ) {
                                $imputadosDrogasTmp = new ImputadosdrogasDTO();
                                $imputadosDrogasTmp->setIdImputadoSolicitud($imputadoDestinoDto[0]->getIdImputadoSolicitud());
                                $imputadosDrogasTmp->setCveDroga($droga->getCveDroga());
                                $imputadosDrogasTmp->setActivo('S');
                                $imputadosDrogasTmp = $drograsImputadosSolicitudesDao->insertImputadosdrogas($imputadosDrogasTmp, $this->proveedor);
                                if ( $imputadosDrogasTmp != "" ) {
                                    $error = false;
                                    $logger->w_onError("**********SE INSERTA LA DROGA PARA EL IMPUTADO: " . $imputadoDestinoDto[0]->getIdImputadoSolicitud() . ", ID IMPUTADO DROGA CARPETA: " . $imputadosDrogasTmp[0]->getIdImputadoDroga());
                                } else {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurri� un error al guardar datos de drogas'));
                                    $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR DROGAS: " . $droga->getIdImputadoDrogaCarpeta());
                                }
                                if ( $error ) {
                                    break;
                                }
                            }
                        } else {
                            $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS ACTIVOS DE DROGAS PARA EL IMPUTADO ORIGEN: " . $imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                        }
                    }

                    /*
                     * Copiar datos de tutores hacia el imputado destino
                     */
                    if ( !$error ) {
                        $tutoresImputadosCarpetasDto = new TutoresimputadoscarpetasDTO();
                        $tutoresImputadosCarpetasDao = new TutoresimputadoscarpetasDAO();
                        $tutoresImputadosCarpetasDto->setIdImputadoCarpeta($imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                        $tutoresImputadosCarpetasDto->setActivo('S');
                        $tutoresImputadosCarpetasDto = $tutoresImputadosCarpetasDao->selectTutoresimputadoscarpetas($tutoresImputadosCarpetasDto, "", $this->proveedor);
                        if ( $tutoresImputadosCarpetasDto != "" ) {
                            foreach ( $tutoresImputadosCarpetasDto as $tutor ) {
                                $tutorTmp = new TutoresimputadoscarpetasDTO();
                                $tutorTmp->setIdImputadoSolicitud($imputadoDestinoDto[0]->getIdImputadoSolicitud());
                                $tutorTmp->setCveGenero($tutor->getCveGenero());
                                $tutorTmp->setCveTipoTutor($tutor->getCveTipoTutor());
                                $tutorTmp->setProvDef($tutor->getProvDef());
                                $tutorTmp->setNombre($tutor->getNombre());
                                $tutorTmp->setPaterno($tutor->getPaterno());
                                $tutorTmp->setMaterno($tutor->getMaterno());
                                $tutorTmp->setFechaNacimiento($tutor->getFechaNacimiento());
                                $tutorTmp->setEdad($tutor->getEdad());
                                $tutorTmp->setActivo("S");
                                $tutorTmp = $tutoresImputadosSolicitudesDao->insertTutoresimputados($tutorTmp, $this->proveedor);
                                if ( $tutorTmp != "" ) {
                                    $error = false;
                                    $logger->w_onError("**********SE INSERTA EL TUTOR PARA EL IMPUTADO: " . $imputadoDestinoDto[0]->getIdImputadoSolicitud() . ", ID TUTOR: " . $tutorTmp[0]->getIdTutorImputado());
                                } else {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurri� un error al guardar datos de tutores'));
                                    $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR TUTORES: " . $tutor->getIdTutorImputadoCarpeta());
                                }
                                if ( $error ) {
                                    break;
                                }
                            }
                        } else {
                            $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS ACTIVOS DE TUTORES PARA EL IMPUTADO ORIGEN: " . $imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                        }
                    }

                    /*
                     * Copiar datos de nacionalidades
                     */
                    if ( !$error ) {
                        $nacionalidadesImputadosCarpetasDto = new NacionalidadesimputadoscarpetasDTO();
                        $nacionalidadesImputadosCarpetasDao = new NacionalidadesimputadoscarpetasDAO();
                        $nacionalidadesImputadosCarpetasDto->setIdImputadoCarpeta($imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                        $nacionalidadesImputadosCarpetasDto->setActivo('S');
                        $nacionalidadesImputadosCarpetasDto = $nacionalidadesImputadosCarpetasDao->selectNacionalidadesimputadoscarpetas($nacionalidadesImputadosCarpetasDto, "", $this->proveedor);
                        if ( $nacionalidadesImputadosCarpetasDto != "" ) {
                            foreach ( $nacionalidadesImputadosCarpetasDto as $nacionalidad ) {
                                $nacionalidadTmp = new NacionalidadesimputadossolicitudesDTO();
                                $nacionalidadTmp->setCvePais($nacionalidad->getCvePais());
                                $nacionalidadTmp->setActivo('S');
                                $nacionalidadTmp->setIdImputadoSolicitud($imputadoDestinoDto[0]->getIdImputadoSolicitud());
                                $nacionalidadTmp = $nacionalidadesImputadosSolicitudesDao->insertNacionalidadesimputadossolicitudes($nacionalidadTmp, $this->proveedor);
                                if ( $nacionalidadTmp != "" ) {
                                    $error = false;
                                    $logger->w_onError("**********SE INSERTA LA NACIONALIDAD PARA EL IMPUTADO: " . $imputadoDestinoDto[0]->getIdImputadoSolicitud() . ", ID NACIONALIDAD: " . $nacionalidadTmp[0]->getIdNacionalidadImputadoSolicitud());
                                } else {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurri� un error al guardar datos de la nacionalidad'));
                                    $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR DATOS DE NACIONALIDAD: " . $nacionalidad->getIdNacionalidadImputadoCarpeta());
                                }
                                if ( $error ) {
                                    break;
                                }
                            }
                        } else {
                            $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS ACTIVOS DE NACIONALIDADES PARA EL IMPUTADO ORIGEN: " . $imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                        }
                    }
                    
                    if ( (int)$datos[$x]->idImputadoDestino > 0 ) {
                        if ( !$error ) {
                            /*
                             * Actualizar los datos del imputado destino, para ello se utilizan
                             * los datos generales del imputado origen
                             */
                            $imputadoTmp = new ImputadossolicitudesDTO();
                            $imputadoTmp->setIdImputadoSolicitud($imputadoDestinoDto[0]->getIdImputadoSolicitud());
                            $imputadoTmp->setIdSolicitudAudiencia($imputadoDestinoDto[0]->getIdSolicitudAudiencia());
                            $imputadoTmp->setCveEtapaProcesal($imputadoDestinoDto[0]->getCveEtapaProcesal());
                            $imputadoTmp->setDetenido($imputadoscarpetasDto[0]->getDetenido());
                            $imputadoTmp->setNombre($imputadoscarpetasDto[0]->getNombre());
                            $imputadoTmp->setPaterno($imputadoscarpetasDto[0]->getPaterno());
                            $imputadoTmp->setMaterno($imputadoscarpetasDto[0]->getMaterno());
                            $imputadoTmp->setRfc($imputadoscarpetasDto[0]->getRfc());
                            $imputadoTmp->setCurp($imputadoscarpetasDto[0]->getCurp());
                            $imputadoTmp->setCveTipoDetencion($imputadoscarpetasDto[0]->getCveTipoDetencion());
                            $imputadoTmp->setCveGenero($imputadoscarpetasDto[0]->getCveGenero());
                            $imputadoTmp->setAlias($imputadoscarpetasDto[0]->getAlias());
                            $imputadoTmp->setFechaDeclaracion($imputadoscarpetasDto[0]->getFechaDeclaracion());
                            $imputadoTmp->setCvePaisNacimiento($imputadoscarpetasDto[0]->getCvePaisNacimiento());
                            $imputadoTmp->setCveEstadoNacimiento($imputadoscarpetasDto[0]->getCveEstadoNacimiento());
                            $imputadoTmp->setCveMunicipioNacimiento($imputadoscarpetasDto[0]->getCveMunicipioNacimiento());
                            $imputadoTmp->setFechaNacimiento($imputadoscarpetasDto[0]->getFechaNacimiento());
                            $imputadoTmp->setEdad($imputadoscarpetasDto[0]->getEdad());
                            $imputadoTmp->setCveTipoPersona($imputadoscarpetasDto[0]->getCveTipoPersona());
                            $imputadoTmp->setCveTipoReligion($imputadoscarpetasDto[0]->getCveTipoReligion());
                            $imputadoTmp->setNombreMoral($imputadoscarpetasDto[0]->getNombreMoral());
                            $imputadoTmp->setCveNivelInstruccion($imputadoscarpetasDto[0]->getCveNivelInstruccion());
                            $imputadoTmp->setCveEstadoCivil($imputadoscarpetasDto[0]->getCveEstadoCivil());
                            $imputadoTmp->setCveEspanol($imputadoscarpetasDto[0]->getCveEspanol());
                            $imputadoTmp->setCveAlfabetismo($imputadoscarpetasDto[0]->getCveAlfabetismo());
                            $imputadoTmp->setCveDialectoIndigena($imputadoscarpetasDto[0]->getCveDialectoIndigena());
                            $imputadoTmp->setCveTipoFamiliaLinguistica($imputadoscarpetasDto[0]->getCveTipoFamiliaLinguistica());
                            $imputadoTmp->setCveOcupacion($imputadoscarpetasDto[0]->getCveOcupacion());
                            $imputadoTmp->setCveInterprete($imputadoscarpetasDto[0]->getCveInterprete());
                            $imputadoTmp->setCveEstadoPsicofisico($imputadoscarpetasDto[0]->getCveEstadoPsicofisico());
                            $imputadoTmp->setFechaImputacion($imputadoscarpetasDto[0]->getFechaImputacion());
                            $imputadoTmp->setFechaControlDet($imputadoscarpetasDto[0]->getFechaControlDet());
                            $imputadoTmp->setFecTerminoCons($imputadoscarpetasDto[0]->getFecTerminoCons());
                            $imputadoTmp->setFecCierreInv($imputadoscarpetasDto[0]->getFecCierreInv());
                            $imputadoTmp->setEstadoNacimiento($imputadoscarpetasDto[0]->getEstadoNacimiento());
                            $imputadoTmp->setMunicipioNacimiento($imputadoscarpetasDto[0]->getMunicipioNacimiento());
                            $imputadoTmp->setRelacionMoral($imputadoscarpetasDto[0]->getRelacionMoral());
                            $imputadoTmp->setPersonaMoral($imputadoscarpetasDto[0]->getPersonaMoral());
                            $imputadoTmp->setCveCereso($imputadoscarpetasDto[0]->getCveCereso());
                            $imputadoTmp->setCveTipoReincidencia($imputadoscarpetasDto[0]->getCveTipoReincidencia());
                            $imputadoTmp->setIngresoMensual($imputadoscarpetasDto[0]->getIngresoMensual());
                            $imputadoTmp->setCveGrupoEdnico($imputadoscarpetasDto[0]->getCveGrupoEdnico());
                            $imputadoTmp->setTieneSobreseimiento($imputadoscarpetasDto[0]->getTieneSobreseimiento());
                            $imputadoTmp->setFechaSobreseimiento($imputadoscarpetasDto[0]->getFechaSobreseimiento());
                            $imputadoTmp->setIdImputadoCarpeta($imputadoscarpetasDto[0]->getIdImputadoCarpeta());
                            $imputadoTmp->setFechaActualizacion($fechaActual);
                            $imputadoTmp = $imputadosSolicitudesDao->updateImputadossolicitudes($imputadoTmp, $this->proveedor);
                            if ( $imputadoTmp != "" ) {
                                $error = false;
                                $logger->w_onError("**********SE MODIFICAN LOS DATOS GENERALES DEL IMPUTADO CON ID: " . $imputadoDestinoDto[0]->getIdImputadoSolicitud());
                                $bitacora = new BitacoramovimientosController();
                                $bitacoraOfendido = $bitacora->agregar(131, 'Modificacion tblimputadossolicitudes', 'txt', serialize($imputadoTmp[0]), serialize($imputadoDestinoDto[0]), $this->proveedor);

                                if (!count($bitacoraOfendido)) {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurri� un error al guardar la acci�n realizada en bit�cora'));
                                }
                            } else {
                                $error = true;
                                $msg[] = array(utf8_encode('Ocurri� un error al actualizar los datos generales del imputado destino'));
                                $logger->w_onError("**********OCURRIO UN ERROR AL MODIFICAR LOS DATOS GENERALES DEL IMPUTADO: " . $imputadoDestinoDto[0]->getIdImputadoSolicitud());
                            }
                        }
                    }
                    
                } else {
                    $error = true;
                    $msg[] = array('No se encontraron datos del imputado origen, favor de verificar');
                    $logger->w_onError("**********NO SE ENCONTRARON DATOS DEL IMPUTADO ORIGEN");
                }
                
            }
            if ( $error ) {
                break;
            }
        }
        
        if ( !$error ) {
            $logger->w_onError("**********SE PROCEDE A ACTUALIZAR EL NUMERO DE IMPUTADOS DE LA SOLICITUD DE AUDIENCIA CON ID: " . $param['idSolicitudAudiencia']);
            $imputados = new ImputadossolicitudesDTO();
            $imputadosDao = new ImputadossolicitudesDAO();
            $imputados->setIdSolicitudAudiencia($param['idSolicitudAudiencia']);
            $imputados->setActivo("S");
            $imputados = $imputadosDao->selectImputadossolicitudes($imputados, "", $this->proveedor);
            if ($imputados != "") {
                $numImputados = count($imputados);
            } else {
                $numImputados = 0;
            }
            $logger->w_onError("**********NUMERO DE IMPUTADOS: " . $numImputados);

            $solicitudesTmp = new SolicitudesaudienciasDTO();
            $solicitudesDao = new SolicitudesaudienciasDAO();
            $solicitudesTmp->setIdSolicitudAudiencia($param['idSolicitudAudiencia']);
            $solicitudesTmp->setNumImputados($numImputados);
            $solicitudesTmp = $solicitudesDao->updateSolicitudesaudiencias($solicitudesTmp, $this->proveedor);
            if ($solicitudesTmp != "") {
                $error = false;
                $logger->w_onError("**********SE MODIFICA EL NUMERO DE IMPUTADOS DE LA SOLICITUD DE AUDIENCIA : " . $solicitudesTmp[0]->getIdSolicitudAudiencia());
                $logger->w_onError("**********NUM IMPUTADOS : " . $solicitudesTmp[0]->getNumImputados());
                
            } else {
                $error = true;
                $msg[] = array("Ocurrio un error al modificar el numero de imputados de la solicitud de audiencia");
                $logger->w_onError("**********OCURRIO UN ERROR AL ACTUALIZAR EL NUMERO DE IMPUTADOS DE LA SOLICITUD DE AUDIENCIA: " . $param['idSolicitudAudiencia']);
            }
        }
        
        //$imputadoscarpetasDto = $this->validarImputadoscarpetas($imputadoscarpetasDto);
        
        
        if ( !$error ) {
            if ( $proveedor == null ) {
                $this->proveedor->execute('COMMIT');
            }
            $result = array(
                'estatus' => 'ok',
                'msj'     => 'Datos guardados correctamente'
            );
            $logger->w_onError("**********EL PROCESO TERMINA CORRECTAMENTE");
        } else {
            if ( $proveedor == null ) {
                $this->proveedor->execute('ROLLBACK');
            }
            $result = array(
                'estatus' => 'error',
                'msj'     => $msg
            );
            $logger->w_onError("**********OCURRIO ALGUN ERROR DURANTE EL PROCESO, TERMINAR LA EJECUCION Y APLICAR ROLLBACK");
        }
        
        return json_encode($result);
    }
    
    
    /*
     * Metodo para validar si un imputado se encuentra relacionado con autos de apertura a juicio,
     * autos imputados, baneficios, formulacion de imputacion, ejecucion de sentencias, sentencias,
     * medidas cautelares, ordenes imputados, quejosos, quejosos promociones, reclusos y suspencion
     * condicional para impedir que el usuario elimine a dicho imputado logicamente
     */
    public function validaEliminarImputadoCarpeta($imputadoCarpetaDto, $proveedor = null){
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        
        $mensaje = array();
        $eliminar = true;
        $result = array();
        /*
         * verificar si el imputado cuenta con auto de apertura a juicio
         */
        $aperturaJuicioDto = new AperturasjuicioDTO();
        $aperturaJuicioDao = new AperturasjuicioDAO();
        $aperturaJuicioDto->setIdImputadoCarpeta($imputadoCarpetaDto->getIdImputadoCarpeta());
        $aperturaJuicioDto->setActivo('S');
        $aperturaJuicioDto = $aperturaJuicioDao->selectAperturasjuicio($aperturaJuicioDto, "", $this->proveedor);
        if ( $aperturaJuicioDto != "" ) {
            $eliminar = false;
            $mensaje[] = array("No se puede eliminar al imputado debido a que cuenta con auto de apertura a juicio");
        }
        
        /*
         * verificar si el imputado cuenta con algun auto
         */
        $autosImputadosDto = new AutosimputadosDTO();
        $autosImputadosDao = new AutosimputadosDAO();
        $autosImputadosDto->setIdImputadoCarpeta($imputadoCarpetaDto->getIdImputadoCarpeta());
        $autosImputadosDto->setActivo('S');
        $autosImputadosDto = $autosImputadosDao->selectAutosimputados($autosImputadosDto, "", $this->proveedor);
        if ( $autosImputadosDto != "" ) {
            $eliminar = false;
            $mensaje[] = array("No se puede eliminar al imputado debido a que cuenta con algun auto de apertura a juicio");
        }
        
        /*
         * Verificar si el imputado cuenta con beneficios
         */
        $beneficiosDto = new BeneficiosesDTO();
        $beneficiosDao = new BeneficiosesDAO();
        $beneficiosDto->setIdImputadoCarpeta($imputadoCarpetaDto->getIdImputadoCarpeta());
        $beneficiosDto->setActivo('S');
        $beneficiosDto = $beneficiosDao->selectBeneficioses($beneficiosDto, "", $this->proveedor);
        if ( $beneficiosDto != "" ) {
            $eliminar = false;
            $mensaje[] = array("No se puede eliminar al imputado debido a que cuenta con algun beneficio activo");
        }
        
        /*
         * Consultar la relacion de impofedel
         */
        $impofedelCarpetasDto = new ImpofedelcarpetasDTO();
        $impofedelCarpetasDao = new ImpofedelcarpetasDAO();
        $idImpofedel = "";
        $idRelacion = array();
        $impofedelCarpetasDto->setIdImputadoCarpeta($imputadoCarpetaDto->getIdImputadoCarpeta());
        $impofedelCarpetasDto->setActivo('S');
        $impofedelCarpetasDto = $impofedelCarpetasDao->selectImpofedelcarpetas($impofedelCarpetasDto, "", $this->proveedor);
        if ( $impofedelCarpetasDto != "" ) {
            foreach ( $impofedelCarpetasDto as $impofedel ) {
                $idRelacion[] = $impofedel->getIdImpOfeDelCarpeta();
            }
            $idImpofedel = implode(",", $idRelacion);
        }
        
        /*
         * Verificar si el imputado cuenta con formulacion de imputacion y ejecucion de sentencias
         */
        if ( $idImpofedel != "" ) {
            //formulacion de imputacion
            $formulacionImputacionDto = new FormulacionimputacionesDTO();
            $formulacionImputacionDao = new FormulacionimputacionesDAO();
            $formulacionImputacionDto->setActivo('S');
            $orden = " AND idImOfeDelCarpeta IN(" . $idImpofedel . ")";
            $formulacionImputacionDto = $formulacionImputacionDao->selectFormulacionimputaciones($formulacionImputacionDto, $orden, $this->proveedor);
            if ( $formulacionImputacionDto != "" ) {
                $eliminar = false;
                $mensaje[] = array(utf8_encode("No se puede eliminar al imputado debido a que cuenta con formulaci�n de imputaci�n"));
            }
            
            //ejecucion de sentencias
            $imputadosEjecSentenciasDto = new ImputadosejecsentenciasDTO();
            $imputadosEjecSentenciasDao = new ImputadosejecsentenciasDAO();
            $imputadosEjecSentenciasDto->setActivo("S");
            $ordenEjecSentencia = " AND idImpOfeDelCarpeta IN(" . $idImpofedel . ")";
            $imputadosEjecSentenciasDto = $imputadosEjecSentenciasDao->selectImputadosejecsentencias($imputadosEjecSentenciasDto, $ordenEjecSentencia, $this->proveedor);
            if ( $imputadosEjecSentenciasDto != "" ) {
                $eliminar = false;
                $mensaje[] = array(utf8_encode("No se puede eliminar al imputado debido a que cuenta con auto de radicaci�n a ejecuci�n de sentencia"));
            }
            
            //imputados sentencias
            $imputadosSentenciasDto = new ImputadossentenciasDTO();
            $imputadosSentenciasDao = new ImputadossentenciasDAO();
            $imputadosSentenciasDto->setActivo("S");
            $ordenImputadoSentencia = " AND idImpOfeDelCarpeta IN(" . $idImpofedel . ")";
            $imputadosSentenciasDto = $imputadosSentenciasDao->selectImputadossentencias($imputadosSentenciasDto, $ordenImputadoSentencia, $this->proveedor);
            if ( $imputadosSentenciasDto != "" ) {
                $eliminar = false;
                $mensaje[] = array(utf8_encode("No se puede eliminar al imputado debido a que cuenta con sentencias activas"));
            }
            
        }
        /*
         * validar si el imputado cuenta con medidas cautelares
         */
        $medidasCautelaresDto = new MedidascautelaresDTO();
        $medidasCautelaresDao = new MedidascautelaresDAO();
        $medidasCautelaresDto->setActivo("S");
        $medidasCautelaresDto->setIdImputadoCarpeta($imputadoCarpetaDto->getIdImputadoCarpeta());
        $medidasCautelaresDto = $medidasCautelaresDao->selectMedidascautelares($medidasCautelaresDto, "", $this->proveedor);
        if ( $medidasCautelaresDto != "" ) {
            $eliminar = false;
            $mensaje[] = array("No se puede eliminar al imputado debido a que cuenta con medidas cautelares activas");
        }
        
        $ordenesImputadosDto = new OrdenesimputadosDTO();
        $ordenesImputadosDao = new OrdenesimputadosDAO();
        $ordenesImputadosDto->setIdImputadoCarpeta($imputadoCarpetaDto->getIdImputadoCarpeta());
        $ordenesImputadosDto->setActivo('S');
        $ordenesImputadosDto = $ordenesImputadosDao->selectOrdenesimputados($ordenesImputadosDto, "", $this->proveedor);
        if ( $ordenesImputadosDto != "" ) {
            $eliminar = false;
            $mensaje[] = array("No se puede eliminar al imputado debido a que tiene alguna orden girada en su contra");
        }
        
//        $quejososDto = new QuejososDTO();
//        $quejososDao = new QuejososDAO();
//        $quejososDto->setActivo('S');
//        $quejososDto->setIdImputadoCarpeta($imputadoCarpetaDto->getIdImputadoCarpeta());
//        $quejososDto = $quejososDao->selectQuejosos($quejososDto, "", $this->proveedor);
//        if ( $quejososDto != "" ) {
//            $eliminar = false;
//            $mensaje[] = array("No se puede eliminar al imputado debido a que cuenta con un registro de quejosos");
//        }
        
        $quejososPromocionesDto = new QuejosospromocionesDTO();
        $quejososPromocionesDao = new QuejosospromocionesDAO();
        $quejososPromocionesDto->setActivo('S');
        $quejososPromocionesDto->setIdImputadoCarpeta($imputadoCarpetaDto->getIdImputadoCarpeta());
        $quejososPromocionesDto = $quejososPromocionesDao->selectQuejosospromociones($quejososPromocionesDto, "", $this->proveedor);
        if ( $quejososPromocionesDto != "" ) {
            $eliminar = false;
            $mensaje[] = array("No se puede eliminar al imputado debido a que cuenta con alguna promocion");
        }
        
        $reclusosDto = new ReclusosDTO();
        $reclusosDao = new ReclusosDAO();
        $reclusosDto->setActivo('S');
        $reclusosDto->setIdImputadoCarpeta($imputadoCarpetaDto->getIdImputadoCarpeta());
        $reclusosDto = $reclusosDao->selectReclusos($reclusosDto, "", $proveedor);
        if ( $reclusosDto != "" ) {
            $eliminar = false;
            $mensaje[] = array("No se puede eliminar al imputado debido a que cuenta con un registro de recluso");
        }
        
        $suspencionCondicionalDto = new SuspensioncondicionalesDTO();
        $suspencionCondicionalDao = new SuspensioncondicionalesDAO();
        $suspencionCondicionalDto->setActivo('S');
        $suspencionCondicionalDto->setIdImputadoCarpeta($imputadoCarpetaDto->getIdImputadoCarpeta());
        $suspencionCondicionalDto = $suspencionCondicionalDao->selectSuspensioncondicionales($suspencionCondicionalDto, "", $this->proveedor);
        if ( $suspencionCondicionalDto != "" ) {
            $eliminar = false;
            $mensaje[] = array("No se puede eliminar al imputado debido a que cuenta con suspension condicional");
        }
        
        if ( count($mensaje) > 0 ) {
            $result = [
                'estatus' => 'error',
                'mensaje' => $mensaje
            ];
        } else {
            $result = [
                'estatus' => 'ok',
                'mensaje' => 'eliminar'
            ];
        }
        return $result;
    }
    
    public function modificarEtapaProcesalImputado($imputadoscarpetasDto, $param, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute('BEGIN');
        } else {
            $this->proveedor = $proveedor;
        }
        $idCarpetaDestino = ( array_key_exists('idCarpetaJudicialDestino', $param) && (int)$param['idCarpetaJudicialDestino'] > 0 ) ? (int)$param['idCarpetaJudicialDestino'] : 0;
        $cveEstatusCarpeta = ( array_key_exists('cveEstatusCarpeta', $param) && (int)$param['cveEstatusCarpeta'] > 0 ) ? (int)$param['cveEstatusCarpeta'] : 0;
        $fechaTermino = ( array_key_exists('fechaTermino', $param) && $param['fechaTermino'] != "" ) ? $param['fechaTermino'] : date("Y-m-d H:i:s");
        $cveEtapaProcesalOrigen = 0;
        $cveEtapaProcesalDestino = (int)$imputadoscarpetasDto->getCveEtapaProcesal();
        $totalImputados = 0;
        $error = false;
        $msg = array();
        $result = array();
        $copiarDatos = false;
        
        $imputadosCarpetasDto = new ImputadoscarpetasDTO();
        $imputadosCarpetasDao = new ImputadoscarpetasDAO();
        $imputadosCarpetasDto->setIdImputadoCarpeta($imputadoscarpetasDto->getIdImputadoCarpeta());
        $imputadosCarpetasDto = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosCarpetasDto, "", $this->proveedor);
        if ( $imputadosCarpetasDto == "" ) {
            $error = true;
            $msg[] = array("Ocurrio un error al obtener los datos del imputado");
        } else {
            $cveEtapaProcesalOrigen = (int)$imputadosCarpetasDto[0]->getCveEtapaProcesal();
            
            /*
             * Validar si la etapa procesal del imputado puede ser modificada
             */
            if ( ($cveEtapaProcesalOrigen != $cveEtapaProcesalDestino) && $idCarpetaDestino > 0 ) {
                //Consultar los datos de la carpeta judicial origen
                $carpetaOrigenDto = new CarpetasjudicialesDTO();
                $carpetasJudicialesDao = new CarpetasjudicialesDAO();
                $carpetaOrigenDto->setIdCarpetaJudicial($imputadosCarpetasDto[0]->getIdCarpetaJudicial());
                $carpetaOrigenDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetaOrigenDto, '', $this->proveedor);
                if ( $carpetaOrigenDto == "" ) {
                    $error = true;
                    $msg[] = array("Ocurrio un error al consultar los datos de la carpeta judicial origen");
                }
                //Consultar los datos de la carpeta judicial destino
                $carpetaDestinoDto = new CarpetasjudicialesDTO();
                $carpetasJudicialesDao = new CarpetasjudicialesDAO();
                $carpetaDestinoDto->setIdCarpetaJudicial($idCarpetaDestino);
                $carpetaDestinoDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetaDestinoDto, '', $this->proveedor);
                if ( $carpetaDestinoDto == "" ) {
                    $error = true;
                    $msg[] = array("Ocurrio un error al consultar los datos de la carpeta judicial destino");
                }
                
                if ( (int)$carpetaDestinoDto[0]->getCveTipoCarpeta() > 5 ) {
                    $error = true;
                    $msg[] = array("Tipo de carpeta destino no valido");
                } else if ( ((int)$carpetaDestinoDto[0]->getCveTipoCarpeta() == 1 && (int)$carpetaOrigenDto[0]->getCveTipoCarpeta() == 4) ||
                            ((int)$carpetaDestinoDto[0]->getCveTipoCarpeta() == 1 && (int)$carpetaOrigenDto[0]->getCveTipoCarpeta() == 3) ||
                            ((int)$carpetaDestinoDto[0]->getCveTipoCarpeta() == 1 && (int)$carpetaOrigenDto[0]->getCveTipoCarpeta() == 2) ||
                            ((int)$carpetaDestinoDto[0]->getCveTipoCarpeta() == 3 && (int)$carpetaOrigenDto[0]->getCveTipoCarpeta() == 4) || 
                            ((int)$carpetaDestinoDto[0]->getCveTipoCarpeta() == 1 && (int)$carpetaOrigenDto[0]->getCveTipoCarpeta() == 5) ) {
                        $error = true;
                        $msg[] = array("No se puede regresar a los imputados a una etapa procesal anterior, favor de verificar");
                } else if ( (int)$carpetaOrigenDto[0]->getCveTipoCarpeta() == 1 && (int)$carpetaDestinoDto[0]->getCveTipoCarpeta() > 2 ) {
                    $error = true;
                    $msg[] = array("No se puede copiar a un imputado correspondiente de una carpeta Auxiliar hacia una carpeta de Juicio o Ejecucion directamente, favor de verificar");
                }
//                if ($cveEtapaProcesalActual == 1 && $cveEtapaProcesalFinal == 3) {
//                    $error = true;
//                    $msg[] = array("No se puede copiar a un imputado de Etapa Auxiliar a Etapa de Juicio directamente, favor de verificar");
//                } else {
                else {
                    if ( (int)$carpetaDestinoDto[0]->getCveTipoCarpeta() == 5 ) {
                        /*
                         * Si se desea mover al imputado hacia la etapa procesal de
                         * ejecucion de sentecnias, verificar que no haya mas de
                         * un imputado en la carpeta a donde se requiere mover al imputado
                         */
                        $imputadosCarpetasAux = new ImputadoscarpetasDTO();
                        $imputadosCarpetasAux->setIdCarpetaJudicial($carpetaDestinoDto[0]->getIdCarpetaJudicial());
                        $imputadosCarpetasAux->setActivo('S');
                        $imputadosCarpetasAux = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosCarpetasAux, "", $this->proveedor);
                        if ( $imputadosCarpetasAux == "" ) {
                            $copiarDatos = true;
                        } else {
                            $copiarDatos = false;
                            if ( $imputadosCarpetasAux[0]->getNombre() == $imputadosCarpetasDto[0]->getNombre() &&
                                 $imputadosCarpetasAux[0]->getPaterno() == $imputadosCarpetasDto[0]->getPaterno() &&
                                 $imputadosCarpetasAux[0]->getMaterno() == $imputadosCarpetasDto[0]->getMaterno() &&
                                 $imputadosCarpetasAux[0]->getNombreMoral() == $imputadosCarpetasDto[0]->getNombreMoral() ){
                                /*
                                 * El imputado ya existe en la cauda de expediente, actualziar
                                 * la etapa procesal del imputado origen
                                 */
                                $tmpImputado = new ImputadoscarpetasDTO();
                                $tmpImputado->setIdImputadoCarpeta($imputadosCarpetasDto[0]->getIdImputadoCarpeta());
                                $tmpImputado->setCveEtapaProcesal($carpetaDestinoDto[0]->getCveEtapaProcesal());
                                $tmpImputado->setFechaActualizacion(date("Y-m-d H:i:s"));
                                $tmpImputado = $imputadosCarpetasDao->updateImputadoscarpetas($tmpImputado, $this->proveedor);
                                if ( $tmpImputado != "" ) {
                                    /*
                                    * Validar si todos los imputados se encuentran en una etapa procesal
                                    * posterior a la etapa de la carpeta origen, o si tienen sobreseimiento
                                    * se procede a terminar la carpeta origen
                                    */
                                    $imputadosDto = new ImputadoscarpetasDTO();

                                    $imputadosDto->setIdCarpetaJudicial($imputadoscarpetasDto->getIdCarpetaJudicial());
                                    $imputadosDto->setCveEtapaProcesal($carpetaOrigenDto[0]->getCveEtapaProcesal());
                                    $imputadosDto->setActivo("S");
                                    $imputadosDto->setTieneSobreseimiento("N");
                                    $imputadosDto = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosDto, "", $this->proveedor);
                                    if ($imputadosDto != "") {
                                        $totalImputados = count($imputadosDto);
                                    } else {
                                        $totalImputados = 0;
                                    }
                                   /*
                                    * si todos los imputados de la carpeta se encuentran en una etapa procesal diferente
                                    * o tienen sobreseimiento, terminar la carpeta judicial
                                    */

                                    if ($totalImputados == 0) {
                                        $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                                        $carpetasJudicialesDto->setIdCarpetaJudicial($imputadoscarpetasDto->getIdCarpetaJudicial());
                                        $carpetasJudicialesDto->setFechaActualizacion(date("Y-m-d H:i:s"));
                                        $carpetasJudicialesDto->setCveEstatusCarpeta(2);
                                        $carpetasJudicialesDto->setFechaTermino($fechaTermino);
                                        $carpetasJudicialesDto = $carpetasJudicialesDao->updateCarpetasjudiciales($carpetasJudicialesDto, $this->proveedor);
                                        if ( $carpetasJudicialesDto != "" ) {
                                            $error = false;
                                            $msg[] = array("Se termina la carpeta judicial debido a que todos los imputados se encuentran en una Etapa Procesal Posterior o cuentan con Sobreseimiento");
                                        } else {
                                            $error = true;
                                            $msg[] = array("Ocurrio un error al terminar la carpeta judicial");
                                        }
                                    }
                                } else {
                                    $error = true;
                                    $msg[] = array("Ocurrio un error al actulizar la etapa procesal del imputado");
                                }
                            } else {
                                $error = true;
                                $msg[] = array("No se puede mover al imputado hacia la etapa procesal debido a que ya existe un imputado en dicha etapa (solo puede haber un imputado activo en Expediente)");
                            }
                        }
                    } else if ( (int)$carpetaDestinoDto[0]->getCveTipoCarpeta() < (int)$carpetaOrigenDto[0]->getCveTipoCarpeta() ) {
//                        var_dump($imputadosCarpetasDto[0]);
//                        print_r($param);
//                        exit;
                        /*
                         * Consultamos los datos del imputado para verificar si ya se encuentra en 
                         * la causa donde se desea mover, si se encuentra, actualziar la etapa procesal
                         * del imputado destino y eliminar logicamente al imputado origen, validar
                         * si la carpeta origen debe terminarse
                         */
                        $imputadosCarpetasAuxDto = new ImputadoscarpetasDTO();
                        $imputadosCarpetasAuxDto->setIdCarpetaJudicial($carpetaDestinoDto[0]->getIdCarpetaJudicial());
                        $imputadosCarpetasAuxDto->setNombre($imputadosCarpetasDto[0]->getNombre());
                        $imputadosCarpetasAuxDto->setPaterno($imputadosCarpetasDto[0]->getPaterno());
                        $imputadosCarpetasAuxDto->setMaterno($imputadosCarpetasDto[0]->getMaterno());
                        $imputadosCarpetasAuxDto->setNombreMoral($imputadosCarpetasDto[0]->getNombreMoral());
                        $imputadosCarpetasAuxDto->setActivo('S');
                        $imputadosCarpetasAuxDto = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosCarpetasAuxDto, "", $this->proveedor);
                        if ( $imputadosCarpetasAuxDto == "" ) {
                            if ( (int)$carpetaOrigenDto[0]->getCveTipoCarpeta() == 5 ) {
                                $error = true;
                                $msg[] = array("No fue posible regresar al imputado hacia la etapa seleccionada");
                            } else {
                                $copiarDatos = true;
                            }
                        } else {
                            $copiarDatos = false;
                            /*
                             * Procedemos a aperturar la carpeta judicial de destino si es que se encontraba terminada
                             */
                            $carpetasJudicialesAuxDto = new CarpetasjudicialesDTO();
                            $carpetasJudicialesAuxDto->setIdCarpetaJudicial($carpetaDestinoDto[0]->getIdCarpetaJudicial());
                            $carpetasJudicialesAuxDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesAuxDto, "", $this->proveedor);
                            if ( (int)$carpetasJudicialesAuxDto[0]->getCveEstatusCarpeta() == 2 ) {
                                $tmpCarpetasDto = new CarpetasjudicialesDTO();
                                $tmpCarpetasDto->setIdCarpetaJudicial($carpetaDestinoDto[0]->getIdCarpetaJudicial());
                                $tmpCarpetasDto->setCveEstatusCarpeta(1);
                                $tmpCarpetasDto = $carpetasJudicialesDao->aperturarCarpeta($tmpCarpetasDto, $this->proveedor);
                                if ( $tmpCarpetasDto == "" ) {
                                    $error = true;
                                    $msg[] = array("Ocurrio un error al aperturar la carpeta judicial destino");
                                }
                            }
                            /*
                             * Se encontro al imputado, se procede a actualizar la etapa procesal
                             */
                            $imputadosCarpetasTmp = new ImputadoscarpetasDTO();
                            $imputadosCarpetasTmp->setIdImputadoCarpeta($imputadosCarpetasAuxDto[0]->getIdImputadoCarpeta());
                            $imputadosCarpetasTmp->setCveEtapaProcesal($carpetaDestinoDto[0]->getCveEtapaProcesal());
                            $imputadosCarpetasTmp->setFechaActualizacion(date("Y-m-d H:i:s"));
                            $imputadosCarpetasTmp = $imputadosCarpetasDao->updateImputadoscarpetas($imputadosCarpetasTmp, $this->proveedor);
                            if ( $imputadosCarpetasTmp != "" ) {
                                $error = false;
                                $msg[] = array("Se regresa al imputado hacia la etapa procesal solicitada");
                                /*
                                 * Se procede a eliminar logicamente al imputado de la carpeta origen
                                 */
                                $eliminarImputado = $this->eliminaImputado($imputadosCarpetasDto[0], $this->proveedor, 0);
                                $eliminarImputado = json_decode($eliminarImputado);
                                if ( $eliminarImputado->status == 'Ok' ) {
                                    $numImputados = 0;
                                    $imputadosTmp = new ImputadoscarpetasDTO();
                                    $imputadosTmp->setIdCarpetaJudicial($carpetaOrigenDto[0]->getIdCarpetaJudicial());
                                    $imputadosTmp->setActivo('S');
                                    $imputadosTmp = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosTmp, "", $this->proveedor);
                                    if ( $imputadosTmp != "" ) {
                                        $numImputados = (string)count($imputadosTmp);
                                    } else {
                                        $numImputados = (string)0;
                                    }
                                   
                                    /*
                                     * Si se elimino correctamente al imputado, verificar si 
                                     * la carpeta de origen de debe eliminar
                                     */
                                    $imputadosDto = new ImputadoscarpetasDTO();

                                    $imputadosDto->setIdCarpetaJudicial($carpetaOrigenDto[0]->getIdCarpetaJudicial());
                                    $imputadosDto->setCveEtapaProcesal($carpetaOrigenDto[0]->getCveEtapaProcesal());
                                    $imputadosDto->setActivo("S");
                                    $imputadosDto->setTieneSobreseimiento("N");
                                    $imputadosDto = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosDto, "", $this->proveedor);
                                    if ($imputadosDto != "") {
                                        $totalImputados = count($imputadosDto);
                                    } else {
                                        $totalImputados = 0;
                                    }
                                    /*
                                     * si todos los imputados de la carpeta se encuentran en una etapa procesal diferente
                                     * o tienen sobreseimiento o no estan activos, terminar la carpeta judicial
                                     */
                                    
                                    if ($totalImputados == 0) {
                                        $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                                        $carpetasJudicialesDto->setIdCarpetaJudicial($carpetaOrigenDto[0]->getIdCarpetaJudicial());
                                        $carpetasJudicialesDto->setFechaActualizacion(date("Y-m-d H:i:s"));
                                        $carpetasJudicialesDto->setNumImputados($numImputados);
                                        $carpetasJudicialesDto->setCveEstatusCarpeta(2);
                                        $carpetasJudicialesDto->setFechaTermino($fechaTermino);
                                        $carpetasJudicialesDto = $carpetasJudicialesDao->updateCarpetasjudiciales($carpetasJudicialesDto, $this->proveedor);
                                        if ( $carpetasJudicialesDto != "" ) {
                                            $error = false;
                                            $msg[] = array("Se termina la carpeta judicial debido a que todos los imputados se encuentran en una Etapa Procesal Posterior o cuentan con Sobreseimiento");
                                        } else {
                                            $error = true;
                                            $msg[] = array("Ocurrio un error al terminar la carpeta judicial");
                                        }
                                    } else {
                                        /*
                                         * Si aun hay al menos un imputado en la carpeta, actualizar numero de imputados
                                         */
                                        $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                                        $carpetasJudicialesDto->setIdCarpetaJudicial($carpetaOrigenDto[0]->getIdCarpetaJudicial());
                                        $carpetasJudicialesDto->setFechaActualizacion(date("Y-m-d H:i:s"));
                                        $carpetasJudicialesDto->setNumImputados($numImputados);
                                        $carpetasJudicialesDto = $carpetasJudicialesDao->updateCarpetasjudiciales($carpetasJudicialesDto, $this->proveedor);
                                        if ( $carpetasJudicialesDto != "" ) {
                                            $error = false;
                                            $msg[] = array("Se actualizan los datos de la carpeta judicial origen");
                                        } else {
                                            $error = true;
                                            $msg[] = array("Ocurrio un error al actualizar los datos de la carpeta judicial origen");
                                        }
                                    }
                                    
                                } else {
                                    $error = true;
                                    $msg[] = array("Ocurrio un error al quitar al imputado origen");
                                }
                                /*
                                 * Verificar si el imputado de origen cuenta con auto de apertura a juicio
                                 * si cuenta con auto de apertura a juicio se borra logicamente
                                 */
                                $aperturasJuicioDto = new AperturasjuicioDTO();
                                $aperturasJuicioDao = new AperturasjuicioDAO();
                                $aperturasJuicioDto->setIdImputadoCarpeta($imputadosCarpetasTmp[0]->getIdImputadoCarpeta());
                                $aperturasJuicioDto->setActivo('S');
                                $aperturasJuicioDto = $aperturasJuicioDao->selectAperturasjuicio($aperturasJuicioDto, "", $this->proveedor);
                                if ( $aperturasJuicioDto != "" ) {
                                    foreach ( $aperturasJuicioDto as $aperturajuicio ) {
                                        $aperturaJuicioAuxDto = new AperturasjuicioDTO();
                                        $aperturaJuicioAuxDto->setIdAperturaJuicio($aperturajuicio->getIdAperturaJuicio());
                                        $aperturaJuicioAuxDto->setActivo('N');
                                        $aperturaJuicioAuxDto = $aperturasJuicioDao->updateAperturasjuicio($aperturaJuicioAuxDto, $this->proveedor);
                                        if ( $aperturaJuicioAuxDto == "" ) {
                                            $error = true;
                                            $msg[] = array("Ocurrio un error al deshabilitar el auto de apertura a juicio para el imputado seleccionado");
                                        }
                                    }
                                }
                                /*
                                 * Verificar si el imputado cuenta con sentencias para
                                 * proceder a eliminar logicamente los datos
                                 */
                                $arrImpofedel = array();
                                $cadenaImpofedel = "";
                                $impoFedelCarpetasDto = new ImpofedelcarpetasDTO();
                                $impoFedelCarpetasDao = new ImpofedelcarpetasDAO();
                                $imputadosSentenciasDao = new ImputadossentenciasDAO();
                                $imputadosSancionesDao = new ImputadossancionesDAO();
                                $imputadosEjecSentenciasDao = new ImputadosejecsentenciasDAO();
                                $impoFedelCarpetasDto->setIdImputadoCarpeta($imputadosCarpetasTmp[0]->getIdImputadoCarpeta());
                                $impoFedelCarpetasDto->setActivo('S');
                                $impoFedelCarpetasDto = $impoFedelCarpetasDao->selectImpofedelcarpetas($impoFedelCarpetasDto, "", $this->proveedor);
                                if ( $impoFedelCarpetasDto != "" ) {
                                    foreach ( $impoFedelCarpetasDto as $impofedel ) {
                                        $imputadosSentenciasDto = new ImputadossentenciasDTO();
                                        $imputadosSentenciasDto->setIdImpOfeDelCarpeta($impofedel->getIdImpOfeDelCarpeta());
                                        $imputadosSentenciasDto->setActivo('S');
                                        $imputadosSentenciasDto = $imputadosSentenciasDao->selectImputadossentencias($imputadosSentenciasDto, "", $this->proveedor);
                                        if ( $imputadosSentenciasDto != "" ) {
                                            foreach ( $imputadosSentenciasDto as $imputadoSentencia ) {
                                                $imputadosSancionesDto = new ImputadossancionesDTO();
                                                $imputadosSancionesDto->setIdImputadoSentencia($imputadoSentencia->getIdImputadoSentencia());
                                                $imputadosSancionesDto->setActivo('S');
                                                $imputadosSancionesDto = $imputadosSancionesDao->selectImputadossanciones($imputadosSancionesDto, "", $this->proveedor);
                                                if ( $imputadosSancionesDto != "" ) {
                                                    foreach ( $imputadosSancionesDto as $imputadoSancion ) {
                                                        $imputadosSancionesAuxDto = new ImputadossancionesDTO();
                                                        $imputadosSancionesAuxDto->setIdImputadoSancion($imputadoSancion->getIdImputadoSancion());
                                                        $imputadosSancionesAuxDto->setActivo('N');
                                                        $imputadosSancionesAuxDto = $imputadosSancionesDao->updateImputadossanciones($imputadosSancionesAuxDto, $this->proveedor);
                                                        if ( $imputadosSancionesAuxDto == "" ) {
                                                            $error = true;
                                                            $msg[] = array("Ocurrio un error al deshabilitar la sancion al imputado");
                                                        }
                                                        if ( $error ) {
                                                            break;
                                                        }
                                                    }
                                                }
                                                $imputadosSentenciasAuxDto = new ImputadossentenciasDTO();
                                                $imputadosSentenciasAuxDto->setIdImputadoSentencia($imputadoSentencia->getIdImputadoSentencia());
                                                $imputadosSentenciasAuxDto->setActivo('N');
                                                $imputadosSentenciasAuxDto = $imputadosSentenciasDao->updateImputadossentencias($imputadosSentenciasAuxDto, $this->proveedor);
                                                if ( $imputadosSentenciasAuxDto == "" ) {
                                                    $error = true;
                                                    $msg[] = array("Ocurrio un error al deshabilitar la sentencia del imputado");
                                                }
                                                if ( $error ) {
                                                    break;
                                                }
                                            }
                                        }
                                        /*
                                         * Verificar si existen registros de auto de radicacion a ejecucion
                                         */
                                        $imputadosEjecSentenciasDto = new ImputadosejecsentenciasDTO();
                                        $imputadosEjecSentenciasDto->setIdImpOfeDelCarpeta($impofedel->getIdImpOfeDelCarpeta());
                                        $imputadosEjecSentenciasDto->setActivo('S');
                                        $imputadosEjecSentenciasDto = $imputadosEjecSentenciasDao->selectImputadosejecsentencias($imputadosEjecSentenciasDto, "", $this->proveedor);
                                        if ( $imputadosEjecSentenciasDto != "" ) {
                                            foreach ( $imputadosEjecSentenciasDto as $imputadoejecSentencia ) {
                                                $imputadosEjecSentenciasAuxDto = new ImputadosejecsentenciasDTO();
                                                $imputadosEjecSentenciasAuxDto->setIdImputadoEjecSentencia($imputadoejecSentencia->getIdImputadoEjecSentencia());
                                                $imputadosEjecSentenciasAuxDto->setActivo('N');
                                                $imputadosEjecSentenciasAuxDto = $imputadosEjecSentenciasDao->updateImputadosejecsentencias($imputadosEjecSentenciasAuxDto, $this->proveedor);
                                                if ( $imputadosEjecSentenciasAuxDto == "" ) {
                                                    $error = true;
                                                    $msg[] = array("Ocurrio un error al deshabilitar el auto de radicacion a ejecucion del imputado");
                                                }
                                            }
                                        }
                                        if ( $error ) {
                                            break;
                                        }
                                    }
                                }
                            } else {
                                $error = true;
                                $msg[] = array("Ocurrio un error al regresar al imputado hacia la etapa procesal solicitada");
                            }
                        }
                    }
                    else {
                        $copiarDatos = true;
                    }
                    if ( $copiarDatos ) {
                        //echo "Entra a condicion copiar los datos</br>";
                        $param['etapaProcesal'] = "S";
                        $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                        $carpetasJudicialesDto->setIdCarpetaJudicial($idCarpetaDestino);
                        $imputadoDto = new ImputadoscarpetasDTO();
                        $imputadoDto->setIdImputadoCarpeta($imputadoscarpetasDto->getIdImputadoCarpeta());
                        $carpetasJudicialesController = new CarpetasjudicialesController();
                        $copiar = $carpetasJudicialesController->copiarCarpetasJudiciales($carpetasJudicialesDto, $imputadoDto, $this->proveedor, $param);
                        if ($copiar) {
                            $msg[] = array("Se copia los datos del imputado hacia la carpeta destino seleccionada");
                            $error = false;
                            /*
                             * Si se regresa al imputado hacia una etapa procesal anterior
                             * se debe eliminar logicamente al imputado
                             */
                            if ( (int)$carpetaDestinoDto[0]->getCveTipoCarpeta() < (int)$carpetaOrigenDto[0]->getCveTipoCarpeta() ) {
                                $eliminarImputado = $this->eliminaImputado($imputadosCarpetasDto[0], $this->proveedor, 0);
                                $eliminarImputado = json_decode($eliminarImputado);
                                if ( $eliminarImputado->status == 'Ok' ) {
                                    $error = false;
                                    $msg[] = array("Se quita al imputado seleccionado");
                                    /*
                                     * Consultamos el numero de imputados activos y procedemos a actualizar le numero de imputados de la carpeta origen
                                     */
                                    $numImputados = 0;
                                    $imputadosTmp = new ImputadoscarpetasDTO();
                                    $imputadosTmp->setIdCarpetaJudicial($carpetaOrigenDto[0]->getIdCarpetaJudicial());
                                    $imputadosTmp->setActivo('S');
                                    $imputadosTmp = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosTmp, "", $this->proveedor);
                                    if ( $imputadosTmp != "" ) {
                                        $numImputados = (string)count($imputadosTmp);
                                    } else {
                                        $numImputados = (string)0;
                                    }
                                    
                                    $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                                    $carpetasJudicialesDto->setIdCarpetaJudicial($carpetaOrigenDto[0]->getIdCarpetaJudicial());
                                    $carpetasJudicialesDto->setFechaActualizacion(date("Y-m-d H:i:s"));
                                    $carpetasJudicialesDto->setNumImputados($numImputados);
                                    $carpetasJudicialesDto = $carpetasJudicialesDao->updateCarpetasjudiciales($carpetasJudicialesDto, $this->proveedor);
                                    if ( $carpetasJudicialesDto != "" ) {
                                        $error = false;
                                        $msg[] = array("Se actualizan los datos de la carpeta judicial origen");
                                    } else {
                                        $error = true;
                                        $msg[] = array("Ocurrio un error al actualizar los datos de la carpeta judicial origen");
                                    }
                                } else {
                                    $error = true;
                                    $msg[] = array("Ocurrio un error al quitar al imputado");
                                }
                            }
                            /*
                             * Validar si todos los imputados se encuentran en una etapa procesal
                             * posterior a la etapa de la carpeta origen, o si tienen sobreseimiento
                             * se procede a terminar la carpeta origen
                             */
                            $imputadosDto = new ImputadoscarpetasDTO();

                            $imputadosDto->setIdCarpetaJudicial($imputadoscarpetasDto->getIdCarpetaJudicial());
                            $imputadosDto->setCveEtapaProcesal($carpetaOrigenDto[0]->getCveEtapaProcesal());
                            $imputadosDto->setActivo("S");
                            $imputadosDto->setTieneSobreseimiento("N");
                            $imputadosDto = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosDto, "", $this->proveedor);
                            if ($imputadosDto != "") {
                                $totalImputados = count($imputadosDto);
                            } else {
                                $totalImputados = 0;
                            }
                            /*
                             * si todos los imputados de la carpeta se encuentran en una etapa procesal diferente
                             * o tienen sobreseimiento, terminar la carpeta judicial
                             */

                            if ($totalImputados == 0) {
                                $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                                $carpetasJudicialesDto->setIdCarpetaJudicial($imputadoscarpetasDto->getIdCarpetaJudicial());
                                $carpetasJudicialesDto->setFechaActualizacion(date("Y-m-d H:i:s"));
                                $carpetasJudicialesDto->setCveEstatusCarpeta(2);
                                $carpetasJudicialesDto->setFechaTermino($fechaTermino);
                                $carpetasJudicialesDto = $carpetasJudicialesDao->updateCarpetasjudiciales($carpetasJudicialesDto, $this->proveedor);
                                if ( $carpetasJudicialesDto != "" ) {
                                    $error = false;
                                    $msg[] = array("Se termina la carpeta judicial debido a que todos los imputados se encuentran en una Etapa Procesal Posterior o cuentan con Sobreseimiento");
                                } else {
                                    $error = true;
                                    $msg[] = array("Ocurrio un error al terminar la carpeta judicial");
                                }
                            }
                        } else {
                            $error = true;
                            $msg[] = array("Ocurrio un error al mover al imputado hacia la etapa procesal seleccionada");
                        }
                    }
                }
            }
            
            if ( ($cveEtapaProcesalOrigen != $cveEtapaProcesalDestino) && $idCarpetaDestino == 0 ) {
                $imputadosAuxDto = new ImputadoscarpetasDTO();
                $imputadosAuxDto->setIdImputadoCarpeta($imputadoscarpetasDto->getIdImputadoCarpeta());
                $imputadosAuxDto->setCveEtapaProcesal($imputadoscarpetasDto->getCveEtapaProcesal());
                $imputadosAuxDto->setFechaActualizacion(date('Y-m-d H:i:s'));
                $imputadosAuxDto = $imputadosCarpetasDao->updateImputadoscarpetas($imputadosAuxDto, $this->proveedor);
                if ( $imputadosAuxDto != "" ) {
                    $error = false;
                    $msg[] = array("Datos actualizados correctamente");
                } else {
                    $error = true;
                    $msg[] = array("Ocurrio un error al actualizar los datos");
                }
            }
        }
        
        if ( !$error ) {
            if (array_key_exists('modificarEstatusCarpeta', $param) && $param['modificarEstatusCarpeta'] == 'S' ) {
                $totalImputados = 0;
                $dtoCarpetasJudicialesAux = new CarpetasjudicialesDTO();
                $carpetasJudicialesDao = new CarpetasjudicialesDAO();
                $dtoCarpetasJudicialesAux->setIdCarpetaJudicial($imputadoscarpetasDto->getIdCarpetaJudicial());
                $dtoCarpetasJudicialesAux = $carpetasJudicialesDao->selectCarpetasjudiciales($dtoCarpetasJudicialesAux, "", $this->proveedor);
                if ( $dtoCarpetasJudicialesAux == "" ) {
                    $error = true;
                    $msg[] = array("Ocurrio un error al consultar los datos de la carpeta judicial del imputado");
                } else {
                    if ( $cveEstatusCarpeta == 2 ) {
                        if ( (int)$dtoCarpetasJudicialesAux[0]->getCveTipoCarpeta() == 1 ) {
                            /*
                             * Si la carpeta que se desea terminar es un numero auxiliar
                             * verificar que exista un registro de antecedes donde el auxiliar sea
                             * padre de una carpeta de control para poder terminar el auxiliar
                             */
                            $antecedesCarpetasDto = new AntecedescarpetasDTO();
                            $antecedesCarpetasDao = new AntecedescarpetasDAO();
                            $antecedesCarpetasDto->setIdCarpetaPadre($dtoCarpetasJudicialesAux[0]->getIdCarpetaJudicial());
                            $antecedesCarpetasDto->setActivo('S');
                            $antecedesCarpetasDto = $antecedesCarpetasDao->selectAntecedescarpetas($antecedesCarpetasDto, "", $this->proveedor);
                            if ( $antecedesCarpetasDto != "" ) {
                                /*
                                 * Si se encuentran datos del antecede, verificar que sea una causa de control
                                 */
                                $carpetasAux = new CarpetasjudicialesDTO();
                                $carpetasAux->setIdCarpetaJudicial($antecedesCarpetasDto[0]->getIdCarpetaHija());
                                $carpetasAux = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasAux, "", $this->proveedor);
                                if ( $carpetasAux != "" ) {
                                    if ( (int)$carpetasAux[0]->getCveTipoCarpeta() == 2 ) {
                                        $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                                        $carpetasJudicialesDto->setIdCarpetaJudicial($imputadoscarpetasDto->getIdCarpetaJudicial());
                                        $carpetasJudicialesDto->setFechaActualizacion(date("Y-m-d H:i:s"));
                                        $carpetasJudicialesDto->setCveEstatusCarpeta(2);
                                        $carpetasJudicialesDto->setFechaTermino($fechaTermino);
                                        $carpetasJudicialesDto = $carpetasJudicialesDao->updateCarpetasjudiciales($carpetasJudicialesDto, $this->proveedor);
                                        if ( $carpetasJudicialesDto != "" ) {
                                            $error = false;
                                            $msg[] = array("La carpeta judicial se termina correctamente");
                                        } else {
                                            $error = true;
                                            $msg[] = array("Ocurrio un error al terminar la carpeta judicial");
                                        }
                                    }
                                } else {
                                    $error = true;
                                    $msg[] = array("Ocurrio un error al consultar los datos del antecedente");
                                }
                            } else {
                                $error = true;
                                $msg[] = array("El numero Auxiliar no puede terminarse debido a que no cuenta con una Causa de Control, favor de verificar");
                            }
                        } else if ( (int)$dtoCarpetasJudicialesAux[0]->getCveTipoCarpeta() == 5 ) {
                            $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                            $carpetasJudicialesDto->setIdCarpetaJudicial($imputadoscarpetasDto->getIdCarpetaJudicial());
                            $carpetasJudicialesDto->setFechaActualizacion(date("Y-m-d H:i:s"));
                            $carpetasJudicialesDto->setCveEstatusCarpeta(2);
                            $carpetasJudicialesDto->setFechaTermino($fechaTermino);
                            $carpetasJudicialesDto = $carpetasJudicialesDao->updateCarpetasjudiciales($carpetasJudicialesDto, $this->proveedor);
                            if ( $carpetasJudicialesDto != "" ) {
                                $error = false;
                                $msg[] = array("La carpeta judicial se termina correctamente");
                            } else {
                                $error = true;
                                $msg[] = array("Ocurrio un error al terminar la carpeta judicial");
                            }
                        } else {
                            $imputadosDto = new ImputadoscarpetasDTO();
                            $imputadosDao = new ImputadoscarpetasDAO();
                            $imputadosDto->setIdCarpetaJudicial($imputadoscarpetasDto->getIdCarpetaJudicial());
                            $imputadosDto->setCveEtapaProcesal($dtoCarpetasJudicialesAux[0]->getCveEtapaProcesal());
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
                             * o tienen sobreseimiento, terminar la carpeta judicial
                             */

                            if ($totalImputados == 0) {
                                $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                                $carpetasJudicialesDto->setIdCarpetaJudicial($imputadoscarpetasDto->getIdCarpetaJudicial());
                                $carpetasJudicialesDto->setFechaActualizacion(date("Y-m-d H:i:s"));
                                $carpetasJudicialesDto->setCveEstatusCarpeta($cveEstatusCarpeta);
                                $carpetasJudicialesDto->setFechaTermino($fechaTermino);
                                $carpetasJudicialesDto = $carpetasJudicialesDao->updateCarpetasjudiciales($carpetasJudicialesDto, $this->proveedor);
                                if ( $carpetasJudicialesDto != "" ) {
                                    $error = false;
                                    $msg[] = array("Se termina la carpeta judicial debido a que todos los imputados se encuentran en una etapa posterior o tienen sobreseimiento");
                                } else {
                                    $error = true;
                                    $msg[] = array("Ocurrio un error al terminar la carpeta judicial");
                                }
                            } else {
                                $error = true;
                                $msg[] = array("La carpeta no se puede terminar debido a que hay imputados activos en la etapa procesal actual");
                            }
                        }
                        
                    } else if ( $cveEstatusCarpeta == 1 ) {
                        $carpetasJudicialesDao = new CarpetasjudicialesDAO();

                        $carpetaJudicialTmp = new CarpetasjudicialesDTO();
                        $carpetaJudicialTmp->setIdCarpetaJudicial($imputadoscarpetasDto->getIdCarpetaJudicial());
                        $carpetaJudicialTmp->setCveEstatusCarpeta($cveEstatusCarpeta);
                        $carpetaJudicialTmp = $carpetasJudicialesDao->aperturarCarpeta($carpetaJudicialTmp, $this->proveedor);
                        if ($carpetaJudicialTmp != "") {
                            $error = false;
                            $msg[] = array("Se modifica el estatus de la carpeta judicial");
                        } else {
                            $error = true;
                            $msg[] = array("Ocurrio un error al modificar el estatus de la carpeta judicial");
                        }
                    }
                }
            }
        }
        
        if ( !$error ) {
            if ( $proveedor == null ) {
                $this->proveedor->execute('COMMIT');
            }
            $result = array(
                        "status" => "Ok",
                        "msj"    => $msg
                      );
        } else {
            if ( $proveedor == null ) {
                $this->proveedor->execute('ROLLBACK');
            }
            $result = array(
                        "status" => "Error",
                        "msj"    => $msg
                      );
        }
        return $result;
    }
    
    public function datosPartes($imputadosCarpetasDto, $proveedor = null){
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $r = 1;
        $impoFedelCarpetasDto = new ImpofedelcarpetasDTO();
        $impoFedelCarpetasDao = new ImpofedelcarpetasDAO();
        $imputadosCarpetasDao = new ImputadoscarpetasDAO();
        $ofendidosCarpetasDao = new OfendidoscarpetasDAO();
        $etapasProcesalesDao = new EtapasprocesalesDAO();
        $delitosCarpetasDao = new DelitoscarpetasDAO();
        $carpetasJudicialesDao = new CarpetasjudicialesDAO();
        $impoFedelCarpetasDto->setIdCarpetaJudicial($imputadosCarpetasDto->getIdCarpetaJudicial());
        $impoFedelCarpetasDto->setActivo('S');
        $impoFedelCarpetasDto = $impoFedelCarpetasDao->selectImpofedelcarpetas($impoFedelCarpetasDto, "", $this->proveedor);
        if ( $impoFedelCarpetasDto != "" ) {
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($impoFedelCarpetasDto) . '",';
            $json .= '"data":[';
            
            foreach ( $impoFedelCarpetasDto as $impoFedel ) {
                $json .= "{";
                $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                $carpetasJudicialesDto->setIdCarpetaJudicial($impoFedel->getIdCarpetaJudicial());
                $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto, "", $this->proveedor);
                
                $imputadosCarpetas = new ImputadoscarpetasDTO();
                $imputadosCarpetas->setIdImputadoCarpeta($impoFedel->getIdImputadoCarpeta());
                $imputadosCarpetas->setActivo('S');
                $imputadosCarpetas = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosCarpetas, "", $this->proveedor);
                
                $ofenidosCarpetasDto = new OfendidoscarpetasDTO();
                $ofenidosCarpetasDto->setIdOfendidoCarpeta($impoFedel->getIdOfendidoCarpeta());
                $ofenidosCarpetasDto = $ofendidosCarpetasDao->selectOfendidoscarpetas($ofenidosCarpetasDto, "", $this->proveedor);

                $delitosCarpetasDto = new DelitoscarpetasDTO();
                $delitosCarpetasDto->setIdDelitoCarpeta($impoFedel->getIdDelitoCarpeta());
                $delitosCarpetasDto = $delitosCarpetasDao->selectDelitoscarpetas($delitosCarpetasDto);
                if ($delitosCarpetasDto != "") {
                    $desDelitosDto = new DelitosDTO();
                    $desDelitosDao = new DelitosDAO();
                    $desDelitosDto->setCveDelito($delitosCarpetasDto[0]->getCveDelito());
                    $rsDesDelito = $desDelitosDao->selectDelitos($desDelitosDto, "", $this->proveedor);
                }
                if ( $carpetasJudicialesDto != "" ){
                    $json .= '"numero":' . json_encode($carpetasJudicialesDto[0]->getNumero()) . ",";
                    $json .= '"anio":' . json_encode($carpetasJudicialesDto[0]->getAnio()) . ",";
                    $tiposCarpetasDto = new TiposcarpetasDTO();
                    $tiposCarpetasDao = new TiposcarpetasDAO();
                    $tiposCarpetasDto->setCveTipoCarpeta($carpetasJudicialesDto[0]->getCveTipoCarpeta());
                    $tiposCarpetasDto = $tiposCarpetasDao->selectTiposcarpetas($tiposCarpetasDto, "", $this->proveedor);
                    if ( $tiposCarpetasDto != "" ) {
                        $json .= '"desTipoCarpeta":' . json_encode(utf8_encode($tiposCarpetasDto[0]->getDesTipoCarpeta())) . ",";
                    } else {
                        $json .= '"desTipoCarpeta":""';
                    }
                } else {
                    $json .= '"numero":""';
                    $json .= '"anio":""';
                }
                if ( $imputadosCarpetas != "" ) {
                    if ($imputadosCarpetas[0]->getCveTipoPersona() == "1") {
                        $json .= '"nombreImputado":' . json_encode(utf8_encode($imputadosCarpetas[0]->getNombre() . " " . $imputadosCarpetas[0]->getPaterno() . " " . $imputadosCarpetas[0]->getMaterno())) . ",";
                    } else {
                        $json .= '"nombreImputado":' . json_encode(utf8_encode($imputadosCarpetas[0]->getNombreMoral())) . ",";
                    }
                    $json .= '"TieneSobreseimiento":' . json_encode($imputadosCarpetas[0]->getTieneSobreseimiento()) . ",";
                    $etapasProcesalesDto = new EtapasprocesalesDTO();
                    $etapasProcesalesDto->setCveEtapaProcesal($imputadosCarpetas[0]->getCveEtapaProcesal());
                    $etapasProcesalesDto = $etapasProcesalesDao->selectEtapasprocesales($etapasProcesalesDto, "", $this->proveedor);
                    if ( $etapasProcesalesDto != "" ) {
                        $json .= '"desEtapaProcesal":' . json_encode(utf8_encode($etapasProcesalesDto[0]->getDesEtapaProcesal())) . ",";
                    } else {
                        $json .= '"desEtapaProcesal":"",';
                    }
                } else {
                    $json .= '"nombreImputado":"",';
                    $json .= '"TieneSobreseimiento":"",';
                    $json .= '"desEtapaProcesal":"",';
                }
                if ($ofenidosCarpetasDto != "") {
                    if ($ofenidosCarpetasDto[0]->getCveTipoPersona() == "1") {
                        $json .= '"nombreOfendido":' . json_encode(utf8_encode(($ofenidosCarpetasDto[0]->getNombre()) . " " . ($ofenidosCarpetasDto[0]->getPaterno()) . " " . ($ofenidosCarpetasDto[0]->getMaterno()))) . ",";
                    } else {
                        $json .= '"nombreOfendido":' . json_encode(utf8_encode($ofenidosCarpetasDto[0]->getNombreMoral())) . ",";
                    }
                } else {
                    $json .= '"nombreOfendido":"",';
                }
                if ($delitosCarpetasDto != "" && $rsDesDelito != "") {
                    $json .= '"nombreDelito":' . json_encode(utf8_encode($rsDesDelito[0]->getDesDelito()));
                } else {
                    $json .= '"nombreDelito":""';
                }
                $json .= "}";   
                $r ++;
                if ($r <= count($impoFedelCarpetasDto)) {
                    $json .= ",";
                }
            }
            $json .= ']';
            $json .= "}";
        } else {
            $json .= '{"status":"Fail",';
            $json .= '"totalCount":"0"';
            $json .= '"msj":"No se encontraron resultados"}';
        }
        return $json;
    }
    
}

?>