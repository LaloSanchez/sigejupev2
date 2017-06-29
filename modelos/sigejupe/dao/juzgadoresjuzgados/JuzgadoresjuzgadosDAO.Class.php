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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/juzgadoresjuzgados/JuzgadoresjuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class JuzgadoresjuzgadosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertJuzgadoresjuzgados($juzgadoresjuzgadosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbljuzgadoresjuzgados(";
        if ($juzgadoresjuzgadosDto->getidJuzgadorJuzgado() != "") {
            $sql.="idJuzgadorJuzgado";
            if (($juzgadoresjuzgadosDto->getIdJuzgador() != "") || ($juzgadoresjuzgadosDto->getCveJuzgado() != "") || ($juzgadoresjuzgadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresjuzgadosDto->getidJuzgador() != "") {
            $sql.="idJuzgador";
            if (($juzgadoresjuzgadosDto->getCveJuzgado() != "") || ($juzgadoresjuzgadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresjuzgadosDto->getcveJuzgado() != "") {
            $sql.="cveJuzgado";
            if (($juzgadoresjuzgadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresjuzgadosDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($juzgadoresjuzgadosDto->getidJuzgadorJuzgado() != "") {
            $sql.="'" . $juzgadoresjuzgadosDto->getidJuzgadorJuzgado() . "'";
            if (($juzgadoresjuzgadosDto->getIdJuzgador() != "") || ($juzgadoresjuzgadosDto->getCveJuzgado() != "") || ($juzgadoresjuzgadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresjuzgadosDto->getidJuzgador() != "") {
            $sql.="'" . $juzgadoresjuzgadosDto->getidJuzgador() . "'";
            if (($juzgadoresjuzgadosDto->getCveJuzgado() != "") || ($juzgadoresjuzgadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresjuzgadosDto->getcveJuzgado() != "") {
            $sql.="'" . $juzgadoresjuzgadosDto->getcveJuzgado() . "'";
            if (($juzgadoresjuzgadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresjuzgadosDto->getactivo() != "") {
            $sql.="'" . $juzgadoresjuzgadosDto->getactivo() . "'";
        }
        if ($juzgadoresjuzgadosDto->getfechaRegistro() != "") {
            
        }
        if ($juzgadoresjuzgadosDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new JuzgadoresjuzgadosDTO();
            $tmp->setidJuzgadorJuzgado($this->_proveedor->lastID());
            $tmp = $this->selectJuzgadoresjuzgados($tmp, "", $this->_proveedor);
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

    public function updateJuzgadoresjuzgados($juzgadoresjuzgadosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbljuzgadoresjuzgados SET ";
        if ($juzgadoresjuzgadosDto->getidJuzgadorJuzgado() != "") {
            $sql.="idJuzgadorJuzgado='" . $juzgadoresjuzgadosDto->getidJuzgadorJuzgado() . "'";
            if (($juzgadoresjuzgadosDto->getIdJuzgador() != "") || ($juzgadoresjuzgadosDto->getCveJuzgado() != "") || ($juzgadoresjuzgadosDto->getActivo() != "") || ($juzgadoresjuzgadosDto->getFechaRegistro() != "") || ($juzgadoresjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresjuzgadosDto->getidJuzgador() != "") {
            $sql.="idJuzgador='" . $juzgadoresjuzgadosDto->getidJuzgador() . "'";
            if (($juzgadoresjuzgadosDto->getCveJuzgado() != "") || ($juzgadoresjuzgadosDto->getActivo() != "") || ($juzgadoresjuzgadosDto->getFechaRegistro() != "") || ($juzgadoresjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresjuzgadosDto->getcveJuzgado() != "") {
            $sql.="cveJuzgado='" . $juzgadoresjuzgadosDto->getcveJuzgado() . "'";
            if (($juzgadoresjuzgadosDto->getActivo() != "") || ($juzgadoresjuzgadosDto->getFechaRegistro() != "") || ($juzgadoresjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresjuzgadosDto->getactivo() != "") {
            $sql.="activo='" . $juzgadoresjuzgadosDto->getactivo() . "'";
            if (($juzgadoresjuzgadosDto->getFechaRegistro() != "") || ($juzgadoresjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresjuzgadosDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $juzgadoresjuzgadosDto->getfechaRegistro() . "'";
            if (($juzgadoresjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadoresjuzgadosDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $juzgadoresjuzgadosDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE idJuzgadorJuzgado='" . $juzgadoresjuzgadosDto->getidJuzgadorJuzgado() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new JuzgadoresjuzgadosDTO();
            $tmp->setidJuzgadorJuzgado($juzgadoresjuzgadosDto->getidJuzgadorJuzgado());
            $tmp = $this->selectJuzgadoresjuzgados($tmp, "", $this->_proveedor);
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

    public function deleteJuzgadoresjuzgados($juzgadoresjuzgadosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbljuzgadoresjuzgados  WHERE idJuzgadorJuzgado='" . $juzgadoresjuzgadosDto->getidJuzgadorJuzgado() . "'";
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

    public function selectJuzgadoresjuzgados($juzgadoresjuzgadosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idJuzgadorJuzgado,idJuzgador,cveJuzgado,activo,fechaRegistro,fechaActualizacion FROM tbljuzgadoresjuzgados ";
        if (($juzgadoresjuzgadosDto->getidJuzgadorJuzgado() != "") || ($juzgadoresjuzgadosDto->getidJuzgador() != "") || ($juzgadoresjuzgadosDto->getcveJuzgado() != "") || ($juzgadoresjuzgadosDto->getactivo() != "") || ($juzgadoresjuzgadosDto->getfechaRegistro() != "") || ($juzgadoresjuzgadosDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($juzgadoresjuzgadosDto->getidJuzgadorJuzgado() != "") {
            $sql.="idJuzgadorJuzgado='" . $juzgadoresjuzgadosDto->getIdJuzgadorJuzgado() . "'";
            if (($juzgadoresjuzgadosDto->getIdJuzgador() != "") || ($juzgadoresjuzgadosDto->getCveJuzgado() != "") || ($juzgadoresjuzgadosDto->getActivo() != "") || ($juzgadoresjuzgadosDto->getFechaRegistro() != "") || ($juzgadoresjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadoresjuzgadosDto->getidJuzgador() != "") {
            $sql.="idJuzgador in(" . $juzgadoresjuzgadosDto->getIdJuzgador() . ")";
            if (($juzgadoresjuzgadosDto->getCveJuzgado() != "") || ($juzgadoresjuzgadosDto->getActivo() != "") || ($juzgadoresjuzgadosDto->getFechaRegistro() != "") || ($juzgadoresjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadoresjuzgadosDto->getcveJuzgado() != "") {
            $sql.="cveJuzgado='" . $juzgadoresjuzgadosDto->getCveJuzgado() . "'";
            if (($juzgadoresjuzgadosDto->getActivo() != "") || ($juzgadoresjuzgadosDto->getFechaRegistro() != "") || ($juzgadoresjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadoresjuzgadosDto->getactivo() != "") {
            $sql.="activo='" . $juzgadoresjuzgadosDto->getActivo() . "'";
            if (($juzgadoresjuzgadosDto->getFechaRegistro() != "") || ($juzgadoresjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadoresjuzgadosDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $juzgadoresjuzgadosDto->getFechaRegistro() . "'";
            if (($juzgadoresjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadoresjuzgadosDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $juzgadoresjuzgadosDto->getFechaActualizacion() . "'";
        }
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }

//        echo $sql;

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new JuzgadoresjuzgadosDTO();
                    $tmp[$contador]->setIdJuzgadorJuzgado($row["idJuzgadorJuzgado"]);
                    $tmp[$contador]->setIdJuzgador($row["idJuzgador"]);
                    $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
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

    public function selectJuzgadoresjuzgadosGeneral($juzgadoresjuzgadosDto, $proveedor = null, $orden = "", $param = null, $fields = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        $sql = "SELECT ";
        if ($fields === null) {
            $sql .= " j.idJuzgadorJuzgado,j.idJuzgador,j.cveJuzgado,j.activo,j.fechaRegistro,j.fechaActualizacion, ";
            $sql .= " a.idJuzgador,a.cveUsuario,a.numEmpleado,a.titulo,a.paterno,a.materno,a.nombre,a.cveTipoJuzgador,a.CveEspecialidad,a.sorteo,a.programable,a.activo ";
            $sql .= "FROM tbljuzgadoresjuzgados as j, tbljuzgadores as a";
        } else {
            $sql .= $fields;
            $sql .= "FROM tbljuzgadoresjuzgados as j, tbljuzgadores as a";
        }

        $sql.=" WHERE j.cveJuzgado='" . $juzgadoresjuzgadosDto->getCveJuzgado() . "'";
        $sql.=" AND j.idJuzgador = a.idJuzgador";
        $sql.=" AND j.activo = 'S'";

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
        }

        if ($param != "" || $param != null) {
            if ($param["paginacion"] == "true") {
                $sql.=" LIMIT " . $inicial . "," . $param["cantxPag"];
            }
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                $tmp[$contador] = array();
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($fields === null) {
                        $tmp[$contador]["idJuzgador"] = $row["idJuzgador"];
                        $tmp[$contador]["cveUsuario"] = $row["cveUsuario"];
                        $tmp[$contador]["numEmpleado"] = $row["numEmpleado"];
                        $tmp[$contador]["titulo"] = $row["titulo"];
                        $tmp[$contador]["paterno"] = $row["paterno"];
                        $tmp[$contador]["materno"] = $row["materno"];
                        $tmp[$contador]["nombre"] = $row["nombre"];
                        $tmp[$contador]["cveTipoJuzgador"] = $row["cveTipoJuzgador"];
                        $tmp[$contador]["CveEspecialidad"] = $row["CveEspecialidad"];
                        $tmp[$contador]["sorteo"] = $row["sorteo"];
                        $tmp[$contador]["programable"] = $row["programable"];
                        $tmp[$contador]["activo"] = $row["activo"];
                        $contador++;
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

    public function selectJuzgadoresGeneral($juzgadoresjuzgadosDto, $proveedor = null, $orden = "", $param = null, $fields = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        $sql = "SELECT ";
        if ($fields === null) {
            $sql .= " a.idJuzgador,a.cveUsuario,a.numEmpleado,a.titulo,a.paterno,a.materno,a.nombre,a.cveTipoJuzgador,a.CveEspecialidad,a.sorteo,a.programable,a.activo ";
            $sql .= "FROM tbljuzgadores as a";
        } else {
            $sql .= $fields;
            $sql .= "FROM tbljuzgadores as a";
        }

        $sql.=" WHERE a.idJuzgador='" . $juzgadoresjuzgadosDto->getIdJuzgador() . "'";

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
        }

        if ($param != "" || $param != null) {
            if ($param["paginacion"] == "true") {
                $sql.=" LIMIT " . $inicial . "," . $param["cantxPag"];
            }
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                $tmp[$contador] = array();
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($fields === null) {
                        $tmp[$contador]["idJuzgador"] = $row["idJuzgador"];
                        $tmp[$contador]["cveUsuario"] = $row["cveUsuario"];
                        $tmp[$contador]["numEmpleado"] = $row["numEmpleado"];
                        $tmp[$contador]["titulo"] = $row["titulo"];
                        $tmp[$contador]["paterno"] = $row["paterno"];
                        $tmp[$contador]["materno"] = $row["materno"];
                        $tmp[$contador]["nombre"] = $row["nombre"];
                        $tmp[$contador]["cveTipoJuzgador"] = $row["cveTipoJuzgador"];
                        $tmp[$contador]["CveEspecialidad"] = $row["CveEspecialidad"];
                        $tmp[$contador]["sorteo"] = $row["sorteo"];
                        $tmp[$contador]["programable"] = $row["programable"];
                        $tmp[$contador]["activo"] = $row["activo"];
                        $contador++;
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

    public function selectJuzgadoresInfo($juzgadoresjuzgadosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        $sql = " SELECT j.idJuzgadorJuzgado,j.idJuzgador,j.cveJuzgado, j.activo, i.idJuzgador, i.activo, i.nombre, i.paterno, i.materno FROM tbljuzgadoresjuzgados as j, tbljuzgadores as i ";
        $sql.= " WHERE j.cveJuzgado ='" . $juzgadoresjuzgadosDto->getCveJuzgado() . "'";
        $sql.= " and j.activo ='" . $juzgadoresjuzgadosDto->getActivo() . "'";
        $sql.= " and j.idJuzgador = i.idJuzgador";
        $sql.= " order by i.nombre, i.paterno, i.materno asc";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                $tmp = array();
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador]["idJuzgadorJuzgado"] = ($row["idJuzgadorJuzgado"]);
                    $tmp[$contador]["idJuzgador"] = ($row["idJuzgador"]);
                    $tmp[$contador]["cveJuzgado"] = ($row["cveJuzgado"]);
                    $tmp[$contador]["activo"] = ($row["activo"]);
                    $tmp[$contador]["nombre"] = ($row["nombre"]);
                    $tmp[$contador]["paterno"] = ($row["paterno"]);
                    $tmp[$contador]["materno"] = ($row["materno"]);
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