<?php
/*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 DAOS
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/atencionjuzgados/AtencionjuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class AtencionjuzgadosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion")
    {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion()
    {
        $this->_proveedor->connect();
    }

    public function insertAtencionjuzgados($atencionjuzgadosDto, $proveedor = null)
    {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblatencionjuzgados(";
        if ($atencionjuzgadosDto->getidAtencionJuzgado() != "") {
            $sql .= "idAtencionJuzgado";
            if (($atencionjuzgadosDto->getCveAdscripcion() != "") || ($atencionjuzgadosDto->getCveJuzgado() != "") || ($atencionjuzgadosDto->getCveCondicion() != "") || ($atencionjuzgadosDto->getCveTipoUsuario() != '')) {
                $sql .= ",";
            }
        }
        if ($atencionjuzgadosDto->getcveAdscripcion() != "") {
            $sql .= "cveAdscripcion";
            if (($atencionjuzgadosDto->getCveJuzgado() != "") || ($atencionjuzgadosDto->getCveCondicion() != "") || ($atencionjuzgadosDto->getCveTipoUsuario() != '')) {
                $sql .= ",";
            }
        }
        if ($atencionjuzgadosDto->getcveJuzgado() != "") {
            $sql .= "cveJuzgado";
            if (($atencionjuzgadosDto->getCveCondicion() != "") || ($atencionjuzgadosDto->getCveTipoUsuario() != '')) {
                $sql .= ",";
            }
        }
        if ($atencionjuzgadosDto->getcveCondicion() != "") {
            $sql .= "cveCondicion";
            if (($atencionjuzgadosDto->getCveTipoUsuario() != '')) {
                $sql .= ",";
            }
        }
        if ($atencionjuzgadosDto->getCveTipoUsuario() != '') {
            $sql .= "cveTipoUsuario";
        }
        $sql .= ",fechaRegistro";
        $sql .= ",fechaActualizacion";
        $sql .= ") VALUES(";
        if ($atencionjuzgadosDto->getidAtencionJuzgado() != "") {
            $sql .= "'" . $atencionjuzgadosDto->getidAtencionJuzgado() . "'";
            if (($atencionjuzgadosDto->getCveAdscripcion() != "") || ($atencionjuzgadosDto->getCveJuzgado() != "") || ($atencionjuzgadosDto->getCveCondicion() != "") || ($atencionjuzgadosDto->getCveTipoUsuario() != '')) {
                $sql .= ",";
            }
        }
        if ($atencionjuzgadosDto->getcveAdscripcion() != "") {
            $sql .= "'" . $atencionjuzgadosDto->getcveAdscripcion() . "'";
            if (($atencionjuzgadosDto->getCveJuzgado() != "") || ($atencionjuzgadosDto->getCveCondicion() != "") || ($atencionjuzgadosDto->getCveTipoUsuario() != '')) {
                $sql .= ",";
            }
        }
        if ($atencionjuzgadosDto->getcveJuzgado() != "") {
            $sql .= "'" . $atencionjuzgadosDto->getcveJuzgado() . "'";
            if (($atencionjuzgadosDto->getCveCondicion() != "") || ($atencionjuzgadosDto->getCveTipoUsuario() != '')) {
                $sql .= ",";
            }
        }
        if ($atencionjuzgadosDto->getfechaRegistro() != "") {
            if (($atencionjuzgadosDto->getCveCondicion() != "") || ($atencionjuzgadosDto->getCveTipoUsuario() != '')) {
                $sql .= ",";
            }
        }
        if ($atencionjuzgadosDto->getfechaActualizacion() != "") {
            if (($atencionjuzgadosDto->getCveCondicion() != "") || ($atencionjuzgadosDto->getCveTipoUsuario() != '')) {
                $sql .= ",";
            }
        }
        if ($atencionjuzgadosDto->getcveCondicion() != "") {
            $sql .= "'" . $atencionjuzgadosDto->getcveCondicion() . "'";
            if ($atencionjuzgadosDto->getCveTipoUsuario() != '') {
                $sql .= ",";
            }
        }

        if ($atencionjuzgadosDto->getCveTipoUsuario() != "") {
            $sql .= "'" . $atencionjuzgadosDto->getCveTipoUsuario() . "'";
        }

        $sql .= ",now()";
        $sql .= ",now()";
        $sql .= ")";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new AtencionjuzgadosDTO();
            $tmp->setidAtencionJuzgado($this->_proveedor->lastID());
            $tmp = $this->selectAtencionjuzgados($tmp, "", $this->_proveedor);
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

    public function updateAtencionjuzgados($atencionjuzgadosDto, $proveedor = null)
    {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblatencionjuzgados SET ";
        if ($atencionjuzgadosDto->getidAtencionJuzgado() != "") {
            $sql .= "idAtencionJuzgado='" . $atencionjuzgadosDto->getidAtencionJuzgado() . "'";
            if (($atencionjuzgadosDto->getCveAdscripcion() != "") || ($atencionjuzgadosDto->getCveJuzgado() != "") || ($atencionjuzgadosDto->getFechaRegistro() != "") || ($atencionjuzgadosDto->getFechaActualizacion() != "") || ($atencionjuzgadosDto->getCveCondicion() != "") || ($atencionjuzgadosDto->getCveTipoUsuario() != '')) {
                $sql .= ",";
            }
        }
        if ($atencionjuzgadosDto->getcveAdscripcion() != "") {
            $sql .= "cveAdscripcion='" . $atencionjuzgadosDto->getcveAdscripcion() . "'";
            if (($atencionjuzgadosDto->getCveJuzgado() != "") || ($atencionjuzgadosDto->getFechaRegistro() != "") || ($atencionjuzgadosDto->getFechaActualizacion() != "") || ($atencionjuzgadosDto->getCveCondicion() != "") || ($atencionjuzgadosDto->getCveTipoUsuario() != '')) {
                $sql .= ",";
            }
        }
        if ($atencionjuzgadosDto->getcveJuzgado() != "") {
            $sql .= "cveJuzgado='" . $atencionjuzgadosDto->getcveJuzgado() . "'";
            if (($atencionjuzgadosDto->getFechaRegistro() != "") || ($atencionjuzgadosDto->getFechaActualizacion() != "") || ($atencionjuzgadosDto->getCveCondicion() != "") || ($atencionjuzgadosDto->getCveTipoUsuario() != '')) {
                $sql .= ",";
            }
        }
        if ($atencionjuzgadosDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $atencionjuzgadosDto->getfechaRegistro() . "'";
            if (($atencionjuzgadosDto->getFechaActualizacion() != "") || ($atencionjuzgadosDto->getCveCondicion() != "") || ($atencionjuzgadosDto->getCveTipoUsuario() != '')) {
                $sql .= ",";
            }
        }
        if ($atencionjuzgadosDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion=NOW()";
            if (($atencionjuzgadosDto->getCveCondicion() != "") || ($atencionjuzgadosDto->getCveTipoUsuario() != '')) {
                $sql .= ",";
            }
        }
        if ($atencionjuzgadosDto->getcveCondicion() != "") {
            $sql .= "cveCondicion='" . $atencionjuzgadosDto->getcveCondicion() . "'";
            if (($atencionjuzgadosDto->getCveTipoUsuario() != '')) {
                $sql .= ",";
            }
        }
        if ($atencionjuzgadosDto->getCveTipoUsuario() != '') {
            $sql .= "cveTipoUsuario='" . $atencionjuzgadosDto->getCveTipoUsuario() . "'";
        }

        $sql .= " WHERE idAtencionJuzgado='" . $atencionjuzgadosDto->getidAtencionJuzgado() . "'";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new AtencionjuzgadosDTO();
            $tmp->setidAtencionJuzgado($atencionjuzgadosDto->getidAtencionJuzgado());
            $tmp = $this->selectAtencionjuzgados($tmp, "", $this->_proveedor);
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

    public function deleteAtencionjuzgados($atencionjuzgadosDto, $proveedor = null)
    {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblatencionjuzgados  WHERE idAtencionJuzgado='" . $atencionjuzgadosDto->getidAtencionJuzgado() . "'";

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

    public function selectAtencionjuzgados($atencionjuzgadosDto, $orden = "", $proveedor = null)
    {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idAtencionJuzgado,cveAdscripcion,cveJuzgado,fechaRegistro,fechaActualizacion,cveCondicion FROM tblatencionjuzgados ";
        if (($atencionjuzgadosDto->getidAtencionJuzgado() != "") || ($atencionjuzgadosDto->getcveAdscripcion() != "") || ($atencionjuzgadosDto->getcveJuzgado() != "") || ($atencionjuzgadosDto->getfechaRegistro() != "") || ($atencionjuzgadosDto->getfechaActualizacion() != "") || ($atencionjuzgadosDto->getcveCondicion() != "")) {
            $sql .= " WHERE ";
        }
        if ($atencionjuzgadosDto->getidAtencionJuzgado() != "") {
            $sql .= "idAtencionJuzgado='" . $atencionjuzgadosDto->getIdAtencionJuzgado() . "'";
            if (($atencionjuzgadosDto->getCveAdscripcion() != "") || ($atencionjuzgadosDto->getCveJuzgado() != "") || ($atencionjuzgadosDto->getFechaRegistro() != "") || ($atencionjuzgadosDto->getFechaActualizacion() != "") || ($atencionjuzgadosDto->getCveCondicion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($atencionjuzgadosDto->getcveAdscripcion() != "") {
            $sql .= "cveAdscripcion='" . $atencionjuzgadosDto->getCveAdscripcion() . "'";
            if (($atencionjuzgadosDto->getCveJuzgado() != "") || ($atencionjuzgadosDto->getFechaRegistro() != "") || ($atencionjuzgadosDto->getFechaActualizacion() != "") || ($atencionjuzgadosDto->getCveCondicion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($atencionjuzgadosDto->getcveJuzgado() != "") {
            $sql .= "cveJuzgado='" . $atencionjuzgadosDto->getCveJuzgado() . "'";
            if (($atencionjuzgadosDto->getFechaRegistro() != "") || ($atencionjuzgadosDto->getFechaActualizacion() != "") || ($atencionjuzgadosDto->getCveCondicion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($atencionjuzgadosDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $atencionjuzgadosDto->getFechaRegistro() . "'";
            if (($atencionjuzgadosDto->getFechaActualizacion() != "") || ($atencionjuzgadosDto->getCveCondicion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($atencionjuzgadosDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $atencionjuzgadosDto->getFechaActualizacion() . "'";
            if (($atencionjuzgadosDto->getCveCondicion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($atencionjuzgadosDto->getcveCondicion() != "") {
            $sql .= "cveCondicion='" . $atencionjuzgadosDto->getCveCondicion() . "'";
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
                    $tmp[$contador] = new AtencionjuzgadosDTO();
                    $tmp[$contador]->setIdAtencionJuzgado($row["idAtencionJuzgado"]);
                    $tmp[$contador]->setCveAdscripcion($row["cveAdscripcion"]);
                    $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setCveCondicion($row["cveCondicion"]);
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
