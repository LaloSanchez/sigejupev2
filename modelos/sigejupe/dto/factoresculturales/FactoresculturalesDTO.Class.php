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

class FactoresculturalesDTO {
    private $cveFactorCultural;
    private $desFactorCultural;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getCveFactorCultural(){
        return $this->cveFactorCultural;
    }
    public function setCveFactorCultural($cveFactorCultural){
        $this->cveFactorCultural=$cveFactorCultural;
    }
    public function getDesFactorCultural(){
        return $this->desFactorCultural;
    }
    public function setDesFactorCultural($desFactorCultural){
        $this->desFactorCultural=$desFactorCultural;
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
        return array("cveFactorCultural"=>$this->cveFactorCultural,
"desFactorCultural"=>$this->desFactorCultural,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>