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

class TiposapelantesDTO {
    private $cveTipoApelante;
    private $desTipoApelante;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getCveTipoApelante(){
        return $this->cveTipoApelante;
    }
    public function setCveTipoApelante($cveTipoApelante){
        $this->cveTipoApelante=$cveTipoApelante;
    }
    public function getDesTipoApelante(){
        return $this->desTipoApelante;
    }
    public function setDesTipoApelante($desTipoApelante){
        $this->desTipoApelante=$desTipoApelante;
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
        return array("cveTipoApelante"=>$this->cveTipoApelante,
"desTipoApelante"=>$this->desTipoApelante,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>