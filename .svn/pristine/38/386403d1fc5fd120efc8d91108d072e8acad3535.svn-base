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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/bitacoraws/BitacorawsDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class BitacorawsDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertBitacoraws($bitacorawsDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblbitacoraws(";
        if ($bitacorawsDto->getIdBitacoraws() != "") {
            $sql .= "idBitacoraws";
            if (($bitacorawsDto->getCveAccionws() != "") || ($bitacorawsDto->getDescEstatusBitacoraws() != "") || ($bitacorawsDto->getObservacionesOrigen() != "") || ($bitacorawsDto->getObservacionesDestino() != "") || ($bitacorawsDto->getHrefOrigen() != "")) {
                $sql .= ",";
            }
        }
        if ($bitacorawsDto->getCveAccionws() != "") {
            $sql .= "cveAccionws";
            if (($bitacorawsDto->getDescEstatusBitacoraws() != "") || ($bitacorawsDto->getObservacionesOrigen() != "") || ($bitacorawsDto->getObservacionesDestino() != "") || ($bitacorawsDto->getHrefOrigen() != "")) {
                $sql .= ",";
            }
        }
        if ($bitacorawsDto->getDescEstatusBitacoraws() != "") {
            $sql .= "descEstatusBitacoraws";
            if (($bitacorawsDto->getObservacionesOrigen() != "") || ($bitacorawsDto->getObservacionesDestino() != "") || ($bitacorawsDto->getHrefOrigen() != "")) {
                $sql .= ",";
            }
        }
        if ($bitacorawsDto->getObservacionesOrigen() != "") {
            $sql .= "observacionesOrigen";
            if (($bitacorawsDto->getObservacionesDestino() != "") || ($bitacorawsDto->getHrefOrigen() != "")) {
                $sql .= ",";
            }
        }
        if ($bitacorawsDto->getObservacionesDestino() != "") {
            $sql .= "observacionesDestino";
            if (($bitacorawsDto->getHrefOrigen() != "")) {
                $sql .= ",";
            }
        }
        if ($bitacorawsDto->getHrefOrigen() != "") {
            $sql .= "hrefOrigen";
        }
        $sql .= ",fechaRegistro";
        $sql .= ",fechaActualizacion";
        $sql .= ") VALUES(";
        if ($bitacorawsDto->getIdBitacoraws() != "") {
            $sql .= "'" . $bitacorawsDto->getIdBitacoraws() . "'";
            if (($bitacorawsDto->getCveAccionws() != "") || ($bitacorawsDto->getDescEstatusBitacoraws() != "") || ($bitacorawsDto->getObservacionesOrigen() != "") || ($bitacorawsDto->getObservacionesDestino() != "") || ($bitacorawsDto->getHrefOrigen() != "")) {
                $sql .= ",";
            }
        }
        if ($bitacorawsDto->getCveAccionws() != "") {
            $sql .= "'" . $bitacorawsDto->getCveAccionws() . "'";
            if (($bitacorawsDto->getDescEstatusBitacoraws() != "") || ($bitacorawsDto->getObservacionesOrigen() != "") || ($bitacorawsDto->getObservacionesDestino() != "") || ($bitacorawsDto->getHrefOrigen() != "")) {
                $sql .= ",";
            }
        }
        if ($bitacorawsDto->getDescEstatusBitacoraws() != "") {
            $sql .= "'" . $bitacorawsDto->getDescEstatusBitacoraws() . "'";
            if (($bitacorawsDto->getObservacionesOrigen() != "") || ($bitacorawsDto->getObservacionesDestino() != "") || ($bitacorawsDto->getHrefOrigen() != "")) {
                $sql .= ",";
            }
        }
        if ($bitacorawsDto->getObservacionesOrigen() != "") {
            $sql .= "'" . $bitacorawsDto->getObservacionesOrigen() . "'";
            if (($bitacorawsDto->getObservacionesDestino() != "") || ($bitacorawsDto->getHrefOrigen() != "")) {
                $sql .= ",";
            }
        }
        if ($bitacorawsDto->getObservacionesDestino() != "") {
            $sql .= "'" . $bitacorawsDto->getObservacionesDestino() . "'";
            if (($bitacorawsDto->getHrefOrigen() != "")) {
                $sql .= ",";
            }
        }
        if ($bitacorawsDto->getHrefOrigen() != "") {
            $sql .= "'" . $bitacorawsDto->getHrefOrigen() . "'";
        }
        if ($bitacorawsDto->getFechaRegistro() != "") {
            
        }
        if ($bitacorawsDto->getFechaActualizacion() != "") {
            
        }
        $sql .= ",now()";
        $sql .= ",now()";
        $sql .= ")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new BitacorawsDTO();
            $tmp->setidBitacoraws($this->_proveedor->lastID());
            $tmp = $this->selectBitacoraws($tmp, "", "", $this->_proveedor);
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

    public function updateBitacoraws($bitacorawsDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblbitacoraws SET ";
        if ($bitacorawsDto->getIdBitacoraws() != "") {
            $sql .= "idBitacoraws='" . $bitacorawsDto->getIdBitacoraws() . "'";
            if (($bitacorawsDto->getCveAccionws() != "") || ($bitacorawsDto->getDescEstatusBitacoraws() != "") || ($bitacorawsDto->getObservacionesOrigen() != "") || ($bitacorawsDto->getObservacionesDestino() != "") || ($bitacorawsDto->getHrefOrigen() != "")) {
                $sql .= ",";
            }
        }
        if ($bitacorawsDto->getCveAccionws() != "") {
            $sql .= "cveAccionws='" . $bitacorawsDto->getCveAccionws() . "'";
            if (($bitacorawsDto->getDescEstatusBitacoraws() != "") || ($bitacorawsDto->getObservacionesOrigen() != "") || ($bitacorawsDto->getObservacionesDestino() != "") || ($bitacorawsDto->getHrefOrigen() != "")) {
                $sql .= ",";
            }
        }
        if ($bitacorawsDto->getDescEstatusBitacoraws() != "") {
            $sql .= "descEstatusBitacoraws='" . $bitacorawsDto->getDescEstatusBitacoraws() . "'";
            if (($bitacorawsDto->getObservacionesOrigen() != "") || ($bitacorawsDto->getObservacionesDestino() != "") || ($bitacorawsDto->getHrefOrigen() != "")) {
                $sql .= ",";
            }
        }
        if ($bitacorawsDto->getObservacionesOrigen() != "") {
            $sql .= "observacionesOrigen='" . $bitacorawsDto->getObservacionesOrigen() . "'";
            if (($bitacorawsDto->getObservacionesDestino() != "") || ($bitacorawsDto->getHrefOrigen() != "")) {
                $sql .= ",";
            }
        }
        if ($bitacorawsDto->getObservacionesDestino() != "") {
            $sql .= "observacionesDestino='" . $bitacorawsDto->getObservacionesDestino() . "'";
            if (($bitacorawsDto->getHrefOrigen() != "")) {
                $sql .= ",";
            }
        }
        if ($bitacorawsDto->getHrefOrigen() != "") {
            $sql .= "hrefOrigen='" . $bitacorawsDto->getHrefOrigen() . "'";
            if (($bitacorawsDto->getFechaRegistro() != "") || ($bitacorawsDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($bitacorawsDto->getFechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $bitacorawsDto->getFechaRegistro() . "'";
            if (($bitacorawsDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($bitacorawsDto->getFechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $bitacorawsDto->getFechaActualizacion() . "'";
        }
        $sql .= " WHERE idBitacoraws='" . $bitacorawsDto->getIdBitacoraws() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new BitacorawsDTO();
            $tmp->setidBitacoraws($bitacorawsDto->getIdBitacoraws());
            $tmp = $this->selectBitacoraws($tmp, "", "", $this->_proveedor);
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

    public function deleteBitacoraws($bitacorawsDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblbitacoraws  WHERE idBitacoraws='" . $bitacorawsDto->getIdBitacoraws() . "'";
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

    public function selectBitacoraws($bitacorawsDto, $param = "", $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        $sql = "SELECT ";
        if ($param == "" || isset($param["fields"]) == "") {
            $sql .= " idBitacoraws,cveAccionws,descEstatusBitacoraws,observacionesOrigen,observacionesDestino,hrefOrigen,fechaRegistro,fechaActualizacion ";
        } else {
            $sql .= ' COUNT(*) as totalCount ';
        }
        $sql .= ' FROM tblbitacoraws ';
        if (($bitacorawsDto->getIdBitacoraws() != "") || ($bitacorawsDto->getCveAccionws() != "") || ($bitacorawsDto->getDescEstatusBitacoraws() != "") || ($bitacorawsDto->getObservacionesOrigen() != "") || ($bitacorawsDto->getObservacionesDestino() != "") || ($bitacorawsDto->getHrefOrigen() != "")) {
            $sql .= " WHERE ";
        }
        if ($bitacorawsDto->getIdBitacoraws() != "") {
            $sql .= "idBitacoraws='" . $bitacorawsDto->getIdBitacoraws() . "'";
            if (($bitacorawsDto->getCveAccionws() != "") || ($bitacorawsDto->getDescEstatusBitacoraws() != "") || ($bitacorawsDto->getObservacionesOrigen() != "") || ($bitacorawsDto->getObservacionesDestino() != "") || ($bitacorawsDto->getHrefOrigen() != "")) {
                $sql .= " AND ";
            }
        }
        if ($bitacorawsDto->getCveAccionws() != "") {
            $sql .= "cveAccionws='" . $bitacorawsDto->getCveAccionws() . "'";
            if (($bitacorawsDto->getDescEstatusBitacoraws() != "") || ($bitacorawsDto->getObservacionesOrigen() != "") || ($bitacorawsDto->getObservacionesDestino() != "") || ($bitacorawsDto->getHrefOrigen() != "")) {
                $sql .= " AND ";
            }
        }
        if ($bitacorawsDto->getDescEstatusBitacoraws() != "") {
            $sql .= "descEstatusBitacoraws='" . $bitacorawsDto->getDescEstatusBitacoraws() . "'";
            if (($bitacorawsDto->getObservacionesOrigen() != "") || ($bitacorawsDto->getObservacionesDestino() != "") || ($bitacorawsDto->getHrefOrigen() != "")) {
                $sql .= " AND ";
            }
        }
        if ($bitacorawsDto->getObservacionesOrigen() != "") {
            $sql .= "observacionesOrigen='" . $bitacorawsDto->getObservacionesOrigen() . "'";
            if (($bitacorawsDto->getObservacionesDestino() != "") || ($bitacorawsDto->getHrefOrigen() != "")) {
                $sql .= " AND ";
            }
        }
        if ($bitacorawsDto->getObservacionesDestino() != "") {
            $sql .= "observacionesDestino='" . $bitacorawsDto->getObservacionesDestino() . "'";
            if (($bitacorawsDto->getHrefOrigen() != "")) {
                $sql .= " AND ";
            }
        }
        if ($bitacorawsDto->getHrefOrigen() != "") {
            $sql .= "hrefOrigen='" . $bitacorawsDto->getHrefOrigen() . "'";
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
                    $sql .= " fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql .= " AND fechaRegistro <= '" . $param['fechaInicial'] . " 23:59:59'";
                } else {
                    $sql .= " fechaRegistro >= '" . $param['fechaInicial'] . " 00:00:00'";
                    $sql .= " AND fechaRegistro <= '" . $param['fechaEnd'] . " 23:59:59'";
                }
            }
            if ($param["paginacion"] == "true") {
                if ($param["pag"] > 0) {
                    $inicial = ($param["pag"] - 1) * $param["cantxPag"];
                } else {
                    $inicial = 0;
                }
            }
        }

        if ($orden != "") {
            $sql .= $orden;
        } else {
            $sql .= "";
        }

        if ($param != "" || $param != null) {
            if (isset($param["fields"]) == "") {
                $sql .= " LIMIT " . $inicial . "," . $param["cantxPag"] . " ";
            }
        }
        
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($param == "" || isset($param["fields"]) == "") {
                        $tmp[$contador] = new BitacorawsDTO();
                        $tmp[$contador]->setIdBitacoraws($row["idBitacoraws"]);
                        $tmp[$contador]->setCveAccionws($row["cveAccionws"]);
                        $tmp[$contador]->setDescEstatusBitacoraws($row["descEstatusBitacoraws"]);
                        $tmp[$contador]->setObservacionesOrigen($row["observacionesOrigen"]);
                        $tmp[$contador]->setObservacionesDestino($row["observacionesDestino"]);
                        $tmp[$contador]->setHrefOrigen($row["hrefOrigen"]);
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