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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/avisos/AvisosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class AvisosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertAvisos($avisosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblavisos(";
        if ($avisosDto->getIdAviso() != "") {
            $sql.="idAviso";
            if (($avisosDto->getCveGrupo() != "") || ($avisosDto->getTituloAviso() != "") || ($avisosDto->getSubtituloAviso() != "") || ($avisosDto->getTextAviso() != "") || ($avisosDto->getTituloLink() != "") || ($avisosDto->getLink() != "") || ($avisosDto->getUrlImg() != "") || ($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getCveGrupo() != "") {
            $sql.="cveGrupo";
            if (($avisosDto->getTituloAviso() != "") || ($avisosDto->getSubtituloAviso() != "") || ($avisosDto->getTextAviso() != "") || ($avisosDto->getTituloLink() != "") || ($avisosDto->getLink() != "") || ($avisosDto->getUrlImg() != "") || ($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getTituloAviso() != "") {
            $sql.="tituloAviso";
            if (($avisosDto->getSubtituloAviso() != "") || ($avisosDto->getTextAviso() != "") || ($avisosDto->getTituloLink() != "") || ($avisosDto->getLink() != "") || ($avisosDto->getUrlImg() != "") || ($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getSubtituloAviso() != "") {
            $sql.="subtituloAviso";
            if (($avisosDto->getTextAviso() != "") || ($avisosDto->getTituloLink() != "") || ($avisosDto->getLink() != "") || ($avisosDto->getUrlImg() != "") || ($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getTextAviso() != "") {
            $sql.="textAviso";
            if (($avisosDto->getTituloLink() != "") || ($avisosDto->getLink() != "") || ($avisosDto->getUrlImg() != "") || ($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getTituloLink() != "") {
            $sql.="tituloLink";
            if (($avisosDto->getLink() != "") || ($avisosDto->getUrlImg() != "") || ($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getLink() != "") {
            $sql.="link";
            if (($avisosDto->getUrlImg() != "") || ($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getUrlImg() != "") {
            $sql.="urlImg";
            if (($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getOrden() != "") {
            $sql.="orden";
            if (($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getFecInicio() != "") {
            $sql.="fecInicio";
            if (($avisosDto->getFecTermino() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getFecTermino() != "") {
            $sql.="fecTermino";
            if (($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getActivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($avisosDto->getIdAviso() != "") {
            $sql.="'" . $avisosDto->getIdAviso() . "'";
            if (($avisosDto->getCveGrupo() != "") || ($avisosDto->getTituloAviso() != "") || ($avisosDto->getSubtituloAviso() != "") || ($avisosDto->getTextAviso() != "") || ($avisosDto->getTituloLink() != "") || ($avisosDto->getLink() != "") || ($avisosDto->getUrlImg() != "") || ($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getCveGrupo() != "") {
            $sql.="'" . $avisosDto->getCveGrupo() . "'";
            if (($avisosDto->getTituloAviso() != "") || ($avisosDto->getSubtituloAviso() != "") || ($avisosDto->getTextAviso() != "") || ($avisosDto->getTituloLink() != "") || ($avisosDto->getLink() != "") || ($avisosDto->getUrlImg() != "") || ($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getTituloAviso() != "") {
            $sql.="'" . $avisosDto->getTituloAviso() . "'";
            if (($avisosDto->getSubtituloAviso() != "") || ($avisosDto->getTextAviso() != "") || ($avisosDto->getTituloLink() != "") || ($avisosDto->getLink() != "") || ($avisosDto->getUrlImg() != "") || ($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getSubtituloAviso() != "") {
            $sql.="'" . $avisosDto->getSubtituloAviso() . "'";
            if (($avisosDto->getTextAviso() != "") || ($avisosDto->getTituloLink() != "") || ($avisosDto->getLink() != "") || ($avisosDto->getUrlImg() != "") || ($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getTextAviso() != "") {
            $sql.="'" . $avisosDto->getTextAviso() . "'";
            if (($avisosDto->getTituloLink() != "") || ($avisosDto->getLink() != "") || ($avisosDto->getUrlImg() != "") || ($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getTituloLink() != "") {
            $sql.="'" . $avisosDto->getTituloLink() . "'";
            if (($avisosDto->getLink() != "") || ($avisosDto->getUrlImg() != "") || ($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getLink() != "") {
            $sql.="'" . $avisosDto->getLink() . "'";
            if (($avisosDto->getUrlImg() != "") || ($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getUrlImg() != "") {
            $sql.="'" . $avisosDto->getUrlImg() . "'";
            if (($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getOrden() != "") {
            $sql.="'" . $avisosDto->getOrden() . "'";
            if (($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getFecInicio() != "") {
            $sql.="'" . $avisosDto->getFecInicio() . "'";
            if (($avisosDto->getFecTermino() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getFecTermino() != "") {
            $sql.="'" . $avisosDto->getFecTermino() . "'";
            if (($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getFechaRegistro() != "") {
            if (($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getFechaActualizacion() != "") {
            if (($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getActivo() != "") {
            $sql.="'" . $avisosDto->getActivo() . "'";
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
//        echo "\n".$sql."\n";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new AvisosDTO();
            $tmp->setidAviso($this->_proveedor->lastID());
            $tmp = $this->selectAvisos($tmp, "", $this->_proveedor);
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

    public function updateAvisos($avisosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblavisos SET ";
        if ($avisosDto->getIdAviso() != "") {
            $sql.="idAviso='" . $avisosDto->getIdAviso() . "'";
            if (($avisosDto->getCveGrupo() != "") || ($avisosDto->getTituloAviso() != "") || ($avisosDto->getSubtituloAviso() != "") || ($avisosDto->getTextAviso() != "") || ($avisosDto->getTituloLink() != "") || ($avisosDto->getLink() != "") || ($avisosDto->getUrlImg() != "") || ($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getFechaRegistro() != "") || ($avisosDto->getFechaActualizacion() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getCveGrupo() != "") {
            $sql.="cveGrupo='" . $avisosDto->getCveGrupo() . "'";
            if (($avisosDto->getTituloAviso() != "") || ($avisosDto->getSubtituloAviso() != "") || ($avisosDto->getTextAviso() != "") || ($avisosDto->getTituloLink() != "") || ($avisosDto->getLink() != "") || ($avisosDto->getUrlImg() != "") || ($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getFechaRegistro() != "") || ($avisosDto->getFechaActualizacion() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getTituloAviso() != "") {
            $sql.="tituloAviso='" . $avisosDto->getTituloAviso() . "'";
            if (($avisosDto->getSubtituloAviso() != "") || ($avisosDto->getTextAviso() != "") || ($avisosDto->getTituloLink() != "") || ($avisosDto->getLink() != "") || ($avisosDto->getUrlImg() != "") || ($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getFechaRegistro() != "") || ($avisosDto->getFechaActualizacion() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getSubtituloAviso() != "") {
            $sql.="subtituloAviso='" . $avisosDto->getSubtituloAviso() . "'";
            if (($avisosDto->getTextAviso() != "") || ($avisosDto->getTituloLink() != "") || ($avisosDto->getLink() != "") || ($avisosDto->getUrlImg() != "") || ($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getFechaRegistro() != "") || ($avisosDto->getFechaActualizacion() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getTextAviso() != "") {
            $sql.="textAviso='" . $avisosDto->getTextAviso() . "'";
            if (($avisosDto->getTituloLink() != "") || ($avisosDto->getLink() != "") || ($avisosDto->getUrlImg() != "") || ($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getFechaRegistro() != "") || ($avisosDto->getFechaActualizacion() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getTituloLink() != "") {
            $sql.="tituloLink='" . $avisosDto->getTituloLink() . "'";
            if (($avisosDto->getLink() != "") || ($avisosDto->getUrlImg() != "") || ($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getFechaRegistro() != "") || ($avisosDto->getFechaActualizacion() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getLink() != "") {
            $sql.="link='" . $avisosDto->getLink() . "'";
            if (($avisosDto->getUrlImg() != "") || ($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getFechaRegistro() != "") || ($avisosDto->getFechaActualizacion() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getUrlImg() != "") {
            $sql.="urlImg='" . $avisosDto->getUrlImg() . "'";
            if (($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getFechaRegistro() != "") || ($avisosDto->getFechaActualizacion() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getOrden() != "") {
            $sql.="orden='" . $avisosDto->getOrden() . "'";
            if (($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getFechaRegistro() != "") || ($avisosDto->getFechaActualizacion() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getFecInicio() != "") {
            $sql.="fecInicio='" . $avisosDto->getFecInicio() . "'";
            if (($avisosDto->getFecTermino() != "") || ($avisosDto->getFechaRegistro() != "") || ($avisosDto->getFechaActualizacion() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getFecTermino() != "") {
            $sql.="fecTermino='" . $avisosDto->getFecTermino() . "'";
            if (($avisosDto->getFechaRegistro() != "") || ($avisosDto->getFechaActualizacion() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $avisosDto->getFechaRegistro() . "'";
            if (($avisosDto->getFechaActualizacion() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $avisosDto->getFechaActualizacion() . "'";
            if (($avisosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($avisosDto->getActivo() != "") {
            $sql.="activo='" . $avisosDto->getActivo() . "'";
        }
        $sql.=" WHERE idAviso='" . $avisosDto->getIdAviso() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new AvisosDTO();
            $tmp->setidAviso($avisosDto->getIdAviso());
            $tmp = $this->selectAvisos($tmp, "", $this->_proveedor);
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

    public function deleteAvisos($avisosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblavisos  WHERE idAviso='" . $avisosDto->getIdAviso() . "'";
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

    public function selectAvisos($avisosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idAviso,cveGrupo,tituloAviso,subtituloAviso,textAviso,tituloLink,link,urlImg,orden,concat(day(fecInicio),'/',month(fecInicio),'/',year(fecInicio)) as fecInicio, concat(day(fecTermino),'/',month(fecTermino),'/',year(fecTermino)) as fecTermino,fechaRegistro,fechaActualizacion,activo FROM tblavisos ";
        if (($avisosDto->getIdAviso() != "") || ($avisosDto->getCveGrupo() != "") || ($avisosDto->getTituloAviso() != "") || ($avisosDto->getSubtituloAviso() != "") || ($avisosDto->getTextAviso() != "") || ($avisosDto->getTituloLink() != "") || ($avisosDto->getLink() != "") || ($avisosDto->getUrlImg() != "") || ($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getFechaRegistro() != "") || ($avisosDto->getFechaActualizacion() != "") || ($avisosDto->getActivo() != "")) {
            $sql.=" WHERE ";
        }
        if ($avisosDto->getIdAviso() != "") {
            $sql.="idAviso='" . $avisosDto->getIdAviso() . "'";
            if (($avisosDto->getCveGrupo() != "") || ($avisosDto->getTituloAviso() != "") || ($avisosDto->getSubtituloAviso() != "") || ($avisosDto->getTextAviso() != "") || ($avisosDto->getTituloLink() != "") || ($avisosDto->getLink() != "") || ($avisosDto->getUrlImg() != "") || ($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getFechaRegistro() != "") || ($avisosDto->getFechaActualizacion() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($avisosDto->getCveGrupo() != "") {
            $sql.=" (cveGrupo='" . $avisosDto->getCveGrupo() . "'  OR cveGrupo = 0)";
            if (($avisosDto->getTituloAviso() != "") || ($avisosDto->getSubtituloAviso() != "") || ($avisosDto->getTextAviso() != "") || ($avisosDto->getTituloLink() != "") || ($avisosDto->getLink() != "") || ($avisosDto->getUrlImg() != "") || ($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getFechaRegistro() != "") || ($avisosDto->getFechaActualizacion() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($avisosDto->getTituloAviso() != "") {
            $sql.="tituloAviso='" . $avisosDto->getTituloAviso() . "'";
            if (($avisosDto->getSubtituloAviso() != "") || ($avisosDto->getTextAviso() != "") || ($avisosDto->getTituloLink() != "") || ($avisosDto->getLink() != "") || ($avisosDto->getUrlImg() != "") || ($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getFechaRegistro() != "") || ($avisosDto->getFechaActualizacion() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($avisosDto->getSubtituloAviso() != "") {
            $sql.="subtituloAviso='" . $avisosDto->getSubtituloAviso() . "'";
            if (($avisosDto->getTextAviso() != "") || ($avisosDto->getTituloLink() != "") || ($avisosDto->getLink() != "") || ($avisosDto->getUrlImg() != "") || ($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getFechaRegistro() != "") || ($avisosDto->getFechaActualizacion() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($avisosDto->getTextAviso() != "") {
            $sql.="textAviso='" . $avisosDto->getTextAviso() . "'";
            if (($avisosDto->getTituloLink() != "") || ($avisosDto->getLink() != "") || ($avisosDto->getUrlImg() != "") || ($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getFechaRegistro() != "") || ($avisosDto->getFechaActualizacion() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($avisosDto->getTituloLink() != "") {
            $sql.="tituloLink='" . $avisosDto->getTituloLink() . "'";
            if (($avisosDto->getLink() != "") || ($avisosDto->getUrlImg() != "") || ($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getFechaRegistro() != "") || ($avisosDto->getFechaActualizacion() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($avisosDto->getLink() != "") {
            $sql.="link='" . $avisosDto->getLink() . "'";
            if (($avisosDto->getUrlImg() != "") || ($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getFechaRegistro() != "") || ($avisosDto->getFechaActualizacion() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($avisosDto->getUrlImg() != "") {
            $sql.="urlImg='" . $avisosDto->getUrlImg() . "'";
            if (($avisosDto->getOrden() != "") || ($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getFechaRegistro() != "") || ($avisosDto->getFechaActualizacion() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($avisosDto->getOrden() != "") {
            $sql.="orden='" . $avisosDto->getOrden() . "'";
            if (($avisosDto->getFecInicio() != "") || ($avisosDto->getFecTermino() != "") || ($avisosDto->getFechaRegistro() != "") || ($avisosDto->getFechaActualizacion() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($avisosDto->getFecInicio() != "") {
            $sql.="fecInicio='" . $avisosDto->getFecInicio() . "'";
            if (($avisosDto->getFecTermino() != "") || ($avisosDto->getFechaRegistro() != "") || ($avisosDto->getFechaActualizacion() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($avisosDto->getFecTermino() != "") {
            $sql.="fecTermino>='" . $avisosDto->getFecTermino() . "'";
            if (($avisosDto->getFechaRegistro() != "") || ($avisosDto->getFechaActualizacion() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($avisosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $avisosDto->getFechaRegistro() . "'";
            if (($avisosDto->getFechaActualizacion() != "") || ($avisosDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($avisosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $avisosDto->getFechaActualizacion() . "'";
            if (($avisosDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($avisosDto->getActivo() != "") {
            $sql.="activo='" . $avisosDto->getActivo() . "'";
        }
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
//        echo "\n" . $sql . "\n";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new AvisosDTO();
                    $tmp[$contador]->setIdAviso($row["idAviso"]);
                    $tmp[$contador]->setCveGrupo($row["cveGrupo"]);
                    $tmp[$contador]->setTituloAviso($row["tituloAviso"]);
                    $tmp[$contador]->setSubtituloAviso($row["subtituloAviso"]);
                    $tmp[$contador]->setTextAviso($row["textAviso"]);
                    $tmp[$contador]->setTituloLink($row["tituloLink"]);
                    $tmp[$contador]->setLink($row["link"]);
                    $tmp[$contador]->setUrlImg($row["urlImg"]);
                    $tmp[$contador]->setOrden($row["orden"]);
                    $tmp[$contador]->setFecInicio($row["fecInicio"]);
                    $tmp[$contador]->setFecTermino($row["fecTermino"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setActivo($row["activo"]);
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