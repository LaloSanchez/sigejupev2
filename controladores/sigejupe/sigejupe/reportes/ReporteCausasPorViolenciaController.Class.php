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
//Dialecto Ind�gena
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/dialectoindigena/DialectoindigenaDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/dialectoindigena/DialectoindigenaDAO.Class.php");
//Tipo Familia Ling��stica
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipofamilialinguistica/TipofamilialinguisticaDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tipofamilialinguistica/TipofamilialinguisticaDAO.Class.php");
//Interpretes
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/interpretes/InterpretesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/interpretes/InterpretesDAO.Class.php");
//�rdenes Protecciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ordenesprotecciones/OrdenesproteccionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ordenesprotecciones/OrdenesproteccionesDAO.Class.php");
//Estados Psicof�sicos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estadospsicofisicos/EstadospsicofisicosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estadospsicofisicos/EstadospsicofisicosDAO.Class.php");
//V�ctima de Delincuencia Organizada
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/victimadeladelincuenciaorganizada/VictimadeladelincuenciaorganizadaDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/victimadeladelincuenciaorganizada/VictimadeladelincuenciaorganizadaDAO.Class.php");
//V�ctima de Violencia Genero
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/victimadeviolenciadegenero/VictimadeviolenciadegeneroDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/victimadeviolenciadegenero/VictimadeviolenciadegeneroDAO.Class.php");
//V�ctima de Trata
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/victimadetrata/VictimadetrataDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/victimadetrata/VictimadetrataDAO.Class.php");
//Grupos �tnicos
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

