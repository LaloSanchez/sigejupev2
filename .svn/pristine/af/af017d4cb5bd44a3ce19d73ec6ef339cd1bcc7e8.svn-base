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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/remisionapelacionesimputados/RemisionapelacionesimputadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class RemisionapelacionesimputadosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertRemisionapelacionesimputados($remisionapelacionesimputadosDto, $proveedor = null) {
        $tmp = "";
//var_dump($remisionapelacionesimputadosDto);
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblremisionapelacionesimputados(";
        if ($remisionapelacionesimputadosDto->getIdRemisionApelacionImp() != "") {
            $sql.="idRemisionApelacionImp";
            if (($remisionapelacionesimputadosDto->getIdRemisionApelacion() != "") || ($remisionapelacionesimputadosDto->getIdimpOfeDelCarpeta() != "") || ($remisionapelacionesimputadosDto->getCveConsignacion() != "") || ($remisionapelacionesimputadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesimputadosDto->getIdRemisionApelacion() != "") {
            $sql.="idRemisionApelacion";
            if (($remisionapelacionesimputadosDto->getIdimpOfeDelCarpeta() != "") || ($remisionapelacionesimputadosDto->getCveConsignacion() != "") || ($remisionapelacionesimputadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesimputadosDto->getIdimpOfeDelCarpeta() != "") {
            $sql.="idimpOfeDelCarpeta";
            if (($remisionapelacionesimputadosDto->getCveConsignacion() != "") || ($remisionapelacionesimputadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesimputadosDto->getCveConsignacion() != "") {
            $sql.="cveConsignacion";
            if (($remisionapelacionesimputadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesimputadosDto->getActivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($remisionapelacionesimputadosDto->getIdRemisionApelacionImp() != "") {
            $sql.="'" . $remisionapelacionesimputadosDto->getIdRemisionApelacionImp() . "'";
            if (($remisionapelacionesimputadosDto->getIdRemisionApelacion() != "") || ($remisionapelacionesimputadosDto->getIdimpOfeDelCarpeta() != "") || ($remisionapelacionesimputadosDto->getCveConsignacion() != "") || ($remisionapelacionesimputadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesimputadosDto->getIdRemisionApelacion() != "") {
            $sql.="'" . $remisionapelacionesimputadosDto->getIdRemisionApelacion() . "'";
            if (($remisionapelacionesimputadosDto->getIdimpOfeDelCarpeta() != "") || ($remisionapelacionesimputadosDto->getCveConsignacion() != "") || ($remisionapelacionesimputadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesimputadosDto->getIdimpOfeDelCarpeta() != "") {
            $sql.="'" . $remisionapelacionesimputadosDto->getIdimpOfeDelCarpeta() . "'";
            if (($remisionapelacionesimputadosDto->getCveConsignacion() != "") || ($remisionapelacionesimputadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesimputadosDto->getCveConsignacion() != "") {
            $sql.="'" . $remisionapelacionesimputadosDto->getCveConsignacion() . "'";
            if (($remisionapelacionesimputadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesimputadosDto->getActivo() != "") {
            $sql.="'" . $remisionapelacionesimputadosDto->getActivo() . "'";
        }
        if ($remisionapelacionesimputadosDto->getFechaRegistro() != "") {
            
        }
        if ($remisionapelacionesimputadosDto->getFechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
//  echo $sql;
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new RemisionapelacionesimputadosDTO();
            $tmp->setidRemisionApelacionImp($this->_proveedor->lastID());
            $tmp = $this->selectRemisionapelacionesimputados($tmp, "", $this->_proveedor);
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        //$sql;
        unset($contador);
        unset($sql);
        return $tmp;
    }

    public function updateRemisionapelacionesimputados($remisionapelacionesimputadosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblremisionapelacionesimputados SET ";
        if ($remisionapelacionesimputadosDto->getIdRemisionApelacionImp() != "") {
            $sql.="idRemisionApelacionImp='" . $remisionapelacionesimputadosDto->getIdRemisionApelacionImp() . "'";
            if (($remisionapelacionesimputadosDto->getIdRemisionApelacion() != "") || ($remisionapelacionesimputadosDto->getIdimpOfeDelCarpeta() != "") || ($remisionapelacionesimputadosDto->getCveConsignacion() != "") || ($remisionapelacionesimputadosDto->getActivo() != "") || ($remisionapelacionesimputadosDto->getFechaRegistro() != "") || ($remisionapelacionesimputadosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesimputadosDto->getIdRemisionApelacion() != "") {
            $sql.="idRemisionApelacion='" . $remisionapelacionesimputadosDto->getIdRemisionApelacion() . "'";
            if (($remisionapelacionesimputadosDto->getIdimpOfeDelCarpeta() != "") || ($remisionapelacionesimputadosDto->getCveConsignacion() != "") || ($remisionapelacionesimputadosDto->getActivo() != "") || ($remisionapelacionesimputadosDto->getFechaRegistro() != "") || ($remisionapelacionesimputadosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesimputadosDto->getIdimpOfeDelCarpeta() != "") {
            $sql.="idimpOfeDelCarpeta='" . $remisionapelacionesimputadosDto->getIdimpOfeDelCarpeta() . "'";
            if (($remisionapelacionesimputadosDto->getCveConsignacion() != "") || ($remisionapelacionesimputadosDto->getActivo() != "") || ($remisionapelacionesimputadosDto->getFechaRegistro() != "") || ($remisionapelacionesimputadosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesimputadosDto->getCveConsignacion() != "") {
            $sql.="cveConsignacion='" . $remisionapelacionesimputadosDto->getCveConsignacion() . "'";
            if (($remisionapelacionesimputadosDto->getActivo() != "") || ($remisionapelacionesimputadosDto->getFechaRegistro() != "") || ($remisionapelacionesimputadosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesimputadosDto->getActivo() != "") {
            $sql.="activo='" . $remisionapelacionesimputadosDto->getActivo() . "'";
            if (($remisionapelacionesimputadosDto->getFechaRegistro() != "") || ($remisionapelacionesimputadosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesimputadosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $remisionapelacionesimputadosDto->getFechaRegistro() . "'";
            if (($remisionapelacionesimputadosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($remisionapelacionesimputadosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $remisionapelacionesimputadosDto->getFechaActualizacion() . "'";
        }
        $sql.=" WHERE idRemisionApelacionImp='" . $remisionapelacionesimputadosDto->getIdRemisionApelacionImp() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new RemisionapelacionesimputadosDTO();
            $tmp->setidRemisionApelacionImp($remisionapelacionesimputadosDto->getIdRemisionApelacionImp());
            $tmp = $this->selectRemisionapelacionesimputados($tmp, "", $this->_proveedor);
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

    public function deleteRemisionapelacionesimputados($remisionapelacionesimputadosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblremisionapelacionesimputados  WHERE idRemisionApelacionImp='" . $remisionapelacionesimputadosDto->getIdRemisionApelacionImp() . "'";
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

    public function selectRemisionapelacionesimputados($remisionapelacionesimputadosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idRemisionApelacionImp,idRemisionApelacion,idimpOfeDelCarpeta,cveConsignacion,activo,fechaRegistro,fechaActualizacion FROM tblremisionapelacionesimputados ";
        if (($remisionapelacionesimputadosDto->getIdRemisionApelacionImp() != "") || ($remisionapelacionesimputadosDto->getIdRemisionApelacion() != "") || ($remisionapelacionesimputadosDto->getIdimpOfeDelCarpeta() != "") || ($remisionapelacionesimputadosDto->getCveConsignacion() != "") || ($remisionapelacionesimputadosDto->getActivo() != "") || ($remisionapelacionesimputadosDto->getFechaRegistro() != "") || ($remisionapelacionesimputadosDto->getFechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($remisionapelacionesimputadosDto->getIdRemisionApelacionImp() != "") {
            $sql.="idRemisionApelacionImp='" . $remisionapelacionesimputadosDto->getIdRemisionApelacionImp() . "'";
            if (($remisionapelacionesimputadosDto->getIdRemisionApelacion() != "") || ($remisionapelacionesimputadosDto->getIdimpOfeDelCarpeta() != "") || ($remisionapelacionesimputadosDto->getCveConsignacion() != "") || ($remisionapelacionesimputadosDto->getActivo() != "") || ($remisionapelacionesimputadosDto->getFechaRegistro() != "") || ($remisionapelacionesimputadosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($remisionapelacionesimputadosDto->getIdRemisionApelacion() != "") {
            $sql.="idRemisionApelacion='" . $remisionapelacionesimputadosDto->getIdRemisionApelacion() . "'";
            if (($remisionapelacionesimputadosDto->getIdimpOfeDelCarpeta() != "") || ($remisionapelacionesimputadosDto->getCveConsignacion() != "") || ($remisionapelacionesimputadosDto->getActivo() != "") || ($remisionapelacionesimputadosDto->getFechaRegistro() != "") || ($remisionapelacionesimputadosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($remisionapelacionesimputadosDto->getIdimpOfeDelCarpeta() != "") {
            $sql.="idimpOfeDelCarpeta='" . $remisionapelacionesimputadosDto->getIdimpOfeDelCarpeta() . "'";
            if (($remisionapelacionesimputadosDto->getCveConsignacion() != "") || ($remisionapelacionesimputadosDto->getActivo() != "") || ($remisionapelacionesimputadosDto->getFechaRegistro() != "") || ($remisionapelacionesimputadosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($remisionapelacionesimputadosDto->getCveConsignacion() != "") {
            $sql.="cveConsignacion='" . $remisionapelacionesimputadosDto->getCveConsignacion() . "'";
            if (($remisionapelacionesimputadosDto->getActivo() != "") || ($remisionapelacionesimputadosDto->getFechaRegistro() != "") || ($remisionapelacionesimputadosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($remisionapelacionesimputadosDto->getActivo() != "") {
            $sql.="activo='" . $remisionapelacionesimputadosDto->getActivo() . "'";
            if (($remisionapelacionesimputadosDto->getFechaRegistro() != "") || ($remisionapelacionesimputadosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($remisionapelacionesimputadosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $remisionapelacionesimputadosDto->getFechaRegistro() . "'";
            if (($remisionapelacionesimputadosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($remisionapelacionesimputadosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $remisionapelacionesimputadosDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new RemisionapelacionesimputadosDTO();
                    $tmp[$contador]->setIdRemisionApelacionImp($row["idRemisionApelacionImp"]);
                    $tmp[$contador]->setIdRemisionApelacion($row["idRemisionApelacion"]);
                    $tmp[$contador]->setIdimpOfeDelCarpeta($row["idimpOfeDelCarpeta"]);
                    $tmp[$contador]->setCveConsignacion($row["cveConsignacion"]);
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