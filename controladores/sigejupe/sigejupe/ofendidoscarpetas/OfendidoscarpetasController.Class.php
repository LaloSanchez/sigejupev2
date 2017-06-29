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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidoscarpetas/OfendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidoscarpetas/OfendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosofendidoscarpetas/DomiciliosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosofendidoscarpetas/DomiciliosofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosofendidoscarpetas/TelefonosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosofendidoscarpetas/TelefonosofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresofendidoscarpetas/DefensoresofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresofendidoscarpetas/DefensoresofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tutoresofendidoscarpetas/TutoresofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tutoresofendidoscarpetas/TutoresofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nacionalidadesofendidoscarpetas/NacionalidadesofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nacionalidadesofendidoscarpetas/NacionalidadesofendidoscarpetasDAO.Class.php");

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
//Órdenes Protecciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ordenesprotecciones/OrdenesproteccionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ordenesprotecciones/OrdenesproteccionesDAO.Class.php");
//Estados Psicofísicos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estadospsicofisicos/EstadospsicofisicosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estadospsicofisicos/EstadospsicofisicosDAO.Class.php");
//Víctima de Delincuencia Organizada
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/victimadeladelincuenciaorganizada/VictimadeladelincuenciaorganizadaDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/victimadeladelincuenciaorganizada/VictimadeladelincuenciaorganizadaDAO.Class.php");
//Víctima de Violencia Genero
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/victimadeviolenciadegenero/VictimadeviolenciadegeneroDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/victimadeviolenciadegenero/VictimadeviolenciadegeneroDAO.Class.php");
//Víctima de Trata
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/victimadetrata/VictimadetrataDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/victimadetrata/VictimadetrataDAO.Class.php");
//Grupos Étnicos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposednicos/GruposednicosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/gruposednicos/GruposednicosDAO.Class.php");
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
//Detalles Sexuales Conductas Carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/detallessexualesconductas/DetallessexualesconductasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/detallessexualesconductas/DetallessexualesconductasDAO.Class.php");
//Detalles conductas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/detallesconductas/DetallesconductasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/detallesconductas/DetallesconductasDAO.Class.php");
//Juzgados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");
//Delitos Carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitoscarpetas/DelitoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitoscarpetas/DelitoscarpetasDAO.Class.php");
//Tratas Personas Carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/trataspersonascarpetas/TrataspersonascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/trataspersonascarpetas/TrataspersonascarpetasDAO.Class.php");
//Tipo Trata
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipostratas/TipostratasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tipostratas/TipostratasDAO.Class.php");
//Violencia de genero carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciadegenerocarpetas/ViolenciadegenerocarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciadegenerocarpetas/ViolenciadegenerocarpetasDAO.Class.php");
//violencia factores sociales carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciafactoressocialescarpetas/ViolenciafactoressocialescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciafactoressocialescarpetas/ViolenciafactoressocialescarpetasDAO.Class.php");
//violencia homicidios dolosos carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciahomicidiosdolososcarpetas/ViolenciahomicidiosdolososcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciahomicidiosdolososcarpetas/ViolenciahomicidiosdolososcarpetasDAO.Class.php");
//Sexuales carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualescarpetas/SexualescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexualescarpetas/SexualescarpetasDAO.Class.php");
//Testigos sexuales carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/testigossexualescarpetas/TestigossexualescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/testigossexualescarpetas/TestigossexualescarpetasDAO.Class.php");
//sexuales conductas carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualesconductascarpetas/SexualesconductascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexualesconductascarpetas/SexualesconductascarpetasDAO.Class.php");
//Detalles sexuales conductas carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/detallessexualesconductascarpetas/DetallessexualesconductascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/detallessexualesconductascarpetas/DetallessexualesconductascarpetasDAO.Class.php");
//impofedel
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/impofedelcarpetas/ImpofedelcarpetasController.Class.php");
//Ofendidos Solicitudes
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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tutoresofendidos/TutoresofendidosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tutoresofendidos/TutoresofendidosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");

