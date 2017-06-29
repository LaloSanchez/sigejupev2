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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/programacionmuestras/ProgramacionmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ProgramacionmuestrasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertProgramacionmuestras($programacionmuestrasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblprogramacionmuestras(";
        if ($programacionmuestrasDto->getIdProgramacionMuestra() != "") {
            $sql.="idProgramacionMuestra";
            if (($programacionmuestrasDto->getIdJuzgador() != "") || ($programacionmuestrasDto->getCveGrupoMuestraJuzgado() != "") || ($programacionmuestrasDto->getFechaInicio() != "") || ($programacionmuestrasDto->getFechaFinal() != "") || ($programacionmuestrasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionmuestrasDto->getIdJuzgador() != "") {
            $sql.="idJuzgador";
            if (($programacionmuestrasDto->getCveGrupoMuestraJuzgado() != "") || ($programacionmuestrasDto->getFechaInicio() != "") || ($programacionmuestrasDto->getFechaFinal() != "") || ($programacionmuestrasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionmuestrasDto->getCveGrupoMuestraJuzgado() != "") {
            $sql.="cveGrupoMuestraJuzgado";
            if (($programacionmuestrasDto->getFechaInicio() != "") || ($programacionmuestrasDto->getFechaFinal() != "") || ($programacionmuestrasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionmuestrasDto->getFechaInicio() != "") {
            $sql.="fechaInicio";
            if (($programacionmuestrasDto->getFechaFinal() != "") || ($programacionmuestrasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionmuestrasDto->getFechaFinal() != "") {
            $sql.="fechaFinal";
            if (($programacionmuestrasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionmuestrasDto->getActivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($programacionmuestrasDto->getIdProgramacionMuestra() != "") {
            $sql.="'" . $programacionmuestrasDto->getIdProgramacionMuestra() . "'";
            if (($programacionmuestrasDto->getIdJuzgador() != "") || ($programacionmuestrasDto->getCveGrupoMuestraJuzgado() != "") || ($programacionmuestrasDto->getFechaInicio() != "") || ($programacionmuestrasDto->getFechaFinal() != "") || ($programacionmuestrasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionmuestrasDto->getIdJuzgador() != "") {
            $sql.="'" . $programacionmuestrasDto->getIdJuzgador() . "'";
            if (($programacionmuestrasDto->getCveGrupoMuestraJuzgado() != "") || ($programacionmuestrasDto->getFechaInicio() != "") || ($programacionmuestrasDto->getFechaFinal() != "") || ($programacionmuestrasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionmuestrasDto->getCveGrupoMuestraJuzgado() != "") {
            $sql.="'" . $programacionmuestrasDto->getCveGrupoMuestraJuzgado() . "'";
            if (($programacionmuestrasDto->getFechaInicio() != "") || ($programacionmuestrasDto->getFechaFinal() != "") || ($programacionmuestrasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionmuestrasDto->getFechaInicio() != "") {
            $sql.="'" . $programacionmuestrasDto->getFechaInicio() . "'";
            if (($programacionmuestrasDto->getFechaFinal() != "") || ($programacionmuestrasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionmuestrasDto->getFechaFinal() != "") {
            $sql.="'" . $programacionmuestrasDto->getFechaFinal() . "'";
            if (($programacionmuestrasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionmuestrasDto->getActivo() != "") {
            $sql.="'" . $programacionmuestrasDto->getActivo() . "'";
        }
        if ($programacionmuestrasDto->getFechaRegistro() != "") {
            
        }
        if ($programacionmuestrasDto->getFechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ProgramacionmuestrasDTO();
            $tmp->setidProgramacionMuestra($this->_proveedor->lastID());
            $tmp = $this->selectProgramacionmuestras($tmp, "", $this->_proveedor);
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

    public function updateProgramacionmuestras($programacionmuestrasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblprogramacionmuestras SET ";
        if ($programacionmuestrasDto->getIdProgramacionMuestra() != "") {
            $sql.="idProgramacionMuestra='" . $programacionmuestrasDto->getIdProgramacionMuestra() . "'";
            if (($programacionmuestrasDto->getIdJuzgador() != "") || ($programacionmuestrasDto->getCveGrupoMuestraJuzgado() != "") || ($programacionmuestrasDto->getFechaInicio() != "") || ($programacionmuestrasDto->getFechaFinal() != "") || ($programacionmuestrasDto->getActivo() != "") || ($programacionmuestrasDto->getFechaRegistro() != "") || ($programacionmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionmuestrasDto->getIdJuzgador() != "") {
            $sql.="idJuzgador='" . $programacionmuestrasDto->getIdJuzgador() . "'";
            if (($programacionmuestrasDto->getCveGrupoMuestraJuzgado() != "") || ($programacionmuestrasDto->getFechaInicio() != "") || ($programacionmuestrasDto->getFechaFinal() != "") || ($programacionmuestrasDto->getActivo() != "") || ($programacionmuestrasDto->getFechaRegistro() != "") || ($programacionmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionmuestrasDto->getCveGrupoMuestraJuzgado() != "") {
            $sql.="cveGrupoMuestraJuzgado='" . $programacionmuestrasDto->getCveGrupoMuestraJuzgado() . "'";
            if (($programacionmuestrasDto->getFechaInicio() != "") || ($programacionmuestrasDto->getFechaFinal() != "") || ($programacionmuestrasDto->getActivo() != "") || ($programacionmuestrasDto->getFechaRegistro() != "") || ($programacionmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionmuestrasDto->getFechaInicio() != "") {
            $sql.="fechaInicio='" . $programacionmuestrasDto->getFechaInicio() . "'";
            if (($programacionmuestrasDto->getFechaFinal() != "") || ($programacionmuestrasDto->getActivo() != "") || ($programacionmuestrasDto->getFechaRegistro() != "") || ($programacionmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionmuestrasDto->getFechaFinal() != "") {
            $sql.="fechaFinal='" . $programacionmuestrasDto->getFechaFinal() . "'";
            if (($programacionmuestrasDto->getActivo() != "") || ($programacionmuestrasDto->getFechaRegistro() != "") || ($programacionmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionmuestrasDto->getActivo() != "") {
            $sql.="activo='" . $programacionmuestrasDto->getActivo() . "'";
            if (($programacionmuestrasDto->getFechaRegistro() != "") || ($programacionmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionmuestrasDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $programacionmuestrasDto->getFechaRegistro() . "'";
            if (($programacionmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionmuestrasDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $programacionmuestrasDto->getFechaActualizacion() . "'";
        }
        $sql.=" WHERE idProgramacionMuestra='" . $programacionmuestrasDto->getIdProgramacionMuestra() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ProgramacionmuestrasDTO();
            $tmp->setidProgramacionMuestra($programacionmuestrasDto->getIdProgramacionMuestra());
            $tmp = $this->selectProgramacionmuestras($tmp, "", $this->_proveedor);
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

    public function deleteProgramacionmuestras($programacionmuestrasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblprogramacionmuestras  WHERE idProgramacionMuestra='" . $programacionmuestrasDto->getIdProgramacionMuestra() . "'";
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

    public function selectProgramacionmuestras($programacionmuestrasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idProgramacionMuestra,idJuzgador,cveGrupoMuestraJuzgado,fechaInicio,fechaFinal,activo,fechaRegistro,fechaActualizacion FROM tblprogramacionmuestras ";
        if (($programacionmuestrasDto->getIdProgramacionMuestra() != "") || ($programacionmuestrasDto->getIdJuzgador() != "") || ($programacionmuestrasDto->getCveGrupoMuestraJuzgado() != "") || ($programacionmuestrasDto->getFechaInicio() != "") || ($programacionmuestrasDto->getFechaFinal() != "") || ($programacionmuestrasDto->getActivo() != "") || ($programacionmuestrasDto->getFechaRegistro() != "") || ($programacionmuestrasDto->getFechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($programacionmuestrasDto->getIdProgramacionMuestra() != "") {
            $sql.="idProgramacionMuestra='" . $programacionmuestrasDto->getIdProgramacionMuestra() . "'";
            if (($programacionmuestrasDto->getIdJuzgador() != "") || ($programacionmuestrasDto->getCveGrupoMuestraJuzgado() != "") || ($programacionmuestrasDto->getFechaInicio() != "") || ($programacionmuestrasDto->getFechaFinal() != "") || ($programacionmuestrasDto->getActivo() != "") || ($programacionmuestrasDto->getFechaRegistro() != "") || ($programacionmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacionmuestrasDto->getIdJuzgador() != "") {
            $sql.="idJuzgador='" . $programacionmuestrasDto->getIdJuzgador() . "'";
            if (($programacionmuestrasDto->getCveGrupoMuestraJuzgado() != "") || ($programacionmuestrasDto->getFechaInicio() != "") || ($programacionmuestrasDto->getFechaFinal() != "") || ($programacionmuestrasDto->getActivo() != "") || ($programacionmuestrasDto->getFechaRegistro() != "") || ($programacionmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacionmuestrasDto->getCveGrupoMuestraJuzgado() != "") {
            $sql.="cveGrupoMuestraJuzgado='" . $programacionmuestrasDto->getCveGrupoMuestraJuzgado() . "'";
            if (($programacionmuestrasDto->getFechaInicio() != "") || ($programacionmuestrasDto->getFechaFinal() != "") || ($programacionmuestrasDto->getActivo() != "") || ($programacionmuestrasDto->getFechaRegistro() != "") || ($programacionmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacionmuestrasDto->getFechaInicio() != "") {
            $sql.="fechaInicio='" . $programacionmuestrasDto->getFechaInicio() . "'";
            if (($programacionmuestrasDto->getFechaFinal() != "") || ($programacionmuestrasDto->getActivo() != "") || ($programacionmuestrasDto->getFechaRegistro() != "") || ($programacionmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacionmuestrasDto->getFechaFinal() != "") {
            $sql.="fechaFinal='" . $programacionmuestrasDto->getFechaFinal() . "'";
            if (($programacionmuestrasDto->getActivo() != "") || ($programacionmuestrasDto->getFechaRegistro() != "") || ($programacionmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacionmuestrasDto->getActivo() != "") {
            $sql.="activo='" . $programacionmuestrasDto->getActivo() . "'";
            if (($programacionmuestrasDto->getFechaRegistro() != "") || ($programacionmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacionmuestrasDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $programacionmuestrasDto->getFechaRegistro() . "'";
            if (($programacionmuestrasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacionmuestrasDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $programacionmuestrasDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new ProgramacionmuestrasDTO();
                    $tmp[$contador]->setIdProgramacionMuestra($row["idProgramacionMuestra"]);
                    $tmp[$contador]->setIdJuzgador($row["idJuzgador"]);
                    $tmp[$contador]->setCveGrupoMuestraJuzgado($row["cveGrupoMuestraJuzgado"]);
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