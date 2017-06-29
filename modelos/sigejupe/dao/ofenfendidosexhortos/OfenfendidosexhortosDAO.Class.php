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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/ofenfendidosexhortos/OfenfendidosexhortosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class OfenfendidosexhortosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertOfenfendidosexhortos($ofenfendidosexhortosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblofenfendidosexhortos(";
        if ($ofenfendidosexhortosDto->getidOfenfendidoExhorto() != "") {
            $sql.="idOfenfendidoExhorto";
            if (($ofenfendidosexhortosDto->getIdExhorto() != "") || ($ofenfendidosexhortosDto->getPaterno() != "") || ($ofenfendidosexhortosDto->getMaterno() != "") || ($ofenfendidosexhortosDto->getNombre() != "") || ($ofenfendidosexhortosDto->getDomicilio() != "") || ($ofenfendidosexhortosDto->getTelefono() != "") || ($ofenfendidosexhortosDto->getCveTipoPersona() != "") || ($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getidExhorto() != "") {
            $sql.="idExhorto";
            if (($ofenfendidosexhortosDto->getPaterno() != "") || ($ofenfendidosexhortosDto->getMaterno() != "") || ($ofenfendidosexhortosDto->getNombre() != "") || ($ofenfendidosexhortosDto->getDomicilio() != "") || ($ofenfendidosexhortosDto->getTelefono() != "") || ($ofenfendidosexhortosDto->getCveTipoPersona() != "") || ($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getpaterno() != "") {
            $sql.="paterno";
            if (($ofenfendidosexhortosDto->getMaterno() != "") || ($ofenfendidosexhortosDto->getNombre() != "") || ($ofenfendidosexhortosDto->getDomicilio() != "") || ($ofenfendidosexhortosDto->getTelefono() != "") || ($ofenfendidosexhortosDto->getCveTipoPersona() != "") || ($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getmaterno() != "") {
            $sql.="materno";
            if (($ofenfendidosexhortosDto->getNombre() != "") || ($ofenfendidosexhortosDto->getDomicilio() != "") || ($ofenfendidosexhortosDto->getTelefono() != "") || ($ofenfendidosexhortosDto->getCveTipoPersona() != "") || ($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getnombre() != "") {
            $sql.="nombre";
            if (($ofenfendidosexhortosDto->getDomicilio() != "") || ($ofenfendidosexhortosDto->getTelefono() != "") || ($ofenfendidosexhortosDto->getCveTipoPersona() != "") || ($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getdomicilio() != "") {
            $sql.="domicilio";
            if (($ofenfendidosexhortosDto->getTelefono() != "") || ($ofenfendidosexhortosDto->getCveTipoPersona() != "") || ($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->gettelefono() != "") {
            $sql.="telefono";
            if (($ofenfendidosexhortosDto->getCveTipoPersona() != "") || ($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getcveTipoPersona() != "") {
            $sql.="cveTipoPersona";
            if (($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getnombreMoral() != "") {
            $sql.="nombreMoral";
            if (($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getactivo() != "") {
            $sql.="activo";
            if (($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getcveEstado() != "") {
            $sql.="cveEstado";
            if (($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getcveMunicipio() != "") {
            $sql.="cveMunicipio";
            if (($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getcveGenero() != "") {
            $sql.="cveGenero";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($ofenfendidosexhortosDto->getidOfenfendidoExhorto() != "") {
            $sql.="'" . $ofenfendidosexhortosDto->getidOfenfendidoExhorto() . "'";
            if (($ofenfendidosexhortosDto->getIdExhorto() != "") || ($ofenfendidosexhortosDto->getPaterno() != "") || ($ofenfendidosexhortosDto->getMaterno() != "") || ($ofenfendidosexhortosDto->getNombre() != "") || ($ofenfendidosexhortosDto->getDomicilio() != "") || ($ofenfendidosexhortosDto->getTelefono() != "") || ($ofenfendidosexhortosDto->getCveTipoPersona() != "") || ($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getidExhorto() != "") {
            $sql.="'" . $ofenfendidosexhortosDto->getidExhorto() . "'";
            if (($ofenfendidosexhortosDto->getPaterno() != "") || ($ofenfendidosexhortosDto->getMaterno() != "") || ($ofenfendidosexhortosDto->getNombre() != "") || ($ofenfendidosexhortosDto->getDomicilio() != "") || ($ofenfendidosexhortosDto->getTelefono() != "") || ($ofenfendidosexhortosDto->getCveTipoPersona() != "") || ($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getpaterno() != "") {
            $sql.="'" . $ofenfendidosexhortosDto->getpaterno() . "'";
            if (($ofenfendidosexhortosDto->getMaterno() != "") || ($ofenfendidosexhortosDto->getNombre() != "") || ($ofenfendidosexhortosDto->getDomicilio() != "") || ($ofenfendidosexhortosDto->getTelefono() != "") || ($ofenfendidosexhortosDto->getCveTipoPersona() != "") || ($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getmaterno() != "") {
            $sql.="'" . $ofenfendidosexhortosDto->getmaterno() . "'";
            if (($ofenfendidosexhortosDto->getNombre() != "") || ($ofenfendidosexhortosDto->getDomicilio() != "") || ($ofenfendidosexhortosDto->getTelefono() != "") || ($ofenfendidosexhortosDto->getCveTipoPersona() != "") || ($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getnombre() != "") {
            $sql.="'" . $ofenfendidosexhortosDto->getnombre() . "'";
            if (($ofenfendidosexhortosDto->getDomicilio() != "") || ($ofenfendidosexhortosDto->getTelefono() != "") || ($ofenfendidosexhortosDto->getCveTipoPersona() != "") || ($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getdomicilio() != "") {
            $sql.="'" . $ofenfendidosexhortosDto->getdomicilio() . "'";
            if (($ofenfendidosexhortosDto->getTelefono() != "") || ($ofenfendidosexhortosDto->getCveTipoPersona() != "") || ($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->gettelefono() != "") {
            $sql.="'" . $ofenfendidosexhortosDto->gettelefono() . "'";
            if (($ofenfendidosexhortosDto->getCveTipoPersona() != "") || ($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getcveTipoPersona() != "") {
            $sql.="'" . $ofenfendidosexhortosDto->getcveTipoPersona() . "'";
            if (($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getnombreMoral() != "") {
            $sql.="'" . $ofenfendidosexhortosDto->getnombreMoral() . "'";
            if (($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getactivo() != "") {
            $sql.="'" . $ofenfendidosexhortosDto->getactivo() . "'";
            if (($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getcveEstado() != "") {
            $sql.="'" . $ofenfendidosexhortosDto->getcveEstado() . "'";
            if (($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getcveMunicipio() != "") {
            $sql.="'" . $ofenfendidosexhortosDto->getcveMunicipio() . "'";
            if (($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
//        if ($ofenfendidosexhortosDto->getfechaRegistro() != "") {
//            if (($ofenfendidosexhortosDto->getCveGenero() != "")) {
//                $sql.=",";
//            }
//        }
//        if ($ofenfendidosexhortosDto->getfechaActualizacion() != "") {
//            if (($ofenfendidosexhortosDto->getCveGenero() != "")) {
//                $sql.=",";
//            }
//        }
        if ($ofenfendidosexhortosDto->getcveGenero() != "") {
            $sql.="'" . $ofenfendidosexhortosDto->getcveGenero() . "'";
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
//        print_r($sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new OfenfendidosexhortosDTO();
            $tmp->setidOfenfendidoExhorto($this->_proveedor->lastID());
            $tmp = $this->selectOfenfendidosexhortos($tmp, "", $this->_proveedor);
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

    public function updateOfenfendidosexhortos($ofenfendidosexhortosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblofenfendidosexhortos SET ";
        if ($ofenfendidosexhortosDto->getidOfenfendidoExhorto() != "") {
            $sql.="idOfenfendidoExhorto='" . $ofenfendidosexhortosDto->getidOfenfendidoExhorto() . "'";
            if (($ofenfendidosexhortosDto->getIdExhorto() != "") || ($ofenfendidosexhortosDto->getPaterno() != "") || ($ofenfendidosexhortosDto->getMaterno() != "") || ($ofenfendidosexhortosDto->getNombre() != "") || ($ofenfendidosexhortosDto->getDomicilio() != "") || ($ofenfendidosexhortosDto->getTelefono() != "") || ($ofenfendidosexhortosDto->getCveTipoPersona() != "") || ($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getFechaRegistro() != "") || ($ofenfendidosexhortosDto->getFechaActualizacion() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getidExhorto() != "") {
            $sql.="idExhorto='" . $ofenfendidosexhortosDto->getidExhorto() . "'";
            if (($ofenfendidosexhortosDto->getPaterno() != "") || ($ofenfendidosexhortosDto->getMaterno() != "") || ($ofenfendidosexhortosDto->getNombre() != "") || ($ofenfendidosexhortosDto->getDomicilio() != "") || ($ofenfendidosexhortosDto->getTelefono() != "") || ($ofenfendidosexhortosDto->getCveTipoPersona() != "") || ($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getFechaRegistro() != "") || ($ofenfendidosexhortosDto->getFechaActualizacion() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getpaterno() != "") {
            $sql.="paterno='" . $ofenfendidosexhortosDto->getpaterno() . "'";
            if (($ofenfendidosexhortosDto->getMaterno() != "") || ($ofenfendidosexhortosDto->getNombre() != "") || ($ofenfendidosexhortosDto->getDomicilio() != "") || ($ofenfendidosexhortosDto->getTelefono() != "") || ($ofenfendidosexhortosDto->getCveTipoPersona() != "") || ($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getFechaRegistro() != "") || ($ofenfendidosexhortosDto->getFechaActualizacion() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getmaterno() != "") {
            $sql.="materno='" . $ofenfendidosexhortosDto->getmaterno() . "'";
            if (($ofenfendidosexhortosDto->getNombre() != "") || ($ofenfendidosexhortosDto->getDomicilio() != "") || ($ofenfendidosexhortosDto->getTelefono() != "") || ($ofenfendidosexhortosDto->getCveTipoPersona() != "") || ($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getFechaRegistro() != "") || ($ofenfendidosexhortosDto->getFechaActualizacion() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getnombre() != "") {
            $sql.="nombre='" . $ofenfendidosexhortosDto->getnombre() . "'";
            if (($ofenfendidosexhortosDto->getDomicilio() != "") || ($ofenfendidosexhortosDto->getTelefono() != "") || ($ofenfendidosexhortosDto->getCveTipoPersona() != "") || ($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getFechaRegistro() != "") || ($ofenfendidosexhortosDto->getFechaActualizacion() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getdomicilio() != "") {
            $sql.="domicilio='" . $ofenfendidosexhortosDto->getdomicilio() . "'";
            if (($ofenfendidosexhortosDto->getTelefono() != "") || ($ofenfendidosexhortosDto->getCveTipoPersona() != "") || ($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getFechaRegistro() != "") || ($ofenfendidosexhortosDto->getFechaActualizacion() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->gettelefono() != "") {
            $sql.="telefono='" . $ofenfendidosexhortosDto->gettelefono() . "'";
            if (($ofenfendidosexhortosDto->getCveTipoPersona() != "") || ($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getFechaRegistro() != "") || ($ofenfendidosexhortosDto->getFechaActualizacion() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getcveTipoPersona() != "") {
            $sql.="cveTipoPersona='" . $ofenfendidosexhortosDto->getcveTipoPersona() . "'";
            if (($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getFechaRegistro() != "") || ($ofenfendidosexhortosDto->getFechaActualizacion() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getnombreMoral() != "") {
            $sql.="nombreMoral='" . $ofenfendidosexhortosDto->getnombreMoral() . "'";
            if (($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getFechaRegistro() != "") || ($ofenfendidosexhortosDto->getFechaActualizacion() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getactivo() != "") {
            $sql.="activo='" . $ofenfendidosexhortosDto->getactivo() . "'";
            if (($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getFechaRegistro() != "") || ($ofenfendidosexhortosDto->getFechaActualizacion() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getcveEstado() != "") {
            $sql.="cveEstado='" . $ofenfendidosexhortosDto->getcveEstado() . "'";
            if (($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getFechaRegistro() != "") || ($ofenfendidosexhortosDto->getFechaActualizacion() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getcveMunicipio() != "") {
            $sql.="cveMunicipio='" . $ofenfendidosexhortosDto->getcveMunicipio() . "'";
            if (($ofenfendidosexhortosDto->getFechaRegistro() != "") || ($ofenfendidosexhortosDto->getFechaActualizacion() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $ofenfendidosexhortosDto->getfechaRegistro() . "'";
            if (($ofenfendidosexhortosDto->getFechaActualizacion() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $ofenfendidosexhortosDto->getfechaActualizacion() . "'";
            if (($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($ofenfendidosexhortosDto->getcveGenero() != "") {
            $sql.="cveGenero='" . $ofenfendidosexhortosDto->getcveGenero() . "'";
        }
        $sql.=" WHERE idOfenfendidoExhorto='" . $ofenfendidosexhortosDto->getidOfenfendidoExhorto() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new OfenfendidosexhortosDTO();
            $tmp->setidOfenfendidoExhorto($ofenfendidosexhortosDto->getidOfenfendidoExhorto());
            $tmp = $this->selectOfenfendidosexhortos($tmp, "", $this->_proveedor);
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

    public function deleteOfenfendidosexhortos($ofenfendidosexhortosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblofenfendidosexhortos  WHERE idOfenfendidoExhorto='" . $ofenfendidosexhortosDto->getidOfenfendidoExhorto() . "'";
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

    public function selectOfenfendidosexhortos($ofenfendidosexhortosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idOfenfendidoExhorto,idExhorto,paterno,materno,nombre,domicilio,telefono,cveTipoPersona,nombreMoral,activo,cveEstado,cveMunicipio,fechaRegistro,fechaActualizacion,cveGenero FROM tblofenfendidosexhortos ";
        if (($ofenfendidosexhortosDto->getidOfenfendidoExhorto() != "") || ($ofenfendidosexhortosDto->getidExhorto() != "") || ($ofenfendidosexhortosDto->getpaterno() != "") || ($ofenfendidosexhortosDto->getmaterno() != "") || ($ofenfendidosexhortosDto->getnombre() != "") || ($ofenfendidosexhortosDto->getdomicilio() != "") || ($ofenfendidosexhortosDto->gettelefono() != "") || ($ofenfendidosexhortosDto->getcveTipoPersona() != "") || ($ofenfendidosexhortosDto->getnombreMoral() != "") || ($ofenfendidosexhortosDto->getactivo() != "") || ($ofenfendidosexhortosDto->getcveEstado() != "") || ($ofenfendidosexhortosDto->getcveMunicipio() != "") || ($ofenfendidosexhortosDto->getfechaRegistro() != "") || ($ofenfendidosexhortosDto->getfechaActualizacion() != "") || ($ofenfendidosexhortosDto->getcveGenero() != "")) {
            $sql.=" WHERE ";
        }
        if ($ofenfendidosexhortosDto->getidOfenfendidoExhorto() != "") {
            $sql.="idOfenfendidoExhorto='" . $ofenfendidosexhortosDto->getIdOfenfendidoExhorto() . "'";
            if (($ofenfendidosexhortosDto->getIdExhorto() != "") || ($ofenfendidosexhortosDto->getPaterno() != "") || ($ofenfendidosexhortosDto->getMaterno() != "") || ($ofenfendidosexhortosDto->getNombre() != "") || ($ofenfendidosexhortosDto->getDomicilio() != "") || ($ofenfendidosexhortosDto->getTelefono() != "") || ($ofenfendidosexhortosDto->getCveTipoPersona() != "") || ($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getFechaRegistro() != "") || ($ofenfendidosexhortosDto->getFechaActualizacion() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofenfendidosexhortosDto->getidExhorto() != "") {
            $sql.="idExhorto='" . $ofenfendidosexhortosDto->getIdExhorto() . "'";
            if (($ofenfendidosexhortosDto->getPaterno() != "") || ($ofenfendidosexhortosDto->getMaterno() != "") || ($ofenfendidosexhortosDto->getNombre() != "") || ($ofenfendidosexhortosDto->getDomicilio() != "") || ($ofenfendidosexhortosDto->getTelefono() != "") || ($ofenfendidosexhortosDto->getCveTipoPersona() != "") || ($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getFechaRegistro() != "") || ($ofenfendidosexhortosDto->getFechaActualizacion() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofenfendidosexhortosDto->getpaterno() != "") {
            $sql.="paterno='" . $ofenfendidosexhortosDto->getPaterno() . "'";
            if (($ofenfendidosexhortosDto->getMaterno() != "") || ($ofenfendidosexhortosDto->getNombre() != "") || ($ofenfendidosexhortosDto->getDomicilio() != "") || ($ofenfendidosexhortosDto->getTelefono() != "") || ($ofenfendidosexhortosDto->getCveTipoPersona() != "") || ($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getFechaRegistro() != "") || ($ofenfendidosexhortosDto->getFechaActualizacion() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofenfendidosexhortosDto->getmaterno() != "") {
            $sql.="materno='" . $ofenfendidosexhortosDto->getMaterno() . "'";
            if (($ofenfendidosexhortosDto->getNombre() != "") || ($ofenfendidosexhortosDto->getDomicilio() != "") || ($ofenfendidosexhortosDto->getTelefono() != "") || ($ofenfendidosexhortosDto->getCveTipoPersona() != "") || ($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getFechaRegistro() != "") || ($ofenfendidosexhortosDto->getFechaActualizacion() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofenfendidosexhortosDto->getnombre() != "") {
            $sql.="nombre='" . $ofenfendidosexhortosDto->getNombre() . "'";
            if (($ofenfendidosexhortosDto->getDomicilio() != "") || ($ofenfendidosexhortosDto->getTelefono() != "") || ($ofenfendidosexhortosDto->getCveTipoPersona() != "") || ($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getFechaRegistro() != "") || ($ofenfendidosexhortosDto->getFechaActualizacion() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofenfendidosexhortosDto->getdomicilio() != "") {
            $sql.="domicilio='" . $ofenfendidosexhortosDto->getDomicilio() . "'";
            if (($ofenfendidosexhortosDto->getTelefono() != "") || ($ofenfendidosexhortosDto->getCveTipoPersona() != "") || ($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getFechaRegistro() != "") || ($ofenfendidosexhortosDto->getFechaActualizacion() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofenfendidosexhortosDto->gettelefono() != "") {
            $sql.="telefono='" . $ofenfendidosexhortosDto->getTelefono() . "'";
            if (($ofenfendidosexhortosDto->getCveTipoPersona() != "") || ($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getFechaRegistro() != "") || ($ofenfendidosexhortosDto->getFechaActualizacion() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofenfendidosexhortosDto->getcveTipoPersona() != "") {
            $sql.="cveTipoPersona='" . $ofenfendidosexhortosDto->getCveTipoPersona() . "'";
            if (($ofenfendidosexhortosDto->getNombreMoral() != "") || ($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getFechaRegistro() != "") || ($ofenfendidosexhortosDto->getFechaActualizacion() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofenfendidosexhortosDto->getnombreMoral() != "") {
            $sql.="nombreMoral='" . $ofenfendidosexhortosDto->getNombreMoral() . "'";
            if (($ofenfendidosexhortosDto->getActivo() != "") || ($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getFechaRegistro() != "") || ($ofenfendidosexhortosDto->getFechaActualizacion() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofenfendidosexhortosDto->getactivo() != "") {
            $sql.="activo='" . $ofenfendidosexhortosDto->getActivo() . "'";
            if (($ofenfendidosexhortosDto->getCveEstado() != "") || ($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getFechaRegistro() != "") || ($ofenfendidosexhortosDto->getFechaActualizacion() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofenfendidosexhortosDto->getcveEstado() != "") {
            $sql.="cveEstado='" . $ofenfendidosexhortosDto->getCveEstado() . "'";
            if (($ofenfendidosexhortosDto->getCveMunicipio() != "") || ($ofenfendidosexhortosDto->getFechaRegistro() != "") || ($ofenfendidosexhortosDto->getFechaActualizacion() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofenfendidosexhortosDto->getcveMunicipio() != "") {
            $sql.="cveMunicipio='" . $ofenfendidosexhortosDto->getCveMunicipio() . "'";
            if (($ofenfendidosexhortosDto->getFechaRegistro() != "") || ($ofenfendidosexhortosDto->getFechaActualizacion() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofenfendidosexhortosDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $ofenfendidosexhortosDto->getFechaRegistro() . "'";
            if (($ofenfendidosexhortosDto->getFechaActualizacion() != "") || ($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofenfendidosexhortosDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $ofenfendidosexhortosDto->getFechaActualizacion() . "'";
            if (($ofenfendidosexhortosDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ofenfendidosexhortosDto->getcveGenero() != "") {
            $sql.="cveGenero='" . $ofenfendidosexhortosDto->getCveGenero() . "'";
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
                    $tmp[$contador] = new OfenfendidosexhortosDTO();
                    $tmp[$contador]->setIdOfenfendidoExhorto($row["idOfenfendidoExhorto"]);
                    $tmp[$contador]->setIdExhorto($row["idExhorto"]);
                    $tmp[$contador]->setPaterno($row["paterno"]);
                    $tmp[$contador]->setMaterno($row["materno"]);
                    $tmp[$contador]->setNombre($row["nombre"]);
                    $tmp[$contador]->setDomicilio($row["domicilio"]);
                    $tmp[$contador]->setTelefono($row["telefono"]);
                    $tmp[$contador]->setCveTipoPersona($row["cveTipoPersona"]);
                    $tmp[$contador]->setNombreMoral($row["nombreMoral"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setCveEstado($row["cveEstado"]);
                    $tmp[$contador]->setCveMunicipio($row["cveMunicipio"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setCveGenero($row["cveGenero"]);
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