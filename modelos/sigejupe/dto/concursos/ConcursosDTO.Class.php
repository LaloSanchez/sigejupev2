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

class ConcursosDTO {
    private $cveConcurso;
    private $desConcurso;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getCveConcurso(){
        return $this->cveConcurso;
    }
    public function setCveConcurso($cveConcurso){
        $this->cveConcurso=$cveConcurso;
    }
    public function getDesConcurso(){
        return $this->desConcurso;
    }
    public function setDesConcurso($desConcurso){
        $this->desConcurso=$desConcurso;
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
        return array("cveConcurso"=>$this->cveConcurso,
"desConcurso"=>$this->desConcurso,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>