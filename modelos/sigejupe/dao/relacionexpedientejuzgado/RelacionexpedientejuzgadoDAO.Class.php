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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/relacionexpedientejuzgado/RelacionexpedientejuzgadoDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class RelacionexpedientejuzgadoDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertRelacionexpedientejuzgado($relacionexpedientejuzgadoDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblrelacionexpedientejuzgado(";
        if ($relacionexpedientejuzgadoDto->getIdRelacionExpedienteJuzgado() != "") {
            $sql.="idRelacionExpedienteJuzgado";
            if (($relacionexpedientejuzgadoDto->getIdPersonaAutorizada() != "") || ($relacionexpedientejuzgadoDto->getIdCarpetajudicial() != "") || ($relacionexpedientejuzgadoDto->getCveTipoCarpeta() != "") || ($relacionexpedientejuzgadoDto->getCveTipoParte() != "") || ($relacionexpedientejuzgadoDto->getObservaciones() != "") || ($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($relacionexpedientejuzgadoDto->getIdPersonaAutorizada() != "") {
            $sql.="IdPersonaAutorizada";
            if (($relacionexpedientejuzgadoDto->getIdCarpetajudicial() != "") || ($relacionexpedientejuzgadoDto->getCveTipoCarpeta() != "") || ($relacionexpedientejuzgadoDto->getCveTipoParte() != "") || ($relacionexpedientejuzgadoDto->getObservaciones() != "") || ($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($relacionexpedientejuzgadoDto->getIdCarpetajudicial() != "") {
            $sql.="IdCarpetajudicial";
            if (($relacionexpedientejuzgadoDto->getCveTipoCarpeta() != "") || ($relacionexpedientejuzgadoDto->getCveTipoParte() != "") || ($relacionexpedientejuzgadoDto->getObservaciones() != "") || ($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($relacionexpedientejuzgadoDto->getCveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta";
            if (($relacionexpedientejuzgadoDto->getCveTipoParte() != "") || ($relacionexpedientejuzgadoDto->getObservaciones() != "") || ($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($relacionexpedientejuzgadoDto->getCveTipoParte() != "") {
            $sql.="cveTipoParte";
            if (($relacionexpedientejuzgadoDto->getObservaciones() != "") || ($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($relacionexpedientejuzgadoDto->getObservaciones() != "") {
            $sql.="observaciones";
            if (($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($relacionexpedientejuzgadoDto->getActivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($relacionexpedientejuzgadoDto->getIdRelacionExpedienteJuzgado() != "") {
            $sql.="'" . $relacionexpedientejuzgadoDto->getIdRelacionExpedienteJuzgado() . "'";
            if (($relacionexpedientejuzgadoDto->getIdPersonaAutorizada() != "") || ($relacionexpedientejuzgadoDto->getIdCarpetajudicial() != "") || ($relacionexpedientejuzgadoDto->getCveTipoCarpeta() != "") || ($relacionexpedientejuzgadoDto->getCveTipoParte() != "") || ($relacionexpedientejuzgadoDto->getObservaciones() != "") || ($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($relacionexpedientejuzgadoDto->getIdPersonaAutorizada() != "") {
            $sql.="'" . $relacionexpedientejuzgadoDto->getIdPersonaAutorizada() . "'";
            if (($relacionexpedientejuzgadoDto->getIdCarpetajudicial() != "") || ($relacionexpedientejuzgadoDto->getCveTipoCarpeta() != "") || ($relacionexpedientejuzgadoDto->getCveTipoParte() != "") || ($relacionexpedientejuzgadoDto->getObservaciones() != "") || ($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($relacionexpedientejuzgadoDto->getIdCarpetajudicial() != "") {
            $sql.="'" . $relacionexpedientejuzgadoDto->getIdCarpetajudicial() . "'";
            if (($relacionexpedientejuzgadoDto->getCveTipoCarpeta() != "") || ($relacionexpedientejuzgadoDto->getCveTipoParte() != "") || ($relacionexpedientejuzgadoDto->getObservaciones() != "") || ($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($relacionexpedientejuzgadoDto->getCveTipoCarpeta() != "") {
            $sql.="'" . $relacionexpedientejuzgadoDto->getCveTipoCarpeta() . "'";
            if (($relacionexpedientejuzgadoDto->getCveTipoParte() != "") || ($relacionexpedientejuzgadoDto->getObservaciones() != "") || ($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($relacionexpedientejuzgadoDto->getCveTipoParte() != "") {
            $sql.="'" . $relacionexpedientejuzgadoDto->getCveTipoParte() . "'";
            if (($relacionexpedientejuzgadoDto->getObservaciones() != "") || ($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        /*if ($relacionexpedientejuzgadoDto->getFechaRegistro() != "") {
            if (($relacionexpedientejuzgadoDto->getObservaciones() != "") || ($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($relacionexpedientejuzgadoDto->getFechaActualizacion() != "") {
            if (($relacionexpedientejuzgadoDto->getObservaciones() != "") || ($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=",";
            }
        }*/
        if ($relacionexpedientejuzgadoDto->getObservaciones() != "") {
            $sql.="'" . $relacionexpedientejuzgadoDto->getObservaciones() . "'";
            if (($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($relacionexpedientejuzgadoDto->getActivo() != "") {
            $sql.="'" . $relacionexpedientejuzgadoDto->getActivo() . "'";
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new RelacionexpedientejuzgadoDTO();
            $tmp->setidRelacionExpedienteJuzgado($this->_proveedor->lastID());
            $tmp = $this->selectRelacionexpedientejuzgado($tmp, "", $this->_proveedor);
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

    public function updateRelacionexpedientejuzgado($relacionexpedientejuzgadoDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblrelacionexpedientejuzgado SET ";
        if ($relacionexpedientejuzgadoDto->getIdRelacionExpedienteJuzgado() != "") {
            $sql.="idRelacionExpedienteJuzgado='" . $relacionexpedientejuzgadoDto->getIdRelacionExpedienteJuzgado() . "'";
            if (($relacionexpedientejuzgadoDto->getIdPersonaAutorizada() != "") || ($relacionexpedientejuzgadoDto->getIdCarpetajudicial() != "") || ($relacionexpedientejuzgadoDto->getCveTipoCarpeta() != "") || ($relacionexpedientejuzgadoDto->getCveTipoParte() != "") || ($relacionexpedientejuzgadoDto->getFechaRegistro() != "") || ($relacionexpedientejuzgadoDto->getFechaActualizacion() != "") || ($relacionexpedientejuzgadoDto->getObservaciones() != "") || ($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($relacionexpedientejuzgadoDto->getIdPersonaAutorizada() != "") {
            $sql.="IdPersonaAutorizada='" . $relacionexpedientejuzgadoDto->getIdPersonaAutorizada() . "'";
            if (($relacionexpedientejuzgadoDto->getIdCarpetajudicial() != "") || ($relacionexpedientejuzgadoDto->getCveTipoCarpeta() != "") || ($relacionexpedientejuzgadoDto->getCveTipoParte() != "") || ($relacionexpedientejuzgadoDto->getFechaRegistro() != "") || ($relacionexpedientejuzgadoDto->getFechaActualizacion() != "") || ($relacionexpedientejuzgadoDto->getObservaciones() != "") || ($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($relacionexpedientejuzgadoDto->getIdCarpetajudicial() != "") {
            $sql.="IdCarpetajudicial='" . $relacionexpedientejuzgadoDto->getIdCarpetajudicial() . "'";
            if (($relacionexpedientejuzgadoDto->getCveTipoCarpeta() != "") || ($relacionexpedientejuzgadoDto->getCveTipoParte() != "") || ($relacionexpedientejuzgadoDto->getFechaRegistro() != "") || ($relacionexpedientejuzgadoDto->getFechaActualizacion() != "") || ($relacionexpedientejuzgadoDto->getObservaciones() != "") || ($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($relacionexpedientejuzgadoDto->getCveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta='" . $relacionexpedientejuzgadoDto->getCveTipoCarpeta() . "'";
            if (($relacionexpedientejuzgadoDto->getCveTipoParte() != "") || ($relacionexpedientejuzgadoDto->getFechaRegistro() != "") || ($relacionexpedientejuzgadoDto->getFechaActualizacion() != "") || ($relacionexpedientejuzgadoDto->getObservaciones() != "") || ($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($relacionexpedientejuzgadoDto->getCveTipoParte() != "") {
            $sql.="cveTipoParte='" . $relacionexpedientejuzgadoDto->getCveTipoParte() . "'";
            if (($relacionexpedientejuzgadoDto->getFechaRegistro() != "") || ($relacionexpedientejuzgadoDto->getFechaActualizacion() != "") || ($relacionexpedientejuzgadoDto->getObservaciones() != "") || ($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($relacionexpedientejuzgadoDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $relacionexpedientejuzgadoDto->getFechaRegistro() . "'";
            if (($relacionexpedientejuzgadoDto->getFechaActualizacion() != "") || ($relacionexpedientejuzgadoDto->getObservaciones() != "") || ($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($relacionexpedientejuzgadoDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $relacionexpedientejuzgadoDto->getFechaActualizacion() . "'";
            if (($relacionexpedientejuzgadoDto->getObservaciones() != "") || ($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($relacionexpedientejuzgadoDto->getObservaciones() != "") {
            $sql.="observaciones='" . $relacionexpedientejuzgadoDto->getObservaciones() . "'";
            if (($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($relacionexpedientejuzgadoDto->getActivo() != "") {
            $sql.="activo='" . $relacionexpedientejuzgadoDto->getActivo() . "'";
        }
        $sql.=" WHERE idRelacionExpedienteJuzgado='" . $relacionexpedientejuzgadoDto->getIdRelacionExpedienteJuzgado() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new RelacionexpedientejuzgadoDTO();
            $tmp->setidRelacionExpedienteJuzgado($relacionexpedientejuzgadoDto->getIdRelacionExpedienteJuzgado());
            $tmp = $this->selectRelacionexpedientejuzgado($tmp, "", $this->_proveedor);
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

    public function deleteRelacionexpedientejuzgado($relacionexpedientejuzgadoDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblrelacionexpedientejuzgado  WHERE idRelacionExpedienteJuzgado='" . $relacionexpedientejuzgadoDto->getIdRelacionExpedienteJuzgado() . "'";
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

    public function selectRelacionexpedientejuzgado($relacionexpedientejuzgadoDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idRelacionExpedienteJuzgado,IdPersonaAutorizada,IdCarpetajudicial,cveTipoCarpeta,cveTipoParte,fechaRegistro,fechaActualizacion,observaciones,activo FROM tblrelacionexpedientejuzgado ";
        if (($relacionexpedientejuzgadoDto->getIdRelacionExpedienteJuzgado() != "") || ($relacionexpedientejuzgadoDto->getIdPersonaAutorizada() != "") || ($relacionexpedientejuzgadoDto->getIdCarpetajudicial() != "") || ($relacionexpedientejuzgadoDto->getCveTipoCarpeta() != "") || ($relacionexpedientejuzgadoDto->getCveTipoParte() != "") || ($relacionexpedientejuzgadoDto->getFechaRegistro() != "") || ($relacionexpedientejuzgadoDto->getFechaActualizacion() != "") || ($relacionexpedientejuzgadoDto->getObservaciones() != "") || ($relacionexpedientejuzgadoDto->getActivo() != "")) {
            $sql.=" WHERE ";
        }
        if ($relacionexpedientejuzgadoDto->getIdRelacionExpedienteJuzgado() != "") {
            $sql.="idRelacionExpedienteJuzgado='" . $relacionexpedientejuzgadoDto->getIdRelacionExpedienteJuzgado() . "'";
            if (($relacionexpedientejuzgadoDto->getIdPersonaAutorizada() != "") || ($relacionexpedientejuzgadoDto->getIdCarpetajudicial() != "") || ($relacionexpedientejuzgadoDto->getCveTipoCarpeta() != "") || ($relacionexpedientejuzgadoDto->getCveTipoParte() != "") || ($relacionexpedientejuzgadoDto->getFechaRegistro() != "") || ($relacionexpedientejuzgadoDto->getFechaActualizacion() != "") || ($relacionexpedientejuzgadoDto->getObservaciones() != "") || ($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($relacionexpedientejuzgadoDto->getIdPersonaAutorizada() != "") {
            $sql.="IdPersonaAutorizada='" . $relacionexpedientejuzgadoDto->getIdPersonaAutorizada() . "'";
            if (($relacionexpedientejuzgadoDto->getIdCarpetajudicial() != "") || ($relacionexpedientejuzgadoDto->getCveTipoCarpeta() != "") || ($relacionexpedientejuzgadoDto->getCveTipoParte() != "") || ($relacionexpedientejuzgadoDto->getFechaRegistro() != "") || ($relacionexpedientejuzgadoDto->getFechaActualizacion() != "") || ($relacionexpedientejuzgadoDto->getObservaciones() != "") || ($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($relacionexpedientejuzgadoDto->getIdCarpetajudicial() != "") {
            $sql.="IdCarpetajudicial='" . $relacionexpedientejuzgadoDto->getIdCarpetajudicial() . "'";
            if (($relacionexpedientejuzgadoDto->getCveTipoCarpeta() != "") || ($relacionexpedientejuzgadoDto->getCveTipoParte() != "") || ($relacionexpedientejuzgadoDto->getFechaRegistro() != "") || ($relacionexpedientejuzgadoDto->getFechaActualizacion() != "") || ($relacionexpedientejuzgadoDto->getObservaciones() != "") || ($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($relacionexpedientejuzgadoDto->getCveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta='" . $relacionexpedientejuzgadoDto->getCveTipoCarpeta() . "'";
            if (($relacionexpedientejuzgadoDto->getCveTipoParte() != "") || ($relacionexpedientejuzgadoDto->getFechaRegistro() != "") || ($relacionexpedientejuzgadoDto->getFechaActualizacion() != "") || ($relacionexpedientejuzgadoDto->getObservaciones() != "") || ($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($relacionexpedientejuzgadoDto->getCveTipoParte() != "") {
            $sql.="cveTipoParte='" . $relacionexpedientejuzgadoDto->getCveTipoParte() . "'";
            if (($relacionexpedientejuzgadoDto->getFechaRegistro() != "") || ($relacionexpedientejuzgadoDto->getFechaActualizacion() != "") || ($relacionexpedientejuzgadoDto->getObservaciones() != "") || ($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($relacionexpedientejuzgadoDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $relacionexpedientejuzgadoDto->getFechaRegistro() . "'";
            if (($relacionexpedientejuzgadoDto->getFechaActualizacion() != "") || ($relacionexpedientejuzgadoDto->getObservaciones() != "") || ($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($relacionexpedientejuzgadoDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $relacionexpedientejuzgadoDto->getFechaActualizacion() . "'";
            if (($relacionexpedientejuzgadoDto->getObservaciones() != "") || ($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($relacionexpedientejuzgadoDto->getObservaciones() != "") {
            $sql.="observaciones='" . $relacionexpedientejuzgadoDto->getObservaciones() . "'";
            if (($relacionexpedientejuzgadoDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($relacionexpedientejuzgadoDto->getActivo() != "") {
            $sql.="activo='" . $relacionexpedientejuzgadoDto->getActivo() . "'";
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
                    $tmp[$contador] = new RelacionexpedientejuzgadoDTO();
                    $tmp[$contador]->setIdRelacionExpedienteJuzgado($row["idRelacionExpedienteJuzgado"]);
                    $tmp[$contador]->setIdPersonaAutorizada($row["IdPersonaAutorizada"]);
                    $tmp[$contador]->setIdCarpetajudicial($row["IdCarpetajudicial"]);
                    $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                    $tmp[$contador]->setCveTipoParte($row["cveTipoParte"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setObservaciones($row["observaciones"]);
                    $tmp[$contador]->setActivo($row["activo"]);
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