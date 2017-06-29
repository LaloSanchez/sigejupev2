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

class TestigosactuacionesDTO {
    private $idTestigoActuacion;
    private $idActuacion;
    private $cveReferenciaTipoParte;
    private $idReferenciaParte;
    private $cveTipoParte;
    private $nombreTestigo;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdTestigoActuacion(){
        return $this->idTestigoActuacion;
    }
    public function setIdTestigoActuacion($idTestigoActuacion){
        $this->idTestigoActuacion=$idTestigoActuacion;
    }
    public function getIdActuacion(){
        return $this->idActuacion;
    }
    public function setIdActuacion($idActuacion){
        $this->idActuacion=$idActuacion;
    }
    public function getCveReferenciaTipoParte(){
        return $this->cveReferenciaTipoParte;
    }
    public function setCveReferenciaTipoParte($cveReferenciaTipoParte){
        $this->cveReferenciaTipoParte=$cveReferenciaTipoParte;
    }
    public function getIdReferenciaParte(){
        return $this->idReferenciaParte;
    }
    public function setIdReferenciaParte($idReferenciaParte){
        $this->idReferenciaParte=$idReferenciaParte;
    }
    public function getCveTipoParte(){
        return $this->cveTipoParte;
    }
    public function setCveTipoParte($cveTipoParte){
        $this->cveTipoParte=$cveTipoParte;
    }
    public function getNombreTestigo(){
        return $this->nombreTestigo;
    }
    public function setNombreTestigo($nombreTestigo){
        $this->nombreTestigo=$nombreTestigo;
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
        return array("idTestigoActuacion"=>$this->idTestigoActuacion,
"idActuacion"=>$this->idActuacion,
"cveReferenciaTipoParte"=>$this->cveReferenciaTipoParte,
"idReferenciaParte"=>$this->idReferenciaParte,
"cveTipoParte"=>$this->cveTipoParte,
"nombreTestigo"=>$this->nombreTestigo,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>