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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/configuracionescargas/ConfiguracionescargasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ConfiguracionescargasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertConfiguracionescargas($configuracionescargasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblconfiguracionescargas(";
        if ($configuracionescargasDto->getCveConfiguracionCarga() != "") {
            $sql.="cveConfiguracionCarga";
            if (($configuracionescargasDto->getCveRegion() != "") || ($configuracionescargasDto->getTopeCarga() != "") || ($configuracionescargasDto->getTipoProceso() != "") || ($configuracionescargasDto->getInicia() != "") || ($configuracionescargasDto->getTermina() != "") || ($configuracionescargasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($configuracionescargasDto->getCveRegion() != "") {
            $sql.="cveRegion";
            if (($configuracionescargasDto->getTopeCarga() != "") || ($configuracionescargasDto->getTipoProceso() != "") || ($configuracionescargasDto->getInicia() != "") || ($configuracionescargasDto->getTermina() != "") || ($configuracionescargasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($configuracionescargasDto->getTopeCarga() != "") {
            $sql.="topeCarga";
            if (($configuracionescargasDto->getTipoProceso() != "") || ($configuracionescargasDto->getInicia() != "") || ($configuracionescargasDto->getTermina() != "") || ($configuracionescargasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($configuracionescargasDto->getTipoProceso() != "") {
            $sql.="tipoProceso";
            if (($configuracionescargasDto->getInicia() != "") || ($configuracionescargasDto->getTermina() != "") || ($configuracionescargasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($configuracionescargasDto->getInicia() != "") {
            $sql.="inicia";
            if (($configuracionescargasDto->getTermina() != "") || ($configuracionescargasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($configuracionescargasDto->getTermina() != "") {
            $sql.="termina";
            if (($configuracionescargasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($configuracionescargasDto->getActivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($configuracionescargasDto->getCveConfiguracionCarga() != "") {
            $sql.="'" . $configuracionescargasDto->getCveConfiguracionCarga() . "'";
            if (($configuracionescargasDto->getCveRegion() != "") || ($configuracionescargasDto->getTopeCarga() != "") || ($configuracionescargasDto->getTipoProceso() != "") || ($configuracionescargasDto->getInicia() != "") || ($configuracionescargasDto->getTermina() != "") || ($configuracionescargasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($configuracionescargasDto->getCveRegion() != "") {
            $sql.="'" . $configuracionescargasDto->getCveRegion() . "'";
            if (($configuracionescargasDto->getTopeCarga() != "") || ($configuracionescargasDto->getTipoProceso() != "") || ($configuracionescargasDto->getInicia() != "") || ($configuracionescargasDto->getTermina() != "") || ($configuracionescargasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($configuracionescargasDto->getTopeCarga() != "") {
            $sql.="'" . $configuracionescargasDto->getTopeCarga() . "'";
            if (($configuracionescargasDto->getTipoProceso() != "") || ($configuracionescargasDto->getInicia() != "") || ($configuracionescargasDto->getTermina() != "") || ($configuracionescargasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($configuracionescargasDto->getTipoProceso() != "") {
            $sql.="'" . $configuracionescargasDto->getTipoProceso() . "'";
            if (($configuracionescargasDto->getInicia() != "") || ($configuracionescargasDto->getTermina() != "") || ($configuracionescargasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($configuracionescargasDto->getInicia() != "") {
            $sql.="'" . $configuracionescargasDto->getInicia() . "'";
            if (($configuracionescargasDto->getTermina() != "") || ($configuracionescargasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($configuracionescargasDto->getTermina() != "") {
            $sql.="'" . $configuracionescargasDto->getTermina() . "'";
            if (($configuracionescargasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($configuracionescargasDto->getActivo() != "") {
            $sql.="'" . $configuracionescargasDto->getActivo() . "'";
        }
        if ($configuracionescargasDto->getFechaRegistro() != "") {
            
        }
        if ($configuracionescargasDto->getFechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ConfiguracionescargasDTO();
            $tmp->setcveConfiguracionCarga($this->_proveedor->lastID());
            $tmp = $this->selectConfiguracionescargas($tmp, "", $this->_proveedor);
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

    public function updateConfiguracionescargas($configuracionescargasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblconfiguracionescargas SET ";
        if ($configuracionescargasDto->getCveConfiguracionCarga() != "") {
            $sql.="cveConfiguracionCarga='" . $configuracionescargasDto->getCveConfiguracionCarga() . "'";
            if (($configuracionescargasDto->getCveRegion() != "") || ($configuracionescargasDto->getTopeCarga() != "") || ($configuracionescargasDto->getTipoProceso() != "") || ($configuracionescargasDto->getInicia() != "") || ($configuracionescargasDto->getTermina() != "") || ($configuracionescargasDto->getActivo() != "") || ($configuracionescargasDto->getFechaRegistro() != "") || ($configuracionescargasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($configuracionescargasDto->getCveRegion() != "") {
            $sql.="cveRegion='" . $configuracionescargasDto->getCveRegion() . "'";
            if (($configuracionescargasDto->getTopeCarga() != "") || ($configuracionescargasDto->getTipoProceso() != "") || ($configuracionescargasDto->getInicia() != "") || ($configuracionescargasDto->getTermina() != "") || ($configuracionescargasDto->getActivo() != "") || ($configuracionescargasDto->getFechaRegistro() != "") || ($configuracionescargasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($configuracionescargasDto->getTopeCarga() != "") {
            $sql.="topeCarga='" . $configuracionescargasDto->getTopeCarga() . "'";
            if (($configuracionescargasDto->getTipoProceso() != "") || ($configuracionescargasDto->getInicia() != "") || ($configuracionescargasDto->getTermina() != "") || ($configuracionescargasDto->getActivo() != "") || ($configuracionescargasDto->getFechaRegistro() != "") || ($configuracionescargasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($configuracionescargasDto->getTipoProceso() != "") {
            $sql.="tipoProceso='" . $configuracionescargasDto->getTipoProceso() . "'";
            if (($configuracionescargasDto->getInicia() != "") || ($configuracionescargasDto->getTermina() != "") || ($configuracionescargasDto->getActivo() != "") || ($configuracionescargasDto->getFechaRegistro() != "") || ($configuracionescargasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($configuracionescargasDto->getInicia() != "") {
            $sql.="inicia='" . $configuracionescargasDto->getInicia() . "'";
            if (($configuracionescargasDto->getTermina() != "") || ($configuracionescargasDto->getActivo() != "") || ($configuracionescargasDto->getFechaRegistro() != "") || ($configuracionescargasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($configuracionescargasDto->getTermina() != "") {
            $sql.="termina='" . $configuracionescargasDto->getTermina() . "'";
            if (($configuracionescargasDto->getActivo() != "") || ($configuracionescargasDto->getFechaRegistro() != "") || ($configuracionescargasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($configuracionescargasDto->getActivo() != "") {
            $sql.="activo='" . $configuracionescargasDto->getActivo() . "'";
            if (($configuracionescargasDto->getFechaRegistro() != "") || ($configuracionescargasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($configuracionescargasDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $configuracionescargasDto->getFechaRegistro() . "'";
            if (($configuracionescargasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($configuracionescargasDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $configuracionescargasDto->getFechaActualizacion() . "'";
        }
        $sql.=" WHERE cveConfiguracionCarga='" . $configuracionescargasDto->getCveConfiguracionCarga() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ConfiguracionescargasDTO();
            $tmp->setcveConfiguracionCarga($configuracionescargasDto->getCveConfiguracionCarga());
            $tmp = $this->selectConfiguracionescargas($tmp, "", $this->_proveedor);
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

    public function deleteConfiguracionescargas($configuracionescargasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblconfiguracionescargas  WHERE cveConfiguracionCarga='" . $configuracionescargasDto->getCveConfiguracionCarga() . "'";
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

    public function selectConfiguracionescargas($configuracionescargasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveConfiguracionCarga,cveRegion,topeCarga,tipoProceso,inicia,termina,activo,fechaRegistro,fechaActualizacion FROM tblconfiguracionescargas ";
        if (($configuracionescargasDto->getCveConfiguracionCarga() != "") || ($configuracionescargasDto->getCveRegion() != "") || ($configuracionescargasDto->getTopeCarga() != "") || ($configuracionescargasDto->getTipoProceso() != "") || ($configuracionescargasDto->getActivo() != "") || ($configuracionescargasDto->getFechaRegistro() != "") || ($configuracionescargasDto->getFechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($configuracionescargasDto->getCveConfiguracionCarga() != "") {
            $sql.="cveConfiguracionCarga='" . $configuracionescargasDto->getCveConfiguracionCarga() . "'";
            if (($configuracionescargasDto->getCveRegion() != "") || ($configuracionescargasDto->getTopeCarga() != "") || ($configuracionescargasDto->getTipoProceso() != "") || ($configuracionescargasDto->getActivo() != "") || ($configuracionescargasDto->getFechaRegistro() != "") || ($configuracionescargasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($configuracionescargasDto->getCveRegion() != "") {
            $sql.="cveRegion='" . $configuracionescargasDto->getCveRegion() . "'";
            if (($configuracionescargasDto->getTopeCarga() != "") || ($configuracionescargasDto->getTipoProceso() != "") || ($configuracionescargasDto->getActivo() != "") || ($configuracionescargasDto->getFechaRegistro() != "") || ($configuracionescargasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($configuracionescargasDto->getTopeCarga() != "") {
            $sql.="topeCarga='" . $configuracionescargasDto->getTopeCarga() . "'";
            if (($configuracionescargasDto->getTipoProceso() != "") || ($configuracionescargasDto->getActivo() != "") || ($configuracionescargasDto->getFechaRegistro() != "") || ($configuracionescargasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($configuracionescargasDto->getTipoProceso() != "") {
            $sql.="tipoProceso='" . $configuracionescargasDto->getTipoProceso() . "'";
            if (($configuracionescargasDto->getInicia() != "") || ($configuracionescargasDto->getTermina() != "") || ($configuracionescargasDto->getActivo() != "") || ($configuracionescargasDto->getFechaRegistro() != "") || ($configuracionescargasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
//        if ($configuracionescargasDto->getInicia() != "") {
//            $sql.="inicia='" . $configuracionescargasDto->getInicia() . "'";
//            if (($configuracionescargasDto->getTermina() != "") || ($configuracionescargasDto->getActivo() != "") || ($configuracionescargasDto->getFechaRegistro() != "") || ($configuracionescargasDto->getFechaActualizacion() != "")) {
//                $sql.=" AND ";
//            }
//        }
//        if ($configuracionescargasDto->getTermina() != "") {
//            $sql.="termina='" . $configuracionescargasDto->getTermina() . "'";
//            if (($configuracionescargasDto->getActivo() != "") || ($configuracionescargasDto->getFechaRegistro() != "") || ($configuracionescargasDto->getFechaActualizacion() != "")) {
//                $sql.=" AND ";
//            }
//        }


        if ($configuracionescargasDto->getActivo() != "") {
            $sql.="activo='" . $configuracionescargasDto->getActivo() . "'";
            if (($configuracionescargasDto->getFechaRegistro() != "") || ($configuracionescargasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($configuracionescargasDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $configuracionescargasDto->getFechaRegistro() . "'";
            if (($configuracionescargasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($configuracionescargasDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $configuracionescargasDto->getFechaActualizacion() . "'";
        }

        if (($configuracionescargasDto->getTermina() != "") && ($configuracionescargasDto->getInicia() != "")) {
            $sql.=" AND inicia<='" . $configuracionescargasDto->getInicia() . "' ";
            $sql.=" AND termina>='" . $configuracionescargasDto->getTermina() . "' ";
        }

        if (($configuracionescargasDto->getTermina() == "") && ($configuracionescargasDto->getInicia() != "")) {
            $sql.=" AND inicia<='" . $configuracionescargasDto->getInicia() . "' ";
            $sql.=" AND termina>='" . $configuracionescargasDto->getInicia() . "' ";
        }
        if (($configuracionescargasDto->getTermina() != "") && ($configuracionescargasDto->getInicia() == "")) {
            $sql.=" AND inicia<='" . $configuracionescargasDto->getTermina() . "' ";
            $sql.=" AND termina>='" . $configuracionescargasDto->getTermina() . "' ";
        }

        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        $this->_proveedor->execute($sql);
//        echo $sql;
//        echo $this->_proveedor->error();
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new ConfiguracionescargasDTO();
                    $tmp[$contador]->setCveConfiguracionCarga($row["cveConfiguracionCarga"]);
                    $tmp[$contador]->setCveRegion($row["cveRegion"]);
                    $tmp[$contador]->setTopeCarga($row["topeCarga"]);
                    $tmp[$contador]->setTipoProceso($row["tipoProceso"]);
                    $tmp[$contador]->setInicia($row["inicia"]);
                    $tmp[$contador]->setTermina($row["termina"]);
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