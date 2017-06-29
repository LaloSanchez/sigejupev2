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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossolicitudes/ImputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadossolicitudes/ImputadossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");


include_once(dirname(__FILE__) . "/../telefonosimputadossolicitudes/TelefonosimputadossolicitudesController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosimputadossolicitudes/TelefonosimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosimputadossolicitudes/TelefonosimputadossolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../defensoresimputadossolicitudes/DefensoresimputadossolicitudesController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresimputadossolicitudes/DefensoresimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresimputadossolicitudes/DefensoresimputadossolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../domiciliosimputadossolicitudes/DomiciliosimputadossolicitudesController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosimputadossolicitudes/DomiciliosimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosimputadossolicitudes/DomiciliosimputadossolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../tutoresimputados/TutoresimputadosController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tutoresimputados/TutoresimputadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tutoresimputados/TutoresimputadosDAO.Class.php");

include_once(dirname(__FILE__) . "/../nacionalidadesimputadossolicitudes/NacionalidadesimputadossolicitudesController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nacionalidadesimputadossolicitudes/NacionalidadesimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nacionalidadesimputadossolicitudes/NacionalidadesimputadossolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../imputadosdrogas/ImputadosdrogasController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosdrogas/ImputadosdrogasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadosdrogas/ImputadosdrogasDAO.Class.php");


include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/cataudiencias/CataudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cataudiencias/CataudienciasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelsolicitudes/ImpofedelsolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/impofedelsolicitudes/ImpofedelsolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/efectosofendidos/EfectosofendidosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/efectosofendidos/EfectosofendidosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciadegenero/ViolenciadegeneroDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciadegenero/ViolenciadegeneroDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciafactoressociales/ViolenciafactoressocialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciafactoressociales/ViolenciafactoressocialesDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciahomicidiosdolosos/ViolenciahomicidiosdolososDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciahomicidiosdolosos/ViolenciahomicidiosdolososDAO.Class.php");
/////////////////////////////////////////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/trataspersonas/TrataspersonasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/trataspersonas/TrataspersonasDAO.Class.php");
/////////////////////////////////////////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexuales/SexualesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexuales/SexualesDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualesconductas/SexualesconductasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexualesconductas/SexualesconductasDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/detallessexualesconductas/DetallessexualesconductasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/detallessexualesconductas/DetallessexualesconductasDAO.Class.php");
/////////////////////////////
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/testigossexuales/TestigossexualesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/testigossexuales/TestigossexualesDAO.Class.php");

