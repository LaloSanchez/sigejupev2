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

class SentenciastocasDTO {
    private $idsentenciatoca;
    private $idToca;
    private $cveTipoSentencia;
    private $idActuacion;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdsentenciatoca(){
        return $this->idsentenciatoca;
    }
    public function setIdsentenciatoca($idsentenciatoca){
        $this->idsentenciatoca=$idsentenciatoca;
    }
    public function getIdToca(){
        return $this->idToca;
    }
    public function setIdToca($idToca){
        $this->idToca=$idToca;
    }
    public function getCveTipoSentencia(){
        return $this->cveTipoSentencia;
    }
    public function setCveTipoSentencia($cveTipoSentencia){
        $this->cveTipoSentencia=$cveTipoSentencia;
    }
    public function getIdActuacion(){
        return $this->idActuacion;
    }
    public function setIdActuacion($idActuacion){
        $this->idActuacion=$idActuacion;
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
        return array("idsentenciatoca"=>$this->idsentenciatoca,
"idToca"=>$this->idToca,
"cveTipoSentencia"=>$this->cveTipoSentencia,
"idActuacion"=>$this->idActuacion,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>