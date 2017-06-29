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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/audiencias/AudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class AudienciasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertAudiencias($audienciasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblaudiencias(";
        if ($audienciasDto->getidAudiencia() != "") {
            $sql .= "idAudiencia";
            if (($audienciasDto->getIdSolicitudAudiencia() != "") || ($audienciasDto->getNumero() != "") || ($audienciasDto->getAnio() != "") || ($audienciasDto->getCveTipoCarpeta() != "") || ($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getidSolicitudAudiencia() != "") {
            $sql .= "idSolicitudAudiencia";
            if (($audienciasDto->getNumero() != "") || ($audienciasDto->getAnio() != "") || ($audienciasDto->getCveTipoCarpeta() != "") || ($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getnumero() != "") {
            $sql .= "numero";
            if (($audienciasDto->getAnio() != "") || ($audienciasDto->getCveTipoCarpeta() != "") || ($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getanio() != "") {
            $sql .= "anio";
            if (($audienciasDto->getCveTipoCarpeta() != "") || ($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getcveTipoCarpeta() != "") {
            $sql .= "cveTipoCarpeta";
            if (($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getactivo() != "") {
            $sql .= "activo";
            if (($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getfechaInicial() != "") {
            $sql .= "fechaInicial";
            if (($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getfechaFinal() != "") {
            $sql .= "fechaFinal";
            if (($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getcveCatAudiencia() != "") {
            $sql .= "cveCatAudiencia";
            if (($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getcveJuzgado() != "") {
            $sql .= "cveJuzgado";
            if (($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getcveJuzgadoDesahoga() != "") {
            $sql .= "cveJuzgadoDesahoga";
            if (($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getcveAdscripcionSolicita() != "") {
            $sql .= "cveAdscripcionSolicita";
            if (($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getcveUsuario() != "") {
            $sql .= "cveUsuario";
            if (($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getidReferencia() != "") {
            $sql .= "idReferencia";
            if (($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getdetenido() != "") {
            $sql .= "detenido";
            if (($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getcveEstatusAudiencia() != "") {
            $sql .= "cveEstatusAudiencia";
            if (($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getcveSala() != "") {
            $sql .= "cveSala";
            if (($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getpeso() != "") {
            $sql .= "peso";
        }
        $sql .= ",fechaRegistro";
        $sql .= ",fechaActualizacion";
        $sql .= ") VALUES(";
        if ($audienciasDto->getidAudiencia() != "") {
            $sql .= "'" . $audienciasDto->getidAudiencia() . "'";
            if (($audienciasDto->getIdSolicitudAudiencia() != "") || ($audienciasDto->getNumero() != "") || ($audienciasDto->getAnio() != "") || ($audienciasDto->getCveTipoCarpeta() != "") || ($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getidSolicitudAudiencia() != "") {
            $sql .= "'" . $audienciasDto->getidSolicitudAudiencia() . "'";
            if (($audienciasDto->getNumero() != "") || ($audienciasDto->getAnio() != "") || ($audienciasDto->getCveTipoCarpeta() != "") || ($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getnumero() != "") {
            $sql .= "'" . $audienciasDto->getnumero() . "'";
            if (($audienciasDto->getAnio() != "") || ($audienciasDto->getCveTipoCarpeta() != "") || ($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getanio() != "") {
            $sql .= "'" . $audienciasDto->getanio() . "'";
            if (($audienciasDto->getCveTipoCarpeta() != "") || ($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getcveTipoCarpeta() != "") {
            $sql .= "'" . $audienciasDto->getcveTipoCarpeta() . "'";
            if (($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getactivo() != "") {
            $sql .= "'" . $audienciasDto->getactivo() . "'";
            if (($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getfechaRegistro() != "") {
            if (($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getfechaActualizacion() != "") {
            if (($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getfechaInicial() != "") {
            $sql .= "'" . $audienciasDto->getfechaInicial() . "'";
            if (($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getfechaFinal() != "") {
            $sql .= "'" . $audienciasDto->getfechaFinal() . "'";
            if (($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getcveCatAudiencia() != "") {
            $sql .= "'" . $audienciasDto->getcveCatAudiencia() . "'";
            if (($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getcveJuzgado() != "") {
            $sql .= "'" . $audienciasDto->getcveJuzgado() . "'";
            if (($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getcveJuzgadoDesahoga() != "") {
            $sql .= "'" . $audienciasDto->getcveJuzgadoDesahoga() . "'";
            if (($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getcveAdscripcionSolicita() != "") {
            $sql .= "'" . $audienciasDto->getcveAdscripcionSolicita() . "'";
            if (($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getcveUsuario() != "") {
            $sql .= "'" . $audienciasDto->getcveUsuario() . "'";
            if (($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getidReferencia() != "") {
            $sql .= "'" . $audienciasDto->getidReferencia() . "'";
            if (($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getdetenido() != "") {
            $sql .= "'" . $audienciasDto->getdetenido() . "'";
            if (($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getcveEstatusAudiencia() != "") {
            $sql .= "'" . $audienciasDto->getcveEstatusAudiencia() . "'";
            if (($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getcveSala() != "") {
            $sql .= "'" . $audienciasDto->getcveSala() . "'";
            if (($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getpeso() != "") {
            $sql .= "'" . $audienciasDto->getpeso() . "'";
        }
        $sql .= ",now()";
        $sql .= ",now()";
        $sql .= ")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new AudienciasDTO();
            $tmp->setidAudiencia($this->_proveedor->lastID());
            $tmp = $this->selectAudiencias($tmp, "", $this->_proveedor);
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

    public function updateAudiencias($audienciasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblaudiencias SET ";
        if ($audienciasDto->getidAudiencia() != "") {
            $sql .= "idAudiencia='" . $audienciasDto->getidAudiencia() . "'";
            if (($audienciasDto->getIdSolicitudAudiencia() != "") || ($audienciasDto->getNumero() != "") || ($audienciasDto->getAnio() != "") || ($audienciasDto->getCveTipoCarpeta() != "") || ($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaRegistro() != "") || ($audienciasDto->getFechaActualizacion() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getidSolicitudAudiencia() != "") {
            $sql .= "idSolicitudAudiencia='" . $audienciasDto->getidSolicitudAudiencia() . "'";
            if (($audienciasDto->getNumero() != "") || ($audienciasDto->getAnio() != "") || ($audienciasDto->getCveTipoCarpeta() != "") || ($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaRegistro() != "") || ($audienciasDto->getFechaActualizacion() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getnumero() != "") {
            $sql .= "numero='" . $audienciasDto->getnumero() . "'";
            if (($audienciasDto->getAnio() != "") || ($audienciasDto->getCveTipoCarpeta() != "") || ($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaRegistro() != "") || ($audienciasDto->getFechaActualizacion() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getanio() != "") {
            $sql .= "anio='" . $audienciasDto->getanio() . "'";
            if (($audienciasDto->getCveTipoCarpeta() != "") || ($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaRegistro() != "") || ($audienciasDto->getFechaActualizacion() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getcveTipoCarpeta() != "") {
            $sql .= "cveTipoCarpeta='" . $audienciasDto->getcveTipoCarpeta() . "'";
            if (($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaRegistro() != "") || ($audienciasDto->getFechaActualizacion() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getactivo() != "") {
            $sql .= "activo='" . $audienciasDto->getactivo() . "'";
            if (($audienciasDto->getFechaRegistro() != "") || ($audienciasDto->getFechaActualizacion() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $audienciasDto->getfechaRegistro() . "'";
            if (($audienciasDto->getFechaActualizacion() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $audienciasDto->getfechaActualizacion() . "'";
            if (($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getfechaInicial() != "") {
            $sql .= "fechaInicial='" . $audienciasDto->getfechaInicial() . "'";
            if (($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getfechaFinal() != "") {
            $sql .= "fechaFinal='" . $audienciasDto->getfechaFinal() . "'";
            if (($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getcveCatAudiencia() != "") {
            $sql .= "cveCatAudiencia='" . $audienciasDto->getcveCatAudiencia() . "'";
            if (($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getcveJuzgado() != "") {
            $sql .= "cveJuzgado='" . $audienciasDto->getcveJuzgado() . "'";
            if (($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getcveJuzgadoDesahoga() != "") {
            $sql .= "cveJuzgadoDesahoga='" . $audienciasDto->getcveJuzgadoDesahoga() . "'";
            if (($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getcveAdscripcionSolicita() != "") {
            $sql .= "cveAdscripcionSolicita='" . $audienciasDto->getcveAdscripcionSolicita() . "'";
            if (($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getcveUsuario() != "") {
            $sql .= "cveUsuario='" . $audienciasDto->getcveUsuario() . "'";
            if (($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getidReferencia() != "") {
            $sql .= "idReferencia='" . $audienciasDto->getidReferencia() . "'";
            if (($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getdetenido() != "") {
            $sql .= "detenido='" . $audienciasDto->getdetenido() . "'";
            if (($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getcveEstatusAudiencia() != "") {
            $sql .= "cveEstatusAudiencia='" . $audienciasDto->getcveEstatusAudiencia() . "'";
            if (($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getcveSala() != "") {
            $sql .= "cveSala='" . $audienciasDto->getcveSala() . "'";
            if (($audienciasDto->getPeso() != "")) {
                $sql .= ",";
            }
        }
        if ($audienciasDto->getpeso() != "") {
            $sql .= "peso='" . $audienciasDto->getpeso() . "'";
        }

        $sql .= " ,fechaActualizacion = now()";

        $sql .= " WHERE idAudiencia='" . $audienciasDto->getidAudiencia() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new AudienciasDTO();
            $tmp->setidAudiencia($audienciasDto->getidAudiencia());
            $tmp = $this->selectAudiencias($tmp, "", $this->_proveedor);
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

    public function deleteAudiencias($audienciasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblaudiencias  WHERE idAudiencia='" . $audienciasDto->getidAudiencia() . "'";
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

    public function selectAudiencias($audienciasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idAudiencia,idSolicitudAudiencia,numero,anio,cveTipoCarpeta,activo,fechaRegistro,fechaActualizacion,fechaInicial,fechaFinal,cveCatAudiencia,cveJuzgado,cveJuzgadoDesahoga,cveAdscripcionSolicita,cveUsuario,idReferencia,detenido,cveEstatusAudiencia,cveSala,peso,idAudienciaAuronix FROM tblaudiencias ";
        if (($audienciasDto->getidAudiencia() != "") || ($audienciasDto->getidSolicitudAudiencia() != "") || ($audienciasDto->getnumero() != "") || ($audienciasDto->getanio() != "") || ($audienciasDto->getcveTipoCarpeta() != "") || ($audienciasDto->getactivo() != "") || ($audienciasDto->getfechaRegistro() != "") || ($audienciasDto->getfechaActualizacion() != "") || ($audienciasDto->getfechaInicial() != "") || ($audienciasDto->getfechaFinal() != "") || ($audienciasDto->getcveCatAudiencia() != "") || ($audienciasDto->getcveJuzgado() != "") || ($audienciasDto->getcveJuzgadoDesahoga() != "") || ($audienciasDto->getcveAdscripcionSolicita() != "") || ($audienciasDto->getcveUsuario() != "") || ($audienciasDto->getidReferencia() != "") || ($audienciasDto->getdetenido() != "") || ($audienciasDto->getcveEstatusAudiencia() != "") || ($audienciasDto->getcveSala() != "") || ($audienciasDto->getpeso() != "")) {
            $sql .= " WHERE ";
        }
        if ($audienciasDto->getidAudiencia() != "") {
            $sql .= "idAudiencia='" . $audienciasDto->getIdAudiencia() . "'";
            if (($audienciasDto->getIdSolicitudAudiencia() != "") || ($audienciasDto->getNumero() != "") || ($audienciasDto->getAnio() != "") || ($audienciasDto->getCveTipoCarpeta() != "") || ($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaRegistro() != "") || ($audienciasDto->getFechaActualizacion() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getidSolicitudAudiencia() != "") {
            $sql .= "idSolicitudAudiencia='" . $audienciasDto->getIdSolicitudAudiencia() . "'";
            if (($audienciasDto->getNumero() != "") || ($audienciasDto->getAnio() != "") || ($audienciasDto->getCveTipoCarpeta() != "") || ($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaRegistro() != "") || ($audienciasDto->getFechaActualizacion() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getnumero() != "") {
            $sql .= "numero='" . $audienciasDto->getNumero() . "'";
            if (($audienciasDto->getAnio() != "") || ($audienciasDto->getCveTipoCarpeta() != "") || ($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaRegistro() != "") || ($audienciasDto->getFechaActualizacion() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getanio() != "") {
            $sql .= "anio='" . $audienciasDto->getAnio() . "'";
            if (($audienciasDto->getCveTipoCarpeta() != "") || ($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaRegistro() != "") || ($audienciasDto->getFechaActualizacion() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getcveTipoCarpeta() != "") {
            $sql .= "cveTipoCarpeta='" . $audienciasDto->getCveTipoCarpeta() . "'";
            if (($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaRegistro() != "") || ($audienciasDto->getFechaActualizacion() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getactivo() != "") {
            $sql .= "activo='" . $audienciasDto->getActivo() . "'";
            if (($audienciasDto->getFechaRegistro() != "") || ($audienciasDto->getFechaActualizacion() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $audienciasDto->getFechaRegistro() . "'";
            if (($audienciasDto->getFechaActualizacion() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $audienciasDto->getFechaActualizacion() . "'";
            if (($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getfechaInicial() != "") {
            $sql .= "fechaInicial='" . $audienciasDto->getFechaInicial() . "'";
            if (($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getfechaFinal() != "") {
            $sql .= "fechaFinal='" . $audienciasDto->getFechaFinal() . "'";
            if (($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getcveCatAudiencia() != "") {
            $sql .= "cveCatAudiencia='" . $audienciasDto->getCveCatAudiencia() . "'";
            if (($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getcveJuzgado() != "") {
            $sql .= "cveJuzgado='" . $audienciasDto->getCveJuzgado() . "'";
            if (($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getcveJuzgadoDesahoga() != "") {
            $sql .= "cveJuzgadoDesahoga='" . $audienciasDto->getCveJuzgadoDesahoga() . "'";
            if (($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getcveAdscripcionSolicita() != "") {
            $sql .= "cveAdscripcionSolicita='" . $audienciasDto->getCveAdscripcionSolicita() . "'";
            if (($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getcveUsuario() != "") {
            $sql .= "cveUsuario='" . $audienciasDto->getCveUsuario() . "'";
            if (($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getidReferencia() != "") {
            $sql .= "idReferencia='" . $audienciasDto->getIdReferencia() . "'";
            if (($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getdetenido() != "") {
            $sql .= "detenido='" . $audienciasDto->getDetenido() . "'";
            if (($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getcveEstatusAudiencia() != "") {
            $sql .= "cveEstatusAudiencia='" . $audienciasDto->getCveEstatusAudiencia() . "'";
            if (($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getcveSala() != "") {
            $sql .= "cveSala='" . $audienciasDto->getCveSala() . "'";
            if (($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getpeso() != "") {
            $sql .= "peso='" . $audienciasDto->getPeso() . "'";
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
                    $tmp[$contador] = new AudienciasDTO();
                    $tmp[$contador]->setIdAudiencia($row["idAudiencia"]);
                    $tmp[$contador]->setIdSolicitudAudiencia($row["idSolicitudAudiencia"]);
                    $tmp[$contador]->setNumero($row["numero"]);
                    $tmp[$contador]->setAnio($row["anio"]);
                    $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setFechaInicial($row["fechaInicial"]);
                    $tmp[$contador]->setFechaFinal($row["fechaFinal"]);
                    $tmp[$contador]->setCveCatAudiencia($row["cveCatAudiencia"]);
                    $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                    $tmp[$contador]->setCveJuzgadoDesahoga($row["cveJuzgadoDesahoga"]);
                    $tmp[$contador]->setCveAdscripcionSolicita($row["cveAdscripcionSolicita"]);
                    $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                    $tmp[$contador]->setIdReferencia($row["idReferencia"]);
                    $tmp[$contador]->setDetenido($row["detenido"]);
                    $tmp[$contador]->setCveEstatusAudiencia($row["cveEstatusAudiencia"]);
                    $tmp[$contador]->setCveSala($row["cveSala"]);
                    $tmp[$contador]->setPeso($row["peso"]);
                    $tmp[$contador]->setIdAudienciaAuronix($row["idAudienciaAuronix"]);
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

    public function selectAudienciasBetween($audienciasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idAudiencia,idSolicitudAudiencia,numero,anio,cveTipoCarpeta,activo,fechaRegistro,fechaActualizacion,fechaInicial,fechaFinal,cveCatAudiencia,cveJuzgado,cveJuzgadoDesahoga,cveAdscripcionSolicita,cveUsuario,idReferencia,detenido,cveEstatusAudiencia,cveSala,peso FROM tblaudiencias ";
        if (($audienciasDto->getidAudiencia() != "") || ($audienciasDto->getidSolicitudAudiencia() != "") || ($audienciasDto->getnumero() != "") || ($audienciasDto->getanio() != "") || ($audienciasDto->getcveTipoCarpeta() != "") || ($audienciasDto->getactivo() != "") || ($audienciasDto->getfechaRegistro() != "") || ($audienciasDto->getfechaActualizacion() != "") || ($audienciasDto->getfechaInicial() != "") || ($audienciasDto->getfechaFinal() != "") || ($audienciasDto->getcveCatAudiencia() != "") || ($audienciasDto->getcveJuzgado() != "") || ($audienciasDto->getcveJuzgadoDesahoga() != "") || ($audienciasDto->getcveAdscripcionSolicita() != "") || ($audienciasDto->getcveUsuario() != "") || ($audienciasDto->getidReferencia() != "") || ($audienciasDto->getdetenido() != "") || ($audienciasDto->getcveEstatusAudiencia() != "") || ($audienciasDto->getcveSala() != "") || ($audienciasDto->getpeso() != "")) {
            $sql .= " WHERE ";
        }
        if ($audienciasDto->getfechaInicial() != "") {
            //$sql.="fechaInicial BETWEEN '" . $audienciasDto->getFechaInicial() . "' AND ('" . $audienciasDto->getFechaInicial() . "' + INTERVAL 1 HOUR - INTERVAL 1 SECOND)";
            $sql .= "fechaInicial BETWEEN '" . $audienciasDto->getFechaInicial() . " 00:00:00' AND '" . $audienciasDto->getFechaInicial() . " 23:59:59' ";
            if (($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getcveJuzgado() != "") {
            $sql .= "cveJuzgado='" . $audienciasDto->getCveJuzgado() . "'";
            if (($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getcveJuzgadoDesahoga() != "") {
            $sql .= "cveJuzgadoDesahoga='" . $audienciasDto->getCveJuzgadoDesahoga() . "'";
            if (($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }

        $sql .= " ORDER BY fechaInicial ASC";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new AudienciasDTO();
                    $tmp[$contador]->setIdAudiencia($row["idAudiencia"]);
                    $tmp[$contador]->setIdSolicitudAudiencia($row["idSolicitudAudiencia"]);
                    $tmp[$contador]->setNumero($row["numero"]);
                    $tmp[$contador]->setAnio($row["anio"]);
                    $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setFechaInicial($row["fechaInicial"]);
                    $tmp[$contador]->setFechaFinal($row["fechaFinal"]);
                    $tmp[$contador]->setCveCatAudiencia($row["cveCatAudiencia"]);
                    $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                    $tmp[$contador]->setCveJuzgadoDesahoga($row["cveJuzgadoDesahoga"]);
                    $tmp[$contador]->setCveAdscripcionSolicita($row["cveAdscripcionSolicita"]);
                    $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                    $tmp[$contador]->setIdReferencia($row["idReferencia"]);
                    $tmp[$contador]->setDetenido($row["detenido"]);
                    $tmp[$contador]->setCveEstatusAudiencia($row["cveEstatusAudiencia"]);
                    $tmp[$contador]->setCveSala($row["cveSala"]);
                    $tmp[$contador]->setPeso($row["peso"]);
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

    public function selectAudienciasBetweenGeneral($audienciasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idAudiencia,idSolicitudAudiencia,numero,anio,cveTipoCarpeta,activo,fechaRegistro,fechaActualizacion,fechaInicial,fechaFinal,cveCatAudiencia,cveJuzgado,cveJuzgadoDesahoga,cveAdscripcionSolicita,cveUsuario,idReferencia,detenido,cveEstatusAudiencia,cveSala,peso FROM tblaudiencias ";
        if (($audienciasDto->getidAudiencia() != "") || ($audienciasDto->getidSolicitudAudiencia() != "") || ($audienciasDto->getnumero() != "") || ($audienciasDto->getanio() != "") || ($audienciasDto->getcveTipoCarpeta() != "") || ($audienciasDto->getactivo() != "") || ($audienciasDto->getfechaRegistro() != "") || ($audienciasDto->getfechaActualizacion() != "") || ($audienciasDto->getfechaInicial() != "") || ($audienciasDto->getfechaFinal() != "") || ($audienciasDto->getcveCatAudiencia() != "") || ($audienciasDto->getcveJuzgado() != "") || ($audienciasDto->getcveJuzgadoDesahoga() != "") || ($audienciasDto->getcveAdscripcionSolicita() != "") || ($audienciasDto->getcveUsuario() != "") || ($audienciasDto->getidReferencia() != "") || ($audienciasDto->getdetenido() != "") || ($audienciasDto->getcveEstatusAudiencia() != "") || ($audienciasDto->getcveSala() != "") || ($audienciasDto->getpeso() != "")) {
            $sql .= " WHERE ";
        }
        if ($audienciasDto->getfechaInicial() != "") {
            $sql .= "fechaInicial BETWEEN '" . $audienciasDto->getFechaInicial() . " 00:00:00' AND '" . $audienciasDto->getFechaInicial() . " 23:59:59' ";
            if ((($audienciasDto->getCveJuzgado() != ""))) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getcveJuzgado() != "") {
            $sql .= "cveJuzgadoDesahoga='" . $audienciasDto->getCveJuzgado() . "'";
        }

        if ($audienciasDto->getCveEstatusAudiencia() != "") {
            $sql .= " AND cveEstatusAudiencia='" . $audienciasDto->getCveEstatusAudiencia() . "'";
        }

        $sql .= " AND activo = 'S' ";
        $sql .= " ORDER BY fechaInicial ASC";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new AudienciasDTO();
                    $tmp[$contador]->setIdAudiencia($row["idAudiencia"]);
                    $tmp[$contador]->setIdSolicitudAudiencia($row["idSolicitudAudiencia"]);
                    $tmp[$contador]->setNumero($row["numero"]);
                    $tmp[$contador]->setAnio($row["anio"]);
                    $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setFechaInicial($row["fechaInicial"]);
                    $tmp[$contador]->setFechaFinal($row["fechaFinal"]);
                    $tmp[$contador]->setCveCatAudiencia($row["cveCatAudiencia"]);
                    $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                    $tmp[$contador]->setCveJuzgadoDesahoga($row["cveJuzgadoDesahoga"]);
                    $tmp[$contador]->setCveAdscripcionSolicita($row["cveAdscripcionSolicita"]);
                    $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                    $tmp[$contador]->setIdReferencia($row["idReferencia"]);
                    $tmp[$contador]->setDetenido($row["detenido"]);
                    $tmp[$contador]->setCveEstatusAudiencia($row["cveEstatusAudiencia"]);
                    $tmp[$contador]->setCveSala($row["cveSala"]);
                    $tmp[$contador]->setPeso($row["peso"]);
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

    public function selectAudienciasJuzgador($audienciasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idAudiencia,idSolicitudAudiencia,numero,anio,cveTipoCarpeta,activo,fechaRegistro,fechaActualizacion,fechaInicial,fechaFinal,cveCatAudiencia,cveJuzgado,cveJuzgadoDesahoga,cveAdscripcionSolicita,cveUsuario,idReferencia,detenido,cveEstatusAudiencia,cveSala,peso FROM tblaudiencias ";
        if (($audienciasDto->getfechaInicial() != "") || ($audienciasDto->getcveJuzgado() != "")) {
            $sql .= " WHERE ";
        }
        if ($audienciasDto->getfechaInicial() != "") {
            $sql .= "fechaInicial BETWEEN '" . $audienciasDto->getFechaInicial() . " 00:00:00' AND '" . $audienciasDto->getFechaInicial() . " 23:59:59' ";
            if (($audienciasDto->getcveJuzgado() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getcveJuzgado() != "") {
            $sql .= "cveJuzgado='" . $audienciasDto->getCveJuzgado() . "'";
        }

        $sql .= " AND idAudiencia IN (" . $audienciasDto->getVariable() . ") ";

        if ($audienciasDto->getCveEstatusAudiencia() != "") {
            $sql .= " and cveEstatusAudiencia='" . $audienciasDto->getCveEstatusAudiencia() . "'";
        }
        $sql .= " and activo = 'S'";
        $sql .= " ORDER BY fechaInicial ASC";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new AudienciasDTO();
                    $tmp[$contador]->setIdAudiencia($row["idAudiencia"]);
                    $tmp[$contador]->setIdSolicitudAudiencia($row["idSolicitudAudiencia"]);
                    $tmp[$contador]->setNumero($row["numero"]);
                    $tmp[$contador]->setAnio($row["anio"]);
                    $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setFechaInicial($row["fechaInicial"]);
                    $tmp[$contador]->setFechaFinal($row["fechaFinal"]);
                    $tmp[$contador]->setCveCatAudiencia($row["cveCatAudiencia"]);
                    $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                    $tmp[$contador]->setCveJuzgadoDesahoga($row["cveJuzgadoDesahoga"]);
                    $tmp[$contador]->setCveAdscripcionSolicita($row["cveAdscripcionSolicita"]);
                    $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                    $tmp[$contador]->setIdReferencia($row["idReferencia"]);
                    $tmp[$contador]->setDetenido($row["detenido"]);
                    $tmp[$contador]->setCveEstatusAudiencia($row["cveEstatusAudiencia"]);
                    $tmp[$contador]->setCveSala($row["cveSala"]);
                    $tmp[$contador]->setPeso($row["peso"]);
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

    public function selectAudienciasSalas($audienciasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idAudiencia,idSolicitudAudiencia,numero,anio,cveTipoCarpeta,activo,fechaRegistro,fechaActualizacion,fechaInicial,fechaFinal,cveCatAudiencia,cveJuzgado,cveJuzgadoDesahoga,cveAdscripcionSolicita,cveUsuario,idReferencia,detenido,cveEstatusAudiencia,cveSala,peso FROM tblaudiencias ";
        if (($audienciasDto->getfechaInicial() != "") || ($audienciasDto->getcveSala() != "")) {
            $sql .= " WHERE ";
        }
        if ($audienciasDto->getfechaInicial() != "") {
            $sql .= "fechaInicial BETWEEN '" . $audienciasDto->getFechaInicial() . " 00:00:00' AND '" . $audienciasDto->getFechaInicial() . " 23:59:59' ";
            if (($audienciasDto->getCveSala() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getcveSala() != "") {
            $sql .= "cveSala='" . $audienciasDto->getCveSala() . "'";
        }

        if ($audienciasDto->getCveEstatusAudiencia() != "") {
            $sql .= " and cveEstatusAudiencia='" . $audienciasDto->getCveEstatusAudiencia() . "'";
        }
        $sql .= " and activo = 'S'";
        $sql .= "ORDER BY fechaInicial ASC";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new AudienciasDTO();
                    $tmp[$contador]->setIdAudiencia($row["idAudiencia"]);
                    $tmp[$contador]->setIdSolicitudAudiencia($row["idSolicitudAudiencia"]);
                    $tmp[$contador]->setNumero($row["numero"]);
                    $tmp[$contador]->setAnio($row["anio"]);
                    $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setFechaInicial($row["fechaInicial"]);
                    $tmp[$contador]->setFechaFinal($row["fechaFinal"]);
                    $tmp[$contador]->setCveCatAudiencia($row["cveCatAudiencia"]);
                    $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                    $tmp[$contador]->setCveJuzgadoDesahoga($row["cveJuzgadoDesahoga"]);
                    $tmp[$contador]->setCveAdscripcionSolicita($row["cveAdscripcionSolicita"]);
                    $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                    $tmp[$contador]->setIdReferencia($row["idReferencia"]);
                    $tmp[$contador]->setDetenido($row["detenido"]);
                    $tmp[$contador]->setCveEstatusAudiencia($row["cveEstatusAudiencia"]);
                    $tmp[$contador]->setCveSala($row["cveSala"]);
                    $tmp[$contador]->setPeso($row["peso"]);
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

    public function selectAudienciasPaginacion($audienciasDto, $param = "", $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT ";

        if ($param == "" || isset($param["fields"]) == "") {
            $sql .= " idAudiencia,idSolicitudAudiencia,numero,anio,cveTipoCarpeta,activo,fechaRegistro,fechaActualizacion,fechaInicial,fechaFinal,cveCatAudiencia,cveJuzgado,cveJuzgadoDesahoga,cveAdscripcionSolicita,cveUsuario,idReferencia,detenido,cveEstatusAudiencia,cveSala,peso ";
        } else {
            $sql .= " count(idAudiencia) as totalCount ";
        }

        $sql .= " FROM tblaudiencias ";

        if (($audienciasDto->getidAudiencia() != "") || ($audienciasDto->getidSolicitudAudiencia() != "") || ($audienciasDto->getnumero() != "") || ($audienciasDto->getanio() != "") || ($audienciasDto->getcveTipoCarpeta() != "") || ($audienciasDto->getactivo() != "") || ($audienciasDto->getfechaRegistro() != "") || ($audienciasDto->getfechaActualizacion() != "") || ($audienciasDto->getfechaInicial() != "") || ($audienciasDto->getfechaFinal() != "") || ($audienciasDto->getcveCatAudiencia() != "") || ($audienciasDto->getcveJuzgado() != "") || ($audienciasDto->getcveJuzgadoDesahoga() != "") || ($audienciasDto->getcveAdscripcionSolicita() != "") || ($audienciasDto->getcveUsuario() != "") || ($audienciasDto->getidReferencia() != "") || ($audienciasDto->getdetenido() != "") || ($audienciasDto->getcveEstatusAudiencia() != "") || ($audienciasDto->getcveSala() != "") || ($audienciasDto->getpeso() != "")) {
            $sql .= " WHERE ";
        }
        if ($audienciasDto->getidAudiencia() != "") {
            $sql .= "idAudiencia='" . $audienciasDto->getIdAudiencia() . "'";
            if (($audienciasDto->getIdSolicitudAudiencia() != "") || ($audienciasDto->getNumero() != "") || ($audienciasDto->getAnio() != "") || ($audienciasDto->getCveTipoCarpeta() != "") || ($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaRegistro() != "") || ($audienciasDto->getFechaActualizacion() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getidSolicitudAudiencia() != "") {
            $sql .= "idSolicitudAudiencia='" . $audienciasDto->getIdSolicitudAudiencia() . "'";
            if (($audienciasDto->getNumero() != "") || ($audienciasDto->getAnio() != "") || ($audienciasDto->getCveTipoCarpeta() != "") || ($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaRegistro() != "") || ($audienciasDto->getFechaActualizacion() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getnumero() != "") {
            $sql .= "numero='" . $audienciasDto->getNumero() . "'";
            if (($audienciasDto->getAnio() != "") || ($audienciasDto->getCveTipoCarpeta() != "") || ($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaRegistro() != "") || ($audienciasDto->getFechaActualizacion() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getanio() != "") {
            $sql .= "anio='" . $audienciasDto->getAnio() . "'";
            if (($audienciasDto->getCveTipoCarpeta() != "") || ($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaRegistro() != "") || ($audienciasDto->getFechaActualizacion() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getcveTipoCarpeta() != "") {
            $sql .= "cveTipoCarpeta='" . $audienciasDto->getCveTipoCarpeta() . "'";
            if (($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaRegistro() != "") || ($audienciasDto->getFechaActualizacion() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getactivo() != "") {
            $sql .= "activo='" . $audienciasDto->getActivo() . "'";
            if (($audienciasDto->getFechaRegistro() != "") || ($audienciasDto->getFechaActualizacion() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $audienciasDto->getFechaRegistro() . "'";
            if (($audienciasDto->getFechaActualizacion() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $audienciasDto->getFechaActualizacion() . "'";
            if (($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getfechaInicial() != "") {
            $sql .= "fechaInicial='" . $audienciasDto->getFechaInicial() . "'";
            if (($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getfechaFinal() != "") {
            $sql .= "fechaFinal='" . $audienciasDto->getFechaFinal() . "'";
            if (($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getcveCatAudiencia() != "") {
            $sql .= "cveCatAudiencia='" . $audienciasDto->getCveCatAudiencia() . "'";
            if (($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getcveJuzgado() != "") {
            $sql .= "cveJuzgado='" . $audienciasDto->getCveJuzgado() . "'";
            if (($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getcveJuzgadoDesahoga() != "") {
            $sql .= "cveJuzgadoDesahoga='" . $audienciasDto->getCveJuzgadoDesahoga() . "'";
            if (($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getcveAdscripcionSolicita() != "") {
            $sql .= "cveAdscripcionSolicita='" . $audienciasDto->getCveAdscripcionSolicita() . "'";
            if (($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getcveUsuario() != "") {
            $sql .= "cveUsuario='" . $audienciasDto->getCveUsuario() . "'";
            if (($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getidReferencia() != "") {
            $sql .= "idReferencia='" . $audienciasDto->getIdReferencia() . "'";
            if (($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getdetenido() != "") {
            $sql .= "detenido='" . $audienciasDto->getDetenido() . "'";
            if (($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getcveEstatusAudiencia() != "") {
            $sql .= "cveEstatusAudiencia='" . $audienciasDto->getCveEstatusAudiencia() . "'";
            if (($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getcveSala() != "") {
            $sql .= "cveSala='" . $audienciasDto->getCveSala() . "'";
            if (($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getpeso() != "") {
            $sql .= "peso='" . $audienciasDto->getPeso() . "'";
        }

        if ($param != "") {
            if ($param['fechaInicial'] != "" && $param['fechaInicial'] != 0 &&
                    $param['fechaFinal'] != "" && $param['fechaFinal'] != 0) {
                $helpSql = strpos($sql, " WHERE");
                if ($helpSql) {
                    $sql .= " AND ";
                } else {
                    $sql .= " WHERE ";
                }
                $sql .= " fechaInicial >= '" . $param['fechaInicial'] . " 00:00:00'";
                $sql .= " AND fechaInicial <= '" . $param['fechaFinal'] . " 23:59:59'";
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
            $sql .= $orden;
        } else {
            $sql .= "";
        }

        if ($param != "" || $param != null) {
            if (isset($param["fields"]) == "") {
                $sql .= " LIMIT " . $inicial . "," . $param["cantxPag"] . " ";
            }
        }

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($param == "" || isset($param["fields"]) == "") {
                        $tmp[$contador] = new AudienciasDTO();
                        $tmp[$contador]->setIdAudiencia($row["idAudiencia"]);
                        $tmp[$contador]->setIdSolicitudAudiencia($row["idSolicitudAudiencia"]);
                        $tmp[$contador]->setNumero($row["numero"]);
                        $tmp[$contador]->setAnio($row["anio"]);
                        $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                        $tmp[$contador]->setActivo($row["activo"]);
                        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                        $tmp[$contador]->setFechaInicial($row["fechaInicial"]);
                        $tmp[$contador]->setFechaFinal($row["fechaFinal"]);
                        $tmp[$contador]->setCveCatAudiencia($row["cveCatAudiencia"]);
                        $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                        $tmp[$contador]->setCveJuzgadoDesahoga($row["cveJuzgadoDesahoga"]);
                        $tmp[$contador]->setCveAdscripcionSolicita($row["cveAdscripcionSolicita"]);
                        $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                        $tmp[$contador]->setIdReferencia($row["idReferencia"]);
                        $tmp[$contador]->setDetenido($row["detenido"]);
                        $tmp[$contador]->setCveEstatusAudiencia($row["cveEstatusAudiencia"]);
                        $tmp[$contador]->setCveSala($row["cveSala"]);
                        $tmp[$contador]->setPeso($row["peso"]);
                        $contador++;
                    } else {
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

    public function selectAudienciasConsejo($audienciasDto, $audienciasJuzgadoresDto, $orden = "", $proveedor = null,$segunda = false) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = " SELECT a.idAudiencia,a.idSolicitudAudiencia,a.numero,a.anio,a.cveTipoCarpeta,a.activo,a.fechaRegistro,a.fechaActualizacion,a.fechaInicial,a.fechaFinal,";
        $sql .= " a.cveCatAudiencia,a.cveJuzgado,a.cveJuzgadoDesahoga,a.cveAdscripcionSolicita,a.cveUsuario,a.idReferencia,a.detenido,a.cveEstatusAudiencia,a.cveSala,a.peso, ";
        $sql .= " aj.idAudiencia, aj.idJuzgador, aj.activo";
        $sql .= "  FROM tblaudiencias as a, tblaudienciasjuzgador as aj";
        if (($audienciasDto->getidAudiencia() != "") || ($audienciasDto->getidSolicitudAudiencia() != "") || ($audienciasDto->getnumero() != "") || ($audienciasDto->getanio() != "") || ($audienciasDto->getcveTipoCarpeta() != "") || ($audienciasDto->getactivo() != "") || ($audienciasDto->getfechaRegistro() != "") || ($audienciasDto->getfechaActualizacion() != "") || ($audienciasDto->getfechaInicial() != "") || ($audienciasDto->getfechaFinal() != "") || ($audienciasDto->getcveCatAudiencia() != "") || ($audienciasDto->getcveJuzgado() != "") || ($audienciasDto->getcveJuzgadoDesahoga() != "") || ($audienciasDto->getcveAdscripcionSolicita() != "") || ($audienciasDto->getcveUsuario() != "") || ($audienciasDto->getidReferencia() != "") || ($audienciasDto->getdetenido() != "") || ($audienciasDto->getcveEstatusAudiencia() != "") || ($audienciasDto->getcveSala() != "") || ($audienciasDto->getpeso() != "")) {
            $sql .= " WHERE ";
        }
        if ($audienciasDto->getfechaInicial() != "") {
            $sql .= "a.fechaInicial BETWEEN '" . $audienciasDto->getFechaInicial() . " 00:00:00' AND '" . $audienciasDto->getFechaInicial() . " 23:59:59' ";
        }
        if ($audienciasDto->getcveJuzgadoDesahoga() != "") {
            $sql .= " AND a.cveJuzgadoDesahoga in (" . $audienciasDto->getcveJuzgadoDesahoga() . ")";
        }

        if ($audienciasDto->getCveEstatusAudiencia() != "") {
            $sql .= " AND a.cveEstatusAudiencia='" . $audienciasDto->getCveEstatusAudiencia() . "'";
        }
        if($segunda != "false"){
            $sql .= " AND a.cveTipoCarpeta=6 ";
        }else{
            $sql .= " AND a.cveTipoCarpeta<6 ";
        }

        if ($audienciasJuzgadoresDto->getIdJuzgador() != "") {
            $sql .= " AND aj.idJuzgador='" . $audienciasJuzgadoresDto->getIdJuzgador() . "'";
        }
        $sql .= " AND a.idAudiencia = aj.idAudiencia ";
        $sql .= " AND a.activo = 'S' ";
        $sql .= " ORDER BY a.fechaInicial ASC";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = array();
                    $tmp[$contador]["idAudiencia"] = ($row["idAudiencia"]);
                    $tmp[$contador]["idSolicitudAudiencia"] = ($row["idSolicitudAudiencia"]);
                    $tmp[$contador]["numero"] = ($row["numero"]);
                    $tmp[$contador]["anio"] = ($row["anio"]);
                    $tmp[$contador]["cveTipoCarpeta"] = ($row["cveTipoCarpeta"]);
                    $tmp[$contador]["activo"] = ($row["activo"]);
                    $tmp[$contador]["fechaRegistro"] = ($row["fechaRegistro"]);
                    $tmp[$contador]["fechaActualizacion"] = ($row["fechaActualizacion"]);
                    $tmp[$contador]["fechaInicial"] = ($row["fechaInicial"]);
                    $tmp[$contador]["fechaFinal"] = ($row["fechaFinal"]);
                    $tmp[$contador]["cveCatAudiencia"] = ($row["cveCatAudiencia"]);
                    $tmp[$contador]["cveJuzgado"] = ($row["cveJuzgado"]);
                    $tmp[$contador]["cveJuzgadoDesahoga"] = ($row["cveJuzgadoDesahoga"]);
                    $tmp[$contador]["cveAdscripcionSolicita"] = ($row["cveAdscripcionSolicita"]);
                    $tmp[$contador]["cveUsuario"] = ($row["cveUsuario"]);
                    $tmp[$contador]["idReferencia"] = ($row["idReferencia"]);
                    $tmp[$contador]["detenido"] = ($row["detenido"]);
                    $tmp[$contador]["cveEstatusAudiencia"] = ($row["cveEstatusAudiencia"]);
                    $tmp[$contador]["cveSala"] = ($row["cveSala"]);
                    $tmp[$contador]["peso"] = ($row["peso"]);
                    $tmp[$contador]["idJuzgador"] = ($row["idJuzgador"]);
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

    public function updateAudienciasAuronix($audienciasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblaudiencias SET ";
        if ($audienciasDto->getIdAudienciaAuronix() != "") {
            $sql .= "idAudienciaAuronix='" . $audienciasDto->getIdAudienciaAuronix() . "'";
        }

        $sql .= " ,fechaActualizacion = now()";

        $sql .= " WHERE idAudiencia='" . $audienciasDto->getidAudiencia() . "'";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new AudienciasDTO();
            $tmp->setidAudiencia($audienciasDto->getidAudiencia());
            $tmp = $this->selectAudiencias($tmp, "", $this->_proveedor);
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

    public function selectAudienciasPaginacionGral($audienciasDto, $param = "", $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT ";

        if ($param == "" || isset($param["fields"]) == "") {
            $sql .= " a.idAudiencia,a.idSolicitudAudiencia,a.numero,a.anio,a.cveTipoCarpeta,a.activo,a.fechaRegistro,a.fechaActualizacion,a.fechaInicial,a.fechaFinal,a.cveCatAudiencia,a.cveJuzgado,a.cveJuzgadoDesahoga,a.cveAdscripcionSolicita,a.cveUsuario,a.idReferencia,a.detenido,a.cveEstatusAudiencia,a.cveSala,a.peso ";
        } else {
            $sql .= " count(a.idAudiencia) as totalCount ";
        }

        $sql .= " FROM tblaudiencias a INNER JOIN tblaudienciasjuzgador j ON(a.idAudiencia = j.idAudiencia) ";

        if (($audienciasDto->getidAudiencia() != "") || ($audienciasDto->getidSolicitudAudiencia() != "") || ($audienciasDto->getnumero() != "") || ($audienciasDto->getanio() != "") || ($audienciasDto->getcveTipoCarpeta() != "") || ($audienciasDto->getactivo() != "") || ($audienciasDto->getfechaRegistro() != "") || ($audienciasDto->getfechaActualizacion() != "") || ($audienciasDto->getfechaInicial() != "") || ($audienciasDto->getfechaFinal() != "") || ($audienciasDto->getcveCatAudiencia() != "") || ($audienciasDto->getcveJuzgado() != "") || ($audienciasDto->getcveJuzgadoDesahoga() != "") || ($audienciasDto->getcveAdscripcionSolicita() != "") || ($audienciasDto->getcveUsuario() != "") || ($audienciasDto->getidReferencia() != "") || ($audienciasDto->getdetenido() != "") || ($audienciasDto->getcveEstatusAudiencia() != "") || ($audienciasDto->getcveSala() != "") || ($audienciasDto->getpeso() != "")) {
            $sql .= " WHERE ";
        }
        if ($audienciasDto->getidAudiencia() != "") {
            $sql .= "idAudiencia='" . $audienciasDto->getIdAudiencia() . "'";
            if (($audienciasDto->getIdSolicitudAudiencia() != "") || ($audienciasDto->getNumero() != "") || ($audienciasDto->getAnio() != "") || ($audienciasDto->getCveTipoCarpeta() != "") || ($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaRegistro() != "") || ($audienciasDto->getFechaActualizacion() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getidSolicitudAudiencia() != "") {
            $sql .= "idSolicitudAudiencia='" . $audienciasDto->getIdSolicitudAudiencia() . "'";
            if (($audienciasDto->getNumero() != "") || ($audienciasDto->getAnio() != "") || ($audienciasDto->getCveTipoCarpeta() != "") || ($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaRegistro() != "") || ($audienciasDto->getFechaActualizacion() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getnumero() != "") {
            $sql .= "numero='" . $audienciasDto->getNumero() . "'";
            if (($audienciasDto->getAnio() != "") || ($audienciasDto->getCveTipoCarpeta() != "") || ($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaRegistro() != "") || ($audienciasDto->getFechaActualizacion() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getanio() != "") {
            $sql .= "anio='" . $audienciasDto->getAnio() . "'";
            if (($audienciasDto->getCveTipoCarpeta() != "") || ($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaRegistro() != "") || ($audienciasDto->getFechaActualizacion() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getcveTipoCarpeta() != "") {
            $sql .= "cveTipoCarpeta='" . $audienciasDto->getCveTipoCarpeta() . "'";
            if (($audienciasDto->getActivo() != "") || ($audienciasDto->getFechaRegistro() != "") || ($audienciasDto->getFechaActualizacion() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getactivo() != "") {
            $sql .= "activo='" . $audienciasDto->getActivo() . "'";
            if (($audienciasDto->getFechaRegistro() != "") || ($audienciasDto->getFechaActualizacion() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $audienciasDto->getFechaRegistro() . "'";
            if (($audienciasDto->getFechaActualizacion() != "") || ($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $audienciasDto->getFechaActualizacion() . "'";
            if (($audienciasDto->getFechaInicial() != "") || ($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getfechaInicial() != "") {
            $sql .= "fechaInicial='" . $audienciasDto->getFechaInicial() . "'";
            if (($audienciasDto->getFechaFinal() != "") || ($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getfechaFinal() != "") {
            $sql .= "fechaFinal='" . $audienciasDto->getFechaFinal() . "'";
            if (($audienciasDto->getCveCatAudiencia() != "") || ($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getcveCatAudiencia() != "") {
            $sql .= "cveCatAudiencia='" . $audienciasDto->getCveCatAudiencia() . "'";
            if (($audienciasDto->getCveJuzgado() != "") || ($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getcveJuzgado() != "") {
            $sql .= "cveJuzgado='" . $audienciasDto->getCveJuzgado() . "'";
            if (($audienciasDto->getCveJuzgadoDesahoga() != "") || ($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getcveJuzgadoDesahoga() != "") {
            $sql .= "cveJuzgadoDesahoga='" . $audienciasDto->getCveJuzgadoDesahoga() . "'";
            if (($audienciasDto->getCveAdscripcionSolicita() != "") || ($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getcveAdscripcionSolicita() != "") {
            $sql .= "cveAdscripcionSolicita='" . $audienciasDto->getCveAdscripcionSolicita() . "'";
            if (($audienciasDto->getCveUsuario() != "") || ($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getcveUsuario() != "") {
            $sql .= "cveUsuario='" . $audienciasDto->getCveUsuario() . "'";
            if (($audienciasDto->getIdReferencia() != "") || ($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getidReferencia() != "") {
            $sql .= "idReferencia='" . $audienciasDto->getIdReferencia() . "'";
            if (($audienciasDto->getDetenido() != "") || ($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getdetenido() != "") {
            $sql .= "detenido='" . $audienciasDto->getDetenido() . "'";
            if (($audienciasDto->getCveEstatusAudiencia() != "") || ($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getcveEstatusAudiencia() != "") {
            $sql .= "cveEstatusAudiencia='" . $audienciasDto->getCveEstatusAudiencia() . "'";
            if (($audienciasDto->getCveSala() != "") || ($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getcveSala() != "") {
            $sql .= "cveSala='" . $audienciasDto->getCveSala() . "'";
            if (($audienciasDto->getPeso() != "")) {
                $sql .= " AND ";
            }
        }
        if ($audienciasDto->getpeso() != "") {
            $sql .= "peso='" . $audienciasDto->getPeso() . "'";
        }

        if (isset($param['cmbJuez']) && ($param['cmbJuez'] != '')) {
            $sql .= ' AND j.idJuzgador = "' . $param['cmbJuez'] . '"';
        }

        if ($param != "") {
            if ($param['fechaInicial'] != "" && $param['fechaInicial'] != 0 &&
                    $param['fechaFinal'] != "" && $param['fechaFinal'] != 0) {
                $helpSql = strpos($sql, " WHERE");
                if ($helpSql) {
                    $sql .= " AND ";
                } else {
                    $sql .= " WHERE ";
                }
                $sql .= " fechaInicial >= '" . $param['fechaInicial'] . " 00:00:00'";
                $sql .= " AND fechaInicial <= '" . $param['fechaFinal'] . " 23:59:59'";
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
            $sql .= $orden;
        } else {
            $sql .= "";
        }

        if ($param != "" || $param != null) {
            if (isset($param["fields"]) == "") {
                $sql .= " LIMIT " . $inicial . "," . $param["cantxPag"] . " ";
            }
        }

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($param == "" || isset($param["fields"]) == "") {
                        $tmp[$contador] = new AudienciasDTO();
                        $tmp[$contador]->setIdAudiencia($row["idAudiencia"]);
                        $tmp[$contador]->setIdSolicitudAudiencia($row["idSolicitudAudiencia"]);
                        $tmp[$contador]->setNumero($row["numero"]);
                        $tmp[$contador]->setAnio($row["anio"]);
                        $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                        $tmp[$contador]->setActivo($row["activo"]);
                        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                        $tmp[$contador]->setFechaInicial($row["fechaInicial"]);
                        $tmp[$contador]->setFechaFinal($row["fechaFinal"]);
                        $tmp[$contador]->setCveCatAudiencia($row["cveCatAudiencia"]);
                        $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                        $tmp[$contador]->setCveJuzgadoDesahoga($row["cveJuzgadoDesahoga"]);
                        $tmp[$contador]->setCveAdscripcionSolicita($row["cveAdscripcionSolicita"]);
                        $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                        $tmp[$contador]->setIdReferencia($row["idReferencia"]);
                        $tmp[$contador]->setDetenido($row["detenido"]);
                        $tmp[$contador]->setCveEstatusAudiencia($row["cveEstatusAudiencia"]);
                        $tmp[$contador]->setCveSala($row["cveSala"]);
                        $tmp[$contador]->setPeso($row["peso"]);
                        $contador++;
                    } else {
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

}

?>