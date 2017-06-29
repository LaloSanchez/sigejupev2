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

class ConsumacionesDTO {
    private $cveConsumacion;
    private $desConsumacion;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getCveConsumacion(){
        return $this->cveConsumacion;
    }
    public function setCveConsumacion($cveConsumacion){
        $this->cveConsumacion=$cveConsumacion;
    }
    public function getDesConsumacion(){
        return $this->desConsumacion;
    }
    public function setDesConsumacion($desConsumacion){
        $this->desConsumacion=$desConsumacion;
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
        return array("cveConsumacion"=>$this->cveConsumacion,
"desConsumacion"=>$this->desConsumacion,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>