//////
class ImputadossolicitudesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarImputadossolicitudes($ImputadossolicitudesDto) {
        $ImputadossolicitudesDto->setidImputadoSolicitud(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getidImputadoSolicitud()))));
        $ImputadossolicitudesDto->setidSolicitudAudiencia(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getidSolicitudAudiencia()))));
        $ImputadossolicitudesDto->setactivo(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getactivo()))));
        $ImputadossolicitudesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getfechaRegistro()))));
        $ImputadossolicitudesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getfechaActualizacion()))));
        $ImputadossolicitudesDto->setdetenido(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getdetenido()))));
        $ImputadossolicitudesDto->setnombre(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getnombre()))));
        $ImputadossolicitudesDto->setpaterno(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getpaterno()))));
        $ImputadossolicitudesDto->setmaterno(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getmaterno()))));
        $ImputadossolicitudesDto->setrfc(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getrfc()))));
        $ImputadossolicitudesDto->setcurp(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getcurp()))));
        $ImputadossolicitudesDto->setcveTipoDetencion(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getcveTipoDetencion()))));
        $ImputadossolicitudesDto->setcveGenero(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getcveGenero()))));
        $ImputadossolicitudesDto->setalias(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getalias()))));
        $ImputadossolicitudesDto->setfechaDeclaracion(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getfechaDeclaracion()))));
        $ImputadossolicitudesDto->setcvePaisNacimiento(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getcvePaisNacimiento()))));
        $ImputadossolicitudesDto->setcveEstadoNacimiento(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getcveEstadoNacimiento()))));
        $ImputadossolicitudesDto->setcveMunicipioNacimiento(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getcveMunicipioNacimiento()))));
        $ImputadossolicitudesDto->setfechaNacimiento(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getfechaNacimiento()))));
        $ImputadossolicitudesDto->setedad(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getedad()))));
        $ImputadossolicitudesDto->setcveTipoPersona(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getcveTipoPersona()))));
        $ImputadossolicitudesDto->setCveTipoReligion(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getCveTipoReligion()))));
        $ImputadossolicitudesDto->setnombreMoral(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getnombreMoral()))));
        $ImputadossolicitudesDto->setcveNivelInstruccion(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getcveNivelInstruccion()))));
        $ImputadossolicitudesDto->setcveEstadoCivil(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getcveEstadoCivil()))));
        $ImputadossolicitudesDto->setcveEspanol(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getcveEspanol()))));
        $ImputadossolicitudesDto->setcveAlfabetismo(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getcveAlfabetismo()))));
        $ImputadossolicitudesDto->setcveDialectoIndigena(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getcveDialectoIndigena()))));
        $ImputadossolicitudesDto->setcveTipoFamiliaLinguistica(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getcveTipoFamiliaLinguistica()))));
        $ImputadossolicitudesDto->setcveOcupacion(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getcveOcupacion()))));
        $ImputadossolicitudesDto->setcveInterprete(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getcveInterprete()))));
        $ImputadossolicitudesDto->setcveEstadoPsicofisico(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getcveEstadoPsicofisico()))));
        $ImputadossolicitudesDto->setfechaImputacion(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getfechaImputacion()))));
        $ImputadossolicitudesDto->setfechaControlDet(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getfechaControlDet()))));
        $ImputadossolicitudesDto->setfecTerminoCons(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getfecTerminoCons()))));
        $ImputadossolicitudesDto->setfecCierreInv(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getfecCierreInv()))));
        $ImputadossolicitudesDto->setestadoNacimiento(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getestadoNacimiento()))));
        $ImputadossolicitudesDto->setmunicipioNacimiento(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getmunicipioNacimiento()))));
        $ImputadossolicitudesDto->setrelacionMoral(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getrelacionMoral()))));
        $ImputadossolicitudesDto->setpersonaMoral(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getpersonaMoral()))));
        $ImputadossolicitudesDto->setcveCereso(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getcveCereso()))));
        $ImputadossolicitudesDto->setCveEtapaProcesal(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getCveEtapaProcesal()))));
        $ImputadossolicitudesDto->setcveTipoReincidencia(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getcveTipoReincidencia()))));
        $ImputadossolicitudesDto->setingresoMensual(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getingresoMensual()))));
        $ImputadossolicitudesDto->setcveGrupoEdnico(strtoupper(str_ireplace("'", "", trim($ImputadossolicitudesDto->getcveGrupoEdnico()))));
        return $ImputadossolicitudesDto;
    }

    public function validarTutores($tutoresimputadosDto) {
        $tutoresimputadosDto->setIdImputadoSolicitud(strtoupper(str_ireplace("'", "", trim($tutoresimputadosDto->getIdImputadoSolicitud()))));
        $tutoresimputadosDto->setCveGenero(strtoupper(str_ireplace("'", "", trim($tutoresimputadosDto->getCveGenero()))));
        $tutoresimputadosDto->setCveTipoTutor(strtoupper(str_ireplace("'", "", trim($tutoresimputadosDto->getCveTipoTutor()))));
        $tutoresimputadosDto->setNombre(strtoupper(str_ireplace("'", "", trim($tutoresimputadosDto->getNombre()))));
        $tutoresimputadosDto->setPaterno(strtoupper(str_ireplace("'", "", trim($tutoresimputadosDto->getPaterno()))));
        $tutoresimputadosDto->setMaterno(strtoupper(str_ireplace("'", "", trim($tutoresimputadosDto->getMaterno()))));
        $tutoresimputadosDto->setFechaNacimiento(strtoupper(str_ireplace("'", "", trim($tutoresimputadosDto->getFechaNacimiento()))));
        $tutoresimputadosDto->setEdad(strtoupper(str_ireplace("'", "", trim($tutoresimputadosDto->getEdad()))));
        return $tutoresimputadosDto;
    }

    public function validarDomicilios($domiciliosimputadossolicitudesDto) {
        $domiciliosimputadossolicitudesDto->setIdImputadoSolicitud(strtoupper(str_ireplace("'", "", trim($domiciliosimputadossolicitudesDto->getIdImputadoSolicitud()))));
        $domiciliosimputadossolicitudesDto->setCvePais(strtoupper(str_ireplace("'", "", trim($domiciliosimputadossolicitudesDto->getCvePais()))));
        $domiciliosimputadossolicitudesDto->setCveEstado(strtoupper(str_ireplace("'", "", trim($domiciliosimputadossolicitudesDto->getCveEstado()))));
        $domiciliosimputadossolicitudesDto->setCveMunicipio(strtoupper(str_ireplace("'", "", trim($domiciliosimputadossolicitudesDto->getCveMunicipio()))));
        $domiciliosimputadossolicitudesDto->setDireccion(strtoupper(str_ireplace("'", "", trim($domiciliosimputadossolicitudesDto->getDireccion()))));
        $domiciliosimputadossolicitudesDto->setColonia(strtoupper(str_ireplace("'", "", trim($domiciliosimputadossolicitudesDto->getColonia()))));
        $domiciliosimputadossolicitudesDto->setNumInterior(strtoupper(str_ireplace("'", "", trim($domiciliosimputadossolicitudesDto->getNumInterior()))));
        $domiciliosimputadossolicitudesDto->setNumExterior(strtoupper(str_ireplace("'", "", trim($domiciliosimputadossolicitudesDto->getNumExterior()))));
        $domiciliosimputadossolicitudesDto->setCp(strtoupper(str_ireplace("'", "", trim($domiciliosimputadossolicitudesDto->getCp()))));
        $domiciliosimputadossolicitudesDto->setLatitud(strtoupper(str_ireplace("'", "", trim($domiciliosimputadossolicitudesDto->getLatitud()))));
        $domiciliosimputadossolicitudesDto->setLongitud(strtoupper(str_ireplace("'", "", trim($domiciliosimputadossolicitudesDto->getLongitud()))));
        $domiciliosimputadossolicitudesDto->setRecidenciaHabitual(strtoupper(str_ireplace("'", "", trim($domiciliosimputadossolicitudesDto->getRecidenciaHabitual()))));
        $domiciliosimputadossolicitudesDto->setEstado(strtoupper(str_ireplace("'", "", trim($domiciliosimputadossolicitudesDto->getEstado()))));
        $domiciliosimputadossolicitudesDto->setMunicipio(strtoupper(str_ireplace("'", "", trim($domiciliosimputadossolicitudesDto->getMunicipio()))));
        $domiciliosimputadossolicitudesDto->setCveConvivencia(strtoupper(str_ireplace("'", "", trim($domiciliosimputadossolicitudesDto->getCveConvivencia()))));
        $domiciliosimputadossolicitudesDto->setCveTipoDeVivienda(strtoupper(str_ireplace("'", "", trim($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda()))));
        return $domiciliosimputadossolicitudesDto;
    }

    public function validarDefensores($defensoresimputadossolicitudesDto) {
        $defensoresimputadossolicitudesDto->setIdImputadoSolicitud(strtoupper(str_ireplace("'", "", trim($defensoresimputadossolicitudesDto->getIdImputadoSolicitud()))));
        $defensoresimputadossolicitudesDto->setCveTipoDefensor(strtoupper(str_ireplace("'", "", trim($defensoresimputadossolicitudesDto->getCveTipoDefensor()))));
        $defensoresimputadossolicitudesDto->setNombre(strtoupper(str_ireplace("'", "", trim($defensoresimputadossolicitudesDto->getNombre()))));
        $defensoresimputadossolicitudesDto->setTelefono(strtoupper(str_ireplace("'", "", trim($defensoresimputadossolicitudesDto->getTelefono()))));
        $defensoresimputadossolicitudesDto->setCelular(strtoupper(str_ireplace("'", "", trim($defensoresimputadossolicitudesDto->getCelular()))));
        $defensoresimputadossolicitudesDto->setEmail(strtoupper(str_ireplace("'", "", trim($defensoresimputadossolicitudesDto->getEmail()))));
        return $defensoresimputadossolicitudesDto;
    }

    public function validarTelefonos($telefenosimputadossolicitudesDto) {
        $telefenosimputadossolicitudesDto->setIdImputadoSolicitud(strtoupper(str_ireplace("'", "", trim($telefenosimputadossolicitudesDto->getIdImputadoSolicitud()))));
        $telefenosimputadossolicitudesDto->setTelefono(strtoupper(str_ireplace("'", "", trim($telefenosimputadossolicitudesDto->getTelefono()))));
        $telefenosimputadossolicitudesDto->setCelular(strtoupper(str_ireplace("'", "", trim($telefenosimputadossolicitudesDto->getCelular()))));
        $telefenosimputadossolicitudesDto->setEmail(strtoupper(str_ireplace("'", "", trim($telefenosimputadossolicitudesDto->getEmail()))));
        return $telefenosimputadossolicitudesDto;
    }

    public function validarNacionalidadesimputadossolicitudes($NacionalidadesimputadossolicitudesDto) {
        $NacionalidadesimputadossolicitudesDto->setidNacionalidadImputadoSolicitud(strtoupper(str_ireplace("'", "", trim($NacionalidadesimputadossolicitudesDto->getidNacionalidadImputadoSolicitud()))));
        $NacionalidadesimputadossolicitudesDto->setcvePais(strtoupper(str_ireplace("'", "", trim($NacionalidadesimputadossolicitudesDto->getcvePais()))));
        $NacionalidadesimputadossolicitudesDto->setactivo(strtoupper(str_ireplace("'", "", trim($NacionalidadesimputadossolicitudesDto->getactivo()))));
        $NacionalidadesimputadossolicitudesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($NacionalidadesimputadossolicitudesDto->getfechaRegistro()))));
        $NacionalidadesimputadossolicitudesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($NacionalidadesimputadossolicitudesDto->getfechaActualizacion()))));
        $NacionalidadesimputadossolicitudesDto->setidImputadoSolicitud(strtoupper(str_ireplace("'", "", trim($NacionalidadesimputadossolicitudesDto->getidImputadoSolicitud()))));
        return $NacionalidadesimputadossolicitudesDto;
    }

    public function validarImputadosdrogas($ImputadosdrogasDto) {
        $ImputadosdrogasDto->setidImputadoDroga(strtoupper(str_ireplace("'", "", trim($ImputadosdrogasDto->getidImputadoDroga()))));
        $ImputadosdrogasDto->setidImputadoSolicitud(strtoupper(str_ireplace("'", "", trim($ImputadosdrogasDto->getidImputadoSolicitud()))));
        $ImputadosdrogasDto->setcveDroga(strtoupper(str_ireplace("'", "", trim($ImputadosdrogasDto->getcveDroga()))));
        $ImputadosdrogasDto->setactivo(strtoupper(str_ireplace("'", "", trim($ImputadosdrogasDto->getactivo()))));
        $ImputadosdrogasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($ImputadosdrogasDto->getfechaRegistro()))));
        $ImputadosdrogasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($ImputadosdrogasDto->getfechaActualizacion()))));
        return $ImputadosdrogasDto;
    }

    public function consultaImputadossolicitudes($ImputadossolicitudesDto, $proveedor = null) {
        $ImputadossolicitudesDto = $this->validarImputadossolicitudes($ImputadossolicitudesDto);
        $ImputadossolicitudesDao = new ImputadossolicitudesDAO();
        $ImputadossolicitudesDto = $ImputadossolicitudesDao->selectImputadossolicitudes($ImputadossolicitudesDto, $proveedor);
        return $ImputadossolicitudesDto;
    }

    public function consultaImputadossolicitudesTotal($ImputadossolicitudesDto, $proveedor = null) {
        $mensaje = array();
        $error = false;
        $verificaConsignacion = false;

        $ImputadossolicitudesDto = $this->validarImputadossolicitudes($ImputadossolicitudesDto);
        $ImputadossolicitudesDao = new ImputadossolicitudesDAO();
        $solicitudAudienciasDao = new solicitudesAudienciasDAO();
        $solicitudAudienciasDto = new solicitudesAudienciasDTO();

        $rsImputados = $ImputadossolicitudesDao->selectImputadossolicitudes($ImputadossolicitudesDto, $proveedor);
        if ($rsImputados != "") {
            $solicitudAudienciasDto->setIdSolicitudAudiencia($ImputadossolicitudesDto->getIdSolicitudAudiencia());
            $rsSolicitud = $solicitudAudienciasDao->selectSolicitudesaudiencias($solicitudAudienciasDto, $proveedor);
            $rsImputadosSolicitud = $rsSolicitud[0]->getNumImputados();
            $rsTotalImputados = count($rsImputados);
            if ($rsTotalImputados == $rsImputadosSolicitud) {
                foreach ($rsImputados as $rsImputado) {
                    $domiciliosImputadosDao = new DomiciliosimputadossolicitudesDAO();
                    $domiciliosImputadosDto = new DomiciliosimputadossolicitudesDTO();

                    $defensoresImputadosDao = new DefensoresimputadossolicitudesDAO();
                    $defensoresImputadosDto = new DefensoresimputadossolicitudesDTO();

                    $nacionalidadesImputadosDao = new NacionalidadesimputadossolicitudesDAO();
                    $nacionalidadesImputadosDto = new NacionalidadesimputadossolicitudesDTO();

//                    $domiciliosImputadosDto->setIdImputadoSolicitud($rsImputado->getIdImputadoSolicitud());
//                    $domiciliosImputadosDto->setActivo('S');
//                    $rsDomicilios = $domiciliosImputadosDao->selectDomiciliosimputadossolicitudes($domiciliosImputadosDto);
//                    if ($rsDomicilios == "") {
//                        if ($rsImputado->getCveTipoPersona() == 1) {
//                            $mensaje[] = array("Tiene que agregar al menos un domicilio al imputado " . utf8_encode($rsImputado->getNombre() . " " . $rsImputado->getPaterno() . " " . $rsImputado->getMaterno()) . ". \n ");
//                        } else {
//                            $mensaje[] = array("Tiene que agregar al menos un domicilio al imputado " . utf8_encode($rsImputado->getNombreMoral()) . ".");
//                        }
//
//                        $error = true;
//                    }

                    $defensoresImputadosDto->setIdImputadoSolicitud($rsImputado->getIdImputadoSolicitud());
                    $defensoresImputadosDto->setActivo('S');
                    $rsDefensores = $defensoresImputadosDao->selectDefensoresimputadossolicitudes($defensoresImputadosDto);
                    if ($rsDefensores == "") {
                        if ($rsImputado->getCveTipoPersona() == 1) {
                            $mensaje[] = array("Tiene que agregar al menos un defensor al imputado " . utf8_encode($rsImputado->getNombre() . " " . $rsImputado->getPaterno() . " " . $rsImputado->getMaterno()) . ".");
                        } else {
                            $mensaje[] = array("Tiene que agregar al menos un defensor al imputado " . utf8_encode($rsImputado->getNombreMoral()) . ".");
                        }
                        $error = true;
                    }

                    $nacionalidadesImputadosDto->setIdImputadoSolicitud($rsImputado->getIdImputadoSolicitud());
                    $nacionalidadesImputadosDto->setActivo('S');
                    $rsNacionalidades = $nacionalidadesImputadosDao->selectNacionalidadesimputadossolicitudes($nacionalidadesImputadosDto);
                    if ($rsNacionalidades == "") {
                        if ($rsImputado->getCveTipoPersona() == 1) {
                            $mensaje[] = array("Tiene que agregar al menos una nacionalidad al imputado " . utf8_encode($rsImputado->getNombre() . " " . $rsImputado->getPaterno() . " " . $rsImputado->getMaterno()) . ".");
                        } else {
                            $mensaje[] = array("Tiene que agregar al menos una nacionalidad al imputado " . utf8_encode($rsImputado->getNombreMoral()) . ".");
                        }
                        $error = true;
                    }
                }
            } else if ($rsTotalImputados < $rsImputadosSolicitud) {
                $totalFalta = $rsImputadosSolicitud - $rsTotalImputados;
                $mensaje[] = array("Faltan por agregar " . $totalFalta . " imputados(s).");
                $error = true;
            } else if ($rsTotalImputados > $rsImputadosSolicitud) {
                $totalFalta = $rsImputadosSolicitud - $rsTotalImputados;
                $mensaje[] = array("Tiene agregado(s) " . $rsImputadosSolicitud . " imputado(s) demas.");
                $error = true;
            }



            ///Se compruba que si se marco consignacion como detenido o mixto haya un imputado marcado como detenido

            foreach ($rsImputados as $rsImputado) {
                if ($rsImputado->getDetenido() == "S") {
                    $verificaConsignacion = true;
                }
            }

            $consignacion = $rsSolicitud[0]->getCveConsignacion();
            if (($consignacion == "1" || $consignacion == "3") && (!$verificaConsignacion)) {
                $mensaje[] = array("La consignacion en el paso 1 es detenido o mixta y no se encontro a ningun imputado como detenido.");
                $error = true;
            } elseif (($consignacion != "1" && $consignacion != "3") && ($verificaConsignacion)) {
                $mensaje[] = array("La consignacion en el paso 1 es no detenido y se encontro a un imputado como detenido. Verifique");
                $error = true;
            }
        } else {
            $mensaje[] = array("No hay imputados relacionados a esta solicitud.");
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

    public function selectImputadossolicitudesWebService($param, $proveedor = null) {

        $param = json_decode($param, true);
        $idimputadoSolicitud = (isset($param["imputado"]["idImputadoSolicitud"])) ? $param["imputado"]["idImputadoSolicitud"] : '';
        $idSolicitudAudiencia = (isset($param["imputado"]["idSolicitudAudiencia"])) ? $param["imputado"]["idSolicitudAudiencia"] : '';
        $activo = (isset($param["imputado"]["activo"])) ? $param["imputado"]["activo"] : '';
        $fechaRegistro = (isset($param["imputado"]["fechaRegistro"])) ? $param["imputado"]["fechaRegistro"] : '';
        $fechaActualizacion = (isset($param["imputado"]["fechaActualizacion"])) ? $param["imputado"]["fechaActualizacion"] : '';
        $detenido = (isset($param["imputado"]["detenido"])) ? $param["imputado"]["detenido"] : '';
        $nombre = (isset($param["imputado"]["nombre"])) ? $param["imputado"]["nombre"] : '';
        $paterno = (isset($param["imputado"]["paterno"])) ? $param["imputado"]["paterno"] : '';
        $materno = (isset($param["imputado"]["materno"])) ? $param["imputado"]["materno"] : '';
        $rfc = (isset($param["imputado"]["rfc"])) ? $param["imputado"]["rfc"] : '';
        $curp = (isset($param["imputado"]["curp"])) ? $param["imputado"]["curp"] : '';
        $cveTipoDetencion = (isset($param["imputado"]["cveTipoDetencion"])) ? $param["imputado"]["cveTipoDetencion"] : '';
        $fechaNacimiento = isset($param["imputado"]["fechaNacimiento"]) ? $param["imputado"]["fechaNacimiento"] : '';
        $cveOcupacion = (isset($param["imputado"]["cveOcupacion"])) ? $param["imputado"]["cveOcupacion"] : '';
        $cveTipoPersona = (isset($param["imputado"]["cveTipoPersona"])) ? $param["imputado"]["cveTipoPersona"] : '';
        $CveTipoReligion = (isset($param["imputado"]["CveTipoReligion"])) ? $param["imputado"]["CveTipoReligion"] : '';
        $alias = (isset($param["imputado"]["alias"])) ? $param["imputado"]["alias"] : '';
        $fechaDeclaracion = (isset($param["imputado"]["fechaDeclaracion"])) ? $param["imputado"]["fechaDeclaracion"] : '';
        $cveGenero = (isset($param["imputado"]["cveGenero"])) ? $param["imputado"]["cveGenero"] : '';
        $edad = (isset($param["imputado"]["edad"])) ? $param["imputado"]["edad"] : '';
        $cvePaisNacimiento = (isset($param["imputado"]["cvePaisNacimiento"])) ? $param["imputado"]["cvePaisNacimiento"] : '';
        $cveEstadoNacimiento = (isset($param["imputado"]["cveEstadoNacimiento"])) ? $param["imputado"]["cveEstadoNacimiento"] : '';
        $estadoNacimiento = (isset($param["imputado"]["estadoNacimiento"])) ? $param["imputado"]["estadoNacimiento"] : '';
        $cveMunicipioNacimiento = (isset($param["imputado"]["cveMunicipioNacimiento"])) ? $param["imputado"]["cveMunicipioNacimiento"] : '';
        $municipioNacimiento = (isset($param["imputado"]["municipioNacimiento"])) ? $param["imputado"]["municipioNacimiento"] : '';
        $cveEstadoCivil = (isset($param["imputado"]["cveEstadoCivil"])) ? $param["imputado"]["cveEstadoCivil"] : '';
        $cveAlfabetismo = (isset($param["imputado"]["cveAlfabetismo"])) ? $param["imputado"]["cveAlfabetismo"] : '';
        $cveNivelInstruccion = (isset($param["imputado"]["cveNivelInstruccion"])) ? $param["imputado"]["cveNivelInstruccion"] : '';
        $cveEspanol = (isset($param["imputado"]["cveEspanol"])) ? $param["imputado"]["cveEspanol"] : '';
        $cveDialectoIndigena = (isset($param["imputado"]["cveDialectoIndigena"])) ? $param["imputado"]["cveDialectoIndigena"] : '';
        $cveTipoFamiliaLinguistica = (isset($param["imputado"]["cveTipoFamiliaLinguistica"])) ? $param["imputado"]["cveTipoFamiliaLinguistica"] : '';
        $cveInterprete = (isset($param["imputado"]["cveInterprete"])) ? $param["imputado"]["cveInterprete"] : '';
        $cveEstadoPsicofisico = (isset($param["imputado"]["cveEstadoPsicofisico"])) ? $param["imputado"]["cveEstadoPsicofisico"] : '';
        $fechaImputacion = (isset($param["imputado"]["fechaImputacion"])) ? $param["imputado"]["fechaImputacion"] : '';
        $fechaControlDet = (isset($param["imputado"]["fechaControlDet"])) ? $param["imputado"]["fechaControlDet"] : '';
        $fecTerminoCons = (isset($param["imputado"]["fecTerminoCons"])) ? $param["imputado"]["fecTerminoCons"] : '';
        $fecCierreInv = (isset($param["imputado"]["fecCierreInv"])) ? $param["imputado"]["fecCierreInv"] : '';
        $relacionMoral = (isset($param["imputado"]["relacionMoral"])) ? $param["imputado"]["relacionMoral"] : '';
        $personaMoral = (isset($param["imputado"]["personaMoral"])) ? $param["imputado"]["personaMoral"] : '';
        $cveCereso = (isset($param["imputado"]["cveCereso"])) ? $param["imputado"]["cveCereso"] : '';
        $cveEtapaProcesal = (isset($param["imputado"]["cveEtapaProcesal"])) ? $param["imputado"]["cveEtapaProcesal"] : '';
        $cveTipoReincidencia = (isset($param["imputado"]["cveTipoReincidencia"])) ? $param["imputado"]["cveTipoReincidencia"] : '';
        $ingresoMensual = (isset($param["imputado"]["ingresoMensual"])) ? $param["imputado"]["ingresoMensual"] : '';
        $TieneSobreseimiento = (isset($param["imputado"]["TieneSobreseimiento"])) ? $param["imputado"]["TieneSobreseimiento"] : '';
        $FechaSobreseimiento = (isset($param["imputado"]["FechaSobreseimiento"])) ? $param["imputado"]["FechaSobreseimiento"] : '';
        $nombreMoral = (isset($param["imputado"]["nombreMoral"])) ? $param["imputado"]["nombreMoral"] : '';
        $cveGrupoEtnico = (isset($param["imputado"]["cveGrupoEdnico"])) ? $param["imputado"]["cveGrupoEdnico"] : '';



        $ImputadossolicitudesDto = new ImputadossolicitudesDTO();
        $ImputadossolicitudesDto->setIdImputadoSolicitud($idimputadoSolicitud);
        $ImputadossolicitudesDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
        $ImputadossolicitudesDto->setActivo($activo);
        $ImputadossolicitudesDto->setFechaRegistro($fechaRegistro);
        $ImputadossolicitudesDto->setFechaActualizacion($fechaActualizacion);
        $ImputadossolicitudesDto->setDetenido($detenido);
        $ImputadossolicitudesDto->setNombre($nombre);
        $ImputadossolicitudesDto->setPaterno($paterno);
        $ImputadossolicitudesDto->setMaterno($materno);
        $ImputadossolicitudesDto->setRfc($rfc);
        $ImputadossolicitudesDto->setCurp($curp);
        $ImputadossolicitudesDto->setCveTipoDetencion($cveTipoDetencion);
        $ImputadossolicitudesDto->setFechaNacimiento($fechaNacimiento);
        $ImputadossolicitudesDto->setCveOcupacion($cveOcupacion);
        $ImputadossolicitudesDto->setCveTipoPersona($cveTipoPersona);
        $ImputadossolicitudesDto->setCveTipoReligion($CveTipoReligion);
        $ImputadossolicitudesDto->setAlias($alias);
        $ImputadossolicitudesDto->setFechaDeclaracion($fechaDeclaracion);
        $ImputadossolicitudesDto->setCveGenero($cveGenero);
        $ImputadossolicitudesDto->setEdad($edad);
        $ImputadossolicitudesDto->setCvePaisNacimiento($cvePaisNacimiento);
        $ImputadossolicitudesDto->setCveEstadoNacimiento($cveEstadoNacimiento);
        $ImputadossolicitudesDto->setEstadoNacimiento($estadoNacimiento);
        $ImputadossolicitudesDto->setCveMunicipioNacimiento($cveMunicipioNacimiento);
        $ImputadossolicitudesDto->setMunicipioNacimiento($municipioNacimiento);
        $ImputadossolicitudesDto->setCveEstadoCivil($cveEstadoCivil);
        $ImputadossolicitudesDto->setCveAlfabetismo($cveAlfabetismo);
        $ImputadossolicitudesDto->setCveNivelInstruccion($cveNivelInstruccion);
        $ImputadossolicitudesDto->setCveEspanol($cveEspanol);
        $ImputadossolicitudesDto->setCveDialectoIndigena($cveDialectoIndigena);
        $ImputadossolicitudesDto->setCveTipoFamiliaLinguistica($cveTipoFamiliaLinguistica);
        $ImputadossolicitudesDto->setCveInterprete($cveInterprete);
        $ImputadossolicitudesDto->setCveEstadoPsicofisico($cveEstadoPsicofisico);
        $ImputadossolicitudesDto->setFechaImputacion($fechaImputacion);
        $ImputadossolicitudesDto->setFechaControlDet($fechaControlDet);
        $ImputadossolicitudesDto->setFecTerminoCons($fecTerminoCons);
        $ImputadossolicitudesDto->setFecCierreInv($fecCierreInv);
        $ImputadossolicitudesDto->setRelacionMoral($relacionMoral);
        $ImputadossolicitudesDto->setPersonaMoral($personaMoral);
        $ImputadossolicitudesDto->setCveCereso($cveCereso);
        $ImputadossolicitudesDto->setCveEtapaProcesal($cveEtapaProcesal);
        $ImputadossolicitudesDto->setCveTipoReincidencia($cveTipoReincidencia);
        $ImputadossolicitudesDto->setIngresoMensual($ingresoMensual);
        $ImputadossolicitudesDto->setTieneSobreseimiento($TieneSobreseimiento);
        $ImputadossolicitudesDto->setFechaSobreseimiento($FechaSobreseimiento);
//        $ImputadossolicitudesDto->setIdImputadoCarpeta($idImputadoCarpeta);
        $ImputadossolicitudesDto->setCveGrupoEdnico($cveGrupoEtnico);

//        $ImputadossolicitudesDto = $this->validaImputado($ImputadossolicitudesDto);

        $ImputadosSolicitudesDao = new ImputadossolicitudesDAO();
        $ImputadossolicitudesDto = $ImputadosSolicitudesDao->selectImputadossolicitudes($ImputadossolicitudesDto, "", $proveedor);
        if ($ImputadossolicitudesDto != "") {


            try {

                if (!count($ImputadossolicitudesDto))
                    throw new Exception('Sin resultados');

                $imputados = [];

                foreach ($ImputadossolicitudesDto as $imputadoDto) {

                    $imputados = $imputadoDto->toString();

                    //Domicilios imputado
                    $domiciliosDto = new DomiciliosimputadossolicitudesDTO();
                    $domiciliosDao = new DomiciliosimputadossolicitudesDAO();
                    $domiciliosDto->setIdImputadoSolicitud($imputados['idImputadoSolicitud']);
                    $domiciliosDto->setActivo('S');
                    $domiciliosResponse = $domiciliosDao->selectDomiciliosimputadossolicitudes($domiciliosDto);

                    $imputados['domicilios'] = [];
                    if ($domiciliosResponse != "") {
                        foreach ($domiciliosResponse as $domicilio) {
                            $imputados['domicilios'][] = $domicilio->toString();
                        }
                    }

                    //telefonos del imputado
                    $telefonosDto = new TelefonosimputadossolicitudesDTO();
                    $telefonosDao = new TelefonosimputadossolicitudesDAO();
                    $telefonosDto->setIdImputadoSolicitud($imputados['idImputadoSolicitud']);
                    $telefonosDto->setActivo('S');
                    $telefonosResponse = $telefonosDao->selectTelefonosimputadossolicitudes($telefonosDto);

                    $imputados['telefonos'] = [];
                    if ($telefonosResponse != "") {
                        foreach ($telefonosResponse as $telefono) {
                            $imputados['telefonos'][] = $telefono->toString();
                        }
                    }


                    //defensores del imputado
                    $defensoresDto = new DefensoresimputadossolicitudesDTO();
                    $defensoresDao = new DefensoresimputadossolicitudesDAO();
                    $defensoresDto->setIdImputadoSolicitud(($imputados['idImputadoSolicitud']));
                    $defensoresDto->setActivo('S');
                    $defensoresResponse = $defensoresDao->selectDefensoresimputadossolicitudes($defensoresDto);

                    $imputados['defensores'] = [];
                    if ($defensoresResponse != "") {
                        foreach ($defensoresResponse as $defensor) {
                            $imputados['defensores'][] = $defensor->toString();
                        }
                    }

                    //tutores del imputado
                    $tutoresDto = new TutoresimputadosDTO();
                    $tutoresDao = new TutoresimputadosDAO();
                    $tutoresDto->setIdImputadoSolicitud(($imputados['idImputadoSolicitud']));
                    $tutoresDto->setActivo('S');
                    $tutoresResponse = $tutoresDao->selectTutoresimputados($tutoresDto);

                    $imputados['tutores'] = [];
                    if ($tutoresResponse != "") {
                        foreach ($tutoresResponse as $tutor) {
                            $imputados['tutores'][] = $tutor->toString();
                        }
                    }

                    //drogas del imputado
                    $drogasDto = new ImputadosdrogasDTO();
                    $drogasDao = new ImputadosdrogasDAO();
                    $drogasDto->setIdImputadoSolicitud(($imputados['idImputadoSolicitud']));
                    $drogasDto->setActivo("S");
                    $grogasResponse = $drogasDao->selectImputadosdrogas($drogasDto);
                    $imputados['drogas'] = [];
                    if ($grogasResponse != "") {
                        foreach ($grogasResponse as $drogas) {
                            $imputados['drogas'][] = $drogas->toString();
                        }
                    }


                    //nacionalidades del imputado
                    $nacionalidadesDto = new NacionalidadesimputadossolicitudesDTO();
                    $nacionalidadesDao = new NacionalidadesimputadossolicitudesDAO();
                    $nacionalidadesDto->setIdImputadoSolicitud(($imputados['idImputadoSolicitud']));
                    $nacionalidadesDto->setActivo('S');
                    $nacionalidadesResponse = $nacionalidadesDao->selectNacionalidadesimputadossolicitudes($nacionalidadesDto);

                    $imputados['nacionalidades'] = [];
                    if ($nacionalidadesResponse != "") {
                        foreach ($nacionalidadesResponse as $nacionalidad) {
                            $imputados['nacionalidades'][] = $nacionalidad->toString();
                        }
                    }

                    $imputados[] = $imputados;
                }

                $response = [
                    'estatus' => 'Ok',
                    'mensaje' => 'Resultados de imputados',
                    'data' => $imputados
                ];
            } catch (Exception $e) {
                $response = [
                    'estatus' => 'Error',
                    'mensaje' => $e->getMessage()
                ];
            }
        } else {
            $response = [
                'estatus' => 'Error',
                'mensaje' => 'No se encontraron imputados'
            ];
        }

        return $response;
    }

    public function crearImputadoWebService($data, $proveedor = null) {
        $error = false;
        $msg = array();
        $idImpurados = array();

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute("BEGIN");
        $data = json_decode($data, true);

        foreach ($data as $index => $arreglo) {
            $imputadosSolicitudesDto = new ImputadossolicitudesDTO();
            $imputadosSolicitudesDto->setIdImputadoCarpeta(@$arreglo["imputado"]["idimputadoSolicitud"]);
            $imputadosSolicitudesDto->setIdSolicitudAudiencia(@$arreglo["imputado"]["idSolicitudAudiencia"]);
            $imputadosSolicitudesDto->setDetenido(@$arreglo["imputado"]["detenido"]);
            $imputadosSolicitudesDto->setNombre(@$arreglo["imputado"]["nombre"]);
            $imputadosSolicitudesDto->setPaterno(@$arreglo["imputado"]["paterno"]);
            $imputadosSolicitudesDto->setMaterno(@$arreglo["imputado"]["materno"]);
            $imputadosSolicitudesDto->setRfc(@$arreglo["imputado"]["rfc"]);
            $imputadosSolicitudesDto->setCurp(@$arreglo["imputado"]["curp"]);
            $imputadosSolicitudesDto->setCveTipoDetencion(@$arreglo["imputado"]["cveTipoDetencion"]);
            $imputadosSolicitudesDto->setFechaNacimiento(@$arreglo["imputado"]["fechaNacimiento"]);
            $imputadosSolicitudesDto->setCveOcupacion(@$arreglo["imputado"]["cveOcupacion"]);
            $imputadosSolicitudesDto->setCveTipoPersona(@$arreglo["imputado"]["cveTipoPersona"]);
            $imputadosSolicitudesDto->setCveGenero(@$arreglo["imputado"]["cveGenero"]);
            $imputadosSolicitudesDto->setCveTipoReligion(@$arreglo["imputado"]["CveTipoReligion"]);
            $imputadosSolicitudesDto->setAlias(@$arreglo["imputado"]["alias"]);
            $imputadosSolicitudesDto->setFechaDeclaracion(@$arreglo["imputado"]["fechaDeclaracion"]);
            $imputadosSolicitudesDto->setEdad(@$arreglo["imputado"]["edad"]);
            $imputadosSolicitudesDto->setCvePaisNacimiento(@$arreglo["imputado"]["cvePaisNacimiento"]);
            $imputadosSolicitudesDto->setCveEstadoNacimiento(@$arreglo["imputado"]["cveEstadoNacimiento"]);
            $imputadosSolicitudesDto->setEstadoNacimiento(@$arreglo["imputado"]["estadoNacimiento"]);
            $imputadosSolicitudesDto->setCveMunicipioNacimiento(@$arreglo["imputado"]["cveMunicipioNacimiento"]);
            $imputadosSolicitudesDto->setMunicipioNacimiento(@$arreglo["imputado"]["municipioNacimiento"]);
            $imputadosSolicitudesDto->setCveEstadoCivil(@$arreglo["imputado"]["cveEstadoCivil"]);
            $imputadosSolicitudesDto->setCveAlfabetismo(@$arreglo["imputado"]["cveAlfabetismo"]);
            $imputadosSolicitudesDto->setCveNivelInstruccion(@$arreglo["imputado"]["cveNivelInstruccion"]);
            $imputadosSolicitudesDto->setCveEspanol(@$arreglo["imputado"]["cveEspanol"]);
            $imputadosSolicitudesDto->setCveDialectoIndigena(@$arreglo["imputado"]["cveDialectoIndigena"]);
            $imputadosSolicitudesDto->setCveTipoFamiliaLinguistica(@$arreglo["imputado"]["cveTipoFamiliaLinguistica"]);
            $imputadosSolicitudesDto->setCveInterprete(@$arreglo["imputado"]["cveInterprete"]);
            $imputadosSolicitudesDto->setCveEstadoPsicofisico(@$arreglo["imputado"]["cveEstadoPsicofisico"]);
            $imputadosSolicitudesDto->setNombreMoral(@$arreglo["imputado"]["nombreMoral"]);
            $imputadosSolicitudesDto->setCveGrupoEdnico(@$arreglo["imputado"]["cveGrupoEdnico"]);
            $imputadosSolicitudesDto->setFechaImputacion(@$arreglo["imputado"]["fechaImputacion"]);
            $imputadosSolicitudesDto->setFechaControlDet(@$arreglo["imputado"]["fechaControlDet"]);
            $imputadosSolicitudesDto->setFecTerminoCons(@$arreglo["imputado"]["fecTerminoCons"]);
            $imputadosSolicitudesDto->setFecCierreInv(@$arreglo["imputado"]["fecCierreInv"]);
            $imputadosSolicitudesDto->setRelacionMoral(@$arreglo["imputado"]["relacionMoral"]);
            $imputadosSolicitudesDto->setPersonaMoral(@$arreglo["imputado"]["personaMoral"]);
            $imputadosSolicitudesDto->setCveCereso(@$arreglo["imputado"]["cveCereso"]);
            $imputadosSolicitudesDto->setCveEtapaProcesal(@$arreglo["imputado"]["cveEtapaProcesal"]);
            $imputadosSolicitudesDto->setCveTipoReincidencia(@$arreglo["imputado"]["cveTipoReincidencia"]);
            $imputadosSolicitudesDto->setIngresoMensual(@$arreglo["imputado"]["ingresoMensual"]);
            $imputadosSolicitudesDto->setTieneSobreseimiento(@$arreglo["imputado"]["TieneSobreseimiento"]);
            $imputadosSolicitudesDto->setFechaSobreseimiento(@$arreglo["imputado"]["FechaSobreseimiento"]);
            $imputadosSolicitudesDto->setActivo('S');


            $imputadosSolicitudesDto = $this->validarImputadossolicitudes($imputadosSolicitudesDto);
            if ($imputadosSolicitudesDto->getIdImputadoSolicitud() == '') {
                $creaImputado = $this->guardarImputado($imputadosSolicitudesDto, $this->proveedor, false);
            } else {
                $creaImputado = $this->modificarImputado($imputadosSolicitudesDto, $this->proveedor, false);
            }
            $creaImputado = (json_decode($creaImputado, true));
            if ($creaImputado['status'] == 'Ok') {
                /*
                 * obtenemos el id del imputado que se guardo o actualizo
                 */
                $idImputado = $creaImputado['resultados'][0]['imputado'];
                /*
                 * insertar domicilios del imputado si es que existen registros a insertar o editar
                 */
                if (isset($arreglo['domicilios']) && count($arreglo['domicilios'])) {
                    foreach ($arreglo['domicilios'] as $indexDomicilio => $domicilio) {
                        $domiciliosDto = new DomiciliosimputadossolicitudesDTO();
                        $domiciliosDto->setIdDomicilioImputadoSolicitud(@$domicilio["idDomicilioImputadoSolicitud"]);
                        $domiciliosDto->setIdImputadoSolicitud($idImputado);
                        $domiciliosDto->setDomicilioProcesal(@$domicilio["DomicilioProcesal"]);
                        $domiciliosDto->setCvePais(@$domicilio["cvePais"]);
                        $domiciliosDto->setCveEstado(@$domicilio["cveEstado"]);
                        $domiciliosDto->setCveMunicipio(@$domicilio["cveMunicipio"]);
                        $domiciliosDto->setDireccion(@$domicilio["direccion"]);
                        $domiciliosDto->setColonia(@$domicilio["colonia"]);
                        $domiciliosDto->setNumInterior(@$domicilio["numInterior"]);
                        $domiciliosDto->setNumExterior(@$domicilio["numExterior"]);
                        $domiciliosDto->setCp(@$domicilio["cp"]);
                        $domiciliosDto->setLatitud(@$domicilio["latitud"]);
                        $domiciliosDto->setLongitud(@$domicilio["longitud"]);
                        $domiciliosDto->setRecidenciaHabitual(@$domicilio["recidenciaHabitual"]);
                        $domiciliosDto->setEstado(@$domicilio["estado"]);
                        $domiciliosDto->setMunicipio(@$domicilio["municipio"]);
                        $domiciliosDto->setCveConvivencia(@$domicilio["cveConvivencia"]);
                        $domiciliosDto->setCveTipoDeVivienda(@$domicilio["cveTipoDeVivienda"]);
                        $domiciliosDto->setActivo('S');

                        $domiciliosController = new DomiciliosimputadossolicitudesController();

                        if ($domiciliosDto->getIdDomicilioImputadoSolicitud() == '') {
                            $creaDomicilio = $domiciliosController->insertDomiciliosimputadossolicitudes($domiciliosDto, $this->proveedor, false);
                        } else {
                            $creaDomicilio = $domiciliosController->updateDomiciliosimputadossolicitudes($domiciliosDto, $this->proveedor, false);
                        }
                        $creaDomicilio = (json_decode($creaDomicilio, true));
                        if ($creaDomicilio['status'] == 'Error') {
                            $msg[] = array($creaDomicilio['msj']);
                            $error = true;
                        }
                    }
                } else {
                    $msg[] = array("No se encontraron domicilios para agregar a este imputado");
                    $error = true;
                }


                /*
                 * insertar/editar telefonos de ofendidos si es que existen registros
                 */
                if (isset($arreglo['telefonos']) && count($arreglo['telefonos'])) {
                    foreach ($arreglo['telefonos'] as $indexTelefono => $telefono) {
                        $telefonosDto = new TelefonosimputadossolicitudesDTO();
                        $telefonosDto->setIdTelefonoImputadosSolicitud(@$telefono["idTelefonoImputadoSolicitud"]);
                        $telefonosDto->setIdImputadoSolicitud($idImputado);
                        $telefonosDto->setTelefono(@$telefono["telefono"]);
                        $telefonosDto->setCelular(@$telefono["celular"]);
                        $telefonosDto->setEmail(@$telefono["email"]);
                        $telefonosDto->setActivo("S");

                        $telefonosController = new TelefonosimputadossolicitudesController();

                        if ($telefonosDto->getIdTelefonoImputadosSolicitud() == '') {
                            $creaTelefono = $telefonosController->insertTelefonosimputadossolicitudes($telefonosDto, $this->proveedor, false);
                        } else {
                            $creaTelefono = $telefonosController->updateTelefonosimputadossolicitudes($telefonosDto, $this->proveedor, false);
                        }
                        $creaTelefono = (json_decode($creaTelefono, true));
                        if ($creaTelefono['status'] == 'Error') {
                            $msg[] = array($creaTelefono['msj']);
                            $error = true;
                        }
                    }
                }
                /*
                 * insertar/editar defensores de imputados si es que existen registros
                 */
                if (isset($arreglo['defensores']) && count($arreglo['defensores'])) {
                    foreach ($arreglo['defensores'] as $indexDefensor => $defensor) {

                        $DefensoressolicitudesDto = new DefensoresimputadossolicitudesDTO();
                        $DefensoressolicitudesDto->setIdDefensorImputadoSolicitud(@$defensor["idDefensorImputadoSolicitud"]);
                        $DefensoressolicitudesDto->setIdImputadoSolicitud($idImputado);
                        $DefensoressolicitudesDto->setCveTipoDefensor(@$defensor["cveTipoDefensor"]);
                        $DefensoressolicitudesDto->setNombre(@$defensor["nombre"]);
                        $DefensoressolicitudesDto->setTelefono(@$defensor["telefono"]);
                        $DefensoressolicitudesDto->setCelular(@$defensor["celular"]);
                        $DefensoressolicitudesDto->setEmail(@$defensor["email"]);
                        $DefensoressolicitudesDto->setActivo("S");

                        $defensoresController = new DefensoresimputadossolicitudesController();

                        if ($DefensoressolicitudesDto->getIdDefensorImputadoSolicitud() == '') {
                            $creaDefensor = $defensoresController->insertDefensoresimputadossolicitudes($DefensoressolicitudesDto, $this->proveedor, false);
                        } else {
                            $creaDefensor = $defensoresController->updateDefensoresimputadossolicitudes($DefensoressolicitudesDto, $this->proveedor, false);
                        }
                        $creaDefensor = (json_decode($creaDefensor, true));
                        if ($creaDefensor['status'] == 'Error') {
                            $msg[] = array($creaDefensor['msj']);
                            $error = true;
                        }
                    }
                } else {
                    $msg[] = array("No se encontraron defensores para agregar a este imputado");
                    $error = true;
                }

                /*
                 * insertar/editar tutores de ofendidos si es que existen registros
                 */
                if (isset($arreglo['tutores']) && count($arreglo['tutores'])) {
                    foreach ($arreglo['tutores'] as $indexTutor => $tutor) {

                        $tutoresDto = new TutoresimputadosDTO();
                        $tutoresDto->setIdTutorImputado(@$tutor["idTutorOfendido"]);
                        $tutoresDto->setIdImputadoSolicitud($idImputado);
                        $tutoresDto->setCveTipoTutor(@$tutor["cveTipoTutor"]);
                        $tutoresDto->setProvDef(@$tutor["ProvDef"]);
                        $tutoresDto->setNombre(@$tutor["nombre"]);
                        $tutoresDto->setPaterno(@$tutor["paterno"]);
                        $tutoresDto->setMaterno(@$tutor["materno"]);
                        $tutoresDto->setCveGenero(@$tutor["cveGenero"]);
                        $tutoresDto->setFechaNacimiento($this->fechaNormal(@$tutor["fechaNacimiento"]));
                        $tutoresDto->setEdad(@$tutor["edad"]);
                        $tutoresDto->setActivo("S");

                        $tutoresController = new TutoresimputadosController();

                        if ($tutoresDto->getIdTutorImputado() == null) {
                            $creaTutor = $tutoresController->insertTutoresimputados($tutoresDto, $this->proveedor, false);
                        } else {
                            $creaTutor = $tutoresController->updateTutoresimputados($tutoresDto, $this->proveedor, false);
                        }

                        $creaTutor = (json_decode($creaTutor, true));
                        if ($creaTutor['status'] == 'Error') {
                            $msg[] = array($creaTutor['msj']);
                            $error = true;
                        }
                    }
                }


                /*
                 * agregar nacionalidades de ofendidos
                 */
                if (isset($arreglo['nacionalidad']) && count($arreglo['nacionalidad'])) {
                    foreach ($arreglo['nacionalidad'] as $indexNacionalidad => $nacionalidad) {

                        $nacionalidadessolicitudesDto = new NacionalidadesimputadossolicitudesDTO();

                        $nacionalidadessolicitudesDto->setIdNacionalidadImputadoSolicitud(@$nacionalidad['idNacionalidadImputadoSolicitud']);
                        $nacionalidadessolicitudesDto->setIdImputadoSolicitud($idImputado);
                        $nacionalidadessolicitudesDto->setCvePais(@$nacionalidad["cvePais"]);
                        $nacionalidadessolicitudesDto->setActivo("S");
                        $nacionalidadesController = new NacionalidadesimputadossolicitudesController();

                        if ($nacionalidadessolicitudesDto->getIdNacionalidadImputadoSolicitud() == '') {
                            $creaNacionalidad = $nacionalidadesController->insertNacionalidadesimputadossolicitudes($nacionalidadessolicitudesDto, $this->proveedor, false);
                        } else {
                            $creaNacionalidad = $nacionalidadesController->updateNacionalidadesimputadossolicitudes($nacionalidadessolicitudesDto, $this->proveedor, false);
                        }
                        $creaNacionalidad = (json_decode($creaNacionalidad, true));
                        if ($creaNacionalidad['status'] == 'Error') {
                            $msg[] = array($creaNacionalidad['msj']);
                            $error = true;
                        }
                    }
                } else {
                    $msg[] = array("No se encontraron nacionalidades para agregar a este imputado");
                    $error = true;
                }
                /*
                 * agregar drogas de ofendidos
                 */
                if (isset($arreglo['drogas']) && count($arreglo['drogas'])) {
                    foreach ($arreglo['drogas'] as $indexDrogas => $droga) {

                        $drogasImputadosDto = new ImputadosdrogasDTO();

                        $drogasImputadosDto->setIdImputadoDroga(@$droga['idImputadoDrogas']);
                        $drogasImputadosDto->setIdImputadoSolicitud($idImputado);
                        $drogasImputadosDto->setCveDroga(@$droga["cveDroga"]);
                        $drogasImputadosDto->setActivo("S");

                        $imputadosdrogasController = new ImputadosdrogasController();

                        if ($drogasImputadosDto->getIdImputadoDroga() == '') {
                            $creaDroga = $imputadosdrogasController->insertImputadosdrogas($drogasImputadosDto, $this->proveedor, false);
                        } else {
                            $creaDroga = $imputadosdrogasController->updateImputadosdrogas($drogasImputadosDto, $this->proveedor, false);
                        }
                        $creaDroga = (json_decode($creaDroga, true));
                        if ($creaDroga['status'] == 'Error') {
                            $msg[] = array($creaDroga['msj']);
                            $error = true;
                        }
                    }
                }




                $idImpurados[] = array($idImputado);
            } else {
                $msg[] = array($creaImputado['msj']);
                $error = true;
            }
        }

        if ((!$error)) {
            $this->proveedor->execute("COMMIT");
            $response = [
                'status' => 'Ok',
                'mensaje' => 'datos del imputado y sus relaciones fueron guardadados correctamente',
                'id' => $idImpurados
            ];
        } else {
            $this->proveedor->execute("ROLLBACK");
            $response = [
                'status' => 'Error',
                'Error' => $msg
            ];
        }

        return $response;
    }

    public function ModificaImputadoWebService($data, $proveedor = null) {
        $error = false;
        $msg = array();

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute("BEGIN");
        $data = json_decode($data, true);

        foreach ($data as $index => $arreglo) {

            $imputadosSolicitudesDto = new ImputadossolicitudesDTO();
            $imputadosSolicitudesDto->setIdImputadoSolicitud(@$arreglo["imputado"]["idImputadoSolicitud"]);
            $imputadosSolicitudesDto->setIdSolicitudAudiencia(@$arreglo["imputado"]["idSolicitudAudiencia"]);
            $imputadosSolicitudesDto->setDetenido(@$arreglo["imputado"]["detenido"]);
            $imputadosSolicitudesDto->setNombre(@$arreglo["imputado"]["nombre"]);
            $imputadosSolicitudesDto->setPaterno(@$arreglo["imputado"]["paterno"]);
            $imputadosSolicitudesDto->setMaterno(@$arreglo["imputado"]["materno"]);
            $imputadosSolicitudesDto->setRfc(@$arreglo["imputado"]["rfc"]);
            $imputadosSolicitudesDto->setCurp(@$arreglo["imputado"]["curp"]);
            $imputadosSolicitudesDto->setCveTipoDetencion(@$arreglo["imputado"]["cveTipoDetencion"]);
            $imputadosSolicitudesDto->setFechaNacimiento(@$arreglo["imputado"]["fechaNacimiento"]);
            $imputadosSolicitudesDto->setCveOcupacion(@$arreglo["imputado"]["cveOcupacion"]);
            $imputadosSolicitudesDto->setCveTipoPersona(@$arreglo["imputado"]["cveTipoPersona"]);
            $imputadosSolicitudesDto->setCveGenero(@$arreglo["imputado"]["cveGenero"]);
            $imputadosSolicitudesDto->setCveTipoReligion(@$arreglo["imputado"]["CveTipoReligion"]);
            $imputadosSolicitudesDto->setAlias(@$arreglo["imputado"]["alias"]);
            $imputadosSolicitudesDto->setFechaDeclaracion(@$arreglo["imputado"]["fechaDeclaracion"]);
            $imputadosSolicitudesDto->setEdad(@$arreglo["imputado"]["edad"]);
            $imputadosSolicitudesDto->setCvePaisNacimiento(@$arreglo["imputado"]["cvePaisNacimiento"]);
            $imputadosSolicitudesDto->setCveEstadoNacimiento(@$arreglo["imputado"]["cveEstadoNacimiento"]);
            $imputadosSolicitudesDto->setEstadoNacimiento(@$arreglo["imputado"]["estadoNacimiento"]);
            $imputadosSolicitudesDto->setCveMunicipioNacimiento(@$arreglo["imputado"]["cveMunicipioNacimiento"]);
            $imputadosSolicitudesDto->setMunicipioNacimiento(@$arreglo["imputado"]["municipioNacimiento"]);
            $imputadosSolicitudesDto->setCveEstadoCivil(@$arreglo["imputado"]["cveEstadoCivil"]);
            $imputadosSolicitudesDto->setCveAlfabetismo(@$arreglo["imputado"]["cveAlfabetismo"]);
            $imputadosSolicitudesDto->setCveNivelInstruccion(@$arreglo["imputado"]["cveNivelInstruccion"]);
            $imputadosSolicitudesDto->setCveEspanol(@$arreglo["imputado"]["cveEspanol"]);
            $imputadosSolicitudesDto->setCveDialectoIndigena(@$arreglo["imputado"]["cveDialectoIndigena"]);
            $imputadosSolicitudesDto->setCveTipoFamiliaLinguistica(@$arreglo["imputado"]["cveTipoFamiliaLinguistica"]);
            $imputadosSolicitudesDto->setCveInterprete(@$arreglo["imputado"]["cveInterprete"]);
            $imputadosSolicitudesDto->setCveEstadoPsicofisico(@$arreglo["imputado"]["cveEstadoPsicofisico"]);
            $imputadosSolicitudesDto->setNombreMoral(@$arreglo["imputado"]["nombreMoral"]);
            $imputadosSolicitudesDto->setCveGrupoEdnico(@$arreglo["imputado"]["cveGrupoEdnico"]);
            $imputadosSolicitudesDto->setFechaImputacion(@$arreglo["imputado"]["fechaImputacion"]);
            $imputadosSolicitudesDto->setFechaControlDet(@$arreglo["imputado"]["fechaControlDet"]);
            $imputadosSolicitudesDto->setFecTerminoCons(@$arreglo["imputado"]["fecTerminoCons"]);
            $imputadosSolicitudesDto->setFecCierreInv(@$arreglo["imputado"]["fecCierreInv"]);
            $imputadosSolicitudesDto->setRelacionMoral(@$arreglo["imputado"]["relacionMoral"]);
            $imputadosSolicitudesDto->setPersonaMoral(@$arreglo["imputado"]["personaMoral"]);
            $imputadosSolicitudesDto->setCveCereso(@$arreglo["imputado"]["cveCereso"]);
            $imputadosSolicitudesDto->setCveEtapaProcesal(@$arreglo["imputado"]["cveEtapaProcesal"]);
            $imputadosSolicitudesDto->setCveTipoReincidencia(@$arreglo["imputado"]["cveTipoReincidencia"]);
            $imputadosSolicitudesDto->setIngresoMensual(@$arreglo["imputado"]["ingresoMensual"]);
            $imputadosSolicitudesDto->setTieneSobreseimiento(@$arreglo["imputado"]["TieneSobreseimiento"]);
            $imputadosSolicitudesDto->setFechaSobreseimiento(@$arreglo["imputado"]["FechaSobreseimiento"]);
            $imputadosSolicitudesDto->setActivo('S');


            $imputadosSolicitudesDto = $this->validarImputadossolicitudes($imputadosSolicitudesDto);

            if ($imputadosSolicitudesDto->getIdImputadoSolicitud() == '') {
                $creaImputado = $this->guardarImputado($imputadosSolicitudesDto, $this->proveedor, false);
            } else {
                $creaImputado = $this->modificarImputado($imputadosSolicitudesDto, $this->proveedor, false);
            }
            $creaImputado = (json_decode($creaImputado, true));
            if ($creaImputado['status'] == 'Ok') {
                /*
                 * obtenemos el id del imputado que se guardo o actualizo
                 */
                $idImputado = $creaImputado['resultados'][0]['imputado'];
                /*
                 * insertar domicilios del imputado si es que existen registros a insertar o editar
                 */
                if (isset($arreglo['imputado']['domicilios']) && count($arreglo['imputado']['domicilios'])) {
                    foreach ($arreglo['imputado']['domicilios'] as $indexDomicilio => $domicilio) {
                        $domiciliosDto = new DomiciliosimputadossolicitudesDTO();
                        $domiciliosDto->setIdDomicilioImputadoSolicitud(@$domicilio["idDomicilioImputadoSolicitud"]);
                        $domiciliosDto->setIdImputadoSolicitud($idImputado);
                        $domiciliosDto->setDomicilioProcesal(@$domicilio["DomicilioProcesal"]);
                        $domiciliosDto->setCvePais(@$domicilio["cvePais"]);
                        $domiciliosDto->setCveEstado(@$domicilio["cveEstado"]);
                        $domiciliosDto->setCveMunicipio(@$domicilio["cveMunicipio"]);
                        $domiciliosDto->setDireccion(@$domicilio["direccion"]);
                        $domiciliosDto->setColonia(@$domicilio["colonia"]);
                        $domiciliosDto->setNumInterior(@$domicilio["numInterior"]);
                        $domiciliosDto->setNumExterior(@$domicilio["numExterior"]);
                        $domiciliosDto->setCp(@$domicilio["cp"]);
                        $domiciliosDto->setLatitud(@$domicilio["latitud"]);
                        $domiciliosDto->setLongitud(@$domicilio["longitud"]);
                        $domiciliosDto->setRecidenciaHabitual(@$domicilio["recidenciaHabitual"]);
                        $domiciliosDto->setEstado(@$domicilio["estado"]);
                        $domiciliosDto->setMunicipio(@$domicilio["municipio"]);
                        $domiciliosDto->setCveConvivencia(@$domicilio["cveConvivencia"]);
                        $domiciliosDto->setCveTipoDeVivienda(@$domicilio["cveTipoDeVivienda"]);

                        $domiciliosController = new DomiciliosimputadossolicitudesController();

                        if ($domiciliosDto->getIdDomicilioImputadoSolicitud() == '') {
                            $creaDomicilio = $domiciliosController->insertDomiciliosimputadossolicitudes($domiciliosDto, $this->proveedor, false);
                        } else {
                            $creaDomicilio = $domiciliosController->updateDomiciliosimputadossolicitudes($domiciliosDto, $this->proveedor, false);
                        }
                        $creaDomicilio = (json_decode($creaDomicilio, true));
                        if ($creaDomicilio['status'] == 'Error') {
                            $msg[] = array($creaDomicilio['msj']);
                            $error = true;
                        }
                    }
                } else {
                    $msg[] = array("No se encontraron domicilios para agregar a este imputado");
                    $error = true;
                }


                /*
                 * insertar/editar telefonos de ofendidos si es que existen registros
                 */
                if (isset($arreglo['imputado']['telefonos']) && count($arreglo['imputado']['telefonos'])) {
                    foreach ($arreglo['imputado']['telefonos'] as $indexTelefono => $telefono) {
                        $telefonosDto = new TelefonosimputadossolicitudesDTO();
                        $telefonosDto->setIdTelefonoImputadosSolicitud(@$telefono["idTelefonoImputadoSolicitud"]);
                        $telefonosDto->setIdImputadoSolicitud($idImputado);
                        $telefonosDto->setTelefono(@$telefono["telefono"]);
                        $telefonosDto->setCelular(@$telefono["celular"]);
                        $telefonosDto->setEmail(@$telefono["email"]);
                        $telefonosDto->setActivo("S");

                        $telefonosController = new TelefonosimputadossolicitudesController();

                        if ($telefonosDto->getIdTelefonoImputadosSolicitud() == '') {
                            $creaTelefono = $telefonosController->insertTelefonosimputadossolicitudes($telefonosDto, $this->proveedor, false);
                        } else {
                            $creaTelefono = $telefonosController->updateTelefonosimputadossolicitudes($telefonosDto, $this->proveedor, false);
                        }
                        $creaTelefono = (json_decode($creaTelefono, true));
                        if ($creaTelefono['status'] == 'Error') {
                            $msg[] = array($creaTelefono['msj']);
                            $error = true;
                        }
                    }
                }
                /*
                 * insertar/editar defensores de imputados si es que existen registros
                 */
                if (isset($arreglo['imputado']['defensores']) && count($arreglo['imputado']['defensores'])) {
                    foreach ($arreglo['imputado']['defensores'] as $indexDefensor => $defensor) {

                        $DefensoressolicitudesDto = new DefensoresimputadossolicitudesDTO();
                        $DefensoressolicitudesDto->setIdDefensorImputadoSolicitud(@$defensor["idDefensorImputadoSolicitud"]);
                        $DefensoressolicitudesDto->setIdImputadoSolicitud($idImputado);
                        $DefensoressolicitudesDto->setCveTipoDefensor(@$defensor["cveTipoDefensor"]);
                        $DefensoressolicitudesDto->setNombre(@$defensor["nombre"]);
                        $DefensoressolicitudesDto->setTelefono(@$defensor["telefono"]);
                        $DefensoressolicitudesDto->setCelular(@$defensor["celular"]);
                        $DefensoressolicitudesDto->setEmail(@$defensor["email"]);
                        $DefensoressolicitudesDto->setActivo("S");

                        $defensoresController = new DefensoresimputadossolicitudesController();

                        if ($DefensoressolicitudesDto->getIdDefensorImputadoSolicitud() == '') {
                            $creaDefensor = $defensoresController->insertDefensoresimputadossolicitudes($DefensoressolicitudesDto, $this->proveedor, false);
                        } else {
                            $creaDefensor = $defensoresController->updateDefensoresimputadossolicitudes($DefensoressolicitudesDto, $this->proveedor, false);
                        }
                        $creaDefensor = (json_decode($creaDefensor, true));
                        if ($creaDefensor['status'] == 'Error') {
                            $msg[] = array($creaDefensor['msj']);
                            $error = true;
                        }
                    }
                } else {
                    $msg[] = array("No se encontraron defensores para agregar a este imputado");
                    $error = true;
                }

                /*
                 * insertar/editar tutores de ofendidos si es que existen registros
                 */
                if (isset($arreglo['imputado']['tutores']) && count($arreglo['imputado']['tutores'])) {
                    foreach ($arreglo['imputado']['tutores'] as $indexTutor => $tutor) {

                        $tutoresDto = new TutoresimputadosDTO();
                        $tutoresDto->setIdTutorImputado(@$tutor["idTutorOfendido"]);
                        $tutoresDto->setIdImputadoSolicitud($idImputado);
                        $tutoresDto->setCveTipoTutor(@$tutor["cveTipoTutor"]);
                        $tutoresDto->setProvDef(@$tutor["ProvDef"]);
                        $tutoresDto->setNombre(@$tutor["nombre"]);
                        $tutoresDto->setPaterno(@$tutor["paterno"]);
                        $tutoresDto->setMaterno(@$tutor["materno"]);
                        $tutoresDto->setCveGenero(@$tutor["cveGenero"]);
                        $tutoresDto->setFechaNacimiento($this->fechaNormal(@$tutor["fechaNacimiento"]));
                        $tutoresDto->setEdad(@$tutor["edad"]);
                        $tutoresDto->setActivo("S");

                        $tutoresController = new TutoresimputadosController();

                        if ($tutoresDto->getIdTutorImputado() == null) {
                            $creaTutor = $tutoresController->insertTutoresimputados($tutoresDto, $this->proveedor, false);
                        } else {
                            $creaTutor = $tutoresController->updateTutoresimputados($tutoresDto, $this->proveedor, false);
                        }

                        $creaTutor = (json_decode($creaTutor, true));
                        if ($creaTutor['status'] == 'Error') {
                            $msg[] = array($creaTutor['msj']);
                            $error = true;
                        }
                    }
                }


                /*
                 * agregar nacionalidades de ofendidos
                 */
                if (isset($arreglo['imputado']['nacionalidades']) && count($arreglo['imputado']['nacionalidades'])) {
                    foreach ($arreglo['imputado']['nacionalidades'] as $indexNacionalidad => $nacionalidad) {

                        $nacionalidadessolicitudesDto = new NacionalidadesimputadossolicitudesDTO();

                        $nacionalidadessolicitudesDto->setIdNacionalidadImputadoSolicitud(@$nacionalidad['idNacionalidadImputadoSolicitud']);
                        $nacionalidadessolicitudesDto->setIdImputadoSolicitud($idImputado);
                        $nacionalidadessolicitudesDto->setCvePais(@$nacionalidad["cvePais"]);
                        $nacionalidadessolicitudesDto->setActivo("S");
                        $nacionalidadesController = new NacionalidadesimputadossolicitudesController();

                        if ($nacionalidadessolicitudesDto->getIdNacionalidadImputadoSolicitud() == '') {
                            $creaNacionalidad = $nacionalidadesController->insertNacionalidadesimputadossolicitudes($nacionalidadessolicitudesDto, $this->proveedor, false);
                        } else {
                            $creaNacionalidad = $nacionalidadesController->updateNacionalidadesimputadossolicitudes($nacionalidadessolicitudesDto, $this->proveedor, false);
                        }
                        $creaNacionalidad = (json_decode($creaNacionalidad, true));
                        if ($creaNacionalidad['status'] == 'Error') {
                            $msg[] = array($creaNacionalidad['msj']);
                            $error = true;
                        }
                    }
                } else {
                    $msg[] = array("No se encontraron nacionalidades para agregar a este imputado");
                    $error = true;
                }
                /*
                 * agregar drogas de ofendidos
                 */
                if (isset($arreglo['imputado']['drogas']) && count($arreglo['imputado']['drogas'])) {
                    foreach ($arreglo['imputado']['drogas'] as $indexDrogas => $droga) {

                        $drogasImputadosDto = new ImputadosdrogasDTO();

                        $drogasImputadosDto->setIdImputadoDroga(@$droga['idImputadoDrogas']);
                        $drogasImputadosDto->setIdImputadoSolicitud($idImputado);
                        $drogasImputadosDto->setCveDroga(@$droga["cveDroga"]);
                        $drogasImputadosDto->setActivo("S");

                        $imputadosdrogasController = new ImputadosdrogasController();

                        if ($drogasImputadosDto->getIdImputadoDroga() == '') {
                            $creaDroga = $imputadosdrogasController->insertImputadosdrogas($drogasImputadosDto, $this->proveedor, false);
                        } else {
                            $creaDroga = $imputadosdrogasController->updateImputadosdrogas($drogasImputadosDto, $this->proveedor, false);
                        }
                        $creaDroga = (json_decode($creaDroga, true));
                        if ($creaDroga['status'] == 'Error') {
                            $msg[] = array($creaDroga['msj']);
                            $error = true;
                        }
                    }
                }
            } else {
                $msg[] = array($creaImputado['msj']);
                $error = true;
            }
        }

        if ((!$error)) {
            $this->proveedor->execute("COMMIT");
            $response = [
                'status' => 'Ok',
                'mensaje' => 'datos de imputado y sus relaciones fueron guardadados correctamente'
            ];
        } else {
            $this->proveedor->execute("ROLLBACK");
            $response = [
                'status' => 'Error',
                'Error' => $msg
            ];
        }

        return $response;
    }

    public function deleteImputadossolicitudesWebService($param, $proveedor = null) {

        $error = false;
        $msg = array();

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute("BEGIN");

        $imputadosSolicitudesDto = new ImputadossolicitudesDTO();

        $paramAux = (json_decode($param, true));
        foreach ($paramAux as $indexImputado => $imputado) {
            $idImputado = $imputado["idImputadoSolicitud"];
            if ($idImputado != '') {
                $imputadosSolicitudesDto->setIdImputadoSolicitud($idImputado);
                $eliminaImputado = $this->eliminaImputado($imputadosSolicitudesDto, $this->proveedor, false);
                $eliminaImputado = (json_decode($eliminaImputado, true));
                if ($eliminaImputado['status'] == 'Error') {
                    $msg[] = array($eliminaImputado['msj']);
                    $error = true;
                }
            } else {
                $msg[] = "No se encontro ningun imputado. Verifique";
                $error = true;
            }
        }
        if ((!$error)) {
            $this->proveedor->execute("COMMIT");
            $response = [
                'status' => 'Ok',
                'mensaje' => 'datos de imputado y sus relaciones fueron eliminadas correctamente'
            ];
        } else {
            $this->proveedor->execute("ROLLBACK");
            $response = [
                'status' => 'Error',
                'Error' => $msg
            ];
        }

        return $response;
    }

    private function fechaNormal($fecha) {
        list($dia, $mes, $year) = explode("/", $fecha);

        return $year . "-" . $mes . "-" . $dia;
    }

    ///////////////////////FIN WEBSERVICES

    public function selectImputadossolicitudesNOT($param, $proveedor = null) {
        $param = $param[0];
        $ImputadossolicitudesDto = new ImputadossolicitudesDTO();
        $ImputadossolicitudesDto->setIdImputadoSolicitud($param["imputado"]["idImputadoSolicitud"]);
        $ImputadossolicitudesDto->setIdSolicitudAudiencia($param["imputado"]["idSolicitudAudiencia"]);
        $ImputadossolicitudesDto->setActivo($param["imputado"]["activo"]);
        $ImputadossolicitudesDto->setFechaRegistro($param["imputado"]["fechaRegistro"]);
        $ImputadossolicitudesDto->setFechaActualizacion($param["imputado"]["fechaActualizacion"]);
        $ImputadossolicitudesDto->setDetenido($param["imputado"]["detenido"]);
        $ImputadossolicitudesDto->setNombre($param["imputado"]["nombre"]);
        $ImputadossolicitudesDto->setPaterno($param["imputado"]["paterno"]);
        $ImputadossolicitudesDto->setMaterno($param["imputado"]["materno"]);
        $ImputadossolicitudesDto->setRfc($param["imputado"]["rfc"]);
        $ImputadossolicitudesDto->setCurp($param["imputado"]["curp"]);
        $ImputadossolicitudesDto->setCveTipoDetencion($param["imputado"]["cveTipoDetencion"]);
        $ImputadossolicitudesDto->setCveGenero($param["imputado"]["cveGenero"]);
        $ImputadossolicitudesDto->setAlias($param["imputado"]["alias"]);
        $ImputadossolicitudesDto->setFechaDeclaracion($param["imputado"]["fechaDeclaracion"]);
        $ImputadossolicitudesDto->setCvePaisNacimiento($param["imputado"]["cvePaisNacimiento"]);
        $ImputadossolicitudesDto->setCveEstadoNacimiento($param["imputado"]["cveEstadoNacimiento"]);
        $ImputadossolicitudesDto->setCveMunicipioNacimiento($param["imputado"]["cveMunicipioNacimiento"]);
        $ImputadossolicitudesDto->setFechaNacimiento($param["imputado"]["fechaNacimiento"]);
        $ImputadossolicitudesDto->setEdad($param["imputado"]["edad"]);
        $ImputadossolicitudesDto->setCveTipoPersona($param["imputado"]["cveTipoPersona"]);
        $ImputadossolicitudesDto->setCveTipoReligion($param["imputado"]["CveTipoReligion"]);
        $ImputadossolicitudesDto->setNombreMoral($param["imputado"]["nombreMoral"]);
        $ImputadossolicitudesDto->setCveNivelInstruccion($param["imputado"]["cveNivelInstruccion"]);
        $ImputadossolicitudesDto->setCveEstadoCivil($param["imputado"]["cveEstadoCivil"]);
        $ImputadossolicitudesDto->setCveEspanol($param["imputado"]["cveEspanol"]);
        $ImputadossolicitudesDto->setCveAlfabetismo($param["imputado"]["cveAlfabetismo"]);
        $ImputadossolicitudesDto->setCveDialectoIndigena($param["imputado"]["cveDialectoIndigena"]);
        $ImputadossolicitudesDto->setCveTipoFamiliaLinguistica($param["imputado"]["cveTipoFamiliaLinguistica"]);
        $ImputadossolicitudesDto->setCveOcupacion($param["imputado"]["cveOcupacion"]);
        $ImputadossolicitudesDto->setCveInterprete($param["imputado"]["cveInterprete"]);
        $ImputadossolicitudesDto->setCveEstadoPsicofisico($param["imputado"]["cveEstadoPsicofisico"]);
        $ImputadossolicitudesDto->setFechaImputacion($param["imputado"]["fechaImputacion"]);
        $ImputadossolicitudesDto->setFechaControlDet($param["imputado"]["fechaControlDet"]);
        $ImputadossolicitudesDto->setFecTerminoCons($param["imputado"]["fecTerminoCons"]);
        $ImputadossolicitudesDto->setFecCierreInv($param["imputado"]["fecCierreInv"]);
        $ImputadossolicitudesDto->setEstadoNacimiento($param["imputado"]["estadoNacimiento"]);
        $ImputadossolicitudesDto->setMunicipioNacimiento($param["imputado"]["municipioNacimiento"]);
        $ImputadossolicitudesDto->setRelacionMoral($param["imputado"]["relacionMoral"]);
        $ImputadossolicitudesDto->setPersonaMoral($param["imputado"]["personaMoral"]);
        $ImputadossolicitudesDto->setCveCereso($param["imputado"]["cveCereso"]);
        $ImputadossolicitudesDto->setCveEtapaProcesal($param["imputado"]["faseActual"]);
        $ImputadossolicitudesDto->setCveTipoReincidencia($param["imputado"]["cveTipoReincidencia"]);
        $ImputadossolicitudesDto->setIngresoMensual($param["imputado"]["ingresoMensual"]);
        $ImputadossolicitudesDto->setCveGrupoEdnico($param["imputado"]["cveGrupoEdnico"]);

        $ImputadossolicitudesDto = $this->validarImputadossolicitudes($ImputadossolicitudesDto);

        $ImputadossolicitudesDao = new ImputadossolicitudesDAO();
        $ImputadossolicitudesDto = $ImputadossolicitudesDao->selectImputadossolicitudes($ImputadossolicitudesDto, $proveedor);
//        print_r($ImputadossolicitudesDto);
        $imputadossArrayReturn = array();
        $error = false;
        $msg = array();
        if ($ImputadossolicitudesDto != "") {
            $index = 0;
            foreach ($ImputadossolicitudesDto as $imputadoDto) {
                $imputadoArray = array();
                $telefonosArray = array();
                $domiciliosArray = array();
                $defensoresArray = array();
                $tutoresArray = array();
                $nacionalidadesArray = array();
                $drogasArray = array();


                $imputadoArray = $imputadoDto->toString();


                $telefonosimputadossolicitudesDao = new TelefonosimputadossolicitudesDAO();
                $telefonosimputadossolicitudesDto = new TelefonosimputadossolicitudesDTO();
                $telefonosimputadossolicitudesDto->setIdImputadoSolicitud($imputadoDto->getIdImputadoSolicitud());
                $telefonosimputadossolicitudesDto->getActivo('S');
                $telefonosimputadossolicitudesDto = $telefonosimputadossolicitudesDao->selectTelefonosimputadossolicitudes($telefonosimputadossolicitudesDto, "", $proveedor);
                if ($telefonosimputadossolicitudesDto != "") {
                    $telefonosArray = $telefonosimputadossolicitudesDto[0]->toString();
                } else {
                    $msg[] = array("No se encontraron telefonos en la posicion:" . $index);
                    $error = true;
                }


                $defensoresImputadosDao = new DefensoresimputadossolicitudesDAO();
                $defensoresImputadosDto = new DefensoresimputadossolicitudesDTO();
                $defensoresImputadosDto->setIdImputadoSolicitud($imputadoDto->getIdImputadoSolicitud());
                $defensoresImputadosDto->getActivo('S');
                $defensoresImputadosDto = $defensoresImputadosDao->selectDefensoresimputadossolicitudes($defensoresImputadosDto, "", $proveedor);
                if ($defensoresImputadosDto != "") {
                    $defensoresArray = $defensoresImputadosDto[0]->toString();
                } else {
                    $msg[] = array("No se encontraron defensores en la posicion:" . $index);
                    $error = true;
                }

                $domiciliosImputadosDao = new DomiciliosimputadossolicitudesDAO();
                $domiciliosImputadosDto = new DomiciliosimputadossolicitudesDTO();
                $domiciliosImputadosDto->setIdImputadoSolicitud($imputadoDto->getIdImputadoSolicitud());
                $domiciliosImputadosDto->getActivo('S');
                $domiciliosImputadosDto = $domiciliosImputadosDao->selectDomiciliosimputadossolicitudes($domiciliosImputadosDto, "", $proveedor);
                if ($domiciliosImputadosDto != "") {
                    $domiciliosArray = $domiciliosImputadosDto[0]->toString();
                } else {
                    $msg[] = array("No se encontraron domicilios en la posicion:" . $index);
                    $error = true;
                }


                $tutoresImputadosDao = new TutoresimputadosDAO();
                $tutoresImputadosDto = new TutoresimputadosDTO();
                $tutoresImputadosDto->setIdImputadoSolicitud($imputadoDto->getIdImputadoSolicitud());
                $tutoresImputadosDto->getActivo('S');
                $tutoresImputadosDto = $tutoresImputadosDao->selectTutoresimputados($tutoresImputadosDto, "", $proveedor);
                if ($tutoresImputadosDto != "") {
                    $tutoresArray = $tutoresImputadosDto[0]->toString();
                } else {
                    $msg[] = array("No se encontraron tutores en la posicion:" . $index);
                    $error = true;
                }

                $nacionalidadesImputadosDao = new NacionalidadesimputadossolicitudesDAO();
                $nacionalidadesImputadosDto = new NacionalidadesimputadossolicitudesDTO();
                $nacionalidadesImputadosDto->setIdImputadoSolicitud($imputadoDto->getIdImputadoSolicitud());
                $nacionalidadesImputadosDto->getActivo('S');
                $nacionalidadesImputadosDto = $nacionalidadesImputadosDao->selectNacionalidadesimputadossolicitudes($nacionalidadesImputadosDto, "", $proveedor);
                if ($nacionalidadesImputadosDto != "") {
                    $nacionalidadesArray = $nacionalidadesImputadosDto[0]->toString();
                } else {
                    $msg[] = array("No se encontraron nacionalidades en la posicion:" . $index);
                    $error = true;
                }


                $imputadosImputadosDao = new ImputadosdrogasDAO();
                $imputadosImputadosDto = new ImputadosdrogasDTO();
                $imputadosImputadosDto->setIdImputadoSolicitud($imputadoDto->getIdImputadoSolicitud());
                $imputadosImputadosDto->getActivo('S');
                $imputadosImputadosDto = $imputadosImputadosDao->selectImputadosdrogas($imputadosImputadosDto, "", $proveedor);
                if ($imputadosImputadosDto != "") {
                    $drogasArray = $imputadosImputadosDto[0]->toString();
                } else {
                    $msg[] = array("No se encontraron nacionalidades en la posicion:" . $index);
                    $error = true;
                }


                $imputadossArrayReturn[$index]["imputado"] = $imputadoArray;
                $imputadossArrayReturn[$index]["telefonos"] = $telefonosArray;
                $imputadossArrayReturn[$index]["defensores"] = $defensoresArray;
                $imputadossArrayReturn[$index]["domicilio"] = $domiciliosArray;
                $imputadossArrayReturn[$index]["tutores"] = $tutoresArray;
                $imputadossArrayReturn[$index]["nacionalidades"] = $nacionalidadesArray;
                $imputadossArrayReturn[$index]["drogas"] = $drogasArray;
                $index++;
            }
        }
        if ((!$error)) {
            $result = array(
                "status" => "OK",
                "resultados" => $imputadossArrayReturn
            );
        } else {
            $result = array("Error" => $msg);
        }
        return($result);
    }

    public function insertImputadossolicitudes($param, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute("BEGIN");

        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;
        $indexCount = 0;
        $arrayAuxiliar = array();
        $listaResultados = array();
        foreach ($param as $arreglo) {
            if ($arreglo["imputado"]["idImputadoSolicitud"] == "") {
                $ImputadossolicitudesDto = new ImputadossolicitudesDTO();
                if (count($arreglo["imputado"]) > 0) {
                    $ImputadossolicitudesDto->setIdImputadoSolicitud($arreglo["imputado"]["idImputadoSolicitud"]);
                    $ImputadossolicitudesDto->setIdSolicitudAudiencia($arreglo["imputado"]["idSolicitudAudiencia"]);
                    $ImputadossolicitudesDto->setActivo($arreglo["imputado"]["activo"]);
                    $ImputadossolicitudesDto->setDetenido($arreglo["imputado"]["detenido"]);
                    $ImputadossolicitudesDto->setNombre($arreglo["imputado"]["nombre"]);
                    $ImputadossolicitudesDto->setPaterno($arreglo["imputado"]["paterno"]);
                    $ImputadossolicitudesDto->setMaterno($arreglo["imputado"]["materno"]);
                    $ImputadossolicitudesDto->setRfc($arreglo["imputado"]["rfc"]);
                    $ImputadossolicitudesDto->setCurp($arreglo["imputado"]["curp"]);
                    $ImputadossolicitudesDto->setCveTipoDetencion($arreglo["imputado"]["cveTipoDetencion"]);
                    $ImputadossolicitudesDto->setCveGenero($arreglo["imputado"]["cveGenero"]);
                    $ImputadossolicitudesDto->setAlias($arreglo["imputado"]["alias"]);
                    $ImputadossolicitudesDto->setFechaDeclaracion($arreglo["imputado"]["fechaDeclaracion"]);
                    $ImputadossolicitudesDto->setCvePaisNacimiento($arreglo["imputado"]["cvePaisNacimiento"]);
                    $ImputadossolicitudesDto->setCveEstadoNacimiento($arreglo["imputado"]["cveEstadoNacimiento"]);
                    $ImputadossolicitudesDto->setCveMunicipioNacimiento($arreglo["imputado"]["cveMunicipioNacimiento"]);
                    $ImputadossolicitudesDto->setFechaNacimiento($arreglo["imputado"]["fechaNacimiento"]);
                    $ImputadossolicitudesDto->setEdad($arreglo["imputado"]["edad"]);
                    $ImputadossolicitudesDto->setCveTipoPersona($arreglo["imputado"]["cveTipoPersona"]);
                    $ImputadossolicitudesDto->setCveTipoReligion($arreglo["imputado"]["CveTipoReligion"]);
                    $ImputadossolicitudesDto->setNombreMoral($arreglo["imputado"]["nombreMoral"]);
                    $ImputadossolicitudesDto->setCveNivelInstruccion($arreglo["imputado"]["cveNivelInstruccion"]);
                    $ImputadossolicitudesDto->setCveEstadoCivil($arreglo["imputado"]["cveEstadoCivil"]);
                    $ImputadossolicitudesDto->setCveEspanol($arreglo["imputado"]["cveEspanol"]);
                    $ImputadossolicitudesDto->setCveAlfabetismo($arreglo["imputado"]["cveAlfabetismo"]);
                    $ImputadossolicitudesDto->setCveDialectoIndigena($arreglo["imputado"]["cveDialectoIndigena"]);
                    $ImputadossolicitudesDto->setCveTipoFamiliaLinguistica($arreglo["imputado"]["cveTipoFamiliaLinguistica"]);
                    $ImputadossolicitudesDto->setCveOcupacion($arreglo["imputado"]["cveOcupacion"]);
                    $ImputadossolicitudesDto->setCveInterprete($arreglo["imputado"]["cveInterprete"]);
                    $ImputadossolicitudesDto->setCveEstadoPsicofisico($arreglo["imputado"]["cveEstadoPsicofisico"]);
                    $ImputadossolicitudesDto->setFechaImputacion($arreglo["imputado"]["fechaImputacion"]);
                    $ImputadossolicitudesDto->setFechaControlDet($arreglo["imputado"]["fechaControlDet"]);
                    $ImputadossolicitudesDto->setFecTerminoCons($arreglo["imputado"]["fecTerminoCons"]);
                    $ImputadossolicitudesDto->setFecCierreInv($arreglo["imputado"]["fecCierreInv"]);
                    $ImputadossolicitudesDto->setEstadoNacimiento($arreglo["imputado"]["estadoNacimiento"]);
                    $ImputadossolicitudesDto->setMunicipioNacimiento($arreglo["imputado"]["municipioNacimiento"]);
                    $ImputadossolicitudesDto->setRelacionMoral($arreglo["imputado"]["relacionMoral"]);
                    $ImputadossolicitudesDto->setPersonaMoral($arreglo["imputado"]["personaMoral"]);
                    $ImputadossolicitudesDto->setCveCereso($arreglo["imputado"]["cveCereso"]);
                    $ImputadossolicitudesDto->setIngresoMensual($arreglo["imputado"]["ingresoMensual"]);
                    $ImputadossolicitudesDto->setCveGrupoEdnico($arreglo["imputado"]["cveGrupoEdnico"]);
                    $ImputadossolicitudesDto->setCveEtapaProcesal($arreglo["imputado"]["cveEtapaProcesal"]);
                    $ImputadossolicitudesDto->setCveTipoReincidencia($arreglo["imputado"]["cveTipoReincidencia"]);
                    $ImputadossolicitudesDto->setTieneSobreseimiento($arreglo["imputado"]["TieneSobreseimiento"]);
                    $ImputadossolicitudesDto->setFechaSobreseimiento($arreglo["imputado"]["FechaSobreseimiento"]);
                    $ImputadossolicitudesDto->setIdImputadoCarpeta($arreglo["imputado"]["idImputadoCarpeta"]);
                }

                $ImputadossolicitudesDto = $this->validarImputadossolicitudes($ImputadossolicitudesDto);
                $solicitudesAudienciasDto = new SolicitudesaudienciasDTO();
                $solicitudesAudienciasDto->setIdSolicitudAudiencia($ImputadossolicitudesDto->getIdSolicitudAudiencia());
                $solicitudesAudienciasDao = new SolicitudesaudienciasDAO();
                $solicitudesAudienciasDto = $solicitudesAudienciasDao->selectSolicitudesaudiencias($solicitudesAudienciasDto);

                if ($solicitudesAudienciasDto != "") {

                    if ($ImputadossolicitudesDto->getCveTipoPersona() == 1) {
                        if (!$validacion->text(1, 50, (string) $ImputadossolicitudesDto->getNombre())) {
                            $msg[] = ("No ingreso un nombre correcto en la posicion:" . $count);
                            $error = true;
                        }

                        if (!$validacion->text(1, 50, $ImputadossolicitudesDto->getPaterno())) {
                            $msg[] = ("No ingreso un apellido paterno en la posicion:" . $count);
                            $error = true;
                        }

                        if (!$validacion->text(1, 50, $ImputadossolicitudesDto->getMaterno())) {
                            $msg[] = ("No ingreso un apellido materno en la posicion:" . $count);
                            $error = true;
                        }

                        if (!$validacion->text(1, 1, (string) $ImputadossolicitudesDto->getDetenido())) {
                            $msg[] = ("No ingreso si esta detenido o no (S o N) en la posicion:" . $count);
                            $error = true;
                        }

                        if (!$validacion->text(1, 1, (string) $ImputadossolicitudesDto->getRelacionMoral())) {
                            $msg[] = ("No ingreso si tiene relacion moral (S o N) en la posicion:" . $count);
                            $error = true;
                        }

                        if ($ImputadossolicitudesDto->getRelacionMoral() == 'S') {
                            if (!$validacion->text(0, 500, (string) $ImputadossolicitudesDto->getPersonaMoral())) {
                                if ($ImputadossolicitudesDto->getPersonaMoral() == "") {
                                    $msg[] = ("El nombre de la persona moral no es valido en la posicion:" . $count);
                                    $error = true;
                                }
                            }
                        }


                        if ($ImputadossolicitudesDto->getRfc() != "") {
                            if (!$validacion->rfc((string) $ImputadossolicitudesDto->getRfc())) {
                                $msg[] = ("El rfc registrado no es un formato valido en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if ($ImputadossolicitudesDto->getCurp() != "") {
                            if (!$validacion->curp((string) $ImputadossolicitudesDto->getCurp())) {
                                $msg[] = ("La curp ingresada no es valida en la posicion:" . $count);
                                $error = true;
                            }
                        }



                        if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveGenero())) {
                            if ($ImputadossolicitudesDto->getCveGenero() <= 0) {
                                $msg[] = ("El genero seleccionado no es valido en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if (!$validacion->text(0, 50, (string) $ImputadossolicitudesDto->getAlias())) {
                            $msg[] = ("No ingreso un alias correcto en la posicion:" . $count);
                            $error = true;
                        }

                        if ($ImputadossolicitudesDto->getFechaDeclaracion() != "") {
                            if (!$validacion->date((string) $ImputadossolicitudesDto->getFechaDeclaracion())) {
                                $msg[] = ("El formato de fecha de declaracion no es valido en la posicion:" . $count);
                                $error = true;
                            } else {
                                $ImputadossolicitudesDto->setFechaDeclaracion($validacion->normalToMysql($ImputadossolicitudesDto->getFechaDeclaracion()));
                            }
                        }

                        if (!$validacion->num(1, 3, (int) $ImputadossolicitudesDto->getCvePaisNacimiento())) {
                            if ($ImputadossolicitudesDto->getCvePaisNacimiento() <= 0) {
                                $msg[] = ("El pais de nacimiento no es correcto en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if ($ImputadossolicitudesDto->getCvePaisNacimiento() == 119) {
                            if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveEstadoNacimiento())) {
                                if ($ImputadossolicitudesDto->getCveEstadoNacimiento() <= 0) {
                                    $msg[] = ("El estado de nacimiento es requerido en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if (!$validacion->num(1, 5, (int) $ImputadossolicitudesDto->getCveMunicipioNacimiento())) {
                                if ($ImputadossolicitudesDto->getCveMunicipioNacimiento() <= 0) {
                                    $msg[] = ("El municipio de nacimiento es requerido en la posicion:" . $count);
                                    $error = true;
                                }
                            }
                        } else {
                            if (!$validacion->text(1, 200, (string) $ImputadossolicitudesDto->getEstadoNacimiento())) {
                                if ($ImputadossolicitudesDto->getEstadoNacimiento() == "") {
                                    $msg[] = ("El estado de nacimiento es requerido en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if (!$validacion->text(1, 200, (string) $ImputadossolicitudesDto->getMunicipioNacimiento())) {
                                if ($ImputadossolicitudesDto->getMunicipioNacimiento() == "") {
                                    $msg[] = ("El municipio de nacimiento es requerido en la posicion:" . $count);
                                    $error = true;
                                }
                            }
                        }


                        if ($ImputadossolicitudesDto->getFechaNacimiento() != "") {
                            if (!$validacion->date((string) $ImputadossolicitudesDto->getFechaNacimiento())) {
                                $msg[] = ("El formato de fecha de nacimiento no es valido en la posicion:" . $count);
                                $error = true;
                            } else {
                                $ImputadossolicitudesDto->setFechaNacimiento($validacion->normalToMysql($ImputadossolicitudesDto->getFechaNacimiento()));
                            }
                        }

                        if ($ImputadossolicitudesDto->getEdad() != "") {
                            if (!$validacion->num(1, 3, (string) $ImputadossolicitudesDto->getEdad())) {
                                $msg[] = ("La edad ingresada no es valida en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveNivelInstruccion())) {
                            if ($ImputadossolicitudesDto->getCveNivelInstruccion() <= 0) {
                                $msg[] = ("El nivel de instruccion no es correcto en la posicion:" . $count);
                                $error = true;
                            }
                        }
                        if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveEstadoCivil())) {
                            if ($ImputadossolicitudesDto->getCveEstadoCivil() <= 0) {
                                $msg[] = ("El estado civil no es correcto en la posicion:" . $count);
                                $error = true;
                            }
                        }
                        if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveEspanol())) {
                            if ($ImputadossolicitudesDto->getCveEspanol() <= 0) {
                                $msg[] = ("No se identifica la clave para saber si habla espanol en la posicion:" . $count);
                                $error = true;
                            }
                        }
                        if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveAlfabetismo())) {
                            if ($ImputadossolicitudesDto->getCveAlfabetismo() <= 0) {
                                $msg[] = ("No se identifico una clave valida de alfabetismo en la posicion:" . $count);
                                $error = true;
                            }
                        }
                        if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveDialectoIndigena())) {
                            if ($ImputadossolicitudesDto->getCveDialectoIndigena() <= 0) {
                                $msg[] = ("No se identifico una clave valida de dialecto indigena en la posicion:" . $count);
                                $error = true;
                            }
                        }
                        if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveTipoFamiliaLinguistica())) {
                            if ($ImputadossolicitudesDto->getCveTipoFamiliaLinguistica() <= 0) {
                                $msg[] = ("No se identifico una clave valida de tipo de familia linguistica en la posicion:" . $count);
                                $error = true;
                            }
                        }
                        if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveOcupacion())) {
                            if ($ImputadossolicitudesDto->getCveOcupacion() <= 0) {
                                $msg[] = ("No se identifico una clave valida de tipo de ocupacion en la posicion:" . $count);
                                $error = true;
                            }
                        }
                        if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveInterprete())) {
                            if ($ImputadossolicitudesDto->getCveInterprete() <= 0) {
                                $msg[] = ("No se identifico una clave valida si requiere interprete en la posicion:" . $count);
                                $error = true;
                            }
                        }
                        if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveEstadoPsicofisico())) {
                            if ($ImputadossolicitudesDto->getCveEstadoPsicofisico() <= 0) {
                                $msg[] = ("No se identifico una clave valida del estado psicofisico en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if ($ImputadossolicitudesDto->getDetenido() == "S") {
                            if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveCereso())) {
                                if ($ImputadossolicitudesDto->getCveCereso() <= 0) {
                                    $msg[] = ("No se identifico una clave valida para identificar el cereso en la posicion:" . $count);
                                    $error = true;
                                }
                            }
                            if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveTipoDetencion())) {
                                if ($ImputadossolicitudesDto->getCveTipoDetencion() <= 0) {
                                    $msg[] = ("El tipo de detencion no es valido en la posicion:" . $count);
                                    $error = true;
                                }
                            }
                        }
