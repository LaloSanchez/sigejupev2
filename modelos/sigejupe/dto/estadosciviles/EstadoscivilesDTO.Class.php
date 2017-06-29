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

class EstadoscivilesDTO {
    private $cveEstadoCivil;
    private $desEstadoCivil;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getCveEstadoCivil(){
        return $this->cveEstadoCivil;
    }
    public function setCveEstadoCivil($cveEstadoCivil){
        $this->cveEstadoCivil=$cveEstadoCivil;
    }
    public function getDesEstadoCivil(){
        return $this->desEstadoCivil;
    }
    public function setDesEstadoCivil($desEstadoCivil){
        $this->desEstadoCivil=$desEstadoCivil;
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
        return array("cveEstadoCivil"=>$this->cveEstadoCivil,
"desEstadoCivil"=>$this->desEstadoCivil,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>