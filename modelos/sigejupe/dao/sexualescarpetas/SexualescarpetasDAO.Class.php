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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/sexualescarpetas/SexualescarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class SexualescarpetasDAO{
    protected $_proveedor;
    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }
    public function _conexion(){
        $this->_proveedor->connect();
    }
    public function insertSexualescarpetas($sexualescarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="INSERT INTO tblsexualescarpetas(";
        if($sexualescarpetasDto->getIdSexualCarpeta()!=""){
            $sql.="idSexualCarpeta";
            if(($sexualescarpetasDto->getIdImpOfeDelCarpeta()!="") ||($sexualescarpetasDto->getCveModalidadAcoso()!="") ||($sexualescarpetasDto->getCveAmbitoAcoso()!="") ||($sexualescarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($sexualescarpetasDto->getIdImpOfeDelCarpeta()!=""){
            $sql.="idImpOfeDelCarpeta";
            if(($sexualescarpetasDto->getCveModalidadAcoso()!="") ||($sexualescarpetasDto->getCveAmbitoAcoso()!="") ||($sexualescarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($sexualescarpetasDto->getCveModalidadAcoso()!=""){
            $sql.="cveModalidadAcoso";
            if(($sexualescarpetasDto->getCveAmbitoAcoso()!="") ||($sexualescarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($sexualescarpetasDto->getCveAmbitoAcoso()!=""){
            $sql.="cveAmbitoAcoso";
            if(($sexualescarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($sexualescarpetasDto->getActivo()!=""){
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if($sexualescarpetasDto->getIdSexualCarpeta()!=""){
            $sql.="'".$sexualescarpetasDto->getIdSexualCarpeta()."'";
            if(($sexualescarpetasDto->getIdImpOfeDelCarpeta()!="") ||($sexualescarpetasDto->getCveModalidadAcoso()!="") ||($sexualescarpetasDto->getCveAmbitoAcoso()!="") ||($sexualescarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($sexualescarpetasDto->getIdImpOfeDelCarpeta()!=""){
            $sql.="'".$sexualescarpetasDto->getIdImpOfeDelCarpeta()."'";
            if(($sexualescarpetasDto->getCveModalidadAcoso()!="") ||($sexualescarpetasDto->getCveAmbitoAcoso()!="") ||($sexualescarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($sexualescarpetasDto->getCveModalidadAcoso()!=""){
            $sql.="'".$sexualescarpetasDto->getCveModalidadAcoso()."'";
            if(($sexualescarpetasDto->getCveAmbitoAcoso()!="") ||($sexualescarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($sexualescarpetasDto->getCveAmbitoAcoso()!=""){
            $sql.="'".$sexualescarpetasDto->getCveAmbitoAcoso()."'";
            if(($sexualescarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($sexualescarpetasDto->getActivo()!=""){
            $sql.="'".$sexualescarpetasDto->getActivo()."'";
        }
        if($sexualescarpetasDto->getFechaRegistro()!=""){
        }
        if($sexualescarpetasDto->getFechaActualizacion()!=""){
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new SexualescarpetasDTO();
            $tmp->setIdSexualCarpeta($this->_proveedor->lastID());
            $tmp = $this->selectSexualescarpetas($tmp,"",$this->_proveedor);
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
    public function updateSexualescarpetas($sexualescarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="UPDATE tblsexualescarpetas SET ";
        if($sexualescarpetasDto->getIdSexualCarpeta()!=""){
            $sql.="idSexualCarpeta='".$sexualescarpetasDto->getIdSexualCarpeta()."'";
            if(($sexualescarpetasDto->getIdImpOfeDelCarpeta()!="") ||($sexualescarpetasDto->getCveModalidadAcoso()!="") ||($sexualescarpetasDto->getCveAmbitoAcoso()!="") ||($sexualescarpetasDto->getActivo()!="") ||($sexualescarpetasDto->getFechaRegistro()!="") ||($sexualescarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($sexualescarpetasDto->getIdImpOfeDelCarpeta()!=""){
            $sql.="idImpOfeDelCarpeta='".$sexualescarpetasDto->getIdImpOfeDelCarpeta()."'";
            if(($sexualescarpetasDto->getCveModalidadAcoso()!="") ||($sexualescarpetasDto->getCveAmbitoAcoso()!="") ||($sexualescarpetasDto->getActivo()!="") ||($sexualescarpetasDto->getFechaRegistro()!="") ||($sexualescarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($sexualescarpetasDto->getCveModalidadAcoso()!=""){
            $sql.="cveModalidadAcoso='".$sexualescarpetasDto->getCveModalidadAcoso()."'";
            if(($sexualescarpetasDto->getCveAmbitoAcoso()!="") ||($sexualescarpetasDto->getActivo()!="") ||($sexualescarpetasDto->getFechaRegistro()!="") ||($sexualescarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($sexualescarpetasDto->getCveAmbitoAcoso()!=""){
            $sql.="cveAmbitoAcoso='".$sexualescarpetasDto->getCveAmbitoAcoso()."'";
            if(($sexualescarpetasDto->getActivo()!="") ||($sexualescarpetasDto->getFechaRegistro()!="") ||($sexualescarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($sexualescarpetasDto->getActivo()!=""){
            $sql.="activo='".$sexualescarpetasDto->getActivo()."'";
            if(($sexualescarpetasDto->getFechaRegistro()!="") ||($sexualescarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($sexualescarpetasDto->getFechaRegistro()!=""){
            $sql.="fechaRegistro='".$sexualescarpetasDto->getFechaRegistro()."'";
            if(($sexualescarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($sexualescarpetasDto->getFechaActualizacion()!=""){
            $sql.="fechaActualizacion='".$sexualescarpetasDto->getFechaActualizacion()."'";
        }
        $sql.=" WHERE idSexualCarpeta='".$sexualescarpetasDto->getIdSexualCarpeta()."'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new SexualescarpetasDTO();
            $tmp->setIdSexualCarpeta($sexualescarpetasDto->getIdSexualCarpeta());
            $tmp = $this->selectSexualescarpetas($tmp,"",$this->_proveedor);
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
    public function deleteSexualescarpetas($sexualescarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="DELETE FROM tblsexualescarpetas  WHERE idSexualCarpeta='".$sexualescarpetasDto->getIdSexualCarpeta()."'";
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
    public function selectSexualescarpetas($sexualescarpetasDto,$orden="",$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="SELECT idSexualCarpeta,idImpOfeDelCarpeta,cveModalidadAcoso,cveAmbitoAcoso,activo,fechaRegistro,fechaActualizacion FROM tblsexualescarpetas ";
        if(($sexualescarpetasDto->getIdSexualCarpeta()!="") ||($sexualescarpetasDto->getIdImpOfeDelCarpeta()!="") ||($sexualescarpetasDto->getCveModalidadAcoso()!="") ||($sexualescarpetasDto->getCveAmbitoAcoso()!="") ||($sexualescarpetasDto->getActivo()!="") ||($sexualescarpetasDto->getFechaRegistro()!="") ||($sexualescarpetasDto->getFechaActualizacion()!="") ){
            $sql.=" WHERE ";
        }
        if($sexualescarpetasDto->getIdSexualCarpeta()!=""){
            $sql.="idSexualCarpeta='".$sexualescarpetasDto->getIdSexualCarpeta()."'";
            if(($sexualescarpetasDto->getIdImpOfeDelCarpeta()!="") ||($sexualescarpetasDto->getCveModalidadAcoso()!="") ||($sexualescarpetasDto->getCveAmbitoAcoso()!="") ||($sexualescarpetasDto->getActivo()!="") ||($sexualescarpetasDto->getFechaRegistro()!="") ||($sexualescarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($sexualescarpetasDto->getIdImpOfeDelCarpeta()!=""){
            $sql.="idImpOfeDelCarpeta='".$sexualescarpetasDto->getIdImpOfeDelCarpeta()."'";
            if(($sexualescarpetasDto->getCveModalidadAcoso()!="") ||($sexualescarpetasDto->getCveAmbitoAcoso()!="") ||($sexualescarpetasDto->getActivo()!="") ||($sexualescarpetasDto->getFechaRegistro()!="") ||($sexualescarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($sexualescarpetasDto->getCveModalidadAcoso()!=""){
            $sql.="cveModalidadAcoso='".$sexualescarpetasDto->getCveModalidadAcoso()."'";
            if(($sexualescarpetasDto->getCveAmbitoAcoso()!="") ||($sexualescarpetasDto->getActivo()!="") ||($sexualescarpetasDto->getFechaRegistro()!="") ||($sexualescarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($sexualescarpetasDto->getCveAmbitoAcoso()!=""){
            $sql.="cveAmbitoAcoso='".$sexualescarpetasDto->getCveAmbitoAcoso()."'";
            if(($sexualescarpetasDto->getActivo()!="") ||($sexualescarpetasDto->getFechaRegistro()!="") ||($sexualescarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($sexualescarpetasDto->getActivo()!=""){
            $sql.="activo='".$sexualescarpetasDto->getActivo()."'";
            if(($sexualescarpetasDto->getFechaRegistro()!="") ||($sexualescarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($sexualescarpetasDto->getFechaRegistro()!=""){
            $sql.="fechaRegistro='".$sexualescarpetasDto->getFechaRegistro()."'";
            if(($sexualescarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($sexualescarpetasDto->getFechaActualizacion()!=""){
            $sql.="fechaActualizacion='".$sexualescarpetasDto->getFechaActualizacion()."'";
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
                    $tmp[$contador] = new SexualescarpetasDTO();
                    $tmp[$contador]->setIdSexualCarpeta($row["idSexualCarpeta"]);
                    $tmp[$contador]->setIdImpOfeDelCarpeta($row["idImpOfeDelCarpeta"]);
                    $tmp[$contador]->setCveModalidadAcoso($row["cveModalidadAcoso"]);
                    $tmp[$contador]->setCveAmbitoAcoso($row["cveAmbitoAcoso"]);
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