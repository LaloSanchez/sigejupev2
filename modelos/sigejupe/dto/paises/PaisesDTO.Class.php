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

class PaisesDTO {
    private $cvePais;
    private $cveRegionMundial;
    private $desPais;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getCvePais(){
        return $this->cvePais;
    }
    public function setCvePais($cvePais){
        $this->cvePais=$cvePais;
    }
    public function getCveRegionMundial(){
        return $this->cveRegionMundial;
    }
    public function setCveRegionMundial($cveRegionMundial){
        $this->cveRegionMundial=$cveRegionMundial;
    }
    public function getDesPais(){
        return $this->desPais;
    }
    public function setDesPais($desPais){
        $this->desPais=$desPais;
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
        return array("cvePais"=>$this->cvePais,
"cveRegionMundial"=>$this->cveRegionMundial,
"desPais"=>$this->desPais,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>