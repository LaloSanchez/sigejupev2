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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/juzgadorescateos/JuzgadorescateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class JuzgadorescateosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertJuzgadorescateos($juzgadorescateosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbljuzgadorescateos(";
        if ($juzgadorescateosDto->getidJuzgadorCateo() != "") {
            $sql.="idJuzgadorCateo";
            if (($juzgadorescateosDto->getIdSolicitudCateo() != "") || ($juzgadorescateosDto->getIdJuzgador() != "") || ($juzgadorescateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadorescateosDto->getidSolicitudCateo() != "") {
            $sql.="idSolicitudCateo";
            if (($juzgadorescateosDto->getIdJuzgador() != "") || ($juzgadorescateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadorescateosDto->getidJuzgador() != "") {
            $sql.="idJuzgador";
            if (($juzgadorescateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadorescateosDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($juzgadorescateosDto->getidJuzgadorCateo() != "") {
            $sql.="'" . $juzgadorescateosDto->getidJuzgadorCateo() . "'";
            if (($juzgadorescateosDto->getIdSolicitudCateo() != "") || ($juzgadorescateosDto->getIdJuzgador() != "") || ($juzgadorescateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadorescateosDto->getidSolicitudCateo() != "") {
            $sql.="'" . $juzgadorescateosDto->getidSolicitudCateo() . "'";
            if (($juzgadorescateosDto->getIdJuzgador() != "") || ($juzgadorescateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadorescateosDto->getidJuzgador() != "") {
            $sql.="'" . $juzgadorescateosDto->getidJuzgador() . "'";
            if (($juzgadorescateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadorescateosDto->getactivo() != "") {
            $sql.="'" . $juzgadorescateosDto->getactivo() . "'";
        }
        if ($juzgadorescateosDto->getfechaRegistro() != "") {
            
        }
        if ($juzgadorescateosDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new JuzgadorescateosDTO();
            $tmp->setidJuzgadorCateo($this->_proveedor->lastID());
            $tmp = $this->selectJuzgadorescateos($tmp, "", "", $this->_proveedor);
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

    public function updateJuzgadorescateos($juzgadorescateosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbljuzgadorescateos SET ";
        if ($juzgadorescateosDto->getidJuzgadorCateo() != "") {
            $sql.="idJuzgadorCateo='" . $juzgadorescateosDto->getidJuzgadorCateo() . "'";
            if (($juzgadorescateosDto->getIdSolicitudCateo() != "") || ($juzgadorescateosDto->getIdJuzgador() != "") || ($juzgadorescateosDto->getActivo() != "") || ($juzgadorescateosDto->getFechaRegistro() != "") || ($juzgadorescateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadorescateosDto->getidSolicitudCateo() != "") {
            $sql.="idSolicitudCateo='" . $juzgadorescateosDto->getidSolicitudCateo() . "'";
            if (($juzgadorescateosDto->getIdJuzgador() != "") || ($juzgadorescateosDto->getActivo() != "") || ($juzgadorescateosDto->getFechaRegistro() != "") || ($juzgadorescateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadorescateosDto->getidJuzgador() != "") {
            $sql.="idJuzgador='" . $juzgadorescateosDto->getidJuzgador() . "'";
            if (($juzgadorescateosDto->getActivo() != "") || ($juzgadorescateosDto->getFechaRegistro() != "") || ($juzgadorescateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadorescateosDto->getactivo() != "") {
            $sql.="activo='" . $juzgadorescateosDto->getactivo() . "'";
            if (($juzgadorescateosDto->getFechaRegistro() != "") || ($juzgadorescateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadorescateosDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $juzgadorescateosDto->getfechaRegistro() . "'";
            if (($juzgadorescateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadorescateosDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $juzgadorescateosDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE idJuzgadorCateo='" . $juzgadorescateosDto->getidJuzgadorCateo() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new JuzgadorescateosDTO();
            $tmp->setidJuzgadorCateo($juzgadorescateosDto->getidJuzgadorCateo());
            $tmp = $this->selectJuzgadorescateos($tmp, "", "", $this->_proveedor);
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

    public function deleteJuzgadorescateos($juzgadorescateosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbljuzgadorescateos  WHERE idJuzgadorCateo='" . $juzgadorescateosDto->getidJuzgadorCateo() . "'";
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

    public function selectJuzgadorescateos($juzgadorescateosDto, $param = "", $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT ";
        if ($param == "" || isset($param["fields"]) == "") {
            $sql .= "idJuzgadorCateo,idSolicitudCateo,idJuzgador,activo,fechaRegistro,fechaActualizacion";
        } else {
            $sql .= $param["fields"];
        }
        $sql .= " FROM tbljuzgadorescateos ";
        if (($juzgadorescateosDto->getidJuzgadorCateo() != "") || ($juzgadorescateosDto->getidSolicitudCateo() != "") || ($juzgadorescateosDto->getidJuzgador() != "") || ($juzgadorescateosDto->getactivo() != "") || ($juzgadorescateosDto->getfechaRegistro() != "") || ($juzgadorescateosDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($juzgadorescateosDto->getidJuzgadorCateo() != "") {
            $sql.="idJuzgadorCateo='" . $juzgadorescateosDto->getIdJuzgadorCateo() . "'";
            if (($juzgadorescateosDto->getIdSolicitudCateo() != "") || ($juzgadorescateosDto->getIdJuzgador() != "") || ($juzgadorescateosDto->getActivo() != "") || ($juzgadorescateosDto->getFechaRegistro() != "") || ($juzgadorescateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadorescateosDto->getidSolicitudCateo() != "") {
            $sql.="idSolicitudCateo='" . $juzgadorescateosDto->getIdSolicitudCateo() . "'";
            if (($juzgadorescateosDto->getIdJuzgador() != "") || ($juzgadorescateosDto->getActivo() != "") || ($juzgadorescateosDto->getFechaRegistro() != "") || ($juzgadorescateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadorescateosDto->getidJuzgador() != "") {
            $sql.="idJuzgador='" . $juzgadorescateosDto->getIdJuzgador() . "'";
            if (($juzgadorescateosDto->getActivo() != "") || ($juzgadorescateosDto->getFechaRegistro() != "") || ($juzgadorescateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadorescateosDto->getactivo() != "") {
            $sql.="activo='" . $juzgadorescateosDto->getActivo() . "'";
            if (($juzgadorescateosDto->getFechaRegistro() != "") || ($juzgadorescateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadorescateosDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $juzgadorescateosDto->getFechaRegistro() . "'";
            if (($juzgadorescateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadorescateosDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $juzgadorescateosDto->getFechaActualizacion() . "'";
        }

        if ($param != "") {
            if ($param['fechaInicial'] != "" && $param['fechaInicial'] != 0 &&
                    $param['fechaEnd'] != "" && $param['fechaEnd'] != 0) {
                $helpSql = strpos($sql, " WHERE");
                if ($helpSql) {
                    $sql .= " AND ";
                } else {
                    $sql .= " WHERE ";
                }
                if ($param['fechaInicial'] == $param['fechaEnd']) {
                    $sql.= " fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql.= " AND fechaRegistro <= '" . $param['fechaInicial'] . " 23:59:59'";
                } else {
                    $sql.= " fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql.= " AND fechaRegistro <= '" . $param['fechaEnd'] . " 23:59:59'";
                }
            }
            $inicial = "";
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
            if (isset($param["fields"]) == "" && $inicial != "") {
                $sql.=" LIMIT " . $inicial . "," . $param["cantxPag"] . " ";
            }
        }
        error_log("sql => " . $sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($param == "" || isset($param["fields"]) == "") {
                        $tmp[$contador] = new JuzgadorescateosDTO();
                        $tmp[$contador]->setIdJuzgadorCateo($row["idJuzgadorCateo"]);
                        $tmp[$contador]->setIdSolicitudCateo($row["idSolicitudCateo"]);
                        $tmp[$contador]->setIdJuzgador($row["idJuzgador"]);
                        $tmp[$contador]->setActivo($row["activo"]);
                        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
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

}

?>