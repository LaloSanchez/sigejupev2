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

class DetallesefectosDTO {
    private $cveDetalleEfecto;
    private $cveEfecto;
    private $cveDelito;
    private $desDetalleEfecto;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getCveDetalleEfecto(){
        return $this->cveDetalleEfecto;
    }
    public function setCveDetalleEfecto($cveDetalleEfecto){
        $this->cveDetalleEfecto=$cveDetalleEfecto;
    }
    public function getCveEfecto(){
        return $this->cveEfecto;
    }
    public function setCveEfecto($cveEfecto){
        $this->cveEfecto=$cveEfecto;
    }
    public function getCveDelito(){
        return $this->cveDelito;
    }
    public function setCveDelito($cveDelito){
        $this->cveDelito=$cveDelito;
    }
    public function getDesDetalleEfecto(){
        return $this->desDetalleEfecto;
    }
    public function setDesDetalleEfecto($desDetalleEfecto){
        $this->desDetalleEfecto=$desDetalleEfecto;
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
        return array("cveDetalleEfecto"=>$this->cveDetalleEfecto,
"cveEfecto"=>$this->cveEfecto,
"cveDelito"=>$this->cveDelito,
"desDetalleEfecto"=>$this->desDetalleEfecto,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>