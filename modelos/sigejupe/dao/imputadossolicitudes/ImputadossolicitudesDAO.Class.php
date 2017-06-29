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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/imputadossolicitudes/ImputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ImputadossolicitudesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertImputadossolicitudes($imputadossolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblimputadossolicitudes(";
        if ($imputadossolicitudesDto->getidImputadoSolicitud() != "") {
            $sql .= "idImputadoSolicitud";
            if (($imputadossolicitudesDto->getIdImputadoCarpeta() != "") || ($imputadossolicitudesDto->getIdSolicitudAudiencia() != "") || ($imputadossolicitudesDto->getActivo() != "") || ($imputadossolicitudesDto->getDetenido() != "") || ($imputadossolicitudesDto->getNombre() != "") || ($imputadossolicitudesDto->getPaterno() != "") || ($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getidSolicitudAudiencia() != "") {
            $sql .= "idSolicitudAudiencia";
            if (($imputadossolicitudesDto->getIdImputadoCarpeta() != "") || ($imputadossolicitudesDto->getTieneSobreseimiento() != "") || ($imputadossolicitudesDto->getFechaSobreseimiento() != "") || ($imputadossolicitudesDto->getActivo() != "") || ($imputadossolicitudesDto->getDetenido() != "") || ($imputadossolicitudesDto->getNombre() != "") || ($imputadossolicitudesDto->getPaterno() != "") || ($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getTieneSobreseimiento() != "") {
            $sql .= "TieneSobreseimiento";
            if (($imputadossolicitudesDto->getIdImputadoCarpeta() != "") || ($imputadossolicitudesDto->getFechaSobreseimiento() != "") || ($imputadossolicitudesDto->getDetenido() != "") || ($imputadossolicitudesDto->getNombre() != "") || ($imputadossolicitudesDto->getPaterno() != "") || ($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getFechaSobreseimiento() != "") {
            $sql .= "FechaSobreseimiento";
            if (($imputadossolicitudesDto->getIdImputadoCarpeta() != "") || ($imputadossolicitudesDto->getDetenido() != "") || ($imputadossolicitudesDto->getNombre() != "") || ($imputadossolicitudesDto->getPaterno() != "") || ($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getIdImputadoCarpeta() != "") {
            $sql .= "idImputadoCarpeta";
            if (($imputadossolicitudesDto->getFechaSobreseimiento() != "") || ($imputadossolicitudesDto->getDetenido() != "") || ($imputadossolicitudesDto->getNombre() != "") || ($imputadossolicitudesDto->getPaterno() != "") || ($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getactivo() != "") {
            $sql .= "activo";
            if (($imputadossolicitudesDto->getDetenido() != "") || ($imputadossolicitudesDto->getNombre() != "") || ($imputadossolicitudesDto->getPaterno() != "") || ($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getdetenido() != "") {
            $sql .= "detenido";
            if (($imputadossolicitudesDto->getNombre() != "") || ($imputadossolicitudesDto->getPaterno() != "") || ($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getnombre() != "") {
            $sql .= "nombre";
            if (($imputadossolicitudesDto->getPaterno() != "") || ($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getpaterno() != "") {
            $sql .= "paterno";
            if (($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getmaterno() != "") {
            $sql .= "materno";
            if (($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getrfc() != "") {
            $sql .= "rfc";
            if (($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcurp() != "") {
            $sql .= "curp";
            if (($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveTipoDetencion() != "") {
            $sql .= "cveTipoDetencion";
            if (($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveGenero() != "") {
            $sql .= "cveGenero";
            if (($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getalias() != "") {
            $sql .= "alias";
            if (($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getfechaDeclaracion() != "") {
            $sql .= "fechaDeclaracion";
            if (($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcvePaisNacimiento() != "") {
            $sql .= "cvePaisNacimiento";
            if (($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveEstadoNacimiento() != "") {
            $sql .= "cveEstadoNacimiento";
            if (($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveMunicipioNacimiento() != "") {
            $sql .= "cveMunicipioNacimiento";
            if (($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getfechaNacimiento() != "") {
            $sql .= "fechaNacimiento";
            if (($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getedad() != "") {
            $sql .= "edad";
            if (($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveTipoPersona() != "") {
            $sql .= "cveTipoPersona";
            if (($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getCveTipoReligion() != "") {
            $sql .= "CveTipoReligion";
            if (($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getnombreMoral() != "") {
            $sql .= "nombreMoral";
            if (($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveNivelInstruccion() != "") {
            $sql .= "cveNivelInstruccion";
            if (($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveEstadoCivil() != "") {
            $sql .= "cveEstadoCivil";
            if (($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveEspanol() != "") {
            $sql .= "cveEspanol";
            if (($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveAlfabetismo() != "") {
            $sql .= "cveAlfabetismo";
            if (($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveDialectoIndigena() != "") {
            $sql .= "cveDialectoIndigena";
            if (($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveTipoFamiliaLinguistica() != "") {
            $sql .= "cveTipoFamiliaLinguistica";
            if (($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveOcupacion() != "") {
            $sql .= "cveOcupacion";
            if (($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveInterprete() != "") {
            $sql .= "cveInterprete";
            if (($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveEstadoPsicofisico() != "") {
            $sql .= "cveEstadoPsicofisico";
            if (($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getfechaImputacion() != "") {
            $sql .= "fechaImputacion";
            if (($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getfechaControlDet() != "") {
            $sql .= "fechaControlDet";
            if (($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getfecTerminoCons() != "") {
            $sql .= "fecTerminoCons";
            if (($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getfecCierreInv() != "") {
            $sql .= "fecCierreInv";
            if (($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getestadoNacimiento() != "") {
            $sql .= "estadoNacimiento";
            if (($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getmunicipioNacimiento() != "") {
            $sql .= "municipioNacimiento";
            if (($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getrelacionMoral() != "") {
            $sql .= "relacionMoral";
            if (($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getpersonaMoral() != "") {
            $sql .= "personaMoral";
            if (($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveCereso() != "") {
            $sql .= "cveCereso";
            if (($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getCveEtapaProcesal() != "") {
            $sql .= "cveEtapaProcesal";
            if (($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveTipoReincidencia() != "") {
            $sql .= "cveTipoReincidencia";
            if (($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getingresoMensual() != "") {
            $sql .= "ingresoMensual";
            if (($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveGrupoEdnico() != "") {
            $sql .= "cveGrupoEdnico";
        }
        $sql .= ",fechaRegistro";
        $sql .= ",fechaActualizacion";
        $sql .= ") VALUES(";
        if ($imputadossolicitudesDto->getidImputadoSolicitud() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getidImputadoSolicitud() . "'";
            if (($imputadossolicitudesDto->getIdImputadoCarpeta() != "") || ($imputadossolicitudesDto->getIdSolicitudAudiencia() != "") || ($imputadossolicitudesDto->getActivo() != "") || ($imputadossolicitudesDto->getDetenido() != "") || ($imputadossolicitudesDto->getNombre() != "") || ($imputadossolicitudesDto->getPaterno() != "") || ($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getidSolicitudAudiencia() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getidSolicitudAudiencia() . "'";
            if (($imputadossolicitudesDto->getIdImputadoCarpeta() != "") || ($imputadossolicitudesDto->getActivo() != "") || ($imputadossolicitudesDto->getDetenido() != "") || ($imputadossolicitudesDto->getNombre() != "") || ($imputadossolicitudesDto->getPaterno() != "") || ($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getTieneSobreseimiento() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getTieneSobreseimiento() . "'";
            if (($imputadossolicitudesDto->getIdImputadoCarpeta() != "") || ($imputadossolicitudesDto->getFechaSobreseimiento() != "") || ($imputadossolicitudesDto->getDetenido() != "") || ($imputadossolicitudesDto->getNombre() != "") || ($imputadossolicitudesDto->getPaterno() != "") || ($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getFechaSobreseimiento() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getFechaSobreseimiento() . "'";
            if (($imputadossolicitudesDto->getIdImputadoCarpeta() != "") || ($imputadossolicitudesDto->getDetenido() != "") || ($imputadossolicitudesDto->getNombre() != "") || ($imputadossolicitudesDto->getPaterno() != "") || ($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getIdImputadoCarpeta() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getIdImputadoCarpeta() . "'";
            if (($imputadossolicitudesDto->getDetenido() != "") || ($imputadossolicitudesDto->getNombre() != "") || ($imputadossolicitudesDto->getPaterno() != "") || ($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getactivo() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getactivo() . "'";
            if (($imputadossolicitudesDto->getTieneSobreseimiento() != "") || ($imputadossolicitudesDto->getFechaSobreseimiento() != "") || ($imputadossolicitudesDto->getDetenido() != "") || ($imputadossolicitudesDto->getNombre() != "") || ($imputadossolicitudesDto->getPaterno() != "") || ($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getfechaRegistro() != "") {
            if (($imputadossolicitudesDto->getDetenido() != "") || ($imputadossolicitudesDto->getNombre() != "") || ($imputadossolicitudesDto->getPaterno() != "") || ($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getfechaActualizacion() != "") {
            if (($imputadossolicitudesDto->getDetenido() != "") || ($imputadossolicitudesDto->getNombre() != "") || ($imputadossolicitudesDto->getPaterno() != "") || ($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getdetenido() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getdetenido() . "'";
            if (($imputadossolicitudesDto->getNombre() != "") || ($imputadossolicitudesDto->getPaterno() != "") || ($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getnombre() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getnombre() . "'";
            if (($imputadossolicitudesDto->getPaterno() != "") || ($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getpaterno() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getpaterno() . "'";
            if (($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getmaterno() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getmaterno() . "'";
            if (($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getrfc() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getrfc() . "'";
            if (($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcurp() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getcurp() . "'";
            if (($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveTipoDetencion() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getcveTipoDetencion() . "'";
            if (($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveGenero() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getcveGenero() . "'";
            if (($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getalias() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getalias() . "'";
            if (($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getfechaDeclaracion() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getfechaDeclaracion() . "'";
            if (($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcvePaisNacimiento() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getcvePaisNacimiento() . "'";
            if (($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveEstadoNacimiento() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getcveEstadoNacimiento() . "'";
            if (($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveMunicipioNacimiento() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getcveMunicipioNacimiento() . "'";
            if (($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getfechaNacimiento() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getfechaNacimiento() . "'";
            if (($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getedad() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getedad() . "'";
            if (($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveTipoPersona() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getcveTipoPersona() . "'";
            if (($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getCveTipoReligion() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getCveTipoReligion() . "'";
            if (($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getnombreMoral() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getnombreMoral() . "'";
            if (($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveNivelInstruccion() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getcveNivelInstruccion() . "'";
            if (($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveEstadoCivil() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getcveEstadoCivil() . "'";
            if (($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveEspanol() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getcveEspanol() . "'";
            if (($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveAlfabetismo() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getcveAlfabetismo() . "'";
            if (($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveDialectoIndigena() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getcveDialectoIndigena() . "'";
            if (($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveTipoFamiliaLinguistica() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getcveTipoFamiliaLinguistica() . "'";
            if (($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveOcupacion() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getcveOcupacion() . "'";
            if (($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveInterprete() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getcveInterprete() . "'";
            if (($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveEstadoPsicofisico() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getcveEstadoPsicofisico() . "'";
            if (($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getfechaImputacion() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getfechaImputacion() . "'";
            if (($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getfechaControlDet() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getfechaControlDet() . "'";
            if (($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getfecTerminoCons() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getfecTerminoCons() . "'";
            if (($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getfecCierreInv() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getfecCierreInv() . "'";
            if (($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getestadoNacimiento() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getestadoNacimiento() . "'";
            if (($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getmunicipioNacimiento() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getmunicipioNacimiento() . "'";
            if (($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getrelacionMoral() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getrelacionMoral() . "'";
            if (($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getpersonaMoral() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getpersonaMoral() . "'";
            if (($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveCereso() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getcveCereso() . "'";
            if (($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getCveEtapaProcesal() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getCveEtapaProcesal() . "'";
            if (($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveTipoReincidencia() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getcveTipoReincidencia() . "'";
            if (($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getingresoMensual() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getingresoMensual() . "'";
            if (($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($imputadossolicitudesDto->getcveGrupoEdnico() != "") {
            $sql .= "'" . $imputadossolicitudesDto->getcveGrupoEdnico() . "'";
        }
        $sql .= ",now()";
        $sql .= ",now()";
        $sql .= ")";
//        echo $sql;
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImputadossolicitudesDTO();
            $tmp->setidImputadoSolicitud($this->_proveedor->lastID());
            $tmp = $this->selectImputadossolicitudes($tmp, "", $this->_proveedor);
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

    public function updateImputadossolicitudes($imputadossolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblimputadossolicitudes SET ";
        $sql .= " fechaActualizacion = now()";
        $sql .= " ,detenido='" . $imputadossolicitudesDto->getdetenido() . "'";
        $sql .= " ,nombre='" . $imputadossolicitudesDto->getnombre() . "'";
        $sql .= " ,paterno='" . $imputadossolicitudesDto->getpaterno() . "'";
        $sql .= " ,materno='" . $imputadossolicitudesDto->getmaterno() . "'";
        $sql .= " ,rfc='" . $imputadossolicitudesDto->getrfc() . "'";
        $sql .= " ,curp='" . $imputadossolicitudesDto->getcurp() . "'";
        $sql .= " ,cveTipoDetencion='" . $imputadossolicitudesDto->getcveTipoDetencion() . "'";
        $sql .= " ,cveGenero='" . $imputadossolicitudesDto->getcveGenero() . "'";
        $sql .= " ,alias='" . $imputadossolicitudesDto->getalias() . "'";
        $sql .= " ,fechaDeclaracion='" . $imputadossolicitudesDto->getfechaDeclaracion() . "'";
        $sql .= " ,cvePaisNacimiento='" . $imputadossolicitudesDto->getcvePaisNacimiento() . "'";
        $sql .= " ,cveEstadoNacimiento='" . $imputadossolicitudesDto->getcveEstadoNacimiento() . "'";
        $sql .= " ,cveMunicipioNacimiento='" . $imputadossolicitudesDto->getcveMunicipioNacimiento() . "'";
        $sql .= " ,fechaNacimiento='" . $imputadossolicitudesDto->getfechaNacimiento() . "'";
        $sql .= " ,edad='" . $imputadossolicitudesDto->getedad() . "'";
        $sql .= " ,cveTipoPersona='" . $imputadossolicitudesDto->getcveTipoPersona() . "'";
        $sql .= " ,nombreMoral='" . $imputadossolicitudesDto->getNombreMoral() . "'";
        if ($imputadossolicitudesDto->getCveTipoReligion() != "") {
            $sql .= " ,CveTipoReligion='" . $imputadossolicitudesDto->getCveTipoReligion() . "'";
        }
        $sql .= " ,cveNivelInstruccion='" . $imputadossolicitudesDto->getcveNivelInstruccion() . "'";
        $sql .= " ,cveEstadoCivil='" . $imputadossolicitudesDto->getcveEstadoCivil() . "'";
        $sql .= " ,cveEspanol='" . $imputadossolicitudesDto->getcveEspanol() . "'";
        $sql .= " ,cveAlfabetismo='" . $imputadossolicitudesDto->getcveAlfabetismo() . "'";
        $sql .= " ,cveDialectoIndigena='" . $imputadossolicitudesDto->getcveDialectoIndigena() . "'";
        $sql .= " ,cveTipoFamiliaLinguistica='" . $imputadossolicitudesDto->getcveTipoFamiliaLinguistica() . "'";
        $sql .= " ,cveOcupacion='" . $imputadossolicitudesDto->getcveOcupacion() . "'";
        $sql .= " ,cveInterprete='" . $imputadossolicitudesDto->getcveInterprete() . "'";
        $sql .= " ,cveEstadoPsicofisico='" . $imputadossolicitudesDto->getcveEstadoPsicofisico() . "'";
        $sql .= " ,fechaImputacion='" . $imputadossolicitudesDto->getfechaImputacion() . "'";
        $sql .= " ,fechaControlDet='" . $imputadossolicitudesDto->getfechaControlDet() . "'";
        $sql .= " ,fecTerminoCons='" . $imputadossolicitudesDto->getfecTerminoCons() . "'";
        $sql .= " ,fecCierreInv='" . $imputadossolicitudesDto->getfecCierreInv() . "'";
        $sql .= " ,estadoNacimiento='" . $imputadossolicitudesDto->getestadoNacimiento() . "'";
        $sql .= " ,municipioNacimiento='" . $imputadossolicitudesDto->getmunicipioNacimiento() . "'";
        $sql .= " ,relacionMoral='" . $imputadossolicitudesDto->getrelacionMoral() . "'";
        $sql .= " ,personaMoral='" . $imputadossolicitudesDto->getpersonaMoral() . "'";
        $sql .= " ,cveCereso='" . $imputadossolicitudesDto->getcveCereso() . "'";
        $sql .= " ,cveEtapaProcesal='" . $imputadossolicitudesDto->getCveEtapaProcesal() . "'";
        $sql .= " ,cveTipoReincidencia='" . $imputadossolicitudesDto->getcveTipoReincidencia() . "'";
        $sql .= " ,ingresoMensual='" . $imputadossolicitudesDto->getingresoMensual() . "'";
        $sql .= " ,cveGrupoEdnico='" . $imputadossolicitudesDto->getcveGrupoEdnico() . "'";
        $sql .= " WHERE idImputadoSolicitud='" . $imputadossolicitudesDto->getidImputadoSolicitud() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImputadossolicitudesDTO();
            $tmp->setidImputadoSolicitud($imputadossolicitudesDto->getidImputadoSolicitud());
            $tmp = $this->selectImputadossolicitudes($tmp, "", $this->_proveedor);
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

    public function eliminaImputadossolicitudes($imputadossolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblimputadossolicitudes SET ";
        $sql .= " activo = 'N'";
        $sql .= " ,fechaActualizacion = now()";
        $sql .= " WHERE idImputadoSolicitud='" . $imputadossolicitudesDto->getidImputadoSolicitud() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImputadossolicitudesDTO();
            $tmp->setidImputadoSolicitud($imputadossolicitudesDto->getidImputadoSolicitud());
            $tmp = $this->selectImputadossolicitudes($tmp, "", $this->_proveedor);
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

    public function deleteImputadossolicitudes($imputadossolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblimputadossolicitudes  WHERE idImputadoSolicitud='" . $imputadossolicitudesDto->getidImputadoSolicitud() . "'";
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

    public function selectImputadossolicitudes($imputadossolicitudesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

//        $imputadossolicitudesDto = new ImputadossolicitudesDTO();

        $sql = "SELECT idImputadoSolicitud,idSolicitudAudiencia,activo,fechaRegistro,fechaActualizacion,detenido,nombre,paterno,materno,rfc,curp,cveTipoDetencion,cveGenero,alias,fechaDeclaracion,cvePaisNacimiento,cveEstadoNacimiento,cveMunicipioNacimiento,fechaNacimiento,edad,cveTipoPersona,CveTipoReligion,nombreMoral,cveNivelInstruccion,cveEstadoCivil,cveEspanol,cveAlfabetismo,cveDialectoIndigena,cveTipoFamiliaLinguistica,cveOcupacion,cveInterprete,cveEstadoPsicofisico,fechaImputacion,fechaControlDet,fecTerminoCons,fecCierreInv,estadoNacimiento,municipioNacimiento,relacionMoral,personaMoral,cveCereso,cveEtapaProcesal,cveTipoReincidencia,ingresoMensual,cveGrupoEdnico, TieneSobreseimiento, FechaSobreseimiento,idImputadoCarpeta FROM tblimputadossolicitudes ";
        if (($imputadossolicitudesDto->getIdImputadoCarpeta() != "") || ($imputadossolicitudesDto->getidImputadoSolicitud() != "") || ($imputadossolicitudesDto->getidSolicitudAudiencia() != "") || ($imputadossolicitudesDto->getTieneSobreseimiento() != "") || ($imputadossolicitudesDto->getFechaSobreseimiento() != "") || ($imputadossolicitudesDto->getactivo() != "") || ($imputadossolicitudesDto->getfechaRegistro() != "") || ($imputadossolicitudesDto->getfechaActualizacion() != "") || ($imputadossolicitudesDto->getdetenido() != "") || ($imputadossolicitudesDto->getnombre() != "") || ($imputadossolicitudesDto->getpaterno() != "") || ($imputadossolicitudesDto->getmaterno() != "") || ($imputadossolicitudesDto->getrfc() != "") || ($imputadossolicitudesDto->getcurp() != "") || ($imputadossolicitudesDto->getcveTipoDetencion() != "") || ($imputadossolicitudesDto->getcveGenero() != "") || ($imputadossolicitudesDto->getalias() != "") || ($imputadossolicitudesDto->getfechaDeclaracion() != "") || ($imputadossolicitudesDto->getcvePaisNacimiento() != "") || ($imputadossolicitudesDto->getcveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getcveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getfechaNacimiento() != "") || ($imputadossolicitudesDto->getedad() != "") || ($imputadossolicitudesDto->getcveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getnombreMoral() != "") || ($imputadossolicitudesDto->getcveNivelInstruccion() != "") || ($imputadossolicitudesDto->getcveEstadoCivil() != "") || ($imputadossolicitudesDto->getcveEspanol() != "") || ($imputadossolicitudesDto->getcveAlfabetismo() != "") || ($imputadossolicitudesDto->getcveDialectoIndigena() != "") || ($imputadossolicitudesDto->getcveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getcveOcupacion() != "") || ($imputadossolicitudesDto->getcveInterprete() != "") || ($imputadossolicitudesDto->getcveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getfechaImputacion() != "") || ($imputadossolicitudesDto->getfechaControlDet() != "") || ($imputadossolicitudesDto->getfecTerminoCons() != "") || ($imputadossolicitudesDto->getfecCierreInv() != "") || ($imputadossolicitudesDto->getestadoNacimiento() != "") || ($imputadossolicitudesDto->getmunicipioNacimiento() != "") || ($imputadossolicitudesDto->getrelacionMoral() != "") || ($imputadossolicitudesDto->getpersonaMoral() != "") || ($imputadossolicitudesDto->getcveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getcveTipoReincidencia() != "") || ($imputadossolicitudesDto->getingresoMensual() != "") || ($imputadossolicitudesDto->getcveGrupoEdnico() != "")) {
            $sql .= " WHERE ";
        }
        if ($imputadossolicitudesDto->getidImputadoSolicitud() != "") {
            $sql .= "idImputadoSolicitud='" . $imputadossolicitudesDto->getIdImputadoSolicitud() . "'";
            if (($imputadossolicitudesDto->getIdImputadoCarpeta() != "") || ($imputadossolicitudesDto->getTieneSobreseimiento() != "") || ($imputadossolicitudesDto->getFechaSobreseimiento() != "") || ($imputadossolicitudesDto->getIdSolicitudAudiencia() != "") || ($imputadossolicitudesDto->getActivo() != "") || ($imputadossolicitudesDto->getFechaRegistro() != "") || ($imputadossolicitudesDto->getFechaActualizacion() != "") || ($imputadossolicitudesDto->getDetenido() != "") || ($imputadossolicitudesDto->getNombre() != "") || ($imputadossolicitudesDto->getPaterno() != "") || ($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getTieneSobreseimiento() != "") {
            $sql .= "TieneSobreseimiento='" . $imputadossolicitudesDto->getTieneSobreseimiento() . "'";
            if (($imputadossolicitudesDto->getIdImputadoCarpeta() != "") || ($imputadossolicitudesDto->getFechaSobreseimiento() != "") || ($imputadossolicitudesDto->getIdSolicitudAudiencia() != "") || ($imputadossolicitudesDto->getActivo() != "") || ($imputadossolicitudesDto->getFechaRegistro() != "") || ($imputadossolicitudesDto->getFechaActualizacion() != "") || ($imputadossolicitudesDto->getDetenido() != "") || ($imputadossolicitudesDto->getNombre() != "") || ($imputadossolicitudesDto->getPaterno() != "") || ($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getFechaSobreseimiento() != "") {
            $sql .= "FechaSobreseimiento='" . $imputadossolicitudesDto->getFechaSobreseimiento() . "'";
            if (($imputadossolicitudesDto->getIdImputadoCarpeta() != "") || ($imputadossolicitudesDto->getIdSolicitudAudiencia() != "") || ($imputadossolicitudesDto->getActivo() != "") || ($imputadossolicitudesDto->getFechaRegistro() != "") || ($imputadossolicitudesDto->getFechaActualizacion() != "") || ($imputadossolicitudesDto->getDetenido() != "") || ($imputadossolicitudesDto->getNombre() != "") || ($imputadossolicitudesDto->getPaterno() != "") || ($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getIdImputadoCarpeta() != "") {
            $sql .= "idImputadoCarpeta='" . $imputadossolicitudesDto->getIdImputadoCarpeta() . "'";
            if (($imputadossolicitudesDto->getIdSolicitudAudiencia() != "") || ($imputadossolicitudesDto->getActivo() != "") || ($imputadossolicitudesDto->getFechaRegistro() != "") || ($imputadossolicitudesDto->getFechaActualizacion() != "") || ($imputadossolicitudesDto->getDetenido() != "") || ($imputadossolicitudesDto->getNombre() != "") || ($imputadossolicitudesDto->getPaterno() != "") || ($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getidSolicitudAudiencia() != "") {
            $sql .= "idSolicitudAudiencia='" . $imputadossolicitudesDto->getIdSolicitudAudiencia() . "'";
            if (($imputadossolicitudesDto->getActivo() != "") || ($imputadossolicitudesDto->getFechaRegistro() != "") || ($imputadossolicitudesDto->getFechaActualizacion() != "") || ($imputadossolicitudesDto->getDetenido() != "") || ($imputadossolicitudesDto->getNombre() != "") || ($imputadossolicitudesDto->getPaterno() != "") || ($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getactivo() != "") {
            $sql .= "activo='" . $imputadossolicitudesDto->getActivo() . "'";
            if (($imputadossolicitudesDto->getFechaRegistro() != "") || ($imputadossolicitudesDto->getFechaActualizacion() != "") || ($imputadossolicitudesDto->getDetenido() != "") || ($imputadossolicitudesDto->getNombre() != "") || ($imputadossolicitudesDto->getPaterno() != "") || ($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $imputadossolicitudesDto->getFechaRegistro() . "'";
            if (($imputadossolicitudesDto->getFechaActualizacion() != "") || ($imputadossolicitudesDto->getDetenido() != "") || ($imputadossolicitudesDto->getNombre() != "") || ($imputadossolicitudesDto->getPaterno() != "") || ($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $imputadossolicitudesDto->getFechaActualizacion() . "'";
            if (($imputadossolicitudesDto->getDetenido() != "") || ($imputadossolicitudesDto->getNombre() != "") || ($imputadossolicitudesDto->getPaterno() != "") || ($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getdetenido() != "") {
            $sql .= "detenido='" . $imputadossolicitudesDto->getDetenido() . "'";
            if (($imputadossolicitudesDto->getNombre() != "") || ($imputadossolicitudesDto->getPaterno() != "") || ($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getnombre() != "") {
            $sql .= "nombre='" . $imputadossolicitudesDto->getNombre() . "'";
            if (($imputadossolicitudesDto->getPaterno() != "") || ($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getpaterno() != "") {
            $sql .= "paterno='" . $imputadossolicitudesDto->getPaterno() . "'";
            if (($imputadossolicitudesDto->getMaterno() != "") || ($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getmaterno() != "") {
            $sql .= "materno='" . $imputadossolicitudesDto->getMaterno() . "'";
            if (($imputadossolicitudesDto->getRfc() != "") || ($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getrfc() != "") {
            $sql .= "rfc='" . $imputadossolicitudesDto->getRfc() . "'";
            if (($imputadossolicitudesDto->getCurp() != "") || ($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getcurp() != "") {
            $sql .= "curp='" . $imputadossolicitudesDto->getCurp() . "'";
            if (($imputadossolicitudesDto->getCveTipoDetencion() != "") || ($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getcveTipoDetencion() != "") {
            $sql .= "cveTipoDetencion='" . $imputadossolicitudesDto->getCveTipoDetencion() . "'";
            if (($imputadossolicitudesDto->getCveGenero() != "") || ($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getcveGenero() != "") {
            $sql .= "cveGenero='" . $imputadossolicitudesDto->getCveGenero() . "'";
            if (($imputadossolicitudesDto->getAlias() != "") || ($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getalias() != "") {
            $sql .= "alias='" . $imputadossolicitudesDto->getAlias() . "'";
            if (($imputadossolicitudesDto->getFechaDeclaracion() != "") || ($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getfechaDeclaracion() != "") {
            $sql .= "fechaDeclaracion='" . $imputadossolicitudesDto->getFechaDeclaracion() . "'";
            if (($imputadossolicitudesDto->getCvePaisNacimiento() != "") || ($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getcvePaisNacimiento() != "") {
            $sql .= "cvePaisNacimiento='" . $imputadossolicitudesDto->getCvePaisNacimiento() . "'";
            if (($imputadossolicitudesDto->getCveEstadoNacimiento() != "") || ($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getcveEstadoNacimiento() != "") {
            $sql .= "cveEstadoNacimiento='" . $imputadossolicitudesDto->getCveEstadoNacimiento() . "'";
            if (($imputadossolicitudesDto->getCveMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getcveMunicipioNacimiento() != "") {
            $sql .= "cveMunicipioNacimiento='" . $imputadossolicitudesDto->getCveMunicipioNacimiento() . "'";
            if (($imputadossolicitudesDto->getFechaNacimiento() != "") || ($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getfechaNacimiento() != "") {
            $sql .= "fechaNacimiento='" . $imputadossolicitudesDto->getFechaNacimiento() . "'";
            if (($imputadossolicitudesDto->getEdad() != "") || ($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getedad() != "") {
            $sql .= "edad='" . $imputadossolicitudesDto->getEdad() . "'";
            if (($imputadossolicitudesDto->getCveTipoPersona() != "") || ($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getcveTipoPersona() != "") {
            $sql .= "cveTipoPersona='" . $imputadossolicitudesDto->getCveTipoPersona() . "'";
            if (($imputadossolicitudesDto->getCveTipoReligion() != "") || ($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getCveTipoReligion() != "") {
            $sql .= "cveTipoReligion='" . $imputadossolicitudesDto->getCveTipoReligion() . "'";
            if (($imputadossolicitudesDto->getNombreMoral() != "") || ($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getnombreMoral() != "") {
            $sql .= "nombreMoral='" . $imputadossolicitudesDto->getNombreMoral() . "'";
            if (($imputadossolicitudesDto->getCveNivelInstruccion() != "") || ($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getcveNivelInstruccion() != "") {
            $sql .= "cveNivelInstruccion='" . $imputadossolicitudesDto->getCveNivelInstruccion() . "'";
            if (($imputadossolicitudesDto->getCveEstadoCivil() != "") || ($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getcveEstadoCivil() != "") {
            $sql .= "cveEstadoCivil='" . $imputadossolicitudesDto->getCveEstadoCivil() . "'";
            if (($imputadossolicitudesDto->getCveEspanol() != "") || ($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getcveEspanol() != "") {
            $sql .= "cveEspanol='" . $imputadossolicitudesDto->getCveEspanol() . "'";
            if (($imputadossolicitudesDto->getCveAlfabetismo() != "") || ($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getcveAlfabetismo() != "") {
            $sql .= "cveAlfabetismo='" . $imputadossolicitudesDto->getCveAlfabetismo() . "'";
            if (($imputadossolicitudesDto->getCveDialectoIndigena() != "") || ($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getcveDialectoIndigena() != "") {
            $sql .= "cveDialectoIndigena='" . $imputadossolicitudesDto->getCveDialectoIndigena() . "'";
            if (($imputadossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getcveTipoFamiliaLinguistica() != "") {
            $sql .= "cveTipoFamiliaLinguistica='" . $imputadossolicitudesDto->getCveTipoFamiliaLinguistica() . "'";
            if (($imputadossolicitudesDto->getCveOcupacion() != "") || ($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getcveOcupacion() != "") {
            $sql .= "cveOcupacion='" . $imputadossolicitudesDto->getCveOcupacion() . "'";
            if (($imputadossolicitudesDto->getCveInterprete() != "") || ($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getcveInterprete() != "") {
            $sql .= "cveInterprete='" . $imputadossolicitudesDto->getCveInterprete() . "'";
            if (($imputadossolicitudesDto->getCveEstadoPsicofisico() != "") || ($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getcveEstadoPsicofisico() != "") {
            $sql .= "cveEstadoPsicofisico='" . $imputadossolicitudesDto->getCveEstadoPsicofisico() . "'";
            if (($imputadossolicitudesDto->getFechaImputacion() != "") || ($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getfechaImputacion() != "") {
            $sql .= "fechaImputacion='" . $imputadossolicitudesDto->getFechaImputacion() . "'";
            if (($imputadossolicitudesDto->getFechaControlDet() != "") || ($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getfechaControlDet() != "") {
            $sql .= "fechaControlDet='" . $imputadossolicitudesDto->getFechaControlDet() . "'";
            if (($imputadossolicitudesDto->getFecTerminoCons() != "") || ($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getfecTerminoCons() != "") {
            $sql .= "fecTerminoCons='" . $imputadossolicitudesDto->getFecTerminoCons() . "'";
            if (($imputadossolicitudesDto->getFecCierreInv() != "") || ($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getfecCierreInv() != "") {
            $sql .= "fecCierreInv='" . $imputadossolicitudesDto->getFecCierreInv() . "'";
            if (($imputadossolicitudesDto->getEstadoNacimiento() != "") || ($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getestadoNacimiento() != "") {
            $sql .= "estadoNacimiento='" . $imputadossolicitudesDto->getEstadoNacimiento() . "'";
            if (($imputadossolicitudesDto->getMunicipioNacimiento() != "") || ($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getmunicipioNacimiento() != "") {
            $sql .= "municipioNacimiento='" . $imputadossolicitudesDto->getMunicipioNacimiento() . "'";
            if (($imputadossolicitudesDto->getRelacionMoral() != "") || ($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getrelacionMoral() != "") {
            $sql .= "relacionMoral='" . $imputadossolicitudesDto->getRelacionMoral() . "'";
            if (($imputadossolicitudesDto->getPersonaMoral() != "") || ($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getpersonaMoral() != "") {
            $sql .= "personaMoral='" . $imputadossolicitudesDto->getPersonaMoral() . "'";
            if (($imputadossolicitudesDto->getCveCereso() != "") || ($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getcveCereso() != "") {
            $sql .= "cveCereso='" . $imputadossolicitudesDto->getCveCereso() . "'";
            if (($imputadossolicitudesDto->getCveEtapaProcesal() != "") || ($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getCveEtapaProcesal() != "") {
            $sql .= "cveEtapaProcesal='" . $imputadossolicitudesDto->getCveEtapaProcesal() . "'";
            if (($imputadossolicitudesDto->getCveTipoReincidencia() != "") || ($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getcveTipoReincidencia() != "") {
            $sql .= "cveTipoReincidencia='" . $imputadossolicitudesDto->getCveTipoReincidencia() . "'";
            if (($imputadossolicitudesDto->getIngresoMensual() != "") || ($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getingresoMensual() != "") {
            $sql .= "ingresoMensual='" . $imputadossolicitudesDto->getIngresoMensual() . "'";
            if (($imputadossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($imputadossolicitudesDto->getcveGrupoEdnico() != "") {
            $sql .= "cveGrupoEdnico='" . $imputadossolicitudesDto->getCveGrupoEdnico() . "'";
        }
        if ($orden != "") {
            $sql .= $orden;
        } else {
            $sql .= "";
        }

//        echo $sql;
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new ImputadossolicitudesDTO();
                    $tmp[$contador]->setIdImputadoSolicitud($row["idImputadoSolicitud"]);
                    $tmp[$contador]->setIdSolicitudAudiencia($row["idSolicitudAudiencia"]);
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
                    $tmp[$contador]->setCveGenero($row["cveGenero"]);
                    $tmp[$contador]->setAlias($row["alias"]);
                    $tmp[$contador]->setFechaDeclaracion($row["fechaDeclaracion"]);
                    $tmp[$contador]->setCvePaisNacimiento($row["cvePaisNacimiento"]);
                    $tmp[$contador]->setCveEstadoNacimiento($row["cveEstadoNacimiento"]);
                    $tmp[$contador]->setCveMunicipioNacimiento($row["cveMunicipioNacimiento"]);
                    $tmp[$contador]->setFechaNacimiento($row["fechaNacimiento"]);
                    $tmp[$contador]->setEdad($row["edad"]);
                    $tmp[$contador]->setCveTipoPersona($row["cveTipoPersona"]);
                    $tmp[$contador]->setCveTipoReligion($row["CveTipoReligion"]);
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
                    $tmp[$contador]->setIdImputadoCarpeta($row["idImputadoCarpeta"]);
                    $contador ++;
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

    /**
     * para eliminar el imputado por el campo idImputadosolicitud sólo se modifica el campo activo a 'N'
     * @param $imputadossolicitudesDto
     * @param string $orden
     * @param null $proveedor
     * @return bool
     */
    public function eliminarImputadoByIdImputadoSolicitud($imputadossolicitudesDto, $orden = "", $proveedor = null) {
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblimputadossolicitudes SET activo='N', fechaActualizacion=NOW()";

        $sql .= " WHERE idImputadoSolicitud='" . $imputadossolicitudesDto->getIdImputadoSolicitud() . "'";


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

    public function selectImputadossolicitudestotal($imputadossolicitudesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT COUNT(idImputadoSolicitud) as totalCount  FROM tblimputadossolicitudes ";
        $sql .= " WHERE idSolicitudAudiencia='" . $imputadossolicitudesDto->getIdSolicitudAudiencia() . "'";
        $sql .= " AND activo='" . $imputadossolicitudesDto->getActivo() . "'";
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

    /*
     * modificar el campo idimputadocarpeta en imputadossolicitudes
     */

    public function updateIdImputadoCarpetaSolicitud($imputadossolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblimputadossolicitudes SET ";
        $sql .= " fechaActualizacion = now()";
        $sql .= " ,idImputadoCarpeta='" . $imputadossolicitudesDto->getIdImputadoCarpeta() . "'";
        $sql .= " WHERE idImputadoSolicitud='" . $imputadossolicitudesDto->getidImputadoSolicitud() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImputadossolicitudesDTO();
            $tmp->setidImputadoSolicitud($imputadossolicitudesDto->getidImputadoSolicitud());
            $tmp = $this->selectImputadossolicitudes($tmp, "", $this->_proveedor);
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