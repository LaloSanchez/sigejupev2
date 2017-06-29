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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/salasjuzgadores/SalasjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class SalasjuzgadoresDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion")
    {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion()
    {
        $this->_proveedor->connect();
    }

    public function insertSalasjuzgadores($salasjuzgadoresDto, $proveedor = null)
    {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblsalasjuzgadores(";
        if ($salasjuzgadoresDto->getidSalasJuzgador() != "") {
            $sql .= "idSalasJuzgador";
            if (($salasjuzgadoresDto->getCveSala() != "") || ($salasjuzgadoresDto->getIdJuzgador() != "") || ($salasjuzgadoresDto->getActivo() != "") || ($salasjuzgadoresDto->getCveCondicion() != "")) {
                $sql .= ",";
            }
        }
        if ($salasjuzgadoresDto->getcveSala() != "") {
            $sql .= "cveSala";
            if (($salasjuzgadoresDto->getIdJuzgador() != "") || ($salasjuzgadoresDto->getActivo() != "") || ($salasjuzgadoresDto->getCveCondicion() != "")) {
                $sql .= ",";
            }
        }
        if ($salasjuzgadoresDto->getidJuzgador() != "") {
            $sql .= "idJuzgador";
            if (($salasjuzgadoresDto->getActivo() != "") || ($salasjuzgadoresDto->getCveCondicion() != "")) {
                $sql .= ",";
            }
        }
        if ($salasjuzgadoresDto->getactivo() != "") {
            $sql .= "activo";
            if (($salasjuzgadoresDto->getCveCondicion() != "")) {
                $sql .= ",";
            }
        }
        if ($salasjuzgadoresDto->getcveCondicion() != "") {
            $sql .= "cveCondicion";
            if (($salasjuzgadoresDto->getCveJuzgado() != "")) {
                $sql .= ",";
            }
        }

        if (($salasjuzgadoresDto->getCveJuzgado() != "")) {
            $sql .= "cveJuzgado";
        }

        $sql .= ",fechaRegistro";
        $sql .= ",fechaActualizacion";
        $sql .= ") VALUES(";
        if ($salasjuzgadoresDto->getidSalasJuzgador() != "") {
            $sql .= "'" . $salasjuzgadoresDto->getidSalasJuzgador() . "'";
            if (($salasjuzgadoresDto->getCveSala() != "") || ($salasjuzgadoresDto->getIdJuzgador() != "") || ($salasjuzgadoresDto->getActivo() != "") || ($salasjuzgadoresDto->getCveCondicion() != "")) {
                $sql .= ",";
            }
        }
        if ($salasjuzgadoresDto->getcveSala() != "") {
            $sql .= "'" . $salasjuzgadoresDto->getcveSala() . "'";
            if (($salasjuzgadoresDto->getIdJuzgador() != "") || ($salasjuzgadoresDto->getActivo() != "") || ($salasjuzgadoresDto->getCveCondicion() != "")) {
                $sql .= ",";
            }
        }
        if ($salasjuzgadoresDto->getidJuzgador() != "") {
            $sql .= "'" . $salasjuzgadoresDto->getidJuzgador() . "'";
            if (($salasjuzgadoresDto->getActivo() != "") || ($salasjuzgadoresDto->getCveCondicion() != "")) {
                $sql .= ",";
            }
        }

        if ($salasjuzgadoresDto->getactivo() != "") {
            $sql .= "'" . $salasjuzgadoresDto->getactivo() . "'";
            if (($salasjuzgadoresDto->getCveCondicion() != "")) {
                $sql .= ",";
            }
        }

        if ($salasjuzgadoresDto->getcveCondicion() != "") {
            $sql .= "'" . $salasjuzgadoresDto->getcveCondicion() . "'";
            if (($salasjuzgadoresDto->getCveJuzgado() != "")) {
                $sql .= ",";
            }
        }

        if ($salasjuzgadoresDto->getCveJuzgado() != "") {
            $sql .= "'" . $salasjuzgadoresDto->getCveJuzgado() . "'";
        }

        $sql .= ",now()";
        $sql .= ",now()";
        $sql .= ")";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new SalasjuzgadoresDTO();
            $tmp->setidSalasJuzgador($this->_proveedor->lastID());
            $tmp = $this->selectSalasjuzgadores($tmp, "", $this->_proveedor);
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

    public function updateSalasjuzgadores($salasjuzgadoresDto, $proveedor = null)
    {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblsalasjuzgadores SET ";
        if ($salasjuzgadoresDto->getidSalasJuzgador() != "") {
            $sql .= "idSalasJuzgador='" . $salasjuzgadoresDto->getidSalasJuzgador() . "'";
            if (($salasjuzgadoresDto->getCveSala() != "") || ($salasjuzgadoresDto->getIdJuzgador() != "") || ($salasjuzgadoresDto->getFechaRegistro() != "") || ($salasjuzgadoresDto->getFechaActualizacion() != "") || ($salasjuzgadoresDto->getActivo() != "") || ($salasjuzgadoresDto->getCveCondicion() != "")) {
                $sql .= ",";
            }
        }
        if ($salasjuzgadoresDto->getcveSala() != "") {
            $sql .= "cveSala='" . $salasjuzgadoresDto->getcveSala() . "'";
            if (($salasjuzgadoresDto->getIdJuzgador() != "") || ($salasjuzgadoresDto->getFechaRegistro() != "") || ($salasjuzgadoresDto->getFechaActualizacion() != "") || ($salasjuzgadoresDto->getActivo() != "") || ($salasjuzgadoresDto->getCveCondicion() != "")) {
                $sql .= ",";
            }
        }
        if ($salasjuzgadoresDto->getidJuzgador() != "") {
            $sql .= "idJuzgador='" . $salasjuzgadoresDto->getidJuzgador() . "'";
            if (($salasjuzgadoresDto->getFechaRegistro() != "") || ($salasjuzgadoresDto->getFechaActualizacion() != "") || ($salasjuzgadoresDto->getActivo() != "") || ($salasjuzgadoresDto->getCveCondicion() != "")) {
                $sql .= ",";
            }
        }
        if ($salasjuzgadoresDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $salasjuzgadoresDto->getfechaRegistro() . "'";
            if (($salasjuzgadoresDto->getFechaActualizacion() != "") || ($salasjuzgadoresDto->getActivo() != "") || ($salasjuzgadoresDto->getCveCondicion() != "")) {
                $sql .= ",";
            }
        }
        if ($salasjuzgadoresDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion=NOW()";
            if (($salasjuzgadoresDto->getActivo() != "") || ($salasjuzgadoresDto->getCveCondicion() != "")) {
                $sql .= ",";
            }
        }
        if ($salasjuzgadoresDto->getactivo() != "") {
            $sql .= "activo='" . $salasjuzgadoresDto->getactivo() . "'";
            if (($salasjuzgadoresDto->getCveCondicion() != "")) {
                $sql .= ",";
            }
        }
        if ($salasjuzgadoresDto->getcveCondicion() != "") {
            $sql .= "cveCondicion='" . $salasjuzgadoresDto->getcveCondicion() . "'";
        }
        $sql .= " WHERE idSalasJuzgador='" . $salasjuzgadoresDto->getidSalasJuzgador() . "'";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new SalasjuzgadoresDTO();
            $tmp->setidSalasJuzgador($salasjuzgadoresDto->getidSalasJuzgador());
            $tmp = $this->selectSalasjuzgadores($tmp, "", $this->_proveedor);
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

    public function deleteSalasjuzgadores($salasjuzgadoresDto, $proveedor = null)
    {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblsalasjuzgadores  WHERE idSalasJuzgador='" . $salasjuzgadoresDto->getidSalasJuzgador() . "'";
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

    public function selectSalasjuzgadores($salasjuzgadoresDto, $orden = "", $proveedor = null)
    {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idSalasJuzgador,cveSala,idJuzgador,fechaRegistro,fechaActualizacion,activo,cveCondicion,cveJuzgado FROM tblsalasjuzgadores ";
        if (($salasjuzgadoresDto->getidSalasJuzgador() != "") || ($salasjuzgadoresDto->getcveSala() != "") || ($salasjuzgadoresDto->getidJuzgador() != "") || ($salasjuzgadoresDto->getfechaRegistro() != "") || ($salasjuzgadoresDto->getfechaActualizacion() != "") || ($salasjuzgadoresDto->getactivo() != "") || ($salasjuzgadoresDto->getcveCondicion() != "") || ($salasjuzgadoresDto->getCveJuzgado() != "")) {
            $sql .= " WHERE ";
        }
        if ($salasjuzgadoresDto->getidSalasJuzgador() != "") {
            $sql .= "idSalasJuzgador='" . $salasjuzgadoresDto->getIdSalasJuzgador() . "'";
            if (($salasjuzgadoresDto->getCveSala() != "") || ($salasjuzgadoresDto->getIdJuzgador() != "") || ($salasjuzgadoresDto->getFechaRegistro() != "") || ($salasjuzgadoresDto->getFechaActualizacion() != "") || ($salasjuzgadoresDto->getActivo() != "") || ($salasjuzgadoresDto->getCveCondicion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($salasjuzgadoresDto->getcveSala() != "") {
            $sql .= "cveSala='" . $salasjuzgadoresDto->getCveSala() . "'";
            if (($salasjuzgadoresDto->getIdJuzgador() != "") || ($salasjuzgadoresDto->getFechaRegistro() != "") || ($salasjuzgadoresDto->getFechaActualizacion() != "") || ($salasjuzgadoresDto->getActivo() != "") || ($salasjuzgadoresDto->getCveCondicion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($salasjuzgadoresDto->getidJuzgador() != "") {
            $sql .= "idJuzgador='" . $salasjuzgadoresDto->getIdJuzgador() . "'";
            if (($salasjuzgadoresDto->getFechaRegistro() != "") || ($salasjuzgadoresDto->getFechaActualizacion() != "") || ($salasjuzgadoresDto->getActivo() != "") || ($salasjuzgadoresDto->getCveCondicion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($salasjuzgadoresDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $salasjuzgadoresDto->getFechaRegistro() . "'";
            if (($salasjuzgadoresDto->getFechaActualizacion() != "") || ($salasjuzgadoresDto->getActivo() != "") || ($salasjuzgadoresDto->getCveCondicion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($salasjuzgadoresDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $salasjuzgadoresDto->getFechaActualizacion() . "'";
            if (($salasjuzgadoresDto->getActivo() != "") || ($salasjuzgadoresDto->getCveCondicion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($salasjuzgadoresDto->getactivo() != "") {
            $sql .= "activo='" . $salasjuzgadoresDto->getActivo() . "'";
            if (($salasjuzgadoresDto->getCveCondicion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($salasjuzgadoresDto->getcveCondicion() != "") {
            $sql .= "cveCondicion='" . $salasjuzgadoresDto->getCveCondicion() . "'";
            if (($salasjuzgadoresDto->getCveJuzgado() != "")) {
                $sql .= " AND ";
            }
        }
        if ($salasjuzgadoresDto->getCveJuzgado() != "") {
            $sql .= "cveJuzgado='" . $salasjuzgadoresDto->getCveJuzgado() . "'";
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
                    $tmp[$contador] = new SalasjuzgadoresDTO();
                    $tmp[$contador]->setIdSalasJuzgador($row["idSalasJuzgador"]);
                    $tmp[$contador]->setCveSala($row["cveSala"]);
                    $tmp[$contador]->setIdJuzgador($row["idJuzgador"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setActivo($row["activo"]);
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

?>