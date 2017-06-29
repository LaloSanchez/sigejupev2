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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/antecedesnotificaciones/AntecedesnotificacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class AntecedesnotificacionesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertAntecedesnotificaciones($antecedesnotificacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblantecedesnotificaciones(";
        if ($antecedesnotificacionesDto->getIdAntecedesNotificacion() != "") {
            $sql.="idAntecedesNotificacion";
            if (($antecedesnotificacionesDto->getIdPersonaAutorizadaPadre() != "") || ($antecedesnotificacionesDto->getIdPersonaAutorizadaHijo() != "") || ($antecedesnotificacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($antecedesnotificacionesDto->getIdPersonaAutorizadaPadre() != "") {
            $sql.="IdPersonaAutorizadaPadre";
            if (($antecedesnotificacionesDto->getIdPersonaAutorizadaHijo() != "") || ($antecedesnotificacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($antecedesnotificacionesDto->getIdPersonaAutorizadaHijo() != "") {
            $sql.="IdPersonaAutorizadaHijo";
            if (($antecedesnotificacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($antecedesnotificacionesDto->getActivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($antecedesnotificacionesDto->getIdAntecedesNotificacion() != "") {
            $sql.="'" . $antecedesnotificacionesDto->getIdAntecedesNotificacion() . "'";
            if (($antecedesnotificacionesDto->getIdPersonaAutorizadaPadre() != "") || ($antecedesnotificacionesDto->getIdPersonaAutorizadaHijo() != "") || ($antecedesnotificacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($antecedesnotificacionesDto->getIdPersonaAutorizadaPadre() != "") {
            $sql.="'" . $antecedesnotificacionesDto->getIdPersonaAutorizadaPadre() . "'";
            if (($antecedesnotificacionesDto->getIdPersonaAutorizadaHijo() != "") || ($antecedesnotificacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($antecedesnotificacionesDto->getIdPersonaAutorizadaHijo() != "") {
            $sql.="'" . $antecedesnotificacionesDto->getIdPersonaAutorizadaHijo() . "'";
            if (($antecedesnotificacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($antecedesnotificacionesDto->getActivo() != "") {
            $sql.="'" . $antecedesnotificacionesDto->getActivo() . "'";
        }
        if ($antecedesnotificacionesDto->getFechaRegistro() != "") {
            
        }
        if ($antecedesnotificacionesDto->getFechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new AntecedesnotificacionesDTO();
            $tmp->setidAntecedesNotificacion($this->_proveedor->lastID());
            $tmp = $this->selectAntecedesnotificaciones($tmp, "", $this->_proveedor);
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

    public function updateAntecedesnotificaciones($antecedesnotificacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblantecedesnotificaciones SET ";
        if ($antecedesnotificacionesDto->getIdAntecedesNotificacion() != "") {
            $sql.="idAntecedesNotificacion='" . $antecedesnotificacionesDto->getIdAntecedesNotificacion() . "'";
            if (($antecedesnotificacionesDto->getIdPersonaAutorizadaPadre() != "") || ($antecedesnotificacionesDto->getIdPersonaAutorizadaHijo() != "") || ($antecedesnotificacionesDto->getActivo() != "") || ($antecedesnotificacionesDto->getFechaRegistro() != "") || ($antecedesnotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($antecedesnotificacionesDto->getIdPersonaAutorizadaPadre() != "") {
            $sql.="IdPersonaAutorizadaPadre='" . $antecedesnotificacionesDto->getIdPersonaAutorizadaPadre() . "'";
            if (($antecedesnotificacionesDto->getIdPersonaAutorizadaHijo() != "") || ($antecedesnotificacionesDto->getActivo() != "") || ($antecedesnotificacionesDto->getFechaRegistro() != "") || ($antecedesnotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($antecedesnotificacionesDto->getIdPersonaAutorizadaHijo() != "") {
            $sql.="IdPersonaAutorizadaHijo='" . $antecedesnotificacionesDto->getIdPersonaAutorizadaHijo() . "'";
            if (($antecedesnotificacionesDto->getActivo() != "") || ($antecedesnotificacionesDto->getFechaRegistro() != "") || ($antecedesnotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($antecedesnotificacionesDto->getActivo() != "") {
            $sql.="activo='" . $antecedesnotificacionesDto->getActivo() . "'";
            if (($antecedesnotificacionesDto->getFechaRegistro() != "") || ($antecedesnotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($antecedesnotificacionesDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $antecedesnotificacionesDto->getFechaRegistro() . "'";
            if (($antecedesnotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($antecedesnotificacionesDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $antecedesnotificacionesDto->getFechaActualizacion() . "'";
        }
        $sql.=" WHERE idAntecedesNotificacion='" . $antecedesnotificacionesDto->getIdAntecedesNotificacion() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new AntecedesnotificacionesDTO();
            $tmp->setidAntecedesNotificacion($antecedesnotificacionesDto->getIdAntecedesNotificacion());
            $tmp = $this->selectAntecedesnotificaciones($tmp, "", $this->_proveedor);
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

    public function deleteAntecedesnotificaciones($antecedesnotificacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblantecedesnotificaciones  WHERE idAntecedesNotificacion='" . $antecedesnotificacionesDto->getIdAntecedesNotificacion() . "'";
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

    public function selectAntecedesnotificaciones($antecedesnotificacionesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idAntecedesNotificacion,IdPersonaAutorizadaPadre,IdPersonaAutorizadaHijo,activo,fechaRegistro,fechaActualizacion FROM tblantecedesnotificaciones ";
        if (($antecedesnotificacionesDto->getIdAntecedesNotificacion() != "") || ($antecedesnotificacionesDto->getIdPersonaAutorizadaPadre() != "") || ($antecedesnotificacionesDto->getIdPersonaAutorizadaHijo() != "") || ($antecedesnotificacionesDto->getActivo() != "") || ($antecedesnotificacionesDto->getFechaRegistro() != "") || ($antecedesnotificacionesDto->getFechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($antecedesnotificacionesDto->getIdAntecedesNotificacion() != "") {
            $sql.="idAntecedesNotificacion='" . $antecedesnotificacionesDto->getIdAntecedesNotificacion() . "'";
            if (($antecedesnotificacionesDto->getIdPersonaAutorizadaPadre() != "") || ($antecedesnotificacionesDto->getIdPersonaAutorizadaHijo() != "") || ($antecedesnotificacionesDto->getActivo() != "") || ($antecedesnotificacionesDto->getFechaRegistro() != "") || ($antecedesnotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($antecedesnotificacionesDto->getIdPersonaAutorizadaPadre() != "") {
            $sql.="IdPersonaAutorizadaPadre='" . $antecedesnotificacionesDto->getIdPersonaAutorizadaPadre() . "'";
            if (($antecedesnotificacionesDto->getIdPersonaAutorizadaHijo() != "") || ($antecedesnotificacionesDto->getActivo() != "") || ($antecedesnotificacionesDto->getFechaRegistro() != "") || ($antecedesnotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($antecedesnotificacionesDto->getIdPersonaAutorizadaHijo() != "") {
            $sql.="IdPersonaAutorizadaHijo='" . $antecedesnotificacionesDto->getIdPersonaAutorizadaHijo() . "'";
            if (($antecedesnotificacionesDto->getActivo() != "") || ($antecedesnotificacionesDto->getFechaRegistro() != "") || ($antecedesnotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($antecedesnotificacionesDto->getActivo() != "") {
            $sql.="activo='" . $antecedesnotificacionesDto->getActivo() . "'";
            if (($antecedesnotificacionesDto->getFechaRegistro() != "") || ($antecedesnotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($antecedesnotificacionesDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $antecedesnotificacionesDto->getFechaRegistro() . "'";
            if (($antecedesnotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($antecedesnotificacionesDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $antecedesnotificacionesDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new AntecedesnotificacionesDTO();
                    $tmp[$contador]->setIdAntecedesNotificacion($row["idAntecedesNotificacion"]);
                    $tmp[$contador]->setIdPersonaAutorizadaPadre($row["IdPersonaAutorizadaPadre"]);
                    $tmp[$contador]->setIdPersonaAutorizadaHijo($row["IdPersonaAutorizadaHijo"]);
                    $tmp[$contador]->setActivo($row["activo"]);
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

}

?>