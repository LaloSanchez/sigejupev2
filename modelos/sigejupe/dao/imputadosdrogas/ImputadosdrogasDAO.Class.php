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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/imputadosdrogas/ImputadosdrogasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ImputadosdrogasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertImputadosdrogas($imputadosdrogasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblimputadosdrogas(";
        if ($imputadosdrogasDto->getidImputadoDroga() != "") {
            $sql.="idImputadoDroga";
            if (($imputadosdrogasDto->getIdImputadoSolicitud() != "") || ($imputadosdrogasDto->getCveDroga() != "") || ($imputadosdrogasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosdrogasDto->getidImputadoSolicitud() != "") {
            $sql.="idImputadoSolicitud";
            if (($imputadosdrogasDto->getCveDroga() != "") || ($imputadosdrogasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosdrogasDto->getcveDroga() != "") {
            $sql.="cveDroga";
            if (($imputadosdrogasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosdrogasDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($imputadosdrogasDto->getidImputadoDroga() != "") {
            $sql.="'" . $imputadosdrogasDto->getidImputadoDroga() . "'";
            if (($imputadosdrogasDto->getIdImputadoSolicitud() != "") || ($imputadosdrogasDto->getCveDroga() != "") || ($imputadosdrogasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosdrogasDto->getidImputadoSolicitud() != "") {
            $sql.="'" . $imputadosdrogasDto->getidImputadoSolicitud() . "'";
            if (($imputadosdrogasDto->getCveDroga() != "") || ($imputadosdrogasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosdrogasDto->getcveDroga() != "") {
            $sql.="'" . $imputadosdrogasDto->getcveDroga() . "'";
            if (($imputadosdrogasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosdrogasDto->getactivo() != "") {
            $sql.="'" . $imputadosdrogasDto->getactivo() . "'";
        }
        if ($imputadosdrogasDto->getfechaRegistro() != "") {
            
        }
        if ($imputadosdrogasDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImputadosdrogasDTO();
            $tmp->setidImputadoDroga($this->_proveedor->lastID());
            $tmp = $this->selectImputadosdrogas($tmp, "", $this->_proveedor);
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

    public function updateImputadosdrogas($imputadosdrogasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblimputadosdrogas SET ";
        if ($imputadosdrogasDto->getidImputadoDroga() != "") {
            $sql.="idImputadoDroga='" . $imputadosdrogasDto->getidImputadoDroga() . "'";
            if (($imputadosdrogasDto->getIdImputadoSolicitud() != "") || ($imputadosdrogasDto->getCveDroga() != "") || ($imputadosdrogasDto->getActivo() != "") || ($imputadosdrogasDto->getFechaRegistro() != "") || ($imputadosdrogasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosdrogasDto->getidImputadoSolicitud() != "") {
            $sql.="idImputadoSolicitud='" . $imputadosdrogasDto->getidImputadoSolicitud() . "'";
            if (($imputadosdrogasDto->getCveDroga() != "") || ($imputadosdrogasDto->getActivo() != "") || ($imputadosdrogasDto->getFechaRegistro() != "") || ($imputadosdrogasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosdrogasDto->getcveDroga() != "") {
            $sql.="cveDroga='" . $imputadosdrogasDto->getcveDroga() . "'";
            if (($imputadosdrogasDto->getActivo() != "") || ($imputadosdrogasDto->getFechaRegistro() != "") || ($imputadosdrogasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosdrogasDto->getactivo() != "") {
            $sql.="activo='" . $imputadosdrogasDto->getactivo() . "'";
            if (($imputadosdrogasDto->getFechaRegistro() != "") || ($imputadosdrogasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosdrogasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $imputadosdrogasDto->getfechaRegistro() . "'";
            if (($imputadosdrogasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($imputadosdrogasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $imputadosdrogasDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE idImputadoDroga='" . $imputadosdrogasDto->getidImputadoDroga() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImputadosdrogasDTO();
            $tmp->setidImputadoDroga($imputadosdrogasDto->getidImputadoDroga());
            $tmp = $this->selectImputadosdrogas($tmp, "", $this->_proveedor);
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

    public function deleteImputadosdrogas($imputadosdrogasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblimputadosdrogas  WHERE idImputadoDroga='" . $imputadosdrogasDto->getidImputadoDroga() . "'";
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

    public function selectImputadosdrogas($imputadosdrogasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idImputadoDroga,idImputadoSolicitud,cveDroga,activo,fechaRegistro,fechaActualizacion FROM tblimputadosdrogas ";
        if (($imputadosdrogasDto->getidImputadoDroga() != "") || ($imputadosdrogasDto->getidImputadoSolicitud() != "") || ($imputadosdrogasDto->getcveDroga() != "") || ($imputadosdrogasDto->getactivo() != "") || ($imputadosdrogasDto->getfechaRegistro() != "") || ($imputadosdrogasDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($imputadosdrogasDto->getidImputadoDroga() != "") {
            $sql.="idImputadoDroga='" . $imputadosdrogasDto->getIdImputadoDroga() . "'";
            if (($imputadosdrogasDto->getIdImputadoSolicitud() != "") || ($imputadosdrogasDto->getCveDroga() != "") || ($imputadosdrogasDto->getActivo() != "") || ($imputadosdrogasDto->getFechaRegistro() != "") || ($imputadosdrogasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosdrogasDto->getidImputadoSolicitud() != "") {
            $sql.="idImputadoSolicitud='" . $imputadosdrogasDto->getIdImputadoSolicitud() . "'";
            if (($imputadosdrogasDto->getCveDroga() != "") || ($imputadosdrogasDto->getActivo() != "") || ($imputadosdrogasDto->getFechaRegistro() != "") || ($imputadosdrogasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosdrogasDto->getcveDroga() != "") {
            $sql.="cveDroga='" . $imputadosdrogasDto->getCveDroga() . "'";
            if (($imputadosdrogasDto->getActivo() != "") || ($imputadosdrogasDto->getFechaRegistro() != "") || ($imputadosdrogasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosdrogasDto->getactivo() != "") {
            $sql.="activo='" . $imputadosdrogasDto->getActivo() . "'";
            if (($imputadosdrogasDto->getFechaRegistro() != "") || ($imputadosdrogasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosdrogasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $imputadosdrogasDto->getFechaRegistro() . "'";
            if (($imputadosdrogasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadosdrogasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $imputadosdrogasDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new ImputadosdrogasDTO();
                    $tmp[$contador]->setIdImputadoDroga($row["idImputadoDroga"]);
                    $tmp[$contador]->setIdImputadoSolicitud($row["idImputadoSolicitud"]);
                    $tmp[$contador]->setCveDroga($row["cveDroga"]);
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