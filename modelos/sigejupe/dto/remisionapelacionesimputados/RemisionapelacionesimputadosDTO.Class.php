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

class RemisionapelacionesimputadosDTO {
    private $idRemisionApelacionImp;
    private $idRemisionApelacion;
    private $idimpOfeDelCarpeta;
    private $cveConsignacion;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdRemisionApelacionImp(){
        return $this->idRemisionApelacionImp;
    }
    public function setIdRemisionApelacionImp($idRemisionApelacionImp){
        $this->idRemisionApelacionImp=$idRemisionApelacionImp;
    }
    public function getIdRemisionApelacion(){
        return $this->idRemisionApelacion;
    }
    public function setIdRemisionApelacion($idRemisionApelacion){
        $this->idRemisionApelacion=$idRemisionApelacion;
    }
    public function getIdimpOfeDelCarpeta(){
        return $this->idimpOfeDelCarpeta;
    }
    public function setIdimpOfeDelCarpeta($idimpOfeDelCarpeta){
        $this->idimpOfeDelCarpeta=$idimpOfeDelCarpeta;
    }
    public function getCveConsignacion(){
        return $this->cveConsignacion;
    }
    public function setCveConsignacion($cveConsignacion){
        $this->cveConsignacion=$cveConsignacion;
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
        return array("idRemisionApelacionImp"=>$this->idRemisionApelacionImp,
"idRemisionApelacion"=>$this->idRemisionApelacion,
"idimpOfeDelCarpeta"=>$this->idimpOfeDelCarpeta,
"cveConsignacion"=>$this->cveConsignacion,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>