//                        if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveTipoReincidencia())) {
//                            if ($ImputadossolicitudesDto->getCveTipoReincidencia() <= 0) {
//                                $msg[] = ("No se identifico una clave valida para tipo de reicidencia en la posicion:" . $count);
//                                $error = true;
//                            }
//                        }
                        if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveGrupoEdnico())) {
                            if ($ImputadossolicitudesDto->getCveGrupoEdnico() <= 0) {
                                $msg[] = ("No se identifico una clave valida para tipo de reincidencia en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if ($ImputadossolicitudesDto->getFechaImputacion() != "") {
                            if (!$validacion->date((string) $ImputadossolicitudesDto->getFechaImputacion())) {
                                $msg[] = ("El formato de fecha de inputacion no es valido en la posicion:" . $count);
                                $error = true;
                            } else {
                                $ImputadossolicitudesDto->setFechaImputacion($validacion->normalToMysql($ImputadossolicitudesDto->getFechaImputacion()));
                            }
                        }

                        if ($ImputadossolicitudesDto->getFechaControlDet() != "") {
                            if (!$validacion->date((string) $ImputadossolicitudesDto->getFechaControlDet())) {
                                $msg[] = ("El formato de fecha de control de detencion no es valido en la posicion:" . $count);
                                $error = true;
                            } else {
                                $ImputadossolicitudesDto->setFechaControlDet($validacion->normalToMysql($ImputadossolicitudesDto->getFechaControlDet()));
                            }
                        }
                        if ($ImputadossolicitudesDto->getFecTerminoCons() != "") {
                            if (!$validacion->date((string) $ImputadossolicitudesDto->getFecTerminoCons())) {
                                $msg[] = ("El formato de fecha de control de termino constitucional no es valido en la posicion:" . $count);
                                $error = true;
                            } else {
                                $ImputadossolicitudesDto->setFecTerminoCons($validacion->normalToMysql($ImputadossolicitudesDto->getFecTerminoCons()));
                            }
                        }
                        if ($ImputadossolicitudesDto->getFecCierreInv() != "") {
                            if (!$validacion->date((string) $ImputadossolicitudesDto->getFecCierreInv())) {
                                $msg[] = ("El formato de fecha de cierre de investigacion no es valido en la posicion:" . $count);
                                $error = true;
                            } else {
                                $ImputadossolicitudesDto->setFecCierreInv($validacion->normalToMysql($ImputadossolicitudesDto->getFecCierreInv()));
                            }
                        }
                    } else if (($ImputadossolicitudesDto->getCveTipoPersona() == 2) || ($ImputadossolicitudesDto->getCveTipoPersona() == 3)) {
                        if (!$validacion->text(1, 500, $ImputadossolicitudesDto->getNombreMoral())) {
                            $msg[] = ("El nombre moral no es correcto en la posicion:" . $count);
                            $error = true;
                        }

                        if ($ImputadossolicitudesDto->getRfc() != "") {
                            if (!$validacion->rfc((string) $ImputadossolicitudesDto->getRfc())) {
                                $msg[] = ("El rfc registrado no es un formato valido en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if ($ImputadossolicitudesDto->getCurp() != "") {
                            if (!$validacion->curp((string) $ImputadossolicitudesDto->getCurp())) {
                                $msg[] = ("La curp ingresada no es valida en la posicion:" . $count);
                                $error = true;
                            }
                        }
                    } else {
                        $msg[] = ("El tipo de persona no es correcto");
                        $error = true;
                    }

                    if (count($arreglo["defensores"]) > 0) {
                        for ($index = 0; $index < count($arreglo["defensores"]); $index++) {
                            $defensoresimputadossolicitudesDto = new DefensoresimputadossolicitudesDTO();
                            $defensoresimputadossolicitudesDto->setCveTipoDefensor($arreglo["defensores"][$index]["cveTipoDefensor"]);
                            $defensoresimputadossolicitudesDto->setNombre($arreglo["defensores"][$index]["nombre"]);
                            $defensoresimputadossolicitudesDto->setTelefono($arreglo["defensores"][$index]["telefono"]);
                            $defensoresimputadossolicitudesDto->setCelular($arreglo["defensores"][$index]["celular"]);
                            $defensoresimputadossolicitudesDto->setEmail($arreglo["defensores"][$index]["email"]);
                            $defensoresimputadossolicitudesDto->setActivo("S");

                            $defensoresimputadossolicitudesDto = $this->validarDefensores($defensoresimputadossolicitudesDto);

                            if (!$validacion->text(1, 2, (int) $defensoresimputadossolicitudesDto->getCveTipoDefensor())) {
                                if ($defensoresimputadossolicitudesDto->getCveTipoDefensor() <= 0) {
                                    $msg[] = ("El tipo de defensor no es valido en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if (!$validacion->text(1, 500, (string) $defensoresimputadossolicitudesDto->getNombre())) {
                                if ($defensoresimputadossolicitudesDto->getNombre() == "") {
                                    $msg[] = ("No ingreso un nombre correcto en la posicion:" . $count);
                                    $error = true;
                                }
                            }
                            if ($defensoresimputadossolicitudesDto->getTelefono() != "") {
                                if (!$validacion->telefono((string) $defensoresimputadossolicitudesDto->getTelefono())) {
                                    $msg[] = ("No ingreso un Telefono correcto correcto en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if ($defensoresimputadossolicitudesDto->getCelular() != "") {
                                if (!$validacion->telefono((string) $defensoresimputadossolicitudesDto->getCelular())) {
                                    $msg[] = ("No ingreso un celular correcto en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if ($defensoresimputadossolicitudesDto->getEmail() == "") {
                                if (!$validacion->email((string) $defensoresimputadossolicitudesDto->getEmail())) {
                                    $msg[] = ("No ingreso un email correcto en la posicion:" . $count);
                                    $error = true;
                                }
                            }
                        }
                    } else {
                        $msg[] = ("Los imputados son requeridos");
                        $error = true;
                    }
                    if (count($arreglo["domicilios"]) > 0) {
                        for ($index = 0; $index < count($arreglo["domicilios"]); $index++) {
                            $domiciliosimputadossolicitudesDto = new DomiciliosimputadossolicitudesDTO();
                            $domiciliosimputadossolicitudesDto->setDomicilioProcesal($arreglo["domicilios"][$index]["DomicilioProcesal"]);
                            $domiciliosimputadossolicitudesDto->setCvePais($arreglo["domicilios"][$index]["cvePais"]);
                            $domiciliosimputadossolicitudesDto->setCveEstado($arreglo["domicilios"][$index]["cveEstado"]);
                            $domiciliosimputadossolicitudesDto->setCveMunicipio($arreglo["domicilios"][$index]["cveMunicipio"]);
                            $domiciliosimputadossolicitudesDto->setDireccion($arreglo["domicilios"][$index]["direccion"]);
                            $domiciliosimputadossolicitudesDto->setColonia($arreglo["domicilios"][$index]["colonia"]);
                            $domiciliosimputadossolicitudesDto->setNumInterior($arreglo["domicilios"][$index]["numInterior"]);
                            $domiciliosimputadossolicitudesDto->setNumExterior($arreglo["domicilios"][$index]["numExterior"]);
                            $domiciliosimputadossolicitudesDto->setCp($arreglo["domicilios"][$index]["cp"]);
                            $domiciliosimputadossolicitudesDto->setLatitud($arreglo["domicilios"][$index]["latitud"]);
                            $domiciliosimputadossolicitudesDto->setLongitud($arreglo["domicilios"][$index]["longitud"]);
                            $domiciliosimputadossolicitudesDto->setRecidenciaHabitual($arreglo["domicilios"][$index]["recidenciaHabitual"]);
                            $domiciliosimputadossolicitudesDto->setEstado($arreglo["domicilios"][$index]["estado"]);
                            $domiciliosimputadossolicitudesDto->setMunicipio($arreglo["domicilios"][$index]["municipio"]);
                            $domiciliosimputadossolicitudesDto->setCveConvivencia($arreglo["domicilios"][$index]["cveConvivencia"]);
                            $domiciliosimputadossolicitudesDto->setCveTipoDeVivienda($arreglo["domicilios"][$index]["cveTipoDeVivienda"]);
                            $domiciliosimputadossolicitudesDto->setActivo($arreglo["domicilios"][$index]["activo"]);
//                            var_dump($domiciliosimputadossolicitudesDto);

                            $domiciliosimputadossolicitudesDto = $this->validarDomicilios($domiciliosimputadossolicitudesDto);


                            if (!$validacion->text(1, 3, (int) $domiciliosimputadossolicitudesDto->getCvePais())) {
                                if ($domiciliosimputadossolicitudesDto->getCvePais() <= 0) {
                                    $msg[] = ("El pais no puede estar en blanco en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if ($domiciliosimputadossolicitudesDto->getCvePais() == 119) {
                                if (!$validacion->num(1, 2, (int) $domiciliosimputadossolicitudesDto->getCveEstado())) {
                                    if ($domiciliosimputadossolicitudesDto->getEstado() <= 0) {
                                        $msg[] = ("El estado requerido en la direccion en la posicion:" . $count);
                                        $error = true;
                                    }
                                }

                                if (!$validacion->num(1, 5, (int) $domiciliosimputadossolicitudesDto->getMunicipio())) {
                                    if ($domiciliosimputadossolicitudesDto->getCveMunicipio() <= 0) {
                                        $msg[] = ("El municipio es requerido en la direccion posicion:" . $count);
                                        $error = true;
                                    }
                                }
                            } else {
                                if (!$validacion->text(1, 200, (string) $domiciliosimputadossolicitudesDto->getEstado())) {
                                    if ($domiciliosimputadossolicitudesDto->getEstado() == "") {
                                        $msg[] = ("El estado es requerido en la posicion:" . $count);
                                        $error = true;
                                    }
                                }

                                if (!$validacion->text(1, 200, (string) $domiciliosimputadossolicitudesDto->getMunicipio())) {
                                    if ($domiciliosimputadossolicitudesDto->getMunicipio() == "") {
                                        $msg[] = ("El municipio es requerido en la posicion:" . $count);
                                        $error = true;
                                    }
                                }
                            }

                            if (!$validacion->text(1, 500, (string) $domiciliosimputadossolicitudesDto->getDireccion())) {
                                if ($domiciliosimputadossolicitudesDto->getDireccion() == "") {
                                    $msg[] = ("La direccion es requerido en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if (!$validacion->text(1, 200, (string) $domiciliosimputadossolicitudesDto->getColonia())) {
                                if ($domiciliosimputadossolicitudesDto->getColonia() == "") {
                                    $msg[] = ("La colonia es requerido en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if ($domiciliosimputadossolicitudesDto->getNumInterior() != "") {
                                if (!$validacion->textNum(1, 10, (string) $domiciliosimputadossolicitudesDto->getNumInterior())) {
                                    $msg[] = ("El num interior es requerido en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if ($domiciliosimputadossolicitudesDto->getNumExterior() != "") {
                                if (!$validacion->textNum(1, 10, (string) $domiciliosimputadossolicitudesDto->getNumExterior())) {
                                    $msg[] = ("El num exterior es requerido en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if ($domiciliosimputadossolicitudesDto->getCp() != "") {
                                if (!$validacion->textNum(1, 6, (string) $domiciliosimputadossolicitudesDto->getCp())) {
                                    $msg[] = ("El Codigo postal es requerido en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if (!$validacion->textNum(1, 1, (string) $domiciliosimputadossolicitudesDto->getRecidenciaHabitual())) {
                                if ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() == "") {
                                    $msg[] = ("Se debe residencia habitual (S o N) en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if (!$validacion->text(1, 3, (int) $domiciliosimputadossolicitudesDto->getCveTipoDeVivienda())) {
                                if ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() <= 0) {
                                    $msg[] = ("Se debe de indicar el tipo de vivienda en la posicion:" . $count);
                                    $error = true;
                                }
                            }
                            if (!$validacion->text(1, 3, (int) $domiciliosimputadossolicitudesDto->getCveConvivencia())) {
                                if ($domiciliosimputadossolicitudesDto->getCveConvivencia() <= 0) {
                                    $msg[] = ("Se debe de indicar con quien vive en el domicilio en la posicion:" . $count);
                                    $error = true;
                                }
                            }
                        }
                    } else {
                        $msg[] = ("El o los docimiclios son requeridos");
                        $error = true;
                    }

                    if (count($arreglo["telefonos"]) > 0) {
                        for ($index = 0; $index < count($arreglo["telefonos"]); $index++) {
                            $telefenosimputadossolicitudesDto = new TelefonosimputadossolicitudesDTO();
                            $telefenosimputadossolicitudesDto->setTelefono($arreglo["telefonos"][$index]["telefono"]);
                            $telefenosimputadossolicitudesDto->setCelular($arreglo["telefonos"][$index]["celular"]);
                            $telefenosimputadossolicitudesDto->setEmail($arreglo["telefonos"][$index]["email"]);
                            $telefenosimputadossolicitudesDto->setActivo("S");

                            $telefenosimputadossolicitudesDto = $this->validarTelefonos($telefenosimputadossolicitudesDto);

                            if ($telefenosimputadossolicitudesDto->getTelefono() != "") {
                                if (!$validacion->telefono((string) $telefenosimputadossolicitudesDto->getTelefono())) {
                                    $msg[] = ("No ingreso un Telefono correcto en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if ($telefenosimputadossolicitudesDto->getCelular() != "") {
                                if (!$validacion->telefono((string) $telefenosimputadossolicitudesDto->getCelular())) {
                                    $msg[] = ("No ingreso un celular correcto en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if ($telefenosimputadossolicitudesDto->getEmail() != "") {
                                if (!$validacion->email((string) $telefenosimputadossolicitudesDto->getEmail())) {
                                    $msg[] = ("No ingreso un email correcto en la posicion:" . $count);
                                    $error = true;
                                }
                            }
                        }
                    }

                    if (count($arreglo["tutores"]) > 0) {
                        for ($index = 0; $index < count($arreglo["tutores"]); $index++) {
                            $tutoresimputadosDto = new TutoresimputadosDTO();
                            $tutoresimputadosDto->setCveGenero($arreglo["tutores"][$index]["cveGenero"]);
                            $tutoresimputadosDto->setCveTipoTutor($arreglo["tutores"][$index]["cveTipoTutor"]);
                            $tutoresimputadosDto->setProvDef($arreglo["tutores"][$index]["ProvDef"]);
                            $tutoresimputadosDto->setNombre($arreglo["tutores"][$index]["nombre"]);
                            $tutoresimputadosDto->setPaterno($arreglo["tutores"][$index]["paterno"]);
                            $tutoresimputadosDto->setMaterno($arreglo["tutores"][$index]["materno"]);
                            $tutoresimputadosDto->setFechaNacimiento($arreglo["tutores"][$index]["fechaNacimiento"]);
                            $tutoresimputadosDto->setEdad($arreglo["tutores"][$index]["edad"]);
                            $tutoresimputadosDto->setActivo("S");

                            $tutoresimputadosDto = $this->validarTutores($tutoresimputadosDto);

                            if (!$validacion->num(1, 2, (int) $tutoresimputadosDto->getCveGenero())) {
                                if ($tutoresimputadosDto->getCveGenero() <= 0) {
                                    $msg[] = ("El genero seleccionado no es valido en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if (!$validacion->num(1, 2, (int) $tutoresimputadosDto->getCveTipoTutor())) {
                                if ($tutoresimputadosDto->getCveTipoTutor() <= 0) {
                                    $msg[] = ("El tipo de tutor seleccionado no es valido en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if (!$validacion->text(1, 50, (string) $tutoresimputadosDto->getNombre())) {
                                $msg[] = ("No ingreso un nombre de tutor correcto en la posicion:" . $count);
                                $error = true;
                            }

                            if (!$validacion->text(1, 50, $tutoresimputadosDto->getPaterno())) {
                                $msg[] = ("No ingreso un apellido paterno de tutor correcto en la posicion:" . $count);
                                $error = true;
                            }

                            if (!$validacion->text(1, 50, $tutoresimputadosDto->getMaterno())) {
                                $msg[] = ("No ingreso un apellido materno de tutor correcto en la posicion:" . $count);
                                $error = true;
                            }

                            if ($tutoresimputadosDto->getFechaNacimiento() != "") {
                                if (!$validacion->date((string) $tutoresimputadosDto->getFechaNacimiento())) {
                                    $msg[] = ("El formato de fecha de nacimiento no es valido en la posicion:" . $count);
                                    $error = true;
                                } else {
                                    $tutoresimputadosDto->setFechaNacimiento($validacion->normalToMysql($tutoresimputadosDto->getFechaNacimiento()));
                                }
                            }
                        }
                    }
                    if (count($arreglo["nacionalidad"]) > 0) {
                        for ($index = 0; $index < count($arreglo["nacionalidad"]); $index++) {
                            $nacionalidadimputadosDto = new NacionalidadesimputadossolicitudesDTO();
                            $nacionalidadimputadosDto->setCvePais($arreglo["nacionalidad"][$index]["cvePais"]);
                            $nacionalidadimputadosDto->setActivo("S");

                            $nacionalidadimputadosDto = $this->validarNacionalidadesimputadossolicitudes($nacionalidadimputadosDto);

                            if (!$validacion->num(1, 2, (int) $nacionalidadimputadosDto->getCvePais())) {
                                if ($nacionalidadimputadosDto->getCvePais() <= 0) {
                                    $msg[] = ("El pais seleccionado no es valido en la posicion:" . $count);
                                    $error = true;
                                }
                            }
                        }
                    }
                    if (count($arreglo["drogas"]) > 0) {
                        for ($index = 0; $index < count($arreglo["drogas"]); $index++) {
                            $drogasImputadoDto = new ImputadosdrogasDTO();
                            $drogasImputadoDto->setCveDroga($arreglo["drogas"][$index]["cveDroga"]);
                            $drogasImputadoDto->setActivo("S");

                            $drogasImputadoDto = $this->validarImputadosdrogas($drogasImputadoDto);

                            if (!$validacion->num(1, 2, (int) $drogasImputadoDto->getCveDroga())) {
                                if ($drogasImputadoDto->getCveDroga() <= 0) {
                                    $msg[] = ("La droga seleccionado no es valido en la posicion:" . $count);
                                    $error = true;
                                }
                            }
                        }
                    }

                    if ((!$error) && (0 <= count($msg))) {
                        $imputadossolicitudesDao = new ImputadossolicitudesDAO();
                        $tmp = new ImputadossolicitudesDTO();

                        if ($ImputadossolicitudesDto->getCveTipoPersona() == 1) {
                            $tmp->setNombre($ImputadossolicitudesDto->getNombre());
                            $tmp->setPaterno($ImputadossolicitudesDto->getPaterno());
                            $tmp->setMaterno($ImputadossolicitudesDto->getMaterno());
                            $tmp->setActivo('S');
                            $tmp->setIdSolicitudAudiencia($ImputadossolicitudesDto->getIdSolicitudAudiencia());
                        } else if (($ImputadossolicitudesDto->getCveTipoPersona() == 2) || ($ImputadossolicitudesDto->getCveTipoPersona() == 3)) {
                            $tmp->setNombreMoral($ImputadossolicitudesDto->getNombreMoral());
                            $tmp->setActivo('S');
                            $tmp->setIdSolicitudAudiencia($ImputadossolicitudesDto->getIdSolicitudAudiencia());
                        }
                        $tmp = $imputadossolicitudesDao->selectImputadossolicitudes($tmp, "", $this->proveedor);
                        if ($tmp == "") {

                            if ($ImputadossolicitudesDto->getCveTipoPersona() == 2 || $ImputadossolicitudesDto->getCveTipoPersona() == 3) {
                                $ImputadossolicitudesDto->setCveTipoDetencion(4);
                                $ImputadossolicitudesDto->setCveNivelInstruccion(11);
                                $ImputadossolicitudesDto->setCveEstadoCivil(3);
                                $ImputadossolicitudesDto->setCveEspanol(4);
                                $ImputadossolicitudesDto->setCveAlfabetismo(4);
                                $ImputadossolicitudesDto->setCveDialectoIndigena(3);
                                $ImputadossolicitudesDto->setCveTipoFamiliaLinguistica(15);
                                $ImputadossolicitudesDto->setCveOcupacion(15);
                                $ImputadossolicitudesDto->setCveInterprete(3);
                                $ImputadossolicitudesDto->setCveEstadoPsicofisico(5);
                                $ImputadossolicitudesDto->setCveCereso(1);
                                $ImputadossolicitudesDto->setCveGrupoEdnico(72);
                            }

                            $ImputadossolicitudesDto = $imputadossolicitudesDao->insertImputadossolicitudes($ImputadossolicitudesDto, $this->proveedor);
                            if ($ImputadossolicitudesDto != "") {
                                if (count($arreglo["defensores"]) > 0) {
                                    for ($index = 0; $index < count($arreglo["defensores"]); $index++) {
                                        $defensoresimputadossolicitudesDto = new DefensoresimputadossolicitudesDTO();
                                        $defensoresimputadossolicitudesDto->setIdImputadoSolicitud($ImputadossolicitudesDto[0]->getIdImputadoSolicitud());
                                        $defensoresimputadossolicitudesDto->setCveTipoDefensor($arreglo["defensores"][$index]["cveTipoDefensor"]);
                                        $defensoresimputadossolicitudesDto->setNombre($arreglo["defensores"][$index]["nombre"]);
                                        $defensoresimputadossolicitudesDto->setTelefono($arreglo["defensores"][$index]["telefono"]);
                                        $defensoresimputadossolicitudesDto->setCelular($arreglo["defensores"][$index]["celular"]);
                                        $defensoresimputadossolicitudesDto->setEmail($arreglo["defensores"][$index]["email"]);
                                        $defensoresimputadossolicitudesDto->setActivo("S");
                                        if ((!$error)) {
                                            $defensoresimputadossolicitudesDao = new DefensoresimputadossolicitudesDAO();
                                            $defensoresimputadossolicitudesDto = $defensoresimputadossolicitudesDao->insertDefensoresimputadossolicitudes($defensoresimputadossolicitudesDto, $this->proveedor);

                                            if ($defensoresimputadossolicitudesDto == "") {
                                                $msg[] = ("No se logro registrar el defensor debido a algun error en la transaccion");
                                                $error = true;
                                            }
                                        }
                                    }
                                } else {
                                    $msg[] = ("Los defensores son requeridos");
                                    $error = true;
                                }

                                if (count($arreglo["domicilios"]) > 0) {
                                    for ($index = 0; $index < count($arreglo["domicilios"]); $index++) {
                                        $domiciliosimputadossolicitudesDto = new DomiciliosimputadossolicitudesDTO();
                                        $domiciliosimputadossolicitudesDto->setIdImputadoSolicitud($ImputadossolicitudesDto[0]->getIdImputadoSolicitud());
                                        $domiciliosimputadossolicitudesDto->setCvePais($arreglo["domicilios"][$index]["cvePais"]);
                                        $domiciliosimputadossolicitudesDto->setCveEstado($arreglo["domicilios"][$index]["cveEstado"]);
                                        $domiciliosimputadossolicitudesDto->setCveMunicipio($arreglo["domicilios"][$index]["cveMunicipio"]);
                                        $domiciliosimputadossolicitudesDto->setDireccion($arreglo["domicilios"][$index]["direccion"]);
                                        $domiciliosimputadossolicitudesDto->setColonia($arreglo["domicilios"][$index]["colonia"]);
                                        $domiciliosimputadossolicitudesDto->setNumInterior($arreglo["domicilios"][$index]["numInterior"]);
                                        $domiciliosimputadossolicitudesDto->setNumExterior($arreglo["domicilios"][$index]["numExterior"]);
                                        $domiciliosimputadossolicitudesDto->setCp($arreglo["domicilios"][$index]["cp"]);
                                        $domiciliosimputadossolicitudesDto->setLatitud($arreglo["domicilios"][$index]["latitud"]);
                                        $domiciliosimputadossolicitudesDto->setLongitud($arreglo["domicilios"][$index]["longitud"]);
                                        $domiciliosimputadossolicitudesDto->setRecidenciaHabitual($arreglo["domicilios"][$index]["recidenciaHabitual"]);
                                        $domiciliosimputadossolicitudesDto->setEstado($arreglo["domicilios"][$index]["estado"]);
                                        $domiciliosimputadossolicitudesDto->setMunicipio($arreglo["domicilios"][$index]["municipio"]);
                                        $domiciliosimputadossolicitudesDto->setCveConvivencia($arreglo["domicilios"][$index]["cveConvivencia"]);
                                        $domiciliosimputadossolicitudesDto->setCveTipoDeVivienda($arreglo["domicilios"][$index]["cveTipoDeVivienda"]);
//                            var_dump($domiciliosimputadossolicitudesDto);
                                        if (!$error) {
                                            $domiciliosimputadossolicitudesDao = new DomiciliosimputadossolicitudesDAO();
                                            $domiciliosimputadossolicitudesDto = $domiciliosimputadossolicitudesDao->insertDomiciliosimputadossolicitudes($domiciliosimputadossolicitudesDto, $this->proveedor);

                                            if ($domiciliosimputadossolicitudesDto == "") {
                                                $msg[] = ("No se logro registrar el domicilio debido a algun error en la transaccion");
                                                $error = true;
                                            }
                                        }
                                    }
                                } else {
                                    $msg[] = ("El o los docimiclios son requeridos");
                                    $error = true;
                                }

                                if (count($arreglo["telefonos"]) > 0) {
//                        var_dump($arreglo["telefonos"]);
                                    for ($index = 0; $index < count($arreglo["telefonos"]); $index++) {
                                        $telefenosimputadossolicitudesDto = new TelefonosimputadossolicitudesDTO();
                                        $telefenosimputadossolicitudesDto->setIdImputadoSolicitud($ImputadossolicitudesDto[0]->getIdImputadoSolicitud());
                                        $telefenosimputadossolicitudesDto->setTelefono($arreglo["telefonos"][$index]["telefono"]);
                                        $telefenosimputadossolicitudesDto->setCelular($arreglo["telefonos"][$index]["celular"]);
                                        $telefenosimputadossolicitudesDto->setEmail($arreglo["telefonos"][$index]["email"]);
                                        $telefenosimputadossolicitudesDto->setActivo("S");
                                        if ((!$error)) {
                                            $telefenosimputadossolicitudesDao = new TelefonosimputadossolicitudesDAO();
                                            $telefenosimputadossolicitudesDto = $telefenosimputadossolicitudesDao->insertTelefonosimputadossolicitudes($telefenosimputadossolicitudesDto, $this->proveedor);

                                            if ($telefenosimputadossolicitudesDto == "") {
                                                $msg[] = ("No se logro registrar el telefono debido a algun error en la transaccion");
                                                $error = true;
                                            }
                                        }
                                    }
                                }

                                if (count($arreglo["tutores"]) > 0) {
//                        var_dump($arreglo["tutores"]);
                                    for ($index = 0; $index < count($arreglo["tutores"]); $index++) {
                                        $tutoresimputadosDto = new TutoresimputadosDTO();
                                        $tutoresimputadosDto->setIdImputadoSolicitud($ImputadossolicitudesDto[0]->getIdImputadoSolicitud());
                                        $tutoresimputadosDto->setCveGenero($arreglo["tutores"][$index]["cveGenero"]);
                                        $tutoresimputadosDto->setCveTipoTutor($arreglo["tutores"][$index]["cveTipoTutor"]);
                                        $tutoresimputadosDto->setNombre($arreglo["tutores"][$index]["nombre"]);
                                        $tutoresimputadosDto->setPaterno($arreglo["tutores"][$index]["paterno"]);
                                        $tutoresimputadosDto->setMaterno($arreglo["tutores"][$index]["materno"]);
                                        $tutoresimputadosDto->setFechaNacimiento($arreglo["tutores"][$index]["fechaNacimiento"]);
                                        $tutoresimputadosDto->setEdad($arreglo["tutores"][$index]["edad"]);
                                        $tutoresimputadosDto->setActivo("S");
                                        if ((!$error)) {
                                            $tutoresimputadosDao = new TutoresimputadosDAO();
                                            $tutoresimputadosDto = $tutoresimputadosDao->insertTutoresimputados($tutoresimputadosDto, $this->proveedor);
                                            if ($tutoresimputadosDto == "") {
                                                $msg[] = ("No se logro registrar el tutor debido a algun error en la transaccion");
                                                $error = true;
                                            }
                                        }
                                    }
                                }

                                if (count($arreglo["nacionalidad"]) > 0) {
//                        var_dump($arreglo["tutores"]);
                                    for ($index = 0; $index < count($arreglo["nacionalidad"]); $index++) {
                                        $nacionalidadimputadosDto = new NacionalidadesimputadossolicitudesDTO();
                                        $nacionalidadimputadosDto->setIdImputadoSolicitud($ImputadossolicitudesDto[0]->getIdImputadoSolicitud());
                                        $nacionalidadimputadosDto->setCvePais($arreglo["nacionalidad"][$index]["cvePais"]);
                                        $nacionalidadimputadosDto->setActivo("S");
                                        if ((!$error)) {
                                            $nacionalidadesimputadossolicitudesDao = new NacionalidadesimputadossolicitudesDAO();
                                            $nacionalidadimputadosDto = $nacionalidadesimputadossolicitudesDao->insertNacionalidadesimputadossolicitudes($nacionalidadimputadosDto, $this->proveedor);

                                            if ($nacionalidadimputadosDto == "") {
                                                $msg[] = ("No se logro registrar la nacionalidad debido a algun error en la transaccion");
                                                $error = true;
                                            }
                                        }
                                    }
                                }

                                if (count($arreglo["drogas"]) > 0) {
//                        var_dump($arreglo["tutores"]);
                                    for ($index = 0; $index < count($arreglo["drogas"]); $index++) {
                                        $drogasImputadoDto = new ImputadosdrogasDTO();
                                        $drogasImputadoDto->setIdImputadoSolicitud($ImputadossolicitudesDto[0]->getIdImputadoSolicitud());
                                        $drogasImputadoDto->setCveDroga($arreglo["drogas"][$index]["cveDroga"]);
                                        $drogasImputadoDto->setActivo("S");
                                        if ((!$error)) {
                                            $imputadosDrogasDao = new ImputadosdrogasDAO();
                                            $drogasImputadoDto = $imputadosDrogasDao->insertImputadosdrogas($drogasImputadoDto, $this->proveedor);

                                            if ($drogasImputadoDto == "") {
                                                $msg[] = ("No se logro registrar el tutor debido a algun error en la transaccion");
                                                $error = true;
                                            }
                                        }
                                    }
                                }

                                $resultado = array(
                                    "idImputadoSolicitud" => $ImputadossolicitudesDto[0]->getIdImputadoSolicitud(),
                                    "idSolicitudAudiencia" => $ImputadossolicitudesDto[0]->getIdSolicitudAudiencia(),
                                    "detenido" => $ImputadossolicitudesDto[0]->getDetenido(),
                                    "nombre" => $ImputadossolicitudesDto[0]->getNombre(),
                                    "paterno" => $ImputadossolicitudesDto[0]->getPaterno(),
                                    "materno" => $ImputadossolicitudesDto[0]->getMaterno(),
                                    "rfc" => $ImputadossolicitudesDto[0]->getRfc(),
                                    "curp" => $ImputadossolicitudesDto[0]->getCurp(),
                                    "cveTipoDetencion" => $ImputadossolicitudesDto[0]->getCveTipoDetencion(),
                                    "cveGenero" => $ImputadossolicitudesDto[0]->getCveGenero(),
                                    "alias" => $ImputadossolicitudesDto[0]->getAlias(),
                                    "fechaDeclaracion" => $ImputadossolicitudesDto[0]->getFechaDeclaracion(),
                                    "cvePaisNacimiento" => $ImputadossolicitudesDto[0]->getCvePaisNacimiento(),
                                    "cveEstadoNacimiento" => $ImputadossolicitudesDto[0]->getCveEstadoNacimiento(),
                                    "cveMunicipioNacimiento" => $ImputadossolicitudesDto[0]->getCveMunicipioNacimiento(),
                                    "fechaNacimiento" => $ImputadossolicitudesDto[0]->getFechaNacimiento(),
                                    "edad" => $ImputadossolicitudesDto[0]->getEdad(),
                                    "cveTipoPersona" => $ImputadossolicitudesDto[0]->getCveTipoPersona(),
                                    "CveTipoReligion" => $ImputadossolicitudesDto[0]->getCveTipoReligion(),
                                    "nombreMoral" => $ImputadossolicitudesDto[0]->getNombreMoral(),
                                    "cveNivelInstruccion" => $ImputadossolicitudesDto[0]->getCveNivelInstruccion(),
                                    "cveEstadoCivil" => $ImputadossolicitudesDto[0]->getCveEstadoCivil(),
                                    "cveEspanol" => $ImputadossolicitudesDto[0]->getCveEspanol(),
                                    "cveAlfabetismo" => $ImputadossolicitudesDto[0]->getCveAlfabetismo(),
                                    "cveDialectoIndigena" => $ImputadossolicitudesDto[0]->getCveDialectoIndigena(),
                                    "cveTipoFamiliaLinguistica" => $ImputadossolicitudesDto[0]->getCveTipoFamiliaLinguistica(),
                                    "cveOcupacion" => $ImputadossolicitudesDto[0]->getCveOcupacion(),
                                    "cveInterprete" => $ImputadossolicitudesDto[0]->getCveInterprete(),
                                    "cveEstadoPsicofisico" => $ImputadossolicitudesDto[0]->getCveEstadoPsicofisico(),
                                    "fechaImputacion" => $ImputadossolicitudesDto[0]->getFechaImputacion(),
                                    "fechaControlDet" => $ImputadossolicitudesDto[0]->getFechaControlDet(),
                                    "fecTerminoCons" => $ImputadossolicitudesDto[0]->getFecTerminoCons(),
                                    "fecCierreInv" => $ImputadossolicitudesDto[0]->getFecCierreInv(),
                                    "estadoNacimiento" => $ImputadossolicitudesDto[0]->getEstadoNacimiento(),
                                    "municipioNacimiento" => $ImputadossolicitudesDto[0]->getMunicipioNacimiento(),
                                    "relacionMoral" => $ImputadossolicitudesDto[0]->getRelacionMoral(),
                                    "personaMoral" => $ImputadossolicitudesDto[0]->getPersonaMoral(),
                                    "cveCereso" => $ImputadossolicitudesDto[0]->getCveCereso(),
                                    "ingresoMensual" => $ImputadossolicitudesDto[0]->getIngresoMensual(),
                                    "cveGrupoEdnico" => $ImputadossolicitudesDto[0]->getCveGrupoEdnico(),
                                    "domicilios" => array(
                                        "idDomicilioImputadoSolicitud" => $domiciliosimputadossolicitudesDto[0]->getIdDomicilioImputadoSolicitud(),
                                        "cvePais" => $domiciliosimputadossolicitudesDto[0]->getCvePais(),
                                        "cveEstado" => $domiciliosimputadossolicitudesDto[0]->getCveEstado(),
                                        "cveMunicipio" => $domiciliosimputadossolicitudesDto[0]->getCveMunicipio(),
                                        "direccion" => $domiciliosimputadossolicitudesDto[0]->getDireccion(),
                                        "colonia" => $domiciliosimputadossolicitudesDto[0]->getColonia(),
                                        "numInterior" => $domiciliosimputadossolicitudesDto[0]->getNumInterior(),
                                        "numExterior" => $domiciliosimputadossolicitudesDto[0]->getNumExterior(),
                                        "cp" => $domiciliosimputadossolicitudesDto[0]->getCp(),
                                        "latitud" => $domiciliosimputadossolicitudesDto[0]->getLatitud(),
                                        "longitud" => $domiciliosimputadossolicitudesDto[0]->getLongitud(),
                                        "recidenciaHabitual" => $domiciliosimputadossolicitudesDto[0]->getRecidenciaHabitual(),
                                        "estado" => $domiciliosimputadossolicitudesDto[0]->getEstado(),
                                        "municipio" => $domiciliosimputadossolicitudesDto[0]->getMunicipio(),
                                        "cveConvivencia" => $domiciliosimputadossolicitudesDto[0]->getCveConvivencia(),
                                        "cveTipoVivienda" => $domiciliosimputadossolicitudesDto[0]->getCveTipoDeVivienda(),
                                    ),
                                    "telefonos" => array(
                                        "idTelefonoImputadosSolicitud" => $telefenosimputadossolicitudesDto[0]->getIdTelefonoImputadosSolicitud(),
                                        "telefono" => $telefenosimputadossolicitudesDto[0]->getTelefono(),
                                        "celular" => $telefenosimputadossolicitudesDto[0]->getCelular(),
                                        "email" => $telefenosimputadossolicitudesDto[0]->getEmail(),
                                    ),
                                    "defensores" => array(
                                        "idDefensorImputadoSolicitud" => $defensoresimputadossolicitudesDto[0]->getIdDefensorImputadoSolicitud(),
                                        "cveTipoDefensor" => $defensoresimputadossolicitudesDto[0]->getCveTipoDefensor(),
                                        "nombre" => $defensoresimputadossolicitudesDto[0]->getNombre(),
                                        "telefono" => $defensoresimputadossolicitudesDto[0]->getTelefono(),
                                        "celular" => $defensoresimputadossolicitudesDto[0]->getCelular(),
                                        "email" => $defensoresimputadossolicitudesDto[0]->getEmail(),
                                    ),
                                    "drogas" => array(
                                        "idImputadoDroga" => $drogasImputadoDto[0]->getIdImputadoDroga(),
                                        "cveDroga" => $drogasImputadoDto[0]->getCveDroga(),
                                    ),
                                    "tutores" => array(
                                        "idTutorImputado" => $tutoresimputadosDto[0]->getIdTutorImputado(),
                                        "cveGenero" => $tutoresimputadosDto[0]->getCveGenero(),
                                        "cveTipoTutor" => $tutoresimputadosDto[0]->getCveTipoTutor(),
                                        "nombre" => $tutoresimputadosDto[0]->getNombre(),
                                        "paterno" => $tutoresimputadosDto[0]->getPaterno(),
                                        "materno" => $tutoresimputadosDto[0]->getMaterno(),
                                        "fechaNacimiento" => $tutoresimputadosDto[0]->getFechaNacimiento(),
                                        "edad" => $tutoresimputadosDto[0]->getEdad(),
                                    ),
                                    "nacionalidad" => array(
                                        "idNacionalidadImputadoSolicitud" => $nacionalidadimputadosDto[0]->getIdNacionalidadImputadoSolicitud(),
                                        "cvePais" => $nacionalidadimputadosDto[0]->getCvePais(),
                                    )
                                );
                                array_push($listaResultados, $resultado);
                            } else {
                                $msg[] = ("No se logro registrar el imputado debido a algun error en la transaccion ");
                                $error = true;
                            }
                        } else {
                            $msg[] = ("El imputado ya existe en la solicitud de audiencia");
                            $error = true;
                        }
                    } else {
                        $result = array("Error" => $msg);
                    }
                } else {
                    $msg = ("La solicitud no existe verifique");
                    $result = array("Error" => $msg);
                }
                $count++;
                $indexCount++;
                $arrayAuxiliar[$indexCount] = $ImputadossolicitudesDto;
            } else {
////////////////////////////////////////////////////////////////
//UPDATE DE IMPUTADOS SOLICITUD
////////////////////////////////////////////////////////////////
                $ImputadossolicitudesDto = new ImputadossolicitudesDTO();
                if (count($arreglo["imputado"]) > 0) {
                    $ImputadossolicitudesDto->setIdImputadoSolicitud($arreglo["imputado"]["idImputadoSolicitud"]);
                    $ImputadossolicitudesDto->setIdSolicitudAudiencia($arreglo["imputado"]["idSolicitudAudiencia"]);
                    $ImputadossolicitudesDto->setActivo($arreglo["imputado"]["activo"]);
                    $ImputadossolicitudesDto->setDetenido($arreglo["imputado"]["detenido"]);
                    $ImputadossolicitudesDto->setNombre($arreglo["imputado"]["nombre"]);
                    $ImputadossolicitudesDto->setPaterno($arreglo["imputado"]["paterno"]);
                    $ImputadossolicitudesDto->setMaterno($arreglo["imputado"]["materno"]);
                    $ImputadossolicitudesDto->setRfc($arreglo["imputado"]["rfc"]);
                    $ImputadossolicitudesDto->setCurp($arreglo["imputado"]["curp"]);
                    $ImputadossolicitudesDto->setCveTipoDetencion($arreglo["imputado"]["cveTipoDetencion"]);
                    $ImputadossolicitudesDto->setCveGenero($arreglo["imputado"]["cveGenero"]);
                    $ImputadossolicitudesDto->setAlias($arreglo["imputado"]["alias"]);
                    $ImputadossolicitudesDto->setFechaDeclaracion($arreglo["imputado"]["fechaDeclaracion"]);
                    $ImputadossolicitudesDto->setCvePaisNacimiento($arreglo["imputado"]["cvePaisNacimiento"]);
                    $ImputadossolicitudesDto->setCveEstadoNacimiento($arreglo["imputado"]["cveEstadoNacimiento"]);
                    $ImputadossolicitudesDto->setCveMunicipioNacimiento($arreglo["imputado"]["cveMunicipioNacimiento"]);
                    $ImputadossolicitudesDto->setFechaNacimiento($arreglo["imputado"]["fechaNacimiento"]);
                    $ImputadossolicitudesDto->setEdad($arreglo["imputado"]["edad"]);
                    $ImputadossolicitudesDto->setCveTipoPersona($arreglo["imputado"]["cveTipoPersona"]);
                    $ImputadossolicitudesDto->setCveTipoReligion($arreglo["imputado"]["CveTipoReligion"]);
                    $ImputadossolicitudesDto->setNombreMoral($arreglo["imputado"]["nombreMoral"]);
                    $ImputadossolicitudesDto->setCveNivelInstruccion($arreglo["imputado"]["cveNivelInstruccion"]);
                    $ImputadossolicitudesDto->setCveEstadoCivil($arreglo["imputado"]["cveEstadoCivil"]);
                    $ImputadossolicitudesDto->setCveEspanol($arreglo["imputado"]["cveEspanol"]);
                    $ImputadossolicitudesDto->setCveAlfabetismo($arreglo["imputado"]["cveAlfabetismo"]);
                    $ImputadossolicitudesDto->setCveDialectoIndigena($arreglo["imputado"]["cveDialectoIndigena"]);
                    $ImputadossolicitudesDto->setCveTipoFamiliaLinguistica($arreglo["imputado"]["cveTipoFamiliaLinguistica"]);
                    $ImputadossolicitudesDto->setCveOcupacion($arreglo["imputado"]["cveOcupacion"]);
                    $ImputadossolicitudesDto->setCveInterprete($arreglo["imputado"]["cveInterprete"]);
                    $ImputadossolicitudesDto->setCveEstadoPsicofisico($arreglo["imputado"]["cveEstadoPsicofisico"]);
                    $ImputadossolicitudesDto->setFechaImputacion($arreglo["imputado"]["fechaImputacion"]);
                    $ImputadossolicitudesDto->setFechaControlDet($arreglo["imputado"]["fechaControlDet"]);
                    $ImputadossolicitudesDto->setFecTerminoCons($arreglo["imputado"]["fecTerminoCons"]);
                    $ImputadossolicitudesDto->setFecCierreInv($arreglo["imputado"]["fecCierreInv"]);
                    $ImputadossolicitudesDto->setEstadoNacimiento($arreglo["imputado"]["estadoNacimiento"]);
                    $ImputadossolicitudesDto->setMunicipioNacimiento($arreglo["imputado"]["municipioNacimiento"]);
                    $ImputadossolicitudesDto->setRelacionMoral($arreglo["imputado"]["relacionMoral"]);
                    $ImputadossolicitudesDto->setPersonaMoral($arreglo["imputado"]["personaMoral"]);
                    $ImputadossolicitudesDto->setCveCereso($arreglo["imputado"]["cveCereso"]);
                    $ImputadossolicitudesDto->setIngresoMensual($arreglo["imputado"]["ingresoMensual"]);
                    $ImputadossolicitudesDto->setCveGrupoEdnico($arreglo["imputado"]["cveGrupoEdnico"]);
                    $ImputadossolicitudesDto->setCveEtapaProcesal($arreglo["imputado"]["cveEtapaProcesal"]);
                    $ImputadossolicitudesDto->setCveTipoReincidencia($arreglo["imputado"]["cveTipoReincidencia"]);
                    $ImputadossolicitudesDto->setTieneSobreseimiento($arreglo["imputado"]["TieneSobreseimiento"]);
                    $ImputadossolicitudesDto->setFechaSobreseimiento($arreglo["imputado"]["FechaSobreseimiento"]);
                    $ImputadossolicitudesDto->setIdImputadoCarpeta($arreglo["imputado"]["idImputadoCarpeta"]);
                }

                $ImputadossolicitudesDto = $this->validarImputadossolicitudes($ImputadossolicitudesDto);
                $solicitudesAudienciasDto = new SolicitudesaudienciasDTO();
                $solicitudesAudienciasDto->setIdSolicitudAudiencia($ImputadossolicitudesDto->getIdSolicitudAudiencia());
                $solicitudesAudienciasDao = new SolicitudesaudienciasDAO();
                $solicitudesAudienciasDto = $solicitudesAudienciasDao->selectSolicitudesaudiencias($solicitudesAudienciasDto);

                if ($solicitudesAudienciasDto != "") {

                    if ($ImputadossolicitudesDto->getCveTipoPersona() == 1) {
                        if (!$validacion->text(1, 50, (string) $ImputadossolicitudesDto->getNombre())) {
                            $msg[] = ("No ingreso un nombre correcto en la posicion:" . $count);
                            $error = true;
                        }

                        if (!$validacion->text(1, 50, $ImputadossolicitudesDto->getPaterno())) {
                            $msg[] = ("No ingreso un apellido paterno en la posicion:" . $count);
                            $error = true;
                        }

                        if (!$validacion->text(1, 50, $ImputadossolicitudesDto->getMaterno())) {
                            $msg[] = ("No ingreso un apellido materno en la posicion:" . $count);
                            $error = true;
                        }

                        if (!$validacion->text(1, 1, (string) $ImputadossolicitudesDto->getDetenido())) {
                            $msg[] = ("No ingreso si esta detenido o no (S o N) en la posicion:" . $count);
                            $error = true;
                        }

                        if (!$validacion->text(1, 1, (string) $ImputadossolicitudesDto->getRelacionMoral())) {
                            $msg[] = ("No ingreso si tiene relacion moral (S o N) en la posicion:" . $count);
                            $error = true;
                        }

                        if ($ImputadossolicitudesDto->getRelacionMoral() == 'S') {
                            if (!$validacion->text(0, 500, (string) $ImputadossolicitudesDto->getPersonaMoral())) {
                                if ($ImputadossolicitudesDto->getPersonaMoral() == "") {
                                    $msg[] = ("El nombre de la persona moral no es valido en la posicion:" . $count);
                                    $error = true;
                                }
                            }
                        }


                        if ($ImputadossolicitudesDto->getRfc() != "") {
                            if (!$validacion->rfc((string) $ImputadossolicitudesDto->getRfc())) {
                                $msg[] = ("El rfc registrado no es un formato valido en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if ($ImputadossolicitudesDto->getCurp() != "") {
                            if (!$validacion->curp((string) $ImputadossolicitudesDto->getCurp())) {
                                $msg[] = ("La curp ingresada no es valida en la posicion:" . $count);
                                $error = true;
                            }
                        }



                        if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveGenero())) {
                            if ($ImputadossolicitudesDto->getCveGenero() <= 0) {
                                $msg[] = ("El genero seleccionado no es valido en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if (!$validacion->text(0, 50, (string) $ImputadossolicitudesDto->getAlias())) {
                            $msg[] = ("No ingreso un alias correcto en la posicion:" . $count);
                            $error = true;
                        }

                        if ($ImputadossolicitudesDto->getFechaDeclaracion() != "") {
                            if (!$validacion->date((string) $ImputadossolicitudesDto->getFechaDeclaracion())) {
                                $msg[] = ("El formato de fecha de declaracion no es valido en la posicion:" . $count);
                                $error = true;
                            } else {
                                $ImputadossolicitudesDto->setFechaDeclaracion($validacion->normalToMysql($ImputadossolicitudesDto->getFechaDeclaracion()));
                            }
                        }

                        if (!$validacion->num(1, 3, (int) $ImputadossolicitudesDto->getCvePaisNacimiento())) {
                            if ($ImputadossolicitudesDto->getCvePaisNacimiento() <= 0) {
                                $msg[] = ("El pais de nacimiento no es correcto en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if ($ImputadossolicitudesDto->getCvePaisNacimiento() == 119) {
                            if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveEstadoNacimiento())) {
                                if ($ImputadossolicitudesDto->getCveEstadoNacimiento() <= 0) {
                                    $msg[] = ("El estado de nacimiento es requerido en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if (!$validacion->num(1, 5, (int) $ImputadossolicitudesDto->getCveMunicipioNacimiento())) {
                                if ($ImputadossolicitudesDto->getCveMunicipioNacimiento() <= 0) {
                                    $msg[] = ("El municipio de nacimiento es requerido en la posicion:" . $count);
                                    $error = true;
                                }
                            }
                        } else {
                            if (!$validacion->text(1, 200, (string) $ImputadossolicitudesDto->getEstadoNacimiento())) {
                                if ($ImputadossolicitudesDto->getEstadoNacimiento() == "") {
                                    $msg[] = ("El estado de nacimiento es requerido en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if (!$validacion->text(1, 200, (string) $ImputadossolicitudesDto->getMunicipioNacimiento())) {
                                if ($ImputadossolicitudesDto->getMunicipioNacimiento() == "") {
                                    $msg[] = ("El municipio de nacimiento es requerido en la posicion:" . $count);
                                    $error = true;
                                }
                            }
                        }


                        if ($ImputadossolicitudesDto->getFechaNacimiento() != "") {
                            if (!$validacion->date((string) $ImputadossolicitudesDto->getFechaNacimiento())) {
                                $msg[] = ("El formato de fecha de nacimiento no es valido en la posicion:" . $count);
                                $error = true;
                            } else {
                                $ImputadossolicitudesDto->setFechaNacimiento($validacion->normalToMysql($ImputadossolicitudesDto->getFechaNacimiento()));
                            }
                        }

                        if ($ImputadossolicitudesDto->getEdad() != "") {
                            if (!$validacion->num(1, 3, (string) $ImputadossolicitudesDto->getEdad())) {
                                $msg[] = ("La edad ingresada no es valida en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveNivelInstruccion())) {
                            if ($ImputadossolicitudesDto->getCveNivelInstruccion() <= 0) {
                                $msg[] = ("El nivel de instruccion no es correcto en la posicion:" . $count);
                                $error = true;
                            }
                        }
                        if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveEstadoCivil())) {
                            if ($ImputadossolicitudesDto->getCveEstadoCivil() <= 0) {
                                $msg[] = ("El estado civil no es correcto en la posicion:" . $count);
                                $error = true;
                            }
                        }
                        if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveEspanol())) {
                            if ($ImputadossolicitudesDto->getCveEspanol() <= 0) {
                                $msg[] = ("No se identifica la clave para saber si habla espanol en la posicion:" . $count);
                                $error = true;
                            }
                        }
                        if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveAlfabetismo())) {
                            if ($ImputadossolicitudesDto->getCveAlfabetismo() <= 0) {
                                $msg[] = ("No se identifico una clave valida de alfabetismo en la posicion:" . $count);
                                $error = true;
                            }
                        }
                        if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveDialectoIndigena())) {
                            if ($ImputadossolicitudesDto->getCveDialectoIndigena() <= 0) {
                                $msg[] = ("No se identifico una clave valida de dialecto indigena en la posicion:" . $count);
                                $error = true;
                            }
                        }
                        if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveTipoFamiliaLinguistica())) {
                            if ($ImputadossolicitudesDto->getCveTipoFamiliaLinguistica() <= 0) {
                                $msg[] = ("No se identifico una clave valida de tipo de familia linguistica en la posicion:" . $count);
                                $error = true;
                            }
                        }
                        if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveOcupacion())) {
                            if ($ImputadossolicitudesDto->getCveOcupacion() <= 0) {
                                $msg[] = ("No se identifico una clave valida de tipo de ocupacion en la posicion:" . $count);
                                $error = true;
                            }
                        }
                        if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveInterprete())) {
                            if ($ImputadossolicitudesDto->getCveInterprete() <= 0) {
                                $msg[] = ("No se identifico una clave valida si requiere interprete en la posicion:" . $count);
                                $error = true;
                            }
                        }
                        if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveEstadoPsicofisico())) {
                            if ($ImputadossolicitudesDto->getCveEstadoPsicofisico() <= 0) {
                                $msg[] = ("No se identifico una clave valida del estado psicofisico en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if ($ImputadossolicitudesDto->getDetenido() == "S") {
                            if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveCereso())) {
                                if ($ImputadossolicitudesDto->getCveCereso() <= 0) {
                                    $msg[] = ("No se identifico una clave valida para identificar el cereso en la posicion:" . $count);
                                    $error = true;
                                }
                            }
                            if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveTipoDetencion())) {
                                if ($ImputadossolicitudesDto->getCveTipoDetencion() <= 0) {
                                    $msg[] = ("El tipo de detencion no es valido en la posicion:" . $count);
                                    $error = true;
                                }
                            }
                        }
                        if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveTipoReincidencia())) {
                            if ($ImputadossolicitudesDto->getCveTipoReincidencia() <= 0) {
                                $msg[] = ("No se identifico una clave valida para tipo de reincidencia en la posicion:" . $count);
                                $error = true;
                            }
                        }
                        if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveGrupoEdnico())) {
                            if ($ImputadossolicitudesDto->getCveTipoReincidencia() <= 0) {
                                $msg[] = ("No se identifico una clave valida para tipo de reincidencia en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if ($ImputadossolicitudesDto->getFechaImputacion() != "") {
                            if (!$validacion->date((string) $ImputadossolicitudesDto->getFechaImputacion())) {
                                $msg[] = ("El formato de fecha de inputacion no es valido en la posicion:" . $count);
                                $error = true;
                            } else {
                                $ImputadossolicitudesDto->setFechaImputacion($validacion->normalToMysql($ImputadossolicitudesDto->getFechaImputacion()));
                            }
                        }

                        if ($ImputadossolicitudesDto->getFechaControlDet() != "") {
                            if (!$validacion->date((string) $ImputadossolicitudesDto->getFechaControlDet())) {
                                $msg[] = ("El formato de fecha de control de detencion no es valido en la posicion:" . $count);
                                $error = true;
                            } else {
                                $ImputadossolicitudesDto->setFechaControlDet($validacion->normalToMysql($ImputadossolicitudesDto->getFechaControlDet()));
                            }
                        }
                        if ($ImputadossolicitudesDto->getFecTerminoCons() != "") {
                            if (!$validacion->date((string) $ImputadossolicitudesDto->getFecTerminoCons())) {
                                $msg[] = ("El formato de fecha de control de termino constitucional no es valido en la posicion:" . $count);
                                $error = true;
                            } else {
                                $ImputadossolicitudesDto->setFecTerminoCons($validacion->normalToMysql($ImputadossolicitudesDto->getFecTerminoCons()));
                            }
                        }
                        if ($ImputadossolicitudesDto->getFecCierreInv() != "") {
                            if (!$validacion->date((string) $ImputadossolicitudesDto->getFecCierreInv())) {
                                $msg[] = ("El formato de fecha de cierre de investigacion no es valido en la posicion:" . $count);
                                $error = true;
                            } else {
                                $ImputadossolicitudesDto->setFecCierreInv($validacion->normalToMysql($ImputadossolicitudesDto->getFecCierreInv()));
                            }
                        }
                    } else if (($ImputadossolicitudesDto->getCveTipoPersona() == 2) || ($ImputadossolicitudesDto->getCveTipoPersona() == 3)) {
                        if (!$validacion->text(1, 500, $ImputadossolicitudesDto->getNombreMoral())) {
                            $msg[] = ("El nombre moral no es correcto en la posicion:" . $count);
                            $error = true;
                        }

                        if ($ImputadossolicitudesDto->getRfc() != "") {
                            if (!$validacion->rfc((string) $ImputadossolicitudesDto->getRfc())) {
                                $msg[] = ("El rfc registrado no es un formato valido en la posicion:" . $count);
                                $error = true;
                            }
                        }

                        if ($ImputadossolicitudesDto->getCurp() != "") {
                            if (!$validacion->curp((string) $ImputadossolicitudesDto->getCurp())) {
                                $msg[] = ("La curp ingresada no es valida en la posicion:" . $count);
                                $error = true;
                            }
                        }
                    } else {
                        $msg[] = ("El tipo de persona no es correcto");
                        $error = true;
                    }

                    if (count($arreglo["defensores"]) > 0) {
                        for ($index = 0; $index < count($arreglo["defensores"]); $index++) {
                            $defensoresimputadossolicitudesDto = new DefensoresimputadossolicitudesDTO();
                            $defensoresimputadossolicitudesDto->setIdDefensorImputadoSolicitud($arreglo["defensores"][$index]["idDefensorImputadoSolicitud"]);
                            $defensoresimputadossolicitudesDto->setIdImputadoSolicitud($arreglo["defensores"][$index]["idImputadoSolicitud"]);
                            $defensoresimputadossolicitudesDto->setCveTipoDefensor($arreglo["defensores"][$index]["cveTipoDefensor"]);
                            $defensoresimputadossolicitudesDto->setNombre($arreglo["defensores"][$index]["nombre"]);
                            $defensoresimputadossolicitudesDto->setTelefono($arreglo["defensores"][$index]["telefono"]);
                            $defensoresimputadossolicitudesDto->setCelular($arreglo["defensores"][$index]["celular"]);
                            $defensoresimputadossolicitudesDto->setEmail($arreglo["defensores"][$index]["email"]);
                            $defensoresimputadossolicitudesDto->setActivo("S");

                            $defensoresimputadossolicitudesDto = $this->validarDefensores($defensoresimputadossolicitudesDto);

                            if (!$validacion->text(1, 2, (int) $defensoresimputadossolicitudesDto->getCveTipoDefensor())) {
                                if ($defensoresimputadossolicitudesDto->getCveTipoDefensor() <= 0) {
                                    $msg[] = ("El tipo de defensor no es valido en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if (!$validacion->text(1, 500, (string) $defensoresimputadossolicitudesDto->getNombre())) {
                                if ($defensoresimputadossolicitudesDto->getNombre() == "") {
                                    $msg[] = ("No ingreso un nombre correcto en la posicion:" . $count);
                                    $error = true;
                                }
                            }
                            if ($defensoresimputadossolicitudesDto->getTelefono() != "") {
                                if (!$validacion->telefono((string) $defensoresimputadossolicitudesDto->getTelefono())) {
                                    $msg[] = ("No ingreso un Telefono correcto correcto en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if ($defensoresimputadossolicitudesDto->getCelular() != "") {
                                if (!$validacion->telefono((string) $defensoresimputadossolicitudesDto->getCelular())) {
                                    $msg[] = ("No ingreso un celular correcto en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if ($defensoresimputadossolicitudesDto->getEmail() == "") {
                                if (!$validacion->email((string) $defensoresimputadossolicitudesDto->getEmail())) {
                                    $msg[] = ("No ingreso un email correcto en la posicion:" . $count);
                                    $error = true;
                                }
                            }
                        }
                    } else {
                        $msg[] = ("Los imputados son requeridos");
                        $error = true;
                    }
                    if (count($arreglo["domicilios"]) > 0) {
                        for ($index = 0; $index < count($arreglo["domicilios"]); $index++) {
                            $domiciliosimputadossolicitudesDto = new DomiciliosimputadossolicitudesDTO();
                            $domiciliosimputadossolicitudesDto->setIdDomicilioImputadoSolicitud($arreglo["domicilios"][$index]["idDomicilioImputadoSolicitud"]);
                            $domiciliosimputadossolicitudesDto->setIdImputadoSolicitud($arreglo["domicilios"][$index]["idImputadoSolicitud"]);
                            $domiciliosimputadossolicitudesDto->setCvePais($arreglo["domicilios"][$index]["cvePais"]);
                            $domiciliosimputadossolicitudesDto->setCveEstado($arreglo["domicilios"][$index]["cveEstado"]);
                            $domiciliosimputadossolicitudesDto->setCveMunicipio($arreglo["domicilios"][$index]["cveMunicipio"]);
                            $domiciliosimputadossolicitudesDto->setDireccion($arreglo["domicilios"][$index]["direccion"]);
                            $domiciliosimputadossolicitudesDto->setColonia($arreglo["domicilios"][$index]["colonia"]);
                            $domiciliosimputadossolicitudesDto->setNumInterior($arreglo["domicilios"][$index]["numInterior"]);
                            $domiciliosimputadossolicitudesDto->setNumExterior($arreglo["domicilios"][$index]["numExterior"]);
                            $domiciliosimputadossolicitudesDto->setCp($arreglo["domicilios"][$index]["cp"]);
                            $domiciliosimputadossolicitudesDto->setLatitud($arreglo["domicilios"][$index]["latitud"]);
                            $domiciliosimputadossolicitudesDto->setLongitud($arreglo["domicilios"][$index]["longitud"]);
                            $domiciliosimputadossolicitudesDto->setRecidenciaHabitual($arreglo["domicilios"][$index]["recidenciaHabitual"]);
                            $domiciliosimputadossolicitudesDto->setEstado($arreglo["domicilios"][$index]["estado"]);
                            $domiciliosimputadossolicitudesDto->setMunicipio($arreglo["domicilios"][$index]["municipio"]);
                            $domiciliosimputadossolicitudesDto->setCveConvivencia($arreglo["domicilios"][$index]["cveConvivencia"]);
                            $domiciliosimputadossolicitudesDto->setCveTipoDeVivienda($arreglo["domicilios"][$index]["cveTipoDeVivienda"]);
//                            var_dump($domiciliosimputadossolicitudesDto);

                            $domiciliosimputadossolicitudesDto = $this->validarDomicilios($domiciliosimputadossolicitudesDto);


                            if (!$validacion->text(1, 3, (int) $domiciliosimputadossolicitudesDto->getCvePais())) {
                                if ($domiciliosimputadossolicitudesDto->getCvePais() <= 0) {
                                    $msg[] = ("El pais no puede estar en blanco en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if ($domiciliosimputadossolicitudesDto->getCvePais() == 119) {
                                if (!$validacion->num(1, 2, (int) $domiciliosimputadossolicitudesDto->getEstado())) {
                                    if ($domiciliosimputadossolicitudesDto->getCveEstado() <= 0) {
                                        $msg[] = ("El estado requerido en la posicion:" . $count);
                                        $error = true;
                                    }
                                }

                                if (!$validacion->num(1, 5, (int) $domiciliosimputadossolicitudesDto->getMunicipio())) {
                                    if ($domiciliosimputadossolicitudesDto->getCveMunicipio() <= 0) {
                                        $msg[] = ("El municipio es requerido en la posicion:" . $count);
                                        $error = true;
                                    }
                                }
                            } else {
                                if (!$validacion->text(1, 200, (string) $domiciliosimputadossolicitudesDto->getEstado())) {
                                    if ($domiciliosimputadossolicitudesDto->getEstado() == "") {
                                        $msg[] = ("El estado es requerido en la posicion:" . $count);
                                        $error = true;
                                    }
                                }

                                if (!$validacion->text(1, 200, (string) $domiciliosimputadossolicitudesDto->getMunicipio())) {
                                    if ($domiciliosimputadossolicitudesDto->getMunicipio() == "") {
                                        $msg[] = ("El municipio es requerido en la posicion:" . $count);
                                        $error = true;
                                    }
                                }
                            }

                            if (!$validacion->text(1, 500, (string) $domiciliosimputadossolicitudesDto->getDireccion())) {
                                if ($domiciliosimputadossolicitudesDto->getDireccion() == "") {
                                    $msg[] = ("La direccion es requerido en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if (!$validacion->text(1, 200, (string) $domiciliosimputadossolicitudesDto->getColonia())) {
                                if ($domiciliosimputadossolicitudesDto->getColonia() == "") {
                                    $msg[] = ("La colonia es requerido en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if ($domiciliosimputadossolicitudesDto->getNumInterior() != "") {
                                if (!$validacion->textNum(1, 10, (string) $domiciliosimputadossolicitudesDto->getNumInterior())) {
                                    $msg[] = ("El num interior es requerido en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if ($domiciliosimputadossolicitudesDto->getNumExterior() != "") {
                                if (!$validacion->textNum(1, 10, (string) $domiciliosimputadossolicitudesDto->getNumExterior())) {
                                    $msg[] = ("El num exterior es requerido en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if ($domiciliosimputadossolicitudesDto->getCp() != "") {
                                if (!$validacion->textNum(1, 6, (string) $domiciliosimputadossolicitudesDto->getCp())) {
                                    $msg[] = ("El Codigo postal es requerido en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if (!$validacion->textNum(1, 1, (string) $domiciliosimputadossolicitudesDto->getRecidenciaHabitual())) {
                                if ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() == "") {
                                    $msg[] = ("Se debe residencia habitual (S o N) en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if (!$validacion->text(1, 3, (int) $domiciliosimputadossolicitudesDto->getCveTipoDeVivienda())) {
                                if ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() <= 0) {
                                    $msg[] = ("Se debe de indicar el tipo de vivienda en la posicion:" . $count);
                                    $error = true;
                                }
                            }
                            if (!$validacion->text(1, 3, (int) $domiciliosimputadossolicitudesDto->getCveConvivencia())) {
                                if ($domiciliosimputadossolicitudesDto->getCveConvivencia() <= 0) {
                                    $msg[] = ("Se debe de indicar con quien vive en el domicilio en la posicion:" . $count);
                                    $error = true;
                                }
                            }
                        }
                    } else {
                        $msg[] = ("El o los docimiclios son requeridos");
                        $error = true;
                    }

                    if (count($arreglo["telefonos"]) > 0) {
                        for ($index = 0; $index < count($arreglo["telefonos"]); $index++) {
                            $telefenosimputadossolicitudesDto = new TelefonosimputadossolicitudesDTO();
                            $telefenosimputadossolicitudesDto->setIdTelefonoImputadosSolicitud($arreglo["telefonos"][$index]["idTelefonoImputadosSolicitud"]);
                            $telefenosimputadossolicitudesDto->setIdImputadoSolicitud($arreglo["telefonos"][$index]["idImputadoSolicitud"]);
                            $telefenosimputadossolicitudesDto->setTelefono($arreglo["telefonos"][$index]["telefono"]);
                            $telefenosimputadossolicitudesDto->setCelular($arreglo["telefonos"][$index]["celular"]);
                            $telefenosimputadossolicitudesDto->setEmail($arreglo["telefonos"][$index]["email"]);
                            $telefenosimputadossolicitudesDto->setActivo("S");

                            $telefenosimputadossolicitudesDto = $this->validarTelefonos($telefenosimputadossolicitudesDto);

                            if ($telefenosimputadossolicitudesDto->getTelefono() != "") {
                                if (!$validacion->telefono((string) $telefenosimputadossolicitudesDto->getTelefono())) {
                                    $msg[] = ("No ingreso un Telefono correcto en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if ($telefenosimputadossolicitudesDto->getCelular() != "") {
                                if (!$validacion->telefono((string) $telefenosimputadossolicitudesDto->getCelular())) {
                                    $msg[] = ("No ingreso un celular correcto en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if ($telefenosimputadossolicitudesDto->getEmail() == "") {
                                if (!$validacion->email((string) $telefenosimputadossolicitudesDto->getEmail())) {
                                    $msg[] = ("No ingreso un email correcto en la posicion:" . $count);
                                    $error = true;
                                }
                            }
                        }
                    }

                    if (count($arreglo["tutores"]) > 0) {
//                        var_dump($arreglo["tutores"]);
                        for ($index = 0; $index < count($arreglo["tutores"]); $index++) {
                            $tutoresimputadosDto = new TutoresimputadosDTO();
                            $tutoresimputadosDto->setIdTutorImputado($arreglo["tutores"][$index]["idTutorImputado"]);
                            $tutoresimputadosDto->setIdImputadoSolicitud($arreglo["tutores"][$index]["idImputadoSolicitud"]);
                            $tutoresimputadosDto->setCveGenero($arreglo["tutores"][$index]["cveGenero"]);
                            $tutoresimputadosDto->setCveTipoTutor($arreglo["tutores"][$index]["cveTipoTutor"]);
                            $tutoresimputadosDto->setNombre($arreglo["tutores"][$index]["nombre"]);
                            $tutoresimputadosDto->setPaterno($arreglo["tutores"][$index]["paterno"]);
                            $tutoresimputadosDto->setMaterno($arreglo["tutores"][$index]["materno"]);
                            $tutoresimputadosDto->setFechaNacimiento($arreglo["tutores"][$index]["fechaNacimiento"]);
                            $tutoresimputadosDto->setEdad($arreglo["tutores"][$index]["edad"]);
                            $tutoresimputadosDto->setActivo("S");

                            $tutoresimputadosDto = $this->validarTutores($tutoresimputadosDto);

                            if (!$validacion->num(1, 2, (int) $tutoresimputadosDto->getCveGenero())) {
                                if ($tutoresimputadosDto->getCveGenero() <= 0) {
                                    $msg[] = ("El genero seleccionado no es valido en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if (!$validacion->num(1, 2, (int) $tutoresimputadosDto->getCveTipoTutor())) {
                                if ($tutoresimputadosDto->getCveTipoTutor() <= 0) {
                                    $msg[] = ("El tipo de tutor seleccionado no es valido en la posicion:" . $count);
                                    $error = true;
                                }
                            }

                            if (!$validacion->text(1, 50, (string) $tutoresimputadosDto->getNombre())) {
                                $msg[] = ("No ingreso un nombre de tutor correcto en la posicion:" . $count);
                                $error = true;
                            }

                            if (!$validacion->text(1, 50, $tutoresimputadosDto->getPaterno())) {
                                $msg[] = ("No ingreso un apellido paterno de tutor correcto en la posicion:" . $count);
                                $error = true;
                            }

                            if (!$validacion->text(1, 50, $tutoresimputadosDto->getMaterno())) {
                                $msg[] = ("No ingreso un apellido materno de tutor correcto en la posicion:" . $count);
                                $error = true;
                            }

                            if ($tutoresimputadosDto->getFechaNacimiento() != "") {
                                if (!$validacion->date((string) $tutoresimputadosDto->getFechaNacimiento())) {
                                    $msg[] = ("El formato de fecha de nacimiento no es valido en la posicion:" . $count);
                                    $error = true;
                                } else {
                                    $tutoresimputadosDto->setFechaNacimiento($validacion->normalToMysql($tutoresimputadosDto->getFechaNacimiento()));
                                }
                            }
                        }
                    }
                    if (count($arreglo["nacionalidad"]) > 0) {
                        for ($index = 0; $index < count($arreglo["nacionalidad"]); $index++) {
                            $nacionalidadimputadosDto = new NacionalidadesimputadossolicitudesDTO();
                            $nacionalidadimputadosDto->setIdNacionalidadImputadoSolicitud($arreglo["nacionalidad"][$index]["idNacionalidadImputadoSolicitud"]);
                            $nacionalidadimputadosDto->setIdImputadoSolicitud($arreglo["nacionalidad"][$index]["idImputadoSolicitud"]);
                            $nacionalidadimputadosDto->setCvePais($arreglo["nacionalidad"][$index]["cvePais"]);
                            $nacionalidadimputadosDto->setActivo("S");

                            $nacionalidadimputadosDto = $this->validarNacionalidadesimputadossolicitudes($nacionalidadimputadosDto);

                            if (!$validacion->num(1, 2, (int) $nacionalidadimputadosDto->getCvePais())) {
                                if ($nacionalidadimputadosDto->getCvePais() <= 0) {
                                    $msg[] = ("El pais seleccionado no es valido en la posicion:" . $count);
                                    $error = true;
                                }
                            }
                        }
                    }
                    if (count($arreglo["drogas"]) > 0) {
                        for ($index = 0; $index < count($arreglo["drogas"]); $index++) {
                            $drogasImputadoDto = new ImputadosdrogasDTO();
                            $drogasImputadoDto->setIdImputadoDroga($arreglo["drogas"][$index]["idImputadoDroga"]);
                            $drogasImputadoDto->setIdImputadoSolicitud($arreglo["drogas"][$index]["idImputadoSolicitud"]);
                            $drogasImputadoDto->setCveDroga($arreglo["drogas"][$index]["cveDroga"]);
                            $drogasImputadoDto->setActivo("S");

                            $drogasImputadoDto = $this->validarImputadosdrogas($drogasImputadoDto);

                            if (!$validacion->num(1, 2, (int) $drogasImputadoDto->getCveDroga())) {
                                if ($drogasImputadoDto->getCveDroga() <= 0) {
                                    $msg[] = ("La droga seleccionado no es valido en la posicion:" . $count);
                                    $error = true;
                                }
                            }
                        }
                    }

                    if ((!$error) && (0 <= count($msg))) {
                        $imputadossolicitudesDao = new ImputadossolicitudesDAO();

                        $ImputadossolicitudesDto = $imputadossolicitudesDao->updateImputadossolicitudes($ImputadossolicitudesDto, $this->proveedor);
                        if ($ImputadossolicitudesDto != "") {
                            if (count($arreglo["defensores"]) > 0) {
                                for ($index = 0; $index < count($arreglo["defensores"]); $index++) {
                                    $defensoresimputadossolicitudesDto = new DefensoresimputadossolicitudesDTO();
                                    $defensoresimputadossolicitudesDto->setIdDefensorImputadoSolicitud($arreglo["defensores"][$index]["idDefensorImputadoSolicitud"]);
                                    $defensoresimputadossolicitudesDto->setIdImputadoSolicitud($ImputadossolicitudesDto[0]->getIdImputadoSolicitud());
                                    $defensoresimputadossolicitudesDto->setCveTipoDefensor($arreglo["defensores"][$index]["cveTipoDefensor"]);
                                    $defensoresimputadossolicitudesDto->setNombre($arreglo["defensores"][$index]["nombre"]);
                                    $defensoresimputadossolicitudesDto->setTelefono($arreglo["defensores"][$index]["telefono"]);
                                    $defensoresimputadossolicitudesDto->setCelular($arreglo["defensores"][$index]["celular"]);
                                    $defensoresimputadossolicitudesDto->setEmail($arreglo["defensores"][$index]["email"]);
                                    $defensoresimputadossolicitudesDto->setActivo("S");
                                    if ((!$error)) {
                                        $defensoresimputadossolicitudesDao = new DefensoresimputadossolicitudesDAO();
                                        $defensoresimputadossolicitudesDto = $defensoresimputadossolicitudesDao->updateDefensoresimputadossolicitudes($defensoresimputadossolicitudesDto, $this->proveedor);

                                        if ($defensoresimputadossolicitudesDto == "") {
                                            $msg[] = ("No se logro registrar el defensor debido a algun error en la transaccion");
                                            $error = true;
                                        }
                                    }
                                }
                            } else {
                                $msg[] = ("Los defensores son requeridos");
                                $error = true;
                            }

                            if (count($arreglo["domicilios"]) > 0) {
                                for ($index = 0; $index < count($arreglo["domicilios"]); $index++) {
                                    $domiciliosimputadossolicitudesDto = new DomiciliosimputadossolicitudesDTO();
                                    $domiciliosimputadossolicitudesDto->setIdDomicilioImputadoSolicitud(1);
                                    $domiciliosimputadossolicitudesDto->setIdImputadoSolicitud($ImputadossolicitudesDto[0]->getIdImputadoSolicitud());
                                    $domiciliosimputadossolicitudesDto->setCvePais($arreglo["domicilios"][$index]["cvePais"]);
                                    $domiciliosimputadossolicitudesDto->setCveEstado($arreglo["domicilios"][$index]["cveEstado"]);
                                    $domiciliosimputadossolicitudesDto->setCveMunicipio($arreglo["domicilios"][$index]["cveMunicipio"]);
                                    $domiciliosimputadossolicitudesDto->setDireccion($arreglo["domicilios"][$index]["direccion"]);
                                    $domiciliosimputadossolicitudesDto->setColonia($arreglo["domicilios"][$index]["colonia"]);
                                    $domiciliosimputadossolicitudesDto->setNumInterior($arreglo["domicilios"][$index]["numInterior"]);
                                    $domiciliosimputadossolicitudesDto->setNumExterior($arreglo["domicilios"][$index]["numExterior"]);
                                    $domiciliosimputadossolicitudesDto->setCp($arreglo["domicilios"][$index]["cp"]);
                                    $domiciliosimputadossolicitudesDto->setLatitud($arreglo["domicilios"][$index]["latitud"]);
                                    $domiciliosimputadossolicitudesDto->setLongitud($arreglo["domicilios"][$index]["longitud"]);
                                    $domiciliosimputadossolicitudesDto->setRecidenciaHabitual($arreglo["domicilios"][$index]["recidenciaHabitual"]);
                                    $domiciliosimputadossolicitudesDto->setEstado($arreglo["domicilios"][$index]["estado"]);
                                    $domiciliosimputadossolicitudesDto->setMunicipio($arreglo["domicilios"][$index]["municipio"]);
                                    $domiciliosimputadossolicitudesDto->setCveConvivencia($arreglo["domicilios"][$index]["cveConvivencia"]);
                                    $domiciliosimputadossolicitudesDto->setCveTipoDeVivienda($arreglo["domicilios"][$index]["cveTipoDeVivienda"]);
//                            var_dump($domiciliosimputadossolicitudesDto);
                                    if (!$error) {
                                        $domiciliosimputadossolicitudesDao = new DomiciliosimputadossolicitudesDAO();
                                        $domiciliosimputadossolicitudesDto = $domiciliosimputadossolicitudesDao->updateDomiciliosimputadossolicitudes($domiciliosimputadossolicitudesDto, $this->proveedor);

                                        if ($domiciliosimputadossolicitudesDto == "") {
                                            $msg[] = ("No se logro registrar el domicilio debido a algun error en la transaccion");
                                            $error = true;
                                        }
                                    }
                                }
                            } else {
                                $msg[] = ("El o los docimiclios son requeridos");
                                $error = true;
                            }

                            if (count($arreglo["telefonos"]) > 0) {
//                        var_dump($arreglo["telefonos"]);
                                for ($index = 0; $index < count($arreglo["telefonos"]); $index++) {
                                    $telefenosimputadossolicitudesDto = new TelefonosimputadossolicitudesDTO();
                                    $telefenosimputadossolicitudesDto->setIdTelefonoImputadosSolicitud($arreglo["telefonos"][$index]["idTelefonoImputadosSolicitud"]);
                                    $telefenosimputadossolicitudesDto->setIdImputadoSolicitud($ImputadossolicitudesDto[0]->getIdImputadoSolicitud());
                                    $telefenosimputadossolicitudesDto->setTelefono($arreglo["telefonos"][$index]["telefono"]);
                                    $telefenosimputadossolicitudesDto->setCelular($arreglo["telefonos"][$index]["celular"]);
                                    $telefenosimputadossolicitudesDto->setEmail($arreglo["telefonos"][$index]["email"]);
                                    $telefenosimputadossolicitudesDto->setActivo("S");
                                    if ((!$error)) {
                                        $telefenosimputadossolicitudesDao = new TelefonosimputadossolicitudesDAO();
                                        $telefenosimputadossolicitudesDto = $telefenosimputadossolicitudesDao->updateTelefonosimputadossolicitudes($telefenosimputadossolicitudesDto, $this->proveedor);

                                        if ($telefenosimputadossolicitudesDto == "") {
                                            $msg[] = ("No se logro registrar el telefono debido a algun error en la transaccion");
                                            $error = true;
                                        }
                                    }
                                }
                            }

                            if (count($arreglo["tutores"]) > 0) {
//                        var_dump($arreglo["tutores"]);
                                for ($index = 0; $index < count($arreglo["tutores"]); $index++) {
                                    $tutoresimputadosDto = new TutoresimputadosDTO();
                                    $tutoresimputadosDto->setIdTutorImputado($arreglo["tutores"][$index]["idTutorImputado"]);
                                    $tutoresimputadosDto->setIdImputadoSolicitud($ImputadossolicitudesDto[0]->getIdImputadoSolicitud());
                                    $tutoresimputadosDto->setCveGenero($arreglo["tutores"][$index]["cveGenero"]);
                                    $tutoresimputadosDto->setCveTipoTutor($arreglo["tutores"][$index]["cveTipoTutor"]);
                                    $tutoresimputadosDto->setNombre($arreglo["tutores"][$index]["nombre"]);
                                    $tutoresimputadosDto->setPaterno($arreglo["tutores"][$index]["paterno"]);
                                    $tutoresimputadosDto->setMaterno($arreglo["tutores"][$index]["materno"]);
                                    $tutoresimputadosDto->setFechaNacimiento($arreglo["tutores"][$index]["fechaNacimiento"]);
                                    $tutoresimputadosDto->setEdad($arreglo["tutores"][$index]["edad"]);
                                    $tutoresimputadosDto->setActivo("S");
                                    if ((!$error)) {
                                        $tutoresimputadosDao = new TutoresimputadosDAO();
                                        $tutoresimputadosDto = $tutoresimputadosDao->updateTutoresimputados($tutoresimputadosDto, $this->proveedor);
                                        if ($tutoresimputadosDto == "") {
                                            $msg[] = ("No se logro registrar el tutor debido a algun error en la transaccion");
                                            $error = true;
                                        }
                                    }
                                }
                            }

                            if (count($arreglo["nacionalidad"]) > 0) {
//                        var_dump($arreglo["tutores"]);
                                for ($index = 0; $index < count($arreglo["nacionalidad"]); $index++) {
                                    $nacionalidadimputadosDto = new NacionalidadesimputadossolicitudesDTO();
                                    $nacionalidadimputadosDto->setIdNacionalidadImputadoSolicitud($arreglo["nacionalidad"][$index]["idNacionalidadImputadoSolicitud"]);
                                    $nacionalidadimputadosDto->setIdImputadoSolicitud($ImputadossolicitudesDto[0]->getIdImputadoSolicitud());
                                    $nacionalidadimputadosDto->setCvePais($arreglo["nacionalidad"][$index]["cvePais"]);
                                    $nacionalidadimputadosDto->setActivo("S");
                                    if ((!$error)) {
                                        $nacionalidadesimputadossolicitudesDao = new NacionalidadesimputadossolicitudesDAO();
                                        $nacionalidadimputadosDto = $nacionalidadesimputadossolicitudesDao->updateNacionalidadesimputadossolicitudes($nacionalidadimputadosDto, $this->proveedor);

                                        if ($nacionalidadimputadosDto == "") {
                                            $msg[] = ("No se logro registrar la nacionalidad debido a algun error en la transaccion");
                                            $error = true;
                                        }
                                    }
                                }
                            }

                            if (count($arreglo["drogas"]) > 0) {
//                        var_dump($arreglo["tutores"]);
                                for ($index = 0; $index < count($arreglo["drogas"]); $index++) {
                                    $drogasImputadoDto = new ImputadosdrogasDTO();
                                    $drogasImputadoDto->setIdImputadoDroga($arreglo["drogas"][$index]["idImputadoDroga"]);
                                    $drogasImputadoDto->setIdImputadoSolicitud($ImputadossolicitudesDto[0]->getIdImputadoSolicitud());
                                    $drogasImputadoDto->setCveDroga($arreglo["drogas"][$index]["cveDroga"]);
                                    $drogasImputadoDto->setActivo("S");
                                    if ((!$error)) {
                                        $imputadosDrogasDao = new ImputadosdrogasDAO();
                                        $drogasImputadoDto = $imputadosDrogasDao->updateImputadosdrogas($drogasImputadoDto, $this->proveedor);

                                        if ($drogasImputadoDto == "") {
                                            $msg[] = ("No se logro registrar el tutor debido a algun error en la transaccion");
                                            $error = true;
                                        }
                                    }
                                }
                            }
                            $resultado = array(
                                "imputado" => $ImputadossolicitudesDto[0]->getIdImputadoSolicitud(),
                                "idSolicitudAudiencia" => $ImputadossolicitudesDto[0]->getIdSolicitudAudiencia(),
                                "detenido" => $ImputadossolicitudesDto[0]->getDetenido(),
                                "nombre" => $ImputadossolicitudesDto[0]->getNombre(),
                                "paterno" => $ImputadossolicitudesDto[0]->getPaterno(),
                                "materno" => $ImputadossolicitudesDto[0]->getMaterno(),
                                "rfc" => $ImputadossolicitudesDto[0]->getRfc(),
                                "curp" => $ImputadossolicitudesDto[0]->getCurp(),
                                "cveTipoDetencion" => $ImputadossolicitudesDto[0]->getCveTipoDetencion(),
                                "cveGenero" => $ImputadossolicitudesDto[0]->getCveGenero(),
                                "alias" => $ImputadossolicitudesDto[0]->getAlias(),
                                "fechaDeclaracion" => $ImputadossolicitudesDto[0]->getFechaDeclaracion(),
                                "cvePaisNacimiento" => $ImputadossolicitudesDto[0]->getCvePaisNacimiento(),
                                "cveEstadoNacimiento" => $ImputadossolicitudesDto[0]->getCveEstadoNacimiento(),
                                "cveMunicipioNacimiento" => $ImputadossolicitudesDto[0]->getCveMunicipioNacimiento(),
                                "fechaNacimiento" => $ImputadossolicitudesDto[0]->getFechaNacimiento(),
                                "edad" => $ImputadossolicitudesDto[0]->getEdad(),
                                "cveTipoPersona" => $ImputadossolicitudesDto[0]->getCveTipoPersona(),
                                "CveTipoReligion" => $ImputadossolicitudesDto[0]->getCveTipoReligion(),
                                "nombreMoral" => $ImputadossolicitudesDto[0]->getNombreMoral(),
                                "cveNivelInstruccion" => $ImputadossolicitudesDto[0]->getCveNivelInstruccion(),
                                "cveEstadoCivil" => $ImputadossolicitudesDto[0]->getCveEstadoCivil(),
                                "cveEspanol" => $ImputadossolicitudesDto[0]->getCveEspanol(),
                                "cveAlfabetismo" => $ImputadossolicitudesDto[0]->getCveAlfabetismo(),
                                "cveDialectoIndigena" => $ImputadossolicitudesDto[0]->getCveDialectoIndigena(),
                                "cveTipoFamiliaLinguistica" => $ImputadossolicitudesDto[0]->getCveTipoFamiliaLinguistica(),
                                "cveOcupacion" => $ImputadossolicitudesDto[0]->getCveOcupacion(),
                                "cveInterprete" => $ImputadossolicitudesDto[0]->getCveInterprete(),
                                "cveEstadoPsicofisico" => $ImputadossolicitudesDto[0]->getCveEstadoPsicofisico(),
                                "fechaImputacion" => $ImputadossolicitudesDto[0]->getFechaImputacion(),
                                "fechaControlDet" => $ImputadossolicitudesDto[0]->getFechaControlDet(),
                                "fecTerminoCons" => $ImputadossolicitudesDto[0]->getFecTerminoCons(),
                                "fecCierreInv" => $ImputadossolicitudesDto[0]->getFecCierreInv(),
                                "estadoNacimiento" => $ImputadossolicitudesDto[0]->getEstadoNacimiento(),
                                "municipioNacimiento" => $ImputadossolicitudesDto[0]->getMunicipioNacimiento(),
                                "relacionMoral" => $ImputadossolicitudesDto[0]->getRelacionMoral(),
                                "personaMoral" => $ImputadossolicitudesDto[0]->getPersonaMoral(),
                                "cveCereso" => $ImputadossolicitudesDto[0]->getCveCereso(),
                                "ingresoMensual" => $ImputadossolicitudesDto[0]->getIngresoMensual(),
                                "cveGrupoEdnico" => $ImputadossolicitudesDto[0]->getCveGrupoEdnico(),
                                "domicilios" => array(
                                    "idDomicilioImputadoSolicitud" => $domiciliosimputadossolicitudesDto[0]->getIdDomicilioImputadoSolicitud(),
                                    "cvePais" => $domiciliosimputadossolicitudesDto[0]->getCvePais(),
                                    "cveEstado" => $domiciliosimputadossolicitudesDto[0]->getCveEstado(),
                                    "cveMunicipio" => $domiciliosimputadossolicitudesDto[0]->getCveMunicipio(),
                                    "direccion" => $domiciliosimputadossolicitudesDto[0]->getDireccion(),
                                    "colonia" => $domiciliosimputadossolicitudesDto[0]->getColonia(),
                                    "numInterior" => $domiciliosimputadossolicitudesDto[0]->getNumInterior(),
                                    "numExterior" => $domiciliosimputadossolicitudesDto[0]->getNumExterior(),
                                    "cp" => $domiciliosimputadossolicitudesDto[0]->getCp(),
                                    "latitud" => $domiciliosimputadossolicitudesDto[0]->getLatitud(),
                                    "longitud" => $domiciliosimputadossolicitudesDto[0]->getLongitud(),
                                    "recidenciaHabitual" => $domiciliosimputadossolicitudesDto[0]->getRecidenciaHabitual(),
                                    "estado" => $domiciliosimputadossolicitudesDto[0]->getEstado(),
                                    "municipio" => $domiciliosimputadossolicitudesDto[0]->getMunicipio(),
                                    "cveConvivencia" => $domiciliosimputadossolicitudesDto[0]->getCveConvivencia(),
                                    "cveTipoVivienda" => $domiciliosimputadossolicitudesDto[0]->getCveTipoDeVivienda(),
                                ),
                                "telefonos" => array(
                                    "idTelefonoImputadosSolicitud" => $telefenosimputadossolicitudesDto[0]->getIdTelefonoImputadosSolicitud(),
                                    "telefono" => $telefenosimputadossolicitudesDto[0]->getTelefono(),
                                    "celular" => $telefenosimputadossolicitudesDto[0]->getCelular(),
                                    "email" => $telefenosimputadossolicitudesDto[0]->getEmail(),
                                ),
                                "telefonos" => array(
                                    "idDefensorImputadoSolicitud" => $defensoresimputadossolicitudesDto[0]->getIdDefensorImputadoSolicitud(),
                                    "cveTipoDefensor" => $defensoresimputadossolicitudesDto[0]->getCveTipoDefensor(),
                                    "nombre" => $defensoresimputadossolicitudesDto[0]->getNombre(),
                                    "telefono" => $defensoresimputadossolicitudesDto[0]->getTelefono(),
                                    "celular" => $defensoresimputadossolicitudesDto[0]->getCelular(),
                                    "email" => $defensoresimputadossolicitudesDto[0]->getEmail(),
                                ),
                                "drogas" => array(
                                    "idImputadoDroga" => $drogasImputadoDto[0]->getIdImputadoDroga(),
                                    "cveDroga" => $drogasImputadoDto[0]->getCveDroga(),
                                ),
                                "tutores" => array(
                                    "idTutorImputado" => $tutoresimputadosDto[0]->getIdTutorImputado(),
                                    "cveGenero" => $tutoresimputadosDto[0]->getCveGenero(),
                                    "cveTipoTutor" => $tutoresimputadosDto[0]->getCveTipoTutor(),
                                    "nombre" => $tutoresimputadosDto[0]->getNombre(),
                                    "paterno" => $tutoresimputadosDto[0]->getPaterno(),
                                    "materno" => $tutoresimputadosDto[0]->getMaterno(),
                                    "fechaNacimiento" => $tutoresimputadosDto[0]->getFechaNacimiento(),
                                    "edad" => $tutoresimputadosDto[0]->getEdad(),
                                ),
                                "nacionalidad" => array(
                                    "idNacionalidadImputadoSolicitud" => $nacionalidadimputadosDto[0]->getIdNacionalidadImputadoSolicitud(),
                                    "cvePais" => $nacionalidadimputadosDto[0]->getCvePais(),
                                )
                            );
                            array_push($listaResultados, $resultado);
                        } else {
                            $msg[] = ("No se logro registrar el imputado debido a algun error en la transaccion ");
                            $error = true;
                        }
//                    }
//                        else {
//                            $msg[] = ("El imputado ya existe en la solicitud de audiencia");
//                            $error = true;
//                        }
                    } else {
                        $result = array("Error" => $msg);
                    }
                } else {
                    $msg = ("La solicitud no existe verifique");
                    $result = array("Error" => $msg);
                }
                $count++;
                $indexCount++;
                $arrayAuxiliar[$indexCount] = $ImputadossolicitudesDto;
            }

/////armar arreglo
//            print_r($ImputadossolicitudesDto);
        }
        if ((!$error)) {
            $this->proveedor->execute("COMMIT");
            $result = array(
                "status" => "Ok",
                "totalCount" => count($listaResultados),
                "resultados" => $listaResultados,
            );






//            $msg[] = array("Imputado registrado de forma correcta");
//            $msg[] = $arrayAuxiliar;
//
//
//            $result = array(
//                "status" => "Correcto",
//                "msj" => $msg);
//            $result = ($result);
        } else {
            $this->proveedor->execute("ROLLBACK");
            $result = array("status" => "Error", "msj" => $msg);
            $result = $result;
        }
        return json_encode($result);
    }

    public function updateImputadossolicitudes($ImputadossolicitudesDto, $proveedor = null) {
        $ImputadossolicitudesDto = $this->validarImputadossolicitudes($ImputadossolicitudesDto);
        $ImputadossolicitudesDao = new ImputadossolicitudesDAO();
        $ImputadossolicitudesDto = $ImputadossolicitudesDao->updateImputadossolicitudes($ImputadossolicitudesDto, $proveedor);
        return $ImputadossolicitudesDto;
    }

    public function deleteImputadossolicitudes($param, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute("BEGIN");

        $imputadosArrayReturn = array();
        $error = false;
        $msg = array();
        $index = 1;
        $count = 0;

        foreach ($param as $arreglo) {
            $imputadossolicitudesDto = new ImputadossolicitudesDTO();
            $imputadossolicitudesDao = new ImputadossolicitudesDAO();
            $imputadossolicitud = new ImputadossolicitudesDTO();
            $idImputadoSolicitud = $arreglo["imputado"]["idImputadoSolicitud"];
            $imputadossolicitudesDto->setIdImputadoSolicitud($idImputadoSolicitud);
            $imputadossolicitudesDto->setActivo('N');
            $rsImputados = $imputadossolicitudesDao->deleteImputadossolicitudes($imputadossolicitudesDto, $proveedor);

            $imputadossolicitud->setIdImputadoSolicitud($imputadossolicitudesDto->getIdImputadoSolicitud());
            $rsImputados = $imputadossolicitudesDao->selectImputadossolicitudes($imputadossolicitud, $proveedor);

            if ($rsImputados != "") {
                $imputadossolicitudesDto = $imputadossolicitudesDao->deleteImputadossolicitudes($imputadossolicitudesDto, $proveedor);
                if ($imputadossolicitudesDto != "") {
                    $telefonosimputadossolicitudesDao = new TelefonosimputadossolicitudesDAO();
                    $telefonosimputadossolicitudesDto = new TelefonosimputadossolicitudesDTO();
                    $telefonoso = new TelefonosimputadossolicitudesDTO();
                    $telefonosimputadossolicitudesDto->setIdImputadoSolicitud($idImputadoSolicitud);
                    $rsTelefonosimputadossolicitudesDto = $telefonosimputadossolicitudesDao->selectTelefonosimputadossolicitudes($telefonosimputadossolicitudesDto, "", $proveedor);
                    if ($rsTelefonosimputadossolicitudesDto != "") {
                        foreach ($rsTelefonosimputadossolicitudesDto as $arrayTel) {
                            $telefonoso->setIdTelefonoImputadosSolicitud($arrayTel->getIdTelefonoImputadosSolicitud());
                            $telefonoso->setActivo('N');
                            $telefonosimputadossolicitud = $telefonosimputadossolicitudesDao->deleteTelefonosimputadossolicitudes($telefonoso, $proveedor);
                            if ($telefonosimputadossolicitud == "") {
                                $msg[] = ("No se encontraron telefonos en la posicion:" . $index);
                                $error = true;
                            }
                        }
                    }
                }

                $defensoresimputadosDao = new DefensoresimputadossolicitudesDAO();
                $defensoresimputadosDto = new DefensoresimputadossolicitudesDTO();
                $defensores = new DefensoresimputadossolicitudesDTO();
                $defensoresimputadosDto->setIdImputadoSolicitud($idImputadoSolicitud);
                $rsDefensoresimputadosDto = $defensoresimputadosDao->selectDefensoresimputadossolicitudes($defensoresimputadosDto, "", $proveedor);
                if ($rsDefensoresimputadosDto != "") {
                    foreach ($rsDefensoresimputadosDto as $arrayDef) {
                        $defensores->setIdDefensorImputadoSolicitud($arrayDef->getIdDefensorImputadoSolicitud());
                        $defensores->setActivo('N');
                        $defensoresimputados = $defensoresimputadosDao->deleteDefensoresimputadossolicitudes($defensores, $proveedor);
                        if ($defensoresimputados == "") {
                            $msg[] = ("No se encontraron defensores en la posicion:" . $index);
                            $error = true;
                        }
                    }
                }


                $domiciliosImputadosDao = new DomiciliosimputadossolicitudesDAO();
                $domiciliosImputadosDto = new DomiciliosimputadossolicitudesDTO();
                $domicilios = new DomiciliosimputadossolicitudesDTO();
                $domiciliosImputadosDto->setIdImputadoSolicitud($idImputadoSolicitud);
                $rsDomiciliosimputadosDto = $domiciliosImputadosDao->selectDomiciliosimputadossolicitudes($domiciliosImputadosDto, "", $proveedor);
                if ($rsDomiciliosimputadosDto != "") {
                    foreach ($rsDomiciliosimputadosDto as $arrayDom) {
                        $domicilios->setIdDomicilioImputadoSolicitud($arrayDom->getIdDomicilioImputadoSolicitud());
                        $domicilios->setActivo('N');
                        $domiciliosimputados = $domiciliosImputadosDao->deleteDomiciliosimputadossolicitudes($domicilios, $proveedor);
                        if ($domiciliosimputados == "") {
                            $msg[] = ("No se encontraron domicilios en la posicion:" . $index);
                            $error = true;
                        }
                    }
                }



                $tutoresimputadosDao = new TutoresimputadosDAO();
                $tutoresimputadosDto = new TutoresimputadosDTO();
                $tutoreso = new TutoresimputadosDTO();
                $tutoresimputadosDto->setIdImputadoSolicitud($idImputadoSolicitud);
                $rsTutoresimputadosDto = $tutoresimputadosDao->selectTutoresimputados($tutoresimputadosDto, "", $proveedor);
                if ($rsTutoresimputadosDto != "") {
                    foreach ($rsTutoresimputadosDto as $arrayTutor) {
                        $tutoreso->setIdTutorImputado($arrayTutor->getIdTutorImputado());
                        $tutoreso->setActivo('N');
                        $tutoresimputados = $tutoresimputadosDao->deleteTutoresimputados($tutoreso, $proveedor);
                        if ($tutoresimputados == "") {
                            $msg[] = ("No se encontraron tutores en la posicion:" . $index);
                            $error = true;
                        }
                    }
                }


                $nacionalidadesimputadosDao = new NacionalidadesimputadossolicitudesDAO();
                $nacionalidadesimputadosDto = new NacionalidadesimputadossolicitudesDTO();
                $nacionalidades = new NacionalidadesimputadossolicitudesDTO();
                $nacionalidadesimputadosDto->setIdImputadoSolicitud($idImputadoSolicitud);
                $rsNacionalidadesimputadosDto = $nacionalidadesimputadosDao->selectNacionalidadesimputadossolicitudes($nacionalidadesimputadosDto, "", $proveedor);
                if ($rsNacionalidadesimputadosDto != "") {
                    foreach ($rsNacionalidadesimputadosDto as $arrayNacion) {
                        $nacionalidades->setIdNacionalidadImputadoSolicitud($arrayNacion->getIdNacionalidadImputadoSolicitud());
                        $nacionalidades->setActivo('N');
                        $nacionalidadesimputados = $nacionalidadesimputadosDao->deleteNacionalidadesimputadossolicitudes($nacionalidades, $proveedor);
                        if ($nacionalidadesimputados == "") {
                            $msg[] = ("No se encontraron nacionalidades en la posicion:" . $index);
                            $error = true;
                        }
                    }
                }

                $imputadosDrogasDao = new ImputadosdrogasDAO();
                $imputadosDrogasDto = new ImputadosdrogasDTO();
                $drogas = new ImputadosdrogasDTO();
                $imputadosDrogasDto->setIdImputadoSolicitud($idImputadoSolicitud);
                $rsDrogasDto = $imputadosDrogasDao->selectImputadosdrogas($imputadosDrogasDto, "", $proveedor);
                if ($rsDrogasDto != "") {
                    foreach ($rsDrogasDto as $arrayDrogas) {
                        $drogas->setIdImputadoDroga($arrayDrogas->getIdImputadoDroga());
                        $drogas->setActivo('N');
                        $Drogasimputados = $imputadosDrogasDao->deleteImputadosdrogas($drogas, $proveedor);
                        if ($Drogasimputados == "") {
                            $msg[] = ("No se encontraron nacionalidades en la posicion:" . $index);
                            $error = true;
                        }
                    }
                }
                $count++;
                $index++;
            } else {
                $msg[] = ("No se encontro al imputado");
                $error = true;
            }
        }
        if ((!$error)) {
            $result = array("Error" => $msg);
            $this->proveedor->execute("COMMIT");
            $msg[] = ("Imputado eliminada de forma correcta");
            $result = array("type" => "OK", "msj" => $msg);
            $result = ($result);
        } else {
            $this->proveedor->execute("ROLLBACK");
            $result = array("type" => "Error", "msj" => $msg);
            $result = ($result);
        }
        return json_encode($result);
    }

/////////////////////////////////////////////////////////////////////////////
    public function validaImputado($ImputadossolicitudesDto) {
//        $validacion = new Validacion();
        $estatus = 'ok';
        $msg = [];
        $error = false;
        $numImputadosAudiencia = 0;
        $numImputados = 0;

//validar en base si puede agregar ofendido de a cuerdo al num de ofendidos en la solicitud de audiencia.
        $audienciaDto = new SolicitudesaudienciasDTO();
        $audienciaDto->setIdSolicitudAudiencia($ImputadossolicitudesDto->getIdSolicitudAudiencia());
        $audienciaDao = new SolicitudesaudienciasDAO();
//        print_r($audienciaDto);
        $audienciaResponse = $audienciaDao->selectSolicitudesaudiencias($audienciaDto);
//        print_r($audienciaResponse);
        $numImputadosAudiencia = $audienciaResponse[0]->getNumImputados();

        $imputadoDto = new ImputadosSolicitudesDTO();
        $imputadoDto->setIdSolicitudAudiencia($ImputadossolicitudesDto->getIdSolicitudAudiencia());
        $imputadoDto->setActivo('S');
        $imputadosDao = new ImputadosSolicitudesDAO();
        $imputadosResponse = $imputadosDao->selectImputadossolicitudes($imputadoDto);
        if ($imputadosResponse != "") {
            $numImputados = count($imputadosResponse);
        }

//        echo $numImputados . "<br>" . $numImputadosAudiencia;

        if ($numImputados == $numImputadosAudiencia) {
            return [
                'status' => "error",
                'mensaje' => '*Ya no puedes agregar mas imputados a esta solicitud de audiencia.'
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

/////////////////////////////////////////////////////////////////////////////////////
    public function guardarImputado($ImputadossolicitudesDto, $proveedor = null, $bitacora = true) {
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;
        $indexCount = 0;
        $arrayAuxiliar = array();
        $listaResultados = array();

        $validacionImputados = $this->validaImputado($ImputadossolicitudesDto);
        if ($validacionImputados['status'] == "ok") {
            $imputadossolicitudesDao = new ImputadossolicitudesDAO();
            $tmp = new ImputadossolicitudesDTO();
            $ImputadossolicitudesDto = $this->validarImputadossolicitudes($ImputadossolicitudesDto);

            if ($ImputadossolicitudesDto->getCveTipoPersona() == "") {
                $msg[] = array("No ingreso el tipo de persona.");
                $error = true;
            }
            if ($ImputadossolicitudesDto->getCveTipoPersona() != "" && $ImputadossolicitudesDto->getCveTipoPersona() == 1) {

                if (!$validacion->text(1, 1, (string) $ImputadossolicitudesDto->getDetenido())) {
                    $msg[] = array("No ingreso si esta detenido o no (S o N) en la posicion:" . $count);
                    $error = true;
                }

                if (!$validacion->text(1, 1, (string) $ImputadossolicitudesDto->getRelacionMoral())) {
                    $msg[] = array("No ingreso si tiene relacion moral (S o N) en la posicion:" . $count);
                    $error = true;
                }

                if ($ImputadossolicitudesDto->getRelacionMoral() == 'S') {
                    if (!$validacion->text(0, 500, (string) $ImputadossolicitudesDto->getPersonaMoral())) {
                        if ($ImputadossolicitudesDto->getPersonaMoral() == "") {
                            $msg[] = array("El nombre de la persona moral no es valido en la posicion:" . $count);
                            $error = true;
                        }
                    }
                }

                if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveTipoDetencion())) {
                    if ($ImputadossolicitudesDto->getCveTipoDetencion() <= 0 && $ImputadossolicitudesDto->getDetenido() == 'S') {
                        $msg[] = array("El tipo de detencion no es valido en la posicion:" . $count);
                        $error = true;
                    }
                }

                if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveGenero())) {
                    if ($ImputadossolicitudesDto->getCveGenero() <= 0) {
                        $msg[] = array("El genero seleccionado no es valido en la posicion:" . $count);
                        $error = true;
                    }
                }


                if (!$validacion->num(1, 3, (int) $ImputadossolicitudesDto->getCvePaisNacimiento())) {
                    if ($ImputadossolicitudesDto->getCvePaisNacimiento() <= 0) {
                        $msg[] = array("El pais de nacimiento no es correcto en la posicion:" . $count);
                        $error = true;
                    }
                }

                if ($ImputadossolicitudesDto->getCvePaisNacimiento() == 119) {
                    if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveEstadoNacimiento())) {
                        if ($ImputadossolicitudesDto->getCveEstadoNacimiento() <= 0) {
                            $msg[] = array("El estado de nacimiento es requerido en la posicion:" . $count);
                            $error = true;
                        }
                    }

                    if (!$validacion->num(1, 5, (int) $ImputadossolicitudesDto->getCveMunicipioNacimiento())) {
                        if ($ImputadossolicitudesDto->getCveMunicipioNacimiento() <= 0) {
                            $msg[] = array("El municipio de nacimiento es requerido en la posicion:" . $count);
                            $error = true;
                        }
                    }
                } else {
                    if (!$validacion->text(1, 200, (string) $ImputadossolicitudesDto->getEstadoNacimiento())) {
                        if ($ImputadossolicitudesDto->getCveEstadoNacimiento() <= 0 && $ImputadossolicitudesDto->getEstadoNacimiento() == "") {
                            $msg[] = array("El estado de nacimiento es requerido en la posicion:" . $count);
                            $error = true;
                        }
                    }

                    if (!$validacion->text(1, 200, (string) $ImputadossolicitudesDto->getMunicipioNacimiento())) {
                        if ($ImputadossolicitudesDto->getCveMunicipioNacimiento() <= 0 && $ImputadossolicitudesDto->getMunicipioNacimiento() == "") {
                            $msg[] = array("El municipio de nacimiento es requerido en la posicion:" . $count);
                            $error = true;
                        }
                    }
                }
                if ($ImputadossolicitudesDto->getEdad() != "") {
                    if (!$validacion->num(1, 3, (string) $ImputadossolicitudesDto->getEdad())) {
                        $msg[] = array("La edad ingresada no es valida en la posicion:" . $count);
                        $error = true;
                    }
                }

                if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveNivelInstruccion())) {
                    if ($ImputadossolicitudesDto->getCveNivelInstruccion() <= 0) {
                        $msg[] = array("El nivel de instruccion no es correcto en la posicion:" . $count);
                        $error = true;
                    }
                }
                if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveEstadoCivil())) {
                    if ($ImputadossolicitudesDto->getCveEstadoCivil() <= 0) {
                        $msg[] = array("El estado civil no es correcto en la posicion:" . $count);
                        $error = true;
                    }
                }
                if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveEspanol())) {
                    if ($ImputadossolicitudesDto->getCveEspanol() <= 0) {
                        $msg[] = array("No se identifica la clave para saber si habla espanol en la posicion:" . $count);
                        $error = true;
                    }
                }
                if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveAlfabetismo())) {
                    if ($ImputadossolicitudesDto->getCveAlfabetismo() <= 0) {
                        $msg[] = array("No se identifico una clave valida de alfabetismo en la posicion:" . $count);
                        $error = true;
                    }
                }
                if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveDialectoIndigena())) {
                    if ($ImputadossolicitudesDto->getCveDialectoIndigena() <= 0) {
                        $msg[] = array("No se identifico una clave valida de dialecto indigena en la posicion:" . $count);
                        $error = true;
                    }
                }
                if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveTipoFamiliaLinguistica())) {
                    if ($ImputadossolicitudesDto->getCveTipoFamiliaLinguistica() <= 0) {
                        $msg[] = array("No se identifico una clave valida de tipo de familia linguistica en la posicion:" . $count);
                        $error = true;
                    }
                }
                if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveOcupacion())) {
                    if ($ImputadossolicitudesDto->getCveOcupacion() <= 0) {
                        $msg[] = array("No se identifico una clave valida de tipo de ocupacion en la posicion:" . $count);
                        $error = true;
                    }
                }
                if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveInterprete())) {
                    if ($ImputadossolicitudesDto->getCveInterprete() <= 0) {
                        $msg[] = array("No se identifico una clave valida si requiere interprete en la posicion:" . $count);
                        $error = true;
                    }
                }
                if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveEstadoPsicofisico())) {
                    if ($ImputadossolicitudesDto->getCveEstadoPsicofisico() <= 0) {
                        $msg[] = array("No se identifico una clave valida del estado psicofisico en la posicion:" . $count);
                        $error = true;
                    }
                }

                if ($ImputadossolicitudesDto->getDetenido() == "S") {
                    if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveCereso())) {
                        if ($ImputadossolicitudesDto->getCveCereso() <= 0) {
                            $msg[] = array("No se identifico una clave valida para identificar el cereso en la posicion:" . $count);
                            $error = true;
                        }
                    }
                }
//                        if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveTipoReincidencia())) {
//                            if ($ImputadossolicitudesDto->getCveTipoReincidencia() <= 0) {
//                                $msg[] = array("No se identifico una clave valida para tipo de reicidencia en la posicion:" . $count);
//                                $error = true;
//                            }
//                        }
                if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveGrupoEdnico())) {
                    if ($ImputadossolicitudesDto->getCveGrupoEdnico() <= 0) {
                        $msg[] = array("No se identifico una clave valida para tipo de cve grupo etnico en la posicion:" . $count);
                        $error = true;
                    }
                }
            } else if ($ImputadossolicitudesDto->getCveTipoPersona() != "" && ($ImputadossolicitudesDto->getCveTipoPersona() == 2) || ($ImputadossolicitudesDto->getCveTipoPersona() == 3)) {
//            if (!$validacion->text(1, 500, $ImputadossolicitudesDto->getNombreMoral())) {
//                $msg[] = array("El nombre moral no es correcto en la posicion:" . $count);
//                $error = true;
//            }

                if ($ImputadossolicitudesDto->getRfc() != "") {
                    if (!$validacion->rfc((string) $ImputadossolicitudesDto->getRfc())) {
                        $msg[] = array("El rfc registrado no es un formato valido en la posicion:" . $count);
                        $error = true;
                    }
                }
            }

            if ((!$error) && (0 <= count($msg))) {
                ///SACAR ETAPA PROCESAL/////////
                $solicitudAudienciasDao = new solicitudesAudienciasDAO();
                $solicitudAudienciasDto = new solicitudesAudienciasDTO();
                $solicitudAudienciasDto->setIdSolicitudAudiencia($ImputadossolicitudesDto->getIdSolicitudAudiencia());
                $rsAudiencia = $solicitudAudienciasDao->selectSolicitudesaudiencias($solicitudAudienciasDto);
                if ($rsAudiencia != "") {
                    $catAudienciasDao = new CataudienciasDAO();
                    $catAudienciasDto = new CataudienciasDTO();
                    $catAudienciasDto->setCveCatAudiencia($rsAudiencia[0]->getCveCatAudiencia());
                    $rsCatAudiencia = $catAudienciasDao->selectCataudiencias($catAudienciasDto);
                    if ($rsCatAudiencia != "") {
                        $ImputadossolicitudesDto->setCveEtapaProcesal($rsCatAudiencia[0]->getCveEtapaProcesal());
                    }
                }
                ///SACAR ETAPA PROCESAL/////////
                $ImputadossolicitudesDto->setTieneSobreseimiento('N'); //Valor inicial


                if ($ImputadossolicitudesDto->getCveTipoPersona() == 1) {
                    $tmp->setNombre($ImputadossolicitudesDto->getNombre());
                    $tmp->setPaterno($ImputadossolicitudesDto->getPaterno());
                    $tmp->setMaterno($ImputadossolicitudesDto->getMaterno());
                    $tmp->setActivo('S');
                    $tmp->setIdSolicitudAudiencia($ImputadossolicitudesDto->getIdSolicitudAudiencia());
                } else if (($ImputadossolicitudesDto->getCveTipoPersona() == 2) || ($ImputadossolicitudesDto->getCveTipoPersona() == 3)) {
                    $tmp->setNombreMoral($ImputadossolicitudesDto->getNombreMoral());
                    $tmp->setActivo('S');
                    $tmp->setIdSolicitudAudiencia($ImputadossolicitudesDto->getIdSolicitudAudiencia());
                }



                $tmp = $imputadossolicitudesDao->selectImputadossolicitudes($tmp, "", "");
                if ($tmp == "") {
                    if ($ImputadossolicitudesDto->getDetenido() == "N") {
                        $ImputadossolicitudesDto->setCveTipoDetencion(4);
                        $ImputadossolicitudesDto->setCveCereso(1);
                        $ImputadossolicitudesDto->setcveTipoReincidencia(5);
                        $ImputadossolicitudesDto->setCveCereso(1);
                        $ImputadossolicitudesDto->setCveTipoDetencion(4);
                    }

                    if ($ImputadossolicitudesDto->getCveTipoPersona() == 2 || $ImputadossolicitudesDto->getCveTipoPersona() == 3) {
                        $ImputadossolicitudesDto->setCveNivelInstruccion(11);
                        $ImputadossolicitudesDto->setCveEstadoCivil(3);
                        $ImputadossolicitudesDto->setCveEspanol(4);
                        $ImputadossolicitudesDto->setCveAlfabetismo(4);
                        $ImputadossolicitudesDto->setCveDialectoIndigena(3);
                        $ImputadossolicitudesDto->setCveTipoFamiliaLinguistica(15);
                        $ImputadossolicitudesDto->setCveOcupacion(15);
                        $ImputadossolicitudesDto->setCveInterprete(3);
                        $ImputadossolicitudesDto->setCveEstadoPsicofisico(5);
                        $ImputadossolicitudesDto->setCveGrupoEdnico(72);
                    }


//                    print_r($ImputadossolicitudesDto);
                    $ImputadossolicitudesDto = $imputadossolicitudesDao->insertImputadossolicitudes($ImputadossolicitudesDto, $proveedor);
                    if ($ImputadossolicitudesDto != "") {
                        $resultado = array(
                            "imputado" => $ImputadossolicitudesDto[0]->getIdImputadoSolicitud(),
                            "idSolicitudAudiencia" => $ImputadossolicitudesDto[0]->getIdSolicitudAudiencia(),
                            "detenido" => $ImputadossolicitudesDto[0]->getDetenido(),
                            "nombre" => utf8_encode($ImputadossolicitudesDto[0]->getNombre()),
                            "paterno" => utf8_encode($ImputadossolicitudesDto[0]->getPaterno()),
                            "materno" => utf8_encode($ImputadossolicitudesDto[0]->getMaterno()),
                            "rfc" => $ImputadossolicitudesDto[0]->getRfc(),
                            "curp" => $ImputadossolicitudesDto[0]->getCurp(),
                            "cveTipoDetencion" => $ImputadossolicitudesDto[0]->getCveTipoDetencion(),
                            "cveGenero" => $ImputadossolicitudesDto[0]->getCveGenero(),
                            "alias" => utf8_encode($ImputadossolicitudesDto[0]->getAlias()),
                            "fechaDeclaracion" => $ImputadossolicitudesDto[0]->getFechaDeclaracion(),
                            "cvePaisNacimiento" => $ImputadossolicitudesDto[0]->getCvePaisNacimiento(),
                            "cveEstadoNacimiento" => $ImputadossolicitudesDto[0]->getCveEstadoNacimiento(),
                            "cveMunicipioNacimiento" => $ImputadossolicitudesDto[0]->getCveMunicipioNacimiento(),
                            "fechaNacimiento" => $ImputadossolicitudesDto[0]->getFechaNacimiento(),
                            "edad" => $ImputadossolicitudesDto[0]->getEdad(),
                            "cveTipoPersona" => $ImputadossolicitudesDto[0]->getCveTipoPersona(),
                            "CveTipoReligion" => $ImputadossolicitudesDto[0]->getCveTipoReligion(),
                            "nombreMoral" => utf8_encode($ImputadossolicitudesDto[0]->getNombreMoral()),
                            "cveNivelInstruccion" => $ImputadossolicitudesDto[0]->getCveNivelInstruccion(),
                            "cveEstadoCivil" => $ImputadossolicitudesDto[0]->getCveEstadoCivil(),
                            "cveEspanol" => $ImputadossolicitudesDto[0]->getCveEspanol(),
                            "cveAlfabetismo" => $ImputadossolicitudesDto[0]->getCveAlfabetismo(),
                            "cveDialectoIndigena" => $ImputadossolicitudesDto[0]->getCveDialectoIndigena(),
                            "cveTipoFamiliaLinguistica" => $ImputadossolicitudesDto[0]->getCveTipoFamiliaLinguistica(),
                            "cveOcupacion" => $ImputadossolicitudesDto[0]->getCveOcupacion(),
                            "cveInterprete" => $ImputadossolicitudesDto[0]->getCveInterprete(),
                            "cveEstadoPsicofisico" => $ImputadossolicitudesDto[0]->getCveEstadoPsicofisico(),
                            "fechaImputacion" => $ImputadossolicitudesDto[0]->getFechaImputacion(),
                            "fechaControlDet" => $ImputadossolicitudesDto[0]->getFechaControlDet(),
                            "fecTerminoCons" => $ImputadossolicitudesDto[0]->getFecTerminoCons(),
                            "fecCierreInv" => $ImputadossolicitudesDto[0]->getFecCierreInv(),
                            "estadoNacimiento" => utf8_encode($ImputadossolicitudesDto[0]->getEstadoNacimiento()),
                            "municipioNacimiento" => utf8_encode($ImputadossolicitudesDto[0]->getMunicipioNacimiento()),
                            "relacionMoral" => utf8_encode($ImputadossolicitudesDto[0]->getRelacionMoral()),
                            "personaMoral" => utf8_encode($ImputadossolicitudesDto[0]->getPersonaMoral()),
                            "cveCereso" => $ImputadossolicitudesDto[0]->getCveCereso(),
                            "ingresoMensual" => $ImputadossolicitudesDto[0]->getIngresoMensual(),
                            "cveTipoReincidencia" => $ImputadossolicitudesDto[0]->getcveTipoReincidencia(),
                            "cveGrupoEdnico" => $ImputadossolicitudesDto[0]->getCveGrupoEdnico()
                        );
                        array_push($listaResultados, $resultado);
                    } else {
                        $msg[] = array("No se logro registrar el imputado debido a algun error en la transaccion. ");
                        $error = true;
                    }
                } else {
                    $msg[] = array("Ya existe un imputado con ese nombre dado de alta.");
                    $error = true;
                }
                if ((!$error)) {
                    $result = array(
                        "status" => "Ok",
                        "totalCount" => count($listaResultados),
                        "resultados" => $listaResultados,
                    );
                    if ($bitacora) {

                        $BitacoramovimientosDao = new BitacoramovimientosDAO();
                        $BitacoramovimientosDto = new BitacoramovimientosDTO();
                        $BitacoramovimientosDto->setCveAccion("130");
                        $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                        $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                        $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                        $BitacoramovimientosDto->setObservaciones("AGREGO imputado " . json_encode($result));
                        $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
                    }
                } else {
                    $result = array("status" => "Error", "msj" => $msg);
                    $result = ($result);
                }
            } else {
                $result = array("status" => "Error", "msj" => $msg);
                $result = ($result);
            }
        } else {
            $result = array("status" => "Error", "msj" => $validacionImputados['mensaje']);
            $result = ($result);
        }
        return json_encode($result);
    }

    public function modificarImputado($ImputadossolicitudesDto, $proveedor = null, $bitacora = true) {

        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;
        $indexCount = 0;
        $arrayAuxiliar = array();
        $listaResultados = array();



        $solicitudAudienciasDTO = new SolicitudesaudienciasDTO();
        $solicitudAudienciasDao = new SolicitudesaudienciasDAO();

        $solicitudAudienciasDTO->setIdSolicitudAudiencia($ImputadossolicitudesDto->getIdSolicitudAudiencia());
        $rsSolicitudAudiencia = $solicitudAudienciasDao->selectSolicitudesaudiencias($solicitudAudienciasDTO);
        if ($rsSolicitudAudiencia[0]->getCveEstatusSolicitud() == '1') {


            $imputadossolicitudesDao = new ImputadossolicitudesDAO();
            $tmp = new ImputadossolicitudesDTO();
            $ImputadossolicitudesDto = $this->validarImputadossolicitudes($ImputadossolicitudesDto);

            if ($ImputadossolicitudesDto->getCveTipoPersona() == 1) {
                if (!$validacion->text(1, 1, (string) $ImputadossolicitudesDto->getDetenido())) {
                    $msg[] = array("No ingreso si esta detenido o no (S o N) en la posicion:" . $count);
                    $error = true;
                }

                if (!$validacion->text(1, 1, (string) $ImputadossolicitudesDto->getRelacionMoral())) {
                    $msg[] = array("No ingreso si tiene relacion moral (S o N) en la posicion:" . $count);
                    $error = true;
                }

                if ($ImputadossolicitudesDto->getRelacionMoral() == 'S') {
                    if (!$validacion->text(0, 500, (string) $ImputadossolicitudesDto->getPersonaMoral())) {
                        if ($ImputadossolicitudesDto->getPersonaMoral() == "") {
                            $msg[] = array("El nombre de la persona moral no es valido en la posicion:" . $count);
                            $error = true;
                        }
                    }
                }


                if ($ImputadossolicitudesDto->getRfc() != "") {
                    if (!$validacion->rfc((string) $ImputadossolicitudesDto->getRfc())) {
                        $msg[] = array("El rfc registrado no es un formato valido en la posicion:" . $count);
                        $error = true;
                    }
                }

                if ($ImputadossolicitudesDto->getCurp() != "") {
                    if (!$validacion->curp((string) $ImputadossolicitudesDto->getCurp())) {
                        $msg[] = array("La curp ingresada no es valida en la posicion:" . $count);
                        $error = true;
                    }
                }

                if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveGenero())) {
                    if ($ImputadossolicitudesDto->getCveGenero() <= 0) {
                        $msg[] = array("El genero seleccionado no es valido en la posicion:" . $count);
                        $error = true;
                    }
                }

                if (!$validacion->num(1, 3, (int) $ImputadossolicitudesDto->getCvePaisNacimiento())) {
                    if ($ImputadossolicitudesDto->getCvePaisNacimiento() <= 0) {
                        $msg[] = array("El pais de nacimiento no es correcto en la posicion:" . $count);
                        $error = true;
                    }
                }

                if ($ImputadossolicitudesDto->getCvePaisNacimiento() == 119) {
                    if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveEstadoNacimiento())) {
                        if ($ImputadossolicitudesDto->getCveEstadoNacimiento() <= 0) {
                            $msg[] = array("El estado de nacimiento es requerido en la posicion:" . $count);
                            $error = true;
                        }
                    }

                    if (!$validacion->num(1, 5, (int) $ImputadossolicitudesDto->getCveMunicipioNacimiento())) {
                        if ($ImputadossolicitudesDto->getCveMunicipioNacimiento() <= 0) {
                            $msg[] = array("El municipio de nacimiento es requerido en la posicion:" . $count);
                            $error = true;
                        }
                    }
                } else {
                    if (!$validacion->text(1, 200, (string) $ImputadossolicitudesDto->getEstadoNacimiento())) {
                        if ($ImputadossolicitudesDto->getEstadoNacimiento() == "") {
                            $msg[] = array("El estado de nacimiento es requerido en la posicion:" . $count);
                            $error = true;
                        }
                    }

                    if (!$validacion->text(1, 200, (string) $ImputadossolicitudesDto->getMunicipioNacimiento())) {
                        if ($ImputadossolicitudesDto->getMunicipioNacimiento() == "") {
                            $msg[] = array("El municipio de nacimiento es requerido en la posicion:" . $count);
                            $error = true;
                        }
                    }
                }
                if ($ImputadossolicitudesDto->getEdad() != "") {
                    if (!$validacion->num(1, 3, (string) $ImputadossolicitudesDto->getEdad())) {
                        $msg[] = array("La edad ingresada no es valida en la posicion:" . $count);
                        $error = true;
                    }
                }

                if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveNivelInstruccion())) {
                    if ($ImputadossolicitudesDto->getCveNivelInstruccion() <= 0) {
                        $msg[] = array("El nivel de instruccion no es correcto en la posicion:" . $count);
                        $error = true;
                    }
                }
                if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveEstadoCivil())) {
                    if ($ImputadossolicitudesDto->getCveEstadoCivil() <= 0) {
                        $msg[] = array("El estado civil no es correcto en la posicion:" . $count);
                        $error = true;
                    }
                }
                if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveEspanol())) {
                    if ($ImputadossolicitudesDto->getCveEspanol() <= 0) {
                        $msg[] = array("No se identifica la clave para saber si habla espanol en la posicion:" . $count);
                        $error = true;
                    }
                }
                if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveAlfabetismo())) {
                    if ($ImputadossolicitudesDto->getCveAlfabetismo() <= 0) {
                        $msg[] = array("No se identifico una clave valida de alfabetismo en la posicion:" . $count);
                        $error = true;
                    }
                }
                if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveDialectoIndigena())) {
                    if ($ImputadossolicitudesDto->getCveDialectoIndigena() <= 0) {
                        $msg[] = array("No se identifico una clave valida de dialecto indigena en la posicion:" . $count);
                        $error = true;
                    }
                }
                if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveTipoFamiliaLinguistica())) {
                    if ($ImputadossolicitudesDto->getCveTipoFamiliaLinguistica() <= 0) {
                        $msg[] = array("No se identifico una clave valida de tipo de familia linguistica en la posicion:" . $count);
                        $error = true;
                    }
                }
                if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveOcupacion())) {
                    if ($ImputadossolicitudesDto->getCveOcupacion() <= 0) {
                        $msg[] = array("No se identifico una clave valida de tipo de ocupacion en la posicion:" . $count);
                        $error = true;
                    }
                }
                if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveInterprete())) {
                    if ($ImputadossolicitudesDto->getCveInterprete() <= 0) {
                        $msg[] = array("No se identifico una clave valida si requiere interprete en la posicion:" . $count);
                        $error = true;
                    }
                }
                if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveEstadoPsicofisico())) {
                    if ($ImputadossolicitudesDto->getCveEstadoPsicofisico() <= 0) {
                        $msg[] = array("No se identifico una clave valida del estado psicofisico en la posicion:" . $count);
                        $error = true;
                    }
                }

                if ($ImputadossolicitudesDto->getDetenido() == "S") {
                    if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveCereso())) {
                        if ($ImputadossolicitudesDto->getCveCereso() <= 0) {
                            $msg[] = array("No se identifico una clave valida para identificar el cereso en la posicion:" . $count);
                            $error = true;
                        }
                    }
                }
