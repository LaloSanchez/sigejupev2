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

class MedidasproteccionesDTO {
    private $idMedidaProteccion;
    private $cveTipoProteccion;
    private $idActuacion;
    private $idOfendidoCarpeta;
    private $activo;
    private $apelada;
    private $fechaInicio;
    private $fechaTermino;
    private $cveAutoridadEmisora;
    public function getIdMedidaProteccion(){
        return $this->idMedidaProteccion;
    }
    public function setIdMedidaProteccion($idMedidaProteccion){
        $this->idMedidaProteccion=$idMedidaProteccion;
    }
    public function getCveTipoProteccion(){
        return $this->cveTipoProteccion;
    }
    public function setCveTipoProteccion($cveTipoProteccion){
        $this->cveTipoProteccion=$cveTipoProteccion;
    }
    public function getIdActuacion(){
        return $this->idActuacion;
    }
    public function setIdActuacion($idActuacion){
        $this->idActuacion=$idActuacion;
    }
    public function getIdOfendidoCarpeta(){
        return $this->idOfendidoCarpeta;
    }
    public function setIdOfendidoCarpeta($idOfendidoCarpeta){
        $this->idOfendidoCarpeta=$idOfendidoCarpeta;
    }
    public function getActivo(){
        return $this->activo;
    }
    public function setActivo($activo){
        $this->activo=$activo;
    }
    public function getApelada(){
        return $this->apelada;
    }
    public function setApelada($apelada){
        $this->apelada=$apelada;
    }
    public function getFechaInicio(){
        return $this->fechaInicio;
    }
    public function setFechaInicio($fechaInicio){
        $this->fechaInicio=$fechaInicio;
    }
    public function getFechaTermino(){
        return $this->fechaTermino;
    }
    public function setFechaTermino($fechaTermino){
        $this->fechaTermino=$fechaTermino;
    }
    public function getCveAutoridadEmisora(){
        return $this->cveAutoridadEmisora;
    }
    public function setCveAutoridadEmisora($cveAutoridadEmisora){
        $this->cveAutoridadEmisora=$cveAutoridadEmisora;
    }
    public function toString(){
        return array("idMedidaProteccion"=>$this->idMedidaProteccion,
"cveTipoProteccion"=>$this->cveTipoProteccion,
"idActuacion"=>$this->idActuacion,
"idOfendidoCarpeta"=>$this->idOfendidoCarpeta,
"activo"=>$this->activo,
"apelada"=>$this->apelada,
"fechaInicio"=>$this->fechaInicio,
"fechaTermino"=>$this->fechaTermino,
"cveAutoridadEmisora"=>$this->cveAutoridadEmisora);
    }
}
?>