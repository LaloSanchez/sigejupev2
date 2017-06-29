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

class ComparecenciasDTO {
    private $idComparecencia;
    private $idActuacion;
    private $numEmpleadoFePublica;
    private $Nombre;
    private $activo;
    private $lugarComparecencia;
    private $horaComparecencia;
    public function getIdComparecencia(){
        return $this->idComparecencia;
    }
    public function setIdComparecencia($idComparecencia){
        $this->idComparecencia=$idComparecencia;
    }
    public function getIdActuacion(){
        return $this->idActuacion;
    }
    public function setIdActuacion($idActuacion){
        $this->idActuacion=$idActuacion;
    }
    public function getNumEmpleadoFePublica(){
        return $this->numEmpleadoFePublica;
    }
    public function setNumEmpleadoFePublica($numEmpleadoFePublica){
        $this->numEmpleadoFePublica=$numEmpleadoFePublica;
    }
    public function getNombre(){
        return $this->Nombre;
    }
    public function setNombre($Nombre){
        $this->Nombre=$Nombre;
    }
    public function getActivo(){
        return $this->activo;
    }
    public function setActivo($activo){
        $this->activo=$activo;
    }
    public function getLugarComparecencia(){
        return $this->lugarComparecencia;
    }
    public function setLugarComparecencia($lugarComparecencia){
        $this->lugarComparecencia=$lugarComparecencia;
    }
    public function getHoraComparecencia(){
        return $this->horaComparecencia;
    }
    public function setHoraComparecencia($horaComparecencia){
        $this->horaComparecencia=$horaComparecencia;
    }
    public function toString(){
        return array("idComparecencia"=>$this->idComparecencia,
"idActuacion"=>$this->idActuacion,
"numEmpleadoFePublica"=>$this->numEmpleadoFePublica,
"Nombre"=>$this->Nombre,
"activo"=>$this->activo,
"lugarComparecencia"=>$this->lugarComparecencia,
"horaComparecencia"=>$this->horaComparecencia);
    }
}
?>