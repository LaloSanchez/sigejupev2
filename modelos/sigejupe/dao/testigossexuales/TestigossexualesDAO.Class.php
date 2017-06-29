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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/testigossexuales/TestigossexualesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class TestigossexualesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertTestigossexuales($testigossexualesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbltestigossexuales(";
        if ($testigossexualesDto->getidTestigoSexual() != "") {
            $sql.="idTestigoSexual";
            if (($testigossexualesDto->getIdSexual() != "") || ($testigossexualesDto->getPaterno() != "") || ($testigossexualesDto->getMaterno() != "") || ($testigossexualesDto->getNombre() != "") || ($testigossexualesDto->getCveGenero() != "") || ($testigossexualesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($testigossexualesDto->getidSexual() != "") {
            $sql.="idSexual";
            if (($testigossexualesDto->getPaterno() != "") || ($testigossexualesDto->getMaterno() != "") || ($testigossexualesDto->getNombre() != "") || ($testigossexualesDto->getCveGenero() != "") || ($testigossexualesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($testigossexualesDto->getpaterno() != "") {
            $sql.="paterno";
            if (($testigossexualesDto->getMaterno() != "") || ($testigossexualesDto->getNombre() != "") || ($testigossexualesDto->getCveGenero() != "") || ($testigossexualesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($testigossexualesDto->getmaterno() != "") {
            $sql.="materno";
            if (($testigossexualesDto->getNombre() != "") || ($testigossexualesDto->getCveGenero() != "") || ($testigossexualesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($testigossexualesDto->getnombre() != "") {
            $sql.="nombre";
            if (($testigossexualesDto->getCveGenero() != "") || ($testigossexualesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($testigossexualesDto->getcveGenero() != "") {
            $sql.="cveGenero";
            if (($testigossexualesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($testigossexualesDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($testigossexualesDto->getidTestigoSexual() != "") {
            $sql.="'" . $testigossexualesDto->getidTestigoSexual() . "'";
            if (($testigossexualesDto->getIdSexual() != "") || ($testigossexualesDto->getPaterno() != "") || ($testigossexualesDto->getMaterno() != "") || ($testigossexualesDto->getNombre() != "") || ($testigossexualesDto->getCveGenero() != "") || ($testigossexualesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($testigossexualesDto->getidSexual() != "") {
            $sql.="'" . $testigossexualesDto->getidSexual() . "'";
            if (($testigossexualesDto->getPaterno() != "") || ($testigossexualesDto->getMaterno() != "") || ($testigossexualesDto->getNombre() != "") || ($testigossexualesDto->getCveGenero() != "") || ($testigossexualesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($testigossexualesDto->getpaterno() != "") {
            $sql.="'" . $testigossexualesDto->getpaterno() . "'";
            if (($testigossexualesDto->getMaterno() != "") || ($testigossexualesDto->getNombre() != "") || ($testigossexualesDto->getCveGenero() != "") || ($testigossexualesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($testigossexualesDto->getmaterno() != "") {
            $sql.="'" . $testigossexualesDto->getmaterno() . "'";
            if (($testigossexualesDto->getNombre() != "") || ($testigossexualesDto->getCveGenero() != "") || ($testigossexualesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($testigossexualesDto->getnombre() != "") {
            $sql.="'" . $testigossexualesDto->getnombre() . "'";
            if (($testigossexualesDto->getCveGenero() != "") || ($testigossexualesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($testigossexualesDto->getcveGenero() != "") {
            $sql.="'" . $testigossexualesDto->getcveGenero() . "'";
            if (($testigossexualesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($testigossexualesDto->getactivo() != "") {
            $sql.="'" . $testigossexualesDto->getactivo() . "'";
        }
        if ($testigossexualesDto->getfechaRegistro() != "") {
            
        }
        if ($testigossexualesDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TestigossexualesDTO();
            $tmp->setidTestigoSexual($this->_proveedor->lastID());
            $tmp = $this->selectTestigossexuales($tmp, "", $this->_proveedor);
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

    public function updateTestigossexuales($testigossexualesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltestigossexuales SET ";
        if ($testigossexualesDto->getidSexual() != "") {
            $sql.="idSexual='" . $testigossexualesDto->getidSexual() . "'";
            if (($testigossexualesDto->getPaterno() != "") || ($testigossexualesDto->getMaterno() != "") || ($testigossexualesDto->getNombre() != "") || ($testigossexualesDto->getCveGenero() != "") || ($testigossexualesDto->getActivo() != "") || ($testigossexualesDto->getFechaRegistro() != "") || ($testigossexualesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($testigossexualesDto->getpaterno() != "") {
            $sql.="paterno='" . $testigossexualesDto->getpaterno() . "'";
            if (($testigossexualesDto->getMaterno() != "") || ($testigossexualesDto->getNombre() != "") || ($testigossexualesDto->getCveGenero() != "") || ($testigossexualesDto->getActivo() != "") || ($testigossexualesDto->getFechaRegistro() != "") || ($testigossexualesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($testigossexualesDto->getmaterno() != "") {
            $sql.="materno='" . $testigossexualesDto->getmaterno() . "'";
            if (($testigossexualesDto->getNombre() != "") || ($testigossexualesDto->getCveGenero() != "") || ($testigossexualesDto->getActivo() != "") || ($testigossexualesDto->getFechaRegistro() != "") || ($testigossexualesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($testigossexualesDto->getnombre() != "") {
            $sql.="nombre='" . $testigossexualesDto->getnombre() . "'";
            if (($testigossexualesDto->getCveGenero() != "") || ($testigossexualesDto->getActivo() != "") || ($testigossexualesDto->getFechaRegistro() != "") || ($testigossexualesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($testigossexualesDto->getcveGenero() != "") {
            $sql.="cveGenero='" . $testigossexualesDto->getcveGenero() . "'";
            if (($testigossexualesDto->getActivo() != "") || ($testigossexualesDto->getFechaRegistro() != "") || ($testigossexualesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($testigossexualesDto->getactivo() != "") {
            $sql.="activo='" . $testigossexualesDto->getactivo() . "'";
            if (($testigossexualesDto->getFechaRegistro() != "") || ($testigossexualesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($testigossexualesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $testigossexualesDto->getfechaRegistro() . "'";
            if (($testigossexualesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($testigossexualesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $testigossexualesDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE idTestigoSexual='" . $testigossexualesDto->getidTestigoSexual() . "'";
//        echo $sql;
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TestigossexualesDTO();
            $tmp->setidTestigoSexual($testigossexualesDto->getidTestigoSexual());
            $tmp = $this->selectTestigossexuales($tmp, "", $this->_proveedor);
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

    public function deleteTestigossexuales($testigossexualesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbltestigossexuales  WHERE idTestigoSexual='" . $testigossexualesDto->getidTestigoSexual() . "'";
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

    public function selectTestigossexuales($testigossexualesDto, $orden = "", $proveedor = null) {

        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idTestigoSexual,idSexual,paterno,materno,nombre,cveGenero,activo,fechaRegistro,fechaActualizacion FROM tbltestigossexuales ";
        if (($testigossexualesDto->getidTestigoSexual() != "") || ($testigossexualesDto->getidSexual() != "") || ($testigossexualesDto->getpaterno() != "") || ($testigossexualesDto->getmaterno() != "") || ($testigossexualesDto->getnombre() != "") || ($testigossexualesDto->getcveGenero() != "") || ($testigossexualesDto->getactivo() != "") || ($testigossexualesDto->getfechaRegistro() != "") || ($testigossexualesDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($testigossexualesDto->getidTestigoSexual() != "") {
            $sql.="idTestigoSexual='" . $testigossexualesDto->getIdTestigoSexual() . "'";
            if (($testigossexualesDto->getIdSexual() != "") || ($testigossexualesDto->getPaterno() != "") || ($testigossexualesDto->getMaterno() != "") || ($testigossexualesDto->getNombre() != "") || ($testigossexualesDto->getCveGenero() != "") || ($testigossexualesDto->getActivo() != "") || ($testigossexualesDto->getFechaRegistro() != "") || ($testigossexualesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($testigossexualesDto->getidSexual() != "") {
            $sql.="idSexual='" . $testigossexualesDto->getIdSexual() . "'";
            if (($testigossexualesDto->getPaterno() != "") || ($testigossexualesDto->getMaterno() != "") || ($testigossexualesDto->getNombre() != "") || ($testigossexualesDto->getCveGenero() != "") || ($testigossexualesDto->getActivo() != "") || ($testigossexualesDto->getFechaRegistro() != "") || ($testigossexualesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($testigossexualesDto->getpaterno() != "") {
            $sql.="paterno='" . $testigossexualesDto->getPaterno() . "'";
            if (($testigossexualesDto->getMaterno() != "") || ($testigossexualesDto->getNombre() != "") || ($testigossexualesDto->getCveGenero() != "") || ($testigossexualesDto->getActivo() != "") || ($testigossexualesDto->getFechaRegistro() != "") || ($testigossexualesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($testigossexualesDto->getmaterno() != "") {
            $sql.="materno='" . $testigossexualesDto->getMaterno() . "'";
            if (($testigossexualesDto->getNombre() != "") || ($testigossexualesDto->getCveGenero() != "") || ($testigossexualesDto->getActivo() != "") || ($testigossexualesDto->getFechaRegistro() != "") || ($testigossexualesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($testigossexualesDto->getnombre() != "") {
            $sql.="nombre='" . $testigossexualesDto->getNombre() . "'";
            if (($testigossexualesDto->getCveGenero() != "") || ($testigossexualesDto->getActivo() != "") || ($testigossexualesDto->getFechaRegistro() != "") || ($testigossexualesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($testigossexualesDto->getcveGenero() != "") {
            $sql.="cveGenero='" . $testigossexualesDto->getCveGenero() . "'";
            if (($testigossexualesDto->getActivo() != "") || ($testigossexualesDto->getFechaRegistro() != "") || ($testigossexualesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($testigossexualesDto->getactivo() != "") {
            $sql.="activo='" . $testigossexualesDto->getActivo() . "'";
            if (($testigossexualesDto->getFechaRegistro() != "") || ($testigossexualesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($testigossexualesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $testigossexualesDto->getFechaRegistro() . "'";
            if (($testigossexualesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($testigossexualesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $testigossexualesDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new TestigossexualesDTO();
                    $tmp[$contador]->setIdTestigoSexual($row["idTestigoSexual"]);
                    $tmp[$contador]->setIdSexual($row["idSexual"]);
                    $tmp[$contador]->setPaterno($row["paterno"]);
                    $tmp[$contador]->setMaterno($row["materno"]);
                    $tmp[$contador]->setNombre($row["nombre"]);
                    $tmp[$contador]->setCveGenero($row["cveGenero"]);
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