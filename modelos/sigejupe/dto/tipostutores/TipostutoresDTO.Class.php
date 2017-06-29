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

class TipostutoresDTO {
    private $cveTipoTutor;
    private $desTipoTutor;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getCveTipoTutor(){
        return $this->cveTipoTutor;
    }
    public function setCveTipoTutor($cveTipoTutor){
        $this->cveTipoTutor=$cveTipoTutor;
    }
    public function getDesTipoTutor(){
        return $this->desTipoTutor;
    }
    public function setDesTipoTutor($desTipoTutor){
        $this->desTipoTutor=$desTipoTutor;
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
        return array("cveTipoTutor"=>$this->cveTipoTutor,
"desTipoTutor"=>$this->desTipoTutor,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>