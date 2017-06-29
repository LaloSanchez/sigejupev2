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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class DefensoresimputadoscarpetasDAO{
    protected $_proveedor;
    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }
    public function _conexion(){
        $this->_proveedor->connect();
    }
    public function insertDefensoresimputadoscarpetas($defensoresimputadoscarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="INSERT INTO tbldefensoresimputadoscarpetas(";
        if($defensoresimputadoscarpetasDto->getIdDefensorImputadoCarpeta()!=""){
            $sql.="idDefensorImputadoCarpeta";
            if(($defensoresimputadoscarpetasDto->getIdImputadoCarpeta()!="") ||($defensoresimputadoscarpetasDto->getCveTipoDefensor()!="") ||($defensoresimputadoscarpetasDto->getNombre()!="") ||($defensoresimputadoscarpetasDto->getTelefono()!="") ||($defensoresimputadoscarpetasDto->getCelular()!="") ||($defensoresimputadoscarpetasDto->getEmail()!="") ||($defensoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($defensoresimputadoscarpetasDto->getIdImputadoCarpeta()!=""){
            $sql.="idImputadoCarpeta";
            if(($defensoresimputadoscarpetasDto->getCveTipoDefensor()!="") ||($defensoresimputadoscarpetasDto->getNombre()!="") ||($defensoresimputadoscarpetasDto->getTelefono()!="") ||($defensoresimputadoscarpetasDto->getCelular()!="") ||($defensoresimputadoscarpetasDto->getEmail()!="") ||($defensoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($defensoresimputadoscarpetasDto->getCveTipoDefensor()!=""){
            $sql.="cveTipoDefensor";
            if(($defensoresimputadoscarpetasDto->getNombre()!="") ||($defensoresimputadoscarpetasDto->getTelefono()!="") ||($defensoresimputadoscarpetasDto->getCelular()!="") ||($defensoresimputadoscarpetasDto->getEmail()!="") ||($defensoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($defensoresimputadoscarpetasDto->getNombre()!=""){
            $sql.="nombre";
            if(($defensoresimputadoscarpetasDto->getTelefono()!="") ||($defensoresimputadoscarpetasDto->getCelular()!="") ||($defensoresimputadoscarpetasDto->getEmail()!="") ||($defensoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($defensoresimputadoscarpetasDto->getTelefono()!=""){
            $sql.="telefono";
            if(($defensoresimputadoscarpetasDto->getCelular()!="") ||($defensoresimputadoscarpetasDto->getEmail()!="") ||($defensoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($defensoresimputadoscarpetasDto->getCelular()!=""){
            $sql.="celular";
            if(($defensoresimputadoscarpetasDto->getEmail()!="") ||($defensoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($defensoresimputadoscarpetasDto->getEmail()!=""){
            $sql.="email";
            if(($defensoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($defensoresimputadoscarpetasDto->getActivo()!=""){
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if($defensoresimputadoscarpetasDto->getIdDefensorImputadoCarpeta()!=""){
            $sql.="'".$defensoresimputadoscarpetasDto->getIdDefensorImputadoCarpeta()."'";
            if(($defensoresimputadoscarpetasDto->getIdImputadoCarpeta()!="") ||($defensoresimputadoscarpetasDto->getCveTipoDefensor()!="") ||($defensoresimputadoscarpetasDto->getNombre()!="") ||($defensoresimputadoscarpetasDto->getTelefono()!="") ||($defensoresimputadoscarpetasDto->getCelular()!="") ||($defensoresimputadoscarpetasDto->getEmail()!="") ||($defensoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($defensoresimputadoscarpetasDto->getIdImputadoCarpeta()!=""){
            $sql.="'".$defensoresimputadoscarpetasDto->getIdImputadoCarpeta()."'";
            if(($defensoresimputadoscarpetasDto->getCveTipoDefensor()!="") ||($defensoresimputadoscarpetasDto->getNombre()!="") ||($defensoresimputadoscarpetasDto->getTelefono()!="") ||($defensoresimputadoscarpetasDto->getCelular()!="") ||($defensoresimputadoscarpetasDto->getEmail()!="") ||($defensoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($defensoresimputadoscarpetasDto->getCveTipoDefensor()!=""){
            $sql.="'".$defensoresimputadoscarpetasDto->getCveTipoDefensor()."'";
            if(($defensoresimputadoscarpetasDto->getNombre()!="") ||($defensoresimputadoscarpetasDto->getTelefono()!="") ||($defensoresimputadoscarpetasDto->getCelular()!="") ||($defensoresimputadoscarpetasDto->getEmail()!="") ||($defensoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($defensoresimputadoscarpetasDto->getNombre()!=""){
            $sql.="'".$defensoresimputadoscarpetasDto->getNombre()."'";
            if(($defensoresimputadoscarpetasDto->getTelefono()!="") ||($defensoresimputadoscarpetasDto->getCelular()!="") ||($defensoresimputadoscarpetasDto->getEmail()!="") ||($defensoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($defensoresimputadoscarpetasDto->getTelefono()!=""){
            $sql.="'".$defensoresimputadoscarpetasDto->getTelefono()."'";
            if(($defensoresimputadoscarpetasDto->getCelular()!="") ||($defensoresimputadoscarpetasDto->getEmail()!="") ||($defensoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($defensoresimputadoscarpetasDto->getCelular()!=""){
            $sql.="'".$defensoresimputadoscarpetasDto->getCelular()."'";
            if(($defensoresimputadoscarpetasDto->getEmail()!="") ||($defensoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($defensoresimputadoscarpetasDto->getEmail()!=""){
            $sql.="'".$defensoresimputadoscarpetasDto->getEmail()."'";
            if(($defensoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($defensoresimputadoscarpetasDto->getActivo()!=""){
            $sql.="'".$defensoresimputadoscarpetasDto->getActivo()."'";
        }
        if($defensoresimputadoscarpetasDto->getFechaRegistro()!=""){
        }
        if($defensoresimputadoscarpetasDto->getFechaActualizacion()!=""){
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DefensoresimputadoscarpetasDTO();
            $tmp->setIdDefensorImputadoCarpeta($this->_proveedor->lastID());
            $tmp = $this->selectDefensoresimputadoscarpetas($tmp,"",$this->_proveedor);
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
    public function updateDefensoresimputadoscarpetas($defensoresimputadoscarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="UPDATE tbldefensoresimputadoscarpetas SET ";
        if($defensoresimputadoscarpetasDto->getIdDefensorImputadoCarpeta()!=""){
            $sql.="idDefensorImputadoCarpeta='".$defensoresimputadoscarpetasDto->getIdDefensorImputadoCarpeta()."'";
            if(($defensoresimputadoscarpetasDto->getIdImputadoCarpeta()!="") ||($defensoresimputadoscarpetasDto->getCveTipoDefensor()!="") ||($defensoresimputadoscarpetasDto->getNombre()!="") ||($defensoresimputadoscarpetasDto->getTelefono()!="") ||($defensoresimputadoscarpetasDto->getCelular()!="") ||($defensoresimputadoscarpetasDto->getEmail()!="") ||($defensoresimputadoscarpetasDto->getActivo()!="") ||($defensoresimputadoscarpetasDto->getFechaRegistro()!="") ||($defensoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($defensoresimputadoscarpetasDto->getIdImputadoCarpeta()!=""){
            $sql.="idImputadoCarpeta='".$defensoresimputadoscarpetasDto->getIdImputadoCarpeta()."'";
            if(($defensoresimputadoscarpetasDto->getCveTipoDefensor()!="") ||($defensoresimputadoscarpetasDto->getNombre()!="") ||($defensoresimputadoscarpetasDto->getTelefono()!="") ||($defensoresimputadoscarpetasDto->getCelular()!="") ||($defensoresimputadoscarpetasDto->getEmail()!="") ||($defensoresimputadoscarpetasDto->getActivo()!="") ||($defensoresimputadoscarpetasDto->getFechaRegistro()!="") ||($defensoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($defensoresimputadoscarpetasDto->getCveTipoDefensor()!=""){
            $sql.="cveTipoDefensor='".$defensoresimputadoscarpetasDto->getCveTipoDefensor()."'";
            if(($defensoresimputadoscarpetasDto->getNombre()!="") ||($defensoresimputadoscarpetasDto->getTelefono()!="") ||($defensoresimputadoscarpetasDto->getCelular()!="") ||($defensoresimputadoscarpetasDto->getEmail()!="") ||($defensoresimputadoscarpetasDto->getActivo()!="") ||($defensoresimputadoscarpetasDto->getFechaRegistro()!="") ||($defensoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($defensoresimputadoscarpetasDto->getNombre()!=""){
            $sql.="nombre='".$defensoresimputadoscarpetasDto->getNombre()."'";
            if(($defensoresimputadoscarpetasDto->getTelefono()!="") ||($defensoresimputadoscarpetasDto->getCelular()!="") ||($defensoresimputadoscarpetasDto->getEmail()!="") ||($defensoresimputadoscarpetasDto->getActivo()!="") ||($defensoresimputadoscarpetasDto->getFechaRegistro()!="") ||($defensoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($defensoresimputadoscarpetasDto->getTelefono()!=""){
            $sql.="telefono='".$defensoresimputadoscarpetasDto->getTelefono()."'";
            if(($defensoresimputadoscarpetasDto->getCelular()!="") ||($defensoresimputadoscarpetasDto->getEmail()!="") ||($defensoresimputadoscarpetasDto->getActivo()!="") ||($defensoresimputadoscarpetasDto->getFechaRegistro()!="") ||($defensoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($defensoresimputadoscarpetasDto->getCelular()!=""){
            $sql.="celular='".$defensoresimputadoscarpetasDto->getCelular()."'";
            if(($defensoresimputadoscarpetasDto->getEmail()!="") ||($defensoresimputadoscarpetasDto->getActivo()!="") ||($defensoresimputadoscarpetasDto->getFechaRegistro()!="") ||($defensoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($defensoresimputadoscarpetasDto->getEmail()!=""){
            $sql.="email='".$defensoresimputadoscarpetasDto->getEmail()."'";
            if(($defensoresimputadoscarpetasDto->getActivo()!="") ||($defensoresimputadoscarpetasDto->getFechaRegistro()!="") ||($defensoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($defensoresimputadoscarpetasDto->getActivo()!=""){
            $sql.="activo='".$defensoresimputadoscarpetasDto->getActivo()."'";
            if(($defensoresimputadoscarpetasDto->getFechaRegistro()!="") ||($defensoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($defensoresimputadoscarpetasDto->getFechaRegistro()!=""){
            $sql.="fechaRegistro='".$defensoresimputadoscarpetasDto->getFechaRegistro()."'";
            if(($defensoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($defensoresimputadoscarpetasDto->getFechaActualizacion()!=""){
            $sql.="fechaActualizacion='".$defensoresimputadoscarpetasDto->getFechaActualizacion()."'";
        }
        $sql.=" WHERE idDefensorImputadoCarpeta='".$defensoresimputadoscarpetasDto->getIdDefensorImputadoCarpeta()."'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DefensoresimputadoscarpetasDTO();
            $tmp->setIdDefensorImputadoCarpeta($defensoresimputadoscarpetasDto->getIdDefensorImputadoCarpeta());
            $tmp = $this->selectDefensoresimputadoscarpetas($tmp,"",$this->_proveedor);
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
    public function deleteDefensoresimputadoscarpetas($defensoresimputadoscarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="DELETE FROM tbldefensoresimputadoscarpetas  WHERE idDefensorImputadoCarpeta='".$defensoresimputadoscarpetasDto->getIdDefensorImputadoCarpeta()."'";
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
    public function selectDefensoresimputadoscarpetas($defensoresimputadoscarpetasDto,$orden="",$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="SELECT idDefensorImputadoCarpeta,idImputadoCarpeta,cveTipoDefensor,nombre,telefono,celular,email,activo,fechaRegistro,fechaActualizacion FROM tbldefensoresimputadoscarpetas ";
        if(($defensoresimputadoscarpetasDto->getIdDefensorImputadoCarpeta()!="") ||($defensoresimputadoscarpetasDto->getIdImputadoCarpeta()!="") ||($defensoresimputadoscarpetasDto->getCveTipoDefensor()!="") ||($defensoresimputadoscarpetasDto->getNombre()!="") ||($defensoresimputadoscarpetasDto->getTelefono()!="") ||($defensoresimputadoscarpetasDto->getCelular()!="") ||($defensoresimputadoscarpetasDto->getEmail()!="") ||($defensoresimputadoscarpetasDto->getActivo()!="") ||($defensoresimputadoscarpetasDto->getFechaRegistro()!="") ||($defensoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
            $sql.=" WHERE ";
        }
        if($defensoresimputadoscarpetasDto->getIdDefensorImputadoCarpeta()!=""){
            $sql.="idDefensorImputadoCarpeta='".$defensoresimputadoscarpetasDto->getIdDefensorImputadoCarpeta()."'";
            if(($defensoresimputadoscarpetasDto->getIdImputadoCarpeta()!="") ||($defensoresimputadoscarpetasDto->getCveTipoDefensor()!="") ||($defensoresimputadoscarpetasDto->getNombre()!="") ||($defensoresimputadoscarpetasDto->getTelefono()!="") ||($defensoresimputadoscarpetasDto->getCelular()!="") ||($defensoresimputadoscarpetasDto->getEmail()!="") ||($defensoresimputadoscarpetasDto->getActivo()!="") ||($defensoresimputadoscarpetasDto->getFechaRegistro()!="") ||($defensoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($defensoresimputadoscarpetasDto->getIdImputadoCarpeta()!=""){
            $sql.="idImputadoCarpeta='".$defensoresimputadoscarpetasDto->getIdImputadoCarpeta()."'";
            if(($defensoresimputadoscarpetasDto->getCveTipoDefensor()!="") ||($defensoresimputadoscarpetasDto->getNombre()!="") ||($defensoresimputadoscarpetasDto->getTelefono()!="") ||($defensoresimputadoscarpetasDto->getCelular()!="") ||($defensoresimputadoscarpetasDto->getEmail()!="") ||($defensoresimputadoscarpetasDto->getActivo()!="") ||($defensoresimputadoscarpetasDto->getFechaRegistro()!="") ||($defensoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($defensoresimputadoscarpetasDto->getCveTipoDefensor()!=""){
            $sql.="cveTipoDefensor='".$defensoresimputadoscarpetasDto->getCveTipoDefensor()."'";
            if(($defensoresimputadoscarpetasDto->getNombre()!="") ||($defensoresimputadoscarpetasDto->getTelefono()!="") ||($defensoresimputadoscarpetasDto->getCelular()!="") ||($defensoresimputadoscarpetasDto->getEmail()!="") ||($defensoresimputadoscarpetasDto->getActivo()!="") ||($defensoresimputadoscarpetasDto->getFechaRegistro()!="") ||($defensoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($defensoresimputadoscarpetasDto->getNombre()!=""){
            $sql.="nombre='".$defensoresimputadoscarpetasDto->getNombre()."'";
            if(($defensoresimputadoscarpetasDto->getTelefono()!="") ||($defensoresimputadoscarpetasDto->getCelular()!="") ||($defensoresimputadoscarpetasDto->getEmail()!="") ||($defensoresimputadoscarpetasDto->getActivo()!="") ||($defensoresimputadoscarpetasDto->getFechaRegistro()!="") ||($defensoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($defensoresimputadoscarpetasDto->getTelefono()!=""){
            $sql.="telefono='".$defensoresimputadoscarpetasDto->getTelefono()."'";
            if(($defensoresimputadoscarpetasDto->getCelular()!="") ||($defensoresimputadoscarpetasDto->getEmail()!="") ||($defensoresimputadoscarpetasDto->getActivo()!="") ||($defensoresimputadoscarpetasDto->getFechaRegistro()!="") ||($defensoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($defensoresimputadoscarpetasDto->getCelular()!=""){
            $sql.="celular='".$defensoresimputadoscarpetasDto->getCelular()."'";
            if(($defensoresimputadoscarpetasDto->getEmail()!="") ||($defensoresimputadoscarpetasDto->getActivo()!="") ||($defensoresimputadoscarpetasDto->getFechaRegistro()!="") ||($defensoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($defensoresimputadoscarpetasDto->getEmail()!=""){
            $sql.="email='".$defensoresimputadoscarpetasDto->getEmail()."'";
            if(($defensoresimputadoscarpetasDto->getActivo()!="") ||($defensoresimputadoscarpetasDto->getFechaRegistro()!="") ||($defensoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($defensoresimputadoscarpetasDto->getActivo()!=""){
            $sql.="activo='".$defensoresimputadoscarpetasDto->getActivo()."'";
            if(($defensoresimputadoscarpetasDto->getFechaRegistro()!="") ||($defensoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($defensoresimputadoscarpetasDto->getFechaRegistro()!=""){
            $sql.="fechaRegistro='".$defensoresimputadoscarpetasDto->getFechaRegistro()."'";
            if(($defensoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($defensoresimputadoscarpetasDto->getFechaActualizacion()!=""){
            $sql.="fechaActualizacion='".$defensoresimputadoscarpetasDto->getFechaActualizacion()."'";
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
                    $tmp[$contador] = new DefensoresimputadoscarpetasDTO();
                    $tmp[$contador]->setIdDefensorImputadoCarpeta($row["idDefensorImputadoCarpeta"]);
                    $tmp[$contador]->setIdImputadoCarpeta($row["idImputadoCarpeta"]);
                    $tmp[$contador]->setCveTipoDefensor($row["cveTipoDefensor"]);
                    $tmp[$contador]->setNombre($row["nombre"]);
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
     * funcion para editar registros no requeridos
     */
    public function modificarDefensoresimputadoscarpetas($defensoresimputadoscarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="UPDATE tbldefensoresimputadoscarpetas SET ";
        $sql.=" cveTipoDefensor='".$defensoresimputadoscarpetasDto->getCveTipoDefensor()."'";
        $sql.=" ,nombre='".$defensoresimputadoscarpetasDto->getNombre()."'";
        $sql.=" ,telefono='".$defensoresimputadoscarpetasDto->getTelefono()."'";
        $sql.=" ,celular='".$defensoresimputadoscarpetasDto->getCelular()."'";
        $sql.=" ,email='".$defensoresimputadoscarpetasDto->getEmail()."'";
        $sql.=" ,fechaActualizacion=NOW()";
        $sql.=" WHERE idDefensorImputadoCarpeta='".$defensoresimputadoscarpetasDto->getIdDefensorImputadoCarpeta()."'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DefensoresimputadoscarpetasDTO();
            $tmp->setIdDefensorImputadoCarpeta($defensoresimputadoscarpetasDto->getIdDefensorImputadoCarpeta());
            $tmp = $this->selectDefensoresimputadoscarpetas($tmp,"",$this->_proveedor);
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
     * eliminación lógica de defensoresimputadoscarpetas
     */
    public function eliminarDefensoresimputadoscarpetasByIdImputado($defensoresimputadoscarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="UPDATE tbldefensoresimputadoscarpetas SET activo='N', fechaActualizacion=NOW()";
        $sql.=" WHERE idDefensorImputadoCarpeta='".$defensoresimputadoscarpetasDto->getIdDefensorImputadoCarpeta()."'";
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