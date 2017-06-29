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

class ActuacionesestatusDTO {
    private $idActuacionesEstatus;
    private $idActuacion;
    private $cveEstatus;
    private $fechaRegistro;
    private $fechaActualizacion;
    private $activo;
    public function getIdActuacionesEstatus(){
        return $this->idActuacionesEstatus;
    }
    public function setIdActuacionesEstatus($idActuacionesEstatus){
        $this->idActuacionesEstatus=$idActuacionesEstatus;
    }
    public function getIdActuacion(){
        return $this->idActuacion;
    }
    public function setIdActuacion($idActuacion){
        $this->idActuacion=$idActuacion;
    }
    public function getCveEstatus(){
        return $this->cveEstatus;
    }
    public function setCveEstatus($cveEstatus){
        $this->cveEstatus=$cveEstatus;
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
        return array("idActuacionesEstatus"=>$this->idActuacionesEstatus,
"idActuacion"=>$this->idActuacion,
"cveEstatus"=>$this->cveEstatus,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion,
"activo"=>$this->activo);
    }
}
?>