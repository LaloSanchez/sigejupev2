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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/telefonosimputadoscarpetas/TelefonosimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TelefonosimputadoscarpetasDAO{
    protected $_proveedor;
    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }
    public function _conexion(){
        $this->_proveedor->connect();
    }
    public function insertTelefonosimputadoscarpetas($telefonosimputadoscarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="INSERT INTO tbltelefonosimputadoscarpetas(";
        if($telefonosimputadoscarpetasDto->getIdTelefonoImputadosCarpeta()!=""){
            $sql.="idTelefonoImputadosCarpeta";
            if(($telefonosimputadoscarpetasDto->getIdImputadoCarpeta()!="") ||($telefonosimputadoscarpetasDto->getTelefono()!="") ||($telefonosimputadoscarpetasDto->getCelular()!="") ||($telefonosimputadoscarpetasDto->getEmail()!="") ||($telefonosimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($telefonosimputadoscarpetasDto->getIdImputadoCarpeta()!=""){
            $sql.="idImputadoCarpeta";
            if(($telefonosimputadoscarpetasDto->getTelefono()!="") ||($telefonosimputadoscarpetasDto->getCelular()!="") ||($telefonosimputadoscarpetasDto->getEmail()!="") ||($telefonosimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($telefonosimputadoscarpetasDto->getTelefono()!=""){
            $sql.="telefono";
            if(($telefonosimputadoscarpetasDto->getCelular()!="") ||($telefonosimputadoscarpetasDto->getEmail()!="") ||($telefonosimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($telefonosimputadoscarpetasDto->getCelular()!=""){
            $sql.="celular";
            if(($telefonosimputadoscarpetasDto->getEmail()!="") ||($telefonosimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($telefonosimputadoscarpetasDto->getEmail()!=""){
            $sql.="email";
            if(($telefonosimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($telefonosimputadoscarpetasDto->getActivo()!=""){
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if($telefonosimputadoscarpetasDto->getIdTelefonoImputadosCarpeta()!=""){
            $sql.="'".$telefonosimputadoscarpetasDto->getIdTelefonoImputadosCarpeta()."'";
            if(($telefonosimputadoscarpetasDto->getIdImputadoCarpeta()!="") ||($telefonosimputadoscarpetasDto->getTelefono()!="") ||($telefonosimputadoscarpetasDto->getCelular()!="") ||($telefonosimputadoscarpetasDto->getEmail()!="") ||($telefonosimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($telefonosimputadoscarpetasDto->getIdImputadoCarpeta()!=""){
            $sql.="'".$telefonosimputadoscarpetasDto->getIdImputadoCarpeta()."'";
            if(($telefonosimputadoscarpetasDto->getTelefono()!="") ||($telefonosimputadoscarpetasDto->getCelular()!="") ||($telefonosimputadoscarpetasDto->getEmail()!="") ||($telefonosimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($telefonosimputadoscarpetasDto->getTelefono()!=""){
            $sql.="'".$telefonosimputadoscarpetasDto->getTelefono()."'";
            if(($telefonosimputadoscarpetasDto->getCelular()!="") ||($telefonosimputadoscarpetasDto->getEmail()!="") ||($telefonosimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($telefonosimputadoscarpetasDto->getCelular()!=""){
            $sql.="'".$telefonosimputadoscarpetasDto->getCelular()."'";
            if(($telefonosimputadoscarpetasDto->getEmail()!="") ||($telefonosimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($telefonosimputadoscarpetasDto->getEmail()!=""){
            $sql.="'".$telefonosimputadoscarpetasDto->getEmail()."'";
            if(($telefonosimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($telefonosimputadoscarpetasDto->getActivo()!=""){
            $sql.="'".$telefonosimputadoscarpetasDto->getActivo()."'";
        }
        if($telefonosimputadoscarpetasDto->getFechaRegistro()!=""){
        }
        if($telefonosimputadoscarpetasDto->getFechaActualizacion()!=""){
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TelefonosimputadoscarpetasDTO();
            $tmp->setIdTelefonoImputadosCarpeta($this->_proveedor->lastID());
            $tmp = $this->selectTelefonosimputadoscarpetas($tmp,"",$this->_proveedor);
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
    public function updateTelefonosimputadoscarpetas($telefonosimputadoscarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="UPDATE tbltelefonosimputadoscarpetas SET ";
        if($telefonosimputadoscarpetasDto->getIdTelefonoImputadosCarpeta()!=""){
            $sql.="idTelefonoImputadosCarpeta='".$telefonosimputadoscarpetasDto->getIdTelefonoImputadosCarpeta()."'";
            if(($telefonosimputadoscarpetasDto->getIdImputadoCarpeta()!="") ||($telefonosimputadoscarpetasDto->getTelefono()!="") ||($telefonosimputadoscarpetasDto->getCelular()!="") ||($telefonosimputadoscarpetasDto->getEmail()!="") ||($telefonosimputadoscarpetasDto->getActivo()!="") ||($telefonosimputadoscarpetasDto->getFechaRegistro()!="") ||($telefonosimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($telefonosimputadoscarpetasDto->getIdImputadoCarpeta()!=""){
            $sql.="idImputadoCarpeta='".$telefonosimputadoscarpetasDto->getIdImputadoCarpeta()."'";
            if(($telefonosimputadoscarpetasDto->getTelefono()!="") ||($telefonosimputadoscarpetasDto->getCelular()!="") ||($telefonosimputadoscarpetasDto->getEmail()!="") ||($telefonosimputadoscarpetasDto->getActivo()!="") ||($telefonosimputadoscarpetasDto->getFechaRegistro()!="") ||($telefonosimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($telefonosimputadoscarpetasDto->getTelefono()!=""){
            $sql.="telefono='".$telefonosimputadoscarpetasDto->getTelefono()."'";
            if(($telefonosimputadoscarpetasDto->getCelular()!="") ||($telefonosimputadoscarpetasDto->getEmail()!="") ||($telefonosimputadoscarpetasDto->getActivo()!="") ||($telefonosimputadoscarpetasDto->getFechaRegistro()!="") ||($telefonosimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($telefonosimputadoscarpetasDto->getCelular()!=""){
            $sql.="celular='".$telefonosimputadoscarpetasDto->getCelular()."'";
            if(($telefonosimputadoscarpetasDto->getEmail()!="") ||($telefonosimputadoscarpetasDto->getActivo()!="") ||($telefonosimputadoscarpetasDto->getFechaRegistro()!="") ||($telefonosimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($telefonosimputadoscarpetasDto->getEmail()!=""){
            $sql.="email='".$telefonosimputadoscarpetasDto->getEmail()."'";
            if(($telefonosimputadoscarpetasDto->getActivo()!="") ||($telefonosimputadoscarpetasDto->getFechaRegistro()!="") ||($telefonosimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($telefonosimputadoscarpetasDto->getActivo()!=""){
            $sql.="activo='".$telefonosimputadoscarpetasDto->getActivo()."'";
            if(($telefonosimputadoscarpetasDto->getFechaRegistro()!="") ||($telefonosimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($telefonosimputadoscarpetasDto->getFechaRegistro()!=""){
            $sql.="fechaRegistro='".$telefonosimputadoscarpetasDto->getFechaRegistro()."'";
            if(($telefonosimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($telefonosimputadoscarpetasDto->getFechaActualizacion()!=""){
            $sql.="fechaActualizacion='".$telefonosimputadoscarpetasDto->getFechaActualizacion()."'";
        }
        $sql.=" WHERE idTelefonoImputadosCarpeta='".$telefonosimputadoscarpetasDto->getIdTelefonoImputadosCarpeta()."'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TelefonosimputadoscarpetasDTO();
            $tmp->setIdTelefonoImputadosCarpeta($telefonosimputadoscarpetasDto->getIdTelefonoImputadosCarpeta());
            $tmp = $this->selectTelefonosimputadoscarpetas($tmp,"",$this->_proveedor);
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
    public function deleteTelefonosimputadoscarpetas($telefonosimputadoscarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="DELETE FROM tbltelefonosimputadoscarpetas  WHERE idTelefonoImputadosCarpeta='".$telefonosimputadoscarpetasDto->getIdTelefonoImputadosCarpeta()."'";
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
    public function selectTelefonosimputadoscarpetas($telefonosimputadoscarpetasDto,$orden="",$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="SELECT idTelefonoImputadosCarpeta,idImputadoCarpeta,telefono,celular,email,activo,fechaRegistro,fechaActualizacion FROM tbltelefonosimputadoscarpetas ";
        if(($telefonosimputadoscarpetasDto->getIdTelefonoImputadosCarpeta()!="") ||($telefonosimputadoscarpetasDto->getIdImputadoCarpeta()!="") ||($telefonosimputadoscarpetasDto->getTelefono()!="") ||($telefonosimputadoscarpetasDto->getCelular()!="") ||($telefonosimputadoscarpetasDto->getEmail()!="") ||($telefonosimputadoscarpetasDto->getActivo()!="") ||($telefonosimputadoscarpetasDto->getFechaRegistro()!="") ||($telefonosimputadoscarpetasDto->getFechaActualizacion()!="") ){
            $sql.=" WHERE ";
        }
        if($telefonosimputadoscarpetasDto->getIdTelefonoImputadosCarpeta()!=""){
            $sql.="idTelefonoImputadosCarpeta='".$telefonosimputadoscarpetasDto->getIdTelefonoImputadosCarpeta()."'";
            if(($telefonosimputadoscarpetasDto->getIdImputadoCarpeta()!="") ||($telefonosimputadoscarpetasDto->getTelefono()!="") ||($telefonosimputadoscarpetasDto->getCelular()!="") ||($telefonosimputadoscarpetasDto->getEmail()!="") ||($telefonosimputadoscarpetasDto->getActivo()!="") ||($telefonosimputadoscarpetasDto->getFechaRegistro()!="") ||($telefonosimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($telefonosimputadoscarpetasDto->getIdImputadoCarpeta()!=""){
            $sql.="idImputadoCarpeta='".$telefonosimputadoscarpetasDto->getIdImputadoCarpeta()."'";
            if(($telefonosimputadoscarpetasDto->getTelefono()!="") ||($telefonosimputadoscarpetasDto->getCelular()!="") ||($telefonosimputadoscarpetasDto->getEmail()!="") ||($telefonosimputadoscarpetasDto->getActivo()!="") ||($telefonosimputadoscarpetasDto->getFechaRegistro()!="") ||($telefonosimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($telefonosimputadoscarpetasDto->getTelefono()!=""){
            $sql.="telefono='".$telefonosimputadoscarpetasDto->getTelefono()."'";
            if(($telefonosimputadoscarpetasDto->getCelular()!="") ||($telefonosimputadoscarpetasDto->getEmail()!="") ||($telefonosimputadoscarpetasDto->getActivo()!="") ||($telefonosimputadoscarpetasDto->getFechaRegistro()!="") ||($telefonosimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($telefonosimputadoscarpetasDto->getCelular()!=""){
            $sql.="celular='".$telefonosimputadoscarpetasDto->getCelular()."'";
            if(($telefonosimputadoscarpetasDto->getEmail()!="") ||($telefonosimputadoscarpetasDto->getActivo()!="") ||($telefonosimputadoscarpetasDto->getFechaRegistro()!="") ||($telefonosimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($telefonosimputadoscarpetasDto->getEmail()!=""){
            $sql.="email='".$telefonosimputadoscarpetasDto->getEmail()."'";
            if(($telefonosimputadoscarpetasDto->getActivo()!="") ||($telefonosimputadoscarpetasDto->getFechaRegistro()!="") ||($telefonosimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($telefonosimputadoscarpetasDto->getActivo()!=""){
            $sql.="activo='".$telefonosimputadoscarpetasDto->getActivo()."'";
            if(($telefonosimputadoscarpetasDto->getFechaRegistro()!="") ||($telefonosimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($telefonosimputadoscarpetasDto->getFechaRegistro()!=""){
            $sql.="fechaRegistro='".$telefonosimputadoscarpetasDto->getFechaRegistro()."'";
            if(($telefonosimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($telefonosimputadoscarpetasDto->getFechaActualizacion()!=""){
            $sql.="fechaActualizacion='".$telefonosimputadoscarpetasDto->getFechaActualizacion()."'";
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
                    $tmp[$contador] = new TelefonosimputadoscarpetasDTO();
                    $tmp[$contador]->setIdTelefonoImputadosCarpeta($row["idTelefonoImputadosCarpeta"]);
                    $tmp[$contador]->setIdImputadoCarpeta($row["idImputadoCarpeta"]);
                    $tmp[$contador]->setTelefono($row["telefono"]);
                    $tmp[$contador]->setCelular($row["celular"]);
                    $tmp[$contador]->setEmail($row["email"]);
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
    
    /*
     * Modificar telefonos imputados carpetas
     */
    public function modificarTelefonosimputadoscarpetas($telefonosimputadoscarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="UPDATE tbltelefonosimputadoscarpetas SET ";
        $sql.=" telefono='".$telefonosimputadoscarpetasDto->getTelefono()."'";
        $sql.=" ,celular='".$telefonosimputadoscarpetasDto->getCelular()."'";
        $sql.=" ,email='".$telefonosimputadoscarpetasDto->getEmail()."'";
        $sql.=" ,fechaActualizacion=NOW()";
        $sql.=" WHERE idTelefonoImputadosCarpeta='".$telefonosimputadoscarpetasDto->getIdTelefonoImputadosCarpeta()."'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TelefonosimputadoscarpetasDTO();
            $tmp->setIdTelefonoImputadosCarpeta($telefonosimputadoscarpetasDto->getIdTelefonoImputadosCarpeta());
            $tmp = $this->selectTelefonosimputadoscarpetas($tmp,"",$this->_proveedor);
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
    
    /*
     * Borrado logico de telefonos imputados carptas
     */
    public function eliminarTelefonosimputadoscarpetasByIdImputado($telefonosimputadoscarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltelefonosimputadoscarpetas SET activo='N', fechaActualizacion=NOW()";
        $sql.=" WHERE idTelefonoImputadosCarpeta='".$telefonosimputadoscarpetasDto->getIdTelefonoImputadosCarpeta()."'";
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
    
}
?>