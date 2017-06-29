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

class MuestrasDTO {

    private $cveMuestra;
    private $desMuestra;
    private $Tipo;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;

    public function getCveMuestra() {
        return $this->cveMuestra;
    }

    public function setCveMuestra($cveMuestra) {
        $this->cveMuestra = $cveMuestra;
    }

    public function getDesMuestra() {
        return $this->desMuestra;
    }

    public function setDesMuestra($desMuestra) {
        $this->desMuestra = $desMuestra;
    }

    public function getTipo() {
        return $this->Tipo;
    }

    public function setTipo($Tipo) {
        $this->Tipo = $Tipo;
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
        return array(
            "cveMuestra" => $this->cveMuestra,
            "desMuestra" => utf8_encode($this->desMuestra),
            "Tipo" => $this->Tipo,
            "activo" => $this->activo,
            "fechaRegistro" => $this->fechaRegistro,
            "fechaActualizacion" => $this->fechaActualizacion
        );
    }

}

?>