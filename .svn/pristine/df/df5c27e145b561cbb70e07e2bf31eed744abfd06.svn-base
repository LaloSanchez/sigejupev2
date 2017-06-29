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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/sexualesconductascarpetas/SexualesconductascarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class SexualesconductascarpetasDAO{
    protected $_proveedor;
    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }
    public function _conexion(){
        $this->_proveedor->connect();
    }
    /*
     * Se agrega el campo activo
     */
    public function insertSexualesconductascarpetas($sexualesconductascarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="INSERT INTO tblsexualesconductascarpetas(";
        if($sexualesconductascarpetasDto->getIdSexualConductaCarpeta()!=""){
            $sql.="idSexualConductaCarpeta";
            if(($sexualesconductascarpetasDto->getIdSexualCarpeta()!="") ||($sexualesconductascarpetasDto->getCveConducta()!="") ){
                $sql.=",";
            }
        }
        if($sexualesconductascarpetasDto->getIdSexualCarpeta()!=""){
            $sql.="idSexualCarpeta";
            if(($sexualesconductascarpetasDto->getCveConducta()!="") ){
                $sql.=",";
            }
        }
        if($sexualesconductascarpetasDto->getCveConducta()!=""){
            $sql.="cveConducta";
            if(($sexualesconductascarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($sexualesconductascarpetasDto->getActivo()!=""){
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if($sexualesconductascarpetasDto->getIdSexualConductaCarpeta()!=""){
            $sql.="'".$sexualesconductascarpetasDto->getIdSexualConductaCarpeta()."'";
            if(($sexualesconductascarpetasDto->getIdSexualCarpeta()!="") ||($sexualesconductascarpetasDto->getCveConducta()!="") ){
                $sql.=",";
            }
        }
        if($sexualesconductascarpetasDto->getIdSexualCarpeta()!=""){
            $sql.="'".$sexualesconductascarpetasDto->getIdSexualCarpeta()."'";
            if(($sexualesconductascarpetasDto->getCveConducta()!="") ){
                $sql.=",";
            }
        }
        if($sexualesconductascarpetasDto->getCveConducta()!=""){
            $sql.="'".$sexualesconductascarpetasDto->getCveConducta()."'";
            if(($sexualesconductascarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($sexualesconductascarpetasDto->getActivo()!=""){
            $sql.="'".$sexualesconductascarpetasDto->getActivo()."'";
        }
        if($sexualesconductascarpetasDto->getFechaRegistro()!=""){
        }
        if($sexualesconductascarpetasDto->getFechaActualizacion()!=""){
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new SexualesconductascarpetasDTO();
            $tmp->setIdSexualConductaCarpeta($this->_proveedor->lastID());
            $tmp = $this->selectSexualesconductascarpetas($tmp,"",$this->_proveedor);
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
    
    public function updateSexualesconductascarpetas($sexualesconductascarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="UPDATE tblsexualesconductascarpetas SET ";
        if($sexualesconductascarpetasDto->getIdSexualConductaCarpeta()!=""){
            $sql.="idSexualConductaCarpeta='".$sexualesconductascarpetasDto->getIdSexualConductaCarpeta()."'";
            if(($sexualesconductascarpetasDto->getIdSexualCarpeta()!="") ||($sexualesconductascarpetasDto->getCveConducta()!="") ||($sexualesconductascarpetasDto->getFechaRegistro()!="") ||($sexualesconductascarpetasDto->getFechaActualizacion()!="") || ($sexualesconductascarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($sexualesconductascarpetasDto->getIdSexualCarpeta()!=""){
            $sql.="idSexualCarpeta='".$sexualesconductascarpetasDto->getIdSexualCarpeta()."'";
            if(($sexualesconductascarpetasDto->getCveConducta()!="") ||($sexualesconductascarpetasDto->getFechaRegistro()!="") ||($sexualesconductascarpetasDto->getFechaActualizacion()!="") || ($sexualesconductascarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($sexualesconductascarpetasDto->getCveConducta()!=""){
            $sql.="cveConducta='".$sexualesconductascarpetasDto->getCveConducta()."'";
            if(($sexualesconductascarpetasDto->getFechaRegistro()!="") ||($sexualesconductascarpetasDto->getFechaActualizacion()!="") || ($sexualesconductascarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($sexualesconductascarpetasDto->getActivo()!=""){
            $sql.="activo='".$sexualesconductascarpetasDto->getActivo()."'";
            if(($sexualesconductascarpetasDto->getFechaRegistro()!="") ||($sexualesconductascarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($sexualesconductascarpetasDto->getFechaRegistro()!=""){
            $sql.="fechaRegistro='".$sexualesconductascarpetasDto->getFechaRegistro()."'";
            if(($sexualesconductascarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($sexualesconductascarpetasDto->getFechaActualizacion()!=""){
            $sql.="fechaActualizacion='".$sexualesconductascarpetasDto->getFechaActualizacion()."'";
        }
        $sql.=" WHERE idSexualConductaCarpeta='".$sexualesconductascarpetasDto->getIdSexualConductaCarpeta()."'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new SexualesconductascarpetasDTO();
            $tmp->setIdSexualConductaCarpeta($sexualesconductascarpetasDto->getIdSexualConductaCarpeta());
            $tmp = $this->selectSexualesconductascarpetas($tmp,"",$this->_proveedor);
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
    
    public function deleteSexualesconductascarpetas($sexualesconductascarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="DELETE FROM tblsexualesconductascarpetas  WHERE idSexualConductaCarpeta='".$sexualesconductascarpetasDto->getIdSexualConductaCarpeta()."'";
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
    
    public function selectSexualesconductascarpetas($sexualesconductascarpetasDto,$orden="",$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="SELECT idSexualConductaCarpeta,idSexualCarpeta,cveConducta,activo,fechaRegistro,fechaActualizacion FROM tblsexualesconductascarpetas ";
        if(($sexualesconductascarpetasDto->getIdSexualConductaCarpeta()!="") ||($sexualesconductascarpetasDto->getIdSexualCarpeta()!="") ||($sexualesconductascarpetasDto->getCveConducta()!="") ||($sexualesconductascarpetasDto->getFechaRegistro()!="") ||($sexualesconductascarpetasDto->getFechaActualizacion()!="") || ($sexualesconductascarpetasDto->getActivo()!="") ){
            $sql.=" WHERE ";
        }
        if($sexualesconductascarpetasDto->getIdSexualConductaCarpeta()!=""){
            $sql.="idSexualConductaCarpeta='".$sexualesconductascarpetasDto->getIdSexualConductaCarpeta()."'";
            if(($sexualesconductascarpetasDto->getIdSexualCarpeta()!="") ||($sexualesconductascarpetasDto->getCveConducta()!="") ||($sexualesconductascarpetasDto->getFechaRegistro()!="") ||($sexualesconductascarpetasDto->getFechaActualizacion()!="") || ($sexualesconductascarpetasDto->getActivo()!="") ){
                $sql.=" AND ";
            }
        }
        if($sexualesconductascarpetasDto->getIdSexualCarpeta()!=""){
            $sql.="idSexualCarpeta='".$sexualesconductascarpetasDto->getIdSexualCarpeta()."'";
            if(($sexualesconductascarpetasDto->getCveConducta()!="") ||($sexualesconductascarpetasDto->getFechaRegistro()!="") ||($sexualesconductascarpetasDto->getFechaActualizacion()!="") || ($sexualesconductascarpetasDto->getActivo()!="") ){
                $sql.=" AND ";
            }
        }
        if($sexualesconductascarpetasDto->getCveConducta()!=""){
            $sql.="cveConducta='".$sexualesconductascarpetasDto->getCveConducta()."'";
            if(($sexualesconductascarpetasDto->getFechaRegistro()!="") ||($sexualesconductascarpetasDto->getFechaActualizacion()!="") || ($sexualesconductascarpetasDto->getActivo()!="") ){
                $sql.=" AND ";
            }
        }
        if($sexualesconductascarpetasDto->getActivo()!=""){
            $sql.="activo='".$sexualesconductascarpetasDto->getActivo()."'";
            if(($sexualesconductascarpetasDto->getFechaRegistro()!="") ||($sexualesconductascarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($sexualesconductascarpetasDto->getFechaRegistro()!=""){
            $sql.="fechaRegistro='".$sexualesconductascarpetasDto->getFechaRegistro()."'";
            if(($sexualesconductascarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($sexualesconductascarpetasDto->getFechaActualizacion()!=""){
            $sql.="fechaActualizacion='".$sexualesconductascarpetasDto->getFechaActualizacion()."'";
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
                    $tmp[$contador] = new SexualesconductascarpetasDTO();
                    $tmp[$contador]->setIdSexualConductaCarpeta($row["idSexualConductaCarpeta"]);
                    $tmp[$contador]->setIdSexualCarpeta($row["idSexualCarpeta"]);
                    $tmp[$contador]->setCveConducta($row["cveConducta"]);
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