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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/defensoresimputadossolicitudes/DefensoresimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class DefensoresimputadossolicitudesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertDefensoresimputadossolicitudes($defensoresimputadossolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbldefensoresimputadossolicitudes(";
        if ($defensoresimputadossolicitudesDto->getidDefensorImputadoSolicitud() != "") {
            $sql.="idDefensorImputadoSolicitud";
            if (($defensoresimputadossolicitudesDto->getIdImputadoSolicitud() != "") || ($defensoresimputadossolicitudesDto->getCveTipoDefensor() != "") || ($defensoresimputadossolicitudesDto->getNombre() != "") || ($defensoresimputadossolicitudesDto->getTelefono() != "") || ($defensoresimputadossolicitudesDto->getCelular() != "") || ($defensoresimputadossolicitudesDto->getEmail() != "") || ($defensoresimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresimputadossolicitudesDto->getidImputadoSolicitud() != "") {
            $sql.="idImputadoSolicitud";
            if (($defensoresimputadossolicitudesDto->getCveTipoDefensor() != "") || ($defensoresimputadossolicitudesDto->getNombre() != "") || ($defensoresimputadossolicitudesDto->getTelefono() != "") || ($defensoresimputadossolicitudesDto->getCelular() != "") || ($defensoresimputadossolicitudesDto->getEmail() != "") || ($defensoresimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresimputadossolicitudesDto->getcveTipoDefensor() != "") {
            $sql.="cveTipoDefensor";
            if (($defensoresimputadossolicitudesDto->getNombre() != "") || ($defensoresimputadossolicitudesDto->getTelefono() != "") || ($defensoresimputadossolicitudesDto->getCelular() != "") || ($defensoresimputadossolicitudesDto->getEmail() != "") || ($defensoresimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresimputadossolicitudesDto->getnombre() != "") {
            $sql.="nombre";
            if (($defensoresimputadossolicitudesDto->getTelefono() != "") || ($defensoresimputadossolicitudesDto->getCelular() != "") || ($defensoresimputadossolicitudesDto->getEmail() != "") || ($defensoresimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresimputadossolicitudesDto->gettelefono() != "") {
            $sql.="telefono";
            if (($defensoresimputadossolicitudesDto->getCelular() != "") || ($defensoresimputadossolicitudesDto->getEmail() != "") || ($defensoresimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresimputadossolicitudesDto->getcelular() != "") {
            $sql.="celular";
            if (($defensoresimputadossolicitudesDto->getEmail() != "") || ($defensoresimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresimputadossolicitudesDto->getemail() != "") {
            $sql.="email";
            if (($defensoresimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresimputadossolicitudesDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($defensoresimputadossolicitudesDto->getidDefensorImputadoSolicitud() != "") {
            $sql.="'" . $defensoresimputadossolicitudesDto->getidDefensorImputadoSolicitud() . "'";
            if (($defensoresimputadossolicitudesDto->getIdImputadoSolicitud() != "") || ($defensoresimputadossolicitudesDto->getCveTipoDefensor() != "") || ($defensoresimputadossolicitudesDto->getNombre() != "") || ($defensoresimputadossolicitudesDto->getTelefono() != "") || ($defensoresimputadossolicitudesDto->getCelular() != "") || ($defensoresimputadossolicitudesDto->getEmail() != "") || ($defensoresimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresimputadossolicitudesDto->getidImputadoSolicitud() != "") {
            $sql.="'" . $defensoresimputadossolicitudesDto->getidImputadoSolicitud() . "'";
            if (($defensoresimputadossolicitudesDto->getCveTipoDefensor() != "") || ($defensoresimputadossolicitudesDto->getNombre() != "") || ($defensoresimputadossolicitudesDto->getTelefono() != "") || ($defensoresimputadossolicitudesDto->getCelular() != "") || ($defensoresimputadossolicitudesDto->getEmail() != "") || ($defensoresimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresimputadossolicitudesDto->getcveTipoDefensor() != "") {
            $sql.="'" . $defensoresimputadossolicitudesDto->getcveTipoDefensor() . "'";
            if (($defensoresimputadossolicitudesDto->getNombre() != "") || ($defensoresimputadossolicitudesDto->getTelefono() != "") || ($defensoresimputadossolicitudesDto->getCelular() != "") || ($defensoresimputadossolicitudesDto->getEmail() != "") || ($defensoresimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresimputadossolicitudesDto->getnombre() != "") {
            $sql.="'" . $defensoresimputadossolicitudesDto->getnombre() . "'";
            if (($defensoresimputadossolicitudesDto->getTelefono() != "") || ($defensoresimputadossolicitudesDto->getCelular() != "") || ($defensoresimputadossolicitudesDto->getEmail() != "") || ($defensoresimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresimputadossolicitudesDto->gettelefono() != "") {
            $sql.="'" . $defensoresimputadossolicitudesDto->gettelefono() . "'";
            if (($defensoresimputadossolicitudesDto->getCelular() != "") || ($defensoresimputadossolicitudesDto->getEmail() != "") || ($defensoresimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresimputadossolicitudesDto->getcelular() != "") {
            $sql.="'" . $defensoresimputadossolicitudesDto->getcelular() . "'";
            if (($defensoresimputadossolicitudesDto->getEmail() != "") || ($defensoresimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresimputadossolicitudesDto->getemail() != "") {
            $sql.="'" . $defensoresimputadossolicitudesDto->getemail() . "'";
            if (($defensoresimputadossolicitudesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresimputadossolicitudesDto->getactivo() != "") {
            $sql.="'" . $defensoresimputadossolicitudesDto->getactivo() . "'";
        }
        if ($defensoresimputadossolicitudesDto->getfechaRegistro() != "") {
            
        }
        if ($defensoresimputadossolicitudesDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DefensoresimputadossolicitudesDTO();
            $tmp->setidDefensorImputadoSolicitud($this->_proveedor->lastID());
            $tmp = $this->selectDefensoresimputadossolicitudes($tmp, "", $this->_proveedor);
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

    public function updateDefensoresimputadossolicitudes($defensoresimputadossolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbldefensoresimputadossolicitudes SET ";
        $sql.="cveTipoDefensor='" . $defensoresimputadossolicitudesDto->getcveTipoDefensor() . "'";
        $sql.=" ,nombre='" . $defensoresimputadossolicitudesDto->getnombre() . "'";
        $sql.=" ,telefono='" . $defensoresimputadossolicitudesDto->gettelefono() . "'";
        $sql.=" ,celular='" . $defensoresimputadossolicitudesDto->getcelular() . "'";
        $sql.=" ,email='" . $defensoresimputadossolicitudesDto->getemail() . "'";
        $sql.=" ,fechaActualizacion= now()";
        $sql.=" WHERE idDefensorImputadoSolicitud='" . $defensoresimputadossolicitudesDto->getidDefensorImputadoSolicitud() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DefensoresimputadossolicitudesDTO();
            $tmp->setidDefensorImputadoSolicitud($defensoresimputadossolicitudesDto->getidDefensorImputadoSolicitud());
            $tmp = $this->selectDefensoresimputadossolicitudes($tmp, "", $this->_proveedor);
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

    public function eliminaDefensoresimputadossolicitudes($defensoresimputadossolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbldefensoresimputadossolicitudes SET ";
        $sql.=" activo='N'";
        $sql.=" ,fechaActualizacion= now()";
        $sql.=" WHERE idDefensorImputadoSolicitud='" . $defensoresimputadossolicitudesDto->getidDefensorImputadoSolicitud() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DefensoresimputadossolicitudesDTO();
            $tmp->setidDefensorImputadoSolicitud($defensoresimputadossolicitudesDto->getidDefensorImputadoSolicitud());
            $tmp = $this->selectDefensoresimputadossolicitudes($tmp, "", $this->_proveedor);
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

    public function updateDefensoresimputadossolicitudesRSP($defensoresimputadossolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbldefensoresimputadossolicitudes SET ";
        if ($defensoresimputadossolicitudesDto->getidDefensorImputadoSolicitud() != "") {
            $sql.="idDefensorImputadoSolicitud='" . $defensoresimputadossolicitudesDto->getidDefensorImputadoSolicitud() . "'";
            if (($defensoresimputadossolicitudesDto->getIdImputadoSolicitud() != "") || ($defensoresimputadossolicitudesDto->getCveTipoDefensor() != "") || ($defensoresimputadossolicitudesDto->getNombre() != "") || ($defensoresimputadossolicitudesDto->getTelefono() != "") || ($defensoresimputadossolicitudesDto->getCelular() != "") || ($defensoresimputadossolicitudesDto->getEmail() != "") || ($defensoresimputadossolicitudesDto->getActivo() != "") || ($defensoresimputadossolicitudesDto->getFechaRegistro() != "") || ($defensoresimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresimputadossolicitudesDto->getidImputadoSolicitud() != "") {
            $sql.="idImputadoSolicitud='" . $defensoresimputadossolicitudesDto->getidImputadoSolicitud() . "'";
            if (($defensoresimputadossolicitudesDto->getCveTipoDefensor() != "") || ($defensoresimputadossolicitudesDto->getNombre() != "") || ($defensoresimputadossolicitudesDto->getTelefono() != "") || ($defensoresimputadossolicitudesDto->getCelular() != "") || ($defensoresimputadossolicitudesDto->getEmail() != "") || ($defensoresimputadossolicitudesDto->getActivo() != "") || ($defensoresimputadossolicitudesDto->getFechaRegistro() != "") || ($defensoresimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresimputadossolicitudesDto->getcveTipoDefensor() != "") {
            $sql.="cveTipoDefensor='" . $defensoresimputadossolicitudesDto->getcveTipoDefensor() . "'";
            if (($defensoresimputadossolicitudesDto->getNombre() != "") || ($defensoresimputadossolicitudesDto->getTelefono() != "") || ($defensoresimputadossolicitudesDto->getCelular() != "") || ($defensoresimputadossolicitudesDto->getEmail() != "") || ($defensoresimputadossolicitudesDto->getActivo() != "") || ($defensoresimputadossolicitudesDto->getFechaRegistro() != "") || ($defensoresimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresimputadossolicitudesDto->getnombre() != "") {
            $sql.="nombre='" . $defensoresimputadossolicitudesDto->getnombre() . "'";
            if (($defensoresimputadossolicitudesDto->getTelefono() != "") || ($defensoresimputadossolicitudesDto->getCelular() != "") || ($defensoresimputadossolicitudesDto->getEmail() != "") || ($defensoresimputadossolicitudesDto->getActivo() != "") || ($defensoresimputadossolicitudesDto->getFechaRegistro() != "") || ($defensoresimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresimputadossolicitudesDto->gettelefono() != "") {
            $sql.="telefono='" . $defensoresimputadossolicitudesDto->gettelefono() . "'";
            if (($defensoresimputadossolicitudesDto->getCelular() != "") || ($defensoresimputadossolicitudesDto->getEmail() != "") || ($defensoresimputadossolicitudesDto->getActivo() != "") || ($defensoresimputadossolicitudesDto->getFechaRegistro() != "") || ($defensoresimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresimputadossolicitudesDto->getcelular() != "") {
            $sql.="celular='" . $defensoresimputadossolicitudesDto->getcelular() . "'";
            if (($defensoresimputadossolicitudesDto->getEmail() != "") || ($defensoresimputadossolicitudesDto->getActivo() != "") || ($defensoresimputadossolicitudesDto->getFechaRegistro() != "") || ($defensoresimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresimputadossolicitudesDto->getemail() != "") {
            $sql.="email='" . $defensoresimputadossolicitudesDto->getemail() . "'";
            if (($defensoresimputadossolicitudesDto->getActivo() != "") || ($defensoresimputadossolicitudesDto->getFechaRegistro() != "") || ($defensoresimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresimputadossolicitudesDto->getactivo() != "") {
            $sql.="activo='" . $defensoresimputadossolicitudesDto->getactivo() . "'";
            if (($defensoresimputadossolicitudesDto->getFechaRegistro() != "") || ($defensoresimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresimputadossolicitudesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $defensoresimputadossolicitudesDto->getfechaRegistro() . "'";
            if (($defensoresimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        $sql.=" ,fechaActualizacion= now()";
        $sql.=" WHERE idDefensorImputadoSolicitud='" . $defensoresimputadossolicitudesDto->getidDefensorImputadoSolicitud() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DefensoresimputadossolicitudesDTO();
            $tmp->setidDefensorImputadoSolicitud($defensoresimputadossolicitudesDto->getidDefensorImputadoSolicitud());
            $tmp = $this->selectDefensoresimputadossolicitudes($tmp, "", $this->_proveedor);
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

    public function deleteDefensoresimputadossolicitudes($defensoresimputadossolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbldefensoresimputadossolicitudes  WHERE idDefensorImputadoSolicitud='" . $defensoresimputadossolicitudesDto->getidDefensorImputadoSolicitud() . "'";
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

    public function selectDefensoresimputadossolicitudes($defensoresimputadossolicitudesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idDefensorImputadoSolicitud,idImputadoSolicitud,cveTipoDefensor,nombre,telefono,celular,email,activo,fechaRegistro,fechaActualizacion FROM tbldefensoresimputadossolicitudes ";
        if (($defensoresimputadossolicitudesDto->getidDefensorImputadoSolicitud() != "") || ($defensoresimputadossolicitudesDto->getidImputadoSolicitud() != "") || ($defensoresimputadossolicitudesDto->getcveTipoDefensor() != "") || ($defensoresimputadossolicitudesDto->getnombre() != "") || ($defensoresimputadossolicitudesDto->gettelefono() != "") || ($defensoresimputadossolicitudesDto->getcelular() != "") || ($defensoresimputadossolicitudesDto->getemail() != "") || ($defensoresimputadossolicitudesDto->getactivo() != "") || ($defensoresimputadossolicitudesDto->getfechaRegistro() != "") || ($defensoresimputadossolicitudesDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($defensoresimputadossolicitudesDto->getidDefensorImputadoSolicitud() != "") {
            $sql.="idDefensorImputadoSolicitud='" . $defensoresimputadossolicitudesDto->getIdDefensorImputadoSolicitud() . "'";
            if (($defensoresimputadossolicitudesDto->getIdImputadoSolicitud() != "") || ($defensoresimputadossolicitudesDto->getCveTipoDefensor() != "") || ($defensoresimputadossolicitudesDto->getNombre() != "") || ($defensoresimputadossolicitudesDto->getTelefono() != "") || ($defensoresimputadossolicitudesDto->getCelular() != "") || ($defensoresimputadossolicitudesDto->getEmail() != "") || ($defensoresimputadossolicitudesDto->getActivo() != "") || ($defensoresimputadossolicitudesDto->getFechaRegistro() != "") || ($defensoresimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($defensoresimputadossolicitudesDto->getidImputadoSolicitud() != "") {
            $sql.="idImputadoSolicitud='" . $defensoresimputadossolicitudesDto->getIdImputadoSolicitud() . "'";
            if (($defensoresimputadossolicitudesDto->getCveTipoDefensor() != "") || ($defensoresimputadossolicitudesDto->getNombre() != "") || ($defensoresimputadossolicitudesDto->getTelefono() != "") || ($defensoresimputadossolicitudesDto->getCelular() != "") || ($defensoresimputadossolicitudesDto->getEmail() != "") || ($defensoresimputadossolicitudesDto->getActivo() != "") || ($defensoresimputadossolicitudesDto->getFechaRegistro() != "") || ($defensoresimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($defensoresimputadossolicitudesDto->getcveTipoDefensor() != "") {
            $sql.="cveTipoDefensor='" . $defensoresimputadossolicitudesDto->getCveTipoDefensor() . "'";
            if (($defensoresimputadossolicitudesDto->getNombre() != "") || ($defensoresimputadossolicitudesDto->getTelefono() != "") || ($defensoresimputadossolicitudesDto->getCelular() != "") || ($defensoresimputadossolicitudesDto->getEmail() != "") || ($defensoresimputadossolicitudesDto->getActivo() != "") || ($defensoresimputadossolicitudesDto->getFechaRegistro() != "") || ($defensoresimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($defensoresimputadossolicitudesDto->getnombre() != "") {
            $sql.="nombre='" . $defensoresimputadossolicitudesDto->getNombre() . "'";
            if (($defensoresimputadossolicitudesDto->getTelefono() != "") || ($defensoresimputadossolicitudesDto->getCelular() != "") || ($defensoresimputadossolicitudesDto->getEmail() != "") || ($defensoresimputadossolicitudesDto->getActivo() != "") || ($defensoresimputadossolicitudesDto->getFechaRegistro() != "") || ($defensoresimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($defensoresimputadossolicitudesDto->gettelefono() != "") {
            $sql.="telefono='" . $defensoresimputadossolicitudesDto->getTelefono() . "'";
            if (($defensoresimputadossolicitudesDto->getCelular() != "") || ($defensoresimputadossolicitudesDto->getEmail() != "") || ($defensoresimputadossolicitudesDto->getActivo() != "") || ($defensoresimputadossolicitudesDto->getFechaRegistro() != "") || ($defensoresimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($defensoresimputadossolicitudesDto->getcelular() != "") {
            $sql.="celular='" . $defensoresimputadossolicitudesDto->getCelular() . "'";
            if (($defensoresimputadossolicitudesDto->getEmail() != "") || ($defensoresimputadossolicitudesDto->getActivo() != "") || ($defensoresimputadossolicitudesDto->getFechaRegistro() != "") || ($defensoresimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($defensoresimputadossolicitudesDto->getemail() != "") {
            $sql.="email='" . $defensoresimputadossolicitudesDto->getEmail() . "'";
            if (($defensoresimputadossolicitudesDto->getActivo() != "") || ($defensoresimputadossolicitudesDto->getFechaRegistro() != "") || ($defensoresimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($defensoresimputadossolicitudesDto->getactivo() != "") {
            $sql.="activo='" . $defensoresimputadossolicitudesDto->getActivo() . "'";
            if (($defensoresimputadossolicitudesDto->getFechaRegistro() != "") || ($defensoresimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($defensoresimputadossolicitudesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $defensoresimputadossolicitudesDto->getFechaRegistro() . "'";
            if (($defensoresimputadossolicitudesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($defensoresimputadossolicitudesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $defensoresimputadossolicitudesDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new DefensoresimputadossolicitudesDTO();
                    $tmp[$contador]->setIdDefensorImputadoSolicitud($row["idDefensorImputadoSolicitud"]);
                    $tmp[$contador]->setIdImputadoSolicitud($row["idImputadoSolicitud"]);
                    $tmp[$contador]->setCveTipoDefensor($row["cveTipoDefensor"]);
                    $tmp[$contador]->setNombre($row["nombre"]);
                    $tmp[$contador]->setTelefono($row["telefono"]);
                    $tmp[$contador]->setCelular($row["celular"]);
                    $tmp[$contador]->setEmail($row["email"]);
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

    public function consultaDefensorWebSerivces($service, $proveedor = null) {

        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idDefensorImputadoSolicitud,idImputadoSolicitud,cveTipoDefensor,nombre,telefono,celular,email,activo,fechaRegistro,fechaActualizacion FROM tbldefensoresimputadossolicitudes ";
        if (($service["idDefensorImputadoSolicitud"] != "" ) || $service["folio"] != "") {
            $sql.=" WHERE ";
        }
        if ($service["idDefensorImputadoSolicitud"] != "") {
            $sql.="idDefensorImputadoSolicitud='" . $service["idDefensorImputadoSolicitud"] . "'";
            if ($service["folio"] != "") {
                $sql.=" AND ";
            }
        }
        if ($service["folio"] != "") {
            $sql.="telefono like '%" . $service["folio"] . "%'";
        }

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new DefensoresimputadossolicitudesDTO();
                    $tmp[$contador]->setIdDefensorImputadoSolicitud($row["idDefensorImputadoSolicitud"]);
                    $tmp[$contador]->setIdImputadoSolicitud($row["idImputadoSolicitud"]);
                    $tmp[$contador]->setCveTipoDefensor($row["cveTipoDefensor"]);
                    $tmp[$contador]->setNombre($row["nombre"]);
                    $tmp[$contador]->setTelefono($row["telefono"]);
                    $tmp[$contador]->setCelular($row["celular"]);
                    $tmp[$contador]->setEmail($row["email"]);
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