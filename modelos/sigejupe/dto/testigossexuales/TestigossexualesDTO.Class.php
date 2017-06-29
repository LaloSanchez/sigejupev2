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

class TestigossexualesDTO {
    private $idTestigoSexual;
    private $idSexual;
    private $paterno;
    private $materno;
    private $nombre;
    private $cveGenero;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdTestigoSexual(){
        return $this->idTestigoSexual;
    }
    public function setIdTestigoSexual($idTestigoSexual){
        $this->idTestigoSexual=$idTestigoSexual;
    }
    public function getIdSexual(){
        return $this->idSexual;
    }
    public function setIdSexual($idSexual){
        $this->idSexual=$idSexual;
    }
    public function getPaterno(){
        return $this->paterno;
    }
    public function setPaterno($paterno){
        $this->paterno=$paterno;
    }
    public function getMaterno(){
        return $this->materno;
    }
    public function setMaterno($materno){
        $this->materno=$materno;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function getCveGenero(){
        return $this->cveGenero;
    }
    public function setCveGenero($cveGenero){
        $this->cveGenero=$cveGenero;
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
        return array("idTestigoSexual"=>$this->idTestigoSexual,
"idSexual"=>$this->idSexual,
"paterno"=>$this->paterno,
"materno"=>$this->materno,
"nombre"=>$this->nombre,
"cveGenero"=>$this->cveGenero,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>