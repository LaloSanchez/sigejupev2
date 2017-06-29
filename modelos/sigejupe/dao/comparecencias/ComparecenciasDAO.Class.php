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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/comparecencias/ComparecenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ComparecenciasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertComparecencias($comparecenciasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblcomparecencias(";
        if ($comparecenciasDto->getIdComparecencia() != "") {
            $sql.="idComparecencia";
            if (($comparecenciasDto->getIdActuacion() != "") || ($comparecenciasDto->getNumEmpleadoFePublica() != "") || ($comparecenciasDto->getNombre() != "") || ($comparecenciasDto->getActivo() != "") || ($comparecenciasDto->getLugarComparecencia() != "") || ($comparecenciasDto->getHoraComparecencia() != "")) {
                $sql.=",";
            }
        }
        if ($comparecenciasDto->getIdActuacion() != "") {
            $sql.="idActuacion";
            if (($comparecenciasDto->getNumEmpleadoFePublica() != "") || ($comparecenciasDto->getNombre() != "") || ($comparecenciasDto->getActivo() != "") || ($comparecenciasDto->getLugarComparecencia() != "") || ($comparecenciasDto->getHoraComparecencia() != "")) {
                $sql.=",";
            }
        }
        if ($comparecenciasDto->getNumEmpleadoFePublica() != "") {
            $sql.="numEmpleadoFePublica";
            if (($comparecenciasDto->getNombre() != "") || ($comparecenciasDto->getActivo() != "") || ($comparecenciasDto->getLugarComparecencia() != "") || ($comparecenciasDto->getHoraComparecencia() != "")) {
                $sql.=",";
            }
        }
        if ($comparecenciasDto->getNombre() != "") {
            $sql.="Nombre";
            if (($comparecenciasDto->getActivo() != "") || ($comparecenciasDto->getLugarComparecencia() != "") || ($comparecenciasDto->getHoraComparecencia() != "")) {
                $sql.=",";
            }
        }
        if ($comparecenciasDto->getActivo() != "") {
            $sql.="activo";
            if (($comparecenciasDto->getLugarComparecencia() != "") || ($comparecenciasDto->getHoraComparecencia() != "")) {
                $sql.=",";
            }
        }
        if ($comparecenciasDto->getLugarComparecencia() != "") {
            $sql.="lugarComparecencia";
            if (($comparecenciasDto->getHoraComparecencia() != "")) {
                $sql.=",";
            }
        }
        if ($comparecenciasDto->getHoraComparecencia() != "") {
            $sql.="horaComparecencia";
        }
        $sql.=") VALUES(";
        if ($comparecenciasDto->getIdComparecencia() != "") {
            $sql.="'" . $comparecenciasDto->getIdComparecencia() . "'";
            if (($comparecenciasDto->getIdActuacion() != "") || ($comparecenciasDto->getNumEmpleadoFePublica() != "") || ($comparecenciasDto->getNombre() != "") || ($comparecenciasDto->getActivo() != "") || ($comparecenciasDto->getLugarComparecencia() != "") || ($comparecenciasDto->getHoraComparecencia() != "")) {
                $sql.=",";
            }
        }
        if ($comparecenciasDto->getIdActuacion() != "") {
            $sql.="'" . $comparecenciasDto->getIdActuacion() . "'";
            if (($comparecenciasDto->getNumEmpleadoFePublica() != "") || ($comparecenciasDto->getNombre() != "") || ($comparecenciasDto->getActivo() != "") || ($comparecenciasDto->getLugarComparecencia() != "") || ($comparecenciasDto->getHoraComparecencia() != "")) {
                $sql.=",";
            }
        }
        if ($comparecenciasDto->getNumEmpleadoFePublica() != "") {
            $sql.="'" . $comparecenciasDto->getNumEmpleadoFePublica() . "'";
            if (($comparecenciasDto->getNombre() != "") || ($comparecenciasDto->getActivo() != "") || ($comparecenciasDto->getLugarComparecencia() != "") || ($comparecenciasDto->getHoraComparecencia() != "")) {
                $sql.=",";
            }
        }
        if ($comparecenciasDto->getNombre() != "") {
            $sql.="'" . $comparecenciasDto->getNombre() . "'";
            if (($comparecenciasDto->getActivo() != "") || ($comparecenciasDto->getLugarComparecencia() != "") || ($comparecenciasDto->getHoraComparecencia() != "")) {
                $sql.=",";
            }
        }
        if ($comparecenciasDto->getActivo() != "") {
            $sql.="'" . $comparecenciasDto->getActivo() . "'";
            if (($comparecenciasDto->getLugarComparecencia() != "") || ($comparecenciasDto->getHoraComparecencia() != "")) {
                $sql.=",";
            }
        }
        if ($comparecenciasDto->getLugarComparecencia() != "") {
            $sql.="'" . $comparecenciasDto->getLugarComparecencia() . "'";
            if (($comparecenciasDto->getHoraComparecencia() != "")) {
                $sql.=",";
            }
        }
        if ($comparecenciasDto->getHoraComparecencia() != "") {
            $sql.="'" . $comparecenciasDto->getHoraComparecencia() . "'";
        }
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ComparecenciasDTO();
            $tmp->setidComparecencia($this->_proveedor->lastID());
            $tmp = $this->selectComparecencias($tmp, "", $this->_proveedor);
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

    public function updateComparecencias($comparecenciasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblcomparecencias SET ";
        if ($comparecenciasDto->getIdComparecencia() != "") {
            $sql.="idComparecencia='" . $comparecenciasDto->getIdComparecencia() . "'";
            if (($comparecenciasDto->getIdActuacion() != "") || ($comparecenciasDto->getNumEmpleadoFePublica() != "") || ($comparecenciasDto->getNombre() != "") || ($comparecenciasDto->getActivo() != "") || ($comparecenciasDto->getLugarComparecencia() != "") || ($comparecenciasDto->getHoraComparecencia() != "")) {
                $sql.=",";
            }
        }
        if ($comparecenciasDto->getIdActuacion() != "") {
            $sql.="idActuacion='" . $comparecenciasDto->getIdActuacion() . "'";
            if (($comparecenciasDto->getNumEmpleadoFePublica() != "") || ($comparecenciasDto->getNombre() != "") || ($comparecenciasDto->getActivo() != "") || ($comparecenciasDto->getLugarComparecencia() != "") || ($comparecenciasDto->getHoraComparecencia() != "")) {
                $sql.=",";
            }
        }
        if ($comparecenciasDto->getNumEmpleadoFePublica() != "") {
            $sql.="numEmpleadoFePublica='" . $comparecenciasDto->getNumEmpleadoFePublica() . "'";
            if (($comparecenciasDto->getNombre() != "") || ($comparecenciasDto->getActivo() != "") || ($comparecenciasDto->getLugarComparecencia() != "") || ($comparecenciasDto->getHoraComparecencia() != "")) {
                $sql.=",";
            }
        }
        if ($comparecenciasDto->getNombre() != "") {
            $sql.="Nombre='" . $comparecenciasDto->getNombre() . "'";
            if (($comparecenciasDto->getActivo() != "") || ($comparecenciasDto->getLugarComparecencia() != "") || ($comparecenciasDto->getHoraComparecencia() != "")) {
                $sql.=",";
            }
        }
        if ($comparecenciasDto->getActivo() != "") {
            $sql.="activo='" . $comparecenciasDto->getActivo() . "'";
            if (($comparecenciasDto->getLugarComparecencia() != "") || ($comparecenciasDto->getHoraComparecencia() != "")) {
                $sql.=",";
            }
        }
        if ($comparecenciasDto->getLugarComparecencia() != "") {
            $sql.="lugarComparecencia='" . $comparecenciasDto->getLugarComparecencia() . "'";
            if (($comparecenciasDto->getHoraComparecencia() != "")) {
                $sql.=",";
            }
        }
        if ($comparecenciasDto->getHoraComparecencia() != "") {
            $sql.="horaComparecencia='" . $comparecenciasDto->getHoraComparecencia() . "'";
        }
        $sql.=" WHERE idComparecencia='" . $comparecenciasDto->getIdComparecencia() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ComparecenciasDTO();
            $tmp->setidComparecencia($comparecenciasDto->getIdComparecencia());
            $tmp = $this->selectComparecencias($tmp, "", $this->_proveedor);
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

    public function deleteComparecencias($comparecenciasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblcomparecencias  WHERE idComparecencia='" . $comparecenciasDto->getIdComparecencia() . "'";
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

    public function selectComparecencias($comparecenciasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idComparecencia,idActuacion,numEmpleadoFePublica,Nombre,activo,lugarComparecencia,horaComparecencia FROM tblcomparecencias ";
        if (($comparecenciasDto->getIdComparecencia() != "") || ($comparecenciasDto->getIdActuacion() != "") || ($comparecenciasDto->getNumEmpleadoFePublica() != "") || ($comparecenciasDto->getNombre() != "") || ($comparecenciasDto->getActivo() != "") || ($comparecenciasDto->getLugarComparecencia() != "") || ($comparecenciasDto->getHoraComparecencia() != "")) {
            $sql.=" WHERE ";
        }
        if ($comparecenciasDto->getIdComparecencia() != "") {
            $sql.="idComparecencia='" . $comparecenciasDto->getIdComparecencia() . "'";
            if (($comparecenciasDto->getIdActuacion() != "") || ($comparecenciasDto->getNumEmpleadoFePublica() != "") || ($comparecenciasDto->getNombre() != "") || ($comparecenciasDto->getActivo() != "") || ($comparecenciasDto->getLugarComparecencia() != "") || ($comparecenciasDto->getHoraComparecencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($comparecenciasDto->getIdActuacion() != "") {
            $sql.="idActuacion='" . $comparecenciasDto->getIdActuacion() . "'";
            if (($comparecenciasDto->getNumEmpleadoFePublica() != "") || ($comparecenciasDto->getNombre() != "") || ($comparecenciasDto->getActivo() != "") || ($comparecenciasDto->getLugarComparecencia() != "") || ($comparecenciasDto->getHoraComparecencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($comparecenciasDto->getNumEmpleadoFePublica() != "") {
            $sql.="numEmpleadoFePublica='" . $comparecenciasDto->getNumEmpleadoFePublica() . "'";
            if (($comparecenciasDto->getNombre() != "") || ($comparecenciasDto->getActivo() != "") || ($comparecenciasDto->getLugarComparecencia() != "") || ($comparecenciasDto->getHoraComparecencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($comparecenciasDto->getNombre() != "") {
            $sql.="Nombre='" . $comparecenciasDto->getNombre() . "'";
            if (($comparecenciasDto->getActivo() != "") || ($comparecenciasDto->getLugarComparecencia() != "") || ($comparecenciasDto->getHoraComparecencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($comparecenciasDto->getActivo() != "") {
            $sql.="activo='" . $comparecenciasDto->getActivo() . "'";
            if (($comparecenciasDto->getLugarComparecencia() != "") || ($comparecenciasDto->getHoraComparecencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($comparecenciasDto->getLugarComparecencia() != "") {
            $sql.="lugarComparecencia='" . $comparecenciasDto->getLugarComparecencia() . "'";
            if (($comparecenciasDto->getHoraComparecencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($comparecenciasDto->getHoraComparecencia() != "") {
            $sql.="horaComparecencia='" . $comparecenciasDto->getHoraComparecencia() . "'";
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
                    $tmp[$contador] = new ComparecenciasDTO();
                    $tmp[$contador]->setIdComparecencia($row["idComparecencia"]);
                    $tmp[$contador]->setIdActuacion($row["idActuacion"]);
                    $tmp[$contador]->setNumEmpleadoFePublica($row["numEmpleadoFePublica"]);
                    $tmp[$contador]->setNombre($row["Nombre"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setLugarComparecencia($row["lugarComparecencia"]);
                    $tmp[$contador]->setHoraComparecencia($row["horaComparecencia"]);
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