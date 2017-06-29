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

class AntecedesactuacionesDTO {
    private $idAntecedesActuacion;
    private $idActuacionPadre;
    private $idActuacionHija;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdAntecedesActuacion(){
        return $this->idAntecedesActuacion;
    }
    public function setIdAntecedesActuacion($idAntecedesActuacion){
        $this->idAntecedesActuacion=$idAntecedesActuacion;
    }
    public function getIdActuacionPadre(){
        return $this->idActuacionPadre;
    }
    public function setIdActuacionPadre($idActuacionPadre){
        $this->idActuacionPadre=$idActuacionPadre;
    }
    public function getIdActuacionHija(){
        return $this->idActuacionHija;
    }
    public function setIdActuacionHija($idActuacionHija){
        $this->idActuacionHija=$idActuacionHija;
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
        return array("idAntecedesActuacion"=>$this->idAntecedesActuacion,
"idActuacionPadre"=>$this->idActuacionPadre,
"idActuacionHija"=>$this->idActuacionHija,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>