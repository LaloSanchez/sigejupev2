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

class EstatusDTO {
    private $cveEstatus;
    private $descEstatus;
    private $activo;
    private $cveTipoEstatus;
    private $fechaActualizacion;
    private $fechaRegistro;
    public function getCveEstatus(){
        return $this->cveEstatus;
    }
    public function setCveEstatus($cveEstatus){
        $this->cveEstatus=$cveEstatus;
    }
    public function getDescEstatus(){
        return $this->descEstatus;
    }
    public function setDescEstatus($descEstatus){
        $this->descEstatus=$descEstatus;
    }
    public function getActivo(){
        return $this->activo;
    }
    public function setActivo($activo){
        $this->activo=$activo;
    }
    public function getCveTipoEstatus(){
        return $this->cveTipoEstatus;
    }
    public function setCveTipoEstatus($cveTipoEstatus){
        $this->cveTipoEstatus=$cveTipoEstatus;
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
        return array("cveEstatus"=>$this->cveEstatus,
"descEstatus"=>$this->descEstatus,
"activo"=>$this->activo,
"cveTipoEstatus"=>$this->cveTipoEstatus,
"fechaActualizacion"=>$this->fechaActualizacion,
"fechaRegistro"=>$this->fechaRegistro);
    }
}
?>