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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/nacionalidadesimputadoscarpetas/NacionalidadesimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class NacionalidadesimputadoscarpetasDAO{
    protected $_proveedor;
    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }
    public function _conexion(){
        $this->_proveedor->connect();
    }
    public function insertNacionalidadesimputadoscarpetas($nacionalidadesimputadoscarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="INSERT INTO tblnacionalidadesimputadoscarpetas(";
        if($nacionalidadesimputadoscarpetasDto->getIdNacionalidadImputadoCarpeta()!=""){
            $sql.="idNacionalidadImputadoCarpeta";
            if(($nacionalidadesimputadoscarpetasDto->getCvePais()!="") ||($nacionalidadesimputadoscarpetasDto->getActivo()!="") ||($nacionalidadesimputadoscarpetasDto->getIdImputadoCarpeta()!="") ){
                $sql.=",";
            }
        }
        if($nacionalidadesimputadoscarpetasDto->getCvePais()!=""){
            $sql.="cvePais";
            if(($nacionalidadesimputadoscarpetasDto->getActivo()!="") ||($nacionalidadesimputadoscarpetasDto->getIdImputadoCarpeta()!="") ){
                $sql.=",";
            }
        }
        if($nacionalidadesimputadoscarpetasDto->getActivo()!=""){
            $sql.="activo";
            if(($nacionalidadesimputadoscarpetasDto->getIdImputadoCarpeta()!="") ){
                $sql.=",";
            }
        }
        if($nacionalidadesimputadoscarpetasDto->getIdImputadoCarpeta()!=""){
            $sql.="idImputadoCarpeta";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if($nacionalidadesimputadoscarpetasDto->getIdNacionalidadImputadoCarpeta()!=""){
            $sql.="'".$nacionalidadesimputadoscarpetasDto->getIdNacionalidadImputadoCarpeta()."'";
            if(($nacionalidadesimputadoscarpetasDto->getCvePais()!="") ||($nacionalidadesimputadoscarpetasDto->getActivo()!="") ||($nacionalidadesimputadoscarpetasDto->getIdImputadoCarpeta()!="") ){
                $sql.=",";
            }
        }
        if($nacionalidadesimputadoscarpetasDto->getCvePais()!=""){
            $sql.="'".$nacionalidadesimputadoscarpetasDto->getCvePais()."'";
            if(($nacionalidadesimputadoscarpetasDto->getActivo()!="") ||($nacionalidadesimputadoscarpetasDto->getIdImputadoCarpeta()!="") ){
                $sql.=",";
            }
        }
        if($nacionalidadesimputadoscarpetasDto->getActivo()!=""){
            $sql.="'".$nacionalidadesimputadoscarpetasDto->getActivo()."'";
            if(($nacionalidadesimputadoscarpetasDto->getIdImputadoCarpeta()!="") ){
                $sql.=",";
            }
        }
        if($nacionalidadesimputadoscarpetasDto->getFechaRegistro()!=""){
            if(($nacionalidadesimputadoscarpetasDto->getIdImputadoCarpeta()!="") ){
                $sql.=",";
            }
        }
        if($nacionalidadesimputadoscarpetasDto->getFechaActualizacion()!=""){
            if(($nacionalidadesimputadoscarpetasDto->getIdImputadoCarpeta()!="") ){
                $sql.=",";
            }
        }
        if($nacionalidadesimputadoscarpetasDto->getIdImputadoCarpeta()!=""){
            $sql.="'".$nacionalidadesimputadoscarpetasDto->getIdImputadoCarpeta()."'";
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new NacionalidadesimputadoscarpetasDTO();
            $tmp->setIdNacionalidadImputadoCarpeta($this->_proveedor->lastID());
            $tmp = $this->selectNacionalidadesimputadoscarpetas($tmp,"",$this->_proveedor);
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
    public function updateNacionalidadesimputadoscarpetas($nacionalidadesimputadoscarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="UPDATE tblnacionalidadesimputadoscarpetas SET ";
        if($nacionalidadesimputadoscarpetasDto->getIdNacionalidadImputadoCarpeta()!=""){
            $sql.="idNacionalidadImputadoCarpeta='".$nacionalidadesimputadoscarpetasDto->getIdNacionalidadImputadoCarpeta()."'";
            if(($nacionalidadesimputadoscarpetasDto->getCvePais()!="") ||($nacionalidadesimputadoscarpetasDto->getActivo()!="") ||($nacionalidadesimputadoscarpetasDto->getFechaRegistro()!="") ||($nacionalidadesimputadoscarpetasDto->getFechaActualizacion()!="") ||($nacionalidadesimputadoscarpetasDto->getIdImputadoCarpeta()!="") ){
                $sql.=",";
            }
        }
        if($nacionalidadesimputadoscarpetasDto->getCvePais()!=""){
            $sql.="cvePais='".$nacionalidadesimputadoscarpetasDto->getCvePais()."'";
            if(($nacionalidadesimputadoscarpetasDto->getActivo()!="") ||($nacionalidadesimputadoscarpetasDto->getFechaRegistro()!="") ||($nacionalidadesimputadoscarpetasDto->getFechaActualizacion()!="") ||($nacionalidadesimputadoscarpetasDto->getIdImputadoCarpeta()!="") ){
                $sql.=",";
            }
        }
        if($nacionalidadesimputadoscarpetasDto->getActivo()!=""){
            $sql.="activo='".$nacionalidadesimputadoscarpetasDto->getActivo()."'";
            if(($nacionalidadesimputadoscarpetasDto->getFechaRegistro()!="") ||($nacionalidadesimputadoscarpetasDto->getFechaActualizacion()!="") ||($nacionalidadesimputadoscarpetasDto->getIdImputadoCarpeta()!="") ){
                $sql.=",";
            }
        }
        if($nacionalidadesimputadoscarpetasDto->getFechaRegistro()!=""){
            $sql.="fechaRegistro='".$nacionalidadesimputadoscarpetasDto->getFechaRegistro()."'";
            if(($nacionalidadesimputadoscarpetasDto->getFechaActualizacion()!="") ||($nacionalidadesimputadoscarpetasDto->getIdImputadoCarpeta()!="") ){
                $sql.=",";
            }
        }
        if($nacionalidadesimputadoscarpetasDto->getFechaActualizacion()!=""){
            $sql.="fechaActualizacion='".$nacionalidadesimputadoscarpetasDto->getFechaActualizacion()."'";
            if(($nacionalidadesimputadoscarpetasDto->getIdImputadoCarpeta()!="") ){
                $sql.=",";
            }
        }
        if($nacionalidadesimputadoscarpetasDto->getIdImputadoCarpeta()!=""){
            $sql.="idImputadoCarpeta='".$nacionalidadesimputadoscarpetasDto->getIdImputadoCarpeta()."'";
        }
        $sql.=" WHERE idNacionalidadImputadoCarpeta='".$nacionalidadesimputadoscarpetasDto->getIdNacionalidadImputadoCarpeta()."'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new NacionalidadesimputadoscarpetasDTO();
            $tmp->setIdNacionalidadImputadoCarpeta($nacionalidadesimputadoscarpetasDto->getIdNacionalidadImputadoCarpeta());
            $tmp = $this->selectNacionalidadesimputadoscarpetas($tmp,"",$this->_proveedor);
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
    public function deleteNacionalidadesimputadoscarpetas($nacionalidadesimputadoscarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="DELETE FROM tblnacionalidadesimputadoscarpetas  WHERE idNacionalidadImputadoCarpeta='".$nacionalidadesimputadoscarpetasDto->getIdNacionalidadImputadoCarpeta()."'";
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
    public function selectNacionalidadesimputadoscarpetas($nacionalidadesimputadoscarpetasDto,$orden="",$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="SELECT idNacionalidadImputadoCarpeta,cvePais,activo,fechaRegistro,fechaActualizacion,idImputadoCarpeta FROM tblnacionalidadesimputadoscarpetas ";
        if(($nacionalidadesimputadoscarpetasDto->getIdNacionalidadImputadoCarpeta()!="") ||($nacionalidadesimputadoscarpetasDto->getCvePais()!="") ||($nacionalidadesimputadoscarpetasDto->getActivo()!="") ||($nacionalidadesimputadoscarpetasDto->getFechaRegistro()!="") ||($nacionalidadesimputadoscarpetasDto->getFechaActualizacion()!="") ||($nacionalidadesimputadoscarpetasDto->getIdImputadoCarpeta()!="") ){
            $sql.=" WHERE ";
        }
        if($nacionalidadesimputadoscarpetasDto->getIdNacionalidadImputadoCarpeta()!=""){
            $sql.="idNacionalidadImputadoCarpeta='".$nacionalidadesimputadoscarpetasDto->getIdNacionalidadImputadoCarpeta()."'";
            if(($nacionalidadesimputadoscarpetasDto->getCvePais()!="") ||($nacionalidadesimputadoscarpetasDto->getActivo()!="") ||($nacionalidadesimputadoscarpetasDto->getFechaRegistro()!="") ||($nacionalidadesimputadoscarpetasDto->getFechaActualizacion()!="") ||($nacionalidadesimputadoscarpetasDto->getIdImputadoCarpeta()!="") ){
                $sql.=" AND ";
            }
        }
        if($nacionalidadesimputadoscarpetasDto->getCvePais()!=""){
            $sql.="cvePais='".$nacionalidadesimputadoscarpetasDto->getCvePais()."'";
            if(($nacionalidadesimputadoscarpetasDto->getActivo()!="") ||($nacionalidadesimputadoscarpetasDto->getFechaRegistro()!="") ||($nacionalidadesimputadoscarpetasDto->getFechaActualizacion()!="") ||($nacionalidadesimputadoscarpetasDto->getIdImputadoCarpeta()!="") ){
                $sql.=" AND ";
            }
        }
        if($nacionalidadesimputadoscarpetasDto->getActivo()!=""){
            $sql.="activo='".$nacionalidadesimputadoscarpetasDto->getActivo()."'";
            if(($nacionalidadesimputadoscarpetasDto->getFechaRegistro()!="") ||($nacionalidadesimputadoscarpetasDto->getFechaActualizacion()!="") ||($nacionalidadesimputadoscarpetasDto->getIdImputadoCarpeta()!="") ){
                $sql.=" AND ";
            }
        }
        if($nacionalidadesimputadoscarpetasDto->getFechaRegistro()!=""){
            $sql.="fechaRegistro='".$nacionalidadesimputadoscarpetasDto->getFechaRegistro()."'";
            if(($nacionalidadesimputadoscarpetasDto->getFechaActualizacion()!="") ||($nacionalidadesimputadoscarpetasDto->getIdImputadoCarpeta()!="") ){
                $sql.=" AND ";
            }
        }
        if($nacionalidadesimputadoscarpetasDto->getFechaActualizacion()!=""){
            $sql.="fechaActualizacion='".$nacionalidadesimputadoscarpetasDto->getFechaActualizacion()."'";
            if(($nacionalidadesimputadoscarpetasDto->getIdImputadoCarpeta()!="") ){
                $sql.=" AND ";
            }
        }
        if($nacionalidadesimputadoscarpetasDto->getIdImputadoCarpeta()!=""){
            $sql.="idImputadoCarpeta='".$nacionalidadesimputadoscarpetasDto->getIdImputadoCarpeta()."'";
        }
        if($orden!=""){
            $sql.=$orden;
        }else{
            $sql.="";
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new NacionalidadesimputadoscarpetasDTO();
                    $tmp[$contador]->setIdNacionalidadImputadoCarpeta($row["idNacionalidadImputadoCarpeta"]);
                    $tmp[$contador]->setCvePais($row["cvePais"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setIdImputadoCarpeta($row["idImputadoCarpeta"]);
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