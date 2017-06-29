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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/ofendidossolicitudes/OfendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");
date_default_timezone_set('America/Mexico_City');

class OfendidossolicitudesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertOfendidossolicitudes($ofendidossolicitudesDto, $proveedor = null) {

        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblofendidossolicitudes(";
        if ($ofendidossolicitudesDto->getidOfendidoSolicitud() != "") {
            $sql .= "idOfendidoSolicitud";
            if (($ofendidossolicitudesDto->getIdSolicitudAudiencia() != "") || ($ofendidossolicitudesDto->getActivo() != "") || ($ofendidossolicitudesDto->getNombre() != "") || ($ofendidossolicitudesDto->getPaterno() != "") || ($ofendidossolicitudesDto->getMaterno() != "") || ($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getidSolicitudAudiencia() != "") {
            $sql .= "idSolicitudAudiencia";
            if (($ofendidossolicitudesDto->getActivo() != "") || ($ofendidossolicitudesDto->getNombre() != "") || ($ofendidossolicitudesDto->getPaterno() != "") || ($ofendidossolicitudesDto->getMaterno() != "") || ($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getactivo() != "") {
            $sql .= "activo";
            if (($ofendidossolicitudesDto->getNombre() != "") || ($ofendidossolicitudesDto->getPaterno() != "") || ($ofendidossolicitudesDto->getMaterno() != "") || ($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getnombre() != "") {
            $sql .= "nombre";
            if (($ofendidossolicitudesDto->getPaterno() != "") || ($ofendidossolicitudesDto->getMaterno() != "") || ($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getpaterno() != "") {
            $sql .= "paterno";
            if (($ofendidossolicitudesDto->getMaterno() != "") || ($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getmaterno() != "") {
            $sql .= "materno";
            if (($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getrfc() != "") {
            $sql .= "rfc";
            if (($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcurp() != "") {
            $sql .= "curp";
            if (($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getfechaNacimiento() != "") {
            $sql .= "fechaNacimiento";
            if (($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveOcupacion() != "") {
            $sql .= "cveOcupacion";
            if (($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveTipoPersona() != "") {
            $sql .= "cveTipoPersona";
            if (($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveGenero() != "") {
            $sql .= "cveGenero";
            if (($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getCveTipoParte() != "") {
            $sql .= "cveTipoParte";
            if (($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getCveTipoReligion() != "") {
            $sql .= "cveTipoReligion";
            if (($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getedad() != "") {
            $sql .= "edad";
            if (($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcvePaisNacimiento() != "") {
            $sql .= "cvePaisNacimiento";
            if (($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveEstadoNacimiento() != "") {
            $sql .= "cveEstadoNacimiento";
            if (($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getestadoNacimiento() != "") {
            $sql .= "estadoNacimiento";
            if (($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveMunicipioNacimiento() != "") {
            $sql .= "cveMunicipioNacimiento";
            if (($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getmunicipioNacimiento() != "") {
            $sql .= "municipioNacimiento";
            if (($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveEstadoCivil() != "") {
            $sql .= "cveEstadoCivil";
            if (($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveAlfabetismo() != "") {
            $sql .= "cveAlfabetismo";
            if (($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveNivelInstruccion() != "") {
            $sql .= "cveNivelInstruccion";
            if (($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveEspanol() != "") {
            $sql .= "cveEspanol";
            if (($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveDialectoIndigena() != "") {
            $sql .= "cveDialectoIndigena";
            if (($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveTipoFamiliaLinguistica() != "") {
            $sql .= "cveTipoFamiliaLinguistica";
            if (($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveInterprete() != "") {
            $sql .= "cveInterprete";
            if (($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveOrdenProteccion() != "") {
            $sql .= "cveOrdenProteccion";
            if (($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveEstadoPsicofisico() != "") {
            $sql .= "cveEstadoPsicofisico";
            if (($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveNacionalidad() != "") {
            $sql .= "cveNacionalidad";
            if (($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getnombreMoral() != "") {
            $sql .= "nombreMoral";
            if (($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveVictimaDeLaDelincuenciaOrganizada() != "") {
            $sql .= "cveVictimaDeLaDelincuenciaOrganizada";
            if (($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveVictimaDeViolenciaDeGenero() != "") {
            $sql .= "cveVictimaDeViolenciaDeGenero";
            if (($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveVictimaDeTrata() != "") {
            $sql .= "cveVictimaDeTrata";
            if (($ofendidossolicitudesDto->getCveVictimaDeAcoso() != '') || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }

        if ($ofendidossolicitudesDto->getCveVictimaDeAcoso() != "") {
            $sql .= "cveVictimaDeAcoso";
            if (($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }

        if ($ofendidossolicitudesDto->getdesaparecido() != "") {
            $sql .= "desaparecido";
            if (($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getnumHijos() != "") {
            $sql .= "numHijos";
            if (($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getembarazada() != "") {
            $sql .= "embarazada";
            if (($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveGrupoEdnico() != "") {
            $sql .= "cveGrupoEdnico";
        }
        $sql .= ",fechaRegistro";
        $sql .= ",fechaActualizacion";
        $sql .= ") VALUES(";
        if ($ofendidossolicitudesDto->getidOfendidoSolicitud() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getidOfendidoSolicitud() . "'";
            if (($ofendidossolicitudesDto->getIdSolicitudAudiencia() != "") || ($ofendidossolicitudesDto->getActivo() != "") || ($ofendidossolicitudesDto->getNombre() != "") || ($ofendidossolicitudesDto->getPaterno() != "") || ($ofendidossolicitudesDto->getMaterno() != "") || ($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getidSolicitudAudiencia() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getidSolicitudAudiencia() . "'";
            if (($ofendidossolicitudesDto->getActivo() != "") || ($ofendidossolicitudesDto->getNombre() != "") || ($ofendidossolicitudesDto->getPaterno() != "") || ($ofendidossolicitudesDto->getMaterno() != "") || ($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getactivo() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getactivo() . "'";
            if (($ofendidossolicitudesDto->getNombre() != "") || ($ofendidossolicitudesDto->getPaterno() != "") || ($ofendidossolicitudesDto->getMaterno() != "") || ($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getfechaRegistro() != "") {
            if (($ofendidossolicitudesDto->getNombre() != "") || ($ofendidossolicitudesDto->getPaterno() != "") || ($ofendidossolicitudesDto->getMaterno() != "") || ($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getfechaActualizacion() != "") {
            if (($ofendidossolicitudesDto->getNombre() != "") || ($ofendidossolicitudesDto->getPaterno() != "") || ($ofendidossolicitudesDto->getMaterno() != "") || ($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getnombre() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getnombre() . "'";
            if (($ofendidossolicitudesDto->getPaterno() != "") || ($ofendidossolicitudesDto->getMaterno() != "") || ($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getpaterno() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getpaterno() . "'";
            if (($ofendidossolicitudesDto->getMaterno() != "") || ($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getmaterno() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getmaterno() . "'";
            if (($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getrfc() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getrfc() . "'";
            if (($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcurp() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getcurp() . "'";
            if (($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getfechaNacimiento() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getfechaNacimiento() . "'";
            if (($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveOcupacion() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getcveOcupacion() . "'";
            if (($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveTipoPersona() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getcveTipoPersona() . "'";
            if (($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveGenero() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getcveGenero() . "'";
            if (($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }

        if ($ofendidossolicitudesDto->getCveTipoParte() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getCveTipoParte() . "'";
            if (($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }

        if ($ofendidossolicitudesDto->getCveTipoReligion() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getCveTipoReligion() . "'";
            if (($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }

        if ($ofendidossolicitudesDto->getedad() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getedad() . "'";
            if (($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcvePaisNacimiento() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getcvePaisNacimiento() . "'";
            if (($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveEstadoNacimiento() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getcveEstadoNacimiento() . "'";
            if (($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getestadoNacimiento() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getestadoNacimiento() . "'";
            if (($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveMunicipioNacimiento() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getcveMunicipioNacimiento() . "'";
            if (($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getmunicipioNacimiento() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getmunicipioNacimiento() . "'";
            if (($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveEstadoCivil() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getcveEstadoCivil() . "'";
            if (($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveAlfabetismo() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getcveAlfabetismo() . "'";
            if (($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveNivelInstruccion() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getcveNivelInstruccion() . "'";
            if (($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveEspanol() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getcveEspanol() . "'";
            if (($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveDialectoIndigena() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getcveDialectoIndigena() . "'";
            if (($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveTipoFamiliaLinguistica() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getcveTipoFamiliaLinguistica() . "'";
            if (($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveInterprete() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getcveInterprete() . "'";
            if (($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveOrdenProteccion() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getcveOrdenProteccion() . "'";
            if (($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveEstadoPsicofisico() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getcveEstadoPsicofisico() . "'";
            if (($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveNacionalidad() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getcveNacionalidad() . "'";
            if (($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getnombreMoral() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getnombreMoral() . "'";
            if (($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveVictimaDeLaDelincuenciaOrganizada() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getcveVictimaDeLaDelincuenciaOrganizada() . "'";
            if (($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveVictimaDeViolenciaDeGenero() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getcveVictimaDeViolenciaDeGenero() . "'";
            if (($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveVictimaDeTrata() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getcveVictimaDeTrata() . "'";
            if (($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }

        if ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getcveVictimaDeAcoso() . "'";
            if (($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }

        if ($ofendidossolicitudesDto->getdesaparecido() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getdesaparecido() . "'";
            if (($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getnumHijos() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getnumHijos() . "'";
            if (($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getembarazada() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getembarazada() . "'";
            if (($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveGrupoEdnico() != "") {
            $sql .= "'" . $ofendidossolicitudesDto->getcveGrupoEdnico() . "'";
        }
        $sql .= ",now()";
        $sql .= ",now()";
        $sql .= ")";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new OfendidossolicitudesDTO();
            $tmp->setidOfendidoSolicitud($this->_proveedor->lastID());
            $tmp = $this->selectOfendidossolicitudes($tmp, "", $this->_proveedor);
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

    public function updateOfendidossolicitudes($ofendidossolicitudesDto, $proveedor = null) {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblofendidossolicitudes SET ";
        if ($ofendidossolicitudesDto->getidOfendidoSolicitud() != "") {
            $sql .= "idOfendidoSolicitud='" . $ofendidossolicitudesDto->getidOfendidoSolicitud() . "'";
            if (($ofendidossolicitudesDto->getIdSolicitudAudiencia() != "") || ($ofendidossolicitudesDto->getActivo() != "") || ($ofendidossolicitudesDto->getFechaRegistro() != "") || ($ofendidossolicitudesDto->getFechaActualizacion() != "") || ($ofendidossolicitudesDto->getNombre() != "") || ($ofendidossolicitudesDto->getPaterno() != "") || ($ofendidossolicitudesDto->getMaterno() != "") || ($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getidSolicitudAudiencia() != "") {
            $sql .= "idSolicitudAudiencia='" . $ofendidossolicitudesDto->getidSolicitudAudiencia() . "'";
            if (($ofendidossolicitudesDto->getActivo() != "") || ($ofendidossolicitudesDto->getFechaRegistro() != "") || ($ofendidossolicitudesDto->getFechaActualizacion() != "") || ($ofendidossolicitudesDto->getNombre() != "") || ($ofendidossolicitudesDto->getPaterno() != "") || ($ofendidossolicitudesDto->getMaterno() != "") || ($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getactivo() != "") {
            $sql .= "activo='" . $ofendidossolicitudesDto->getactivo() . "'";
            if (($ofendidossolicitudesDto->getFechaRegistro() != "") || ($ofendidossolicitudesDto->getFechaActualizacion() != "") || ($ofendidossolicitudesDto->getNombre() != "") || ($ofendidossolicitudesDto->getPaterno() != "") || ($ofendidossolicitudesDto->getMaterno() != "") || ($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $ofendidossolicitudesDto->getfechaRegistro() . "'";
            if (($ofendidossolicitudesDto->getFechaActualizacion() != "") || ($ofendidossolicitudesDto->getNombre() != "") || ($ofendidossolicitudesDto->getPaterno() != "") || ($ofendidossolicitudesDto->getMaterno() != "") || ($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion=NOW()";
            if (($ofendidossolicitudesDto->getNombre() != "") || ($ofendidossolicitudesDto->getPaterno() != "") || ($ofendidossolicitudesDto->getMaterno() != "") || ($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getnombre() != "") {
            $sql .= "nombre='" . $ofendidossolicitudesDto->getnombre() . "'";
            if (($ofendidossolicitudesDto->getPaterno() != "") || ($ofendidossolicitudesDto->getMaterno() != "") || ($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getpaterno() != "") {
            $sql .= "paterno='" . $ofendidossolicitudesDto->getpaterno() . "'";
            if (($ofendidossolicitudesDto->getMaterno() != "") || ($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getmaterno() != "") {
            $sql .= "materno='" . $ofendidossolicitudesDto->getmaterno() . "'";
            if (($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getrfc() != "") {
            $sql .= "rfc='" . $ofendidossolicitudesDto->getrfc() . "'";
            if (($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcurp() != "") {
            $sql .= "curp='" . $ofendidossolicitudesDto->getcurp() . "'";
            if (($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getfechaNacimiento() != "") {
            $sql .= "fechaNacimiento='" . $ofendidossolicitudesDto->getfechaNacimiento() . "'";
            if (($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveOcupacion() != "") {
            $sql .= "cveOcupacion='" . $ofendidossolicitudesDto->getcveOcupacion() . "'";
            if (($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveTipoPersona() != "") {
            $sql .= "cveTipoPersona='" . $ofendidossolicitudesDto->getcveTipoPersona() . "'";
            if (($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveGenero() != "") {
            $sql .= "cveGenero='" . $ofendidossolicitudesDto->getcveGenero() . "'";
            if (($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getCveTipoParte() != "") {
            $sql .= "cveTipoParte='" . $ofendidossolicitudesDto->getCveTipoParte() . "'";
            if (($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getCveTipoReligion() != "") {
            $sql .= "cveTipoReligion='" . $ofendidossolicitudesDto->getCveTipoReligion() . "'";
            if (($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getedad() != "") {
            $sql .= "edad='" . $ofendidossolicitudesDto->getedad() . "'";
            if (($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcvePaisNacimiento() != "") {
            $sql .= "cvePaisNacimiento='" . $ofendidossolicitudesDto->getcvePaisNacimiento() . "'";
            if (($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveEstadoNacimiento() != "") {
            $sql .= "cveEstadoNacimiento='" . $ofendidossolicitudesDto->getcveEstadoNacimiento() . "'";
            if (($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getestadoNacimiento() != "") {
            $sql .= "estadoNacimiento='" . $ofendidossolicitudesDto->getestadoNacimiento() . "'";
            if (($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveMunicipioNacimiento() != "") {
            $sql .= "cveMunicipioNacimiento='" . $ofendidossolicitudesDto->getcveMunicipioNacimiento() . "'";
            if (($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getmunicipioNacimiento() != "") {
            $sql .= "municipioNacimiento='" . $ofendidossolicitudesDto->getmunicipioNacimiento() . "'";
            if (($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveEstadoCivil() != "") {
            $sql .= "cveEstadoCivil='" . $ofendidossolicitudesDto->getcveEstadoCivil() . "'";
            if (($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveAlfabetismo() != "") {
            $sql .= "cveAlfabetismo='" . $ofendidossolicitudesDto->getcveAlfabetismo() . "'";
            if (($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveNivelInstruccion() != "") {
            $sql .= "cveNivelInstruccion='" . $ofendidossolicitudesDto->getcveNivelInstruccion() . "'";
            if (($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveEspanol() != "") {
            $sql .= "cveEspanol='" . $ofendidossolicitudesDto->getcveEspanol() . "'";
            if (($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveDialectoIndigena() != "") {
            $sql .= "cveDialectoIndigena='" . $ofendidossolicitudesDto->getcveDialectoIndigena() . "'";
            if (($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveTipoFamiliaLinguistica() != "") {
            $sql .= "cveTipoFamiliaLinguistica='" . $ofendidossolicitudesDto->getcveTipoFamiliaLinguistica() . "'";
            if (($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveInterprete() != "") {
            $sql .= "cveInterprete='" . $ofendidossolicitudesDto->getcveInterprete() . "'";
            if (($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveOrdenProteccion() != "") {
            $sql .= "cveOrdenProteccion='" . $ofendidossolicitudesDto->getcveOrdenProteccion() . "'";
            if (($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveEstadoPsicofisico() != "") {
            $sql .= "cveEstadoPsicofisico='" . $ofendidossolicitudesDto->getcveEstadoPsicofisico() . "'";
            if (($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveNacionalidad() != "") {
            $sql .= "cveNacionalidad='" . $ofendidossolicitudesDto->getcveNacionalidad() . "'";
            if (($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getnombreMoral() != "") {
            $sql .= "nombreMoral='" . $ofendidossolicitudesDto->getnombreMoral() . "'";
            if (($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveVictimaDeLaDelincuenciaOrganizada() != "") {
            $sql .= "cveVictimaDeLaDelincuenciaOrganizada='" . $ofendidossolicitudesDto->getcveVictimaDeLaDelincuenciaOrganizada() . "'";
            if (($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveVictimaDeViolenciaDeGenero() != "") {
            $sql .= "cveVictimaDeViolenciaDeGenero='" . $ofendidossolicitudesDto->getcveVictimaDeViolenciaDeGenero() . "'";
            if (($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveVictimaDeTrata() != "") {
            $sql .= "cveVictimaDeTrata='" . $ofendidossolicitudesDto->getcveVictimaDeTrata() . "'";
            if (($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }

        if ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") {
            $sql .= "cveVictimaDeAcoso='" . $ofendidossolicitudesDto->getcveVictimaDeAcoso() . "'";
            if (($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }

        if ($ofendidossolicitudesDto->getdesaparecido() != "") {
            $sql .= "desaparecido='" . $ofendidossolicitudesDto->getdesaparecido() . "'";
            if (($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getnumHijos() != "") {
            $sql .= "numHijos='" . $ofendidossolicitudesDto->getnumHijos() . "'";
            if (($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getembarazada() != "") {
            $sql .= "embarazada='" . $ofendidossolicitudesDto->getembarazada() . "'";
            if (($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= ",";
            }
        }
        if ($ofendidossolicitudesDto->getcveGrupoEdnico() != "") {
            $sql .= "cveGrupoEdnico='" . $ofendidossolicitudesDto->getcveGrupoEdnico() . "'";
        }
        $sql .= " WHERE idOfendidoSolicitud='" . $ofendidossolicitudesDto->getidOfendidoSolicitud() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new OfendidossolicitudesDTO();
            $tmp->setidOfendidoSolicitud($ofendidossolicitudesDto->getidOfendidoSolicitud());
            $tmp = $this->selectOfendidossolicitudes($tmp, "", $this->_proveedor);
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

    public function deleteOfendidossolicitudes($ofendidossolicitudesDto, $proveedor = null) {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblofendidossolicitudes  WHERE idOfendidoSolicitud='" . $ofendidossolicitudesDto->getidOfendidoSolicitud() . "'";
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

    public function selectOfendidossolicitudes($ofendidossolicitudesDto, $orden = "", $proveedor = null) {

        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT
                a.idOfendidoSolicitud,a.idSolicitudAudiencia,a.activo,a.fechaRegistro,a.fechaActualizacion,a.nombre,
                a.paterno,a.materno,a.rfc,a.curp,a.fechaNacimiento,a.cveOcupacion,a.cveTipoPersona,b.desTipoPersona,a.cveGenero,c.desGenero,
                a.cveTipoParte, a.cveTipoReligion, a.edad,
                a.cvePaisNacimiento,a.cveEstadoNacimiento,a.estadoNacimiento,a.cveMunicipioNacimiento,a.municipioNacimiento,a.cveEstadoCivil,
                a.cveAlfabetismo,a.cveNivelInstruccion,a.cveEspanol,a.cveDialectoIndigena,a.cveTipoFamiliaLinguistica,a.cveInterprete,a.cveOrdenProteccion,
                a.cveEstadoPsicofisico,a.nombreMoral,a.cveVictimaDeLaDelincuenciaOrganizada,a.cveVictimaDeViolenciaDeGenero,
                a.cveVictimaDeTrata,a.cveVictimaDeAcoso,a.desaparecido,a.numHijos,a.embarazada,a.cveGrupoEdnico
                FROM tblofendidossolicitudes a
                JOIN tbltipospersonas b ON a.cveTipoPersona = b.cveTipoPersona
                JOIN tblgeneros c ON a.cveGenero = c.cveGenero ";
        if (($ofendidossolicitudesDto->getidOfendidoSolicitud() != "") || ($ofendidossolicitudesDto->getidSolicitudAudiencia() != "") || ($ofendidossolicitudesDto->getactivo() != "") || ($ofendidossolicitudesDto->getfechaRegistro() != "") || ($ofendidossolicitudesDto->getfechaActualizacion() != "") || ($ofendidossolicitudesDto->getnombre() != "") || ($ofendidossolicitudesDto->getpaterno() != "") || ($ofendidossolicitudesDto->getmaterno() != "") || ($ofendidossolicitudesDto->getrfc() != "") || ($ofendidossolicitudesDto->getcurp() != "") || ($ofendidossolicitudesDto->getfechaNacimiento() != "") || ($ofendidossolicitudesDto->getcveOcupacion() != "") || ($ofendidossolicitudesDto->getcveTipoPersona() != "") || ($ofendidossolicitudesDto->getcveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getedad() != "") || ($ofendidossolicitudesDto->getcvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getcveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getestadoNacimiento() != "") || ($ofendidossolicitudesDto->getcveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getmunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getcveEstadoCivil() != "") || ($ofendidossolicitudesDto->getcveAlfabetismo() != "") || ($ofendidossolicitudesDto->getcveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getcveEspanol() != "") || ($ofendidossolicitudesDto->getcveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getcveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getcveInterprete() != "") || ($ofendidossolicitudesDto->getcveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getcveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getcveNacionalidad() != "") || ($ofendidossolicitudesDto->getnombreMoral() != "") || ($ofendidossolicitudesDto->getcveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getcveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getcveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getdesaparecido() != "") || ($ofendidossolicitudesDto->getnumHijos() != "") || ($ofendidossolicitudesDto->getembarazada() != "") || ($ofendidossolicitudesDto->getcveGrupoEdnico() != "")) {
            $sql .= " WHERE ";
        }
        if ($ofendidossolicitudesDto->getidOfendidoSolicitud() != "") {
            $sql .= "a.idOfendidoSolicitud='" . $ofendidossolicitudesDto->getIdOfendidoSolicitud() . "'";
            if (($ofendidossolicitudesDto->getIdSolicitudAudiencia() != "") || ($ofendidossolicitudesDto->getActivo() != "") || ($ofendidossolicitudesDto->getFechaRegistro() != "") || ($ofendidossolicitudesDto->getFechaActualizacion() != "") || ($ofendidossolicitudesDto->getNombre() != "") || ($ofendidossolicitudesDto->getPaterno() != "") || ($ofendidossolicitudesDto->getMaterno() != "") || ($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getidSolicitudAudiencia() != "") {
            $sql .= "a.idSolicitudAudiencia='" . $ofendidossolicitudesDto->getIdSolicitudAudiencia() . "'";
            if (($ofendidossolicitudesDto->getActivo() != "") || ($ofendidossolicitudesDto->getFechaRegistro() != "") || ($ofendidossolicitudesDto->getFechaActualizacion() != "") || ($ofendidossolicitudesDto->getNombre() != "") || ($ofendidossolicitudesDto->getPaterno() != "") || ($ofendidossolicitudesDto->getMaterno() != "") || ($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getactivo() != "") {
            $sql .= "a.activo='" . $ofendidossolicitudesDto->getActivo() . "'";
            if (($ofendidossolicitudesDto->getFechaRegistro() != "") || ($ofendidossolicitudesDto->getFechaActualizacion() != "") || ($ofendidossolicitudesDto->getNombre() != "") || ($ofendidossolicitudesDto->getPaterno() != "") || ($ofendidossolicitudesDto->getMaterno() != "") || ($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getfechaRegistro() != "") {
            $sql .= "a.fechaRegistro='" . $ofendidossolicitudesDto->getFechaRegistro() . "'";
            if (($ofendidossolicitudesDto->getFechaActualizacion() != "") || ($ofendidossolicitudesDto->getNombre() != "") || ($ofendidossolicitudesDto->getPaterno() != "") || ($ofendidossolicitudesDto->getMaterno() != "") || ($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getfechaActualizacion() != "") {
            $sql .= "a.fechaActualizacion='" . $ofendidossolicitudesDto->getFechaActualizacion() . "'";
            if (($ofendidossolicitudesDto->getNombre() != "") || ($ofendidossolicitudesDto->getPaterno() != "") || ($ofendidossolicitudesDto->getMaterno() != "") || ($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getnombre() != "") {
            $sql .= "a.nombre='" . $ofendidossolicitudesDto->getNombre() . "'";
            if (($ofendidossolicitudesDto->getPaterno() != "") || ($ofendidossolicitudesDto->getMaterno() != "") || ($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getpaterno() != "") {
            $sql .= "a.paterno='" . $ofendidossolicitudesDto->getPaterno() . "'";
            if (($ofendidossolicitudesDto->getMaterno() != "") || ($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getmaterno() != "") {
            $sql .= "a.materno='" . $ofendidossolicitudesDto->getMaterno() . "'";
            if (($ofendidossolicitudesDto->getRfc() != "") || ($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getrfc() != "") {
            $sql .= "a.rfc='" . $ofendidossolicitudesDto->getRfc() . "'";
            if (($ofendidossolicitudesDto->getCurp() != "") || ($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getcurp() != "") {
            $sql .= "a.curp='" . $ofendidossolicitudesDto->getCurp() . "'";
            if (($ofendidossolicitudesDto->getFechaNacimiento() != "") || ($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getfechaNacimiento() != "") {
            $sql .= "a.fechaNacimiento='" . $ofendidossolicitudesDto->getFechaNacimiento() . "'";
            if (($ofendidossolicitudesDto->getCveOcupacion() != "") || ($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getcveOcupacion() != "") {
            $sql .= "a.cveOcupacion='" . $ofendidossolicitudesDto->getCveOcupacion() . "'";
            if (($ofendidossolicitudesDto->getCveTipoPersona() != "") || ($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getcveTipoPersona() != "") {
            $sql .= "a.cveTipoPersona='" . $ofendidossolicitudesDto->getCveTipoPersona() . "'";
            if (($ofendidossolicitudesDto->getCveGenero() != "") || ($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getcveGenero() != "") {
            $sql .= "a.cveGenero='" . $ofendidossolicitudesDto->getCveGenero() . "'";
            if (($ofendidossolicitudesDto->getCveTipoParte() != "") || ($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getCveTipoParte() != "") {
            $sql .= "a.cveTipoParte='" . $ofendidossolicitudesDto->getCveTipoParte() . "'";
            if (($ofendidossolicitudesDto->getCveTipoReligion() != "") || ($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getCveTipoReligion() != "") {
            $sql .= "a.cveTipoReligion='" . $ofendidossolicitudesDto->getCveTipoReligion() . "'";
            if (($ofendidossolicitudesDto->getEdad() != "") || ($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getedad() != "") {
            $sql .= "a.edad='" . $ofendidossolicitudesDto->getEdad() . "'";
            if (($ofendidossolicitudesDto->getCvePaisNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getcvePaisNacimiento() != "") {
            $sql .= "a.cvePaisNacimiento='" . $ofendidossolicitudesDto->getCvePaisNacimiento() . "'";
            if (($ofendidossolicitudesDto->getCveEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getcveEstadoNacimiento() != "") {
            $sql .= "a.cveEstadoNacimiento='" . $ofendidossolicitudesDto->getCveEstadoNacimiento() . "'";
            if (($ofendidossolicitudesDto->getEstadoNacimiento() != "") || ($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getestadoNacimiento() != "") {
            $sql .= "a.estadoNacimiento='" . $ofendidossolicitudesDto->getEstadoNacimiento() . "'";
            if (($ofendidossolicitudesDto->getCveMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getcveMunicipioNacimiento() != "") {
            $sql .= "a.cveMunicipioNacimiento='" . $ofendidossolicitudesDto->getCveMunicipioNacimiento() . "'";
            if (($ofendidossolicitudesDto->getMunicipioNacimiento() != "") || ($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getmunicipioNacimiento() != "") {
            $sql .= "a.municipioNacimiento='" . $ofendidossolicitudesDto->getMunicipioNacimiento() . "'";
            if (($ofendidossolicitudesDto->getCveEstadoCivil() != "") || ($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getcveEstadoCivil() != "") {
            $sql .= "a.cveEstadoCivil='" . $ofendidossolicitudesDto->getCveEstadoCivil() . "'";
            if (($ofendidossolicitudesDto->getCveAlfabetismo() != "") || ($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getcveAlfabetismo() != "") {
            $sql .= "a.cveAlfabetismo='" . $ofendidossolicitudesDto->getCveAlfabetismo() . "'";
            if (($ofendidossolicitudesDto->getCveNivelInstruccion() != "") || ($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getcveNivelInstruccion() != "") {
            $sql .= "a.cveNivelInstruccion='" . $ofendidossolicitudesDto->getCveNivelInstruccion() . "'";
            if (($ofendidossolicitudesDto->getCveEspanol() != "") || ($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getcveEspanol() != "") {
            $sql .= "a.cveEspanol='" . $ofendidossolicitudesDto->getCveEspanol() . "'";
            if (($ofendidossolicitudesDto->getCveDialectoIndigena() != "") || ($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getcveDialectoIndigena() != "") {
            $sql .= "a.cveDialectoIndigena='" . $ofendidossolicitudesDto->getCveDialectoIndigena() . "'";
            if (($ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getcveTipoFamiliaLinguistica() != "") {
            $sql .= "a.cveTipoFamiliaLinguistica='" . $ofendidossolicitudesDto->getCveTipoFamiliaLinguistica() . "'";
            if (($ofendidossolicitudesDto->getCveInterprete() != "") || ($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getcveInterprete() != "") {
            $sql .= "a.cveInterprete='" . $ofendidossolicitudesDto->getCveInterprete() . "'";
            if (($ofendidossolicitudesDto->getCveOrdenProteccion() != "") || ($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getcveOrdenProteccion() != "") {
            $sql .= "a.cveOrdenProteccion='" . $ofendidossolicitudesDto->getCveOrdenProteccion() . "'";
            if (($ofendidossolicitudesDto->getCveEstadoPsicofisico() != "") || ($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getcveEstadoPsicofisico() != "") {
            $sql .= "a.cveEstadoPsicofisico='" . $ofendidossolicitudesDto->getCveEstadoPsicofisico() . "'";
            if (($ofendidossolicitudesDto->getCveNacionalidad() != "") || ($ofendidossolicitudesDto->getNombreMoral() != "") || ($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getnombreMoral() != "") {
            $sql .= "a.nombreMoral='" . $ofendidossolicitudesDto->getNombreMoral() . "'";
            if (($ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getcveVictimaDeLaDelincuenciaOrganizada() != "") {
            $sql .= "a.cveVictimaDeLaDelincuenciaOrganizada='" . $ofendidossolicitudesDto->getCveVictimaDeLaDelincuenciaOrganizada() . "'";
            if (($ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getcveVictimaDeViolenciaDeGenero() != "") {
            $sql .= "a.cveVictimaDeViolenciaDeGenero='" . $ofendidossolicitudesDto->getCveVictimaDeViolenciaDeGenero() . "'";
            if (($ofendidossolicitudesDto->getCveVictimaDeTrata() != "") || ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getcveVictimaDeTrata() != "") {
            $sql .= "a.cveVictimaDeTrata='" . $ofendidossolicitudesDto->getCveVictimaDeTrata() . "'";
            if (($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") || ($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }

        if ($ofendidossolicitudesDto->getcveVictimaDeAcoso() != "") {
            $sql .= "a.cveVictimaDeAcoso='" . $ofendidossolicitudesDto->getcveVictimaDeAcoso() . "'";
            if (($ofendidossolicitudesDto->getDesaparecido() != "") || ($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }

        if ($ofendidossolicitudesDto->getdesaparecido() != "") {
            $sql .= "a.desaparecido='" . $ofendidossolicitudesDto->getDesaparecido() . "'";
            if (($ofendidossolicitudesDto->getNumHijos() != "") || ($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getnumHijos() != "") {
            $sql .= "a.numHijos='" . $ofendidossolicitudesDto->getNumHijos() . "'";
            if (($ofendidossolicitudesDto->getEmbarazada() != "") || ($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getembarazada() != "") {
            $sql .= "a.embarazada='" . $ofendidossolicitudesDto->getEmbarazada() . "'";
            if (($ofendidossolicitudesDto->getCveGrupoEdnico() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ofendidossolicitudesDto->getcveGrupoEdnico() != "") {
            $sql .= "a.cveGrupoEdnico='" . $ofendidossolicitudesDto->getCveGrupoEdnico() . "'";
        }
        if ($orden != "") {
            $sql .= $orden;
        } else {
            $sql .= "";
        }

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new OfendidossolicitudesDTO();
                    $tmp[$contador]->setIdOfendidoSolicitud($row["idOfendidoSolicitud"]);
                    $tmp[$contador]->setIdSolicitudAudiencia($row["idSolicitudAudiencia"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setNombre(($row["nombre"]));
                    $tmp[$contador]->setPaterno(($row["paterno"]));
                    $tmp[$contador]->setMaterno(($row["materno"]));
                    $tmp[$contador]->setRfc(($row["rfc"]));
                    $tmp[$contador]->setCurp(($row["curp"]));
                    $tmp[$contador]->setFechaNacimiento($row["fechaNacimiento"]);
                    //$tmp[$contador]->setFechaNacimiento((date_format(date_create($row["fechaNacimiento"]), 'd/m/Y')));
                    $tmp[$contador]->setCveOcupacion($row["cveOcupacion"]);
                    $tmp[$contador]->setCveTipoPersona($row["cveTipoPersona"]);
                    $tmp[$contador]->setDesTipoPersona($row["desTipoPersona"]);
                    $tmp[$contador]->setCveGenero($row["cveGenero"]);
                    $tmp[$contador]->setDesGenero(($row["desGenero"]));
                    $tmp[$contador]->setCveTipoParte($row["cveTipoParte"]);
                    $tmp[$contador]->setCveTipoReligion($row["cveTipoReligion"]);
                    $tmp[$contador]->setEdad(($row["edad"]));
                    $tmp[$contador]->setCvePaisNacimiento($row["cvePaisNacimiento"]);
                    $tmp[$contador]->setCveEstadoNacimiento($row["cveEstadoNacimiento"]);
                    $tmp[$contador]->setEstadoNacimiento(($row["estadoNacimiento"]));
                    $tmp[$contador]->setCveMunicipioNacimiento($row["cveMunicipioNacimiento"]);
                    $tmp[$contador]->setMunicipioNacimiento(($row["municipioNacimiento"]));
                    $tmp[$contador]->setCveEstadoCivil($row["cveEstadoCivil"]);
                    $tmp[$contador]->setCveAlfabetismo($row["cveAlfabetismo"]);
                    $tmp[$contador]->setCveNivelInstruccion($row["cveNivelInstruccion"]);
                    $tmp[$contador]->setCveEspanol($row["cveEspanol"]);
                    $tmp[$contador]->setCveDialectoIndigena($row["cveDialectoIndigena"]);
                    $tmp[$contador]->setCveTipoFamiliaLinguistica($row["cveTipoFamiliaLinguistica"]);
                    $tmp[$contador]->setCveInterprete($row["cveInterprete"]);
                    $tmp[$contador]->setCveOrdenProteccion($row["cveOrdenProteccion"]);
                    $tmp[$contador]->setCveEstadoPsicofisico($row["cveEstadoPsicofisico"]);
                    $tmp[$contador]->setNombreMoral(($row["nombreMoral"]));
                    $tmp[$contador]->setCveVictimaDeLaDelincuenciaOrganizada($row["cveVictimaDeLaDelincuenciaOrganizada"]);
                    $tmp[$contador]->setCveVictimaDeViolenciaDeGenero($row["cveVictimaDeViolenciaDeGenero"]);
                    $tmp[$contador]->setCveVictimaDeTrata($row["cveVictimaDeTrata"]);
                    $tmp[$contador]->setCveVictimaDeAcoso($row["cveVictimaDeAcoso"]);
                    $tmp[$contador]->setDesaparecido($row["desaparecido"]);
                    $tmp[$contador]->setNumHijos(($row["numHijos"]));
                    $tmp[$contador]->setEmbarazada($row["embarazada"]);
                    $tmp[$contador]->setCveGrupoEdnico($row["cveGrupoEdnico"]);
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

    public function selectOfendidossolicitudesPaso6($ofendidossolicitudesDto, $orden = "", $proveedor = null) {

        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT
                idOfendidoSolicitud,idSolicitudAudiencia,activo,fechaRegistro,fechaActualizacion,nombre,
                paterno,materno,rfc,curp,fechaNacimiento,cveOcupacion,cveTipoPersona,cveGenero,edad,
                cvePaisNacimiento,cveEstadoNacimiento,estadoNacimiento,cveMunicipioNacimiento,municipioNacimiento,cveEstadoCivil,
                cveAlfabetismo,cveNivelInstruccion,cveEspanol,cveDialectoIndigena,cveTipoFamiliaLinguistica,cveInterprete,cveOrdenProteccion,
                cveEstadoPsicofisico,nombreMoral,cveVictimaDeLaDelincuenciaOrganizada,cveVictimaDeViolenciaDeGenero,cveVictimaDeAcoso,
                cveVictimaDeTrata,desaparecido,numHijos,embarazada,cveGrupoEdnico
                FROM tblofendidossolicitudes ";
        $sql .= " WHERE idOfendidoSolicitud='" . $ofendidossolicitudesDto->getIdOfendidoSolicitud() . "'";
        $sql .= " AND (cveVictimaDeTrata = 1 or cveVictimaDeViolenciaDeGenero = 1 or cveVictimaDeLaDelincuenciaOrganizada = 1 or cveVictimaDeAcoso = 1 )";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new OfendidossolicitudesDTO();
                    $tmp[$contador]->setIdOfendidoSolicitud($row["idOfendidoSolicitud"]);
                    $tmp[$contador]->setIdSolicitudAudiencia($row["idSolicitudAudiencia"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setNombre(($row["nombre"]));
                    $tmp[$contador]->setPaterno(($row["paterno"]));
                    $tmp[$contador]->setMaterno(($row["materno"]));
                    $tmp[$contador]->setRfc($row["rfc"]);
                    $tmp[$contador]->setCurp($row["curp"]);
                    $tmp[$contador]->setFechaNacimiento(date_format(date_create($row["fechaNacimiento"]), 'd/m/Y'));
                    $tmp[$contador]->setFechaNacimiento($row["fechaNacimiento"]);
                    $tmp[$contador]->setCveOcupacion($row["cveOcupacion"]);
                    $tmp[$contador]->setCveTipoPersona($row["cveTipoPersona"]);
                    $tmp[$contador]->setCveGenero($row["cveGenero"]);
                    $tmp[$contador]->setEdad($row["edad"]);
                    $tmp[$contador]->setCvePaisNacimiento($row["cvePaisNacimiento"]);
                    $tmp[$contador]->setCveEstadoNacimiento($row["cveEstadoNacimiento"]);
                    $tmp[$contador]->setEstadoNacimiento($row["estadoNacimiento"]);
                    $tmp[$contador]->setCveMunicipioNacimiento($row["cveMunicipioNacimiento"]);
                    $tmp[$contador]->setMunicipioNacimiento($row["municipioNacimiento"]);
                    $tmp[$contador]->setCveEstadoCivil($row["cveEstadoCivil"]);
                    $tmp[$contador]->setCveAlfabetismo($row["cveAlfabetismo"]);
                    $tmp[$contador]->setCveNivelInstruccion($row["cveNivelInstruccion"]);
                    $tmp[$contador]->setCveEspanol($row["cveEspanol"]);
                    $tmp[$contador]->setCveDialectoIndigena($row["cveDialectoIndigena"]);
                    $tmp[$contador]->setCveTipoFamiliaLinguistica($row["cveTipoFamiliaLinguistica"]);
                    $tmp[$contador]->setCveInterprete($row["cveInterprete"]);
                    $tmp[$contador]->setCveOrdenProteccion($row["cveOrdenProteccion"]);
                    $tmp[$contador]->setCveEstadoPsicofisico($row["cveEstadoPsicofisico"]);
                    $tmp[$contador]->setNombreMoral($row["nombreMoral"]);
                    $tmp[$contador]->setCveVictimaDeLaDelincuenciaOrganizada($row["cveVictimaDeLaDelincuenciaOrganizada"]);
                    $tmp[$contador]->setCveVictimaDeViolenciaDeGenero($row["cveVictimaDeViolenciaDeGenero"]);
                    $tmp[$contador]->setCveVictimaDeTrata($row["cveVictimaDeTrata"]);
                    $tmp[$contador]->setCveVictimaDeAcoso($row["cveVictimaDeAcoso"]);
                    $tmp[$contador]->setDesaparecido($row["desaparecido"]);
                    $tmp[$contador]->setNumHijos($row["numHijos"]);
                    $tmp[$contador]->setEmbarazada($row["embarazada"]);
                    $tmp[$contador]->setCveGrupoEdnico($row["cveGrupoEdnico"]);
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

}
