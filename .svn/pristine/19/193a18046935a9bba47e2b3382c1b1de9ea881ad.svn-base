<?php

//ihs
/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 FACADES
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Teclogias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidoscarpetas/OfendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/ofendidoscarpetas/OfendidoscarpetasController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipospersonas/TipospersonasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tipospersonas/TipospersonasController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/generos/GenerosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/generos/GenerosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");

class OfendidoscarpetasFacade {

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

    /*
     * Para actualizar carpetas judiciales
     */

    public function selectOfendidoscarpetas($OfendidoscarpetasDto) {
        /* $OfendidoscarpetasDto=$this->validarOfendidoscarpetas($OfendidoscarpetasDto);
          $OfendidoscarpetasController = new OfendidoscarpetasController();
          $OfendidoscarpetasDto = $OfendidoscarpetasController->selectOfendidoscarpetas($OfendidoscarpetasDto);
          if($OfendidoscarpetasDto!=""){
          $dtoToJson = new DtoToJson($OfendidoscarpetasDto);
          return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
          }
          $jsonDto = new Encode_JSON();
          return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR")); */
        $OfendidoscarpetasDto = $this->validarOfendidoscarpetas($OfendidoscarpetasDto);
        $OfendidoscarpetasController = new OfendidoscarpetasController();
        $OfendidoscarpetasDto = $OfendidoscarpetasController->selectOfendidoscarpetas($OfendidoscarpetasDto);
        $json = "";
        $x = 1;
        $tiposPersonasDto = new TipospersonasDTO ();
        $tiposPersonasDao = new TipospersonasDAO ();
        $generosDto = new GenerosDTO();
        $generosDao = new GenerosDAO();
        $carpetasJudicialesDto = new CarpetasjudicialesDTO();
        $carpetasJudicialesDao = new CarpetasjudicialesDAO();

        if ($OfendidoscarpetasDto != "") {
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($OfendidoscarpetasDto) . '",';
            $json .= '"data":[';
            foreach ($OfendidoscarpetasDto as $OfendidoCarpeta) {
                $tiposPersonasDto->setCveTipoPersona($OfendidoCarpeta->getCveTipoPersona());
                $rsPersona = $tiposPersonasDao->selectTipospersonas($tiposPersonasDto);
                $generosDto->setCveGenero($OfendidoCarpeta->getCveGenero());
                $rsGenero = $generosDao->selectGeneros($generosDto);
                $carpetasJudicialesDto->setIdCarpetaJudicial($OfendidoCarpeta->getIdCarpetaJudicial());
                $rsCarpetasJudiciales = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);

                $json .= "{";
                $json .= '"idOfendidoCarpeta":' . json_encode(utf8_encode($OfendidoCarpeta->getIdOfendidoCarpeta())) . ",";
                $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($OfendidoCarpeta->getIdCarpetaJudicial())) . ",";
                if ($rsCarpetasJudiciales != "") {
                    $json .= '"cveTipoCarpeta":' . json_encode(utf8_encode($rsCarpetasJudiciales[0]->getCveTipoCarpeta())) . ",";
                    if ($rsCarpetasJudiciales[0]->getCveTipoCarpeta() != "" || $rsCarpetasJudiciales[0]->getCveTipoCarpeta() != null && $rsCarpetasJudiciales[0]->getCveTipoCarpeta() != 0) {
                        $tiposCarpetasDto = new TiposcarpetasDTO();
                        $tiposCarpetasDao = new TiposcarpetasDAO();
                        $tiposCarpetasDto->setCveTipoCarpeta($rsCarpetasJudiciales[0]->getCveTipoCarpeta());
                        $rsCarpetas = $tiposCarpetasDao->selectTiposcarpetas($tiposCarpetasDto);
                        $json .= '"desCarpeta":' . json_encode(utf8_encode($rsCarpetas[0]->getDesTipoCarpeta())) . ",";
                    } else {
                        $json .= '"desCarpeta": "",';
                    }
                    $json .= '"numero":' . json_encode(utf8_encode($rsCarpetasJudiciales[0]->getNumero())) . ",";
                    $json .= '"anio":' . json_encode(utf8_encode($rsCarpetasJudiciales[0]->getAnio())) . ",";
                    $json .= '"nuc":' . json_encode(utf8_encode($rsCarpetasJudiciales[0]->getNuc())) . ",";
                    $json .= '"carpetaInv":' . json_encode(utf8_encode($rsCarpetasJudiciales[0]->getCarpetaInv())) . ",";
                } else {
                    $json .= '"cveTipoCarpeta": "",';
                    $json .= '"numero": "",';
                    $json .= '"anio": "",';
                    $json .= '"nuc": "",';
                    $json .= '"carpetaInv": "",';
                }
                $json .= '"nombre":' . json_encode(utf8_encode($OfendidoCarpeta->getNombre())) . ",";
                $json .= '"paterno":' . json_encode(utf8_encode($OfendidoCarpeta->getPaterno())) . ",";
                $json .= '"materno":' . json_encode(utf8_encode($OfendidoCarpeta->getMaterno())) . ",";
                $json .= '"rfc":' . json_encode(utf8_encode($OfendidoCarpeta->getRfc())) . ",";
                $json .= '"curp":' . json_encode(utf8_encode($OfendidoCarpeta->getCurp())) . ",";
                $json .= '"cveOcupacion":' . json_encode(utf8_encode($OfendidoCarpeta->getCveOcupacion())) . ",";
                $json .= '"cveGenero":' . json_encode(utf8_encode($OfendidoCarpeta->getCveGenero())) . ",";
                $json .= '"cveTipoParte":' . json_encode(utf8_encode($OfendidoCarpeta->getCveTipoParte())) . ",";
                $json .= '"cveTipoReligion":' . json_encode(utf8_encode($OfendidoCarpeta->getCveTipoReligion())) . ",";
                $json .= '"cvePaisNacimiento":' . json_encode(utf8_encode($OfendidoCarpeta->getCvePaisNacimiento())) . ",";
                $json .= '"cveEstadoNacimiento":' . json_encode(utf8_encode($OfendidoCarpeta->getCveEstadoNacimiento())) . ",";
                $json .= '"cveMunicipioNacimiento":' . json_encode(utf8_encode($OfendidoCarpeta->getCveMunicipioNacimiento())) . ",";
                if ($OfendidoCarpeta->getFechaNacimiento() != "") {
                    $json .= '"fechaNacimiento":' . json_encode(($OfendidoCarpeta->getFechaNacimiento())) . ",";
                } else {
                    $json .= '"fechaNacimiento": "",';
                }
                $json .= '"edad":' . json_encode(utf8_encode($OfendidoCarpeta->getEdad())) . ",";
                $json .= '"cveTipoPersona":' . json_encode(utf8_encode($OfendidoCarpeta->getCveTipoPersona())) . ",";
                if ($rsPersona != "") {
                    $json .= '"desTipoPersona":' . json_encode(utf8_encode($rsPersona[0]->getDesTipoPersona())) . ",";
                } else {
                    $json .= '"desTipoPersona": "N/A",';
                }
                if ($rsGenero != "") {
                    $json .= '"desGenero":' . json_encode(utf8_encode($rsGenero[0]->getDesGenero())) . ",";
                } else {
                    $json .= '"desGenero": "N/A",';
                }
                $json .= '"nombreMoral":' . json_encode(utf8_encode($OfendidoCarpeta->getNombreMoral())) . ",";
                $json .= '"cveNivelInstruccion":' . json_encode(utf8_encode($OfendidoCarpeta->getCveNivelInstruccion())) . ",";
                $json .= '"cveEstadoCivil":' . json_encode(utf8_encode($OfendidoCarpeta->getCveEstadoCivil())) . ",";
                $json .= '"cveEspanol":' . json_encode(utf8_encode($OfendidoCarpeta->getCveEspanol())) . ",";
                $json .= '"cveAlfabetismo":' . json_encode(utf8_encode($OfendidoCarpeta->getCveAlfabetismo())) . ",";
                $json .= '"cveDialectoIndigena":' . json_encode(utf8_encode($OfendidoCarpeta->getCveDialectoIndigena())) . ",";
                $json .= '"cveTipoFamiliaLinguistica":' . json_encode(utf8_encode($OfendidoCarpeta->getCveTipoFamiliaLinguistica())) . ",";
                $json .= '"cveOrdenProteccion":' . json_encode(utf8_encode($OfendidoCarpeta->getCveOrdenProteccion())) . ",";
                $json .= '"cveInterprete":' . json_encode(utf8_encode($OfendidoCarpeta->getCveInterprete())) . ",";
                $json .= '"cveEstadoPsicofisico":' . json_encode(utf8_encode($OfendidoCarpeta->getCveEstadoPsicofisico())) . ",";
                $json .= '"estadoNacimiento":' . json_encode(utf8_encode($OfendidoCarpeta->getEstadoNacimiento())) . ",";
                $json .= '"municipioNacimiento":' . json_encode(utf8_encode($OfendidoCarpeta->getMunicipioNacimiento())) . ",";
                $json .= '"cveVictimaDeLaDelincuenciaOrganizada":' . json_encode(utf8_encode($OfendidoCarpeta->getCveVictimaDeLaDelincuenciaOrganizada())) . ",";
                $json .= '"cveVictimaDeViolenciaDeGenero":' . json_encode(utf8_encode($OfendidoCarpeta->getCveVictimaDeViolenciaDeGenero())) . ",";
                $json .= '"cveVictimaDeTrata":' . json_encode(utf8_encode($OfendidoCarpeta->getCveVictimaDeTrata())) . ",";
                $json .= '"cveVictimaDeAcoso":' . json_encode(utf8_encode($OfendidoCarpeta->getCveVictimaDeAcoso())) . ",";
                $json .= '"desaparecido":' . json_encode(utf8_encode($OfendidoCarpeta->getDesaparecido())) . ",";
                $json .= '"numHijos":' . json_encode(utf8_encode($OfendidoCarpeta->getNumHijos())) . ",";
                $json .= '"embarazada":' . json_encode(utf8_encode($OfendidoCarpeta->getEmbarazada())) . ",";
                $json .= '"cveGrupoEdnico":' . json_encode(utf8_encode($OfendidoCarpeta->getCveGrupoEdnico())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($OfendidoscarpetasDto)) {
                    $json .= ",";
                }
            }
            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"estatus":"Fail",';
            $json .= '"mnj":"No se encontraron resultados."}';
        }
        echo $json;
    }

    public function agregarOfendido($OfendidoscarpetasDto) {
        $OfendidoscarpetasDto = $this->validarOfendidoscarpetas($OfendidoscarpetasDto);
        $OfendidoscarpetasController = new OfendidoscarpetasController();
        $OfendidoscarpetasDto = $OfendidoscarpetasController->agregarOfendido($OfendidoscarpetasDto);

        return json_encode($OfendidoscarpetasDto);
    }

    public function modificarOfendido($OfendidoscarpetasDto) {
        $OfendidoscarpetasDto = $this->validarOfendidoscarpetas($OfendidoscarpetasDto);
        $OfendidoscarpetasController = new OfendidoscarpetasController();
        $OfendidoscarpetasDto = $OfendidoscarpetasController->modificarOfendido($OfendidoscarpetasDto);

        return json_encode($OfendidoscarpetasDto);
    }

    public function eliminarOfendido($OfendidoscarpetasDto) {
        $OfendidoscarpetasDto = $this->validarOfendidoscarpetas($OfendidoscarpetasDto);
        $OfendidoscarpetasController = new OfendidoscarpetasController();
        $actualizarCarpeta = 1;
        $OfendidoscarpetasDto = $OfendidoscarpetasController->eliminarOfendido($OfendidoscarpetasDto, null, $actualizarCarpeta);

        return json_encode($OfendidoscarpetasDto);
    }

    public function consultarTotal($OfendidoscarpetasDto) {
        $OfendidoscarpetasDto = $this->validarOfendidoscarpetas($OfendidoscarpetasDto);
        $OfendidoscarpetasController = new OfendidoscarpetasController();
        $ofendidosResponse = $OfendidoscarpetasController->counsultarTotal($OfendidoscarpetasDto);

        return json_encode($ofendidosResponse);
    }

