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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/autoresaudiencias/AutoresaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class AutoresaudienciasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertAutoresaudiencias($autoresaudienciasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblautoresaudiencias(";
        if ($autoresaudienciasDto->getidAutorAudiencia() != "") {
            $sql.="idAutorAudiencia";
            if (($autoresaudienciasDto->getCveCatAudiencia() != "") || ($autoresaudienciasDto->getCveGrupo() != "") || ($autoresaudienciasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($autoresaudienciasDto->getcveCatAudiencia() != "") {
            $sql.="cveCatAudiencia";
            if (($autoresaudienciasDto->getCveGrupo() != "") || ($autoresaudienciasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($autoresaudienciasDto->getcveGrupo() != "") {
            $sql.="cveGrupo";
            if (($autoresaudienciasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($autoresaudienciasDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($autoresaudienciasDto->getidAutorAudiencia() != "") {
            $sql.="'" . $autoresaudienciasDto->getidAutorAudiencia() . "'";
            if (($autoresaudienciasDto->getCveCatAudiencia() != "") || ($autoresaudienciasDto->getCveGrupo() != "") || ($autoresaudienciasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($autoresaudienciasDto->getcveCatAudiencia() != "") {
            $sql.="'" . $autoresaudienciasDto->getcveCatAudiencia() . "'";
            if (($autoresaudienciasDto->getCveGrupo() != "") || ($autoresaudienciasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($autoresaudienciasDto->getcveGrupo() != "") {
            $sql.="'" . $autoresaudienciasDto->getcveGrupo() . "'";
            if (($autoresaudienciasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($autoresaudienciasDto->getactivo() != "") {
            $sql.="'" . $autoresaudienciasDto->getactivo() . "'";
        }
        if ($autoresaudienciasDto->getfechaRegistro() != "") {
            
        }
        if ($autoresaudienciasDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new AutoresaudienciasDTO();
            $tmp->setidAutorAudiencia($this->_proveedor->lastID());
            $tmp = $this->selectAutoresaudiencias($tmp, "", $this->_proveedor);
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

    public function updateAutoresaudiencias($autoresaudienciasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblautoresaudiencias SET ";
        if ($autoresaudienciasDto->getidAutorAudiencia() != "") {
            $sql.="idAutorAudiencia='" . $autoresaudienciasDto->getidAutorAudiencia() . "'";
            if (($autoresaudienciasDto->getCveCatAudiencia() != "") || ($autoresaudienciasDto->getCveGrupo() != "") || ($autoresaudienciasDto->getActivo() != "") || ($autoresaudienciasDto->getFechaRegistro() != "") || ($autoresaudienciasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($autoresaudienciasDto->getcveCatAudiencia() != "") {
            $sql.="cveCatAudiencia='" . $autoresaudienciasDto->getcveCatAudiencia() . "'";
            if (($autoresaudienciasDto->getCveGrupo() != "") || ($autoresaudienciasDto->getActivo() != "") || ($autoresaudienciasDto->getFechaRegistro() != "") || ($autoresaudienciasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($autoresaudienciasDto->getcveGrupo() != "") {
            $sql.="cveGrupo='" . $autoresaudienciasDto->getcveGrupo() . "'";
            if (($autoresaudienciasDto->getActivo() != "") || ($autoresaudienciasDto->getFechaRegistro() != "") || ($autoresaudienciasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($autoresaudienciasDto->getactivo() != "") {
            $sql.="activo='" . $autoresaudienciasDto->getactivo() . "'";
            if (($autoresaudienciasDto->getFechaRegistro() != "") || ($autoresaudienciasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($autoresaudienciasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $autoresaudienciasDto->getfechaRegistro() . "'";
            if (($autoresaudienciasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($autoresaudienciasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $autoresaudienciasDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE idAutorAudiencia='" . $autoresaudienciasDto->getidAutorAudiencia() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new AutoresaudienciasDTO();
            $tmp->setidAutorAudiencia($autoresaudienciasDto->getidAutorAudiencia());
            $tmp = $this->selectAutoresaudiencias($tmp, "", $this->_proveedor);
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

    public function deleteAutoresaudiencias($autoresaudienciasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblautoresaudiencias  WHERE idAutorAudiencia='" . $autoresaudienciasDto->getidAutorAudiencia() . "'";
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

    public function selectAutoresaudiencias($autoresaudienciasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idAutorAudiencia,cveCatAudiencia,cveGrupo,activo,fechaRegistro,fechaActualizacion FROM tblautoresaudiencias ";
        if (($autoresaudienciasDto->getidAutorAudiencia() != "") || ($autoresaudienciasDto->getcveCatAudiencia() != "") || ($autoresaudienciasDto->getcveGrupo() != "") || ($autoresaudienciasDto->getactivo() != "") || ($autoresaudienciasDto->getfechaRegistro() != "") || ($autoresaudienciasDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($autoresaudienciasDto->getidAutorAudiencia() != "") {
            $sql.="idAutorAudiencia='" . $autoresaudienciasDto->getIdAutorAudiencia() . "'";
            if (($autoresaudienciasDto->getCveCatAudiencia() != "") || ($autoresaudienciasDto->getCveGrupo() != "") || ($autoresaudienciasDto->getActivo() != "") || ($autoresaudienciasDto->getFechaRegistro() != "") || ($autoresaudienciasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($autoresaudienciasDto->getcveCatAudiencia() != "") {
            $sql.="cveCatAudiencia='" . $autoresaudienciasDto->getCveCatAudiencia() . "'";
            if (($autoresaudienciasDto->getCveGrupo() != "") || ($autoresaudienciasDto->getActivo() != "") || ($autoresaudienciasDto->getFechaRegistro() != "") || ($autoresaudienciasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($autoresaudienciasDto->getcveGrupo() != "") {
            $sql.="cveGrupo='" . $autoresaudienciasDto->getCveGrupo() . "'";
            if (($autoresaudienciasDto->getActivo() != "") || ($autoresaudienciasDto->getFechaRegistro() != "") || ($autoresaudienciasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($autoresaudienciasDto->getactivo() != "") {
            $sql.="activo='" . $autoresaudienciasDto->getActivo() . "'";
            if (($autoresaudienciasDto->getFechaRegistro() != "") || ($autoresaudienciasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($autoresaudienciasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $autoresaudienciasDto->getFechaRegistro() . "'";
            if (($autoresaudienciasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($autoresaudienciasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $autoresaudienciasDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new AutoresaudienciasDTO();
                    $tmp[$contador]->setIdAutorAudiencia($row["idAutorAudiencia"]);
                    $tmp[$contador]->setCveCatAudiencia($row["cveCatAudiencia"]);
                    $tmp[$contador]->setCveGrupo($row["cveGrupo"]);
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

    public function autoresAudienciasOrden($cataudienciasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        $sql = "SELECT a.idAutorAudiencia, a.cveCatAudiencia, a.cveGrupo, a.activo, c.cveCatAudiencia, c.desCatAudiencia, c.cveEtapaProcesal FROM tblautoresaudiencias as a, tblcataudiencias as c ";
        $sql.= " WHERE a.cveGrupo ='" . $cataudienciasDto->getCveGrupo() . "'";
        $sql.= " and a.activo = 'S'";
        $sql.= " and a.cveCatAudiencia = c.cveCatAudiencia";

        if ($cataudienciasDto->getCveCatAudiencia() != "" && $cataudienciasDto->getCveCatAudiencia() != 0) {
            $sql.=" and a.cveCatAudiencia='" . $cataudienciasDto->getCveCatAudiencia() . "'";
        }

        $sql.= " order by c.desCatAudiencia asc";

//        echo $sql;

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                $tmp = array();
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador]["idAutorAudiencia"] = ($row["idAutorAudiencia"]);
                    $tmp[$contador]["cveCatAudiencia"] = ($row["cveCatAudiencia"]);
                    $tmp[$contador]["cveGrupo"] = ($row["cveGrupo"]);
                    $tmp[$contador]["desCatAudiencia"] = ($row["desCatAudiencia"]);
                    $tmp[$contador]["cveEtapaProcesal"] = ($row["cveEtapaProcesal"]);
                    $tmp[$contador]["activo"] = ($row["activo"]);
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