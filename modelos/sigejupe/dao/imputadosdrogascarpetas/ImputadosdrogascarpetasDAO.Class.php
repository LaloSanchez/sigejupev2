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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/imputadosdrogascarpetas/ImputadosdrogascarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ImputadosdrogascarpetasDAO{
    protected $_proveedor;
    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }
    public function _conexion(){
        $this->_proveedor->connect();
    }
    public function insertImputadosdrogascarpetas($imputadosdrogascarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="INSERT INTO tblimputadosdrogascarpetas(";
        if($imputadosdrogascarpetasDto->getIdImputadoDrogaCarpeta()!=""){
            $sql.="idImputadoDrogaCarpeta";
            if(($imputadosdrogascarpetasDto->getIdImputadoCarpeta()!="") ||($imputadosdrogascarpetasDto->getCveDroga()!="") ||($imputadosdrogascarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($imputadosdrogascarpetasDto->getIdImputadoCarpeta()!=""){
            $sql.="idImputadoCarpeta";
            if(($imputadosdrogascarpetasDto->getCveDroga()!="") ||($imputadosdrogascarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($imputadosdrogascarpetasDto->getCveDroga()!=""){
            $sql.="cveDroga";
            if(($imputadosdrogascarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($imputadosdrogascarpetasDto->getActivo()!=""){
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if($imputadosdrogascarpetasDto->getIdImputadoDrogaCarpeta()!=""){
            $sql.="'".$imputadosdrogascarpetasDto->getIdImputadoDrogaCarpeta()."'";
            if(($imputadosdrogascarpetasDto->getIdImputadoCarpeta()!="") ||($imputadosdrogascarpetasDto->getCveDroga()!="") ||($imputadosdrogascarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($imputadosdrogascarpetasDto->getIdImputadoCarpeta()!=""){
            $sql.="'".$imputadosdrogascarpetasDto->getIdImputadoCarpeta()."'";
            if(($imputadosdrogascarpetasDto->getCveDroga()!="") ||($imputadosdrogascarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($imputadosdrogascarpetasDto->getCveDroga()!=""){
            $sql.="'".$imputadosdrogascarpetasDto->getCveDroga()."'";
            if(($imputadosdrogascarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($imputadosdrogascarpetasDto->getActivo()!=""){
            $sql.="'".$imputadosdrogascarpetasDto->getActivo()."'";
        }
        if($imputadosdrogascarpetasDto->getFechaRegistro()!=""){
        }
        if($imputadosdrogascarpetasDto->getFechaActualizacion()!=""){
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImputadosdrogascarpetasDTO();
            $tmp->setIdImputadoDrogaCarpeta($this->_proveedor->lastID());
            $tmp = $this->selectImputadosdrogascarpetas($tmp,"",$this->_proveedor);
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
    public function updateImputadosdrogascarpetas($imputadosdrogascarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="UPDATE tblimputadosdrogascarpetas SET ";
        if($imputadosdrogascarpetasDto->getIdImputadoDrogaCarpeta()!=""){
            $sql.="idImputadoDrogaCarpeta='".$imputadosdrogascarpetasDto->getIdImputadoDrogaCarpeta()."'";
            if(($imputadosdrogascarpetasDto->getIdImputadoCarpeta()!="") ||($imputadosdrogascarpetasDto->getCveDroga()!="") ||($imputadosdrogascarpetasDto->getActivo()!="") ||($imputadosdrogascarpetasDto->getFechaRegistro()!="") ||($imputadosdrogascarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($imputadosdrogascarpetasDto->getIdImputadoCarpeta()!=""){
            $sql.="idImputadoCarpeta='".$imputadosdrogascarpetasDto->getIdImputadoCarpeta()."'";
            if(($imputadosdrogascarpetasDto->getCveDroga()!="") ||($imputadosdrogascarpetasDto->getActivo()!="") ||($imputadosdrogascarpetasDto->getFechaRegistro()!="") ||($imputadosdrogascarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($imputadosdrogascarpetasDto->getCveDroga()!=""){
            $sql.="cveDroga='".$imputadosdrogascarpetasDto->getCveDroga()."'";
            if(($imputadosdrogascarpetasDto->getActivo()!="") ||($imputadosdrogascarpetasDto->getFechaRegistro()!="") ||($imputadosdrogascarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($imputadosdrogascarpetasDto->getActivo()!=""){
            $sql.="activo='".$imputadosdrogascarpetasDto->getActivo()."'";
            if(($imputadosdrogascarpetasDto->getFechaRegistro()!="") ||($imputadosdrogascarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($imputadosdrogascarpetasDto->getFechaRegistro()!=""){
            $sql.="fechaRegistro='".$imputadosdrogascarpetasDto->getFechaRegistro()."'";
            if(($imputadosdrogascarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($imputadosdrogascarpetasDto->getFechaActualizacion()!=""){
            $sql.="fechaActualizacion='".$imputadosdrogascarpetasDto->getFechaActualizacion()."'";
        }
        $sql.=" WHERE idImputadoDrogaCarpeta='".$imputadosdrogascarpetasDto->getIdImputadoDrogaCarpeta()."'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImputadosdrogascarpetasDTO();
            $tmp->setIdImputadoDrogaCarpeta($imputadosdrogascarpetasDto->getIdImputadoDrogaCarpeta());
            $tmp = $this->selectImputadosdrogascarpetas($tmp,"",$this->_proveedor);
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
    public function deleteImputadosdrogascarpetas($imputadosdrogascarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="DELETE FROM tblimputadosdrogascarpetas  WHERE idImputadoDrogaCarpeta='".$imputadosdrogascarpetasDto->getIdImputadoDrogaCarpeta()."'";
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
    public function selectImputadosdrogascarpetas($imputadosdrogascarpetasDto,$orden="",$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="SELECT idImputadoDrogaCarpeta,idImputadoCarpeta,cveDroga,activo,fechaRegistro,fechaActualizacion FROM tblimputadosdrogascarpetas ";
        if(($imputadosdrogascarpetasDto->getIdImputadoDrogaCarpeta()!="") ||($imputadosdrogascarpetasDto->getIdImputadoCarpeta()!="") ||($imputadosdrogascarpetasDto->getCveDroga()!="") ||($imputadosdrogascarpetasDto->getActivo()!="") ||($imputadosdrogascarpetasDto->getFechaRegistro()!="") ||($imputadosdrogascarpetasDto->getFechaActualizacion()!="") ){
            $sql.=" WHERE ";
        }
        if($imputadosdrogascarpetasDto->getIdImputadoDrogaCarpeta()!=""){
            $sql.="idImputadoDrogaCarpeta='".$imputadosdrogascarpetasDto->getIdImputadoDrogaCarpeta()."'";
            if(($imputadosdrogascarpetasDto->getIdImputadoCarpeta()!="") ||($imputadosdrogascarpetasDto->getCveDroga()!="") ||($imputadosdrogascarpetasDto->getActivo()!="") ||($imputadosdrogascarpetasDto->getFechaRegistro()!="") ||($imputadosdrogascarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadosdrogascarpetasDto->getIdImputadoCarpeta()!=""){
            $sql.="idImputadoCarpeta='".$imputadosdrogascarpetasDto->getIdImputadoCarpeta()."'";
            if(($imputadosdrogascarpetasDto->getCveDroga()!="") ||($imputadosdrogascarpetasDto->getActivo()!="") ||($imputadosdrogascarpetasDto->getFechaRegistro()!="") ||($imputadosdrogascarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadosdrogascarpetasDto->getCveDroga()!=""){
            $sql.="cveDroga='".$imputadosdrogascarpetasDto->getCveDroga()."'";
            if(($imputadosdrogascarpetasDto->getActivo()!="") ||($imputadosdrogascarpetasDto->getFechaRegistro()!="") ||($imputadosdrogascarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadosdrogascarpetasDto->getActivo()!=""){
            $sql.="activo='".$imputadosdrogascarpetasDto->getActivo()."'";
            if(($imputadosdrogascarpetasDto->getFechaRegistro()!="") ||($imputadosdrogascarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadosdrogascarpetasDto->getFechaRegistro()!=""){
            $sql.="fechaRegistro='".$imputadosdrogascarpetasDto->getFechaRegistro()."'";
            if(($imputadosdrogascarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($imputadosdrogascarpetasDto->getFechaActualizacion()!=""){
            $sql.="fechaActualizacion='".$imputadosdrogascarpetasDto->getFechaActualizacion()."'";
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
                    $tmp[$contador] = new ImputadosdrogascarpetasDTO();
                    $tmp[$contador]->setIdImputadoDrogaCarpeta($row["idImputadoDrogaCarpeta"]);
                    $tmp[$contador]->setIdImputadoCarpeta($row["idImputadoCarpeta"]);
                    $tmp[$contador]->setCveDroga($row["cveDroga"]);
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