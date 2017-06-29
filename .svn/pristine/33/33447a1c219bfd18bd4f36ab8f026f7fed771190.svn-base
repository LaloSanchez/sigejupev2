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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/regiones/RegionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class RegionesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion")
    {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion()
    {
        $this->_proveedor->connect();
    }

    public function insertRegiones($regionesDto, $proveedor = null)
    {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblregiones(";
        if ($regionesDto->getcveRegion() != "") {
            $sql .= "cveRegion";
            if (($regionesDto->getDesRegion() != "") || ($regionesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($regionesDto->getdesRegion() != "") {
            $sql .= "desRegion";
            if (($regionesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($regionesDto->getactivo() != "") {
            $sql .= "activo";
        }
        $sql .= ",fechaRegistro";
        $sql .= ",fechaActualizacion";
        $sql .= ") VALUES(";
        if ($regionesDto->getcveRegion() != "") {
            $sql .= "'" . $regionesDto->getcveRegion() . "'";
            if (($regionesDto->getDesRegion() != "") || ($regionesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($regionesDto->getdesRegion() != "") {
            $sql .= "'" . $regionesDto->getdesRegion() . "'";
            if (($regionesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($regionesDto->getactivo() != "") {
            $sql .= "'" . $regionesDto->getactivo() . "'";
        }
        if ($regionesDto->getfechaRegistro() != "") {
        }
        if ($regionesDto->getfechaActualizacion() != "") {
        }
        $sql .= ",now()";
        $sql .= ",now()";
        $sql .= ")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new RegionesDTO();
            $tmp->setcveRegion($this->_proveedor->lastID());
            $tmp = $this->selectRegiones($tmp, "", $this->_proveedor);
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

    public function updateRegiones($regionesDto, $proveedor = null)
    {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblregiones SET ";
        if ($regionesDto->getcveRegion() != "") {
            $sql .= "cveRegion='" . $regionesDto->getcveRegion() . "'";
            if (($regionesDto->getDesRegion() != "") || ($regionesDto->getActivo() != "") || ($regionesDto->getFechaRegistro() != "") || ($regionesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($regionesDto->getdesRegion() != "") {
            $sql .= "desRegion='" . $regionesDto->getdesRegion() . "'";
            if (($regionesDto->getActivo() != "") || ($regionesDto->getFechaRegistro() != "") || ($regionesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($regionesDto->getactivo() != "") {
            $sql .= "activo='" . $regionesDto->getactivo() . "'";
            if (($regionesDto->getFechaRegistro() != "") || ($regionesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($regionesDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $regionesDto->getfechaRegistro() . "'";
            if (($regionesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($regionesDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $regionesDto->getfechaActualizacion() . "'";
        }
        $sql .= " WHERE cveRegion='" . $regionesDto->getcveRegion() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new RegionesDTO();
            $tmp->setcveRegion($regionesDto->getcveRegion());
            $tmp = $this->selectRegiones($tmp, "", $this->_proveedor);
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

    public function deleteRegiones($regionesDto, $proveedor = null)
    {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblregiones  WHERE cveRegion='" . $regionesDto->getcveRegion() . "'";
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

    public function selectRegiones($regionesDto, $orden = "", $proveedor = null)
    {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveRegion,desRegion,activo,fechaRegistro,fechaActualizacion FROM tblregiones ";
        if (($regionesDto->getcveRegion() != "") || ($regionesDto->getdesRegion() != "") || ($regionesDto->getactivo() != "") || ($regionesDto->getfechaRegistro() != "") || ($regionesDto->getfechaActualizacion() != "")) {
            $sql .= " WHERE ";
        }
        if ($regionesDto->getcveRegion() != "") {
            $sql .= "cveRegion='" . $regionesDto->getCveRegion() . "'";
            if (($regionesDto->getDesRegion() != "") || ($regionesDto->getActivo() != "") || ($regionesDto->getFechaRegistro() != "") || ($regionesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($regionesDto->getdesRegion() != "") {
            $sql .= "desRegion='" . $regionesDto->getDesRegion() . "'";
            if (($regionesDto->getActivo() != "") || ($regionesDto->getFechaRegistro() != "") || ($regionesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($regionesDto->getactivo() != "") {
            $sql .= "activo='" . $regionesDto->getActivo() . "'";
            if (($regionesDto->getFechaRegistro() != "") || ($regionesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($regionesDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $regionesDto->getFechaRegistro() . "'";
            if (($regionesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($regionesDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $regionesDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new RegionesDTO();
                    $tmp[$contador]->setCveRegion($row["cveRegion"]);
                    $tmp[$contador]->setDesRegion($row["desRegion"]);
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