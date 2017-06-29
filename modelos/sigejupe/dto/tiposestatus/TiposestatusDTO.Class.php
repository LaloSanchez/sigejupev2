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

class TiposestatusDTO {
    private $cveTipoEstatus;
    private $descTipoEstatus;
    private $activo;
    private $fechaActualizacion;
    private $fechaRegistro;
    public function getCveTipoEstatus(){
        return $this->cveTipoEstatus;
    }
    public function setCveTipoEstatus($cveTipoEstatus){
        $this->cveTipoEstatus=$cveTipoEstatus;
    }
    public function getDescTipoEstatus(){
        return $this->descTipoEstatus;
    }
    public function setDescTipoEstatus($descTipoEstatus){
        $this->descTipoEstatus=$descTipoEstatus;
    }
    public function getActivo(){
        return $this->activo;
    }
    public function setActivo($activo){
        $this->activo=$activo;
    }
    public function getFechaActualizacion(){
        return $this->fechaActualizacion;
    }
    public function setFechaActualizacion($fechaActualizacion){
        $this->fechaActualizacion=$fechaActualizacion;
    }
    public function getFechaRegistro(){
        return $this->fechaRegistro;
    }
    public function setFechaRegistro($fechaRegistro){
        $this->fechaRegistro=$fechaRegistro;
    }
    public function toString(){
        return array("cveTipoEstatus"=>$this->cveTipoEstatus,
"descTipoEstatus"=>$this->descTipoEstatus,
"activo"=>$this->activo,
"fechaActualizacion"=>$this->fechaActualizacion,
"fechaRegistro"=>$this->fechaRegistro);
    }
}
?>