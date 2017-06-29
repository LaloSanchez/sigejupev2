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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/trataspersonas/TrataspersonasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class TrataspersonasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertTrataspersonas($trataspersonasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbltrataspersonas(";
        if ($trataspersonasDto->getidTrataPersona() != "") {
            $sql.="idTrataPersona";
            if (($trataspersonasDto->getCveEstadoDestino() != "") || ($trataspersonasDto->getCveMunicipioDestino() != "") || ($trataspersonasDto->getCvePaisDestino() != "") || ($trataspersonasDto->getEstadoDestino() != "") || ($trataspersonasDto->getMunicipioDestino() != "") || ($trataspersonasDto->getCveEstadoOrigen() != "") || ($trataspersonasDto->getCveMunicipioOrigen() != "") || ($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getcveEstadoDestino() != "") {
            $sql.="cveEstadoDestino";
            if (($trataspersonasDto->getCveMunicipioDestino() != "") || ($trataspersonasDto->getCvePaisDestino() != "") || ($trataspersonasDto->getEstadoDestino() != "") || ($trataspersonasDto->getMunicipioDestino() != "") || ($trataspersonasDto->getCveEstadoOrigen() != "") || ($trataspersonasDto->getCveMunicipioOrigen() != "") || ($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getcveMunicipioDestino() != "") {
            $sql.="cveMunicipioDestino";
            if (($trataspersonasDto->getCvePaisDestino() != "") || ($trataspersonasDto->getEstadoDestino() != "") || ($trataspersonasDto->getMunicipioDestino() != "") || ($trataspersonasDto->getCveEstadoOrigen() != "") || ($trataspersonasDto->getCveMunicipioOrigen() != "") || ($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getcvePaisDestino() != "") {
            $sql.="cvePaisDestino";
            if (($trataspersonasDto->getEstadoDestino() != "") || ($trataspersonasDto->getMunicipioDestino() != "") || ($trataspersonasDto->getCveEstadoOrigen() != "") || ($trataspersonasDto->getCveMunicipioOrigen() != "") || ($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getestadoDestino() != "") {
            $sql.="estadoDestino";
            if (($trataspersonasDto->getMunicipioDestino() != "") || ($trataspersonasDto->getCveEstadoOrigen() != "") || ($trataspersonasDto->getCveMunicipioOrigen() != "") || ($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getmunicipioDestino() != "") {
            $sql.="municipioDestino";
            if (($trataspersonasDto->getCveEstadoOrigen() != "") || ($trataspersonasDto->getCveMunicipioOrigen() != "") || ($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getcveEstadoOrigen() != "") {
            $sql.="cveEstadoOrigen";
            if (($trataspersonasDto->getCveMunicipioOrigen() != "") || ($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getcveMunicipioOrigen() != "") {
            $sql.="cveMunicipioOrigen";
            if (($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getcvePaisOrigen() != "") {
            $sql.="cvePaisOrigen";
            if (($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getestadoOrigen() != "") {
            $sql.="estadoOrigen";
            if (($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getmunicipioOrigen() != "") {
            $sql.="municipioOrigen";
            if (($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getcveTipoTrata() != "") {
            $sql.="cveTipoTrata";
            if (($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getcveTrasportacion() != "") {
            $sql.="cveTrasportacion";
            if (($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getidImpOfeDelSolicitud() != "") {
            $sql.="idImpOfeDelSolicitud";
            if (($trataspersonasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($trataspersonasDto->getidTrataPersona() != "") {
            $sql.="'" . $trataspersonasDto->getidTrataPersona() . "'";
            if (($trataspersonasDto->getCveEstadoDestino() != "") || ($trataspersonasDto->getCveMunicipioDestino() != "") || ($trataspersonasDto->getCvePaisDestino() != "") || ($trataspersonasDto->getEstadoDestino() != "") || ($trataspersonasDto->getMunicipioDestino() != "") || ($trataspersonasDto->getCveEstadoOrigen() != "") || ($trataspersonasDto->getCveMunicipioOrigen() != "") || ($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getcveEstadoDestino() != "") {
            $sql.="'" . $trataspersonasDto->getcveEstadoDestino() . "'";
            if (($trataspersonasDto->getCveMunicipioDestino() != "") || ($trataspersonasDto->getCvePaisDestino() != "") || ($trataspersonasDto->getEstadoDestino() != "") || ($trataspersonasDto->getMunicipioDestino() != "") || ($trataspersonasDto->getCveEstadoOrigen() != "") || ($trataspersonasDto->getCveMunicipioOrigen() != "") || ($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getcveMunicipioDestino() != "") {
            $sql.="'" . $trataspersonasDto->getcveMunicipioDestino() . "'";
            if (($trataspersonasDto->getCvePaisDestino() != "") || ($trataspersonasDto->getEstadoDestino() != "") || ($trataspersonasDto->getMunicipioDestino() != "") || ($trataspersonasDto->getCveEstadoOrigen() != "") || ($trataspersonasDto->getCveMunicipioOrigen() != "") || ($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getcvePaisDestino() != "") {
            $sql.="'" . $trataspersonasDto->getcvePaisDestino() . "'";
            if (($trataspersonasDto->getEstadoDestino() != "") || ($trataspersonasDto->getMunicipioDestino() != "") || ($trataspersonasDto->getCveEstadoOrigen() != "") || ($trataspersonasDto->getCveMunicipioOrigen() != "") || ($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getestadoDestino() != "") {
            $sql.="'" . $trataspersonasDto->getestadoDestino() . "'";
            if (($trataspersonasDto->getMunicipioDestino() != "") || ($trataspersonasDto->getCveEstadoOrigen() != "") || ($trataspersonasDto->getCveMunicipioOrigen() != "") || ($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getmunicipioDestino() != "") {
            $sql.="'" . $trataspersonasDto->getmunicipioDestino() . "'";
            if (($trataspersonasDto->getCveEstadoOrigen() != "") || ($trataspersonasDto->getCveMunicipioOrigen() != "") || ($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getcveEstadoOrigen() != "") {
            $sql.="'" . $trataspersonasDto->getcveEstadoOrigen() . "'";
            if (($trataspersonasDto->getCveMunicipioOrigen() != "") || ($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getcveMunicipioOrigen() != "") {
            $sql.="'" . $trataspersonasDto->getcveMunicipioOrigen() . "'";
            if (($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getcvePaisOrigen() != "") {
            $sql.="'" . $trataspersonasDto->getcvePaisOrigen() . "'";
            if (($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getestadoOrigen() != "") {
            $sql.="'" . $trataspersonasDto->getestadoOrigen() . "'";
            if (($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getmunicipioOrigen() != "") {
            $sql.="'" . $trataspersonasDto->getmunicipioOrigen() . "'";
            if (($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getcveTipoTrata() != "") {
            $sql.="'" . $trataspersonasDto->getcveTipoTrata() . "'";
            if (($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getcveTrasportacion() != "") {
            $sql.="'" . $trataspersonasDto->getcveTrasportacion() . "'";
            if (($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getidImpOfeDelSolicitud() != "") {
            $sql.="'" . $trataspersonasDto->getidImpOfeDelSolicitud() . "'";
            if (($trataspersonasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getactivo() != "") {
            $sql.="'" . $trataspersonasDto->getactivo() . "'";
        }
        if ($trataspersonasDto->getfechaRegistro() != "") {
            
        }
        if ($trataspersonasDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TrataspersonasDTO();
            $tmp->setidTrataPersona($this->_proveedor->lastID());
            $tmp = $this->selectTrataspersonas($tmp, "", $this->_proveedor);
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

    public function updateTrataspersonas($trataspersonasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltrataspersonas SET ";

        if ($trataspersonasDto->getcveEstadoDestino() != "") {
            $sql.="cveEstadoDestino='" . $trataspersonasDto->getcveEstadoDestino() . "'";
            if (($trataspersonasDto->getCveMunicipioDestino() != "") || ($trataspersonasDto->getCvePaisDestino() != "") || ($trataspersonasDto->getEstadoDestino() != "") || ($trataspersonasDto->getMunicipioDestino() != "") || ($trataspersonasDto->getCveEstadoOrigen() != "") || ($trataspersonasDto->getCveMunicipioOrigen() != "") || ($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "") || ($trataspersonasDto->getFechaRegistro() != "") || ($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getcveMunicipioDestino() != "") {
            $sql.="cveMunicipioDestino='" . $trataspersonasDto->getcveMunicipioDestino() . "'";
            if (($trataspersonasDto->getCvePaisDestino() != "") || ($trataspersonasDto->getEstadoDestino() != "") || ($trataspersonasDto->getMunicipioDestino() != "") || ($trataspersonasDto->getCveEstadoOrigen() != "") || ($trataspersonasDto->getCveMunicipioOrigen() != "") || ($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "") || ($trataspersonasDto->getFechaRegistro() != "") || ($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getcvePaisDestino() != "") {
            $sql.="cvePaisDestino='" . $trataspersonasDto->getcvePaisDestino() . "'";
            if (($trataspersonasDto->getEstadoDestino() != "") || ($trataspersonasDto->getMunicipioDestino() != "") || ($trataspersonasDto->getCveEstadoOrigen() != "") || ($trataspersonasDto->getCveMunicipioOrigen() != "") || ($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "") || ($trataspersonasDto->getFechaRegistro() != "") || ($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getestadoDestino() != "") {
            $sql.="estadoDestino='" . $trataspersonasDto->getestadoDestino() . "'";
            if (($trataspersonasDto->getMunicipioDestino() != "") || ($trataspersonasDto->getCveEstadoOrigen() != "") || ($trataspersonasDto->getCveMunicipioOrigen() != "") || ($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "") || ($trataspersonasDto->getFechaRegistro() != "") || ($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getmunicipioDestino() != "") {
            $sql.="municipioDestino='" . $trataspersonasDto->getmunicipioDestino() . "'";
            if (($trataspersonasDto->getCveEstadoOrigen() != "") || ($trataspersonasDto->getCveMunicipioOrigen() != "") || ($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "") || ($trataspersonasDto->getFechaRegistro() != "") || ($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getcveEstadoOrigen() != "") {
            $sql.="cveEstadoOrigen='" . $trataspersonasDto->getcveEstadoOrigen() . "'";
            if (($trataspersonasDto->getCveMunicipioOrigen() != "") || ($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "") || ($trataspersonasDto->getFechaRegistro() != "") || ($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getcveMunicipioOrigen() != "") {
            $sql.="cveMunicipioOrigen='" . $trataspersonasDto->getcveMunicipioOrigen() . "'";
            if (($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "") || ($trataspersonasDto->getFechaRegistro() != "") || ($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getcvePaisOrigen() != "") {
            $sql.="cvePaisOrigen='" . $trataspersonasDto->getcvePaisOrigen() . "'";
            if (($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "") || ($trataspersonasDto->getFechaRegistro() != "") || ($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getestadoOrigen() != "") {
            $sql.="estadoOrigen='" . $trataspersonasDto->getestadoOrigen() . "'";
            if (($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "") || ($trataspersonasDto->getFechaRegistro() != "") || ($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getmunicipioOrigen() != "") {
            $sql.="municipioOrigen='" . $trataspersonasDto->getmunicipioOrigen() . "'";
            if (($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "") || ($trataspersonasDto->getFechaRegistro() != "") || ($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getcveTipoTrata() != "") {
            $sql.="cveTipoTrata='" . $trataspersonasDto->getcveTipoTrata() . "'";
            if (($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "") || ($trataspersonasDto->getFechaRegistro() != "") || ($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getcveTrasportacion() != "") {
            $sql.="cveTrasportacion='" . $trataspersonasDto->getcveTrasportacion() . "'";
            if (($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "") || ($trataspersonasDto->getFechaRegistro() != "") || ($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getidImpOfeDelSolicitud() != "") {
            $sql.="idImpOfeDelSolicitud='" . $trataspersonasDto->getidImpOfeDelSolicitud() . "'";
            if (($trataspersonasDto->getActivo() != "") || ($trataspersonasDto->getFechaRegistro() != "") || ($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getactivo() != "") {
            $sql.="activo='" . $trataspersonasDto->getactivo() . "'";
            if (($trataspersonasDto->getFechaRegistro() != "") || ($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $trataspersonasDto->getfechaRegistro() . "'";
            if (($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($trataspersonasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $trataspersonasDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE idTrataPersona='" . $trataspersonasDto->getidTrataPersona() . "'";
        $this->_proveedor->execute($sql);
        
        if (!$this->_proveedor->error()) {
            $tmp = new TrataspersonasDTO();
            $tmp->setidTrataPersona($trataspersonasDto->getidTrataPersona());
            $tmp = $this->selectTrataspersonas($tmp, "", $this->_proveedor);
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

    public function deleteTrataspersonas($trataspersonasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbltrataspersonas  WHERE idTrataPersona='" . $trataspersonasDto->getidTrataPersona() . "'";
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

    public function selectTrataspersonas($trataspersonasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idTrataPersona,cveEstadoDestino,cveMunicipioDestino,cvePaisDestino,estadoDestino,municipioDestino,cveEstadoOrigen,cveMunicipioOrigen,cvePaisOrigen,estadoOrigen,municipioOrigen,cveTipoTrata,cveTrasportacion,idImpOfeDelSolicitud,activo,fechaRegistro,fechaActualizacion FROM tbltrataspersonas ";
        if (($trataspersonasDto->getidTrataPersona() != "") || ($trataspersonasDto->getcveEstadoDestino() != "") || ($trataspersonasDto->getcveMunicipioDestino() != "") || ($trataspersonasDto->getcvePaisDestino() != "") || ($trataspersonasDto->getestadoDestino() != "") || ($trataspersonasDto->getmunicipioDestino() != "") || ($trataspersonasDto->getcveEstadoOrigen() != "") || ($trataspersonasDto->getcveMunicipioOrigen() != "") || ($trataspersonasDto->getcvePaisOrigen() != "") || ($trataspersonasDto->getestadoOrigen() != "") || ($trataspersonasDto->getmunicipioOrigen() != "") || ($trataspersonasDto->getcveTipoTrata() != "") || ($trataspersonasDto->getcveTrasportacion() != "") || ($trataspersonasDto->getidImpOfeDelSolicitud() != "") || ($trataspersonasDto->getactivo() != "") || ($trataspersonasDto->getfechaRegistro() != "") || ($trataspersonasDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($trataspersonasDto->getidTrataPersona() != "") {
            $sql.="idTrataPersona='" . $trataspersonasDto->getIdTrataPersona() . "'";
            if (($trataspersonasDto->getCveEstadoDestino() != "") || ($trataspersonasDto->getCveMunicipioDestino() != "") || ($trataspersonasDto->getCvePaisDestino() != "") || ($trataspersonasDto->getEstadoDestino() != "") || ($trataspersonasDto->getMunicipioDestino() != "") || ($trataspersonasDto->getCveEstadoOrigen() != "") || ($trataspersonasDto->getCveMunicipioOrigen() != "") || ($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "") || ($trataspersonasDto->getFechaRegistro() != "") || ($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonasDto->getcveEstadoDestino() != "") {
            $sql.="cveEstadoDestino='" . $trataspersonasDto->getCveEstadoDestino() . "'";
            if (($trataspersonasDto->getCveMunicipioDestino() != "") || ($trataspersonasDto->getCvePaisDestino() != "") || ($trataspersonasDto->getEstadoDestino() != "") || ($trataspersonasDto->getMunicipioDestino() != "") || ($trataspersonasDto->getCveEstadoOrigen() != "") || ($trataspersonasDto->getCveMunicipioOrigen() != "") || ($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "") || ($trataspersonasDto->getFechaRegistro() != "") || ($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonasDto->getcveMunicipioDestino() != "") {
            $sql.="cveMunicipioDestino='" . $trataspersonasDto->getCveMunicipioDestino() . "'";
            if (($trataspersonasDto->getCvePaisDestino() != "") || ($trataspersonasDto->getEstadoDestino() != "") || ($trataspersonasDto->getMunicipioDestino() != "") || ($trataspersonasDto->getCveEstadoOrigen() != "") || ($trataspersonasDto->getCveMunicipioOrigen() != "") || ($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "") || ($trataspersonasDto->getFechaRegistro() != "") || ($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonasDto->getcvePaisDestino() != "") {
            $sql.="cvePaisDestino='" . $trataspersonasDto->getCvePaisDestino() . "'";
            if (($trataspersonasDto->getEstadoDestino() != "") || ($trataspersonasDto->getMunicipioDestino() != "") || ($trataspersonasDto->getCveEstadoOrigen() != "") || ($trataspersonasDto->getCveMunicipioOrigen() != "") || ($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "") || ($trataspersonasDto->getFechaRegistro() != "") || ($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonasDto->getestadoDestino() != "") {
            $sql.="estadoDestino='" . $trataspersonasDto->getEstadoDestino() . "'";
            if (($trataspersonasDto->getMunicipioDestino() != "") || ($trataspersonasDto->getCveEstadoOrigen() != "") || ($trataspersonasDto->getCveMunicipioOrigen() != "") || ($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "") || ($trataspersonasDto->getFechaRegistro() != "") || ($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonasDto->getmunicipioDestino() != "") {
            $sql.="municipioDestino='" . $trataspersonasDto->getMunicipioDestino() . "'";
            if (($trataspersonasDto->getCveEstadoOrigen() != "") || ($trataspersonasDto->getCveMunicipioOrigen() != "") || ($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "") || ($trataspersonasDto->getFechaRegistro() != "") || ($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonasDto->getcveEstadoOrigen() != "") {
            $sql.="cveEstadoOrigen='" . $trataspersonasDto->getCveEstadoOrigen() . "'";
            if (($trataspersonasDto->getCveMunicipioOrigen() != "") || ($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "") || ($trataspersonasDto->getFechaRegistro() != "") || ($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonasDto->getcveMunicipioOrigen() != "") {
            $sql.="cveMunicipioOrigen='" . $trataspersonasDto->getCveMunicipioOrigen() . "'";
            if (($trataspersonasDto->getCvePaisOrigen() != "") || ($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "") || ($trataspersonasDto->getFechaRegistro() != "") || ($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonasDto->getcvePaisOrigen() != "") {
            $sql.="cvePaisOrigen='" . $trataspersonasDto->getCvePaisOrigen() . "'";
            if (($trataspersonasDto->getEstadoOrigen() != "") || ($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "") || ($trataspersonasDto->getFechaRegistro() != "") || ($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonasDto->getestadoOrigen() != "") {
            $sql.="estadoOrigen='" . $trataspersonasDto->getEstadoOrigen() . "'";
            if (($trataspersonasDto->getMunicipioOrigen() != "") || ($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "") || ($trataspersonasDto->getFechaRegistro() != "") || ($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonasDto->getmunicipioOrigen() != "") {
            $sql.="municipioOrigen='" . $trataspersonasDto->getMunicipioOrigen() . "'";
            if (($trataspersonasDto->getCveTipoTrata() != "") || ($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "") || ($trataspersonasDto->getFechaRegistro() != "") || ($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonasDto->getcveTipoTrata() != "") {
            $sql.="cveTipoTrata='" . $trataspersonasDto->getCveTipoTrata() . "'";
            if (($trataspersonasDto->getCveTrasportacion() != "") || ($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "") || ($trataspersonasDto->getFechaRegistro() != "") || ($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonasDto->getcveTrasportacion() != "") {
            $sql.="cveTrasportacion='" . $trataspersonasDto->getCveTrasportacion() . "'";
            if (($trataspersonasDto->getIdImpOfeDelSolicitud() != "") || ($trataspersonasDto->getActivo() != "") || ($trataspersonasDto->getFechaRegistro() != "") || ($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonasDto->getidImpOfeDelSolicitud() != "") {
            $sql.="idImpOfeDelSolicitud='" . $trataspersonasDto->getIdImpOfeDelSolicitud() . "'";
            if (($trataspersonasDto->getActivo() != "") || ($trataspersonasDto->getFechaRegistro() != "") || ($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonasDto->getactivo() != "") {
            $sql.="activo='" . $trataspersonasDto->getActivo() . "'";
            if (($trataspersonasDto->getFechaRegistro() != "") || ($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $trataspersonasDto->getFechaRegistro() . "'";
            if (($trataspersonasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($trataspersonasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $trataspersonasDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new TrataspersonasDTO();
                    $tmp[$contador]->setIdTrataPersona($row["idTrataPersona"]);
                    $tmp[$contador]->setCveEstadoDestino($row["cveEstadoDestino"]);
                    $tmp[$contador]->setCveMunicipioDestino($row["cveMunicipioDestino"]);
                    $tmp[$contador]->setCvePaisDestino($row["cvePaisDestino"]);
                    $tmp[$contador]->setEstadoDestino($row["estadoDestino"]);
                    $tmp[$contador]->setMunicipioDestino($row["municipioDestino"]);
                    $tmp[$contador]->setCveEstadoOrigen($row["cveEstadoOrigen"]);
                    $tmp[$contador]->setCveMunicipioOrigen($row["cveMunicipioOrigen"]);
                    $tmp[$contador]->setCvePaisOrigen($row["cvePaisOrigen"]);
                    $tmp[$contador]->setEstadoOrigen($row["estadoOrigen"]);
                    $tmp[$contador]->setMunicipioOrigen($row["municipioOrigen"]);
                    $tmp[$contador]->setCveTipoTrata($row["cveTipoTrata"]);
                    $tmp[$contador]->setCveTrasportacion($row["cveTrasportacion"]);
                    $tmp[$contador]->setIdImpOfeDelSolicitud($row["idImpOfeDelSolicitud"]);
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