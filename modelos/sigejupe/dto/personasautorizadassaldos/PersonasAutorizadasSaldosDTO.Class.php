<?php

/**
 * Class: PersonasAutorizadasSaldos - PersonasAutorizadasSaldos.php 
 *
 * @author Esaud Israel <@e_israel> on Feb 9, 2016 11:51:05 AM
 * @version 1.0
 */

class PersonasAutorizadasSaldosDTO {
    
    private $idPersonaAutorizadaSaldo;
    private $idPersonaAutorizada;
    private $saldo;
    private $referencia;
    private $activo;
    private $fechaActualizacion;
    private $fechaRegistro;
    
    function __construct() {
        
    }
    
    function getIdPersonaAutorizadaSaldo() {
        return $this->idPersonaAutorizadaSaldo;
    }

    function getIdPersonaAutorizada() {
        return $this->idPersonaAutorizada;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function getReferencia() {
        return $this->referencia;
    }

    function getActivo() {
        return $this->activo;
    }

    function getFechaActualizacion() {
        return $this->fechaActualizacion;
    }

    function getFechaRegistro() {
        return $this->fechaRegistro;
    }

    function setIdPersonaAutorizadaSaldo($idPersonaAutorizadaSaldo) {
        $this->idPersonaAutorizadaSaldo = $idPersonaAutorizadaSaldo;
        return $this;
    }

    function setIdPersonaAutorizada($idPersonaAutorizada) {
        $this->idPersonaAutorizada = $idPersonaAutorizada;
        return $this;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
        return $this;
    }

    function setReferencia($referencia) {
        $this->referencia = $referencia;
        return $this;
    }

    function setActivo($activo) {
        $this->activo = $activo;
        return $this;
    }

    function setFechaActualizacion($fechaActualizacion) {
        $this->fechaActualizacion = $fechaActualizacion;
        return $this;
    }

    function setFechaRegistro($fechaRegistro) {
        $this->fechaRegistro = $fechaRegistro;
        return $this;
    }



    
}

?>