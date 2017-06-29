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

class ConclusionesDTO {
    private $cveConclusion;
    private $desConclusion;
    private $juicio;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getCveConclusion(){
        return $this->cveConclusion;
    }
    public function setCveConclusion($cveConclusion){
        $this->cveConclusion=$cveConclusion;
    }
    public function getDesConclusion(){
        return $this->desConclusion;
    }
    public function setDesConclusion($desConclusion){
        $this->desConclusion=$desConclusion;
    }
    public function getJuicio(){
        return $this->juicio;
    }
    public function setJuicio($juicio){
        $this->juicio=$juicio;
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
        return array("cveConclusion"=>$this->cveConclusion,
"desConclusion"=>$this->desConclusion,
"juicio"=>$this->juicio,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>