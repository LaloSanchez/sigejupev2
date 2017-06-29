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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/defensoresofendidossolicitudes/DefensoresofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class DefensoresofendidossolicitudesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertDefensoresofendidossolicitudes($defensoresofendidossolicitudesDto, $proveedor = null) {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbldefensoresofendidossolicitudes(";
        if ($defensoresofendidossolicitudesDto->getidDefensorOfendidoSolicitud() != "") {
            $sql .= "idDefensorOfendidoSolicitud";
            if (($defensoresofendidossolicitudesDto->getIdOfendidoSolicitud() != "") || ($defensoresofendidossolicitudesDto->getCveTipoAsesor() != "") || ($defensoresofendidossolicitudesDto->getNombre() != "") || ($defensoresofendidossolicitudesDto->getTelefono() != "") || ($defensoresofendidossolicitudesDto->getCelular() != "") || ($defensoresofendidossolicitudesDto->getEmail() != "") || ($defensoresofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($defensoresofendidossolicitudesDto->getidOfendidoSolicitud() != "") {
            $sql .= "idOfendidoSolicitud";
            if (($defensoresofendidossolicitudesDto->getCveTipoAsesor() != "") || ($defensoresofendidossolicitudesDto->getNombre() != "") || ($defensoresofendidossolicitudesDto->getTelefono() != "") || ($defensoresofendidossolicitudesDto->getCelular() != "") || ($defensoresofendidossolicitudesDto->getEmail() != "") || ($defensoresofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($defensoresofendidossolicitudesDto->getcveTipoAsesor() != "") {
            $sql .= "cveTipoAsesor";
            if (($defensoresofendidossolicitudesDto->getNombre() != "") || ($defensoresofendidossolicitudesDto->getTelefono() != "") || ($defensoresofendidossolicitudesDto->getCelular() != "") || ($defensoresofendidossolicitudesDto->getEmail() != "") || ($defensoresofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($defensoresofendidossolicitudesDto->getnombre() != "") {
            $sql .= "nombre";
            if (($defensoresofendidossolicitudesDto->getTelefono() != "") || ($defensoresofendidossolicitudesDto->getCelular() != "") || ($defensoresofendidossolicitudesDto->getEmail() != "") || ($defensoresofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($defensoresofendidossolicitudesDto->gettelefono() != "") {
            $sql .= "telefono";
            if (($defensoresofendidossolicitudesDto->getCelular() != "") || ($defensoresofendidossolicitudesDto->getEmail() != "") || ($defensoresofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($defensoresofendidossolicitudesDto->getcelular() != "") {
            $sql .= "celular";
            if (($defensoresofendidossolicitudesDto->getEmail() != "") || ($defensoresofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($defensoresofendidossolicitudesDto->getemail() != "") {
            $sql .= "email";
            if (($defensoresofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($defensoresofendidossolicitudesDto->getactivo() != "") {
            $sql .= "activo";
        }
        $sql .= ",fechaRegistro";
        $sql .= ",fechaActualizacion";
        $sql .= ") VALUES(";
        if ($defensoresofendidossolicitudesDto->getidDefensorOfendidoSolicitud() != "") {
            $sql .= "'" . $defensoresofendidossolicitudesDto->getidDefensorOfendidoSolicitud() . "'";
            if (($defensoresofendidossolicitudesDto->getIdOfendidoSolicitud() != "") || ($defensoresofendidossolicitudesDto->getCveTipoAsesor() != "") || ($defensoresofendidossolicitudesDto->getNombre() != "") || ($defensoresofendidossolicitudesDto->getTelefono() != "") || ($defensoresofendidossolicitudesDto->getCelular() != "") || ($defensoresofendidossolicitudesDto->getEmail() != "") || ($defensoresofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($defensoresofendidossolicitudesDto->getidOfendidoSolicitud() != "") {
            $sql .= "'" . $defensoresofendidossolicitudesDto->getidOfendidoSolicitud() . "'";
            if (($defensoresofendidossolicitudesDto->getCveTipoAsesor() != "") || ($defensoresofendidossolicitudesDto->getNombre() != "") || ($defensoresofendidossolicitudesDto->getTelefono() != "") || ($defensoresofendidossolicitudesDto->getCelular() != "") || ($defensoresofendidossolicitudesDto->getEmail() != "") || ($defensoresofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($defensoresofendidossolicitudesDto->getcveTipoAsesor() != "") {
            $sql .= "'" . $defensoresofendidossolicitudesDto->getcveTipoAsesor() . "'";
            if (($defensoresofendidossolicitudesDto->getNombre() != "") || ($defensoresofendidossolicitudesDto->getTelefono() != "") || ($defensoresofendidossolicitudesDto->getCelular() != "") || ($defensoresofendidossolicitudesDto->getEmail() != "") || ($defensoresofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($defensoresofendidossolicitudesDto->getnombre() != "") {
            $sql .= "'" . $defensoresofendidossolicitudesDto->getnombre() . "'";
            if (($defensoresofendidossolicitudesDto->getTelefono() != "") || ($defensoresofendidossolicitudesDto->getCelular() != "") || ($defensoresofendidossolicitudesDto->getEmail() != "") || ($defensoresofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($defensoresofendidossolicitudesDto->gettelefono() != "") {
            $sql .= "'" . $defensoresofendidossolicitudesDto->gettelefono() . "'";
            if (($defensoresofendidossolicitudesDto->getCelular() != "") || ($defensoresofendidossolicitudesDto->getEmail() != "") || ($defensoresofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($defensoresofendidossolicitudesDto->getcelular() != "") {
            $sql .= "'" . $defensoresofendidossolicitudesDto->getcelular() . "'";
            if (($defensoresofendidossolicitudesDto->getEmail() != "") || ($defensoresofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($defensoresofendidossolicitudesDto->getemail() != "") {
            $sql .= "'" . $defensoresofendidossolicitudesDto->getemail() . "'";
            if (($defensoresofendidossolicitudesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($defensoresofendidossolicitudesDto->getactivo() != "") {
            $sql .= "'" . $defensoresofendidossolicitudesDto->getactivo() . "'";
        }
        if ($defensoresofendidossolicitudesDto->getfechaRegistro() != "") {
            
        }
        if ($defensoresofendidossolicitudesDto->getfechaActualizacion() != "") {
            
        }
        $sql .= ",now()";
        $sql .= ",now()";
        $sql .= ")";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DefensoresofendidossolicitudesDTO();
            $tmp->setidDefensorOfendidoSolicitud($this->_proveedor->lastID());
            $tmp = $this->selectDefensoresofendidossolicitudes($tmp, "", $this->_proveedor);
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

    public function updateDefensoresofendidossolicitudes($defensoresofendidossolicitudesDto, $proveedor = null) {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbldefensoresofendidossolicitudes SET ";
        if ($defensoresofendidossolicitudesDto->getidDefensorOfendidoSolicitud() != "") {
            $sql .= "idDefensorOfendidoSolicitud='" . $defensoresofendidossolicitudesDto->getidDefensorOfendidoSolicitud() . "'";
            if (($defensoresofendidossolicitudesDto->getIdOfendidoSolicitud() != "") || ($defensoresofendidossolicitudesDto->getCveTipoAsesor() != "") || ($defensoresofendidossolicitudesDto->getNombre() != "") || ($defensoresofendidossolicitudesDto->getTelefono() != "") || ($defensoresofendidossolicitudesDto->getCelular() != "") || ($defensoresofendidossolicitudesDto->getEmail() != "") || ($defensoresofendidossolicitudesDto->getActivo() != "") || ($defensoresofendidossolicitudesDto->getFechaRegistro() != "") || ($defensoresofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($defensoresofendidossolicitudesDto->getidOfendidoSolicitud() != "") {
            $sql .= "idOfendidoSolicitud='" . $defensoresofendidossolicitudesDto->getidOfendidoSolicitud() . "'";
            if (($defensoresofendidossolicitudesDto->getCveTipoAsesor() != "") || ($defensoresofendidossolicitudesDto->getNombre() != "") || ($defensoresofendidossolicitudesDto->getTelefono() != "") || ($defensoresofendidossolicitudesDto->getCelular() != "") || ($defensoresofendidossolicitudesDto->getEmail() != "") || ($defensoresofendidossolicitudesDto->getActivo() != "") || ($defensoresofendidossolicitudesDto->getFechaRegistro() != "") || ($defensoresofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($defensoresofendidossolicitudesDto->getcveTipoAsesor() != "") {
            $sql .= "cveTipoAsesor='" . $defensoresofendidossolicitudesDto->getcveTipoAsesor() . "'";
            if (($defensoresofendidossolicitudesDto->getNombre() != "") || ($defensoresofendidossolicitudesDto->getTelefono() != "") || ($defensoresofendidossolicitudesDto->getCelular() != "") || ($defensoresofendidossolicitudesDto->getEmail() != "") || ($defensoresofendidossolicitudesDto->getActivo() != "") || ($defensoresofendidossolicitudesDto->getFechaRegistro() != "") || ($defensoresofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($defensoresofendidossolicitudesDto->getnombre() != "") {
            $sql .= "nombre='" . $defensoresofendidossolicitudesDto->getnombre() . "'";
            if (($defensoresofendidossolicitudesDto->getTelefono() != "") || ($defensoresofendidossolicitudesDto->getCelular() != "") || ($defensoresofendidossolicitudesDto->getEmail() != "") || ($defensoresofendidossolicitudesDto->getActivo() != "") || ($defensoresofendidossolicitudesDto->getFechaRegistro() != "") || ($defensoresofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }

        $sql .= "telefono='" . $defensoresofendidossolicitudesDto->gettelefono() . "'";
        $sql .= ",";

        $sql .= "celular='" . $defensoresofendidossolicitudesDto->getcelular() . "'";
        $sql .= ",";

        $sql .= "email='" . $defensoresofendidossolicitudesDto->getemail() . "'";
        $sql .= ",";

//        if ($defensoresofendidossolicitudesDto->getactivo() != "") {
        $sql .= "activo='" . $defensoresofendidossolicitudesDto->getactivo() . "'";
//        $sql .= ",";
//            if (($defensoresofendidossolicitudesDto->getFechaRegistro() != "") || ($defensoresofendidossolicitudesDto->getFechaActualizacion() != "")) {
//                $sql .= ",";
//            }
//        }
        if ($defensoresofendidossolicitudesDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $defensoresofendidossolicitudesDto->getfechaRegistro() . "'";
        }

        $sql .= ",fechaActualizacion=NOW()";

        $sql .= " WHERE idDefensorOfendidoSolicitud='" . $defensoresofendidossolicitudesDto->getidDefensorOfendidoSolicitud() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DefensoresofendidossolicitudesDTO();
            $tmp->setidDefensorOfendidoSolicitud($defensoresofendidossolicitudesDto->getidDefensorOfendidoSolicitud());
            $tmp = $this->selectDefensoresofendidossolicitudes($tmp, "", $this->_proveedor);
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

    public function eliminarDefensoresOfendido($defensoresofendidossolicitudesDto, $proveedor = null, $byRow = 'idOfendidoSolicitud') {
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbldefensoresofendidossolicitudes SET activo='N', fechaActualizacion=NOW()";

        if ($byRow == 'idOfendidoSolicitud') {
            $sql .= " WHERE idOfendidoSolicitud='" . $defensoresofendidossolicitudesDto->getIdOfendidoSolicitud() . "'";
        } else if ($byRow == 'idDefensorOfendidoSolicitud') {
            $sql .= " WHERE idDefensorOfendidoSolicitud='" . $defensoresofendidossolicitudesDto->getIdDefensorOfendidoSolicitud() . "'";
        }


        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $response = true;
        } else {
            $response = false;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }


        return $response;
    }

    public function deleteDefensoresofendidossolicitudes($defensoresofendidossolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbldefensoresofendidossolicitudes  WHERE idDefensorOfendidoSolicitud='" . $defensoresofendidossolicitudesDto->getidDefensorOfendidoSolicitud() . "'";
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

    public function selectDefensoresofendidossolicitudes($defensoresofendidossolicitudesDto, $orden = "", $proveedor = null) {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT
                a.idDefensorOfendidoSolicitud,a.idOfendidoSolicitud,a.cveTipoAsesor,b.desTipoDefensor,a.nombre,
                a.telefono,a.celular,a.email,a.activo,a.fechaRegistro,a.fechaActualizacion
                FROM tbldefensoresofendidossolicitudes a
                JOIN tbltiposdefensores b ON a.cveTipoAsesor = b.cveTipoDefensor ";

        if (($defensoresofendidossolicitudesDto->getidDefensorOfendidoSolicitud() != "") || ($defensoresofendidossolicitudesDto->getidOfendidoSolicitud() != "") || ($defensoresofendidossolicitudesDto->getcveTipoAsesor() != "") || ($defensoresofendidossolicitudesDto->getnombre() != "") || ($defensoresofendidossolicitudesDto->gettelefono() != "") || ($defensoresofendidossolicitudesDto->getcelular() != "") || ($defensoresofendidossolicitudesDto->getemail() != "") || ($defensoresofendidossolicitudesDto->getactivo() != "") || ($defensoresofendidossolicitudesDto->getfechaRegistro() != "") || ($defensoresofendidossolicitudesDto->getfechaActualizacion() != "")) {
            $sql .= " WHERE ";
        }
        if ($defensoresofendidossolicitudesDto->getidDefensorOfendidoSolicitud() != "") {
            $sql .= "a.idDefensorOfendidoSolicitud='" . $defensoresofendidossolicitudesDto->getIdDefensorOfendidoSolicitud() . "'";
            if (($defensoresofendidossolicitudesDto->getIdOfendidoSolicitud() != "") || ($defensoresofendidossolicitudesDto->getCveTipoAsesor() != "") || ($defensoresofendidossolicitudesDto->getNombre() != "") || ($defensoresofendidossolicitudesDto->getTelefono() != "") || ($defensoresofendidossolicitudesDto->getCelular() != "") || ($defensoresofendidossolicitudesDto->getEmail() != "") || ($defensoresofendidossolicitudesDto->getActivo() != "") || ($defensoresofendidossolicitudesDto->getFechaRegistro() != "") || ($defensoresofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($defensoresofendidossolicitudesDto->getidOfendidoSolicitud() != "") {
            $sql .= "a.idOfendidoSolicitud='" . $defensoresofendidossolicitudesDto->getIdOfendidoSolicitud() . "'";
            if (($defensoresofendidossolicitudesDto->getCveTipoAsesor() != "") || ($defensoresofendidossolicitudesDto->getNombre() != "") || ($defensoresofendidossolicitudesDto->getTelefono() != "") || ($defensoresofendidossolicitudesDto->getCelular() != "") || ($defensoresofendidossolicitudesDto->getEmail() != "") || ($defensoresofendidossolicitudesDto->getActivo() != "") || ($defensoresofendidossolicitudesDto->getFechaRegistro() != "") || ($defensoresofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($defensoresofendidossolicitudesDto->getcveTipoAsesor() != "") {
            $sql .= "a.cveTipoAsesor='" . $defensoresofendidossolicitudesDto->getCveTipoAsesor() . "'";
            if (($defensoresofendidossolicitudesDto->getNombre() != "") || ($defensoresofendidossolicitudesDto->getTelefono() != "") || ($defensoresofendidossolicitudesDto->getCelular() != "") || ($defensoresofendidossolicitudesDto->getEmail() != "") || ($defensoresofendidossolicitudesDto->getActivo() != "") || ($defensoresofendidossolicitudesDto->getFechaRegistro() != "") || ($defensoresofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($defensoresofendidossolicitudesDto->getnombre() != "") {
            $sql .= "a.nombre='" . $defensoresofendidossolicitudesDto->getNombre() . "'";
            if (($defensoresofendidossolicitudesDto->getTelefono() != "") || ($defensoresofendidossolicitudesDto->getCelular() != "") || ($defensoresofendidossolicitudesDto->getEmail() != "") || ($defensoresofendidossolicitudesDto->getActivo() != "") || ($defensoresofendidossolicitudesDto->getFechaRegistro() != "") || ($defensoresofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($defensoresofendidossolicitudesDto->gettelefono() != "") {
            $sql .= "a.telefono='" . $defensoresofendidossolicitudesDto->getTelefono() . "'";
            if (($defensoresofendidossolicitudesDto->getCelular() != "") || ($defensoresofendidossolicitudesDto->getEmail() != "") || ($defensoresofendidossolicitudesDto->getActivo() != "") || ($defensoresofendidossolicitudesDto->getFechaRegistro() != "") || ($defensoresofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($defensoresofendidossolicitudesDto->getcelular() != "") {
            $sql .= "a.celular='" . $defensoresofendidossolicitudesDto->getCelular() . "'";
            if (($defensoresofendidossolicitudesDto->getEmail() != "") || ($defensoresofendidossolicitudesDto->getActivo() != "") || ($defensoresofendidossolicitudesDto->getFechaRegistro() != "") || ($defensoresofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($defensoresofendidossolicitudesDto->getemail() != "") {
            $sql .= "a.email='" . $defensoresofendidossolicitudesDto->getEmail() . "'";
            if (($defensoresofendidossolicitudesDto->getActivo() != "") || ($defensoresofendidossolicitudesDto->getFechaRegistro() != "") || ($defensoresofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($defensoresofendidossolicitudesDto->getactivo() != "") {
            $sql .= "a.activo='" . $defensoresofendidossolicitudesDto->getActivo() . "'";
            if (($defensoresofendidossolicitudesDto->getFechaRegistro() != "") || ($defensoresofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($defensoresofendidossolicitudesDto->getfechaRegistro() != "") {
            $sql .= "a.fechaRegistro='" . $defensoresofendidossolicitudesDto->getFechaRegistro() . "'";
            if (($defensoresofendidossolicitudesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($defensoresofendidossolicitudesDto->getfechaActualizacion() != "") {
            $sql .= "a.fechaActualizacion='" . $defensoresofendidossolicitudesDto->getFechaActualizacion() . "'";
        }
        if ($orden != "") {
            $sql .= $orden;
        } else {
            $sql .= "";
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new DefensoresofendidossolicitudesDTO();
                    $tmp[$contador]->setIdDefensorOfendidoSolicitud($row["idDefensorOfendidoSolicitud"]);
                    $tmp[$contador]->setIdOfendidoSolicitud($row["idOfendidoSolicitud"]);
                    $tmp[$contador]->setCveTipoAsesor($row["cveTipoAsesor"]);
                    $tmp[$contador]->setDesTipoDefensor($row["desTipoDefensor"]);
                    $tmp[$contador]->setNombre(utf8_encode($row["nombre"]));
                    $tmp[$contador]->setTelefono(utf8_encode($row["telefono"]));
                    $tmp[$contador]->setCelular(utf8_encode($row["celular"]));
                    $tmp[$contador]->setEmail(utf8_encode($row["email"]));
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $contador ++;
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
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT
                a.idDefensorOfendidoSolicitud,a.idOfendidoSolicitud,a.cveTipoAsesor, a.nombre,
                a.telefono,a.celular,a.email,a.activo,a.fechaRegistro,a.fechaActualizacion
                FROM tbldefensoresofendidossolicitudes a";

        if (($service["idDefensorOfendido"] != "" ) || $service["folio"] != "") {
            $sql.=" WHERE ";
        }
        if ($service["idDefensorOfendido"] != "") {
            $sql.="a.idDefensorOfendido='" . $service["idDefensorOfendido"] . "'";
            if ($service["folio"] != "") {
                $sql.=" AND ";
            }
        }
        if ($service["folio"] != "") {
            $sql.="a.telefono like '%" . $service["folio"] . "%'";
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new DefensoresofendidossolicitudesDTO();
                    $tmp[$contador]->setIdDefensorOfendidoSolicitud($row["idDefensorOfendidoSolicitud"]);
                    $tmp[$contador]->setIdOfendidoSolicitud($row["idOfendidoSolicitud"]);
                    $tmp[$contador]->setCveTipoAsesor($row["cveTipoAsesor"]);
                    $tmp[$contador]->setNombre(utf8_encode($row["nombre"]));
                    $tmp[$contador]->setTelefono(utf8_encode($row["telefono"]));
                    $tmp[$contador]->setCelular(utf8_encode($row["celular"]));
                    $tmp[$contador]->setEmail(utf8_encode($row["email"]));
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $contador ++;
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