//                        if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveTipoReincidencia())) {
//                            if ($ImputadossolicitudesDto->getCveTipoReincidencia() <= 0) {
//                                $msg[] = array("No se identifico una clave valida para tipo de reicidencia en la posicion:" . $count);
//                                $error = true;
//                            }
//                        }
                if (!$validacion->num(1, 2, (int) $ImputadossolicitudesDto->getCveGrupoEdnico())) {
                    if ($ImputadossolicitudesDto->getCveGrupoEdnico() <= 0) {
                        $msg[] = array("No se identifico una clave valida para tipo de reincidencia en la posicion:" . $count);
                        $error = true;
                    }
                }
            } else if (($ImputadossolicitudesDto->getCveTipoPersona() == 2) || ($ImputadossolicitudesDto->getCveTipoPersona() == 3)) {

                if ($ImputadossolicitudesDto->getRfc() != "") {
                    if (!$validacion->rfc((string) $ImputadossolicitudesDto->getRfc())) {
                        $msg[] = array("El rfc registrado no es un formato valido en la posicion:" . $count);
                        $error = true;
                    }
                }
            }
            if ((!$error) && (0 <= count($msg))) {
                ///SACAR ETAPA PROCESAL/////////
                $solicitudAudienciasDao = new solicitudesAudienciasDAO();
                $solicitudAudienciasDto = new solicitudesAudienciasDTO();
                $solicitudAudienciasDto->setIdSolicitudAudiencia($ImputadossolicitudesDto->getIdSolicitudAudiencia());
                $rsAudiencia = $solicitudAudienciasDao->selectSolicitudesaudiencias($solicitudAudienciasDto);
                if ($rsAudiencia != "") {
                    $catAudienciasDao = new CataudienciasDAO();
                    $catAudienciasDto = new CataudienciasDTO();
                    $catAudienciasDto->setCveCatAudiencia($rsAudiencia[0]->getCveCatAudiencia());
                    $rsCatAudiencia = $catAudienciasDao->selectCataudiencias($catAudienciasDto);
                    if ($rsCatAudiencia != "") {
                        $ImputadossolicitudesDto->setCveEtapaProcesal($rsCatAudiencia[0]->getCveEtapaProcesal());
                    }
                }
                ///SACAR ETAPA PROCESAL/////////
                $ImputadossolicitudesDto->setTieneSobreseimiento('N'); //Valor inicial



                if ($ImputadossolicitudesDto->getDetenido() == "N") {
                    $ImputadossolicitudesDto->setCveTipoDetencion(4);
                    $ImputadossolicitudesDto->setCveCereso(1);
                    $ImputadossolicitudesDto->setcveTipoReincidencia(5);
                    $ImputadossolicitudesDto->setcveTipoReincidencia(5);
                    $ImputadossolicitudesDto->setCveTipoDetencion(4);
                    $ImputadossolicitudesDto->setCveCereso(1);
                }
                if ($ImputadossolicitudesDto->getCveTipoPersona() == 2 || $ImputadossolicitudesDto->getCveTipoPersona() == 3) {
                    $ImputadossolicitudesDto->setCveNivelInstruccion(11);
                    $ImputadossolicitudesDto->setCveEstadoCivil(3);
                    $ImputadossolicitudesDto->setCveEspanol(4);
                    $ImputadossolicitudesDto->setCveAlfabetismo(4);
                    $ImputadossolicitudesDto->setCveDialectoIndigena(3);
                    $ImputadossolicitudesDto->setCveTipoFamiliaLinguistica(15);
                    $ImputadossolicitudesDto->setCveOcupacion(15);
                    $ImputadossolicitudesDto->setCveInterprete(3);
                    $ImputadossolicitudesDto->setCveEstadoPsicofisico(5);
                    $ImputadossolicitudesDto->setCveGrupoEdnico(72);
                    $ImputadossolicitudesDto->setCveTipoFamiliaLinguistica(15);
                }
                $ImputadossolicitudesDto = $imputadossolicitudesDao->updateImputadossolicitudes($ImputadossolicitudesDto, $proveedor);
                if ($ImputadossolicitudesDto != "") {
                    $resultado = array(
                        "imputado" => $ImputadossolicitudesDto[0]->getIdImputadoSolicitud(),
                        "idSolicitudAudiencia" => $ImputadossolicitudesDto[0]->getIdSolicitudAudiencia(),
                        "detenido" => $ImputadossolicitudesDto[0]->getDetenido(),
                        "nombre" => utf8_encode($ImputadossolicitudesDto[0]->getNombre()),
                        "paterno" => utf8_encode($ImputadossolicitudesDto[0]->getPaterno()),
                        "materno" => utf8_encode($ImputadossolicitudesDto[0]->getMaterno()),
                        "rfc" => $ImputadossolicitudesDto[0]->getRfc(),
                        "curp" => $ImputadossolicitudesDto[0]->getCurp(),
                        "cveTipoDetencion" => $ImputadossolicitudesDto[0]->getCveTipoDetencion(),
                        "cveGenero" => $ImputadossolicitudesDto[0]->getCveGenero(),
                        "alias" => utf8_encode($ImputadossolicitudesDto[0]->getAlias()),
                        "fechaDeclaracion" => $ImputadossolicitudesDto[0]->getFechaDeclaracion(),
                        "cvePaisNacimiento" => $ImputadossolicitudesDto[0]->getCvePaisNacimiento(),
                        "cveEstadoNacimiento" => $ImputadossolicitudesDto[0]->getCveEstadoNacimiento(),
                        "cveMunicipioNacimiento" => $ImputadossolicitudesDto[0]->getCveMunicipioNacimiento(),
                        "fechaNacimiento" => $ImputadossolicitudesDto[0]->getFechaNacimiento(),
                        "edad" => $ImputadossolicitudesDto[0]->getEdad(),
                        "cveTipoPersona" => $ImputadossolicitudesDto[0]->getCveTipoPersona(),
                        "CveTipoReligion" => $ImputadossolicitudesDto[0]->getCveTipoReligion(),
                        "nombreMoral" => utf8_encode($ImputadossolicitudesDto[0]->getNombreMoral()),
                        "cveNivelInstruccion" => $ImputadossolicitudesDto[0]->getCveNivelInstruccion(),
                        "cveEstadoCivil" => $ImputadossolicitudesDto[0]->getCveEstadoCivil(),
                        "cveEspanol" => $ImputadossolicitudesDto[0]->getCveEspanol(),
                        "cveAlfabetismo" => $ImputadossolicitudesDto[0]->getCveAlfabetismo(),
                        "cveDialectoIndigena" => $ImputadossolicitudesDto[0]->getCveDialectoIndigena(),
                        "cveTipoFamiliaLinguistica" => $ImputadossolicitudesDto[0]->getCveTipoFamiliaLinguistica(),
                        "cveOcupacion" => $ImputadossolicitudesDto[0]->getCveOcupacion(),
                        "cveInterprete" => $ImputadossolicitudesDto[0]->getCveInterprete(),
                        "cveEstadoPsicofisico" => $ImputadossolicitudesDto[0]->getCveEstadoPsicofisico(),
                        "fechaImputacion" => $ImputadossolicitudesDto[0]->getFechaImputacion(),
                        "fechaControlDet" => $ImputadossolicitudesDto[0]->getFechaControlDet(),
                        "fecTerminoCons" => $ImputadossolicitudesDto[0]->getFecTerminoCons(),
                        "fecCierreInv" => $ImputadossolicitudesDto[0]->getFecCierreInv(),
                        "estadoNacimiento" => utf8_encode($ImputadossolicitudesDto[0]->getEstadoNacimiento()),
                        "municipioNacimiento" => utf8_encode($ImputadossolicitudesDto[0]->getMunicipioNacimiento()),
                        "relacionMoral" => utf8_encode($ImputadossolicitudesDto[0]->getRelacionMoral()),
                        "personaMoral" => utf8_encode($ImputadossolicitudesDto[0]->getPersonaMoral()),
                        "cveCereso" => $ImputadossolicitudesDto[0]->getCveCereso(),
                        "ingresoMensual" => $ImputadossolicitudesDto[0]->getIngresoMensual(),
                        "cveTipoReincidencia" => $ImputadossolicitudesDto[0]->getCveTipoReincidencia(),
                        "cveGrupoEdnico" => $ImputadossolicitudesDto[0]->getCveGrupoEdnico()
                    );
                    array_push($listaResultados, $resultado);
                } else {
                    $msg[] = array("No se logro registrar el imputado debido a algun error en la transaccion ");
                    $error = true;
                }
//            } else {
//                $msg[] = array("Ya existe un imputado con ese nombre dado de alta");
//                $error = true;
//            }
            }
        } else {
            $msg[] = array("No se puede actualizar los datos del imputado. La solicitud se encuentra enviada");
            $error = true;
        }
        if ((!$error)) {
            $result = array(
                "status" => "Ok",
                "totalCount" => count($listaResultados),
                "resultados" => $listaResultados,
            );
            if ($bitacora) {
                $BitacoramovimientosDao = new BitacoramovimientosDAO();
                $BitacoramovimientosDto = new BitacoramovimientosDTO();
                $BitacoramovimientosDto->setCveAccion("131");
                $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $BitacoramovimientosDto->setObservaciones("actualizo imputado: " . json_encode($result));
                $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
            }
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        return json_encode($result);
    }

    public function eliminaImputado($imputadossolicitudesDto, $proveedor = null, $bitacora = true) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $this->proveedor->execute("BEGIN");

        $imputadosArrayReturn = array();
        $error = false;
        $msg = array();
        $index = 1;
        $count = 0;



        $imputadossolicitudesDao = new ImputadossolicitudesDAO();
        $imputadossolicitud = new ImputadossolicitudesDTO();

        $imputadossolicitudesDto->setActivo('N');
        $imputadossolicitudesDto = $this->validarImputadossolicitudes($imputadossolicitudesDto);

        $imputadossolicitud->setIdImputadoSolicitud($imputadossolicitudesDto->getIdImputadoSolicitud());
        $imputadossolicitud->setActivo('S');
        $rsImputados = $imputadossolicitudesDao->selectImputadossolicitudes($imputadossolicitud, "", $this->proveedor);
        if ($rsImputados != "") {
/////Se verifica que la solitud audiencias no este con el estatus de enviada o cancelada
            $solicitudAudienciasDTO = new SolicitudesaudienciasDTO();
            $solicitudAudienciasDao = new SolicitudesaudienciasDAO();
            $solicitudAudienciasDTO->setIdSolicitudAudiencia($rsImputados[0]->getIdSolicitudAudiencia());
            $rsSolicitudAudiencia = $solicitudAudienciasDao->selectSolicitudesaudiencias($solicitudAudienciasDTO);
            if ($rsSolicitudAudiencia[0]->getCveEstatusSolicitud() == '1') { //si el estatus es registrada se podra eliminar los registros
                $imputadossolicitudesDto = $imputadossolicitudesDao->eliminaImputadossolicitudes($imputadossolicitudesDto, $this->proveedor);
                //SE ELIMINA LA INFORMACION DEL IMPUTADO
                if ($imputadossolicitudesDto != "") {
                    $telefonosimputadossolicitudesDao = new TelefonosimputadossolicitudesDAO();
                    $telefonosimputadossolicitudesDto = new TelefonosimputadossolicitudesDTO();
                    $telefonoso = new TelefonosimputadossolicitudesDTO();
                    $telefonosimputadossolicitudesDto->setIdImputadoSolicitud($imputadossolicitudesDto[0]->getIdImputadoSolicitud());
                    $rsTelefonosimputadossolicitudesDto = $telefonosimputadossolicitudesDao->selectTelefonosimputadossolicitudes($telefonosimputadossolicitudesDto, "", $this->proveedor);
                    if ($rsTelefonosimputadossolicitudesDto != "") {
                        foreach ($rsTelefonosimputadossolicitudesDto as $arrayTel) {
                            $telefonoso->setIdTelefonoImputadosSolicitud($arrayTel->getIdTelefonoImputadosSolicitud());
                            $telefonoso->setActivo('N');
                            $telefonosimputadossolicitud = $telefonosimputadossolicitudesDao->eliminaTelefonosimputadossolicitudes($telefonoso, $this->proveedor);
                            if ($telefonosimputadossolicitud == "") {
                                $msg[] = array("No se encontraron telefonos en la posicion:" . $index);
                                $error = true;
                            }
                        }
                    }



                    $defensoresimputadosDao = new DefensoresimputadossolicitudesDAO();
                    $defensoresimputadosDto = new DefensoresimputadossolicitudesDTO();
                    $defensores = new DefensoresimputadossolicitudesDTO();
                    $defensoresimputadosDto->setIdImputadoSolicitud($imputadossolicitudesDto[0]->getIdImputadoSolicitud());
                    $rsDefensoresimputadosDto = $defensoresimputadosDao->selectDefensoresimputadossolicitudes($defensoresimputadosDto, "", $this->proveedor);
                    if ($rsDefensoresimputadosDto != "") {
                        foreach ($rsDefensoresimputadosDto as $arrayDef) {
                            $defensores->setIdDefensorImputadoSolicitud($arrayDef->getIdDefensorImputadoSolicitud());
                            $defensores->setActivo('N');
                            $defensoresimputados = $defensoresimputadosDao->eliminaDefensoresimputadossolicitudes($defensores, $this->proveedor);
                            if ($defensoresimputados == "") {
                                $msg[] = array("No se encontraron defensores en la posicion:" . $index);
                                $error = true;
                            }
                        }
                    }


                    $domiciliosImputadosDao = new DomiciliosimputadossolicitudesDAO();
                    $domiciliosImputadosDto = new DomiciliosimputadossolicitudesDTO();
                    $domicilios = new DomiciliosimputadossolicitudesDTO();
                    $domiciliosImputadosDto->setIdImputadoSolicitud($imputadossolicitudesDto[0]->getIdImputadoSolicitud());
                    $rsDomiciliosimputadosDto = $domiciliosImputadosDao->selectDomiciliosimputadossolicitudes($domiciliosImputadosDto, "", $this->proveedor);
                    if ($rsDomiciliosimputadosDto != "") {
                        foreach ($rsDomiciliosimputadosDto as $arrayDom) {
                            $domicilios->setIdDomicilioImputadoSolicitud($arrayDom->getIdDomicilioImputadoSolicitud());
                            $domicilios->setActivo('N');
                            $domiciliosimputados = $domiciliosImputadosDao->eliminaDomiciliosimputadossolicitudes($domicilios, $this->proveedor);
                            if ($domiciliosimputados == "") {
                                $msg[] = array("No se encontraron domicilios en la posicion:" . $index);
                                $error = true;
                            }
                        }
                    }



                    $tutoresimputadosDao = new TutoresimputadosDAO();
                    $tutoresimputadosDto = new TutoresimputadosDTO();
                    $tutoreso = new TutoresimputadosDTO();
                    $tutoresimputadosDto->setIdImputadoSolicitud($imputadossolicitudesDto[0]->getIdImputadoSolicitud());
                    $rsTutoresimputadosDto = $tutoresimputadosDao->selectTutoresimputados($tutoresimputadosDto, "", $this->proveedor);
                    if ($rsTutoresimputadosDto != "") {
                        foreach ($rsTutoresimputadosDto as $arrayTutor) {
                            $tutoreso->setIdTutorImputado($arrayTutor->getIdTutorImputado());
                            $tutoreso->setActivo('N');
                            $tutoresimputados = $tutoresimputadosDao->eliminaTutoresimputados($tutoreso, $this->proveedor);
                            if ($tutoresimputados == "") {
                                $msg[] = array("No se encontraron tutores en la posicion:" . $index);
                                $error = true;
                            }
                        }
                    }


                    $nacionalidadesimputadosDao = new NacionalidadesimputadossolicitudesDAO();
                    $nacionalidadesimputadosDto = new NacionalidadesimputadossolicitudesDTO();
                    $nacionalidades = new NacionalidadesimputadossolicitudesDTO();
                    $nacionalidadesimputadosDto->setIdImputadoSolicitud($imputadossolicitudesDto[0]->getIdImputadoSolicitud());
                    $rsNacionalidadesimputadosDto = $nacionalidadesimputadosDao->selectNacionalidadesimputadossolicitudes($nacionalidadesimputadosDto, "", $this->proveedor);
                    if ($rsNacionalidadesimputadosDto != "") {
                        foreach ($rsNacionalidadesimputadosDto as $arrayNacion) {
                            $nacionalidades->setIdNacionalidadImputadoSolicitud($arrayNacion->getIdNacionalidadImputadoSolicitud());
                            $nacionalidades->setActivo('N');
                            $nacionalidadesimputados = $nacionalidadesimputadosDao->updateNacionalidadesimputadossolicitudes($nacionalidades, $this->proveedor);
                            if ($nacionalidadesimputados == "") {
                                $msg[] = array("No se encontraron nacionalidades en la posicion:" . $index);
                                $error = true;
                            }
                        }
                    }

                    $imputadosDrogasDao = new ImputadosdrogasDAO();
                    $imputadosDrogasDto = new ImputadosdrogasDTO();
                    $drogas = new ImputadosdrogasDTO();
                    $imputadosDrogasDto->setIdImputadoSolicitud($imputadossolicitudesDto[0]->getIdImputadoSolicitud());
                    $rsDrogasDto = $imputadosDrogasDao->selectImputadosdrogas($imputadosDrogasDto, "", $this->proveedor);
                    if ($rsDrogasDto != "") {
                        foreach ($rsDrogasDto as $arrayDrogas) {
                            $drogas->setIdImputadoDroga($arrayDrogas->getIdImputadoDroga());
                            $drogas->setActivo('N');
                            $Drogasimputados = $imputadosDrogasDao->updateImputadosdrogas($drogas, $this->proveedor);
                            if ($Drogasimputados == "") {
                                $msg[] = array("No se encontraron nacionalidades en la posicion:" . $index);
                                $error = true;
                            }
                        }
                    }

                    $impofedelSolicitudesDto = new ImpofedelsolicitudesDTO();
                    $impofedelDto = new ImpofedelsolicitudesDTO();
                    $impofedelSolicitudesDao = new ImpofedelsolicitudesDAO();
                    $impofedelSolicitudesDto->setIdSolicitudAudiencia($imputadossolicitudesDto[0]->getIdSolicitudAudiencia());
                    $impofedelSolicitudesDto->setIdImputadoSolicitud($imputadossolicitudesDto[0]->getIdImputadoSolicitud());
                    $rsRelaciones = $impofedelSolicitudesDao->selectImpofedelsolicitudes($impofedelSolicitudesDto, "", $this->proveedor);
                    if ($rsRelaciones != "") {
                        foreach ($rsRelaciones as $relaciones) {
                            $impofedelDto->setIdImpOfeDelSolicitud($relaciones->getIdImpOfeDelSolicitud());
                            $impofedelDto->setActivo('N');
                            $rsSolicitud = $impofedelSolicitudesDao->eliminaImpodelsolicitudes($impofedelDto, $this->proveedor);
                            if ($rsSolicitud == "") {
                                $msg[] = array("No se pudo eliminar la relacion:" . $index);
                                $error = true;
                            }


                            $efectosOfendidosDto = new EfectosofendidosDTO();
                            $efectosOfendidosDao = new EfectosofendidosDAO();
                            $efectosOfendidosDto->setIdImpOfeDelSolicitud($relaciones->getIdImpOfeDelSolicitud());
                            $rsEfectosOfendidos = $efectosOfendidosDao->selectEfectosofendidos($efectosOfendidosDto);
                            if ($rsEfectosOfendidos != "") {
                                $EfectosofendidosDao = new EfectosofendidosDAO();
                                $EfectosofendidosDto = new EfectosofendidosDTO();
                                foreach ($rsEfectosOfendidos as $rsEfecto) {
                                    $EfectosofendidosDto->setIdEfectoOfendido($rsEfecto->getIdEfectoOfendido());
                                    $EfectosofendidosDto->setActivo('N');
                                    $rsEfectosOfendidos = $EfectosofendidosDao->updateEfectosofendidos($EfectosofendidosDto, $proveedor);
                                    if ($rsEfectosOfendidos == "") {
                                        $msg[] = array("No se pudo eliminar los efectos:" . $index);
                                        $error = true;
                                    }
                                }
                            }
//                            $this->proveedor
                            $violenciaDeGeneroDto = new ViolenciadegeneroDTO();
                            $violenciaDeGeneroDao = new ViolenciadegeneroDAO();
                            $violenciaDeGeneroDto->setIdImpOfeDelSolicitud($relaciones->getIdImpOfeDelSolicitud());
                            $violenciaDeGeneroDto->setActivo("S");
                            $rsViolenciaDeGenero = $violenciaDeGeneroDao->selectViolenciadegenero($violenciaDeGeneroDto);
                            if ($rsViolenciaDeGenero != "") {
                                foreach ($rsViolenciaDeGenero as $rsViolencia) {

                                    //Eliminar violencia de genero
                                    $violenciaDeGeneroDto->setIdViolenciaDeGenero($rsViolencia->getIdViolenciaDeGenero());
                                    $violenciaDeGeneroDto->setActivo("N");
                                    $rsViolenicaGenero = $violenciaDeGeneroDao->updateViolenciadegenero($violenciaDeGeneroDto, $this->proveedor);
                                    if ($rsViolenicaGenero == "") {
                                        $msg[] = array("No se pudo eliminar la violencia de genero:" . $index);
                                        $error = true;
                                    }


                                    //Eliminar factores Sociales
                                    $violenciaFacotesSocialesDto = new ViolenciafactoressocialesDTO();
                                    $violenciaFacotesSocialesDao = new ViolenciafactoressocialesDAO();
                                    $violenciaFacotesSocialesDto->setIdViolenciaDeGenero($rsViolencia->getIdViolenciaDeGenero());
                                    $violenciaFacotesSocialesDto->setActivo("S");
                                    $rsViolenciaFactorSocial = $violenciaFacotesSocialesDao->selectViolenciafactoressociales($violenciaFacotesSocialesDto);
                                    if ($rsViolenciaFactorSocial != "") {
                                        foreach ($rsViolenciaFactorSocial as $rsViolenciaFactor) {
                                            $violenciaFacotesSocialesDto->setIdViolenciaFactorSocial($rsViolenciaFactor->getIdViolenciaFactorSocial());
                                            $violenciaFacotesSocialesDto->setActivo("N");
                                            $violencia = $violenciaFacotesSocialesDao->updateViolenciafactoressociales($violenciaFacotesSocialesDto, $this->proveedor);
                                            if ($violencia == "") {
                                                $msg[] = array("No se pudo eliminar los factores sociales:" . $index);
                                                $error = true;
                                            }
                                        }
                                    }
                                    ////eliminar homicidio doloso
                                    $homicidioDolosoDto = new ViolenciahomicidiosdolososDTO();
                                    $homicidioDolosoDao = new ViolenciahomicidiosdolososDAO();
                                    $homicidioDolosoDto->setIdViolenciaDeGenero($rsViolencia->getIdViolenciaDeGenero());
                                    $homicidioDolosoDto->setActivo("S");
                                    $rsHomicidioDoloso = $homicidioDolosoDao->selectViolenciahomicidiosdolosos($homicidioDolosoDto);
                                    if ($rsHomicidioDoloso != "") {
                                        foreach ($rsHomicidioDoloso as $rsHomicidio) {
                                            $homicidioDolosoDto->setIdViolenciaHomicidioDoloso($rsHomicidio->getIdViolenciaHomicidioDoloso());
                                            $homicidioDolosoDto->setActivo("N");
                                            $rsHomicidios = $homicidioDolosoDao->updateViolenciahomicidiosdolosos($homicidioDolosoDto, $this->proveedor);
                                            if ($rsHomicidios == "") {
                                                $msg[] = array("No se pudo eliminar el homicidio doloso:" . $index);
                                                $error = true;
                                            }
                                        }
                                    }
                                    /////
                                }
                            }
                            //Eliminar trata de personas
                            $trataDePersonasDto = new TrataspersonasDTO();
                            $trataDePersonasDao = new TrataspersonasDAO();

                            $trataDePersonasDto->setIdImpOfeDelSolicitud($relaciones->getIdImpOfeDelSolicitud());
                            $trataDePersonasDto->setActivo("S");
                            $rsTratadePersonas = $trataDePersonasDao->selectTrataspersonas($trataDePersonasDto);
                            if ($rsTratadePersonas != "") {
                                foreach ($rsTratadePersonas as $rsTrataPersona) {
                                    $trataDePersonasDto->setIdTrataPersona($rsTrataPersona->getIdTrataPersona());
                                    $trataDePersonasDto->setActivo("N");
                                    $rsTrata = $trataDePersonasDao->updateTrataspersonas($trataDePersonasDto, $this->proveedor);
                                    if ($rsTrata == "") {
                                        $msg[] = array("No se pudo eliminar trata de personas:" . $index);
                                        $error = true;
                                    }
                                }
                            }

                            //Eliminar sexuales
                            $sexualesDto = new SexualesDTO();
                            $sexualesDao = new SexualesDAO();

                            $sexualesDto->setIdImpOfeDelSolicitud($relaciones->getIdImpOfeDelSolicitud());
                            $sexualesDto->setActivo("S");
                            $rsSexuales = $sexualesDao->selectSexuales($sexualesDto);
                            if ($rsSexuales != "") {
                                foreach ($rsSexuales as $rsSexual) {
                                    $sexualesDto->setIdSexual($rsSexual->getIdSexual());
                                    $sexualesDto->setActivo("N");
                                    $sexual = $sexualesDao->updateSexuales($sexualesDto, $this->proveedor);
                                    if ($sexual == "") {
                                        $msg[] = array("No se pudo eliminar sexuales:" . $index);
                                        $error = true;
                                    }
                                }
                                ///Eliminar testigos sexuales
                                $testigosSexualesDto = new TestigossexualesDTO();
                                $testigosSexualesDao = new TestigossexualesDAO();
                                $testigosSexualesDto->setIdSexual($rsSexual->getIdSexual());
                                $testigosSexualesDto->setActivo("S");
                                $rsTestigosSexuales = $testigosSexualesDao->selectTestigossexuales($testigosSexualesDto);
                                if ($rsTestigosSexuales != "") {
                                    foreach ($rsTestigosSexuales as $rsTestigos) {
                                        $testigosSexualesDto->setIdTestigoSexual($rsTestigos->getIdTestigoSexual());
                                        $testigosSexualesDto->setActivo("N");
                                        $rsTestigo = $testigosSexualesDao->updateTestigossexuales($testigosSexualesDto, $this->proveedor);
                                        if ($rsTestigo == "") {
                                            $msg[] = array("No se pudo eliminar el testigo:" . $index);
                                            $error = true;
                                        }
                                    }
                                }
                                ///eliminar secuales conducta
                                $sexualesConductaDto = new SexualesconductasDTO();
                                $sexualesConductaDao = new SexualesconductasDAO();

                                $sexualesConductaDto->setIdSexual($rsSexual->getIdSexual());
                                $sexualesConductaDto->setActivo("S");
                                $rsSexualesConducta = $sexualesConductaDao->selectSexualesconductas($sexualesConductaDto);
                                if ($rsSexualesConducta != "") {
                                    foreach ($rsSexualesConducta as $rsSexuales) {
                                        $sexualesConductaDto->setIdSexualConducta($rsSexuales->getIdSexualConducta());
                                        $sexualesConductaDto->setActivo("N");
                                        $rsSexualesC = $sexualesConductaDao->updateSexualesconductas($sexualesConductaDto, $this->proveedor);
                                        if ($rsSexualesC != "") {
                                            $detallesSexualConductaDto = new DetallessexualesconductasDTO();
                                            $detallesSexualConductaDao = new DetallessexualesconductasDAO();
                                            $detallesSexualConductaDto->setIdSexualConducta($rsSexuales->getIdSexualConducta());
                                            $detallesSexualConductaDto->setActivo("S");
                                            $rsDetalleSexual = $detallesSexualConductaDao->selectDetallessexualesconductas($detallesSexualConductaDto);
                                            if ($rsDetalleSexual != "") {
                                                foreach ($rsDetalleSexual as $rsDetalle) {
                                                    $detallesSexualConductaDto->setIdDetalleSexualConducta($rsDetalle->getIdDetalleSexualConducta());
                                                    $detallesSexualConductaDto->setActivo("N");
                                                    $rs = $detallesSexualConductaDao->updateDetallessexualesconductas($detallesSexualConductaDto, $this->proveedor);
                                                    if ($detallesSexualConductaDto == "") {
                                                        $msg[] = array("No se pudo eliminar el detalle de la conducta:" . $index);
                                                        $error = true;
                                                    }
                                                }
                                            }
                                        } else {
                                            $msg[] = array("No se pudo eliminar la conducta:" . $index);
                                            $error = true;
                                        }
                                    }
                                }
                            }
                        }///termina foreach relacion
                    }
                    $count++;
                    $index++;
                } else {
                    $msg[] = array("No se pudo eliminar imputado.");
                    $error = true;
                }
            } else {
                $msg[] = array("No se puede eliminar. La solicitud se encuentra enviada.");
                $error = true;
            }
        } else {
            $msg[] = array("No se encontro al imputado.");
            $error = true;
        }

        if ((!$error)) {
            $this->proveedor->execute("COMMIT");
            $result = array(
                "status" => "Ok",
                "msj" => "Se elimino de forma correcta",
            );
            if ($bitacora) {
                $BitacoramovimientosDao = new BitacoramovimientosDAO();
                $BitacoramovimientosDto = new BitacoramovimientosDTO();
                $BitacoramovimientosDto->setCveAccion("132");
                $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $BitacoramovimientosDto->setObservaciones("se elimino de forma logica al imputado: " . $imputadossolicitudesDto[0]->getIdImputadoSolicitud());
                $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
            }
        } else {
            $this->proveedor->execute("ROLLBACK");
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        return json_encode($result);
    }

    public function eliminaImputadoAudiencia($imputadossolicitudesDto, $proveedor) {

        $this->proveedor = $proveedor;

        $imputadosArrayReturn = array();
        $error = false;
        $msg = "";
        $index = 1;
        $count = 0;

        $imputadossolicitudesDao = new ImputadossolicitudesDAO();
        $imputadossolicitud = new ImputadossolicitudesDTO();

        $imputadossolicitudesDto->setActivo('N');
        $imputadossolicitudesDto = $this->validarImputadossolicitudes($imputadossolicitudesDto);

        $imputadossolicitud->setIdImputadoSolicitud($imputadossolicitudesDto->getIdImputadoSolicitud());
        $imputadossolicitud->setActivo('S');
        $rsImputados = $imputadossolicitudesDao->selectImputadossolicitudes($imputadossolicitud, "", $this->proveedor);
        if ($rsImputados != "") {
            $solicitudAudienciasDTO = new SolicitudesaudienciasDTO();
            $solicitudAudienciasDao = new SolicitudesaudienciasDAO();
            $solicitudAudienciasDTO->setIdSolicitudAudiencia($rsImputados[0]->getIdSolicitudAudiencia());
            $rsSolicitudAudiencia = $solicitudAudienciasDao->selectSolicitudesaudiencias($solicitudAudienciasDTO);

            $imputadossolicitudesDto = $imputadossolicitudesDao->eliminaImputadossolicitudes($imputadossolicitudesDto, $this->proveedor);
            //SE ELIMINA LA INFORMACION DEL IMPUTADO
            if ($imputadossolicitudesDto != "") {
                $telefonosimputadossolicitudesDao = new TelefonosimputadossolicitudesDAO();
                $telefonosimputadossolicitudesDto = new TelefonosimputadossolicitudesDTO();
                $telefonoso = new TelefonosimputadossolicitudesDTO();
                $telefonosimputadossolicitudesDto->setIdImputadoSolicitud($imputadossolicitudesDto[0]->getIdImputadoSolicitud());
                $rsTelefonosimputadossolicitudesDto = $telefonosimputadossolicitudesDao->selectTelefonosimputadossolicitudes($telefonosimputadossolicitudesDto, "", $this->proveedor);
                if ($rsTelefonosimputadossolicitudesDto != "") {
                    foreach ($rsTelefonosimputadossolicitudesDto as $arrayTel) {
                        $telefonoso->setIdTelefonoImputadosSolicitud($arrayTel->getIdTelefonoImputadosSolicitud());
                        $telefonoso->setActivo('N');
                        $telefonosimputadossolicitud = $telefonosimputadossolicitudesDao->eliminaTelefonosimputadossolicitudes($telefonoso, $this->proveedor);
                        if ($telefonosimputadossolicitud == "") {
                            $msg = ("No se encontraron telefonos en la posicion:" . $index);
                            $error = true;
                        }
                    }
                }

                $defensoresimputadosDao = new DefensoresimputadossolicitudesDAO();
                $defensoresimputadosDto = new DefensoresimputadossolicitudesDTO();
                $defensores = new DefensoresimputadossolicitudesDTO();
                $defensoresimputadosDto->setIdImputadoSolicitud($imputadossolicitudesDto[0]->getIdImputadoSolicitud());
                $rsDefensoresimputadosDto = $defensoresimputadosDao->selectDefensoresimputadossolicitudes($defensoresimputadosDto, "", $this->proveedor);
                if ($rsDefensoresimputadosDto != "") {
                    foreach ($rsDefensoresimputadosDto as $arrayDef) {
                        $defensores->setIdDefensorImputadoSolicitud($arrayDef->getIdDefensorImputadoSolicitud());
                        $defensores->setActivo('N');
                        $defensoresimputados = $defensoresimputadosDao->eliminaDefensoresimputadossolicitudes($defensores, $this->proveedor);
                        if ($defensoresimputados == "") {
                            $msg = ("No se encontraron defensores en la posicion:" . $index);
                            $error = true;
                        }
                    }
                }

                $domiciliosImputadosDao = new DomiciliosimputadossolicitudesDAO();
                $domiciliosImputadosDto = new DomiciliosimputadossolicitudesDTO();
                $domicilios = new DomiciliosimputadossolicitudesDTO();
                $domiciliosImputadosDto->setIdImputadoSolicitud($imputadossolicitudesDto[0]->getIdImputadoSolicitud());
                $rsDomiciliosimputadosDto = $domiciliosImputadosDao->selectDomiciliosimputadossolicitudes($domiciliosImputadosDto, "", $this->proveedor);
                if ($rsDomiciliosimputadosDto != "") {
                    foreach ($rsDomiciliosimputadosDto as $arrayDom) {
                        $domicilios->setIdDomicilioImputadoSolicitud($arrayDom->getIdDomicilioImputadoSolicitud());
                        $domicilios->setActivo('N');
                        $domiciliosimputados = $domiciliosImputadosDao->eliminaDomiciliosimputadossolicitudes($domicilios, $this->proveedor);
                        if ($domiciliosimputados == "") {
                            $msg = ("No se encontraron domicilios en la posicion:" . $index);
                            $error = true;
                        }
                    }
                }

                $tutoresimputadosDao = new TutoresimputadosDAO();
                $tutoresimputadosDto = new TutoresimputadosDTO();
                $tutoreso = new TutoresimputadosDTO();
                $tutoresimputadosDto->setIdImputadoSolicitud($imputadossolicitudesDto[0]->getIdImputadoSolicitud());
                $rsTutoresimputadosDto = $tutoresimputadosDao->selectTutoresimputados($tutoresimputadosDto, "", $this->proveedor);
                if ($rsTutoresimputadosDto != "") {
                    foreach ($rsTutoresimputadosDto as $arrayTutor) {
                        $tutoreso->setIdTutorImputado($arrayTutor->getIdTutorImputado());
                        $tutoreso->setActivo('N');
                        $tutoresimputados = $tutoresimputadosDao->eliminaTutoresimputados($tutoreso, $this->proveedor);
                        if ($tutoresimputados == "") {
                            $msg = ("No se encontraron tutores en la posicion:" . $index);
                            $error = true;
                        }
                    }
                }

                $nacionalidadesimputadosDao = new NacionalidadesimputadossolicitudesDAO();
                $nacionalidadesimputadosDto = new NacionalidadesimputadossolicitudesDTO();
                $nacionalidades = new NacionalidadesimputadossolicitudesDTO();
                $nacionalidadesimputadosDto->setIdImputadoSolicitud($imputadossolicitudesDto[0]->getIdImputadoSolicitud());
                $rsNacionalidadesimputadosDto = $nacionalidadesimputadosDao->selectNacionalidadesimputadossolicitudes($nacionalidadesimputadosDto, "", $this->proveedor);
                if ($rsNacionalidadesimputadosDto != "") {
                    foreach ($rsNacionalidadesimputadosDto as $arrayNacion) {
                        $nacionalidades->setIdNacionalidadImputadoSolicitud($arrayNacion->getIdNacionalidadImputadoSolicitud());
                        $nacionalidades->setActivo('N');
                        $nacionalidadesimputados = $nacionalidadesimputadosDao->updateNacionalidadesimputadossolicitudes($nacionalidades, $this->proveedor);
                        if ($nacionalidadesimputados == "") {
                            $msg = ("No se encontraron nacionalidades en la posicion:" . $index);
                            $error = true;
                        }
                    }
                }

                $imputadosDrogasDao = new ImputadosdrogasDAO();
                $imputadosDrogasDto = new ImputadosdrogasDTO();
                $drogas = new ImputadosdrogasDTO();
                $imputadosDrogasDto->setIdImputadoSolicitud($imputadossolicitudesDto[0]->getIdImputadoSolicitud());
                $rsDrogasDto = $imputadosDrogasDao->selectImputadosdrogas($imputadosDrogasDto, "", $this->proveedor);
                if ($rsDrogasDto != "") {
                    foreach ($rsDrogasDto as $arrayDrogas) {
                        $drogas->setIdImputadoDroga($arrayDrogas->getIdImputadoDroga());
                        $drogas->setActivo('N');
                        $Drogasimputados = $imputadosDrogasDao->updateImputadosdrogas($drogas, $this->proveedor);
                        if ($Drogasimputados == "") {
                            $msg = ("No se encontraron nacionalidades en la posicion:" . $index);
                            $error = true;
                        }
                    }
                }

                $impofedelSolicitudesDto = new ImpofedelsolicitudesDTO();
                $impofedelDto = new ImpofedelsolicitudesDTO();
                $impofedelSolicitudesDao = new ImpofedelsolicitudesDAO();
                $impofedelSolicitudesDto->setIdSolicitudAudiencia($imputadossolicitudesDto[0]->getIdSolicitudAudiencia());
                $impofedelSolicitudesDto->setIdImputadoSolicitud($imputadossolicitudesDto[0]->getIdImputadoSolicitud());
                $rsRelaciones = $impofedelSolicitudesDao->selectImpofedelsolicitudes($impofedelSolicitudesDto, "", $this->proveedor);
                if ($rsRelaciones != "") {
                    foreach ($rsRelaciones as $relaciones) {
                        $impofedelDto->setIdImpOfeDelSolicitud($relaciones->getIdImpOfeDelSolicitud());
                        $impofedelDto->setActivo('N');
                        $rsSolicitud = $impofedelSolicitudesDao->eliminaImpodelsolicitudes($impofedelDto, $this->proveedor);
                        if ($rsSolicitud == "") {
                            $msg = ("No se pudo eliminar la relacion:" . $index);
                            $error = true;
                        }

                        $efectosOfendidosDto = new EfectosofendidosDTO();
                        $efectosOfendidosDao = new EfectosofendidosDAO();
                        $efectosOfendidosDto->setIdImpOfeDelSolicitud($relaciones->getIdImpOfeDelSolicitud());
                        $rsEfectosOfendidos = $efectosOfendidosDao->selectEfectosofendidos($efectosOfendidosDto);
                        if ($rsEfectosOfendidos != "") {
                            $EfectosofendidosDao = new EfectosofendidosDAO();
                            $EfectosofendidosDto = new EfectosofendidosDTO();
                            foreach ($rsEfectosOfendidos as $rsEfecto) {
                                $EfectosofendidosDto->setIdEfectoOfendido($rsEfecto->getIdEfectoOfendido());
                                $EfectosofendidosDto->setActivo('N');
                                $rsEfectosOfendidos = $EfectosofendidosDao->updateEfectosofendidos($EfectosofendidosDto, $proveedor);
                                if ($rsEfectosOfendidos == "") {
                                    $msg = ("No se pudo eliminar los efectos:" . $index);
                                    $error = true;
                                }
                            }
                        }

                        $violenciaDeGeneroDto = new ViolenciadegeneroDTO();
                        $violenciaDeGeneroDao = new ViolenciadegeneroDAO();
                        $violenciaDeGeneroDto->setIdImpOfeDelSolicitud($relaciones->getIdImpOfeDelSolicitud());
                        $violenciaDeGeneroDto->setActivo("S");
                        $rsViolenciaDeGenero = $violenciaDeGeneroDao->selectViolenciadegenero($violenciaDeGeneroDto);
                        if ($rsViolenciaDeGenero != "") {
                            foreach ($rsViolenciaDeGenero as $rsViolencia) {

                                //Eliminar violencia de genero
                                $violenciaDeGeneroDto->setIdViolenciaDeGenero($rsViolencia->getIdViolenciaDeGenero());
                                $violenciaDeGeneroDto->setActivo("N");
                                $rsViolenicaGenero = $violenciaDeGeneroDao->updateViolenciadegenero($violenciaDeGeneroDto, $this->proveedor);
                                if ($rsViolenicaGenero == "") {
                                    $msg = ("No se pudo eliminar la violencia de genero:" . $index);
                                    $error = true;
                                }


                                //Eliminar factores Sociales
                                $violenciaFacotesSocialesDto = new ViolenciafactoressocialesDTO();
                                $violenciaFacotesSocialesDao = new ViolenciafactoressocialesDAO();
                                $violenciaFacotesSocialesDto->setIdViolenciaDeGenero($rsViolencia->getIdViolenciaDeGenero());
                                $violenciaFacotesSocialesDto->setActivo("S");
                                $rsViolenciaFactorSocial = $violenciaFacotesSocialesDao->selectViolenciafactoressociales($violenciaFacotesSocialesDto);
                                if ($rsViolenciaFactorSocial != "") {
                                    foreach ($rsViolenciaFactorSocial as $rsViolenciaFactor) {
                                        $violenciaFacotesSocialesDto->setIdViolenciaFactorSocial($rsViolenciaFactor->getIdViolenciaFactorSocial());
                                        $violenciaFacotesSocialesDto->setActivo("N");
                                        $violencia = $violenciaFacotesSocialesDao->updateViolenciafactoressociales($violenciaFacotesSocialesDto, $this->proveedor);
                                        if ($violencia == "") {
                                            $msg = ("No se pudo eliminar los factores sociales:" . $index);
                                            $error = true;
                                        }
                                    }
                                }
                                ////eliminar homicidio doloso
                                $homicidioDolosoDto = new ViolenciahomicidiosdolososDTO();
                                $homicidioDolosoDao = new ViolenciahomicidiosdolososDAO();
                                $homicidioDolosoDto->setIdViolenciaDeGenero($rsViolencia->getIdViolenciaDeGenero());
                                $homicidioDolosoDto->setActivo("S");
                                $rsHomicidioDoloso = $homicidioDolosoDao->selectViolenciahomicidiosdolosos($homicidioDolosoDto);
                                if ($rsHomicidioDoloso != "") {
                                    foreach ($rsHomicidioDoloso as $rsHomicidio) {
                                        $homicidioDolosoDto->setIdViolenciaHomicidioDoloso($rsHomicidio->getIdViolenciaHomicidioDoloso());
                                        $homicidioDolosoDto->setActivo("N");
                                        $rsHomicidios = $homicidioDolosoDao->updateViolenciahomicidiosdolosos($homicidioDolosoDto, $this->proveedor);
                                        if ($rsHomicidios == "") {
                                            $msg = ("No se pudo eliminar el homicidio doloso:" . $index);
                                            $error = true;
                                        }
                                    }
                                }
                                /////
                            }
                        }
                        //Eliminar trata de personas
                        $trataDePersonasDto = new TrataspersonasDTO();
                        $trataDePersonasDao = new TrataspersonasDAO();

                        $trataDePersonasDto->setIdImpOfeDelSolicitud($relaciones->getIdImpOfeDelSolicitud());
                        $trataDePersonasDto->setActivo("S");
                        $rsTratadePersonas = $trataDePersonasDao->selectTrataspersonas($trataDePersonasDto);
                        if ($rsTratadePersonas != "") {
                            foreach ($rsTratadePersonas as $rsTrataPersona) {
                                $trataDePersonasDto->setIdTrataPersona($rsTrataPersona->getIdTrataPersona());
                                $trataDePersonasDto->setActivo("N");
                                $rsTrata = $trataDePersonasDao->updateTrataspersonas($trataDePersonasDto, $this->proveedor);
                                if ($rsTrata == "") {
                                    $msg = ("No se pudo eliminar trata de personas:" . $index);
                                    $error = true;
                                }
                            }
                        }

                        //Eliminar sexuales
                        $sexualesDto = new SexualesDTO();
                        $sexualesDao = new SexualesDAO();

                        $sexualesDto->setIdImpOfeDelSolicitud($relaciones->getIdImpOfeDelSolicitud());
                        $sexualesDto->setActivo("S");
                        $rsSexuales = $sexualesDao->selectSexuales($sexualesDto);
                        if ($rsSexuales != "") {
                            foreach ($rsSexuales as $rsSexual) {
                                $sexualesDto->setIdSexual($rsSexual->getIdSexual());
                                $sexualesDto->setActivo("N");
                                $sexual = $sexualesDao->updateSexuales($sexualesDto, $this->proveedor);
                                if ($sexual == "") {
                                    $msg = ("No se pudo eliminar sexuales:" . $index);
                                    $error = true;
                                }
                            }
                            ///Eliminar testigos sexuales
                            $testigosSexualesDto = new TestigossexualesDTO();
                            $testigosSexualesDao = new TestigossexualesDAO();
                            $testigosSexualesDto->setIdSexual($rsSexual->getIdSexual());
                            $testigosSexualesDto->setActivo("S");
                            $rsTestigosSexuales = $testigosSexualesDao->selectTestigossexuales($testigosSexualesDto);
                            if ($rsTestigosSexuales != "") {
                                foreach ($rsTestigosSexuales as $rsTestigos) {
                                    $testigosSexualesDto->setIdTestigoSexual($rsTestigos->getIdTestigoSexual());
                                    $testigosSexualesDto->setActivo("N");
                                    $rsTestigo = $testigosSexualesDao->updateTestigossexuales($testigosSexualesDto, $this->proveedor);
                                    if ($rsTestigo == "") {
                                        $msg = ("No se pudo eliminar el testigo:" . $index);
                                        $error = true;
                                    }
                                }
                            }
                            ///eliminar secuales conducta
                            $sexualesConductaDto = new SexualesconductasDTO();
                            $sexualesConductaDao = new SexualesconductasDAO();

                            $sexualesConductaDto->setIdSexual($rsSexual->getIdSexual());
                            $sexualesConductaDto->setActivo("S");
                            $rsSexualesConducta = $sexualesConductaDao->selectSexualesconductas($sexualesConductaDto);
                            if ($rsSexualesConducta != "") {
                                foreach ($rsSexualesConducta as $rsSexuales) {
                                    $sexualesConductaDto->setIdSexualConducta($rsSexuales->getIdSexualConducta());
                                    $sexualesConductaDto->setActivo("N");
                                    $rsSexualesC = $sexualesConductaDao->updateSexualesconductas($sexualesConductaDto, $this->proveedor);
                                    if ($rsSexualesC != "") {
                                        $detallesSexualConductaDto = new DetallessexualesconductasDTO();
                                        $detallesSexualConductaDao = new DetallessexualesconductasDAO();
                                        $detallesSexualConductaDto->setIdSexualConducta($rsSexuales->getIdSexualConducta());
                                        $detallesSexualConductaDto->setActivo("S");
                                        $rsDetalleSexual = $detallesSexualConductaDao->selectDetallessexualesconductas($detallesSexualConductaDto);
                                        if ($rsDetalleSexual != "") {
                                            foreach ($rsDetalleSexual as $rsDetalle) {
                                                $detallesSexualConductaDto->setIdDetalleSexualConducta($rsDetalle->getIdDetalleSexualConducta());
                                                $detallesSexualConductaDto->setActivo("N");
                                                $rs = $detallesSexualConductaDao->updateDetallessexualesconductas($detallesSexualConductaDto, $this->proveedor);
                                                if ($detallesSexualConductaDto == "") {
                                                    $msg = ("No se pudo eliminar el detalle de la conducta:" . $index);
                                                    $error = true;
                                                }
                                            }
                                        }
                                    } else {
                                        $msg = ("No se pudo eliminar la conducta:" . $index);
                                        $error = true;
                                    }
                                }
                            }
                        }
                    }
                }
                $count++;
                $index++;
            } else {
                $msg = ("No se pudo eliminar imputado.");
                $error = true;
            }
        } else {
            $msg = ("No se encontro al imputado.");
            $error = true;
        }

        if ((!$error)) {
            $result = array(
                "status" => "Ok",
                "msj" => "Se elimino de forma correcta",
            );

            $BitacoramovimientosDao = new BitacoramovimientosDAO();
            $BitacoramovimientosDto = new BitacoramovimientosDTO();
            $BitacoramovimientosDto->setCveAccion("360");
            $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
            $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
            $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
            $BitacoramovimientosDto->setObservaciones("se elimino de forma logica al imputado: " . $imputadossolicitudesDto[0]->getIdImputadoSolicitud());
            $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        return json_encode($result);
    }

}

