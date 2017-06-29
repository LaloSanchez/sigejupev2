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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/quejosos/QuejososDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class QuejososDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertQuejosos($quejososDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblquejosos(";
        if ($quejososDto->getIdQuejoso() != "") {
            $sql.="idQuejoso";
            if (($quejososDto->getIdAmparo() != "") || ($quejososDto->getIdImputadoCarpeta() != "") || ($quejososDto->getIdOfendidoCarpeta() != "") || ($quejososDto->getPaternoQ() != "") || ($quejososDto->getMaternoQ() != "") || ($quejososDto->getNombreQ() != "") || ($quejososDto->getNombreMoral() != "") || ($quejososDto->getDomicilio() != "") || ($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getIdAmparo() != "") {
            $sql.="idAmparo";
            if (($quejososDto->getIdImputadoCarpeta() != "") || ($quejososDto->getIdOfendidoCarpeta() != "") || ($quejososDto->getPaternoQ() != "") || ($quejososDto->getMaternoQ() != "") || ($quejososDto->getNombreQ() != "") || ($quejososDto->getNombreMoral() != "") || ($quejososDto->getDomicilio() != "") || ($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getIdImputadoCarpeta() != "") {
            $sql.="IdImputadoCarpeta";
            if (($quejososDto->getIdOfendidoCarpeta() != "") || ($quejososDto->getPaternoQ() != "") || ($quejososDto->getMaternoQ() != "") || ($quejososDto->getNombreQ() != "") || ($quejososDto->getNombreMoral() != "") || ($quejososDto->getDomicilio() != "") || ($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getIdOfendidoCarpeta() != "") {
            $sql.="IdOfendidoCarpeta";
            if (($quejososDto->getPaternoQ() != "") || ($quejososDto->getMaternoQ() != "") || ($quejososDto->getNombreQ() != "") || ($quejososDto->getNombreMoral() != "") || ($quejososDto->getDomicilio() != "") || ($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getPaternoQ() != "") {
            $sql.="paternoQ";
            if (($quejososDto->getMaternoQ() != "") || ($quejososDto->getNombreQ() != "") || ($quejososDto->getNombreMoral() != "") || ($quejososDto->getDomicilio() != "") || ($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getMaternoQ() != "") {
            $sql.="maternoQ";
            if (($quejososDto->getNombreQ() != "") || ($quejososDto->getNombreMoral() != "") || ($quejososDto->getDomicilio() != "") || ($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getNombreQ() != "") {
            $sql.="nombreQ";
            if (($quejososDto->getNombreMoral() != "") || ($quejososDto->getDomicilio() != "") || ($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getNombreMoral() != "") {
            $sql.="NombreMoral";
            if (($quejososDto->getDomicilio() != "") || ($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getDomicilio() != "") {
            $sql.="domicilio";
            if (($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getCveTipoPersona() != "") {
            $sql.="cveTipoPersona";
            if (($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getEmail() != "") {
            $sql.="email";
            if (($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getCveMunicipio() != "") {
            $sql.="cveMunicipio";
            if (($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getCveGenero() != "") {
            $sql.="cveGenero";
            if (($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getActivo() != "") {
            $sql.="activo";
        }
        $sql.=") VALUES(";
        if ($quejososDto->getIdQuejoso() != "") {
            $sql.="'" . $quejososDto->getIdQuejoso() . "'";
            if (($quejososDto->getIdAmparo() != "") || ($quejososDto->getIdImputadoCarpeta() != "") || ($quejososDto->getIdOfendidoCarpeta() != "") ||  ($quejososDto->getPaternoQ() != "") || ($quejososDto->getMaternoQ() != "") || ($quejososDto->getNombreQ() != "") || ($quejososDto->getNombreMoral() != "") || ($quejososDto->getDomicilio() != "") || ($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getIdAmparo() != "") {
            $sql.="'" . $quejososDto->getIdAmparo() . "'";
            if (($quejososDto->getIdImputadoCarpeta() != "") || ($quejososDto->getIdOfendidoCarpeta() != "") ||($quejososDto->getPaternoQ() != "") || ($quejososDto->getMaternoQ() != "") || ($quejososDto->getNombreQ() != "") || ($quejososDto->getNombreMoral() != "") || ($quejososDto->getDomicilio() != "") || ($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getIdImputadoCarpeta() != "") {
            $sql.="'" . $quejososDto->getIdImputadoCarpeta() . "'";
            if (($quejososDto->getIdOfendidoCarpeta() != "") || ($quejososDto->getPaternoQ() != "") || ($quejososDto->getMaternoQ() != "") || ($quejososDto->getNombreQ() != "") || ($quejososDto->getNombreMoral() != "") || ($quejososDto->getDomicilio() != "") || ($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getIdOfendidoCarpeta() != "") {
            $sql.="'" . $quejososDto->getIdOfendidoCarpeta() . "'";
            if (($quejososDto->getPaternoQ() != "") || ($quejososDto->getMaternoQ() != "") || ($quejososDto->getNombreQ() != "") || ($quejososDto->getNombreMoral() != "") || ($quejososDto->getDomicilio() != "") || ($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }        
        if ($quejososDto->getPaternoQ() != "") {
            $sql.="'" . $quejososDto->getPaternoQ() . "'";
            if (($quejososDto->getMaternoQ() != "") || ($quejososDto->getNombreQ() != "") || ($quejososDto->getNombreMoral() != "") || ($quejososDto->getDomicilio() != "") || ($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getMaternoQ() != "") {
            $sql.="'" . $quejososDto->getMaternoQ() . "'";
            if (($quejososDto->getNombreQ() != "") || ($quejososDto->getNombreMoral() != "") || ($quejososDto->getDomicilio() != "") || ($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getNombreQ() != "") {
            $sql.="'" . $quejososDto->getNombreQ() . "'";
            if (($quejososDto->getNombreMoral() != "") || ($quejososDto->getDomicilio() != "") || ($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getNombreMoral() != "") {
            $sql.="'" . $quejososDto->getNombreMoral() . "'";
            if (($quejososDto->getDomicilio() != "") || ($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getDomicilio() != "") {
            $sql.="'" . $quejososDto->getDomicilio() . "'";
            if (($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getCveTipoPersona() != "") {
            $sql.="'" . $quejososDto->getCveTipoPersona() . "'";
            if (($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getEmail() != "") {
            $sql.="'" . $quejososDto->getEmail() . "'";
            if (($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getCveMunicipio() != "") {
            $sql.="'" . $quejososDto->getCveMunicipio() . "'";
            if (($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getCveGenero() != "") {
            $sql.="'" . $quejososDto->getCveGenero() . "'";
            if (($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getActivo() != "") {
            $sql.="'" . $quejososDto->getActivo() . "'";
        }
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new QuejososDTO();
            $tmp->setidQuejoso($this->_proveedor->lastID());
            $tmp = $this->selectQuejosos($tmp, "", $this->_proveedor);
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

    public function updateQuejosos($quejososDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblquejosos SET ";
        if ($quejososDto->getIdQuejoso() != "") {
            $sql.="idQuejoso='" . $quejososDto->getIdQuejoso() . "'";
            if (($quejososDto->getIdAmparo() != "") || ($quejososDto->getPaternoQ() != "") || ($quejososDto->getMaternoQ() != "") || ($quejososDto->getNombreQ() != "") || ($quejososDto->getNombreMoral() != "") || ($quejososDto->getDomicilio() != "") || ($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getIdAmparo() != "") {
            $sql.="idAmparo='" . $quejososDto->getIdAmparo() . "'";
            if (($quejososDto->getPaternoQ() != "") || ($quejososDto->getMaternoQ() != "") || ($quejososDto->getNombreQ() != "") || ($quejososDto->getNombreMoral() != "") || ($quejososDto->getDomicilio() != "") || ($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getPaternoQ() != "") {
            $sql.="paternoQ='" . $quejososDto->getPaternoQ() . "'";
            if (($quejososDto->getMaternoQ() != "") || ($quejososDto->getNombreQ() != "") || ($quejososDto->getNombreMoral() != "") || ($quejososDto->getDomicilio() != "") || ($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getMaternoQ() != "") {
            $sql.="maternoQ='" . $quejososDto->getMaternoQ() . "'";
            if (($quejososDto->getNombreQ() != "") || ($quejososDto->getNombreMoral() != "") || ($quejososDto->getDomicilio() != "") || ($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getNombreQ() != "") {
            $sql.="nombreQ='" . $quejososDto->getNombreQ() . "'";
            if (($quejososDto->getNombreMoral() != "") || ($quejososDto->getDomicilio() != "") || ($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getNombreMoral() != "") {
            $sql.="NombreMoral='" . $quejososDto->getNombreMoral() . "'";
            if (($quejososDto->getDomicilio() != "") || ($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getDomicilio() != "") {
            $sql.="domicilio='" . $quejososDto->getDomicilio() . "'";
            if (($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getCveTipoPersona() != "") {
            $sql.="cveTipoPersona='" . $quejososDto->getCveTipoPersona() . "'";
            if (($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getEmail() != "") {
            $sql.="email='" . $quejososDto->getEmail() . "'";
            if (($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getCveMunicipio() != "") {
            $sql.="cveMunicipio='" . $quejososDto->getCveMunicipio() . "'";
            if (($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getCveGenero() != "") {
            $sql.="cveGenero='" . $quejososDto->getCveGenero() . "'";
            if (($quejososDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($quejososDto->getActivo() != "") {
            $sql.="activo='" . $quejososDto->getActivo() . "'";
        }
        $sql.=" WHERE idQuejoso='" . $quejososDto->getIdQuejoso() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new QuejososDTO();
            $tmp->setidQuejoso($quejososDto->getIdQuejoso());
            $tmp = $this->selectQuejosos($tmp, "", $this->_proveedor);
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

    public function deleteQuejosos($quejososDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblquejosos  WHERE idQuejoso='" . $quejososDto->getIdQuejoso() . "'";
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

    public function selectQuejosos($quejososDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idQuejoso,idAmparo,paternoQ,maternoQ,nombreQ,NombreMoral,domicilio,cveTipoPersona,email,cveMunicipio,cveGenero,activo FROM tblquejosos ";
        if (($quejososDto->getIdQuejoso() != "") || ($quejososDto->getIdAmparo() != "") || ($quejososDto->getPaternoQ() != "") || ($quejososDto->getMaternoQ() != "") || ($quejososDto->getNombreQ() != "") || ($quejososDto->getNombreMoral() != "") || ($quejososDto->getDomicilio() != "") || ($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
            $sql.=" WHERE ";
        }
        if ($quejososDto->getIdQuejoso() != "") {
            $sql.="idQuejoso='" . $quejososDto->getIdQuejoso() . "'";
            if (($quejososDto->getIdAmparo() != "") || ($quejososDto->getPaternoQ() != "") || ($quejososDto->getMaternoQ() != "") || ($quejososDto->getNombreQ() != "") || ($quejososDto->getNombreMoral() != "") || ($quejososDto->getDomicilio() != "") || ($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($quejososDto->getIdAmparo() != "") {
            $sql.="idAmparo='" . $quejososDto->getIdAmparo() . "'";
            if (($quejososDto->getPaternoQ() != "") || ($quejososDto->getMaternoQ() != "") || ($quejososDto->getNombreQ() != "") || ($quejososDto->getNombreMoral() != "") || ($quejososDto->getDomicilio() != "") || ($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($quejososDto->getPaternoQ() != "") {
            $sql.="paternoQ='" . $quejososDto->getPaternoQ() . "'";
            if (($quejososDto->getMaternoQ() != "") || ($quejososDto->getNombreQ() != "") || ($quejososDto->getNombreMoral() != "") || ($quejososDto->getDomicilio() != "") || ($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($quejososDto->getMaternoQ() != "") {
            $sql.="maternoQ='" . $quejososDto->getMaternoQ() . "'";
            if (($quejososDto->getNombreQ() != "") || ($quejososDto->getNombreMoral() != "") || ($quejososDto->getDomicilio() != "") || ($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($quejososDto->getNombreQ() != "") {
            $sql.="nombreQ='" . $quejososDto->getNombreQ() . "'";
            if (($quejososDto->getNombreMoral() != "") || ($quejososDto->getDomicilio() != "") || ($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($quejososDto->getNombreMoral() != "") {
            $sql.="NombreMoral='" . $quejososDto->getNombreMoral() . "'";
            if (($quejososDto->getDomicilio() != "") || ($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($quejososDto->getDomicilio() != "") {
            $sql.="domicilio='" . $quejososDto->getDomicilio() . "'";
            if (($quejososDto->getCveTipoPersona() != "") || ($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($quejososDto->getCveTipoPersona() != "") {
            $sql.="cveTipoPersona='" . $quejososDto->getCveTipoPersona() . "'";
            if (($quejososDto->getEmail() != "") || ($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($quejososDto->getEmail() != "") {
            $sql.="email='" . $quejososDto->getEmail() . "'";
            if (($quejososDto->getCveMunicipio() != "") || ($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($quejososDto->getCveMunicipio() != "") {
            $sql.="cveMunicipio='" . $quejososDto->getCveMunicipio() . "'";
            if (($quejososDto->getCveGenero() != "") || ($quejososDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($quejososDto->getCveGenero() != "") {
            $sql.="cveGenero='" . $quejososDto->getCveGenero() . "'";
            if (($quejososDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($quejososDto->getActivo() != "") {
            $sql.="activo='" . $quejososDto->getActivo() . "'";
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
                    $tmp[$contador] = new QuejososDTO();
                    $tmp[$contador]->setIdQuejoso($row["idQuejoso"]);
                    $tmp[$contador]->setIdAmparo($row["idAmparo"]);
                    $tmp[$contador]->setPaternoQ($row["paternoQ"]);
                    $tmp[$contador]->setMaternoQ($row["maternoQ"]);
                    $tmp[$contador]->setNombreQ($row["nombreQ"]);
                    $tmp[$contador]->setNombreMoral($row["NombreMoral"]);
                    $tmp[$contador]->setDomicilio($row["domicilio"]);
                    $tmp[$contador]->setCveTipoPersona($row["cveTipoPersona"]);
                    $tmp[$contador]->setEmail($row["email"]);
                    $tmp[$contador]->setCveMunicipio($row["cveMunicipio"]);
                    $tmp[$contador]->setCveGenero($row["cveGenero"]);
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