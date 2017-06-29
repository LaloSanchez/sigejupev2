<?php
 /*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 DTOS
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

class RolesjuzgadoresDTO {
    private $cveRolJuzgador;
    private $desRolJuzgador;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getCveRolJuzgador(){
        return $this->cveRolJuzgador;
    }
    public function setCveRolJuzgador($cveRolJuzgador){
        $this->cveRolJuzgador=$cveRolJuzgador;
    }
    public function getDesRolJuzgador(){
        return $this->desRolJuzgador;
    }
    public function setDesRolJuzgador($desRolJuzgador){
        $this->desRolJuzgador=$desRolJuzgador;
    }
    public function getActivo(){
        return $this->activo;
    }
    public function setActivo($activo){
        $this->activo=$activo;
    }
    public function getFechaRegistro(){
        return $this->fechaRegistro;
    }
    public function setFechaRegistro($fechaRegistro){
        $this->fechaRegistro=$fechaRegistro;
    }
    public function getFechaActualizacion(){
        return $this->fechaActualizacion;
    }
    public function setFechaActualizacion($fechaActualizacion){
        $this->fechaActualizacion=$fechaActualizacion;
    }
    public function toString(){
        return array("cveRolJuzgador"=>$this->cveRolJuzgador,
"desRolJuzgador"=>$this->desRolJuzgador,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>