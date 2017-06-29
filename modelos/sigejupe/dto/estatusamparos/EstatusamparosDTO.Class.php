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

class EstatusamparosDTO {

    private $cveEstatusAmparo;
    private $desEstatus;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;

    public function getCveEstatusAmparo() {
        return $this->cveEstatusAmparo;
    }

    public function setCveEstatusAmparo($cveEstatusAmparo) {
        $this->cveEstatusAmparo = $cveEstatusAmparo;
    }

    public function getDesEstatus() {
        return $this->desEstatus;
    }

    public function setDesEstatus($desEstatus) {
        $this->desEstatus = $desEstatus;
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
        return array("cveEstatusAmparo" => $this->cveEstatusAmparo,
            "desEstatus" => $this->desEstatus,
            "activo" => $this->activo,
            "fechaRegistro" => $this->fechaRegistro,
            "fechaActualizacion" => $this->fechaActualizacion);
    }

}

?>