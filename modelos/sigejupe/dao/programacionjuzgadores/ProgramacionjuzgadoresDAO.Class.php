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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/programacionjuzgadores/ProgramacionjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ProgramacionjuzgadoresDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertProgramacionjuzgadores($programacionjuzgadoresDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblprogramacionjuzgadores(";
        if ($programacionjuzgadoresDto->getidProgramacionJuzgador() != "") {
            $sql.="idProgramacionJuzgador";
            if (($programacionjuzgadoresDto->getIdJuzgador() != "") || ($programacionjuzgadoresDto->getCveRolJuzgador() != "") || ($programacionjuzgadoresDto->getFechaInicio() != "") || ($programacionjuzgadoresDto->getFechaFinal() != "") || ($programacionjuzgadoresDto->getActivo() != "") || ($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionjuzgadoresDto->getidJuzgador() != "") {
            $sql.="idJuzgador";
            if (($programacionjuzgadoresDto->getCveRolJuzgador() != "") || ($programacionjuzgadoresDto->getFechaInicio() != "") || ($programacionjuzgadoresDto->getFechaFinal() != "") || ($programacionjuzgadoresDto->getActivo() != "") || ($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionjuzgadoresDto->getcveRolJuzgador() != "") {
            $sql.="cveRolJuzgador";
            if (($programacionjuzgadoresDto->getFechaInicio() != "") || ($programacionjuzgadoresDto->getFechaFinal() != "") || ($programacionjuzgadoresDto->getActivo() != "") || ($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionjuzgadoresDto->getfechaInicio() != "") {
            $sql.="fechaInicio";
            if (($programacionjuzgadoresDto->getFechaFinal() != "") || ($programacionjuzgadoresDto->getActivo() != "") || ($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionjuzgadoresDto->getfechaFinal() != "") {
            $sql.="fechaFinal";
            if (($programacionjuzgadoresDto->getActivo() != "") || ($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionjuzgadoresDto->getactivo() != "") {
            $sql.="activo";
            if (($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionjuzgadoresDto->getidProgramacion() != "") {
            $sql.="idProgramacion";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($programacionjuzgadoresDto->getidProgramacionJuzgador() != "") {
            $sql.="'" . $programacionjuzgadoresDto->getidProgramacionJuzgador() . "'";
            if (($programacionjuzgadoresDto->getIdJuzgador() != "") || ($programacionjuzgadoresDto->getCveRolJuzgador() != "") || ($programacionjuzgadoresDto->getFechaInicio() != "") || ($programacionjuzgadoresDto->getFechaFinal() != "") || ($programacionjuzgadoresDto->getActivo() != "") || ($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionjuzgadoresDto->getidJuzgador() != "") {
            $sql.="'" . $programacionjuzgadoresDto->getidJuzgador() . "'";
            if (($programacionjuzgadoresDto->getCveRolJuzgador() != "") || ($programacionjuzgadoresDto->getFechaInicio() != "") || ($programacionjuzgadoresDto->getFechaFinal() != "") || ($programacionjuzgadoresDto->getActivo() != "") || ($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionjuzgadoresDto->getcveRolJuzgador() != "") {
            $sql.="'" . $programacionjuzgadoresDto->getcveRolJuzgador() . "'";
            if (($programacionjuzgadoresDto->getFechaInicio() != "") || ($programacionjuzgadoresDto->getFechaFinal() != "") || ($programacionjuzgadoresDto->getActivo() != "") || ($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionjuzgadoresDto->getfechaInicio() != "") {
            $sql.="'" . $programacionjuzgadoresDto->getfechaInicio() . "'";
            if (($programacionjuzgadoresDto->getFechaFinal() != "") || ($programacionjuzgadoresDto->getActivo() != "") || ($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionjuzgadoresDto->getfechaFinal() != "") {
            $sql.="'" . $programacionjuzgadoresDto->getfechaFinal() . "'";
            if (($programacionjuzgadoresDto->getActivo() != "") || ($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionjuzgadoresDto->getactivo() != "") {
            $sql.="'" . $programacionjuzgadoresDto->getactivo() . "'";
            if (($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionjuzgadoresDto->getfechaRegistro() != "") {
            if (($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionjuzgadoresDto->getfechaActualizacion() != "") {
            if (($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionjuzgadoresDto->getidProgramacion() != "") {
            $sql.="'" . $programacionjuzgadoresDto->getidProgramacion() . "'";
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ProgramacionjuzgadoresDTO();
            $tmp->setidProgramacionJuzgador($this->_proveedor->lastID());
            $tmp = $this->selectProgramacionjuzgadores($tmp, "", $this->_proveedor);
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

    public function updateProgramacionjuzgadores($programacionjuzgadoresDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblprogramacionjuzgadores SET ";
        if ($programacionjuzgadoresDto->getidProgramacionJuzgador() != "") {
            $sql.="idProgramacionJuzgador='" . $programacionjuzgadoresDto->getidProgramacionJuzgador() . "'";
            if (($programacionjuzgadoresDto->getIdJuzgador() != "") || ($programacionjuzgadoresDto->getCveRolJuzgador() != "") || ($programacionjuzgadoresDto->getFechaInicio() != "") || ($programacionjuzgadoresDto->getFechaFinal() != "") || ($programacionjuzgadoresDto->getActivo() != "") || ($programacionjuzgadoresDto->getFechaRegistro() != "") || ($programacionjuzgadoresDto->getFechaActualizacion() != "") || ($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionjuzgadoresDto->getidJuzgador() != "") {
            $sql.="idJuzgador='" . $programacionjuzgadoresDto->getidJuzgador() . "'";
            if (($programacionjuzgadoresDto->getCveRolJuzgador() != "") || ($programacionjuzgadoresDto->getFechaInicio() != "") || ($programacionjuzgadoresDto->getFechaFinal() != "") || ($programacionjuzgadoresDto->getActivo() != "") || ($programacionjuzgadoresDto->getFechaRegistro() != "") || ($programacionjuzgadoresDto->getFechaActualizacion() != "") || ($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionjuzgadoresDto->getcveRolJuzgador() != "") {
            $sql.="cveRolJuzgador='" . $programacionjuzgadoresDto->getcveRolJuzgador() . "'";
            if (($programacionjuzgadoresDto->getFechaInicio() != "") || ($programacionjuzgadoresDto->getFechaFinal() != "") || ($programacionjuzgadoresDto->getActivo() != "") || ($programacionjuzgadoresDto->getFechaRegistro() != "") || ($programacionjuzgadoresDto->getFechaActualizacion() != "") || ($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionjuzgadoresDto->getfechaInicio() != "") {
            $sql.="fechaInicio='" . $programacionjuzgadoresDto->getfechaInicio() . "'";
            if (($programacionjuzgadoresDto->getFechaFinal() != "") || ($programacionjuzgadoresDto->getActivo() != "") || ($programacionjuzgadoresDto->getFechaRegistro() != "") || ($programacionjuzgadoresDto->getFechaActualizacion() != "") || ($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionjuzgadoresDto->getfechaFinal() != "") {
            $sql.="fechaFinal='" . $programacionjuzgadoresDto->getfechaFinal() . "'";
            if (($programacionjuzgadoresDto->getActivo() != "") || ($programacionjuzgadoresDto->getFechaRegistro() != "") || ($programacionjuzgadoresDto->getFechaActualizacion() != "") || ($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionjuzgadoresDto->getactivo() != "") {
            $sql.="activo='" . $programacionjuzgadoresDto->getactivo() . "'";
            if (($programacionjuzgadoresDto->getFechaRegistro() != "") || ($programacionjuzgadoresDto->getFechaActualizacion() != "") || ($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionjuzgadoresDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $programacionjuzgadoresDto->getfechaRegistro() . "'";
            if (($programacionjuzgadoresDto->getFechaActualizacion() != "") || ($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionjuzgadoresDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $programacionjuzgadoresDto->getfechaActualizacion() . "'";
            if (($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionjuzgadoresDto->getidProgramacion() != "") {
            $sql.="idProgramacion='" . $programacionjuzgadoresDto->getidProgramacion() . "'";
        }
        $sql.=" WHERE idProgramacionJuzgador='" . $programacionjuzgadoresDto->getidProgramacionJuzgador() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ProgramacionjuzgadoresDTO();
            $tmp->setidProgramacionJuzgador($programacionjuzgadoresDto->getidProgramacionJuzgador());
            $tmp = $this->selectProgramacionjuzgadores($tmp, "", $this->_proveedor);
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

    public function deleteProgramacionjuzgadores($programacionjuzgadoresDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblprogramacionjuzgadores  WHERE idProgramacionJuzgador='" . $programacionjuzgadoresDto->getidProgramacionJuzgador() . "'";
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

    public function selectProgramacionjuzgadores($programacionjuzgadoresDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idProgramacionJuzgador,idJuzgador,cveRolJuzgador,fechaInicio,fechaFinal,activo,fechaRegistro,fechaActualizacion,idProgramacion FROM tblprogramacionjuzgadores ";
        if (($programacionjuzgadoresDto->getidProgramacionJuzgador() != "") || ($programacionjuzgadoresDto->getidJuzgador() != "") || ($programacionjuzgadoresDto->getcveRolJuzgador() != "") || ($programacionjuzgadoresDto->getfechaInicio() != "") || ($programacionjuzgadoresDto->getfechaFinal() != "") || ($programacionjuzgadoresDto->getactivo() != "") || ($programacionjuzgadoresDto->getfechaRegistro() != "") || ($programacionjuzgadoresDto->getfechaActualizacion() != "") || ($programacionjuzgadoresDto->getidProgramacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($programacionjuzgadoresDto->getidProgramacionJuzgador() != "") {
            $sql.="idProgramacionJuzgador='" . $programacionjuzgadoresDto->getIdProgramacionJuzgador() . "'";
            if (($programacionjuzgadoresDto->getIdJuzgador() != "") || ($programacionjuzgadoresDto->getCveRolJuzgador() != "") || ($programacionjuzgadoresDto->getFechaInicio() != "") || ($programacionjuzgadoresDto->getFechaFinal() != "") || ($programacionjuzgadoresDto->getActivo() != "") || ($programacionjuzgadoresDto->getFechaRegistro() != "") || ($programacionjuzgadoresDto->getFechaActualizacion() != "") || ($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacionjuzgadoresDto->getidJuzgador() != "") {
            $sql.="idJuzgador='" . $programacionjuzgadoresDto->getIdJuzgador() . "'";
            if (($programacionjuzgadoresDto->getCveRolJuzgador() != "") || ($programacionjuzgadoresDto->getFechaInicio() != "") || ($programacionjuzgadoresDto->getFechaFinal() != "") || ($programacionjuzgadoresDto->getActivo() != "") || ($programacionjuzgadoresDto->getFechaRegistro() != "") || ($programacionjuzgadoresDto->getFechaActualizacion() != "") || ($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacionjuzgadoresDto->getcveRolJuzgador() != "") {
            $sql.="cveRolJuzgador='" . $programacionjuzgadoresDto->getCveRolJuzgador() . "'";
            if (($programacionjuzgadoresDto->getFechaInicio() != "") || ($programacionjuzgadoresDto->getFechaFinal() != "") || ($programacionjuzgadoresDto->getActivo() != "") || ($programacionjuzgadoresDto->getFechaRegistro() != "") || ($programacionjuzgadoresDto->getFechaActualizacion() != "") || ($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacionjuzgadoresDto->getfechaInicio() != "") {
            $sql.="fechaInicio LIKE'%" . $programacionjuzgadoresDto->getFechaInicio() . "%'";
            if (($programacionjuzgadoresDto->getFechaFinal() != "") || ($programacionjuzgadoresDto->getActivo() != "") || ($programacionjuzgadoresDto->getFechaRegistro() != "") || ($programacionjuzgadoresDto->getFechaActualizacion() != "") || ($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacionjuzgadoresDto->getfechaFinal() != "") {
            $sql.="fechaFinal LIKE'%" . $programacionjuzgadoresDto->getFechaFinal() . "%'";
            if (($programacionjuzgadoresDto->getActivo() != "") || ($programacionjuzgadoresDto->getFechaRegistro() != "") || ($programacionjuzgadoresDto->getFechaActualizacion() != "") || ($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacionjuzgadoresDto->getactivo() != "") {
            $sql.="activo='" . $programacionjuzgadoresDto->getActivo() . "'";
            if (($programacionjuzgadoresDto->getFechaRegistro() != "") || ($programacionjuzgadoresDto->getFechaActualizacion() != "") || ($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacionjuzgadoresDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $programacionjuzgadoresDto->getFechaRegistro() . "'";
            if (($programacionjuzgadoresDto->getFechaActualizacion() != "") || ($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacionjuzgadoresDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $programacionjuzgadoresDto->getFechaActualizacion() . "'";
            if (($programacionjuzgadoresDto->getIdProgramacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacionjuzgadoresDto->getidProgramacion() != "") {
            $sql.="idProgramacion='" . $programacionjuzgadoresDto->getIdProgramacion() . "'";
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
                    $tmp[$contador] = new ProgramacionjuzgadoresDTO();
                    $tmp[$contador]->setIdProgramacionJuzgador($row["idProgramacionJuzgador"]);
                    $tmp[$contador]->setIdJuzgador($row["idJuzgador"]);
                    $tmp[$contador]->setCveRolJuzgador($row["cveRolJuzgador"]);
                    $tmp[$contador]->setFechaInicio($row["fechaInicio"]);
                    $tmp[$contador]->setFechaFinal($row["fechaFinal"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setIdProgramacion($row["idProgramacion"]);
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