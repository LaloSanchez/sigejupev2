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

class JuzgadoresactuacionesDTO {
    private $idJuzgadorActuacion;
    private $idActuacion;
    private $idJuzgador;
    private $cveFuncionJuzgador;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdJuzgadorActuacion(){
        return $this->idJuzgadorActuacion;
    }
    public function setIdJuzgadorActuacion($idJuzgadorActuacion){
        $this->idJuzgadorActuacion=$idJuzgadorActuacion;
    }
    public function getIdActuacion(){
        return $this->idActuacion;
    }
    public function setIdActuacion($idActuacion){
        $this->idActuacion=$idActuacion;
    }
    public function getIdJuzgador(){
        return $this->idJuzgador;
    }
    public function setIdJuzgador($idJuzgador){
        $this->idJuzgador=$idJuzgador;
    }
    public function getCveFuncionJuzgador(){
        return $this->cveFuncionJuzgador;
    }
    public function setCveFuncionJuzgador($cveFuncionJuzgador){
        $this->cveFuncionJuzgador=$cveFuncionJuzgador;
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
        return array("idJuzgadorActuacion"=>$this->idJuzgadorActuacion,
"idActuacion"=>$this->idActuacion,
"idJuzgador"=>$this->idJuzgador,
"cveFuncionJuzgador"=>$this->cveFuncionJuzgador,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>