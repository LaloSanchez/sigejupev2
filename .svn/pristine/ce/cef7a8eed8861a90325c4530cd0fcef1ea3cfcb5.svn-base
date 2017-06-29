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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/detallesefectos/DetallesefectosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class DetallesefectosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertDetallesefectos($detallesefectosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbldetallesefectos(";
        if ($detallesefectosDto->getcveDetalleEfecto() != "") {
            $sql.="cveDetalleEfecto";
            if (($detallesefectosDto->getCveEfecto() != "") || ($detallesefectosDto->getCveDelito() != "") || ($detallesefectosDto->getDesDetalleEfecto() != "") || ($detallesefectosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($detallesefectosDto->getcveEfecto() != "") {
            $sql.="cveEfecto";
            if (($detallesefectosDto->getCveDelito() != "") || ($detallesefectosDto->getDesDetalleEfecto() != "") || ($detallesefectosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($detallesefectosDto->getcveDelito() != "") {
            $sql.="cveDelito";
            if (($detallesefectosDto->getDesDetalleEfecto() != "") || ($detallesefectosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($detallesefectosDto->getdesDetalleEfecto() != "") {
            $sql.="desDetalleEfecto";
            if (($detallesefectosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($detallesefectosDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($detallesefectosDto->getcveDetalleEfecto() != "") {
            $sql.="'" . $detallesefectosDto->getcveDetalleEfecto() . "'";
            if (($detallesefectosDto->getCveEfecto() != "") || ($detallesefectosDto->getCveDelito() != "") || ($detallesefectosDto->getDesDetalleEfecto() != "") || ($detallesefectosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($detallesefectosDto->getcveEfecto() != "") {
            $sql.="'" . $detallesefectosDto->getcveEfecto() . "'";
            if (($detallesefectosDto->getCveDelito() != "") || ($detallesefectosDto->getDesDetalleEfecto() != "") || ($detallesefectosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($detallesefectosDto->getcveDelito() != "") {
            $sql.="'" . $detallesefectosDto->getcveDelito() . "'";
            if (($detallesefectosDto->getDesDetalleEfecto() != "") || ($detallesefectosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($detallesefectosDto->getdesDetalleEfecto() != "") {
            $sql.="'" . $detallesefectosDto->getdesDetalleEfecto() . "'";
            if (($detallesefectosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($detallesefectosDto->getactivo() != "") {
            $sql.="'" . $detallesefectosDto->getactivo() . "'";
        }
        if ($detallesefectosDto->getfechaRegistro() != "") {
            
        }
        if ($detallesefectosDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DetallesefectosDTO();
            $tmp->setcveDetalleEfecto($this->_proveedor->lastID());
            $tmp = $this->selectDetallesefectos($tmp, "", $this->_proveedor);
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

    public function updateDetallesefectos($detallesefectosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbldetallesefectos SET ";
        if ($detallesefectosDto->getcveDetalleEfecto() != "") {
            $sql.="cveDetalleEfecto='" . $detallesefectosDto->getcveDetalleEfecto() . "'";
            if (($detallesefectosDto->getCveEfecto() != "") || ($detallesefectosDto->getCveDelito() != "") || ($detallesefectosDto->getDesDetalleEfecto() != "") || ($detallesefectosDto->getActivo() != "") || ($detallesefectosDto->getFechaRegistro() != "") || ($detallesefectosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($detallesefectosDto->getcveEfecto() != "") {
            $sql.="cveEfecto='" . $detallesefectosDto->getcveEfecto() . "'";
            if (($detallesefectosDto->getCveDelito() != "") || ($detallesefectosDto->getDesDetalleEfecto() != "") || ($detallesefectosDto->getActivo() != "") || ($detallesefectosDto->getFechaRegistro() != "") || ($detallesefectosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($detallesefectosDto->getcveDelito() != "") {
            $sql.="cveDelito='" . $detallesefectosDto->getcveDelito() . "'";
            if (($detallesefectosDto->getDesDetalleEfecto() != "") || ($detallesefectosDto->getActivo() != "") || ($detallesefectosDto->getFechaRegistro() != "") || ($detallesefectosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($detallesefectosDto->getdesDetalleEfecto() != "") {
            $sql.="desDetalleEfecto='" . $detallesefectosDto->getdesDetalleEfecto() . "'";
            if (($detallesefectosDto->getActivo() != "") || ($detallesefectosDto->getFechaRegistro() != "") || ($detallesefectosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($detallesefectosDto->getactivo() != "") {
            $sql.="activo='" . $detallesefectosDto->getactivo() . "'";
            if (($detallesefectosDto->getFechaRegistro() != "") || ($detallesefectosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($detallesefectosDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $detallesefectosDto->getfechaRegistro() . "'";
            if (($detallesefectosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($detallesefectosDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $detallesefectosDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE cveDetalleEfecto='" . $detallesefectosDto->getcveDetalleEfecto() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DetallesefectosDTO();
            $tmp->setcveDetalleEfecto($detallesefectosDto->getcveDetalleEfecto());
            $tmp = $this->selectDetallesefectos($tmp, "", $this->_proveedor);
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

    public function deleteDetallesefectos($detallesefectosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbldetallesefectos  WHERE cveDetalleEfecto='" . $detallesefectosDto->getcveDetalleEfecto() . "'";
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

    public function selectDetallesefectos($detallesefectosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveDetalleEfecto,cveEfecto,cveDelito,desDetalleEfecto,activo,fechaRegistro,fechaActualizacion FROM tbldetallesefectos ";
        if (($detallesefectosDto->getcveDetalleEfecto() != "") || ($detallesefectosDto->getcveEfecto() != "") || ($detallesefectosDto->getcveDelito() != "") || ($detallesefectosDto->getdesDetalleEfecto() != "") || ($detallesefectosDto->getactivo() != "") || ($detallesefectosDto->getfechaRegistro() != "") || ($detallesefectosDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($detallesefectosDto->getcveDetalleEfecto() != "") {
            $sql.="cveDetalleEfecto='" . $detallesefectosDto->getCveDetalleEfecto() . "'";
            if (($detallesefectosDto->getCveEfecto() != "") || ($detallesefectosDto->getCveDelito() != "") || ($detallesefectosDto->getDesDetalleEfecto() != "") || ($detallesefectosDto->getActivo() != "") || ($detallesefectosDto->getFechaRegistro() != "") || ($detallesefectosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($detallesefectosDto->getcveEfecto() != "") {
            $sql.="cveEfecto='" . $detallesefectosDto->getCveEfecto() . "'";
            if (($detallesefectosDto->getCveDelito() != "") || ($detallesefectosDto->getDesDetalleEfecto() != "") || ($detallesefectosDto->getActivo() != "") || ($detallesefectosDto->getFechaRegistro() != "") || ($detallesefectosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($detallesefectosDto->getcveDelito() != "") {
            $sql.="cveDelito='" . $detallesefectosDto->getCveDelito() . "'";
            if (($detallesefectosDto->getDesDetalleEfecto() != "") || ($detallesefectosDto->getActivo() != "") || ($detallesefectosDto->getFechaRegistro() != "") || ($detallesefectosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($detallesefectosDto->getdesDetalleEfecto() != "") {
            $sql.="desDetalleEfecto='" . $detallesefectosDto->getDesDetalleEfecto() . "'";
            if (($detallesefectosDto->getActivo() != "") || ($detallesefectosDto->getFechaRegistro() != "") || ($detallesefectosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($detallesefectosDto->getactivo() != "") {
            $sql.="activo='" . $detallesefectosDto->getActivo() . "'";
            if (($detallesefectosDto->getFechaRegistro() != "") || ($detallesefectosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($detallesefectosDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $detallesefectosDto->getFechaRegistro() . "'";
            if (($detallesefectosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($detallesefectosDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $detallesefectosDto->getFechaActualizacion() . "'";
        }

        $sql .= " order by desDetalleEfecto ASC ";
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new DetallesefectosDTO();
                    $tmp[$contador]->setCveDetalleEfecto($row["cveDetalleEfecto"]);
                    $tmp[$contador]->setCveEfecto($row["cveEfecto"]);
                    $tmp[$contador]->setCveDelito($row["cveDelito"]);
                    $tmp[$contador]->setDesDetalleEfecto($row["desDetalleEfecto"]);
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