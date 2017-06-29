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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class TiposcarpetasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertTiposcarpetas($tiposcarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbltiposcarpetas(";
        if ($tiposcarpetasDto->getcveTipoCarpeta() != "") {
            $sql .= "cveTipoCarpeta";
            if (($tiposcarpetasDto->getDesTipoCarpeta() != "") || ($tiposcarpetasDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($tiposcarpetasDto->getdesTipoCarpeta() != "") {
            $sql .= "desTipoCarpeta";
            if (($tiposcarpetasDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($tiposcarpetasDto->getactivo() != "") {
            $sql .= "activo";
        }
        $sql .= ",fechaRegistro";
        $sql .= ",fechaActualizacion";
        $sql .= ") VALUES(";
        if ($tiposcarpetasDto->getcveTipoCarpeta() != "") {
            $sql .= "'" . $tiposcarpetasDto->getcveTipoCarpeta() . "'";
            if (($tiposcarpetasDto->getDesTipoCarpeta() != "") || ($tiposcarpetasDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($tiposcarpetasDto->getdesTipoCarpeta() != "") {
            $sql .= "'" . $tiposcarpetasDto->getdesTipoCarpeta() . "'";
            if (($tiposcarpetasDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($tiposcarpetasDto->getactivo() != "") {
            $sql .= "'" . $tiposcarpetasDto->getactivo() . "'";
        }
        if ($tiposcarpetasDto->getfechaRegistro() != "") {
            
        }
        if ($tiposcarpetasDto->getfechaActualizacion() != "") {
            
        }
        $sql .= ",now()";
        $sql .= ",now()";
        $sql .= ")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TiposcarpetasDTO();
            $tmp->setcveTipoCarpeta($this->_proveedor->lastID());
            $tmp = $this->selectTiposcarpetas($tmp, "", $this->_proveedor);
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

    public function updateTiposcarpetas($tiposcarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltiposcarpetas SET ";
        if ($tiposcarpetasDto->getcveTipoCarpeta() != "") {
            $sql .= "cveTipoCarpeta='" . $tiposcarpetasDto->getcveTipoCarpeta() . "'";
            if (($tiposcarpetasDto->getDesTipoCarpeta() != "") || ($tiposcarpetasDto->getActivo() != "") || ($tiposcarpetasDto->getFechaRegistro() != "") || ($tiposcarpetasDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($tiposcarpetasDto->getdesTipoCarpeta() != "") {
            $sql .= "desTipoCarpeta='" . $tiposcarpetasDto->getdesTipoCarpeta() . "'";
            if (($tiposcarpetasDto->getActivo() != "") || ($tiposcarpetasDto->getFechaRegistro() != "") || ($tiposcarpetasDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($tiposcarpetasDto->getactivo() != "") {
            $sql .= "activo='" . $tiposcarpetasDto->getactivo() . "'";
            if (($tiposcarpetasDto->getFechaRegistro() != "") || ($tiposcarpetasDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($tiposcarpetasDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $tiposcarpetasDto->getfechaRegistro() . "'";
            if (($tiposcarpetasDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($tiposcarpetasDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $tiposcarpetasDto->getfechaActualizacion() . "'";
        }
        $sql .= " WHERE cveTipoCarpeta='" . $tiposcarpetasDto->getcveTipoCarpeta() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TiposcarpetasDTO();
            $tmp->setcveTipoCarpeta($tiposcarpetasDto->getcveTipoCarpeta());
            $tmp = $this->selectTiposcarpetas($tmp, "", $this->_proveedor);
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

    public function deleteTiposcarpetas($tiposcarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbltiposcarpetas  WHERE cveTipoCarpeta='" . $tiposcarpetasDto->getcveTipoCarpeta() . "'";
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

    public function selectTiposcarpetas($tiposcarpetasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveTipoCarpeta,desTipoCarpeta,activo,fechaRegistro,fechaActualizacion FROM tbltiposcarpetas ";
        if (($tiposcarpetasDto->getcveTipoCarpeta() != "") || ($tiposcarpetasDto->getdesTipoCarpeta() != "") || ($tiposcarpetasDto->getactivo() != "") || ($tiposcarpetasDto->getfechaRegistro() != "") || ($tiposcarpetasDto->getfechaActualizacion() != "")) {
            $sql .= " WHERE ";
        }
        if ($tiposcarpetasDto->getcveTipoCarpeta() != "") {
            $sql .= "cveTipoCarpeta='" . $tiposcarpetasDto->getCveTipoCarpeta() . "'";
            if (($tiposcarpetasDto->getDesTipoCarpeta() != "") || ($tiposcarpetasDto->getActivo() != "") || ($tiposcarpetasDto->getFechaRegistro() != "") || ($tiposcarpetasDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tiposcarpetasDto->getdesTipoCarpeta() != "") {
            $sql .= "desTipoCarpeta='" . $tiposcarpetasDto->getDesTipoCarpeta() . "'";
            if (($tiposcarpetasDto->getActivo() != "") || ($tiposcarpetasDto->getFechaRegistro() != "") || ($tiposcarpetasDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tiposcarpetasDto->getactivo() != "") {
            $sql .= "activo='" . $tiposcarpetasDto->getActivo() . "'";
            if (($tiposcarpetasDto->getFechaRegistro() != "") || ($tiposcarpetasDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tiposcarpetasDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $tiposcarpetasDto->getFechaRegistro() . "'";
            if (($tiposcarpetasDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($tiposcarpetasDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $tiposcarpetasDto->getFechaActualizacion() . "'";
        }
        if ($orden != "") {
            $sql .= $orden;
        } else {
            $sql .= "";
        }
        $sql .= ' ORDER BY desTipoCarpeta ASC';
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new TiposcarpetasDTO();
                    $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                    $tmp[$contador]->setDesTipoCarpeta($row["desTipoCarpeta"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $contador ++;
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