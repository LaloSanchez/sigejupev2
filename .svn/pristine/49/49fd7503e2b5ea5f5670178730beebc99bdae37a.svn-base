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
 *///actualizacion 

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/solicitudesperitos/SolicitudesperitosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/validacion/Validacion.Class.php");

class SolicitudesperitosDAO {

// se agrega numero de fojas
    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertSolicitudesperitos($solicitudesperitosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblsolicitudesperitosactuaciones(";
        if ($solicitudesperitosDto->getIdSolicitudPertioActuacion() != "") {
            $sql.="idSolicitudPertioActuacion";
            if (($solicitudesperitosDto->getIdActuacion() != "") || ($solicitudesperitosDto->getIdReferencia() != "") || ($solicitudesperitosDto->getNumeroSolicitud() != "") || ($solicitudesperitosDto->getAniSolicitud() != "") || ($solicitudesperitosDto->getNumero() != "") || ($solicitudesperitosDto->getAnio() != "") || ($solicitudesperitosDto->getCveTipoCarpeta() != "") || ($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getIdActuacion() != "") {
            $sql.="idActuacion";
            if (($solicitudesperitosDto->getIdReferencia() != "") || ($solicitudesperitosDto->getNumeroSolicitud() != "") || ($solicitudesperitosDto->getAniSolicitud() != "") || ($solicitudesperitosDto->getNumero() != "") || ($solicitudesperitosDto->getAnio() != "") || ($solicitudesperitosDto->getCveTipoCarpeta() != "") || ($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getIdReferencia() != "") {
            $sql.="idReferencia";
            if (($solicitudesperitosDto->getNumeroSolicitud() != "") || ($solicitudesperitosDto->getAniSolicitud() != "") || ($solicitudesperitosDto->getNumero() != "") || ($solicitudesperitosDto->getAnio() != "") || ($solicitudesperitosDto->getCveTipoCarpeta() != "") || ($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") || ($solicitudesperitosDto->getObservaciones() != "")  || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getNumeroSolicitud() != "") {
            $sql.="numeroSolicitud";
            if (($solicitudesperitosDto->getAniSolicitud() != "") || ($solicitudesperitosDto->getNumero() != "") || ($solicitudesperitosDto->getAnio() != "") || ($solicitudesperitosDto->getCveTipoCarpeta() != "") || ($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getAniSolicitud() != "") {
            $sql.="aniSolicitud";
            if (($solicitudesperitosDto->getNumero() != "") || ($solicitudesperitosDto->getAnio() != "") || ($solicitudesperitosDto->getCveTipoCarpeta() != "") || ($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getNumero() != "") {
            $sql.="numero";
            if (($solicitudesperitosDto->getAnio() != "") || ($solicitudesperitosDto->getCveTipoCarpeta() != "") || ($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getAnio() != "") {
            $sql.="anio";
            if (($solicitudesperitosDto->getCveTipoCarpeta() != "") || ($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getCveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta";
            if (($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getFechaSolicitud() != "") {
            $sql.="fechaSolicitud";
            if (($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getIdPerito() != "") {
            $sql.="idPerito";
            if (($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getNombrePerito() != "") {
            $sql.="nombrePerito";
            if (($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getMateriaPericial() != "") {
            $sql.="materiaPericial";
            if (($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getCveMateriaPericial() != "") {
            $sql.="cveMateriaPericial";
            if (($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getCveRegionPericial() != "") {
            $sql.="cveRegionPericial";
            if (($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado";
            if (($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") {
            $sql.="idReferenciaActuacionHija";
            if (($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getObservaciones() != "") {
            $sql.="observaciones";
            if (($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getActivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($solicitudesperitosDto->getIdSolicitudPertioActuacion() != "") {
            $sql.="'" . $solicitudesperitosDto->getIdSolicitudPertioActuacion() . "'";
            if (($solicitudesperitosDto->getIdActuacion() != "") || ($solicitudesperitosDto->getIdReferencia() != "") || ($solicitudesperitosDto->getNumeroSolicitud() != "") || ($solicitudesperitosDto->getAniSolicitud() != "") || ($solicitudesperitosDto->getNumero() != "") || ($solicitudesperitosDto->getAnio() != "") || ($solicitudesperitosDto->getCveTipoCarpeta() != "") || ($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getIdActuacion() != "") {
            $sql.="'" . $solicitudesperitosDto->getIdActuacion() . "'";
            if (($solicitudesperitosDto->getIdReferencia() != "") || ($solicitudesperitosDto->getNumeroSolicitud() != "") || ($solicitudesperitosDto->getAniSolicitud() != "") || ($solicitudesperitosDto->getNumero() != "") || ($solicitudesperitosDto->getAnio() != "") || ($solicitudesperitosDto->getCveTipoCarpeta() != "") || ($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getIdReferencia() != "") {
            $sql.="'" . $solicitudesperitosDto->getIdReferencia() . "'";
            if (($solicitudesperitosDto->getNumeroSolicitud() != "") || ($solicitudesperitosDto->getAniSolicitud() != "") || ($solicitudesperitosDto->getNumero() != "") || ($solicitudesperitosDto->getAnio() != "") || ($solicitudesperitosDto->getCveTipoCarpeta() != "") || ($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getNumeroSolicitud() != "") {
            $sql.="'" . $solicitudesperitosDto->getNumeroSolicitud() . "'";
            if (($solicitudesperitosDto->getAniSolicitud() != "") || ($solicitudesperitosDto->getNumero() != "") || ($solicitudesperitosDto->getAnio() != "") || ($solicitudesperitosDto->getCveTipoCarpeta() != "") || ($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getAniSolicitud() != "") {
            $sql.="'" . $solicitudesperitosDto->getAniSolicitud() . "'";
            if (($solicitudesperitosDto->getNumero() != "") || ($solicitudesperitosDto->getAnio() != "") || ($solicitudesperitosDto->getCveTipoCarpeta() != "") || ($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getNumero() != "") {
            $sql.="'" . $solicitudesperitosDto->getNumero() . "'";
            if (($solicitudesperitosDto->getAnio() != "") || ($solicitudesperitosDto->getCveTipoCarpeta() != "") || ($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getAnio() != "") {
            $sql.="'" . $solicitudesperitosDto->getAnio() . "'";
            if (($solicitudesperitosDto->getCveTipoCarpeta() != "") || ($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") ||  ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getCveTipoCarpeta() != "") {
            $sql.="'" . $solicitudesperitosDto->getCveTipoCarpeta() . "'";
            if (($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getFechaSolicitud() != "") {
            $sql.="'" . $solicitudesperitosDto->getFechaSolicitud() . "'";
            if (($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getIdPerito() != "") {
            $sql.="'" . $solicitudesperitosDto->getIdPerito() . "'";
            if (($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getNombrePerito() != "") {
            $sql.="'" . $solicitudesperitosDto->getNombrePerito() . "'";
            if (($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getMateriaPericial() != "") {
            $sql.="'" . $solicitudesperitosDto->getMateriaPericial() . "'";
            if (($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getCveMateriaPericial() != "") {
            $sql.="'" . $solicitudesperitosDto->getCveMateriaPericial() . "'";
            if (($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }

        if ($solicitudesperitosDto->getCveRegionPericial() != "") {
            $sql.="'" . $solicitudesperitosDto->getCveRegionPericial() . "'";
            if (($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") ||  ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getCveJuzgado() != "") {
            $sql.="'" . $solicitudesperitosDto->getCveJuzgado() . "'";
            if (($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getIdReferenciaActuacionHija() != "") {
            $sql.="'" . $solicitudesperitosDto->getIdReferenciaActuacionHija() . "'";
            if (($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getObservaciones() != "") {
            $sql.="'" . $solicitudesperitosDto->getObservaciones() . "'";
            if (($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getActivo() != "") {
            $sql.="'" . $solicitudesperitosDto->getActivo() . "'";
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new SolicitudesperitosDTO();
            $tmp->setIdSolicitudPertioActuacion($this->_proveedor->lastID());
            $tmp = $this->selectSolicitudesperitos($tmp, $this->_proveedor, "", null, null);
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

    public function updateSolicitudesperitos($solicitudesperitosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblsolicitudesperitosactuaciones SET ";
//        if ($solicitudesperitosDto->getIdActuacion() != "") {
//            $sql.="idActuacion='" . $solicitudesperitosDto->getIdActuacion() . "'";
//            if (($solicitudesperitosDto->getNumActuacion() != "") || ($solicitudesperitosDto->getAniActuacion() != "") || ($solicitudesperitosDto->getCveTipoActuacion() != "") || ($solicitudesperitosDto->getIdReferencia() != "") || ($solicitudesperitosDto->getNumero() != "") || ($solicitudesperitosDto->getAnio() != "") || ($solicitudesperitosDto->getNoFojas() != "") || ($solicitudesperitosDto->getCveTipoCarpeta() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getSintesis() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getCveUsuario() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "") || ($solicitudesperitosDto->getCveEstado() != "") || ($solicitudesperitosDto->getCveJuzgadoDestino() != "") || ($solicitudesperitosDto->getJuzgadoDestino() != "") || ($solicitudesperitosDto->getCveTipoNotificacion() != "") || ($solicitudesperitosDto->getCveTipoSentencia() != "") || ($solicitudesperitosDto->getCveTipoAuto() != "") || ($solicitudesperitosDto->getCveTipoResolucion() != "") || ($solicitudesperitosDto->getCveTipoOrden() != "") || ($solicitudesperitosDto->getCveTipoProcedimiento() != "") || ($solicitudesperitosDto->getFechaSentencia() != "") || ($solicitudesperitosDto->getFechaEjecutoria() != "")) {
//                $sql.=",";
//            }
//        }
//        if ($solicitudesperitosDto->getObservaciones() != "") {
        /* $sql.="observaciones='" . $solicitudesperitosDto->getObservaciones() . "'";
          if (($solicitudesperitosDto->getNumActuacion() != "") || ($solicitudesperitosDto->getAniActuacion() != "") || ($solicitudesperitosDto->getCveTipoActuacion() != "") || ($solicitudesperitosDto->getIdReferencia() != "") || ($solicitudesperitosDto->getNumero() != "") || ($solicitudesperitosDto->getAnio() != "") || ($solicitudesperitosDto->getNoFojas() != "") || ($solicitudesperitosDto->getCveTipoCarpeta() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getSintesis() != "") || ($solicitudesperitosDto->getCveUsuario() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "") || ($solicitudesperitosDto->getCveEstado() != "") || ($solicitudesperitosDto->getCveJuzgadoDestino() != "") || ($solicitudesperitosDto->getJuzgadoDestino() != "") || ($solicitudesperitosDto->getCveTipoNotificacion() != "") || ($solicitudesperitosDto->getCveTipoSentencia() != "") || ($solicitudesperitosDto->getCveTipoAuto() != "") || ($solicitudesperitosDto->getCveTipoResolucion() != "") || ($solicitudesperitosDto->getCveTipoOrden() != "") || ($solicitudesperitosDto->getCveTipoProcedimiento() != "") || ($solicitudesperitosDto->getFechaSentencia() != "") || ($solicitudesperitosDto->getFechaEjecutoria() != "")) {
          $sql.=",";
          } */
//        }
        if ($solicitudesperitosDto->getIdActuacion() != "") {
            $sql.="idActuacion='" . $solicitudesperitosDto->getIdActuacion() . "'";
            if (($solicitudesperitosDto->getIdReferencia() != "") || ($solicitudesperitosDto->getNumeroSolicitud() != "") || ($solicitudesperitosDto->getAniSolicitud() != "") || ($solicitudesperitosDto->getNumero() != "") || ($solicitudesperitosDto->getAnio() != "") || ($solicitudesperitosDto->getCveTipoCarpeta() != "") || ($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getIdReferencia() != "") {
            $sql.="idReferencia='" . $solicitudesperitosDto->getIdReferencia() . "'";
            if (($solicitudesperitosDto->getNumeroSolicitud() != "") || ($solicitudesperitosDto->getAniSolicitud() != "") || ($solicitudesperitosDto->getNumero() != "") || ($solicitudesperitosDto->getAnio() != "") || ($solicitudesperitosDto->getCveTipoCarpeta() != "") || ($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getNumeroSolicitud() != "") {
            $sql.="numeroSolicitud='" . $solicitudesperitosDto->getNumeroSolicitud() . "'";
            if (($solicitudesperitosDto->getAniSolicitud() != "") || ($solicitudesperitosDto->getNumero() != "") || ($solicitudesperitosDto->getAnio() != "") || ($solicitudesperitosDto->getCveTipoCarpeta() != "") || ($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getAniSolicitud() != "") {
            $sql.="aniSolicitud='" . $solicitudesperitosDto->getAniSolicitud() . "'";
            if (($solicitudesperitosDto->getNumero() != "") || ($solicitudesperitosDto->getAnio() != "") || ($solicitudesperitosDto->getCveTipoCarpeta() != "") || ($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getNumero() != "") {
            $sql.="numero='" . $solicitudesperitosDto->getNumero() . "'";
            if (($solicitudesperitosDto->getAnio() != "") || ($solicitudesperitosDto->getCveTipoCarpeta() != "") || ($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getAnio() != "") {
            $sql.="anio='" . $solicitudesperitosDto->getAnio() . "'";
            if (($solicitudesperitosDto->getCveTipoCarpeta() != "") || ($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getCveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta='" . $solicitudesperitosDto->getCveTipoCarpeta() . "'";
            if (($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getFechaSolicitud() != "") {
            $sql.="fechaSolicitud='" . $solicitudesperitosDto->getFechaSolicitud() . "'";
            if (($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getIdPerito() != "") {
            $sql.="idPerito='" . $solicitudesperitosDto->getIdPerito() . "'";
            if (($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getNombrePerito() != "") {
            $sql.="nombrePerito='" . $solicitudesperitosDto->getNombrePerito() . "'";
            if (($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getMateriaPericial() != "") {
            $sql.="materiaPericial='" . $solicitudesperitosDto->getMateriaPericial() . "'";
            if (($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getCveMateriaPericial() != "") {
            $sql.="cveMateriaPericial='" . $solicitudesperitosDto->getCveMateriaPericial() . "'";
            if (($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getCveRegionPericial() != "") {
            $sql.="cveRegionPericial='" . $solicitudesperitosDto->getCveRegionPericial() . "'";
            if (($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getObservaciones() != "") {
            $sql.="observaciones='" . $solicitudesperitosDto->getObservaciones() . "'";
            if (($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($solicitudesperitosDto->getActivo() != "") {
            $sql.="activo='" . $solicitudesperitosDto->getActivo() . "'";
        }
        $sql.=" WHERE idSolicitudPertioActuacion='" . $solicitudesperitosDto->getIdSolicitudPertioActuacion() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new SolicitudesperitosDTO();                    
            $tmp->setIdSolicitudPertioActuacion($solicitudesperitosDto->getIdSolicitudPertioActuacion());
            $tmp = $this->selectSolicitudesperitos($tmp, $this->_proveedor);
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

    public function deleteSolicitudesperitos($solicitudesperitosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblsolicitudesperitosactuaciones  WHERE idSolicitudPertioActuacion='" . $solicitudesperitosDto->getIdSolicitudPertioActuacion() . "'";
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

//    public function selectSolicitudesperitos($solicitudesperitosDto, $orden = "", $param = null, $proveedor = null, $fields = null) {
    public function selectSolicitudesperitos($solicitudesperitosDto, $proveedor = null, $orden = "", $param = null, $fields = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }        
        $sql = "SELECT";

        if ($fields === null) {  
            $sql .= " idSolicitudPertioActuacion,idActuacion,idReferencia,numeroSolicitud,aniSolicitud,numero,anio,cveTipoCarpeta,fechaSolicitud,idPerito,nombrePerito,materiaPericial,cveMateriaPericial,cveRegionPericial,observaciones,cveJuzgado,idReferenciaActuacionHija,observaciones,activo,fechaRegistro,fechaActualizacion ";
        } else {
            $sql .= $fields;
        }        
        $sql .= "FROM tblsolicitudesperitosactuaciones";                        
        if (($solicitudesperitosDto->getIdSolicitudPertioActuacion() != "") || ($solicitudesperitosDto->getIdActuacion() != "") || ($solicitudesperitosDto->getIdReferencia() != "") || ($solicitudesperitosDto->getNumeroSolicitud() != "") || ($solicitudesperitosDto->getAniSolicitud() != "") || ($solicitudesperitosDto->getNumero() != "") || ($solicitudesperitosDto->getCveTipoCarpeta() != "") ||  ($solicitudesperitosDto->getAnio() != "") || ($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getObservaciones() != "") ||  ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
            $sql.=" WHERE ";            
        }
        if ($solicitudesperitosDto->getIdSolicitudPertioActuacion() != "") {
            $sql.="idSolicitudPertioActuacion = " . $solicitudesperitosDto->getIdSolicitudPertioActuacion();
            if (($solicitudesperitosDto->getIdActuacion() != "") || ($solicitudesperitosDto->getIdReferencia() != "") || ($solicitudesperitosDto->getNumeroSolicitud() != "") || ($solicitudesperitosDto->getAniSolicitud() != "") || ($solicitudesperitosDto->getNumero() != "") || ($solicitudesperitosDto->getAnio() != "") || ($solicitudesperitosDto->getCveTipoCarpeta() != "") ||  ($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesperitosDto->getIdActuacion() != "") {
            $sql.="idActuacion in( " . $solicitudesperitosDto->getIdActuacion() . ")";
            if (($solicitudesperitosDto->getIdReferencia() != "") || ($solicitudesperitosDto->getNumeroSolicitud() != "") || ($solicitudesperitosDto->getAniSolicitud() != "") || ($solicitudesperitosDto->getNumero() != "") || ($solicitudesperitosDto->getAnio() != "") || ($solicitudesperitosDto->getCveTipoCarpeta() != "") ||  ($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesperitosDto->getIdReferencia() != "") {
            $sql.="idReferencia in( " . $solicitudesperitosDto->getIdReferencia() . ")";
            if (($solicitudesperitosDto->getNumeroSolicitud() != "") || ($solicitudesperitosDto->getAniSolicitud() != "") || ($solicitudesperitosDto->getNumero() != "") || ($solicitudesperitosDto->getAnio() != "") || ($solicitudesperitosDto->getCveTipoCarpeta() != "") ||  ($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesperitosDto->getNumeroSolicitud() != "") {
            $sql.="numeroSolicitud='" . $solicitudesperitosDto->getNumeroSolicitud() . "'";
            if (($solicitudesperitosDto->getAniSolicitud() != "") || ($solicitudesperitosDto->getNumero() != "") || ($solicitudesperitosDto->getAnio() != "") || ($solicitudesperitosDto->getCveTipoCarpeta() != "") ||  ($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesperitosDto->getAniSolicitud() != "") {
            $sql.="aniSolicitud='" . $solicitudesperitosDto->getAniSolicitud() . "'";
            if (($solicitudesperitosDto->getNumero() != "") || ($solicitudesperitosDto->getAnio() != "") || ($solicitudesperitosDto->getCveTipoCarpeta() != "") ||  ($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesperitosDto->getNumero() != "") {
            $sql.="numero='" . $solicitudesperitosDto->getNumero() . "'";
            if (($solicitudesperitosDto->getAnio() != "") || ($solicitudesperitosDto->getCveTipoCarpeta() != "") ||  ($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesperitosDto->getAnio() != "") {
            $sql.="anio='" . $solicitudesperitosDto->getAnio() . "'";
            if (($solicitudesperitosDto->getCveTipoCarpeta() != "") ||  ($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesperitosDto->getCveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta='" . $solicitudesperitosDto->getCveTipoCarpeta() . "'";
            if (($solicitudesperitosDto->getFechaSolicitud() != "") || ($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesperitosDto->getFechaSolicitud() != "") {
            $sql.="fechaSolicitud='" . $solicitudesperitosDto->getFechaSolicitud() . "'";
            if (($solicitudesperitosDto->getIdPerito() != "") || ($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesperitosDto->getIdPerito() != "") {
            $sql.="idPerito='" . $solicitudesperitosDto->getIdPerito() . "'";
            if (($solicitudesperitosDto->getNombrePerito() != "") || ($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesperitosDto->getNombrePerito() != "") {
            $sql.="nombrePerito='" . $solicitudesperitosDto->getNombrePerito() . "'";
            if (($solicitudesperitosDto->getMateriaPericial() != "") || ($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesperitosDto->getMateriaPericial() != "") {
            $sql.="materiaPericial='" . $solicitudesperitosDto->getMateriaPericial() . "'";
            if (($solicitudesperitosDto->getCveMateriaPericial() != "") || ($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getObservaciones() != "") ||  ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesperitosDto->getCveMateriaPericial() != "") {
            $sql.="cveMateriaPericial='" . $solicitudesperitosDto->getCveMateriaPericial() . "'";
            if (($solicitudesperitosDto->getCveRegionPericial() != "") || ($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesperitosDto->getCveRegionPericial() != "") {
            $sql.="cveRegionPericial='" . $solicitudesperitosDto->getCveRegionPericial() . "'";
            if (($solicitudesperitosDto->getCveJuzgado() != "") || ($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesperitosDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado='" . $solicitudesperitosDto->getCveJuzgado() . "'";
            if (($solicitudesperitosDto->getObservaciones() != "") || ($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesperitosDto->getObservaciones() != "") {
            $sql.="observaciones='" . $solicitudesperitosDto->getObservaciones() . "'";
            if (($solicitudesperitosDto->getActivo() != "") || ($solicitudesperitosDto->getFechaRegistro() != "") || ($solicitudesperitosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($solicitudesperitosDto->getActivo() != "") {
            $sql.="activo='" . $solicitudesperitosDto->getActivo() . "'";
        }        
        $inicial = "";
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
            $sql.=" ORDER BY numeroSolicitud DESC";
        }
        if ($param != "" || $param != null) {
            $sql.=" LIMIT " . $inicial . "," . $param["cantxPag"];
        }       
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {

                $numField = mysqli_num_fields($this->_proveedor->stmt);
                //var_dump($numField);
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {

                    if ($fields === null) {
                        @$tmp[$contador] = new SolicitudesperitosDTO();
                        @$tmp[$contador]->setIdSolicitudPertioActuacion($row["idSolicitudPertioActuacion"]);
                        @$tmp[$contador]->setIdActuacion($row["idActuacion"]);
                        @$tmp[$contador]->setIdReferencia($row["idReferencia"]);
                        @$tmp[$contador]->setNumeroSolicitud($row["numeroSolicitud"]);
                        @$tmp[$contador]->setAniSolicitud($row["aniSolicitud"]);
                        @$tmp[$contador]->setNumero($row["numero"]);
                        @$tmp[$contador]->setAnio($row["anio"]);
                        @$tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                        @$tmp[$contador]->setFechaSolicitud($row["fechaSolicitud"]);
                        @$tmp[$contador]->setIdPerito($row["idPerito"]);
                        @$tmp[$contador]->setNombrePerito(utf8_encode($row["nombrePerito"]));
                        @$tmp[$contador]->setMateriaPericial($row["materiaPericial"]);
                        @$tmp[$contador]->setCveMateriaPericial($row["cveMateriaPericial"]);
                        @$tmp[$contador]->setCveRegionPericial(utf8_encode($row["cveRegionPericial"]));   ////para permitir acentos
                        @$tmp[$contador]->setIdReferenciaActuacionHija($row["idReferenciaActuacionHija"]);
                        @$tmp[$contador]->setCveJuzgado(utf8_encode($row["cveJuzgado"]));
                        @$tmp[$contador]->setObservaciones($row["observaciones"]);
                        @$tmp[$contador]->setActivo(utf8_encode($row["activo"]));
                        @$tmp[$contador]->setImagen(utf8_encode($row["idPerito"]));
                        @$tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        @$tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                        @$tmp[$contador]->setPagina($param["pag"]);
                        //$contador++;
                    } else {
                        $tmp[$contador] = array();
                        for ($i = 0; $i < $numField; $i++) {
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
        //echo $sql;
        unset($contador);
        unset($sql);
        return $tmp;
    }

}

?>