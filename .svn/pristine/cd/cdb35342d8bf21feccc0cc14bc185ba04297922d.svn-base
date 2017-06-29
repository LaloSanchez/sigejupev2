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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/contadoresexternos/ContadoresexternosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ContadoresexternosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertContadoresexternos($contadoresexternosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblcontadoresexternos(";
        if ($contadoresexternosDto->getIdContadorExterno() != "") {
            $sql.="idContadorExterno";
            if (($contadoresexternosDto->getNumero() != "") || ($contadoresexternosDto->getAnio() != "") || ($contadoresexternosDto->getCveTipoActuacion() != "") || ($contadoresexternosDto->getCveAdscripcion() != "") || ($contadoresexternosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresexternosDto->getNumero() != "") {
            $sql.="numero";
            if (($contadoresexternosDto->getAnio() != "") || ($contadoresexternosDto->getCveTipoActuacion() != "") || ($contadoresexternosDto->getCveAdscripcion() != "") || ($contadoresexternosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresexternosDto->getAnio() != "") {
            $sql.="anio";
            if (($contadoresexternosDto->getCveTipoActuacion() != "") || ($contadoresexternosDto->getCveAdscripcion() != "") || ($contadoresexternosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresexternosDto->getCveTipoActuacion() != "") {
            $sql.="cveTipoActuacion";
            if (($contadoresexternosDto->getCveAdscripcion() != "") || ($contadoresexternosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresexternosDto->getCveAdscripcion() != "") {
            $sql.="cveAdscripcion";
            if (($contadoresexternosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresexternosDto->getActivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($contadoresexternosDto->getIdContadorExterno() != "") {
            $sql.="'" . $contadoresexternosDto->getIdContadorExterno() . "'";
            if (($contadoresexternosDto->getNumero() != "") || ($contadoresexternosDto->getAnio() != "") || ($contadoresexternosDto->getCveTipoActuacion() != "") || ($contadoresexternosDto->getCveAdscripcion() != "") || ($contadoresexternosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresexternosDto->getNumero() != "") {
            $sql.="'" . $contadoresexternosDto->getNumero() . "'";
            if (($contadoresexternosDto->getAnio() != "") || ($contadoresexternosDto->getCveTipoActuacion() != "") || ($contadoresexternosDto->getCveAdscripcion() != "") || ($contadoresexternosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresexternosDto->getAnio() != "") {
            $sql.="'" . $contadoresexternosDto->getAnio() . "'";
            if (($contadoresexternosDto->getCveTipoActuacion() != "") || ($contadoresexternosDto->getCveAdscripcion() != "") || ($contadoresexternosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresexternosDto->getCveTipoActuacion() != "") {
            $sql.="'" . $contadoresexternosDto->getCveTipoActuacion() . "'";
            if (($contadoresexternosDto->getCveAdscripcion() != "") || ($contadoresexternosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresexternosDto->getCveAdscripcion() != "") {
            $sql.="'" . $contadoresexternosDto->getCveAdscripcion() . "'";
            if (($contadoresexternosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresexternosDto->getActivo() != "") {
            $sql.="'" . $contadoresexternosDto->getActivo() . "'";
        }
        if ($contadoresexternosDto->getFechaRegistro() != "") {
            
        }
        if ($contadoresexternosDto->getFechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);//echo $sql;
        if (!$this->_proveedor->error()) {
            $tmp = new ContadoresexternosDTO();
            $tmp->setIdContadorExterno($this->_proveedor->lastID());
            $tmp = $this->selectContadoresexternos($tmp, "", $this->_proveedor);
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

    public function updateContadoresexternos($contadoresexternosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblcontadoresexternos SET ";
        if ($contadoresexternosDto->getIdContadorExterno() != "") {
            $sql.="idContadorExterno='" . $contadoresexternosDto->getIdContadorExterno() . "'";
            if (($contadoresexternosDto->getNumero() != "") || ($contadoresexternosDto->getAnio() != "") || ($contadoresexternosDto->getCveTipoActuacion() != "") || ($contadoresexternosDto->getCveAdscripcion() != "") || ($contadoresexternosDto->getActivo() != "") || ($contadoresexternosDto->getFechaRegistro() != "") || ($contadoresexternosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresexternosDto->getNumero() != "") {
            $sql.="numero='" . $contadoresexternosDto->getNumero() . "'";
            if (($contadoresexternosDto->getAnio() != "") || ($contadoresexternosDto->getCveTipoActuacion() != "") || ($contadoresexternosDto->getCveAdscripcion() != "") || ($contadoresexternosDto->getActivo() != "") || ($contadoresexternosDto->getFechaRegistro() != "") || ($contadoresexternosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresexternosDto->getAnio() != "") {
            $sql.="anio='" . $contadoresexternosDto->getAnio() . "'";
            if (($contadoresexternosDto->getCveTipoActuacion() != "") || ($contadoresexternosDto->getCveAdscripcion() != "") || ($contadoresexternosDto->getActivo() != "") || ($contadoresexternosDto->getFechaRegistro() != "") || ($contadoresexternosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresexternosDto->getCveTipoActuacion() != "") {
            $sql.="cveTipoActuacion='" . $contadoresexternosDto->getCveTipoActuacion() . "'";
            if (($contadoresexternosDto->getCveAdscripcion() != "") || ($contadoresexternosDto->getActivo() != "") || ($contadoresexternosDto->getFechaRegistro() != "") || ($contadoresexternosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresexternosDto->getCveAdscripcion() != "") {
            $sql.="cveAdscripcion='" . $contadoresexternosDto->getCveAdscripcion() . "'";
            if (($contadoresexternosDto->getActivo() != "") || ($contadoresexternosDto->getFechaRegistro() != "") || ($contadoresexternosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresexternosDto->getActivo() != "") {
            $sql.="activo='" . $contadoresexternosDto->getActivo() . "'";
            if (($contadoresexternosDto->getFechaRegistro() != "") || ($contadoresexternosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresexternosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $contadoresexternosDto->getFechaRegistro() . "'";
            if (($contadoresexternosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresexternosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $contadoresexternosDto->getFechaActualizacion() . "'";
        }
        $sql.=" WHERE idContadorExterno = '" . $contadoresexternosDto->getIdContadorExterno() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ContadoresexternosDTO();
            $tmp->setIdContadorExterno($contadoresexternosDto->getIdContadorExterno());
            $tmp = $this->selectContadoresexternos($tmp, "", $this->_proveedor);
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

    public function deleteContadoresexternos($contadoresexternosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblcontadoresexternos  WHERE ='" . $contadoresexternosDto->getIdContadorExterno() . "'";
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

    public function selectContadoresexternos($contadoresexternosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idContadorExterno,numero,anio,cveTipoActuacion,cveAdscripcion,activo,fechaRegistro,fechaActualizacion FROM tblcontadoresexternos ";
        if (($contadoresexternosDto->getIdContadorExterno() != "") || ($contadoresexternosDto->getNumero() != "") || ($contadoresexternosDto->getAnio() != "") || ($contadoresexternosDto->getCveTipoActuacion() != "") || ($contadoresexternosDto->getCveAdscripcion() != "") || ($contadoresexternosDto->getActivo() != "") || ($contadoresexternosDto->getFechaRegistro() != "") || ($contadoresexternosDto->getFechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($contadoresexternosDto->getIdContadorExterno() != "") {
            $sql.="idContadorExterno='" . $contadoresexternosDto->getIdContadorExterno() . "'";
            if (($contadoresexternosDto->getNumero() != "") || ($contadoresexternosDto->getAnio() != "") || ($contadoresexternosDto->getCveTipoActuacion() != "") || ($contadoresexternosDto->getCveAdscripcion() != "") || ($contadoresexternosDto->getActivo() != "") || ($contadoresexternosDto->getFechaRegistro() != "") || ($contadoresexternosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($contadoresexternosDto->getNumero() != "") {
            $sql.="numero='" . $contadoresexternosDto->getNumero() . "'";
            if (($contadoresexternosDto->getAnio() != "") || ($contadoresexternosDto->getCveTipoActuacion() != "") || ($contadoresexternosDto->getCveAdscripcion() != "") || ($contadoresexternosDto->getActivo() != "") || ($contadoresexternosDto->getFechaRegistro() != "") || ($contadoresexternosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($contadoresexternosDto->getAnio() != "") {
            $sql.="anio='" . $contadoresexternosDto->getAnio() . "'";
            if (($contadoresexternosDto->getCveTipoActuacion() != "") || ($contadoresexternosDto->getCveAdscripcion() != "") || ($contadoresexternosDto->getActivo() != "") || ($contadoresexternosDto->getFechaRegistro() != "") || ($contadoresexternosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($contadoresexternosDto->getCveTipoActuacion() != "") {
            $sql.="cveTipoActuacion='" . $contadoresexternosDto->getCveTipoActuacion() . "'";
            if (($contadoresexternosDto->getCveAdscripcion() != "") || ($contadoresexternosDto->getActivo() != "") || ($contadoresexternosDto->getFechaRegistro() != "") || ($contadoresexternosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($contadoresexternosDto->getCveAdscripcion() != "") {
            $sql.="cveAdscripcion='" . $contadoresexternosDto->getCveAdscripcion() . "'";
            if (($contadoresexternosDto->getActivo() != "") || ($contadoresexternosDto->getFechaRegistro() != "") || ($contadoresexternosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($contadoresexternosDto->getActivo() != "") {
            $sql.="activo='" . $contadoresexternosDto->getActivo() . "'";
            if (($contadoresexternosDto->getFechaRegistro() != "") || ($contadoresexternosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($contadoresexternosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $contadoresexternosDto->getFechaRegistro() . "'";
            if (($contadoresexternosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($contadoresexternosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $contadoresexternosDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new ContadoresexternosDTO();
                    $tmp[$contador]->setIdContadorExterno($row["idContadorExterno"]);
                    $tmp[$contador]->setNumero($row["numero"]);
                    $tmp[$contador]->setAnio($row["anio"]);
                    $tmp[$contador]->setCveTipoActuacion($row["cveTipoActuacion"]);
                    $tmp[$contador]->setCveAdscripcion($row["cveAdscripcion"]);
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