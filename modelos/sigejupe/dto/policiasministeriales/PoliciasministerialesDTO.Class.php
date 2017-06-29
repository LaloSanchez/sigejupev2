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

class PoliciasministerialesDTO {
    private $idPoliciaMinisterial;
    private $idIngresoCereso;
    private $nombre;
    private $paterno;
    private $materno;
    private $cveAdscripcionMP;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdPoliciaMinisterial(){
        return $this->idPoliciaMinisterial;
    }
    public function setIdPoliciaMinisterial($idPoliciaMinisterial){
        $this->idPoliciaMinisterial=$idPoliciaMinisterial;
    }
    public function getIdIngresoCereso(){
        return $this->idIngresoCereso;
    }
    public function setIdIngresoCereso($idIngresoCereso){
        $this->idIngresoCereso=$idIngresoCereso;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
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
    public function getCveAdscripcionMP(){
        return $this->cveAdscripcionMP;
    }
    public function setCveAdscripcionMP($cveAdscripcionMP){
        $this->cveAdscripcionMP=$cveAdscripcionMP;
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
        return array("idPoliciaMinisterial"=>$this->idPoliciaMinisterial,
"idIngresoCereso"=>$this->idIngresoCereso,
"nombre"=>$this->nombre,
"paterno"=>$this->paterno,
"materno"=>$this->materno,
"cveAdscripcionMP"=>$this->cveAdscripcionMP,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>