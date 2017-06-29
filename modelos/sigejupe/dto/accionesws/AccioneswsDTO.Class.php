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

class AccioneswsDTO {
    private $idAccionwa;
    private $descAccionws;
    private $activo;
    private $fechaRegistro;
    public function getIdAccionwa(){
        return $this->idAccionwa;
    }
    public function setIdAccionwa($idAccionwa){
        $this->idAccionwa=$idAccionwa;
    }
    public function getDescAccionws(){
        return $this->descAccionws;
    }
    public function setDescAccionws($descAccionws){
        $this->descAccionws=$descAccionws;
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
    public function toString(){
        return array("idAccionwa"=>$this->idAccionwa,
"descAccionws"=>$this->descAccionws,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro);
    }
}
?>