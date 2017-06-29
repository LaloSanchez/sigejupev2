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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/imputadoscarpetasconclusiones/ImputadoscarpetasconclusionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ImputadoscarpetasconclusionesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertImputadoscarpetasconclusiones($imputadoscarpetasconclusionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblimputadoscarpetasconclusiones(";
        if ($imputadoscarpetasconclusionesDto->getIdImputadoCarpetaConclusion() != "") {
            $sql.="idImputadoCarpetaConclusion";
            if (($imputadoscarpetasconclusionesDto->getIdImputadoCarpeta() != "") || ($imputadoscarpetasconclusionesDto->getCveConclusion() != "") || ($imputadoscarpetasconclusionesDto->getCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalAcordado() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalPagado() != "") || ($imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getObservaciones() != "") || ($imputadoscarpetasconclusionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getIdImputadoCarpeta() != "") {
            $sql.="idImputadoCarpeta";
            if (($imputadoscarpetasconclusionesDto->getCveConclusion() != "") || ($imputadoscarpetasconclusionesDto->getCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalAcordado() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalPagado() != "") || ($imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getObservaciones() != "") || ($imputadoscarpetasconclusionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getCveConclusion() != "") {
            $sql.="cveConclusion";
            if (($imputadoscarpetasconclusionesDto->getCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalAcordado() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalPagado() != "") || ($imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getObservaciones() != "") || ($imputadoscarpetasconclusionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getCumplimiento() != "") {
            $sql.="cumplimiento";
            if (($imputadoscarpetasconclusionesDto->getMontoTotalAcordado() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalPagado() != "") || ($imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getObservaciones() != "") || ($imputadoscarpetasconclusionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getMontoTotalAcordado() != "") {
            $sql.="montoTotalAcordado";
            if (($imputadoscarpetasconclusionesDto->getMontoTotalPagado() != "") || ($imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getObservaciones() != "") || ($imputadoscarpetasconclusionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getMontoTotalPagado() != "") {
            $sql.="montoTotalPagado";
            if (($imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getObservaciones() != "") || ($imputadoscarpetasconclusionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() != "") {
            $sql.="fechaPactadaCumplimiento";
            if (($imputadoscarpetasconclusionesDto->getObservaciones() != "") || ($imputadoscarpetasconclusionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getObservaciones() != "") {
            $sql.="observaciones";
            if (($imputadoscarpetasconclusionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getActivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($imputadoscarpetasconclusionesDto->getIdImputadoCarpetaConclusion() != "") {
            $sql.="'" . $imputadoscarpetasconclusionesDto->getIdImputadoCarpetaConclusion() . "'";
            if (($imputadoscarpetasconclusionesDto->getIdImputadoCarpeta() != "") || ($imputadoscarpetasconclusionesDto->getCveConclusion() != "") || ($imputadoscarpetasconclusionesDto->getCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalAcordado() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalPagado() != "") || ($imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getObservaciones() != "") || ($imputadoscarpetasconclusionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getIdImputadoCarpeta() != "") {
            $sql.="'" . $imputadoscarpetasconclusionesDto->getIdImputadoCarpeta() . "'";
            if (($imputadoscarpetasconclusionesDto->getCveConclusion() != "") || ($imputadoscarpetasconclusionesDto->getCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalAcordado() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalPagado() != "") || ($imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getObservaciones() != "") || ($imputadoscarpetasconclusionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getCveConclusion() != "") {
            $sql.="'" . $imputadoscarpetasconclusionesDto->getCveConclusion() . "'";
            if (($imputadoscarpetasconclusionesDto->getCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalAcordado() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalPagado() != "") || ($imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getObservaciones() != "") || ($imputadoscarpetasconclusionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getCumplimiento() != "") {
            $sql.="'" . $imputadoscarpetasconclusionesDto->getCumplimiento() . "'";
            if (($imputadoscarpetasconclusionesDto->getMontoTotalAcordado() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalPagado() != "") || ($imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getObservaciones() != "") || ($imputadoscarpetasconclusionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getMontoTotalAcordado() != "") {
            $sql.="'" . $imputadoscarpetasconclusionesDto->getMontoTotalAcordado() . "'";
            if (($imputadoscarpetasconclusionesDto->getMontoTotalPagado() != "") || ($imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getObservaciones() != "") || ($imputadoscarpetasconclusionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getMontoTotalPagado() != "") {
            $sql.="'" . $imputadoscarpetasconclusionesDto->getMontoTotalPagado() . "'";
            if (($imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getObservaciones() != "") || ($imputadoscarpetasconclusionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() != "") {
            $sql.="'" . $imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() . "'";
            if (($imputadoscarpetasconclusionesDto->getObservaciones() != "") || ($imputadoscarpetasconclusionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getObservaciones() != "") {
            $sql.="'" . $imputadoscarpetasconclusionesDto->getObservaciones() . "'";
            if (($imputadoscarpetasconclusionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getActivo() != "") {
            $sql.="'" . $imputadoscarpetasconclusionesDto->getActivo() . "'";
        }
        if ($imputadoscarpetasconclusionesDto->getFechaRegistro() != "") {
            
        }
        if ($imputadoscarpetasconclusionesDto->getFechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImputadoscarpetasconclusionesDTO();
            $tmp->setidImputadoCarpetaConclusion($this->_proveedor->lastID());
            $tmp = $this->selectImputadoscarpetasconclusiones($tmp, "", $this->_proveedor);
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

    public function updateImputadoscarpetasconclusiones($imputadoscarpetasconclusionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblimputadoscarpetasconclusiones SET ";
        if ($imputadoscarpetasconclusionesDto->getIdImputadoCarpetaConclusion() != "") {
            $sql.="idImputadoCarpetaConclusion='" . $imputadoscarpetasconclusionesDto->getIdImputadoCarpetaConclusion() . "'";
            if (($imputadoscarpetasconclusionesDto->getIdImputadoCarpeta() != "") || ($imputadoscarpetasconclusionesDto->getCveConclusion() != "") || ($imputadoscarpetasconclusionesDto->getCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalAcordado() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalPagado() != "") || ($imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getObservaciones() != "") || ($imputadoscarpetasconclusionesDto->getActivo() != "") || ($imputadoscarpetasconclusionesDto->getFechaRegistro() != "") || ($imputadoscarpetasconclusionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getIdImputadoCarpeta() != "") {
            $sql.="idImputadoCarpeta='" . $imputadoscarpetasconclusionesDto->getIdImputadoCarpeta() . "'";
            if (($imputadoscarpetasconclusionesDto->getCveConclusion() != "") || ($imputadoscarpetasconclusionesDto->getCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalAcordado() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalPagado() != "") || ($imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getObservaciones() != "") || ($imputadoscarpetasconclusionesDto->getActivo() != "") || ($imputadoscarpetasconclusionesDto->getFechaRegistro() != "") || ($imputadoscarpetasconclusionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getCveConclusion() != "") {
            $sql.="cveConclusion='" . $imputadoscarpetasconclusionesDto->getCveConclusion() . "'";
            if (($imputadoscarpetasconclusionesDto->getCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalAcordado() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalPagado() != "") || ($imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getObservaciones() != "") || ($imputadoscarpetasconclusionesDto->getActivo() != "") || ($imputadoscarpetasconclusionesDto->getFechaRegistro() != "") || ($imputadoscarpetasconclusionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getCumplimiento() != "") {
            $sql.="cumplimiento='" . $imputadoscarpetasconclusionesDto->getCumplimiento() . "'";
            if (($imputadoscarpetasconclusionesDto->getMontoTotalAcordado() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalPagado() != "") || ($imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getObservaciones() != "") || ($imputadoscarpetasconclusionesDto->getActivo() != "") || ($imputadoscarpetasconclusionesDto->getFechaRegistro() != "") || ($imputadoscarpetasconclusionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getMontoTotalAcordado() != "") {
            $sql.="montoTotalAcordado='" . $imputadoscarpetasconclusionesDto->getMontoTotalAcordado() . "'";
            if (($imputadoscarpetasconclusionesDto->getMontoTotalPagado() != "") || ($imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getObservaciones() != "") || ($imputadoscarpetasconclusionesDto->getActivo() != "") || ($imputadoscarpetasconclusionesDto->getFechaRegistro() != "") || ($imputadoscarpetasconclusionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getMontoTotalPagado() != "") {
            $sql.="montoTotalPagado='" . $imputadoscarpetasconclusionesDto->getMontoTotalPagado() . "'";
            if (($imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getObservaciones() != "") || ($imputadoscarpetasconclusionesDto->getActivo() != "") || ($imputadoscarpetasconclusionesDto->getFechaRegistro() != "") || ($imputadoscarpetasconclusionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() != "") {
            $sql.="fechaPactadaCumplimiento='" . $imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() . "'";
            if (($imputadoscarpetasconclusionesDto->getObservaciones() != "") || ($imputadoscarpetasconclusionesDto->getActivo() != "") || ($imputadoscarpetasconclusionesDto->getFechaRegistro() != "") || ($imputadoscarpetasconclusionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getObservaciones() != "") {
            $sql.="observaciones='" . $imputadoscarpetasconclusionesDto->getObservaciones() . "'";
            if (($imputadoscarpetasconclusionesDto->getActivo() != "") || ($imputadoscarpetasconclusionesDto->getFechaRegistro() != "") || ($imputadoscarpetasconclusionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getActivo() != "") {
            $sql.="activo='" . $imputadoscarpetasconclusionesDto->getActivo() . "'";
            if (($imputadoscarpetasconclusionesDto->getFechaRegistro() != "") || ($imputadoscarpetasconclusionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $imputadoscarpetasconclusionesDto->getFechaRegistro() . "'";
            if (($imputadoscarpetasconclusionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $imputadoscarpetasconclusionesDto->getFechaActualizacion() . "'";
        }
        $sql.=" WHERE idImputadoCarpetaConclusion='" . $imputadoscarpetasconclusionesDto->getIdImputadoCarpetaConclusion() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImputadoscarpetasconclusionesDTO();
            $tmp->setidImputadoCarpetaConclusion($imputadoscarpetasconclusionesDto->getIdImputadoCarpetaConclusion());
            $tmp = $this->selectImputadoscarpetasconclusiones($tmp, "", $this->_proveedor);
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

    public function deleteImputadoscarpetasconclusiones($imputadoscarpetasconclusionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblimputadoscarpetasconclusiones  WHERE idImputadoCarpetaConclusion='" . $imputadoscarpetasconclusionesDto->getIdImputadoCarpetaConclusion() . "'";
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

    public function selectImputadoscarpetasconclusiones($imputadoscarpetasconclusionesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idImputadoCarpetaConclusion,idImputadoCarpeta,cveConclusion,cumplimiento,montoTotalAcordado,montoTotalPagado,fechaPactadaCumplimiento,observaciones,activo,fechaRegistro,fechaActualizacion FROM tblimputadoscarpetasconclusiones ";
        if (($imputadoscarpetasconclusionesDto->getIdImputadoCarpetaConclusion() != "") || ($imputadoscarpetasconclusionesDto->getIdImputadoCarpeta() != "") || ($imputadoscarpetasconclusionesDto->getCveConclusion() != "") || ($imputadoscarpetasconclusionesDto->getCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalAcordado() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalPagado() != "") || ($imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getObservaciones() != "") || ($imputadoscarpetasconclusionesDto->getActivo() != "") || ($imputadoscarpetasconclusionesDto->getFechaRegistro() != "") || ($imputadoscarpetasconclusionesDto->getFechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($imputadoscarpetasconclusionesDto->getIdImputadoCarpetaConclusion() != "") {
            $sql.="idImputadoCarpetaConclusion='" . $imputadoscarpetasconclusionesDto->getIdImputadoCarpetaConclusion() . "'";
            if (($imputadoscarpetasconclusionesDto->getIdImputadoCarpeta() != "") || ($imputadoscarpetasconclusionesDto->getCveConclusion() != "") || ($imputadoscarpetasconclusionesDto->getCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalAcordado() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalPagado() != "") || ($imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getObservaciones() != "") || ($imputadoscarpetasconclusionesDto->getActivo() != "") || ($imputadoscarpetasconclusionesDto->getFechaRegistro() != "") || ($imputadoscarpetasconclusionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getIdImputadoCarpeta() != "") {
            $sql.="idImputadoCarpeta='" . $imputadoscarpetasconclusionesDto->getIdImputadoCarpeta() . "'";
            if (($imputadoscarpetasconclusionesDto->getCveConclusion() != "") || ($imputadoscarpetasconclusionesDto->getCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalAcordado() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalPagado() != "") || ($imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getObservaciones() != "") || ($imputadoscarpetasconclusionesDto->getActivo() != "") || ($imputadoscarpetasconclusionesDto->getFechaRegistro() != "") || ($imputadoscarpetasconclusionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getCveConclusion() != "") {
            $sql.="cveConclusion='" . $imputadoscarpetasconclusionesDto->getCveConclusion() . "'";
            if (($imputadoscarpetasconclusionesDto->getCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalAcordado() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalPagado() != "") || ($imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getObservaciones() != "") || ($imputadoscarpetasconclusionesDto->getActivo() != "") || ($imputadoscarpetasconclusionesDto->getFechaRegistro() != "") || ($imputadoscarpetasconclusionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getCumplimiento() != "") {
            $sql.="cumplimiento='" . $imputadoscarpetasconclusionesDto->getCumplimiento() . "'";
            if (($imputadoscarpetasconclusionesDto->getMontoTotalAcordado() != "") || ($imputadoscarpetasconclusionesDto->getMontoTotalPagado() != "") || ($imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getObservaciones() != "") || ($imputadoscarpetasconclusionesDto->getActivo() != "") || ($imputadoscarpetasconclusionesDto->getFechaRegistro() != "") || ($imputadoscarpetasconclusionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getMontoTotalAcordado() != "") {
            $sql.="montoTotalAcordado='" . $imputadoscarpetasconclusionesDto->getMontoTotalAcordado() . "'";
            if (($imputadoscarpetasconclusionesDto->getMontoTotalPagado() != "") || ($imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getObservaciones() != "") || ($imputadoscarpetasconclusionesDto->getActivo() != "") || ($imputadoscarpetasconclusionesDto->getFechaRegistro() != "") || ($imputadoscarpetasconclusionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getMontoTotalPagado() != "") {
            $sql.="montoTotalPagado='" . $imputadoscarpetasconclusionesDto->getMontoTotalPagado() . "'";
            if (($imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() != "") || ($imputadoscarpetasconclusionesDto->getObservaciones() != "") || ($imputadoscarpetasconclusionesDto->getActivo() != "") || ($imputadoscarpetasconclusionesDto->getFechaRegistro() != "") || ($imputadoscarpetasconclusionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() != "") {
            $sql.="fechaPactadaCumplimiento='" . $imputadoscarpetasconclusionesDto->getFechaPactadaCumplimiento() . "'";
            if (($imputadoscarpetasconclusionesDto->getObservaciones() != "") || ($imputadoscarpetasconclusionesDto->getActivo() != "") || ($imputadoscarpetasconclusionesDto->getFechaRegistro() != "") || ($imputadoscarpetasconclusionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getObservaciones() != "") {
            $sql.="observaciones='" . $imputadoscarpetasconclusionesDto->getObservaciones() . "'";
            if (($imputadoscarpetasconclusionesDto->getActivo() != "") || ($imputadoscarpetasconclusionesDto->getFechaRegistro() != "") || ($imputadoscarpetasconclusionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getActivo() != "") {
            $sql.="activo='" . $imputadoscarpetasconclusionesDto->getActivo() . "'";
            if (($imputadoscarpetasconclusionesDto->getFechaRegistro() != "") || ($imputadoscarpetasconclusionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $imputadoscarpetasconclusionesDto->getFechaRegistro() . "'";
            if (($imputadoscarpetasconclusionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imputadoscarpetasconclusionesDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $imputadoscarpetasconclusionesDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new ImputadoscarpetasconclusionesDTO();
                    $tmp[$contador]->setIdImputadoCarpetaConclusion($row["idImputadoCarpetaConclusion"]);
                    $tmp[$contador]->setIdImputadoCarpeta($row["idImputadoCarpeta"]);
                    $tmp[$contador]->setCveConclusion($row["cveConclusion"]);
                    $tmp[$contador]->setCumplimiento($row["cumplimiento"]);
                    $tmp[$contador]->setMontoTotalAcordado($row["montoTotalAcordado"]);
                    $tmp[$contador]->setMontoTotalPagado($row["montoTotalPagado"]);
                    $tmp[$contador]->setFechaPactadaCumplimiento($row["fechaPactadaCumplimiento"]);
                    $tmp[$contador]->setObservaciones($row["observaciones"]);
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