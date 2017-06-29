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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/efectosofendidoscarpetas/EfectosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class EfectosofendidoscarpetasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertEfectosofendidoscarpetas($efectosofendidoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblefectosofendidoscarpetas(";
        if ($efectosofendidoscarpetasDto->getIdEfectoOfendidoCarpeta() != "") {
            $sql.="idEfectoOfendidoCarpeta";
            if (($efectosofendidoscarpetasDto->getCveDetalleEfecto() != "") || ($efectosofendidoscarpetasDto->getIdImpOfeDelCarpeta() != "") || ($efectosofendidoscarpetasDto->getIdReferencia() != "") || ($efectosofendidoscarpetasDto->getOrigen() != "") || ($efectosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidoscarpetasDto->getCveDetalleEfecto() != "") {
            $sql.="cveDetalleEfecto";
            if (($efectosofendidoscarpetasDto->getIdImpOfeDelCarpeta() != "") || ($efectosofendidoscarpetasDto->getIdReferencia() != "") || ($efectosofendidoscarpetasDto->getOrigen() != "") || ($efectosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidoscarpetasDto->getIdImpOfeDelCarpeta() != "") {
            $sql.="idImpOfeDelCarpeta";
            if (($efectosofendidoscarpetasDto->getIdReferencia() != "") || ($efectosofendidoscarpetasDto->getOrigen() != "") || ($efectosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidoscarpetasDto->getIdReferencia() != "") {
            $sql.="IdReferencia";
            if (($efectosofendidoscarpetasDto->getOrigen() != "") || ($efectosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidoscarpetasDto->getOrigen() != "") {
            $sql.="origen";
            if (($efectosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidoscarpetasDto->getActivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($efectosofendidoscarpetasDto->getIdEfectoOfendidoCarpeta() != "") {
            $sql.="'" . $efectosofendidoscarpetasDto->getIdEfectoOfendidoCarpeta() . "'";
            if (($efectosofendidoscarpetasDto->getCveDetalleEfecto() != "") || ($efectosofendidoscarpetasDto->getIdImpOfeDelCarpeta() != "") || ($efectosofendidoscarpetasDto->getIdReferencia() != "") || ($efectosofendidoscarpetasDto->getOrigen() != "") || ($efectosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidoscarpetasDto->getCveDetalleEfecto() != "") {
            $sql.="'" . $efectosofendidoscarpetasDto->getCveDetalleEfecto() . "'";
            if (($efectosofendidoscarpetasDto->getIdImpOfeDelCarpeta() != "") || ($efectosofendidoscarpetasDto->getIdReferencia() != "") || ($efectosofendidoscarpetasDto->getOrigen() != "") || ($efectosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidoscarpetasDto->getIdImpOfeDelCarpeta() != "") {
            $sql.="'" . $efectosofendidoscarpetasDto->getIdImpOfeDelCarpeta() . "'";
            if (($efectosofendidoscarpetasDto->getIdReferencia() != "") || ($efectosofendidoscarpetasDto->getOrigen() != "") || ($efectosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidoscarpetasDto->getIdReferencia() != "") {
            $sql.="'" . $efectosofendidoscarpetasDto->getIdReferencia() . "'";
            if (($efectosofendidoscarpetasDto->getOrigen() != "") || ($efectosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidoscarpetasDto->getOrigen() != "") {
            $sql.="'" . $efectosofendidoscarpetasDto->getOrigen() . "'";
            if (($efectosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidoscarpetasDto->getActivo() != "") {
            $sql.="'" . $efectosofendidoscarpetasDto->getActivo() . "'";
        }
        if ($efectosofendidoscarpetasDto->getFechaRegistro() != "") {
            
        }
        if ($efectosofendidoscarpetasDto->getFechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new EfectosofendidoscarpetasDTO();
            $tmp->setidEfectoOfendidoCarpeta($this->_proveedor->lastID());
            $tmp = $this->selectEfectosofendidoscarpetas($tmp, "", $this->_proveedor);
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

    public function updateEfectosofendidoscarpetas($efectosofendidoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblefectosofendidoscarpetas SET ";
        if ($efectosofendidoscarpetasDto->getIdEfectoOfendidoCarpeta() != "") {
            $sql.="idEfectoOfendidoCarpeta='" . $efectosofendidoscarpetasDto->getIdEfectoOfendidoCarpeta() . "'";
            if (($efectosofendidoscarpetasDto->getCveDetalleEfecto() != "") || ($efectosofendidoscarpetasDto->getIdImpOfeDelCarpeta() != "") || ($efectosofendidoscarpetasDto->getIdReferencia() != "") || ($efectosofendidoscarpetasDto->getOrigen() != "") || ($efectosofendidoscarpetasDto->getActivo() != "") || ($efectosofendidoscarpetasDto->getFechaRegistro() != "") || ($efectosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidoscarpetasDto->getCveDetalleEfecto() != "") {
            $sql.="cveDetalleEfecto='" . $efectosofendidoscarpetasDto->getCveDetalleEfecto() . "'";
            if (($efectosofendidoscarpetasDto->getIdImpOfeDelCarpeta() != "") || ($efectosofendidoscarpetasDto->getIdReferencia() != "") || ($efectosofendidoscarpetasDto->getOrigen() != "") || ($efectosofendidoscarpetasDto->getActivo() != "") || ($efectosofendidoscarpetasDto->getFechaRegistro() != "") || ($efectosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidoscarpetasDto->getIdImpOfeDelCarpeta() != "") {
            $sql.="idImpOfeDelCarpeta='" . $efectosofendidoscarpetasDto->getIdImpOfeDelCarpeta() . "'";
            if (($efectosofendidoscarpetasDto->getIdReferencia() != "") || ($efectosofendidoscarpetasDto->getOrigen() != "") || ($efectosofendidoscarpetasDto->getActivo() != "") || ($efectosofendidoscarpetasDto->getFechaRegistro() != "") || ($efectosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidoscarpetasDto->getIdReferencia() != "") {
            $sql.="IdReferencia='" . $efectosofendidoscarpetasDto->getIdReferencia() . "'";
            if (($efectosofendidoscarpetasDto->getOrigen() != "") || ($efectosofendidoscarpetasDto->getActivo() != "") || ($efectosofendidoscarpetasDto->getFechaRegistro() != "") || ($efectosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidoscarpetasDto->getOrigen() != "") {
            $sql.="origen='" . $efectosofendidoscarpetasDto->getOrigen() . "'";
            if (($efectosofendidoscarpetasDto->getActivo() != "") || ($efectosofendidoscarpetasDto->getFechaRegistro() != "") || ($efectosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidoscarpetasDto->getActivo() != "") {
            $sql.="activo='" . $efectosofendidoscarpetasDto->getActivo() . "'";
            if (($efectosofendidoscarpetasDto->getFechaRegistro() != "") || ($efectosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidoscarpetasDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $efectosofendidoscarpetasDto->getFechaRegistro() . "'";
            if (($efectosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($efectosofendidoscarpetasDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $efectosofendidoscarpetasDto->getFechaActualizacion() . "'";
        }
        $sql.=" WHERE idEfectoOfendidoCarpeta='" . $efectosofendidoscarpetasDto->getIdEfectoOfendidoCarpeta() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new EfectosofendidoscarpetasDTO();
            $tmp->setidEfectoOfendidoCarpeta($efectosofendidoscarpetasDto->getIdEfectoOfendidoCarpeta());
            $tmp = $this->selectEfectosofendidoscarpetas($tmp, "", $this->_proveedor);
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

    public function deleteEfectosofendidoscarpetas($efectosofendidoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblefectosofendidoscarpetas  WHERE idEfectoOfendidoCarpeta='" . $efectosofendidoscarpetasDto->getIdEfectoOfendidoCarpeta() . "'";
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

    public function selectEfectosofendidoscarpetas($efectosofendidoscarpetasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idEfectoOfendidoCarpeta,cveDetalleEfecto,idImpOfeDelCarpeta,IdReferencia,origen,activo,fechaRegistro,fechaActualizacion FROM tblefectosofendidoscarpetas ";
        if (($efectosofendidoscarpetasDto->getIdEfectoOfendidoCarpeta() != "") || ($efectosofendidoscarpetasDto->getCveDetalleEfecto() != "") || ($efectosofendidoscarpetasDto->getIdImpOfeDelCarpeta() != "") || ($efectosofendidoscarpetasDto->getIdReferencia() != "") || ($efectosofendidoscarpetasDto->getOrigen() != "") || ($efectosofendidoscarpetasDto->getActivo() != "") || ($efectosofendidoscarpetasDto->getFechaRegistro() != "") || ($efectosofendidoscarpetasDto->getFechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($efectosofendidoscarpetasDto->getIdEfectoOfendidoCarpeta() != "") {
            $sql.="idEfectoOfendidoCarpeta='" . $efectosofendidoscarpetasDto->getIdEfectoOfendidoCarpeta() . "'";
            if (($efectosofendidoscarpetasDto->getCveDetalleEfecto() != "") || ($efectosofendidoscarpetasDto->getIdImpOfeDelCarpeta() != "") || ($efectosofendidoscarpetasDto->getIdReferencia() != "") || ($efectosofendidoscarpetasDto->getOrigen() != "") || ($efectosofendidoscarpetasDto->getActivo() != "") || ($efectosofendidoscarpetasDto->getFechaRegistro() != "") || ($efectosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($efectosofendidoscarpetasDto->getCveDetalleEfecto() != "") {
            $sql.="cveDetalleEfecto='" . $efectosofendidoscarpetasDto->getCveDetalleEfecto() . "'";
            if (($efectosofendidoscarpetasDto->getIdImpOfeDelCarpeta() != "") || ($efectosofendidoscarpetasDto->getIdReferencia() != "") || ($efectosofendidoscarpetasDto->getOrigen() != "") || ($efectosofendidoscarpetasDto->getActivo() != "") || ($efectosofendidoscarpetasDto->getFechaRegistro() != "") || ($efectosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($efectosofendidoscarpetasDto->getIdImpOfeDelCarpeta() != "") {
            $sql.="idImpOfeDelCarpeta='" . $efectosofendidoscarpetasDto->getIdImpOfeDelCarpeta() . "'";
            if (($efectosofendidoscarpetasDto->getIdReferencia() != "") || ($efectosofendidoscarpetasDto->getOrigen() != "") || ($efectosofendidoscarpetasDto->getActivo() != "") || ($efectosofendidoscarpetasDto->getFechaRegistro() != "") || ($efectosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($efectosofendidoscarpetasDto->getIdReferencia() != "") {
            $sql.="IdReferencia='" . $efectosofendidoscarpetasDto->getIdReferencia() . "'";
            if (($efectosofendidoscarpetasDto->getOrigen() != "") || ($efectosofendidoscarpetasDto->getActivo() != "") || ($efectosofendidoscarpetasDto->getFechaRegistro() != "") || ($efectosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($efectosofendidoscarpetasDto->getOrigen() != "") {
            $sql.="origen='" . $efectosofendidoscarpetasDto->getOrigen() . "'";
            if (($efectosofendidoscarpetasDto->getActivo() != "") || ($efectosofendidoscarpetasDto->getFechaRegistro() != "") || ($efectosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($efectosofendidoscarpetasDto->getActivo() != "") {
            $sql.="activo='" . $efectosofendidoscarpetasDto->getActivo() . "'";
            if (($efectosofendidoscarpetasDto->getFechaRegistro() != "") || ($efectosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($efectosofendidoscarpetasDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $efectosofendidoscarpetasDto->getFechaRegistro() . "'";
            if (($efectosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($efectosofendidoscarpetasDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $efectosofendidoscarpetasDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new EfectosofendidoscarpetasDTO();
                    $tmp[$contador]->setIdEfectoOfendidoCarpeta($row["idEfectoOfendidoCarpeta"]);
                    $tmp[$contador]->setCveDetalleEfecto($row["cveDetalleEfecto"]);
                    $tmp[$contador]->setIdImpOfeDelCarpeta($row["idImpOfeDelCarpeta"]);
                    $tmp[$contador]->setIdReferencia($row["IdReferencia"]);
                    $tmp[$contador]->setOrigen($row["origen"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
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