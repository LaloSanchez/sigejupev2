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

class TiemposesperasolicitudesDTO {

    private $idTiempoEsperaSolicitud;
    private $munitosEspera;
    private $cveTipoSolicitud;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;

    public function getIdTiempoEsperaSolicitud() {
        return $this->idTiempoEsperaSolicitud;
    }

    public function setIdTiempoEsperaSolicitud($idTiempoEsperaSolicitud) {
        $this->idTiempoEsperaSolicitud = $idTiempoEsperaSolicitud;
    }

    public function getMunitosEspera() {
        return $this->munitosEspera;
    }

    public function setMunitosEspera($munitosEspera) {
        $this->munitosEspera = $munitosEspera;
    }

    public function getCveTipoSolicitud() {
        return $this->cveTipoSolicitud;
    }

    public function setCveTipoSolicitud($cveTipoSolicitud) {
        $this->cveTipoSolicitud = $cveTipoSolicitud;
    }

    public function getActivo() {
        return $this->activo;
    }

    public function setActivo($activo) {
        $this->activo = $activo;
    }

    public function getFechaRegistro() {
        return $this->fechaRegistro;
    }

    public function setFechaRegistro($fechaRegistro) {
        $this->fechaRegistro = $fechaRegistro;
    }

    public function getFechaActualizacion() {
        return $this->fechaActualizacion;
    }

    public function setFechaActualizacion($fechaActualizacion) {
        $this->fechaActualizacion = $fechaActualizacion;
    }

    public function toString() {
        return array("idTiempoEsperaSolicitud" => $this->idTiempoEsperaSolicitud,
            "munitosEspera" => $this->munitosEspera,
            "cveTipoSolicitud" => $this->cveTipoSolicitud,
            "activo" => $this->activo,
            "fechaRegistro" => $this->fechaRegistro,
            "fechaActualizacion" => $this->fechaActualizacion);
    }

}

?>