////
//$ImputadossolicitudesDto = new ImputadossolicitudesDTO();
//$ImputadossolicitudesDto->setIdImputadoSolicitud(1);
//$ImputadossolicitudesDto->setActivo("S");
//$ImputadossolicitudesDto->setIdSolicitudAudiencia(242);
//$ImputadossolicitudesDto->setDetenido("S");
//$ImputadossolicitudesDto->setNombre("DANIEL ALEJANDRO.");
//$ImputadossolicitudesDto->setPaterno("GAONA");
//$ImputadossolicitudesDto->setMaterno("MERCADO");
//$ImputadossolicitudesDto->setRfc("CUPU800825569");
//$ImputadossolicitudesDto->setCurp("BADD110313HCMLNS09");
//$ImputadossolicitudesDto->setCveTipoDetencion(1);
//$ImputadossolicitudesDto->setCveGenero(1);
//$ImputadossolicitudesDto->setAlias("CHAMOY");
//$ImputadossolicitudesDto->setFechaDeclaracion("10/11/2015");
//$ImputadossolicitudesDto->setCvePaisNacimiento(119);
//$ImputadossolicitudesDto->setCveEstadoNacimiento(15);
//$ImputadossolicitudesDto->setCveMunicipioNacimiento(123);
//$ImputadossolicitudesDto->setFechaNacimiento("20/05/1986");
//$ImputadossolicitudesDto->setEdad("29");
//$ImputadossolicitudesDto->setCveTipoPersona(1);
//$ImputadossolicitudesDto->setCveEstadoCivil(1);
//$ImputadossolicitudesDto->setCveEspanol(1);
//$ImputadossolicitudesDto->setCveAlfabetismo(1);
//$ImputadossolicitudesDto->setCveDialectoIndigena(1);
//$ImputadossolicitudesDto->setCveTipoFamiliaLinguistica(1);
//$ImputadossolicitudesDto->setCveEstadoPsicofisico(1);
//$ImputadossolicitudesDto->setFechaImputacion("");
//$ImputadossolicitudesDto->setFechaControlDet("");
//$ImputadossolicitudesDto->setFecTerminoCons("");
//$ImputadossolicitudesDto->setFecCierreInv("");
//$ImputadossolicitudesDto->setEstadoNacimiento("");
//$ImputadossolicitudesDto->setRelacionMoral("N");
//$ImputadossolicitudesDto->setPersonaMoral("");
//$ImputadossolicitudesDto->setCveCereso(1);
//$ImputadossolicitudesDto->setCveEtapaProcesal("A");
//$ImputadossolicitudesDto->setCveTipoReincidencia(1);
//$ImputadossolicitudesDto->setIngresoMensual("10000");
//$ImputadossolicitudesDto->setCveGrupoEdnico(1);
//$ImputadossolicitudesDto->setCveNivelInstruccion(1);
//$ImputadossolicitudesDto->setCveOcupacion(1);
//$ImputadossolicitudesDto->setCveInterprete(1);
////
//$ImputadossolicitudesDto1 = new ImputadossolicitudesDTO();
//$ImputadossolicitudesDto1->setIdImputadoSolicitud(2);
//$ImputadossolicitudesDto1->setActivo("S");
//$ImputadossolicitudesDto1->setIdSolicitudAudiencia(242);
//$ImputadossolicitudesDto1->setDetenido("S");
//$ImputadossolicitudesDto1->setNombre("JESUS");
//$ImputadossolicitudesDto1->setPaterno("CONTRERAS");
//$ImputadossolicitudesDto1->setMaterno("LOPEZ");
//$ImputadossolicitudesDto1->setRfc("CUPU800825569");
//$ImputadossolicitudesDto1->setCurp("BADD110313HCMLNS09");
//$ImputadossolicitudesDto1->setCveTipoDetencion(1);
//$ImputadossolicitudesDto1->setCveGenero(1);
//$ImputadossolicitudesDto1->setAlias("GAONA");
//$ImputadossolicitudesDto1->setFechaDeclaracion("10/11/2015");
//$ImputadossolicitudesDto1->setCvePaisNacimiento(119);
//$ImputadossolicitudesDto1->setCveEstadoNacimiento(15);
//$ImputadossolicitudesDto1->setCveMunicipioNacimiento(123);
//$ImputadossolicitudesDto1->setFechaNacimiento("20/05/1986");
//$ImputadossolicitudesDto1->setEdad("29");
//$ImputadossolicitudesDto1->setCveTipoPersona(1);
//$ImputadossolicitudesDto1->setCveEstadoCivil(1);
//$ImputadossolicitudesDto1->setCveEspanol(1);
//$ImputadossolicitudesDto1->setCveAlfabetismo(1);
//$ImputadossolicitudesDto1->setCveDialectoIndigena(1);
//$ImputadossolicitudesDto1->setCveTipoFamiliaLinguistica(1);
//$ImputadossolicitudesDto1->setCveEstadoPsicofisico(1);
//$ImputadossolicitudesDto1->setFechaImputacion("");
//$ImputadossolicitudesDto1->setFechaControlDet("");
//$ImputadossolicitudesDto1->setFecTerminoCons("");
//$ImputadossolicitudesDto1->setFecCierreInv("");
//$ImputadossolicitudesDto1->setEstadoNacimiento("");
//$ImputadossolicitudesDto1->setRelacionMoral("N");
//$ImputadossolicitudesDto1->setPersonaMoral("");
//$ImputadossolicitudesDto1->setCveCereso(1);
//$ImputadossolicitudesDto1->setCveEtapaProcesal("A");
//$ImputadossolicitudesDto1->setCveTipoReincidencia(1);
//$ImputadossolicitudesDto1->setIngresoMensual("8000");
//$ImputadossolicitudesDto1->setCveGrupoEdnico(1);
//$ImputadossolicitudesDto1->setCveNivelInstruccion(1);
//$ImputadossolicitudesDto1->setCveOcupacion(1);
//$ImputadossolicitudesDto1->setCveInterprete(1);
//////
//$telefenosimputadossolicitudesDto = new TelefonosimputadossolicitudesDTO();
//$telefenosimputadossolicitudesDto->setIdTelefonoImputadosSolicitud("");
//$telefenosimputadossolicitudesDto->setIdImputadoSolicitud("");
//$telefenosimputadossolicitudesDto->setCelular("7224292372");
//$telefenosimputadossolicitudesDto->setTelefono("7141460480");
//$telefenosimputadossolicitudesDto->setEmail("correo@gmail.com");
////
//$defensoresimputadossolicitudesDto = new DefensoresimputadossolicitudesDTO();
//$defensoresimputadossolicitudesDto->setIdDefensorImputadoSolicitud("");
//$defensoresimputadossolicitudesDto->setIdImputadoSolicitud("");
//$defensoresimputadossolicitudesDto->setCveTipoDefensor(1);
//$defensoresimputadossolicitudesDto->setNombre("Daniel Alejandro Gaona Mercado");
//$defensoresimputadossolicitudesDto->setTelefono("7224292372");
//$defensoresimputadossolicitudesDto->setCelular("7224292372");
//$defensoresimputadossolicitudesDto->setEmail("correo@gmail.com");
//////
//////
//////
//$domiciliosimputadossolicitudesDto = new DomiciliosimputadossolicitudesDTO();
//$domiciliosimputadossolicitudesDto->setIdDomicilioImputadoSolicitud("");
//$domiciliosimputadossolicitudesDto->setIdImputadoSolicitud("");
//$domiciliosimputadossolicitudesDto->setCvePais(1);
//$domiciliosimputadossolicitudesDto->setEstado("MEXICO");
//$domiciliosimputadossolicitudesDto->setMunicipio("TOLUCA");
//$domiciliosimputadossolicitudesDto->setDireccion("MATAMOROS SUR");
//$domiciliosimputadossolicitudesDto->setNumExterior("");
//$domiciliosimputadossolicitudesDto->setNumInterior("");
//$domiciliosimputadossolicitudesDto->setColonia("CENTRO");
//$domiciliosimputadossolicitudesDto->setRecidenciaHabitual("S");
//$domiciliosimputadossolicitudesDto->setCveConvivencia(1);
//$domiciliosimputadossolicitudesDto->setCveTipoDeVivienda(1);
////
//$tutoresimputadosDto = new TutoresimputadosDTO();
//$tutoresimputadosDto->setIdTutorImputado("");
//$tutoresimputadosDto->setIdImputadoSolicitud("");
//$tutoresimputadosDto->setCveGenero(1);
//$tutoresimputadosDto->setCveTipoTutor(1);
//$tutoresimputadosDto->setNombre("DANIEL ALEJANDRO");
//$tutoresimputadosDto->setPaterno("GAONA");
//$tutoresimputadosDto->setMaterno("MERCADO");
//$tutoresimputadosDto->setFechaNacimiento("20/05/1986");
//$tutoresimputadosDto->setEdad(29);
////
//$nacionalidadesimputadossolicitudesDto[0] = new NacionalidadesimputadossolicitudesDTO();
//$nacionalidadesimputadossolicitudesDto[0]->setIdNacionalidadImputadoSolicitud("");
//$nacionalidadesimputadossolicitudesDto[0]->setIdImputadoSolicitud("");
//$nacionalidadesimputadossolicitudesDto[0]->setCvePais(1);
//
//$nacionalidadesimputadossolicitudesDto[1] = new NacionalidadesimputadossolicitudesDTO();
//$nacionalidadesimputadossolicitudesDto[1]->setIdNacionalidadImputadoSolicitud("");
//$nacionalidadesimputadossolicitudesDto[1]->setIdImputadoSolicitud("");
//$nacionalidadesimputadossolicitudesDto[1]->setCvePais(2);
//
//$nacionalidadesimputadossolicitudesDto[2] = new NacionalidadesimputadossolicitudesDTO();
//$nacionalidadesimputadossolicitudesDto[2]->setIdNacionalidadImputadoSolicitud("");
//$nacionalidadesimputadossolicitudesDto[2]->setIdImputadoSolicitud("");
//$nacionalidadesimputadossolicitudesDto[2]->setCvePais(3);
//////
//////
//$drogasImputados[0] = new ImputadosdrogasDTO();
//$drogasImputados[0]->setIdImputadoDroga("");
//$drogasImputados[0]->setIdImputadoSolicitud("");
//$drogasImputados[0]->setCveDroga(1);
//
//$drogasImputados[1] = new ImputadosdrogasDTO();
//$drogasImputados[1]->setIdImputadoDroga("");
//$drogasImputados[1]->setIdImputadoSolicitud("");
//$drogasImputados[1]->setCveDroga(2);
//
//$drogasImputados[2] = new ImputadosdrogasDTO();
//$drogasImputados[2]->setIdImputadoDroga("");
//$drogasImputados[2]->setIdImputadoSolicitud("");
//$drogasImputados[2]->setCveDroga(3);
//////
//////
//$param = array(
//    array(
//        "imputado" => $ImputadossolicitudesDto->toString(),
//        "telefonos" => array($telefenosimputadossolicitudesDto->toString()),
//        "defensores" => array($defensoresimputadossolicitudesDto->toString()),
//        "domicilios" => array($domiciliosimputadossolicitudesDto->toString()),
//        "tutores" => array($tutoresimputadosDto->toString(), $tutoresimputadosDto->toString()),
//        "nacionalidad" => array($nacionalidadesimputadossolicitudesDto[0]->toString(), $nacionalidadesimputadossolicitudesDto[1]->toString(), $nacionalidadesimputadossolicitudesDto[2]->toString()),
//        "drogas" => array($drogasImputados[0]->toString(), $drogasImputados[1]->toString(), $drogasImputados[2]->toString())
//    ),
//    array(
//        "imputado" => $ImputadossolicitudesDto1->toString(),
//        "telefonos" => array($telefenosimputadossolicitudesDto->toString()),
//        "defensores" => array($defensoresimputadossolicitudesDto->toString()),
//        "domicilios" => array($domiciliosimputadossolicitudesDto->toString()),
//        "tutores" => array($tutoresimputadosDto->toString(), $tutoresimputadosDto->toString()),
//        "nacionalidad" => array($nacionalidadesimputadossolicitudesDto[0]->toString(), $nacionalidadesimputadossolicitudesDto[1]->toString(), $nacionalidadesimputadossolicitudesDto[2]->toString()),
//        "drogas" => array($drogasImputados[0]->toString(), $drogasImputados[1]->toString(), $drogasImputados[2]->toString())
//    )
//);
////
//$ImputadossolicitudesController = new ImputadossolicitudesController();
//$ImputadossolicitudesController->insertImputadossolicitudes($param);
////
//$ImputadossolicitudesController = new ImputadossolicitudesController();
//$ImputadossolicitudesController->updateImputadossolicitudes($param);
//
////echo json_encode($param);
//
//$ImputadossolicitudesDto = new ImputadossolicitudesDTO();
//$ImputadossolicitudesDto->setIdSolicitudAudiencia(242);
//$ImputadossolicitudesDto->setIdImputadoSolicitud(521);
//$ImputadossolicitudesDto->setActivo("S");
//$ImputadossolicitudesDto->setDetenido("S");
//$ImputadossolicitudesDto->setNombre("DANIEL ALEJANDRO.");
//$ImputadossolicitudesDto->setPaterno("GAONA");
//$ImputadossolicitudesDto->setMaterno("MERCADO");
//$ImputadossolicitudesDto->setRfc("CUPU800825569");
//$ImputadossolicitudesDto->setCurp("BADD110313HCMLNS09");
//$ImputadossolicitudesDto->setCveTipoDetencion(1);
//$ImputadossolicitudesDto->setCveGenero(1);
//$ImputadossolicitudesDto->setAlias("GAONA");
//$ImputadossolicitudesDto->setFechaDeclaracion("10/11/2015");
//$ImputadossolicitudesDto->setCvePaisNacimiento(119);
//$ImputadossolicitudesDto->setCveEstadoNacimiento(15);
//$ImputadossolicitudesDto->setCveMunicipioNacimiento(123);
//$ImputadossolicitudesDto->setFechaNacimiento("20/05/1986");
//$ImputadossolicitudesDto->setEdad("29");
//$ImputadossolicitudesDto->setCveTipoPersona(1);
//$ImputadossolicitudesDto->setCveEstadoCivil(1);
//$ImputadossolicitudesDto->setCveEspanol(1);
//$ImputadossolicitudesDto->setCveAlfabetismo(1);
//$ImputadossolicitudesDto->setCveDialectoIndigena(1);
//$ImputadossolicitudesDto->setCveTipoFamiliaLinguistica(1);
//$ImputadossolicitudesDto->setCveEstadoPsicofisico(1);
//$ImputadossolicitudesDto->setFechaImputacion("");
//$ImputadossolicitudesDto->setFechaControlDet("");
//$ImputadossolicitudesDto->setFecTerminoCons("");
//$ImputadossolicitudesDto->setFecCierreInv("");
//$ImputadossolicitudesDto->setEstadoNacimiento("");
//$ImputadossolicitudesDto->setRelacionMoral("N");
//$ImputadossolicitudesDto->setPersonaMoral("");
////$ImputadossolicitudesDto->setCveNacionalidad(1); //SE QUITA CREO??
//$ImputadossolicitudesDto->setCveCereso(1);
//$ImputadossolicitudesDto->setCveEtapaProcesal("A");
//$ImputadossolicitudesDto->setCveTipoReincidencia(1);
//$ImputadossolicitudesDto->setIngresoMensual("6000");
//$ImputadossolicitudesDto->setCveGrupoEdnico(1);
//$ImputadossolicitudesDto->setCveNivelInstruccion(1);
//$ImputadossolicitudesDto->setCveOcupacion(1);
//$ImputadossolicitudesDto->setCveInterprete(1);
//$param = array(
//    "imputado" => $ImputadossolicitudesDto->toString()
//);
//$ImputadossolicitudesController = new ImputadossolicitudesController();
//$ImputadossolicitudesController->selectImputadossolicitudes($param);
//$ImputadossolicitudesDto = new ImputadossolicitudesDTO();
//$ImputadossolicitudesDto->setIdImputadoSolicitud(2);
////$ImputadossolicitudesDto->setIdSolicitudAudiencia(262);
//
//$param = array(
//    "imputado" => array($ImputadossolicitudesDto->toString())
//);
//$ImputadossolicitudesController = new ImputadossolicitudesController();
//$ImputadossolicitudesController->deleteImputadossolicitudes($param);
//
?>