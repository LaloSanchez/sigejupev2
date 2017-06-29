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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class JuzgadosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertJuzgados($juzgadosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbljuzgados(";
        if ($juzgadosDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado";
            if (($juzgadosDto->getDesJuzgado() != "") || ($juzgadosDto->getActivo() != "") || ($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getDesJuzgado() != "") {
            $sql.="desJuzgado";
            if (($juzgadosDto->getActivo() != "") || ($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getActivo() != "") {
            $sql.="activo";
            if (($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getCveInstancia() != "") {
            $sql.="cveInstancia";
            if (($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getCveMateria() != "") {
            $sql.="cveMateria";
            if (($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getCveTipojuzgado() != "") {
            $sql.="cveTipojuzgado";
            if (($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getCveEdificio() != "") {
            $sql.="cveEdificio";
            if (($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getCveDistrito() != "") {
            $sql.="cveDistrito";
            if (($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getCveRegion() != "") {
            $sql.="cveRegion";
            if (($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getSiglas() != "") {
            $sql.="Siglas";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($juzgadosDto->getCveJuzgado() != "") {
            $sql.="'" . $juzgadosDto->getCveJuzgado() . "'";
            if (($juzgadosDto->getDesJuzgado() != "") || ($juzgadosDto->getActivo() != "") || ($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getDesJuzgado() != "") {
            $sql.="'" . $juzgadosDto->getDesJuzgado() . "'";
            if (($juzgadosDto->getActivo() != "") || ($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getActivo() != "") {
            $sql.="'" . $juzgadosDto->getActivo() . "'";
            if (($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getFechaRegistro() != "") {
            if (($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getFechaActualizacion() != "") {
            if (($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getCveInstancia() != "") {
            $sql.="'" . $juzgadosDto->getCveInstancia() . "'";
            if (($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getCveMateria() != "") {
            $sql.="'" . $juzgadosDto->getCveMateria() . "'";
            if (($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getCveTipojuzgado() != "") {
            $sql.="'" . $juzgadosDto->getCveTipojuzgado() . "'";
            if (($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getCveEdificio() != "") {
            $sql.="'" . $juzgadosDto->getCveEdificio() . "'";
            if (($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getCveDistrito() != "") {
            $sql.="'" . $juzgadosDto->getCveDistrito() . "'";
            if (($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getCveRegion() != "") {
            $sql.="'" . $juzgadosDto->getCveRegion() . "'";
            if (($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getSiglas() != "") {
            $sql.="'" . $juzgadosDto->getSiglas() . "'";
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new JuzgadosDTO();
            $tmp->setcveJuzgado($this->_proveedor->lastID());
            $tmp = $this->selectJuzgados($tmp, "", $this->_proveedor);
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

    public function updateJuzgados($juzgadosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbljuzgados SET ";
        if ($juzgadosDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado='" . $juzgadosDto->getCveJuzgado() . "'";
            if (($juzgadosDto->getDesJuzgado() != "") || ($juzgadosDto->getActivo() != "") || ($juzgadosDto->getFechaRegistro() != "") || ($juzgadosDto->getFechaActualizacion() != "") || ($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getDesJuzgado() != "") {
            $sql.="desJuzgado='" . $juzgadosDto->getDesJuzgado() . "'";
            if (($juzgadosDto->getActivo() != "") || ($juzgadosDto->getFechaRegistro() != "") || ($juzgadosDto->getFechaActualizacion() != "") || ($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getActivo() != "") {
            $sql.="activo='" . $juzgadosDto->getActivo() . "'";
            if (($juzgadosDto->getFechaRegistro() != "") || ($juzgadosDto->getFechaActualizacion() != "") || ($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $juzgadosDto->getFechaRegistro() . "'";
            if (($juzgadosDto->getFechaActualizacion() != "") || ($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $juzgadosDto->getFechaActualizacion() . "'";
            if (($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getCveInstancia() != "") {
            $sql.="cveInstancia='" . $juzgadosDto->getCveInstancia() . "'";
            if (($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getCveMateria() != "") {
            $sql.="cveMateria='" . $juzgadosDto->getCveMateria() . "'";
            if (($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getCveTipojuzgado() != "") {
            $sql.="cveTipojuzgado='" . $juzgadosDto->getCveTipojuzgado() . "'";
            if (($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getCveEdificio() != "") {
            $sql.="cveEdificio='" . $juzgadosDto->getCveEdificio() . "'";
            if (($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getCveDistrito() != "") {
            $sql.="cveDistrito='" . $juzgadosDto->getCveDistrito() . "'";
            if (($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getCveRegion() != "") {
            $sql.="cveRegion='" . $juzgadosDto->getCveRegion() . "'";
            if (($juzgadosDto->getSiglas() != "")) {
                $sql.=",";
            }
        }
        if ($juzgadosDto->getSiglas() != "") {
            $sql.="Siglas='" . $juzgadosDto->getSiglas() . "'";
        }
        $sql.=" WHERE cveJuzgado='" . $juzgadosDto->getCveJuzgado() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new JuzgadosDTO();
            $tmp->setcveJuzgado($juzgadosDto->getCveJuzgado());
            $tmp = $this->selectJuzgados($tmp, "", $this->_proveedor);
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

    public function deleteJuzgados($juzgadosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbljuzgados  WHERE cveJuzgado='" . $juzgadosDto->getCveJuzgado() . "'";
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

    /*
     * selecciona el juzgado y relaciona las claves foraneas por campo de descripcion
     */

    public function selectJuzgadoByCve($juzgadosDto, $orden = "", $proveedor = null) {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        $sql = "SELECT a.cveJuzgado, a.desJuzgado, a.activo, a.fechaRegistro, a.fechaActualizacion, a.cveInstancia, b.desInstancia,
                a.cveMateria, c.desMateria, a.cveTipoJuzgado, d.desTipoJuzgado, a.cveDistrito, e.desDistrito, a.cveRegion, f.desRegion, a.cveEdificio
                FROM tbljuzgados a
                JOIN tblinstancias b ON b.cveInstancia = a.cveInstancia
                JOIN tblmaterias c ON c.cveMateria = a.cveMateria
                JOIN tbltiposjuzgados d ON d.cveTipojuzgado = a.cveTipojuzgado
                JOIN tbldistritos e ON e.cveDistrito = a.cveDistrito
                JOIN tblregiones f ON f.cveRegion = a.cveRegion";


        if (($juzgadosDto->getcveJuzgado() != "") || ($juzgadosDto->getdesJuzgado() != "") || ($juzgadosDto->getactivo() != "") || ($juzgadosDto->getfechaRegistro() != "") || ($juzgadosDto->getfechaActualizacion() != "") || ($juzgadosDto->getcveInstancia() != "") || ($juzgadosDto->getcveMateria() != "") || ($juzgadosDto->getcveTipojuzgado() != "") || ($juzgadosDto->getcveEdificio() != "") || ($juzgadosDto->getcveDistrito() != "") || ($juzgadosDto->getcveRegion() != "")) {
            $sql .= " WHERE ";
        }
        if ($juzgadosDto->getcveJuzgado() != "") {
            $sql .= "a.cveJuzgado='" . $juzgadosDto->getCveJuzgado() . "'";
            if (($juzgadosDto->getDesJuzgado() != "") || ($juzgadosDto->getActivo() != "") || ($juzgadosDto->getFechaRegistro() != "") || ($juzgadosDto->getFechaActualizacion() != "") || ($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($juzgadosDto->getdesJuzgado() != "") {
            $sql .= "a.desJuzgado='" . $juzgadosDto->getDesJuzgado() . "'";
            if (($juzgadosDto->getActivo() != "") || ($juzgadosDto->getFechaRegistro() != "") || ($juzgadosDto->getFechaActualizacion() != "") || ($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($juzgadosDto->getactivo() != "") {
            $sql .= "a.activo='" . $juzgadosDto->getActivo() . "'";
            if (($juzgadosDto->getFechaRegistro() != "") || ($juzgadosDto->getFechaActualizacion() != "") || ($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($juzgadosDto->getfechaRegistro() != "") {
            $sql .= "a.fechaRegistro='" . $juzgadosDto->getFechaRegistro() . "'";
            if (($juzgadosDto->getFechaActualizacion() != "") || ($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($juzgadosDto->getfechaActualizacion() != "") {
            $sql .= "a.fechaActualizacion='" . $juzgadosDto->getFechaActualizacion() . "'";
            if (($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($juzgadosDto->getcveInstancia() != "") {
            $sql .= "a.cveInstancia='" . $juzgadosDto->getCveInstancia() . "'";
            if (($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($juzgadosDto->getcveMateria() != "") {
            $sql .= "a.cveMateria='" . $juzgadosDto->getCveMateria() . "'";
            if (($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($juzgadosDto->getcveTipojuzgado() != "") {
            $sql .= "a.cveTipojuzgado='" . $juzgadosDto->getCveTipojuzgado() . "'";
            if (($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($juzgadosDto->getcveEdificio() != "") {
            $sql .= "a.cveEdificio='" . $juzgadosDto->getCveEdificio() . "'";
            if (($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($juzgadosDto->getcveDistrito() != "") {
            $sql .= "a.cveDistrito='" . $juzgadosDto->getCveDistrito() . "'";
            if (($juzgadosDto->getCveRegion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($juzgadosDto->getcveRegion() != "") {
            $sql .= "a.cveRegion='" . $juzgadosDto->getCveRegion() . "'";
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
                    $tmp[$contador] = new JuzgadosDTO();
                    $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                    $tmp[$contador]->setDesJuzgado($row["desJuzgado"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setCveInstancia($row["cveInstancia"]);
                    $tmp[$contador]->setDesInstancia($row["desInstancia"]);
                    $tmp[$contador]->setCveMateria($row["cveMateria"]);
                    $tmp[$contador]->setDesMateria($row["desMateria"]);
                    $tmp[$contador]->setCveTipojuzgado($row["cveTipoJuzgado"]);
                    $tmp[$contador]->setDesTipoJuzgado($row["desTipoJuzgado"]);
                    $tmp[$contador]->setCveEdificio($row["cveEdificio"]);
                    $tmp[$contador]->setCveDistrito($row["cveDistrito"]);
                    $tmp[$contador]->setDesDistrito($row["desDistrito"]);
                    $tmp[$contador]->setCveRegion($row["cveRegion"]);
                    $tmp[$contador]->setDesRegion($row["desRegion"]);
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

    public function selectJuzgados($juzgadosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveJuzgado,desJuzgado,activo,fechaRegistro,fechaActualizacion,cveInstancia,cveMateria,cveTipojuzgado,cveEdificio,cveDistrito,cveRegion,Siglas,urlAuronix FROM tbljuzgados ";
        if (($juzgadosDto->getCveJuzgado() != "") || ($juzgadosDto->getDesJuzgado() != "") || ($juzgadosDto->getActivo() != "") || ($juzgadosDto->getFechaRegistro() != "") || ($juzgadosDto->getFechaActualizacion() != "") || ($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "") || ($juzgadosDto->getUrlAuronix() != "")) {
            $sql.=" WHERE ";
        }
        if ($juzgadosDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado='" . $juzgadosDto->getCveJuzgado() . "'";
            if (($juzgadosDto->getDesJuzgado() != "") || ($juzgadosDto->getActivo() != "") || ($juzgadosDto->getFechaRegistro() != "") || ($juzgadosDto->getFechaActualizacion() != "") || ($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "") || ($juzgadosDto->getUrlAuronix() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getDesJuzgado() != "") {
            $sql.="desJuzgado='" . $juzgadosDto->getDesJuzgado() . "'";
            if (($juzgadosDto->getActivo() != "") || ($juzgadosDto->getFechaRegistro() != "") || ($juzgadosDto->getFechaActualizacion() != "") || ($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "") || ($juzgadosDto->getUrlAuronix() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getActivo() != "") {
            $sql.="activo='" . $juzgadosDto->getActivo() . "'";
            if (($juzgadosDto->getFechaRegistro() != "") || ($juzgadosDto->getFechaActualizacion() != "") || ($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "") || ($juzgadosDto->getUrlAuronix() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $juzgadosDto->getFechaRegistro() . "'";
            if (($juzgadosDto->getFechaActualizacion() != "") || ($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "") || ($juzgadosDto->getUrlAuronix() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $juzgadosDto->getFechaActualizacion() . "'";
            if (($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "") || ($juzgadosDto->getUrlAuronix() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getCveInstancia() != "") {
            $sql.="cveInstancia='" . $juzgadosDto->getCveInstancia() . "'";
            if (($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "") || ($juzgadosDto->getUrlAuronix() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getCveMateria() != "") {
            $sql.="cveMateria='" . $juzgadosDto->getCveMateria() . "'";
            if (($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "") || ($juzgadosDto->getUrlAuronix() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getCveTipojuzgado() != "") {
            $sql.="cveTipojuzgado='" . $juzgadosDto->getCveTipojuzgado() . "'";
            if (($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "") || ($juzgadosDto->getUrlAuronix() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getCveEdificio() != "") {
            $sql.="cveEdificio='" . $juzgadosDto->getCveEdificio() . "'";
            if (($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "") || ($juzgadosDto->getUrlAuronix() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getCveDistrito() != "") {
            $sql.="cveDistrito='" . $juzgadosDto->getCveDistrito() . "'";
            if (($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "") || ($juzgadosDto->getUrlAuronix() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getCveRegion() != "") {
            $sql.="cveRegion='" . $juzgadosDto->getCveRegion() . "'";
            if (($juzgadosDto->getSiglas() != "") || ($juzgadosDto->getUrlAuronix() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getSiglas() != "") {
            $sql.="Siglas='" . $juzgadosDto->getSiglas() . "'";
            if (($juzgadosDto->getUrlAuronix() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getUrlAuronix() != "") {
            $sql.="urlAuronix='" . $juzgadosDto->getUrlAuronix() . "'";
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
                    $tmp[$contador] = new JuzgadosDTO();
                    $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                    $tmp[$contador]->setDesJuzgado($row["desJuzgado"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setCveInstancia($row["cveInstancia"]);
                    $tmp[$contador]->setCveMateria($row["cveMateria"]);
                    $tmp[$contador]->setCveTipojuzgado($row["cveTipojuzgado"]);
                    $tmp[$contador]->setCveEdificio($row["cveEdificio"]);
                    $tmp[$contador]->setCveDistrito($row["cveDistrito"]);
                    $tmp[$contador]->setCveRegion($row["cveRegion"]);
                    $tmp[$contador]->setSiglas($row["Siglas"]);
                    $tmp[$contador]->setUrlAuronix($row["urlAuronix"]);
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

    public function selectJuzgadosLike($juzgadosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveJuzgado,desJuzgado,activo,fechaRegistro,fechaActualizacion,cveInstancia,cveMateria,cveTipojuzgado,cveEdificio,cveDistrito,cveRegion,Siglas FROM tbljuzgados ";
        if (($juzgadosDto->getCveJuzgado() != "") || ($juzgadosDto->getDesJuzgado() != "") || ($juzgadosDto->getActivo() != "") || ($juzgadosDto->getFechaRegistro() != "") || ($juzgadosDto->getFechaActualizacion() != "") || ($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
            $sql.=" WHERE ";
        }
        if ($juzgadosDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado='" . $juzgadosDto->getCveJuzgado() . "'";
            if (($juzgadosDto->getDesJuzgado() != "") || ($juzgadosDto->getActivo() != "") || ($juzgadosDto->getFechaRegistro() != "") || ($juzgadosDto->getFechaActualizacion() != "") || ($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getDesJuzgado() != "") {
            $sql.="desJuzgado like'%" . $juzgadosDto->getDesJuzgado() . "%'";
            if (($juzgadosDto->getActivo() != "") || ($juzgadosDto->getFechaRegistro() != "") || ($juzgadosDto->getFechaActualizacion() != "") || ($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getActivo() != "") {
            $sql.="activo='" . $juzgadosDto->getActivo() . "'";
            if (($juzgadosDto->getFechaRegistro() != "") || ($juzgadosDto->getFechaActualizacion() != "") || ($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $juzgadosDto->getFechaRegistro() . "'";
            if (($juzgadosDto->getFechaActualizacion() != "") || ($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $juzgadosDto->getFechaActualizacion() . "'";
            if (($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getCveInstancia() != "") {
            $sql.="cveInstancia='" . $juzgadosDto->getCveInstancia() . "'";
            if (($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getCveMateria() != "") {
            $sql.="cveMateria='" . $juzgadosDto->getCveMateria() . "'";
            if (($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getCveTipojuzgado() != "") {
            $sql.="cveTipojuzgado='" . $juzgadosDto->getCveTipojuzgado() . "'";
            if (($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getCveEdificio() != "") {
            $sql.="cveEdificio='" . $juzgadosDto->getCveEdificio() . "'";
            if (($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getCveDistrito() != "") {
            $sql.="cveDistrito='" . $juzgadosDto->getCveDistrito() . "'";
            if (($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getCveRegion() != "") {
            $sql.="cveRegion='" . $juzgadosDto->getCveRegion() . "'";
            if (($juzgadosDto->getSiglas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getSiglas() != "") {
            $sql.="Siglas='" . $juzgadosDto->getSiglas() . "'";
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
                    $tmp[$contador] = new JuzgadosDTO();
                    $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                    $tmp[$contador]->setDesJuzgado($row["desJuzgado"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setCveInstancia($row["cveInstancia"]);
                    $tmp[$contador]->setCveMateria($row["cveMateria"]);
                    $tmp[$contador]->setCveTipojuzgado($row["cveTipojuzgado"]);
                    $tmp[$contador]->setCveEdificio($row["cveEdificio"]);
                    $tmp[$contador]->setCveDistrito($row["cveDistrito"]);
                    $tmp[$contador]->setCveRegion($row["cveRegion"]);
                    $tmp[$contador]->setSiglas($row["Siglas"]);
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

    public function selectJuzgadosLikeGral($juzgadosDto, $proveedor = null, $orden = "", $param = null, $fields = null) {

        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }


        $sql = "SELECT ";
        if ($fields === null) {
            $sql .= " cveJuzgado,desJuzgado,activo,fechaRegistro,fechaActualizacion,cveInstancia,cveMateria,cveTipojuzgado,cveEdificio,cveDistrito,cveRegion,Siglas  ";
        } else {
            $sql .= $fields;
        }
        $sql .= "FROM tbljuzgados";

        if (($juzgadosDto->getCveJuzgado() != "") || ($juzgadosDto->getDesJuzgado() != "") || ($juzgadosDto->getActivo() != "") || ($juzgadosDto->getFechaRegistro() != "") || ($juzgadosDto->getFechaActualizacion() != "") || ($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
            $sql.=" WHERE ";
        }
        if ($juzgadosDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado='" . $juzgadosDto->getCveJuzgado() . "'";
            if (($juzgadosDto->getDesJuzgado() != "") || ($juzgadosDto->getActivo() != "") || ($juzgadosDto->getFechaRegistro() != "") || ($juzgadosDto->getFechaActualizacion() != "") || ($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getDesJuzgado() != "") {
            $sql.="desJuzgado like'%" . $juzgadosDto->getDesJuzgado() . "%'";
            if (($juzgadosDto->getActivo() != "") || ($juzgadosDto->getFechaRegistro() != "") || ($juzgadosDto->getFechaActualizacion() != "") || ($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getActivo() != "") {
            $sql.="activo='" . $juzgadosDto->getActivo() . "'";
            if (($juzgadosDto->getFechaRegistro() != "") || ($juzgadosDto->getFechaActualizacion() != "") || ($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $juzgadosDto->getFechaRegistro() . "'";
            if (($juzgadosDto->getFechaActualizacion() != "") || ($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $juzgadosDto->getFechaActualizacion() . "'";
            if (($juzgadosDto->getCveInstancia() != "") || ($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getCveInstancia() != "") {
            $sql.="cveInstancia='" . $juzgadosDto->getCveInstancia() . "'";
            if (($juzgadosDto->getCveMateria() != "") || ($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getCveMateria() != "") {
            $sql.="cveMateria='" . $juzgadosDto->getCveMateria() . "'";
            if (($juzgadosDto->getCveTipojuzgado() != "") || ($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getCveTipojuzgado() != "") {
            $sql.="cveTipojuzgado='" . $juzgadosDto->getCveTipojuzgado() . "'";
            if (($juzgadosDto->getCveEdificio() != "") || ($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getCveEdificio() != "") {
            $sql.="cveEdificio='" . $juzgadosDto->getCveEdificio() . "'";
            if (($juzgadosDto->getCveDistrito() != "") || ($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getCveDistrito() != "") {
            $sql.="cveDistrito='" . $juzgadosDto->getCveDistrito() . "'";
            if (($juzgadosDto->getCveRegion() != "") || ($juzgadosDto->getSiglas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getCveRegion() != "") {
            $sql.="cveRegion='" . $juzgadosDto->getCveRegion() . "'";
            if (($juzgadosDto->getSiglas() != "")) {
                $sql.=" AND ";
            }
        }
        if ($juzgadosDto->getSiglas() != "") {
            $sql.="Siglas='" . $juzgadosDto->getSiglas() . "'";
        }
        if ($param != "") {
            if ($param["paginacion"] == "true") {
                if ($param["pag"] > 0) {
                    $inicial = ($param["pag"] - 1) * $param["cantxPag"];
                } else {
                    $inicial = 0;
                }
            }
        }

        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
            $sql.= " order by desJuzgado DESC";
        }

        if ($param != "" || $param != null) {
            if ($param["paginacion"] == "true") {
                $sql.=" LIMIT " . $inicial . "," . $param["cantxPag"];
            }
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($fields === null) {
                        $tmp[$contador] = new JuzgadosDTO();
                        $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                        $tmp[$contador]->setDesJuzgado($row["desJuzgado"]);
                        $tmp[$contador]->setActivo($row["activo"]);
                        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                        $tmp[$contador]->setCveInstancia($row["cveInstancia"]);
                        $tmp[$contador]->setCveMateria($row["cveMateria"]);
                        $tmp[$contador]->setCveTipojuzgado($row["cveTipojuzgado"]);
                        $tmp[$contador]->setCveEdificio($row["cveEdificio"]);
                        $tmp[$contador]->setCveDistrito($row["cveDistrito"]);
                        $tmp[$contador]->setCveRegion($row["cveRegion"]);
                        $tmp[$contador]->setSiglas($row["Siglas"]);
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