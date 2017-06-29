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

class ActasaudienciasDTO {
    private $idActasAudiencia;
    private $idActuacion;
    private $idAudiencia;
    private $fechaRegistro;
    private $fechaActualizacion;
    private $activo;
    public function getIdActasAudiencia(){
        return $this->idActasAudiencia;
    }
    public function setIdActasAudiencia($idActasAudiencia){
        $this->idActasAudiencia=$idActasAudiencia;
    }
    public function getIdActuacion(){
        return $this->idActuacion;
    }
    public function setIdActuacion($idActuacion){
        $this->idActuacion=$idActuacion;
    }
    public function getIdAudiencia(){
        return $this->idAudiencia;
    }
    public function setIdAudiencia($idAudiencia){
        $this->idAudiencia=$idAudiencia;
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
    public function getActivo(){
        return $this->activo;
    }
    public function setActivo($activo){
        $this->activo=$activo;
    }
    public function toString(){
        return array("idActasAudiencia"=>$this->idActasAudiencia,
"idActuacion"=>$this->idActuacion,
"idAudiencia"=>$this->idAudiencia,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion,
"activo"=>$this->activo);
    }
}
?>