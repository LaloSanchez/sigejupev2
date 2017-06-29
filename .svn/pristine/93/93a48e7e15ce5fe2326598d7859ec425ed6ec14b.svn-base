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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/programacionapelacateos/ProgramacionapelacateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ProgramacionapelacateosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertProgramacionapelacateos($programacionapelacateosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblprogramacionapelacateos(";
        if ($programacionapelacateosDto->getIdProgramacionApelaCateo() != "") {
            $sql.="idProgramacionApelaCateo";
            if (($programacionapelacateosDto->getIdJuzgador() != "") || ($programacionapelacateosDto->getCveJuzgado() != "") || ($programacionapelacateosDto->getFechaInicio() != "") || ($programacionapelacateosDto->getFechaFinal() != "") || ($programacionapelacateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionapelacateosDto->getIdJuzgador() != "") {
            $sql.="idJuzgador";
            if (($programacionapelacateosDto->getCveJuzgado() != "") || ($programacionapelacateosDto->getFechaInicio() != "") || ($programacionapelacateosDto->getFechaFinal() != "") || ($programacionapelacateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionapelacateosDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado";
            if (($programacionapelacateosDto->getFechaInicio() != "") || ($programacionapelacateosDto->getFechaFinal() != "") || ($programacionapelacateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionapelacateosDto->getFechaInicio() != "") {
            $sql.="fechaInicio";
            if (($programacionapelacateosDto->getFechaFinal() != "") || ($programacionapelacateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionapelacateosDto->getFechaFinal() != "") {
            $sql.="fechaFinal";
            if (($programacionapelacateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionapelacateosDto->getActivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($programacionapelacateosDto->getIdProgramacionApelaCateo() != "") {
            $sql.="'" . $programacionapelacateosDto->getIdProgramacionApelaCateo() . "'";
            if (($programacionapelacateosDto->getIdJuzgador() != "") || ($programacionapelacateosDto->getCveJuzgado() != "") || ($programacionapelacateosDto->getFechaInicio() != "") || ($programacionapelacateosDto->getFechaFinal() != "") || ($programacionapelacateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionapelacateosDto->getIdJuzgador() != "") {
            $sql.="'" . $programacionapelacateosDto->getIdJuzgador() . "'";
            if (($programacionapelacateosDto->getCveJuzgado() != "") || ($programacionapelacateosDto->getFechaInicio() != "") || ($programacionapelacateosDto->getFechaFinal() != "") || ($programacionapelacateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionapelacateosDto->getCveJuzgado() != "") {
            $sql.="'" . $programacionapelacateosDto->getCveJuzgado() . "'";
            if (($programacionapelacateosDto->getFechaInicio() != "") || ($programacionapelacateosDto->getFechaFinal() != "") || ($programacionapelacateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionapelacateosDto->getFechaInicio() != "") {
            $sql.="'" . $programacionapelacateosDto->getFechaInicio() . "'";
            if (($programacionapelacateosDto->getFechaFinal() != "") || ($programacionapelacateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionapelacateosDto->getFechaFinal() != "") {
            $sql.="'" . $programacionapelacateosDto->getFechaFinal() . "'";
            if (($programacionapelacateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionapelacateosDto->getActivo() != "") {
            $sql.="'" . $programacionapelacateosDto->getActivo() . "'";
        }
        if ($programacionapelacateosDto->getFechaRegistro() != "") {
            
        }
        if ($programacionapelacateosDto->getFechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ProgramacionapelacateosDTO();
            $tmp->setidProgramacionApelaCateo($this->_proveedor->lastID());
            $tmp = $this->selectProgramacionapelacateos($tmp, "", $this->_proveedor);
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

    public function updateProgramacionapelacateos($programacionapelacateosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblprogramacionapelacateos SET ";
        if ($programacionapelacateosDto->getIdProgramacionApelaCateo() != "") {
            $sql.="idProgramacionApelaCateo='" . $programacionapelacateosDto->getIdProgramacionApelaCateo() . "'";
            if (($programacionapelacateosDto->getIdJuzgador() != "") || ($programacionapelacateosDto->getCveJuzgado() != "") || ($programacionapelacateosDto->getFechaInicio() != "") || ($programacionapelacateosDto->getFechaFinal() != "") || ($programacionapelacateosDto->getActivo() != "") || ($programacionapelacateosDto->getFechaRegistro() != "") || ($programacionapelacateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionapelacateosDto->getIdJuzgador() != "") {
            $sql.="idJuzgador='" . $programacionapelacateosDto->getIdJuzgador() . "'";
            if (($programacionapelacateosDto->getCveJuzgado() != "") || ($programacionapelacateosDto->getFechaInicio() != "") || ($programacionapelacateosDto->getFechaFinal() != "") || ($programacionapelacateosDto->getActivo() != "") || ($programacionapelacateosDto->getFechaRegistro() != "") || ($programacionapelacateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionapelacateosDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado='" . $programacionapelacateosDto->getCveJuzgado() . "'";
            if (($programacionapelacateosDto->getFechaInicio() != "") || ($programacionapelacateosDto->getFechaFinal() != "") || ($programacionapelacateosDto->getActivo() != "") || ($programacionapelacateosDto->getFechaRegistro() != "") || ($programacionapelacateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionapelacateosDto->getFechaInicio() != "") {
            $sql.="fechaInicio='" . $programacionapelacateosDto->getFechaInicio() . "'";
            if (($programacionapelacateosDto->getFechaFinal() != "") || ($programacionapelacateosDto->getActivo() != "") || ($programacionapelacateosDto->getFechaRegistro() != "") || ($programacionapelacateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionapelacateosDto->getFechaFinal() != "") {
            $sql.="fechaFinal='" . $programacionapelacateosDto->getFechaFinal() . "'";
            if (($programacionapelacateosDto->getActivo() != "") || ($programacionapelacateosDto->getFechaRegistro() != "") || ($programacionapelacateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionapelacateosDto->getActivo() != "") {
            $sql.="activo='" . $programacionapelacateosDto->getActivo() . "'";
            if (($programacionapelacateosDto->getFechaRegistro() != "") || ($programacionapelacateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionapelacateosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $programacionapelacateosDto->getFechaRegistro() . "'";
            if (($programacionapelacateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionapelacateosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $programacionapelacateosDto->getFechaActualizacion() . "'";
        }
        $sql.=" WHERE idProgramacionApelaCateo='" . $programacionapelacateosDto->getIdProgramacionApelaCateo() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ProgramacionapelacateosDTO();
            $tmp->setidProgramacionApelaCateo($programacionapelacateosDto->getIdProgramacionApelaCateo());
            $tmp = $this->selectProgramacionapelacateos($tmp, "", $this->_proveedor);
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

    public function deleteProgramacionapelacateos($programacionapelacateosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblprogramacionapelacateos  WHERE idProgramacionApelaCateo='" . $programacionapelacateosDto->getIdProgramacionApelaCateo() . "'";
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

    public function selectProgramacionapelacateos($programacionapelacateosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idProgramacionApelaCateo,idJuzgador,cveJuzgado,fechaInicio,fechaFinal,activo,fechaRegistro,fechaActualizacion FROM tblprogramacionapelacateos ";
        if (($programacionapelacateosDto->getIdProgramacionApelaCateo() != "") || ($programacionapelacateosDto->getIdJuzgador() != "") || ($programacionapelacateosDto->getCveJuzgado() != "") || ($programacionapelacateosDto->getFechaInicio() != "") || ($programacionapelacateosDto->getFechaFinal() != "") || ($programacionapelacateosDto->getActivo() != "") || ($programacionapelacateosDto->getFechaRegistro() != "") || ($programacionapelacateosDto->getFechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($programacionapelacateosDto->getIdProgramacionApelaCateo() != "") {
            $sql.="idProgramacionApelaCateo='" . $programacionapelacateosDto->getIdProgramacionApelaCateo() . "'";
            if (($programacionapelacateosDto->getIdJuzgador() != "") || ($programacionapelacateosDto->getCveJuzgado() != "") || ($programacionapelacateosDto->getFechaInicio() != "") || ($programacionapelacateosDto->getFechaFinal() != "") || ($programacionapelacateosDto->getActivo() != "") || ($programacionapelacateosDto->getFechaRegistro() != "") || ($programacionapelacateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacionapelacateosDto->getIdJuzgador() != "") {
            $sql.="idJuzgador='" . $programacionapelacateosDto->getIdJuzgador() . "'";
            if (($programacionapelacateosDto->getCveJuzgado() != "") || ($programacionapelacateosDto->getFechaInicio() != "") || ($programacionapelacateosDto->getFechaFinal() != "") || ($programacionapelacateosDto->getActivo() != "") || ($programacionapelacateosDto->getFechaRegistro() != "") || ($programacionapelacateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacionapelacateosDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado='" . $programacionapelacateosDto->getCveJuzgado() . "'";
            if (($programacionapelacateosDto->getFechaInicio() != "") || ($programacionapelacateosDto->getFechaFinal() != "") || ($programacionapelacateosDto->getActivo() != "") || ($programacionapelacateosDto->getFechaRegistro() != "") || ($programacionapelacateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacionapelacateosDto->getFechaInicio() != "") {
            $sql.="fechaInicio='" . $programacionapelacateosDto->getFechaInicio() . "'";
            if (($programacionapelacateosDto->getFechaFinal() != "") || ($programacionapelacateosDto->getActivo() != "") || ($programacionapelacateosDto->getFechaRegistro() != "") || ($programacionapelacateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacionapelacateosDto->getFechaFinal() != "") {
            $sql.="fechaFinal='" . $programacionapelacateosDto->getFechaFinal() . "'";
            if (($programacionapelacateosDto->getActivo() != "") || ($programacionapelacateosDto->getFechaRegistro() != "") || ($programacionapelacateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacionapelacateosDto->getActivo() != "") {
            $sql.="activo='" . $programacionapelacateosDto->getActivo() . "'";
            if (($programacionapelacateosDto->getFechaRegistro() != "") || ($programacionapelacateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacionapelacateosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $programacionapelacateosDto->getFechaRegistro() . "'";
            if (($programacionapelacateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacionapelacateosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $programacionapelacateosDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new ProgramacionapelacateosDTO();
                    $tmp[$contador]->setIdProgramacionApelaCateo($row["idProgramacionApelaCateo"]);
                    $tmp[$contador]->setIdJuzgador($row["idJuzgador"]);
                    $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                    $tmp[$contador]->setFechaInicio($row["fechaInicio"]);
                    $tmp[$contador]->setFechaFinal($row["fechaFinal"]);
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