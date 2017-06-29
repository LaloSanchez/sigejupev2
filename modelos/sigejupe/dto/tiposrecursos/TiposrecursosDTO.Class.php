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

class TiposrecursosDTO {
    private $cveRecurso;
    private $desRecurso;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getCveRecurso(){
        return $this->cveRecurso;
    }
    public function setCveRecurso($cveRecurso){
        $this->cveRecurso=$cveRecurso;
    }
    public function getDesRecurso(){
        return $this->desRecurso;
    }
    public function setDesRecurso($desRecurso){
        $this->desRecurso=$desRecurso;
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
        return array("cveRecurso"=>$this->cveRecurso,
"desRecurso"=>$this->desRecurso,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>