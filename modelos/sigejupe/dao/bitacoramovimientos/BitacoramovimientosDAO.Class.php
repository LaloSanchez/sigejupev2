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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class BitacoramovimientosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertBitacoramovimientos($bitacoramovimientosDto, $proveedor = null) {
        $tmp = array();
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblbitacoramovimientos(";
        if ($bitacoramovimientosDto->getidBitacoraMovimiento() != "") {
            $sql.="idBitacoraMovimiento";
            if (($bitacoramovimientosDto->getCveAccion() != "") || ($bitacoramovimientosDto->getObservaciones() != "") || ($bitacoramovimientosDto->getCveUsuario() != "") || ($bitacoramovimientosDto->getCvePerfil() != "") || ($bitacoramovimientosDto->getCveAdscripcion() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoramovimientosDto->getcveAccion() != "") {
            $sql.="cveAccion";
            if (($bitacoramovimientosDto->getObservaciones() != "") || ($bitacoramovimientosDto->getCveUsuario() != "") || ($bitacoramovimientosDto->getCvePerfil() != "") || ($bitacoramovimientosDto->getCveAdscripcion() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoramovimientosDto->getobservaciones() != "") {
            $sql.="observaciones";
            if (($bitacoramovimientosDto->getCveUsuario() != "") || ($bitacoramovimientosDto->getCvePerfil() != "") || ($bitacoramovimientosDto->getCveAdscripcion() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoramovimientosDto->getcveUsuario() != "") {
            $sql.="cveUsuario";
            if (($bitacoramovimientosDto->getCvePerfil() != "") || ($bitacoramovimientosDto->getCveAdscripcion() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoramovimientosDto->getcvePerfil() != "") {
            $sql.="cvePerfil";
            if (($bitacoramovimientosDto->getCveAdscripcion() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoramovimientosDto->getcveAdscripcion() != "") {
            $sql.="cveAdscripcion";
        }
        $sql.=",fechaMovimiento";
        $sql.=") VALUES(";
        if ($bitacoramovimientosDto->getidBitacoraMovimiento() != "") {
            $sql.="'" . $bitacoramovimientosDto->getidBitacoraMovimiento() . "'";
            if (($bitacoramovimientosDto->getCveAccion() != "") || ($bitacoramovimientosDto->getObservaciones() != "") || ($bitacoramovimientosDto->getCveUsuario() != "") || ($bitacoramovimientosDto->getCvePerfil() != "") || ($bitacoramovimientosDto->getCveAdscripcion() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoramovimientosDto->getcveAccion() != "") {
            $sql.="'" . $bitacoramovimientosDto->getcveAccion() . "'";
            if (($bitacoramovimientosDto->getObservaciones() != "") || ($bitacoramovimientosDto->getCveUsuario() != "") || ($bitacoramovimientosDto->getCvePerfil() != "") || ($bitacoramovimientosDto->getCveAdscripcion() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoramovimientosDto->getobservaciones() != "") {
            $sql.="'" . $bitacoramovimientosDto->getobservaciones() . "'";
            if (($bitacoramovimientosDto->getCveUsuario() != "") || ($bitacoramovimientosDto->getCvePerfil() != "") || ($bitacoramovimientosDto->getCveAdscripcion() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoramovimientosDto->getcveUsuario() != "") {
            $sql.="'" . $bitacoramovimientosDto->getcveUsuario() . "'";
            if (($bitacoramovimientosDto->getCvePerfil() != "") || ($bitacoramovimientosDto->getCveAdscripcion() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoramovimientosDto->getcvePerfil() != "") {
            $sql.="'" . $bitacoramovimientosDto->getcvePerfil() . "'";
            if (($bitacoramovimientosDto->getCveAdscripcion() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoramovimientosDto->getcveAdscripcion() != "") {
            $sql.="'" . $bitacoramovimientosDto->getcveAdscripcion() . "'";
        }
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new BitacoramovimientosDTO();
            $tmp->setidBitacoraMovimiento($this->_proveedor->lastID());
            $tmp = $this->selectBitacoramovimientos($tmp, "", $this->_proveedor);
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

    public function updateBitacoramovimientos($bitacoramovimientosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblbitacoramovimientos SET ";
        if ($bitacoramovimientosDto->getidBitacoraMovimiento() != "") {
            $sql.="idBitacoraMovimiento='" . $bitacoramovimientosDto->getidBitacoraMovimiento() . "'";
            if (($bitacoramovimientosDto->getCveAccion() != "") || ($bitacoramovimientosDto->getFechaMovimiento() != "") || ($bitacoramovimientosDto->getObservaciones() != "") || ($bitacoramovimientosDto->getCveUsuario() != "") || ($bitacoramovimientosDto->getCvePerfil() != "") || ($bitacoramovimientosDto->getCveAdscripcion() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoramovimientosDto->getcveAccion() != "") {
            $sql.="cveAccion='" . $bitacoramovimientosDto->getcveAccion() . "'";
            if (($bitacoramovimientosDto->getFechaMovimiento() != "") || ($bitacoramovimientosDto->getObservaciones() != "") || ($bitacoramovimientosDto->getCveUsuario() != "") || ($bitacoramovimientosDto->getCvePerfil() != "") || ($bitacoramovimientosDto->getCveAdscripcion() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoramovimientosDto->getfechaMovimiento() != "") {
            $sql.="fechaMovimiento='" . $bitacoramovimientosDto->getfechaMovimiento() . "'";
            if (($bitacoramovimientosDto->getObservaciones() != "") || ($bitacoramovimientosDto->getCveUsuario() != "") || ($bitacoramovimientosDto->getCvePerfil() != "") || ($bitacoramovimientosDto->getCveAdscripcion() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoramovimientosDto->getobservaciones() != "") {
            $sql.="observaciones='" . $bitacoramovimientosDto->getobservaciones() . "'";
            if (($bitacoramovimientosDto->getCveUsuario() != "") || ($bitacoramovimientosDto->getCvePerfil() != "") || ($bitacoramovimientosDto->getCveAdscripcion() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoramovimientosDto->getcveUsuario() != "") {
            $sql.="cveUsuario='" . $bitacoramovimientosDto->getcveUsuario() . "'";
            if (($bitacoramovimientosDto->getCvePerfil() != "") || ($bitacoramovimientosDto->getCveAdscripcion() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoramovimientosDto->getcvePerfil() != "") {
            $sql.="cvePerfil='" . $bitacoramovimientosDto->getcvePerfil() . "'";
            if (($bitacoramovimientosDto->getCveAdscripcion() != "")) {
                $sql.=",";
            }
        }
        if ($bitacoramovimientosDto->getcveAdscripcion() != "") {
            $sql.="cveAdscripcion='" . $bitacoramovimientosDto->getcveAdscripcion() . "'";
        }
        $sql.=" WHERE idBitacoraMovimiento='" . $bitacoramovimientosDto->getidBitacoraMovimiento() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new BitacoramovimientosDTO();
            $tmp->setidBitacoraMovimiento($bitacoramovimientosDto->getidBitacoraMovimiento());
            $tmp = $this->selectBitacoramovimientos($tmp, "", $this->_proveedor);
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

    public function deleteBitacoramovimientos($bitacoramovimientosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblbitacoramovimientos  WHERE idBitacoraMovimiento='" . $bitacoramovimientosDto->getidBitacoraMovimiento() . "'";
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

    public function selectBitacoramovimientos($bitacoramovimientosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idBitacoraMovimiento,cveAccion,fechaMovimiento,observaciones,cveUsuario,cvePerfil,cveAdscripcion FROM tblbitacoramovimientos ";
        if (($bitacoramovimientosDto->getidBitacoraMovimiento() != "") || ($bitacoramovimientosDto->getcveAccion() != "") || ($bitacoramovimientosDto->getfechaMovimiento() != "") || ($bitacoramovimientosDto->getobservaciones() != "") || ($bitacoramovimientosDto->getcveUsuario() != "") || ($bitacoramovimientosDto->getcvePerfil() != "") || ($bitacoramovimientosDto->getcveAdscripcion() != "")) {
            $sql.=" WHERE ";
        }
        if ($bitacoramovimientosDto->getidBitacoraMovimiento() != "") {
            $sql.="idBitacoraMovimiento='" . $bitacoramovimientosDto->getIdBitacoraMovimiento() . "'";
            if (($bitacoramovimientosDto->getCveAccion() != "") || ($bitacoramovimientosDto->getFechaMovimiento() != "") || ($bitacoramovimientosDto->getObservaciones() != "") || ($bitacoramovimientosDto->getCveUsuario() != "") || ($bitacoramovimientosDto->getCvePerfil() != "") || ($bitacoramovimientosDto->getCveAdscripcion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoramovimientosDto->getcveAccion() != "") {
            $sql.="cveAccion='" . $bitacoramovimientosDto->getCveAccion() . "'";
            if (($bitacoramovimientosDto->getFechaMovimiento() != "") || ($bitacoramovimientosDto->getObservaciones() != "") || ($bitacoramovimientosDto->getCveUsuario() != "") || ($bitacoramovimientosDto->getCvePerfil() != "") || ($bitacoramovimientosDto->getCveAdscripcion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoramovimientosDto->getfechaMovimiento() != "") {
            $sql.="fechaMovimiento='" . $bitacoramovimientosDto->getFechaMovimiento() . "'";
            if (($bitacoramovimientosDto->getObservaciones() != "") || ($bitacoramovimientosDto->getCveUsuario() != "") || ($bitacoramovimientosDto->getCvePerfil() != "") || ($bitacoramovimientosDto->getCveAdscripcion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoramovimientosDto->getobservaciones() != "") {
            $sql.="observaciones='" . $bitacoramovimientosDto->getObservaciones() . "'";
            if (($bitacoramovimientosDto->getCveUsuario() != "") || ($bitacoramovimientosDto->getCvePerfil() != "") || ($bitacoramovimientosDto->getCveAdscripcion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoramovimientosDto->getcveUsuario() != "") {
            $sql.="cveUsuario='" . $bitacoramovimientosDto->getCveUsuario() . "'";
            if (($bitacoramovimientosDto->getCvePerfil() != "") || ($bitacoramovimientosDto->getCveAdscripcion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoramovimientosDto->getcvePerfil() != "") {
            $sql.="cvePerfil='" . $bitacoramovimientosDto->getCvePerfil() . "'";
            if (($bitacoramovimientosDto->getCveAdscripcion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($bitacoramovimientosDto->getcveAdscripcion() != "") {
            $sql.="cveAdscripcion='" . $bitacoramovimientosDto->getCveAdscripcion() . "'";
        }
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
//	echo $sql;
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new BitacoramovimientosDTO();
                    $tmp[$contador]->setIdBitacoraMovimiento($row["idBitacoraMovimiento"]);
                    $tmp[$contador]->setCveAccion($row["cveAccion"]);
                    $tmp[$contador]->setFechaMovimiento($row["fechaMovimiento"]);
                    $tmp[$contador]->setObservaciones($row["observaciones"]);
                    $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                    $tmp[$contador]->setCvePerfil($row["cvePerfil"]);
                    $tmp[$contador]->setCveAdscripcion($row["cveAdscripcion"]);
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
