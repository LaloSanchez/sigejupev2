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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/bitacoranotificaciones/BitacoranotificacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class BitacoranotificacionesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertBitacoranotificaciones($bitacoranotificacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblbitacoranotificaciones(";
        if ($bitacoranotificacionesDto->getidBitacoraNotificacion() != "") {
            $sql.="idBitacoraNotificacion";
            if (($bitacoranotificacionesDto->getCveMedioNotificacion() != "") || ($bitacoranotificacionesDto->getCveTipoCarpeta() != "") || ($bitacoranotificacionesDto->getCveTipoActuacion() != "") || ($bitacoranotificacionesDto->getCveEstatusNotificacion() != "") || ($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getcveMedioNotificacion() != "") {
            $sql.="cveMedioNotificacion";
            if (($bitacoranotificacionesDto->getCveTipoCarpeta() != "") || ($bitacoranotificacionesDto->getCveTipoActuacion() != "") || ($bitacoranotificacionesDto->getCveEstatusNotificacion() != "") || ($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getcveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta";
            if (($bitacoranotificacionesDto->getCveTipoActuacion() != "") || ($bitacoranotificacionesDto->getCveEstatusNotificacion() != "") || ($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getcveTipoActuacion() != "") {
            $sql.="cveTipoActuacion";
            if (($bitacoranotificacionesDto->getCveEstatusNotificacion() != "") || ($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getcveEstatusNotificacion() != "") {
            $sql.="cveEstatusNotificacion";
            if (($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getidReferencia() != "") {
            $sql.="idReferencia";
            if (($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getnumero() != "") {
            $sql.="numero";
            if (($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getanio() != "") {
            $sql.="anio";
            if (($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getcvejuzgado() != "") {
            $sql.="cvejuzgado";
            if (($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getcveUsuario() != "") {
            $sql.="cveUsuario";
            if (($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getmedio() != "") {
            $sql.="medio";
            if (($bitacoranotificacionesDto->getMovimiento() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getmovimiento() != "") {
            $sql.="movimiento";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($bitacoranotificacionesDto->getidBitacoraNotificacion() != "") {
            $sql.="'" . $bitacoranotificacionesDto->getidBitacoraNotificacion() . "'";
            if (($bitacoranotificacionesDto->getCveMedioNotificacion() != "") || ($bitacoranotificacionesDto->getCveTipoCarpeta() != "") || ($bitacoranotificacionesDto->getCveTipoActuacion() != "") || ($bitacoranotificacionesDto->getCveEstatusNotificacion() != "") || ($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getcveMedioNotificacion() != "") {
            $sql.="'" . $bitacoranotificacionesDto->getcveMedioNotificacion() . "'";
            if (($bitacoranotificacionesDto->getCveTipoCarpeta() != "") || ($bitacoranotificacionesDto->getCveTipoActuacion() != "") || ($bitacoranotificacionesDto->getCveEstatusNotificacion() != "") || ($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getcveTipoCarpeta() != "") {
            $sql.="'" . $bitacoranotificacionesDto->getcveTipoCarpeta() . "'";
            if (($bitacoranotificacionesDto->getCveTipoActuacion() != "") || ($bitacoranotificacionesDto->getCveEstatusNotificacion() != "") || ($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getcveTipoActuacion() != "") {
            $sql.="'" . $bitacoranotificacionesDto->getcveTipoActuacion() . "'";
            if (($bitacoranotificacionesDto->getCveEstatusNotificacion() != "") || ($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getcveEstatusNotificacion() != "") {
            $sql.="'" . $bitacoranotificacionesDto->getcveEstatusNotificacion() . "'";
            if (($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getidReferencia() != "") {
            $sql.="'" . $bitacoranotificacionesDto->getidReferencia() . "'";
            if (($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getnumero() != "") {
            $sql.="'" . $bitacoranotificacionesDto->getnumero() . "'";
            if (($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getanio() != "") {
            $sql.="'" . $bitacoranotificacionesDto->getanio() . "'";
            if (($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getcvejuzgado() != "") {
            $sql.="'" . $bitacoranotificacionesDto->getcvejuzgado() . "'";
            if (($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getcveUsuario() != "") {
            $sql.="'" . $bitacoranotificacionesDto->getcveUsuario() . "'";
            if (($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getmedio() != "") {
            $sql.="'" . $bitacoranotificacionesDto->getmedio() . "'";
            if (($bitacoranotificacionesDto->getMovimiento() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getmovimiento() != "") {
            $sql.="'" . $bitacoranotificacionesDto->getmovimiento() . "'";
        }
        if ($bitacoranotificacionesDto->getfechaRegistro() != "") {
            
        }
        if ($bitacoranotificacionesDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new BitacoranotificacionesDTO();
            $tmp->setidBitacoraNotificacion($this->_proveedor->lastID());
            $tmp = $this->selectBitacoranotificaciones($tmp, "", $this->_proveedor);
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

    public function updateBitacoranotificaciones($bitacoranotificacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblbitacoranotificaciones SET ";
        if ($bitacoranotificacionesDto->getidBitacoraNotificacion() != "") {
            $sql.="idBitacoraNotificacion='" . $bitacoranotificacionesDto->getidBitacoraNotificacion() . "'";
            if (($bitacoranotificacionesDto->getCveMedioNotificacion() != "") || ($bitacoranotificacionesDto->getCveTipoCarpeta() != "") || ($bitacoranotificacionesDto->getCveTipoActuacion() != "") || ($bitacoranotificacionesDto->getCveEstatusNotificacion() != "") || ($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getcveMedioNotificacion() != "") {
            $sql.="cveMedioNotificacion='" . $bitacoranotificacionesDto->getcveMedioNotificacion() . "'";
            if (($bitacoranotificacionesDto->getCveTipoCarpeta() != "") || ($bitacoranotificacionesDto->getCveTipoActuacion() != "") || ($bitacoranotificacionesDto->getCveEstatusNotificacion() != "") || ($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getcveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta='" . $bitacoranotificacionesDto->getcveTipoCarpeta() . "'";
            if (($bitacoranotificacionesDto->getCveTipoActuacion() != "") || ($bitacoranotificacionesDto->getCveEstatusNotificacion() != "") || ($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getcveTipoActuacion() != "") {
            $sql.="cveTipoActuacion='" . $bitacoranotificacionesDto->getcveTipoActuacion() . "'";
            if (($bitacoranotificacionesDto->getCveEstatusNotificacion() != "") || ($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getcveEstatusNotificacion() != "") {
            $sql.="cveEstatusNotificacion='" . $bitacoranotificacionesDto->getcveEstatusNotificacion() . "'";
            if (($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getidReferencia() != "") {
            $sql.="idReferencia='" . $bitacoranotificacionesDto->getidReferencia() . "'";
            if (($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getnumero() != "") {
            $sql.="numero='" . $bitacoranotificacionesDto->getnumero() . "'";
            if (($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getanio() != "") {
            $sql.="anio='" . $bitacoranotificacionesDto->getanio() . "'";
            if (($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getcvejuzgado() != "") {
            $sql.="cvejuzgado='" . $bitacoranotificacionesDto->getcvejuzgado() . "'";
            if (($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getcveUsuario() != "") {
            $sql.="cveUsuario='" . $bitacoranotificacionesDto->getcveUsuario() . "'";
            if (($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getmedio() != "") {
            $sql.="medio='" . $bitacoranotificacionesDto->getmedio() . "'";
            if (($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getmovimiento() != "") {
            $sql.="movimiento='" . $bitacoranotificacionesDto->getmovimiento() . "'";
            if (($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $bitacoranotificacionesDto->getfechaRegistro() . "'";
            if (($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoranotificacionesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $bitacoranotificacionesDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE idBitacoraNotificacion='" . $bitacoranotificacionesDto->getidBitacoraNotificacion() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new BitacoranotificacionesDTO();
            $tmp->setidBitacoraNotificacion($bitacoranotificacionesDto->getidBitacoraNotificacion());
            $tmp = $this->selectBitacoranotificaciones($tmp, "", $this->_proveedor);
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

    public function deleteBitacoranotificaciones($bitacoranotificacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblbitacoranotificaciones  WHERE idBitacoraNotificacion='" . $bitacoranotificacionesDto->getidBitacoraNotificacion() . "'";
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

    public function selectBitacoranotificaciones($bitacoranotificacionesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idBitacoraNotificacion,cveMedioNotificacion,cveTipoCarpeta,cveTipoActuacion,cveEstatusNotificacion,idReferencia,numero,anio,cvejuzgado,cveUsuario,medio,movimiento,fechaRegistro,fechaActualizacion FROM tblbitacoranotificaciones ";
        if (($bitacoranotificacionesDto->getidBitacoraNotificacion() != "") || ($bitacoranotificacionesDto->getcveMedioNotificacion() != "") || ($bitacoranotificacionesDto->getcveTipoCarpeta() != "") || ($bitacoranotificacionesDto->getcveTipoActuacion() != "") || ($bitacoranotificacionesDto->getcveEstatusNotificacion() != "") || ($bitacoranotificacionesDto->getidReferencia() != "") || ($bitacoranotificacionesDto->getnumero() != "") || ($bitacoranotificacionesDto->getanio() != "") || ($bitacoranotificacionesDto->getcvejuzgado() != "") || ($bitacoranotificacionesDto->getcveUsuario() != "") || ($bitacoranotificacionesDto->getmedio() != "") || ($bitacoranotificacionesDto->getmovimiento() != "") || ($bitacoranotificacionesDto->getfechaRegistro() != "") || ($bitacoranotificacionesDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($bitacoranotificacionesDto->getidBitacoraNotificacion() != "") {
            $sql.="idBitacoraNotificacion='" . $bitacoranotificacionesDto->getIdBitacoraNotificacion() . "'";
            if (($bitacoranotificacionesDto->getCveMedioNotificacion() != "") || ($bitacoranotificacionesDto->getCveTipoCarpeta() != "") || ($bitacoranotificacionesDto->getCveTipoActuacion() != "") || ($bitacoranotificacionesDto->getCveEstatusNotificacion() != "") || ($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getcveMedioNotificacion() != "") {
            $sql.="cveMedioNotificacion='" . $bitacoranotificacionesDto->getCveMedioNotificacion() . "'";
            if (($bitacoranotificacionesDto->getCveTipoCarpeta() != "") || ($bitacoranotificacionesDto->getCveTipoActuacion() != "") || ($bitacoranotificacionesDto->getCveEstatusNotificacion() != "") || ($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getcveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta='" . $bitacoranotificacionesDto->getCveTipoCarpeta() . "'";
            if (($bitacoranotificacionesDto->getCveTipoActuacion() != "") || ($bitacoranotificacionesDto->getCveEstatusNotificacion() != "") || ($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getcveTipoActuacion() != "") {
            $sql.="cveTipoActuacion='" . $bitacoranotificacionesDto->getCveTipoActuacion() . "'";
            if (($bitacoranotificacionesDto->getCveEstatusNotificacion() != "") || ($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getcveEstatusNotificacion() != "") {
            $sql.="cveEstatusNotificacion='" . $bitacoranotificacionesDto->getCveEstatusNotificacion() . "'";
            if (($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getidReferencia() != "") {
            $sql.="idReferencia='" . $bitacoranotificacionesDto->getIdReferencia() . "'";
            if (($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getnumero() != "") {
            $sql.="numero='" . $bitacoranotificacionesDto->getNumero() . "'";
            if (($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getanio() != "") {
            $sql.="anio='" . $bitacoranotificacionesDto->getAnio() . "'";
            if (($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getcvejuzgado() != "") {
            $sql.="cvejuzgado='" . $bitacoranotificacionesDto->getCvejuzgado() . "'";
            if (($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getcveUsuario() != "") {
            $sql.="cveUsuario='" . $bitacoranotificacionesDto->getCveUsuario() . "'";
            if (($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getmedio() != "") {
            $sql.="medio='" . $bitacoranotificacionesDto->getMedio() . "'";
            if (($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getmovimiento() != "") {
            $sql.="movimiento='" . $bitacoranotificacionesDto->getMovimiento() . "'";
            if (($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $bitacoranotificacionesDto->getFechaRegistro() . "'";
            if (($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $bitacoranotificacionesDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new BitacoranotificacionesDTO();
                    $tmp[$contador]->setIdBitacoraNotificacion($row["idBitacoraNotificacion"]);
                    $tmp[$contador]->setCveMedioNotificacion($row["cveMedioNotificacion"]);
                    $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                    $tmp[$contador]->setCveTipoActuacion($row["cveTipoActuacion"]);
                    $tmp[$contador]->setCveEstatusNotificacion($row["cveEstatusNotificacion"]);
                    $tmp[$contador]->setIdReferencia($row["idReferencia"]);
                    $tmp[$contador]->setNumero($row["numero"]);
                    $tmp[$contador]->setAnio($row["anio"]);
                    $tmp[$contador]->setCvejuzgado($row["cvejuzgado"]);
                    $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                    $tmp[$contador]->setMedio($row["medio"]);
                    $tmp[$contador]->setMovimiento($row["movimiento"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
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

    public function selectBitacoranotificacionesCateos($bitacoranotificacionesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idBitacoraNotificacion,cveMedioNotificacion,cveTipoCarpeta,cveTipoActuacion,cveEstatusNotificacion,idReferencia,numero,anio,cvejuzgado,cveUsuario,medio,movimiento,fechaRegistro,fechaActualizacion, count(idBitacoraNotificacion) as totalRegistros FROM tblbitacoranotificaciones ";
        if (($bitacoranotificacionesDto->getidBitacoraNotificacion() != "") || ($bitacoranotificacionesDto->getcveMedioNotificacion() != "") || ($bitacoranotificacionesDto->getcveTipoCarpeta() != "") || ($bitacoranotificacionesDto->getcveTipoActuacion() != "") || ($bitacoranotificacionesDto->getcveEstatusNotificacion() != "") || ($bitacoranotificacionesDto->getidReferencia() != "") || ($bitacoranotificacionesDto->getnumero() != "") || ($bitacoranotificacionesDto->getanio() != "") || ($bitacoranotificacionesDto->getcvejuzgado() != "") || ($bitacoranotificacionesDto->getcveUsuario() != "") || ($bitacoranotificacionesDto->getmedio() != "") || ($bitacoranotificacionesDto->getmovimiento() != "") || ($bitacoranotificacionesDto->getfechaRegistro() != "") || ($bitacoranotificacionesDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($bitacoranotificacionesDto->getidBitacoraNotificacion() != "") {
            $sql.="idBitacoraNotificacion='" . $bitacoranotificacionesDto->getIdBitacoraNotificacion() . "'";
            if (($bitacoranotificacionesDto->getCveMedioNotificacion() != "") || ($bitacoranotificacionesDto->getCveTipoCarpeta() != "") || ($bitacoranotificacionesDto->getCveTipoActuacion() != "") || ($bitacoranotificacionesDto->getCveEstatusNotificacion() != "") || ($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getcveMedioNotificacion() != "") {
            $sql.="cveMedioNotificacion='" . $bitacoranotificacionesDto->getCveMedioNotificacion() . "'";
            if (($bitacoranotificacionesDto->getCveTipoCarpeta() != "") || ($bitacoranotificacionesDto->getCveTipoActuacion() != "") || ($bitacoranotificacionesDto->getCveEstatusNotificacion() != "") || ($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getcveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta='" . $bitacoranotificacionesDto->getCveTipoCarpeta() . "'";
            if (($bitacoranotificacionesDto->getCveTipoActuacion() != "") || ($bitacoranotificacionesDto->getCveEstatusNotificacion() != "") || ($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getcveTipoActuacion() != "") {
            $sql.="cveTipoActuacion='" . $bitacoranotificacionesDto->getCveTipoActuacion() . "'";
            if (($bitacoranotificacionesDto->getCveEstatusNotificacion() != "") || ($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getcveEstatusNotificacion() != "") {
            $sql.="cveEstatusNotificacion='" . $bitacoranotificacionesDto->getCveEstatusNotificacion() . "'";
            if (($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getidReferencia() != "") {
            $sql.="idReferencia='" . $bitacoranotificacionesDto->getIdReferencia() . "'";
            if (($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getnumero() != "") {
            $sql.="numero='" . $bitacoranotificacionesDto->getNumero() . "'";
            if (($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getanio() != "") {
            $sql.="anio='" . $bitacoranotificacionesDto->getAnio() . "'";
            if (($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getcvejuzgado() != "") {
            $sql.="cvejuzgado='" . $bitacoranotificacionesDto->getCvejuzgado() . "'";
            if (($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getcveUsuario() != "") {
            $sql.="cveUsuario='" . $bitacoranotificacionesDto->getCveUsuario() . "'";
            if (($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getmedio() != "") {
            $sql.="medio='" . $bitacoranotificacionesDto->getMedio() . "'";
            if (($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getmovimiento() != "") {
            $sql.="movimiento='" . $bitacoranotificacionesDto->getMovimiento() . "'";
            if (($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $bitacoranotificacionesDto->getFechaRegistro() . "'";
            if (($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $bitacoranotificacionesDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = array();
                    $tmp[$contador]["IdBitacoraNotificacion"] = $row["idBitacoraNotificacion"];
                    $tmp[$contador]["CveMedioNotificacion"] = $row["cveMedioNotificacion"];
                    $tmp[$contador]["CveTipoCarpeta"] = $row["cveTipoCarpeta"];
                    $tmp[$contador]["CveTipoActuacion"] = $row["cveTipoActuacion"];
                    $tmp[$contador]["CveEstatusNotificacion"] = $row["cveEstatusNotificacion"];
                    $tmp[$contador]["IdReferencia"] = $row["idReferencia"];
                    $tmp[$contador]["Numero"] = $row["numero"];
                    $tmp[$contador]["Anio"] = $row["anio"];
                    $tmp[$contador]["Cvejuzgado"] = $row["cvejuzgado"];
                    $tmp[$contador]["CveUsuario"] = $row["cveUsuario"];
                    $tmp[$contador]["Medio"] = $row["medio"];
                    $tmp[$contador]["Movimiento"] = $row["movimiento"];
                    $tmp[$contador]["FechaRegistro"] = $row["fechaRegistro"];
                    $tmp[$contador]["FechaActualizacion"] = $row["fechaActualizacion"];
                    $tmp[$contador]["totalRegistros"] = $row["totalRegistros"];
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

    public function selectBitacoranotificacionesOrdenes($bitacoranotificacionesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idBitacoraNotificacion,cveMedioNotificacion,cveTipoCarpeta,cveTipoActuacion,cveEstatusNotificacion,idReferencia,numero,anio,cvejuzgado,cveUsuario,medio,movimiento,fechaRegistro,fechaActualizacion, count(idBitacoraNotificacion) as totalRegistros FROM tblbitacoranotificaciones ";
        if (($bitacoranotificacionesDto->getidBitacoraNotificacion() != "") || ($bitacoranotificacionesDto->getcveMedioNotificacion() != "") || ($bitacoranotificacionesDto->getcveTipoCarpeta() != "") || ($bitacoranotificacionesDto->getcveTipoActuacion() != "") || ($bitacoranotificacionesDto->getcveEstatusNotificacion() != "") || ($bitacoranotificacionesDto->getidReferencia() != "") || ($bitacoranotificacionesDto->getnumero() != "") || ($bitacoranotificacionesDto->getanio() != "") || ($bitacoranotificacionesDto->getcvejuzgado() != "") || ($bitacoranotificacionesDto->getcveUsuario() != "") || ($bitacoranotificacionesDto->getmedio() != "") || ($bitacoranotificacionesDto->getmovimiento() != "") || ($bitacoranotificacionesDto->getfechaRegistro() != "") || ($bitacoranotificacionesDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($bitacoranotificacionesDto->getidBitacoraNotificacion() != "") {
            $sql.="idBitacoraNotificacion='" . $bitacoranotificacionesDto->getIdBitacoraNotificacion() . "'";
            if (($bitacoranotificacionesDto->getCveMedioNotificacion() != "") || ($bitacoranotificacionesDto->getCveTipoCarpeta() != "") || ($bitacoranotificacionesDto->getCveTipoActuacion() != "") || ($bitacoranotificacionesDto->getCveEstatusNotificacion() != "") || ($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getcveMedioNotificacion() != "") {
            $sql.="cveMedioNotificacion='" . $bitacoranotificacionesDto->getCveMedioNotificacion() . "'";
            if (($bitacoranotificacionesDto->getCveTipoCarpeta() != "") || ($bitacoranotificacionesDto->getCveTipoActuacion() != "") || ($bitacoranotificacionesDto->getCveEstatusNotificacion() != "") || ($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getcveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta='" . $bitacoranotificacionesDto->getCveTipoCarpeta() . "'";
            if (($bitacoranotificacionesDto->getCveTipoActuacion() != "") || ($bitacoranotificacionesDto->getCveEstatusNotificacion() != "") || ($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getcveTipoActuacion() != "") {
            $sql.="cveTipoActuacion='" . $bitacoranotificacionesDto->getCveTipoActuacion() . "'";
            if (($bitacoranotificacionesDto->getCveEstatusNotificacion() != "") || ($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getcveEstatusNotificacion() != "") {
            $sql.="cveEstatusNotificacion='" . $bitacoranotificacionesDto->getCveEstatusNotificacion() . "'";
            if (($bitacoranotificacionesDto->getIdReferencia() != "") || ($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getidReferencia() != "") {
            $sql.="idReferencia='" . $bitacoranotificacionesDto->getIdReferencia() . "'";
            if (($bitacoranotificacionesDto->getNumero() != "") || ($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getnumero() != "") {
            $sql.="numero='" . $bitacoranotificacionesDto->getNumero() . "'";
            if (($bitacoranotificacionesDto->getAnio() != "") || ($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getanio() != "") {
            $sql.="anio='" . $bitacoranotificacionesDto->getAnio() . "'";
            if (($bitacoranotificacionesDto->getCvejuzgado() != "") || ($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getcvejuzgado() != "") {
            $sql.="cvejuzgado='" . $bitacoranotificacionesDto->getCvejuzgado() . "'";
            if (($bitacoranotificacionesDto->getCveUsuario() != "") || ($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getcveUsuario() != "") {
            $sql.="cveUsuario='" . $bitacoranotificacionesDto->getCveUsuario() . "'";
            if (($bitacoranotificacionesDto->getMedio() != "") || ($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getmedio() != "") {
            $sql.="medio='" . $bitacoranotificacionesDto->getMedio() . "'";
            if (($bitacoranotificacionesDto->getMovimiento() != "") || ($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getmovimiento() != "") {
            $sql.="movimiento='" . $bitacoranotificacionesDto->getMovimiento() . "'";
            if (($bitacoranotificacionesDto->getFechaRegistro() != "") || ($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $bitacoranotificacionesDto->getFechaRegistro() . "'";
            if (($bitacoranotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoranotificacionesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $bitacoranotificacionesDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = array();
                    $tmp[$contador]["IdBitacoraNotificacion"] = $row["idBitacoraNotificacion"];
                    $tmp[$contador]["CveMedioNotificacion"] = $row["cveMedioNotificacion"];
                    $tmp[$contador]["CveTipoCarpeta"] = $row["cveTipoCarpeta"];
                    $tmp[$contador]["CveTipoActuacion"] = $row["cveTipoActuacion"];
                    $tmp[$contador]["CveEstatusNotificacion"] = $row["cveEstatusNotificacion"];
                    $tmp[$contador]["IdReferencia"] = $row["idReferencia"];
                    $tmp[$contador]["Numero"] = $row["numero"];
                    $tmp[$contador]["Anio"] = $row["anio"];
                    $tmp[$contador]["Cvejuzgado"] = $row["cvejuzgado"];
                    $tmp[$contador]["CveUsuario"] = $row["cveUsuario"];
                    $tmp[$contador]["Medio"] = $row["medio"];
                    $tmp[$contador]["Movimiento"] = $row["movimiento"];
                    $tmp[$contador]["FechaRegistro"] = $row["fechaRegistro"];
                    $tmp[$contador]["FechaActualizacion"] = $row["fechaActualizacion"];
                    $tmp[$contador]["totalRegistros"] = $row["totalRegistros"];
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