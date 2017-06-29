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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/atencionsalas/AtencionsalasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class AtencionsalasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion")
    {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion()
    {
        $this->_proveedor->connect();
    }

    public function insertAtencionsalas($atencionsalasDto, $proveedor = null)
    {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblatencionsalas(";
        if ($atencionsalasDto->getidAtencionSala() != "") {
            $sql .= "idAtencionSala";
            if (($atencionsalasDto->getCveSala() != "") || ($atencionsalasDto->getCveJuzgado() != "") || ($atencionsalasDto->getCveCondicion() != "")) {
                $sql .= ",";
            }
        }
        if ($atencionsalasDto->getcveSala() != "") {
            $sql .= "cveSala";
            if (($atencionsalasDto->getCveJuzgado() != "") || ($atencionsalasDto->getCveCondicion() != "")) {
                $sql .= ",";
            }
        }
        if ($atencionsalasDto->getcveJuzgado() != "") {
            $sql .= "cveJuzgado";
            if (($atencionsalasDto->getCveCondicion() != "")) {
                $sql .= ",";
            }
        }
        if ($atencionsalasDto->getcveCondicion() != "") {
            $sql .= "cveCondicion";
        }
        $sql .= ",fechaRegistro";
        $sql .= ",fechaActualizacion";
        $sql .= ") VALUES(";
        if ($atencionsalasDto->getidAtencionSala() != "") {
            $sql .= "'" . $atencionsalasDto->getidAtencionSala() . "'";
            if (($atencionsalasDto->getCveSala() != "") || ($atencionsalasDto->getCveJuzgado() != "") || ($atencionsalasDto->getCveCondicion() != "")) {
                $sql .= ",";
            }
        }
        if ($atencionsalasDto->getcveSala() != "") {
            $sql .= "'" . $atencionsalasDto->getcveSala() . "'";
            if (($atencionsalasDto->getCveJuzgado() != "") || ($atencionsalasDto->getCveCondicion() != "")) {
                $sql .= ",";
            }
        }
        if ($atencionsalasDto->getcveJuzgado() != "") {
            $sql .= "'" . $atencionsalasDto->getcveJuzgado() . "'";
            if (($atencionsalasDto->getCveCondicion() != "")) {
                $sql .= ",";
            }
        }

        if ($atencionsalasDto->getcveCondicion() != "") {
            $sql .= "'" . $atencionsalasDto->getcveCondicion() . "',";
        }
        $sql .= "now(),";
        $sql .= "now()";
        $sql .= ")";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new AtencionsalasDTO();
            $tmp->setidAtencionSala($this->_proveedor->lastID());
            //$tmp = $this->selectAtencionsalas($tmp, "", $this->_proveedor);
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

    public function updateAtencionsalas($atencionsalasDto, $proveedor = null)
    {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblatencionsalas SET ";
        if ($atencionsalasDto->getidAtencionSala() != "") {
            $sql .= "idAtencionSala='" . $atencionsalasDto->getidAtencionSala() . "'";
            if (($atencionsalasDto->getCveSala() != "") || ($atencionsalasDto->getCveJuzgado() != "") || ($atencionsalasDto->getFechaRegistro() != "") || ($atencionsalasDto->getFechaActualizacion() != "") || ($atencionsalasDto->getCveCondicion() != "")) {
                $sql .= ",";
            }
        }
        if ($atencionsalasDto->getcveSala() != "") {
            $sql .= "cveSala='" . $atencionsalasDto->getcveSala() . "'";
            if (($atencionsalasDto->getCveJuzgado() != "") || ($atencionsalasDto->getFechaRegistro() != "") || ($atencionsalasDto->getFechaActualizacion() != "") || ($atencionsalasDto->getCveCondicion() != "")) {
                $sql .= ",";
            }
        }
        if ($atencionsalasDto->getcveJuzgado() != "") {
            $sql .= "cveJuzgado='" . $atencionsalasDto->getcveJuzgado() . "'";
            if (($atencionsalasDto->getFechaRegistro() != "") || ($atencionsalasDto->getFechaActualizacion() != "") || ($atencionsalasDto->getCveCondicion() != "")) {
                $sql .= ",";
            }
        }
        if ($atencionsalasDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $atencionsalasDto->getfechaRegistro() . "'";
            if (($atencionsalasDto->getFechaActualizacion() != "") || ($atencionsalasDto->getCveCondicion() != "")) {
                $sql .= ",";
            }
        }
        if ($atencionsalasDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion=NOW()";
            if (($atencionsalasDto->getCveCondicion() != "")) {
                $sql .= ",";
            }
        }
        if ($atencionsalasDto->getcveCondicion() != "") {
            $sql .= "cveCondicion='" . $atencionsalasDto->getcveCondicion() . "'";
        }
        $sql .= " WHERE idAtencionSala='" . $atencionsalasDto->getidAtencionSala() . "'";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new AtencionsalasDTO();
            $tmp->setidAtencionSala($atencionsalasDto->getidAtencionSala());
            $tmp = $this->selectAtencionsalas($tmp, "", $this->_proveedor);
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

    public function deleteAtencionsalas($atencionsalasDto, $proveedor = null)
    {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblatencionsalas WHERE idAtencionSala='" . $atencionsalasDto->getidAtencionSala() . "'";

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

    public function selectAtencionsalas($atencionsalasDto, $orden = "", $proveedor = null)
    {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idAtencionSala,cveSala,cveJuzgado,fechaRegistro,fechaActualizacion,cveCondicion FROM tblatencionsalas ";
        if (($atencionsalasDto->getidAtencionSala() != "") || ($atencionsalasDto->getcveSala() != "") || ($atencionsalasDto->getcveJuzgado() != "") || ($atencionsalasDto->getfechaRegistro() != "") || ($atencionsalasDto->getfechaActualizacion() != "") || ($atencionsalasDto->getcveCondicion() != "")) {
            $sql .= " WHERE ";
        }
        if ($atencionsalasDto->getidAtencionSala() != "") {
            $sql .= "idAtencionSala='" . $atencionsalasDto->getIdAtencionSala() . "'";
            if (($atencionsalasDto->getCveSala() != "") || ($atencionsalasDto->getCveJuzgado() != "") || ($atencionsalasDto->getFechaRegistro() != "") || ($atencionsalasDto->getFechaActualizacion() != "") || ($atencionsalasDto->getCveCondicion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($atencionsalasDto->getcveSala() != "") {
            $sql .= "cveSala='" . $atencionsalasDto->getCveSala() . "'";
            if (($atencionsalasDto->getCveJuzgado() != "") || ($atencionsalasDto->getFechaRegistro() != "") || ($atencionsalasDto->getFechaActualizacion() != "") || ($atencionsalasDto->getCveCondicion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($atencionsalasDto->getcveJuzgado() != "") {
            $sql .= "cveJuzgado='" . $atencionsalasDto->getCveJuzgado() . "'";
            if (($atencionsalasDto->getFechaRegistro() != "") || ($atencionsalasDto->getFechaActualizacion() != "") || ($atencionsalasDto->getCveCondicion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($atencionsalasDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $atencionsalasDto->getFechaRegistro() . "'";
            if (($atencionsalasDto->getFechaActualizacion() != "") || ($atencionsalasDto->getCveCondicion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($atencionsalasDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $atencionsalasDto->getFechaActualizacion() . "'";
            if (($atencionsalasDto->getCveCondicion() != "")) {
                $sql .= " AND ";
            }
        }
        if ($atencionsalasDto->getcveCondicion() != "") {
            $sql .= "cveCondicion='" . $atencionsalasDto->getCveCondicion() . "'";
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
                    $tmp[$contador] = new AtencionsalasDTO();
                    $tmp[$contador]->setIdAtencionSala($row["idAtencionSala"]);
                    $tmp[$contador]->setCveSala($row["cveSala"]);
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

?>