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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/salas/SalasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class SalasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertSalas($salasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblsalas(";
        if ($salasDto->getcveSala() != "") {
            $sql .= "cveSala";
            if (($salasDto->getDesSala() != "") || ($salasDto->getActivo() != "") || ($salasDto->getSorteo() != "") || ($salasDto->getCveEdificio() != "") || ($salasDto->getComodin() != "")) {
                $sql .= ",";
            }
        }
        if ($salasDto->getdesSala() != "") {
            $sql .= "desSala";
            if (($salasDto->getActivo() != "") || ($salasDto->getSorteo() != "") || ($salasDto->getCveEdificio() != "") || ($salasDto->getComodin() != "")) {
                $sql .= ",";
            }
        }
        if ($salasDto->getactivo() != "") {
            $sql .= "activo";
            if (($salasDto->getSorteo() != "") || ($salasDto->getCveEdificio() != "") || ($salasDto->getComodin() != "")) {
                $sql .= ",";
            }
        }
        if ($salasDto->getsorteo() != "") {
            $sql .= "sorteo";
            if (($salasDto->getCveEdificio() != "") || ($salasDto->getComodin() != "")) {
                $sql .= ",";
            }
        }
        if ($salasDto->getcveEdificio() != "") {
            $sql .= "cveEdificio";
            if (($salasDto->getComodin() != "")) {
                $sql .= ",";
            }
        }
        if ($salasDto->getcomodin() != "") {
            $sql .= "comodin";
        }
        $sql .= ",fechaRegistro";
        $sql .= ",fechaActualizacion";
        $sql .= ") VALUES(";
        if ($salasDto->getcveSala() != "") {
            $sql .= "'" . $salasDto->getcveSala() . "'";
            if (($salasDto->getDesSala() != "") || ($salasDto->getActivo() != "") || ($salasDto->getSorteo() != "") || ($salasDto->getCveEdificio() != "") || ($salasDto->getComodin() != "")) {
                $sql .= ",";
            }
        }
        if ($salasDto->getdesSala() != "") {
            $sql .= "'" . $salasDto->getdesSala() . "'";
            if (($salasDto->getActivo() != "") || ($salasDto->getSorteo() != "") || ($salasDto->getCveEdificio() != "") || ($salasDto->getComodin() != "")) {
                $sql .= ",";
            }
        }
        if ($salasDto->getactivo() != "") {
            $sql .= "'" . $salasDto->getactivo() . "'";
            if (($salasDto->getSorteo() != "") || ($salasDto->getCveEdificio() != "") || ($salasDto->getComodin() != "")) {
                $sql .= ",";
            }
        }
        if ($salasDto->getfechaRegistro() != "") {
            if (($salasDto->getSorteo() != "") || ($salasDto->getCveEdificio() != "") || ($salasDto->getComodin() != "")) {
                $sql .= ",";
            }
        }
        if ($salasDto->getfechaActualizacion() != "") {
            if (($salasDto->getSorteo() != "") || ($salasDto->getCveEdificio() != "") || ($salasDto->getComodin() != "")) {
                $sql .= ",";
            }
        }
        if ($salasDto->getsorteo() != "") {
            $sql .= "'" . $salasDto->getsorteo() . "'";
            if (($salasDto->getCveEdificio() != "") || ($salasDto->getComodin() != "")) {
                $sql .= ",";
            }
        }
        if ($salasDto->getcveEdificio() != "") {
            $sql .= "'" . $salasDto->getcveEdificio() . "'";
            if (($salasDto->getComodin() != "")) {
                $sql .= ",";
            }
        }
        if ($salasDto->getcomodin() != "") {
            $sql .= "'" . $salasDto->getcomodin() . "'";
        }
        $sql .= ",now()";
        $sql .= ",now()";
        $sql .= ")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new SalasDTO();
            $tmp->setcveSala($this->_proveedor->lastID());
            $tmp = $this->selectSalas($tmp, "", $this->_proveedor);
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

    public function updateSalas($salasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblsalas SET ";
        if ($salasDto->getcveSala() != "") {
            $sql .= "cveSala='" . $salasDto->getcveSala() . "'";
            if (($salasDto->getDesSala() != "") || ($salasDto->getActivo() != "") || ($salasDto->getFechaRegistro() != "") || ($salasDto->getFechaActualizacion() != "") || ($salasDto->getSorteo() != "") || ($salasDto->getCveEdificio() != "") || ($salasDto->getComodin() != "")) {
                $sql .= ",";
            }
        }
        if ($salasDto->getdesSala() != "") {
            $sql .= "desSala='" . $salasDto->getdesSala() . "'";
            if (($salasDto->getActivo() != "") || ($salasDto->getFechaRegistro() != "") || ($salasDto->getFechaActualizacion() != "") || ($salasDto->getSorteo() != "") || ($salasDto->getCveEdificio() != "") || ($salasDto->getComodin() != "")) {
                $sql .= ",";
            }
        }
        if ($salasDto->getactivo() != "") {
            $sql .= "activo='" . $salasDto->getactivo() . "'";
            if (($salasDto->getFechaRegistro() != "") || ($salasDto->getFechaActualizacion() != "") || ($salasDto->getSorteo() != "") || ($salasDto->getCveEdificio() != "") || ($salasDto->getComodin() != "")) {
                $sql .= ",";
            }
        }
        if ($salasDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $salasDto->getfechaRegistro() . "'";
            if (($salasDto->getFechaActualizacion() != "") || ($salasDto->getSorteo() != "") || ($salasDto->getCveEdificio() != "") || ($salasDto->getComodin() != "")) {
                $sql .= ",";
            }
        }
        if ($salasDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $salasDto->getfechaActualizacion() . "'";
            if (($salasDto->getSorteo() != "") || ($salasDto->getCveEdificio() != "") || ($salasDto->getComodin() != "")) {
                $sql .= ",";
            }
        }
        if ($salasDto->getsorteo() != "") {
            $sql .= "sorteo='" . $salasDto->getsorteo() . "'";
            if (($salasDto->getCveEdificio() != "") || ($salasDto->getComodin() != "")) {
                $sql .= ",";
            }
        }
        if ($salasDto->getcveEdificio() != "") {
            $sql .= "cveEdificio='" . $salasDto->getcveEdificio() . "'";
            if (($salasDto->getComodin() != "")) {
                $sql .= ",";
            }
        }
        if ($salasDto->getcomodin() != "") {
            $sql .= "comodin='" . $salasDto->getcomodin() . "'";
        }
        $sql .= " WHERE cveSala='" . $salasDto->getcveSala() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new SalasDTO();
            $tmp->setcveSala($salasDto->getcveSala());
            $tmp = $this->selectSalas($tmp, "", $this->_proveedor);
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

    public function deleteSalas($salasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblsalas  WHERE cveSala='" . $salasDto->getcveSala() . "'";
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

    public function selectSalas($salasDto, $orden = "", $proveedor = null) {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveSala,desSala,activo,fechaRegistro,fechaActualizacion,sorteo,cveEdificio,comodin FROM tblsalas ";
        if (($salasDto->getcveSala() != "") || ($salasDto->getdesSala() != "") || ($salasDto->getactivo() != "") || ($salasDto->getfechaRegistro() != "") || ($salasDto->getfechaActualizacion() != "") || ($salasDto->getsorteo() != "") || ($salasDto->getcveEdificio() != "") || ($salasDto->getcomodin() != "")) {
            $sql .= " WHERE ";
        }
        if ($salasDto->getcveSala() != "") {
            $sql .= "cveSala='" . $salasDto->getCveSala() . "'";
            if (($salasDto->getDesSala() != "") || ($salasDto->getActivo() != "") || ($salasDto->getFechaRegistro() != "") || ($salasDto->getFechaActualizacion() != "") || ($salasDto->getSorteo() != "") || ($salasDto->getCveEdificio() != "") || ($salasDto->getComodin() != "")) {
                $sql .= " AND ";
            }
        }
        if ($salasDto->getdesSala() != "") {
            $sql .= "desSala like'%" . $salasDto->getDesSala() . "%'";
            if (($salasDto->getActivo() != "") || ($salasDto->getFechaRegistro() != "") || ($salasDto->getFechaActualizacion() != "") || ($salasDto->getSorteo() != "") || ($salasDto->getCveEdificio() != "") || ($salasDto->getComodin() != "")) {
                $sql .= " AND ";
            }
        }
        if ($salasDto->getactivo() != "") {
            $sql .= "activo='" . $salasDto->getActivo() . "'";
            if (($salasDto->getFechaRegistro() != "") || ($salasDto->getFechaActualizacion() != "") || ($salasDto->getSorteo() != "") || ($salasDto->getCveEdificio() != "") || ($salasDto->getComodin() != "")) {
                $sql .= " AND ";
            }
        }
        if ($salasDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $salasDto->getFechaRegistro() . "'";
            if (($salasDto->getFechaActualizacion() != "") || ($salasDto->getSorteo() != "") || ($salasDto->getCveEdificio() != "") || ($salasDto->getComodin() != "")) {
                $sql .= " AND ";
            }
        }
        if ($salasDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $salasDto->getFechaActualizacion() . "'";
            if (($salasDto->getSorteo() != "") || ($salasDto->getCveEdificio() != "") || ($salasDto->getComodin() != "")) {
                $sql .= " AND ";
            }
        }
        if ($salasDto->getsorteo() != "") {
            $sql .= "sorteo='" . $salasDto->getSorteo() . "'";
            if (($salasDto->getCveEdificio() != "") || ($salasDto->getComodin() != "")) {
                $sql .= " AND ";
            }
        }
        if ($salasDto->getcveEdificio() != "") {
            $sql .= "cveEdificio='" . $salasDto->getCveEdificio() . "'";
            if (($salasDto->getComodin() != "")) {
                $sql .= " AND ";
            }
        }
        if ($salasDto->getcomodin() != "") {
            $sql .= "comodin='" . $salasDto->getComodin() . "'";
        }
        if ($orden != "") {
            $sql .= $orden;
        } else {
            $sql .= "";
        }

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new SalasDTO();
                    $tmp[$contador]->setCveSala($row["cveSala"]);
                    $tmp[$contador]->setDesSala(utf8_encode($row["desSala"]));
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setSorteo($row["sorteo"]);
                    $tmp[$contador]->setCveEdificio($row["cveEdificio"]);
                    $tmp[$contador]->setComodin($row["comodin"]);
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

    public function selectSalasGeneral($salasDto, $proveedor = null, $orden = "", $param = null, $fields = null) {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }



        $sql = "SELECT ";
        if ($fields === null) {
            $sql .= " cveSala,desSala,activo,fechaRegistro,fechaActualizacion,sorteo,cveEdificio,comodin ";
        } else {
            $sql .= $fields;
        }
        $sql .= "FROM tblsalas";

        if (($salasDto->getcveSala() != "") || ($salasDto->getdesSala() != "") || ($salasDto->getactivo() != "") || ($salasDto->getfechaRegistro() != "") || ($salasDto->getfechaActualizacion() != "") || ($salasDto->getsorteo() != "") || ($salasDto->getcveEdificio() != "") || ($salasDto->getcomodin() != "")) {
            $sql .= " WHERE ";
        }
        if ($salasDto->getcveSala() != "") {
            $sql .= "cveSala='" . $salasDto->getCveSala() . "'";
            if (($salasDto->getDesSala() != "") || ($salasDto->getActivo() != "") || ($salasDto->getFechaRegistro() != "") || ($salasDto->getFechaActualizacion() != "") || ($salasDto->getSorteo() != "") || ($salasDto->getCveEdificio() != "") || ($salasDto->getComodin() != "")) {
                $sql .= " AND ";
            }
        }
        if ($salasDto->getdesSala() != "") {
            $sql .= "desSala like'%" . $salasDto->getDesSala() . "%'";
            if (($salasDto->getActivo() != "") || ($salasDto->getFechaRegistro() != "") || ($salasDto->getFechaActualizacion() != "") || ($salasDto->getSorteo() != "") || ($salasDto->getCveEdificio() != "") || ($salasDto->getComodin() != "")) {
                $sql .= " AND ";
            }
        }
        if ($salasDto->getactivo() != "") {
            $sql .= "activo='" . $salasDto->getActivo() . "'";
            if (($salasDto->getFechaRegistro() != "") || ($salasDto->getFechaActualizacion() != "") || ($salasDto->getSorteo() != "") || ($salasDto->getCveEdificio() != "") || ($salasDto->getComodin() != "")) {
                $sql .= " AND ";
            }
        }
        if ($salasDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $salasDto->getFechaRegistro() . "'";
            if (($salasDto->getFechaActualizacion() != "") || ($salasDto->getSorteo() != "") || ($salasDto->getCveEdificio() != "") || ($salasDto->getComodin() != "")) {
                $sql .= " AND ";
            }
        }
        if ($salasDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $salasDto->getFechaActualizacion() . "'";
            if (($salasDto->getSorteo() != "") || ($salasDto->getCveEdificio() != "") || ($salasDto->getComodin() != "")) {
                $sql .= " AND ";
            }
        }
        if ($salasDto->getsorteo() != "") {
            $sql .= "sorteo='" . $salasDto->getSorteo() . "'";
            if (($salasDto->getCveEdificio() != "") || ($salasDto->getComodin() != "")) {
                $sql .= " AND ";
            }
        }
        if ($salasDto->getcveEdificio() != "") {
            $sql .= "cveEdificio='" . $salasDto->getCveEdificio() . "'";
            if (($salasDto->getComodin() != "")) {
                $sql .= " AND ";
            }
        }
        if ($salasDto->getcomodin() != "") {
            $sql .= "comodin='" . $salasDto->getComodin() . "'";
        }
        if ($param != "") {
            if ($param["paginacion"] == "true") {
                if ($param["pag"] > 0) {
                    $inicial = ($param["pag"] - 1) * $param["cantxPag"];
                } else {
                    $inicial = 0;
                }
            }
        }
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
            $sql.= " order by cveSala DESC";
        }

        if ($param != "" || $param != null) {
            if ($param["paginacion"] == "true") {
                $sql.=" LIMIT " . $inicial . "," . $param["cantxPag"];
            }
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($fields === null) {
                        $tmp[$contador] = new SalasDTO();
                        $tmp[$contador]->setCveSala($row["cveSala"]);
                        $tmp[$contador]->setDesSala(utf8_encode($row["desSala"]));
                        $tmp[$contador]->setActivo($row["activo"]);
                        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                        $tmp[$contador]->setSorteo($row["sorteo"]);
                        $tmp[$contador]->setCveEdificio($row["cveEdificio"]);
                        $tmp[$contador]->setComodin($row["comodin"]);
                        $contador ++;
                    } else {
                        $tmp[$contador] = $row["totalCount"];
                        $contador++;
                    }
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