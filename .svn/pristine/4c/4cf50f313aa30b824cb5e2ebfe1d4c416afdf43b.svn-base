<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 DAOS
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Teclogias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ImputadoscarpetasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertImputadoscarpetas($imputadoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblimputadoscarpetas(";
        if ($imputadoscarpetasDto->getIdImputadoCarpeta() != "") {
            $sql.="idImputadoCarpeta";
            if (($imputadoscarpetasDto->getIdCarpetaJudicial() != "") || ($imputadoscarpetasDto->getActivo() != "") || ($imputadoscarpetasDto->getDetenido() != "") || ($imputadoscarpetasDto->getNombre() != "") || ($imputadoscarpetasDto->getPaterno() != "") || ($imputadoscarpetasDto->getMaterno() != "") || ($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getIdCarpetaJudicial() != "") {
            $sql.="idCarpetaJudicial";
            if (($imputadoscarpetasDto->getActivo() != "") || ($imputadoscarpetasDto->getDetenido() != "") || ($imputadoscarpetasDto->getNombre() != "") || ($imputadoscarpetasDto->getPaterno() != "") || ($imputadoscarpetasDto->getMaterno() != "") || ($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getActivo() != "") {
            $sql.="activo";
            if (($imputadoscarpetasDto->getDetenido() != "") || ($imputadoscarpetasDto->getNombre() != "") || ($imputadoscarpetasDto->getPaterno() != "") || ($imputadoscarpetasDto->getMaterno() != "") || ($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getDetenido() != "") {
            $sql.="detenido";
            if (($imputadoscarpetasDto->getNombre() != "") || ($imputadoscarpetasDto->getPaterno() != "") || ($imputadoscarpetasDto->getMaterno() != "") || ($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getNombre() != "") {
            $sql.="nombre";
            if (($imputadoscarpetasDto->getPaterno() != "") || ($imputadoscarpetasDto->getMaterno() != "") || ($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getPaterno() != "") {
            $sql.="paterno";
            if (($imputadoscarpetasDto->getMaterno() != "") || ($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getMaterno() != "") {
            $sql.="materno";
            if (($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getRfc() != "") {
            $sql.="rfc";
            if (($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCurp() != "") {
            $sql.="curp";
            if (($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveTipoDetencion() != "") {
            $sql.="cveTipoDetencion";
            if (($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getLegalDetencion() != "") {
            $sql.="LegalDetencion";
            if (($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveGenero() != "") {
            $sql.="cveGenero";
            if ( ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveTipoReligion() != "" && (int)$imputadoscarpetasDto->getCveTipoReligion() > 0) {
            $sql.="cveTipoReligion";
            if (($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getAlias() != "") {
            $sql.="alias";
            if (($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getFechaDeclaracion() != "") {
            $sql.="fechaDeclaracion";
            if (($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCvePaisNacimiento() != "") {
            $sql.="cvePaisNacimiento";
            if (($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") {
            $sql.="cveEstadoNacimiento";
            if (($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") {
            $sql.="cveMunicipioNacimiento";
            if (($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getFechaNacimiento() != "") {
            $sql.="fechaNacimiento";
            if (($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getEdad() != "") {
            $sql.="edad";
            if (($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveTipoPersona() != "") {
            $sql.="cveTipoPersona";
            if (($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getNombreMoral() != "") {
            $sql.="nombreMoral";
            if (($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveNivelInstruccion() != "") {
            $sql.="cveNivelInstruccion";
            if (($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveEstadoCivil() != "") {
            $sql.="cveEstadoCivil";
            if (($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveEspanol() != "") {
            $sql.="cveEspanol";
            if (($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveAlfabetismo() != "") {
            $sql.="cveAlfabetismo";
            if (($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveDialectoIndigena() != "") {
            $sql.="cveDialectoIndigena";
            if (($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") {
            $sql.="cveTipoFamiliaLinguistica";
            if (($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveOcupacion() != "") {
            $sql.="cveOcupacion";
            if (($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveInterprete() != "") {
            $sql.="cveInterprete";
            if (($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") {
            $sql.="cveEstadoPsicofisico";
            if (($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getFechaImputacion() != "") {
            $sql.="fechaImputacion";
            if (($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getFechaControlDet() != "") {
            $sql.="fechaControlDet";
            if (($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getFecTerminoCons() != "") {
            $sql.="fecTerminoCons";
            if (($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getFecCierreInv() != "") {
            $sql.="fecCierreInv";
            if (($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getEstadoNacimiento() != "") {
            $sql.="estadoNacimiento";
            if (($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getMunicipioNacimiento() != "") {
            $sql.="municipioNacimiento";
            if (($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getRelacionMoral() != "") {
            $sql.="relacionMoral";
            if (($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getPersonaMoral() != "") {
            $sql.="personaMoral";
            if (($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveCereso() != "") {
            $sql.="cveCereso";
            if (($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveEtapaProcesal() != "") {
            $sql.="cveEtapaProcesal";
            if (($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveTipoReincidencia() != "") {
            $sql.="cveTipoReincidencia";
            if (($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getIngresoMensual() != "") {
            $sql.="ingresoMensual";
            if (($imputadoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveGrupoEdnico() != "") {
            $sql.="cveGrupoEdnico";
            if (($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getTieneSobreseimiento() != "") {
            $sql.="TieneSobreseimiento";
            if ($imputadoscarpetasDto->getFechaSobreseimiento() != "") {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getFechaSobreseimiento() != "") {
            $sql.="FechaSobreseimiento";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($imputadoscarpetasDto->getIdImputadoCarpeta() != "") {
            $sql.="'" . $imputadoscarpetasDto->getIdImputadoCarpeta() . "'";
            if (($imputadoscarpetasDto->getIdCarpetaJudicial() != "") || ($imputadoscarpetasDto->getActivo() != "") || ($imputadoscarpetasDto->getDetenido() != "") || ($imputadoscarpetasDto->getNombre() != "") || ($imputadoscarpetasDto->getPaterno() != "") || ($imputadoscarpetasDto->getMaterno() != "") || ($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getIdCarpetaJudicial() != "") {
            $sql.="'" . $imputadoscarpetasDto->getIdCarpetaJudicial() . "'";
            if (($imputadoscarpetasDto->getActivo() != "") || ($imputadoscarpetasDto->getDetenido() != "") || ($imputadoscarpetasDto->getNombre() != "") || ($imputadoscarpetasDto->getPaterno() != "") || ($imputadoscarpetasDto->getMaterno() != "") || ($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getActivo() != "") {
            $sql.="'" . $imputadoscarpetasDto->getActivo() . "'";
            if (($imputadoscarpetasDto->getDetenido() != "") || ($imputadoscarpetasDto->getNombre() != "") || ($imputadoscarpetasDto->getPaterno() != "") || ($imputadoscarpetasDto->getMaterno() != "") || ($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getDetenido() != "") {
            $sql.="'" . $imputadoscarpetasDto->getDetenido() . "'";
            if (($imputadoscarpetasDto->getNombre() != "") || ($imputadoscarpetasDto->getPaterno() != "") || ($imputadoscarpetasDto->getMaterno() != "") || ($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getNombre() != "") {
            $sql.="'" . $imputadoscarpetasDto->getNombre() . "'";
            if (($imputadoscarpetasDto->getPaterno() != "") || ($imputadoscarpetasDto->getMaterno() != "") || ($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getPaterno() != "") {
            $sql.="'" . $imputadoscarpetasDto->getPaterno() . "'";
            if (($imputadoscarpetasDto->getMaterno() != "") || ($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getMaterno() != "") {
            $sql.="'" . $imputadoscarpetasDto->getMaterno() . "'";
            if (($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getRfc() != "") {
            $sql.="'" . $imputadoscarpetasDto->getRfc() . "'";
            if (($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCurp() != "") {
            $sql.="'" . $imputadoscarpetasDto->getCurp() . "'";
            if (($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveTipoDetencion() != "") {
            $sql.="'" . $imputadoscarpetasDto->getCveTipoDetencion() . "'";
            if (($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getLegalDetencion() != "") {
            $sql.="'" . $imputadoscarpetasDto->getLegalDetencion() . "'";
            if (($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveGenero() != "") {
            $sql.="'" . $imputadoscarpetasDto->getCveGenero() . "'";
            if ( ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveTipoReligion() != "" && (int)$imputadoscarpetasDto->getCveTipoReligion() > 0) {
            $sql.="'" . $imputadoscarpetasDto->getCveTipoReligion() . "'";
            if (($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getAlias() != "") {
            $sql.="'" . $imputadoscarpetasDto->getAlias() . "'";
            if (($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getFechaDeclaracion() != "") {
            $sql.="'" . $imputadoscarpetasDto->getFechaDeclaracion() . "'";
            if (($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCvePaisNacimiento() != "") {
            $sql.="'" . $imputadoscarpetasDto->getCvePaisNacimiento() . "'";
            if (($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") {
            $sql.="'" . $imputadoscarpetasDto->getCveEstadoNacimiento() . "'";
            if (($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") {
            $sql.="'" . $imputadoscarpetasDto->getCveMunicipioNacimiento() . "'";
            if (($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getFechaNacimiento() != "") {
            $sql.="'" . $imputadoscarpetasDto->getFechaNacimiento() . "'";
            if (($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getEdad() != "") {
            $sql.="'" . $imputadoscarpetasDto->getEdad() . "'";
            if (($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveTipoPersona() != "") {
            $sql.="'" . $imputadoscarpetasDto->getCveTipoPersona() . "'";
            if (($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getNombreMoral() != "") {
            $sql.="'" . $imputadoscarpetasDto->getNombreMoral() . "'";
            if (($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveNivelInstruccion() != "") {
            $sql.="'" . $imputadoscarpetasDto->getCveNivelInstruccion() . "'";
            if (($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveEstadoCivil() != "") {
            $sql.="'" . $imputadoscarpetasDto->getCveEstadoCivil() . "'";
            if (($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveEspanol() != "") {
            $sql.="'" . $imputadoscarpetasDto->getCveEspanol() . "'";
            if (($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveAlfabetismo() != "") {
            $sql.="'" . $imputadoscarpetasDto->getCveAlfabetismo() . "'";
            if (($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveDialectoIndigena() != "") {
            $sql.="'" . $imputadoscarpetasDto->getCveDialectoIndigena() . "'";
            if (($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") {
            $sql.="'" . $imputadoscarpetasDto->getCveTipoFamiliaLinguistica() . "'";
            if (($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveOcupacion() != "") {
            $sql.="'" . $imputadoscarpetasDto->getCveOcupacion() . "'";
            if (($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveInterprete() != "") {
            $sql.="'" . $imputadoscarpetasDto->getCveInterprete() . "'";
            if (($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") {
            $sql.="'" . $imputadoscarpetasDto->getCveEstadoPsicofisico() . "'";
            if (($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getFechaImputacion() != "") {
            $sql.="'" . $imputadoscarpetasDto->getFechaImputacion() . "'";
            if (($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getFechaControlDet() != "") {
            $sql.="'" . $imputadoscarpetasDto->getFechaControlDet() . "'";
            if (($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getFecTerminoCons() != "") {
            $sql.="'" . $imputadoscarpetasDto->getFecTerminoCons() . "'";
            if (($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getFecCierreInv() != "") {
            $sql.="'" . $imputadoscarpetasDto->getFecCierreInv() . "'";
            if (($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getEstadoNacimiento() != "") {
            $sql.="'" . $imputadoscarpetasDto->getEstadoNacimiento() . "'";
            if (($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getMunicipioNacimiento() != "") {
            $sql.="'" . $imputadoscarpetasDto->getMunicipioNacimiento() . "'";
            if (($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getRelacionMoral() != "") {
            $sql.="'" . $imputadoscarpetasDto->getRelacionMoral() . "'";
            if (($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getPersonaMoral() != "") {
            $sql.="'" . $imputadoscarpetasDto->getPersonaMoral() . "'";
            if (($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveCereso() != "") {
            $sql.="'" . $imputadoscarpetasDto->getCveCereso() . "'";
            if (($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveEtapaProcesal() != "") {
            $sql.="'" . $imputadoscarpetasDto->getCveEtapaProcesal() . "'";
            if (($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveTipoReincidencia() != "") {
            $sql.="'" . $imputadoscarpetasDto->getCveTipoReincidencia() . "'";
            if (($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getIngresoMensual() != "") {
            $sql.="'" . $imputadoscarpetasDto->getIngresoMensual() . "'";
            if (($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveGrupoEdnico() != "") {
            $sql.="'" . $imputadoscarpetasDto->getCveGrupoEdnico() . "'";
            if (($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getTieneSobreseimiento() != "") {
            $sql.="'" . $imputadoscarpetasDto->getTieneSobreseimiento() . "'";
            if ($imputadoscarpetasDto->getFechaSobreseimiento() != "") {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getFechaSobreseimiento() != "") {
            $sql.="'" . $imputadoscarpetasDto->getFechaSobreseimiento() . "'";
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        //print_r($sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImputadoscarpetasDTO();
            $tmp->setIdImputadoCarpeta($this->_proveedor->lastID());
            $tmp = $this->selectImputadoscarpetas($tmp, "", $this->_proveedor);
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        unset($contador);
        unset($sql);
        return $tmp;
    }

    public function updateImputadoscarpetas($imputadoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblimputadoscarpetas SET ";
        if ($imputadoscarpetasDto->getIdImputadoCarpeta() != "") {
            $sql.="idImputadoCarpeta='" . $imputadoscarpetasDto->getIdImputadoCarpeta() . "'";
            if (($imputadoscarpetasDto->getIdCarpetaJudicial() != "") || ($imputadoscarpetasDto->getActivo() != "") || ($imputadoscarpetasDto->getFechaRegistro() != "") || ($imputadoscarpetasDto->getFechaActualizacion() != "") || ($imputadoscarpetasDto->getDetenido() != "") || ($imputadoscarpetasDto->getNombre() != "") || ($imputadoscarpetasDto->getPaterno() != "") || ($imputadoscarpetasDto->getMaterno() != "") || ($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getIdCarpetaJudicial() != "") {
            $sql.="idCarpetaJudicial='" . $imputadoscarpetasDto->getIdCarpetaJudicial() . "'";
            if (($imputadoscarpetasDto->getActivo() != "") || ($imputadoscarpetasDto->getFechaRegistro() != "") || ($imputadoscarpetasDto->getFechaActualizacion() != "") || ($imputadoscarpetasDto->getDetenido() != "") || ($imputadoscarpetasDto->getNombre() != "") || ($imputadoscarpetasDto->getPaterno() != "") || ($imputadoscarpetasDto->getMaterno() != "") || ($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getActivo() != "") {
            $sql.="activo='" . $imputadoscarpetasDto->getActivo() . "'";
            if (($imputadoscarpetasDto->getFechaRegistro() != "") || ($imputadoscarpetasDto->getFechaActualizacion() != "") || ($imputadoscarpetasDto->getDetenido() != "") || ($imputadoscarpetasDto->getNombre() != "") || ($imputadoscarpetasDto->getPaterno() != "") || ($imputadoscarpetasDto->getMaterno() != "") || ($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $imputadoscarpetasDto->getFechaRegistro() . "'";
            if (($imputadoscarpetasDto->getFechaActualizacion() != "") || ($imputadoscarpetasDto->getDetenido() != "") || ($imputadoscarpetasDto->getNombre() != "") || ($imputadoscarpetasDto->getPaterno() != "") || ($imputadoscarpetasDto->getMaterno() != "") || ($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $imputadoscarpetasDto->getFechaActualizacion() . "'";
            if (($imputadoscarpetasDto->getDetenido() != "") || ($imputadoscarpetasDto->getNombre() != "") || ($imputadoscarpetasDto->getPaterno() != "") || ($imputadoscarpetasDto->getMaterno() != "") || ($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getDetenido() != "") {
            $sql.="detenido='" . $imputadoscarpetasDto->getDetenido() . "'";
            if (($imputadoscarpetasDto->getNombre() != "") || ($imputadoscarpetasDto->getPaterno() != "") || ($imputadoscarpetasDto->getMaterno() != "") || ($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getNombre() != "") {
            $sql.="nombre='" . $imputadoscarpetasDto->getNombre() . "'";
            if (($imputadoscarpetasDto->getPaterno() != "") || ($imputadoscarpetasDto->getMaterno() != "") || ($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getPaterno() != "") {
            $sql.="paterno='" . $imputadoscarpetasDto->getPaterno() . "'";
            if (($imputadoscarpetasDto->getMaterno() != "") || ($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getMaterno() != "") {
            $sql.="materno='" . $imputadoscarpetasDto->getMaterno() . "'";
            if (($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getRfc() != "") {
            $sql.="rfc='" . $imputadoscarpetasDto->getRfc() . "'";
            if (($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCurp() != "") {
            $sql.="curp='" . $imputadoscarpetasDto->getCurp() . "'";
            if (($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveTipoDetencion() != "") {
            $sql.="cveTipoDetencion='" . $imputadoscarpetasDto->getCveTipoDetencion() . "'";
            if (($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getLegalDetencion() != "") {
            $sql.="LegalDetencion='" . $imputadoscarpetasDto->getLegalDetencion() . "'";
            if (($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveGenero() != "") {
            $sql.="cveGenero='" . $imputadoscarpetasDto->getCveGenero() . "'";
            if ( ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveTipoReligion() != "" && (int)$imputadoscarpetasDto->getCveTipoReligion() > 0) {
            $sql.="cveTipoReligion='" . $imputadoscarpetasDto->getCveTipoReligion() . "'";
            if (($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getAlias() != "") {
            $sql.="alias='" . $imputadoscarpetasDto->getAlias() . "'";
            if (($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getFechaDeclaracion() != "") {
            $sql.="fechaDeclaracion='" . $imputadoscarpetasDto->getFechaDeclaracion() . "'";
            if (($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCvePaisNacimiento() != "") {
            $sql.="cvePaisNacimiento='" . $imputadoscarpetasDto->getCvePaisNacimiento() . "'";
            if (($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") {
            $sql.="cveEstadoNacimiento='" . $imputadoscarpetasDto->getCveEstadoNacimiento() . "'";
            if (($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") {
            $sql.="cveMunicipioNacimiento='" . $imputadoscarpetasDto->getCveMunicipioNacimiento() . "'";
            if (($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getFechaNacimiento() != "") {
            $sql.="fechaNacimiento='" . $imputadoscarpetasDto->getFechaNacimiento() . "'";
            if (($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getEdad() != "") {
            $sql.="edad='" . $imputadoscarpetasDto->getEdad() . "'";
            if (($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveTipoPersona() != "") {
            $sql.="cveTipoPersona='" . $imputadoscarpetasDto->getCveTipoPersona() . "'";
            if (($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getNombreMoral() != "") {
            $sql.="nombreMoral='" . $imputadoscarpetasDto->getNombreMoral() . "'";
            if (($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveNivelInstruccion() != "") {
            $sql.="cveNivelInstruccion='" . $imputadoscarpetasDto->getCveNivelInstruccion() . "'";
            if (($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveEstadoCivil() != "") {
            $sql.="cveEstadoCivil='" . $imputadoscarpetasDto->getCveEstadoCivil() . "'";
            if (($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveEspanol() != "") {
            $sql.="cveEspanol='" . $imputadoscarpetasDto->getCveEspanol() . "'";
            if (($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveAlfabetismo() != "") {
            $sql.="cveAlfabetismo='" . $imputadoscarpetasDto->getCveAlfabetismo() . "'";
            if (($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveDialectoIndigena() != "") {
            $sql.="cveDialectoIndigena='" . $imputadoscarpetasDto->getCveDialectoIndigena() . "'";
            if (($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") {
            $sql.="cveTipoFamiliaLinguistica='" . $imputadoscarpetasDto->getCveTipoFamiliaLinguistica() . "'";
            if (($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveOcupacion() != "") {
            $sql.="cveOcupacion='" . $imputadoscarpetasDto->getCveOcupacion() . "'";
            if (($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveInterprete() != "") {
            $sql.="cveInterprete='" . $imputadoscarpetasDto->getCveInterprete() . "'";
            if (($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") {
            $sql.="cveEstadoPsicofisico='" . $imputadoscarpetasDto->getCveEstadoPsicofisico() . "'";
            if (($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getFechaImputacion() != "") {
            $sql.="fechaImputacion='" . $imputadoscarpetasDto->getFechaImputacion() . "'";
            if (($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getFechaControlDet() != "") {
            $sql.="fechaControlDet='" . $imputadoscarpetasDto->getFechaControlDet() . "'";
            if (($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getFecTerminoCons() != "") {
            $sql.="fecTerminoCons='" . $imputadoscarpetasDto->getFecTerminoCons() . "'";
            if (($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getFecCierreInv() != "") {
            $sql.="fecCierreInv='" . $imputadoscarpetasDto->getFecCierreInv() . "'";
            if (($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getEstadoNacimiento() != "") {
            $sql.="estadoNacimiento='" . $imputadoscarpetasDto->getEstadoNacimiento() . "'";
            if (($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getMunicipioNacimiento() != "") {
            $sql.="municipioNacimiento='" . $imputadoscarpetasDto->getMunicipioNacimiento() . "'";
            if (($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getRelacionMoral() != "") {
            $sql.="relacionMoral='" . $imputadoscarpetasDto->getRelacionMoral() . "'";
            if (($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getPersonaMoral() != "") {
            $sql.="personaMoral='" . $imputadoscarpetasDto->getPersonaMoral() . "'";
            if (($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveCereso() != "") {
            $sql.="cveCereso='" . $imputadoscarpetasDto->getCveCereso() . "'";
            if (($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveEtapaProcesal() != "") {
            $sql.="cveEtapaProcesal='" . $imputadoscarpetasDto->getCveEtapaProcesal() . "'";
            if (($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveTipoReincidencia() != "") {
            $sql.="cveTipoReincidencia='" . $imputadoscarpetasDto->getCveTipoReincidencia() . "'";
            if (($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getIngresoMensual() != "") {
            $sql.="ingresoMensual='" . $imputadoscarpetasDto->getIngresoMensual() . "'";
            if (($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getCveGrupoEdnico() != "") {
            $sql.="cveGrupoEdnico='" . $imputadoscarpetasDto->getCveGrupoEdnico() . "'";
            if (($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getTieneSobreseimiento() != "") {
            $sql.="TieneSobreseimiento='" . $imputadoscarpetasDto->getTieneSobreseimiento() . "'";
            if (($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasDto->getFechaSobreseimiento() != "") {
            $sql.="FechaSobreseimiento='" . $imputadoscarpetasDto->getFechaSobreseimiento() . "'";
        }
        $sql.=" WHERE idImputadoCarpeta='" . $imputadoscarpetasDto->getIdImputadoCarpeta() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImputadoscarpetasDTO();
            $tmp->setIdImputadoCarpeta($imputadoscarpetasDto->getIdImputadoCarpeta());
            $tmp = $this->selectImputadoscarpetas($tmp, "", $this->_proveedor);
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        unset($contador);
        unset($sql);
        return $tmp;
    }

    public function deleteImputadoscarpetas($imputadoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblimputadoscarpetas  WHERE idImputadoCarpeta='" . $imputadoscarpetasDto->getIdImputadoCarpeta() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = true;
        } else {
            $tmp = false;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        unset($contador);
        unset($sql);
        return $tmp;
    }

    /*
     * Editar campos no requeridos en imputados carpteas
     */

    public function modificarImputadoscarpetas($imputadoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblimputadoscarpetas SET ";
        $sql.=" fechaActualizacion=NOW()";
        $sql.=" ,detenido='" . $imputadoscarpetasDto->getDetenido() . "'";
        $sql.=" ,nombre='" . $imputadoscarpetasDto->getNombre() . "'";
        $sql.=" ,paterno='" . $imputadoscarpetasDto->getPaterno() . "'";
        $sql.=" ,materno='" . $imputadoscarpetasDto->getMaterno() . "'";
        $sql.=" ,rfc='" . $imputadoscarpetasDto->getRfc() . "'";
        $sql.=" ,curp='" . $imputadoscarpetasDto->getCurp() . "'";
        $sql.=" ,cveTipoDetencion='" . $imputadoscarpetasDto->getCveTipoDetencion() . "'";
        $sql.=" ,LegalDetencion='" . $imputadoscarpetasDto->getLegalDetencion() . "'";
        $sql.=" ,cveGenero='" . $imputadoscarpetasDto->getCveGenero() . "'";
        if ( $imputadoscarpetasDto->getCveTipoReligion() != "" && (int)$imputadoscarpetasDto->getCveTipoReligion() > 0 ) {
            $sql .= " ,cveTipoReligion='" . $imputadoscarpetasDto->getCveTipoReligion() . "'";
        }
        $sql.=" ,alias='" . $imputadoscarpetasDto->getAlias() . "'";
        $sql.=" ,fechaDeclaracion='" . $imputadoscarpetasDto->getFechaDeclaracion() . "'";
        $sql.=" ,cvePaisNacimiento='" . $imputadoscarpetasDto->getCvePaisNacimiento() . "'";
        $sql.=" ,cveEstadoNacimiento='" . $imputadoscarpetasDto->getCveEstadoNacimiento() . "'";
        $sql.=" ,cveMunicipioNacimiento='" . $imputadoscarpetasDto->getCveMunicipioNacimiento() . "'";
        $sql.=" ,fechaNacimiento='" . $imputadoscarpetasDto->getFechaNacimiento() . "'";
        $sql.=" ,edad='" . $imputadoscarpetasDto->getEdad() . "'";
        $sql.=" ,cveTipoPersona='" . $imputadoscarpetasDto->getCveTipoPersona() . "'";
        $sql.=" ,nombreMoral='" . $imputadoscarpetasDto->getNombreMoral() . "'";
        $sql.=" ,cveNivelInstruccion='" . $imputadoscarpetasDto->getCveNivelInstruccion() . "'";
        $sql.=" ,cveEstadoCivil='" . $imputadoscarpetasDto->getCveEstadoCivil() . "'";
        $sql.=" ,cveEspanol='" . $imputadoscarpetasDto->getCveEspanol() . "'";
        $sql.=" ,cveAlfabetismo='" . $imputadoscarpetasDto->getCveAlfabetismo() . "'";
        $sql.=" ,cveDialectoIndigena='" . $imputadoscarpetasDto->getCveDialectoIndigena() . "'";
        $sql.=" ,cveTipoFamiliaLinguistica='" . $imputadoscarpetasDto->getCveTipoFamiliaLinguistica() . "'";
        $sql.=" ,cveOcupacion='" . $imputadoscarpetasDto->getCveOcupacion() . "'";
        $sql.=" ,cveInterprete='" . $imputadoscarpetasDto->getCveInterprete() . "'";
        $sql.=" ,cveEstadoPsicofisico='" . $imputadoscarpetasDto->getCveEstadoPsicofisico() . "'";
        $sql.=" ,fechaImputacion='" . $imputadoscarpetasDto->getFechaImputacion() . "'";
        $sql.=" ,fechaControlDet='" . $imputadoscarpetasDto->getFechaControlDet() . "'";
        $sql.=" ,fecTerminoCons='" . $imputadoscarpetasDto->getFecTerminoCons() . "'";
        $sql.=" ,fecCierreInv='" . $imputadoscarpetasDto->getFecCierreInv() . "'";
        $sql.=" ,estadoNacimiento='" . $imputadoscarpetasDto->getEstadoNacimiento() . "'";
        $sql.=" ,municipioNacimiento='" . $imputadoscarpetasDto->getMunicipioNacimiento() . "'";
        $sql.=" ,relacionMoral='" . $imputadoscarpetasDto->getRelacionMoral() . "'";
        $sql.=" ,personaMoral='" . $imputadoscarpetasDto->getPersonaMoral() . "'";
        $sql.=" ,cveCereso='" . $imputadoscarpetasDto->getCveCereso() . "'";
        $sql.=" ,cveEtapaProcesal='" . $imputadoscarpetasDto->getCveEtapaProcesal() . "'";
        $sql.=" ,cveTipoReincidencia='" . $imputadoscarpetasDto->getCveTipoReincidencia() . "'";
        $sql.=" ,ingresoMensual='" . $imputadoscarpetasDto->getIngresoMensual() . "'";
        $sql.=" ,cveGrupoEdnico='" . $imputadoscarpetasDto->getCveGrupoEdnico() . "'";
        $sql.=" ,TieneSobreseimiento='" . $imputadoscarpetasDto->getTieneSobreseimiento() . "'";
        $sql.=" ,FechaSobreseimiento='" . $imputadoscarpetasDto->getFechaSobreseimiento() . "'";
        $sql.=" WHERE idImputadoCarpeta='" . $imputadoscarpetasDto->getIdImputadoCarpeta() . "'";
        //print_r($sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImputadoscarpetasDTO();
            $tmp->setIdImputadoCarpeta($imputadoscarpetasDto->getIdImputadoCarpeta());
            $tmp = $this->selectImputadoscarpetas($tmp, "", $this->_proveedor);
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        unset($contador);
        unset($sql);
        return $tmp;
    }

    /**
     * para eliminar el imputado por el campo idImputadoCarpeta se se modifica el campo activo a 'N'
     * @param $imputadoscarpetasDto
     * @param null $proveedor
     * @return bool
     */
    public function eliminarImputadoByIdImputadoCarpeta($imputadoscarpetasDto, $proveedor = null) {
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblimputadoscarpetas SET activo='N', fechaActualizacion=NOW()";

        $sql .= " WHERE idImputadoCarpeta='" . $imputadoscarpetasDto->getIdImputadoCarpeta() . "'";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $response = true;
        } else {
            $response = false;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }

        return $response;
    }

    public function selectImputadoscarpetas($imputadoscarpetasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idImputadoCarpeta,idCarpetaJudicial,activo,fechaRegistro,fechaActualizacion,detenido,nombre,paterno,materno,rfc,curp,cveTipoDetencion,LegalDetencion,cveGenero,cveTipoReligion,alias,fechaDeclaracion,cvePaisNacimiento,cveEstadoNacimiento,cveMunicipioNacimiento,fechaNacimiento,edad,cveTipoPersona,nombreMoral,cveNivelInstruccion,cveEstadoCivil,cveEspanol,cveAlfabetismo,cveDialectoIndigena,cveTipoFamiliaLinguistica,cveOcupacion,cveInterprete,cveEstadoPsicofisico,fechaImputacion,fechaControlDet,fecTerminoCons,fecCierreInv,estadoNacimiento,municipioNacimiento,relacionMoral,personaMoral,cveCereso,cveEtapaProcesal,cveTipoReincidencia,ingresoMensual,cveGrupoEdnico, TieneSobreseimiento, FechaSobreseimiento FROM tblimputadoscarpetas ";
        if (($imputadoscarpetasDto->getIdImputadoCarpeta() != "") || ($imputadoscarpetasDto->getIdCarpetaJudicial() != "") || ($imputadoscarpetasDto->getActivo() != "") || ($imputadoscarpetasDto->getFechaRegistro() != "") || ($imputadoscarpetasDto->getFechaActualizacion() != "") || ($imputadoscarpetasDto->getDetenido() != "") || ($imputadoscarpetasDto->getNombre() != "") || ($imputadoscarpetasDto->getPaterno() != "") || ($imputadoscarpetasDto->getMaterno() != "") || ($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
            $sql.=" WHERE ";
        }
        if ($imputadoscarpetasDto->getIdImputadoCarpeta() != "") {
            $sql.="idImputadoCarpeta='" . $imputadoscarpetasDto->getIdImputadoCarpeta() . "'";
            if (($imputadoscarpetasDto->getIdCarpetaJudicial() != "") || ($imputadoscarpetasDto->getActivo() != "") || ($imputadoscarpetasDto->getFechaRegistro() != "") || ($imputadoscarpetasDto->getFechaActualizacion() != "") || ($imputadoscarpetasDto->getDetenido() != "") || ($imputadoscarpetasDto->getNombre() != "") || ($imputadoscarpetasDto->getPaterno() != "") || ($imputadoscarpetasDto->getMaterno() != "") || ($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getIdCarpetaJudicial() != "") {
            $sql.="idCarpetaJudicial='" . $imputadoscarpetasDto->getIdCarpetaJudicial() . "'";
            if (($imputadoscarpetasDto->getActivo() != "") || ($imputadoscarpetasDto->getFechaRegistro() != "") || ($imputadoscarpetasDto->getFechaActualizacion() != "") || ($imputadoscarpetasDto->getDetenido() != "") || ($imputadoscarpetasDto->getNombre() != "") || ($imputadoscarpetasDto->getPaterno() != "") || ($imputadoscarpetasDto->getMaterno() != "") || ($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getActivo() != "") {
            $sql.="activo='" . $imputadoscarpetasDto->getActivo() . "'";
            if (($imputadoscarpetasDto->getFechaRegistro() != "") || ($imputadoscarpetasDto->getFechaActualizacion() != "") || ($imputadoscarpetasDto->getDetenido() != "") || ($imputadoscarpetasDto->getNombre() != "") || ($imputadoscarpetasDto->getPaterno() != "") || ($imputadoscarpetasDto->getMaterno() != "") || ($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $imputadoscarpetasDto->getFechaRegistro() . "'";
            if (($imputadoscarpetasDto->getFechaActualizacion() != "") || ($imputadoscarpetasDto->getDetenido() != "") || ($imputadoscarpetasDto->getNombre() != "") || ($imputadoscarpetasDto->getPaterno() != "") || ($imputadoscarpetasDto->getMaterno() != "") || ($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $imputadoscarpetasDto->getFechaActualizacion() . "'";
            if (($imputadoscarpetasDto->getDetenido() != "") || ($imputadoscarpetasDto->getNombre() != "") || ($imputadoscarpetasDto->getPaterno() != "") || ($imputadoscarpetasDto->getMaterno() != "") || ($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getDetenido() != "") {
            $sql.="detenido='" . $imputadoscarpetasDto->getDetenido() . "'";
            if (($imputadoscarpetasDto->getNombre() != "") || ($imputadoscarpetasDto->getPaterno() != "") || ($imputadoscarpetasDto->getMaterno() != "") || ($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getNombre() != "") {
            $sql.="nombre='" . $imputadoscarpetasDto->getNombre() . "'";
            if (($imputadoscarpetasDto->getPaterno() != "") || ($imputadoscarpetasDto->getMaterno() != "") || ($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getPaterno() != "") {
            $sql.="paterno='" . $imputadoscarpetasDto->getPaterno() . "'";
            if (($imputadoscarpetasDto->getMaterno() != "") || ($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getMaterno() != "") {
            $sql.="materno='" . $imputadoscarpetasDto->getMaterno() . "'";
            if (($imputadoscarpetasDto->getRfc() != "") || ($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getRfc() != "") {
            $sql.="rfc='" . $imputadoscarpetasDto->getRfc() . "'";
            if (($imputadoscarpetasDto->getCurp() != "") || ($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getCurp() != "") {
            $sql.="curp='" . $imputadoscarpetasDto->getCurp() . "'";
            if (($imputadoscarpetasDto->getCveTipoDetencion() != "") || ($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getCveTipoDetencion() != "") {
            $sql.="cveTipoDetencion='" . $imputadoscarpetasDto->getCveTipoDetencion() . "'";
            if (($imputadoscarpetasDto->getLegalDetencion() != "") || ($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getLegalDetencion() != "") {
            $sql.="LegalDetencion='" . $imputadoscarpetasDto->getLegalDetencion() . "'";
            if (($imputadoscarpetasDto->getCveGenero() != "") || ($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getCveGenero() != "") {
            $sql.="cveGenero='" . $imputadoscarpetasDto->getCveGenero() . "'";
            if (($imputadoscarpetasDto->getCveTipoReligion() != "") || ($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getCveTipoReligion() != "") {
            $sql.="cveTipoReligion='" . $imputadoscarpetasDto->getCveTipoReligion() . "'";
            if (($imputadoscarpetasDto->getAlias() != "") || ($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getAlias() != "") {
            $sql.="alias='" . $imputadoscarpetasDto->getAlias() . "'";
            if (($imputadoscarpetasDto->getFechaDeclaracion() != "") || ($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getFechaDeclaracion() != "") {
            $sql.="fechaDeclaracion='" . $imputadoscarpetasDto->getFechaDeclaracion() . "'";
            if (($imputadoscarpetasDto->getCvePaisNacimiento() != "") || ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getCvePaisNacimiento() != "") {
            $sql.="cvePaisNacimiento='" . $imputadoscarpetasDto->getCvePaisNacimiento() . "'";
            if (($imputadoscarpetasDto->getCveEstadoNacimiento() != "") || ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getCveEstadoNacimiento() != "") {
            $sql.="cveEstadoNacimiento='" . $imputadoscarpetasDto->getCveEstadoNacimiento() . "'";
            if (($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getCveMunicipioNacimiento() != "") {
            $sql.="cveMunicipioNacimiento='" . $imputadoscarpetasDto->getCveMunicipioNacimiento() . "'";
            if (($imputadoscarpetasDto->getFechaNacimiento() != "") || ($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getFechaNacimiento() != "") {
            $sql.="fechaNacimiento='" . $imputadoscarpetasDto->getFechaNacimiento() . "'";
            if (($imputadoscarpetasDto->getEdad() != "") || ($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getEdad() != "") {
            $sql.="edad='" . $imputadoscarpetasDto->getEdad() . "'";
            if (($imputadoscarpetasDto->getCveTipoPersona() != "") || ($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getCveTipoPersona() != "") {
            $sql.="cveTipoPersona='" . $imputadoscarpetasDto->getCveTipoPersona() . "'";
            if (($imputadoscarpetasDto->getNombreMoral() != "") || ($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getNombreMoral() != "") {
            $sql.="nombreMoral='" . $imputadoscarpetasDto->getNombreMoral() . "'";
            if (($imputadoscarpetasDto->getCveNivelInstruccion() != "") || ($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getCveNivelInstruccion() != "") {
            $sql.="cveNivelInstruccion='" . $imputadoscarpetasDto->getCveNivelInstruccion() . "'";
            if (($imputadoscarpetasDto->getCveEstadoCivil() != "") || ($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getCveEstadoCivil() != "") {
            $sql.="cveEstadoCivil='" . $imputadoscarpetasDto->getCveEstadoCivil() . "'";
            if (($imputadoscarpetasDto->getCveEspanol() != "") || ($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getCveEspanol() != "") {
            $sql.="cveEspanol='" . $imputadoscarpetasDto->getCveEspanol() . "'";
            if (($imputadoscarpetasDto->getCveAlfabetismo() != "") || ($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getCveAlfabetismo() != "") {
            $sql.="cveAlfabetismo='" . $imputadoscarpetasDto->getCveAlfabetismo() . "'";
            if (($imputadoscarpetasDto->getCveDialectoIndigena() != "") || ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getCveDialectoIndigena() != "") {
            $sql.="cveDialectoIndigena='" . $imputadoscarpetasDto->getCveDialectoIndigena() . "'";
            if (($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getCveTipoFamiliaLinguistica() != "") {
            $sql.="cveTipoFamiliaLinguistica='" . $imputadoscarpetasDto->getCveTipoFamiliaLinguistica() . "'";
            if (($imputadoscarpetasDto->getCveOcupacion() != "") || ($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getCveOcupacion() != "") {
            $sql.="cveOcupacion='" . $imputadoscarpetasDto->getCveOcupacion() . "'";
            if (($imputadoscarpetasDto->getCveInterprete() != "") || ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getCveInterprete() != "") {
            $sql.="cveInterprete='" . $imputadoscarpetasDto->getCveInterprete() . "'";
            if (($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") || ($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getCveEstadoPsicofisico() != "") {
            $sql.="cveEstadoPsicofisico='" . $imputadoscarpetasDto->getCveEstadoPsicofisico() . "'";
            if (($imputadoscarpetasDto->getFechaImputacion() != "") || ($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getFechaImputacion() != "") {
            $sql.="fechaImputacion='" . $imputadoscarpetasDto->getFechaImputacion() . "'";
            if (($imputadoscarpetasDto->getFechaControlDet() != "") || ($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getFechaControlDet() != "") {
            $sql.="fechaControlDet='" . $imputadoscarpetasDto->getFechaControlDet() . "'";
            if (($imputadoscarpetasDto->getFecTerminoCons() != "") || ($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getFecTerminoCons() != "") {
            $sql.="fecTerminoCons='" . $imputadoscarpetasDto->getFecTerminoCons() . "'";
            if (($imputadoscarpetasDto->getFecCierreInv() != "") || ($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getFecCierreInv() != "") {
            $sql.="fecCierreInv='" . $imputadoscarpetasDto->getFecCierreInv() . "'";
            if (($imputadoscarpetasDto->getEstadoNacimiento() != "") || ($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getEstadoNacimiento() != "") {
            $sql.="estadoNacimiento='" . $imputadoscarpetasDto->getEstadoNacimiento() . "'";
            if (($imputadoscarpetasDto->getMunicipioNacimiento() != "") || ($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getMunicipioNacimiento() != "") {
            $sql.="municipioNacimiento='" . $imputadoscarpetasDto->getMunicipioNacimiento() . "'";
            if (($imputadoscarpetasDto->getRelacionMoral() != "") || ($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getRelacionMoral() != "") {
            $sql.="relacionMoral='" . $imputadoscarpetasDto->getRelacionMoral() . "'";
            if (($imputadoscarpetasDto->getPersonaMoral() != "") || ($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getPersonaMoral() != "") {
            $sql.="personaMoral='" . $imputadoscarpetasDto->getPersonaMoral() . "'";
            if (($imputadoscarpetasDto->getCveCereso() != "") || ($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getCveCereso() != "") {
            $sql.="cveCereso='" . $imputadoscarpetasDto->getCveCereso() . "'";
            if (($imputadoscarpetasDto->getCveEtapaProcesal() != "") || ($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getCveEtapaProcesal() != "") {
            $sql.="cveEtapaProcesal='" . $imputadoscarpetasDto->getCveEtapaProcesal() . "'";
            if (($imputadoscarpetasDto->getCveTipoReincidencia() != "") || ($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getCveTipoReincidencia() != "") {
            $sql.="cveTipoReincidencia='" . $imputadoscarpetasDto->getCveTipoReincidencia() . "'";
            if (($imputadoscarpetasDto->getIngresoMensual() != "") || ($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getIngresoMensual() != "") {
            $sql.="ingresoMensual='" . $imputadoscarpetasDto->getIngresoMensual() . "'";
            if (($imputadoscarpetasDto->getCveGrupoEdnico() != "") || ($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getCveGrupoEdnico() != "") {
            $sql.="cveGrupoEdnico='" . $imputadoscarpetasDto->getCveGrupoEdnico() . "'";
            if (($imputadoscarpetasDto->getTieneSobreseimiento() != "") || ($imputadoscarpetasDto->getFechaSobreseimiento() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getTieneSobreseimiento() != "") {
            $sql.="TieneSobreseimiento='" . $imputadoscarpetasDto->getTieneSobreseimiento() . "'";
            if ($imputadoscarpetasDto->getFechaSobreseimiento() != "") {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasDto->getFechaSobreseimiento() != "") {
            $sql.="FechaSobreseimiento='" . $imputadoscarpetasDto->getFechaSobreseimiento() . "'";
        }
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
//        echo $sql;
        error_log('imputados carpetas: '.$sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new ImputadoscarpetasDTO();
                    $tmp[$contador]->setIdImputadoCarpeta($row["idImputadoCarpeta"]);
                    $tmp[$contador]->setIdCarpetaJudicial($row["idCarpetaJudicial"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setDetenido($row["detenido"]);
                    $tmp[$contador]->setNombre($row["nombre"]);
                    $tmp[$contador]->setPaterno($row["paterno"]);
                    $tmp[$contador]->setMaterno($row["materno"]);
                    $tmp[$contador]->setRfc($row["rfc"]);
                    $tmp[$contador]->setCurp($row["curp"]);
                    $tmp[$contador]->setCveTipoDetencion($row["cveTipoDetencion"]);
                    $tmp[$contador]->setLegalDetencion($row["LegalDetencion"]);
                    $tmp[$contador]->setCveGenero($row["cveGenero"]);
                    $tmp[$contador]->setCveTipoReligion($row["cveTipoReligion"]);
                    $tmp[$contador]->setAlias($row["alias"]);
                    $tmp[$contador]->setFechaDeclaracion($row["fechaDeclaracion"]);
                    $tmp[$contador]->setCvePaisNacimiento($row["cvePaisNacimiento"]);
                    $tmp[$contador]->setCveEstadoNacimiento($row["cveEstadoNacimiento"]);
                    $tmp[$contador]->setCveMunicipioNacimiento($row["cveMunicipioNacimiento"]);
                    $tmp[$contador]->setFechaNacimiento($row["fechaNacimiento"]);
                    $tmp[$contador]->setEdad($row["edad"]);
                    $tmp[$contador]->setCveTipoPersona($row["cveTipoPersona"]);
                    $tmp[$contador]->setNombreMoral($row["nombreMoral"]);
                    $tmp[$contador]->setCveNivelInstruccion($row["cveNivelInstruccion"]);
                    $tmp[$contador]->setCveEstadoCivil($row["cveEstadoCivil"]);
                    $tmp[$contador]->setCveEspanol($row["cveEspanol"]);
                    $tmp[$contador]->setCveAlfabetismo($row["cveAlfabetismo"]);
                    $tmp[$contador]->setCveDialectoIndigena($row["cveDialectoIndigena"]);
                    $tmp[$contador]->setCveTipoFamiliaLinguistica($row["cveTipoFamiliaLinguistica"]);
                    $tmp[$contador]->setCveOcupacion($row["cveOcupacion"]);
                    $tmp[$contador]->setCveInterprete($row["cveInterprete"]);
                    $tmp[$contador]->setCveEstadoPsicofisico($row["cveEstadoPsicofisico"]);
                    $tmp[$contador]->setFechaImputacion($row["fechaImputacion"]);
                    $tmp[$contador]->setFechaControlDet($row["fechaControlDet"]);
                    $tmp[$contador]->setFecTerminoCons($row["fecTerminoCons"]);
                    $tmp[$contador]->setFecCierreInv($row["fecCierreInv"]);
                    $tmp[$contador]->setEstadoNacimiento($row["estadoNacimiento"]);
                    $tmp[$contador]->setMunicipioNacimiento($row["municipioNacimiento"]);
                    $tmp[$contador]->setRelacionMoral($row["relacionMoral"]);
                    $tmp[$contador]->setPersonaMoral($row["personaMoral"]);
                    $tmp[$contador]->setCveCereso($row["cveCereso"]);
                    $tmp[$contador]->setCveEtapaProcesal($row["cveEtapaProcesal"]);
                    $tmp[$contador]->setCveTipoReincidencia($row["cveTipoReincidencia"]);
                    $tmp[$contador]->setIngresoMensual($row["ingresoMensual"]);
                    $tmp[$contador]->setCveGrupoEdnico($row["cveGrupoEdnico"]);
                    $tmp[$contador]->setTieneSobreseimiento($row["TieneSobreseimiento"]);
                    $tmp[$contador]->setFechaSobreseimiento($row["FechaSobreseimiento"]);
                    $contador++;
                }
            } else {
                $error = true;
            }
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        unset($contador);
        unset($sql);
        return $tmp;
    }

    /*
     * Obtener el total de imputados carpetas
     */

    public function selectImputadoscarpetastotal($imputadoscarpetasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT COUNT(idImputadoCarpeta) as totalCount  FROM tblimputadoscarpetas ";
        $sql.=" WHERE idCarpetaJudicial='" . $imputadoscarpetasDto->getIdCarpetaJudicial() . "'";
        $sql.=" AND activo='" . $imputadoscarpetasDto->getActivo() . "'";
        //print_r($sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                $actuaciones = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0);
                $totalRegistros = $actuaciones["totalCount"];
            }
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        return $totalRegistros;
    }
    
     public function selectImputadoscarpetasPag($imputadoscarpetasDto,$proveedor = null, $orden = "", $param = null, $fields = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        //--------------->
        $sql = "SELECT";
        if ($fields === null) {
            $sql .= " idImputadoCarpeta,idCarpetaJudicial,activo,fechaRegistro,fechaActualizacion,detenido,nombre,paterno,materno,rfc,curp,cveTipoDetencion,LegalDetencion,cveGenero,cveTipoReligion,alias,fechaDeclaracion,cvePaisNacimiento,cveEstadoNacimiento,cveMunicipioNacimiento,fechaNacimiento,edad,cveTipoPersona,nombreMoral,cveNivelInstruccion,cveEstadoCivil,cveEspanol,cveAlfabetismo,cveDialectoIndigena,cveTipoFamiliaLinguistica,cveOcupacion,cveInterprete,cveEstadoPsicofisico,fechaImputacion,fechaControlDet,fecTerminoCons,fecCierreInv,estadoNacimiento,municipioNacimiento,relacionMoral,personaMoral,cveCereso,cveEtapaProcesal,cveTipoReincidencia,ingresoMensual,cveGrupoEdnico, TieneSobreseimiento, FechaSobreseimiento ";
        } else {
            $sql .= $fields;
        }

        $sql .= "FROM tblimputadoscarpetas";
        //<-------------
        if(($imputadoscarpetasDto->getIdImputadoCarpeta()!="") ||($imputadoscarpetasDto->getIdCarpetaJudicial()!="") ||($imputadoscarpetasDto->getActivo()!="") ||($imputadoscarpetasDto->getFechaRegistro()!="") ||($imputadoscarpetasDto->getFechaActualizacion()!="") ||($imputadoscarpetasDto->getDetenido()!="") ||($imputadoscarpetasDto->getNombre()!="") ||($imputadoscarpetasDto->getPaterno()!="") ||($imputadoscarpetasDto->getMaterno()!="") ||($imputadoscarpetasDto->getRfc()!="") ||($imputadoscarpetasDto->getCurp()!="") ||($imputadoscarpetasDto->getCveTipoDetencion()!="") || ($imputadoscarpetasDto->getLegalDetencion()!="") ||($imputadoscarpetasDto->getCveGenero()!="") || ($imputadoscarpetasDto->getCveTipoReligion()!="") ||($imputadoscarpetasDto->getAlias()!="") ||($imputadoscarpetasDto->getFechaDeclaracion()!="") ||($imputadoscarpetasDto->getCvePaisNacimiento()!="") ||($imputadoscarpetasDto->getCveEstadoNacimiento()!="") ||($imputadoscarpetasDto->getCveMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getFechaNacimiento()!="") ||($imputadoscarpetasDto->getEdad()!="") ||($imputadoscarpetasDto->getCveTipoPersona()!="") ||($imputadoscarpetasDto->getNombreMoral()!="") ||($imputadoscarpetasDto->getCveNivelInstruccion()!="") ||($imputadoscarpetasDto->getCveEstadoCivil()!="") ||($imputadoscarpetasDto->getCveEspanol()!="") ||($imputadoscarpetasDto->getCveAlfabetismo()!="") ||($imputadoscarpetasDto->getCveDialectoIndigena()!="") ||($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
            $sql.=" WHERE ";
        }
        if($imputadoscarpetasDto->getIdImputadoCarpeta()!=""){
            $sql.="idImputadoCarpeta='".$imputadoscarpetasDto->getIdImputadoCarpeta()."'";
            if(($imputadoscarpetasDto->getIdCarpetaJudicial()!="") ||($imputadoscarpetasDto->getActivo()!="") ||($imputadoscarpetasDto->getFechaRegistro()!="") ||($imputadoscarpetasDto->getFechaActualizacion()!="") ||($imputadoscarpetasDto->getDetenido()!="") ||($imputadoscarpetasDto->getNombre()!="") ||($imputadoscarpetasDto->getPaterno()!="") ||($imputadoscarpetasDto->getMaterno()!="") ||($imputadoscarpetasDto->getRfc()!="") ||($imputadoscarpetasDto->getCurp()!="") ||($imputadoscarpetasDto->getCveTipoDetencion()!="") || ($imputadoscarpetasDto->getLegalDetencion()!="") ||($imputadoscarpetasDto->getCveGenero()!="") || ($imputadoscarpetasDto->getCveTipoReligion()!="") ||($imputadoscarpetasDto->getAlias()!="") ||($imputadoscarpetasDto->getFechaDeclaracion()!="") ||($imputadoscarpetasDto->getCvePaisNacimiento()!="") ||($imputadoscarpetasDto->getCveEstadoNacimiento()!="") ||($imputadoscarpetasDto->getCveMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getFechaNacimiento()!="") ||($imputadoscarpetasDto->getEdad()!="") ||($imputadoscarpetasDto->getCveTipoPersona()!="") ||($imputadoscarpetasDto->getNombreMoral()!="") ||($imputadoscarpetasDto->getCveNivelInstruccion()!="") ||($imputadoscarpetasDto->getCveEstadoCivil()!="") ||($imputadoscarpetasDto->getCveEspanol()!="") ||($imputadoscarpetasDto->getCveAlfabetismo()!="") ||($imputadoscarpetasDto->getCveDialectoIndigena()!="") ||($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getIdCarpetaJudicial()!=""){
            $sql.="idCarpetaJudicial='".$imputadoscarpetasDto->getIdCarpetaJudicial()."'";
            if(($imputadoscarpetasDto->getActivo()!="") ||($imputadoscarpetasDto->getFechaRegistro()!="") ||($imputadoscarpetasDto->getFechaActualizacion()!="") ||($imputadoscarpetasDto->getDetenido()!="") ||($imputadoscarpetasDto->getNombre()!="") ||($imputadoscarpetasDto->getPaterno()!="") ||($imputadoscarpetasDto->getMaterno()!="") ||($imputadoscarpetasDto->getRfc()!="") ||($imputadoscarpetasDto->getCurp()!="") ||($imputadoscarpetasDto->getCveTipoDetencion()!="") || ($imputadoscarpetasDto->getLegalDetencion()!="") ||($imputadoscarpetasDto->getCveGenero()!="") || ($imputadoscarpetasDto->getCveTipoReligion()!="") ||($imputadoscarpetasDto->getAlias()!="") ||($imputadoscarpetasDto->getFechaDeclaracion()!="") ||($imputadoscarpetasDto->getCvePaisNacimiento()!="") ||($imputadoscarpetasDto->getCveEstadoNacimiento()!="") ||($imputadoscarpetasDto->getCveMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getFechaNacimiento()!="") ||($imputadoscarpetasDto->getEdad()!="") ||($imputadoscarpetasDto->getCveTipoPersona()!="") ||($imputadoscarpetasDto->getNombreMoral()!="") ||($imputadoscarpetasDto->getCveNivelInstruccion()!="") ||($imputadoscarpetasDto->getCveEstadoCivil()!="") ||($imputadoscarpetasDto->getCveEspanol()!="") ||($imputadoscarpetasDto->getCveAlfabetismo()!="") ||($imputadoscarpetasDto->getCveDialectoIndigena()!="") ||($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getActivo()!=""){
            $sql.="activo='".$imputadoscarpetasDto->getActivo()."'";
            if(($imputadoscarpetasDto->getFechaRegistro()!="") ||($imputadoscarpetasDto->getFechaActualizacion()!="") ||($imputadoscarpetasDto->getDetenido()!="") ||($imputadoscarpetasDto->getNombre()!="") ||($imputadoscarpetasDto->getPaterno()!="") ||($imputadoscarpetasDto->getMaterno()!="") ||($imputadoscarpetasDto->getRfc()!="") ||($imputadoscarpetasDto->getCurp()!="") ||($imputadoscarpetasDto->getCveTipoDetencion()!="") || ($imputadoscarpetasDto->getLegalDetencion()!="") ||($imputadoscarpetasDto->getCveGenero()!="") || ($imputadoscarpetasDto->getCveTipoReligion()!="") ||($imputadoscarpetasDto->getAlias()!="") ||($imputadoscarpetasDto->getFechaDeclaracion()!="") ||($imputadoscarpetasDto->getCvePaisNacimiento()!="") ||($imputadoscarpetasDto->getCveEstadoNacimiento()!="") ||($imputadoscarpetasDto->getCveMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getFechaNacimiento()!="") ||($imputadoscarpetasDto->getEdad()!="") ||($imputadoscarpetasDto->getCveTipoPersona()!="") ||($imputadoscarpetasDto->getNombreMoral()!="") ||($imputadoscarpetasDto->getCveNivelInstruccion()!="") ||($imputadoscarpetasDto->getCveEstadoCivil()!="") ||($imputadoscarpetasDto->getCveEspanol()!="") ||($imputadoscarpetasDto->getCveAlfabetismo()!="") ||($imputadoscarpetasDto->getCveDialectoIndigena()!="") ||($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getFechaRegistro()!=""){
            $sql.="fechaRegistro='".$imputadoscarpetasDto->getFechaRegistro()."'";
            if(($imputadoscarpetasDto->getFechaActualizacion()!="") ||($imputadoscarpetasDto->getDetenido()!="") ||($imputadoscarpetasDto->getNombre()!="") ||($imputadoscarpetasDto->getPaterno()!="") ||($imputadoscarpetasDto->getMaterno()!="") ||($imputadoscarpetasDto->getRfc()!="") ||($imputadoscarpetasDto->getCurp()!="") ||($imputadoscarpetasDto->getCveTipoDetencion()!="") || ($imputadoscarpetasDto->getLegalDetencion()!="") ||($imputadoscarpetasDto->getCveGenero()!="") || ($imputadoscarpetasDto->getCveTipoReligion()!="") ||($imputadoscarpetasDto->getAlias()!="") ||($imputadoscarpetasDto->getFechaDeclaracion()!="") ||($imputadoscarpetasDto->getCvePaisNacimiento()!="") ||($imputadoscarpetasDto->getCveEstadoNacimiento()!="") ||($imputadoscarpetasDto->getCveMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getFechaNacimiento()!="") ||($imputadoscarpetasDto->getEdad()!="") ||($imputadoscarpetasDto->getCveTipoPersona()!="") ||($imputadoscarpetasDto->getNombreMoral()!="") ||($imputadoscarpetasDto->getCveNivelInstruccion()!="") ||($imputadoscarpetasDto->getCveEstadoCivil()!="") ||($imputadoscarpetasDto->getCveEspanol()!="") ||($imputadoscarpetasDto->getCveAlfabetismo()!="") ||($imputadoscarpetasDto->getCveDialectoIndigena()!="") ||($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getFechaActualizacion()!=""){
            $sql.="fechaActualizacion='".$imputadoscarpetasDto->getFechaActualizacion()."'";
            if(($imputadoscarpetasDto->getDetenido()!="") ||($imputadoscarpetasDto->getNombre()!="") ||($imputadoscarpetasDto->getPaterno()!="") ||($imputadoscarpetasDto->getMaterno()!="") ||($imputadoscarpetasDto->getRfc()!="") ||($imputadoscarpetasDto->getCurp()!="") ||($imputadoscarpetasDto->getCveTipoDetencion()!="") || ($imputadoscarpetasDto->getLegalDetencion()!="") ||($imputadoscarpetasDto->getCveGenero()!="") || ($imputadoscarpetasDto->getCveTipoReligion()!="") ||($imputadoscarpetasDto->getAlias()!="") ||($imputadoscarpetasDto->getFechaDeclaracion()!="") ||($imputadoscarpetasDto->getCvePaisNacimiento()!="") ||($imputadoscarpetasDto->getCveEstadoNacimiento()!="") ||($imputadoscarpetasDto->getCveMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getFechaNacimiento()!="") ||($imputadoscarpetasDto->getEdad()!="") ||($imputadoscarpetasDto->getCveTipoPersona()!="") ||($imputadoscarpetasDto->getNombreMoral()!="") ||($imputadoscarpetasDto->getCveNivelInstruccion()!="") ||($imputadoscarpetasDto->getCveEstadoCivil()!="") ||($imputadoscarpetasDto->getCveEspanol()!="") ||($imputadoscarpetasDto->getCveAlfabetismo()!="") ||($imputadoscarpetasDto->getCveDialectoIndigena()!="") ||($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getDetenido()!=""){
            $sql.="detenido='".$imputadoscarpetasDto->getDetenido()."'";
            if(($imputadoscarpetasDto->getNombre()!="") ||($imputadoscarpetasDto->getPaterno()!="") ||($imputadoscarpetasDto->getMaterno()!="") ||($imputadoscarpetasDto->getRfc()!="") ||($imputadoscarpetasDto->getCurp()!="") ||($imputadoscarpetasDto->getCveTipoDetencion()!="") || ($imputadoscarpetasDto->getLegalDetencion()!="") ||($imputadoscarpetasDto->getCveGenero()!="") || ($imputadoscarpetasDto->getCveTipoReligion()!="") ||($imputadoscarpetasDto->getAlias()!="") ||($imputadoscarpetasDto->getFechaDeclaracion()!="") ||($imputadoscarpetasDto->getCvePaisNacimiento()!="") ||($imputadoscarpetasDto->getCveEstadoNacimiento()!="") ||($imputadoscarpetasDto->getCveMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getFechaNacimiento()!="") ||($imputadoscarpetasDto->getEdad()!="") ||($imputadoscarpetasDto->getCveTipoPersona()!="") ||($imputadoscarpetasDto->getNombreMoral()!="") ||($imputadoscarpetasDto->getCveNivelInstruccion()!="") ||($imputadoscarpetasDto->getCveEstadoCivil()!="") ||($imputadoscarpetasDto->getCveEspanol()!="") ||($imputadoscarpetasDto->getCveAlfabetismo()!="") ||($imputadoscarpetasDto->getCveDialectoIndigena()!="") ||($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getNombre()!=""){
            $sql.="nombre='".$imputadoscarpetasDto->getNombre()."'";
            if(($imputadoscarpetasDto->getPaterno()!="") ||($imputadoscarpetasDto->getMaterno()!="") ||($imputadoscarpetasDto->getRfc()!="") ||($imputadoscarpetasDto->getCurp()!="") ||($imputadoscarpetasDto->getCveTipoDetencion()!="") || ($imputadoscarpetasDto->getLegalDetencion()!="") ||($imputadoscarpetasDto->getCveGenero()!="") || ($imputadoscarpetasDto->getCveTipoReligion()!="") ||($imputadoscarpetasDto->getAlias()!="") ||($imputadoscarpetasDto->getFechaDeclaracion()!="") ||($imputadoscarpetasDto->getCvePaisNacimiento()!="") ||($imputadoscarpetasDto->getCveEstadoNacimiento()!="") ||($imputadoscarpetasDto->getCveMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getFechaNacimiento()!="") ||($imputadoscarpetasDto->getEdad()!="") ||($imputadoscarpetasDto->getCveTipoPersona()!="") ||($imputadoscarpetasDto->getNombreMoral()!="") ||($imputadoscarpetasDto->getCveNivelInstruccion()!="") ||($imputadoscarpetasDto->getCveEstadoCivil()!="") ||($imputadoscarpetasDto->getCveEspanol()!="") ||($imputadoscarpetasDto->getCveAlfabetismo()!="") ||($imputadoscarpetasDto->getCveDialectoIndigena()!="") ||($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getPaterno()!=""){
            $sql.="paterno='".$imputadoscarpetasDto->getPaterno()."'";
            if(($imputadoscarpetasDto->getMaterno()!="") ||($imputadoscarpetasDto->getRfc()!="") ||($imputadoscarpetasDto->getCurp()!="") ||($imputadoscarpetasDto->getCveTipoDetencion()!="") || ($imputadoscarpetasDto->getLegalDetencion()!="") ||($imputadoscarpetasDto->getCveGenero()!="") || ($imputadoscarpetasDto->getCveTipoReligion()!="") ||($imputadoscarpetasDto->getAlias()!="") ||($imputadoscarpetasDto->getFechaDeclaracion()!="") ||($imputadoscarpetasDto->getCvePaisNacimiento()!="") ||($imputadoscarpetasDto->getCveEstadoNacimiento()!="") ||($imputadoscarpetasDto->getCveMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getFechaNacimiento()!="") ||($imputadoscarpetasDto->getEdad()!="") ||($imputadoscarpetasDto->getCveTipoPersona()!="") ||($imputadoscarpetasDto->getNombreMoral()!="") ||($imputadoscarpetasDto->getCveNivelInstruccion()!="") ||($imputadoscarpetasDto->getCveEstadoCivil()!="") ||($imputadoscarpetasDto->getCveEspanol()!="") ||($imputadoscarpetasDto->getCveAlfabetismo()!="") ||($imputadoscarpetasDto->getCveDialectoIndigena()!="") ||($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getMaterno()!=""){
            $sql.="materno='".$imputadoscarpetasDto->getMaterno()."'";
            if(($imputadoscarpetasDto->getRfc()!="") ||($imputadoscarpetasDto->getCurp()!="") ||($imputadoscarpetasDto->getCveTipoDetencion()!="") || ($imputadoscarpetasDto->getLegalDetencion()!="") ||($imputadoscarpetasDto->getCveGenero()!="") || ($imputadoscarpetasDto->getCveTipoReligion()!="") ||($imputadoscarpetasDto->getAlias()!="") ||($imputadoscarpetasDto->getFechaDeclaracion()!="") ||($imputadoscarpetasDto->getCvePaisNacimiento()!="") ||($imputadoscarpetasDto->getCveEstadoNacimiento()!="") ||($imputadoscarpetasDto->getCveMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getFechaNacimiento()!="") ||($imputadoscarpetasDto->getEdad()!="") ||($imputadoscarpetasDto->getCveTipoPersona()!="") ||($imputadoscarpetasDto->getNombreMoral()!="") ||($imputadoscarpetasDto->getCveNivelInstruccion()!="") ||($imputadoscarpetasDto->getCveEstadoCivil()!="") ||($imputadoscarpetasDto->getCveEspanol()!="") ||($imputadoscarpetasDto->getCveAlfabetismo()!="") ||($imputadoscarpetasDto->getCveDialectoIndigena()!="") ||($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getRfc()!=""){
            $sql.="rfc='".$imputadoscarpetasDto->getRfc()."'";
            if(($imputadoscarpetasDto->getCurp()!="") ||($imputadoscarpetasDto->getCveTipoDetencion()!="") || ($imputadoscarpetasDto->getLegalDetencion()!="") ||($imputadoscarpetasDto->getCveGenero()!="") || ($imputadoscarpetasDto->getCveTipoReligion()!="") ||($imputadoscarpetasDto->getAlias()!="") ||($imputadoscarpetasDto->getFechaDeclaracion()!="") ||($imputadoscarpetasDto->getCvePaisNacimiento()!="") ||($imputadoscarpetasDto->getCveEstadoNacimiento()!="") ||($imputadoscarpetasDto->getCveMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getFechaNacimiento()!="") ||($imputadoscarpetasDto->getEdad()!="") ||($imputadoscarpetasDto->getCveTipoPersona()!="") ||($imputadoscarpetasDto->getNombreMoral()!="") ||($imputadoscarpetasDto->getCveNivelInstruccion()!="") ||($imputadoscarpetasDto->getCveEstadoCivil()!="") ||($imputadoscarpetasDto->getCveEspanol()!="") ||($imputadoscarpetasDto->getCveAlfabetismo()!="") ||($imputadoscarpetasDto->getCveDialectoIndigena()!="") ||($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getCurp()!=""){
            $sql.="curp='".$imputadoscarpetasDto->getCurp()."'";
            if(($imputadoscarpetasDto->getCveTipoDetencion()!="") || ($imputadoscarpetasDto->getLegalDetencion()!="") ||($imputadoscarpetasDto->getCveGenero()!="") || ($imputadoscarpetasDto->getCveTipoReligion()!="") ||($imputadoscarpetasDto->getAlias()!="") ||($imputadoscarpetasDto->getFechaDeclaracion()!="") ||($imputadoscarpetasDto->getCvePaisNacimiento()!="") ||($imputadoscarpetasDto->getCveEstadoNacimiento()!="") ||($imputadoscarpetasDto->getCveMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getFechaNacimiento()!="") ||($imputadoscarpetasDto->getEdad()!="") ||($imputadoscarpetasDto->getCveTipoPersona()!="") ||($imputadoscarpetasDto->getNombreMoral()!="") ||($imputadoscarpetasDto->getCveNivelInstruccion()!="") ||($imputadoscarpetasDto->getCveEstadoCivil()!="") ||($imputadoscarpetasDto->getCveEspanol()!="") ||($imputadoscarpetasDto->getCveAlfabetismo()!="") ||($imputadoscarpetasDto->getCveDialectoIndigena()!="") ||($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getCveTipoDetencion()!=""){
            $sql.="cveTipoDetencion='".$imputadoscarpetasDto->getCveTipoDetencion()."'";
            if(($imputadoscarpetasDto->getLegalDetencion()!="") || ($imputadoscarpetasDto->getCveGenero()!="") || ($imputadoscarpetasDto->getCveTipoReligion()!="") ||($imputadoscarpetasDto->getAlias()!="") ||($imputadoscarpetasDto->getFechaDeclaracion()!="") ||($imputadoscarpetasDto->getCvePaisNacimiento()!="") ||($imputadoscarpetasDto->getCveEstadoNacimiento()!="") ||($imputadoscarpetasDto->getCveMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getFechaNacimiento()!="") ||($imputadoscarpetasDto->getEdad()!="") ||($imputadoscarpetasDto->getCveTipoPersona()!="") ||($imputadoscarpetasDto->getNombreMoral()!="") ||($imputadoscarpetasDto->getCveNivelInstruccion()!="") ||($imputadoscarpetasDto->getCveEstadoCivil()!="") ||($imputadoscarpetasDto->getCveEspanol()!="") ||($imputadoscarpetasDto->getCveAlfabetismo()!="") ||($imputadoscarpetasDto->getCveDialectoIndigena()!="") ||($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getLegalDetencion()!=""){
            $sql.="LegalDetencion='".$imputadoscarpetasDto->getLegalDetencion()."'";
            if(($imputadoscarpetasDto->getCveGenero()!="") || ($imputadoscarpetasDto->getCveTipoReligion()!="") ||($imputadoscarpetasDto->getAlias()!="") ||($imputadoscarpetasDto->getFechaDeclaracion()!="") ||($imputadoscarpetasDto->getCvePaisNacimiento()!="") ||($imputadoscarpetasDto->getCveEstadoNacimiento()!="") ||($imputadoscarpetasDto->getCveMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getFechaNacimiento()!="") ||($imputadoscarpetasDto->getEdad()!="") ||($imputadoscarpetasDto->getCveTipoPersona()!="") ||($imputadoscarpetasDto->getNombreMoral()!="") ||($imputadoscarpetasDto->getCveNivelInstruccion()!="") ||($imputadoscarpetasDto->getCveEstadoCivil()!="") ||($imputadoscarpetasDto->getCveEspanol()!="") ||($imputadoscarpetasDto->getCveAlfabetismo()!="") ||($imputadoscarpetasDto->getCveDialectoIndigena()!="") ||($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getCveGenero()!=""){
            $sql.="cveGenero='".$imputadoscarpetasDto->getCveGenero()."'";
            if(($imputadoscarpetasDto->getCveTipoReligion()!="") || ($imputadoscarpetasDto->getAlias()!="") ||($imputadoscarpetasDto->getFechaDeclaracion()!="") ||($imputadoscarpetasDto->getCvePaisNacimiento()!="") ||($imputadoscarpetasDto->getCveEstadoNacimiento()!="") ||($imputadoscarpetasDto->getCveMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getFechaNacimiento()!="") ||($imputadoscarpetasDto->getEdad()!="") ||($imputadoscarpetasDto->getCveTipoPersona()!="") ||($imputadoscarpetasDto->getNombreMoral()!="") ||($imputadoscarpetasDto->getCveNivelInstruccion()!="") ||($imputadoscarpetasDto->getCveEstadoCivil()!="") ||($imputadoscarpetasDto->getCveEspanol()!="") ||($imputadoscarpetasDto->getCveAlfabetismo()!="") ||($imputadoscarpetasDto->getCveDialectoIndigena()!="") ||($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getCveTipoReligion()!=""){
            $sql.="cveTipoReligion='".$imputadoscarpetasDto->getCveTipoReligion()."'";
            if(($imputadoscarpetasDto->getAlias()!="") ||($imputadoscarpetasDto->getFechaDeclaracion()!="") ||($imputadoscarpetasDto->getCvePaisNacimiento()!="") ||($imputadoscarpetasDto->getCveEstadoNacimiento()!="") ||($imputadoscarpetasDto->getCveMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getFechaNacimiento()!="") ||($imputadoscarpetasDto->getEdad()!="") ||($imputadoscarpetasDto->getCveTipoPersona()!="") ||($imputadoscarpetasDto->getNombreMoral()!="") ||($imputadoscarpetasDto->getCveNivelInstruccion()!="") ||($imputadoscarpetasDto->getCveEstadoCivil()!="") ||($imputadoscarpetasDto->getCveEspanol()!="") ||($imputadoscarpetasDto->getCveAlfabetismo()!="") ||($imputadoscarpetasDto->getCveDialectoIndigena()!="") ||($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getAlias()!=""){
            $sql.="alias='".$imputadoscarpetasDto->getAlias()."'";
            if(($imputadoscarpetasDto->getFechaDeclaracion()!="") ||($imputadoscarpetasDto->getCvePaisNacimiento()!="") ||($imputadoscarpetasDto->getCveEstadoNacimiento()!="") ||($imputadoscarpetasDto->getCveMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getFechaNacimiento()!="") ||($imputadoscarpetasDto->getEdad()!="") ||($imputadoscarpetasDto->getCveTipoPersona()!="") ||($imputadoscarpetasDto->getNombreMoral()!="") ||($imputadoscarpetasDto->getCveNivelInstruccion()!="") ||($imputadoscarpetasDto->getCveEstadoCivil()!="") ||($imputadoscarpetasDto->getCveEspanol()!="") ||($imputadoscarpetasDto->getCveAlfabetismo()!="") ||($imputadoscarpetasDto->getCveDialectoIndigena()!="") ||($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getFechaDeclaracion()!=""){
            $sql.="fechaDeclaracion='".$imputadoscarpetasDto->getFechaDeclaracion()."'";
            if(($imputadoscarpetasDto->getCvePaisNacimiento()!="") ||($imputadoscarpetasDto->getCveEstadoNacimiento()!="") ||($imputadoscarpetasDto->getCveMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getFechaNacimiento()!="") ||($imputadoscarpetasDto->getEdad()!="") ||($imputadoscarpetasDto->getCveTipoPersona()!="") ||($imputadoscarpetasDto->getNombreMoral()!="") ||($imputadoscarpetasDto->getCveNivelInstruccion()!="") ||($imputadoscarpetasDto->getCveEstadoCivil()!="") ||($imputadoscarpetasDto->getCveEspanol()!="") ||($imputadoscarpetasDto->getCveAlfabetismo()!="") ||($imputadoscarpetasDto->getCveDialectoIndigena()!="") ||($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getCvePaisNacimiento()!=""){
            $sql.="cvePaisNacimiento='".$imputadoscarpetasDto->getCvePaisNacimiento()."'";
            if(($imputadoscarpetasDto->getCveEstadoNacimiento()!="") ||($imputadoscarpetasDto->getCveMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getFechaNacimiento()!="") ||($imputadoscarpetasDto->getEdad()!="") ||($imputadoscarpetasDto->getCveTipoPersona()!="") ||($imputadoscarpetasDto->getNombreMoral()!="") ||($imputadoscarpetasDto->getCveNivelInstruccion()!="") ||($imputadoscarpetasDto->getCveEstadoCivil()!="") ||($imputadoscarpetasDto->getCveEspanol()!="") ||($imputadoscarpetasDto->getCveAlfabetismo()!="") ||($imputadoscarpetasDto->getCveDialectoIndigena()!="") ||($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getCveEstadoNacimiento()!=""){
            $sql.="cveEstadoNacimiento='".$imputadoscarpetasDto->getCveEstadoNacimiento()."'";
            if(($imputadoscarpetasDto->getCveMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getFechaNacimiento()!="") ||($imputadoscarpetasDto->getEdad()!="") ||($imputadoscarpetasDto->getCveTipoPersona()!="") ||($imputadoscarpetasDto->getNombreMoral()!="") ||($imputadoscarpetasDto->getCveNivelInstruccion()!="") ||($imputadoscarpetasDto->getCveEstadoCivil()!="") ||($imputadoscarpetasDto->getCveEspanol()!="") ||($imputadoscarpetasDto->getCveAlfabetismo()!="") ||($imputadoscarpetasDto->getCveDialectoIndigena()!="") ||($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getCveMunicipioNacimiento()!=""){
            $sql.="cveMunicipioNacimiento='".$imputadoscarpetasDto->getCveMunicipioNacimiento()."'";
            if(($imputadoscarpetasDto->getFechaNacimiento()!="") ||($imputadoscarpetasDto->getEdad()!="") ||($imputadoscarpetasDto->getCveTipoPersona()!="") ||($imputadoscarpetasDto->getNombreMoral()!="") ||($imputadoscarpetasDto->getCveNivelInstruccion()!="") ||($imputadoscarpetasDto->getCveEstadoCivil()!="") ||($imputadoscarpetasDto->getCveEspanol()!="") ||($imputadoscarpetasDto->getCveAlfabetismo()!="") ||($imputadoscarpetasDto->getCveDialectoIndigena()!="") ||($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getFechaNacimiento()!=""){
            $sql.="fechaNacimiento='".$imputadoscarpetasDto->getFechaNacimiento()."'";
            if(($imputadoscarpetasDto->getEdad()!="") ||($imputadoscarpetasDto->getCveTipoPersona()!="") ||($imputadoscarpetasDto->getNombreMoral()!="") ||($imputadoscarpetasDto->getCveNivelInstruccion()!="") ||($imputadoscarpetasDto->getCveEstadoCivil()!="") ||($imputadoscarpetasDto->getCveEspanol()!="") ||($imputadoscarpetasDto->getCveAlfabetismo()!="") ||($imputadoscarpetasDto->getCveDialectoIndigena()!="") ||($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getEdad()!=""){
            $sql.="edad='".$imputadoscarpetasDto->getEdad()."'";
            if(($imputadoscarpetasDto->getCveTipoPersona()!="") ||($imputadoscarpetasDto->getNombreMoral()!="") ||($imputadoscarpetasDto->getCveNivelInstruccion()!="") ||($imputadoscarpetasDto->getCveEstadoCivil()!="") ||($imputadoscarpetasDto->getCveEspanol()!="") ||($imputadoscarpetasDto->getCveAlfabetismo()!="") ||($imputadoscarpetasDto->getCveDialectoIndigena()!="") ||($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getCveTipoPersona()!=""){
            $sql.="cveTipoPersona='".$imputadoscarpetasDto->getCveTipoPersona()."'";
            if(($imputadoscarpetasDto->getNombreMoral()!="") ||($imputadoscarpetasDto->getCveNivelInstruccion()!="") ||($imputadoscarpetasDto->getCveEstadoCivil()!="") ||($imputadoscarpetasDto->getCveEspanol()!="") ||($imputadoscarpetasDto->getCveAlfabetismo()!="") ||($imputadoscarpetasDto->getCveDialectoIndigena()!="") ||($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getNombreMoral()!=""){
            $sql.="nombreMoral='".$imputadoscarpetasDto->getNombreMoral()."'";
            if(($imputadoscarpetasDto->getCveNivelInstruccion()!="") ||($imputadoscarpetasDto->getCveEstadoCivil()!="") ||($imputadoscarpetasDto->getCveEspanol()!="") ||($imputadoscarpetasDto->getCveAlfabetismo()!="") ||($imputadoscarpetasDto->getCveDialectoIndigena()!="") ||($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getCveNivelInstruccion()!=""){
            $sql.="cveNivelInstruccion='".$imputadoscarpetasDto->getCveNivelInstruccion()."'";
            if(($imputadoscarpetasDto->getCveEstadoCivil()!="") ||($imputadoscarpetasDto->getCveEspanol()!="") ||($imputadoscarpetasDto->getCveAlfabetismo()!="") ||($imputadoscarpetasDto->getCveDialectoIndigena()!="") ||($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getCveEstadoCivil()!=""){
            $sql.="cveEstadoCivil='".$imputadoscarpetasDto->getCveEstadoCivil()."'";
            if(($imputadoscarpetasDto->getCveEspanol()!="") ||($imputadoscarpetasDto->getCveAlfabetismo()!="") ||($imputadoscarpetasDto->getCveDialectoIndigena()!="") ||($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getCveEspanol()!=""){
            $sql.="cveEspanol='".$imputadoscarpetasDto->getCveEspanol()."'";
            if(($imputadoscarpetasDto->getCveAlfabetismo()!="") ||($imputadoscarpetasDto->getCveDialectoIndigena()!="") ||($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getCveAlfabetismo()!=""){
            $sql.="cveAlfabetismo='".$imputadoscarpetasDto->getCveAlfabetismo()."'";
            if(($imputadoscarpetasDto->getCveDialectoIndigena()!="") ||($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getCveDialectoIndigena()!=""){
            $sql.="cveDialectoIndigena='".$imputadoscarpetasDto->getCveDialectoIndigena()."'";
            if(($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!="") ||($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getCveTipoFamiliaLinguistica()!=""){
            $sql.="cveTipoFamiliaLinguistica='".$imputadoscarpetasDto->getCveTipoFamiliaLinguistica()."'";
            if(($imputadoscarpetasDto->getCveOcupacion()!="") ||($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getCveOcupacion()!=""){
            $sql.="cveOcupacion='".$imputadoscarpetasDto->getCveOcupacion()."'";
            if(($imputadoscarpetasDto->getCveInterprete()!="") ||($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getCveInterprete()!=""){
            $sql.="cveInterprete='".$imputadoscarpetasDto->getCveInterprete()."'";
            if(($imputadoscarpetasDto->getCveEstadoPsicofisico()!="") ||($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getCveEstadoPsicofisico()!=""){
            $sql.="cveEstadoPsicofisico='".$imputadoscarpetasDto->getCveEstadoPsicofisico()."'";
            if(($imputadoscarpetasDto->getFechaImputacion()!="") ||($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getFechaImputacion()!=""){
            $sql.="fechaImputacion='".$imputadoscarpetasDto->getFechaImputacion()."'";
            if(($imputadoscarpetasDto->getFechaControlDet()!="") ||($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getFechaControlDet()!=""){
            $sql.="fechaControlDet='".$imputadoscarpetasDto->getFechaControlDet()."'";
            if(($imputadoscarpetasDto->getFecTerminoCons()!="") ||($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getFecTerminoCons()!=""){
            $sql.="fecTerminoCons='".$imputadoscarpetasDto->getFecTerminoCons()."'";
            if(($imputadoscarpetasDto->getFecCierreInv()!="") ||($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getFecCierreInv()!=""){
            $sql.="fecCierreInv='".$imputadoscarpetasDto->getFecCierreInv()."'";
            if(($imputadoscarpetasDto->getEstadoNacimiento()!="") ||($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getEstadoNacimiento()!=""){
            $sql.="estadoNacimiento='".$imputadoscarpetasDto->getEstadoNacimiento()."'";
            if(($imputadoscarpetasDto->getMunicipioNacimiento()!="") ||($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getMunicipioNacimiento()!=""){
            $sql.="municipioNacimiento='".$imputadoscarpetasDto->getMunicipioNacimiento()."'";
            if(($imputadoscarpetasDto->getRelacionMoral()!="") ||($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getRelacionMoral()!=""){
            $sql.="relacionMoral='".$imputadoscarpetasDto->getRelacionMoral()."'";
            if(($imputadoscarpetasDto->getPersonaMoral()!="") ||($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getPersonaMoral()!=""){
            $sql.="personaMoral='".$imputadoscarpetasDto->getPersonaMoral()."'";
            if(($imputadoscarpetasDto->getCveCereso()!="") ||($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getCveCereso()!=""){
            $sql.="cveCereso='".$imputadoscarpetasDto->getCveCereso()."'";
            if(($imputadoscarpetasDto->getCveEtapaProcesal()!="") ||($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getCveEtapaProcesal()!=""){
            $sql.="cveEtapaProcesal='".$imputadoscarpetasDto->getCveEtapaProcesal()."'";
            if(($imputadoscarpetasDto->getCveTipoReincidencia()!="") ||($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getCveTipoReincidencia()!=""){
            $sql.="cveTipoReincidencia='".$imputadoscarpetasDto->getCveTipoReincidencia()."'";
            if(($imputadoscarpetasDto->getIngresoMensual()!="") ||($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getIngresoMensual()!=""){
            $sql.="ingresoMensual='".$imputadoscarpetasDto->getIngresoMensual()."'";
            if(($imputadoscarpetasDto->getCveGrupoEdnico()!="") || ($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getCveGrupoEdnico()!=""){
            $sql.="cveGrupoEdnico='".$imputadoscarpetasDto->getCveGrupoEdnico()."'";
            if(($imputadoscarpetasDto->getTieneSobreseimiento()!="") || ($imputadoscarpetasDto->getFechaSobreseimiento()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getTieneSobreseimiento()!=""){
            $sql.="TieneSobreseimiento='".$imputadoscarpetasDto->getTieneSobreseimiento()."'";
            if( $imputadoscarpetasDto->getFechaSobreseimiento()!="" ){
                $sql.=" AND ";
            }
        }
        if($imputadoscarpetasDto->getFechaSobreseimiento()!=""){
            $sql.="FechaSobreseimiento='".$imputadoscarpetasDto->getFechaSobreseimiento()."'";
        }
//--->
        $validacion = new Validacion();
        if ($param != "" || $param != null) {
            if ($param["fechaDesde"] != "" && $param["fechaHasta"] != "") {
                if ($param["fechaDesde"] != "") {
                    $param["fechaDesde"] = $validacion->normalToMysql($param["fechaDesde"]) . " 00:00:00";
                }
                if ($param["fechaHasta"] != "") {
                    $param["fechaHasta"] = $validacion->normalToMysql($param["fechaHasta"]) . " 23:59:59";
                }
                $sql .=" and fechaRegistro >= '" . $param["fechaDesde"] . "'";
                $sql .=" and fechaRegistro <= '" . $param["fechaHasta"] . "'";
                // $sql .=" and DATE_FORMAT(fechaRegistro, '%Y-%m-%d') between '" . $param["fechaDesde"] . "' and '" . $param["fechaHasta"] . "'";
            }

            if ($param["fechaDesde"] != "" && $param["fechaHasta"] == "") {
                $sql .=" and fechaRegistro >= '" . $validacion->normalToMysql($param["fechaDesde"]) . " 00:00:00'";
                $sql .=" and fechaRegistro <= '" . $validacion->normalToMysql($param["fechaDesde"]) . " 23:59:59'";
            }

            if ($param["fechaDesde"] == "" && $param["fechaHasta"] != "") {
                $sql .=" and fechaRegistro >= '" . $validacion->normalToMysql($param["fechaHasta"]) . " 00:00:00'";
                $sql .=" and fechaRegistro <= '" . $validacion->normalToMysql($param["fechaHasta"]) . " 23:59:59'";
            }

            if ($param["paginacion"] == "true") {
                if ($param["pag"] > 0) {
                    $inicial = ($param["pag"] - 1) * ($param["cantxPag"]);
                } else {
                    $inicial = 0;
                }
                
            }
        }
        
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        if ($param != "" || $param != null) {
                $sql.=" LIMIT " . $inicial . "," . ($param["cantxPag"]);//+1
        }
        //echo $sql.' ---Consulta--- ';//Prueba
        error_log("sql => ".$sql);// <----
//        echo $sql.'  --Consulta--';
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                
                $numField = mysqli_num_fields($this->_proveedor->stmt);
                
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    
                    if ($fields === null) {
                        $tmp[$contador] = new ImputadoscarpetasDTO();
                        $tmp[$contador]->setIdImputadoCarpeta($row["idImputadoCarpeta"]);
                        $tmp[$contador]->setIdCarpetaJudicial($row["idCarpetaJudicial"]);
                        $tmp[$contador]->setActivo($row["activo"]);
                        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                        $tmp[$contador]->setDetenido($row["detenido"]);
                        $tmp[$contador]->setNombre($row["nombre"]);
                        $tmp[$contador]->setPaterno($row["paterno"]);
                        $tmp[$contador]->setMaterno($row["materno"]);
                        $tmp[$contador]->setRfc($row["rfc"]);
                        $tmp[$contador]->setCurp($row["curp"]);
                        $tmp[$contador]->setCveTipoDetencion($row["cveTipoDetencion"]);
                        $tmp[$contador]->setLegalDetencion($row["LegalDetencion"]);
                        $tmp[$contador]->setCveGenero($row["cveGenero"]);
                        $tmp[$contador]->setCveTipoReligion($row["cveTipoReligion"]);
                        $tmp[$contador]->setAlias($row["alias"]);
                        $tmp[$contador]->setFechaDeclaracion($row["fechaDeclaracion"]);
                        $tmp[$contador]->setCvePaisNacimiento($row["cvePaisNacimiento"]);
                        $tmp[$contador]->setCveEstadoNacimiento($row["cveEstadoNacimiento"]);
                        $tmp[$contador]->setCveMunicipioNacimiento($row["cveMunicipioNacimiento"]);
                        $tmp[$contador]->setFechaNacimiento($row["fechaNacimiento"]);
                        $tmp[$contador]->setEdad($row["edad"]);
                        $tmp[$contador]->setCveTipoPersona($row["cveTipoPersona"]);
                        $tmp[$contador]->setNombreMoral($row["nombreMoral"]);
                        $tmp[$contador]->setCveNivelInstruccion($row["cveNivelInstruccion"]);
                        $tmp[$contador]->setCveEstadoCivil($row["cveEstadoCivil"]);
                        $tmp[$contador]->setCveEspanol($row["cveEspanol"]);
                        $tmp[$contador]->setCveAlfabetismo($row["cveAlfabetismo"]);
                        $tmp[$contador]->setCveDialectoIndigena($row["cveDialectoIndigena"]);
                        $tmp[$contador]->setCveTipoFamiliaLinguistica($row["cveTipoFamiliaLinguistica"]);
                        $tmp[$contador]->setCveOcupacion($row["cveOcupacion"]);
                        $tmp[$contador]->setCveInterprete($row["cveInterprete"]);
                        $tmp[$contador]->setCveEstadoPsicofisico($row["cveEstadoPsicofisico"]);
                        $tmp[$contador]->setFechaImputacion($row["fechaImputacion"]);
                        $tmp[$contador]->setFechaControlDet($row["fechaControlDet"]);
                        $tmp[$contador]->setFecTerminoCons($row["fecTerminoCons"]);
                        $tmp[$contador]->setFecCierreInv($row["fecCierreInv"]);
                        $tmp[$contador]->setEstadoNacimiento($row["estadoNacimiento"]);
                        $tmp[$contador]->setMunicipioNacimiento($row["municipioNacimiento"]);
                        $tmp[$contador]->setRelacionMoral($row["relacionMoral"]);
                        $tmp[$contador]->setPersonaMoral($row["personaMoral"]);
                        $tmp[$contador]->setCveCereso($row["cveCereso"]);
                        $tmp[$contador]->setCveEtapaProcesal($row["cveEtapaProcesal"]);
                        $tmp[$contador]->setCveTipoReincidencia($row["cveTipoReincidencia"]);
                        $tmp[$contador]->setIngresoMensual($row["ingresoMensual"]);
                        $tmp[$contador]->setCveGrupoEdnico($row["cveGrupoEdnico"]);
                        $tmp[$contador]->setTieneSobreseimiento($row["TieneSobreseimiento"]);
                        $tmp[$contador]->setFechaSobreseimiento($row["FechaSobreseimiento"]);
                        
                    }else{
                        $tmp[$contador] = array();
                            for ($i = 0; $i < $numField; $i++){
                                $fieldInfo = mysqli_fetch_field_direct($this->_proveedor->stmt, $i);
                                //var_dump($fieldInfo);
                                $tmp[$contador][$fieldInfo->name] = utf8_encode($row[$fieldInfo->name]);
                                
                            }
                    }
                    $contador++;
                }
            } else {
                $error = true;
            }
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        unset($contador);
        unset($sql);
        return $tmp;
    }

}

?>