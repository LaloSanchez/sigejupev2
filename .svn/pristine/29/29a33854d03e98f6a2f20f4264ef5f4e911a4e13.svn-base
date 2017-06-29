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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/configuracionesjuzgadores/ConfiguracionesjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ConfiguracionesjuzgadoresDAO{
    protected $_proveedor;
    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }
    public function _conexion(){
        $this->_proveedor->connect();
    }
    public function insertConfiguracionesjuzgadores($configuracionesjuzgadoresDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="INSERT INTO tblconfiguracionesjuzgadores(";
        if($configuracionesjuzgadoresDto->getidConfiguracionJuzgador()!=""){
            $sql.="idConfiguracionJuzgador";
            if(($configuracionesjuzgadoresDto->getIdHorarioJuzgador()!="") ||($configuracionesjuzgadoresDto->getIdJuzgador()!="") ||($configuracionesjuzgadoresDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($configuracionesjuzgadoresDto->getIdHorarioJuzgador()!=""){
            $sql.="IdHorarioJuzgador";
            if(($configuracionesjuzgadoresDto->getIdJuzgador()!="") ||($configuracionesjuzgadoresDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($configuracionesjuzgadoresDto->getIdJuzgador()!=""){
            $sql.="IdJuzgador";
            if(($configuracionesjuzgadoresDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($configuracionesjuzgadoresDto->getactivo()!=""){
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if($configuracionesjuzgadoresDto->getidConfiguracionJuzgador()!=""){
            $sql.="'".$configuracionesjuzgadoresDto->getidConfiguracionJuzgador()."'";
            if(($configuracionesjuzgadoresDto->getIdHorarioJuzgador()!="") ||($configuracionesjuzgadoresDto->getIdJuzgador()!="") ||($configuracionesjuzgadoresDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($configuracionesjuzgadoresDto->getIdHorarioJuzgador()!=""){
            $sql.="'".$configuracionesjuzgadoresDto->getIdHorarioJuzgador()."'";
            if(($configuracionesjuzgadoresDto->getIdJuzgador()!="") ||($configuracionesjuzgadoresDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($configuracionesjuzgadoresDto->getIdJuzgador()!=""){
            $sql.="'".$configuracionesjuzgadoresDto->getIdJuzgador()."'";
            if(($configuracionesjuzgadoresDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($configuracionesjuzgadoresDto->getactivo()!=""){
            $sql.="'".$configuracionesjuzgadoresDto->getactivo()."'";
        }
        if($configuracionesjuzgadoresDto->getfechaRegistro()!=""){
        }
        if($configuracionesjuzgadoresDto->getfechaActualizacion()!=""){
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ConfiguracionesjuzgadoresDTO();
            $tmp->setidConfiguracionJuzgador($this->_proveedor->lastID());
            $tmp = $this->selectConfiguracionesjuzgadores($tmp,"",$this->_proveedor);
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
    public function updateConfiguracionesjuzgadores($configuracionesjuzgadoresDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="UPDATE tblconfiguracionesjuzgadores SET ";
        if($configuracionesjuzgadoresDto->getidConfiguracionJuzgador()!=""){
            $sql.="idConfiguracionJuzgador='".$configuracionesjuzgadoresDto->getidConfiguracionJuzgador()."'";
            if(($configuracionesjuzgadoresDto->getIdHorarioJuzgador()!="") ||($configuracionesjuzgadoresDto->getIdJuzgador()!="") ||($configuracionesjuzgadoresDto->getActivo()!="") ||($configuracionesjuzgadoresDto->getFechaRegistro()!="") ||($configuracionesjuzgadoresDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($configuracionesjuzgadoresDto->getIdHorarioJuzgador()!=""){
            $sql.="IdHorarioJuzgador='".$configuracionesjuzgadoresDto->getIdHorarioJuzgador()."'";
            if(($configuracionesjuzgadoresDto->getIdJuzgador()!="") ||($configuracionesjuzgadoresDto->getActivo()!="") ||($configuracionesjuzgadoresDto->getFechaRegistro()!="") ||($configuracionesjuzgadoresDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($configuracionesjuzgadoresDto->getIdJuzgador()!=""){
            $sql.="IdJuzgador='".$configuracionesjuzgadoresDto->getIdJuzgador()."'";
            if(($configuracionesjuzgadoresDto->getActivo()!="") ||($configuracionesjuzgadoresDto->getFechaRegistro()!="") ||($configuracionesjuzgadoresDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($configuracionesjuzgadoresDto->getactivo()!=""){
            $sql.="activo='".$configuracionesjuzgadoresDto->getactivo()."'";
            if(($configuracionesjuzgadoresDto->getFechaRegistro()!="") ||($configuracionesjuzgadoresDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($configuracionesjuzgadoresDto->getfechaRegistro()!=""){
            $sql.="fechaRegistro='".$configuracionesjuzgadoresDto->getfechaRegistro()."'";
            if(($configuracionesjuzgadoresDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($configuracionesjuzgadoresDto->getfechaActualizacion()!=""){
            $sql.="fechaActualizacion='".$configuracionesjuzgadoresDto->getfechaActualizacion()."'";
        }
        $sql.=" WHERE idConfiguracionJuzgador='".$configuracionesjuzgadoresDto->getidConfiguracionJuzgador()."'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ConfiguracionesjuzgadoresDTO();
            $tmp->setidConfiguracionJuzgador($configuracionesjuzgadoresDto->getidConfiguracionJuzgador());
            $tmp = $this->selectConfiguracionesjuzgadores($tmp,"",$this->_proveedor);
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
    public function deleteConfiguracionesjuzgadores($configuracionesjuzgadoresDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="DELETE FROM tblconfiguracionesjuzgadores  WHERE idConfiguracionJuzgador='".$configuracionesjuzgadoresDto->getidConfiguracionJuzgador()."'";
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
    //borrado logico por idHorarioJuzgador
    public function deleteLogicConfiguracionesjuzgadores($configuracionesjuzgadoresDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="UPDATE tblconfiguracionesjuzgadores SET activo='N' WHERE idHorarioJuzgador='" . $configuracionesjuzgadoresDto->getIdHorarioJuzgador() . "'";
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
    public function selectConfiguracionesjuzgadores($configuracionesjuzgadoresDto,$orden="",$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="SELECT idConfiguracionJuzgador,IdHorarioJuzgador,IdJuzgador,activo,fechaRegistro,fechaActualizacion FROM tblconfiguracionesjuzgadores ";
        if(($configuracionesjuzgadoresDto->getidConfiguracionJuzgador()!="") ||($configuracionesjuzgadoresDto->getIdHorarioJuzgador()!="") ||($configuracionesjuzgadoresDto->getIdJuzgador()!="") ||($configuracionesjuzgadoresDto->getactivo()!="") ||($configuracionesjuzgadoresDto->getfechaRegistro()!="") ||($configuracionesjuzgadoresDto->getfechaActualizacion()!="") ){
            $sql.=" WHERE ";
        }
        if($configuracionesjuzgadoresDto->getidConfiguracionJuzgador()!=""){
            $sql.="idConfiguracionJuzgador='".$configuracionesjuzgadoresDto->getIdConfiguracionJuzgador()."'";
            if(($configuracionesjuzgadoresDto->getIdHorarioJuzgador()!="") ||($configuracionesjuzgadoresDto->getIdJuzgador()!="") ||($configuracionesjuzgadoresDto->getActivo()!="") ||($configuracionesjuzgadoresDto->getFechaRegistro()!="") ||($configuracionesjuzgadoresDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($configuracionesjuzgadoresDto->getIdHorarioJuzgador()!=""){
            $sql.="IdHorarioJuzgador='".$configuracionesjuzgadoresDto->getIdHorarioJuzgador()."'";
            if(($configuracionesjuzgadoresDto->getIdJuzgador()!="") ||($configuracionesjuzgadoresDto->getActivo()!="") ||($configuracionesjuzgadoresDto->getFechaRegistro()!="") ||($configuracionesjuzgadoresDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($configuracionesjuzgadoresDto->getIdJuzgador()!=""){
            $sql.="IdJuzgador='".$configuracionesjuzgadoresDto->getIdJuzgador()."'";
            if(($configuracionesjuzgadoresDto->getActivo()!="") ||($configuracionesjuzgadoresDto->getFechaRegistro()!="") ||($configuracionesjuzgadoresDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($configuracionesjuzgadoresDto->getactivo()!=""){
            $sql.="activo='".$configuracionesjuzgadoresDto->getActivo()."'";
            if(($configuracionesjuzgadoresDto->getFechaRegistro()!="") ||($configuracionesjuzgadoresDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($configuracionesjuzgadoresDto->getfechaRegistro()!=""){
            $sql.="fechaRegistro='".$configuracionesjuzgadoresDto->getFechaRegistro()."'";
            if(($configuracionesjuzgadoresDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($configuracionesjuzgadoresDto->getfechaActualizacion()!=""){
            $sql.="fechaActualizacion='".$configuracionesjuzgadoresDto->getFechaActualizacion()."'";
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
                    $tmp[$contador] = new ConfiguracionesjuzgadoresDTO();
                    $tmp[$contador]->setIdConfiguracionJuzgador($row["idConfiguracionJuzgador"]);
                    $tmp[$contador]->setIdHorarioJuzgador($row["IdHorarioJuzgador"]);
                    $tmp[$contador]->setIdJuzgador($row["IdJuzgador"]);
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