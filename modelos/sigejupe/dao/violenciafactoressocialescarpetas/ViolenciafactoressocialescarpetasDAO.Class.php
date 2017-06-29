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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/violenciafactoressocialescarpetas/ViolenciafactoressocialescarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ViolenciafactoressocialescarpetasDAO{
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
    public function insertViolenciafactoressocialescarpetas($violenciafactoressocialescarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="INSERT INTO tblviolenciafactoressocialescarpetas(";
        if($violenciafactoressocialescarpetasDto->getIdViolenciaFactorSocialCarpeta()!=""){
            $sql.="idViolenciaFactorSocialCarpeta";
            if(($violenciafactoressocialescarpetasDto->getCveFactorCultural()!="") ||($violenciafactoressocialescarpetasDto->getIdViolenciaDeGeneroCarpeta()!="") ){
                $sql.=",";
            }
        }
        if($violenciafactoressocialescarpetasDto->getCveFactorCultural()!=""){
            $sql.="cveFactorCultural";
            if(($violenciafactoressocialescarpetasDto->getIdViolenciaDeGeneroCarpeta()!="") ){
                $sql.=",";
            }
        }
        if($violenciafactoressocialescarpetasDto->getIdViolenciaDeGeneroCarpeta()!=""){
            $sql.="idViolenciaDeGeneroCarpeta";
            if(($violenciafactoressocialescarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($violenciafactoressocialescarpetasDto->getActivo()!=""){
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if($violenciafactoressocialescarpetasDto->getIdViolenciaFactorSocialCarpeta()!=""){
            $sql.="'".$violenciafactoressocialescarpetasDto->getIdViolenciaFactorSocialCarpeta()."'";
            if(($violenciafactoressocialescarpetasDto->getCveFactorCultural()!="") ||($violenciafactoressocialescarpetasDto->getIdViolenciaDeGeneroCarpeta()!="") ){
                $sql.=",";
            }
        }
        if($violenciafactoressocialescarpetasDto->getCveFactorCultural()!=""){
            $sql.="'".$violenciafactoressocialescarpetasDto->getCveFactorCultural()."'";
            if(($violenciafactoressocialescarpetasDto->getIdViolenciaDeGeneroCarpeta()!="") ){
                $sql.=",";
            }
        }
        if($violenciafactoressocialescarpetasDto->getIdViolenciaDeGeneroCarpeta()!=""){
            $sql.="'".$violenciafactoressocialescarpetasDto->getIdViolenciaDeGeneroCarpeta()."'";
            if(($violenciafactoressocialescarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($violenciafactoressocialescarpetasDto->getActivo()!=""){
            $sql.="'".$violenciafactoressocialescarpetasDto->getActivo()."'";
        }
        if($violenciafactoressocialescarpetasDto->getFechaRegistro()!=""){
        }
        if($violenciafactoressocialescarpetasDto->getFechaActualizacion()!=""){
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ViolenciafactoressocialescarpetasDTO();
            $tmp->setIdViolenciaFactorSocialCarpeta($this->_proveedor->lastID());
            $tmp = $this->selectViolenciafactoressocialescarpetas($tmp,"",$this->_proveedor);
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
    public function updateViolenciafactoressocialescarpetas($violenciafactoressocialescarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="UPDATE tblviolenciafactoressocialescarpetas SET ";
        if($violenciafactoressocialescarpetasDto->getIdViolenciaFactorSocialCarpeta()!=""){
            $sql.="idViolenciaFactorSocialCarpeta='".$violenciafactoressocialescarpetasDto->getIdViolenciaFactorSocialCarpeta()."'";
            if(($violenciafactoressocialescarpetasDto->getCveFactorCultural()!="") ||($violenciafactoressocialescarpetasDto->getIdViolenciaDeGeneroCarpeta()!="") ||($violenciafactoressocialescarpetasDto->getFechaRegistro()!="") ||($violenciafactoressocialescarpetasDto->getFechaActualizacion()!="") || ($violenciafactoressocialescarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($violenciafactoressocialescarpetasDto->getCveFactorCultural()!=""){
            $sql.="cveFactorCultural='".$violenciafactoressocialescarpetasDto->getCveFactorCultural()."'";
            if(($violenciafactoressocialescarpetasDto->getIdViolenciaDeGeneroCarpeta()!="") ||($violenciafactoressocialescarpetasDto->getFechaRegistro()!="") ||($violenciafactoressocialescarpetasDto->getFechaActualizacion()!="") || ($violenciafactoressocialescarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($violenciafactoressocialescarpetasDto->getIdViolenciaDeGeneroCarpeta()!=""){
            $sql.="idViolenciaDeGeneroCarpeta='".$violenciafactoressocialescarpetasDto->getIdViolenciaDeGeneroCarpeta()."'";
            if(($violenciafactoressocialescarpetasDto->getFechaRegistro()!="") ||($violenciafactoressocialescarpetasDto->getFechaActualizacion()!="") || ($violenciafactoressocialescarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($violenciafactoressocialescarpetasDto->getActivo()!=""){
            $sql.="activo='".$violenciafactoressocialescarpetasDto->getActivo()."'";
            if(($violenciafactoressocialescarpetasDto->getFechaRegistro()!="") ||($violenciafactoressocialescarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($violenciafactoressocialescarpetasDto->getFechaRegistro()!=""){
            $sql.="fechaRegistro='".$violenciafactoressocialescarpetasDto->getFechaRegistro()."'";
            if(($violenciafactoressocialescarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($violenciafactoressocialescarpetasDto->getFechaActualizacion()!=""){
            $sql.="fechaActualizacion='".$violenciafactoressocialescarpetasDto->getFechaActualizacion()."'";
        }
        $sql.=" WHERE idViolenciaFactorSocialCarpeta='".$violenciafactoressocialescarpetasDto->getIdViolenciaFactorSocialCarpeta()."'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ViolenciafactoressocialescarpetasDTO();
            $tmp->setIdViolenciaFactorSocialCarpeta($violenciafactoressocialescarpetasDto->getIdViolenciaFactorSocialCarpeta());
            $tmp = $this->selectViolenciafactoressocialescarpetas($tmp,"",$this->_proveedor);
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
    
    public function deleteViolenciafactoressocialescarpetas($violenciafactoressocialescarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="DELETE FROM tblviolenciafactoressocialescarpetas  WHERE idViolenciaFactorSocialCarpeta='".$violenciafactoressocialescarpetasDto->getIdViolenciaFactorSocialCarpeta()."'";
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
    
    public function selectViolenciafactoressocialescarpetas($violenciafactoressocialescarpetasDto,$orden="",$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="SELECT idViolenciaFactorSocialCarpeta,cveFactorCultural,idViolenciaDeGeneroCarpeta,activo,fechaRegistro,fechaActualizacion FROM tblviolenciafactoressocialescarpetas ";
        if(($violenciafactoressocialescarpetasDto->getIdViolenciaFactorSocialCarpeta()!="") ||($violenciafactoressocialescarpetasDto->getCveFactorCultural()!="") ||($violenciafactoressocialescarpetasDto->getIdViolenciaDeGeneroCarpeta()!="") ||($violenciafactoressocialescarpetasDto->getFechaRegistro()!="") ||($violenciafactoressocialescarpetasDto->getFechaActualizacion()!="") || ($violenciafactoressocialescarpetasDto->getActivo()!="") ){
            $sql.=" WHERE ";
        }
        if($violenciafactoressocialescarpetasDto->getIdViolenciaFactorSocialCarpeta()!=""){
            $sql.="idViolenciaFactorSocialCarpeta='".$violenciafactoressocialescarpetasDto->getIdViolenciaFactorSocialCarpeta()."'";
            if(($violenciafactoressocialescarpetasDto->getCveFactorCultural()!="") ||($violenciafactoressocialescarpetasDto->getIdViolenciaDeGeneroCarpeta()!="") ||($violenciafactoressocialescarpetasDto->getFechaRegistro()!="") ||($violenciafactoressocialescarpetasDto->getFechaActualizacion()!="") || ($violenciafactoressocialescarpetasDto->getActivo()!="") ){
                $sql.=" AND ";
            }
        }
        if($violenciafactoressocialescarpetasDto->getCveFactorCultural()!=""){
            $sql.="cveFactorCultural='".$violenciafactoressocialescarpetasDto->getCveFactorCultural()."'";
            if(($violenciafactoressocialescarpetasDto->getIdViolenciaDeGeneroCarpeta()!="") ||($violenciafactoressocialescarpetasDto->getFechaRegistro()!="") ||($violenciafactoressocialescarpetasDto->getFechaActualizacion()!="") || ($violenciafactoressocialescarpetasDto->getActivo()!="") ){
                $sql.=" AND ";
            }
        }
        if($violenciafactoressocialescarpetasDto->getIdViolenciaDeGeneroCarpeta()!=""){
            $sql.="idViolenciaDeGeneroCarpeta='".$violenciafactoressocialescarpetasDto->getIdViolenciaDeGeneroCarpeta()."'";
            if(($violenciafactoressocialescarpetasDto->getFechaRegistro()!="") ||($violenciafactoressocialescarpetasDto->getFechaActualizacion()!="") || ($violenciafactoressocialescarpetasDto->getActivo()!="") ){
                $sql.=" AND ";
            }
        }
        if($violenciafactoressocialescarpetasDto->getActivo()!=""){
            $sql.="activo='".$violenciafactoressocialescarpetasDto->getActivo()."'";
            if(($violenciafactoressocialescarpetasDto->getFechaRegistro()!="") ||($violenciafactoressocialescarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($violenciafactoressocialescarpetasDto->getFechaRegistro()!=""){
            $sql.="fechaRegistro='".$violenciafactoressocialescarpetasDto->getFechaRegistro()."'";
            if(($violenciafactoressocialescarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($violenciafactoressocialescarpetasDto->getFechaActualizacion()!=""){
            $sql.="fechaActualizacion='".$violenciafactoressocialescarpetasDto->getFechaActualizacion()."'";
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
                    $tmp[$contador] = new ViolenciafactoressocialescarpetasDTO();
                    $tmp[$contador]->setIdViolenciaFactorSocialCarpeta($row["idViolenciaFactorSocialCarpeta"]);
                    $tmp[$contador]->setCveFactorCultural($row["cveFactorCultural"]);
                    $tmp[$contador]->setIdViolenciaDeGeneroCarpeta($row["idViolenciaDeGeneroCarpeta"]);
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