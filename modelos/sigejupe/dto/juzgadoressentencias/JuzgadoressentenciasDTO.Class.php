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

class JuzgadoressentenciasDTO {
    private $idJuzgadorSentencia;
    private $idActuacion;
    private $idJuzgador;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdJuzgadorSentencia(){
        return $this->idJuzgadorSentencia;
    }
    public function setIdJuzgadorSentencia($idJuzgadorSentencia){
        $this->idJuzgadorSentencia=$idJuzgadorSentencia;
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
        return array("idJuzgadorSentencia"=>$this->idJuzgadorSentencia,
"idActuacion"=>$this->idActuacion,
"idJuzgador"=>$this->idJuzgador,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>