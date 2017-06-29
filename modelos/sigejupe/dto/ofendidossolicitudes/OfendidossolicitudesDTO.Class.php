<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 DTOS
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Teclogias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */

class OfendidossolicitudesDTO {

    private $idOfendidoSolicitud;
    private $idSolicitudAudiencia;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    private $nombre;
    private $paterno;
    private $materno;
    private $rfc;
    private $curp;
    private $fechaNacimiento;
    private $cveOcupacion;
    private $cveTipoPersona;
    private $desTipoPersona;
    private $cveGenero;
    private $desGenero;
    private $cveTipoParte;
    private $cveTipoReligion;
    private $edad;
    private $cvePaisNacimiento;
    private $cveEstadoNacimiento;
    private $estadoNacimiento;
    private $cveMunicipioNacimiento;
    private $municipioNacimiento;
    private $cveEstadoCivil;
    private $cveAlfabetismo;
    private $cveNivelInstruccion;
    private $cveEspanol;
    private $cveDialectoIndigena;
    private $cveTipoFamiliaLinguistica;
    private $cveInterprete;
    private $cveOrdenProteccion;
    private $cveEstadoPsicofisico;
    private $cveNacionalidad;
    private $nombreMoral;
    private $cveVictimaDeLaDelincuenciaOrganizada;
    private $cveVictimaDeViolenciaDeGenero;
    private $cveVictimaDeTrata;
    private $cveVictimaDeAcoso;
    private $desaparecido;
    private $numHijos;
    private $embarazada;
    private $cveGrupoEdnico;

    public function getIdOfendidoSolicitud()
    {
        return $this->idOfendidoSolicitud;
    }

    public function setIdOfendidoSolicitud($idOfendidoSolicitud)
    {
        $this->idOfendidoSolicitud = $idOfendidoSolicitud;
    }

    public function getIdSolicitudAudiencia()
    {
        return $this->idSolicitudAudiencia;
    }

    public function setIdSolicitudAudiencia($idSolicitudAudiencia)
    {
        $this->idSolicitudAudiencia = $idSolicitudAudiencia;
    }

    public function getActivo()
    {
        return $this->activo;
    }

