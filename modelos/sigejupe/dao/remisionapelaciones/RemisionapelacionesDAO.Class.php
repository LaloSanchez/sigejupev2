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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/remisionapelaciones/RemisionapelacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class RemisionapelacionesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertRemisionapelaciones($remisionapelacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblremisionapelaciones(";
        if ($remisionapelacionesDto->getIdRemisionApelacion() != "") {
            $sql.="idRemisionApelacion";
            if (($remisionapelacionesDto->getIdActuacion() != "") || ($remisionapelacionesDto->getIdOficio() != "") || ($remisionapelacionesDto->getIdResolucionCombatida() != "") || ($remisionapelacionesDto->getOtraResolucionCombatida() != "") || ($remisionapelacionesDto->getCveCatResolucionCombatida() != "") || ($remisionapelacionesDto->getCveRecurso() != "") || ($remisionapelacionesDto->getCveEfecto() != "") || ($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getIdActuacion() != "") {
            $sql.="idActuacion";
            if (($remisionapelacionesDto->getIdOficio() != "") || ($remisionapelacionesDto->getIdResolucionCombatida() != "") || ($remisionapelacionesDto->getOtraResolucionCombatida() != "") || ($remisionapelacionesDto->getCveCatResolucionCombatida() != "") || ($remisionapelacionesDto->getCveRecurso() != "") || ($remisionapelacionesDto->getCveEfecto() != "") || ($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getIdOficio() != "") {
            $sql.="idOficio";
            if (($remisionapelacionesDto->getIdResolucionCombatida() != "") || ($remisionapelacionesDto->getOtraResolucionCombatida() != "") || ($remisionapelacionesDto->getCveCatResolucionCombatida() != "") || ($remisionapelacionesDto->getCveRecurso() != "") || ($remisionapelacionesDto->getCveEfecto() != "") || ($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getIdResolucionCombatida() != "") {
            $sql.="idResolucionCombatida";
            if (($remisionapelacionesDto->getOtraResolucionCombatida() != "") || ($remisionapelacionesDto->getCveCatResolucionCombatida() != "") || ($remisionapelacionesDto->getCveRecurso() != "") || ($remisionapelacionesDto->getCveEfecto() != "") || ($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getOtraResolucionCombatida() != "") {
            $sql.="otraResolucionCombatida";
            if (($remisionapelacionesDto->getCveCatResolucionCombatida() != "") || ($remisionapelacionesDto->getCveRecurso() != "") || ($remisionapelacionesDto->getCveEfecto() != "") || ($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getCveCatResolucionCombatida() != "") {
            $sql.="cveCatResolucionCombatida";
            if (($remisionapelacionesDto->getCveRecurso() != "") || ($remisionapelacionesDto->getCveEfecto() != "") || ($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getCveRecurso() != "") {
            $sql.="cveRecurso";
            if (($remisionapelacionesDto->getCveEfecto() != "") || ($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getCveEfecto() != "") {
            $sql.="cveEfecto";
            if (($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getAgravios() != "") {
            $sql.="agravios";
            if (($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getFecCorreTraslado() != "") {
            $sql.="fecCorreTraslado";
            if (($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getFecInterponeRecurso() != "") {
            $sql.="fecInterponeRecurso";
            if (($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getFecNotificaSenAut() != "") {
            $sql.="fecNotificaSenAut";
            if (($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getFecAdhesion() != "") {
            $sql.="fecAdhesion";
            if (($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getEmplazamiento() != "") {
            $sql.="emplazamiento";
            if (($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getCveSentido() != "") {
            $sql.="cveSentido";
            if (($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getActivo() != "") {
            $sql.="activo";
            if (($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getIdActuacionCopia() != "") {
            $sql.="idActuacionCopia";
            if (($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "") {
            $sql.="idResolucionesCarpetasCombatidas";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($remisionapelacionesDto->getIdRemisionApelacion() != "") {
            $sql.="'" . $remisionapelacionesDto->getIdRemisionApelacion() . "'";
            if (($remisionapelacionesDto->getIdActuacion() != "") || ($remisionapelacionesDto->getIdOficio() != "") || ($remisionapelacionesDto->getIdResolucionCombatida() != "") || ($remisionapelacionesDto->getOtraResolucionCombatida() != "") || ($remisionapelacionesDto->getCveCatResolucionCombatida() != "") || ($remisionapelacionesDto->getCveRecurso() != "") || ($remisionapelacionesDto->getCveEfecto() != "") || ($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getIdActuacion() != "") {
            $sql.="'" . $remisionapelacionesDto->getIdActuacion() . "'";
            if (($remisionapelacionesDto->getIdOficio() != "") || ($remisionapelacionesDto->getIdResolucionCombatida() != "") || ($remisionapelacionesDto->getOtraResolucionCombatida() != "") || ($remisionapelacionesDto->getCveCatResolucionCombatida() != "") || ($remisionapelacionesDto->getCveRecurso() != "") || ($remisionapelacionesDto->getCveEfecto() != "") || ($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getIdOficio() != "") {
            $sql.="'" . $remisionapelacionesDto->getIdOficio() . "'";
            if (($remisionapelacionesDto->getIdResolucionCombatida() != "") || ($remisionapelacionesDto->getOtraResolucionCombatida() != "") || ($remisionapelacionesDto->getCveCatResolucionCombatida() != "") || ($remisionapelacionesDto->getCveRecurso() != "") || ($remisionapelacionesDto->getCveEfecto() != "") || ($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getIdResolucionCombatida() != "") {
            $sql.="'" . $remisionapelacionesDto->getIdResolucionCombatida() . "'";
            if (($remisionapelacionesDto->getOtraResolucionCombatida() != "") || ($remisionapelacionesDto->getCveCatResolucionCombatida() != "") || ($remisionapelacionesDto->getCveRecurso() != "") || ($remisionapelacionesDto->getCveEfecto() != "") || ($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getOtraResolucionCombatida() != "") {
            $sql.="'" . $remisionapelacionesDto->getOtraResolucionCombatida() . "'";
            if (($remisionapelacionesDto->getCveCatResolucionCombatida() != "") || ($remisionapelacionesDto->getCveRecurso() != "") || ($remisionapelacionesDto->getCveEfecto() != "") || ($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getCveCatResolucionCombatida() != "") {
            $sql.="'" . $remisionapelacionesDto->getCveCatResolucionCombatida() . "'";
            if (($remisionapelacionesDto->getCveRecurso() != "") || ($remisionapelacionesDto->getCveEfecto() != "") || ($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getCveRecurso() != "") {
            $sql.="'" . $remisionapelacionesDto->getCveRecurso() . "'";
            if (($remisionapelacionesDto->getCveEfecto() != "") || ($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getCveEfecto() != "") {
            $sql.="'" . $remisionapelacionesDto->getCveEfecto() . "'";
            if (($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getAgravios() != "") {
            $sql.="'" . $remisionapelacionesDto->getAgravios() . "'";
            if (($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getFecCorreTraslado() != "") {
            $sql.="'" . $remisionapelacionesDto->getFecCorreTraslado() . "'";
            if (($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getFecInterponeRecurso() != "") {
            $sql.="'" . $remisionapelacionesDto->getFecInterponeRecurso() . "'";
            if (($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getFecNotificaSenAut() != "") {
            $sql.="'" . $remisionapelacionesDto->getFecNotificaSenAut() . "'";
            if (($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getFecAdhesion() != "") {
            $sql.="'" . $remisionapelacionesDto->getFecAdhesion() . "'";
            if (($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getEmplazamiento() != "") {
            $sql.="'" . $remisionapelacionesDto->getEmplazamiento() . "'";
            if (($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getCveSentido() != "") {
            $sql.="'" . $remisionapelacionesDto->getCveSentido() . "'";
            if (($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getActivo() != "") {
            $sql.="'" . $remisionapelacionesDto->getActivo() . "'";
            if (($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getFechaRegistro() != "") {
            if (($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getFechaActualizacion() != "") {
            if (($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getIdActuacionCopia() != "") {
            $sql.="'" . $remisionapelacionesDto->getIdActuacionCopia() . "'";
            if (($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "") {
            $sql.="'" . $remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() . "'";
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new RemisionapelacionesDTO();
            $tmp->setidRemisionApelacion($this->_proveedor->lastID());
            $tmp = $this->selectRemisionapelaciones($tmp, "", $this->_proveedor);
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

    public function updateRemisionapelaciones($remisionapelacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblremisionapelaciones SET ";
        if ($remisionapelacionesDto->getIdRemisionApelacion() != "") {
            $sql.="idRemisionApelacion='" . $remisionapelacionesDto->getIdRemisionApelacion() . "'";
            if (($remisionapelacionesDto->getIdActuacion() != "") || ($remisionapelacionesDto->getIdOficio() != "") || ($remisionapelacionesDto->getIdResolucionCombatida() != "") || ($remisionapelacionesDto->getOtraResolucionCombatida() != "") || ($remisionapelacionesDto->getCveCatResolucionCombatida() != "") || ($remisionapelacionesDto->getCveRecurso() != "") || ($remisionapelacionesDto->getCveEfecto() != "") || ($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getIdActuacion() != "") {
            $sql.="idActuacion='" . $remisionapelacionesDto->getIdActuacion() . "'";
            if (($remisionapelacionesDto->getIdOficio() != "") || ($remisionapelacionesDto->getIdResolucionCombatida() != "") || ($remisionapelacionesDto->getOtraResolucionCombatida() != "") || ($remisionapelacionesDto->getCveCatResolucionCombatida() != "") || ($remisionapelacionesDto->getCveRecurso() != "") || ($remisionapelacionesDto->getCveEfecto() != "") || ($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getIdOficio() != "") {
            $sql.="idOficio='" . $remisionapelacionesDto->getIdOficio() . "'";
            if (($remisionapelacionesDto->getIdResolucionCombatida() != "") || ($remisionapelacionesDto->getOtraResolucionCombatida() != "") || ($remisionapelacionesDto->getCveCatResolucionCombatida() != "") || ($remisionapelacionesDto->getCveRecurso() != "") || ($remisionapelacionesDto->getCveEfecto() != "") || ($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getIdResolucionCombatida() != "") {
            $sql.="idResolucionCombatida='" . $remisionapelacionesDto->getIdResolucionCombatida() . "'";
            if (($remisionapelacionesDto->getOtraResolucionCombatida() != "") || ($remisionapelacionesDto->getCveCatResolucionCombatida() != "") || ($remisionapelacionesDto->getCveRecurso() != "") || ($remisionapelacionesDto->getCveEfecto() != "") || ($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getOtraResolucionCombatida() != "") {
            $sql.="otraResolucionCombatida='" . $remisionapelacionesDto->getOtraResolucionCombatida() . "'";
            if (($remisionapelacionesDto->getCveCatResolucionCombatida() != "") || ($remisionapelacionesDto->getCveRecurso() != "") || ($remisionapelacionesDto->getCveEfecto() != "") || ($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getCveCatResolucionCombatida() != "") {
            $sql.="cveCatResolucionCombatida='" . $remisionapelacionesDto->getCveCatResolucionCombatida() . "'";
            if (($remisionapelacionesDto->getCveRecurso() != "") || ($remisionapelacionesDto->getCveEfecto() != "") || ($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getCveRecurso() != "") {
            $sql.="cveRecurso='" . $remisionapelacionesDto->getCveRecurso() . "'";
            if (($remisionapelacionesDto->getCveEfecto() != "") || ($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getCveEfecto() != "") {
            $sql.="cveEfecto='" . $remisionapelacionesDto->getCveEfecto() . "'";
            if (($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getAgravios() != "") {
            $sql.="agravios='" . $remisionapelacionesDto->getAgravios() . "'";
            if (($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getFecCorreTraslado() != "") {
            $sql.="fecCorreTraslado='" . $remisionapelacionesDto->getFecCorreTraslado() . "'";
            if (($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getFecInterponeRecurso() != "") {
            $sql.="fecInterponeRecurso='" . $remisionapelacionesDto->getFecInterponeRecurso() . "'";
            if (($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getFecNotificaSenAut() != "") {
            $sql.="fecNotificaSenAut='" . $remisionapelacionesDto->getFecNotificaSenAut() . "'";
            if (($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getFecAdhesion() != "") {
            $sql.="fecAdhesion='" . $remisionapelacionesDto->getFecAdhesion() . "'";
            if (($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getEmplazamiento() != "") {
            $sql.="emplazamiento='" . $remisionapelacionesDto->getEmplazamiento() . "'";
            if (($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getCveSentido() != "") {
            $sql.="cveSentido='" . $remisionapelacionesDto->getCveSentido() . "'";
            if (($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getActivo() != "") {
            $sql.="activo='" . $remisionapelacionesDto->getActivo() . "'";
            if (($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $remisionapelacionesDto->getFechaRegistro() . "'";
            if (($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $remisionapelacionesDto->getFechaActualizacion() . "'";
            if (($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getIdActuacionCopia() != "") {
            $sql.="idActuacionCopia='" . $remisionapelacionesDto->getIdActuacionCopia() . "'";
            if (($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "") {
            $sql.="idResolucionesCarpetasCombatidas='" . $remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() . "'";
        }
        $sql.=" WHERE idRemisionApelacion='" . $remisionapelacionesDto->getIdRemisionApelacion() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new RemisionapelacionesDTO();
            $tmp->setidRemisionApelacion($remisionapelacionesDto->getIdRemisionApelacion());
            $tmp = $this->selectRemisionapelaciones($tmp, "", $this->_proveedor);
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

    public function deleteRemisionapelaciones($remisionapelacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblremisionapelaciones  WHERE idRemisionApelacion='" . $remisionapelacionesDto->getIdRemisionApelacion() . "'";
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

    public function selectRemisionapelaciones($remisionapelacionesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idRemisionApelacion,idActuacion,idOficio,idResolucionCombatida,otraResolucionCombatida,cveCatResolucionCombatida,cveRecurso,cveEfecto,agravios,fecCorreTraslado,fecInterponeRecurso,fecNotificaSenAut,fecAdhesion,emplazamiento,cveSentido,activo,fechaRegistro,fechaActualizacion,idActuacionCopia,idResolucionesCarpetasCombatidas FROM tblremisionapelaciones ";
        if (($remisionapelacionesDto->getIdRemisionApelacion() != "") || ($remisionapelacionesDto->getIdActuacion() != "") || ($remisionapelacionesDto->getIdOficio() != "") || ($remisionapelacionesDto->getIdResolucionCombatida() != "") || ($remisionapelacionesDto->getOtraResolucionCombatida() != "") || ($remisionapelacionesDto->getCveCatResolucionCombatida() != "") || ($remisionapelacionesDto->getCveRecurso() != "") || ($remisionapelacionesDto->getCveEfecto() != "") || ($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
            $sql.=" WHERE ";
        }
        if ($remisionapelacionesDto->getIdRemisionApelacion() != "") {
            $sql.="idRemisionApelacion='" . $remisionapelacionesDto->getIdRemisionApelacion() . "'";
            if (($remisionapelacionesDto->getIdActuacion() != "") || ($remisionapelacionesDto->getIdOficio() != "") || ($remisionapelacionesDto->getIdResolucionCombatida() != "") || ($remisionapelacionesDto->getOtraResolucionCombatida() != "") || ($remisionapelacionesDto->getCveCatResolucionCombatida() != "") || ($remisionapelacionesDto->getCveRecurso() != "") || ($remisionapelacionesDto->getCveEfecto() != "") || ($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($remisionapelacionesDto->getIdActuacion() != "") {
            $sql.="idActuacion='" . $remisionapelacionesDto->getIdActuacion() . "'";
            if (($remisionapelacionesDto->getIdOficio() != "") || ($remisionapelacionesDto->getIdResolucionCombatida() != "") || ($remisionapelacionesDto->getOtraResolucionCombatida() != "") || ($remisionapelacionesDto->getCveCatResolucionCombatida() != "") || ($remisionapelacionesDto->getCveRecurso() != "") || ($remisionapelacionesDto->getCveEfecto() != "") || ($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($remisionapelacionesDto->getIdOficio() != "") {
            $sql.="idOficio='" . $remisionapelacionesDto->getIdOficio() . "'";
            if (($remisionapelacionesDto->getIdResolucionCombatida() != "") || ($remisionapelacionesDto->getOtraResolucionCombatida() != "") || ($remisionapelacionesDto->getCveCatResolucionCombatida() != "") || ($remisionapelacionesDto->getCveRecurso() != "") || ($remisionapelacionesDto->getCveEfecto() != "") || ($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($remisionapelacionesDto->getIdResolucionCombatida() != "") {
            $sql.="idResolucionCombatida='" . $remisionapelacionesDto->getIdResolucionCombatida() . "'";
            if (($remisionapelacionesDto->getOtraResolucionCombatida() != "") || ($remisionapelacionesDto->getCveCatResolucionCombatida() != "") || ($remisionapelacionesDto->getCveRecurso() != "") || ($remisionapelacionesDto->getCveEfecto() != "") || ($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($remisionapelacionesDto->getOtraResolucionCombatida() != "") {
            $sql.="otraResolucionCombatida='" . $remisionapelacionesDto->getOtraResolucionCombatida() . "'";
            if (($remisionapelacionesDto->getCveCatResolucionCombatida() != "") || ($remisionapelacionesDto->getCveRecurso() != "") || ($remisionapelacionesDto->getCveEfecto() != "") || ($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($remisionapelacionesDto->getCveCatResolucionCombatida() != "") {
            $sql.="cveCatResolucionCombatida='" . $remisionapelacionesDto->getCveCatResolucionCombatida() . "'";
            if (($remisionapelacionesDto->getCveRecurso() != "") || ($remisionapelacionesDto->getCveEfecto() != "") || ($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($remisionapelacionesDto->getCveRecurso() != "") {
            $sql.="cveRecurso='" . $remisionapelacionesDto->getCveRecurso() . "'";
            if (($remisionapelacionesDto->getCveEfecto() != "") || ($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($remisionapelacionesDto->getCveEfecto() != "") {
            $sql.="cveEfecto='" . $remisionapelacionesDto->getCveEfecto() . "'";
            if (($remisionapelacionesDto->getAgravios() != "") || ($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($remisionapelacionesDto->getAgravios() != "") {
            $sql.="agravios='" . $remisionapelacionesDto->getAgravios() . "'";
            if (($remisionapelacionesDto->getFecCorreTraslado() != "") || ($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($remisionapelacionesDto->getFecCorreTraslado() != "") {
            $sql.="fecCorreTraslado='" . $remisionapelacionesDto->getFecCorreTraslado() . "'";
            if (($remisionapelacionesDto->getFecInterponeRecurso() != "") || ($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($remisionapelacionesDto->getFecInterponeRecurso() != "") {
            $sql.="fecInterponeRecurso='" . $remisionapelacionesDto->getFecInterponeRecurso() . "'";
            if (($remisionapelacionesDto->getFecNotificaSenAut() != "") || ($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($remisionapelacionesDto->getFecNotificaSenAut() != "") {
            $sql.="fecNotificaSenAut='" . $remisionapelacionesDto->getFecNotificaSenAut() . "'";
            if (($remisionapelacionesDto->getFecAdhesion() != "") || ($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($remisionapelacionesDto->getFecAdhesion() != "") {
            $sql.="fecAdhesion='" . $remisionapelacionesDto->getFecAdhesion() . "'";
            if (($remisionapelacionesDto->getEmplazamiento() != "") || ($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($remisionapelacionesDto->getEmplazamiento() != "") {
            $sql.="emplazamiento='" . $remisionapelacionesDto->getEmplazamiento() . "'";
            if (($remisionapelacionesDto->getCveSentido() != "") || ($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($remisionapelacionesDto->getCveSentido() != "") {
            $sql.="cveSentido='" . $remisionapelacionesDto->getCveSentido() . "'";
            if (($remisionapelacionesDto->getActivo() != "") || ($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($remisionapelacionesDto->getActivo() != "") {
            $sql.="activo='" . $remisionapelacionesDto->getActivo() . "'";
            if (($remisionapelacionesDto->getFechaRegistro() != "") || ($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($remisionapelacionesDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $remisionapelacionesDto->getFechaRegistro() . "'";
            if (($remisionapelacionesDto->getFechaActualizacion() != "") || ($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($remisionapelacionesDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $remisionapelacionesDto->getFechaActualizacion() . "'";
            if (($remisionapelacionesDto->getIdActuacionCopia() != "") || ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($remisionapelacionesDto->getIdActuacionCopia() != "") {
            $sql.="idActuacionCopia='" . $remisionapelacionesDto->getIdActuacionCopia() . "'";
            if (($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() != "") {
            $sql.="idResolucionesCarpetasCombatidas='" . $remisionapelacionesDto->getIdResolucionesCarpetasCombatidas() . "'";
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
                    $tmp[$contador] = new RemisionapelacionesDTO();
                    $tmp[$contador]->setIdRemisionApelacion($row["idRemisionApelacion"]);
                    $tmp[$contador]->setIdActuacion($row["idActuacion"]);
                    $tmp[$contador]->setIdOficio($row["idOficio"]);
                    $tmp[$contador]->setIdResolucionCombatida($row["idResolucionCombatida"]);
                    $tmp[$contador]->setOtraResolucionCombatida($row["otraResolucionCombatida"]);
                    $tmp[$contador]->setCveCatResolucionCombatida($row["cveCatResolucionCombatida"]);
                    $tmp[$contador]->setCveRecurso($row["cveRecurso"]);
                    $tmp[$contador]->setCveEfecto($row["cveEfecto"]);
                    $tmp[$contador]->setAgravios($row["agravios"]);
                    $tmp[$contador]->setFecCorreTraslado($row["fecCorreTraslado"]);
                    $tmp[$contador]->setFecInterponeRecurso($row["fecInterponeRecurso"]);
                    $tmp[$contador]->setFecNotificaSenAut($row["fecNotificaSenAut"]);
                    $tmp[$contador]->setFecAdhesion($row["fecAdhesion"]);
                    $tmp[$contador]->setEmplazamiento($row["emplazamiento"]);
                    $tmp[$contador]->setCveSentido($row["cveSentido"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setIdActuacionCopia($row["idActuacionCopia"]);
                    $tmp[$contador]->setIdResolucionesCarpetasCombatidas($row["idResolucionesCarpetasCombatidas"]);
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

public function actualizarRemisionapelaciones($remisionapelacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblremisionapelaciones SET ";
if($remisionapelacionesDto->getIdRemisionApelacion()!=""){
$sql.="idRemisionApelacion='".$remisionapelacionesDto->getIdRemisionApelacion()."'";
if(($remisionapelacionesDto->getIdActuacion()!="") ||($remisionapelacionesDto->getIdOficio()!="") ||($remisionapelacionesDto->getIdResolucionCombatida()!="") ||($remisionapelacionesDto->getOtraResolucionCombatida()!="") ||($remisionapelacionesDto->getCveCatResolucionCombatida()!="") ||($remisionapelacionesDto->getCveRecurso()!="") ||($remisionapelacionesDto->getCveEfecto()!="") ||($remisionapelacionesDto->getAgravios()!="") ||($remisionapelacionesDto->getFecCorreTraslado()!="") ||($remisionapelacionesDto->getFecInterponeRecurso()!="") ||($remisionapelacionesDto->getFecNotificaSenAut()!="") ||($remisionapelacionesDto->getFecAdhesion()!="") ||($remisionapelacionesDto->getEmplazamiento()!="") ||($remisionapelacionesDto->getCveSentido()!="") ||($remisionapelacionesDto->getActivo()!="") ||($remisionapelacionesDto->getFechaRegistro()!="") ||($remisionapelacionesDto->getFechaActualizacion()!="") ||($remisionapelacionesDto->getIdActuacionCopia()!="") ||($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas()!="") ){
$sql.=",";
}
}
if($remisionapelacionesDto->getIdActuacion()!=""){
$sql.="idActuacion='".$remisionapelacionesDto->getIdActuacion()."'";
if(($remisionapelacionesDto->getIdOficio()!="") ||($remisionapelacionesDto->getIdResolucionCombatida()!="") ||($remisionapelacionesDto->getOtraResolucionCombatida()!="") ||($remisionapelacionesDto->getCveCatResolucionCombatida()!="") ||($remisionapelacionesDto->getCveRecurso()!="") ||($remisionapelacionesDto->getCveEfecto()!="") ||($remisionapelacionesDto->getAgravios()!="") ||($remisionapelacionesDto->getFecCorreTraslado()!="") ||($remisionapelacionesDto->getFecInterponeRecurso()!="") ||($remisionapelacionesDto->getFecNotificaSenAut()!="") ||($remisionapelacionesDto->getFecAdhesion()!="") ||($remisionapelacionesDto->getEmplazamiento()!="") ||($remisionapelacionesDto->getCveSentido()!="") ||($remisionapelacionesDto->getActivo()!="") ||($remisionapelacionesDto->getFechaRegistro()!="") ||($remisionapelacionesDto->getFechaActualizacion()!="") ||($remisionapelacionesDto->getIdActuacionCopia()!="") ||($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas()!="") ){
$sql.=",";
}
}
if($remisionapelacionesDto->getIdOficio()!=""){
$sql.="idOficio='".$remisionapelacionesDto->getIdOficio()."'";
if(($remisionapelacionesDto->getIdResolucionCombatida()!="") ||($remisionapelacionesDto->getOtraResolucionCombatida()!="") ||($remisionapelacionesDto->getCveCatResolucionCombatida()!="") ||($remisionapelacionesDto->getCveRecurso()!="") ||($remisionapelacionesDto->getCveEfecto()!="") ||($remisionapelacionesDto->getAgravios()!="") ||($remisionapelacionesDto->getFecCorreTraslado()!="") ||($remisionapelacionesDto->getFecInterponeRecurso()!="") ||($remisionapelacionesDto->getFecNotificaSenAut()!="") ||($remisionapelacionesDto->getFecAdhesion()!="") ||($remisionapelacionesDto->getEmplazamiento()!="") ||($remisionapelacionesDto->getCveSentido()!="") ||($remisionapelacionesDto->getActivo()!="") ||($remisionapelacionesDto->getFechaRegistro()!="") ||($remisionapelacionesDto->getFechaActualizacion()!="") ||($remisionapelacionesDto->getIdActuacionCopia()!="") ||($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas()!="") ){
$sql.=",";
}
}
if($remisionapelacionesDto->getIdResolucionCombatida()!=""){
$sql.="idResolucionCombatida='".$remisionapelacionesDto->getIdResolucionCombatida()."'";
if(($remisionapelacionesDto->getOtraResolucionCombatida()!="") ||($remisionapelacionesDto->getCveCatResolucionCombatida()!="") ||($remisionapelacionesDto->getCveRecurso()!="") ||($remisionapelacionesDto->getCveEfecto()!="") ||($remisionapelacionesDto->getAgravios()!="") ||($remisionapelacionesDto->getFecCorreTraslado()!="") ||($remisionapelacionesDto->getFecInterponeRecurso()!="") ||($remisionapelacionesDto->getFecNotificaSenAut()!="") ||($remisionapelacionesDto->getFecAdhesion()!="") ||($remisionapelacionesDto->getEmplazamiento()!="") ||($remisionapelacionesDto->getCveSentido()!="") ||($remisionapelacionesDto->getActivo()!="") ||($remisionapelacionesDto->getFechaRegistro()!="") ||($remisionapelacionesDto->getFechaActualizacion()!="") ||($remisionapelacionesDto->getIdActuacionCopia()!="") ||($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas()!="") ){
$sql.=",";
}
}
if($remisionapelacionesDto->getOtraResolucionCombatida()!=""){
$sql.="otraResolucionCombatida='".$remisionapelacionesDto->getOtraResolucionCombatida()."'";
if(($remisionapelacionesDto->getCveCatResolucionCombatida()!="") ||($remisionapelacionesDto->getCveRecurso()!="") ||($remisionapelacionesDto->getCveEfecto()!="") ||($remisionapelacionesDto->getAgravios()!="") ||($remisionapelacionesDto->getFecCorreTraslado()!="") ||($remisionapelacionesDto->getFecInterponeRecurso()!="") ||($remisionapelacionesDto->getFecNotificaSenAut()!="") ||($remisionapelacionesDto->getFecAdhesion()!="") ||($remisionapelacionesDto->getEmplazamiento()!="") ||($remisionapelacionesDto->getCveSentido()!="") ||($remisionapelacionesDto->getActivo()!="") ||($remisionapelacionesDto->getFechaRegistro()!="") ||($remisionapelacionesDto->getFechaActualizacion()!="") ||($remisionapelacionesDto->getIdActuacionCopia()!="") ||($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas()!="") ){
$sql.=",";
}
}
if($remisionapelacionesDto->getCveCatResolucionCombatida()!=""){
$sql.="cveCatResolucionCombatida='".$remisionapelacionesDto->getCveCatResolucionCombatida()."'";
if(($remisionapelacionesDto->getCveRecurso()!="") ||($remisionapelacionesDto->getCveEfecto()!="") ||($remisionapelacionesDto->getAgravios()!="") ||($remisionapelacionesDto->getFecCorreTraslado()!="") ||($remisionapelacionesDto->getFecInterponeRecurso()!="") ||($remisionapelacionesDto->getFecNotificaSenAut()!="") ||($remisionapelacionesDto->getFecAdhesion()!="") ||($remisionapelacionesDto->getEmplazamiento()!="") ||($remisionapelacionesDto->getCveSentido()!="") ||($remisionapelacionesDto->getActivo()!="") ||($remisionapelacionesDto->getFechaRegistro()!="") ||($remisionapelacionesDto->getFechaActualizacion()!="") ||($remisionapelacionesDto->getIdActuacionCopia()!="") ||($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas()!="") ){
$sql.=",";
}
}
if($remisionapelacionesDto->getCveRecurso()!=""){
$sql.="cveRecurso='".$remisionapelacionesDto->getCveRecurso()."'";
if(($remisionapelacionesDto->getCveEfecto()!="") ||($remisionapelacionesDto->getAgravios()!="") ||($remisionapelacionesDto->getFecCorreTraslado()!="") ||($remisionapelacionesDto->getFecInterponeRecurso()!="") ||($remisionapelacionesDto->getFecNotificaSenAut()!="") ||($remisionapelacionesDto->getFecAdhesion()!="") ||($remisionapelacionesDto->getEmplazamiento()!="") ||($remisionapelacionesDto->getCveSentido()!="") ||($remisionapelacionesDto->getActivo()!="") ||($remisionapelacionesDto->getFechaRegistro()!="") ||($remisionapelacionesDto->getFechaActualizacion()!="") ||($remisionapelacionesDto->getIdActuacionCopia()!="") ||($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas()!="") ){
$sql.=",";
}
}
if($remisionapelacionesDto->getCveEfecto()!=""){
$sql.="cveEfecto='".$remisionapelacionesDto->getCveEfecto()."'";
if(($remisionapelacionesDto->getAgravios()!="") ||($remisionapelacionesDto->getFecCorreTraslado()!="") ||($remisionapelacionesDto->getFecInterponeRecurso()!="") ||($remisionapelacionesDto->getFecNotificaSenAut()!="") ||($remisionapelacionesDto->getFecAdhesion()!="") ||($remisionapelacionesDto->getEmplazamiento()!="") ||($remisionapelacionesDto->getCveSentido()!="") ||($remisionapelacionesDto->getActivo()!="") ||($remisionapelacionesDto->getFechaRegistro()!="") ||($remisionapelacionesDto->getFechaActualizacion()!="") ||($remisionapelacionesDto->getIdActuacionCopia()!="") ||($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas()!="") ){
$sql.=",";
}
}
if($remisionapelacionesDto->getAgravios()!=""){
$sql.="agravios='".$remisionapelacionesDto->getAgravios()."'";
if(($remisionapelacionesDto->getFecCorreTraslado()!="") ||($remisionapelacionesDto->getFecInterponeRecurso()!="") ||($remisionapelacionesDto->getFecNotificaSenAut()!="") ||($remisionapelacionesDto->getFecAdhesion()!="") ||($remisionapelacionesDto->getEmplazamiento()!="") ||($remisionapelacionesDto->getCveSentido()!="") ||($remisionapelacionesDto->getActivo()!="") ||($remisionapelacionesDto->getFechaRegistro()!="") ||($remisionapelacionesDto->getFechaActualizacion()!="") ||($remisionapelacionesDto->getIdActuacionCopia()!="") ||($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas()!="") ){
$sql.=",";
}
}
if($remisionapelacionesDto->getFecCorreTraslado()!=""){
$sql.="fecCorreTraslado='".$remisionapelacionesDto->getFecCorreTraslado()."'";
if(($remisionapelacionesDto->getFecInterponeRecurso()!="") ||($remisionapelacionesDto->getFecNotificaSenAut()!="") ||($remisionapelacionesDto->getFecAdhesion()!="") ||($remisionapelacionesDto->getEmplazamiento()!="") ||($remisionapelacionesDto->getCveSentido()!="") ||($remisionapelacionesDto->getActivo()!="") ||($remisionapelacionesDto->getFechaRegistro()!="") ||($remisionapelacionesDto->getFechaActualizacion()!="") ||($remisionapelacionesDto->getIdActuacionCopia()!="") ||($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas()!="") ){
$sql.=",";
}
}
if($remisionapelacionesDto->getFecInterponeRecurso()!=""){
$sql.="fecInterponeRecurso='".$remisionapelacionesDto->getFecInterponeRecurso()."'";
if(($remisionapelacionesDto->getFecNotificaSenAut()!="") ||($remisionapelacionesDto->getFecAdhesion()!="") ||($remisionapelacionesDto->getEmplazamiento()!="") ||($remisionapelacionesDto->getCveSentido()!="") ||($remisionapelacionesDto->getActivo()!="") ||($remisionapelacionesDto->getFechaRegistro()!="") ||($remisionapelacionesDto->getFechaActualizacion()!="") ||($remisionapelacionesDto->getIdActuacionCopia()!="") ||($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas()!="") ){
$sql.=",";
}
}
if($remisionapelacionesDto->getFecNotificaSenAut()!=""){
$sql.="fecNotificaSenAut='".$remisionapelacionesDto->getFecNotificaSenAut()."'";
if(($remisionapelacionesDto->getFecAdhesion()!="") ||($remisionapelacionesDto->getEmplazamiento()!="") ||($remisionapelacionesDto->getCveSentido()!="") ||($remisionapelacionesDto->getActivo()!="") ||($remisionapelacionesDto->getFechaRegistro()!="") ||($remisionapelacionesDto->getFechaActualizacion()!="") ||($remisionapelacionesDto->getIdActuacionCopia()!="") ||($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas()!="") ){
$sql.=",";
}
}
if($remisionapelacionesDto->getFecAdhesion()!=""){
$sql.="fecAdhesion='".$remisionapelacionesDto->getFecAdhesion()."'";
if(($remisionapelacionesDto->getEmplazamiento()!="") ||($remisionapelacionesDto->getCveSentido()!="") ||($remisionapelacionesDto->getActivo()!="") ||($remisionapelacionesDto->getFechaRegistro()!="") ||($remisionapelacionesDto->getFechaActualizacion()!="") ||($remisionapelacionesDto->getIdActuacionCopia()!="") ||($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas()!="") ){
$sql.=",";
}
}else{
    $sql.="fecAdhesion=null";
if(($remisionapelacionesDto->getEmplazamiento()!="") ||($remisionapelacionesDto->getCveSentido()!="") ||($remisionapelacionesDto->getActivo()!="") ||($remisionapelacionesDto->getFechaRegistro()!="") ||($remisionapelacionesDto->getFechaActualizacion()!="") ||($remisionapelacionesDto->getIdActuacionCopia()!="") ||($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas()!="") ){
$sql.=",";
}
}
if($remisionapelacionesDto->getEmplazamiento()!=""){
$sql.="emplazamiento='".$remisionapelacionesDto->getEmplazamiento()."'";
if(($remisionapelacionesDto->getCveSentido()!="") ||($remisionapelacionesDto->getActivo()!="") ||($remisionapelacionesDto->getFechaRegistro()!="") ||($remisionapelacionesDto->getFechaActualizacion()!="") ||($remisionapelacionesDto->getIdActuacionCopia()!="") ||($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas()!="") ){
$sql.=",";
}
}
if($remisionapelacionesDto->getCveSentido()!=""){
$sql.="cveSentido='".$remisionapelacionesDto->getCveSentido()."'";
if(($remisionapelacionesDto->getActivo()!="") ||($remisionapelacionesDto->getFechaRegistro()!="") ||($remisionapelacionesDto->getFechaActualizacion()!="") ||($remisionapelacionesDto->getIdActuacionCopia()!="") ||($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas()!="") ){
$sql.=",";
}
}
if($remisionapelacionesDto->getActivo()!=""){
$sql.="activo='".$remisionapelacionesDto->getActivo()."'";
if(($remisionapelacionesDto->getFechaRegistro()!="") ||($remisionapelacionesDto->getFechaActualizacion()!="") ||($remisionapelacionesDto->getIdActuacionCopia()!="") ||($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas()!="") ){
$sql.=",";
}
}
if($remisionapelacionesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$remisionapelacionesDto->getFechaRegistro()."'";
if(($remisionapelacionesDto->getFechaActualizacion()!="") ||($remisionapelacionesDto->getIdActuacionCopia()!="") ||($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas()!="") ){
$sql.=",";
}
}
if($remisionapelacionesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$remisionapelacionesDto->getFechaActualizacion()."'";
if(($remisionapelacionesDto->getIdActuacionCopia()!="") ||($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas()!="") ){
$sql.=",";
}
}
if($remisionapelacionesDto->getIdActuacionCopia()!=""){
$sql.="idActuacionCopia='".$remisionapelacionesDto->getIdActuacionCopia()."'";
if(($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas()!="") ){
$sql.=",";
}
}
if($remisionapelacionesDto->getIdResolucionesCarpetasCombatidas()!=""){
$sql.="idResolucionesCarpetasCombatidas='".$remisionapelacionesDto->getIdResolucionesCarpetasCombatidas()."'";
}
$sql.=" WHERE idRemisionApelacion='".$remisionapelacionesDto->getIdRemisionApelacion()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new RemisionapelacionesDTO();
$tmp->setidRemisionApelacion($remisionapelacionesDto->getIdRemisionApelacion());
$tmp = $this->selectRemisionapelaciones($tmp,"",$this->_proveedor);
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