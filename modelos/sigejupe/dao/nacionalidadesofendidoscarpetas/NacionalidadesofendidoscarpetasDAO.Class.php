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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/nacionalidadesofendidoscarpetas/NacionalidadesofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class NacionalidadesofendidoscarpetasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertNacionalidadesofendidoscarpetas($nacionalidadesofendidoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblnacionalidadesofendidoscarpetas(";
        if ($nacionalidadesofendidoscarpetasDto->getIdNacionalidadOfendidoCarpeta() != "") {
            $sql.="idNacionalidadOfendidoCarpeta";
            if (($nacionalidadesofendidoscarpetasDto->getCvePais() != "") || ($nacionalidadesofendidoscarpetasDto->getActivo() != "") || ($nacionalidadesofendidoscarpetasDto->getIdOfendidoCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($nacionalidadesofendidoscarpetasDto->getCvePais() != "") {
            $sql.="cvePais";
            if (($nacionalidadesofendidoscarpetasDto->getActivo() != "") || ($nacionalidadesofendidoscarpetasDto->getIdOfendidoCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($nacionalidadesofendidoscarpetasDto->getActivo() != "") {
            $sql.="activo";
            if (($nacionalidadesofendidoscarpetasDto->getIdOfendidoCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($nacionalidadesofendidoscarpetasDto->getIdOfendidoCarpeta() != "") {
            $sql.="idOfendidoCarpeta";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($nacionalidadesofendidoscarpetasDto->getIdNacionalidadOfendidoCarpeta() != "") {
            $sql.="'" . $nacionalidadesofendidoscarpetasDto->getIdNacionalidadOfendidoCarpeta() . "'";
            if (($nacionalidadesofendidoscarpetasDto->getCvePais() != "") || ($nacionalidadesofendidoscarpetasDto->getActivo() != "") || ($nacionalidadesofendidoscarpetasDto->getIdOfendidoCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($nacionalidadesofendidoscarpetasDto->getCvePais() != "") {
            $sql.="'" . $nacionalidadesofendidoscarpetasDto->getCvePais() . "'";
            if (($nacionalidadesofendidoscarpetasDto->getActivo() != "") || ($nacionalidadesofendidoscarpetasDto->getIdOfendidoCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($nacionalidadesofendidoscarpetasDto->getActivo() != "") {
            $sql.="'" . $nacionalidadesofendidoscarpetasDto->getActivo() . "'";
            if (($nacionalidadesofendidoscarpetasDto->getIdOfendidoCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($nacionalidadesofendidoscarpetasDto->getFechaRegistro() != "") {
            if (($nacionalidadesofendidoscarpetasDto->getIdOfendidoCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($nacionalidadesofendidoscarpetasDto->getFechaActualizacion() != "") {
            if (($nacionalidadesofendidoscarpetasDto->getIdOfendidoCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($nacionalidadesofendidoscarpetasDto->getIdOfendidoCarpeta() != "") {
            $sql.="'" . $nacionalidadesofendidoscarpetasDto->getIdOfendidoCarpeta() . "'";
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new NacionalidadesofendidoscarpetasDTO();
            $tmp->setIdNacionalidadOfendidoCarpeta($this->_proveedor->lastID());
            $tmp = $this->selectNacionalidadesofendidoscarpetas($tmp, "", $this->_proveedor);
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

    public function updateNacionalidadesofendidoscarpetas($nacionalidadesofendidoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblnacionalidadesofendidoscarpetas SET ";
        if ($nacionalidadesofendidoscarpetasDto->getIdNacionalidadOfendidoCarpeta() != "") {
            $sql.="idNacionalidadOfendidoCarpeta='" . $nacionalidadesofendidoscarpetasDto->getIdNacionalidadOfendidoCarpeta() . "'";
            if (($nacionalidadesofendidoscarpetasDto->getCvePais() != "") || ($nacionalidadesofendidoscarpetasDto->getActivo() != "") || ($nacionalidadesofendidoscarpetasDto->getFechaRegistro() != "") || ($nacionalidadesofendidoscarpetasDto->getFechaActualizacion() != "") || ($nacionalidadesofendidoscarpetasDto->getIdOfendidoCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($nacionalidadesofendidoscarpetasDto->getCvePais() != "") {
            $sql.="cvePais='" . $nacionalidadesofendidoscarpetasDto->getCvePais() . "'";
            if (($nacionalidadesofendidoscarpetasDto->getActivo() != "") || ($nacionalidadesofendidoscarpetasDto->getFechaRegistro() != "") || ($nacionalidadesofendidoscarpetasDto->getFechaActualizacion() != "") || ($nacionalidadesofendidoscarpetasDto->getIdOfendidoCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($nacionalidadesofendidoscarpetasDto->getActivo() != "") {
            $sql.="activo='" . $nacionalidadesofendidoscarpetasDto->getActivo() . "'";
            if (($nacionalidadesofendidoscarpetasDto->getFechaRegistro() != "") || ($nacionalidadesofendidoscarpetasDto->getFechaActualizacion() != "") || ($nacionalidadesofendidoscarpetasDto->getIdOfendidoCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($nacionalidadesofendidoscarpetasDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $nacionalidadesofendidoscarpetasDto->getFechaRegistro() . "'";
            if (($nacionalidadesofendidoscarpetasDto->getFechaActualizacion() != "") || ($nacionalidadesofendidoscarpetasDto->getIdOfendidoCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($nacionalidadesofendidoscarpetasDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $nacionalidadesofendidoscarpetasDto->getFechaActualizacion() . "'";
            if (($nacionalidadesofendidoscarpetasDto->getIdOfendidoCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($nacionalidadesofendidoscarpetasDto->getIdOfendidoCarpeta() != "") {
            $sql.="idOfendidoCarpeta='" . $nacionalidadesofendidoscarpetasDto->getIdOfendidoCarpeta() . "'";
        }
        $sql.=" WHERE idNacionalidadOfendidoCarpeta='" . $nacionalidadesofendidoscarpetasDto->getIdNacionalidadOfendidoCarpeta() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new NacionalidadesofendidoscarpetasDTO();
            $tmp->setIdNacionalidadOfendidoCarpeta($nacionalidadesofendidoscarpetasDto->getIdNacionalidadOfendidoCarpeta());
            $tmp = $this->selectNacionalidadesofendidoscarpetas($tmp, "", $this->_proveedor);
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

    public function deleteNacionalidadesofendidoscarpetas($nacionalidadesofendidoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblnacionalidadesofendidoscarpetas  WHERE idNacionalidadOfendidoCarpeta='" . $nacionalidadesofendidoscarpetasDto->getIdNacionalidadOfendidoCarpeta() . "'";
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

    public function selectNacionalidadesofendidoscarpetas($nacionalidadesofendidoscarpetasDto, $orden = "", $proveedor = null) {
        $tmp = NULL;
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idNacionalidadOfendidoCarpeta,cvePais,activo,fechaRegistro,fechaActualizacion,idOfendidoCarpeta FROM tblnacionalidadesofendidoscarpetas ";
        if (($nacionalidadesofendidoscarpetasDto->getIdNacionalidadOfendidoCarpeta() != "") || ($nacionalidadesofendidoscarpetasDto->getCvePais() != "") || ($nacionalidadesofendidoscarpetasDto->getActivo() != "") || ($nacionalidadesofendidoscarpetasDto->getFechaRegistro() != "") || ($nacionalidadesofendidoscarpetasDto->getFechaActualizacion() != "") || ($nacionalidadesofendidoscarpetasDto->getIdOfendidoCarpeta() != "")) {
            $sql.=" WHERE ";
        }
        if ($nacionalidadesofendidoscarpetasDto->getIdNacionalidadOfendidoCarpeta() != "") {
            $sql.="idNacionalidadOfendidoCarpeta='" . $nacionalidadesofendidoscarpetasDto->getIdNacionalidadOfendidoCarpeta() . "'";
            if (($nacionalidadesofendidoscarpetasDto->getCvePais() != "") || ($nacionalidadesofendidoscarpetasDto->getActivo() != "") || ($nacionalidadesofendidoscarpetasDto->getFechaRegistro() != "") || ($nacionalidadesofendidoscarpetasDto->getFechaActualizacion() != "") || ($nacionalidadesofendidoscarpetasDto->getIdOfendidoCarpeta() != "")) {
                $sql.=" AND ";
            }
        }
        if ($nacionalidadesofendidoscarpetasDto->getCvePais() != "") {
            $sql.="cvePais='" . $nacionalidadesofendidoscarpetasDto->getCvePais() . "'";
            if (($nacionalidadesofendidoscarpetasDto->getActivo() != "") || ($nacionalidadesofendidoscarpetasDto->getFechaRegistro() != "") || ($nacionalidadesofendidoscarpetasDto->getFechaActualizacion() != "") || ($nacionalidadesofendidoscarpetasDto->getIdOfendidoCarpeta() != "")) {
                $sql.=" AND ";
            }
        }
        if ($nacionalidadesofendidoscarpetasDto->getActivo() != "") {
            $sql.="activo='" . $nacionalidadesofendidoscarpetasDto->getActivo() . "'";
            if (($nacionalidadesofendidoscarpetasDto->getFechaRegistro() != "") || ($nacionalidadesofendidoscarpetasDto->getFechaActualizacion() != "") || ($nacionalidadesofendidoscarpetasDto->getIdOfendidoCarpeta() != "")) {
                $sql.=" AND ";
            }
        }
        if ($nacionalidadesofendidoscarpetasDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $nacionalidadesofendidoscarpetasDto->getFechaRegistro() . "'";
            if (($nacionalidadesofendidoscarpetasDto->getFechaActualizacion() != "") || ($nacionalidadesofendidoscarpetasDto->getIdOfendidoCarpeta() != "")) {
                $sql.=" AND ";
            }
        }
        if ($nacionalidadesofendidoscarpetasDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $nacionalidadesofendidoscarpetasDto->getFechaActualizacion() . "'";
            if (($nacionalidadesofendidoscarpetasDto->getIdOfendidoCarpeta() != "")) {
                $sql.=" AND ";
            }
        }
        if ($nacionalidadesofendidoscarpetasDto->getIdOfendidoCarpeta() != "") {
            $sql.="idOfendidoCarpeta='" . $nacionalidadesofendidoscarpetasDto->getIdOfendidoCarpeta() . "'";
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
                    $tmp[$contador] = new NacionalidadesofendidoscarpetasDTO();
                    $tmp[$contador]->setIdNacionalidadOfendidoCarpeta($row["idNacionalidadOfendidoCarpeta"]);
                    $tmp[$contador]->setCvePais($row["cvePais"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setIdOfendidoCarpeta($row["idOfendidoCarpeta"]);
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

}

?>