class OfendidoscarpetasController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarOfendidoscarpetas($OfendidoscarpetasDto) {
        $OfendidoscarpetasDto->setIdOfendidoCarpeta(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getIdOfendidoCarpeta()))));
        $OfendidoscarpetasDto->setIdCarpetaJudicial(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getIdCarpetaJudicial()))));
        $OfendidoscarpetasDto->setActivo(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getActivo()))));
        $OfendidoscarpetasDto->setFechaRegistro(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getFechaRegistro()))));
        $OfendidoscarpetasDto->setFechaActualizacion(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getFechaActualizacion()))));
        $OfendidoscarpetasDto->setNombre(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getNombre()))));
        $OfendidoscarpetasDto->setPaterno(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getPaterno()))));
        $OfendidoscarpetasDto->setMaterno(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getMaterno()))));
        $OfendidoscarpetasDto->setRfc(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getRfc()))));
        $OfendidoscarpetasDto->setCurp(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getCurp()))));
        $OfendidoscarpetasDto->setCveOcupacion(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getCveOcupacion()))));
        $OfendidoscarpetasDto->setCveTipoPersona(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getCveTipoPersona()))));
        $OfendidoscarpetasDto->setCveGenero(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getCveGenero()))));
        $OfendidoscarpetasDto->setCveTipoParte(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getCveTipoParte()))));
        $OfendidoscarpetasDto->setCveTipoReligion(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getCveTipoReligion()))));
        $OfendidoscarpetasDto->setFechaNacimiento(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getFechaNacimiento()))));
        $OfendidoscarpetasDto->setEdad(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getEdad()))));
        $OfendidoscarpetasDto->setCvePaisNacimiento(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getCvePaisNacimiento()))));
        $OfendidoscarpetasDto->setCveEstadoNacimiento(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getCveEstadoNacimiento()))));
        $OfendidoscarpetasDto->setEstadoNacimiento(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getEstadoNacimiento()))));
        $OfendidoscarpetasDto->setCveMunicipioNacimiento(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getCveMunicipioNacimiento()))));
        $OfendidoscarpetasDto->setMunicipioNacimiento(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getMunicipioNacimiento()))));
        $OfendidoscarpetasDto->setCveEstadoCivil(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getCveEstadoCivil()))));
        $OfendidoscarpetasDto->setCveAlfabetismo(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getCveAlfabetismo()))));
        $OfendidoscarpetasDto->setCveNivelInstruccion(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getCveNivelInstruccion()))));
        $OfendidoscarpetasDto->setCveEspanol(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getCveEspanol()))));
        $OfendidoscarpetasDto->setCveDialectoIndigena(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getCveDialectoIndigena()))));
        $OfendidoscarpetasDto->setCveTipoFamiliaLinguistica(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getCveTipoFamiliaLinguistica()))));
        $OfendidoscarpetasDto->setCveInterprete(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getCveInterprete()))));
        $OfendidoscarpetasDto->setCveOrdenProteccion(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getCveOrdenProteccion()))));
        $OfendidoscarpetasDto->setCveEstadoPsicofisico(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getCveEstadoPsicofisico()))));
        //$OfendidoscarpetasDto->setcveNacionalidad(strtoupper(str_ireplace("'","",trim($OfendidoscarpetasDto->getcveNacionalidad()))));
        $OfendidoscarpetasDto->setNombreMoral(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getNombreMoral()))));
        $OfendidoscarpetasDto->setCveVictimaDeLaDelincuenciaOrganizada(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada()))));
        $OfendidoscarpetasDto->setCveVictimaDeViolenciaDeGenero(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero()))));
        $OfendidoscarpetasDto->setCveVictimaDeTrata(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getCveVictimaDeTrata()))));
        $OfendidoscarpetasDto->setCveVictimaDeAcoso(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getCveVictimaDeAcoso()))));
        $OfendidoscarpetasDto->setDesaparecido(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getDesaparecido()))));
        $OfendidoscarpetasDto->setNumHijos(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getNumHijos()))));
        $OfendidoscarpetasDto->setEmbarazada(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getEmbarazada()))));
        $OfendidoscarpetasDto->setCveGrupoEdnico(strtoupper(str_ireplace("'", "", trim($OfendidoscarpetasDto->getCveGrupoEdnico()))));
        return $OfendidoscarpetasDto;
    }

    public function selectOfendidoscarpetas($OfendidoscarpetasDto, $proveedor = null) {
        $OfendidoscarpetasDto = $this->validarOfendidoscarpetas($OfendidoscarpetasDto);
        $OfendidoscarpetasDao = new OfendidoscarpetasDAO();
        $OfendidoscarpetasDto = $OfendidoscarpetasDao->selectOfendidoscarpetas($OfendidoscarpetasDto, $proveedor);
        return $OfendidoscarpetasDto;
    }

    public function insertOfendidoscarpetas($OfendidoscarpetasDto, $proveedor = null) {
        $OfendidoscarpetasDto = $this->validarOfendidoscarpetas($OfendidoscarpetasDto);
        $OfendidoscarpetasDao = new OfendidoscarpetasDAO();
        $OfendidoscarpetasDto = $OfendidoscarpetasDao->insertOfendidoscarpetas($OfendidoscarpetasDto, $proveedor);
        return $OfendidoscarpetasDto;
    }

    public function updateOfendidoscarpetas($OfendidoscarpetasDto, $proveedor = null) {
        $OfendidoscarpetasDto = $this->validarOfendidoscarpetas($OfendidoscarpetasDto);
        $OfendidoscarpetasDao = new OfendidoscarpetasDAO();
        //$tmpDto = new OfendidoscarpetasDTO();
        //$tmpDto = $OfendidoscarpetasDao->selectOfendidoscarpetas($OfendidoscarpetasDto,$proveedor);
        //if($tmpDto!=""){//$OfendidoscarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $OfendidoscarpetasDto = $OfendidoscarpetasDao->updateOfendidoscarpetas($OfendidoscarpetasDto, $proveedor);
        return $OfendidoscarpetasDto;
        //}
        //return "";
    }

    public function deleteOfendidoscarpetas($OfendidoscarpetasDto, $proveedor = null) {
        $OfendidoscarpetasDto = $this->validarOfendidoscarpetas($OfendidoscarpetasDto);
        $OfendidoscarpetasDao = new OfendidoscarpetasDAO();
        $OfendidoscarpetasDto = $OfendidoscarpetasDao->deleteOfendidoscarpetas($OfendidoscarpetasDto, $proveedor);
        return $OfendidoscarpetasDto;
    }

    /*
     * validar campos requeridos
     */

    public function validaOfendido($OfendidoscarpetasDto) {
        $validacion = new Validacion();
        $estatus = 'ok';
        $msg = [];

        //validar si puede agregar ofendido de a cuerdo al num de ofendidos en la carpeta judicial.
        $carpetaJudicialDto = new CarpetasjudicialesDTO();
        $carpetaJudicialDto->setIdCarpetaJudicial($OfendidoscarpetasDto->getIdCarpetaJudicial());
        $carpetaJudicialDao = new CarpetasjudicialesDAO();
        $carpetaResponse = $carpetaJudicialDao->selectCarpetasjudiciales($carpetaJudicialDto);
        $numOfendidosCarpetas = $carpetaResponse[0]->getNumOfendidos();

        $ofendidoDto = new OfendidoscarpetasDTO();
        $ofendidoDto->setIdCarpetaJudicial($OfendidoscarpetasDto->getIdcarpetaJudicial());
        $ofendidoDto->setActivo('S');
        $ofendidoDao = new OfendidoscarpetasDAO();
        $ofendidoDto = $ofendidoDao->selectOfendidoscarpetas($ofendidoDto);
        if ($ofendidoDto != "") {
            $numOfendidos = count($ofendidoDto);
        } else {
            $numOfendidos = 0;
        }


//        if ($OfendidoscarpetasDto->getIdOfendidoCarpeta() == "" && ((int) $numOfendidos == (int) $numOfendidosCarpetas)) {
//            $estatus = 'error';
//            $msg[] = '*Ya no puedes agregar mas ofendidos a esta carpeta.';
//
//            return [
//                'status' => $estatus,
//                'mensaje' => $msg
//            ];
//        }

        if (!$validacion->num(1, 3, $OfendidoscarpetasDto->getCveTipoPersona())) {
            if ($OfendidoscarpetasDto->getCveTipoPersona() < 1 && $OfendidoscarpetasDto->getCveTipoPersona() > 3) {
                $estatus = 'error';
                $msg[] = '* El tipo de persona no es vÃ¡lido';
            }
        }

        if ($OfendidoscarpetasDto->getCveTipoPersona() == 1) {

            if (!$validacion->between(1, 50, (string) $OfendidoscarpetasDto->getNombre())) {
                $estatus = 'error';
                $msg[] = '* El nombre del ofendido debe tener entre 1 y 50 de longitud';
            }

            if (!$validacion->between(1, 50, (string) $OfendidoscarpetasDto->getPaterno())) {
                $estatus = 'error';
                $msg[] = '* El apellido paterno del ofendido debe tener entre 1 y 50 de longitud';
            }

            if (!$validacion->between(1, 50, (string) $OfendidoscarpetasDto->getMaterno())) {
                $estatus = 'error';
                $msg[] = '* El apellido materno del ofendido debe tener entre 1 y 50 caracteres de longitud';
            }

            if ($OfendidoscarpetasDto->getRfc() != "") {
                if (!$validacion->rfc((string) $OfendidoscarpetasDto->getRfc())) {
                    $estatus = 'error';
                    $msg[] = '* El rfc registrado no es un formato vÃ¡lido';
                }
            }


            if ($OfendidoscarpetasDto->getCurp() != "") {
                if (!$validacion->curp((string) $OfendidoscarpetasDto->getCurp())) {
                    $estatus = 'error';
                    $msg[] = '* La CURP no es vÃ¡lida';
                }
            }

            if (!$validacion->num(1, 2, (int) $OfendidoscarpetasDto->getCveGenero())) {
                if ($OfendidoscarpetasDto->getCveGenero() <= 0) {
                    $estatus = 'error';
                    $msg[] = '* El genero no es vÃ¡lido';
                }
            }

            if (!$validacion->num(1, 2, (int) $OfendidoscarpetasDto->getCveTipoParte())) {
                if ($OfendidoscarpetasDto->getCveTipoParte() <= 0) {
                    $estatus = 'error';
                    $msg[] = '* Se debe indicar si el sujeto pasivo del delito es victima u ofendido';
                }
            }

            if ($OfendidoscarpetasDto->getCveGenero() != 2 && $OfendidoscarpetasDto->getEmbarazada() == 'S') {
                $estatus = 'error';
                $msg[] = '* No puede estar embarazada si el genero no es Mujer';
            }

            if (!$validacion->num(1, 3, (int) $OfendidoscarpetasDto->getCvePaisNacimiento())) {
                if ($OfendidoscarpetasDto->getCvePaisNacimiento() <= 0) {
                    $estatus = 'error';
                    $msg[] = '* El pais de nacimiento no es vÃ¡lido';
                }
            }

            if ($OfendidoscarpetasDto->getCvePaisNacimiento() == 119) {
                if (!$validacion->num(1, 5, (int) $OfendidoscarpetasDto->getCveEstadoNacimiento())) {
                    if ($OfendidoscarpetasDto->getCveEstadoNacimiento() <= 0) {
                        $estatus = 'error';
                        $msg[] = '* El estado de nacimiento no es vÃ¡lido';
                    }
                }

                if (!$validacion->num(1, 5, (int) $OfendidoscarpetasDto->getCveMunicipioNacimiento())) {
                    if ($OfendidoscarpetasDto->getCveMunicipioNacimiento() <= 0) {
                        $estatus = 'error';
                        $msg[] = '* El municipio de nacimiento no es vÃ¡lido';
                    }
                }
            } else {
                if (!$validacion->text(1, 200, (string) $OfendidoscarpetasDto->getEstadoNacimiento())) {
                    if ($OfendidoscarpetasDto->getEstadoNacimiento() == "") {
                        $estatus = 'error';
                        $msg[] = '* El estado de nacimiento es requerido y debe contener entre 1 y 200 caracteres';
                    }
                }

                if (!$validacion->text(1, 200, (string) $OfendidoscarpetasDto->getMunicipioNacimiento())) {
                    if ($OfendidoscarpetasDto->getMunicipioNacimiento() == "") {
                        $estatus = 'error';
                        $msg[] = '* El municipio de nacimiento es requerido y debe contener entre 1 y 200 caracteres';
                    }
                }
            }

            if ($OfendidoscarpetasDto->getFechaNacimiento() != "") {
                if (!$validacion->dateMysql((string) $OfendidoscarpetasDto->getFechaNacimiento())) {
                    $estatus = 'error';
                    $msg[] = '* El formato de fecha de nacimiento no es vÃ¡lido';
                }
            }

            if ($OfendidoscarpetasDto->getEdad() != "") {
                if (!$validacion->num(0, 3, (string) $OfendidoscarpetasDto->getEdad())) {
                    $estatus = 'error';
                    $msg[] = '* La edad no es vÃ¡lida';
                }
            }

            if (!$validacion->num(1, 2, (int) $OfendidoscarpetasDto->getCveNivelInstruccion())) {
                if ($OfendidoscarpetasDto->getCveNivelInstruccion() <= 0) {
                    $estatus = 'error';
                    $msg[] = '* El nivel de estudios no es vÃ¡lido';
                }
            }
            if (!$validacion->num(1, 2, (int) $OfendidoscarpetasDto->getCveEstadoCivil())) {
                if ($OfendidoscarpetasDto->getCveEstadoCivil() <= 0) {
                    $estatus = 'error';
                    $msg[] = '* El estado civil no es vÃ¡lido';
                }
            }
            if (!$validacion->num(1, 2, (int) $OfendidoscarpetasDto->getCveEspanol())) {
                if ($OfendidoscarpetasDto->getCveEspanol() <= 0) {
                    $estatus = 'error';
                    $msg[] = '* Si habla espaÃ±ol no es vÃ¡lido';
                }
            }
            if (!$validacion->num(1, 2, (int) $OfendidoscarpetasDto->getCveAlfabetismo())) {
                if ($OfendidoscarpetasDto->getCveAlfabetismo() <= 0) {
                    $estatus = 'error';
                    $msg[] = '* Alfabetismo no es vÃ¡lido';
                }
            }
            if (!$validacion->num(1, 2, (int) $OfendidoscarpetasDto->getCveDialectoIndigena())) {
                if ($OfendidoscarpetasDto->getCveDialectoIndigena() <= 0) {
                    $estatus = 'error';
                    $msg[] = '* Dialecto indigena no es vÃ¡lido';
                }
            }
            if (!$validacion->num(1, 2, (int) $OfendidoscarpetasDto->getCveTipoFamiliaLinguistica())) {
                if ($OfendidoscarpetasDto->getCveTipoFamiliaLinguistica() <= 0) {
                    $estatus = 'error';
                    $msg[] = '* Tipo de familia lingÃ¼Ã­stica no valido';
                }
            }
            if (!$validacion->num(1, 2, (int) $OfendidoscarpetasDto->getCveOcupacion())) {
                if ($OfendidoscarpetasDto->getCveOcupacion() <= 0) {
                    $estatus = 'error';
                    $msg[] = '* OcupaciÃ³n no valida';
                }
            }
            if (!$validacion->num(1, 2, (int) $OfendidoscarpetasDto->getCveInterprete())) {
                if ($OfendidoscarpetasDto->getCveInterprete() <= 0) {
                    $estatus = 'error';
                    $msg[] = '* Interprete no vÃ¡lido';
                }
            }
            if (!$validacion->num(1, 2, (int) $OfendidoscarpetasDto->getCveEstadoPsicofisico())) {
                if ($OfendidoscarpetasDto->getCveEstadoPsicofisico() <= 0) {
                    $estatus = 'error';
                    $msg[] = '* Estado Psicofisico no vÃ¡lido';
                }
            }
            if (!$validacion->num(1, 2, (int) $OfendidoscarpetasDto->getCveGrupoEdnico())) {
                if ($OfendidoscarpetasDto->getCveGrupoEdnico() <= 0) {
                    $estatus = 'error';
                    $msg[] = '* Grupo Ã©tnico no vÃ¡lido';
                }
            }

            if ($OfendidoscarpetasDto->getNumHijos() != '') {
                if ($OfendidoscarpetasDto->getNumHijos() < 0) {
                    $estatus = 'error';
                    $msg[] = '* NÃºmero de hijos tiene que ser mayor a 0';
                }
                if (!$validacion->num(0, 3, (int) $OfendidoscarpetasDto->getNumHijos())) {
                    $estatus = 'error';
                    $msg[] = '* NÃºmero de hijos no vÃ¡lido';
                }
            }
        } elseif ($OfendidoscarpetasDto->getCveTipoPersona() == 2 || $OfendidoscarpetasDto->getCveTipoPersona() == 3) {

            if (!$validacion->between(1, 500, (string) $OfendidoscarpetasDto->getNombreMoral())) {
                $estatus = 'error';
                $msg[] = '* El nombre moral debe tener entre 1 y 500 caracteres y ser texto';
            }

            /* if ($OfendidoscarpetasDto->getRfc() != '') {
              if (!$validacion->rfc((string) $OfendidoscarpetasDto->getRfc())) {
              $estatus = 'error';
              $msg[] = '* El Rfc no es vÃ¡lido';
              }
              } */

            if ($OfendidoscarpetasDto->getCvePaisNacimiento() == 119) {

                if (!$validacion->num(1, 2, (int) $OfendidoscarpetasDto->getCveEstadoNacimiento())) {
                    if ($OfendidoscarpetasDto->getCveEstadoNacimiento() <= 0) {
                        $estatus = 'error';
                        $msg[] = '* El estado no es vÃ¡lido';
                    }
                }

                if (!$validacion->num(1, 5, (int) $OfendidoscarpetasDto->getCveMunicipioNacimiento())) {
                    if ($OfendidoscarpetasDto->getCveMunicipioNacimiento() <= 0) {
                        $estatus = 'error';
                        $msg[] = '* El municipio no es vÃ¡lido';
                    }
                }
            } else {

                if (!$validacion->between(1, 200, $OfendidoscarpetasDto->getEstadoNacimiento())) {
                    $estatus = 'error';
                    $msg[] = '*El estado debe contener entre 1 y 200 caracteres y debe ser texto';
                }

                if (!$validacion->between(1, 200, $OfendidoscarpetasDto->getMunicipioNacimiento())) {
                    $estatus = 'error';
                    $msg[] = '*El municipio debe contener entre 1 y 200 caracteres y debe ser texto';
                }
            }

            if (!$validacion->num(1, 2, (int) $OfendidoscarpetasDto->getCveTipoParte())) {
                if ($OfendidoscarpetasDto->getCveTipoParte() <= 0) {
                    $estatus = 'error';
                    $msg[] = '* Se debe indicar si el sujeto pasivo del delito es victima u ofendido';
                }
            }
        }
        //si el tipo de persona es fisica

        $response = [
            'status' => $estatus,
            'mensaje' => $msg
        ];

        return $response;
    }

    /*
     * Agregar ofendidos
     */

    public function agregarOfendido($OfendidoscarpetasDto, $proveedor = '') {

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $listaResultados = array();
        $validacion = $this->validaOfendido($OfendidoscarpetasDto);
        //si el estatus es true es que tiene un error;
        if ($validacion['status'] == "error") return $validacion;

        $ofendido = $OfendidoscarpetasDto;
        $OfendidoscarpetasDao = new OfendidoscarpetasDAO();

        if ($ofendido->getCveTipoPersona() == 1) {
            $ofendido->setNombreMoral('');
            if ($ofendido->getEmbarazada() == '') {
                $ofendido->setEmbarazada('N');
            }
            if ($ofendido->getDesaparecido() == '') {
                $ofendido->setDesaparecido('N');
            }
        } elseif ($ofendido->getCveTipoPersona() == 2 || $ofendido->getCveTipoPersona() == 3) {
            $ofendido->setActivo('S');
            $ofendido->setNombre('');
            $ofendido->setPaterno('');
            $ofendido->setMaterno('');
            $ofendido->setCurp('');
            $ofendido->setFechaNacimiento('');
            $ofendido->setCveOcupacion('15');
            $ofendido->setCveGenero('3');
            $ofendido->setEdad('');
            $ofendido->setCveEstadoCivil('3');
            $ofendido->setCveAlfabetismo('4');
            $ofendido->setCveNivelInstruccion('11');
            $ofendido->setCveEspanol('4');
            $ofendido->setCveDialectoIndigena('3');
            $ofendido->setCveTipoFamiliaLinguistica('15');
            $ofendido->setCveInterprete('3');
            $ofendido->setCveOrdenProteccion('8');
            $ofendido->setCveEstadoPsicofisico('6');
            $ofendido->setCveVictimaDeLaDelincuenciaOrganizada('3');
            $ofendido->setCveVictimaDeViolenciaDeGenero('3');
            $ofendido->setCveVictimaDeTrata('3');
            $ofendido->setCveVictimaDeAcoso('3');
            $ofendido->setDesaparecido('N');
            $ofendido->setNumHijos('');
            $ofendido->setEmbarazada('N');
            $ofendido->setCveGrupoEdnico('72');
            $ofendido->setCveTipoReligion('8');
        }

        try {

            $this->proveedor->execute('BEGIN');

            $ofendidoResponse = $OfendidoscarpetasDao->insertOfendidoscarpetas($ofendido, $this->proveedor);

            if (!count($ofendidoResponse))
                throw new Exception('no se pudo guardar el ofendido');

            $bitacora = new BitacoramovimientosController();
            $bitacoraOfendido = $bitacora->agregar(189, 'INSERCION tblofendidoscarpetas', 'txt', serialize($ofendidoResponse[0]), '', $this->proveedor);

            if (!count($bitacoraOfendido))
                throw new Exception('no se pudo guardar la accion agregar ofendido en bitacora');
            /*
             * Actualizar el numero de ofendidos de la carpeta judicial
             */
            $ofendidoTmp = new OfendidoscarpetasDTO();
            $ofendidoTmp->setIdCarpetaJudicial($ofendidoResponse[0]->getIdCarpetaJudicial());
            $ofendidoTmp->setActivo("S");
            $ofendidoTmp = $OfendidoscarpetasDao->selectOfendidoscarpetas($ofendidoTmp, "", $this->proveedor);
            $numOfendidos = count($ofendidoTmp);
            $carpetaJudicialDto = new CarpetasjudicialesDTO();
            $carpetaJudicialDao = new CarpetasjudicialesDAO();
            $carpetaJudicialDto->setIdCarpetaJudicial($ofendidoResponse[0]->getIdCarpetaJudicial());
            $carpetaJudicialDto->setNumOfendidos($numOfendidos);
            $carpetaJudicialDto = $carpetaJudicialDao->updateCarpetasjudiciales($carpetaJudicialDto, $this->proveedor);

            $this->proveedor->execute('COMMIT');
            if ($ofendidoResponse != "") {
                $resultado = array(
                    "idOfendidoCarpeta" => $ofendidoResponse[0]->getIdOfendidoCarpeta(),
                    "idCarpetaJudicial" => $ofendidoResponse[0]->getIdCarpetaJudicial(),
                    "activo" => $ofendidoResponse[0]->getActivo(),
                    "nombre" => utf8_encode($ofendidoResponse[0]->getNombre()),
                    "paterno" => utf8_encode($ofendidoResponse[0]->getPaterno()),
                    "materno" => utf8_encode($ofendidoResponse[0]->getMaterno()),
                    "rfc" => $ofendidoResponse[0]->getRfc(),
                    "curp" => $ofendidoResponse[0]->getCurp(),
                    "cveOcupacion" => $ofendidoResponse[0]->getCveOcupacion(),
                    "cveTipoPersona" => $ofendidoResponse[0]->getCveTipoPersona(),
                    "cveGenero" => $ofendidoResponse[0]->getCveGenero(),
                    "cveTipoParte" => $ofendidoResponse[0]->getCveTipoParte(),
                    "cveTipoReligion" => $ofendidoResponse[0]->getCveTipoReligion(),
                    "fechaNacimiento" => $ofendidoResponse[0]->getFechaNacimiento(),
                    "edad" => $ofendidoResponse[0]->getEdad(),
                    "cvePaisNacimiento" => $ofendidoResponse[0]->getCvePaisNacimiento(),
                    "cveEstadoNacimiento" => $ofendidoResponse[0]->getCveEstadoNacimiento(),
                    "estadoNacimiento" => utf8_encode($ofendidoResponse[0]->getEstadoNacimiento()),
                    "cveMunicipioNacimiento" => $ofendidoResponse[0]->getCveMunicipioNacimiento(),
                    "municipioNacimiento" => utf8_encode($ofendidoResponse[0]->getMunicipioNacimiento()),
                    "cveEstadoCivil" => $ofendidoResponse[0]->getCveEstadoCivil(),
                    "cveAlfabetismo" => $ofendidoResponse[0]->getCveAlfabetismo(),
                    "cveNivelInstruccion" => $ofendidoResponse[0]->getCveNivelInstruccion(),
                    "cveEspanol" => $ofendidoResponse[0]->getCveEspanol(),
                    "cveDialectoIndigena" => $ofendidoResponse[0]->getCveDialectoIndigena(),
                    "cveTipoFamiliaLinguistica" => $ofendidoResponse[0]->getCveTipoFamiliaLinguistica(),
                    "cveInterprete" => $ofendidoResponse[0]->getCveInterprete(),
                    "cveOrdenProteccion" => $ofendidoResponse[0]->getCveOrdenProteccion(),
                    "cveEstadoPsicofisico" => $ofendidoResponse[0]->getCveEstadoPsicofisico(),
                    "nombreMoral" => $ofendidoResponse[0]->getNombreMoral(),
                    "cveVictimaDeLaDelincuenciaOrganizada" => $ofendidoResponse[0]->getCveVictimaDeLaDelincuenciaOrganizada(),
                    "cveVictimaDeViolenciaDeGenero" => $ofendidoResponse[0]->getCveVictimaDeViolenciaDeGenero(),
                    "cveVictimaDeTrata" => $ofendidoResponse[0]->getCveVictimaDeTrata(),
                    "cveVictimaDeAcoso" => $ofendidoResponse[0]->getCveVictimaDeAcoso(),
                    "desaparecido" => utf8_encode($ofendidoResponse[0]->getDesaparecido()),
                    "numHijos" => $ofendidoResponse[0]->getNumHijos(),
                    "embarazada" => $ofendidoResponse[0]->getEmbarazada(),
                    "cveGrupoEdnico" => $ofendidoResponse[0]->getCveGrupoEdnico()
                );
                array_push($listaResultados, $resultado);
            }
            return [
                'status' => 'ok',
                'mensaje' => 'Datos generales guardados correctamente.',
                'data' => $listaResultados
            ];
        } catch (Exception $e) {
            $this->proveedor->execute('ROLLBACK');

            return [
                'status' => 'error',
                'mensaje' => ['No se pudo guardar los datos generales.'],
                'data' => ''
            ];
        }
    }

    /*
     * Modificar ofendidos
     */

    public function modificarOfendido($OfendidoscarpetasDto, $proveedor = '') {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $listaResultados = array();
        $validacion = $this->validaOfendido($OfendidoscarpetasDto);
        //si el estatus es true es que tiene un error;
        if ($validacion['status'] == "error")
            return $validacion;

        $ofendido = $OfendidoscarpetasDto;
        $OfendidoscarpetasDao = new OfendidoscarpetasDAO();

        if ($ofendido->getCveTipoPersona() == 1) {
            $ofendido->setNombreMoral('');
            if ($ofendido->getEmbarazada() == '') {
                $ofendido->setEmbarazada('N');
            }
            if ($ofendido->getDesaparecido() == '') {
                $ofendido->setDesaparecido('N');
            }
        } else if ($ofendido->getCveTipoPersona() == 2 || $ofendido->getCveTipoPersona() == 3) {
            $ofendido->setActivo('S');
            $ofendido->setNombre('');
            $ofendido->setPaterno('');
            $ofendido->setMaterno('');
            $ofendido->setCurp('');
            $ofendido->setFechaNacimiento('');
            $ofendido->setCveOcupacion('15');
            $ofendido->setCveGenero('3');
            $ofendido->setEdad('');
            $ofendido->setCveEstadoCivil('3');
            $ofendido->setCveAlfabetismo('4');
            $ofendido->setCveNivelInstruccion('11');
            $ofendido->setCveEspanol('4');
            $ofendido->setCveDialectoIndigena('3');
            $ofendido->setCveTipoFamiliaLinguistica('15');
            $ofendido->setCveInterprete('3');
            $ofendido->setCveOrdenProteccion('8');
            $ofendido->setCveEstadoPsicofisico('6');
            $ofendido->setCveVictimaDeLaDelincuenciaOrganizada('3');
            $ofendido->setCveVictimaDeViolenciaDeGenero('3');
            $ofendido->setCveVictimaDeTrata('3');
            $ofendido->setCveVictimaDeAcoso('3');
            $ofendido->setDesaparecido('N');
            $ofendido->setNumHijos('');
            $ofendido->setEmbarazada('N');
            $ofendido->setCveGrupoEdnico('72');
            $ofendido->setCveTipoReligion('8');
        }

        try {
            $fecha = "";
            $this->proveedor->execute('BEGIN');
            $this->proveedor->execute("SELECT now() AS fechaActual");
            if (!$this->proveedor->error()) {
                if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                    while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                        $fecha = $row["fechaActual"];
                    }
                }
            }
            if ($ofendido->getCveVictimaDeViolenciaDeGenero() == 2 || $ofendido->getCveVictimaDeTrata() == 2 || $ofendido->getCveVictimaDeAcoso() == 2) {

                //obtener las relaciones del ofendido
                $impOfeDelCarpetasDto = new ImpofedelcarpetasDTO();
                $impOfeDelCarpetasDao = new ImpofedelcarpetasDAO();

                $impOfeDelCarpetasDto->setIdOfendidoCarpeta($ofendido->getIdOfendidoCarpeta());
                $impOfeDelCarpetasDto->setIdCarpetaJudicial($ofendido->getIdCarpetaJudicial());
                $impOfeDelCarpetasDto->setActivo('S');

                $getRelaciones = $impOfeDelCarpetasDao->selectImpofedelcarpetas($impOfeDelCarpetasDto, '', $this->proveedor);


                if ($getRelaciones != '') {

                    foreach ($getRelaciones as $relacion) {

                        $idImpOfeDelCarpeta = $relacion->getIdImpOfeDelCarpeta();

                        //si victima de violencia de genero es "NO", eliminar logicamente violencia de genero


                        if ((int) $ofendido->getCveVictimaDeViolenciaDeGenero() == 2) {

                            $estatus = 'N';

                            //eliminar violencia de genero
                            $violenciaGeneroDto = new ViolenciadegenerocarpetasDTO();
                            $violenciaGeneroDao = new ViolenciadegenerocarpetasDAO();
                            $violenciaGeneroDto->setIdImpOfeDelCarpeta($idImpOfeDelCarpeta);
                            $violenciaGeneroDto->setActivo('S');
                            $selectViolenciaGenero = $violenciaGeneroDao->selectViolenciadegenerocarpetas($violenciaGeneroDto, '', $this->proveedor);

                            if ($selectViolenciaGenero != '') {

                                foreach ($selectViolenciaGenero as $violenciaGenero) {
                                    $idViolenciaGenero = $violenciaGenero->getIdViolenciaDeGeneroCarpeta();
                                    //eliminar cada registro violencia de genero;

                                    $violenciaGeneroDto->setIdViolenciaDeGeneroCarpeta($idViolenciaGenero);
                                    $violenciaGeneroDto->setActivo($estatus);

                                    $updateViolenciaGenero = $violenciaGeneroDao->updateViolenciadegenerocarpetas($violenciaGeneroDto, $this->proveedor);

                                    if ($updateViolenciaGenero == '')
                                        throw new Exception('no se pudo eliminar el registro violencia de genero con el id: ' . $idViolenciaGenero);

                                    //eliminar violencia factores sociales
                                    $violenciaFactoresSocialesDto = new ViolenciafactoressocialescarpetasDTO();
                                    $violenciaFactoresSocialesDao = new ViolenciafactoressocialescarpetasDAO();
                                    $violenciaFactoresSocialesDto->setIdViolenciaDeGeneroCarpeta($idViolenciaGenero);
                                    $violenciaFactoresSocialesDto->setActivo('S');

                                    $selectViolenciaFactoresSociales = $violenciaFactoresSocialesDao->selectViolenciafactoressocialescarpetas($violenciaFactoresSocialesDto, '', $this->proveedor);

                                    if ($selectViolenciaFactoresSociales != '') {
                                        foreach ($selectViolenciaFactoresSociales as $violenciaFactorSocial) {
                                            $idViolenciaFactorSocial = $violenciaFactorSocial->getIdViolenciaFactorSocialCarpeta();
                                            $violenciaFactoresSocialesDto->setIdViolenciaFactorSocialCarpeta($idViolenciaFactorSocial);
                                            $violenciaFactoresSocialesDto->setActivo($estatus);

                                            $updateViolenciaFactorSocial = $violenciaFactoresSocialesDao->updateViolenciafactoressocialescarpetas($violenciaFactoresSocialesDto, $this->proveedor);

                                            if ($updateViolenciaFactorSocial == '')
                                                throw new Exception('no se pudo eliminar el registro violencia factor social con id: ' . $idViolenciaFactorSocial);
                                        }
                                    }


                                    //eliminar violencia homicidios dolosos
                                    $violenciaHomicidiosDolososDto = new ViolenciahomicidiosdolososcarpetasDTO();
                                    $violenciaHomicidiosDolososDao = new ViolenciahomicidiosdolososcarpetasDAO();
                                    $violenciaHomicidiosDolososDto->setIdViolenciaDeGeneroCarpeta($idViolenciaGenero);
                                    $violenciaHomicidiosDolososDto->setActivo('S');

                                    $selectViolenciaHomicidiosDolosos = $violenciaHomicidiosDolososDao->selectViolenciahomicidiosdolososcarpetas($violenciaHomicidiosDolososDto, '', $this->proveedor);

                                    if ($selectViolenciaHomicidiosDolosos != '') {
                                        foreach ($selectViolenciaHomicidiosDolosos as $violenciaHomicidioDoloso) {
                                            $idViolenciaHomicidioDoloso = $violenciaHomicidioDoloso->getIdViolenciaHomicidioDolosoCarpeta();
                                            $violenciaHomicidiosDolososDto->setIdViolenciaHomicidioDolosoCarpeta($idViolenciaHomicidioDoloso);
                                            $violenciaHomicidiosDolososDto->setActivo($estatus);

                                            $updateViolenciaHomicidioDoloso = $violenciaHomicidiosDolososDao->updateViolenciahomicidiosdolososcarpetas($violenciaHomicidiosDolososDto, $this->proveedor);

                                            if ($updateViolenciaHomicidioDoloso == '')
                                                throw new Exception('no se pudo eliminar el registro violencia homicidio doloso con id: ' . $idViolenciaHomicidioDoloso);
                                        }
                                    }
                                }
                            }
                        }


                        //si victima de trata es "NO", eliminar logicamente trata de personas
                        if ((int) $ofendido->getCveVictimaDeTrata() == 2) {

                            $estatus = 'N';

                            $trataPersonasDto = new TrataspersonascarpetasDTO();
                            $trataPersonasDao = new TrataspersonascarpetasDAO();
                            $trataPersonasDto->setIdImpOfeDelCarpeta($idImpOfeDelCarpeta);
                            $trataPersonasDto->setActivo('S');

                            $selectTratasPersonas = $trataPersonasDao->selectTrataspersonascarpetas($trataPersonasDto, '', $this->proveedor);

                            if ($selectTratasPersonas != '') {

                                foreach ($selectTratasPersonas as $trataPersona) {
                                    $idTrataPersona = $trataPersona->getIdTrataPersonaCarpeta();

                                    $trataPersonasDto->setIdTrataPersonaCarpeta($idTrataPersona);
                                    $trataPersonasDto->setActivo($estatus);

                                    $updateTrataPersona = $trataPersonasDao->updateTrataspersonascarpetas($trataPersonasDto, $this->proveedor);

                                    if ($updateTrataPersona == '')
                                        throw new Exception('no se pudo eliminar el registro trata de personas con el id: ' . $idTrataPersona);
                                }
                            }
                        }

                        //si victima de acoso sexual es "N" eliminar datos de efectos sexuales
                        if ((int) $ofendido->getCveVictimaDeAcoso() == 2) {

                            $estatus = 'N';

                            $sexualesDto = new SexualescarpetasDTO();
                            $sexualesDao = new SexualescarpetasDAO();

                            $sexualesDto->setIdImpOfeDelCarpeta($idImpOfeDelCarpeta);
                            $sexualesDto->setActivo('S');

                            $selectSexuales = $sexualesDao->selectSexualescarpetas($sexualesDto, "", $this->proveedor);

                            if ($selectSexuales != '') {
                                foreach ($selectSexuales as $sexual) {
                                    $idSexual = $sexual->getIdSexualCarpeta();
                                    $sexualesDto->setIdSexualCarpeta($idSexual);
                                    $sexualesDto->setActivo($estatus);

                                    $updateSexual = $sexualesDao->updateSexualescarpetas($sexualesDto, $this->proveedor);

                                    if ($updateSexual == '')
                                        throw new Exception('No se pudo eliminar el registro en la tabla sexuales con el id: ' . $idSexual);

                                    //eliminar testigos sexuales
                                    $testigosSexualesDto = new TestigossexualescarpetasDTO();
                                    $testigosSexualesDao = new TestigossexualescarpetasDAO();
                                    $testigosSexualesDto->setIdSexualCarpeta($idSexual);
                                    $testigosSexualesDto->setActivo('S');

                                    $selectTestigosSexuales = $testigosSexualesDao->selectTestigossexualescarpetas($testigosSexualesDto, '', $this->proveedor);


                                    if ($selectTestigosSexuales != '') {

                                        foreach ($selectTestigosSexuales as $testigoSexual) {
                                            $idTestigoSexual = $testigoSexual->getIdTestigoSexualCarpeta();

                                            $testigosSexualesDto->setIdTestigoSexualCarpeta($idTestigoSexual);
                                            $testigosSexualesDto->setActivo($estatus);

                                            $updateTestigoSexual = $testigosSexualesDao->updateTestigossexualescarpetas($testigosSexualesDto, $this->proveedor);

                                            if ($updateTestigoSexual == '')
                                                throw New Exception('no se pudo eliminar el testigo sexual con el id: ' . $idTestigoSexual);
                                        }
                                    }


                                    //eliminar sexualesconductas

                                    $sexualesConductasDto = new SexualesconductascarpetasDTO();
                                    $sexualesConductasDao = new SexualesconductascarpetasDAO();

                                    $sexualesConductasDto->setIdSexualCarpeta($idSexual);
                                    $sexualesConductasDto->setActivo('S');

                                    $selectSexualesConductas = $sexualesConductasDao->selectSexualesconductascarpetas($sexualesConductasDto, '', $this->proveedor);

                                    if ($selectSexualesConductas != '') {

                                        foreach ($selectSexualesConductas as $sexualConducta) {
                                            $idSexualConducta = $sexualConducta->getIdSexualConductaCarpeta();
                                            $sexualesConductasDto->setIdSexualConductaCarpeta($idSexualConducta);
                                            $sexualesConductasDto->setActivo($estatus);

                                            $updateSexualConducta = $sexualesConductasDao->updateSexualesconductascarpetas($sexualesConductasDto, $this->proveedor);

                                            if ($updateSexualConducta == '')
                                                throw new Exception('no se pudo eliminar el registro sexual conducta con id: ' . $idSexualConducta);


                                            //eliminar detalles sexuales conductas
                                            $detallesSexualesConductasDto = new DetallessexualesconductascarpetasDTO();
                                            $detallesSexualesConductasDao = new DetallessexualesconductascarpetasDAO();

                                            $detallesSexualesConductasDto->setIdSexualConductaCarpeta($idSexualConducta);
                                            $detallesSexualesConductasDto->setActivo('S');

                                            $selectDetallesSexualesConductas = $detallesSexualesConductasDao->selectDetallessexualesconductascarpetas($detallesSexualesConductasDto, '', $this->proveedor);

                                            if ($selectDetallesSexualesConductas != '') {
                                                foreach ($selectDetallesSexualesConductas as $detalleSexualConducta) {
                                                    $idDetalleSexualConducta = $detalleSexualConducta->getIdDetalleSexualConductaCarpeta();

                                                    $detallesSexualesConductasDto->setIdDetalleSexualConductaCarpeta($idDetalleSexualConducta);
                                                    $detallesSexualesConductasDto->setActivo($estatus);

                                                    $updateDetalleSexualConducta = $detallesSexualesConductasDao->updateDetallessexualesconductascarpetas($detallesSexualesConductasDto, $this->proveedor);

                                                    if ($updateDetalleSexualConducta == '')
                                                        throw new Exception('no se pudo eliminar el detalle sexual conducta con id: ' . $idDetalleSexualConducta);
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
            $ofendido->setFechaActualizacion($fecha);

            $ofendidoResponse = $OfendidoscarpetasDao->modificarOfendidoscarpetas($ofendido, $this->proveedor);

            if (!count($ofendidoResponse))
                throw new Exception('no se pudo editar los datos generales');

            $bitacora = new BitacoramovimientosController();
            $bitacoraOfendido = $bitacora->agregar(190, 'ACTUALIZACION tblofendidoscarpetas', 'txt', serialize($ofendidoResponse[0]), '', $this->proveedor);

            if (!count($bitacoraOfendido))
                throw new Exception('no se pudo guardar la accion actualizar datos generales en bitacora');

            $this->proveedor->execute('COMMIT');
            if ($ofendidoResponse != "") {
                $resultado = array(
                    "idOfendidoCarpeta" => $ofendidoResponse[0]->getIdOfendidoCarpeta(),
                    "idCarpetaJudicial" => $ofendidoResponse[0]->getIdCarpetaJudicial(),
                    "activo" => $ofendidoResponse[0]->getActivo(),
                    "nombre" => utf8_encode($ofendidoResponse[0]->getNombre()),
                    "paterno" => utf8_encode($ofendidoResponse[0]->getPaterno()),
                    "materno" => utf8_encode($ofendidoResponse[0]->getMaterno()),
                    "rfc" => $ofendidoResponse[0]->getRfc(),
                    "curp" => $ofendidoResponse[0]->getCurp(),
                    "cveOcupacion" => $ofendidoResponse[0]->getCveOcupacion(),
                    "cveTipoPersona" => $ofendidoResponse[0]->getCveTipoPersona(),
                    "cveGenero" => $ofendidoResponse[0]->getCveGenero(),
                    "cveTipoParte" => $ofendidoResponse[0]->getCveTipoParte(),
                    "cveTipoReligion" => $ofendidoResponse[0]->getCveTipoReligion(),
                    "fechaNacimiento" => $ofendidoResponse[0]->getFechaNacimiento(),
                    "edad" => $ofendidoResponse[0]->getEdad(),
                    "cvePaisNacimiento" => $ofendidoResponse[0]->getCvePaisNacimiento(),
                    "cveEstadoNacimiento" => $ofendidoResponse[0]->getCveEstadoNacimiento(),
                    "estadoNacimiento" => utf8_encode($ofendidoResponse[0]->getEstadoNacimiento()),
                    "cveMunicipioNacimiento" => $ofendidoResponse[0]->getCveMunicipioNacimiento(),
                    "municipioNacimiento" => utf8_encode($ofendidoResponse[0]->getMunicipioNacimiento()),
                    "cveEstadoCivil" => $ofendidoResponse[0]->getCveEstadoCivil(),
                    "cveAlfabetismo" => $ofendidoResponse[0]->getCveAlfabetismo(),
                    "cveNivelInstruccion" => $ofendidoResponse[0]->getCveNivelInstruccion(),
                    "cveEspanol" => $ofendidoResponse[0]->getCveEspanol(),
                    "cveDialectoIndigena" => $ofendidoResponse[0]->getCveDialectoIndigena(),
                    "cveTipoFamiliaLinguistica" => $ofendidoResponse[0]->getCveTipoFamiliaLinguistica(),
                    "cveInterprete" => $ofendidoResponse[0]->getCveInterprete(),
                    "cveOrdenProteccion" => $ofendidoResponse[0]->getCveOrdenProteccion(),
                    "cveEstadoPsicofisico" => $ofendidoResponse[0]->getCveEstadoPsicofisico(),
                    "nombreMoral" => utf8_encode($ofendidoResponse[0]->getNombreMoral()),
                    "cveVictimaDeLaDelincuenciaOrganizada" => $ofendidoResponse[0]->getCveVictimaDeLaDelincuenciaOrganizada(),
                    "cveVictimaDeViolenciaDeGenero" => $ofendidoResponse[0]->getCveVictimaDeViolenciaDeGenero(),
                    "cveVictimaDeTrata" => $ofendidoResponse[0]->getCveVictimaDeTrata(),
                    "cveVictimaDeAcoso" => $ofendidoResponse[0]->getCveVictimaDeAcoso(),
                    "desaparecido" => utf8_encode($ofendidoResponse[0]->getDesaparecido()),
                    "numHijos" => $ofendidoResponse[0]->getNumHijos(),
                    "embarazada" => $ofendidoResponse[0]->getEmbarazada(),
                    "cveGrupoEdnico" => $ofendidoResponse[0]->getCveGrupoEdnico()
                );
                array_push($listaResultados, $resultado);
            }
            return [
                'status' => 'ok',
                'mensaje' => 'Datos generales editados correctamente.',
                'data' => $listaResultados
            ];
        } catch (Exception $e) {
            $this->proveedor->execute('ROLLBACK');

            return [
                'status' => 'error',
                'mensaje' => ['No se pudo editar los datos generales.'],
                'data' => ''
            ];
        }
    }

    /*
     * Eliminar logicamente ofendidos y sus registros relacionados
     */

    public function eliminarOfendido($OfendidoscarpetasDto, $proveedor = null, $actualizarCarpeta = 0) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute("BEGIN");
        } else {
            $this->proveedor = $proveedor;
        }


        $ofendidosCarpetas = new OfendidoscarpetasDTO();
        $ofendidosDao = new OfendidoscarpetasDAO();
        $ofendidosCarpetas->setIdOfendidoCarpeta($OfendidoscarpetasDto->getIdOfendidoCarpeta());
        $ofendidosCarpetas->setActivo("S");
        $ofendidosCarpetas = $ofendidosDao->selectOfendidoscarpetas($ofendidosCarpetas, "", $this->proveedor);

        if ($ofendidosCarpetas != "") {
            if ($actualizarCarpeta == 0) {
                /*
                 * Eliminar los datos del ofendido sin actualizar el numero de
                 * ofendidos en la carpeta judicial
                 */
                try {

                    $idOfendido = $OfendidoscarpetasDto->getIdOfendidoCarpeta();
                    //Eliminar domicilios
                    $domicilioDao = new DomiciliosofendidoscarpetasDAO();
                    $domicilioDto = new DomiciliosofendidoscarpetasDTO();
                    $domicilioOfendidoDto = new DomiciliosofendidoscarpetasDTO();
                    $domicilioDto->setIdOfendidoCarpeta($idOfendido);
                    $domicilioDto->setActivo('S');
                    $domicilioResponse = $domicilioDao->selectDomiciliosofendidoscarpetas($domicilioDto, "", $this->proveedor);
                    if ($domicilioResponse != "") {
                        foreach ($domicilioResponse as $arrayDomicilio) {
                            $domicilioOfendidoDto->setIdDomicilioOfendidoCarpeta($arrayDomicilio->getIdDomicilioOfendidoCarpeta());
                            $domicilioOfendidoDto->setActivo('N');
                            $rsDomicilio = $domicilioDao->eliminarDomiciliosOfendidoByIdOfendido($domicilioOfendidoDto, $this->proveedor);
                            if (!$rsDomicilio)
                                throw new Exception('domicilio no eliminado');
                        }
                    }

                    //eliminar telÃ©fonos
                    $telefonoDao = new TelefonosofendidoscarpetasDAO();
                    $telefonoDto = new TelefonosofendidoscarpetasDTO();
                    $telefonoDto->setIdOfendidoCarpeta($idOfendido);
                    $telefonoDto->setActivo('S');
                    $telefonoOfendidoDto = new TelefonosofendidoscarpetasDTO();
                    $telefonoResponse = $telefonoDao->selectTelefonosofendidoscarpetas($telefonoDto, "", $this->proveedor);
                    if ($telefonoResponse != "") {
                        foreach ($telefonoResponse as $arrayTelefono) {
                            $telefonoOfendidoDto->setIdTelefonoOfendidoCarpeta($arrayTelefono->getIdTelefonoOfendidoCarpeta());
                            $telefonoOfendidoDto->setActivo('N');
                            $rsTelefono = $telefonoDao->eliminarTelefonoOfendidoByIdOfendidoCarpeta($telefonoOfendidoDto, $this->proveedor);
                            if (!$rsTelefono)
                                throw new Exception('telÃ©fono no eliminado');
                        }
                    }

                    //eliminar defensores
                    $defensorDao = new DefensoresofendidoscarpetasDAO();
                    $defensorDto = new DefensoresofendidoscarpetasDTO();
                    $defensorOfendidoDto = new DefensoresofendidoscarpetasDTO();
                    $defensorDto->setIdOfendidoCarpeta($idOfendido);
                    $defensorDto->setActivo('S');
                    $defensorResponse = $defensorDao->selectDefensoresofendidoscarpetas($defensorDto, "", $this->proveedor);
                    if ($defensorResponse != "") {
                        foreach ($defensorResponse as $arrayDefensor) {
                            $defensorOfendidoDto->setIdDefensorOfendidoCarpeta($arrayDefensor->getIdDefensorOfendidoCarpeta());
                            $defensorOfendidoDto->setActivo('N');
                            $rsDefensor = $defensorDao->eliminarDefensorOfendidoByIdOfendidoCarpeta($defensorOfendidoDto, $this->proveedor);
                            if (!$rsDefensor)
                                throw new Exception('defensor no eliminado');
                        }
                    }

                    //eliminar tutores
                    $tutorDao = new TutoresofendidoscarpetasDAO();
                    $tutorDto = new TutoresofendidoscarpetasDTO();
                    $tutorOfendidoDto = new TutoresofendidoscarpetasDTO();
                    $tutorDto->setIdOfendidoCarpeta($idOfendido);
                    $tutorDto->setActivo('S');
                    $tutorResponse = $tutorDao->selectTutoresofendidoscarpetas($tutorDto, "", $this->proveedor);
                    if ($tutorResponse != "") {
                        foreach ($tutorResponse as $arrayTutor) {
                            $tutorOfendidoDto->setIdTutorOfendidoCarpeta($arrayTutor->getIdTutorOfendidoCarpeta());
                            $tutorOfendidoDto->setActivo('N');
                            $rsTutor = $tutorDao->updateTutoresofendidoscarpetas($tutorOfendidoDto, $this->proveedor);
                            if (!$rsTutor)
                                throw new Exception('tutor no eliminado');
                        }
                    }

                    //eliminar las nacionalidades del ofendido
                    $nacionalidadDao = new NacionalidadesofendidoscarpetasDAO();
                    $nacionalidadDto = new NacionalidadesofendidoscarpetasDTO();
                    $nacionalidadOfendidoDto = new NacionalidadesofendidoscarpetasDTO();
                    $nacionalidadDto->setIdOfendidoCarpeta($idOfendido);
                    $nacionalidadDto->setActivo('S');
                    $nacionalidadResponse = $nacionalidadDao->selectNacionalidadesofendidoscarpetas($nacionalidadDto, "", $this->proveedor);
                    if ($nacionalidadResponse != "") {
                        foreach ($nacionalidadResponse as $arraynacionalidad) {
                            $nacionalidadOfendidoDto->setIdNacionalidadOfendidoCarpeta($arraynacionalidad->getIdNacionalidadOfendidoCarpeta());
                            $nacionalidadOfendidoDto->setActivo('N');
                            $rsNacionalidad = $nacionalidadDao->updateNacionalidadesofendidoscarpetas($nacionalidadOfendidoDto, $this->proveedor);
                            if (!$rsNacionalidad)
                                throw new Exception('nacionalidad no eliminada');
                        }
                    }
                    
                    /*
                     * Eliminar la relacion impofedel cuando se elimine logicamente un ofendido
                     */
                    $ImpofedelcarpetasDto = new ImpofedelcarpetasDTO();
                    $ImpofedelcarpetasDto->setIdCarpetaJudicial($ofendidosCarpetas[0]->getIdCarpetaJudicial());
                    $ImpofedelcarpetasDto->setIdOfendidoCarpeta($ofendidosCarpetas[0]->getIdOfendidoCarpeta());
                    $ImpofedelcarpetasDto->setActivo("S");
                    $ImpofedelcarpetasDao = new ImpofedelcarpetasDAO();
                    $ImpofedelcarpetasResultado = $ImpofedelcarpetasDao->selectImpofedelcarpetas($ImpofedelcarpetasDto, "", $this->proveedor);
                    if ($ImpofedelcarpetasResultado != "") {
                        foreach ($ImpofedelcarpetasResultado as $value) {
                            //Eliminar violencia de genero, trata de personas y acoso sexual
                            $impofedelCarpetasController = new ImpofedelcarpetasController();
                            $eliminarViolencia = $impofedelCarpetasController->borrarViolenciaCausas($value, $this->proveedor);
                            if ( $eliminarViolencia ) {
                                $ImpofedelcarpetasDto = new ImpofedelcarpetasDTO();
                                $ImpofedelcarpetasDto->setIdImpOfeDelCarpeta($value->getIdImpOfeDelCarpeta());
                                $ImpofedelcarpetasDto->setActivo('N');
                                $ImpofedelcarpetasUpdate = $ImpofedelcarpetasDao->updateImpofedelcarpetas($ImpofedelcarpetasDto, $this->proveedor);
                                if (!count($ImpofedelcarpetasUpdate))
                                    throw new Exception('no se pudo actualizar la relacion imputados, sujetos pasivos del delito y delitos');
                            }

                        }
                    }
                    
                    //eliminar el ofendido
                    $ofendidosDao = new OfendidoscarpetasDAO();
                    $OfendidoscarpetasDto->setActivo('N');
                    $ofendidosResponse = $ofendidosDao->eliminarOfendidoByIdOfendidoCarpeta($OfendidoscarpetasDto, $this->proveedor);

                    if (!count($ofendidosResponse))
                        throw new Exception('no se pudo eliminar los datos generales');

                    $bitacora = new BitacoramovimientosController();
                    $bitacoraOfendido = $bitacora->agregar(191, 'Borrado logico tblofendidoscarpetas', 'txt', serialize($ofendidosResponse[0]), '', $this->proveedor);

                    if (!count($bitacoraOfendido))
                        throw new Exception('no se pudo guardar la accion borrar datos generales en bitacora');


                    if ($proveedor == null) {
                        $this->proveedor->execute('COMMIT');
                    }
                    return [
                        'status' => 'ok',
                        'mensaje' => 'Datos borrados correctamente!',
                        'data' => [
                            'idOfendidoCarpeta' => $ofendidosResponse[0]->getIdOfendidoCarpeta(),
                            'idCarpetaJudicial' => $ofendidosResponse[0]->getIdCarpetaJudicial()
                        ]
                    ];
                } catch (Exception $e) {
                    if ($proveedor == null) {
                        $this->proveedor->execute('ROLLBACK');
                    }

                    return [
                        'status' => 'error',
                        'mensaje' => $e->getMessage()
                    ];
                }
            } else {

                $ofendidosTmp = new OfendidoscarpetasDTO();
                $ofendidosTmp->setIdCarpetaJudicial($ofendidosCarpetas[0]->getIdCarpetaJudicial());
                $ofendidosTmp->setActivo("S");
                $ofendidosTmp = $ofendidosDao->selectOfendidoscarpetas($ofendidosTmp, "", $this->proveedor);
                if ($ofendidosTmp != "") {
                    $numOfendidos = count($ofendidosTmp);
                } else {
                    $numOfendidos = 0;
                }
                if ($numOfendidos > 1) {
                    try {

                        $idOfendido = $OfendidoscarpetasDto->getIdOfendidoCarpeta();
                        //Eliminar domicilios
                        $domicilioDao = new DomiciliosofendidoscarpetasDAO();
                        $domicilioDto = new DomiciliosofendidoscarpetasDTO();
                        $domicilioOfendidoDto = new DomiciliosofendidoscarpetasDTO();
                        $domicilioDto->setIdOfendidoCarpeta($idOfendido);
                        $domicilioDto->setActivo('S');
                        $domicilioResponse = $domicilioDao->selectDomiciliosofendidoscarpetas($domicilioDto, "", $this->proveedor);
                        if ($domicilioResponse != "") {
                            foreach ($domicilioResponse as $arrayDomicilio) {
                                $domicilioOfendidoDto->setIdDomicilioOfendidoCarpeta($arrayDomicilio->getIdDomicilioOfendidoCarpeta());
                                $domicilioOfendidoDto->setActivo('N');
                                $rsDomicilio = $domicilioDao->eliminarDomiciliosOfendidoByIdOfendido($domicilioOfendidoDto, $this->proveedor);
                                if (!$rsDomicilio)
                                    throw new Exception('domicilio no eliminado');
                            }
                        }

                        //eliminar telÃ©fonos
                        $telefonoDao = new TelefonosofendidoscarpetasDAO();
                        $telefonoDto = new TelefonosofendidoscarpetasDTO();
                        $telefonoDto->setIdOfendidoCarpeta($idOfendido);
                        $telefonoDto->setActivo('S');
                        $telefonoOfendidoDto = new TelefonosofendidoscarpetasDTO();
                        $telefonoResponse = $telefonoDao->selectTelefonosofendidoscarpetas($telefonoDto, "", $this->proveedor);
                        if ($telefonoResponse != "") {
                            foreach ($telefonoResponse as $arrayTelefono) {
                                $telefonoOfendidoDto->setIdTelefonoOfendidoCarpeta($arrayTelefono->getIdTelefonoOfendidoCarpeta());
                                $telefonoOfendidoDto->setActivo('N');
                                $rsTelefono = $telefonoDao->eliminarTelefonoOfendidoByIdOfendidoCarpeta($telefonoOfendidoDto, $this->proveedor);
                                if (!$rsTelefono)
                                    throw new Exception('telÃ©fono no eliminado');
                            }
                        }

                        //eliminar defensores
                        $defensorDao = new DefensoresofendidoscarpetasDAO();
                        $defensorDto = new DefensoresofendidoscarpetasDTO();
                        $defensorOfendidoDto = new DefensoresofendidoscarpetasDTO();
                        $defensorDto->setIdOfendidoCarpeta($idOfendido);
                        $defensorDto->setActivo('S');
                        $defensorResponse = $defensorDao->selectDefensoresofendidoscarpetas($defensorDto, "", $this->proveedor);
                        if ($defensorResponse != "") {
                            foreach ($defensorResponse as $arrayDefensor) {
                                $defensorOfendidoDto->setIdDefensorOfendidoCarpeta($arrayDefensor->getIdDefensorOfendidoCarpeta());
                                $defensorOfendidoDto->setActivo('N');
                                $rsDefensor = $defensorDao->eliminarDefensorOfendidoByIdOfendidoCarpeta($defensorOfendidoDto, $this->proveedor);
                                if (!$rsDefensor)
                                    throw new Exception('defensor no eliminado');
                            }
                        }

                        //eliminar tutores
                        $tutorDao = new TutoresofendidoscarpetasDAO();
                        $tutorDto = new TutoresofendidoscarpetasDTO();
                        $tutorOfendidoDto = new TutoresofendidoscarpetasDTO();
                        $tutorDto->setIdOfendidoCarpeta($idOfendido);
                        $tutorDto->setActivo('S');
                        $tutorResponse = $tutorDao->selectTutoresofendidoscarpetas($tutorDto, "", $this->proveedor);
                        if ($tutorResponse != "") {
                            foreach ($tutorResponse as $arrayTutor) {
                                $tutorOfendidoDto->setIdTutorOfendidoCarpeta($arrayTutor->getIdTutorOfendidoCarpeta());
                                $tutorOfendidoDto->setActivo('N');
                                $rsTutor = $tutorDao->updateTutoresofendidoscarpetas($tutorOfendidoDto, $this->proveedor);
                                if (!$rsTutor)
                                    throw new Exception('tutor no eliminado');
                            }
                        }

                        //eliminar las nacionalidades del ofendido
                        $nacionalidadDao = new NacionalidadesofendidoscarpetasDAO();
                        $nacionalidadDto = new NacionalidadesofendidoscarpetasDTO();
                        $nacionalidadOfendidoDto = new NacionalidadesofendidoscarpetasDTO();
                        $nacionalidadDto->setIdOfendidoCarpeta($idOfendido);
                        $nacionalidadDto->setActivo('S');
                        $nacionalidadResponse = $nacionalidadDao->selectNacionalidadesofendidoscarpetas($nacionalidadDto, "", $this->proveedor);
                        if ($nacionalidadResponse != "") {
                            foreach ($nacionalidadResponse as $arraynacionalidad) {
                                $nacionalidadOfendidoDto->setIdNacionalidadOfendidoCarpeta($arraynacionalidad->getIdNacionalidadOfendidoCarpeta());
                                $nacionalidadOfendidoDto->setActivo('N');
                                $rsNacionalidad = $nacionalidadDao->updateNacionalidadesofendidoscarpetas($nacionalidadOfendidoDto, $this->proveedor);
                                if (!$rsNacionalidad)
                                    throw new Exception('nacionalidad no eliminada');
                            }
                        }

                        //eliminar el ofendido
                        $ofendidosDao = new OfendidoscarpetasDAO();
                        $OfendidoscarpetasDto->setActivo('N');
                        $ofendidosResponse = $ofendidosDao->eliminarOfendidoByIdOfendidoCarpeta($OfendidoscarpetasDto, $this->proveedor);

                        if (!count($ofendidosResponse))
                            throw new Exception('no se pudo eliminar los datos');

                        /*
                         * Eliminar la relacion impofedel cuando se elimine logicamente un ofendido
                         */
                        $ImpofedelcarpetasDto = new ImpofedelcarpetasDTO();
                        $ImpofedelcarpetasDto->setIdCarpetaJudicial($ofendidosResponse[0]->getIdCarpetaJudicial());
                        $ImpofedelcarpetasDto->setIdOfendidoCarpeta($ofendidosResponse[0]->getIdOfendidoCarpeta());
                        $ImpofedelcarpetasDto->setActivo("S");
                        $ImpofedelcarpetasDao = new ImpofedelcarpetasDAO();
                        $ImpofedelcarpetasResultado = $ImpofedelcarpetasDao->selectImpofedelcarpetas($ImpofedelcarpetasDto, "", $this->proveedor);
                        if ($ImpofedelcarpetasResultado != "") {
                            foreach ($ImpofedelcarpetasResultado as $value) {
                                //Eliminar violencia de genero, trata de personas y acoso sexual
                                $impofedelCarpetasController = new ImpofedelcarpetasController();
                                $eliminarViolencia = $impofedelCarpetasController->borrarViolenciaCausas($value, $this->proveedor);
                                if ( $eliminarViolencia ) {
                                    $ImpofedelcarpetasDto = new ImpofedelcarpetasDTO();
                                    $ImpofedelcarpetasDto->setIdImpOfeDelCarpeta($value->getIdImpOfeDelCarpeta());
                                    $ImpofedelcarpetasDto->setActivo('N');
                                    $ImpofedelcarpetasUpdate = $ImpofedelcarpetasDao->updateImpofedelcarpetas($ImpofedelcarpetasDto, $this->proveedor);
                                    if (!count($ImpofedelcarpetasUpdate))
                                        throw new Exception('no se pudo actualizar la relacion imputados, sujetos pasivos del delito y delitos');
                                }
                                
                            }
                        }

                        /*
                         * Actualizar el numero de ofendidos en la carpeta judicial
                         */
                        $ofendidoTmp = new OfendidoscarpetasDTO();
                        $ofendidoTmp->setIdCarpetaJudicial($ofendidosResponse[0]->getIdCarpetaJudicial());
                        $ofendidoTmp->setActivo("S");
                        $ofendidoTmp = $ofendidosDao->selectOfendidoscarpetas($ofendidoTmp, "", $this->proveedor);
                        $numOfendidos = count($ofendidoTmp);
                        $carpetaJudicialDto = new CarpetasjudicialesDTO();
                        $carpetaJudicialDao = new CarpetasjudicialesDAO();
                        $carpetaJudicialDto->setIdCarpetaJudicial($ofendidosResponse[0]->getIdCarpetaJudicial());
                        $carpetaJudicialDto->setNumOfendidos($numOfendidos);
                        $carpetaJudicialDto = $carpetaJudicialDao->updateCarpetasjudiciales($carpetaJudicialDto, $this->proveedor);

                        $bitacora = new BitacoramovimientosController();
                        $bitacoraOfendido = $bitacora->agregar(191, 'Borrado logico tblofendidoscarpetas', 'txt', serialize($ofendidosResponse[0]), '', $this->proveedor);

                        if (!count($bitacoraOfendido))
                            throw new Exception('no se pudo guardar la accion borrar datos en bitacora');
                        if ($proveedor == null) {
                            $this->proveedor->execute('COMMIT');
                        }
                        return [
                            'status' => 'ok',
                            'mensaje' => 'Datos eliminados correctamente!',
                            'data' => [
                                'idOfendidoCarpeta' => $ofendidosResponse[0]->getIdOfendidoCarpeta(),
                                'idCarpetaJudicial' => $ofendidosResponse[0]->getIdCarpetaJudicial()
                            ]
                        ];
                    } catch (Exception $e) {
                        if ($proveedor == null) {
                            $this->proveedor->execute('ROLLBACK');
                        }
                        return [
                            'status' => 'error',
                            'mensaje' => $e->getMessage()
                        ];
                    }
                } else {
                    return [
                        'status' => 'error',
                        'mensaje' => 'La carpeta judicial debe tener al menos un sujeto pasivo del delito activo, favor de verificar'
                    ];
                }
            }
        } else {
            return [
                'status' => 'error',
                'mensaje' => 'La carpeta judicial no tiene sujetos pasivos del delito activos'
            ];
        }
    }

    /*
     * Consulta total de ofendidos
     */

    public function counsultarTotal($OfendidoscarpetasDto) {
        $mensaje = array();
        $error = false;

        $carpetasJudicialesDao = new CarpetasjudicialesDAO();
        $carpetasjudicialesDto = new CarpetasjudicialesDTO();
        $total = 0;
        $rsRegistros = $this->selectOfendidoscarpetas($OfendidoscarpetasDto);
        $registros = count($rsRegistros);
        if ($rsRegistros != "") {
            $carpetasjudicialesDto->setIdCarpetaJudicial($OfendidoscarpetasDto->getIdCarpetaJudicial());
            $rsSolicitud = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasjudicialesDto);
            $rsOfendidosSolicitud = (int) $rsSolicitud[0]->getNumOfendidos();

            if ($registros == $rsOfendidosSolicitud) {

                foreach ($rsRegistros as $ofendido) {

                    $idOfendidoCarpeta = $ofendido->getIdOfendidoCarpeta();

                    //valida domicilio para cada ofendido

                    $DomiciliosOfendidosDto = new DomiciliosofendidoscarpetasDTO();
                    $DomiciliosOfendidosDao = new DomiciliosofendidoscarpetasDAO();

//                    $DomiciliosOfendidosDto->setIdOfendidoCarpeta($idOfendidoCarpeta);
//                    $DomiciliosOfendidosDto->setActivo('S');
//
//                    $selectDomicilios = $DomiciliosOfendidosDao->selectDomiciliosofendidoscarpetas($DomiciliosOfendidosDto);
//
//                    if ($selectDomicilios == "") {
//
//                        /*
//                         * si el tipo de persona es 1(persona fisica) se muestra nombre, paterno y materno
//                         */
//                        if ($ofendido->getCveTipoPersona() == 1) {
//                            $nombre_ofendido = $ofendido->getNombre() . ' ' . $ofendido->getPaterno() . ' ' . $ofendido->getMaterno();
//                        } else {
//                            /*
//                             * si el tipo de persona es igual a 2 o 3 (moral u otra) se muestra nombre moral
//                             */
//                            $nombre_ofendido = $ofendido->getNombreMoral();
//                        }
//
//                        $mensaje[] = array("Tiene que agregar al menos un domicilio a: " . utf8_encode($nombre_ofendido) . ".");
//                        $error = true;
//                    }

                    //valida defensor para cada ofendido

                    $DefensoresOfendidosDto = new DefensoresofendidoscarpetasDTO();
                    $DefensoresOfendidosDao = new DefensoresofendidoscarpetasDAO();
                    $DefensoresOfendidosDto->setIdOfendidoCarpeta($idOfendidoCarpeta);
                    $DefensoresOfendidosDto->setActivo('S');

                    $selectDefensores = $DefensoresOfendidosDao->selectDefensoresofendidoscarpetas($DefensoresOfendidosDto);

                    if ($selectDefensores == "") {

                        /*
                         * si el tipo de persona es 1(persona fisica) se muestra nombre, paterno y materno
                         */
                        if ($ofendido->getCveTipoPersona() == 1) {
                            $nombre_ofendido = $ofendido->getNombre() . ' ' . $ofendido->getPaterno() . ' ' . $ofendido->getMaterno();
                        } else {
                            /*
                             * si el tipo de persona es igual a 2 o 3 (moral u otra) se muestra nombre moral
                             */
                            $nombre_ofendido = $ofendido->getNombreMoral();
                        }

                        $mensaje[] = array("Tiene que agregar al menos un defensor a: " . utf8_encode($nombre_ofendido) . ".");
                        $error = true;
                    }


                    //valida nacionalidad para cada ofendido
                    $NacionalidadesOfendidosDto = new NacionalidadesofendidoscarpetasDTO();
                    $NacionalidadesOfendidosDao = new NacionalidadesofendidoscarpetasDAO();
                    $NacionalidadesOfendidosDto->setActivo('S');
                    $NacionalidadesOfendidosDto->setIdOfendidoCarpeta($idOfendidoCarpeta);

                    $selectNacionalidades = $NacionalidadesOfendidosDao->selectNacionalidadesofendidoscarpetas($NacionalidadesOfendidosDto);

                    if ($selectNacionalidades == "") {

                        /*
                         * si el tipo de persona es 1(persona fisica) se muestra nombre, paterno y materno
                         */
                        if ($ofendido->getCveTipoPersona() == 1) {
                            $nombre_ofendido = $ofendido->getNombre() . ' ' . $ofendido->getPaterno() . ' ' . $ofendido->getMaterno();
                        } else {
                            /*
                             * si el tipo de persona es igual a 2 o 3 (moral u otra) se muestra nombre moral
                             */
                            $nombre_ofendido = $ofendido->getNombreMoral();
                        }

                        $mensaje[] = array("Tiene que agregar al menos una nacionalidad a: " . utf8_encode($nombre_ofendido) . ".");
                        $error = true;
                    }
                }
            } else if ($registros < $rsOfendidosSolicitud) {
                $total = (int) $rsOfendidosSolicitud - (int) $registros;
                $mensaje[] = array("Faltan por agregar " . $total . " sujeto(s) pasivo(s) del delito.");
                $error = true;
            } else if ($registros > $rsOfendidosSolicitud) {
                $total = (int) $registros - (int) $rsOfendidosSolicitud;
                $mensaje[] = array("Tiene agregado(s) " . $total . " sujeto(s) pasivo(s) del delito demas.");
                $error = true;
            }
        } else {
            $mensaje[] = array("No hay sujetos pasivos del delito relacionados a esta carpeta.");
            $error = true;
        }

        if ((!$error)) {
            $result = array(
                "status" => "ok",
                "msj" => "correcto",
                "totalOfendidos" => $registros,
                "ofendidosCarpetas" => $rsOfendidosSolicitud
            );
        } else {
            $result = array(
                "status" => 'error',
                "msj" => $mensaje
            );
        }

        return ($result);
    }

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
        if ($OfendidoscarpetasDto->getCveEstadoCivil() == "0") {
            $OfendidoscarpetasDto->setCveEstadoCivil("");
        }
        if ($OfendidoscarpetasDto->getCveNivelInstruccion() == "0") {
            $OfendidoscarpetasDto->setCveNivelInstruccion("");
        }

        return $OfendidoscarpetasDto;
    }

    /* ----------------------------------------------------------------------------------------------------------- */

    /*     * ******************* CONSULTA DE MEDIDAS DE MUJERES DESAPARECIDAS ************************************************************** */

    public function consultarMujeresDesaparecidas($OfendidoscarpetasDto, $param) {
        //$OfendidoscarpetasDto = $this->validaOfendido($OfendidoscarpetasDto);
        $OfendidoscarpetasDao = new OfendidoscarpetasDAO();
        //$validacion = new Validacion();
        $OfendidoscarpetasDto = $this->verificaCeros($OfendidoscarpetasDto);
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
        $OfendidoscarpetasDto = $OfendidoscarpetasDao->selectOfendidoscarpetasPag($OfendidoscarpetasDto, null, $orden, $param, null);
        //print_r($OfendidoscarpetasDto);
        if ($OfendidoscarpetasDto != "") {
            $json = "";
            $json .= '{"type":"OK",';
            $json .= '"totalCount":"' . count($OfendidoscarpetasDto) . '",';
            $json .= '"data":[';
            $x = 1;
            foreach ($OfendidoscarpetasDto as $Ofendido) {
                $json .= "{";
                $json .= '"idOfendidoCarpeta":' . json_encode(utf8_encode($Ofendido->getIdOfendidoCarpeta())) . ",";
                $json .= '"nombre":' . json_encode(utf8_encode($Ofendido->getNombre())) . ",";
                $json .= '"paterno":' . json_encode(utf8_encode($Ofendido->getPaterno())) . ",";
                $json .= '"materno":' . json_encode(utf8_encode($Ofendido->getMaterno())) . ",";
                $json .= '"rfc":' . json_encode(utf8_encode($Ofendido->getRfc())) . ",";
                $json .= '"curp":' . json_encode(utf8_encode($Ofendido->getCurp())) . ",";

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
                } else {
                    $Carpeta = "";
                }

                $json .= '"Carpeta":' . json_encode(utf8_encode($Carpeta)) . ",";
                $json .= '"CarpetaInv":' . json_encode(utf8_encode($carpetaInv)) . ",";
                $json .= '"nuc":' . json_encode(utf8_encode($nuc)) . ",";
                $json .= '"Juzgado":' . json_encode(utf8_encode($DesJuzgado)) . ",";

                if ($Ofendido->getCveOcupacion() != "") {
                    $OcupacionesDto = new OcupacionesDTO();
                    $OcupacionesDao = new OcupacionesDAO();
                    $OcupacionesDto->setCveOcupacion($Ofendido->getCveOcupacion());
                    $OcupacionesDto = $OcupacionesDao->selectOcupaciones($OcupacionesDto);
                    $json .= '"desocupacion":' . json_encode(utf8_encode($OcupacionesDto[0]->getDesOcupacion())) . ",";
                } else {
                    $json .= '"desocupacion": "",';
                }

                if ($Ofendido->getFechaNacimiento() != "") {
                    $tmpFecha = explode('-', $Ofendido->getFechaNacimiento());
                    $fechaNacimiento = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                    $json .= '"fechaNacimiento":' . json_encode($fechaNacimiento) . ",";
                } else {
                    $json .= '"fechaNacimiento": "",';
                }
                $json .= '"edad":' . json_encode(utf8_encode($Ofendido->getEdad())) . ",";

                if ($Ofendido->getCvePaisNacimiento() != "") {
                    $PaisesDto = new PaisesDTO();
                    $PaisesDao = new PaisesDAO();
                    $PaisesDto->setCvePais($Ofendido->getCvePaisNacimiento());
                    $PaisesDto = $PaisesDao->selectPaises($PaisesDto);
                    $json .= '"desPais":' . json_encode(utf8_encode($PaisesDto[0]->getDesPais())) . ",";
                } else {
                    $json .= '"desPais": "",';
                }

                if ($Ofendido->getCveEstadoNacimiento() != "" and $Ofendido->getCvePaisNacimiento() == "119") {
                    $EstadosDto = new EstadosDTO();
                    $EstadosDao = new EstadosDAO();
                    $EstadosDto->setCveEstado($Ofendido->getCveEstadoNacimiento());
                    $EstadosDto = $EstadosDao->selectEstados($EstadosDto);
                    $json .= '"estadoNacimiento":' . json_encode(utf8_encode($EstadosDto[0]->getDesEstado())) . ",";
                } else {
                    $json .= '"estadoNacimiento":' . json_encode(utf8_encode($Ofendido->getEstadoNacimiento())) . ",";
                }

                if ($Ofendido->getCveMunicipioNacimiento() != "" and $Ofendido->getCvePaisNacimiento() == "119") {
                    $MunicipiosDto = new MunicipiosDTO();
                    $MunicipiosDao = new MunicipiosDAO();
                    $MunicipiosDto->setCveMunicipio($Ofendido->getCveMunicipioNacimiento());
                    $MunicipiosDto = $MunicipiosDao->selectMunicipios($MunicipiosDto);
                    $json .= '"municipioNacimiento":' . json_encode(utf8_encode($MunicipiosDto[0]->getDesMunicipio())) . ",";
                } else {
                    $json .= '"municipioNacimiento":' . json_encode(utf8_encode($Ofendido->getMunicipioNacimiento())) . ",";
                }

                if ($Ofendido->getCveEstadoCivil() != "") {
                    $EstadosCivilesDto = new EstadoscivilesDTO();
                    $EstadosCivilesDao = new EstadoscivilesDAO();
                    $EstadosCivilesDto->setCveEstadoCivil($Ofendido->getCveEstadoCivil());
                    $EstadosCivilesDto = $EstadosCivilesDao->selectEstadosciviles($EstadosCivilesDto);
                    $json .= '"desEstadoCivil":' . json_encode(utf8_encode($EstadosCivilesDto[0]->getDesEstadoCivil())) . ",";
                } else {
                    $json .= '"desEstadoCivil": "",';
                }

                if ($Ofendido->getCveNivelInstruccion() != "") {
                    $NivelInstruccionesDto = new NivelesinstruccionesDTO();
                    $NivelInstruccionesDao = new NivelesinstruccionesDAO();
                    $NivelInstruccionesDto->setCveNivelInstruccion($Ofendido->getCveNivelInstruccion());
                    $NivelInstruccionesDto = $NivelInstruccionesDao->selectNivelesinstrucciones($NivelInstruccionesDto);
                    $json .= '"desNivelInstruccion":' . json_encode(utf8_encode($NivelInstruccionesDto[0]->getDesNivelInstruccion())) . ",";
                } else {
                    $json .= '"desNivelInstruccion": "",';
                }

                if ($Ofendido->getCveEspanol() != "") {
                    $EspanolDto = new EspanolDTO();
                    $EspanolDao = new EspanolDAO();
                    $EspanolDto->setCveEspanol($Ofendido->getCveEspanol());
                    $EspanolDto = $EspanolDao->selectEspanol($EspanolDto);
                    $json .= '"desEspanol":' . json_encode(utf8_encode($EspanolDto[0]->getDesEspanol())) . ",";
                } else {
                    $json .= '"desEspanol": "",';
                }

                if ($Ofendido->getCveDialectoIndigena() != "") {
                    $DialectoIndigenaDto = new DialectoindigenaDTO();
                    $DialectoIndigenaDao = new DialectoindigenaDAO();
                    $DialectoIndigenaDto->setCveDialectoIndigena($Ofendido->getCveDialectoIndigena());
                    $DialectoIndigenaDto = $DialectoIndigenaDao->selectDialectoindigena($DialectoIndigenaDto);
                    $json .= '"desDialecto":' . json_encode(utf8_encode($DialectoIndigenaDto[0]->getDesDialectoIndigena())) . ",";
                } else {
                    $json .= '"desDialecto": "",';
                }

                if ($Ofendido->getCveTipoFamiliaLinguistica() != "") {
                    $FamLinDto = new TipofamilialinguisticaDTO();
                    $FamLinDao = new TipofamilialinguisticaDAO();
                    $FamLinDto->setCveTipoFamiliaLinguistica($Ofendido->getCveTipoFamiliaLinguistica());
                    $FamLinDto = $FamLinDao->selectTipofamilialinguistica($FamLinDto);
                    $json .= '"desFamLin":' . json_encode(utf8_encode($FamLinDto[0]->getDesTipoFamiliaLinguistica())) . ",";
                } else {
                    $json .= '"desFamLin": "",';
                }

                if ($Ofendido->getCveInterprete() != "") {
                    $InterpreteDto = new InterpretesDTO();
                    $InterpreteDao = new InterpretesDAO();
                    $InterpreteDto->setCveInterprete($Ofendido->getCveInterprete());
                    $InterpreteDto = $InterpreteDao->selectInterpretes($InterpreteDto);
                    $json .= '"interprete":' . json_encode(utf8_encode($InterpreteDto[0]->getDesInterprete())) . ",";
                } else {
                    $json .= '"interprete": "",';
                }

                if ($Ofendido->getCveOrdenProteccion() != "") {
                    $OrdenProDto = new OrdenesproteccionesDTO();
                    $OrdenProDao = new OrdenesproteccionesDAO();
                    $OrdenProDto->setCveOrdenProteccion($Ofendido->getCveOrdenProteccion());
                    $OrdenProDto = $OrdenProDao->selectOrdenesprotecciones($OrdenProDto);
                    $json .= '"prdenpro":' . json_encode(utf8_encode($OrdenProDto[0]->getDesOrdenProteccion())) . ",";
                } else {
                    $json .= '"ordenpro": "",';
                }

                if ($Ofendido->getCveEstadoPsicofisico() != "") {
                    $EdoPsicofisicoDto = new EstadospsicofisicosDTO();
                    $EdoPsicofisicoDao = new EstadospsicofisicosDAO();
                    $EdoPsicofisicoDto->setCveEstadoPsicofisico($Ofendido->getCveEstadoPsicofisico());
                    $EdoPsicofisicoDto = $EdoPsicofisicoDao->selectEstadospsicofisicos($EdoPsicofisicoDto);
                    $json .= '"edopsico":' . json_encode(utf8_encode($EdoPsicofisicoDto[0]->getDesEstadoPsicofisico())) . ",";
                } else {
                    $json .= '"edopsico": "",';
                }

                if ($Ofendido->getCveVictimaDeLaDelincuenciaOrganizada() != "") {
                    $VictimaDelincuenciaDto = new VictimadeladelincuenciaorganizadaDTO();
                    $VictimaDelincuenciaDao = new VictimadeladelincuenciaorganizadaDAO();
                    $VictimaDelincuenciaDto->setCveVictimaDeLaDelincuenciaOrganizada($Ofendido->getCveVictimaDeLaDelincuenciaOrganizada());
                    $VictimaDelincuenciaDto = $VictimaDelincuenciaDao->selectVictimadeladelincuenciaorganizada($VictimaDelincuenciaDto);
                    $json .= '"victimadelincuencia":' . json_encode(utf8_encode($VictimaDelincuenciaDto[0]->getDesVictimaDeLaDelincuenciaOrganizada())) . ",";
                } else {
                    $json .= '"victimadelincuencia": "",';
                }

                if ($Ofendido->getCveVictimaDeViolenciaDeGenero() != "") {
                    $VictimaVioGenDto = new VictimadeviolenciadegeneroDTO();
                    $VictimaVioGenDao = new VictimadeviolenciadegeneroDAO();
                    $VictimaVioGenDto->setCveVictimaDeViolenciaDeGenero($Ofendido->getCveVictimaDeViolenciaDeGenero());
                    $VictimaVioGenDto = $VictimaVioGenDao->selectVictimadeviolenciadegenero($VictimaVioGenDto);
                    $json .= '"victimaVioGenero":' . json_encode(utf8_encode($VictimaVioGenDto[0]->getDesVictimaDeViolenciaDeGenero())) . ",";
                } else {
                    $json .= '"victimaVioGenero": "",';
                }

                if ($Ofendido->getCveVictimaDeTrata() != "") {
                    $VictimaTrataDto = new VictimadetrataDTO();
                    $VictimaTrataDao = new VictimadetrataDAO();
                    $VictimaTrataDto->setCveVictimaDeTrata($Ofendido->getCveVictimaDeTrata());
                    $VictimaTrataDto = $VictimaTrataDao->selectVictimadetrata($VictimaTrataDto);
                    $json .= '"victimaTrata":' . json_encode(utf8_encode($VictimaTrataDto[0]->getDesVictimaDeTrata())) . ",";
                } else {
                    $json .= '"victimatrata": "",';
                }

                $json .= '"numHijos":' . json_encode(utf8_encode($Ofendido->getNumHijos())) . ",";
                $json .= '"embarazada":' . json_encode(utf8_encode($Ofendido->getEmbarazada())) . ",";

                if ($Ofendido->getCveGrupoEdnico() != "") {
                    $GrupoEtnicoDto = new GruposednicosDTO();
                    $GrupoEtnicoDao = new GruposednicosDAO();
                    $GrupoEtnicoDto->setCveGrupoEdnico($Ofendido->getCveGrupoEdnico());
                    $GrupoEtnicoDto = $GrupoEtnicoDao->selectGruposednicos($GrupoEtnicoDto);
                    $json .= '"grupoetnico":' . json_encode(utf8_encode($GrupoEtnicoDto[0]->getDesGrupoEdnico()));
                } else {
                    $json .= '"grupoetnico": ""';
                }

                $json .= "}";
                $x++;
                if ($x <= count($OfendidoscarpetasDto)) {
                    $json .= ",";
                }
            }
            $json .= "],";
            //$json .= '"pagina":' . json_encode(utf8_encode($param["pag"])) . ",";
            $json .= '"total":"' . count($OfendidoscarpetasDto) . '"';
            $json .= "}";

            return $json;
            echo"Json:---";
            echo $json;
        } else {
            return "";
        }
    }

    /*     * ******************* TERMINO DE CONSULTA DE MUJERES DESAPARECIDAS **************************************************** */
    /*     * ********************* GET PÁGINAS******************************************************************************* */

    public function getPaginas($OfendidoscarpetasDto, $param) {
        $OfendidoscarpetasDao = new OfendidoscarpetasDAO();
        $OfendidoscarpetasDto = $this->verificaCeros($OfendidoscarpetasDto);
        //ConsultarOfendidoscarpetas->Obtiene el total de registros
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

        $JsonResponse = $OfendidoscarpetasDao->ConsultarOfendidoscarpetas($OfendidoscarpetasDto, null, $orden, $param, null);
        //var_dump($JsonResponse);
        $numTot = count($JsonResponse);
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
        return $json;
    }

    /*     * ************************FIN GET PÁGINAS************************************************************************* */
    /*     * ******************* CONSULTA DE TRATA DE PERSONAS DETALLE************************************************************** */

    public function consultarTrataPersonas($OfendidoscarpetasDto, $param) {
        //print_r($param);
        //$OfendidoscarpetasDto = $this->validaOfendido($OfendidoscarpetasDto);
        $OfendidoscarpetasDao = new OfendidoscarpetasDAO();
        //$validacion = new Validacion();
        $OfendidoscarpetasDto = $this->verificaCeros($OfendidoscarpetasDto);
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

        //selectOfendidoscarpetasPag($ofendidoscarpetasDto,$proveedor = null, $orden = "", $param = null, $fields = null) {
        $OfendidoscarpetasDto = $OfendidoscarpetasDao->selectOfendidoscarpetasPag($OfendidoscarpetasDto, null, $orden, $param, null);
        //$OfendidoscarpetasDto = $OfendidoscarpetasDao->selectOfendidoscarpetas($OfendidoscarpetasDto," ORDER BY idOfendidoCarpeta DESC ", null);
        //print_r($OfendidoscarpetasDto);
        if ($OfendidoscarpetasDto != "") {
            $json = "";
            $json .= '{"type":"OK",';
            $json .= '"totalCount":"' . count($OfendidoscarpetasDto) . '",';
            $json .= '"data":[';
            $x = 1;
            foreach ($OfendidoscarpetasDto as $Ofendido) {

//                $ImpofedelcarpetasDto = new ImpofedelcarpetasDTO();
//                $ImpofedelcarpetasDao = new ImpofedelcarpetasDAO();
//                $ImpofedelcarpetasDto->setIdOfendidoCarpeta($Ofendido->getIdOfendidoCarpeta());
//                $ImpofedelcarpetasDto->setActivo('S');
//                $ImpofedelcarpetasDto = $ImpofedelcarpetasDao->selectImpofedelcarpetas($ImpofedelcarpetasDto);
////                if($ImpofedelcarpetasDto!=""){ 
//                    $TrataspersonascarpetasDto = new TrataspersonascarpetasDTO();
//                    $TrataspersonascarpetasDao = new TrataspersonascarpetasDAO();
//                    $TrataspersonascarpetasDto->setIdImpOfeDelCarpeta($ImpofedelcarpetasDto[0]->getIdOfendidoCarpeta());
//                    $TrataspersonascarpetasDto->setActivo('S');
//                    $TrataspersonascarpetasDto = $TrataspersonascarpetasDao->selectImpofedelcarpetas($TrataspersonascarpetasDto);
////                    if($TrataspersonascarpetasDto!="") {
//                        $TipostratasDto = new TipostratasDTO();
//                        $TipostratasDao = new TipostratasDAO();
//                        $TipostratasDto->setCveTipoTrata($TrataspersonascarpetasDto[0]->getCveTipoTrata());
//                        if ($x <= count($OfendidoscarpetasDto)){$json .= "},";}
                $json .= "{";
                $json .= '"idOfendidoCarpeta":' . json_encode(utf8_encode($Ofendido->getIdOfendidoCarpeta())) . ",";
                $json .= '"nombre":' . json_encode(utf8_encode($Ofendido->getNombre())) . ",";
                $json .= '"paterno":' . json_encode(utf8_encode($Ofendido->getPaterno())) . ",";
                $json .= '"materno":' . json_encode(utf8_encode($Ofendido->getMaterno())) . ",";
                $json .= '"rfc":' . json_encode(utf8_encode($Ofendido->getRfc())) . ",";
                $json .= '"curp":' . json_encode(utf8_encode($Ofendido->getCurp())) . ",";

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

                if ($Ofendido->getCveOcupacion() != "") {
                    $OcupacionesDto = new OcupacionesDTO();
                    $OcupacionesDao = new OcupacionesDAO();
                    $OcupacionesDto->setCveOcupacion($Ofendido->getCveOcupacion());
                    $OcupacionesDto = $OcupacionesDao->selectOcupaciones($OcupacionesDto);
                    $json .= '"desocupacion":' . json_encode(utf8_encode($OcupacionesDto[0]->getDesOcupacion())) . ",";
                } else {
                    $json .= '"desocupacion": "",';
                }

                if ($Ofendido->getFechaNacimiento() != "") {
                    $tmpFecha = explode('-', $Ofendido->getFechaNacimiento());
                    $fechaNacimiento = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                    $json .= '"fechaNacimiento":' . json_encode($fechaNacimiento) . ",";
                } else {
                    $json .= '"fechaNacimiento": "",';
                }
                $json .= '"edad":' . json_encode(utf8_encode($Ofendido->getEdad())) . ",";

                if ($Ofendido->getCvePaisNacimiento() != "") {
                    $PaisesDto = new PaisesDTO();
                    $PaisesDao = new PaisesDAO();
                    $PaisesDto->setCvePais($Ofendido->getCvePaisNacimiento());
                    $PaisesDto = $PaisesDao->selectPaises($PaisesDto);
                    $json .= '"desPais":' . json_encode(utf8_encode($PaisesDto[0]->getDesPais())) . ",";
                } else {
                    $json .= '"desPais": "",';
                }

                if ($Ofendido->getCveEstadoNacimiento() != "" and $Ofendido->getCvePaisNacimiento() == "119") {
                    $EstadosDto = new EstadosDTO();
                    $EstadosDao = new EstadosDAO();
                    $EstadosDto->setCveEstado($Ofendido->getCveEstadoNacimiento());
                    $EstadosDto = $EstadosDao->selectEstados($EstadosDto);
                    $json .= '"estadoNacimiento":' . json_encode(utf8_encode($EstadosDto[0]->getDesEstado())) . ",";
                } else {
                    $json .= '"estadoNacimiento":' . json_encode(utf8_encode($Ofendido->getEstadoNacimiento())) . ",";
                }

                if ($Ofendido->getCveMunicipioNacimiento() != "" and $Ofendido->getCvePaisNacimiento() == "119") {
                    $MunicipiosDto = new MunicipiosDTO();
                    $MunicipiosDao = new MunicipiosDAO();
                    $MunicipiosDto->setCveMunicipio($Ofendido->getCveMunicipioNacimiento());
                    $MunicipiosDto = $MunicipiosDao->selectMunicipios($MunicipiosDto);
                    $json .= '"municipioNacimiento":' . json_encode(utf8_encode($MunicipiosDto[0]->getDesMunicipio())) . ",";
                } else {
                    $json .= '"municipioNacimiento":' . json_encode(utf8_encode($Ofendido->getMunicipioNacimiento())) . ",";
                }

                if ($Ofendido->getCveEstadoCivil() != "") {
                    $EstadosCivilesDto = new EstadoscivilesDTO();
                    $EstadosCivilesDao = new EstadoscivilesDAO();
                    $EstadosCivilesDto->setCveEstadoCivil($Ofendido->getCveEstadoCivil());
                    $EstadosCivilesDto = $EstadosCivilesDao->selectEstadosciviles($EstadosCivilesDto);
                    $json .= '"desEstadoCivil":' . json_encode(utf8_encode($EstadosCivilesDto[0]->getDesEstadoCivil())) . ",";
                } else {
                    $json .= '"desEstadoCivil": "",';
                }

                if ($Ofendido->getCveNivelInstruccion() != "") {
                    $NivelInstruccionesDto = new NivelesinstruccionesDTO();
                    $NivelInstruccionesDao = new NivelesinstruccionesDAO();
                    $NivelInstruccionesDto->setCveNivelInstruccion($Ofendido->getCveNivelInstruccion());
                    $NivelInstruccionesDto = $NivelInstruccionesDao->selectNivelesinstrucciones($NivelInstruccionesDto);
                    $json .= '"desNivelInstruccion":' . json_encode(utf8_encode($NivelInstruccionesDto[0]->getDesNivelInstruccion())) . ",";
                } else {
                    $json .= '"desNivelInstruccion": "",';
                }

                if ($Ofendido->getCveEspanol() != "") {
                    $EspanolDto = new EspanolDTO();
                    $EspanolDao = new EspanolDAO();
                    $EspanolDto->setCveEspanol($Ofendido->getCveEspanol());
                    $EspanolDto = $EspanolDao->selectEspanol($EspanolDto);
                    $json .= '"desEspanol":' . json_encode(utf8_encode($EspanolDto[0]->getDesEspanol())) . ",";
                } else {
                    $json .= '"desEspanol": "",';
                }

                if ($Ofendido->getCveDialectoIndigena() != "") {
                    $DialectoIndigenaDto = new DialectoindigenaDTO();
                    $DialectoIndigenaDao = new DialectoindigenaDAO();
                    $DialectoIndigenaDto->setCveDialectoIndigena($Ofendido->getCveDialectoIndigena());
                    $DialectoIndigenaDto = $DialectoIndigenaDao->selectDialectoindigena($DialectoIndigenaDto);
                    $json .= '"desDialecto":' . json_encode(utf8_encode($DialectoIndigenaDto[0]->getDesDialectoIndigena())) . ",";
                } else {
                    $json .= '"desDialecto": "",';
                }

                if ($Ofendido->getCveTipoFamiliaLinguistica() != "") {
                    $FamLinDto = new TipofamilialinguisticaDTO();
                    $FamLinDao = new TipofamilialinguisticaDAO();
                    $FamLinDto->setCveTipoFamiliaLinguistica($Ofendido->getCveTipoFamiliaLinguistica());
                    $FamLinDto = $FamLinDao->selectTipofamilialinguistica($FamLinDto);
                    $json .= '"desFamLin":' . json_encode(utf8_encode('- ' . $FamLinDto[0]->getDesTipoFamiliaLinguistica())) . ",";
                } else {
                    $json .= '"desFamLin": "",';
                }

                if ($Ofendido->getCveInterprete() != "") {
                    $InterpreteDto = new InterpretesDTO();
                    $InterpreteDao = new InterpretesDAO();
                    $InterpreteDto->setCveInterprete($Ofendido->getCveInterprete());
                    $InterpreteDto = $InterpreteDao->selectInterpretes($InterpreteDto);
                    $json .= '"interprete":' . json_encode(utf8_encode($InterpreteDto[0]->getDesInterprete())) . ",";
                } else {
                    $json .= '"interprete": "",';
                }

                if ($Ofendido->getCveOrdenProteccion() != "") {
                    $OrdenProDto = new OrdenesproteccionesDTO();
                    $OrdenProDao = new OrdenesproteccionesDAO();
                    $OrdenProDto->setCveOrdenProteccion($Ofendido->getCveOrdenProteccion());
                    $OrdenProDto = $OrdenProDao->selectOrdenesprotecciones($OrdenProDto);
                    $json .= '"ordenpro":' . json_encode($OrdenProDto[0]->getDesOrdenProteccion()) . ",";
                } else {
                    $json .= '"ordenpro": "",';
                }

                if ($Ofendido->getCveEstadoPsicofisico() != "") {
                    $EdoPsicofisicoDto = new EstadospsicofisicosDTO();
                    $EdoPsicofisicoDao = new EstadospsicofisicosDAO();
                    $EdoPsicofisicoDto->setCveEstadoPsicofisico($Ofendido->getCveEstadoPsicofisico());
                    $EdoPsicofisicoDto = $EdoPsicofisicoDao->selectEstadospsicofisicos($EdoPsicofisicoDto);
                    $json .= '"edopsico":' . json_encode(utf8_encode($EdoPsicofisicoDto[0]->getDesEstadoPsicofisico())) . ",";
                } else {
                    $json .= '"edopsico": "",';
                }

                if ($Ofendido->getCveVictimaDeLaDelincuenciaOrganizada() != "") {
                    $VictimaDelincuenciaDto = new VictimadeladelincuenciaorganizadaDTO();
                    $VictimaDelincuenciaDao = new VictimadeladelincuenciaorganizadaDAO();
                    $VictimaDelincuenciaDto->setCveVictimaDeLaDelincuenciaOrganizada($Ofendido->getCveVictimaDeLaDelincuenciaOrganizada());
                    $VictimaDelincuenciaDto = $VictimaDelincuenciaDao->selectVictimadeladelincuenciaorganizada($VictimaDelincuenciaDto);
                    $json .= '"victimadelincuencia":' . json_encode(utf8_encode($VictimaDelincuenciaDto[0]->getDesVictimaDeLaDelincuenciaOrganizada())) . ",";
                } else {
                    $json .= '"victimadelincuencia": "",';
                }

                if ($Ofendido->getCveVictimaDeViolenciaDeGenero() != "") {
                    $VictimaVioGenDto = new VictimadeviolenciadegeneroDTO();
                    $VictimaVioGenDao = new VictimadeviolenciadegeneroDAO();
                    $VictimaVioGenDto->setCveVictimaDeViolenciaDeGenero($Ofendido->getCveVictimaDeViolenciaDeGenero());
                    $VictimaVioGenDto = $VictimaVioGenDao->selectVictimadeviolenciadegenero($VictimaVioGenDto);
                    $json .= '"victimaVioGenero":' . json_encode(utf8_encode($VictimaVioGenDto[0]->getDesVictimaDeViolenciaDeGenero())) . ",";
                } else {
                    $json .= '"victimaVioGenero": "",';
                }

                if ($Ofendido->getCveVictimaDeTrata() != "") {
                    $VictimaTrataDto = new VictimadetrataDTO();
                    $VictimaTrataDao = new VictimadetrataDAO();
                    $VictimaTrataDto->setCveVictimaDeTrata($Ofendido->getCveVictimaDeTrata());
                    $VictimaTrataDto = $VictimaTrataDao->selectVictimadetrata($VictimaTrataDto);
                    $json .= '"victimaTrata":' . json_encode(utf8_encode($VictimaTrataDto[0]->getDesVictimaDeTrata())) . ",";
                } else {
                    $json .= '"victimatrata": "",';
                }

                $json .= '"numHijos":' . json_encode(utf8_encode($Ofendido->getNumHijos())) . ",";
                $embarazada = $Ofendido->getEmbarazada();
                if ($embarazada == 'S') {
                    $embarazada = 'SI';
                } else {
                    $embarazada = 'NO';
                }
                $json .= '"embarazada":' . json_encode($embarazada) . ",";

                if ($Ofendido->getCveGrupoEdnico() != "") {
                    $GrupoEtnicoDto = new GruposednicosDTO();
                    $GrupoEtnicoDao = new GruposednicosDAO();
                    $GrupoEtnicoDto->setCveGrupoEdnico($Ofendido->getCveGrupoEdnico());
                    $GrupoEtnicoDto = $GrupoEtnicoDao->selectGruposednicos($GrupoEtnicoDto);
                    $json .= '"grupoetnico":' . json_encode(utf8_encode($GrupoEtnicoDto[0]->getDesGrupoEdnico()));
                } else {
                    $json .= '"grupoetnico": ""';
                }

                $json .= "}";
//                    }
                // $x++;
//                }    
                $x++;
                if ($x <= count($OfendidoscarpetasDto)) {
                    $json .= ",";
                }
            }
            $json .= "],";
            $json .= '"pagina":' . json_encode(utf8_encode($param["pag"])) . ",";
            $json .= '"total":"' . count($OfendidoscarpetasDto) . '"';
            $json .= "}";

            return $json;
            echo"Json:---";
            echo $json;
        } else {
            return "";
        }
    }

    /*     * ******************* TERMINO DE CONSULTA DE TRATA DE PERSONAS**************************************************** */
    /* --------------------------- CONSULTA DE TODAS LAS TRATAS------------------------------------------------------- */

    public function consultarTrataVarias($OfendidoscarpetasDto = "", $param = null) {
        //print_r($param).'Param---';
        // print_r($OfendidoscarpetasDto);
        $OfendidoscarpetasDao = new OfendidoscarpetasDAO();
        if ($param["fechaInicio"] != "") {
            $fechaInicio = explode("/", $param["fechaInicio"]);
        }
        if ($param["fechaFin"] != "") {
            $fechaFin = explode("/", $param["fechaFin"]);
        }
        $campos = " oc.idOfendidoCarpeta id,iodc.idImpOfeDelCarpeta,dc.idDelitoCarpeta,tc.desTipoCarpeta,cj.numero,cj.anio,cj.carpetaInv,cj.nuc,j.desjuzgado,d.desDelito,oc.nombre,oc.paterno,oc.materno,iodc.fechaDelito ";
        $orden = " oc,tbljuzgados j,   ";
        $orden.=" tblimpofedelcarpetas iodc,tblcarpetasjudiciales cj,tbltiposcarpetas tc,  ";
        $orden.=" tbldelitoscarpetas dc, tbldelitos d,tbltrataspersonascarpetas tpc ";
        $orden.=" WHERE cj.idCarpetaJudicial=oc.idCarpetaJudicial     ";
        $orden.=" AND tc.cveTipoCarpeta=cj.cveTipoCarpeta     ";
        $orden.=" AND j.cveJuzgado=cj.cveJuzgado   ";
        $orden.=" AND oc.idOfendidoCarpeta=iodc.idOfendidoCarpeta     ";
        $orden.=" AND dc.idDelitoCarpeta=iodc.idDelitoCarpeta   ";
        $orden.=" AND d.cveDelito=dc.cveDelito    ";
        $orden.=" AND oc.cveVictimaDeTrata=1 ";
        //$orden.=" AND iodc.idImpOfeDelCarpeta=tpc.idImpOfeDelCarpeta ";
        $orden.=" AND dc.cveDelito=92 "; //Antes 125 y ahora 92 que corresponde al delito de trata de personas
        $orden.=" AND oc.activo='S' ";
        $orden.=" AND oc.cveTipoPersona=1 ";
        $orden.=" AND iodc.activo='S' ";
        $orden.=" AND dc.activo='S' ";

        if ($OfendidoscarpetasDto->getNombre() != "") {
            $orden.=" AND oc.nombre like '%" . $OfendidoscarpetasDto->getNombre() . "%'";
        }
        if ($OfendidoscarpetasDto->getPaterno() != "") {
            $orden.=" AND oc.paterno like '%" . $OfendidoscarpetasDto->getPaterno() . "%'";
        }
        if ($OfendidoscarpetasDto->getMaterno() != "") {
            $orden.=" AND oc.materno like '%" . $OfendidoscarpetasDto->getMaterno() . "%'";
        }

        if ($OfendidoscarpetasDto->getFechaNacimiento() != "") {
            $orden.=" AND oc.fechaNacimiento='" . $OfendidoscarpetasDto->getFechaNacimiento() . "'";
        }
        if ($OfendidoscarpetasDto->getEdad() != "") {
            $orden.=" AND oc.edad=" . $OfendidoscarpetasDto->getEdad();
        }
        if ($OfendidoscarpetasDto->getCvePaisNacimiento() != "" and $OfendidoscarpetasDto->getCvePaisNacimiento() != "0" and $OfendidoscarpetasDto->getCvePaisNacimiento() != 'NULL') {
            $orden.=" AND oc.cvePaisNacimiento=" . $OfendidoscarpetasDto->getCvePaisNacimiento();
        }
        if ($OfendidoscarpetasDto->getEstadoNacimiento() != "") {
            $orden.=" AND oc.estadoNacimiento like '%" . $OfendidoscarpetasDto->getEstadoNacimiento() . "%'";
        }
        if ($OfendidoscarpetasDto->getMunicipioNacimiento() != "" and $OfendidoscarpetasDto->getMunicipioNacimiento() != "0") {
            $orden.=" AND oc.municipioNacimiento like '%" . $OfendidoscarpetasDto->getMunicipioNacimiento() . "%'";
        }
        if ($OfendidoscarpetasDto->getCveEstadoNacimiento() != "" and $OfendidoscarpetasDto->getCveEstadoNacimiento() != "0") {
            $orden.=" AND oc.cveEstadoNacimiento=" . $OfendidoscarpetasDto->getCveEstadoNacimiento();
        }
        if ($OfendidoscarpetasDto->getCveNivelInstruccion() != "" and $OfendidoscarpetasDto->getCveNivelInstruccion() != "0" and $OfendidoscarpetasDto->getCveNivelInstruccion() != 'NULL') {
            $orden.=" AND oc.cveNivelInstruccion=" . $OfendidoscarpetasDto->getCveNivelInstruccion();
        }

        if ($param["fechaInicio"] != "") {
            $orden.=" AND oc.fechaRegistro>= '" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . "' ";
        }
        if ($param["fechaFin"] != "") {
            $orden.=" AND oc.fechaRegistro<= '" . $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0] . "' ";
        }

        $orden .= " GROUP BY oc.idOfendidoCarpeta ";

        $OfendidoscarpetasDto = new OfendidoscarpetasDTO(); //Se mada vacíos
        //return $OfendidoscarpetasDto;//Lo imprimo como prueba
        //selectOfendidoscarpetasPag($ofendidoscarpetasDto,$proveedor = null, $orden = "", $param = null, $fields = null) {
        //ConsultarOfendidoscarpetas($ofendidoscarpetasDto,$proveedor = null, $orden = "", $param = null, $fields = null) {
        //selectOfendidosVarios($ofendidoscarpetasDto,$proveedor = null, $orden = "", $param = null, $fields = null) {
        $OfendidoscarpetasDto = $OfendidoscarpetasDao->selectOfendidosVarios($OfendidoscarpetasDto, null, $orden, null, $campos);

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

    /*     * ******************* TERMINO DE CONSULTA DE TODAS LAS TRATAS DE PERSONAS **************************************************** */

    /*     * ******************* GET PÁGINAS FEMINICIDIOS ************************************************************** */

    public function getPaginasFeminicidios($OfendidoscarpetasDto = "", $param = null) {
        //print_r($Imputados).'Imputados---';
        $OfendidoscarpetasDao = new OfendidoscarpetasDAO();

        if ($param["fechaDelitoDesde"] != "") {
            $fechaDelitoDesde = explode("/", $param["fechaDelitoDesde"]);
        }
        if ($param["fechaDelitoHasta"] != "") {
            $fechaDelitoHasta = explode("/", $param["fechaDelitoHasta"]);
        }
        $campos = " oc.idOfendidoCarpeta ";
        $orden = " oc,tbljuzgados j, ";
        $orden.=" tblimpofedelcarpetas iodc, ";
        $orden.=" tblcarpetasjudiciales cj,tbltiposcarpetas tc, tbldelitoscarpetas dc, tbldelitos d ";
        $orden.=" WHERE cj.idCarpetaJudicial=oc.idCarpetaJudicial   ";
        $orden.=" AND tc.cveTipoCarpeta=cj.cveTipoCarpeta   ";
        $orden.=" AND j.cveJuzgado=cj.cveJuzgado ";
        $orden.=" AND oc.idOfendidoCarpeta=iodc.idOfendidoCarpeta   ";
        $orden.=" AND dc.idDelitoCarpeta=iodc.idDelitoCarpeta ";
        $orden.=" AND d.cveDelito=dc.cveDelito  ";
        $orden.=" AND oc.cveVictimaDeViolenciaDeGenero=1   ";
        $orden.=" AND oc.cveTipoPersona=1  AND oc.cveGenero=2   ";
        $orden.=" AND d.cveDelito=128 "; #99 es homicidio, #128 es Feminicidio
        $orden.=" AND oc.activo='S'   ";
        $orden.=" AND iodc.activo='S'   ";
        $orden.=" AND dc.activo='S' ";

        if ($param["fechaDelitoDesde"] != "") {
            $orden.=" AND iodc.fechaDelito >= '" . $fechaDelitoDesde[2] . "-" . $fechaDelitoDesde[1] . "-" . $fechaDelitoDesde[0] . " 00:00:00' ";
        }

        if ($param["fechaDelitoHasta"] != "") {
            $orden.=" AND iodc.fechaDelito <= '" . $fechaDelitoHasta[2] . "-" . $fechaDelitoHasta[1] . "-" . $fechaDelitoHasta[0] . " 00:00:00' ";
        }
        if ($param["cveTipoCarpeta"] != "0") {
            $orden .= " AND tc.cveTipoCarpeta=" . $param["cveTipoCarpeta"];
        }
        $orden .= " GROUP BY oc.idOfendidoCarpeta ";

        $OfendidoscarpetasDto = new OfendidoscarpetasDTO(); //Se mada vacíos
        //return $OfendidoscarpetasDto;//Lo imprimo como prueba
        //selectOfendidoscarpetasPag($ofendidoscarpetasDto,$proveedor = null, $orden = "", $param = null, $fields = null)
        //ConsultarOfendidoscarpetas($ofendidoscarpetasDto,$proveedor = null, $orden = "", $param = null, $fields = null) {
        $JsonResponse = $OfendidoscarpetasDao->selectOfendidosVarios($OfendidoscarpetasDto, null, $orden, null, $campos);
        //print_r($JsonResponse).'-Contar-';
        //$numTot=$JsonResponse[0];
        $numTot = 0;
        $numTot = count($JsonResponse);
//        foreach ($JsonResponse as $total)
//        {
//            $numTot=$numTot+$total["totalCount"];
//        } 

        $Pages = (int) $numTot / $param["cantxPag"];
        $restoPages = $numTot % $param["cantxPag"];
        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);
        //echo $totPages;
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
        //print_r($json).'Jsonnn';
        return $json;
    }

    /*     * ******************* TERMINO DE GET PAGINAS**************************************************** */
    /*     * ******************* GET PÁGINAS TRATA DE PERSONAS ************************************************************** */

    public function getPaginasTrataPersonas($OfendidoscarpetasDto = "", $param = null) {
        //print_r($Imputados).'Imputados---';
        $OfendidoscarpetasDao = new OfendidoscarpetasDAO();

        if ($param["fechaInicio"] != "") {
            $fechaInicio = explode("/", $param["fechaInicio"]);
        }
        if ($param["fechaFin"] != "") {
            $fechaFin = explode("/", $param["fechaFin"]);
        }
        $campos = " oc.idOfendidoCarpeta id,iodc.idImpOfeDelCarpeta,dc.idDelitoCarpeta,tc.desTipoCarpeta,cj.numero,cj.anio,cj.carpetaInv,cj.nuc,j.desjuzgado,d.desDelito,oc.nombre,oc.paterno,oc.materno,iodc.fechaDelito ";
        $orden = " oc,tbljuzgados j,   ";
        $orden.=" tblimpofedelcarpetas iodc,tblcarpetasjudiciales cj,tbltiposcarpetas tc,  ";
        $orden.=" tbldelitoscarpetas dc, tbldelitos d";
        $orden.=" WHERE cj.idCarpetaJudicial=oc.idCarpetaJudicial     ";
        $orden.=" AND tc.cveTipoCarpeta=cj.cveTipoCarpeta     ";
        $orden.=" AND j.cveJuzgado=cj.cveJuzgado   ";
        $orden.=" AND oc.idOfendidoCarpeta=iodc.idOfendidoCarpeta     ";
        $orden.=" AND dc.idDelitoCarpeta=iodc.idDelitoCarpeta   ";
        $orden.=" AND d.cveDelito=dc.cveDelito    ";
        $orden.=" AND oc.cveVictimaDeTrata=1 ";
        //$orden.=" AND iodc.idImpOfeDelCarpeta=tpc.idImpOfeDelCarpeta ";
        $orden.=" AND dc.cveDelito=92 ";
        $orden.=" AND oc.activo='S' ";
        $orden.=" AND oc.cveTipoPersona=1 ";
        $orden.=" AND iodc.activo='S' ";
        $orden.=" AND dc.activo='S' ";

        if ($OfendidoscarpetasDto->getNombre() != "") {
            $orden.=" AND oc.nombre like '%" . $OfendidoscarpetasDto->getNombre() . "%'";
        }
        if ($OfendidoscarpetasDto->getPaterno() != "") {
            $orden.=" AND oc.paterno like '%" . $OfendidoscarpetasDto->getPaterno() . "%'";
        }
        if ($OfendidoscarpetasDto->getMaterno() != "") {
            $orden.=" AND oc.materno like '%" . $OfendidoscarpetasDto->getMaterno() . "%'";
        }

        if ($OfendidoscarpetasDto->getFechaNacimiento() != "") {
            $orden.=" AND oc.fechaNacimiento='" . $OfendidoscarpetasDto->getFechaNacimiento() . "'";
        }
        if ($OfendidoscarpetasDto->getEdad() != "") {
            $orden.=" AND oc.edad=" . $OfendidoscarpetasDto->getEdad();
        }
        if ($OfendidoscarpetasDto->getCvePaisNacimiento() != "" and $OfendidoscarpetasDto->getCvePaisNacimiento() != "0" and $OfendidoscarpetasDto->getCvePaisNacimiento() != 'NULL') {
            $orden.=" AND oc.cvePaisNacimiento=" . $OfendidoscarpetasDto->getCvePaisNacimiento();
        }
        if ($OfendidoscarpetasDto->getEstadoNacimiento() != "") {
            $orden.=" AND oc.estadoNacimiento like '%" . $OfendidoscarpetasDto->getEstadoNacimiento() . "%'";
        }
        if ($OfendidoscarpetasDto->getMunicipioNacimiento() != "" and $OfendidoscarpetasDto->getMunicipioNacimiento() != "0") {
            $orden.=" AND oc.municipioNacimiento like '%" . $OfendidoscarpetasDto->getMunicipioNacimiento() . "%'";
        }
        if ($OfendidoscarpetasDto->getCveEstadoNacimiento() != "" and $OfendidoscarpetasDto->getCveEstadoNacimiento() != "0") {
            $orden.=" AND oc.cveEstadoNacimiento=" . $OfendidoscarpetasDto->getCveEstadoNacimiento();
        }
        if ($OfendidoscarpetasDto->getCveNivelInstruccion() != "" and $OfendidoscarpetasDto->getCveNivelInstruccion() != "0" and $OfendidoscarpetasDto->getCveNivelInstruccion() != 'NULL') {
            $orden.=" AND oc.cveNivelInstruccion=" . $OfendidoscarpetasDto->getCveNivelInstruccion();
        }

        if ($param["fechaInicio"] != "") {
            $orden.=" AND oc.fechaRegistro>= '" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . "' ";
        }
        if ($param["fechaFin"] != "") {
            $orden.=" AND oc.fechaRegistro<= '" . $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0] . "' ";
        }

        $orden .= " GROUP BY oc.idOfendidoCarpeta ";
        $OfendidoscarpetasDto = new OfendidoscarpetasDTO(); //Se mada vacíos
        //return $OfendidoscarpetasDto;//Lo imprimo como prueba
        //selectOfendidoscarpetasPag($ofendidoscarpetasDto,$proveedor = null, $orden = "", $param = null, $fields = null)
        //ConsultarOfendidoscarpetas($ofendidoscarpetasDto,$proveedor = null, $orden = "", $param = null, $fields = null) {
        $JsonResponse = $OfendidoscarpetasDao->selectOfendidosVarios($OfendidoscarpetasDto, null, $orden, null, $campos);
        //print_r($JsonResponse).'-Contar-';
        //$numTot=$JsonResponse[0];
        $numTot = 0;
        $numTot = count($JsonResponse);
//        foreach ($JsonResponse as $total)
//        {
//            $numTot=$numTot+$total["totalCount"];
//        } 

        $Pages = (int) $numTot / $param["cantxPag"];
        $restoPages = $numTot % $param["cantxPag"];
        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);
        //echo $totPages;
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
        //print_r($json).'Jsonnn';
        return $json;
    }

    /*     * ******************* TERMINO DE GET PAGINAS**************************************************** */
    /*     * ******************* GET PÁGINAS HOSTIGAMIENTO ************************************************************** */

    public function getPaginasHostigamiento($OfendidoscarpetasDto = "", $param = null) {
        //print_r($Imputados).'Imputados---';
        $OfendidoscarpetasDao = new OfendidoscarpetasDAO();

        if ($param["fechaDelitoDesde"] != "") {
            $fechaDelitoDesde = explode("/", $param["fechaDelitoDesde"]);
        }
        if ($param["fechaDelitoHasta"] != "") {
            $fechaDelitoHasta = explode("/", $param["fechaDelitoHasta"]);
        }

        $campos = " COUNT(oc.idOfendidoCarpeta) AS totalCount ";
        $orden = " oc, ";
        $orden.=" tblcarpetasjudiciales cj,tbltiposcarpetas tc, ";
        $orden.=" tblimpofedelcarpetas iodc, ";
        $orden.=" tblsexualescarpetas sc, ";
        $orden.=" tblsexualesconductascarpetas scc, ";
        $orden.=" tbldetallessexualesconductascarpetas dscc, ";
        $orden.=" tbldetallesconductas dc, ";
        $orden.=" tblconductas c, ";
        $orden.=" tblmodalidades m, ";
        $orden.=" tblambitosacosos a,tbljuzgados j ";
        $orden.=" WHERE cj.idCarpetaJudicial=oc.idCarpetaJudicial ";
        $orden.=" AND tc.cveTipoCarpeta=cj.cveTipoCarpeta ";
        $orden.=" AND j.cveJuzgado=cj.cveJuzgado ";
        $orden.=" AND oc.idOfendidoCarpeta=iodc.idOfendidoCarpeta ";
        $orden.=" AND iodc.idImpOfeDelCarpeta=sc.idImpOfeDelCarpeta ";
        $orden.=" AND sc.idSexualCarpeta=scc.idSexualCarpeta ";
        $orden.=" AND scc.idSexualConductaCarpeta=dscc.idSexualConductaCarpeta ";
        $orden.=" AND dc.cveDetalleConducta=dscc.cveDetalleConducta ";
        $orden.=" AND c.cveConducta=dc.cveConducta ";
        $orden.=" AND c.cveConducta=dc.cveConducta ";
        $orden.=" AND m.cveModalidad=iodc.cveModalidad ";
        $orden.=" AND a.cveAmbitoAcoso=sc.cveAmbitoAcoso ";
        $orden.=" AND oc.cveVictimaDeAcoso=1 ";
        $orden.=" AND oc.activo='S' ";
        $orden.=" AND iodc.activo='S' ";
        $orden.=" AND sc.activo='S' ";
        $orden.=" AND scc.activo='S' ";
        $orden.=" AND dscc.activo='S' ";

        if ($param["fechaDelitoDesde"] != "") {
            $orden.=" AND iodc.fechaDelito >= '" . $fechaDelitoDesde[2] . "-" . $fechaDelitoDesde[1] . "-" . $fechaDelitoDesde[0] . " 00:00:00' ";
        }
        if ($param["fechaDelitoHasta"] != "") {
            $orden.=" AND iodc.fechaDelito <= '" . $fechaDelitoHasta[2] . "-" . $fechaDelitoHasta[1] . "-" . $fechaDelitoHasta[0] . " 00:00:00' ";
        }
        if ($param["cveTipoCarpeta"] != "0") {
            $orden .= " AND tc.cveTipoCarpeta=" . $param["cveTipoCarpeta"];
        }
//        if($param["cveModalidad"]!="0"){
//            $orden .= " AND iodc.cveModalidad=".$param["cveModalidad"];
//        }                
        if ($param["cveAmbitoAcoso"] != "0") {
            $orden .= " AND sc.cveAmbitoAcoso=" . $param["cveAmbitoAcoso"];
        }
        if ($param["cveConducta"] != "0") {
            $orden .= " AND dc.cveConducta=" . $param["cveConducta"];
        }
        if ($param["cveDetalleConducta"] != "0") {
            $orden .= " AND dc.cveDetalleConducta=" . $param["cveDetalleConducta"];
        }
        $orden.=" GROUP BY oc.idOfendidoCarpeta ";

        $OfendidoscarpetasDto = new OfendidoscarpetasDTO(); //Se mada vacíos
        $JsonResponse = $OfendidoscarpetasDao->selectOfendidosVarios($OfendidoscarpetasDto, null, $orden, null, $campos);
        $numTot = count($JsonResponse);
//        $numTot=0;
//            foreach ($JsonResponse as $total)
//            {
//                $numTot=$numTot+$total["totalCount"];
//            } 

        $Pages = (int) $numTot / $param["cantxPag"];
        $restoPages = $numTot % $param["cantxPag"];
        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);
        //echo $totPages;
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
        //print_r($json).'Jsonnn';
        return $json;
    }

    /*     * ******************* TERMINO DE GET PAGINAS**************************************************** */
    /*     * ******************* CONSULTA DE FEMINICIDIOS ************************************************************** */

    public function consultarFeminicidio($OfendidoscarpetasDto = "", $param = null) {
        //print_r($param).'Param---';
        $OfendidoscarpetasDao = new OfendidoscarpetasDAO();

        if ($param["fechaDelitoDesde"] != "") {
            $fechaDelitoDesde = explode("/", $param["fechaDelitoDesde"]);
        }
        if ($param["fechaDelitoHasta"] != "") {
            $fechaDelitoHasta = explode("/", $param["fechaDelitoHasta"]);
        }
        $campos = " oc.idOfendidoCarpeta id,tc.desTipoCarpeta,cj.numero,cj.anio,cj.carpetaInv,cj.nuc,j.desjuzgado,d.desDelito,oc.nombre,oc.paterno,oc.materno,iodc.fechaDelito,cj.carpetaInv,cj.nuc  ";
        $orden = " oc,tbljuzgados j, ";
        $orden.=" tblimpofedelcarpetas iodc, ";
        $orden.=" tblcarpetasjudiciales cj,tbltiposcarpetas tc, tbldelitoscarpetas dc, tbldelitos d ";
        $orden.=" WHERE cj.idCarpetaJudicial=oc.idCarpetaJudicial   ";
        $orden.=" AND tc.cveTipoCarpeta=cj.cveTipoCarpeta   ";
        $orden.=" AND j.cveJuzgado=cj.cveJuzgado ";
        $orden.=" AND oc.idOfendidoCarpeta=iodc.idOfendidoCarpeta   ";
        $orden.=" AND dc.idDelitoCarpeta=iodc.idDelitoCarpeta ";
        $orden.=" AND d.cveDelito=dc.cveDelito  ";
        $orden.=" AND oc.cveVictimaDeViolenciaDeGenero=1   ";
        $orden.=" AND oc.cveTipoPersona=1  AND oc.cveGenero=2   ";
        $orden.=" AND d.cveDelito=128 "; #99 es homicidio, #128 es Feminicidio
        $orden.=" AND oc.activo='S' ";
        $orden.=" AND iodc.activo='S' ";
        $orden.=" AND iodc.activo='S' ";
        $orden.=" AND dc.activo='S' ";

        if ($param["fechaDelitoDesde"] != "") {
            $orden.=" AND iodc.fechaDelito >= '" . $fechaDelitoDesde[2] . "-" . $fechaDelitoDesde[1] . "-" . $fechaDelitoDesde[0] . " 00:00:00' ";
        }

        if ($param["fechaDelitoHasta"] != "") {
            $orden.=" AND iodc.fechaDelito <= '" . $fechaDelitoHasta[2] . "-" . $fechaDelitoHasta[1] . "-" . $fechaDelitoHasta[0] . " 00:00:00' ";
        }
        if ($param["cveTipoCarpeta"] != "0") {
            $orden .= " AND tc.cveTipoCarpeta=" . $param["cveTipoCarpeta"];
        }
        $orden .= " GROUP BY oc.idOfendidoCarpeta ";

        $OfendidoscarpetasDto = new OfendidoscarpetasDTO(); //Se mada vacíos
        //return $OfendidoscarpetasDto;//Lo imprimo como prueba
        //selectOfendidoscarpetasPag($ofendidoscarpetasDto,$proveedor = null, $orden = "", $param = null, $fields = null)
        //ConsultarOfendidoscarpetas($ofendidoscarpetasDto,$proveedor = null, $orden = "", $param = null, $fields = null) {
        $OfendidoscarpetasDto = $OfendidoscarpetasDao->selectOfendidosVarios($OfendidoscarpetasDto, null, $orden, $param, $campos);
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

    /*     * ******************* TERMINO DE CONSULTA DE FEMINICIDIOS **************************************************** */

    /*     * ******************* CONSULTA DE DEL DETALLE DE UN FEMINICIDIO ************************************************************** */

    public function consultarUnFeminicidio($OfendidoscarpetasDto, $param) {
        //print_r($param);
        //$OfendidoscarpetasDto = $this->validaOfendido($OfendidoscarpetasDto);
        $OfendidoscarpetasDao = new OfendidoscarpetasDAO();
        $OfendidoscarpetasDto = $OfendidoscarpetasDao->selectOfendidoscarpetas($OfendidoscarpetasDto);
        if ($OfendidoscarpetasDto != "") {
            $json = "";
            $json .= '{"type":"OK",';
            $json .= '"totalCount":"' . count($OfendidoscarpetasDto) . '",';
            $json .= '"data":[';
            $x = 1;
            foreach ($OfendidoscarpetasDto as $Ofendido) {
                $json .= "{";
                $json .= '"idOfendidoCarpeta":' . json_encode(utf8_encode($Ofendido->getIdOfendidoCarpeta())) . ",";
                $json .= '"nombre":' . json_encode(utf8_encode($Ofendido->getNombre())) . ",";
                $json .= '"paterno":' . json_encode(utf8_encode($Ofendido->getPaterno())) . ",";
                $json .= '"materno":' . json_encode(utf8_encode($Ofendido->getMaterno())) . ",";
                $json .= '"rfc":' . json_encode(utf8_encode($Ofendido->getRfc())) . ",";
                $json .= '"curp":' . json_encode(utf8_encode($Ofendido->getCurp())) . ",";

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
                } else {
                    $Carpeta = "";
                }

                $json .= '"Carpeta":' . json_encode(utf8_encode($Carpeta)) . ",";
                $json .= '"CarpetaInv":' . json_encode(utf8_encode($carpetaInv)) . ",";
                $json .= '"nuc":' . json_encode(utf8_encode($nuc)) . ",";
                $json .= '"Juzgado":' . json_encode(utf8_encode($DesJuzgado)) . ",";

                if ($Ofendido->getCveOcupacion() != "") {
                    $OcupacionesDto = new OcupacionesDTO();
                    $OcupacionesDao = new OcupacionesDAO();
                    $OcupacionesDto->setCveOcupacion($Ofendido->getCveOcupacion());
                    $OcupacionesDto = $OcupacionesDao->selectOcupaciones($OcupacionesDto);
                    $json .= '"desocupacion":' . json_encode(utf8_encode($OcupacionesDto[0]->getDesOcupacion())) . ",";
                } else {
                    $json .= '"desocupacion": "",';
                }

                if ($Ofendido->getFechaNacimiento() != "") {
                    $tmpFecha = explode('-', $Ofendido->getFechaNacimiento());
                    $fechaNacimiento = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                    $json .= '"fechaNacimiento":' . json_encode($fechaNacimiento) . ",";
                } else {
                    $json .= '"fechaNacimiento": "",';
                }
                $json .= '"edad":' . json_encode(utf8_encode($Ofendido->getEdad())) . ",";

                if ($Ofendido->getCvePaisNacimiento() != "") {
                    $PaisesDto = new PaisesDTO();
                    $PaisesDao = new PaisesDAO();
                    $PaisesDto->setCvePais($Ofendido->getCvePaisNacimiento());
                    $PaisesDto = $PaisesDao->selectPaises($PaisesDto);
                    $json .= '"desPais":' . json_encode(utf8_encode($PaisesDto[0]->getDesPais())) . ",";
                } else {
                    $json .= '"desPais": "",';
                }

                if ($Ofendido->getCveEstadoNacimiento() != "" and $Ofendido->getCvePaisNacimiento() == "119") {
                    $EstadosDto = new EstadosDTO();
                    $EstadosDao = new EstadosDAO();
                    $EstadosDto->setCveEstado($Ofendido->getCveEstadoNacimiento());
                    $EstadosDto = $EstadosDao->selectEstados($EstadosDto);
                    $json .= '"estadoNacimiento":' . json_encode(utf8_encode($EstadosDto[0]->getDesEstado())) . ",";
                } else {
                    $json .= '"estadoNacimiento":' . json_encode(utf8_encode($Ofendido->getEstadoNacimiento())) . ",";
                }

                if ($Ofendido->getCveMunicipioNacimiento() != "" and $Ofendido->getCvePaisNacimiento() == "119") {
                    $MunicipiosDto = new MunicipiosDTO();
                    $MunicipiosDao = new MunicipiosDAO();
                    $MunicipiosDto->setCveMunicipio($Ofendido->getCveMunicipioNacimiento());
                    $MunicipiosDto = $MunicipiosDao->selectMunicipios($MunicipiosDto);
                    $json .= '"municipioNacimiento":' . json_encode(utf8_encode($MunicipiosDto[0]->getDesMunicipio())) . ",";
                } else {
                    $json .= '"municipioNacimiento":' . json_encode(utf8_encode($Ofendido->getMunicipioNacimiento())) . ",";
                }

                if ($Ofendido->getCveEstadoCivil() != "") {
                    $EstadosCivilesDto = new EstadoscivilesDTO();
                    $EstadosCivilesDao = new EstadoscivilesDAO();
                    $EstadosCivilesDto->setCveEstadoCivil($Ofendido->getCveEstadoCivil());
                    $EstadosCivilesDto = $EstadosCivilesDao->selectEstadosciviles($EstadosCivilesDto);
                    $json .= '"desEstadoCivil":' . json_encode(utf8_encode($EstadosCivilesDto[0]->getDesEstadoCivil())) . ",";
                } else {
                    $json .= '"desEstadoCivil": "",';
                }

                if ($Ofendido->getCveOrdenProteccion() != "") {
                    $OrdenProDto = new OrdenesproteccionesDTO();
                    $OrdenProDao = new OrdenesproteccionesDAO();
                    $OrdenProDto->setCveOrdenProteccion($Ofendido->getCveOrdenProteccion());
                    $OrdenProDto = $OrdenProDao->selectOrdenesprotecciones($OrdenProDto);
                    $json .= '"ordenpro":' . json_encode($OrdenProDto[0]->getDesOrdenProteccion()) . ",";
                } else {
                    $json .= '"ordenpro": "",';
                }

                if ($Ofendido->getCveEstadoPsicofisico() != "") {
                    $EdoPsicofisicoDto = new EstadospsicofisicosDTO();
                    $EdoPsicofisicoDao = new EstadospsicofisicosDAO();
                    $EdoPsicofisicoDto->setCveEstadoPsicofisico($Ofendido->getCveEstadoPsicofisico());
                    $EdoPsicofisicoDto = $EdoPsicofisicoDao->selectEstadospsicofisicos($EdoPsicofisicoDto);
                    $json .= '"edopsico":' . json_encode(utf8_encode($EdoPsicofisicoDto[0]->getDesEstadoPsicofisico())) . ",";
                } else {
                    $json .= '"edopsico": "",';
                }

                $ImpofedelcarpetasDto = new ImpofedelcarpetasDTO();
                $ImpofedelcarpetasDao = new ImpofedelcarpetasDAO();
                $ImpofedelcarpetasDto->setIdOfendidoCarpeta($Ofendido->getIdOfendidoCarpeta());
                $ImpofedelcarpetasDto->setActivo('S');
                $ImpofedelcarpetasDto = $ImpofedelcarpetasDao->selectImpofedelcarpetas($ImpofedelcarpetasDto);
                //print_r($ImpofedelcarpetasDto);

                if ($ImpofedelcarpetasDto != "") {//echo"entra";
                    $y = 1;
                    $json .= '"OfendidoDetalle": [';
                    foreach ($ImpofedelcarpetasDto as $OfendidoDelito) {

                        $DelitosCarpetasDto = new DelitoscarpetasDTO();
                        $DelitosCarpetasDao = new DelitoscarpetasDAO();
                        $DelitosCarpetasDto->setIdDelitoCarpeta($OfendidoDelito->getIdDelitoCarpeta());
                        $DelitosCarpetasDto->setCveDelito(128);
                        $DelitosCarpetasDto->setActivo('S');
                        $DelitosCarpetasDto = $DelitosCarpetasDao->selectDelitoscarpetas($DelitosCarpetasDto);

                        if ($DelitosCarpetasDto != "") {
                            if ($y <= count($ImpofedelcarpetasDto) and $y > 1) {
                                $json .= '},';
                            }
                            $json .= '{';
                            if ($OfendidoDelito->getFechaDelito() != "") {
                                //echo $ImpofedelcarpetasDto[0]->getFechaDelito()."-- Fecha --";
                                $tmpFecha = explode(' ', $OfendidoDelito->getFechaDelito());
                                //echo $tmpFecha[0].'Fecha';
                                $fecha = explode('-', $tmpFecha[0]);
                                //echo"aqui";
                                $fechaDelito = $fecha[2] . '/' . $fecha[1] . '/' . $fecha[0];
                                //echo $fechaDelito.'-fecha-';
                                $json .= '"fechaDelito":' . json_encode($fechaDelito) . ",";
                            } else {
                                $json .= '"fechaDelito": "",';
                            }

                            $ModalidadesDto = new ModalidadesDTO();
                            $ModalidadesDao = new ModalidadesDAO();
                            $ModalidadesDto->setCveModalidad($OfendidoDelito->getCveModalidad());
                            $ModalidadesDto = $ModalidadesDao->selectModalidades($ModalidadesDto);
                            //print_r($ModalidadesDto).'-Mod-';
                            $json .= '"modalidad":' . json_encode(utf8_encode($ModalidadesDto[0]->getDesModalidad())) . ",";

                            $ComisionesDto = new ComisionesDTO();
                            $ComisionesDao = new ComisionesDAO();
                            $ComisionesDto->setCveComision($OfendidoDelito->getCveComision());
                            $ComisionesDto = $ComisionesDao->selectComisiones($ComisionesDto);
                            $json .= '"comision":' . json_encode(utf8_encode($ComisionesDto[0]->getDesComision())) . ",";

                            $ClasificacionesdelitosDto = new ClasificacionesdelitosordenDTO();
                            $ClasificacionesdelitosDao = new ClasificacionesdelitosordenDAO();
                            $ClasificacionesdelitosDto->setCveClasificacionDelitoOrden($OfendidoDelito->getCveClasificacionDelitoOrden());
                            $ClasificacionesdelitosDto = $ClasificacionesdelitosDao->selectClasificacionesdelitosorden($ClasificacionesdelitosDto);
                            $json .= '"clasificacion":' . json_encode(utf8_encode($ClasificacionesdelitosDto[0]->getDesClasificacionDelitoOrden())) . ",";

                            $FormasaccionesDto = new FormasaccionesDTO();
                            $FormasaccionesDao = new FormasaccionesDAO();
                            $FormasaccionesDto->setCveFormaAccion($OfendidoDelito->getCveFormaAccion());
                            $FormasaccionesDto = $FormasaccionesDao->selectFormasacciones($FormasaccionesDto);
                            $json .= '"formaaccion":' . json_encode(utf8_encode($FormasaccionesDto[0]->getDesFormaAccion())) . ",";

                            $ImputadoDto = new ImputadoscarpetasDTO();
                            $ImputadoDao = new ImputadoscarpetasDAO();
                            $ImputadoDto->setIdOfendidoCarpeta($OfendidoDelito->getIdOfendidoCarpeta());
                            $ImputadoDto = $ImputadoDao->selectImputadoscarpetas($ImputadoDto);

                            if ($ImputadoDto[0]->getCveTipoPersona() == 1) {
                                $nombreImp = $ImputadoDto[0]->getNombre() . ' ' . $ImputadoDto[0]->getPaterno() . ' ' . $ImputadoDto[0]->getMaterno();
                                $json .= '"nombreImp":' . json_encode(utf8_encode($nombreImp));
                            } else {
                                $json .= '"nombreImp":' . json_encode(utf8_encode($ImputadoDto[0]->getNombreMoral()));
                            }
                            //if ($y <= count($ImpofedelcarpetasDto)) {
                            //$json .= '}';
                            //$json .= ",";
                            //}
                            $y++;
                        }
                    }
                }
                $json .= "}";
                $json .= ']';
            }
            $json .= "}]}";
            return $json;
            echo"Json:---";
            echo $json;
        } else {
            return "";
        }
    }

    /*     * ******************* TERMINO DE CONSULTA DE FEMINICIDIO**************************************************** */
    /*     * ******************* CONSULTA DE DEL DETALLE DE UN FEMINICIDIO ************************************************************** */

    public function consultarUnHostigamiento($OfendidoscarpetasDto, $param) {
        //print_r($param);
        //$OfendidoscarpetasDto = $this->validaOfendido($OfendidoscarpetasDto);
        $OfendidoscarpetasDao = new OfendidoscarpetasDAO();
        $OfendidoscarpetasDto = $OfendidoscarpetasDao->selectOfendidoscarpetas($OfendidoscarpetasDto);
        if ($OfendidoscarpetasDto != "") {
            $json = "";
            $json .= '{"type":"OK",';
            $json .= '"totalCount":"' . count($OfendidoscarpetasDto) . '",';
            $json .= '"data":[';
            $x = 1;
            foreach ($OfendidoscarpetasDto as $Ofendido) {
                $json .= "{";
                $json .= '"idOfendidoCarpeta":' . json_encode(utf8_encode($Ofendido->getIdOfendidoCarpeta())) . ",";
                $json .= '"nombre":' . json_encode($Ofendido->getNombre()) . ",";
                $json .= '"paterno":' . json_encode($Ofendido->getPaterno()) . ",";
                $json .= '"materno":' . json_encode($Ofendido->getMaterno()) . ",";
                $json .= '"rfc":' . json_encode(utf8_encode($Ofendido->getRfc())) . ",";
                $json .= '"curp":' . json_encode(utf8_encode($Ofendido->getCurp())) . ",";

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
                } else {
                    $Carpeta = "";
                }

                $json .= '"Carpeta":' . json_encode(utf8_encode($Carpeta)) . ",";
                $json .= '"CarpetaInv":' . json_encode(utf8_encode($carpetaInv)) . ",";
                $json .= '"nuc":' . json_encode(utf8_encode($nuc)) . ",";
                $json .= '"Juzgado":' . json_encode(utf8_encode($DesJuzgado)) . ",";

                if ($Ofendido->getCveOcupacion() != "") {
                    $OcupacionesDto = new OcupacionesDTO();
                    $OcupacionesDao = new OcupacionesDAO();
                    $OcupacionesDto->setCveOcupacion($Ofendido->getCveOcupacion());
                    $OcupacionesDto = $OcupacionesDao->selectOcupaciones($OcupacionesDto);
                    $json .= '"desocupacion":' . json_encode(utf8_encode($OcupacionesDto[0]->getDesOcupacion())) . ",";
                } else {
                    $json .= '"desocupacion": "",';
                }

                if ($Ofendido->getFechaNacimiento() != "") {
                    $tmpFecha = explode('-', $Ofendido->getFechaNacimiento());
                    $fechaNacimiento = $tmpFecha[2] . '/' . $tmpFecha[1] . '/' . $tmpFecha[0];
                    $json .= '"fechaNacimiento":' . json_encode($fechaNacimiento) . ",";
                } else {
                    $json .= '"fechaNacimiento": "",';
                }
                $json .= '"edad":' . json_encode(utf8_encode($Ofendido->getEdad())) . ",";

                if ($Ofendido->getCvePaisNacimiento() != "") {
                    $PaisesDto = new PaisesDTO();
                    $PaisesDao = new PaisesDAO();
                    $PaisesDto->setCvePais($Ofendido->getCvePaisNacimiento());
                    $PaisesDto = $PaisesDao->selectPaises($PaisesDto);
                    $json .= '"desPais":' . json_encode(utf8_encode($PaisesDto[0]->getDesPais())) . ",";
                } else {
                    $json .= '"desPais": "",';
                }

                if ($Ofendido->getCveEstadoNacimiento() != "" and $Ofendido->getCvePaisNacimiento() == "119") {
                    $EstadosDto = new EstadosDTO();
                    $EstadosDao = new EstadosDAO();
                    $EstadosDto->setCveEstado($Ofendido->getCveEstadoNacimiento());
                    $EstadosDto = $EstadosDao->selectEstados($EstadosDto);
                    $json .= '"estadoNacimiento":' . json_encode(utf8_encode($EstadosDto[0]->getDesEstado())) . ",";
                } else {
                    $json .= '"estadoNacimiento":' . json_encode(utf8_encode($Ofendido->getEstadoNacimiento())) . ",";
                }

                if ($Ofendido->getCveMunicipioNacimiento() != "" and $Ofendido->getCvePaisNacimiento() == "119") {
                    $MunicipiosDto = new MunicipiosDTO();
                    $MunicipiosDao = new MunicipiosDAO();
                    $MunicipiosDto->setCveMunicipio($Ofendido->getCveMunicipioNacimiento());
                    $MunicipiosDto = $MunicipiosDao->selectMunicipios($MunicipiosDto);
                    $json .= '"municipioNacimiento":' . json_encode(utf8_encode($MunicipiosDto[0]->getDesMunicipio())) . ",";
                } else {
                    $json .= '"municipioNacimiento":' . json_encode(utf8_encode($Ofendido->getMunicipioNacimiento())) . ",";
                }

                if ($Ofendido->getCveEstadoCivil() != "") {
                    $EstadosCivilesDto = new EstadoscivilesDTO();
                    $EstadosCivilesDao = new EstadoscivilesDAO();
                    $EstadosCivilesDto->setCveEstadoCivil($Ofendido->getCveEstadoCivil());
                    $EstadosCivilesDto = $EstadosCivilesDao->selectEstadosciviles($EstadosCivilesDto);
                    $json .= '"desEstadoCivil":' . json_encode(utf8_encode($EstadosCivilesDto[0]->getDesEstadoCivil())) . ",";
                } else {
                    $json .= '"desEstadoCivil": "",';
                }

                if ($Ofendido->getCveOrdenProteccion() != "") {
                    $OrdenProDto = new OrdenesproteccionesDTO();
                    $OrdenProDao = new OrdenesproteccionesDAO();
                    $OrdenProDto->setCveOrdenProteccion($Ofendido->getCveOrdenProteccion());
                    $OrdenProDto = $OrdenProDao->selectOrdenesprotecciones($OrdenProDto);
                    $json .= '"ordenpro":' . json_encode($OrdenProDto[0]->getDesOrdenProteccion()) . ",";
                } else {
                    $json .= '"ordenpro": "",';
                }

                if ($Ofendido->getCveEstadoPsicofisico() != "") {
                    $EdoPsicofisicoDto = new EstadospsicofisicosDTO();
                    $EdoPsicofisicoDao = new EstadospsicofisicosDAO();
                    $EdoPsicofisicoDto->setCveEstadoPsicofisico($Ofendido->getCveEstadoPsicofisico());
                    $EdoPsicofisicoDto = $EdoPsicofisicoDao->selectEstadospsicofisicos($EdoPsicofisicoDto);
                    $json .= '"edopsico":' . json_encode(utf8_encode($EdoPsicofisicoDto[0]->getDesEstadoPsicofisico())) . "";
                } else {
                    $json .= '"edopsico": ""';
                }

//                $ImpofedelcarpetasDto = new ImpofedelcarpetasDTO();
//                $ImpofedelcarpetasDao = new ImpofedelcarpetasDAO();
//                $ImpofedelcarpetasDto->setIdOfendidoCarpeta($Ofendido->getIdOfendidoCarpeta());
//                $ImpofedelcarpetasDto->setActivo('S');
//                $ImpofedelcarpetasDto = $ImpofedelcarpetasDao->selectImpofedelcarpetas($ImpofedelcarpetasDto);
//                print_r($ImpofedelcarpetasDto);
//                
//                if($ImpofedelcarpetasDto!=""){//echo"entra";
//                $y = 1;
//                //$json .= '"OfendidoDetalle": [';    
//                //foreach ($ImpofedelcarpetasDto as $OfendidoDelito) { 
//                    
//                    $DelitosCarpetasDto = new DelitoscarpetasDTO();
//                    $DelitosCarpetasDao = new DelitoscarpetasDAO();
//                    $DelitosCarpetasDto->setIdDelitoCarpeta($ImpofedelcarpetasDto->getIdDelitoCarpeta());
//                    $DelitosCarpetasDto->setCveDelito($param["cveDelito"]);
//                    $DelitosCarpetasDto->setActivo('S');
//                    $DelitosCarpetasDto = $DelitosCarpetasDao->selectDelitoscarpetas($DelitosCarpetasDto);
//
//                    if($DelitosCarpetasDto!=""){
//                    // if($y<=count($ImpofedelcarpetasDto) and $y>1) {$json .= '},';}
//                    //$json .= '{';
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
//                    $ImputadoDto = new ImputadoscarpetasDTO();
//                    $ImputadoDao = new ImputadoscarpetasDAO();
//                    $ImputadoDto->setIdOfendidoCarpeta($Ofendido->getIdOfendidoCarpeta());
//                    $ImputadoDto = $ImputadoDao->selectImputadoscarpetas($ImputadoDto);
//                    
//                    if($ImputadoDto[0]->getCveTipoPersona()==1){                        
//                    $nombreImp=$ImputadoDto[0]->getNombre().' '.$ImputadoDto[0]->getPaterno().' '.$ImputadoDto[0]->getMaterno();
//                    $json .= '"nombreImp":' . json_encode(utf8_encode($nombreImp));
//                    }
//                    else
//                    {
//                    $json .= '"nombreImp":' . json_encode(utf8_encode($ImputadoDto[0]->getNombreMoral()));
//                    }
//                    //if ($y <= count($ImpofedelcarpetasDto)) {
//                        //$json .= '}';
//                        //$json .= ",";
//                    //}
//                    //$y++;
//                   // }
//                }
//            }   
                $json .= "}";
                $json .= ']}';
            }
            return $json;
            echo"Json:---";
            echo $json;
        } else {
            return "";
        }
    }

    /*     * ******************* TERMINO DE CONSULTA DE FEMINICIDIO**************************************************** */
    /*     * ******************* CONSULTA DE HOSTIGAMIENTOS ************************************************************** */

    public function consultarHostigamiento($OfendidoscarpetasDto = "", $param = null) {
        //print_r($param).'Param---';
        $OfendidoscarpetasDao = new OfendidoscarpetasDAO();

        if ($param["fechaDelitoDesde"] != "") {
            $fechaDelitoDesde = explode("/", $param["fechaDelitoDesde"]);
        }
        if ($param["fechaDelitoHasta"] != "") {
            $fechaDelitoHasta = explode("/", $param["fechaDelitoHasta"]);
        }

        $campos = " oc.idOfendidoCarpeta id,tc.cveTipoCarpeta,tc.desTipoCarpeta,cj.numero,cj.anio,cj.carpetaInv,cj.nuc,j.desjuzgado,";
        $campos.="CONVERT(CAST(CONVERT(oc.nombre USING latin1) AS BINARY) USING utf8) AS nombre, ";
        $campos.="CONVERT(CAST(CONVERT(oc.paterno USING latin1) AS BINARY) USING utf8) AS paterno, ";
        $campos.="CONVERT(CAST(CONVERT(oc.materno USING latin1) AS BINARY) USING utf8) AS materno, ";
        $campos.="dc.desDetalleConducta,iodc.fechaDelito,c.desConducta,m.desModalidad,a.desAmbitoAcoso ";

        $orden = " oc, ";
        $orden.=" tblcarpetasjudiciales cj,tbltiposcarpetas tc, ";
        $orden.=" tblimpofedelcarpetas iodc, ";
        $orden.=" tblsexualescarpetas sc, ";
        $orden.=" tblsexualesconductascarpetas scc, ";
        $orden.=" tbldetallessexualesconductascarpetas dscc, ";
        $orden.=" tbldetallesconductas dc, ";
        $orden.=" tblconductas c, ";
        $orden.=" tblmodalidades m, ";
        $orden.=" tblambitosacosos a,tbljuzgados j ";
        $orden.=" WHERE cj.idCarpetaJudicial=oc.idCarpetaJudicial ";
        $orden.=" AND tc.cveTipoCarpeta=cj.cveTipoCarpeta ";
        $orden.=" AND j.cveJuzgado=cj.cveJuzgado ";
        $orden.=" AND oc.idOfendidoCarpeta=iodc.idOfendidoCarpeta ";
        $orden.=" AND iodc.idImpOfeDelCarpeta=sc.idImpOfeDelCarpeta ";
        $orden.=" AND sc.idSexualCarpeta=scc.idSexualCarpeta ";
        $orden.=" AND scc.idSexualConductaCarpeta=dscc.idSexualConductaCarpeta ";
        $orden.=" AND dc.cveDetalleConducta=dscc.cveDetalleConducta ";
        $orden.=" AND c.cveConducta=dc.cveConducta ";
        $orden.=" AND c.cveConducta=dc.cveConducta ";
        $orden.=" AND m.cveModalidad=iodc.cveModalidad ";
        $orden.=" AND a.cveAmbitoAcoso=sc.cveAmbitoAcoso ";
        $orden.=" AND oc.cveVictimaDeAcoso=1 ";
        $orden.=" AND oc.activo='S' ";
        $orden.=" AND iodc.activo='S' ";
        $orden.=" AND sc.activo='S' ";
        $orden.=" AND scc.activo='S' ";
        $orden.=" AND dscc.activo='S' ";

        if ($param["fechaDelitoDesde"] != "") {
            $orden.=" AND iodc.fechaDelito >= '" . $fechaDelitoDesde[2] . "-" . $fechaDelitoDesde[1] . "-" . $fechaDelitoDesde[0] . " 00:00:00' ";
        }
        if ($param["fechaDelitoHasta"] != "") {
            $orden.=" AND iodc.fechaDelito <= '" . $fechaDelitoHasta[2] . "-" . $fechaDelitoHasta[1] . "-" . $fechaDelitoHasta[0] . " 00:00:00' ";
        }
        if ($param["cveTipoCarpeta"] != "0") {
            $orden .= " AND tc.cveTipoCarpeta=" . $param["cveTipoCarpeta"];
        }
//        if($param["cveModalidad"]!="0"){
//            $orden .= " AND iodc.cveModalidad=".$param["cveModalidad"];
//        }                
        if ($param["cveAmbitoAcoso"] != "0") {
            $orden .= " AND sc.cveAmbitoAcoso=" . $param["cveAmbitoAcoso"];
        }
        if ($param["cveConducta"] != "0") {
            $orden .= " AND dc.cveConducta=" . $param["cveConducta"];
        }
        if ($param["cveDetalleConducta"] != "0") {
            $orden .= " AND dc.cveDetalleConducta=" . $param["cveDetalleConducta"];
        }
        $orden.=" ORDER BY oc.idOfendidoCarpeta ";
        $OfendidoscarpetasDto = new OfendidoscarpetasDTO(); //Se mada vacíos
        //return $OfendidoscarpetasDto;//Lo imprimo como prueba
        //selectOfendidoscarpetasPag($ofendidoscarpetasDto,$proveedor = null, $orden = "", $param = null, $fields = null)
        //ConsultarOfendidoscarpetas($ofendidoscarpetasDto,$proveedor = null, $orden = "", $param = null, $fields = null) {
        $OfendidoscarpetasDto = $OfendidoscarpetasDao->selectOfendidosVarios($OfendidoscarpetasDto, null, $orden, $param, $campos);
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

    /*     * ******************* TERMINO DE CONSULTA DE FEMINICIDIOS **************************************************** */
    
    /*
     * Metodo para copiar datos personales de un ofendido correspondiente a una causa
     * orgien hacia un ofendidos correspondiente a una causa destino indicado por el usuario
     * se copiaran datos generales asi como datos de Domicilios, Telefonos, Defensores
     * Tutores y Nacionalidades
     */
    public function copiarDatosPersona($ofendidoscarpetasDto, $param, $proveedor = null) {
        //var_dump($ofendidoscarpetasDto);
        //print_r($param);
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
        $logger = new Logger("/../../logs/", "OfendidosCarpetas");
        $logger->w_onError("**********COMIENZA EL PROCESO DE COPIA DE DATOS PERSONALES DE UN OFENDIDO ORIGEN HACIA UN OFENDIDO DESTINO**********");
        $ofendidoscarpetasDao = new OfendidoscarpetasDAO();
        $carpetasJudicialesDao = new CarpetasjudicialesDAO();
        $datos = json_decode($param['idOfendidos']);
        //print_r($datos);
        for ( $x = 0; $x < count($datos); $x++ ) {
            //print_r($datos[$x]->idOfendidoOrigen);
            //print_r($datos[$x]->idOfendidoDestino);
            if ( (int)$datos[$x]->idOfendidoDestino == 0 ) {
                $logger->w_onError("**********EL ID DEL OFENDIDO DESTINO ES 0, LO QUE SIGNIFICA QUE SE VA GENERAR UN NUEVO REGISTRO");
                /*
                 * Se trata de un registro nuevo, se copiaran los datos del ofendido origen
                 * en la carpeta destino seleccionada por el usuairo
                 */
                $logger->w_onError("**********SE CONSULTAN LOS DATOS DEL OFENDIDO ORIGEN PARA REALIZAR LA COPIA DE DATOS");
                $ofendidoCopia = new OfendidoscarpetasDTO();
                $ofendidoCopia->setIdOfendidoCarpeta($datos[$x]->idOfendidoOrigen);
                $ofendidoCopia = $ofendidoscarpetasDao->selectOfendidoscarpetas($ofendidoCopia, "", $this->proveedor);
                if ( $ofendidoCopia != "" ) {
                    $logger->w_onError("**********SE ENCUENTRAN LOS DATOS DEL OFENDIDO ORIGEN, ID DEL OFENDIDO: " . $ofendidoCopia[0]->getIdOfendidoCarpeta());
                    //Seleccionar los datos de la carpeta destino
                    $carpetaDestinoDto = new CarpetasjudicialesDTO();
                    $carpetaDestinoDto->setIdCarpetaJudicial($param['idCarpetaJudicialDestino']);
                    
                    $rsCarpetaDestino = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetaDestinoDto, "", $this->proveedor);
                    $logger->w_onError("**********SE CONSULTAN LOS DATOS DE LA CARPETA JUDICIAL DESTINO EN DONDE SE INSERTARA EL REGISTRO DEL OFENDIDO");
                    if ( $rsCarpetaDestino != "" ) {
                        $logger->w_onError("**********SE ENCUENTRAN LOS DATOS DE LA CARPETA JUDICIAL DESTINO, ID DE LA CARPETA JUDICIAL: " . $rsCarpetaDestino[0]->getIdCarpetaJudicial());
                        $logger->w_onError("**********CONSULTAR SI LOS DATOS DEL OFENDIDO DESTINO YA SE ENCUENTRAN EN LA CARPETA JUDICIAL DESTINO: " . $rsCarpetaDestino[0]->getIdCarpetaJudicial());
                        $logger->w_onError("**********NOMBRE: " . $ofendidoCopia[0]->getNombre());
                        $logger->w_onError("**********PATERNO: " . $ofendidoCopia[0]->getPaterno());
                        $logger->w_onError("**********MATERNO: " . $ofendidoCopia[0]->getMaterno());
                        $tmp = new OfendidoscarpetasDTO();
                        if ( (int)$ofendidoCopia[0]->getCveTipoPersona() == 1 ) {
                            $tmp->setNombre($ofendidoCopia[0]->getNombre());
                            $tmp->setPaterno($ofendidoCopia[0]->getPaterno());
                            $tmp->setMaterno($ofendidoCopia[0]->getMaterno());
                        } else {
                            $tmp->setNombreMoral($ofendidoCopia[0]->getNombreMoral());
                        }
                        $tmp->setActivo('S');
                        $tmp->setIdCarpetaJudicial($param['idCarpetaJudicialDestino']);
                        $tmp = $ofendidoscarpetasDao->selectOfendidoscarpetas($tmp, "", $this->proveedor);
                        if ( $tmp == "" ) {
                            $logger->w_onError("**********EL OFENDIDO NO SE ENCUENTRA REGISTRADO EN LA CARPETA JUDICIAL DESTINO, SE PROCEDE A INSERTARLO");
                            $ofendidoDestinoDto = new OfendidoscarpetasDTO();
                            $ofendidoDestinoDto = clone $ofendidoCopia[0];
                            $ofendidoDestinoDto->setIdOfendidoCarpeta("");
                            $ofendidoDestinoDto->setIdCarpetaJudicial($rsCarpetaDestino[0]->getIdCarpetaJudicial());

                            $ofendidoDestinoDto = $ofendidoscarpetasDao->insertOfendidoscarpetas($ofendidoDestinoDto, $this->proveedor);
                            if ( $ofendidoDestinoDto == "" ) {
                                $logger->w_onError("**********OCURRIO UN ERROR AL INSERTAR LOS DATOS DEL OFENDIDO DESTINO");
                                $logger->w_onError("**********ID CARPETA JUDICIAL DESTINO: " . $rsCarpetaDestino[0]->getIdCarpetaJudicial());
                                $logger->w_onError("**********ID OFENDIDO ORIGEN: " . $datos[$x]->idOfendidoOrigen);

                                $error = true;
                                $msg[] = array(utf8_encode('Ocurrió un error al registrar al ofendido destino'));
                            } else {
                                $logger->w_onError("**********SE INSERTA EL REGISTRO DEL OFENDIDO DESTINO, ID DE OFENDIDO: " . $ofendidoDestinoDto[0]->getIdOfendidoCarpeta());
                                $logger->w_onError("**********ID CARPETA JUDICIAL DESTNO: " . $rsCarpetaDestino[0]->getIdCarpetaJudicial());
                                $logger->w_onError("**********ID OFENDIDO ORIGEN: " . $datos[$x]->idOfendidoOrigen);
                                $logger->w_onError("**********NOMBRE: " . $ofendidoDestinoDto[0]->getNombre());
                                $logger->w_onError("**********PATERNO: " . $ofendidoDestinoDto[0]->getPaterno());
                                $logger->w_onError("**********MATERNO: " . $ofendidoDestinoDto[0]->getMaterno());
                                $bitacora = new BitacoramovimientosController();
                                $bitacoraOfendido = $bitacora->agregar(189, 'INSERCION tblofendidoscarpetas', 'txt', serialize($ofendidoDestinoDto[0]), '', $this->proveedor);

                                if (!count($bitacoraOfendido)) {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurrió un error al guardar en bitacora la acción realizada por el usuario'));
                                }
                            }
                        } else {
                            $error = true;
                            if ( (int)$ofendidoCopia[0]->getCveTipoPersona() == 1 ) {
                                $mensajeError = "El ofendido: " . utf8_encode($ofendidoCopia[0]->getNombre()) . " " . utf8_encode($ofendidoCopia[0]->getPaterno()) . " " . utf8_encode($ofendidoCopia[0]->getMaterno()) . " ya se encuentra registrado en la carpeta judicial destino, favor de verificar";
                            } else {
                                $mensajeError = "El ofendido: " . utf8_encode($ofendidoCopia[0]->getNombreMoral()) . " ya se encuentra registrado en la carpeta judicial destino, favor de verificar";
                            }
                            $msg[] = array($mensajeError);
                            $logger->w_onError("**********EL OFENDIDO YA SE ENCUENTRA REGISTRADO EN LA CARPETA JUDICIAL DESTINO");
                            $logger->w_onError("**********ID OFENDIDO: " . $tmp[0]->getIdOfendidoCarpeta());
                            $logger->w_onError("**********ID CARPETA JUDICIAL: " . $tmp[0]->getIdCarpetaJudicial());
                            $logger->w_onError("**********NOMBRE: " . $tmp[0]->getNombre());
                            $logger->w_onError("**********PATERNO: " . $tmp[0]->getPaterno());
                            $logger->w_onError("**********MATERNO: " . $tmp[0]->getMaterno());
                        }
                        
                    } else {
                        $error = true;
                        $msg[] = array(utf8_encode('Ocurrió un error al consultar los datos de la carpeta judicial destino'));
                        $logger->w_onError("**********OCURRIO UN ERROR AL CONSULTAR LOS DATOS DE LA CARPETA JUDICIAL DESTINO");
                    }
                } else {
                    $error = true;
                    $msg[] = array(utf8_encode('Ocurrió un error al consultar los datos del ofendido origen'));
                    $logger->w_onError("**********OCURRIO UN ERROR AL CONSULTAR LOS DATOS DEL OFENDIDO ORIGEN");
                }
            } else {
                /*
                 * Consultar los datos generales del ofendido destino
                 */
                $logger->w_onError("**********CONSULTAR LOS DATOS DEL OFENDIDO DESTINO");
                $ofendidoDestinoDto = new OfendidoscarpetasDTO();
                $ofendidoDestinoDto->setIdOfendidoCarpeta($datos[$x]->idOfendidoDestino);
                $ofendidoDestinoDto->setIdCarpetaJudicial($param['idCarpetaJudicialDestino']);
                $ofendidoDestinoDto->setActivo('S');
                $ofendidoDestinoDto = $ofendidoscarpetasDao->selectOfendidoscarpetas($ofendidoDestinoDto, "", $this->proveedor);
                if ( $ofendidoDestinoDto == "" ) {
                    $error = true;
                    $msg[] = array('No se encontraron los datos del ofendido destino, favor de verificar');
                    $logger->w_onError("**********NO SE ENCONTRARON DATOS DEL OFENDIDO DESTINO");
                } else {
                    $logger->w_onError("**********ID DEL OFENDIDO DESTINO: " . $ofendidoDestinoDto[0]->getIdOfendidoCarpeta());
                }
            }
            
            /*
             * Consultar los datos generales del ofendido origen
             */
            if ( !$error ) {
                $logger->w_onError("**********CONSULTAR DATOS DEL OFENDIDO ORIGEN");
                $ofendidoscarpetasDto = new OfendidoscarpetasDTO();
                $ofendidoscarpetasDto->setIdOfendidoCarpeta($datos[$x]->idOfendidoOrigen);
                $ofendidoscarpetasDto->setActivo('S');
                $ofendidoscarpetasDto = $ofendidoscarpetasDao->selectOfendidoscarpetas($ofendidoscarpetasDto, "", $this->proveedor);
                if ( $ofendidoscarpetasDto != "" ) {
                    $error = false;
                    $logger->w_onError("**********ID DEL OFENDIDO ORIGEN: " . $ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());

                    /*
                     * Copiar datos de domicilios hacia el ofendido destino
                     */
                    $logger->w_onError("**********CONSULTAR LOS DATOS DE DOMICILIOS DEL OFENDIDO: " . $ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());
                    $domiciliosOfendidosCarpetasDto = new DomiciliosofendidoscarpetasDTO();
                    $domiciliosOfendidosCarpetasDao = new DomiciliosofendidoscarpetasDAO();
                    $domiciliosOfendidosCarpetasDto->setIdOfendidoCarpeta($ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());
                    $domiciliosOfendidosCarpetasDto->setActivo('S');
                    $domiciliosOfendidosCarpetasDto = $domiciliosOfendidosCarpetasDao->selectDomiciliosofendidoscarpetas($domiciliosOfendidosCarpetasDto, "", $this->proveedor);
                    if ( $domiciliosOfendidosCarpetasDto != "" ) {
                        foreach ( $domiciliosOfendidosCarpetasDto as $domicilio ) {
                            $domicilioTmp = new DomiciliosofendidoscarpetasDTO();
                            $domicilioTmp = clone $domicilio;
                            $domicilioTmp->setIdDomicilioOfendidoCarpeta("");
                            $domicilioTmp->setIdOfendidoCarpeta($ofendidoDestinoDto[0]->getIdOfendidoCarpeta());
                            $domicilioTmp = $domiciliosOfendidosCarpetasDao->insertDomiciliosofendidoscarpetas($domicilioTmp, $this->proveedor);
                            if ( $domicilioTmp != "" ) {
                                $error = false;
                                $logger->w_onError("**********SE INSERTA EL DOMICILIO PARA EL OFENDIDO: " . $ofendidoDestinoDto[0]->getIdOfendidoCarpeta() . ", DOMICILIO INSERTADO: " . $domicilioTmp[0]->getIdDomicilioOfendidoCarpeta());
                            } else {
                                $error = true;
                                $msg[] = array(utf8_encode('Ocurrió un error al copiar datos de domicilios del ofendido origen'));
                                $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR EL DOMICILIO: " . $domicilio->getIdDomicilioOfendidoCarpeta());
                            }
                            if ( $error ) {
                                break;
                            }
                        }
                    } else {
                        $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS ACTIVOS DE DOMICILIOS PARA EL OFENDIDO ORIGEN: " . $ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());
                    }

                    /*
                     * Copiar datos de telefonos hacia el ofendido destino
                     */
                    if ( !$error ) {
                        $logger->w_onError("**********CONSULTAR LOS DATOS DE TELEFONOS DEL OFENDIDO: " . $ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());
                        $telefonosOfendidosCarpetasDto = new TelefonosofendidoscarpetasDTO();
                        $telefonosOfendidosCarpetasDao = new TelefonosofendidoscarpetasDAO();
                        $telefonosOfendidosCarpetasDto->setIdOfendidoCarpeta($ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());
                        $telefonosOfendidosCarpetasDto->setActivo('S');
                        $telefonosOfendidosCarpetasDto = $telefonosOfendidosCarpetasDao->selectTelefonosofendidoscarpetas($telefonosOfendidosCarpetasDto, "", $this->proveedor);
                        if ( $telefonosOfendidosCarpetasDto != "" ) {
                            foreach ( $telefonosOfendidosCarpetasDto as $telefono ) {
                                $telefonosTmp = new TelefonosofendidoscarpetasDTO();
                                $telefonosTmp = clone $telefono;
                                $telefonosTmp->setIdTelefonoOfendidoCarpeta("");
                                $telefonosTmp->setIdOfendidoCarpeta($ofendidoDestinoDto[0]->getIdOfendidoCarpeta());
                                $telefonosTmp = $telefonosOfendidosCarpetasDao->insertTelefonosofendidoscarpetas($telefonosTmp, $this->proveedor);
                                if ( $telefonosTmp != "" ) {
                                    $error = false;
                                    $logger->w_onError("**********SE INSERTA EL TELEFONO PARA EL OFENDIDO: " . $ofendidoDestinoDto[0]->getIdOfendidoCarpeta() . ", TELEFONO INSERTADO: " . $telefonosTmp[0]->getIdTelefonoOfendidoCarpeta());
                                } else {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurrió un error al insertar datos de teléfonos'));
                                    $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR EL TELEFONO: " . $telefono->getIdTelefonoOfendidoCarpeta());
                                }
                                if ( $error ) {
                                    break;
                                }
                            }
                        } else {
                            $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS ACTIVOS DE TELEFONOS PARA EL OFENDIDO ORIGEN: " . $ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());
                        }
                    }

                    /*
                     * Copiar los datos de defensores
                     */
                    if ( !$error ) {
                        $logger->w_onError("**********CONSULTAR LOS DATOS DE DEFENSORES DEL OFENDIDO: " . $ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());
                        $defensoresOfendidosCarpetasDto = new DefensoresofendidoscarpetasDTO();
                        $defensoresOfendidosCarpetasDao = new DefensoresofendidoscarpetasDAO();
                        $defensoresOfendidosCarpetasDto->setIdOfendidoCarpeta($ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());
                        $defensoresOfendidosCarpetasDto->setActivo('S');
                        $defensoresOfendidosCarpetasDto = $defensoresOfendidosCarpetasDao->selectDefensoresofendidoscarpetas($defensoresOfendidosCarpetasDto, "", $this->proveedor);
                        if ( $defensoresOfendidosCarpetasDto != "" ) {
                            foreach ( $defensoresOfendidosCarpetasDto as $defensor ) {
                                $defensorTmp = new DefensoresofendidoscarpetasDTO();
                                $defensorTmp = clone $defensor;
                                $defensorTmp->setIdDefensorOfendidoCarpeta("");
                                $defensorTmp->setIdOfendidoCarpeta($ofendidoDestinoDto[0]->getIdOfendidoCarpeta());
                                $defensorTmp = $defensoresOfendidosCarpetasDao->insertDefensoresofendidoscarpetas($defensorTmp, $this->proveedor);
                                if ( $defensorTmp != "" ) {
                                    $error = false;
                                    $logger->w_onError("**********SE INSERTA EL DEFENSOR PARA EL OFENDIDO: " . $ofendidoDestinoDto[0]->getIdOfendidoCarpeta() . ", DEFENSOR INSERTADO: " . $defensorTmp[0]->getIdDefensorOfendidoCarpeta());
                                } else {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurrió un error al guardar datos del defensor'));
                                    $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR EL DEFENSOR: " . $defensor->getIdDefensorOfendidoCarpeta());
                                }
                                if ( $error ) {
                                    break;
                                }
                            }
                        } else {
                            $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS ACTIVOS DE DEFENSORES PARA EL OFENDIDO ORIGEN: " . $ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());
                        }
                    }

                    /*
                     * Copiar datos de tutores hacia el ofendido destino
                     */
                    if ( !$error ) {
                        $tutoresOfendidosCarpetasDto = new TutoresofendidoscarpetasDTO();
                        $tutoresOfendidosCarpetasDao = new TutoresofendidoscarpetasDAO();
                        $tutoresOfendidosCarpetasDto->setIdOfendidoCarpeta($ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());
                        $tutoresOfendidosCarpetasDto->setActivo('S');
                        $tutoresOfendidosCarpetasDto = $tutoresOfendidosCarpetasDao->selectTutoresofendidoscarpetas($tutoresOfendidosCarpetasDto, "", $this->proveedor);
                        if ( $tutoresOfendidosCarpetasDto != "" ) {
                            foreach ( $tutoresOfendidosCarpetasDto as $tutor ) {
                                $tutorTmp = new TutoresofendidoscarpetasDTO();
                                $tutorTmp = clone $tutor;
                                $tutorTmp->setIdTutorOfendidoCarpeta("");
                                $tutorTmp->setIdOfendidoCarpeta($ofendidoDestinoDto[0]->getIdOfendidoCarpeta());
                                $tutorTmp = $tutoresOfendidosCarpetasDao->insertTutoresofendidoscarpetas($tutorTmp, $this->proveedor);
                                if ( $tutorTmp != "" ) {
                                    $error = false;
                                    $logger->w_onError("**********SE INSERTA EL TUTOR PARA EL OFENDIDO: " . $ofendidoDestinoDto[0]->getIdOfendidoCarpeta() . ", ID TUTOR: " . $tutorTmp[0]->getIdTutorOfendidoCarpeta());
                                } else {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurrió un error al guardar datos de tutores'));
                                    $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR TUTORES: " . $tutor->getIdTutorOfendidoCarpeta());
                                }
                                if ( $error ) {
                                    break;
                                }
                            }
                        } else {
                            $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS ACTIVOS DE TUTORES PARA EL OFENDIDO ORIGEN: " . $ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());
                        }
                    }

                    /*
                     * Copiar datos de nacionalidades
                     */
                    if ( !$error ) {
                        $nacionalidadesOfendidosCarpetasDto = new NacionalidadesofendidoscarpetasDTO();
                        $nacionalidadesOfendidosCarpetasDao = new NacionalidadesofendidoscarpetasDAO();
                        $nacionalidadesOfendidosCarpetasDto->setIdOfendidoCarpeta($ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());
                        $nacionalidadesOfendidosCarpetasDto->setActivo('S');
                        $nacionalidadesOfendidosCarpetasDto = $nacionalidadesOfendidosCarpetasDao->selectNacionalidadesofendidoscarpetas($nacionalidadesOfendidosCarpetasDto, "", $this->proveedor);
                        if ( $nacionalidadesOfendidosCarpetasDto != "" ) {
                            foreach ( $nacionalidadesOfendidosCarpetasDto as $nacionalidad ) {
                                $nacionalidadTmp = new NacionalidadesofendidoscarpetasDTO();
                                $nacionalidadTmp->setCvePais($nacionalidad->getCvePais());
                                $nacionalidadTmp->setActivo('S');
                                $nacionalidadTmp->setIdOfendidoCarpeta($ofendidoDestinoDto[0]->getIdOfendidoCarpeta());
                                $nacionalidadTmp = $nacionalidadesOfendidosCarpetasDao->insertNacionalidadesofendidoscarpetas($nacionalidadTmp, $this->proveedor);
                                if ( $nacionalidadTmp != "" ) {
                                    $error = false;
                                    $logger->w_onError("**********SE INSERTA LA NACIONALIDAD PARA EL OFENDIDO: " . $ofendidoDestinoDto[0]->getIdOfendidoCarpeta() . ", ID NACIONALIDAD: " . $nacionalidadTmp[0]->getIdNacionalidadOfendidoCarpeta());
                                } else {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurrió un error al guardar datos de la nacionalidad'));
                                    $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR DATOS DE NACIONALIDAD: " . $nacionalidad->getIdNacionalidadOfendidoCarpeta());
                                }
                                if ( $error ) {
                                    break;
                                }
                            }
                        } else {
                            $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS ACTIVOS DE NACIONALIDADES PARA EL OFENDIDO ORIGEN: " . $ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());
                        }
                    }
                    
                    if ( (int)$datos[$x]->idOfendidoDestino > 0 ) {
                        if ( !$error ) {
                            /*
                             * Actualizar los datos del ofendido destino, para ello se utilizan
                             * los datos generales del ofendido origen
                             */
                            $ofendidoTmp = new OfendidoscarpetasDTO();
                            $ofendidoTmp = clone $ofendidoscarpetasDto[0];
                            $ofendidoTmp->setIdOfendidoCarpeta($ofendidoDestinoDto[0]->getIdOfendidoCarpeta());
                            $ofendidoTmp->setIdCarpetaJudicial($ofendidoDestinoDto[0]->getIdCarpetaJudicial());

                            $ofendidoTmp->setFechaActualizacion($fechaActual);
                            $ofendidoTmp = $ofendidoscarpetasDao->modificarOfendidoscarpetas($ofendidoTmp, $this->proveedor);
                            if ( $ofendidoTmp != "" ) {
                                $error = false;
                                $logger->w_onError("**********SE MODIFICAN LOS DATOS GENERALES DEL OFENDIDO CON ID: " . $ofendidoDestinoDto[0]->getIdOfendidoCarpeta());
                                $bitacora = new BitacoramovimientosController();
                                $bitacoraOfendido = $bitacora->agregar(190, 'Modificacion tblofendidoscarpetas', 'txt', serialize($ofendidoTmp[0]), serialize($ofendidoDestinoDto[0]), $this->proveedor);

                                if (!count($bitacoraOfendido)) {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurrió un error al guardar la acción realizada en bitácora'));
                                }
                            } else {
                                $error = true;
                                $msg[] = array(utf8_encode('Ocurrió un error al actualizar los datos generales del ofendido destino'));
                                $logger->w_onError("**********OCURRIO UN ERROR AL MODIFICAR LOS DATOS GENERALES DEL OFENDIDO: " . $ofendidoDestinoDto[0]->getIdOfendidoCarpeta());
                            }
                        }
                    }
                    
                } else {
                    $error = true;
                    $msg[] = array('No se encontraron datos del ofendido, favor de verificar');
                    $logger->w_onError("**********NO SE ENCONTRARON DATOS DEL OFENDIDO ORIGEN");
                }
            }
            if ( $error ) {
                break;
            }
        }
        
        //$ofendidoscarpetasDto = $this->validarOfendidoscarpetas($ofendidoscarpetasDto);
        
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
        
        if ( !$error ) {
            if ( $proveedor == null ) {
                $this->proveedor->execute('COMMIT');
            }
            $result = array(
                'estatus' => 'ok',
                'msj'     => 'Datos actualizados correctamente'
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
    
    public function copiarDatosSolicitud($ofendidoscarpetasDto, $param, $proveedor = null) {
        //var_dump($ofendidoscarpetasDto);
        //print_r($param);
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
        $logger = new Logger("/../../logs/", "OfendidosCarpetas");
        $logger->w_onError("**********COMIENZA EL PROCESO DE COPIA DE DATOS PERSONALES DE UN OFENDIDO ORIGEN HACIA UN OFENDIDO DE SOLICITUD DE AUDIENCIA**********");
        $ofendidoscarpetasDao = new OfendidoscarpetasDAO();
        $carpetasJudicialesDao = new CarpetasjudicialesDAO();
        $ofendidosSolicitudesDao = new OfendidossolicitudesDAO();
        $domiciliosOfendidosSolicitudesDao = new DomiciliosofendidossolicitudesDAO();
        $telefonosOfendidosSolicitudesDao = new TelefonosofendidossolicitudesDAO();
        $defensoresOfendidosSolicitudesDao = new DefensoresofendidossolicitudesDAO();
        $tutoresOfendidosSolicitudesDao = new TutoresofendidosDAO();
        $nacionalidadesOfendidosSolicitudesDao = new NacionalidadesofendidossolicitudesDAO();
        $solicitudAudienciaDao = new SolicitudesaudienciasDAO();
        
        $datos = json_decode($param['idOfendidos']);
        //print_r($datos);
        for ( $x = 0; $x < count($datos); $x++ ) {
            //print_r($datos[$x]->idOfendidoOrigen);
            //print_r($datos[$x]->idOfendidoDestino);
            if ( (int)$datos[$x]->idOfendidoDestino == 0 ) {
                $logger->w_onError("**********EL ID DEL OFENDIDO DESTINO ES 0, LO QUE SIGNIFICA QUE SE VA GENERAR UN NUEVO REGISTRO");
                /*
                 * Se trata de un registro nuevo, se copiaran los datos del ofendido origen
                 * en la solicitud de audiencia destino seleccionada por el usuairo
                 */
                $logger->w_onError("**********SE CONSULTAN LOS DATOS DEL OFENDIDO ORIGEN PARA REALIZAR LA COPIA DE DATOS");
                $ofendidoCopia = new OfendidoscarpetasDTO();
                $ofendidoCopia->setIdOfendidoCarpeta($datos[$x]->idOfendidoOrigen);
                $ofendidoCopia = $ofendidoscarpetasDao->selectOfendidoscarpetas($ofendidoCopia, "", $this->proveedor);
                if ( $ofendidoCopia != "" ) {
                    $logger->w_onError("**********SE ENCUENTRAN LOS DATOS DEL OFENDIDO ORIGEN, ID DEL OFENDIDO: " . $ofendidoCopia[0]->getIdOfendidoCarpeta());
                    //Seleccionar los datos de la carpeta destino
                    $solicitudDestinoDto = new SolicitudesaudienciasDTO();
                    $solicitudDestinoDto->setIdSolicitudAudiencia($param['idSolicitudAudiencia']);
                    
                    $rsSolicitudDestino = $solicitudAudienciaDao->selectSolicitudesaudiencias($solicitudDestinoDto, "", "", $this->proveedor);
                    $logger->w_onError("**********SE CONSULTAN LOS DATOS DE LA SOLICITUD DE AUDIENCIA DESTINO EN DONDE SE INSERTARA EL REGISTRO DEL OFENDIDO");
                    if ( $rsSolicitudDestino != "" ) {
                        $logger->w_onError("**********SE ENCUENTRAN LOS DATOS DE LA SOLICITUD DE AUDIENCIA DESTINO, ID DE LA SOLICITUD DE AUDIENCIA: " . $rsSolicitudDestino[0]->getIdSolicitudAudiencia());
                        $logger->w_onError("**********CONSULTAR SI LOS DATOS DEL OFENDIDO DESTINO YA SE ENCUENTRAN EN LA SOLICITUD DE AUDIENCIA DESTINO: " . $rsSolicitudDestino[0]->getIdSolicitudAudiencia());
                        $logger->w_onError("**********NOMBRE: " . $ofendidoCopia[0]->getNombre());
                        $logger->w_onError("**********PATERNO: " . $ofendidoCopia[0]->getPaterno());
                        $logger->w_onError("**********MATERNO: " . $ofendidoCopia[0]->getMaterno());
                        $tmp = new OfendidossolicitudesDTO();
                        if ( (int)$ofendidoCopia[0]->getCveTipoPersona() == 1 ) {
                            $tmp->setNombre($ofendidoCopia[0]->getNombre());
                            $tmp->setPaterno($ofendidoCopia[0]->getPaterno());
                            $tmp->setMaterno($ofendidoCopia[0]->getMaterno());
                        } else {
                            $tmp->setNombreMoral($ofendidoCopia[0]->getNombreMoral());
                        }
                        $tmp->setActivo('S');
                        $tmp->setIdSolicitudAudiencia($param['idSolicitudAudiencia']);
                        $tmp = $ofendidosSolicitudesDao->selectOfendidossolicitudes($tmp, "", $this->proveedor);
                        if ( $tmp == "" ) {
                            $logger->w_onError("**********EL OFENDIDO NO SE ENCUENTRA REGISTRADO EN LA SOLICITUD DE AUDIENCIA DESTINO, SE PROCEDE A INSERTARLO");
                            $ofendidoDestinoDto = new OfendidossolicitudesDTO();
                            $ofendidoDestinoDto->setIdSolicitudAudiencia($rsSolicitudDestino[0]->getIdSolicitudAudiencia());
                            $ofendidoDestinoDto->setNombre($ofendidoCopia[0]->getNombre());
                            $ofendidoDestinoDto->setPaterno($ofendidoCopia[0]->getPaterno());
                            $ofendidoDestinoDto->setMaterno($ofendidoCopia[0]->getMaterno());
                            $ofendidoDestinoDto->setRfc($ofendidoCopia[0]->getRfc());
                            $ofendidoDestinoDto->setCurp($ofendidoCopia[0]->getCurp());
                            $ofendidoDestinoDto->setFechaNacimiento($ofendidoCopia[0]->getFechaNacimiento());
                            $ofendidoDestinoDto->setCveOcupacion($ofendidoCopia[0]->getCveOcupacion());
                            $ofendidoDestinoDto->setCveTipoPersona($ofendidoCopia[0]->getCveTipoPersona());
                            $ofendidoDestinoDto->setCveGenero($ofendidoCopia[0]->getCveGenero());
                            $ofendidoDestinoDto->setCveTipoParte($ofendidoCopia[0]->getCveTipoParte());
                            $ofendidoDestinoDto->setCveTipoReligion($ofendidoCopia[0]->getCveTipoReligion());
                            $ofendidoDestinoDto->setEdad($ofendidoCopia[0]->getEdad());
                            $ofendidoDestinoDto->setCvePaisNacimiento($ofendidoCopia[0]->getCvePaisNacimiento());
                            $ofendidoDestinoDto->setCveEstadoNacimiento($ofendidoCopia[0]->getCveEstadoNacimiento());
                            $ofendidoDestinoDto->setEstadoNacimiento($ofendidoCopia[0]->getEstadoNacimiento());
                            $ofendidoDestinoDto->setCveMunicipioNacimiento($ofendidoCopia[0]->getCveMunicipioNacimiento());
                            $ofendidoDestinoDto->setMunicipioNacimiento($ofendidoCopia[0]->getMunicipioNacimiento());
                            $ofendidoDestinoDto->setCveEstadoCivil($ofendidoCopia[0]->getCveEstadoCivil());
                            $ofendidoDestinoDto->setCveAlfabetismo($ofendidoCopia[0]->getCveAlfabetismo());
                            $ofendidoDestinoDto->setCveNivelInstruccion($ofendidoCopia[0]->getCveNivelInstruccion());
                            $ofendidoDestinoDto->setCveEspanol($ofendidoCopia[0]->getCveEspanol());
                            $ofendidoDestinoDto->setCveDialectoIndigena($ofendidoCopia[0]->getCveDialectoIndigena());
                            $ofendidoDestinoDto->setCveTipoFamiliaLinguistica($ofendidoCopia[0]->getCveTipoFamiliaLinguistica());
                            $ofendidoDestinoDto->setCveInterprete($ofendidoCopia[0]->getCveInterprete());
                            $ofendidoDestinoDto->setCveOrdenProteccion($ofendidoCopia[0]->getCveOrdenProteccion());
                            $ofendidoDestinoDto->setCveEstadoPsicofisico($ofendidoCopia[0]->getCveEstadoPsicofisico());
                            $ofendidoDestinoDto->setNombreMoral($ofendidoCopia[0]->getNombreMoral());
                            $ofendidoDestinoDto->setCveVictimaDeLaDelincuenciaOrganizada($ofendidoCopia[0]->getCveVictimaDeLaDelincuenciaOrganizada());
                            $ofendidoDestinoDto->setCveVictimaDeViolenciaDeGenero($ofendidoCopia[0]->getCveVictimaDeViolenciaDeGenero());
                            $ofendidoDestinoDto->setCveVictimaDeTrata($ofendidoCopia[0]->getCveVictimaDeTrata());
                            $ofendidoDestinoDto->setCveVictimaDeAcoso($ofendidoCopia[0]->getCveVictimaDeAcoso());
                            $ofendidoDestinoDto->setDesaparecido($ofendidoCopia[0]->getDesaparecido());
                            $ofendidoDestinoDto->setNumHijos($ofendidoCopia[0]->getNumHijos());
                            $ofendidoDestinoDto->setEmbarazada($ofendidoCopia[0]->getEmbarazada());
                            $ofendidoDestinoDto->setCveGrupoEdnico($ofendidoCopia[0]->getCveGrupoEdnico());
                            $ofendidoDestinoDto->setActivo("S");
                            
                            $ofendidoDestinoDto = $ofendidosSolicitudesDao->insertOfendidossolicitudes($ofendidoDestinoDto, $this->proveedor);
                            if ( $ofendidoDestinoDto == "" ) {
                                $logger->w_onError("**********OCURRIO UN ERROR AL INSERTAR LOS DATOS DEL OFENDIDO DESTINO");
                                $logger->w_onError("**********ID SOLICITUD DE AUDIENCIA: " . $rsSolicitudDestino[0]->getIdSolicitudAudiencia());
                                $logger->w_onError("**********ID OFENDIDO ORIGEN: " . $datos[$x]->idOfendidoOrigen);

                                $error = true;
                                $msg[] = array(utf8_encode('Ocurrió un error al registrar al ofendido destino'));
                            } else {
                                $logger->w_onError("**********SE INSERTA EL REGISTRO DEL OFENDIDO DESTINO, ID DE OFENDIDO: " . $ofendidoDestinoDto[0]->getIdOfendidoSolicitud());
                                $logger->w_onError("**********ID SOLICITUD DE AUDIENCIA: " . $rsSolicitudDestino[0]->getIdSolicitudAudiencia());
                                $logger->w_onError("**********ID OFENDIDO ORIGEN: " . $datos[$x]->idOfendidoOrigen);
                                $logger->w_onError("**********NOMBRE: " . $ofendidoDestinoDto[0]->getNombre());
                                $logger->w_onError("**********PATERNO: " . $ofendidoDestinoDto[0]->getPaterno());
                                $logger->w_onError("**********MATERNO: " . $ofendidoDestinoDto[0]->getMaterno());
                                $bitacora = new BitacoramovimientosController();
                                $bitacoraOfendido = $bitacora->agregar(55, 'INSERCION tblofendidossolicitudes', 'txt', serialize($ofendidoDestinoDto[0]), '', $this->proveedor);

                                if (!count($bitacoraOfendido)) {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurrió un error al guardar en bitacora la acción realizada por el usuario'));
                                }
                            }
                        } else {
                            $error = true;
                            if ( (int)$ofendidoCopia[0]->getCveTipoPersona() == 1 ) {
                                $mensajeError = "El ofendido: " . utf8_encode($ofendidoCopia[0]->getNombre()) . " " . utf8_encode($ofendidoCopia[0]->getPaterno()) . " " . utf8_encode($ofendidoCopia[0]->getMaterno()) . " ya se encuentra registrado en la solicitud destino, favor de verificar";
                            } else {
                                $mensajeError = "El ofendido: " . utf8_encode($ofendidoCopia[0]->getNombreMoral()) . " ya se encuentra registrado en la solicitud destino, favor de verificar";
                            }
                            $msg[] = array($mensajeError);
                            $logger->w_onError("**********EL OFENDIDO YA SE ENCUENTRA REGISTRADO EN LA SOLICITUD DESTINO");
                            $logger->w_onError("**********ID OFENDIDO: " . $tmp[0]->getIdOfendidoSolicitud());
                            $logger->w_onError("**********ID SOLICITUD DE AUDIENCIA: " . $tmp[0]->getIdSolicitudAudiencia());
                            $logger->w_onError("**********NOMBRE: " . $tmp[0]->getNombre());
                            $logger->w_onError("**********PATERNO: " . $tmp[0]->getPaterno());
                            $logger->w_onError("**********MATERNO: " . $tmp[0]->getMaterno());
                        }
                        
                    } else {
                        $error = true;
                        $msg[] = array(utf8_encode('Ocurrió un error al consultar los datos de la solicitud destino'));
                        $logger->w_onError("**********OCURRIO UN ERROR AL CONSULTAR LOS DATOS DE LA SOLICITUD DESTINO");
                    }
                } else {
                    $error = true;
                    $msg[] = array(utf8_encode('Ocurrió un error al consultar los datos del ofendido origen'));
                    $logger->w_onError("**********OCURRIO UN ERROR AL CONSULTAR LOS DATOS DEL OFENDIDO ORIGEN");
                }
            } else {
                /*
                 * Consultar los datos generales del ofendido destino
                 */
                $logger->w_onError("**********CONSULTAR LOS DATOS DEL OFENDIDO DESTINO");
                $ofendidoDestinoDto = new OfendidossolicitudesDTO();
                $ofendidoDestinoDto->setIdOfendidoSolicitud($datos[$x]->idOfendidoDestino);
                $ofendidoDestinoDto->setIdSolicitudAudiencia($param['idSolicitudAudiencia']);
                $ofendidoDestinoDto->setActivo('S');
                $ofendidoDestinoDto = $ofendidosSolicitudesDao->selectOfendidossolicitudes($ofendidoDestinoDto, "", $this->proveedor);
                if ( $ofendidoDestinoDto == "" ) {
                    $error = true;
                    $msg[] = array('No se encontraron los datos del ofendido destino, favor de verificar');
                    $logger->w_onError("**********NO SE ENCONTRARON DATOS DEL OFENDIDO DESTINO");
                } else {
                    $logger->w_onError("**********ID DEL OFENDIDO DESTINO: " . $ofendidoDestinoDto[0]->getIdOfendidoSolicitud());
                }
            }
            
            /*
             * Verificar que la solicitud y carpeta tengan la misma etapa procesal
             * para realizar la copia, en caso de tener etapas diferentes, notificar al usuario
             */
            $carpetaDto = new CarpetasjudicialesDTO();
            $carpetaDao = new CarpetasjudicialesDAO();
            $carpetaDto->setIdCarpetaJudicial($ofendidoscarpetasDto->getIdCarpetaJudicial());
            $carpetaDto = $carpetaDao->selectCarpetasjudiciales($carpetaDto, "", $this->proveedor);
            $solicitudDto = new SolicitudesaudienciasDTO();
            $solicitudDao = new SolicitudesaudienciasDAO();
            $solicitudDto->setIdSolicitudAudiencia($param['idSolicitudAudiencia']);
            $solicitudDto = $solicitudDao->selectSolicitudesaudiencias($solicitudDto, "", "", $this->proveedor);
            if ( (int)$carpetaDto[0]->getCveEtapaProcesal() == (int)$solicitudDto[0]->getCveEtapaProcesal() ) {
                $error = false;
                $logger->w_onError("**********LA CARPETA JUDICIAL TIENE ETAPA PROCESAL: " . $carpetaDto[0]->getCveEtapaProcesal() . " Y LA SOLICITUD DE AUDIENCIA TIENE ETAPA PROCESAL: " . $solicitudDto[0]->getCveEtapaProcesal());
            } else {
                $error = true;
                $msg[] = array(utf8_encode('La Carpeta judicial de origen y la Solicitud de audiencia deben tener la misma etapa procesal para poder realizar la copia de datos, favor de verificar'));
                $logger->w_onError("**********LA CARPETA JUDICIAL TIENE ETAPA PROCESAL: " . $carpetaDto[0]->getCveEtapaProcesal() . " MIENTRAS QUE LA SOLICITUD DE AUDIENCIA TIENE ETAPA: " . $solicitudDto[0]->getCveEtapaProcesal());
                $logger->w_onError("**********NO SE PUEDE REALIZAR LA COPIA DE DATOS");
            }
            
            /*
             * Consultar los datos generales del ofendido origen
             */
            if ( !$error ) {
                $logger->w_onError("**********CONSULTAR DATOS DEL OFENDIDO ORIGEN");
                $ofendidoscarpetasDto = new OfendidoscarpetasDTO();
                $ofendidoscarpetasDto->setIdOfendidoCarpeta($datos[$x]->idOfendidoOrigen);
                $ofendidoscarpetasDto->setActivo('S');
                $ofendidoscarpetasDto = $ofendidoscarpetasDao->selectOfendidoscarpetas($ofendidoscarpetasDto, "", $this->proveedor);
                if ( $ofendidoscarpetasDto != "" ) {
                    $error = false;
                    $logger->w_onError("**********ID DEL OFENDIDO ORIGEN: " . $ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());

                    /*
                     * Copiar datos de domicilios hacia el ofendido destino
                     */
                    $logger->w_onError("**********CONSULTAR LOS DATOS DE DOMICILIOS DEL OFENDIDO: " . $ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());
                    $domiciliosOfendidosCarpetasDto = new DomiciliosofendidoscarpetasDTO();
                    $domiciliosOfendidosCarpetasDao = new DomiciliosofendidoscarpetasDAO();
                    $domiciliosOfendidosCarpetasDto->setIdOfendidoCarpeta($ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());
                    $domiciliosOfendidosCarpetasDto->setActivo('S');
                    $domiciliosOfendidosCarpetasDto = $domiciliosOfendidosCarpetasDao->selectDomiciliosofendidoscarpetas($domiciliosOfendidosCarpetasDto, "", $this->proveedor);
                    if ( $domiciliosOfendidosCarpetasDto != "" ) {
                        foreach ( $domiciliosOfendidosCarpetasDto as $domicilio ) {
                            $domicilioTmp = new DomiciliosofendidossolicitudesDTO();
                            $domicilioTmp->setIdOfendidoSolicitud($ofendidoDestinoDto[0]->getIdOfendidoSolicitud());
                            $domicilioTmp->setDomicilioProcesal($domicilio->getDomicilioProcesal());
                            $domicilioTmp->setCvePais($domicilio->getCvePais());
                            $domicilioTmp->setCveEstado($domicilio->getcveEstado());
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
                            $domicilioTmp->setActivo("S");
                            
                            $domicilioTmp = $domiciliosOfendidosSolicitudesDao->insertDomiciliosofendidossolicitudes($domicilioTmp, $this->proveedor);
                            if ( $domicilioTmp != "" ) {
                                $error = false;
                                $logger->w_onError("**********SE INSERTA EL DOMICILIO PARA EL OFENDIDO: " . $ofendidoDestinoDto[0]->getIdOfendidoSolicitud() . ", DOMICILIO INSERTADO: " . $domicilioTmp[0]->getIdDomicilioOfendidoSolicitud());
                            } else {
                                $error = true;
                                $msg[] = array(utf8_encode('Ocurrió un error al copiar datos de domicilios del ofendido origen'));
                                $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR EL DOMICILIO: " . $domicilio->getIdDomicilioOfendidoCarpeta());
                            }
                            if ( $error ) {
                                break;
                            }
                        }
                    } else {
                        $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS ACTIVOS DE DOMICILIOS PARA EL OFENDIDO ORIGEN: " . $ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());
                    }

                    /*
                     * Copiar datos de telefonos hacia el ofendido destino
                     */
                    if ( !$error ) {
                        $logger->w_onError("**********CONSULTAR LOS DATOS DE TELEFONOS DEL OFENDIDO: " . $ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());
                        $telefonosOfendidosCarpetasDto = new TelefonosofendidoscarpetasDTO();
                        $telefonosOfendidosCarpetasDao = new TelefonosofendidoscarpetasDAO();
                        $telefonosOfendidosCarpetasDto->setIdOfendidoCarpeta($ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());
                        $telefonosOfendidosCarpetasDto->setActivo('S');
                        $telefonosOfendidosCarpetasDto = $telefonosOfendidosCarpetasDao->selectTelefonosofendidoscarpetas($telefonosOfendidosCarpetasDto, "", $this->proveedor);
                        if ( $telefonosOfendidosCarpetasDto != "" ) {
                            foreach ( $telefonosOfendidosCarpetasDto as $telefono ) {
                                $telefonosTmp = new TelefonosofendidossolicitudesDTO();
                                $telefonosTmp->setIdOfendidoSolicitud($ofendidoDestinoDto[0]->getIdOfendidoSolicitud());
                                $telefonosTmp->setTelefono($telefono->getTelefono());
                                $telefonosTmp->setCelular($telefono->getCelular());
                                $telefonosTmp->setEmail($telefono->getEmail());
                                $telefonosTmp->setActivo("S");
                                
                                $telefonosTmp = $telefonosOfendidosSolicitudesDao->insertTelefonosofendidossolicitudes($telefonosTmp, $this->proveedor);
                                if ( $telefonosTmp != "" ) {
                                    $error = false;
                                    $logger->w_onError("**********SE INSERTA EL TELEFONO PARA EL OFENDIDO: " . $ofendidoDestinoDto[0]->getIdOfendidoSolicitud() . ", TELEFONO INSERTADO: " . $telefonosTmp[0]->getIdTelefonoOfendidoSolicitud());
                                } else {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurrió un error al insertar datos de teléfonos'));
                                    $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR EL TELEFONO: " . $telefono->getIdTelefonoOfendidoCarpeta());
                                }
                                if ( $error ) {
                                    break;
                                }
                            }
                        } else {
                            $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS ACTIVOS DE TELEFONOS PARA EL OFENDIDO ORIGEN: " . $ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());
                        }
                    }

                    /*
                     * Copiar los datos de defensores
                     */
                    if ( !$error ) {
                        $logger->w_onError("**********CONSULTAR LOS DATOS DE DEFENSORES DEL OFENDIDO: " . $ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());
                        $defensoresOfendidosCarpetasDto = new DefensoresofendidoscarpetasDTO();
                        $defensoresOfendidosCarpetasDao = new DefensoresofendidoscarpetasDAO();
                        $defensoresOfendidosCarpetasDto->setIdOfendidoCarpeta($ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());
                        $defensoresOfendidosCarpetasDto->setActivo('S');
                        $defensoresOfendidosCarpetasDto = $defensoresOfendidosCarpetasDao->selectDefensoresofendidoscarpetas($defensoresOfendidosCarpetasDto, "", $this->proveedor);
                        if ( $defensoresOfendidosCarpetasDto != "" ) {
                            foreach ( $defensoresOfendidosCarpetasDto as $defensor ) {
                                $defensorTmp = new DefensoresofendidossolicitudesDTO();
                                $defensorTmp->setIdOfendidoSolicitud($ofendidoDestinoDto[0]->getIdOfendidoSolicitud());
                                $defensorTmp->setCveTipoAsesor($defensor->getCveTipoDefensor());
                                $defensorTmp->setNombre($defensor->getNombre());
                                $defensorTmp->setTelefono($defensor->getTelefono());
                                $defensorTmp->setCelular($defensor->getCelular());
                                $defensorTmp->setEmail($defensor->getEmail());
                                $defensorTmp->setActivo("S");
                                
                                $defensorTmp = $defensoresOfendidosSolicitudesDao->insertDefensoresofendidossolicitudes($defensorTmp, $this->proveedor);
                                if ( $defensorTmp != "" ) {
                                    $error = false;
                                    $logger->w_onError("**********SE INSERTA EL DEFENSOR PARA EL OFENDIDO: " . $ofendidoDestinoDto[0]->getIdOfendidoSolicitud() . ", DEFENSOR INSERTADO: " . $defensorTmp[0]->getIdDefensorOfendidoSolicitud());
                                } else {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurrió un error al guardar datos del defensor'));
                                    $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR EL DEFENSOR: " . $defensor->getIdDefensorOfendidoCarpeta());
                                }
                                if ( $error ) {
                                    break;
                                }
                            }
                        } else {
                            $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS ACTIVOS DE DEFENSORES PARA EL OFENDIDO ORIGEN: " . $ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());
                        }
                    }

                    /*
                     * Copiar datos de tutores hacia el ofendido destino
                     */
                    if ( !$error ) {
                        $tutoresOfendidosCarpetasDto = new TutoresofendidoscarpetasDTO();
                        $tutoresOfendidosCarpetasDao = new TutoresofendidoscarpetasDAO();
                        $tutoresOfendidosCarpetasDto->setIdOfendidoCarpeta($ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());
                        $tutoresOfendidosCarpetasDto->setActivo('S');
                        $tutoresOfendidosCarpetasDto = $tutoresOfendidosCarpetasDao->selectTutoresofendidoscarpetas($tutoresOfendidosCarpetasDto, "", $this->proveedor);
                        if ( $tutoresOfendidosCarpetasDto != "" ) {
                            foreach ( $tutoresOfendidosCarpetasDto as $tutor ) {
                                $tutorTmp = new TutoresofendidosDTO();
                                $tutorTmp->setIdOfendidoSolicitud($ofendidoDestinoDto[0]->getIdOfendidoSolicitud());
                                $tutorTmp->setCveTipoTutor($tutor->getCveTipoTutor());
                                $tutorTmp->setProvDef($tutor->getProvDef());
                                $tutorTmp->setNombre($tutor->getNombre());
                                $tutorTmp->setPaterno($tutor->getPaterno());
                                $tutorTmp->setMaterno($tutor->getMaterno());
                                $tutorTmp->setFechaNacimiento($tutor->getFechaNacimiento());
                                $tutorTmp->setEdad($tutor->getEdad());
                                $tutorTmp->setcveGenero($tutor->getCveGenero());
                                $tutorTmp->setActivo("S");
                                $tutorTmp = $tutoresOfendidosSolicitudesDao->insertTutoresofendidos($tutorTmp, $this->proveedor);
                                if ( $tutorTmp != "" ) {
                                    $error = false;
                                    $logger->w_onError("**********SE INSERTA EL TUTOR PARA EL OFENDIDO: " . $ofendidoDestinoDto[0]->getIdOfendidoSolicitud() . ", ID TUTOR: " . $tutorTmp[0]->getIdTutorOfendido());
                                } else {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurrió un error al guardar datos de tutores'));
                                    $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR TUTORES: " . $tutor->getIdTutorOfendidoCarpeta());
                                }
                                if ( $error ) {
                                    break;
                                }
                            }
                        } else {
                            $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS ACTIVOS DE TUTORES PARA EL OFENDIDO ORIGEN: " . $ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());
                        }
                    }

                    /*
                     * Copiar datos de nacionalidades
                     */
                    if ( !$error ) {
                        $nacionalidadesOfendidosCarpetasDto = new NacionalidadesofendidoscarpetasDTO();
                        $nacionalidadesOfendidosCarpetasDao = new NacionalidadesofendidoscarpetasDAO();
                        $nacionalidadesOfendidosCarpetasDto->setIdOfendidoCarpeta($ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());
                        $nacionalidadesOfendidosCarpetasDto->setActivo('S');
                        $nacionalidadesOfendidosCarpetasDto = $nacionalidadesOfendidosCarpetasDao->selectNacionalidadesofendidoscarpetas($nacionalidadesOfendidosCarpetasDto, "", $this->proveedor);
                        if ( $nacionalidadesOfendidosCarpetasDto != "" ) {
                            foreach ( $nacionalidadesOfendidosCarpetasDto as $nacionalidad ) {
                                $nacionalidadTmp = new NacionalidadesofendidossolicitudesDTO();
                                $nacionalidadTmp->setcvePais($nacionalidad->getCvePais());
                                $nacionalidadTmp->setactivo("S");
                                $nacionalidadTmp->setidOfendidoSolicitud($ofendidoDestinoDto[0]->getIdOfendidoSolicitud());
                                
                                $nacionalidadTmp = $nacionalidadesOfendidosSolicitudesDao->insertNacionalidadesofendidossolicitudes($nacionalidadTmp, $this->proveedor);
                                if ( $nacionalidadTmp != "" ) {
                                    $error = false;
                                    $logger->w_onError("**********SE INSERTA LA NACIONALIDAD PARA EL OFENDIDO: " . $ofendidoDestinoDto[0]->getIdOfendidoSolicitud() . ", ID NACIONALIDAD: " . $nacionalidadTmp[0]->getIdNacionalidadOfendidoSolicitud());
                                } else {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurrió un error al guardar datos de la nacionalidad'));
                                    $logger->w_onError("**********OCURRIO UN ERROR AL COPIAR DATOS DE NACIONALIDAD: " . $nacionalidad->getIdNacionalidadOfendidoCarpeta());
                                }
                                if ( $error ) {
                                    break;
                                }
                            }
                        } else {
                            $logger->w_onError("**********SE DETERMINA QUE NO EXISTEN DATOS ACTIVOS DE NACIONALIDADES PARA EL OFENDIDO ORIGEN: " . $ofendidoscarpetasDto[0]->getIdOfendidoCarpeta());
                        }
                    }
                    
                    if ( (int)$datos[$x]->idOfendidoDestino > 0 ) {
                        if ( !$error ) {
                            /*
                             * Actualizar los datos del ofendido destino, para ello se utilizan
                             * los datos generales del ofendido origen
                             */
                            $ofendidoTmp = new OfendidossolicitudesDTO();
                            //$ofendidoTmp = clone $ofendidoscarpetasDto[0];
                            $ofendidoTmp->setIdOfendidoSolicitud($ofendidoDestinoDto[0]->getIdOfendidoSolicitud());
                            $ofendidoTmp->setIdSolicitudAudiencia($ofendidoDestinoDto[0]->getIdSolicitudAudiencia());
                            $ofendidoTmp->setNombre($ofendidoscarpetasDto[0]->getNombre());
                            $ofendidoTmp->setPaterno($ofendidoscarpetasDto[0]->getPaterno());
                            $ofendidoTmp->setMaterno($ofendidoscarpetasDto[0]->getMaterno());
                            $ofendidoTmp->setRfc($ofendidoscarpetasDto[0]->getRfc());
                            $ofendidoTmp->setCurp($ofendidoscarpetasDto[0]->getCurp());
                            $ofendidoTmp->setFechaNacimiento($ofendidoscarpetasDto[0]->getFechaNacimiento());
                            $ofendidoTmp->setCveOcupacion($ofendidoscarpetasDto[0]->getCveOcupacion());
                            $ofendidoTmp->setCveTipoPersona($ofendidoscarpetasDto[0]->getCveTipoPersona());
                            $ofendidoTmp->setCveGenero($ofendidoscarpetasDto[0]->getCveGenero());
                            $ofendidoTmp->setCveTipoParte($ofendidoscarpetasDto[0]->getCveTipoParte());
                            $ofendidoTmp->setCveTipoReligion($ofendidoscarpetasDto[0]->getCveTipoReligion());
                            $ofendidoTmp->setEdad($ofendidoscarpetasDto[0]->getEdad());
                            $ofendidoTmp->setCvePaisNacimiento($ofendidoscarpetasDto[0]->getCvePaisNacimiento());
                            $ofendidoTmp->setCveEstadoNacimiento($ofendidoscarpetasDto[0]->getCveEstadoNacimiento());
                            $ofendidoTmp->setEstadoNacimiento($ofendidoscarpetasDto[0]->getEstadoNacimiento());
                            $ofendidoTmp->setCveMunicipioNacimiento($ofendidoscarpetasDto[0]->getCveMunicipioNacimiento());
                            $ofendidoTmp->setMunicipioNacimiento($ofendidoscarpetasDto[0]->getMunicipioNacimiento());
                            $ofendidoTmp->setCveEstadoCivil($ofendidoscarpetasDto[0]->getCveEstadoCivil());
                            $ofendidoTmp->setCveAlfabetismo($ofendidoscarpetasDto[0]->getCveAlfabetismo());
                            $ofendidoTmp->setCveNivelInstruccion($ofendidoscarpetasDto[0]->getCveNivelInstruccion());
                            $ofendidoTmp->setCveEspanol($ofendidoscarpetasDto[0]->getCveEspanol());
                            $ofendidoTmp->setCveDialectoIndigena($ofendidoscarpetasDto[0]->getCveDialectoIndigena());
                            $ofendidoTmp->setCveTipoFamiliaLinguistica($ofendidoscarpetasDto[0]->getCveTipoFamiliaLinguistica());
                            $ofendidoTmp->setCveInterprete($ofendidoscarpetasDto[0]->getCveInterprete());
                            $ofendidoTmp->setCveOrdenProteccion($ofendidoscarpetasDto[0]->getCveOrdenProteccion());
                            $ofendidoTmp->setCveEstadoPsicofisico($ofendidoscarpetasDto[0]->getCveEstadoPsicofisico());
                            $ofendidoTmp->setNombreMoral($ofendidoscarpetasDto[0]->getNombreMoral());
                            $ofendidoTmp->setCveVictimaDeLaDelincuenciaOrganizada($ofendidoscarpetasDto[0]->getCveVictimaDeLaDelincuenciaOrganizada());
                            $ofendidoTmp->setCveVictimaDeViolenciaDeGenero($ofendidoscarpetasDto[0]->getCveVictimaDeViolenciaDeGenero());
                            $ofendidoTmp->setCveVictimaDeTrata($ofendidoscarpetasDto[0]->getCveVictimaDeTrata());
                            $ofendidoTmp->setCveVictimaDeAcoso($ofendidoscarpetasDto[0]->getCveVictimaDeAcoso());
                            $ofendidoTmp->setDesaparecido($ofendidoscarpetasDto[0]->getDesaparecido());
                            $ofendidoTmp->setNumHijos($ofendidoscarpetasDto[0]->getNumHijos());
                            $ofendidoTmp->setEmbarazada($ofendidoscarpetasDto[0]->getEmbarazada());
                            $ofendidoTmp->setCveGrupoEdnico($ofendidoscarpetasDto[0]->getCveGrupoEdnico());
                            $ofendidoTmp->setActivo("S");
                            $ofendidoTmp->setFechaActualizacion($fechaActual);
                            $ofendidoTmp = $ofendidosSolicitudesDao->updateOfendidossolicitudes($ofendidoTmp, $this->proveedor);
                            if ( $ofendidoTmp != "" ) {
                                $error = false;
                                $logger->w_onError("**********SE MODIFICAN LOS DATOS GENERALES DEL OFENDIDO CON ID: " . $ofendidoDestinoDto[0]->getIdOfendidoSolicitud());
                                $bitacora = new BitacoramovimientosController();
                                $bitacoraOfendido = $bitacora->agregar(56, 'Modificacion tblofendidoscarpetas', 'txt', serialize($ofendidoTmp[0]), serialize($ofendidoDestinoDto[0]), $this->proveedor);

                                if (!count($bitacoraOfendido)) {
                                    $error = true;
                                    $msg[] = array(utf8_encode('Ocurrió un error al guardar la acción realizada en bitácora'));
                                }
                            } else {
                                $error = true;
                                $msg[] = array(utf8_encode('Ocurrió un error al actualizar los datos generales del ofendido destino'));
                                $logger->w_onError("**********OCURRIO UN ERROR AL MODIFICAR LOS DATOS GENERALES DEL OFENDIDO: " . $ofendidoDestinoDto[0]->getIdOfendidoSolicitud());
                            }
                        }
                    }
                    
                } else {
                    $error = true;
                    $msg[] = array('No se encontraron datos del ofendido, favor de verificar');
                    $logger->w_onError("**********NO SE ENCONTRARON DATOS DEL OFENDIDO ORIGEN");
                }
            }
            if ( $error ) {
                break;
            }
        }
        
        //$ofendidoscarpetasDto = $this->validarOfendidoscarpetas($ofendidoscarpetasDto);
        
        if ( !$error ) {
            $logger->w_onError("**********SE PROCEDE A ACTUALIZAR EL NUMERO DE OFENDIDOS DE LA SOLICITUD DE AUDIENCIA CON ID: " . $param['idSolicitudAudiencia']);
            
            $ofendidos = new OfendidossolicitudesDTO();
            $ofendidosDao = new OfendidossolicitudesDAO();
            $ofendidos->setIdSolicitudAudiencia($param['idSolicitudAudiencia']);
            $ofendidos->setActivo("S");
            $ofendidos = $ofendidosDao->selectOfendidossolicitudes($ofendidos, "", $this->proveedor);
            if ($ofendidos != "") {
                $numOfendidos = count($ofendidos);
            } else {
                $numOfendidos = 0;
            }
            $logger->w_onError("**********NUMERO DE OFENDIDOS: " . $numOfendidos);
            
            $solicitudesTmp = new SolicitudesaudienciasDTO();
            $solicitudesDao = new SolicitudesaudienciasDAO();
            $solicitudesTmp->setIdSolicitudAudiencia($param['idSolicitudAudiencia']);
            $solicitudesTmp->setNumOfendidos($numOfendidos);
            
            $solicitudesTmp = $solicitudesDao->updateSolicitudesaudiencias($solicitudesTmp, $this->proveedor);
            if ($solicitudesTmp != "") {
                $error = false;
                $logger->w_onError("**********SE MODIFICA EL NUMERO DE OFENDIDOS DE LA SOLICITUD DE AUDIENCIA : " . $solicitudesTmp[0]->getIdSolicitudAudiencia());
                $logger->w_onError("**********NUM OFENDIDOS : " . $solicitudesTmp[0]->getNumOfendidos());
                
            } else {
                $error = true;
                $msg[] = array("Ocurrio un error al modificar el numero de ofendidos de la solicitud de audiencia");
                $logger->w_onError("**********OCURRIO UN ERROR AL ACTUALIZAR EL NUMERO DE OFENDIDOS DE LA SOLICITUD DE AUDIENCIA: " . $param['idSolicitudAudiencia']);
            }
        }
        
        if ( !$error ) {
            if ( $proveedor == null ) {
                $this->proveedor->execute('COMMIT');
            }
            $result = array(
                'estatus' => 'ok',
                'msj'     => 'Datos actualizados correctamente'
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