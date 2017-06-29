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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/violenciadegenerocarpetas/ViolenciadegenerocarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ViolenciadegenerocarpetasDAO{
    protected $_proveedor;
    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }
    
    public function _conexion(){
        $this->_proveedor->connect();
    }
    
    public function insertViolenciadegenerocarpetas($violenciadegenerocarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="INSERT INTO tblviolenciadegenerocarpetas(";
        if($violenciadegenerocarpetasDto->getIdViolenciaDeGeneroCarpeta()!=""){
            $sql.="idViolenciaDeGeneroCarpeta";
            if(($violenciadegenerocarpetasDto->getCveEfecto()!="") ||($violenciadegenerocarpetasDto->getIdImpOfeDelCarpeta()!="") ||($violenciadegenerocarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if ($violenciadegenerocarpetasDto->getCveEfecto() != "") {
            $sql.="cveEfecto";
            if (($violenciadegenerocarpetasDto->getIdImpOfeDelCarpeta() != "") || ($violenciadegenerocarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($violenciadegenerocarpetasDto->getIdImpOfeDelCarpeta() != "") {
            $sql.="idImpOfeDelCarpeta";
            if (($violenciadegenerocarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if($violenciadegenerocarpetasDto->getActivo()!=""){
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($violenciadegenerocarpetasDto->getIdViolenciaDeGeneroCarpeta() != "") {
            $sql.="'" . $violenciadegenerocarpetasDto->getIdViolenciaDeGeneroCarpeta() . "'";
            if (($violenciadegenerocarpetasDto->getCveEfecto() != "") || ($violenciadegenerocarpetasDto->getIdImpOfeDelCarpeta() != "") || ($violenciadegenerocarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($violenciadegenerocarpetasDto->getCveEfecto() != "") {
            $sql.="'" . $violenciadegenerocarpetasDto->getCveEfecto() . "'";
            if (($violenciadegenerocarpetasDto->getIdImpOfeDelCarpeta() != "") || ($violenciadegenerocarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($violenciadegenerocarpetasDto->getIdImpOfeDelCarpeta() != "") {
            $sql.="'" . $violenciadegenerocarpetasDto->getIdImpOfeDelCarpeta() . "'";
            if (($violenciadegenerocarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($violenciadegenerocarpetasDto->getActivo() != "") {
            $sql.="'" . $violenciadegenerocarpetasDto->getActivo() . "'";
        }
        if ($violenciadegenerocarpetasDto->getFechaRegistro() != "") {
            
        }
        if ($violenciadegenerocarpetasDto->getFechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ViolenciadegenerocarpetasDTO();
            $tmp->setIdViolenciaDeGeneroCarpeta($this->_proveedor->lastID());
            $tmp = $this->selectViolenciadegenerocarpetas($tmp, "", $this->_proveedor);
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
    
    public function updateViolenciadegenerocarpetas($violenciadegenerocarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblviolenciadegenerocarpetas SET ";
        if ($violenciadegenerocarpetasDto->getIdViolenciaDeGeneroCarpeta() != "") {
            $sql.="idViolenciaDeGeneroCarpeta='" . $violenciadegenerocarpetasDto->getIdViolenciaDeGeneroCarpeta() . "'";
            if (($violenciadegenerocarpetasDto->getCveEfecto() != "") || ($violenciadegenerocarpetasDto->getIdImpOfeDelCarpeta() != "") || ($violenciadegenerocarpetasDto->getActivo() != "") || ($violenciadegenerocarpetasDto->getFechaRegistro() != "") || ($violenciadegenerocarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($violenciadegenerocarpetasDto->getCveEfecto() != "") {
            $sql.="cveEfecto='" . $violenciadegenerocarpetasDto->getCveEfecto() . "'";
            if (($violenciadegenerocarpetasDto->getIdImpOfeDelCarpeta() != "") || ($violenciadegenerocarpetasDto->getActivo() != "") || ($violenciadegenerocarpetasDto->getFechaRegistro() != "") || ($violenciadegenerocarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($violenciadegenerocarpetasDto->getIdImpOfeDelCarpeta() != "") {
            $sql.="idImpOfeDelCarpeta='" . $violenciadegenerocarpetasDto->getIdImpOfeDelCarpeta() . "'";
            if (($violenciadegenerocarpetasDto->getActivo() != "") || ($violenciadegenerocarpetasDto->getFechaRegistro() != "") || ($violenciadegenerocarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($violenciadegenerocarpetasDto->getActivo() != "") {
            $sql.="activo='" . $violenciadegenerocarpetasDto->getActivo() . "'";
            if (($violenciadegenerocarpetasDto->getFechaRegistro() != "") || ($violenciadegenerocarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($violenciadegenerocarpetasDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $violenciadegenerocarpetasDto->getFechaRegistro() . "'";
            if (($violenciadegenerocarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($violenciadegenerocarpetasDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $violenciadegenerocarpetasDto->getFechaActualizacion() . "'";
        }
        $sql.=" WHERE idViolenciaDeGeneroCarpeta='" . $violenciadegenerocarpetasDto->getIdViolenciaDeGeneroCarpeta() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ViolenciadegenerocarpetasDTO();
            $tmp->setIdViolenciaDeGeneroCarpeta($violenciadegenerocarpetasDto->getIdViolenciaDeGeneroCarpeta());
            $tmp = $this->selectViolenciadegenerocarpetas($tmp, "", $this->_proveedor);
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
    
    public function deleteViolenciadegenerocarpetas($violenciadegenerocarpetasDto,$proveedor=null){
        $tmp = "";
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblviolenciadegenerocarpetas  WHERE idViolenciaDeGeneroCarpeta='" . $violenciadegenerocarpetasDto->getIdViolenciaDeGeneroCarpeta() . "'";
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
    
    public function selectViolenciadegenerocarpetas($violenciadegenerocarpetasDto,$orden="",$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idViolenciaDeGeneroCarpeta,cveEfecto,idImpOfeDelCarpeta,activo,fechaRegistro,fechaActualizacion FROM tblviolenciadegenerocarpetas ";
        if (($violenciadegenerocarpetasDto->getIdViolenciaDeGeneroCarpeta() != "") || ($violenciadegenerocarpetasDto->getCveEfecto() != "") || ($violenciadegenerocarpetasDto->getIdImpOfeDelCarpeta() != "") || ($violenciadegenerocarpetasDto->getActivo() != "") || ($violenciadegenerocarpetasDto->getFechaRegistro() != "") || ($violenciadegenerocarpetasDto->getFechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($violenciadegenerocarpetasDto->getIdViolenciaDeGeneroCarpeta() != "") {
            $sql.="idViolenciaDeGeneroCarpeta='" . $violenciadegenerocarpetasDto->getIdViolenciaDeGeneroCarpeta() . "'";
            if (($violenciadegenerocarpetasDto->getCveEfecto() != "") || ($violenciadegenerocarpetasDto->getIdImpOfeDelCarpeta() != "") || ($violenciadegenerocarpetasDto->getActivo() != "") || ($violenciadegenerocarpetasDto->getFechaRegistro() != "") || ($violenciadegenerocarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($violenciadegenerocarpetasDto->getCveEfecto() != "") {
            $sql.="cveEfecto='" . $violenciadegenerocarpetasDto->getCveEfecto() . "'";
            if (($violenciadegenerocarpetasDto->getIdImpOfeDelCarpeta() != "") || ($violenciadegenerocarpetasDto->getActivo() != "") || ($violenciadegenerocarpetasDto->getFechaRegistro() != "") || ($violenciadegenerocarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($violenciadegenerocarpetasDto->getIdImpOfeDelCarpeta() != "") {
            $sql.="idImpOfeDelCarpeta='" . $violenciadegenerocarpetasDto->getIdImpOfeDelCarpeta() . "'";
            if (($violenciadegenerocarpetasDto->getActivo() != "") || ($violenciadegenerocarpetasDto->getFechaRegistro() != "") || ($violenciadegenerocarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($violenciadegenerocarpetasDto->getActivo() != "") {
            $sql.="activo='" . $violenciadegenerocarpetasDto->getActivo() . "'";
            if (($violenciadegenerocarpetasDto->getFechaRegistro() != "") || ($violenciadegenerocarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($violenciadegenerocarpetasDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $violenciadegenerocarpetasDto->getFechaRegistro() . "'";
            if (($violenciadegenerocarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($violenciadegenerocarpetasDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $violenciadegenerocarpetasDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new ViolenciadegenerocarpetasDTO();
                    $tmp[$contador]->setIdViolenciaDeGeneroCarpeta($row["idViolenciaDeGeneroCarpeta"]);
                    $tmp[$contador]->setCveEfecto($row["cveEfecto"]);
                    $tmp[$contador]->setIdImpOfeDelCarpeta($row["idImpOfeDelCarpeta"]);
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