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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/nacionalidadesofendidossolicitudes/NacionalidadesofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class NacionalidadesofendidossolicitudesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion")
    {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion()
    {
        $this->_proveedor->connect();
    }

    public function insertNacionalidadesofendidossolicitudes($nacionalidadesofendidossolicitudesDto, $proveedor = null)
    {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblnacionalidadesofendidossolicitudes(";
        if ($nacionalidadesofendidossolicitudesDto->getidNacionalidadOfendidoSolicitud() != "") {
            $sql .= "idNacionalidadOfendidoSolicitud";
            if (($nacionalidadesofendidossolicitudesDto->getCvePais() != "") || ($nacionalidadesofendidossolicitudesDto->getActivo() != "") || ($nacionalidadesofendidossolicitudesDto->getIdOfendidoSolicitud() != "")) {
                $sql .= ",";
            }
        }
        if ($nacionalidadesofendidossolicitudesDto->getcvePais() != "") {
            $sql .= "cvePais";
            if (($nacionalidadesofendidossolicitudesDto->getActivo() != "") || ($nacionalidadesofendidossolicitudesDto->getIdOfendidoSolicitud() != "")) {
                $sql .= ",";
            }
        }
        if ($nacionalidadesofendidossolicitudesDto->getactivo() != "") {
            $sql .= "activo";
            if (($nacionalidadesofendidossolicitudesDto->getIdOfendidoSolicitud() != "")) {
                $sql .= ",";
            }
        }
        if ($nacionalidadesofendidossolicitudesDto->getidOfendidoSolicitud() != "") {
            $sql .= "idOfendidoSolicitud";
        }
        $sql .= ",fechaRegistro";
        $sql .= ",fechaActualizacion";
        $sql .= ") VALUES(";
        if ($nacionalidadesofendidossolicitudesDto->getidNacionalidadOfendidoSolicitud() != "") {
            $sql .= "'" . $nacionalidadesofendidossolicitudesDto->getidNacionalidadOfendidoSolicitud() . "'";
            if (($nacionalidadesofendidossolicitudesDto->getCvePais() != "") || ($nacionalidadesofendidossolicitudesDto->getActivo() != "") || ($nacionalidadesofendidossolicitudesDto->getIdOfendidoSolicitud() != "")) {
                $sql .= ",";
            }
        }
        if ($nacionalidadesofendidossolicitudesDto->getcvePais() != "") {
            $sql .= "'" . $nacionalidadesofendidossolicitudesDto->getcvePais() . "'";
            if (($nacionalidadesofendidossolicitudesDto->getActivo() != "") || ($nacionalidadesofendidossolicitudesDto->getIdOfendidoSolicitud() != "")) {
                $sql .= ",";
            }
        }
        if ($nacionalidadesofendidossolicitudesDto->getactivo() != "") {
            $sql .= "'" . $nacionalidadesofendidossolicitudesDto->getactivo() . "'";
            if (($nacionalidadesofendidossolicitudesDto->getIdOfendidoSolicitud() != "")) {
                $sql .= ",";
            }
        }
        if ($nacionalidadesofendidossolicitudesDto->getfechaRegistro() != "") {
            if (($nacionalidadesofendidossolicitudesDto->getIdOfendidoSolicitud() != "")) {
                $sql .= ",";
            }
        }
        if ($nacionalidadesofendidossolicitudesDto->getfechaActualizacion() != "") {
            if (($nacionalidadesofendidossolicitudesDto->getIdOfendidoSolicitud() != "")) {
                $sql .= ",";
            }
        }
        if ($nacionalidadesofendidossolicitudesDto->getidOfendidoSolicitud() != "") {
            $sql .= "'" . $nacionalidadesofendidossolicitudesDto->getidOfendidoSolicitud() . "'";
        }
        $sql .= ",now()";
        $sql .= ",now()";
        $sql .= ")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new NacionalidadesofendidossolicitudesDTO();
            $tmp->setidNacionalidadOfendidoSolicitud($this->_proveedor->lastID());
            $tmp = $this->selectNacionalidadesofendidossolicitudes($tmp, "", $this->_proveedor);
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


    public function updateNacionalidadesofendidossolicitudes($nacionalidadesofendidossolicitudesDto, $proveedor = null)
    {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblnacionalidadesofendidossolicitudes SET ";
        if ($nacionalidadesofendidossolicitudesDto->getidNacionalidadOfendidoSolicitud() != "") {
            $sql .= "idNacionalidadOfendidoSolicitud='" . $nacionalidadesofendidossolicitudesDto->getidNacionalidadOfendidoSolicitud() . "'";
            if (($nacionalidadesofendidossolicitudesDto->getCvePais() != "") || ($nacionalidadesofendidossolicitudesDto->getActivo() != "") || ($nacionalidadesofendidossolicitudesDto->getFechaRegistro() != "") || ($nacionalidadesofendidossolicitudesDto->getFechaActualizacion() != "") || ($nacionalidadesofendidossolicitudesDto->getIdOfendidoSolicitud() != "")) {
                $sql .= ",";
            }
        }
        if ($nacionalidadesofendidossolicitudesDto->getcvePais() != "") {
            $sql .= "cvePais='" . $nacionalidadesofendidossolicitudesDto->getcvePais() . "'";
            if (($nacionalidadesofendidossolicitudesDto->getActivo() != "") || ($nacionalidadesofendidossolicitudesDto->getFechaRegistro() != "") || ($nacionalidadesofendidossolicitudesDto->getFechaActualizacion() != "") || ($nacionalidadesofendidossolicitudesDto->getIdOfendidoSolicitud() != "")) {
                $sql .= ",";
            }
        }
        if ($nacionalidadesofendidossolicitudesDto->getactivo() != "") {
            $sql .= "activo='" . $nacionalidadesofendidossolicitudesDto->getactivo() . "'";
            if (($nacionalidadesofendidossolicitudesDto->getFechaRegistro() != "") || ($nacionalidadesofendidossolicitudesDto->getFechaActualizacion() != "") || ($nacionalidadesofendidossolicitudesDto->getIdOfendidoSolicitud() != "")) {
                $sql .= ",";
            }
        }
        if ($nacionalidadesofendidossolicitudesDto->getfechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $nacionalidadesofendidossolicitudesDto->getfechaRegistro() . "'";
            if (($nacionalidadesofendidossolicitudesDto->getFechaActualizacion() != "") || ($nacionalidadesofendidossolicitudesDto->getIdOfendidoSolicitud() != "")) {
                $sql .= ",";
            }
        }
        if ($nacionalidadesofendidossolicitudesDto->getfechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $nacionalidadesofendidossolicitudesDto->getfechaActualizacion() . "'";
            if (($nacionalidadesofendidossolicitudesDto->getIdOfendidoSolicitud() != "")) {
                $sql .= ",";
            }
        }
        if ($nacionalidadesofendidossolicitudesDto->getidOfendidoSolicitud() != "") {
            $sql .= "idOfendidoSolicitud='" . $nacionalidadesofendidossolicitudesDto->getidOfendidoSolicitud() . "'";
        }
        $sql .= " WHERE idNacionalidadOfendidoSolicitud='" . $nacionalidadesofendidossolicitudesDto->getidNacionalidadOfendidoSolicitud() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new NacionalidadesofendidossolicitudesDTO();
            $tmp->setidNacionalidadOfendidoSolicitud($nacionalidadesofendidossolicitudesDto->getidNacionalidadOfendidoSolicitud());
            $tmp = $this->selectNacionalidadesofendidossolicitudes($tmp, "", $this->_proveedor);
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

    public function eliminarNacionalidadesOfendidos($nacionalidadesofendidossolicitudesDto, $proveedor = null)
    {
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblnacionalidadesofendidossolicitudes SET activo='N', fechaActualizacion='NOW()'";

        $sql .= " WHERE idOfendidoSolicitud='" . $nacionalidadesofendidossolicitudesDto->getIdOfendidoSolicitud() . "'";

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

    public function deleteNacionalidadesofendidossolicitudes($nacionalidadesofendidossolicitudesDto, $proveedor = null)
    {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblnacionalidadesofendidossolicitudes  WHERE idNacionalidadOfendidoSolicitud='" . $nacionalidadesofendidossolicitudesDto->getidNacionalidadOfendidoSolicitud() . "'";
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

    public function selectNacionalidadesofendidossolicitudes($nacionalidadesofendidossolicitudesDto, $orden = "", $proveedor = null)
    {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT
                a.idNacionalidadOfendidoSolicitud,a.cvePais,b.desPais,a.activo,a.fechaRegistro,a.fechaActualizacion,a.idOfendidoSolicitud
                FROM
                tblnacionalidadesofendidossolicitudes a
                JOIN tblpaises b ON a.cvePais = b.cvePais";
        if (($nacionalidadesofendidossolicitudesDto->getidNacionalidadOfendidoSolicitud() != "") || ($nacionalidadesofendidossolicitudesDto->getcvePais() != "") || ($nacionalidadesofendidossolicitudesDto->getactivo() != "") || ($nacionalidadesofendidossolicitudesDto->getfechaRegistro() != "") || ($nacionalidadesofendidossolicitudesDto->getfechaActualizacion() != "") || ($nacionalidadesofendidossolicitudesDto->getidOfendidoSolicitud() != "")) {
            $sql .= " WHERE ";
        }
        if ($nacionalidadesofendidossolicitudesDto->getidNacionalidadOfendidoSolicitud() != "") {
            $sql .= "a.idNacionalidadOfendidoSolicitud='" . $nacionalidadesofendidossolicitudesDto->getIdNacionalidadOfendidoSolicitud() . "'";
            if (($nacionalidadesofendidossolicitudesDto->getCvePais() != "") || ($nacionalidadesofendidossolicitudesDto->getActivo() != "") || ($nacionalidadesofendidossolicitudesDto->getFechaRegistro() != "") || ($nacionalidadesofendidossolicitudesDto->getFechaActualizacion() != "") || ($nacionalidadesofendidossolicitudesDto->getIdOfendidoSolicitud() != "")) {
                $sql .= " AND ";
            }
        }
        if ($nacionalidadesofendidossolicitudesDto->getcvePais() != "") {
            $sql .= "a.cvePais='" . $nacionalidadesofendidossolicitudesDto->getCvePais() . "'";
            if (($nacionalidadesofendidossolicitudesDto->getActivo() != "") || ($nacionalidadesofendidossolicitudesDto->getFechaRegistro() != "") || ($nacionalidadesofendidossolicitudesDto->getFechaActualizacion() != "") || ($nacionalidadesofendidossolicitudesDto->getIdOfendidoSolicitud() != "")) {
                $sql .= " AND ";
            }
        }
        if ($nacionalidadesofendidossolicitudesDto->getactivo() != "") {
            $sql .= "a.activo='" . $nacionalidadesofendidossolicitudesDto->getActivo() . "'";
            if (($nacionalidadesofendidossolicitudesDto->getFechaRegistro() != "") || ($nacionalidadesofendidossolicitudesDto->getFechaActualizacion() != "") || ($nacionalidadesofendidossolicitudesDto->getIdOfendidoSolicitud() != "")) {
                $sql .= " AND ";
            }
        }
        if ($nacionalidadesofendidossolicitudesDto->getfechaRegistro() != "") {
            $sql .= "a.fechaRegistro='" . $nacionalidadesofendidossolicitudesDto->getFechaRegistro() . "'";
            if (($nacionalidadesofendidossolicitudesDto->getFechaActualizacion() != "") || ($nacionalidadesofendidossolicitudesDto->getIdOfendidoSolicitud() != "")) {
                $sql .= " AND ";
            }
        }
        if ($nacionalidadesofendidossolicitudesDto->getfechaActualizacion() != "") {
            $sql .= "q.fechaActualizacion='" . $nacionalidadesofendidossolicitudesDto->getFechaActualizacion() . "'";
            if (($nacionalidadesofendidossolicitudesDto->getIdOfendidoSolicitud() != "")) {
                $sql .= " AND ";
            }
        }
        if ($nacionalidadesofendidossolicitudesDto->getidOfendidoSolicitud() != "") {
            $sql .= "a.idOfendidoSolicitud='" . $nacionalidadesofendidossolicitudesDto->getIdOfendidoSolicitud() . "'";
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
                    $tmp[$contador] = new NacionalidadesofendidossolicitudesDTO();
                    $tmp[$contador]->setIdNacionalidadOfendidoSolicitud($row["idNacionalidadOfendidoSolicitud"]);
                    $tmp[$contador]->setCvePais($row["cvePais"]);
                    $tmp[$contador]->setDesPais(utf8_encode($row["desPais"]));
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setIdOfendidoSolicitud($row["idOfendidoSolicitud"]);
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
