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

class ModalidadesDTO {
    private $cveModalidad;
    private $desModalidad;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getCveModalidad(){
        return $this->cveModalidad;
    }
    public function setCveModalidad($cveModalidad){
        $this->cveModalidad=$cveModalidad;
    }
    public function getDesModalidad(){
        return $this->desModalidad;
    }
    public function setDesModalidad($desModalidad){
        $this->desModalidad=$desModalidad;
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
        return array("cveModalidad"=>$this->cveModalidad,
"desModalidad"=>$this->desModalidad,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>