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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tutoresimputadoscarpetas/TutoresimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TutoresimputadoscarpetasDAO{
    protected $_proveedor;
    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }
    public function _conexion(){
        $this->_proveedor->connect();
    }
    public function insertTutoresimputadoscarpetas($tutoresimputadoscarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="INSERT INTO tbltutoresimputadoscarpetas(";
        if($tutoresimputadoscarpetasDto->getIdTutorImputadoCarpeta()!=""){
            $sql.="idTutorImputadoCarpeta";
            if(($tutoresimputadoscarpetasDto->getIdImputadoCarpeta()!="") ||($tutoresimputadoscarpetasDto->getCveTipoTutor()!="") || ($tutoresimputadoscarpetasDto->getProvDef()!="") ||($tutoresimputadoscarpetasDto->getCveGenero()!="") ||($tutoresimputadoscarpetasDto->getNombre()!="") ||($tutoresimputadoscarpetasDto->getPaterno()!="") ||($tutoresimputadoscarpetasDto->getMaterno()!="") ||($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getIdImputadoCarpeta()!=""){
            $sql.="idImputadoCarpeta";
            if(($tutoresimputadoscarpetasDto->getCveTipoTutor()!="") || ($tutoresimputadoscarpetasDto->getProvDef()!="") ||($tutoresimputadoscarpetasDto->getCveGenero()!="") ||($tutoresimputadoscarpetasDto->getNombre()!="") ||($tutoresimputadoscarpetasDto->getPaterno()!="") ||($tutoresimputadoscarpetasDto->getMaterno()!="") ||($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getCveTipoTutor()!=""){
            $sql.="cveTipoTutor";
            if(($tutoresimputadoscarpetasDto->getProvDef()!="") || ($tutoresimputadoscarpetasDto->getCveGenero()!="") ||($tutoresimputadoscarpetasDto->getNombre()!="") ||($tutoresimputadoscarpetasDto->getPaterno()!="") ||($tutoresimputadoscarpetasDto->getMaterno()!="") ||($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getProvDef()!=""){
            $sql.="ProvDef";
            if(($tutoresimputadoscarpetasDto->getCveGenero()!="") ||($tutoresimputadoscarpetasDto->getNombre()!="") ||($tutoresimputadoscarpetasDto->getPaterno()!="") ||($tutoresimputadoscarpetasDto->getMaterno()!="") ||($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getCveGenero()!=""){
            $sql.="cveGenero";
            if(($tutoresimputadoscarpetasDto->getNombre()!="") ||($tutoresimputadoscarpetasDto->getPaterno()!="") ||($tutoresimputadoscarpetasDto->getMaterno()!="") ||($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getNombre()!=""){
            $sql.="nombre";
            if(($tutoresimputadoscarpetasDto->getPaterno()!="") ||($tutoresimputadoscarpetasDto->getMaterno()!="") ||($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getPaterno()!=""){
            $sql.="paterno";
            if(($tutoresimputadoscarpetasDto->getMaterno()!="") ||($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getMaterno()!=""){
            $sql.="materno";
            if(($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getFechaNacimiento()!=""){
            $sql.="fechaNacimiento";
            if(($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getEdad()!=""){
            $sql.="edad";
            if(($tutoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getActivo()!=""){
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if($tutoresimputadoscarpetasDto->getIdTutorImputadoCarpeta()!=""){
            $sql.="'".$tutoresimputadoscarpetasDto->getIdTutorImputadoCarpeta()."'";
            if(($tutoresimputadoscarpetasDto->getIdImputadoCarpeta()!="") ||($tutoresimputadoscarpetasDto->getCveTipoTutor()!="") || ($tutoresimputadoscarpetasDto->getProvDef()!="") ||($tutoresimputadoscarpetasDto->getCveGenero()!="") ||($tutoresimputadoscarpetasDto->getNombre()!="") ||($tutoresimputadoscarpetasDto->getPaterno()!="") ||($tutoresimputadoscarpetasDto->getMaterno()!="") ||($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getIdImputadoCarpeta()!=""){
            $sql.="'".$tutoresimputadoscarpetasDto->getIdImputadoCarpeta()."'";
            if(($tutoresimputadoscarpetasDto->getCveTipoTutor()!="") || ($tutoresimputadoscarpetasDto->getProvDef()!="") ||($tutoresimputadoscarpetasDto->getCveGenero()!="") ||($tutoresimputadoscarpetasDto->getNombre()!="") ||($tutoresimputadoscarpetasDto->getPaterno()!="") ||($tutoresimputadoscarpetasDto->getMaterno()!="") ||($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getCveTipoTutor()!=""){
            $sql.="'".$tutoresimputadoscarpetasDto->getCveTipoTutor()."'";
            if(($tutoresimputadoscarpetasDto->getProvDef()!="") || ($tutoresimputadoscarpetasDto->getCveGenero()!="") ||($tutoresimputadoscarpetasDto->getNombre()!="") ||($tutoresimputadoscarpetasDto->getPaterno()!="") ||($tutoresimputadoscarpetasDto->getMaterno()!="") ||($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getProvDef()!=""){
            $sql.="'".$tutoresimputadoscarpetasDto->getProvDef()."'";
            if(($tutoresimputadoscarpetasDto->getCveGenero()!="") ||($tutoresimputadoscarpetasDto->getNombre()!="") ||($tutoresimputadoscarpetasDto->getPaterno()!="") ||($tutoresimputadoscarpetasDto->getMaterno()!="") ||($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getCveGenero()!=""){
            $sql.="'".$tutoresimputadoscarpetasDto->getCveGenero()."'";
            if(($tutoresimputadoscarpetasDto->getNombre()!="") ||($tutoresimputadoscarpetasDto->getPaterno()!="") ||($tutoresimputadoscarpetasDto->getMaterno()!="") ||($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getNombre()!=""){
            $sql.="'".$tutoresimputadoscarpetasDto->getNombre()."'";
            if(($tutoresimputadoscarpetasDto->getPaterno()!="") ||($tutoresimputadoscarpetasDto->getMaterno()!="") ||($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getPaterno()!=""){
            $sql.="'".$tutoresimputadoscarpetasDto->getPaterno()."'";
            if(($tutoresimputadoscarpetasDto->getMaterno()!="") ||($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getMaterno()!=""){
            $sql.="'".$tutoresimputadoscarpetasDto->getMaterno()."'";
            if(($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getFechaNacimiento()!=""){
            $sql.="'".$tutoresimputadoscarpetasDto->getFechaNacimiento()."'";
            if(($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getEdad()!=""){
            $sql.="'".$tutoresimputadoscarpetasDto->getEdad()."'";
            if(($tutoresimputadoscarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getActivo()!=""){
            $sql.="'".$tutoresimputadoscarpetasDto->getActivo()."'";
        }
        if($tutoresimputadoscarpetasDto->getFechaRegistro()!=""){
        }
        if($tutoresimputadoscarpetasDto->getFechaActualizacion()!=""){
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TutoresimputadoscarpetasDTO();
            $tmp->setIdTutorImputadoCarpeta($this->_proveedor->lastID());
            $tmp = $this->selectTutoresimputadoscarpetas($tmp,"",$this->_proveedor);
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
    public function updateTutoresimputadoscarpetas($tutoresimputadoscarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="UPDATE tbltutoresimputadoscarpetas SET ";
        if($tutoresimputadoscarpetasDto->getIdTutorImputadoCarpeta()!=""){
            $sql.="idTutorImputadoCarpeta='".$tutoresimputadoscarpetasDto->getIdTutorImputadoCarpeta()."'";
            if(($tutoresimputadoscarpetasDto->getIdImputadoCarpeta()!="") ||($tutoresimputadoscarpetasDto->getCveTipoTutor()!="") || ($tutoresimputadoscarpetasDto->getProvDef()!="") ||($tutoresimputadoscarpetasDto->getCveGenero()!="") ||($tutoresimputadoscarpetasDto->getNombre()!="") ||($tutoresimputadoscarpetasDto->getPaterno()!="") ||($tutoresimputadoscarpetasDto->getMaterno()!="") ||($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ||($tutoresimputadoscarpetasDto->getFechaRegistro()!="") ||($tutoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getIdImputadoCarpeta()!=""){
            $sql.="idImputadoCarpeta='".$tutoresimputadoscarpetasDto->getIdImputadoCarpeta()."'";
            if(($tutoresimputadoscarpetasDto->getCveTipoTutor()!="") || ($tutoresimputadoscarpetasDto->getProvDef()!="") ||($tutoresimputadoscarpetasDto->getCveGenero()!="") ||($tutoresimputadoscarpetasDto->getNombre()!="") ||($tutoresimputadoscarpetasDto->getPaterno()!="") ||($tutoresimputadoscarpetasDto->getMaterno()!="") ||($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ||($tutoresimputadoscarpetasDto->getFechaRegistro()!="") ||($tutoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getCveTipoTutor()!=""){
            $sql.="cveTipoTutor='".$tutoresimputadoscarpetasDto->getCveTipoTutor()."'";
            if(($tutoresimputadoscarpetasDto->getProvDef()!="") || ($tutoresimputadoscarpetasDto->getCveGenero()!="") ||($tutoresimputadoscarpetasDto->getNombre()!="") ||($tutoresimputadoscarpetasDto->getPaterno()!="") ||($tutoresimputadoscarpetasDto->getMaterno()!="") ||($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ||($tutoresimputadoscarpetasDto->getFechaRegistro()!="") ||($tutoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getProvDef()!=""){
            $sql.="ProvDef='".$tutoresimputadoscarpetasDto->getProvDef()."'";
            if(($tutoresimputadoscarpetasDto->getCveGenero()!="") ||($tutoresimputadoscarpetasDto->getNombre()!="") ||($tutoresimputadoscarpetasDto->getPaterno()!="") ||($tutoresimputadoscarpetasDto->getMaterno()!="") ||($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ||($tutoresimputadoscarpetasDto->getFechaRegistro()!="") ||($tutoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getCveGenero()!=""){
            $sql.="cveGenero='".$tutoresimputadoscarpetasDto->getCveGenero()."'";
            if(($tutoresimputadoscarpetasDto->getNombre()!="") ||($tutoresimputadoscarpetasDto->getPaterno()!="") ||($tutoresimputadoscarpetasDto->getMaterno()!="") ||($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ||($tutoresimputadoscarpetasDto->getFechaRegistro()!="") ||($tutoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
            $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getNombre()!=""){
            $sql.="nombre='".$tutoresimputadoscarpetasDto->getNombre()."'";
            if(($tutoresimputadoscarpetasDto->getPaterno()!="") ||($tutoresimputadoscarpetasDto->getMaterno()!="") ||($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ||($tutoresimputadoscarpetasDto->getFechaRegistro()!="") ||($tutoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getPaterno()!=""){
            $sql.="paterno='".$tutoresimputadoscarpetasDto->getPaterno()."'";
            if(($tutoresimputadoscarpetasDto->getMaterno()!="") ||($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ||($tutoresimputadoscarpetasDto->getFechaRegistro()!="") ||($tutoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getMaterno()!=""){
            $sql.="materno='".$tutoresimputadoscarpetasDto->getMaterno()."'";
            if(($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ||($tutoresimputadoscarpetasDto->getFechaRegistro()!="") ||($tutoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getFechaNacimiento()!=""){
            $sql.="fechaNacimiento='".$tutoresimputadoscarpetasDto->getFechaNacimiento()."'";
            if(($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ||($tutoresimputadoscarpetasDto->getFechaRegistro()!="") ||($tutoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getEdad()!=""){
            $sql.="edad='".$tutoresimputadoscarpetasDto->getEdad()."'";
            if(($tutoresimputadoscarpetasDto->getActivo()!="") ||($tutoresimputadoscarpetasDto->getFechaRegistro()!="") ||($tutoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getActivo()!=""){
            $sql.="activo='".$tutoresimputadoscarpetasDto->getActivo()."'";
            if(($tutoresimputadoscarpetasDto->getFechaRegistro()!="") ||($tutoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getFechaRegistro()!=""){
            $sql.="fechaRegistro='".$tutoresimputadoscarpetasDto->getFechaRegistro()."'";
            if(($tutoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($tutoresimputadoscarpetasDto->getFechaActualizacion()!=""){
            $sql.="fechaActualizacion='".$tutoresimputadoscarpetasDto->getFechaActualizacion()."'";
        }
        $sql.=" WHERE idTutorImputadoCarpeta='".$tutoresimputadoscarpetasDto->getIdTutorImputadoCarpeta()."'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TutoresimputadoscarpetasDTO();
            $tmp->setIdTutorImputadoCarpeta($tutoresimputadoscarpetasDto->getIdTutorImputadoCarpeta());
            $tmp = $this->selectTutoresimputadoscarpetas($tmp,"",$this->_proveedor);
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
    public function deleteTutoresimputadoscarpetas($tutoresimputadoscarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="DELETE FROM tbltutoresimputadoscarpetas  WHERE idTutorImputadoCarpeta='".$tutoresimputadoscarpetasDto->getIdTutorImputadoCarpeta()."'";
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
    public function selectTutoresimputadoscarpetas($tutoresimputadoscarpetasDto,$orden="",$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="SELECT idTutorImputadoCarpeta,idImputadoCarpeta,cveTipoTutor,ProvDef,cveGenero,nombre,paterno,materno,fechaNacimiento,edad,activo,fechaRegistro,fechaActualizacion FROM tbltutoresimputadoscarpetas ";
        if(($tutoresimputadoscarpetasDto->getIdTutorImputadoCarpeta()!="") ||($tutoresimputadoscarpetasDto->getIdImputadoCarpeta()!="") ||($tutoresimputadoscarpetasDto->getCveTipoTutor()!="") || ($tutoresimputadoscarpetasDto->getProvDef()!="") ||($tutoresimputadoscarpetasDto->getCveGenero()!="") ||($tutoresimputadoscarpetasDto->getNombre()!="") ||($tutoresimputadoscarpetasDto->getPaterno()!="") ||($tutoresimputadoscarpetasDto->getMaterno()!="") ||($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ||($tutoresimputadoscarpetasDto->getFechaRegistro()!="") ||($tutoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
            $sql.=" WHERE ";
        }
        if($tutoresimputadoscarpetasDto->getIdTutorImputadoCarpeta()!=""){
            $sql.="idTutorImputadoCarpeta='".$tutoresimputadoscarpetasDto->getIdTutorImputadoCarpeta()."'";
            if(($tutoresimputadoscarpetasDto->getIdImputadoCarpeta()!="") ||($tutoresimputadoscarpetasDto->getCveTipoTutor()!="") || ($tutoresimputadoscarpetasDto->getProvDef()!="") ||($tutoresimputadoscarpetasDto->getCveGenero()!="") ||($tutoresimputadoscarpetasDto->getNombre()!="") ||($tutoresimputadoscarpetasDto->getPaterno()!="") ||($tutoresimputadoscarpetasDto->getMaterno()!="") ||($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ||($tutoresimputadoscarpetasDto->getFechaRegistro()!="") ||($tutoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($tutoresimputadoscarpetasDto->getIdImputadoCarpeta()!=""){
            $sql.="idImputadoCarpeta='".$tutoresimputadoscarpetasDto->getIdImputadoCarpeta()."'";
            if(($tutoresimputadoscarpetasDto->getCveTipoTutor()!="") || ($tutoresimputadoscarpetasDto->getProvDef()!="") ||($tutoresimputadoscarpetasDto->getCveGenero()!="") ||($tutoresimputadoscarpetasDto->getNombre()!="") ||($tutoresimputadoscarpetasDto->getPaterno()!="") ||($tutoresimputadoscarpetasDto->getMaterno()!="") ||($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ||($tutoresimputadoscarpetasDto->getFechaRegistro()!="") ||($tutoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($tutoresimputadoscarpetasDto->getCveTipoTutor()!=""){
            $sql.="cveTipoTutor='".$tutoresimputadoscarpetasDto->getCveTipoTutor()."'";
            if(($tutoresimputadoscarpetasDto->getProvDef()!="") || ($tutoresimputadoscarpetasDto->getCveGenero()!="") ||($tutoresimputadoscarpetasDto->getNombre()!="") ||($tutoresimputadoscarpetasDto->getPaterno()!="") ||($tutoresimputadoscarpetasDto->getMaterno()!="") ||($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ||($tutoresimputadoscarpetasDto->getFechaRegistro()!="") ||($tutoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($tutoresimputadoscarpetasDto->getProvDef()!=""){
            $sql.="ProvDef='".$tutoresimputadoscarpetasDto->getProvDef()."'";
            if(($tutoresimputadoscarpetasDto->getCveGenero()!="") ||($tutoresimputadoscarpetasDto->getNombre()!="") ||($tutoresimputadoscarpetasDto->getPaterno()!="") ||($tutoresimputadoscarpetasDto->getMaterno()!="") ||($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ||($tutoresimputadoscarpetasDto->getFechaRegistro()!="") ||($tutoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($tutoresimputadoscarpetasDto->getCveGenero()!=""){
            $sql.="cveGenero='".$tutoresimputadoscarpetasDto->getCveGenero()."'";
            if(($tutoresimputadoscarpetasDto->getNombre()!="") ||($tutoresimputadoscarpetasDto->getPaterno()!="") ||($tutoresimputadoscarpetasDto->getMaterno()!="") ||($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ||($tutoresimputadoscarpetasDto->getFechaRegistro()!="") ||($tutoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($tutoresimputadoscarpetasDto->getNombre()!=""){
            $sql.="nombre='".$tutoresimputadoscarpetasDto->getNombre()."'";
            if(($tutoresimputadoscarpetasDto->getPaterno()!="") ||($tutoresimputadoscarpetasDto->getMaterno()!="") ||($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ||($tutoresimputadoscarpetasDto->getFechaRegistro()!="") ||($tutoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($tutoresimputadoscarpetasDto->getPaterno()!=""){
            $sql.="paterno='".$tutoresimputadoscarpetasDto->getPaterno()."'";
            if(($tutoresimputadoscarpetasDto->getMaterno()!="") ||($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ||($tutoresimputadoscarpetasDto->getFechaRegistro()!="") ||($tutoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($tutoresimputadoscarpetasDto->getMaterno()!=""){
            $sql.="materno='".$tutoresimputadoscarpetasDto->getMaterno()."'";
            if(($tutoresimputadoscarpetasDto->getFechaNacimiento()!="") ||($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ||($tutoresimputadoscarpetasDto->getFechaRegistro()!="") ||($tutoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($tutoresimputadoscarpetasDto->getFechaNacimiento()!=""){
            $sql.="fechaNacimiento='".$tutoresimputadoscarpetasDto->getFechaNacimiento()."'";
            if(($tutoresimputadoscarpetasDto->getEdad()!="") ||($tutoresimputadoscarpetasDto->getActivo()!="") ||($tutoresimputadoscarpetasDto->getFechaRegistro()!="") ||($tutoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($tutoresimputadoscarpetasDto->getEdad()!=""){
            $sql.="edad='".$tutoresimputadoscarpetasDto->getEdad()."'";
            if(($tutoresimputadoscarpetasDto->getActivo()!="") ||($tutoresimputadoscarpetasDto->getFechaRegistro()!="") ||($tutoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($tutoresimputadoscarpetasDto->getActivo()!=""){
            $sql.="activo='".$tutoresimputadoscarpetasDto->getActivo()."'";
            if(($tutoresimputadoscarpetasDto->getFechaRegistro()!="") ||($tutoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($tutoresimputadoscarpetasDto->getFechaRegistro()!=""){
            $sql.="fechaRegistro='".$tutoresimputadoscarpetasDto->getFechaRegistro()."'";
            if(($tutoresimputadoscarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($tutoresimputadoscarpetasDto->getFechaActualizacion()!=""){
            $sql.="fechaActualizacion='".$tutoresimputadoscarpetasDto->getFechaActualizacion()."'";
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
                    $tmp[$contador] = new TutoresimputadoscarpetasDTO();
                    $tmp[$contador]->setIdTutorImputadoCarpeta($row["idTutorImputadoCarpeta"]);
                    $tmp[$contador]->setIdImputadoCarpeta($row["idImputadoCarpeta"]);
                    $tmp[$contador]->setCveTipoTutor($row["cveTipoTutor"]);
                    $tmp[$contador]->setProvDef($row["ProvDef"]);
                    $tmp[$contador]->setCveGenero($row["cveGenero"]);
                    $tmp[$contador]->setNombre($row["nombre"]);
                    $tmp[$contador]->setPaterno($row["paterno"]);
                    $tmp[$contador]->setMaterno($row["materno"]);
                    $tmp[$contador]->setFechaNacimiento($row["fechaNacimiento"]);
                    $tmp[$contador]->setEdad($row["edad"]);
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
     * Modificar tutores imputados carpetas
     */
    public function modificarTutoresimputadoscarpetas($tutoresimputadoscarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="UPDATE tbltutoresimputadoscarpetas SET ";
        $sql.=" cveTipoTutor='".$tutoresimputadoscarpetasDto->getCveTipoTutor()."'";
        $sql.=" ,ProvDef='".$tutoresimputadoscarpetasDto->getProvDef()."'";
        $sql.=" ,cveGenero='".$tutoresimputadoscarpetasDto->getCveGenero()."'";
        $sql.=" ,nombre='".$tutoresimputadoscarpetasDto->getNombre()."'";
        $sql.=" ,paterno='".$tutoresimputadoscarpetasDto->getPaterno()."'";
        $sql.=" ,materno='".$tutoresimputadoscarpetasDto->getMaterno()."'";
        $sql.=" ,fechaNacimiento='".$tutoresimputadoscarpetasDto->getFechaNacimiento()."'";
        $sql.=" ,edad='".$tutoresimputadoscarpetasDto->getEdad()."'";
        $sql.=" ,fechaActualizacion=NOW()";
        $sql.=" WHERE idTutorImputadoCarpeta='".$tutoresimputadoscarpetasDto->getIdTutorImputadoCarpeta()."'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TutoresimputadoscarpetasDTO();
            $tmp->setIdTutorImputadoCarpeta($tutoresimputadoscarpetasDto->getIdTutorImputadoCarpeta());
            $tmp = $this->selectTutoresimputadoscarpetas($tmp,"",$this->_proveedor);
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
     * Borrado logico de tutores imputados carptas
     */
    public function eliminarTutoresimputadoscarpetasByIdImputado($tutoresimputadoscarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltutoresimputadoscarpetas SET activo='N', fechaActualizacion=NOW()";
        $sql.=" WHERE idTutorImputadoCarpeta='".$tutoresimputadoscarpetasDto->getIdTutorImputadoCarpeta()."'";
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