class ReporteCausasPorViolenciaController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarOfendidoscarpetas($OfendidoscarpetasDto) {
        $OfendidoscarpetasDto->setIdOfendidoCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getIdOfendidoCarpeta(), "utf8") : strtoupper($OfendidoscarpetasDto->getIdOfendidoCarpeta()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getIdOfendidoCarpeta())) {
            $OfendidoscarpetasDto->setIdOfendidoCarpeta($this->fechaMysql($OfendidoscarpetasDto->getIdOfendidoCarpeta()));
        }
        $OfendidoscarpetasDto->setIdCarpetaJudicial(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getIdCarpetaJudicial(), "utf8") : strtoupper($OfendidoscarpetasDto->getIdCarpetaJudicial()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getIdCarpetaJudicial())) {
            $OfendidoscarpetasDto->setIdCarpetaJudicial($this->fechaMysql($OfendidoscarpetasDto->getIdCarpetaJudicial()));
        }
        $OfendidoscarpetasDto->setActivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getActivo(), "utf8") : strtoupper($OfendidoscarpetasDto->getActivo()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getActivo())) {
            $OfendidoscarpetasDto->setActivo($this->fechaMysql($OfendidoscarpetasDto->getActivo()));
        }
        $OfendidoscarpetasDto->setFechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getFechaRegistro(), "utf8") : strtoupper($OfendidoscarpetasDto->getFechaRegistro()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getFechaRegistro())) {
            $OfendidoscarpetasDto->setFechaRegistro($this->fechaMysql($OfendidoscarpetasDto->getFechaRegistro()));
        }
        $OfendidoscarpetasDto->setFechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getFechaActualizacion(), "utf8") : strtoupper($OfendidoscarpetasDto->getFechaActualizacion()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getFechaActualizacion())) {
            $OfendidoscarpetasDto->setFechaActualizacion($this->fechaMysql($OfendidoscarpetasDto->getFechaActualizacion()));
        }
        $OfendidoscarpetasDto->setnombre(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidoscarpetasDto->getnombre())))));
        $OfendidoscarpetasDto->setpaterno(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidoscarpetasDto->getpaterno())))));
        $OfendidoscarpetasDto->setmaterno(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidoscarpetasDto->getmaterno())))));
        $OfendidoscarpetasDto->setRfc(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getRfc(), "utf8") : strtoupper($OfendidoscarpetasDto->getRfc()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getRfc())) {
            $OfendidoscarpetasDto->setRfc($this->fechaMysql($OfendidoscarpetasDto->getRfc()));
        }
        $OfendidoscarpetasDto->setCurp(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getCurp(), "utf8") : strtoupper($OfendidoscarpetasDto->getCurp()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getCurp())) {
            $OfendidoscarpetasDto->setCurp($this->fechaMysql($OfendidoscarpetasDto->getCurp()));
        }
        $OfendidoscarpetasDto->setCveOcupacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getCveOcupacion(), "utf8") : strtoupper($OfendidoscarpetasDto->getCveOcupacion()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getCveOcupacion())) {
            $OfendidoscarpetasDto->setCveOcupacion($this->fechaMysql($OfendidoscarpetasDto->getCveOcupacion()));
        }
        $OfendidoscarpetasDto->setCveTipoPersona(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getCveTipoPersona(), "utf8") : strtoupper($OfendidoscarpetasDto->getCveTipoPersona()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getCveTipoPersona())) {
            $OfendidoscarpetasDto->setCveTipoPersona($this->fechaMysql($OfendidoscarpetasDto->getCveTipoPersona()));
        }
        $OfendidoscarpetasDto->setCveGenero(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getCveGenero(), "utf8") : strtoupper($OfendidoscarpetasDto->getCveGenero()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getCveGenero())) {
            $OfendidoscarpetasDto->setCveGenero($this->fechaMysql($OfendidoscarpetasDto->getCveGenero()));
        }
        $OfendidoscarpetasDto->setCveTipoParte(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getCveTipoParte(), "utf8") : strtoupper($OfendidoscarpetasDto->getCveTipoParte()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getCveTipoParte())) {
            $OfendidoscarpetasDto->setCveTipoParte($this->fechaMysql($OfendidoscarpetasDto->getCveTipoParte()));
        }
        $OfendidoscarpetasDto->setCveTipoReligion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getCveTipoReligion(), "utf8") : strtoupper($OfendidoscarpetasDto->getCveTipoReligion()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getCveTipoReligion())) {
            $OfendidoscarpetasDto->setCveTipoReligion($this->fechaMysql($OfendidoscarpetasDto->getCveTipoReligion()));
        }
        $OfendidoscarpetasDto->setFechaNacimiento(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getFechaNacimiento(), "utf8") : strtoupper($OfendidoscarpetasDto->getFechaNacimiento()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getFechaNacimiento())) {
            $OfendidoscarpetasDto->setFechaNacimiento($this->fechaMysql($OfendidoscarpetasDto->getFechaNacimiento()));
        }
        $OfendidoscarpetasDto->setEdad(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getEdad(), "utf8") : strtoupper($OfendidoscarpetasDto->getEdad()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getEdad())) {
            $OfendidoscarpetasDto->setEdad($this->fechaMysql($OfendidoscarpetasDto->getEdad()));
        }
        $OfendidoscarpetasDto->setCvePaisNacimiento(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getCvePaisNacimiento(), "utf8") : strtoupper($OfendidoscarpetasDto->getCvePaisNacimiento()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getCvePaisNacimiento())) {
            $OfendidoscarpetasDto->setCvePaisNacimiento($this->fechaMysql($OfendidoscarpetasDto->getCvePaisNacimiento()));
        }
        $OfendidoscarpetasDto->setCveEstadoNacimiento(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getCveEstadoNacimiento(), "utf8") : strtoupper($OfendidoscarpetasDto->getCveEstadoNacimiento()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getCveEstadoNacimiento())) {
            $OfendidoscarpetasDto->setCveEstadoNacimiento($this->fechaMysql($OfendidoscarpetasDto->getCveEstadoNacimiento()));
        }
        $OfendidoscarpetasDto->setEstadoNacimiento(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getEstadoNacimiento(), "utf8") : strtoupper($OfendidoscarpetasDto->getEstadoNacimiento()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getEstadoNacimiento())) {
            $OfendidoscarpetasDto->setEstadoNacimiento($this->fechaMysql($OfendidoscarpetasDto->getEstadoNacimiento()));
        }
        $OfendidoscarpetasDto->setCveMunicipioNacimiento(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getCveMunicipioNacimiento(), "utf8") : strtoupper($OfendidoscarpetasDto->getCveMunicipioNacimiento()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getCveMunicipioNacimiento())) {
            $OfendidoscarpetasDto->setCveMunicipioNacimiento($this->fechaMysql($OfendidoscarpetasDto->getCveMunicipioNacimiento()));
        }
        $OfendidoscarpetasDto->setMunicipioNacimiento(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getMunicipioNacimiento(), "utf8") : strtoupper($OfendidoscarpetasDto->getMunicipioNacimiento()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getMunicipioNacimiento())) {
            $OfendidoscarpetasDto->setMunicipioNacimiento($this->fechaMysql($OfendidoscarpetasDto->getMunicipioNacimiento()));
        }
        $OfendidoscarpetasDto->setCveEstadoCivil(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getCveEstadoCivil(), "utf8") : strtoupper($OfendidoscarpetasDto->getCveEstadoCivil()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getCveEstadoCivil())) {
            $OfendidoscarpetasDto->setCveEstadoCivil($this->fechaMysql($OfendidoscarpetasDto->getCveEstadoCivil()));
        }
        $OfendidoscarpetasDto->setCveAlfabetismo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getCveAlfabetismo(), "utf8") : strtoupper($OfendidoscarpetasDto->getCveAlfabetismo()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getCveAlfabetismo())) {
            $OfendidoscarpetasDto->setCveAlfabetismo($this->fechaMysql($OfendidoscarpetasDto->getCveAlfabetismo()));
        }
        $OfendidoscarpetasDto->setCveNivelInstruccion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getCveNivelInstruccion(), "utf8") : strtoupper($OfendidoscarpetasDto->getCveNivelInstruccion()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getCveNivelInstruccion())) {
            $OfendidoscarpetasDto->setCveNivelInstruccion($this->fechaMysql($OfendidoscarpetasDto->getCveNivelInstruccion()));
        }
        $OfendidoscarpetasDto->setCveEspanol(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getCveEspanol(), "utf8") : strtoupper($OfendidoscarpetasDto->getCveEspanol()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getCveEspanol())) {
            $OfendidoscarpetasDto->setCveEspanol($this->fechaMysql($OfendidoscarpetasDto->getCveEspanol()));
        }
        $OfendidoscarpetasDto->setCveDialectoIndigena(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getCveDialectoIndigena(), "utf8") : strtoupper($OfendidoscarpetasDto->getCveDialectoIndigena()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getCveDialectoIndigena())) {
            $OfendidoscarpetasDto->setCveDialectoIndigena($this->fechaMysql($OfendidoscarpetasDto->getCveDialectoIndigena()));
        }
        $OfendidoscarpetasDto->setCveTipoFamiliaLinguistica(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getCveTipoFamiliaLinguistica(), "utf8") : strtoupper($OfendidoscarpetasDto->getCveTipoFamiliaLinguistica()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getCveTipoFamiliaLinguistica())) {
            $OfendidoscarpetasDto->setCveTipoFamiliaLinguistica($this->fechaMysql($OfendidoscarpetasDto->getCveTipoFamiliaLinguistica()));
        }
        $OfendidoscarpetasDto->setCveInterprete(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getCveInterprete(), "utf8") : strtoupper($OfendidoscarpetasDto->getCveInterprete()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getCveInterprete())) {
            $OfendidoscarpetasDto->setCveInterprete($this->fechaMysql($OfendidoscarpetasDto->getCveInterprete()));
        }
        $OfendidoscarpetasDto->setCveOrdenProteccion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getCveOrdenProteccion(), "utf8") : strtoupper($OfendidoscarpetasDto->getCveOrdenProteccion()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getCveOrdenProteccion())) {
            $OfendidoscarpetasDto->setCveOrdenProteccion($this->fechaMysql($OfendidoscarpetasDto->getCveOrdenProteccion()));
        }
        $OfendidoscarpetasDto->setCveEstadoPsicofisico(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getCveEstadoPsicofisico(), "utf8") : strtoupper($OfendidoscarpetasDto->getCveEstadoPsicofisico()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getCveEstadoPsicofisico())) {
            $OfendidoscarpetasDto->setCveEstadoPsicofisico($this->fechaMysql($OfendidoscarpetasDto->getCveEstadoPsicofisico()));
        }
        //$OfendidoscarpetasDto->setcveNacionalidad(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidoscarpetasDto->getcveNacionalidad(),"utf8"):strtoupper($OfendidoscarpetasDto->getcveNacionalidad()))))));
        //if($this->esFecha($OfendidoscarpetasDto->getcveNacionalidad())){
        //$OfendidoscarpetasDto->setcveNacionalidad($this->fechaMysql($OfendidoscarpetasDto->getcveNacionalidad()));
        //}
        $OfendidoscarpetasDto->setNombreMoral(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getNombreMoral(), "utf8") : strtoupper($OfendidoscarpetasDto->getNombreMoral()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getNombreMoral())) {
            $OfendidoscarpetasDto->setNombreMoral($this->fechaMysql($OfendidoscarpetasDto->getNombreMoral()));
        }
        $OfendidoscarpetasDto->setCveVictimaDeLaDelincuenciaOrganizada(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada(), "utf8") : strtoupper($OfendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada())) {
            $OfendidoscarpetasDto->setCveVictimaDeLaDelincuenciaOrganizada($this->fechaMysql($OfendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada()));
        }
        $OfendidoscarpetasDto->setCveVictimaDeViolenciaDeGenero(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero(), "utf8") : strtoupper($OfendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero())) {
            $OfendidoscarpetasDto->setCveVictimaDeViolenciaDeGenero($this->fechaMysql($OfendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero()));
        }
        $OfendidoscarpetasDto->setCveVictimaDeTrata(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getCveVictimaDeTrata(), "utf8") : strtoupper($OfendidoscarpetasDto->getCveVictimaDeTrata()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getCveVictimaDeTrata())) {
            $OfendidoscarpetasDto->setCveVictimaDeTrata($this->fechaMysql($OfendidoscarpetasDto->getCveVictimaDeTrata()));
        }
        $OfendidoscarpetasDto->setCveVictimaDeAcoso(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getCveVictimaDeAcoso(), "utf8") : strtoupper($OfendidoscarpetasDto->getCveVictimaDeAcoso()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getCveVictimaDeAcoso())) {
            $OfendidoscarpetasDto->setCveVictimaDeAcoso($this->fechaMysql($OfendidoscarpetasDto->getCveVictimaDeAcoso()));
        }
        $OfendidoscarpetasDto->setDesaparecido(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getDesaparecido(), "utf8") : strtoupper($OfendidoscarpetasDto->getDesaparecido()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getDesaparecido())) {
            $OfendidoscarpetasDto->setDesaparecido($this->fechaMysql($OfendidoscarpetasDto->getDesaparecido()));
        }
        $OfendidoscarpetasDto->setNumHijos(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getNumHijos(), "utf8") : strtoupper($OfendidoscarpetasDto->getNumHijos()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getNumHijos())) {
            $OfendidoscarpetasDto->setNumHijos($this->fechaMysql($OfendidoscarpetasDto->getNumHijos()));
        }
        $OfendidoscarpetasDto->setEmbarazada(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getEmbarazada(), "utf8") : strtoupper($OfendidoscarpetasDto->getEmbarazada()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getEmbarazada())) {
            $OfendidoscarpetasDto->setEmbarazada($this->fechaMysql($OfendidoscarpetasDto->getEmbarazada()));
        }
        $OfendidoscarpetasDto->setCveGrupoEdnico(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OfendidoscarpetasDto->getCveGrupoEdnico(), "utf8") : strtoupper($OfendidoscarpetasDto->getCveGrupoEdnico()))))));
        if ($this->esFecha($OfendidoscarpetasDto->getCveGrupoEdnico())) {
            $OfendidoscarpetasDto->setCveGrupoEdnico($this->fechaMysql($OfendidoscarpetasDto->getCveGrupoEdnico()));
        }
        return $OfendidoscarpetasDto;
    }

    private function esFecha($fecha) {
        if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecha)) {
            return true;
        }
        return false;
    }

    private function esFechaMysql($fecha) {
        if (preg_match('/^\d{4}\-\d{1,2}\-\d{1,2}$/', $fecha)) {
            return true;
        }
        return false;
    }

    private function fechaMysql($fecha) {
        list($dia, $mes, $year) = explode("/", $fecha);
        return $year . "-" . $mes . "-" . $dia;
    }

    private function fechaNormal($fecha) {
        list($dia, $mes, $year) = explode("/", $fecha);
        return $year . "-" . $mes . "-" . $dia;
    }

    public function reporteCausasPorViolenciaPrevio($OfendidoscarpetasDto, $datos, $paginacion) {
        $consulta = "";

        switch ($datos["nivel"]) {
            case 1:
                if ($datos["cveModalidad"] == 0 && $datos["filtroMV"] == true) {
                    $datos["groups"] = "m.desModalidad";
                } else if ($datos["cveTipoViolencia"] == 0 && $datos["filtroTV"] == true) {
                    //$datos["groups"] = "consulta.TipoViolencia";
                } else {
                    $datos["groups"] = "";
                }
                break;
            case 2:
                if ($datos["cveModalidad"] == 0 && $datos["filtroMV"] == true) {
                    $datos["groups"] = "r.desRegion,m.desModalidad";
                } else if ($datos["cveTipoViolencia"] == 0 && $datos["filtroTV"] == true) {
//                    $datos["groups"] = "r.desRegion,consulta.TipoViolencia";
                } else {
                    $datos["groups"] = "r.desRegion";
                }
                break;
            case 3:
                if ($datos["cveModalidad"] == 0 && $datos["filtroMV"] == true) {
                    $datos["groups"] = "d.desDistrito,m.desModalidad";
                } else if ($datos["cveTipoViolencia"] == 0 && $datos["filtroTV"] == true) {
//                    $datos["groups"] = "d.desDistrito,consulta.TipoViolencia";
                } else {
                    $datos["groups"] = "d.desDistrito";
                }
                break;
            case 4:
                if ($datos["cveModalidad"] == 0 && $datos["filtroMV"] == true) {
                    $datos["groups"] = "j.desJuzgado,m.desModalidad";
                } else if ($datos["cveTipoViolencia"] == 0 && $datos["filtroTV"] == true) {
//                    $datos["groups"] = "j.desJuzgado,consulta.TipoViolencia";
                } else {
                    $datos["groups"] = "j.desJuzgado";
                }
                break;
            case 5:
                if ($datos["cveModalidad"] == 0 && $datos["filtroMV"] == true) {
                    $datos["groups"] = "cj.idCarpetaJudicial,m.desModalidad";
                } else if ($datos["cveTipoViolencia"] == 0 && $datos["filtroTV"] == true) {
//                    $datos["groups"] = "cj.idCarpetaJudicial,consulta.TipoViolencia";
                } else {
                    $datos["groups"] = "cj.idCarpetaJudicial";
                }
                break;
            case 6:
                if ($datos["cveModalidad"] == 0 && $datos["filtroMV"] == true) {
                    $datos["groups"] = "cj.idCarpetaJudicial,m.desModalidad";
                } else if ($datos["cveTipoViolencia"] == 0 && $datos["filtroTV"] == true) {
                    $datos["groups"] = "oc.idOfendidoCarpeta,ic.idImputadoCarpeta";
                } else {
                    $datos["groups"] = "oc.idOfendidoCarpeta,ic.idImputadoCarpeta";
                }
                break;
        }
        $consulta = $this->reporteCausasPorViolencia($OfendidoscarpetasDto, $datos, $paginacion);
        return $consulta;
    }

    public function reporteCausasPorViolencia($OfendidoscarpetasDto, $datos, $paginacion) {
        $ofendidoscarpetasDto = $this->validarOfendidoscarpetas($OfendidoscarpetasDto);
        $sqlIntervalo = "";
        $params = array();
        $params["fields"] = " count(distinct(cj.idCarpetaJudicial)) as totalCount,";
        /* CONDICIONES PARA OBTENER CAUSAS POR TIPO DE VIOLENCIA (SI Y SE DESCONOCE) */
//        $delincuencia_organizada = " (oc.cveVictimaDeLaDelincuenciaOrganizada=1 OR oc.cveVictimaDeLaDelincuenciaOrganizada=3)";
//        $de_genero = "(oc.cveVictimaDeViolenciaDeGenero=1 OR oc.cveVictimaDeViolenciaDeGenero=3)";
//        $de_trata = "(oc.cveVictimaDeTrata=1 OR oc.cveVictimaDeTrata=3)";
//        $de_acoso = "(oc.cveVictimaDeAcoso=1 OR oc.cveVictimaDeAcoso=3)";
        /* CONDICIONES PARA OBTENER CAUSAS POR TIPO DE VIOLENCIA (SI) */
        $delincuencia_organizada = " (oc.cveVictimaDeLaDelincuenciaOrganizada=1)";
        $de_genero = "(oc.cveVictimaDeViolenciaDeGenero=1)";
        $de_trata = "(oc.cveVictimaDeTrata=1)";
        $de_acoso = "(oc.cveVictimaDeAcoso=1)";
        $causas = " AND (cj.cveTipoCarpeta BETWEEN 1 AND 5)";
        $params["orders"] = " totalCount DESC";
        if ($datos["detalles"] == "detalle" || $datos["nivel"] == 6) {
            $params["fields"] = "";
            $params["orders"] = "cj.anio DESC,cj.numero ASC,oc.nombre ASC";
        }
        if($datos["nivel"] == 5){
            $params["orders"] = "cj.anio DESC,cj.numero ASC";
        }
        $params["fields"] .= "cj.idCarpetaJudicial,tc.desTipoCarpeta,cj.numero,cj.anio,oc.nombre,oc.paterno,oc.materno,oc.fechaRegistro,cj.fechaRadicacion,
            tj.cveTipoJuzgado,tj.desTipoJuzgado,j.desJuzgado,oc.nombreMoral,oc.cveTipoPersona,
            d.desDistrito,r.desRegion,r.cveRegion,d.cveDistrito,j.cveJuzgado,oc.idOfendidoCarpeta, 
            ic.nombre nombreI,ic.paterno paternoI,ic.materno maternoI,ic.nombreMoral nombreMoralI,ic.cveTipoPersona cveTipoPersonaI";
        $params["tables"] = "tblcarpetasjudiciales cj 
            INNER JOIN tblimpofedelcarpetas ioc ON cj.idCarpetaJudicial = ioc.idCarpetaJudicial 
            INNER JOIN tblofendidoscarpetas oc ON ioc.idOfendidoCarpeta = oc.idOfendidoCarpeta 
            INNER JOIN tblimputadoscarpetas ic ON ioc.idImputadoCarpeta = ic.idImputadoCarpeta 
            INNER JOIN tbltiposcarpetas tc ON cj.cveTipoCarpeta = tc.cveTipoCarpeta 
            INNER JOIN tbljuzgados j ON cj.cveJuzgado = j.cveJuzgado 
            INNER JOIN tbltiposjuzgados tj ON j.cveTipojuzgado = tj.cveTipoJuzgado 
            INNER JOIN tbldistritos d ON j.cveDistrito = d.cveDistrito 
            INNER JOIN tblregiones r ON j.cveRegion = r.cveRegion";
        $params["conditions"] = "cj.activo='S' AND oc.activo='S' AND ioc.activo='S' AND ic.activo='S' AND d.activo='S' AND r.activo='S' "
                . "AND tj.activo='S' AND tc.activo='S' AND j.activo='S' AND ic.cveTipoPersona=1"
                . $causas;
        if ($datos["cveRegion"] != "") {
            $params["conditions"].=" AND r.cveRegion=" . $datos["cveRegion"];
        }
        if ($datos["cveDistrito"] != "") {
            $params["conditions"].=" AND d.cveDistrito=" . $datos["cveDistrito"];
        }
        if ($datos["numero"] != "") {
            $params["conditions"].=" AND cj.numero=" . $datos["numero"];
        }
        if ($datos["idCarpetaJudicial"] != "") {
            $params["conditions"].=" AND cj.idCarpetaJudicial=" . $datos["idCarpetaJudicial"];
        }
        if ($datos["anio"] != "") {
            $params["conditions"].=" AND cj.anio=" . $datos["anio"];
        }
        if ($datos["mes"] != 0) {
            $params["conditions"].= " AND (month(cj.fechaRadicacion)=" . $datos['mes'] . ")";
            if ($datos["anioMes"] != "") {
                $params["conditions"].= " AND (year(cj.fechaRadicacion)=" . $datos['anioMes'] . ")";
            }
        }
        if ($datos["fechaInicial"] != "") {
            $fechaInicio = explode("/", $datos["fechaInicial"]);
            $params["conditions"].= " AND cj.fechaRadicacion >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
            if ($datos["fechaFinal"] != "") {
                $fechaFinal = explode("/", $datos["fechaFinal"]);
                $params["conditions"].=" AND  cj.fechaRadicacion <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
            }
        }
        if ($datos["cveJuzgado"] != "") {
            $params["conditions"].=" AND cj.cveJuzgado=" . $datos["cveJuzgado"];
        }
        if ($datos["cveTipoCarpeta"] != "") {
            $params["conditions"].=" AND cj.cveTipoCarpeta=" . $datos["cveTipoCarpeta"];
        }
        if ($datos["cveTipoJuzgado"] != 0) {
            $params["conditions"].=" AND tj.cveTipoJuzgado=" . $datos["cveTipoJuzgado"];
        }
//        if ($datos["cveModalidad"] == 0 && $datos["filtroMV"] == true) {
//            $params["fields"] .=",m.cveModalidadAcoso,m.desModalidadAcoso";
//            $params["tables"] .=" INNER JOIN tblsexualescarpetas sex ON ioc.idImpOfeDelCarpeta=sex.idImpOfeDelCarpeta"
//                    . " INNER JOIN tblmodalidadesacosos m ON sex.cveModalidadAcoso=m.cveModalidadAcoso";
//            $params["conditions"].=" AND m.activo='S'";
//        }
//        if ($datos["cveModalidad"] != 0) {
//            $params["fields"] .=",m.cveModalidadAcoso,m.desModalidadAcoso";
//            $params["tables"] .=" INNER JOIN tblsexualescarpetas sex ON ioc.idImpOfeDelCarpeta=sex.idImpOfeDelCarpeta"
//                    . " INNER JOIN tblmodalidadesacosos m ON sex.cveModalidadAcoso=m.cveModalidadAcoso";
//            $params["conditions"].=" AND m.activo='S' AND m.cveModalidadAcoso=".$datos["cveModalidad"];
//        }
        if ($datos["cveModalidad"] == 0 && $datos["filtroMV"] == true) {
            $params["fields"] .=",m.cveModalidad,m.desModalidad";
            $params["tables"] .=" INNER JOIN tblmodalidades m ON ioc.cveModalidad=m.cveModalidad";
            $params["conditions"].=" AND ioc.cveModalidad=m.cveModalidad"
                    . " AND m.activo='S'";
        }
        if ($datos["cveModalidad"] != 0) {
            $params["fields"] .=",m.cveModalidad,m.desModalidad";
            $params["tables"] .=" INNER JOIN tblmodalidades m ON ioc.cveModalidad=m.cveModalidad";
            $params["conditions"].=" AND ioc.cveModalidad=" . $datos["cveModalidad"] . " AND ioc.cveModalidad=m.cveModalidad"
                    . " AND m.activo='S' AND cj.idCarpetaJudicial=ioc.idCarpetaJudicial";
        }
        if ($datos["cveTipoViolencia"] == 0 && $datos["filtroTV"] == true) {
            $anio = "";
            $mes = "";
            $rango_fecha = "";
            $tipo_juzgado = "";
            $id_causa = "";
            if ($datos["anio"] != "") {
                $anio = " AND cj.anio=" . $datos["anio"];
            }
            if ($datos["mes"] != 0) {
                $mes.= " AND (month(cj.fechaRadicacion)=" . $datos['mes'] . ")";
                if ($datos["anioMes"] != "") {
                    $mes.= " AND (year(cj.fechaRadicacion)=" . $datos['anioMes'] . ")";
                }
            }
            if ($datos["fechaInicial"] != "") {
                $fechaInicio = explode("/", $datos["fechaInicial"]);
                $rango_fecha.= " AND cj.fechaRadicacion >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
                if ($datos["fechaFinal"] != "") {
                    $fechaFinal = explode("/", $datos["fechaFinal"]);
                    $rango_fecha.=" AND  cj.fechaRadicacion <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
                }
            }
            if ($datos["cveTipoJuzgado"] != 0) {
                $tipo_juzgado.=" AND tj.cveTipoJuzgado=" . $datos["cveTipoJuzgado"];
            }
            if ($datos["idCarpetaJudicial"] != "") {
                $id_causa.=" AND cj.idCarpetaJudicial=" . $datos["idCarpetaJudicial"];
            }
            $campos = "oc.cveVictimaDeLaDelincuenciaOrganizada,oc.cveVictimaDeViolenciaDeGenero,oc.cveVictimaDeTrata,oc.cveVictimaDeAcoso,
                cj.idCarpetaJudicial,tc.desTipoCarpeta,cj.numero,cj.anio,oc.nombre,oc.paterno,oc.materno,oc.fechaRegistro,cj.fechaRadicacion,
            tj.cveTipoJuzgado,tj.desTipoJuzgado,j.desJuzgado,oc.nombreMoral,oc.cveTipoPersona,
            d.desDistrito,r.desRegion,r.cveRegion,d.cveDistrito,j.cveJuzgado,oc.idOfendidoCarpeta, 
            ic.nombre nombreI,ic.paterno paternoI,ic.materno maternoI,ic.nombreMoral nombreMoralI,ic.cveTipoPersona cveTipoPersonaI";
            $params["fields"] = " * ";
            $tablas = "tblcarpetasjudiciales cj
                INNER JOIN tblimpofedelcarpetas ioc ON cj.idCarpetaJudicial=ioc.idCarpetaJudicial
                INNER JOIN tblofendidoscarpetas oc ON ioc.idOfendidoCarpeta=oc.idOfendidoCarpeta
                INNER JOIN tblimputadoscarpetas ic ON ioc.idImputadoCarpeta=ic.idImputadoCarpeta
                INNER JOIN tbltiposcarpetas tc ON cj.cveTipoCarpeta = tc.cveTipoCarpeta 
                INNER JOIN tbljuzgados j ON cj.cveJuzgado = j.cveJuzgado 
                INNER JOIN tbltiposjuzgados tj ON j.cveTipojuzgado = tj.cveTipoJuzgado 
                INNER JOIN tbldistritos d ON j.cveDistrito = d.cveDistrito 
                INNER JOIN tblregiones r ON j.cveRegion = r.cveRegion";
            $condiciones = " AND cj.activo='S' AND oc.activo='S' AND ic.activo='S' AND ioc.activo='S' AND d.activo='S' AND r.activo='S' AND tj.activo='S'
            AND tc.activo='S' AND j.activo='S'" . $anio . $mes . $rango_fecha . $id_causa . $tipo_juzgado . $causas;
            $renombrar = " AS consulta";
            $agrupar = "";
            if ($datos["nivel"] == 1) {
                $agrupar = "";
            } else if ($datos["nivel"] == 2) {
                $agrupar.= " GROUP BY consulta.cveRegion ";
            } else if ($datos["nivel"] == 3) {
                $agrupar.= " GROUP BY consulta.cveDistrito ";
            } else if ($datos["nivel"] == 4) {
                $agrupar.= " GROUP BY consulta.cveJuzgado ";
            } else if ($datos["nivel"] == 5) {
                $agrupar.= " GROUP BY consulta.idCarpetaJudicial ";
            } else if ($datos["nivel"] == 6) {
                $agrupar.= " GROUP BY consulta.idCarpetaJudicial ";
            }
            $regs = ",consulta.cveVictimaDeLaDelincuenciaOrganizada,consulta.cveVictimaDeViolenciaDeGenero,consulta.cveVictimaDeTrata,consulta.cveVictimaDeAcoso
                ,consulta.fechaRegistro,consulta.idCarpetaJudicial,consulta.desTipoCarpeta,consulta.numero,consulta.anio,consulta.nombre,consulta.paterno,
                consulta.materno,consulta.fechaRadicacion,
            consulta.cveTipoJuzgado,consulta.desTipoJuzgado,consulta.desJuzgado,consulta.nombreMoral,consulta.cveTipoPersona,
            consulta.desDistrito,consulta.desRegion,consulta.cveRegion,consulta.cveDistrito,consulta.cveJuzgado,consulta.idOfendidoCarpeta, 
            consulta.nombreI,consulta.paternoI,consulta.maternoI,consulta.nombreMoralI,consulta.cveTipoPersonaI,";
            $params["tables"] = ""
                    . "(SELECT COUNT(*) AS Total" . $regs . " 'DO' AS TipoViolencia "
                    . "FROM (SELECT " . $campos . " FROM " . $tablas . " WHERE " . $delincuencia_organizada . "" . $condiciones . " GROUP BY cj.idCarpetaJudicial) " . $renombrar . $agrupar . ""
                    . " UNION "
                    . "SELECT COUNT(*) AS Total" . $regs . " 'DG' AS TipoViolencia"
                    . " FROM (SELECT " . $campos . " FROM " . $tablas . " WHERE " . $de_genero . "" . $condiciones . " GROUP BY cj.idCarpetaJudicial) " . $renombrar . $agrupar . ""
                    . " UNION "
                    . "SELECT COUNT(*) AS Total" . $regs . " 'DT' AS TipoViolencia"
                    . " FROM (SELECT " . $campos . " FROM " . $tablas . " WHERE " . $de_trata . "" . $condiciones . " GROUP BY cj.idCarpetaJudicial) " . $renombrar . $agrupar . ""
                    . " UNION "
                    . "SELECT COUNT(*) AS Total" . $regs . " 'DA' AS TipoViolencia"
                    . " FROM (SELECT " . $campos . " FROM " . $tablas . " WHERE " . $de_acoso . "" . $condiciones . " GROUP BY cj.idCarpetaJudicial) " . $renombrar . $agrupar . ""
                    . ") AS w";
            $params["conditions"] = " w.TipoViolencia IS NOT NULL";
            $params["orders"] = " w.fechaRegistro";
        }
        if ($datos["cveTipoViolencia"] == 1) {
            $params["fields"] .=",oc.cveVictimaDeLaDelincuenciaOrganizada";
            $params["conditions"].=" AND " . $delincuencia_organizada;
        }
        if ($datos["cveTipoViolencia"] == 2) {
            $params["fields"] .=",oc.cveVictimaDeViolenciaDeGenero";
            $params["conditions"].=" AND " . $de_genero;
        }
        if ($datos["cveTipoViolencia"] == 3) {
            $params["fields"] .=",oc.cveVictimaDeTrata";
            $params["conditions"].=" AND " . $de_trata;
        }
        if ($datos["cveTipoViolencia"] == 4) {
            $params["fields"] .=",oc.cveVictimaDeAcoso";
            $params["conditions"].=" AND " . $de_acoso;
        }
        if ($sqlIntervalo != "") {
            $params["conditions"].=$sqlIntervalo . " ";
        }
        if ($datos["groups"] != "") {
            $params["groups"] = $datos["groups"];
        }
        if (($paginacion["paginacion"] == "false") || ($paginacion["paginacion"] == false)) {
            if ($datos["cveTipoViolencia"] == 0 && $datos["filtroTV"] == true) {
                $aux = "count(*) as totalCount";
            } else {
                $aux = "count(x.totalCount) as totalCount";
            }
            if ($datos["detalles"] == "detalle") {
                $aux = "count(x.idOfendidoCarpeta) as totalCount";
            }
            $params["fields"] = $aux . " FROM(SELECT " . $params["fields"];
            $params["orders"].=") as x";
        }
        $SelectDao = new SelectDAO();
        return $SelectDao->selectDAO($params, null, $paginacion);
    }

    public function numCausasPrevio($OfendidoscarpetasDto, $datos, $paginacion) {
        $consulta = "";
//        switch ($datos["nivel"]) {
//            case 1:
//                break;
//            case 2:
//                break;
//            case 3:
//                break;
//            case 4:
//                break;
//            case 5:
//                break;
//            case 6:
//                break;
//        }
        $consulta = $this->numCausas($OfendidoscarpetasDto, $datos, $paginacion);
        return $consulta;
    }

    public function numCausas($OfendidoscarpetasDto, $datos, $paginacion) {
        $params = array();
        //$tipos_violencia = " (oc.cveVictimaDeLaDelincuenciaOrganizada=1 or oc.cveVictimaDeLaDelincuenciaOrganizada=3 or oc.cveVictimaDeViolenciaDeGenero=1 OR oc.cveVictimaDeViolenciaDeGenero=3 or oc.cveVictimaDeTrata=1 or oc.cveVictimaDeTrata=3 or oc.cveVictimaDeAcoso=1 or oc.cveVictimaDeAcoso=3)";
        $tipos_violencia = " (oc.cveVictimaDeLaDelincuenciaOrganizada=1 or oc.cveVictimaDeViolenciaDeGenero=1 OR oc.cveVictimaDeTrata=1 or oc.cveVictimaDeAcoso=1)";
        $params["fields"] = " count(DISTINCT(cj.idCarpetaJudicial)) as numCausas";
        $params["tables"] = "tblcarpetasjudiciales cj, tblofendidoscarpetas oc, tblimputadoscarpetas ic, tblimpofedelcarpetas ioc, 
            tbljuzgados j,tbldistritos d,tblregiones r,tbltiposjuzgados tj, tbltiposcarpetas tc";
        $params["conditions"] = "ioc.idImputadoCarpeta=ic.idImputadoCarpeta AND ioc.idOfendidoCarpeta=oc.idOfendidoCarpeta
            AND ioc.idCarpetaJudicial=cj.idCarpetaJudicial AND cj.activo='S' AND oc.activo='S' AND ioc.activo='S' AND ic.activo='S' 
            AND tc.cveTipoCarpeta=cj.cveTipoCarpeta AND j.cveJuzgado=cj.cveJuzgado AND d.activo='S' AND r.activo='S' AND tj.activo='S'
            AND tc.activo='S' AND j.activo='S' AND tj.cveTipoJuzgado=j.cveTipoJuzgado
            AND j.cveDistrito=d.cveDistrito
            AND j.cveRegion=r.cveRegion AND " . $tipos_violencia;
        if ($datos["anio"] != "") {
            $params["conditions"].=" AND cj.anio=" . $datos["anio"];
        }
        if ($datos["mes"] != 0) {
            $params["conditions"].= " AND (month(cj.fechaRadicacion)=" . $datos['mes'] . ")";
            if ($datos["anioMes"] != "") {
                $params["conditions"].= " AND (year(cj.fechaRadicacion)=" . $datos['anioMes'] . ")";
            }
        }
        if ($datos["fechaInicial"] != "") {
            $fechaInicio = explode("/", $datos["fechaInicial"]);
            $params["conditions"].= " AND cj.fechaRadicacion >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
            if ($datos["fechaFinal"] != "") {
                $fechaFinal = explode("/", $datos["fechaFinal"]);
                $params["conditions"].=" AND  cj.fechaRadicacion <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
            }
        }
        if ($datos["cveTipoJuzgado"] != 0) {
            $params["conditions"].=" AND tj.cveTipoJuzgado=" . $datos["cveTipoJuzgado"];
        }

        $SelectDao = new SelectDAO();
        return $SelectDao->selectDAO($params, null, $paginacion);
    }

}
