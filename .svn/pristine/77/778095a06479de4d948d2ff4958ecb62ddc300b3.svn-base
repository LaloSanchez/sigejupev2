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
//Países
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
//Dialecto Indígena
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/dialectoindigena/DialectoindigenaDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/dialectoindigena/DialectoindigenaDAO.Class.php");
//Tipo Familia Lingüística
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipofamilialinguistica/TipofamilialinguisticaDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tipofamilialinguistica/TipofamilialinguisticaDAO.Class.php");
//Interpretes
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/interpretes/InterpretesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/interpretes/InterpretesDAO.Class.php");
//Estados Psicofísicos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estadospsicofisicos/EstadospsicofisicosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estadospsicofisicos/EstadospsicofisicosDAO.Class.php");
//Grupos Étnicos
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
//Clasificación Delito Orden
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
//Ámbitos
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
                 * Consultar la etapa procesal de la carpeta en la que será registrado
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
                if ($cveEtapaProcesalActual == 1 && $cveEtapaProcesalFinal == 3) {
                    $error = true;
                    $msg[] = array("No se puede copiar a un imputado de Etapa Auxiliar a Etapa de Juicio directamente, favor de verificar");
                } else {
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

                        /*
                         * Eliminar logicamente la relacion impofedel del imputado eliminado
                         */
//                        $impofedelCarpetasDto = new ImpofedelcarpetasDTO();
//                        $impofedelCarpetasDao = new ImpofedelcarpetasDAO();
//                        $impofedelCarpetasDto->setIdImputadoCarpeta($imputadoDto->getIdImputadoCarpeta());
//                        $impofedelCarpetasDto = $impofedelCarpetasDao->selectImpofedelcarpetas($impofedelCarpetasDto, "", $this->proveedor);
//                        if($impofedelCarpetasDto != ""){
//                            
//                            for ( $i = 0; $i < count($impofedelCarpetasDto); $i++ ) {
//                                $impofedel = new ImpofedelcarpetasDTO();
//                                $impofedel->setIdImpOfeDelCarpeta($impofedelCarpetasDto[$i]->getIdImpOfeDelCarpeta());
//                                $impofedel->setActivo("N");
//                                $impofedel = $impofedelCarpetasDao->updateImpofedelcarpetas($impofedel, $this->proveedor);
//                                if($impofedel != ""){
//                                    /*
//                                     * Eliminar logicamente el delito existente en la relacion impofedel
//                                     */
//                                    $impofedelDelitosTmp = new ImpofedelcarpetasDTO;
//                                    $impofedelDelitosTmp->setIdDelitoCarpeta($impofedel[0]->getIdDelitoCarpeta());
//                                    $impofedelDelitosTmp->setActivo("S");
//                                    $impofedelDelitosTmp = $impofedelCarpetasDao->selectImpofedelcarpetas($impofedelDelitosTmp, "", $this->proveedor);
//                                    if ( $impofedelDelitosTmp == "" ) {
//                                        $delitoCarpetaDto = new DelitoscarpetasDTO();
//                                        $delitosCarpetasDao = new DelitoscarpetasDAO();
//                                        $delitoCarpetaDto->setIdDelitoCarpeta($impofedel[0]->getIdDelitoCarpeta());
//                                        $delitoCarpetaDto->setActivo("N");
//                                        $delitoCarpetaDto = $delitosCarpetasDao->updateDelitoscarpetas($delitoCarpetaDto, $this->proveedor);
//                                        if($delitoCarpetaDto != ""){
//                                            $error = false;
//                                            $msg[] = array("Se elimina el delito asociado al imputado");
//                                        } else {
//                                            $error = true;
//                                            $msg[] = array("Ocurrio un error al eliminar el delito asociado al imputado");
//                                        }
//                                    } else {
//                                        $msg[] = array("Aun existe relacion impofedel para el delito, no se eliminara");
//                                    }
//                                    
//                                    $error = false;
//                                    $msg[] = array("Se elimina la relacion entre imputado sujeto pasivo del delito y delito");
//                                    /*
//                                     * Verificar si ya no existe relacion impofedel con el ofendido
//                                     */
//                                    $impofedelTmp = new ImpofedelcarpetasDTO;
//                                    $impofedelTmp->setIdOfendidoCarpeta($impofedel[0]->getIdOfendidoCarpeta());
//                                    $impofedelTmp->setActivo("S");
//                                    $impofedelTmp = $impofedelCarpetasDao->selectImpofedelcarpetas($impofedelTmp, "", $this->proveedor);
//                                    if($impofedelTmp == "") {
//                                        /*
//                                         * Eliminar logicamente al ofendido ya que no hay relacion impofedel
//                                         */
//                                        
//                                    } else {
//                                        $msg[] = array("Aun existe relacion impofedel con el sujeto pasivo del delito, no se eliminara");
//                                    }
//                                } else {
//                                    $error = true;
//                                    $msg[] = array("No se pudo eliminar la relacion entre imputado sujeto pasivo del delito y delito");
//                                }
//                            }
//                            
//                        } else {
//                            $msg[] = array("No hay relacion impofedel con el imputado seleccionado");
//                        }
                        /*
                         * Consultar los imputados de la carpeta actual, si ya no hay imputados activo
                         * terminar la carpeta, si aún hay imputados activos actualizar
                         * la ponderación y número de imputados de la carpeta
                         */
//                        $imputadosCarpetas = new ImputadoscarpetasDTO();
//                        $imputadoCarpetaDao = new ImputadoscarpetasDAO();
//                        $imputadosCarpetas->setIdCarpetaJudicial($ImputadoscarpetasDto->getIdCarpetaJudicial());
//                        $imputadosCarpetas->setActivo("S");
//                        $imputadosCarpetas->setTieneSobreseimiento("N");
//                        $imputadosCarpetas = $imputadoCarpetaDao->selectImputadoscarpetas($imputadosCarpetas, "", $this->proveedor);
//                        if($imputadosCarpetas != "") {
                        /*
                         * Si aún hay imputados, actualizar la ponderacion y numero de imputados de
                         * la carpeta
                         */
//                            $ponderacionCarpeta = 0;
//                            $pesoDelito = 0;
//                            $pesoImputado = 0;
//                            $pesoOfendido = 0;
//                            $numDelitos = 0;
//                            $numImputados = count($imputadosCarpetas);
//                            $impofedelCarpetaDto = new ImpofedelcarpetasDTO();
//                            $impofedelCarpetaDao = new ImpofedelcarpetasDAO();
//                            $delitosCarpetasDao = new DelitoscarpetasDAO();
//                            $delitosDao = new DelitosDAO();
//                            $impofedelCarpetaDto->setIdImputadoCarpeta($imputadosCarpetas[0]->getIdImputadoCarpeta());
//                            $impofedelCarpetaDto->setActivo("S");
//                            $impofedelCarpetaDto = $impofedelCarpetaDao->selectImpofedelcarpetas($impofedelCarpetaDto, "", $this->proveedor);
//                            if ($impofedelCarpetaDto != ""){
//                                
//                                for( $x = 0; $x < count($impofedelCarpetaDto); $x++ ) {
//                                    
//                                    $delitosCarpetasDto = new DelitoscarpetasDTO();
//                                    $delitosCarpetasDto->setIdDelitoCarpeta($impofedelCarpetaDto[$x]->getIdDelitoCarpeta());
//                                    $delitosCarpetasDto->setActivo("S");
//                                    $delitosCarpetasDto = $delitosCarpetasDao->selectDelitoscarpetas($delitosCarpetasDto, "", $this->proveedor);
//                                    if($delitosCarpetasDto != ""){
//                                        for($d = 0; $d < count($delitosCarpetasDto); $d++ ) {
//                                            $delitosDto = new DelitosDTO();
//                                            $delitosDto->setCveDelito($delitosCarpetasDto[$d]->getCveDelito());
//                                            $delitosDto->setActivo("S");
//                                            $delitosDto = $delitosDao->selectDelitos($delitosDto, "", $this->proveedor);
//                                            if ( $delitosDto != "" ) {
//                                                for ($y = 0; $y < count($delitosDto); $y++ ) {
//                                                    $pesoDelito += $delitosDto[$y]->getPeso();
//                                                }
//                                            }
//                                        }
//                                    }
//                                    $pesoImputado += 1;
//                                    $pesoOfendido += 1;
//                                }
//                            }
//                            
//                            $delitosCarpetaDto = new DelitoscarpetasDTO();
//                            $delitosCarpetaDto->setIdCarpetaJudicial($ImputadoscarpetasDto->getIdCarpetaJudicial());
//                            $delitosCarpetaDto->setActivo("S");
//                            $delitosCarpetaDto = $delitosCarpetasDao->selectDelitoscarpetas($delitosCarpetaDto, "", $this->proveedor);
//                            if($delitosCarpetaDto != ""){
//                                $numDelitos = count($delitosCarpetaDto);
//                            }
//                            
//                            $ponderacionCarpeta = $pesoImputado + $pesoOfendido + $pesoDelito;
//                            $carpetasDto = new CarpetasjudicialesDTO();
//                            $carpetasDao = new CarpetasjudicialesDAO();
//                            $carpetasDto->setIdCarpetaJudicial($ImputadoscarpetasDto->getIdCarpetaJudicial());
//                            $carpetasDto->setPonderacion($ponderacionCarpeta);
//                            $carpetasDto->setNumImputados($numImputados);
//                            $carpetasDto->setNumDelitos($numDelitos);
//                            $carpetasDto = $carpetasDao->updateCarpetasjudiciales($carpetasDto, $this->proveedor);
//                            if ($carpetasDto != "") {
//                                $error = false;
//                                $msg[] = array("Se actualiza el peso y numero de imputados de la carpeta origen");
//                            } else {
//                                $error = true;
//                                $msg[] = array("Ocurrio un error al actualizar el peso y numero de imputados de la carpeta origen");
//                            }
//                        } else {
//                            
//                            //$fechaActual = date("Y-m-d");
//                            $carpetasDto = new CarpetasjudicialesDTO();
//                            $carpetasDao = new CarpetasjudicialesDAO();
//                            $carpetasDto->setIdCarpetaJudicial($ImputadoscarpetasDto->getIdCarpetaJudicial());
//                            $carpetasDto->setFechaActualizacion($fechaActual);
//                            //$carpetasDto->setCveConclucion(14);
//                            $carpetasDto->setFechaTermino($fechaActual);
//                            $carpetasDto->setCveEstatusCarpeta(2);
//                            $carpetasDto = $carpetasDao->updateCarpetasjudiciales($carpetasDto, $this->proveedor);
//                            if ($carpetasDto != "") {
//                                $error = false;
//                                $msg[] = array("Se termina la carpeta judicial origen debido a que ya no hay imputados activos");
//                            } else {
//                                $error = true;
//                                $msg[] = array("Ocurrio un error al termina la carpeta judicial");
//                            }
//                        }
                    } else {
                        $msg[] = array("Ocurrio un error al copiar los datos del imputado hacia la carpeta seleccionada");
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
                     * Verificar si se le asigna sobreseimiento al imputado para agregar la terminacion
                     * correspondiente
                     */
//                    if ( $ImputadoscarpetasDto[0]->getTieneSobreseimiento() == "S" ) {
//                        $conclusionesDto = new ConclusionesDTO();
//                        $conclusionesDto->setActivo("S");
//                        $cveConclusiones = 0;
//                        $conclusionesDto->setDesConclusion("SOBRESIMIENTO");
//                        if( $ImputadoscarpetasDto[0]->getCveEtapaProcesal() == 3 ){
//                            $conclusionesDto->setJuicio("S");
//                        } else {
//                            $conclusionesDto->setJuicio("N");
//                        }
//                        $conclusionesDto = $conclusionesDao->selectConclusiones($conclusionesDto, "", $this->proveedor);
//                        if ( $conclusionesDto != "" ) {
//                            $cveConclusiones = $conclusionesDto[0]->getCveConclusion();
//                        }
//                        $imputadosCarpetasConclusionesDto = new ImputadoscarpetasconclusionesDTO();
//                        $imputadosCarpetasConclusionesDto->setIdImputadoCarpeta($ImputadoscarpetasDto[0]->getIdImputadoCarpeta());
//                        $imputadosCarpetasConclusionesDto->setActivo("S");
//                        
//                    }
                    /*
                     * Verificar si todos los imputados pertenecientes a la carpeta
                     * judicial tienen sobreseimiento para proceder a terminar
                     * dicha carpeta
                     */
                    $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                    $carpetasJudicialesDto->setIdCarpetaJudicial($ImputadoscarpetasDto[0]->getIdCarpetaJudicial());
                    if ($this->validaSobreseimiento($carpetasJudicialesDto, $this->proveedor)) {
                        $msg[] = array("Se ha terminado la carpeta judicial debido a que todos los imputados tienen sobreseimiento");
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
                 * Si sólo hay un imputado indicar al usuario que la carpeta judicial
                 * debe tener al menos un imputado activo
                 */

                $imputadosTmp = new ImputadoscarpetasDTO();
                $imputadosTmp->setIdCarpetaJudicial($rsImputados[0]->getIdCarpetaJudicial());
                $imputadosTmp->setActivo("S");
                $imputadosTmp->setTieneSobreseimiento("N");
                $imputadosTmp = $imputadoscarpetasDao->selectImputadoscarpetas($imputadosTmp, "", $this->proveedor);
                if ($imputadosTmp != "") {
                    $numImputados = count($imputadosTmp);
                } else {
                    $numImputados = 0;
                }
                if ($numImputados > 1) {

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
                    // $delitoscarpetasDto->setActivo("S");
                    $delitoscarpetasDao = new DelitoscarpetasDAO();
                    $delitoscarpetasDto = $delitoscarpetasDao->selectDelitoscarpetas($delitoscarpetasDto, "");
                    //var_dump($delitoscarpetasDto);
                    if ($delitoscarpetasDto != "") {
                        foreach ($delitoscarpetasDto as $dca) {
                            $delitosDto = new DelitosDTO();
                            $delitosDto->setCveDelito($dca->getcveDelito());
                            //$delitosDto->setActivo('S');

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
                        // $delitosDto->setActivo('S');


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
    #Descripción: GetPaginas de la consulta de mujeres en prisión
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

    /* --------------------- GET PÁGINAS CONSULTA DE IMPUTADOS (Varias Tablas) */

    public function getPaginasImpConsulta($ImputadoscarpetasDto, $param) {

        $ImputadoscarpetasDao = new ImputadoscarpetasDAO();
        $ImputadoscarpetasDto->setActivo("");
        $ImputadoscarpetasDto->setCveTipoPersona("");

        $fields = " count(ic.idImputadoCarpeta) as totalCount  ";
        $orden = "  ic ";
        $orden.= " LEFT JOIN tblcarpetasjudiciales AS cj  ";
        $orden.= " ON cj.idCarpetaJudicial = ic.idCarpetaJudicial  ";
        $orden.= " LEFT JOIN tbljuzgados AS j ";
        $orden.= " ON j.cveJuzgado=cj.cveJuzgado ";
        $orden.= " LEFT JOIN tbltiposcarpetas AS tc ";
        $orden.= " ON tc.cveTipoCarpeta = cj.cveTipoCarpeta  ";
        $orden.= " LEFT JOIN tbldomiciliosimputadoscarpetas AS dic ";
        $orden.= " ON ic.idImputadoCarpeta = dic.idImputadoCarpeta  ";
        $orden.= " LEFT JOIN tblpaises AS  p ";
        $orden.= " ON p.cvePais = dic.cvePais  ";
        $orden.= " LEFT JOIN tblestados AS e ";
        $orden.= " ON e.cveEstado = dic.cveEstado ";
        $orden.= " LEFT JOIN tblmunicipios AS m ";
        $orden.= " ON m.cveMunicipio = dic.cveMunicipio ";
        $orden.= " WHERE ic.activo = 'S' ";
        $orden.= " AND dic.activo = 'S' ";
        $long=0;
        if ($ImputadoscarpetasDto->getNombre() != "") {
            $nombres = explode(' ', trim($ImputadoscarpetasDto->getNombre()));
            $long=count($nombres);
            $nombre=$nombres[0];
            $orden.= " AND (";
            $orden.= "(ic.nombre LIKE '%" .$nombre. "%' OR ic.paterno LIKE '%".$nombre. "%' OR ic.materno LIKE '%".$nombre."%')";
            if($long>1){
                $paterno=$nombres[1];
                $orden.= "OR (ic.nombre LIKE '%" .$paterno. "%' OR ic.paterno LIKE '%".$paterno. "%' OR ic.materno LIKE '%".$paterno."%')"; 
            }else{$paterno='';}
            if($long>2){
                $materno=$nombres[2];
                $orden.= " OR(ic.nombre LIKE '%" .$materno. "%' OR ic.paterno LIKE '%".$materno. "%' OR ic.materno LIKE '%".$materno."%')"; 
            }else{$materno='';}
            $orden.= " OR (ic.nombreMoral LIKE '%".$nombre."% %".$paterno."% %".$materno."%')";
            $orden.= " OR (CONCAT_WS(' ', ic.nombre, ic.paterno, ic.materno, ic.nombreMoral) LIKE '%" . $ImputadoscarpetasDto->getNombre() . "%')";
            $orden.= ")";
        }
        $orden.= " UNION ALL ";
        $orden.= " SELECT count(iex.idImputadoExhorto) as totalCount ";
        $orden.= " FROM  ";
        $orden.= " tbljuzgados AS j ";
        $orden.= " LEFT JOIN tblexhortos exh ";
        $orden.= " ON j.cveJuzgado=exh.cveJuzgado  ";
        $orden.= " LEFT JOIN tblimputadosexhortos AS iex ";
        $orden.= " ON exh.idExhorto = iex.idExhorto  ";
        $orden.= " LEFT JOIN tblpaises AS p  ";
        $orden.= " ON p.cvePais = iex.cvePais  ";
        $orden.= " LEFT JOIN tblestados AS e ";
        $orden.= " ON e.cveEstado = iex.cveEstado  ";
        $orden.= " LEFT JOIN tblmunicipios m ";
        $orden.= " ON m.cveMunicipio = iex.cveMunicipio  ";
        $orden.= " WHERE iex.activo='S' ";
//        if ($ImputadoscarpetasDto->getNombre() != "") {
//            $orden.= " AND CONCAT_WS(' ', iex.nombre, iex.paterno, iex.materno, iex.nombreMoral) LIKE'%" . $ImputadoscarpetasDto->getNombre() . "%' ";
//        }
        if ($ImputadoscarpetasDto->getNombre() != "") {
            $nombres = explode(' ', trim($ImputadoscarpetasDto->getNombre()));
            $long=count($nombres);
            $nombre=$nombres[0];
            $orden.= " AND (";
            $orden.= "(iex.nombre LIKE '%" .$nombre. "%' OR iex.paterno LIKE '%".$nombre. "%' OR iex.materno LIKE '%".$nombre."%')";
            if($long>1){
                $paterno=$nombres[1];
                $orden.= " OR(iex.nombre LIKE '%" .$paterno. "%' OR iex.paterno LIKE '%".$paterno. "%' OR iex.materno LIKE '%".$paterno."%')"; 
            }else{$paterno='';}
            if($long>2){
                $materno=$nombres[2];
                $orden.= " OR(iex.nombre LIKE '%" .$materno. "%' OR iex.paterno LIKE '%".$materno. "%' OR iex.materno LIKE '%".$materno."%')"; 
            }else{$materno='';}
            $orden.= " OR (iex.nombreMoral LIKE '%".$nombre."% %".$paterno."% %".$materno."%')";
            $orden.= " OR (CONCAT_WS(' ', iex.nombre, iex.paterno, iex.materno, iex.nombreMoral) LIKE '%" . $ImputadoscarpetasDto->getNombre() . "%')";
            $orden.= ")";
        }



//        if($ImputadoscarpetasDto->getNombre()!=""){
//        $orden.= " AND (iex.nombre like '%".$ImputadoscarpetasDto->getNombre()."%' OR iex.nombreMoral like '%".$ImputadoscarpetasDto->getNombre()."%') ";
//        }
//        if($ImputadoscarpetasDto->getPaterno()!=""){
//        $orden.= " AND iex.paterno like '%".$ImputadoscarpetasDto->getPaterno()."%' ";
//        }
//        if($ImputadoscarpetasDto->getMaterno()!=""){
//        $orden.= " AND iex.materno like '%".$ImputadoscarpetasDto->getMaterno()."%' ";
//        }
//                                                                                $imputadoscarpetasDto,$proveedor = null, $orden = "", $param = null, $fields = null
        $imputadoscarpetasDto = new ImputadoscarpetasDTO();
        $response = $ImputadoscarpetasDao->selectImputadoscarpetasPag($imputadoscarpetasDto, null, $orden, null, $fields);
        //print_r($response);
        $numTot = 0;
        foreach ($response as $total) {
            $numTot = $numTot + $total["totalCount"];
        }

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
        } else {
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

    /*     * ******************* CONSULTA DE MUJERES EN PRISIÓN ************************************************************** */
    #Descripción: Consulta de mujeres en prisión
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
                        $ImputadossancionesDto->setCveTipoSancion(1);//Prisión
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

    /*     * ******************* TERMINO DE CONSULTA DE MUJERES EN PRISIÓN**************************************************** */

    /*     * ******************* CONSULTA DE IMPUTADOS POR NOMBRE ************************************************************** */
    #Nombre: Consulta de imputados por nombre
    #Criterios: nombre, paterno, materno
    #Descripción: Se consultan los imputados de carpetas judiciales y exhortos, obteniendo su nombre, direccion y datos del expediente.

    public function consultarImputadosNombre($ImputadoscarpetasDto, $param) {

        $ImputadoscarpetasDao = new ImputadoscarpetasDAO();
        $ImputadoscarpetasDto->setActivo("");
        $ImputadoscarpetasDto->setCveTipoPersona("");

        $fields = " ic.idImputadoCarpeta as id, cj.numero, cj.anio, tc.desTipoCarpeta, ic.nombre AS NombrePer,ic.paterno AS PaternoPer, ic.materno, ic.nombreMoral,ic.cveTipoPersona, dic.direccion, p.desPais, e.desEstado, m.desMunicipio, 'CJ' AS TipoOrigen,cj.carpetaInv,cj.nuc,j.desjuzgado,p.cvePais,dic.estado, dic.municipio ";

        $orden = "  ic ";
        $orden.= " LEFT JOIN tblcarpetasjudiciales AS cj  ";
        $orden.= " ON cj.idCarpetaJudicial = ic.idCarpetaJudicial  ";
        $orden.= " LEFT JOIN tbljuzgados AS j ";
        $orden.= " ON j.cveJuzgado=cj.cveJuzgado ";
        $orden.= " LEFT JOIN tbltiposcarpetas AS tc ";
        $orden.= " ON tc.cveTipoCarpeta = cj.cveTipoCarpeta  ";
        $orden.= " LEFT JOIN tbldomiciliosimputadoscarpetas AS dic ";
        $orden.= " ON ic.idImputadoCarpeta = dic.idImputadoCarpeta  ";
        $orden.= " LEFT JOIN tblpaises AS  p ";
        $orden.= " ON p.cvePais = dic.cvePais  ";
        $orden.= " LEFT JOIN tblestados AS e ";
        $orden.= " ON e.cveEstado = dic.cveEstado ";
        $orden.= " LEFT JOIN tblmunicipios AS m ";
        $orden.= " ON m.cveMunicipio = dic.cveMunicipio ";
        $orden.= " WHERE ic.activo = 'S' ";
        $orden.= " AND dic.activo = 'S' ";
        $long=0;
        if ($ImputadoscarpetasDto->getNombre() != "") {
            $nombres = explode(' ', trim($ImputadoscarpetasDto->getNombre()));
            $long=count($nombres);
            $nombre=$nombres[0];
            $orden.= " AND (";
            $orden.= "(ic.nombre LIKE '%" .$nombre. "%' OR ic.paterno LIKE '%".$nombre. "%' OR ic.materno LIKE '%".$nombre."%')";
            if($long>1){
                $paterno=$nombres[1];
                $orden.= "OR (ic.nombre LIKE '%" .$paterno. "%' OR ic.paterno LIKE '%".$paterno. "%' OR ic.materno LIKE '%".$paterno."%')"; 
            }else{$paterno='';}
            if($long>2){
                $materno=$nombres[2];
                $orden.= " OR(ic.nombre LIKE '%" .$materno. "%' OR ic.paterno LIKE '%".$materno. "%' OR ic.materno LIKE '%".$materno."%')"; 
            }else{$materno='';}
            $orden.= " OR (ic.nombreMoral LIKE '%".$nombre."% %".$paterno."% %".$materno."%')";
            $orden.= " OR (CONCAT_WS(' ', ic.nombre, ic.paterno, ic.materno, ic.nombreMoral) LIKE '%" . $ImputadoscarpetasDto->getNombre() . "%')";
            $orden.= ")";
        }
        $orden.= " UNION ALL ";
        $orden.= " SELECT iex.idImputadoExhorto as id, exh.numExhorto numero, exh.aniExhorto anio, 'NUM EXHORTO ' AS desTipoCarpeta, iex.nombre AS NombrePer,iex.paterno AS PaternoPer, iex.materno, iex.nombreMoral,iex.cveTipoPersona, iex.domicilio AS direccion, p.desPais, e.desEstado, m.desMunicipio, 'Exh' AS TipoOrigen,' ' As carpetaInv,' ' As nuc,j.desjuzgado, p.cvePais,iex.estado, iex.municipio ";
        $orden.= " FROM  ";
        $orden.= " tbljuzgados AS j ";
        $orden.= " LEFT JOIN tblexhortos exh ";
        $orden.= " ON j.cveJuzgado=exh.cveJuzgado  ";
        $orden.= " LEFT JOIN tblimputadosexhortos AS iex ";
        $orden.= " ON exh.idExhorto = iex.idExhorto  ";
        $orden.= " LEFT JOIN tblpaises AS p  ";
        $orden.= " ON p.cvePais = iex.cvePais  ";
        $orden.= " LEFT JOIN tblestados AS e ";
        $orden.= " ON e.cveEstado = iex.cveEstado  ";
        $orden.= " LEFT JOIN tblmunicipios m ";
        $orden.= " ON m.cveMunicipio = iex.cveMunicipio  ";
        $orden.= " WHERE iex.activo='S' ";
//        if ($ImputadoscarpetasDto->getNombre() != "") {
//            $orden.= " AND CONCAT_WS(' ', iex.nombre, iex.paterno, iex.materno, iex.nombreMoral) LIKE'%" . $ImputadoscarpetasDto->getNombre() . "%' ";
//        }
        if ($ImputadoscarpetasDto->getNombre() != "") {
            $nombres = explode(' ', trim($ImputadoscarpetasDto->getNombre()));
            $long=count($nombres);
            $nombre=$nombres[0];
            $orden.= " AND (";
            $orden.= "(iex.nombre LIKE '%" .$nombre. "%' OR iex.paterno LIKE '%".$nombre. "%' OR iex.materno LIKE '%".$nombre."%')";
            if($long>1){
                $paterno=$nombres[1];
                $orden.= " OR(iex.nombre LIKE '%" .$paterno. "%' OR iex.paterno LIKE '%".$paterno. "%' OR iex.materno LIKE '%".$paterno."%')"; 
            }else{$paterno='';}
            if($long>2){
                $materno=$nombres[2];
                $orden.= " OR(iex.nombre LIKE '%" .$materno. "%' OR iex.paterno LIKE '%".$materno. "%' OR iex.materno LIKE '%".$materno."%')"; 
            }else{$materno='';}
            $orden.= " OR (iex.nombreMoral LIKE '%".$nombre."% %".$paterno."% %".$materno."%')";
            $orden.= " OR (CONCAT_WS(' ', iex.nombre, iex.paterno, iex.materno, iex.nombreMoral) LIKE '%" . $ImputadoscarpetasDto->getNombre() . "%')";
            $orden.= ")";
        }

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

        //print_r($Imputados).'Imputados---';
    }

    /* -------------------------------------------------------------------------------------------------- */
    #Nombre: Consulta de del detalle de un imputado
    #Criterios: ID (Carpeta Judicial/Exhorto)
    #Descripción: Se consulta el detalle de un imputado (Carpeta Judiciale/Exhortos), obteniendo datos del imputado(personales), direccion y datos del expediente.

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


        $ImputadoscarpetasDto = $ImputadoscarpetasDao->selectImputadoscarpetasPag($ImputadoscarpetasDto);
        //Con paginaciÃ³n en imputados Carpetas
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
                    $json .= '"domicilio":' . json_encode($domicilio) . ",";

                    $json .= '"telefono":' . json_encode(utf8_encode($Imputado->getTelefono())) . ",";

                    $ExhortosDto = new ExhortosDTO();
                    $ExhortosDao = new ExhortosDAO();
                    $ExhortosDto->setIdExhorto($Imputado->getIdExhorto());
                    $ExhortosDto = $ExhortosDao->selectExhortos($ExhortosDto);

//                $TiposCarpetaDto = new TiposcarpetasDTO();
//                $TiposCarpetaDao = new TiposcarpetasDAO();
//                $TiposCarpetaDto->setCveTipoCarpeta($ExhortosDto[0]->getCveTipoCarpeta());
//                $TiposCarpetaDto = $TiposCarpetaDao->selectTiposcarpetas($TiposCarpetaDto);
//                $DesCarpeta=$TiposCarpetaDto[0]->getDesTipoCarpeta();
                    $numero = $ExhortosDto[0]->getNumero();
                    $anio = $ExhortosDto[0]->getAnio();
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

                    //$json .= '"cveConsignacion":' . json_encode(utf8_encode($Imputado->getCveConsignacion())) . ",";
                    //$json .= '"cveEstado":' . json_encode(utf8_encode($Imputado->getCveEstado())) . ",";
                    //$json .= '"cveMunicipio":' . json_encode(utf8_encode($Imputado->getCveMunicipio())) . ",";
                    //$json .= '"cveCereso":' . json_encode(utf8_encode($Imputado->getCveCereso())) . ",";
//                if ($Imputado->getCveEstado() != "" and $Imputado->getCveEstado() != "0") {
//                    $EstadosDto = new EstadosDTO();
//                    $EstadosDao = new EstadosDAO();
//                    $EstadosDto->setCveEstado($Imputado->getCveEstado());
//                    $EstadosDto = $EstadosDao->selectEstados($EstadosDto);
//                    if($EstadosDto!="")
//                    {
//                    $json .= '"estado":' . json_encode(utf8_encode($EstadosDto[0]->getDesEstado())) . ",";
//                    } else{$json .= '"estado": "",';}
//                }
//                else{$json .= '"estado": "",';}
//                
//                if ($Imputado->getCveMunicipio() != "" and $Imputado->getCveMunicipio() != "0") {
//                    $MunicipiosDto = new MunicipiosDTO();
//                    $MunicipiosDao = new MunicipiosDAO();
//                    $MunicipiosDto->setCveMunicipio($Imputado->getCveMunicipio());
//                    $MunicipiosDto = $MunicipiosDao->selectMunicipios($MunicipiosDto);
//                    if($MunicipiosDto!=""){
//                    $json .= '"municipio":' . json_encode(utf8_encode($MunicipiosDto[0]->getDesMunicipio())) . ",";
//                    }else{$json .= '"municipio": "",';}
//                }
//                else{$json .= '"municipio": "",';}
//                                                
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
            $json .= "}]}"; //AgreguÃ© }]
            // echo"Json:---";
            //echo $json;

            return $json;
        } else {
            return "";
        }
    }

    /*     * ******************* TERMINO DE CONSULTA DE IMPUTADOS POR NOMBRE**************************************************** */
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

    /* --------------------- GET PÁGINAS AGRESORES (Varias Tablas) */
    #Nombre: GET Paginas de los agresores
    #Descripción: Relación de la víctima, imputado y delito, obteniendo los imputados cuyo ofendido ha sido víctima
    #de acoso, victima de trata o víctima de violencia de género.
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
    #Descripción: Relación de la víctima, imputado y delito, obteniendo los imputados cuyo ofendido ha sido víctima
    #de acoso, victima de trata o víctima de violencia de género.
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
    #Descripción: Obtención de la información del delito de un imputado

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
        //$json .= "}]}";//AgreguÃ© }]
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
     * se copiarán los datos generales del imputado así como sus domicilios, telefonos
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
                                $msg[] = array(utf8_encode('Ocurrió un error al registrar al imputado destino'));
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
                                    $msg[] = array(utf8_encode('Ocurrió un error al guardar en bitacora la acción realizada por el usuario'));
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
                        
                    } else {
                        $error = true;
                        $msg[] = array(utf8_encode('Ocurrió un error al consultar los datos de la carpeta judicial destino'));
                        $logger->w_onError("**********OCURRIO UN ERROR AL CONSULTAR LOS DATOS DE LA CARPETA JUDICIAL DESTINO");
                    }
                } else {
                    $error = true;
                    $msg[] = array(utf8_encode('Ocurrió un error al consultar los datos del imputado origen'));
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
                                $msg[] = array(utf8_encode('Ocurrió un error al copiar datos de domicilios del imputado origen'));
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
                                    $msg[] = array(utf8_encode('Ocurrió un error al insertar datos de teléfonos'));
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
                                    $msg[] = array(utf8_encode('Ocurrió un error al guardar datos del defensor'));
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
                                    $msg[] = array(utf8_encode('Ocurrió un error al guardar datos de drogas'));
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
                                    $msg[] = array(utf8_encode('Ocurrió un error al guardar datos de tutores'));
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
                                    $msg[] = array(utf8_encode('Ocurrió un error al guardar datos de la nacionalidad'));
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
                                    $msg[] = array(utf8_encode('Ocurrió un error al guardar la acción realizada en bitácora'));
                                }
                            } else {
                                $error = true;
                                $msg[] = array(utf8_encode('Ocurrió un error al actualizar los datos generales del imputado destino'));
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
                    $msg[] = array(utf8_encode("Error al guardar la acción del usuario en bitacora"));
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
                                $msg[] = array(utf8_encode('Ocurrió un error al registrar al imputado destino'));
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
                                    $msg[] = array(utf8_encode('Ocurrió un error al guardar en bitacora la acción realizada por el usuario'));
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
                        $msg[] = array(utf8_encode('Ocurrió un error al consultar los datos de la solicitud de audiencia destino'));
                        $logger->w_onError("**********OCURRIO UN ERROR AL CONSULTAR LOS DATOS DE LA SOLICITUD DE AUDIENCIA DESTINO");
                    }
                } else {
                    $error = true;
                    $msg[] = array(utf8_encode('Ocurrió un error al consultar los datos del imputado origen'));
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
                                $msg[] = array(utf8_encode('Ocurrió un error al copiar datos de domicilios del imputado origen'));
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
                                    $msg[] = array(utf8_encode('Ocurrió un error al insertar datos de teléfonos'));
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
                                    $msg[] = array(utf8_encode('Ocurrió un error al guardar datos del defensor'));
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
                                    $msg[] = array(utf8_encode('Ocurrió un error al guardar datos de drogas'));
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
                                    $msg[] = array(utf8_encode('Ocurrió un error al guardar datos de tutores'));
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
                                    $msg[] = array(utf8_encode('Ocurrió un error al guardar datos de la nacionalidad'));
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
                                    $msg[] = array(utf8_encode('Ocurrió un error al guardar la acción realizada en bitácora'));
                                }
                            } else {
                                $error = true;
                                $msg[] = array(utf8_encode('Ocurrió un error al actualizar los datos generales del imputado destino'));
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
    
}

?>