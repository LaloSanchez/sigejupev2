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

class TiposautosDTO {
    private $cveTipoAuto;
    private $desTipoAuto;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getCveTipoAuto(){
        return $this->cveTipoAuto;
    }
    public function setCveTipoAuto($cveTipoAuto){
        $this->cveTipoAuto=$cveTipoAuto;
    }
    public function getDesTipoAuto(){
        return $this->desTipoAuto;
    }
    public function setDesTipoAuto($desTipoAuto){
        $this->desTipoAuto=$desTipoAuto;
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
        return array("cveTipoAuto"=>$this->cveTipoAuto,
"desTipoAuto"=>$this->desTipoAuto,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>