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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/municipios/MunicipiosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class MunicipiosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion")
    {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion()
    {
        $this->_proveedor->connect();
    }

    public function insertMunicipios($municipiosDto, $proveedor = null)
    {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblmunicipios(";
        if ($municipiosDto->getcveMunicipio() != "") {
            $sql .= "cveMunicipio";
            if (($municipiosDto->getDesMunicipio() != "") || ($municipiosDto->getActivo() != "") || ($municipiosDto->getCveEstado() != "")) {
                $sql .= ",";
            }
        }
        if ($municipiosDto->getdesMunicipio() != "") {
            $sql .= "desMunicipio";
            if (($municipiosDto->getActivo() != "") || ($municipiosDto->getCveEstado() != "")) {
                $sql .= ",";
            }
        }
        if ($municipiosDto->getactivo() != "") {
            $sql .= "activo";
            if (($municipiosDto->getCveEstado() != "")) {
                $sql .= ",";
            }
        }
        if ($municipiosDto->getcveEstado() != "") {
            $sql .= "cveEstado";
        }
        $sql .= ",fechaRegistro";
        $sql .= ",fechaActualizacion";
        $sql .= ") VALUES(";
        if ($municipiosDto->getcveMunicipio() != "") {
            $sql .= "'" . $municipiosDto->getcveMunicipio() . "'";
            if (($municipiosDto->getDesMunicipio() != "") || ($municipiosDto->getActivo() != "") || ($municipiosDto->getCveEstado() != "")) {
                $sql .= ",";
            }
        }
        if ($municipiosDto->getdesMunicipio() != "") {
            $sql .= "'" . $municipiosDto->getdesMunicipio() . "'";
            if (($municipiosDto->getActivo() != "") || ($municipiosDto->getCveEstado() != "")) {
                $sql .= ",";
            }
        }
        if ($municipiosDto->getactivo() != "") {
            $sql .= "'" . $municipiosDto->getactivo() . "'";
            if (($municipiosDto->getCveEstado() != "")) {
                $sql .= ",";
            }
        }
        if ($municipiosDto->getcveEstado() != "") {
            $sql .= "'" . $municipiosDto->getcveEstado() . "'";
        }
        if ($municipiosDto->getfechaRegistro() != "") {
        }
        if ($municipiosDto->getfechaActualizacion() != "") {
        }
        $sql .= ",now()";
        $sql .= ",now()";
        $sql .= ")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new MunicipiosDTO();
            $tmp->setcveMunicipio($this->_proveedor->lastID());
            $tmp = $this->selectMunicipios($tmp, "", $this->_proveedor);
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

    public function updateMunicipios($municipiosDto, $proveedor = null)
    {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblmunicipios SET ";
        if ($municipiosDto->getcveMunicipio() != "") {
            $sql .= "cveMunicipio='" . $municipiosDto->getcveMunicipio() . "'";
            if (($municipiosDto->getDesMunicipio() != "") || ($municipiosDto->getActivo() != "") || ($municipiosDto->getCveEstado() != "") || ($municipiosDto->getFechaRegistro() != "") || ($municipiosDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($municipiosDto->getdesMunicipio() != "") {
            $sql .= "desMunicipio='" . $municipiosDto->getdesMunicipio() . "'";
            if (($municipiosDto->getActivo() != "") || ($municipiosDto->getCveEstado() != "") || ($municipiosDto->getFechaRegistro() != "") || ($municipiosDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($municipiosDto->getactivo() != "") {
            $sql .= "activo='" . $municipiosDto->getactivo() . "'";
            if (($municipiosDto->getCveEstado() != "") || ($municipiosDto->getFechaRegistro() != "") || ($municipiosDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($municipiosDto->getcveEstado() != "") {
            $sql .= "cveEstado='" . $municipiosDto->getcveEstado() . "'";
            if (($municipiosDto->getFechaRegistro() != "") || ($municipiosDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($municipiosDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $municipiosDto->getfechaRegistro() . "'";
            if (($municipiosDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($municipiosDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $municipiosDto->getfechaActualizacion() . "'";
        }
        $sql .= " WHERE cveMunicipio='" . $municipiosDto->getcveMunicipio() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new MunicipiosDTO();
            $tmp->setcveMunicipio($municipiosDto->getcveMunicipio());
            $tmp = $this->selectMunicipios($tmp, "", $this->_proveedor);
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

    public function deleteMunicipios($municipiosDto, $proveedor = null)
    {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblmunicipios  WHERE cveMunicipio='" . $municipiosDto->getcveMunicipio() . "'";
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

    public function selectMunicipios($municipiosDto, $orden = "", $proveedor = null)
    {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveMunicipio,desMunicipio,activo,cveEstado,fechaRegistro,fechaActualizacion FROM tblmunicipios ";
        if (($municipiosDto->getcveMunicipio() != "") || ($municipiosDto->getdesMunicipio() != "") || ($municipiosDto->getactivo() != "") || ($municipiosDto->getcveEstado() != "") || ($municipiosDto->getfechaRegistro() != "") || ($municipiosDto->getfechaActualizacion() != "")) {
            $sql .= " WHERE ";
        }
        if ($municipiosDto->getcveMunicipio() != "") {
            $sql .= "cveMunicipio='" . $municipiosDto->getCveMunicipio() . "'";
            if (($municipiosDto->getDesMunicipio() != "") || ($municipiosDto->getActivo() != "") || ($municipiosDto->getCveEstado() != "") || ($municipiosDto->getFechaRegistro() != "") || ($municipiosDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($municipiosDto->getdesMunicipio() != "") {
            $sql .= "desMunicipio='" . $municipiosDto->getDesMunicipio() . "'";
            if (($municipiosDto->getActivo() != "") || ($municipiosDto->getCveEstado() != "") || ($municipiosDto->getFechaRegistro() != "") || ($municipiosDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($municipiosDto->getactivo() != "") {
            $sql .= "activo='" . $municipiosDto->getActivo() . "'";
            if (($municipiosDto->getCveEstado() != "") || ($municipiosDto->getFechaRegistro() != "") || ($municipiosDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($municipiosDto->getcveEstado() != "") {
            $sql .= "cveEstado='" . $municipiosDto->getCveEstado() . "'";
            if (($municipiosDto->getFechaRegistro() != "") || ($municipiosDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($municipiosDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $municipiosDto->getFechaRegistro() . "'";
            if (($municipiosDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($municipiosDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $municipiosDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new MunicipiosDTO();
                    $tmp[$contador]->setCveMunicipio($row["cveMunicipio"]);
                    $tmp[$contador]->setDesMunicipio($row["desMunicipio"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setCveEstado($row["cveEstado"]);
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