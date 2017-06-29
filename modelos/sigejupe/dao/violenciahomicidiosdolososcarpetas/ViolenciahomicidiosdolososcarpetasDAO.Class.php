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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/violenciahomicidiosdolososcarpetas/ViolenciahomicidiosdolososcarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ViolenciahomicidiosdolososcarpetasDAO{
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
    public function insertViolenciahomicidiosdolososcarpetas($violenciahomicidiosdolososcarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="INSERT INTO tblviolenciahomicidiosdolososcarpetas(";
        if($violenciahomicidiosdolososcarpetasDto->getIdViolenciaHomicidioDolosoCarpeta()!=""){
            $sql.="idViolenciaHomicidioDolosoCarpeta";
            if(($violenciahomicidiosdolososcarpetasDto->getIdViolenciaDeGeneroCarpeta()!="") ||($violenciahomicidiosdolososcarpetasDto->getCveHomicidioDoloso()!="") ){
                $sql.=",";
            }
        }
        if($violenciahomicidiosdolososcarpetasDto->getIdViolenciaDeGeneroCarpeta()!=""){
            $sql.="idViolenciaDeGeneroCarpeta";
            if(($violenciahomicidiosdolososcarpetasDto->getCveHomicidioDoloso()!="") ){
                $sql.=",";
            }
        }
        if($violenciahomicidiosdolososcarpetasDto->getCveHomicidioDoloso()!=""){
            $sql.="cveHomicidioDoloso";
            if(($violenciahomicidiosdolososcarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($violenciahomicidiosdolososcarpetasDto->getActivo()!=""){
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if($violenciahomicidiosdolososcarpetasDto->getIdViolenciaHomicidioDolosoCarpeta()!=""){
            $sql.="'".$violenciahomicidiosdolososcarpetasDto->getIdViolenciaHomicidioDolosoCarpeta()."'";
            if(($violenciahomicidiosdolososcarpetasDto->getIdViolenciaDeGeneroCarpeta()!="") ||($violenciahomicidiosdolososcarpetasDto->getCveHomicidioDoloso()!="") ){
                $sql.=",";
            }
        }
        if($violenciahomicidiosdolososcarpetasDto->getIdViolenciaDeGeneroCarpeta()!=""){
            $sql.="'".$violenciahomicidiosdolososcarpetasDto->getIdViolenciaDeGeneroCarpeta()."'";
            if(($violenciahomicidiosdolososcarpetasDto->getCveHomicidioDoloso()!="") ){
                $sql.=",";
            }
        }
        if($violenciahomicidiosdolososcarpetasDto->getCveHomicidioDoloso()!=""){
            $sql.="'".$violenciahomicidiosdolososcarpetasDto->getCveHomicidioDoloso()."'";
            if(($violenciahomicidiosdolososcarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($violenciahomicidiosdolososcarpetasDto->getActivo()!=""){
            $sql.="'".$violenciahomicidiosdolososcarpetasDto->getActivo()."'";
        }
        if($violenciahomicidiosdolososcarpetasDto->getFechaRegistro()!=""){
        }
        if($violenciahomicidiosdolososcarpetasDto->getFechaActualizacion()!=""){
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ViolenciahomicidiosdolososcarpetasDTO();
            $tmp->setIdViolenciaHomicidioDolosoCarpeta($this->_proveedor->lastID());
            $tmp = $this->selectViolenciahomicidiosdolososcarpetas($tmp,"",$this->_proveedor);
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
    
    public function updateViolenciahomicidiosdolososcarpetas($violenciahomicidiosdolososcarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="UPDATE tblviolenciahomicidiosdolososcarpetas SET ";
        if($violenciahomicidiosdolososcarpetasDto->getIdViolenciaHomicidioDolosoCarpeta()!=""){
            $sql.="idViolenciaHomicidioDolosoCarpeta='".$violenciahomicidiosdolososcarpetasDto->getIdViolenciaHomicidioDolosoCarpeta()."'";
            if(($violenciahomicidiosdolososcarpetasDto->getIdViolenciaDeGeneroCarpeta()!="") ||($violenciahomicidiosdolososcarpetasDto->getCveHomicidioDoloso()!="") || ($violenciahomicidiosdolososcarpetasDto->getActivo()!="") ||($violenciahomicidiosdolososcarpetasDto->getFechaRegistro()!="") ||($violenciahomicidiosdolososcarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($violenciahomicidiosdolososcarpetasDto->getIdViolenciaDeGeneroCarpeta()!=""){
            $sql.="idViolenciaDeGeneroCarpeta='".$violenciahomicidiosdolososcarpetasDto->getIdViolenciaDeGeneroCarpeta()."'";
            if(($violenciahomicidiosdolososcarpetasDto->getCveHomicidioDoloso()!="") || ($violenciahomicidiosdolososcarpetasDto->getActivo()!="") ||($violenciahomicidiosdolososcarpetasDto->getFechaRegistro()!="") ||($violenciahomicidiosdolososcarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($violenciahomicidiosdolososcarpetasDto->getCveHomicidioDoloso()!=""){
            $sql.="cveHomicidioDoloso='".$violenciahomicidiosdolososcarpetasDto->getCveHomicidioDoloso()."'";
            if(($violenciahomicidiosdolososcarpetasDto->getFechaRegistro()!="") ||($violenciahomicidiosdolososcarpetasDto->getFechaActualizacion()!="") || ($violenciahomicidiosdolososcarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($violenciahomicidiosdolososcarpetasDto->getActivo()!=""){
            $sql.="activo='".$violenciahomicidiosdolososcarpetasDto->getActivo()."'";
            if(($violenciahomicidiosdolososcarpetasDto->getFechaRegistro()!="") ||($violenciahomicidiosdolososcarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($violenciahomicidiosdolososcarpetasDto->getFechaRegistro()!=""){
            $sql.="fechaRegistro='".$violenciahomicidiosdolososcarpetasDto->getFechaRegistro()."'";
            if(($violenciahomicidiosdolososcarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($violenciahomicidiosdolososcarpetasDto->getFechaActualizacion()!=""){
            $sql.="fechaActualizacion='".$violenciahomicidiosdolososcarpetasDto->getFechaActualizacion()."'";
        }
        $sql.=" WHERE idViolenciaHomicidioDolosoCarpeta='".$violenciahomicidiosdolososcarpetasDto->getIdViolenciaHomicidioDolosoCarpeta()."'";
        //print_r($sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ViolenciahomicidiosdolososcarpetasDTO();
            $tmp->setIdViolenciaHomicidioDolosoCarpeta($violenciahomicidiosdolososcarpetasDto->getIdViolenciaHomicidioDolosoCarpeta());
            $tmp = $this->selectViolenciahomicidiosdolososcarpetas($tmp,"",$this->_proveedor);
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
    
    public function deleteViolenciahomicidiosdolososcarpetas($violenciahomicidiosdolososcarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="DELETE FROM tblviolenciahomicidiosdolososcarpetas  WHERE idViolenciaHomicidioDolosoCarpeta='".$violenciahomicidiosdolososcarpetasDto->getIdViolenciaHomicidioDolosoCarpeta()."'";
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
    
    public function selectViolenciahomicidiosdolososcarpetas($violenciahomicidiosdolososcarpetasDto,$orden="",$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="SELECT idViolenciaHomicidioDolosoCarpeta,idViolenciaDeGeneroCarpeta,cveHomicidioDoloso,activo,fechaRegistro,fechaActualizacion FROM tblviolenciahomicidiosdolososcarpetas ";
        if(($violenciahomicidiosdolososcarpetasDto->getIdViolenciaHomicidioDolosoCarpeta()!="") ||($violenciahomicidiosdolososcarpetasDto->getIdViolenciaDeGeneroCarpeta()!="") ||($violenciahomicidiosdolososcarpetasDto->getCveHomicidioDoloso()!="") ||($violenciahomicidiosdolososcarpetasDto->getFechaRegistro()!="") ||($violenciahomicidiosdolososcarpetasDto->getFechaActualizacion()!="") || ($violenciahomicidiosdolososcarpetasDto->getActivo()!="") ){
            $sql.=" WHERE ";
        }
        if($violenciahomicidiosdolososcarpetasDto->getIdViolenciaHomicidioDolosoCarpeta()!=""){
            $sql.="idViolenciaHomicidioDolosoCarpeta='".$violenciahomicidiosdolososcarpetasDto->getIdViolenciaHomicidioDolosoCarpeta()."'";
            if(($violenciahomicidiosdolososcarpetasDto->getIdViolenciaDeGeneroCarpeta()!="") ||($violenciahomicidiosdolososcarpetasDto->getCveHomicidioDoloso()!="") ||($violenciahomicidiosdolososcarpetasDto->getFechaRegistro()!="") ||($violenciahomicidiosdolososcarpetasDto->getFechaActualizacion()!="") || ($violenciahomicidiosdolososcarpetasDto->getActivo()!="") ){
                $sql.=" AND ";
            }
        }
        if($violenciahomicidiosdolososcarpetasDto->getIdViolenciaDeGeneroCarpeta()!=""){
            $sql.="idViolenciaDeGeneroCarpeta='".$violenciahomicidiosdolososcarpetasDto->getIdViolenciaDeGeneroCarpeta()."'";
            if(($violenciahomicidiosdolososcarpetasDto->getCveHomicidioDoloso()!="") ||($violenciahomicidiosdolososcarpetasDto->getFechaRegistro()!="") ||($violenciahomicidiosdolososcarpetasDto->getFechaActualizacion()!="") || ($violenciahomicidiosdolososcarpetasDto->getActivo()!="") ){
                $sql.=" AND ";
            }
        }
        if($violenciahomicidiosdolososcarpetasDto->getCveHomicidioDoloso()!=""){
            $sql.="cveHomicidioDoloso='".$violenciahomicidiosdolososcarpetasDto->getCveHomicidioDoloso()."'";
            if(($violenciahomicidiosdolososcarpetasDto->getFechaRegistro()!="") ||($violenciahomicidiosdolososcarpetasDto->getFechaActualizacion()!="") || ($violenciahomicidiosdolososcarpetasDto->getActivo()!="") ){
                $sql.=" AND ";
            }
        }
        if($violenciahomicidiosdolososcarpetasDto->getActivo()!=""){
            $sql.="activo='".$violenciahomicidiosdolososcarpetasDto->getActivo()."'";
            if(($violenciahomicidiosdolososcarpetasDto->getFechaRegistro()!="") ||($violenciahomicidiosdolososcarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($violenciahomicidiosdolososcarpetasDto->getFechaRegistro()!=""){
            $sql.="fechaRegistro='".$violenciahomicidiosdolososcarpetasDto->getFechaRegistro()."'";
            if(($violenciahomicidiosdolososcarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($violenciahomicidiosdolososcarpetasDto->getFechaActualizacion()!=""){
            $sql.="fechaActualizacion='".$violenciahomicidiosdolososcarpetasDto->getFechaActualizacion()."'";
        }
        if($orden!=""){
            $sql.=$orden;
        }else{
            $sql.="";
        }
        //print_r($sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new ViolenciahomicidiosdolososcarpetasDTO();
                    $tmp[$contador]->setIdViolenciaHomicidioDolosoCarpeta($row["idViolenciaHomicidioDolosoCarpeta"]);
                    $tmp[$contador]->setIdViolenciaDeGeneroCarpeta($row["idViolenciaDeGeneroCarpeta"]);
                    $tmp[$contador]->setCveHomicidioDoloso($row["cveHomicidioDoloso"]);
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