    public function setActivo($activo)
    {
        $this->activo = $activo;
    }

    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }

    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;
    }

    public function getFechaActualizacion()
    {
        return $this->fechaActualizacion;
    }

    public function setFechaActualizacion($fechaActualizacion)
    {
        $this->fechaActualizacion = $fechaActualizacion;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getPaterno()
    {
        return $this->paterno;
    }

    public function setPaterno($paterno)
    {
        $this->paterno = $paterno;
    }

    public function getMaterno()
    {
        return $this->materno;
    }

    public function setMaterno($materno)
    {
        $this->materno = $materno;
    }

    public function getRfc()
    {
        return $this->rfc;
    }

    public function setRfc($rfc)
    {
        $this->rfc = $rfc;
    }

    public function getCurp()
    {
        return $this->curp;
    }

    public function setCurp($curp)
    {
        $this->curp = $curp;
    }

    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function getCveOcupacion()
    {
        return $this->cveOcupacion;
    }

    public function setCveOcupacion($cveOcupacion)
    {
        $this->cveOcupacion = $cveOcupacion;
    }

    public function getCveTipoPersona()
    {
        return $this->cveTipoPersona;
    }

    public function setCveTipoPersona($cveTipoPersona)
    {
        $this->cveTipoPersona = $cveTipoPersona;
    }

    public function getCveGenero()
    {
        return $this->cveGenero;
    }

    public function setCveGenero($cveGenero)
    {
        $this->cveGenero = $cveGenero;
    }

    /**
     * @return mixed
     */
    public function getCveTipoParte()
    {
        return $this->cveTipoParte;
    }

    /**
     * @param mixed $cveTipoParte
     */
    public function setCveTipoParte($cveTipoParte)
    {
        $this->cveTipoParte = $cveTipoParte;
    }

    /**
     * @return mixed
     */
    public function getCveTipoReligion()
    {
        return $this->cveTipoReligion;
    }

    /**
     * @param mixed $cveTipoReligion
     */
    public function setCveTipoReligion($cveTipoReligion)
    {
        $this->cveTipoReligion = $cveTipoReligion;
    }


    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    public function getCvePaisNacimiento()
    {
        return $this->cvePaisNacimiento;
    }

    public function setCvePaisNacimiento($cvePaisNacimiento)
    {
        $this->cvePaisNacimiento = $cvePaisNacimiento;
    }

    public function getCveEstadoNacimiento()
    {
        return $this->cveEstadoNacimiento;
    }

    public function setCveEstadoNacimiento($cveEstadoNacimiento)
    {
        $this->cveEstadoNacimiento = $cveEstadoNacimiento;
    }

    public function getEstadoNacimiento()
    {
        return $this->estadoNacimiento;
    }

    public function setEstadoNacimiento($estadoNacimiento)
    {
        $this->estadoNacimiento = $estadoNacimiento;
    }

    public function getCveMunicipioNacimiento()
    {
        return $this->cveMunicipioNacimiento;
    }

    public function setCveMunicipioNacimiento($cveMunicipioNacimiento)
    {
        $this->cveMunicipioNacimiento = $cveMunicipioNacimiento;
    }

    public function getMunicipioNacimiento()
    {
        return $this->municipioNacimiento;
    }

    public function setMunicipioNacimiento($municipioNacimiento)
    {
        $this->municipioNacimiento = $municipioNacimiento;
    }

    public function getCveEstadoCivil()
    {
        return $this->cveEstadoCivil;
    }

    public function setCveEstadoCivil($cveEstadoCivil)
    {
        $this->cveEstadoCivil = $cveEstadoCivil;
    }

    public function getCveAlfabetismo()
    {
        return $this->cveAlfabetismo;
    }

    public function setCveAlfabetismo($cveAlfabetismo)
    {
        $this->cveAlfabetismo = $cveAlfabetismo;
    }

    public function getCveNivelInstruccion()
    {
        return $this->cveNivelInstruccion;
    }

    public function setCveNivelInstruccion($cveNivelInstruccion)
    {
        $this->cveNivelInstruccion = $cveNivelInstruccion;
    }

    public function getCveEspanol()
    {
        return $this->cveEspanol;
    }

    public function setCveEspanol($cveEspanol)
    {
        $this->cveEspanol = $cveEspanol;
    }

    public function getCveDialectoIndigena()
    {
        return $this->cveDialectoIndigena;
    }

    public function setCveDialectoIndigena($cveDialectoIndigena)
    {
        $this->cveDialectoIndigena = $cveDialectoIndigena;
    }

    public function getCveTipoFamiliaLinguistica()
    {
        return $this->cveTipoFamiliaLinguistica;
    }

    public function setCveTipoFamiliaLinguistica($cveTipoFamiliaLinguistica)
    {
        $this->cveTipoFamiliaLinguistica = $cveTipoFamiliaLinguistica;
    }

    public function getCveInterprete()
    {
        return $this->cveInterprete;
    }

    public function setCveInterprete($cveInterprete)
    {
        $this->cveInterprete = $cveInterprete;
    }

    public function getCveOrdenProteccion()
    {
        return $this->cveOrdenProteccion;
    }

    public function setCveOrdenProteccion($cveOrdenProteccion)
    {
        $this->cveOrdenProteccion = $cveOrdenProteccion;
    }

    public function getCveEstadoPsicofisico()
    {
        return $this->cveEstadoPsicofisico;
    }

    public function setCveEstadoPsicofisico($cveEstadoPsicofisico)
    {
        $this->cveEstadoPsicofisico = $cveEstadoPsicofisico;
    }

    public function getCveNacionalidad()
    {
        return $this->cveNacionalidad;
    }

    public function setCveNacionalidad($cveNacionalidad)
    {
        $this->cveNacionalidad = $cveNacionalidad;
    }

    public function getNombreMoral()
    {
        return $this->nombreMoral;
    }

    public function setNombreMoral($nombreMoral)
    {
        $this->nombreMoral = $nombreMoral;
    }

    public function getCveVictimaDeLaDelincuenciaOrganizada()
    {
        return $this->cveVictimaDeLaDelincuenciaOrganizada;
    }

    public function setCveVictimaDeLaDelincuenciaOrganizada($cveVictimaDeLaDelincuenciaOrganizada)
    {
        $this->cveVictimaDeLaDelincuenciaOrganizada = $cveVictimaDeLaDelincuenciaOrganizada;
    }

    public function getCveVictimaDeViolenciaDeGenero()
    {
        return $this->cveVictimaDeViolenciaDeGenero;
    }

    public function setCveVictimaDeViolenciaDeGenero($cveVictimaDeViolenciaDeGenero)
    {
        $this->cveVictimaDeViolenciaDeGenero = $cveVictimaDeViolenciaDeGenero;
    }

    public function getCveVictimaDeTrata()
    {
        return $this->cveVictimaDeTrata;
    }

    public function setCveVictimaDeTrata($cveVictimaDeTrata)
    {
        $this->cveVictimaDeTrata = $cveVictimaDeTrata;
    }


    /**
     * @return mixed
     */
    public function getCveVictimaDeAcoso()
    {
        return $this->cveVictimaDeAcoso;
    }

    /**
     * @param mixed $cveVictimaDeAcoso
     */
    public function setCveVictimaDeAcoso($cveVictimaDeAcoso)
    {
        $this->cveVictimaDeAcoso = $cveVictimaDeAcoso;
    }


    public function getDesaparecido()
    {
        return $this->desaparecido;
    }

    public function setDesaparecido($desaparecido)
    {
        $this->desaparecido = $desaparecido;
    }

    public function getNumHijos()
    {
        return $this->numHijos;
    }

    public function setNumHijos($numHijos)
    {
        $this->numHijos = $numHijos;
    }

    public function getEmbarazada()
    {
        return $this->embarazada;
    }

    public function setEmbarazada($embarazada)
    {
        $this->embarazada = $embarazada;
    }

    public function getCveGrupoEdnico()
    {
        return $this->cveGrupoEdnico;
    }

    public function setCveGrupoEdnico($cveGrupoEdnico)
    {
        $this->cveGrupoEdnico = $cveGrupoEdnico;
    }

    /**
     * @return mixed
     */
    public function getDesTipoPersona()
    {
        return $this->desTipoPersona;
    }

    /**
     * @param mixed $desTipoPersona
     */
    public function setDesTipoPersona($desTipoPersona)
    {
        $this->desTipoPersona = $desTipoPersona;
    }

    /**
     * @return mixed
     */
    public function getDesGenero()
    {
        return $this->desGenero;
    }

    /**
     * @param mixed $desGenero
     */
    public function setDesGenero($desGenero)
    {
        $this->desGenero = $desGenero;
    }


    public function toString()
    {
        return array("idOfendidoSolicitud"                  => $this->idOfendidoSolicitud,
                     "idSolicitudAudiencia"                 => $this->idSolicitudAudiencia,
                     "activo"                               => $this->activo,
                     "fechaRegistro"                        => $this->fechaRegistro,
                     "fechaActualizacion"                   => $this->fechaActualizacion,
                     "nombre"                               => $this->nombre,
                     "paterno"                              => $this->paterno,
                     "materno"                              => $this->materno,
                     "rfc"                                  => $this->rfc,
                     "curp"                                 => $this->curp,
                     "fechaNacimiento"                      => $this->fechaNacimiento,
                     "cveOcupacion"                         => $this->cveOcupacion,
                     "cveTipoPersona"                       => $this->cveTipoPersona,
                     "desTipoPersona"                       => $this->desTipoPersona,
                     "cveGenero"                            => $this->cveGenero,
                     "desGenero"                            => $this->desGenero,
                     "cveTipoParte"                         => $this->cveTipoParte,
                     "cveTipoReligion"                      => $this->cveTipoReligion,
                     "edad"                                 => $this->edad,
                     "cvePaisNacimiento"                    => $this->cvePaisNacimiento,
                     "cveEstadoNacimiento"                  => $this->cveEstadoNacimiento,
                     "estadoNacimiento"                     => $this->estadoNacimiento,
                     "cveMunicipioNacimiento"               => $this->cveMunicipioNacimiento,
                     "municipioNacimiento"                  => $this->municipioNacimiento,
                     "cveEstadoCivil"                       => $this->cveEstadoCivil,
                     "cveAlfabetismo"                       => $this->cveAlfabetismo,
                     "cveNivelInstruccion"                  => $this->cveNivelInstruccion,
                     "cveEspanol"                           => $this->cveEspanol,
                     "cveDialectoIndigena"                  => $this->cveDialectoIndigena,
                     "cveTipoFamiliaLinguistica"            => $this->cveTipoFamiliaLinguistica,
                     "cveInterprete"                        => $this->cveInterprete,
                     "cveOrdenProteccion"                   => $this->cveOrdenProteccion,
                     "cveEstadoPsicofisico"                 => $this->cveEstadoPsicofisico,
                     "cveNacionalidad"                      => $this->cveNacionalidad,
                     "nombreMoral"                          => $this->nombreMoral,
                     "cveVictimaDeLaDelincuenciaOrganizada" => $this->cveVictimaDeLaDelincuenciaOrganizada,
                     "cveVictimaDeViolenciaDeGenero"        => $this->cveVictimaDeViolenciaDeGenero,
                     "cveVictimaDeTrata"                    => $this->cveVictimaDeTrata,
                     "cveVictimaDeAcoso"                    => $this->cveVictimaDeAcoso,
                     "desaparecido"                         => $this->desaparecido,
                     "numHijos"                             => $this->numHijos,
                     "embarazada"                           => $this->embarazada,
                     "cveGrupoEdnico"                       => $this->cveGrupoEdnico);
    }


}

