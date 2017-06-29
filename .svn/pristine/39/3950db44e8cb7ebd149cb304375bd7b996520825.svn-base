<?php
 /*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 DAOS
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/ofendidoscarpetas/OfendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/validacion/Validacion.Class.php");
class OfendidoscarpetasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertOfendidoscarpetas($ofendidoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblofendidoscarpetas(";
        if ($ofendidoscarpetasDto->getidOfendidoCarpeta() != "") {
            $sql.="idOfendidoCarpeta";
            if (($ofendidoscarpetasDto->getIdCarpetaJudicial() != "") || ($ofendidoscarpetasDto->getActivo() != "") || ($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getidCarpetaJudicial() != "") {
            $sql.="idCarpetaJudicial";
            if (($ofendidoscarpetasDto->getActivo() != "") || ($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getactivo() != "") {
            $sql.="activo";
            if (($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getnombre() != "") {
            $sql.="nombre";
            if (($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getpaterno() != "") {
            $sql.="paterno";
            if (($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getmaterno() != "") {
            $sql.="materno";
            if (($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getrfc() != "") {
            $sql.="rfc";
            if (($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcurp() != "") {
            $sql.="curp";
            if (($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveOcupacion() != "") {
            $sql.="cveOcupacion";
            if (($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveTipoPersona() != "") {
            $sql.="cveTipoPersona";
            if (($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveGenero() != "") {
            $sql.="cveGenero";
            if (($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getCveTipoParte() != "") {
            $sql.="cveTipoParte";
            if (($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getCveTipoReligion() != "" && (int)$ofendidoscarpetasDto->getCveTipoReligion() > 0) {
            $sql.="cveTipoReligion";
            if (($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getfechaNacimiento() != "") {
            $sql.="fechaNacimiento";
            if (($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getedad() != "") {
            $sql.="edad";
            if (($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcvePaisNacimiento() != "") {
            $sql.="cvePaisNacimiento";
            if (($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveEstadoNacimiento() != "") {
            $sql.="cveEstadoNacimiento";
            if (($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getestadoNacimiento() != "") {
            $sql.="estadoNacimiento";
            if (($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveMunicipioNacimiento() != "") {
            $sql.="cveMunicipioNacimiento";
            if (($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getmunicipioNacimiento() != "") {
            $sql.="municipioNacimiento";
            if (($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveEstadoCivil() != "") {
            $sql.="cveEstadoCivil";
            if (($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveAlfabetismo() != "") {
            $sql.="cveAlfabetismo";
            if (($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveNivelInstruccion() != "") {
            $sql.="cveNivelInstruccion";
            if (($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveEspanol() != "") {
            $sql.="cveEspanol";
            if (($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveDialectoIndigena() != "") {
            $sql.="cveDialectoIndigena";
            if (($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveTipoFamiliaLinguistica() != "") {
            $sql.="cveTipoFamiliaLinguistica";
            if (($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveInterprete() != "") {
            $sql.="cveInterprete";
            if (($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveOrdenProteccion() != "") {
            $sql.="cveOrdenProteccion";
            if (($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveEstadoPsicofisico() != "") {
            $sql.="cveEstadoPsicofisico";
            if (($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getnombreMoral() != "") {
            $sql.="nombreMoral";
            if (($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveVictimaDeLaDelincuenciaOrganizada() != "") {
            $sql.="cveVictimaDeLaDelincuenciaOrganizada";
            if (($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveVictimaDeViolenciaDeGenero() != "") {
            $sql.="cveVictimaDeViolenciaDeGenero";
            if (($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveVictimaDeTrata() != "") {
            $sql.="cveVictimaDeTrata";
            if ( ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") {
            $sql.="cveVictimaDeAcoso";
            if (($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getdesaparecido() != "") {
            $sql.="desaparecido";
            if (($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getnumHijos() != "") {
            $sql.="numHijos";
            if (($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getembarazada() != "") {
            $sql.="embarazada";
            if (($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveGrupoEdnico() != "") {
            $sql.="cveGrupoEdnico";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($ofendidoscarpetasDto->getidOfendidoCarpeta() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getidOfendidoCarpeta() . "'";
            if (($ofendidoscarpetasDto->getIdCarpetaJudicial() != "") || ($ofendidoscarpetasDto->getActivo() != "") || ($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getidCarpetaJudicial() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getidCarpetaJudicial() . "'";
            if (($ofendidoscarpetasDto->getActivo() != "") || ($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getactivo() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getactivo() . "'";
            if (($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getnombre() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getnombre() . "'";
            if (($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getpaterno() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getpaterno() . "'";
            if (($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getmaterno() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getmaterno() . "'";
            if (($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getrfc() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getrfc() . "'";
            if (($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcurp() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getcurp() . "'";
            if (($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveOcupacion() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getcveOcupacion() . "'";
            if (($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveTipoPersona() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getcveTipoPersona() . "'";
            if (($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveGenero() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getcveGenero() . "'";
            if (($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getCveTipoParte() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getCveTipoParte() . "'";
            if (($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getCveTipoReligion() != "" && (int)$ofendidoscarpetasDto->getCveTipoReligion() > 0) {
            $sql.="'" . $ofendidoscarpetasDto->getCveTipoReligion() . "'";
            if (($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getfechaNacimiento() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getfechaNacimiento() . "'";
            if (($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getedad() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getedad() . "'";
            if (($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcvePaisNacimiento() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getcvePaisNacimiento() . "'";
            if (($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveEstadoNacimiento() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getcveEstadoNacimiento() . "'";
            if (($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getestadoNacimiento() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getestadoNacimiento() . "'";
            if (($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveMunicipioNacimiento() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getcveMunicipioNacimiento() . "'";
            if (($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getmunicipioNacimiento() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getmunicipioNacimiento() . "'";
            if (($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveEstadoCivil() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getcveEstadoCivil() . "'";
            if (($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveAlfabetismo() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getcveAlfabetismo() . "'";
            if (($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveNivelInstruccion() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getcveNivelInstruccion() . "'";
            if (($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveEspanol() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getcveEspanol() . "'";
            if (($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveDialectoIndigena() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getcveDialectoIndigena() . "'";
            if (($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveTipoFamiliaLinguistica() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getcveTipoFamiliaLinguistica() . "'";
            if (($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveInterprete() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getcveInterprete() . "'";
            if (($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveOrdenProteccion() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getcveOrdenProteccion() . "'";
            if (($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveEstadoPsicofisico() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getcveEstadoPsicofisico() . "'";
            if (($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getnombreMoral() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getnombreMoral() . "'";
            if (($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveVictimaDeLaDelincuenciaOrganizada() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getcveVictimaDeLaDelincuenciaOrganizada() . "'";
            if (($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveVictimaDeViolenciaDeGenero() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getcveVictimaDeViolenciaDeGenero() . "'";
            if (($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveVictimaDeTrata() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getcveVictimaDeTrata() . "'";
            if ( ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getcveVictimaDeAcoso() . "'";
            if (($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getdesaparecido() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getdesaparecido() . "'";
            if (($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getnumHijos() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getnumHijos() . "'";
            if (($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getembarazada() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getembarazada() . "'";
            if (($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveGrupoEdnico() != "") {
            $sql.="'" . $ofendidoscarpetasDto->getcveGrupoEdnico() . "'";
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new OfendidoscarpetasDTO();
            $tmp->setidOfendidoCarpeta($this->_proveedor->lastID());
            $tmp = $this->selectOfendidoscarpetas($tmp, "", $this->_proveedor);
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

    public function updateOfendidoscarpetas($ofendidoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblofendidoscarpetas SET ";
        if ($ofendidoscarpetasDto->getidOfendidoCarpeta() != "") {
            $sql.="idOfendidoCarpeta='" . $ofendidoscarpetasDto->getidOfendidoCarpeta() . "'";
            if (($ofendidoscarpetasDto->getIdCarpetaJudicial() != "") || ($ofendidoscarpetasDto->getActivo() != "") || ($ofendidoscarpetasDto->getFechaRegistro() != "") || ($ofendidoscarpetasDto->getFechaActualizacion() != "") || ($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getidCarpetaJudicial() != "") {
            $sql.="idCarpetaJudicial='" . $ofendidoscarpetasDto->getidCarpetaJudicial() . "'";
            if (($ofendidoscarpetasDto->getActivo() != "") || ($ofendidoscarpetasDto->getFechaRegistro() != "") || ($ofendidoscarpetasDto->getFechaActualizacion() != "") || ($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getactivo() != "") {
            $sql.="activo='" . $ofendidoscarpetasDto->getactivo() . "'";
            if (($ofendidoscarpetasDto->getFechaRegistro() != "") || ($ofendidoscarpetasDto->getFechaActualizacion() != "") || ($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $ofendidoscarpetasDto->getfechaRegistro() . "'";
            if (($ofendidoscarpetasDto->getFechaActualizacion() != "") || ($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $ofendidoscarpetasDto->getfechaActualizacion() . "'";
            if (($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getnombre() != "") {
            $sql.="nombre='" . $ofendidoscarpetasDto->getnombre() . "'";
            if (($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getpaterno() != "") {
            $sql.="paterno='" . $ofendidoscarpetasDto->getpaterno() . "'";
            if (($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getmaterno() != "") {
            $sql.="materno='" . $ofendidoscarpetasDto->getmaterno() . "'";
            if (($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getrfc() != "") {
            $sql.="rfc='" . $ofendidoscarpetasDto->getrfc() . "'";
            if (($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcurp() != "") {
            $sql.="curp='" . $ofendidoscarpetasDto->getcurp() . "'";
            if (($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveOcupacion() != "") {
            $sql.="cveOcupacion='" . $ofendidoscarpetasDto->getcveOcupacion() . "'";
            if (($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveTipoPersona() != "") {
            $sql.="cveTipoPersona='" . $ofendidoscarpetasDto->getcveTipoPersona() . "'";
            if (($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveGenero() != "") {
            $sql.="cveGenero='" . $ofendidoscarpetasDto->getcveGenero() . "'";
            if (($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getCveTipoParte() != "") {
            $sql.="cveTipoParte='" . $ofendidoscarpetasDto->getCveTipoParte() . "'";
            if (($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getCveTipoReligion() != "" && (int)$ofendidoscarpetasDto->getCveTipoReligion() > 0) {
            $sql.="cveTipoReligion='" . $ofendidoscarpetasDto->getCveTipoReligion() . "'";
            if (($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getfechaNacimiento() != "") {
            $sql.="fechaNacimiento='" . $ofendidoscarpetasDto->getfechaNacimiento() . "'";
            if (($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getedad() != "") {
            $sql.="edad='" . $ofendidoscarpetasDto->getedad() . "'";
            if (($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcvePaisNacimiento() != "") {
            $sql.="cvePaisNacimiento='" . $ofendidoscarpetasDto->getcvePaisNacimiento() . "'";
            if (($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveEstadoNacimiento() != "") {
            $sql.="cveEstadoNacimiento='" . $ofendidoscarpetasDto->getcveEstadoNacimiento() . "'";
            if (($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getestadoNacimiento() != "") {
            $sql.="estadoNacimiento='" . $ofendidoscarpetasDto->getestadoNacimiento() . "'";
            if (($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveMunicipioNacimiento() != "") {
            $sql.="cveMunicipioNacimiento='" . $ofendidoscarpetasDto->getcveMunicipioNacimiento() . "'";
            if (($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getmunicipioNacimiento() != "") {
            $sql.="municipioNacimiento='" . $ofendidoscarpetasDto->getmunicipioNacimiento() . "'";
            if (($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveEstadoCivil() != "") {
            $sql.="cveEstadoCivil='" . $ofendidoscarpetasDto->getcveEstadoCivil() . "'";
            if (($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveAlfabetismo() != "") {
            $sql.="cveAlfabetismo='" . $ofendidoscarpetasDto->getcveAlfabetismo() . "'";
            if (($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveNivelInstruccion() != "") {
            $sql.="cveNivelInstruccion='" . $ofendidoscarpetasDto->getcveNivelInstruccion() . "'";
            if (($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveEspanol() != "") {
            $sql.="cveEspanol='" . $ofendidoscarpetasDto->getcveEspanol() . "'";
            if (($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveDialectoIndigena() != "") {
            $sql.="cveDialectoIndigena='" . $ofendidoscarpetasDto->getcveDialectoIndigena() . "'";
            if (($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveTipoFamiliaLinguistica() != "") {
            $sql.="cveTipoFamiliaLinguistica='" . $ofendidoscarpetasDto->getcveTipoFamiliaLinguistica() . "'";
            if (($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveInterprete() != "") {
            $sql.="cveInterprete='" . $ofendidoscarpetasDto->getcveInterprete() . "'";
            if (($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveOrdenProteccion() != "") {
            $sql.="cveOrdenProteccion='" . $ofendidoscarpetasDto->getcveOrdenProteccion() . "'";
            if (($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveEstadoPsicofisico() != "") {
            $sql.="cveEstadoPsicofisico='" . $ofendidoscarpetasDto->getcveEstadoPsicofisico() . "'";
            if (($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getnombreMoral() != "") {
            $sql.="nombreMoral='" . $ofendidoscarpetasDto->getnombreMoral() . "'";
            if (($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveVictimaDeLaDelincuenciaOrganizada() != "") {
            $sql.="cveVictimaDeLaDelincuenciaOrganizada='" . $ofendidoscarpetasDto->getcveVictimaDeLaDelincuenciaOrganizada() . "'";
            if (($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveVictimaDeViolenciaDeGenero() != "") {
            $sql.="cveVictimaDeViolenciaDeGenero='" . $ofendidoscarpetasDto->getcveVictimaDeViolenciaDeGenero() . "'";
            if (($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveVictimaDeTrata() != "") {
            $sql.="cveVictimaDeTrata='" . $ofendidoscarpetasDto->getcveVictimaDeTrata() . "'";
            if ( ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") {
            $sql.="cveVictimaDeAcoso='" . $ofendidoscarpetasDto->getcveVictimaDeAcoso() . "'";
            if (($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getdesaparecido() != "") {
            $sql.="desaparecido='" . $ofendidoscarpetasDto->getdesaparecido() . "'";
            if (($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getnumHijos() != "") {
            $sql.="numHijos='" . $ofendidoscarpetasDto->getnumHijos() . "'";
            if (($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getembarazada() != "") {
            $sql.="embarazada='" . $ofendidoscarpetasDto->getembarazada() . "'";
            if (($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=",";
            }
        }
        if ($ofendidoscarpetasDto->getcveGrupoEdnico() != "") {
            $sql.="cveGrupoEdnico='" . $ofendidoscarpetasDto->getcveGrupoEdnico() . "'";
        }
        $sql.=" WHERE idOfendidoCarpeta='" . $ofendidoscarpetasDto->getidOfendidoCarpeta() . "'";
        //print_r($sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new OfendidoscarpetasDTO();
            $tmp->setidOfendidoCarpeta($ofendidoscarpetasDto->getidOfendidoCarpeta());
            $tmp = $this->selectOfendidoscarpetas($tmp, "", $this->_proveedor);
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

    public function deleteOfendidoscarpetas($ofendidoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblofendidoscarpetas  WHERE idOfendidoCarpeta='" . $ofendidoscarpetasDto->getidOfendidoCarpeta() . "'";
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

    public function selectOfendidoscarpetas($ofendidoscarpetasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idOfendidoCarpeta,idCarpetaJudicial,activo,fechaRegistro,fechaActualizacion,nombre,paterno,materno,rfc,curp,cveOcupacion,cveTipoPersona,cveGenero,cveTipoParte,cveTipoReligion,fechaNacimiento,edad,cvePaisNacimiento,cveEstadoNacimiento,estadoNacimiento,cveMunicipioNacimiento,municipioNacimiento,cveEstadoCivil,cveAlfabetismo,cveNivelInstruccion,cveEspanol,cveDialectoIndigena,cveTipoFamiliaLinguistica,cveInterprete,cveOrdenProteccion,cveEstadoPsicofisico,nombreMoral,cveVictimaDeLaDelincuenciaOrganizada,cveVictimaDeViolenciaDeGenero,cveVictimaDeTrata,cveVictimaDeAcoso,desaparecido,numHijos,embarazada,cveGrupoEdnico FROM tblofendidoscarpetas ";
        if (($ofendidoscarpetasDto->getidOfendidoCarpeta() != "") || ($ofendidoscarpetasDto->getidCarpetaJudicial() != "") || ($ofendidoscarpetasDto->getactivo() != "") || ($ofendidoscarpetasDto->getfechaRegistro() != "") || ($ofendidoscarpetasDto->getfechaActualizacion() != "") || ($ofendidoscarpetasDto->getnombre() != "") || ($ofendidoscarpetasDto->getpaterno() != "") || ($ofendidoscarpetasDto->getmaterno() != "") || ($ofendidoscarpetasDto->getrfc() != "") || ($ofendidoscarpetasDto->getcurp() != "") || ($ofendidoscarpetasDto->getcveOcupacion() != "") || ($ofendidoscarpetasDto->getcveTipoPersona() != "") || ($ofendidoscarpetasDto->getcveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getfechaNacimiento() != "") || ($ofendidoscarpetasDto->getedad() != "") || ($ofendidoscarpetasDto->getcvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getcveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getestadoNacimiento() != "") || ($ofendidoscarpetasDto->getcveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getmunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getcveEstadoCivil() != "") || ($ofendidoscarpetasDto->getcveAlfabetismo() != "") || ($ofendidoscarpetasDto->getcveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getcveEspanol() != "") || ($ofendidoscarpetasDto->getcveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getcveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getcveInterprete() != "") || ($ofendidoscarpetasDto->getcveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getcveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getnombreMoral() != "") || ($ofendidoscarpetasDto->getcveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getcveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getcveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getdesaparecido() != "") || ($ofendidoscarpetasDto->getnumHijos() != "") || ($ofendidoscarpetasDto->getembarazada() != "") || ($ofendidoscarpetasDto->getcveGrupoEdnico() != "")) {
            $sql.=" WHERE ";
        }
        if ($ofendidoscarpetasDto->getidOfendidoCarpeta() != "") {
            $sql.="idOfendidoCarpeta='" . $ofendidoscarpetasDto->getIdOfendidoCarpeta() . "'";
            if (($ofendidoscarpetasDto->getIdCarpetaJudicial() != "") || ($ofendidoscarpetasDto->getActivo() != "") || ($ofendidoscarpetasDto->getFechaRegistro() != "") || ($ofendidoscarpetasDto->getFechaActualizacion() != "") || ($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getidCarpetaJudicial() != "") {
            $sql.="idCarpetaJudicial='" . $ofendidoscarpetasDto->getIdCarpetaJudicial() . "'";
            if (($ofendidoscarpetasDto->getActivo() != "") || ($ofendidoscarpetasDto->getFechaRegistro() != "") || ($ofendidoscarpetasDto->getFechaActualizacion() != "") || ($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getactivo() != "") {
            $sql.="activo='" . $ofendidoscarpetasDto->getActivo() . "'";
            if (($ofendidoscarpetasDto->getFechaRegistro() != "") || ($ofendidoscarpetasDto->getFechaActualizacion() != "") || ($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $ofendidoscarpetasDto->getFechaRegistro() . "'";
            if (($ofendidoscarpetasDto->getFechaActualizacion() != "") || ($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $ofendidoscarpetasDto->getFechaActualizacion() . "'";
            if (($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getnombre() != "") {
            $sql.="nombre='" . $ofendidoscarpetasDto->getNombre() . "'";
            if (($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getpaterno() != "") {
            $sql.="paterno='" . $ofendidoscarpetasDto->getPaterno() . "'";
            if (($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getmaterno() != "") {
            $sql.="materno='" . $ofendidoscarpetasDto->getMaterno() . "'";
            if (($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getrfc() != "") {
            $sql.="rfc='" . $ofendidoscarpetasDto->getRfc() . "'";
            if (($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcurp() != "") {
            $sql.="curp='" . $ofendidoscarpetasDto->getCurp() . "'";
            if (($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveOcupacion() != "") {
            $sql.="cveOcupacion='" . $ofendidoscarpetasDto->getCveOcupacion() . "'";
            if (($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveTipoPersona() != "") {
            $sql.="cveTipoPersona='" . $ofendidoscarpetasDto->getCveTipoPersona() . "'";
            if (($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveGenero() != "") {
            $sql.="cveGenero='" . $ofendidoscarpetasDto->getCveGenero() . "'";
            if (($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getCveTipoParte() != "") {
            $sql.="cveTipoParte='" . $ofendidoscarpetasDto->getCveTipoParte() . "'";
            if (($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getCveTipoReligion() != "") {
            $sql.="cveTipoReligion='" . $ofendidoscarpetasDto->getCveTipoReligion() . "'";
            if (($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getfechaNacimiento() != "") {
            $sql.="fechaNacimiento='" . $ofendidoscarpetasDto->getFechaNacimiento() . "'";
            if (($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getedad() != "") {
            $sql.="edad='" . $ofendidoscarpetasDto->getEdad() . "'";
            if (($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcvePaisNacimiento() != "") {
            $sql.="cvePaisNacimiento='" . $ofendidoscarpetasDto->getCvePaisNacimiento() . "'";
            if (($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveEstadoNacimiento() != "") {
            $sql.="cveEstadoNacimiento='" . $ofendidoscarpetasDto->getCveEstadoNacimiento() . "'";
            if (($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getestadoNacimiento() != "") {
            $sql.="estadoNacimiento='" . $ofendidoscarpetasDto->getEstadoNacimiento() . "'";
            if (($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveMunicipioNacimiento() != "") {
            $sql.="cveMunicipioNacimiento='" . $ofendidoscarpetasDto->getCveMunicipioNacimiento() . "'";
            if (($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getmunicipioNacimiento() != "") {
            $sql.="municipioNacimiento='" . $ofendidoscarpetasDto->getMunicipioNacimiento() . "'";
            if (($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveEstadoCivil() != "") {
            $sql.="cveEstadoCivil='" . $ofendidoscarpetasDto->getCveEstadoCivil() . "'";
            if (($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveAlfabetismo() != "") {
            $sql.="cveAlfabetismo='" . $ofendidoscarpetasDto->getCveAlfabetismo() . "'";
            if (($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveNivelInstruccion() != "") {
            $sql.="cveNivelInstruccion='" . $ofendidoscarpetasDto->getCveNivelInstruccion() . "'";
            if (($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveEspanol() != "") {
            $sql.="cveEspanol='" . $ofendidoscarpetasDto->getCveEspanol() . "'";
            if (($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveDialectoIndigena() != "") {
            $sql.="cveDialectoIndigena='" . $ofendidoscarpetasDto->getCveDialectoIndigena() . "'";
            if (($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveTipoFamiliaLinguistica() != "") {
            $sql.="cveTipoFamiliaLinguistica='" . $ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() . "'";
            if (($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveInterprete() != "") {
            $sql.="cveInterprete='" . $ofendidoscarpetasDto->getCveInterprete() . "'";
            if (($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveOrdenProteccion() != "") {
            $sql.="cveOrdenProteccion='" . $ofendidoscarpetasDto->getCveOrdenProteccion() . "'";
            if (($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveEstadoPsicofisico() != "") {
            $sql.="cveEstadoPsicofisico='" . $ofendidoscarpetasDto->getCveEstadoPsicofisico() . "'";
            if (($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getnombreMoral() != "") {
            $sql.="nombreMoral='" . $ofendidoscarpetasDto->getNombreMoral() . "'";
            if (($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveVictimaDeLaDelincuenciaOrganizada() != "") {
            $sql.="cveVictimaDeLaDelincuenciaOrganizada='" . $ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() . "'";
            if (($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveVictimaDeViolenciaDeGenero() != "") {
            $sql.="cveVictimaDeViolenciaDeGenero='" . $ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() . "'";
            if (($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveVictimaDeTrata() != "") {
            $sql.="cveVictimaDeTrata='" . $ofendidoscarpetasDto->getCveVictimaDeTrata() . "'";
            if ( ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveVictimaDeAcoso() != "") {
            $sql.="cveVictimaDeAcoso='" . $ofendidoscarpetasDto->getCveVictimaDeAcoso() . "'";
            if (($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getdesaparecido() != "") {
            $sql.="desaparecido='" . $ofendidoscarpetasDto->getDesaparecido() . "'";
            if (($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getnumHijos() != "") {
            $sql.="numHijos='" . $ofendidoscarpetasDto->getNumHijos() . "'";
            if (($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getembarazada() != "") {
            $sql.="embarazada='" . $ofendidoscarpetasDto->getEmbarazada() . "'";
            if (($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveGrupoEdnico() != "") {
            $sql.="cveGrupoEdnico='" . $ofendidoscarpetasDto->getCveGrupoEdnico() . "'";
        }
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new OfendidoscarpetasDTO();
                    $tmp[$contador]->setIdOfendidoCarpeta($row["idOfendidoCarpeta"]);
                    $tmp[$contador]->setIdCarpetaJudicial($row["idCarpetaJudicial"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setNombre($row["nombre"]);
                    $tmp[$contador]->setPaterno($row["paterno"]);
                    $tmp[$contador]->setMaterno($row["materno"]);
                    $tmp[$contador]->setRfc($row["rfc"]);
                    $tmp[$contador]->setCurp($row["curp"]);
                    $tmp[$contador]->setCveOcupacion($row["cveOcupacion"]);
                    $tmp[$contador]->setCveTipoPersona($row["cveTipoPersona"]);
                    $tmp[$contador]->setCveGenero($row["cveGenero"]);
                    $tmp[$contador]->setCveTipoParte($row["cveTipoParte"]);
                    $tmp[$contador]->setCveTipoReligion($row["cveTipoReligion"]);
                    $tmp[$contador]->setFechaNacimiento($row["fechaNacimiento"]);
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
     * Modificar ofendidos carpetas
     */
    public function modificarOfendidoscarpetas($ofendidoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblofendidoscarpetas SET ";
        $sql.=" fechaActualizacion=NOW()";
        $sql.=" ,nombre='" . $ofendidoscarpetasDto->getnombre() . "'";
        $sql.=" ,paterno='" . $ofendidoscarpetasDto->getpaterno() . "'";
        $sql.=" ,materno='" . $ofendidoscarpetasDto->getmaterno() . "'";
        $sql.=" ,rfc='" . $ofendidoscarpetasDto->getrfc() . "'";
        $sql.=" ,curp='" . $ofendidoscarpetasDto->getcurp() . "'";
        $sql.=" ,cveOcupacion='" . $ofendidoscarpetasDto->getcveOcupacion() . "'";
        $sql.=" ,cveTipoPersona='" . $ofendidoscarpetasDto->getcveTipoPersona() . "'";
        $sql.=" ,cveGenero='" . $ofendidoscarpetasDto->getcveGenero() . "'";
        $sql.=" ,cveTipoParte='" . $ofendidoscarpetasDto->getCveTipoParte() . "'";
        if ( $ofendidoscarpetasDto->getCveTipoReligion() != "" && (int) $ofendidoscarpetasDto->getCveTipoReligion() > 0 ) {
            $sql.=" ,cveTipoReligion='" . $ofendidoscarpetasDto->getCveTipoReligion() . "'";
        }
        $sql.=" ,fechaNacimiento='" . $ofendidoscarpetasDto->getfechaNacimiento() . "'";
        $sql.=" ,edad='" . $ofendidoscarpetasDto->getedad() . "'";
        $sql.=" ,cvePaisNacimiento='" . $ofendidoscarpetasDto->getcvePaisNacimiento() . "'";
        $sql.=" ,cveEstadoNacimiento='" . $ofendidoscarpetasDto->getcveEstadoNacimiento() . "'";
        $sql.=" ,estadoNacimiento='" . $ofendidoscarpetasDto->getestadoNacimiento() . "'";
        $sql.=" ,cveMunicipioNacimiento='" . $ofendidoscarpetasDto->getcveMunicipioNacimiento() . "'";
        $sql.=" ,municipioNacimiento='" . $ofendidoscarpetasDto->getmunicipioNacimiento() . "'";
        $sql.=" ,cveEstadoCivil='" . $ofendidoscarpetasDto->getcveEstadoCivil() . "'";
        $sql.=" ,cveAlfabetismo='" . $ofendidoscarpetasDto->getcveAlfabetismo() . "'";
        $sql.=" ,cveNivelInstruccion='" . $ofendidoscarpetasDto->getcveNivelInstruccion() . "'";
        $sql.=" ,cveEspanol='" . $ofendidoscarpetasDto->getcveEspanol() . "'";
        $sql.=" ,cveDialectoIndigena='" . $ofendidoscarpetasDto->getcveDialectoIndigena() . "'";
        $sql.=" ,cveTipoFamiliaLinguistica='" . $ofendidoscarpetasDto->getcveTipoFamiliaLinguistica() . "'";
        $sql.=" ,cveInterprete='" . $ofendidoscarpetasDto->getcveInterprete() . "'";        
        $sql.=" ,cveOrdenProteccion='" . $ofendidoscarpetasDto->getcveOrdenProteccion() . "'";
        $sql.=" ,cveEstadoPsicofisico='" . $ofendidoscarpetasDto->getcveEstadoPsicofisico() . "'";
        $sql.=" ,nombreMoral='" . $ofendidoscarpetasDto->getnombreMoral() . "'";
        $sql.=" ,cveVictimaDeLaDelincuenciaOrganizada='" . $ofendidoscarpetasDto->getcveVictimaDeLaDelincuenciaOrganizada() . "'";
        $sql.=" ,cveVictimaDeViolenciaDeGenero='" . $ofendidoscarpetasDto->getcveVictimaDeViolenciaDeGenero() . "'";
        $sql.=" ,cveVictimaDeTrata='" . $ofendidoscarpetasDto->getcveVictimaDeTrata() . "'";
        $sql.=" ,cveVictimaDeAcoso='" . $ofendidoscarpetasDto->getCveVictimaDeAcoso() . "'";
        $sql.=" ,desaparecido='" . $ofendidoscarpetasDto->getdesaparecido() . "'";
        $sql.=" ,numHijos='" . $ofendidoscarpetasDto->getnumHijos() . "'";
        $sql.=" ,embarazada='" . $ofendidoscarpetasDto->getembarazada() . "'";
        $sql.=" ,cveGrupoEdnico='" . $ofendidoscarpetasDto->getcveGrupoEdnico() . "'";
        $sql.=" WHERE idOfendidoCarpeta='" . $ofendidoscarpetasDto->getIdOfendidoCarpeta() . "'";
        //print_r($sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new OfendidoscarpetasDTO();
            $tmp->setidOfendidoCarpeta($ofendidoscarpetasDto->getIdOfendidoCarpeta());
            $tmp = $this->selectOfendidoscarpetas($tmp, "", $this->_proveedor);
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
     * para eliminar el ofendido por el campo idOfendidoCarpeta se se modifica el campo activo a 'N'
     * @param $ofendidoscarpetasDto
     * @param null $proveedor
     * @return bool
     */
    public function eliminarOfendidoByIdOfendidoCarpeta($ofendidoscarpetasDto, $proveedor = null)
    {
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblofendidoscarpetas SET activo='N', fechaActualizacion=NOW()";

        $sql .= " WHERE idOfendidoCarpeta='" . $ofendidoscarpetasDto->getIdOfendidoCarpeta() . "'";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new OfendidoscarpetasDTO();
            $tmp->setIdOfendidoCarpeta($ofendidoscarpetasDto->getIdOfendidoCarpeta());
            $tmp = $this->selectOfendidoscarpetas($tmp, "", $this->_proveedor);
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        unset($sql);
        return $tmp;
    }
    //Seleccionar Ofendidos
     public function ConsultarOfendidoscarpetas($ofendidoscarpetasDto,$proveedor = null, $orden = "", $param = null, $fields = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
    
          //-->
        $sql = "SELECT";

        if ($fields === null) {
            $sql .= " idOfendidoCarpeta,idCarpetaJudicial,activo,fechaRegistro,fechaActualizacion,nombre,paterno,materno,rfc,curp,cveOcupacion,cveTipoPersona,cveGenero,cveTipoParte,cveTipoReligion,fechaNacimiento,edad,cvePaisNacimiento,cveEstadoNacimiento,estadoNacimiento,cveMunicipioNacimiento,municipioNacimiento,cveEstadoCivil,cveAlfabetismo,cveNivelInstruccion,cveEspanol,cveDialectoIndigena,cveTipoFamiliaLinguistica,cveInterprete,cveOrdenProteccion,cveEstadoPsicofisico,nombreMoral,cveVictimaDeLaDelincuenciaOrganizada,cveVictimaDeViolenciaDeGenero,cveVictimaDeTrata,desaparecido,numHijos,embarazada,cveGrupoEdnico ";
        } else {
            $sql .= $fields;
}

        $sql .= "FROM tblofendidoscarpetas"; //<--

        if (($ofendidoscarpetasDto->getidOfendidoCarpeta() != "") || ($ofendidoscarpetasDto->getidCarpetaJudicial() != "") || ($ofendidoscarpetasDto->getactivo() != "") || ($ofendidoscarpetasDto->getfechaRegistro() != "") || ($ofendidoscarpetasDto->getfechaActualizacion() != "") || ($ofendidoscarpetasDto->getnombre() != "") || ($ofendidoscarpetasDto->getpaterno() != "") || ($ofendidoscarpetasDto->getmaterno() != "") || ($ofendidoscarpetasDto->getrfc() != "") || ($ofendidoscarpetasDto->getcurp() != "") || ($ofendidoscarpetasDto->getcveOcupacion() != "") || ($ofendidoscarpetasDto->getcveTipoPersona() != "") || ($ofendidoscarpetasDto->getcveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getfechaNacimiento() != "") || ($ofendidoscarpetasDto->getedad() != "") || ($ofendidoscarpetasDto->getcvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getcveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getestadoNacimiento() != "") || ($ofendidoscarpetasDto->getcveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getmunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getcveEstadoCivil() != "") || ($ofendidoscarpetasDto->getcveAlfabetismo() != "") || ($ofendidoscarpetasDto->getcveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getcveEspanol() != "") || ($ofendidoscarpetasDto->getcveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getcveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getcveInterprete() != "") || ($ofendidoscarpetasDto->getcveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getcveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getnombreMoral() != "") || ($ofendidoscarpetasDto->getcveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getcveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getcveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getdesaparecido() != "") || ($ofendidoscarpetasDto->getnumHijos() != "") || ($ofendidoscarpetasDto->getembarazada() != "") || ($ofendidoscarpetasDto->getcveGrupoEdnico() != "")) {
            $sql.=" WHERE ";
        }
        if ($ofendidoscarpetasDto->getidOfendidoCarpeta() != "") {
            $sql.="idOfendidoCarpeta='" . $ofendidoscarpetasDto->getIdOfendidoCarpeta() . "'";
            if (($ofendidoscarpetasDto->getIdCarpetaJudicial() != "") || ($ofendidoscarpetasDto->getActivo() != "") || ($ofendidoscarpetasDto->getFechaRegistro() != "") || ($ofendidoscarpetasDto->getFechaActualizacion() != "") || ($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getidCarpetaJudicial() != "") {
            $sql.="idCarpetaJudicial='" . $ofendidoscarpetasDto->getIdCarpetaJudicial() . "'";
            if (($ofendidoscarpetasDto->getActivo() != "") || ($ofendidoscarpetasDto->getFechaRegistro() != "") || ($ofendidoscarpetasDto->getFechaActualizacion() != "") || ($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getactivo() != "") {
            $sql.="activo='" . $ofendidoscarpetasDto->getActivo() . "'";
            if (($ofendidoscarpetasDto->getFechaRegistro() != "") || ($ofendidoscarpetasDto->getFechaActualizacion() != "") || ($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $ofendidoscarpetasDto->getFechaRegistro() . "'";
            if (($ofendidoscarpetasDto->getFechaActualizacion() != "") || ($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $ofendidoscarpetasDto->getFechaActualizacion() . "'";
            if (($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getnombre() != "") {
            $sql.="nombre='" . $ofendidoscarpetasDto->getNombre() . "'";
            if (($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getpaterno() != "") {
            $sql.="paterno='" . $ofendidoscarpetasDto->getPaterno() . "'";
            if (($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getmaterno() != "") {
            $sql.="materno='" . $ofendidoscarpetasDto->getMaterno() . "'";
            if (($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getrfc() != "") {
            $sql.="rfc='" . $ofendidoscarpetasDto->getRfc() . "'";
            if (($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcurp() != "") {
            $sql.="curp='" . $ofendidoscarpetasDto->getCurp() . "'";
            if (($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveOcupacion() != "") {
            $sql.="cveOcupacion='" . $ofendidoscarpetasDto->getCveOcupacion() . "'";
            if (($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveTipoPersona() != "") {
            $sql.="cveTipoPersona='" . $ofendidoscarpetasDto->getCveTipoPersona() . "'";
            if (($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveGenero() != "") {
            $sql.="cveGenero='" . $ofendidoscarpetasDto->getCveGenero() . "'";
            if (($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getCveTipoParte() != "") {
            $sql.="cveTipoParte='" . $ofendidoscarpetasDto->getCveTipoParte() . "'";
            if (($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getCveTipoReligion() != "") {
            $sql.="cveTipoReligion='" . $ofendidoscarpetasDto->getCveTipoReligion() . "'";
            if (($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getfechaNacimiento() != "") {
            $sql.="fechaNacimiento='" . $ofendidoscarpetasDto->getFechaNacimiento() . "'";
            if (($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getedad() != "") {
            $sql.="edad='" . $ofendidoscarpetasDto->getEdad() . "'";
            if (($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcvePaisNacimiento() != "") {
            $sql.="cvePaisNacimiento='" . $ofendidoscarpetasDto->getCvePaisNacimiento() . "'";
            if (($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveEstadoNacimiento() != "") {
            $sql.="cveEstadoNacimiento='" . $ofendidoscarpetasDto->getCveEstadoNacimiento() . "'";
            if (($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getestadoNacimiento() != "") {
            $sql.="estadoNacimiento='" . $ofendidoscarpetasDto->getEstadoNacimiento() . "'";
            if (($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveMunicipioNacimiento() != "") {
            $sql.="cveMunicipioNacimiento='" . $ofendidoscarpetasDto->getCveMunicipioNacimiento() . "'";
            if (($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getmunicipioNacimiento() != "") {
            $sql.="municipioNacimiento='" . $ofendidoscarpetasDto->getMunicipioNacimiento() . "'";
            if (($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveEstadoCivil() != "") {
            $sql.="cveEstadoCivil='" . $ofendidoscarpetasDto->getCveEstadoCivil() . "'";
            if (($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveAlfabetismo() != "") {
            $sql.="cveAlfabetismo='" . $ofendidoscarpetasDto->getCveAlfabetismo() . "'";
            if (($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveNivelInstruccion() != "") {
            $sql.="cveNivelInstruccion='" . $ofendidoscarpetasDto->getCveNivelInstruccion() . "'";
            if (($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveEspanol() != "") {
            $sql.="cveEspanol='" . $ofendidoscarpetasDto->getCveEspanol() . "'";
            if (($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveDialectoIndigena() != "") {
            $sql.="cveDialectoIndigena='" . $ofendidoscarpetasDto->getCveDialectoIndigena() . "'";
            if (($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveTipoFamiliaLinguistica() != "") {
            $sql.="cveTipoFamiliaLinguistica='" . $ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() . "'";
            if (($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveInterprete() != "") {
            $sql.="cveInterprete='" . $ofendidoscarpetasDto->getCveInterprete() . "'";
            if (($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveOrdenProteccion() != "") {
            $sql.="cveOrdenProteccion='" . $ofendidoscarpetasDto->getCveOrdenProteccion() . "'";
            if (($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveEstadoPsicofisico() != "") {
            $sql.="cveEstadoPsicofisico='" . $ofendidoscarpetasDto->getCveEstadoPsicofisico() . "'";
            if (($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getnombreMoral() != "") {
            $sql.="nombreMoral='" . $ofendidoscarpetasDto->getNombreMoral() . "'";
            if (($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveVictimaDeLaDelincuenciaOrganizada() != "") {
            $sql.="cveVictimaDeLaDelincuenciaOrganizada='" . $ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() . "'";
            if (($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveVictimaDeViolenciaDeGenero() != "") {
            $sql.="cveVictimaDeViolenciaDeGenero='" . $ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() . "'";
            if (($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveVictimaDeTrata() != "") {
            $sql.="cveVictimaDeTrata='" . $ofendidoscarpetasDto->getCveVictimaDeTrata() . "'";
            if (($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getdesaparecido() != "") {
            $sql.="desaparecido='" . $ofendidoscarpetasDto->getDesaparecido() . "'";
            if (($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getnumHijos() != "") {
            $sql.="numHijos='" . $ofendidoscarpetasDto->getNumHijos() . "'";
            if (($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getembarazada() != "") {
            $sql.="embarazada='" . $ofendidoscarpetasDto->getEmbarazada() . "'";
            if (($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveGrupoEdnico() != "") {
            $sql.="cveGrupoEdnico='" . $ofendidoscarpetasDto->getCveGrupoEdnico() . "'";
        }
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
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
                    $inicial = ($param["pag"] - 1) * $param["cantxPag"];
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

        //echo $sql.' ---Consulta--- ';//Prueba
        error_log("sql => ".$sql);// <----
        
          $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
        
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {

                    if ($fields === null) {
                    $tmp[$contador] = new OfendidoscarpetasDTO();
                    $tmp[$contador]->setIdOfendidoCarpeta($row["idOfendidoCarpeta"]);
                    $tmp[$contador]->setIdCarpetaJudicial($row["idCarpetaJudicial"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setNombre($row["nombre"]);
                    $tmp[$contador]->setPaterno($row["paterno"]);
                    $tmp[$contador]->setMaterno($row["materno"]);
                    $tmp[$contador]->setRfc($row["rfc"]);
                    $tmp[$contador]->setCurp($row["curp"]);
                    $tmp[$contador]->setCveOcupacion($row["cveOcupacion"]);
                    $tmp[$contador]->setCveTipoPersona($row["cveTipoPersona"]);
                    $tmp[$contador]->setCveGenero($row["cveGenero"]);
                    $tmp[$contador]->setCveTipoParte($row["cveTipoParte"]);
                    $tmp[$contador]->setCveTipoReligion($row["cveTipoReligion"]);
                    $tmp[$contador]->setFechaNacimiento($row["fechaNacimiento"]);
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
                    $tmp[$contador]->setDesaparecido($row["desaparecido"]);
                    $tmp[$contador]->setNumHijos($row["numHijos"]);
                    $tmp[$contador]->setEmbarazada($row["embarazada"]);
                    $tmp[$contador]->setCveGrupoEdnico($row["cveGrupoEdnico"]);
                    $contador++;
                    } else { // HSAY VA 
                            $tmp[$contador] = $row["totalCount"];
                            $contador++;
                    }
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
    
    //Seleccionar Ofendidos con Paginación
     public function selectOfendidoscarpetasPag($ofendidoscarpetasDto,$proveedor = null, $orden = "", $param = null, $fields = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        
          //-->
        $sql = "SELECT";

        if ($fields === null) {
            $sql .= " idOfendidoCarpeta,idCarpetaJudicial,activo,fechaRegistro,fechaActualizacion,nombre,paterno,materno,rfc,curp,cveOcupacion,cveTipoPersona,cveGenero,cveTipoParte,cveTipoReligion,fechaNacimiento,edad,cvePaisNacimiento,cveEstadoNacimiento,estadoNacimiento,cveMunicipioNacimiento,municipioNacimiento,cveEstadoCivil,cveAlfabetismo,cveNivelInstruccion,cveEspanol,cveDialectoIndigena,cveTipoFamiliaLinguistica,cveInterprete,cveOrdenProteccion,cveEstadoPsicofisico,nombreMoral,cveVictimaDeLaDelincuenciaOrganizada,cveVictimaDeViolenciaDeGenero,cveVictimaDeTrata,desaparecido,numHijos,embarazada,cveGrupoEdnico ";
        } else {
            $sql .= $fields;
        }

        $sql .= "FROM tblofendidoscarpetas"; //<--

        if (($ofendidoscarpetasDto->getidOfendidoCarpeta() != "") || ($ofendidoscarpetasDto->getidCarpetaJudicial() != "") || ($ofendidoscarpetasDto->getactivo() != "") || ($ofendidoscarpetasDto->getfechaRegistro() != "") || ($ofendidoscarpetasDto->getfechaActualizacion() != "") || ($ofendidoscarpetasDto->getnombre() != "") || ($ofendidoscarpetasDto->getpaterno() != "") || ($ofendidoscarpetasDto->getmaterno() != "") || ($ofendidoscarpetasDto->getrfc() != "") || ($ofendidoscarpetasDto->getcurp() != "") || ($ofendidoscarpetasDto->getcveOcupacion() != "") || ($ofendidoscarpetasDto->getcveTipoPersona() != "") || ($ofendidoscarpetasDto->getcveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getfechaNacimiento() != "") || ($ofendidoscarpetasDto->getedad() != "") || ($ofendidoscarpetasDto->getcvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getcveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getestadoNacimiento() != "") || ($ofendidoscarpetasDto->getcveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getmunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getcveEstadoCivil() != "") || ($ofendidoscarpetasDto->getcveAlfabetismo() != "") || ($ofendidoscarpetasDto->getcveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getcveEspanol() != "") || ($ofendidoscarpetasDto->getcveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getcveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getcveInterprete() != "") || ($ofendidoscarpetasDto->getcveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getcveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getnombreMoral() != "") || ($ofendidoscarpetasDto->getcveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getcveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getcveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getdesaparecido() != "") || ($ofendidoscarpetasDto->getnumHijos() != "") || ($ofendidoscarpetasDto->getembarazada() != "") || ($ofendidoscarpetasDto->getcveGrupoEdnico() != "")) {
            $sql.=" WHERE ";
        }
        if ($ofendidoscarpetasDto->getidOfendidoCarpeta() != "") {
            $sql.="idOfendidoCarpeta='" . $ofendidoscarpetasDto->getIdOfendidoCarpeta() . "'";
            if (($ofendidoscarpetasDto->getIdCarpetaJudicial() != "") || ($ofendidoscarpetasDto->getActivo() != "") || ($ofendidoscarpetasDto->getFechaRegistro() != "") || ($ofendidoscarpetasDto->getFechaActualizacion() != "") || ($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getidCarpetaJudicial() != "") {
            $sql.="idCarpetaJudicial='" . $ofendidoscarpetasDto->getIdCarpetaJudicial() . "'";
            if (($ofendidoscarpetasDto->getActivo() != "") || ($ofendidoscarpetasDto->getFechaRegistro() != "") || ($ofendidoscarpetasDto->getFechaActualizacion() != "") || ($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getactivo() != "") {
            $sql.="activo='" . $ofendidoscarpetasDto->getActivo() . "'";
            if (($ofendidoscarpetasDto->getFechaRegistro() != "") || ($ofendidoscarpetasDto->getFechaActualizacion() != "") || ($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $ofendidoscarpetasDto->getFechaRegistro() . "'";
            if (($ofendidoscarpetasDto->getFechaActualizacion() != "") || ($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $ofendidoscarpetasDto->getFechaActualizacion() . "'";
            if (($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getnombre() != "") {
            $sql.="nombre='" . $ofendidoscarpetasDto->getNombre() . "'";
            if (($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getpaterno() != "") {
            $sql.="paterno='" . $ofendidoscarpetasDto->getPaterno() . "'";
            if (($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getmaterno() != "") {
            $sql.="materno='" . $ofendidoscarpetasDto->getMaterno() . "'";
            if (($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getrfc() != "") {
            $sql.="rfc='" . $ofendidoscarpetasDto->getRfc() . "'";
            if (($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcurp() != "") {
            $sql.="curp='" . $ofendidoscarpetasDto->getCurp() . "'";
            if (($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveOcupacion() != "") {
            $sql.="cveOcupacion='" . $ofendidoscarpetasDto->getCveOcupacion() . "'";
            if (($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveTipoPersona() != "") {
            $sql.="cveTipoPersona='" . $ofendidoscarpetasDto->getCveTipoPersona() . "'";
            if (($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveGenero() != "") {
            $sql.="cveGenero='" . $ofendidoscarpetasDto->getCveGenero() . "'";
            if (($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getCveTipoParte() != "") {
            $sql.="cveTipoParte='" . $ofendidoscarpetasDto->getCveTipoParte() . "'";
            if (($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getCveTipoReligion() != "") {
            $sql.="cveTipoReligion='" . $ofendidoscarpetasDto->getCveTipoReligion() . "'";
            if (($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getfechaNacimiento() != "") {
            $sql.="fechaNacimiento='" . $ofendidoscarpetasDto->getFechaNacimiento() . "'";
            if (($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getedad() != "") {
            $sql.="edad='" . $ofendidoscarpetasDto->getEdad() . "'";
            if (($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcvePaisNacimiento() != "") {
            $sql.="cvePaisNacimiento='" . $ofendidoscarpetasDto->getCvePaisNacimiento() . "'";
            if (($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveEstadoNacimiento() != "") {
            $sql.="cveEstadoNacimiento='" . $ofendidoscarpetasDto->getCveEstadoNacimiento() . "'";
            if (($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getestadoNacimiento() != "") {
            $sql.="estadoNacimiento='" . $ofendidoscarpetasDto->getEstadoNacimiento() . "'";
            if (($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveMunicipioNacimiento() != "") {
            $sql.="cveMunicipioNacimiento='" . $ofendidoscarpetasDto->getCveMunicipioNacimiento() . "'";
            if (($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getmunicipioNacimiento() != "") {
            $sql.="municipioNacimiento='" . $ofendidoscarpetasDto->getMunicipioNacimiento() . "'";
            if (($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveEstadoCivil() != "") {
            $sql.="cveEstadoCivil='" . $ofendidoscarpetasDto->getCveEstadoCivil() . "'";
            if (($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveAlfabetismo() != "") {
            $sql.="cveAlfabetismo='" . $ofendidoscarpetasDto->getCveAlfabetismo() . "'";
            if (($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveNivelInstruccion() != "") {
            $sql.="cveNivelInstruccion='" . $ofendidoscarpetasDto->getCveNivelInstruccion() . "'";
            if (($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveEspanol() != "") {
            $sql.="cveEspanol='" . $ofendidoscarpetasDto->getCveEspanol() . "'";
            if (($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveDialectoIndigena() != "") {
            $sql.="cveDialectoIndigena='" . $ofendidoscarpetasDto->getCveDialectoIndigena() . "'";
            if (($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveTipoFamiliaLinguistica() != "") {
            $sql.="cveTipoFamiliaLinguistica='" . $ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() . "'";
            if (($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveInterprete() != "") {
            $sql.="cveInterprete='" . $ofendidoscarpetasDto->getCveInterprete() . "'";
            if (($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveOrdenProteccion() != "") {
            $sql.="cveOrdenProteccion='" . $ofendidoscarpetasDto->getCveOrdenProteccion() . "'";
            if (($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveEstadoPsicofisico() != "") {
            $sql.="cveEstadoPsicofisico='" . $ofendidoscarpetasDto->getCveEstadoPsicofisico() . "'";
            if (($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getnombreMoral() != "") {
            $sql.="nombreMoral='" . $ofendidoscarpetasDto->getNombreMoral() . "'";
            if (($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveVictimaDeLaDelincuenciaOrganizada() != "") {
            $sql.="cveVictimaDeLaDelincuenciaOrganizada='" . $ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() . "'";
            if (($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveVictimaDeViolenciaDeGenero() != "") {
            $sql.="cveVictimaDeViolenciaDeGenero='" . $ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() . "'";
            if (($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveVictimaDeTrata() != "") {
            $sql.="cveVictimaDeTrata='" . $ofendidoscarpetasDto->getCveVictimaDeTrata() . "'";
            if (($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getdesaparecido() != "") {
            $sql.="desaparecido='" . $ofendidoscarpetasDto->getDesaparecido() . "'";
            if (($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getnumHijos() != "") {
            $sql.="numHijos='" . $ofendidoscarpetasDto->getNumHijos() . "'";
            if (($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getembarazada() != "") {
            $sql.="embarazada='" . $ofendidoscarpetasDto->getEmbarazada() . "'";
            if (($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveGrupoEdnico() != "") {
            $sql.="cveGrupoEdnico='" . $ofendidoscarpetasDto->getCveGrupoEdnico() . "'";
        }
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
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
                    $inicial = ($param["pag"] - 1) * $param["cantxPag"];
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
                $sql.=" LIMIT " . $inicial . "," . ($param["cantxPag"]+1);
        }
        //echo $sql.' ---Consulta--- ';//Prueba
        error_log("sql => ".$sql);// <----
        
          $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
        
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {

                    if ($fields === null) {
                    $tmp[$contador] = new OfendidoscarpetasDTO();
                    $tmp[$contador]->setIdOfendidoCarpeta($row["idOfendidoCarpeta"]);
                    $tmp[$contador]->setIdCarpetaJudicial($row["idCarpetaJudicial"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setNombre($row["nombre"]);
                    $tmp[$contador]->setPaterno($row["paterno"]);
                    $tmp[$contador]->setMaterno($row["materno"]);
                    $tmp[$contador]->setRfc($row["rfc"]);
                    $tmp[$contador]->setCurp($row["curp"]);
                    $tmp[$contador]->setCveOcupacion($row["cveOcupacion"]);
                    $tmp[$contador]->setCveTipoPersona($row["cveTipoPersona"]);
                    $tmp[$contador]->setCveGenero($row["cveGenero"]);
                    $tmp[$contador]->setCveTipoParte($row["cveTipoParte"]);
                    $tmp[$contador]->setCveTipoReligion($row["cveTipoReligion"]);
                    $tmp[$contador]->setFechaNacimiento($row["fechaNacimiento"]);
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
                    $tmp[$contador]->setDesaparecido($row["desaparecido"]);
                    $tmp[$contador]->setNumHijos($row["numHijos"]);
                    $tmp[$contador]->setEmbarazada($row["embarazada"]);
                    $tmp[$contador]->setCveGrupoEdnico($row["cveGrupoEdnico"]);
                    $contador++;
                    } else { // HSAY VA 
                            $tmp[$contador] = $row["totalCount"];
                            $contador++;
                    }
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
    
      //Seleccionar Ofendidos--Varias Tablas
     public function selectOfendidosVarios($ofendidoscarpetasDto,$proveedor = null, $orden = "", $param = null, $fields = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        
          //-->
        $sql = "SELECT";

        if ($fields === null) {
            $sql .= " idOfendidoCarpeta,idCarpetaJudicial,activo,fechaRegistro,fechaActualizacion,nombre,paterno,materno,rfc,curp,cveOcupacion,cveTipoPersona,cveGenero,cveTipoParte,cveTipoReligion,fechaNacimiento,edad,cvePaisNacimiento,cveEstadoNacimiento,estadoNacimiento,cveMunicipioNacimiento,municipioNacimiento,cveEstadoCivil,cveAlfabetismo,cveNivelInstruccion,cveEspanol,cveDialectoIndigena,cveTipoFamiliaLinguistica,cveInterprete,cveOrdenProteccion,cveEstadoPsicofisico,nombreMoral,cveVictimaDeLaDelincuenciaOrganizada,cveVictimaDeViolenciaDeGenero,cveVictimaDeTrata,desaparecido,numHijos,embarazada,cveGrupoEdnico ";
        } else {
            $sql .= $fields;
        }

        $sql .= " FROM tblofendidoscarpetas "; //<--

        if (($ofendidoscarpetasDto->getidOfendidoCarpeta() != "") || ($ofendidoscarpetasDto->getidCarpetaJudicial() != "") || ($ofendidoscarpetasDto->getactivo() != "") || ($ofendidoscarpetasDto->getfechaRegistro() != "") || ($ofendidoscarpetasDto->getfechaActualizacion() != "") || ($ofendidoscarpetasDto->getnombre() != "") || ($ofendidoscarpetasDto->getpaterno() != "") || ($ofendidoscarpetasDto->getmaterno() != "") || ($ofendidoscarpetasDto->getrfc() != "") || ($ofendidoscarpetasDto->getcurp() != "") || ($ofendidoscarpetasDto->getcveOcupacion() != "") || ($ofendidoscarpetasDto->getcveTipoPersona() != "") || ($ofendidoscarpetasDto->getcveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getfechaNacimiento() != "") || ($ofendidoscarpetasDto->getedad() != "") || ($ofendidoscarpetasDto->getcvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getcveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getestadoNacimiento() != "") || ($ofendidoscarpetasDto->getcveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getmunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getcveEstadoCivil() != "") || ($ofendidoscarpetasDto->getcveAlfabetismo() != "") || ($ofendidoscarpetasDto->getcveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getcveEspanol() != "") || ($ofendidoscarpetasDto->getcveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getcveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getcveInterprete() != "") || ($ofendidoscarpetasDto->getcveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getcveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getnombreMoral() != "") || ($ofendidoscarpetasDto->getcveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getcveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getcveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getdesaparecido() != "") || ($ofendidoscarpetasDto->getnumHijos() != "") || ($ofendidoscarpetasDto->getembarazada() != "") || ($ofendidoscarpetasDto->getcveGrupoEdnico() != "")) {
            $sql.=" WHERE ";
        }
        if ($ofendidoscarpetasDto->getidOfendidoCarpeta() != "") {
            $sql.="idOfendidoCarpeta='" . $ofendidoscarpetasDto->getIdOfendidoCarpeta() . "'";
            if (($ofendidoscarpetasDto->getIdCarpetaJudicial() != "") || ($ofendidoscarpetasDto->getActivo() != "") || ($ofendidoscarpetasDto->getFechaRegistro() != "") || ($ofendidoscarpetasDto->getFechaActualizacion() != "") || ($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getidCarpetaJudicial() != "") {
            $sql.="idCarpetaJudicial='" . $ofendidoscarpetasDto->getIdCarpetaJudicial() . "'";
            if (($ofendidoscarpetasDto->getActivo() != "") || ($ofendidoscarpetasDto->getFechaRegistro() != "") || ($ofendidoscarpetasDto->getFechaActualizacion() != "") || ($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getactivo() != "") {
            $sql.="activo='" . $ofendidoscarpetasDto->getActivo() . "'";
            if (($ofendidoscarpetasDto->getFechaRegistro() != "") || ($ofendidoscarpetasDto->getFechaActualizacion() != "") || ($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $ofendidoscarpetasDto->getFechaRegistro() . "'";
            if (($ofendidoscarpetasDto->getFechaActualizacion() != "") || ($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $ofendidoscarpetasDto->getFechaActualizacion() . "'";
            if (($ofendidoscarpetasDto->getNombre() != "") || ($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getnombre() != "") {
            $sql.="nombre='" . $ofendidoscarpetasDto->getNombre() . "'";
            if (($ofendidoscarpetasDto->getPaterno() != "") || ($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getpaterno() != "") {
            $sql.="paterno='" . $ofendidoscarpetasDto->getPaterno() . "'";
            if (($ofendidoscarpetasDto->getMaterno() != "") || ($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getmaterno() != "") {
            $sql.="materno='" . $ofendidoscarpetasDto->getMaterno() . "'";
            if (($ofendidoscarpetasDto->getRfc() != "") || ($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getrfc() != "") {
            $sql.="rfc='" . $ofendidoscarpetasDto->getRfc() . "'";
            if (($ofendidoscarpetasDto->getCurp() != "") || ($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcurp() != "") {
            $sql.="curp='" . $ofendidoscarpetasDto->getCurp() . "'";
            if (($ofendidoscarpetasDto->getCveOcupacion() != "") || ($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveOcupacion() != "") {
            $sql.="cveOcupacion='" . $ofendidoscarpetasDto->getCveOcupacion() . "'";
            if (($ofendidoscarpetasDto->getCveTipoPersona() != "") || ($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveTipoPersona() != "") {
            $sql.="cveTipoPersona='" . $ofendidoscarpetasDto->getCveTipoPersona() . "'";
            if (($ofendidoscarpetasDto->getCveGenero() != "") || ($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveGenero() != "") {
            $sql.="cveGenero='" . $ofendidoscarpetasDto->getCveGenero() . "'";
            if (($ofendidoscarpetasDto->getCveTipoParte() != "") || ($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getCveTipoParte() != "") {
            $sql.="cveTipoParte='" . $ofendidoscarpetasDto->getCveTipoParte() . "'";
            if (($ofendidoscarpetasDto->getCveTipoReligion() != "") || ($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getCveTipoReligion() != "") {
            $sql.="cveTipoReligion='" . $ofendidoscarpetasDto->getCveTipoReligion() . "'";
            if (($ofendidoscarpetasDto->getFechaNacimiento() != "") || ($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getfechaNacimiento() != "") {
            $sql.="fechaNacimiento='" . $ofendidoscarpetasDto->getFechaNacimiento() . "'";
            if (($ofendidoscarpetasDto->getEdad() != "") || ($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getedad() != "") {
            $sql.="edad='" . $ofendidoscarpetasDto->getEdad() . "'";
            if (($ofendidoscarpetasDto->getCvePaisNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcvePaisNacimiento() != "") {
            $sql.="cvePaisNacimiento='" . $ofendidoscarpetasDto->getCvePaisNacimiento() . "'";
            if (($ofendidoscarpetasDto->getCveEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveEstadoNacimiento() != "") {
            $sql.="cveEstadoNacimiento='" . $ofendidoscarpetasDto->getCveEstadoNacimiento() . "'";
            if (($ofendidoscarpetasDto->getEstadoNacimiento() != "") || ($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getestadoNacimiento() != "") {
            $sql.="estadoNacimiento='" . $ofendidoscarpetasDto->getEstadoNacimiento() . "'";
            if (($ofendidoscarpetasDto->getCveMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveMunicipioNacimiento() != "") {
            $sql.="cveMunicipioNacimiento='" . $ofendidoscarpetasDto->getCveMunicipioNacimiento() . "'";
            if (($ofendidoscarpetasDto->getMunicipioNacimiento() != "") || ($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getmunicipioNacimiento() != "") {
            $sql.="municipioNacimiento='" . $ofendidoscarpetasDto->getMunicipioNacimiento() . "'";
            if (($ofendidoscarpetasDto->getCveEstadoCivil() != "") || ($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveEstadoCivil() != "") {
            $sql.="cveEstadoCivil='" . $ofendidoscarpetasDto->getCveEstadoCivil() . "'";
            if (($ofendidoscarpetasDto->getCveAlfabetismo() != "") || ($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveAlfabetismo() != "") {
            $sql.="cveAlfabetismo='" . $ofendidoscarpetasDto->getCveAlfabetismo() . "'";
            if (($ofendidoscarpetasDto->getCveNivelInstruccion() != "") || ($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveNivelInstruccion() != "") {
            $sql.="cveNivelInstruccion='" . $ofendidoscarpetasDto->getCveNivelInstruccion() . "'";
            if (($ofendidoscarpetasDto->getCveEspanol() != "") || ($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveEspanol() != "") {
            $sql.="cveEspanol='" . $ofendidoscarpetasDto->getCveEspanol() . "'";
            if (($ofendidoscarpetasDto->getCveDialectoIndigena() != "") || ($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveDialectoIndigena() != "") {
            $sql.="cveDialectoIndigena='" . $ofendidoscarpetasDto->getCveDialectoIndigena() . "'";
            if (($ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() != "") || ($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveTipoFamiliaLinguistica() != "") {
            $sql.="cveTipoFamiliaLinguistica='" . $ofendidoscarpetasDto->getCveTipoFamiliaLinguistica() . "'";
            if (($ofendidoscarpetasDto->getCveInterprete() != "") || ($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveInterprete() != "") {
            $sql.="cveInterprete='" . $ofendidoscarpetasDto->getCveInterprete() . "'";
            if (($ofendidoscarpetasDto->getCveOrdenProteccion() != "") || ($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveOrdenProteccion() != "") {
            $sql.="cveOrdenProteccion='" . $ofendidoscarpetasDto->getCveOrdenProteccion() . "'";
            if (($ofendidoscarpetasDto->getCveEstadoPsicofisico() != "") || ($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveEstadoPsicofisico() != "") {
            $sql.="cveEstadoPsicofisico='" . $ofendidoscarpetasDto->getCveEstadoPsicofisico() . "'";
            if (($ofendidoscarpetasDto->getNombreMoral() != "") || ($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getnombreMoral() != "") {
            $sql.="nombreMoral='" . $ofendidoscarpetasDto->getNombreMoral() . "'";
            if (($ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() != "") || ($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveVictimaDeLaDelincuenciaOrganizada() != "") {
            $sql.="cveVictimaDeLaDelincuenciaOrganizada='" . $ofendidoscarpetasDto->getCveVictimaDeLaDelincuenciaOrganizada() . "'";
            if (($ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() != "") || ($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveVictimaDeViolenciaDeGenero() != "") {
            $sql.="cveVictimaDeViolenciaDeGenero='" . $ofendidoscarpetasDto->getCveVictimaDeViolenciaDeGenero() . "'";
            if (($ofendidoscarpetasDto->getCveVictimaDeTrata() != "") || ($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveVictimaDeTrata() != "") {
            $sql.="cveVictimaDeTrata='" . $ofendidoscarpetasDto->getCveVictimaDeTrata() . "'";
            if (($ofendidoscarpetasDto->getDesaparecido() != "") || ($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getdesaparecido() != "") {
            $sql.="desaparecido='" . $ofendidoscarpetasDto->getDesaparecido() . "'";
            if (($ofendidoscarpetasDto->getNumHijos() != "") || ($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getnumHijos() != "") {
            $sql.="numHijos='" . $ofendidoscarpetasDto->getNumHijos() . "'";
            if (($ofendidoscarpetasDto->getEmbarazada() != "") || ($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getembarazada() != "") {
            $sql.="embarazada='" . $ofendidoscarpetasDto->getEmbarazada() . "'";
            if (($ofendidoscarpetasDto->getCveGrupoEdnico() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofendidoscarpetasDto->getcveGrupoEdnico() != "") {
            $sql.="cveGrupoEdnico='" . $ofendidoscarpetasDto->getCveGrupoEdnico() . "'";
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
                    $inicial = ($param["pag"] - 1) * $param["cantxPag"];
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
                $sql.=" LIMIT " . $inicial . "," . ($param["cantxPag"]);
        }
       //echo $sql.' ---Consulta--- ';//Prueba
        error_log("sql => ".$sql);// <----
        
          $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                $numField= mysqli_num_fields($this->_proveedor->stmt);
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($fields === null) {        
                        
                    $tmp[$contador] = new OfendidoscarpetasDTO();
                    $tmp[$contador]->setIdOfendidoCarpeta($row["idOfendidoCarpeta"]);
                    $tmp[$contador]->setIdCarpetaJudicial($row["idCarpetaJudicial"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setNombre($row["nombre"]);
                    $tmp[$contador]->setPaterno($row["paterno"]);
                    $tmp[$contador]->setMaterno($row["materno"]);
                    $tmp[$contador]->setRfc($row["rfc"]);
                    $tmp[$contador]->setCurp($row["curp"]);
                    $tmp[$contador]->setCveOcupacion($row["cveOcupacion"]);
                    $tmp[$contador]->setCveTipoPersona($row["cveTipoPersona"]);
                    $tmp[$contador]->setCveGenero($row["cveGenero"]);
                    $tmp[$contador]->setCveTipoParte($row["cveTipoParte"]);
                    $tmp[$contador]->setCveTipoReligion($row["cveTipoReligion"]);
                    $tmp[$contador]->setFechaNacimiento($row["fechaNacimiento"]);
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
                    $tmp[$contador]->setDesaparecido($row["desaparecido"]);
                    $tmp[$contador]->setNumHijos($row["numHijos"]);
                    $tmp[$contador]->setEmbarazada($row["embarazada"]);
                    $tmp[$contador]->setCveGrupoEdnico($row["cveGrupoEdnico"]);
                    //$contador++;
                    }       
                    else{
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