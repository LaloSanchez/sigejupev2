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

class VictimadeviolenciadegeneroDTO {
    private $cveVictimaDeViolenciaDeGenero;
    private $desVictimaDeViolenciaDeGenero;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getCveVictimaDeViolenciaDeGenero(){
        return $this->cveVictimaDeViolenciaDeGenero;
    }
    public function setCveVictimaDeViolenciaDeGenero($cveVictimaDeViolenciaDeGenero){
        $this->cveVictimaDeViolenciaDeGenero=$cveVictimaDeViolenciaDeGenero;
    }
    public function getDesVictimaDeViolenciaDeGenero(){
        return $this->desVictimaDeViolenciaDeGenero;
    }
    public function setDesVictimaDeViolenciaDeGenero($desVictimaDeViolenciaDeGenero){
        $this->desVictimaDeViolenciaDeGenero=$desVictimaDeViolenciaDeGenero;
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
        return array("cveVictimaDeViolenciaDeGenero"=>$this->cveVictimaDeViolenciaDeGenero,
"desVictimaDeViolenciaDeGenero"=>$this->desVictimaDeViolenciaDeGenero,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>