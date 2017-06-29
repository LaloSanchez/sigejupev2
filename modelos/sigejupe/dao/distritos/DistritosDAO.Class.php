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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/distritos/DistritosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class DistritosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion")
    {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion()
    {
        $this->_proveedor->connect();
    }

    public function insertDistritos($distritosDto, $proveedor = null)
    {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbldistritos(";
        if ($distritosDto->getcveDistrito() != "") {
            $sql .= "cveDistrito";
            if (($distritosDto->getCveRegion() != "") || ($distritosDto->getDesDistrito() != "") || ($distritosDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($distritosDto->getcveRegion() != "") {
            $sql .= "cveRegion";
            if (($distritosDto->getDesDistrito() != "") || ($distritosDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($distritosDto->getdesDistrito() != "") {
            $sql .= "desDistrito";
            if (($distritosDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($distritosDto->getactivo() != "") {
            $sql .= "activo";
        }
        $sql .= ",fechaRegistro";
        $sql .= ",fechaActualizacion";
        $sql .= ") VALUES(";
        if ($distritosDto->getcveDistrito() != "") {
            $sql .= "'" . $distritosDto->getcveDistrito() . "'";
            if (($distritosDto->getCveRegion() != "") || ($distritosDto->getDesDistrito() != "") || ($distritosDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($distritosDto->getcveRegion() != "") {
            $sql .= "'" . $distritosDto->getcveRegion() . "'";
            if (($distritosDto->getDesDistrito() != "") || ($distritosDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($distritosDto->getdesDistrito() != "") {
            $sql .= "'" . $distritosDto->getdesDistrito() . "'";
            if (($distritosDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($distritosDto->getactivo() != "") {
            $sql .= "'" . $distritosDto->getactivo() . "'";
        }
        if ($distritosDto->getfechaRegistro() != "") {
        }
        if ($distritosDto->getfechaActualizacion() != "") {
        }
        $sql .= ",now()";
        $sql .= ",now()";
        $sql .= ")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DistritosDTO();
            $tmp->setcveDistrito($this->_proveedor->lastID());
            $tmp = $this->selectDistritos($tmp, "", $this->_proveedor);
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

    public function updateDistritos($distritosDto, $proveedor = null)
    {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbldistritos SET ";
        if ($distritosDto->getcveDistrito() != "") {
            $sql .= "cveDistrito='" . $distritosDto->getcveDistrito() . "'";
            if (($distritosDto->getCveRegion() != "") || ($distritosDto->getDesDistrito() != "") || ($distritosDto->getActivo() != "") || ($distritosDto->getFechaRegistro() != "") || ($distritosDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($distritosDto->getcveRegion() != "") {
            $sql .= "cveRegion='" . $distritosDto->getcveRegion() . "'";
            if (($distritosDto->getDesDistrito() != "") || ($distritosDto->getActivo() != "") || ($distritosDto->getFechaRegistro() != "") || ($distritosDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($distritosDto->getdesDistrito() != "") {
            $sql .= "desDistrito='" . $distritosDto->getdesDistrito() . "'";
            if (($distritosDto->getActivo() != "") || ($distritosDto->getFechaRegistro() != "") || ($distritosDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($distritosDto->getactivo() != "") {
            $sql .= "activo='" . $distritosDto->getactivo() . "'";
            if (($distritosDto->getFechaRegistro() != "") || ($distritosDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($distritosDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $distritosDto->getfechaRegistro() . "'";
            if (($distritosDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($distritosDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $distritosDto->getfechaActualizacion() . "'";
        }
        $sql .= " WHERE cveDistrito='" . $distritosDto->getcveDistrito() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DistritosDTO();
            $tmp->setcveDistrito($distritosDto->getcveDistrito());
            $tmp = $this->selectDistritos($tmp, "", $this->_proveedor);
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

    public function deleteDistritos($distritosDto, $proveedor = null)
    {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbldistritos  WHERE cveDistrito='" . $distritosDto->getcveDistrito() . "'";
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

    public function selectDistritos($distritosDto, $orden = "", $proveedor = null)
    {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveDistrito,cveRegion,desDistrito,activo,fechaRegistro,fechaActualizacion FROM tbldistritos ";
        if (($distritosDto->getcveDistrito() != "") || ($distritosDto->getcveRegion() != "") || ($distritosDto->getdesDistrito() != "") || ($distritosDto->getactivo() != "") || ($distritosDto->getfechaRegistro() != "") || ($distritosDto->getfechaActualizacion() != "")) {
            $sql .= " WHERE ";
        }
        if ($distritosDto->getcveDistrito() != "") {
            $sql .= "cveDistrito='" . $distritosDto->getCveDistrito() . "'";
            if (($distritosDto->getCveRegion() != "") || ($distritosDto->getDesDistrito() != "") || ($distritosDto->getActivo() != "") || ($distritosDto->getFechaRegistro() != "") || ($distritosDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($distritosDto->getcveRegion() != "") {
            $sql .= "cveRegion='" . $distritosDto->getCveRegion() . "'";
            if (($distritosDto->getDesDistrito() != "") || ($distritosDto->getActivo() != "") || ($distritosDto->getFechaRegistro() != "") || ($distritosDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($distritosDto->getdesDistrito() != "") {
            $sql .= "desDistrito='" . $distritosDto->getDesDistrito() . "'";
            if (($distritosDto->getActivo() != "") || ($distritosDto->getFechaRegistro() != "") || ($distritosDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($distritosDto->getactivo() != "") {
            $sql .= "activo='" . $distritosDto->getActivo() . "'";
            if (($distritosDto->getFechaRegistro() != "") || ($distritosDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($distritosDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $distritosDto->getFechaRegistro() . "'";
            if (($distritosDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($distritosDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $distritosDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new DistritosDTO();
                    $tmp[$contador]->setCveDistrito($row["cveDistrito"]);
                    $tmp[$contador]->setCveRegion($row["cveRegion"]);
                    $tmp[$contador]->setDesDistrito($row["desDistrito"]);
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

?>