//**************** PAGINACI�N: GETPAGINAS *****************************************************************
    public function getPaginas($OfendidoscarpetasDto, $param) {
        $OfendidoscarpetasDto = $this->validarOfendidoscarpetas($OfendidoscarpetasDto);
        $OfendidoscarpetasController = new OfendidoscarpetasController();
        $OfendidoscarpetasDto = $OfendidoscarpetasController->getPaginas($OfendidoscarpetasDto, $param);
        if ($OfendidoscarpetasDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
            return $OfendidoscarpetasDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

//**************** CONSULTA DE MUJERES DESAPARECIDAS******************************************************        
    public function consultarMujeresDesaparecidas($OfendidoscarpetasDto, $param) {
        $OfendidoscarpetasDto = $this->validarOfendidoscarpetas($OfendidoscarpetasDto);
        $OfendidoscarpetasController = new OfendidoscarpetasController();
        $OfendidoscarpetasDto = $OfendidoscarpetasController->consultarMujeresDesaparecidas($OfendidoscarpetasDto, $param);
        if ($OfendidoscarpetasDto != "") {
            return $OfendidoscarpetasDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

//**************** CONSULTA DE TRATA DE PERSONAS******************************************************        
    public function consultarTrataPersonas($OfendidoscarpetasDto, $param) {
        $OfendidoscarpetasDto = $this->validarOfendidoscarpetas($OfendidoscarpetasDto);
        $OfendidoscarpetasController = new OfendidoscarpetasController();
        $OfendidoscarpetasDto = $OfendidoscarpetasController->consultarTrataPersonas($OfendidoscarpetasDto, $param);
        if ($OfendidoscarpetasDto != "") {
            return $OfendidoscarpetasDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

//************************************************************************************************  
//**************** CONSULTA DE UNA V�CTIMA DE FEMINICIDIO******************************************************        
    public function consultarUnFeminicidio($OfendidoscarpetasDto, $param) {
        $OfendidoscarpetasController = new OfendidoscarpetasController();
        $OfendidoscarpetasDto = $OfendidoscarpetasController->consultarUnFeminicidio($OfendidoscarpetasDto, $param);
        if ($OfendidoscarpetasDto != "") {
            //print_r($OfendidoscarpetasController);
            return $OfendidoscarpetasDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

//************************************************************************************************  
//**************** CONSULTA DE UNA V�CTIMA DE HOSTIGAMIENTO******************************************************        
    public function consultarUnHostigamiento($OfendidoscarpetasDto, $param) {
        $OfendidoscarpetasController = new OfendidoscarpetasController();
        $OfendidoscarpetasDto = $OfendidoscarpetasController->consultarUnHostigamiento($OfendidoscarpetasDto, $param);
        if ($OfendidoscarpetasDto != "") {
            //print_r($OfendidoscarpetasController);
            return $OfendidoscarpetasDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

//************************************************************************************************  
//**************** CONSULTA DE FEMINICIDIOS******************************************************        
    public function consultarFeminicidio($OfendidoscarpetasDto, $param) {
        $OfendidoscarpetasDto = $this->validarOfendidoscarpetas($OfendidoscarpetasDto);
        $OfendidoscarpetasController = new OfendidoscarpetasController();
        $OfendidoscarpetasDto = $OfendidoscarpetasController->consultarFeminicidio($OfendidoscarpetasDto, $param);
        if ($OfendidoscarpetasDto != "") {
            $OfendidoscarpetasDto = json_encode($OfendidoscarpetasDto);
            return $OfendidoscarpetasDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

//**************** CONSULTA DE TRATA PERSONAS VARIAS******************************************************        
    public function consultarTrataVarias($OfendidoscarpetasDto, $param) {
        $OfendidoscarpetasDto = $this->validarOfendidoscarpetas($OfendidoscarpetasDto);
        $OfendidoscarpetasController = new OfendidoscarpetasController();
        $OfendidoscarpetasDto = $OfendidoscarpetasController->consultarTrataVarias($OfendidoscarpetasDto, $param);
        if ($OfendidoscarpetasDto != "") {
            $OfendidoscarpetasDto = json_encode($OfendidoscarpetasDto);
            return $OfendidoscarpetasDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

//**************** GET PAGINAS FEMINICIDIOS******************************************************        
    public function getPaginasFeminicidios($OfendidoscarpetasDto, $param) {
        $OfendidoscarpetasDto = $this->validarOfendidoscarpetas($OfendidoscarpetasDto);
        $OfendidoscarpetasController = new OfendidoscarpetasController();
        $OfendidoscarpetasDto = $OfendidoscarpetasController->getPaginasFeminicidios($OfendidoscarpetasDto, $param);
        if ($OfendidoscarpetasDto != "") {
            //$OfendidoscarpetasDto=json_encode($OfendidoscarpetasDto);
            return $OfendidoscarpetasDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

//*************************************************************************************************    
//**************** GET PAGINAS TRATA DE PERSONAS******************************************************        
    public function getPaginasTrataPersonas($OfendidoscarpetasDto, $param) {
        $OfendidoscarpetasDto = $this->validarOfendidoscarpetas($OfendidoscarpetasDto);
        $OfendidoscarpetasController = new OfendidoscarpetasController();
        $OfendidoscarpetasDto = $OfendidoscarpetasController->getPaginasTrataPersonas($OfendidoscarpetasDto, $param);
        if ($OfendidoscarpetasDto != "") {
            //$OfendidoscarpetasDto=json_encode($OfendidoscarpetasDto);
            return $OfendidoscarpetasDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

//*************************************************************************************************    
//**************** GET PAGINAS HOSTIGAMIENTO******************************************************        
    public function getPaginasHostigamiento($OfendidoscarpetasDto, $param) {
        $OfendidoscarpetasDto = $this->validarOfendidoscarpetas($OfendidoscarpetasDto);
        $OfendidoscarpetasController = new OfendidoscarpetasController();
        $OfendidoscarpetasDto = $OfendidoscarpetasController->getPaginasHostigamiento($OfendidoscarpetasDto, $param);
        if ($OfendidoscarpetasDto != "") {
            //$OfendidoscarpetasDto=json_encode($OfendidoscarpetasDto);
            return $OfendidoscarpetasDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

//*************************************************************************************************    
//**************** CONSULTA DE HOSTIGAMIENTOS******************************************************        
    public function consultarHostigamiento($OfendidoscarpetasDto, $param) {
        $OfendidoscarpetasDto = $this->validarOfendidoscarpetas($OfendidoscarpetasDto);
        $OfendidoscarpetasController = new OfendidoscarpetasController();
        $OfendidoscarpetasDto = $OfendidoscarpetasController->consultarHostigamiento($OfendidoscarpetasDto, $param);
        if ($OfendidoscarpetasDto != "") {
            $OfendidoscarpetasDto = json_encode($OfendidoscarpetasDto);
            return $OfendidoscarpetasDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

//************************************************************************************************        


    public function insertOfendidoscarpetas($OfendidoscarpetasDto) {
        $OfendidoscarpetasDto = $this->validarOfendidoscarpetas($OfendidoscarpetasDto);
        $OfendidoscarpetasController = new OfendidoscarpetasController();
        $OfendidoscarpetasDto = $OfendidoscarpetasController->insertOfendidoscarpetas($OfendidoscarpetasDto);
        if ($OfendidoscarpetasDto != "") {
            $dtoToJson = new DtoToJson($OfendidoscarpetasDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateOfendidoscarpetas($OfendidoscarpetasDto) {
        $OfendidoscarpetasDto = $this->validarOfendidoscarpetas($OfendidoscarpetasDto);
        $OfendidoscarpetasController = new OfendidoscarpetasController();
        $OfendidoscarpetasDto = $OfendidoscarpetasController->updateOfendidoscarpetas($OfendidoscarpetasDto);
        if ($OfendidoscarpetasDto != "") {
            $dtoToJson = new DtoToJson($OfendidoscarpetasDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteOfendidoscarpetas($OfendidoscarpetasDto) {
        $OfendidoscarpetasDto = $this->validarOfendidoscarpetas($OfendidoscarpetasDto);
        $OfendidoscarpetasController = new OfendidoscarpetasController();
        $OfendidoscarpetasDto = $OfendidoscarpetasController->deleteOfendidoscarpetas($OfendidoscarpetasDto);
        if ($OfendidoscarpetasDto == true) {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }

    /* --------------------------------------------- */

    public function reporteOfendidosCarpetasPrevio($OfendidoscarpetasDto, $datos, $paginacion) {
        $consulta = "";
        $genero = "";
        $intervaloEdad = "";
        $auxNumVicti="";
        if ($datos["genero"] != "") {
            $genero = ",g.cveGenero";
            $auxNumVicti = ",consulta.cveGenero";
        }
        if ($datos["intervaloEdad"] != "") {
            $intervaloEdad = ",rangoEdad";
        }
        $datos["porNumVictimas"]="";
        switch ($datos["nivel"]) {
            case 1:
                if (($datos["genero"] != "") && ($datos["intervaloEdad"] != "")) {
                    $datos["groups"] = "g.cveGenero,rangoEdad";
                    $datos["porNumVictimas"]=",consulta.cveGenero,consulta.rangoEdad";
                } else {
                    if ($datos["genero"] != "") {
                        $datos["groups"] = "g.cveGenero";
                        $datos["porNumVictimas"]=",consulta.cveGenero";
                    }
                    if ($datos["intervaloEdad"] != "") {
                        $datos["groups"] = "rangoEdad";
                        $datos["porNumVictimas"]=",consulta.rangoEdad";
                    }
                }
                break;
            case 2:
                $datos["groups"] = "r.cveRegion" . $genero . $intervaloEdad;
                $datos["porNumVictimas"]=",consulta.cveRegion".$auxNumVicti. $intervaloEdad;
                break;
            case 3:
                $datos["groups"] = "d.cveDistrito" . $genero . $intervaloEdad;
                $datos["porNumVictimas"]=",consulta.cveDistrito".$auxNumVicti. $intervaloEdad;
                break;
            case 4:
                $group = "j.cveJuzgado";
                $datos["porNumVictimas"] = ",consulta.cveJuzgado".$auxNumVicti. $intervaloEdad;
                if ($datos["porMunicipio"] != "") {
                    $group = "doc.cveMunicipio";
                    $datos["porNumVictimas"] = ",consulta.cveMunicipio".$auxNumVicti. $intervaloEdad;
                }
                $datos["groups"] = $group . $genero . $intervaloEdad;
                break;
            case 5:
                if ($datos["relacionImputado"] != "") {
                    $datos["groups"] = "oc.idOfendidoCarpeta";
                    $datos["porNumVictimas"] = ",consulta.idOfendidoCarpeta";
                }
                break;
            case 6:
                $datos["porNumDelitos"]="";
                break;
        }
        $consulta = $this->reporteOfendidosCarpetas($OfendidoscarpetasDto, $datos, $paginacion);
        return $consulta;
    }

    public function reporteOfendidosCarpetas($OfendidoscarpetasDto, $datos, $paginacion) {
        $ofendidoscarpetasDto = $this->validarOfendidoscarpetas($OfendidoscarpetasDto);
        $sqlIntervalo = "";
        $tablaRelacionImputado = "";
        $relacionImputado = "";
        $reportePorMes = "";
        $porMunicipio = "";
        $porOcupacionTabla = "";
        $porOcupacionCondicion = "";
        $porRelacionTabla = ",tbldelitoscarpetas dc,tbldelitos de";
        $porRelacionCondicion = " AND iodc.idDelitoCarpeta=dc.idDelitoCarpeta AND dc.cveDelito=de.cveDelito 
                     AND dc.activo='S' AND de.activo='S'";
        $campos = "";
        $camposNumVictimas = ",consulta.idOfendidoCarpeta,consulta.fechaRegistro,consulta.iodcfechaRegistro,consulta.desDelito,consulta.cveDelito";
        $porNumDelitos=",count(*) as totalCount";
        $groupNumDelitos=" group by rangoVictimas";
        $tablaRelacionImputado = ",tblimpofedelcarpetas iodc,tblimputadoscarpetas ic ";
        $relacionImputado = " AND iodc.idOfendidoCarpeta=oc.idOfendidoCarpeta 
            AND iodc.idImputadoCarpeta=ic.idImputadoCarpeta AND ic.activo='S'
            AND iodc.activo='S' ";
        $campos = ",ic.nombre as icnombre,ic.paterno as icpaterno,ic.cveTipoPersona as iccveTipoPersona
                    ,ic.materno as icmaterno,ic.nombreMoral as icnombreMoral,iodc.fechaRegistro as iodcfechaRegistro ";
        if ($paginacion["fechaDesde"] != "") {
            $fechaInicio = explode("/", $paginacion["fechaDesde"]);
            $sqlIntervalo = " AND cj.fechaRadicacion >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
            if ($paginacion["fechaHasta"] != "") {
                $fechaFinal = explode("/", $paginacion["fechaHasta"]);
                $sqlIntervalo.=" AND  cj.fechaRadicacion <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
            }
        }
        $params = array();
        $params["fields"] = " count(oc.idOfendidoCarpeta) as totalCount,";
        $params["orders"] = " oc.fechaRegistro DESC";
        if ($datos["porMes"] != "") {
            $mesAnio = explode("/", $datos["porMes"]);
            if ($mesAnio[0] != "") {
                $reportePorMes = " AND (month(cj.fechaRadicacion)=$mesAnio[0])";
            }
            if ($mesAnio[1] != "") {
                $reportePorMes.=" AND (year(cj.fechaRadicacion)=$mesAnio[1]) ";
            }
        }
        if ($datos["intervaloEdad"] != "") {
            $params["fields"] = " 
            CASE WHEN (oc.edad BETWEEN 1 AND 6) THEN 'De 1 a 6' ELSE
            CASE WHEN (oc.edad BETWEEN 7 AND 12) THEN 'De 7 a 12' ELSE
            CASE WHEN (oc.edad BETWEEN 13 AND 18) THEN 'De 13 a 18' ELSE
            CASE WHEN (oc.edad BETWEEN 19 AND 24) THEN 'De 19 a 24' ELSE
            CASE WHEN (oc.edad BETWEEN 25 AND 30) THEN 'De 25 a 30' ELSE
            CASE WHEN (oc.edad BETWEEN 31 AND 36) THEN 'De 31 a 36' ELSE
            CASE WHEN (oc.edad BETWEEN 37 AND 42) THEN 'De 37 a 42' ELSE
            CASE WHEN (oc.edad >= 43) THEN 'De 43 o m�s' ELSE
            CASE WHEN (oc.edad is null OR oc.edad=0) THEN 'No identificada'
            END END END END END END END END END rangoEdad,
            count(*) as totalCount,";
            $params["orders"] = " rangoEdad ASC";
            $camposNumVictimas .=",consulta.rangoEdad";
        }
        if ($datos["porMunicipio"] != "") {
            $porMunicipio = "LEFT JOIN tbldomiciliosofendidoscarpetas doc ON(oc.idOfendidoCarpeta=doc.idOfendidoCarpeta and doc.activo='S')
                    LEFT JOIN tblmunicipios m ON(doc.cveMunicipio=m.cveMunicipio and m.activo='S')";
            $campos = ",doc.cveMunicipio,m.desMunicipio" . $campos;
            $camposNumVictimas .= ",consulta.cveMunicipio,consulta.desMunicipio";
        }
        if ($datos["relacionImputado"] != "") {
            $porRelacionTabla .= ",tbltiposrelimpofe trio";
            $porRelacionCondicion .= " AND trio.cveRelacionImpOfe=iodc.cveRelacionImpOfe AND trio.activo='S'";
            if ($datos["cveRelacionImpOfe"] != "") {
                $porRelacionCondicion .=" AND iodc.cveRelacionImpOfe=" . $datos["cveRelacionImpOfe"];
            }
            $campos = ",trio.desRelacionImpOfe,trio.cveRelacionImpOfe" . $campos;
            $camposNumVictimas .= ",consulta.desRelacionImpOfe,consulta.cveRelacionImpOfe";
            if ($datos["groups"] != "") {
                $datos["groups"] = $datos["groups"] . ",trio.desRelacionImpOfe";
            } else {
                $datos["groups"] = "trio.desRelacionImpOfe";
            }
            $datos["porNumVictimas"].=",consulta.desRelacionImpOfe";
        }
        if ($datos["porDelito"] != "") {
            if ($datos["cveDelito"] != "") {
                $porRelacionCondicion .=" AND de.cveDelito=" . $datos["cveDelito"];
            } else {
                if ($datos["groups"] != "") {
                    $datos["groups"] = $datos["groups"] . ",de.desDelito";
                } else {
                    $datos["groups"] = "de.desDelito";
                }
                $datos["porNumVictimas"].=",consulta.desDelito";
            }
            $campos = ",de.cveDelito" . $campos;
        }
        if (($datos["porOcupacion"] != "") && ($ofendidoscarpetasDto->getCveOcupacion() == "")) {
            $porOcupacionTabla = ",tblocupaciones o";
            $porOcupacionCondicion = " AND o.cveOcupacion=oc.cveOcupacion";
            $campos = ",o.desOcupacion,o.cveOcupacion" . $campos;
            $camposNumVictimas .= ",consulta.desOcupacion,consulta.cveOcupacion";
            if ($datos["groups"] != "") {
                $datos["groups"] = $datos["groups"] . ",o.desOcupacion";
            } else {
                $datos["groups"] = "o.desOcupacion";
            }
            $datos["porNumVictimas"].=",consulta.desOcupacion";
        }
        if ($datos["detalles"] == "detalle") {
            $params["fields"] = "";
            $camposNumVictimas = ",consulta.idOfendidoCarpeta,consulta.fechaRegistro,consulta.iodcfechaRegistro,consulta.desDelito,consulta.cveDelito";
            $params["orders"] = "oc.fechaRegistro";
            $datos["groups"] = "";
            $datos["porNumVictimas"]="";
            if ($datos["porNumDelitos"]!="") {
                $params["fields"] = " count(oc.idOfendidoCarpeta) as totalCount,";
                $porNumDelitos="";
                $groupNumDelitos="";
            }
        }
        $params["fields"] .= "tc.desTipoCarpeta,cj.numero,cj.anio,oc.nombre,oc.paterno,oc.materno,oc.fechaRegistro,
            tj.cveTipoJuzgado,tj.desTipoJuzgado,j.desJuzgado,oc.nombreMoral,oc.cveTipoPersona,g.cveGenero,oc.edad,
            g.desGenero,d.desDistrito,r.desRegion,r.cveRegion,d.cveDistrito,j.cveJuzgado,oc.idOfendidoCarpeta,de.desDelito " . $campos;
        $camposNumVictimas .= ",consulta.desTipoCarpeta,consulta.numero,consulta.anio,consulta.nombre,consulta.cveGenero,consulta.cveTipoJuzgado,consulta.edad
                ,consulta.paterno,consulta.materno,consulta.desGenero,consulta.nombreMoral,consulta.cveTipoPersona";
        $params["tables"] = "tblcarpetasjudiciales cj,tblofendidoscarpetas oc LEFT JOIN tblgeneros g ON(oc.cveGenero=g.cveGenero)$porMunicipio,
                tbljuzgados j LEFT JOIN tbldistritos d ON(j.cveDistrito=d.cveDistrito)
                LEFT JOIN tblregiones r ON(j.cveRegion=r.cveRegion),
                tbltiposjuzgados tj, tbltiposcarpetas tc" . $tablaRelacionImputado . $porOcupacionTabla . $porRelacionTabla;
        $params["conditions"] = "cj.activo='S' AND oc.activo='S' AND tc.cveTipoCarpeta=cj.cveTipoCarpeta
            AND j.cveJuzgado=cj.cveJuzgado AND d.activo='S' AND r.activo='S' AND tj.activo='S'
            AND cj.idCarpetajudicial=oc.idCarpetajudicial AND tc.activo='S' AND j.activo='S'
            AND tj.cveTipoJuzgado=j.cveTipoJuzgado
            AND cj.cveEstatusCarpeta=1
            " . $relacionImputado . $reportePorMes . $porOcupacionCondicion . $porRelacionCondicion;
        if ($datos["cveRegion"] != "") {
            $params["conditions"].=" AND r.cveRegion=" . $datos["cveRegion"];
        }
        if ($datos["cveDistrito"] != "") {
            $params["conditions"].=" AND d.cveDistrito=" . $datos["cveDistrito"];
        }
        if (($datos["intervaloEdad"] != "S") && ($datos["intervaloEdad"] != "")) {
            if ($datos["intervaloEdad"] == "N") {
                $params["conditions"].=" AND (oc.edad=0 OR oc.edad=null)";
            } else {
                if ($datos["intervaloEdad"] != "43") {
                    $edadMax = $datos["intervaloEdad"] + 6;
                    $params["conditions"].=" AND oc.edad>=" . $datos["intervaloEdad"] . " AND oc.edad<=" . $edadMax;
                } else {
                    $params["conditions"].=" AND oc.edad>=" . $datos["intervaloEdad"];
                }
            }
        }
        if ($datos["edadMin"] != "") {
            $params["conditions"].=" AND oc.edad>=" . $datos["edadMin"];
        }
        if ($datos["edadMax"] != "") {
            $params["conditions"].=" AND oc.edad<=" . $datos["edadMax"];
        }
        if ($datos["numero"] != "") {
            $params["conditions"].=" AND cj.numero=" . $datos["numero"];
        }
        if ($datos["anio"] != "") {
            $params["conditions"].=" AND cj.anio=" . $datos["anio"];
        }
        if ($datos["cveJuzgado"] != "") {
            $params["conditions"].=" AND cj.cveJuzgado=" . $datos["cveJuzgado"];
        }
        if ($datos["cveMunicipio"] != "") {
            if ($datos["cveMunicipio"] != "null") {
                $params["conditions"].=" AND doc.cveMunicipio=" . $datos["cveMunicipio"];
            } else {
                $params["conditions"].=" AND doc.cveMunicipio IS NULL";
            }
        }
        if ($datos["cveTipoCarpeta"] != "") {
            $params["conditions"].=" AND cj.cveTipoCarpeta=" . $datos["cveTipoCarpeta"];
        }
        if ($datos["cveTipoJuzgado"] != "") {
            $params["conditions"].=" AND tj.cveTipoJuzgado=" . $datos["cveTipoJuzgado"];
        }
        if ($ofendidoscarpetasDto->getCveTipoPersona() != "") {
            $params["conditions"].=" AND oc.cveTipoPersona=" . $ofendidoscarpetasDto->getCveTipoPersona();
        }
        if (($datos["genero"] != "") && ($datos["genero"] != 0)) {
            $params["conditions"].=" AND oc.cveGenero=" . $datos["genero"];
        }
        if ($ofendidoscarpetasDto->getCveTipoParte() != "") {
            $params["conditions"].=" AND oc.cveTipoParte=" . $ofendidoscarpetasDto->getCveTipoParte();
            if ($ofendidoscarpetasDto->getCveOcupacion() != "") {
                $params["conditions"].=" AND oc.cveOcupacion=" . $ofendidoscarpetasDto->getCveOcupacion();
            }
        }
        if ($ofendidoscarpetasDto->getIdOfendidoCarpeta() != "") {
            $params["conditions"].=" AND oc.idOfendidoCarpeta=" . $ofendidoscarpetasDto->getIdOfendidoCarpeta();
        }
        if ($sqlIntervalo != "") {
            $params["conditions"].=$sqlIntervalo . " ";
        }
        if ($datos["groups"] != "") {
            $params["groups"] = $datos["groups"];
        }
        if ($datos["porNumDelitos"]!="") {
            $porNumDelitos="CASE WHEN (consulta.totalCount=1) THEN 'V�ctimas de 1 delito' ELSE
                CASE WHEN (consulta.totalCount=2) THEN 'V�ctimas de 2 delitos' ELSE
                CASE WHEN (consulta.totalCount=3) THEN 'V�ctimas de 3 delitos' ELSE
                CASE WHEN (consulta.totalCount=4) THEN 'V�ctimas de 4 delitos' ELSE
                CASE WHEN (consulta.totalCount=5) THEN 'V�ctimas de 5 delitos' ELSE
                CASE WHEN (consulta.totalCount>5) THEN 'V�ctimas de 6 o m�s delitos'
                END END END END END END rangoVictimas$porNumDelitos,
                consulta.desRegion,consulta.desJuzgado,consulta.desDistrito,consulta.cveDistrito,
                consulta.cveRegion,consulta.cveJuzgado".$camposNumVictimas;
            $params["fields"] = $porNumDelitos . " FROM(SELECT " ."de.cveDelito,".$params["fields"];
            if ($datos["rangoVictimas"]!="") {
                $vecRangoVictimas=explode(" ", $datos["rangoVictimas"]);
                $params["orders"].=") AS consulta WHERE consulta.totalCount";
                if($vecRangoVictimas[2]==6){
                    $params["orders"].=" >5";
                }else{
                    $params["orders"].=" =".$vecRangoVictimas[2];
                }
                $params["orders"].=$groupNumDelitos.$datos["porNumVictimas"];
            }else{
                $params["orders"].=") AS consulta".$groupNumDelitos.$datos["porNumVictimas"];
            }
            if (array_key_exists('groups', $params)) {
                $params["groups"] .=",oc.idOfendidoCarpeta";
            }else {
                $params["groups"] ="oc.idOfendidoCarpeta";
            }
        }
        if (($paginacion["paginacion"] == "false") || ($paginacion["paginacion"] == false)) {
            $aux = "count(x.totalCount) as totalCount";
            if ($datos["detalles"] == "detalle") {
                $aux = "count(x.idOfendidoCarpeta) as totalCount";
            }
            $params["fields"] = $aux . " FROM(SELECT " . $params["fields"];
            $params["orders"].=") as x";
        }
        $SelectDao = new SelectDAO();
        return $SelectDao->selectDAO($params, null, $paginacion);
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
    
    /*
     * Metodo para copiar los datos personales de un ofendido correspondiente
     * a una carpeta origen hacia un ofendido de una carpeta destino
     */
    public function copiarDatosPersona($ofendidoscarpetasDto, $param) {
        $ofendidoscarpetasDto = $this->validarOfendidoscarpetas($ofendidoscarpetasDto);
        $OfendidoscarpetasController = new OfendidoscarpetasController();
        $ofendidoscarpetasDto = $OfendidoscarpetasController->copiarDatosPersona($ofendidoscarpetasDto, $param);

        return ($ofendidoscarpetasDto);
    }
    
    public function copiarDatosSolicitud($ofendidoscarpetasDto, $param) {
        $ofendidoscarpetasDto = $this->validarOfendidoscarpetas($ofendidoscarpetasDto);
        $OfendidoscarpetasController = new OfendidoscarpetasController();
        $ofendidoscarpetasDto = $OfendidoscarpetasController->copiarDatosSolicitud($ofendidoscarpetasDto, $param);

        return ($ofendidoscarpetasDto);
    }
    
}

@$idOfendidoCarpeta = $_POST["idOfendidoCarpeta"];
@$idCarpetaJudicial = $_POST["idCarpetaJudicial"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$nombre = $_POST["nombre"];
@$paterno = $_POST["paterno"];
@$materno = $_POST["materno"];
@$rfc = ($_POST["cveTipoPersona"] == 1) ? $_POST["rfc"] : $_POST['txtRfcMoralOfendido'];
@$curp = $_POST["curp"];
@$cveOcupacion = $_POST["cveOcupacion"];
@$cveTipoPersona = $_POST["cveTipoPersona"];
@$cveGenero = $_POST["cveGenero"];
@$cveTipoParte = ($_POST['cveTipoPersona'] == 1) ? $_POST['cmbCveTipoParte'] : $_POST['cmbTipoParteMoral'];
@$cveTipoReligion = ($_POST['cveTipoPersona'] == 1) ? $_POST['cmbCveTipoReligion'] : "";
@$fechaNacimiento = $_POST["fechaNacimiento"];
@$edad = $_POST["edad"];
@$cvePaisNacimiento = ($_POST["cveTipoPersona"] == 1) ? $_POST["cvePaisNacimiento"] : $_POST['cmbPaisNacimientoMoralOfendido'];
@$cveEstadoNacimiento = ($_POST["cveTipoPersona"] == 1) ? $_POST["cveEstadoNacimiento"] : $_POST['cmbEstadoNacimientoMoralOfendido'];
@$estadoNacimiento = ($_POST["cveTipoPersona"] == 1) ? $_POST["estadoNacimiento"] : $_POST['txtestadoNacimientoMoralOfendido'];
@$cveMunicipioNacimiento = ($_POST["cveTipoPersona"] == 1) ? $_POST["cveMunicipioNacimiento"] : $_POST['cmbMunicipioNacimientoMoralOfendido'];
@$municipioNacimiento = ($_POST["cveTipoPersona"] == 1) ? $_POST["municipioNacimiento"] : $_POST['txtmunicipioNacimientoMoralOfendido'];
@$cveEstadoCivil = $_POST["cveEstadoCivil"];
@$cveAlfabetismo = $_POST["cveAlfabetismo"];
@$cveNivelInstruccion = $_POST["cveNivelInstruccion"];
@$cveEspanol = $_POST["cveEspanol"];
@$cveDialectoIndigena = $_POST["cveDialectoIndigena"];
@$cveTipoFamiliaLinguistica = $_POST["cveTipoFamiliaLinguistica"];
@$cveInterprete = $_POST["cveInterprete"];
@$cveOrdenProteccion = $_POST["cveOrdenProteccion"];
@$cveEstadoPsicofisico = $_POST["cveEstadoPsicofisico"];
//@$cveNacionalidad=$_POST["cveNacionalidad"];
@$nombreMoral = $_POST["nombreMoral"];
@$cveVictimaDeLaDelincuenciaOrganizada = $_POST["cveVictimaDeLaDelincuenciaOrganizada"];
@$cveVictimaDeViolenciaDeGenero = $_POST["cveVictimaDeViolenciaDeGenero"];
@$cveVictimaDeTrata = $_POST["cveVictimaDeTrata"];
@$cveVictimaDeAcoso = $_POST["cveVictimaDeAcoso"];
@$desaparecido = $_POST["desaparecido"];
@$numHijos = $_POST["numHijos"];
@$embarazada = $_POST["embarazada"];
@$cveGrupoEdnico = $_POST["cveGrupoEdnico"];
@$accion = $_POST["accion"];

//------------Param Paginaci�n
$param = array();
@$param["pag"] = $_POST['pag'];
@$param["cantxPag"] = $_POST['cantxPag'];
@$param["paginacion"] = $_POST['paginacion'];
@$param["fechaDesde"] = $_POST['txtFecInicialBusqueda'];
@$param["fechaHasta"] = $_POST['txtFecFinalBusqueda'];
@$param["generico"] = $_POST['generico'];
//----------------------------

$ofendidoscarpetasFacade = new OfendidoscarpetasFacade();
$ofendidoscarpetasDto = new OfendidoscarpetasDTO();

$ofendidoscarpetasDto->setIdOfendidoCarpeta($idOfendidoCarpeta);
$ofendidoscarpetasDto->setIdCarpetaJudicial($idCarpetaJudicial);
$ofendidoscarpetasDto->setActivo($activo);
$ofendidoscarpetasDto->setFechaRegistro($fechaRegistro);
$ofendidoscarpetasDto->setFechaActualizacion($fechaActualizacion);
$ofendidoscarpetasDto->setNombre($nombre);
$ofendidoscarpetasDto->setPaterno($paterno);
$ofendidoscarpetasDto->setMaterno($materno);
$ofendidoscarpetasDto->setRfc($rfc);
$ofendidoscarpetasDto->setCurp($curp);
$ofendidoscarpetasDto->setCveOcupacion($cveOcupacion);
$ofendidoscarpetasDto->setCveTipoPersona($cveTipoPersona);
$ofendidoscarpetasDto->setCveGenero($cveGenero);
$ofendidoscarpetasDto->setCveTipoParte($cveTipoParte);
$ofendidoscarpetasDto->setCveTipoReligion($cveTipoReligion);
$ofendidoscarpetasDto->setFechaNacimiento($fechaNacimiento);
$ofendidoscarpetasDto->setEdad($edad);
$ofendidoscarpetasDto->setCvePaisNacimiento($cvePaisNacimiento);
$ofendidoscarpetasDto->setCveEstadoNacimiento($cveEstadoNacimiento);
$ofendidoscarpetasDto->setEstadoNacimiento($estadoNacimiento);
$ofendidoscarpetasDto->setCveMunicipioNacimiento($cveMunicipioNacimiento);
$ofendidoscarpetasDto->setMunicipioNacimiento($municipioNacimiento);
$ofendidoscarpetasDto->setCveEstadoCivil($cveEstadoCivil);
$ofendidoscarpetasDto->setCveAlfabetismo($cveAlfabetismo);
$ofendidoscarpetasDto->setCveNivelInstruccion($cveNivelInstruccion);
$ofendidoscarpetasDto->setCveEspanol($cveEspanol);
$ofendidoscarpetasDto->setCveDialectoIndigena($cveDialectoIndigena);
$ofendidoscarpetasDto->setCveTipoFamiliaLinguistica($cveTipoFamiliaLinguistica);
$ofendidoscarpetasDto->setCveInterprete($cveInterprete);
$ofendidoscarpetasDto->setCveOrdenProteccion($cveOrdenProteccion);
$ofendidoscarpetasDto->setCveEstadoPsicofisico($cveEstadoPsicofisico);
//$ofendidoscarpetasDto->setCveNacionalidad($cveNacionalidad);
$ofendidoscarpetasDto->setNombreMoral($nombreMoral);
$ofendidoscarpetasDto->setCveVictimaDeLaDelincuenciaOrganizada($cveVictimaDeLaDelincuenciaOrganizada);
$ofendidoscarpetasDto->setCveVictimaDeViolenciaDeGenero($cveVictimaDeViolenciaDeGenero);
$ofendidoscarpetasDto->setCveVictimaDeTrata($cveVictimaDeTrata);
$ofendidoscarpetasDto->setCveVictimaDeAcoso($cveVictimaDeAcoso);
$ofendidoscarpetasDto->setDesaparecido($desaparecido);
$ofendidoscarpetasDto->setNumHijos($numHijos);
$ofendidoscarpetasDto->setEmbarazada($embarazada);
$ofendidoscarpetasDto->setCveGrupoEdnico($cveGrupoEdnico);
if (($accion == "guardar") && ($idOfendidoCarpeta == "")) {
    $ofendidoscarpetasDto = $ofendidoscarpetasFacade->insertOfendidoscarpetas($ofendidoscarpetasDto);
    echo $ofendidoscarpetasDto;
} else if (($accion == "guardar") && ($idOfendidoCarpeta != "")) {
    $ofendidoscarpetasDto = $ofendidoscarpetasFacade->updateOfendidoscarpetas($ofendidoscarpetasDto);
    echo $ofendidoscarpetasDto;
} else if ($accion == "consultar") {
    $ofendidoscarpetasDto = $ofendidoscarpetasFacade->selectOfendidoscarpetas($ofendidoscarpetasDto);
    echo $ofendidoscarpetasDto;
} else if (($accion == "baja") && ($idOfendidoCarpeta != "")) {
    $ofendidoscarpetasDto = $ofendidoscarpetasFacade->deleteOfendidoscarpetas($ofendidoscarpetasDto);
    echo $ofendidoscarpetasDto;
} else if (($accion == "seleccionar") && ($idOfendidoCarpeta != "")) {
    $ofendidoscarpetasDto = $ofendidoscarpetasFacade->selectOfendidoscarpetas($ofendidoscarpetasDto);
    echo $ofendidoscarpetasDto;
} else if ($accion == "agregar" && $idOfendidoCarpeta == "") {
    $ofendidoscarpetasDto = $ofendidoscarpetasFacade->agregarOfendido($ofendidoscarpetasDto);
    echo $ofendidoscarpetasDto;
} else if ($accion == "agregar" && $idOfendidoCarpeta != "") {
    $ofendidoscarpetasDto = $ofendidoscarpetasFacade->modificarOfendido($ofendidoscarpetasDto);
    echo $ofendidoscarpetasDto;
} else if ($accion == "eliminar" && $idOfendidoCarpeta != "") {
    $ofendidoscarpetasDto = $ofendidoscarpetasFacade->eliminarOfendido($ofendidoscarpetasDto);
    echo $ofendidoscarpetasDto;
} else if ($accion == "consultarTotal") {
    $ofendidoscarpetasDto = $ofendidoscarpetasFacade->consultarTotal($ofendidoscarpetasDto);
    echo $ofendidoscarpetasDto;
} else if ($accion == "consultarMujeresDesaparecidas") {
    @$param["vnombre"] = $_POST["vnombre"];
    @$param["vpaterno"] = $_POST["vpaterno"];
    @$param["vmaterno"] = $_POST["vmaterno"];
    @$param["paginacion"] = true;
    $ofendidoscarpetasDto = $ofendidoscarpetasFacade->consultarMujeresDesaparecidas($ofendidoscarpetasDto, $param); //$param
    echo $ofendidoscarpetasDto;
} else if ($accion == "consultarTrataPersonas") {
    @$param["paginacion"] = true;
    @$param["vnombre"] = $_POST["vnombre"];
    @$param["vpaterno"] = $_POST["vpaterno"];
    @$param["vmaterno"] = $_POST["vmaterno"];
    $ofendidoscarpetasDto = $ofendidoscarpetasFacade->consultarTrataPersonas($ofendidoscarpetasDto, $param); //$param
    echo $ofendidoscarpetasDto;
} else if ($accion == "getPaginas") {
    #Opcionales---------------
    @$param["vnombre"] = $_POST["vnombre"];
    @$param["vpaterno"] = $_POST["vpaterno"];
    @$param["vmaterno"] = $_POST["vmaterno"];
    #------------------------
    $param["paginacion"] = true;
    $ofendidoscarpetasDto = $ofendidoscarpetasFacade->getPaginas($ofendidoscarpetasDto, $param);
    echo $ofendidoscarpetasDto;
} else if ($accion == "consultarFeminicidio") {
    $param["paginacion"] = true;
    $param["fechaDelitoDesde"] = $_POST['fechaDelitoDesde'];
    $param["fechaDelitoHasta"] = $_POST['fechaDelitoHasta'];
    $param["cveTipoCarpeta"] = $_POST['cveTipoCarpeta'];

    $ofendidoscarpetasDto = $ofendidoscarpetasFacade->consultarFeminicidio($ofendidoscarpetasDto, $param);
    echo $ofendidoscarpetasDto;
} else if ($accion == "consultarTrataVarias") {
    $param["paginacion"] = true;
    $param["fechaInicio"] = $_POST['fechaInicio'];
    $param["fechaFin"] = $_POST['fechaFin'];
    $ofendidoscarpetasDto = $ofendidoscarpetasFacade->consultarTrataVarias($ofendidoscarpetasDto, $param);
    echo $ofendidoscarpetasDto;
} else if ($accion == "getPaginasFeminicidios") {
    $param["paginacion"] = true;
    $param["fechaDelitoDesde"] = $_POST['fechaDelitoDesde'];
    $param["fechaDelitoHasta"] = $_POST['fechaDelitoHasta'];
    $param["cveTipoCarpeta"] = $_POST['cveTipoCarpeta'];

    $ofendidoscarpetasDto = $ofendidoscarpetasFacade->getPaginasFeminicidios($ofendidoscarpetasDto, $param);
    echo $ofendidoscarpetasDto;
} else if ($accion == "getPaginasTrataPersonas") {
    $param["paginacion"] = true;
    $param["fechaInicio"] = $_POST['fechaInicio'];
    $param["fechaFin"] = $_POST['fechaFin'];

    $ofendidoscarpetasDto = $ofendidoscarpetasFacade->getPaginasTrataPersonas($ofendidoscarpetasDto, $param);
    echo $ofendidoscarpetasDto;
} else if ($accion == "consultarUnFeminicidio") {
    $ofendidoscarpetasDto = $ofendidoscarpetasFacade->consultarUnFeminicidio($ofendidoscarpetasDto, $param);
    $param["cveDelito"] = $_POST['cveDelito'];
    echo $ofendidoscarpetasDto;
} else if ($accion == "consultarUnHostigamiento") {
    $ofendidoscarpetasDto = $ofendidoscarpetasFacade->consultarUnHostigamiento($ofendidoscarpetasDto, $param);
    $param["cveDelito"] = $_POST['cveDelito'];
    echo $ofendidoscarpetasDto;
} else if ($accion == "getPaginasHostigamiento") {
    $param["paginacion"] = true;
    $param["fechaDelitoDesde"] = $_POST['fechaDelitoDesde'];
    $param["fechaDelitoHasta"] = $_POST['fechaDelitoHasta'];
    $param["cveTipoCarpeta"] = $_POST['cveTipoCarpeta'];
    //$param["cveModalidad"] = $_POST['cveModalidad'];
    $param["cveAmbitoAcoso"] = $_POST['cveAmbitoAcoso'];
    $param["cveConducta"] = $_POST['cveConducta'];
    $param["cveDetalleConducta"] = $_POST['cveDetalleConducta'];

    $ofendidoscarpetasDto = $ofendidoscarpetasFacade->getPaginasHostigamiento($ofendidoscarpetasDto, $param);
    echo $ofendidoscarpetasDto;
} else if ($accion == "consultarHostigamiento") {
    $param["paginacion"] = true;
    $param["fechaDelitoDesde"] = $_POST['fechaDelitoDesde'];
    $param["fechaDelitoHasta"] = $_POST['fechaDelitoHasta'];
    $param["cveTipoCarpeta"] = $_POST['cveTipoCarpeta'];
    //$param["cveModalidad"] = $_POST['cveModalidad'];
    $param["cveAmbitoAcoso"] = $_POST['cveAmbitoAcoso'];
    $param["cveConducta"] = $_POST['cveConducta'];
    $param["cveDetalleConducta"] = $_POST['cveDetalleConducta'];

    $ofendidoscarpetasDto = $ofendidoscarpetasFacade->consultarHostigamiento($ofendidoscarpetasDto, $param);
    echo $ofendidoscarpetasDto;
} else if ($accion == "consultar_ofendidosCarpetas_Reporte") {
    $datos = array();
    @$datos["numero"] = $_POST["numero"];
    @$datos["anio"] = $_POST["anio"];
    @$datos["cveJuzgado"] = $_POST["cveJuzgado"];
    @$datos["cveTipoCarpeta"] = $_POST["cveTipoCarpeta"];
    @$datos["cveRegion"] = $_POST["cveRegion"];
    @$datos["cveDistrito"] = $_POST["cveDistrito"];
    @$datos["nivel"] = $_POST["nivel"];
    @$datos["cveTipoJuzgado"] = $_POST["cveTipoJuzgado"];
    @$datos["genero"] = $_POST["genero"];
    @$datos["intervaloEdad"] = $_POST["intervaloEdad"];
    @$datos["detalles"] = $_POST["detalles"];
    @$datos["edadMin"] = $_POST["edadMin"];
    @$datos["edadMax"] = $_POST["edadMax"];
    @$datos["groups"] = $_POST["groups"];
    @$datos["relacionImputado"] = $_POST["relacionImputado"];
    @$datos["porDelito"] = $_POST["porDelito"];
    @$datos["cveDelito"] = $_POST["cveDelito"];
    @$datos["porMes"] = $_POST["porMes"];
    @$datos["porMunicipio"] = $_POST["porMunicipio"];
    @$datos["cveMunicipio"] = $_POST["cveMunicipio"];
    @$datos["porOcupacion"] = $_POST["porOcupacion"];
    @$datos["porNumDelitos"] = $_POST["porNumDelitos"];
    @$datos["cveRelacionImpOfe"] = $_POST["cveRelacionImpOfe"];
    @$datos["rangoVictimas"] = $_POST["rangoVictimas"];
    $ofendidoscarpetasDto = $ofendidoscarpetasFacade->reporteOfendidosCarpetasPrevio($ofendidoscarpetasDto, $datos, $param);
    echo $ofendidoscarpetasDto;
} else if ( $accion == "copiarDatosPersona" ) {
    @$param['idCarpetaJudicialDestino'] = $_POST['idCarpetaJudicialDestino'];
    @$param['idOfendidos'] = $_POST['idOfendidos'];
    $ofendidoscarpetasDto = $ofendidoscarpetasFacade->copiarDatosPersona($ofendidoscarpetasDto, $param);
    echo $ofendidoscarpetasDto;
} else if ( $accion == "copiarDatosSolicitud" ) {
    @$param['idOfendidos'] = $_POST['idOfendidos'];
    @$param['idSolicitudAudiencia'] = $_POST['idSolicitudAudiencia'];
    $ofendidoscarpetasDto = $ofendidoscarpetasFacade->copiarDatosSolicitud($ofendidoscarpetasDto, $param);
    echo $ofendidoscarpetasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>