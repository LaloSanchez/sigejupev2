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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/detallessexualesconductas/DetallessexualesconductasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class DetallessexualesconductasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertDetallessexualesconductas($detallessexualesconductasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbldetallessexualesconductas(";
        if ($detallessexualesconductasDto->getidDetalleSexualConducta() != "") {
            $sql.="idDetalleSexualConducta";
            if (($detallessexualesconductasDto->getCveDetalleConducta() != "") || ($detallessexualesconductasDto->getIdSexualConducta() != "") || ($detallessexualesconductasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($detallessexualesconductasDto->getcveDetalleConducta() != "") {
            $sql.="cveDetalleConducta";
            if (($detallessexualesconductasDto->getIdSexualConducta() != "") || ($detallessexualesconductasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($detallessexualesconductasDto->getidSexualConducta() != "") {
            $sql.="idSexualConducta";
            if (($detallessexualesconductasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($detallessexualesconductasDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($detallessexualesconductasDto->getidDetalleSexualConducta() != "") {
            $sql.="'" . $detallessexualesconductasDto->getidDetalleSexualConducta() . "'";
            if (($detallessexualesconductasDto->getCveDetalleConducta() != "") || ($detallessexualesconductasDto->getIdSexualConducta() != "") || ($detallessexualesconductasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($detallessexualesconductasDto->getcveDetalleConducta() != "") {
            $sql.="'" . $detallessexualesconductasDto->getcveDetalleConducta() . "'";
            if (($detallessexualesconductasDto->getIdSexualConducta() != "") || ($detallessexualesconductasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($detallessexualesconductasDto->getidSexualConducta() != "") {
            $sql.="'" . $detallessexualesconductasDto->getidSexualConducta() . "'";
            if (($detallessexualesconductasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($detallessexualesconductasDto->getactivo() != "") {
            $sql.="'" . $detallessexualesconductasDto->getactivo() . "'";
        }
        if ($detallessexualesconductasDto->getfechaRegistro() != "") {
            
        }
        if ($detallessexualesconductasDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DetallessexualesconductasDTO();
            $tmp->setidDetalleSexualConducta($this->_proveedor->lastID());
            $tmp = $this->selectDetallessexualesconductas($tmp, "", $this->_proveedor);
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

    public function updateDetallessexualesconductas($detallessexualesconductasDto, $proveedor = null) {

        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbldetallessexualesconductas SET ";

        if ($detallessexualesconductasDto->getcveDetalleConducta() != "") {
            $sql.="cveDetalleConducta='" . $detallessexualesconductasDto->getcveDetalleConducta() . "'";
            if (($detallessexualesconductasDto->getIdSexualConducta() != "") || ($detallessexualesconductasDto->getActivo() != "") || ($detallessexualesconductasDto->getFechaRegistro() != "") || ($detallessexualesconductasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($detallessexualesconductasDto->getidSexualConducta() != "") {
            $sql.="idSexualConducta='" . $detallessexualesconductasDto->getidSexualConducta() . "'";
            if (($detallessexualesconductasDto->getActivo() != "") || ($detallessexualesconductasDto->getFechaRegistro() != "") || ($detallessexualesconductasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($detallessexualesconductasDto->getactivo() != "") {
            $sql.="activo='" . $detallessexualesconductasDto->getactivo() . "'";
            if (($detallessexualesconductasDto->getFechaRegistro() != "") || ($detallessexualesconductasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($detallessexualesconductasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $detallessexualesconductasDto->getfechaRegistro() . "'";
            if (($detallessexualesconductasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($detallessexualesconductasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $detallessexualesconductasDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE idDetalleSexualConducta='" . $detallessexualesconductasDto->getidDetalleSexualConducta() . "'";
//echo $sql;
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DetallessexualesconductasDTO();
            $tmp->setidDetalleSexualConducta($detallessexualesconductasDto->getidDetalleSexualConducta());
            $tmp = $this->selectDetallessexualesconductas($tmp, "", $this->_proveedor);
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

    public function deleteDetallessexualesconductas($detallessexualesconductasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbldetallessexualesconductas  WHERE idDetalleSexualConducta='" . $detallessexualesconductasDto->getidDetalleSexualConducta() . "'";
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

    public function selectDetallessexualesconductas($detallessexualesconductasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idDetalleSexualConducta,cveDetalleConducta,idSexualConducta,activo,fechaRegistro,fechaActualizacion FROM tbldetallessexualesconductas ";
        if (($detallessexualesconductasDto->getidDetalleSexualConducta() != "") || ($detallessexualesconductasDto->getcveDetalleConducta() != "") || ($detallessexualesconductasDto->getidSexualConducta() != "") || ($detallessexualesconductasDto->getactivo() != "") || ($detallessexualesconductasDto->getfechaRegistro() != "") || ($detallessexualesconductasDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($detallessexualesconductasDto->getidDetalleSexualConducta() != "") {
            $sql.="idDetalleSexualConducta='" . $detallessexualesconductasDto->getIdDetalleSexualConducta() . "'";
            if (($detallessexualesconductasDto->getCveDetalleConducta() != "") || ($detallessexualesconductasDto->getIdSexualConducta() != "") || ($detallessexualesconductasDto->getActivo() != "") || ($detallessexualesconductasDto->getFechaRegistro() != "") || ($detallessexualesconductasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($detallessexualesconductasDto->getcveDetalleConducta() != "") {
            $sql.="cveDetalleConducta='" . $detallessexualesconductasDto->getCveDetalleConducta() . "'";
            if (($detallessexualesconductasDto->getIdSexualConducta() != "") || ($detallessexualesconductasDto->getActivo() != "") || ($detallessexualesconductasDto->getFechaRegistro() != "") || ($detallessexualesconductasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($detallessexualesconductasDto->getidSexualConducta() != "") {
            $sql.="idSexualConducta='" . $detallessexualesconductasDto->getIdSexualConducta() . "'";
            if (($detallessexualesconductasDto->getActivo() != "") || ($detallessexualesconductasDto->getFechaRegistro() != "") || ($detallessexualesconductasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($detallessexualesconductasDto->getactivo() != "") {
            $sql.="activo='" . $detallessexualesconductasDto->getActivo() . "'";
            if (($detallessexualesconductasDto->getFechaRegistro() != "") || ($detallessexualesconductasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($detallessexualesconductasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $detallessexualesconductasDto->getFechaRegistro() . "'";
            if (($detallessexualesconductasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($detallessexualesconductasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $detallessexualesconductasDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new DetallessexualesconductasDTO();
                    $tmp[$contador]->setIdDetalleSexualConducta($row["idDetalleSexualConducta"]);
                    $tmp[$contador]->setCveDetalleConducta($row["cveDetalleConducta"]);
                    $tmp[$contador]->setIdSexualConducta($row["idSexualConducta"]);
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