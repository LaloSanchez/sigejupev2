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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/ordenesprotecciones/OrdenesproteccionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class OrdenesproteccionesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion")
    {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion()
    {
        $this->_proveedor->connect();
    }

    public function insertOrdenesprotecciones($ordenesproteccionesDto, $proveedor = null)
    {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblordenesprotecciones(";
        if ($ordenesproteccionesDto->getcveOrdenProteccion() != "") {
            $sql .= "cveOrdenProteccion";
            if (($ordenesproteccionesDto->getDesOrdenProteccion() != "") || ($ordenesproteccionesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($ordenesproteccionesDto->getdesOrdenProteccion() != "") {
            $sql .= "desOrdenProteccion";
            if (($ordenesproteccionesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($ordenesproteccionesDto->getactivo() != "") {
            $sql .= "activo";
        }
        $sql .= ",fechaRegistro";
        $sql .= ",fechaActualizacion";
        $sql .= ") VALUES(";
        if ($ordenesproteccionesDto->getcveOrdenProteccion() != "") {
            $sql .= "'" . $ordenesproteccionesDto->getcveOrdenProteccion() . "'";
            if (($ordenesproteccionesDto->getDesOrdenProteccion() != "") || ($ordenesproteccionesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($ordenesproteccionesDto->getdesOrdenProteccion() != "") {
            $sql .= "'" . $ordenesproteccionesDto->getdesOrdenProteccion() . "'";
            if (($ordenesproteccionesDto->getActivo() != "")) {
                $sql .= ",";
            }
        }
        if ($ordenesproteccionesDto->getactivo() != "") {
            $sql .= "'" . $ordenesproteccionesDto->getactivo() . "'";
        }
        if ($ordenesproteccionesDto->getfechaRegistro() != "") {
        }
        if ($ordenesproteccionesDto->getfechaActualizacion() != "") {
        }
        $sql .= ",now()";
        $sql .= ",now()";
        $sql .= ")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new OrdenesproteccionesDTO();
            $tmp->setcveOrdenProteccion($this->_proveedor->lastID());
            $tmp = $this->selectOrdenesprotecciones($tmp, "", $this->_proveedor);
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

    public function updateOrdenesprotecciones($ordenesproteccionesDto, $proveedor = null)
    {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblordenesprotecciones SET ";
        if ($ordenesproteccionesDto->getcveOrdenProteccion() != "") {
            $sql .= "cveOrdenProteccion='" . $ordenesproteccionesDto->getcveOrdenProteccion() . "'";
            if (($ordenesproteccionesDto->getDesOrdenProteccion() != "") || ($ordenesproteccionesDto->getActivo() != "") || ($ordenesproteccionesDto->getFechaRegistro() != "") || ($ordenesproteccionesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($ordenesproteccionesDto->getdesOrdenProteccion() != "") {
            $sql .= "desOrdenProteccion='" . $ordenesproteccionesDto->getdesOrdenProteccion() . "'";
            if (($ordenesproteccionesDto->getActivo() != "") || ($ordenesproteccionesDto->getFechaRegistro() != "") || ($ordenesproteccionesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($ordenesproteccionesDto->getactivo() != "") {
            $sql .= "activo='" . $ordenesproteccionesDto->getactivo() . "'";
            if (($ordenesproteccionesDto->getFechaRegistro() != "") || ($ordenesproteccionesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($ordenesproteccionesDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $ordenesproteccionesDto->getfechaRegistro() . "'";
            if (($ordenesproteccionesDto->getFechaActualizacion() != "")) {
                $sql .= ",";
            }
        }
        if ($ordenesproteccionesDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $ordenesproteccionesDto->getfechaActualizacion() . "'";
        }
        $sql .= " WHERE cveOrdenProteccion='" . $ordenesproteccionesDto->getcveOrdenProteccion() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new OrdenesproteccionesDTO();
            $tmp->setcveOrdenProteccion($ordenesproteccionesDto->getcveOrdenProteccion());
            $tmp = $this->selectOrdenesprotecciones($tmp, "", $this->_proveedor);
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

    public function deleteOrdenesprotecciones($ordenesproteccionesDto, $proveedor = null)
    {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblordenesprotecciones  WHERE cveOrdenProteccion='" . $ordenesproteccionesDto->getcveOrdenProteccion() . "'";
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

    public function selectOrdenesprotecciones($ordenesproteccionesDto, $orden = "", $proveedor = null)
    {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveOrdenProteccion,desOrdenProteccion,activo,fechaRegistro,fechaActualizacion FROM tblordenesprotecciones ";
        if (($ordenesproteccionesDto->getcveOrdenProteccion() != "") || ($ordenesproteccionesDto->getdesOrdenProteccion() != "") || ($ordenesproteccionesDto->getactivo() != "") || ($ordenesproteccionesDto->getfechaRegistro() != "") || ($ordenesproteccionesDto->getfechaActualizacion() != "")) {
            $sql .= " WHERE ";
        }
        if ($ordenesproteccionesDto->getcveOrdenProteccion() != "") {
            $sql .= "cveOrdenProteccion='" . $ordenesproteccionesDto->getCveOrdenProteccion() . "'";
            if (($ordenesproteccionesDto->getDesOrdenProteccion() != "") || ($ordenesproteccionesDto->getActivo() != "") || ($ordenesproteccionesDto->getFechaRegistro() != "") || ($ordenesproteccionesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ordenesproteccionesDto->getdesOrdenProteccion() != "") {
            $sql .= "desOrdenProteccion='" . $ordenesproteccionesDto->getDesOrdenProteccion() . "'";
            if (($ordenesproteccionesDto->getActivo() != "") || ($ordenesproteccionesDto->getFechaRegistro() != "") || ($ordenesproteccionesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ordenesproteccionesDto->getactivo() != "") {
            $sql .= "activo='" . $ordenesproteccionesDto->getActivo() . "'";
            if (($ordenesproteccionesDto->getFechaRegistro() != "") || ($ordenesproteccionesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ordenesproteccionesDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $ordenesproteccionesDto->getFechaRegistro() . "'";
            if (($ordenesproteccionesDto->getFechaActualizacion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($ordenesproteccionesDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $ordenesproteccionesDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new OrdenesproteccionesDTO();
                    $tmp[$contador]->setCveOrdenProteccion($row["cveOrdenProteccion"]);
                    $tmp[$contador]->setDesOrdenProteccion(utf8_encode($row["desOrdenProteccion"]));
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