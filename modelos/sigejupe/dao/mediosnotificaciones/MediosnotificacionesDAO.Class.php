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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/mediosnotificaciones/MediosnotificacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class MediosnotificacionesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertMediosnotificaciones($mediosnotificacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblmediosnotificaciones(";
        if ($mediosnotificacionesDto->getcveMedioNotificacion() != "") {
            $sql.="cveMedioNotificacion";
            if (($mediosnotificacionesDto->getDesMedioNotificacion() != "") || ($mediosnotificacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($mediosnotificacionesDto->getdesMedioNotificacion() != "") {
            $sql.="desMedioNotificacion";
            if (($mediosnotificacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($mediosnotificacionesDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($mediosnotificacionesDto->getcveMedioNotificacion() != "") {
            $sql.="'" . $mediosnotificacionesDto->getcveMedioNotificacion() . "'";
            if (($mediosnotificacionesDto->getDesMedioNotificacion() != "") || ($mediosnotificacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($mediosnotificacionesDto->getdesMedioNotificacion() != "") {
            $sql.="'" . $mediosnotificacionesDto->getdesMedioNotificacion() . "'";
            if (($mediosnotificacionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($mediosnotificacionesDto->getactivo() != "") {
            $sql.="'" . $mediosnotificacionesDto->getactivo() . "'";
        }
        if ($mediosnotificacionesDto->getfechaRegistro() != "") {
            
        }
        if ($mediosnotificacionesDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new MediosnotificacionesDTO();
            $tmp->setcveMedioNotificacion($this->_proveedor->lastID());
            $tmp = $this->selectMediosnotificaciones($tmp, "", $this->_proveedor);
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

    public function updateMediosnotificaciones($mediosnotificacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblmediosnotificaciones SET ";
        if ($mediosnotificacionesDto->getcveMedioNotificacion() != "") {
            $sql.="cveMedioNotificacion='" . $mediosnotificacionesDto->getcveMedioNotificacion() . "'";
            if (($mediosnotificacionesDto->getDesMedioNotificacion() != "") || ($mediosnotificacionesDto->getActivo() != "") || ($mediosnotificacionesDto->getFechaRegistro() != "") || ($mediosnotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($mediosnotificacionesDto->getdesMedioNotificacion() != "") {
            $sql.="desMedioNotificacion='" . $mediosnotificacionesDto->getdesMedioNotificacion() . "'";
            if (($mediosnotificacionesDto->getActivo() != "") || ($mediosnotificacionesDto->getFechaRegistro() != "") || ($mediosnotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($mediosnotificacionesDto->getactivo() != "") {
            $sql.="activo='" . $mediosnotificacionesDto->getactivo() . "'";
            if (($mediosnotificacionesDto->getFechaRegistro() != "") || ($mediosnotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($mediosnotificacionesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $mediosnotificacionesDto->getfechaRegistro() . "'";
            if (($mediosnotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($mediosnotificacionesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $mediosnotificacionesDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE cveMedioNotificacion='" . $mediosnotificacionesDto->getcveMedioNotificacion() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new MediosnotificacionesDTO();
            $tmp->setcveMedioNotificacion($mediosnotificacionesDto->getcveMedioNotificacion());
            $tmp = $this->selectMediosnotificaciones($tmp, "", $this->_proveedor);
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

    public function deleteMediosnotificaciones($mediosnotificacionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblmediosnotificaciones  WHERE cveMedioNotificacion='" . $mediosnotificacionesDto->getcveMedioNotificacion() . "'";
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

    public function selectMediosnotificaciones($mediosnotificacionesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveMedioNotificacion,desMedioNotificacion,activo,fechaRegistro,fechaActualizacion,archivoController FROM tblmediosnotificaciones ";
        if (($mediosnotificacionesDto->getcveMedioNotificacion() != "") || ($mediosnotificacionesDto->getdesMedioNotificacion() != "") || ($mediosnotificacionesDto->getactivo() != "") || ($mediosnotificacionesDto->getfechaRegistro() != "") || ($mediosnotificacionesDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($mediosnotificacionesDto->getcveMedioNotificacion() != "") {
            $sql.="cveMedioNotificacion='" . $mediosnotificacionesDto->getCveMedioNotificacion() . "'";
            if (($mediosnotificacionesDto->getDesMedioNotificacion() != "") || ($mediosnotificacionesDto->getActivo() != "") || ($mediosnotificacionesDto->getFechaRegistro() != "") || ($mediosnotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($mediosnotificacionesDto->getdesMedioNotificacion() != "") {
            $sql.="desMedioNotificacion='" . $mediosnotificacionesDto->getDesMedioNotificacion() . "'";
            if (($mediosnotificacionesDto->getActivo() != "") || ($mediosnotificacionesDto->getFechaRegistro() != "") || ($mediosnotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($mediosnotificacionesDto->getactivo() != "") {
            $sql.="activo='" . $mediosnotificacionesDto->getActivo() . "'";
            if (($mediosnotificacionesDto->getFechaRegistro() != "") || ($mediosnotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($mediosnotificacionesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $mediosnotificacionesDto->getFechaRegistro() . "'";
            if (($mediosnotificacionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($mediosnotificacionesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $mediosnotificacionesDto->getFechaActualizacion() . "'";
            if (($mediosnotificacionesDto->archivoController() != "")) {
                $sql.=" AND ";
            }
        }
        if ($mediosnotificacionesDto->getArchivoController() != "") {
            $sql.="archivoController='" . $mediosnotificacionesDto->getArchivoController() . "'";
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
                    $tmp[$contador] = new MediosnotificacionesDTO();
                    $tmp[$contador]->setCveMedioNotificacion($row["cveMedioNotificacion"]);
                    $tmp[$contador]->setDesMedioNotificacion($row["desMedioNotificacion"]);
                    $tmp[$contador]->setArchivoController($row["archivoController"]);
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