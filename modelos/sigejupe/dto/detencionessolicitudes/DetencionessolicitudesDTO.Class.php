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

class DetencionessolicitudesDTO {
    private $idDetencionSolicitud;
    private $idImputadoSolicitud;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    private $fechaDetencion;
    private $numOficio;
    private $cveCereso;
    private $nombreAgente;
    private $observaciones;
    public function getIdDetencionSolicitud(){
        return $this->idDetencionSolicitud;
    }
    public function setIdDetencionSolicitud($idDetencionSolicitud){
        $this->idDetencionSolicitud=$idDetencionSolicitud;
    }
    public function getIdImputadoSolicitud(){
        return $this->idImputadoSolicitud;
    }
    public function setIdImputadoSolicitud($idImputadoSolicitud){
        $this->idImputadoSolicitud=$idImputadoSolicitud;
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
    public function getFechaDetencion(){
        return $this->fechaDetencion;
    }
    public function setFechaDetencion($fechaDetencion){
        $this->fechaDetencion=$fechaDetencion;
    }
    public function getNumOficio(){
        return $this->numOficio;
    }
    public function setNumOficio($numOficio){
        $this->numOficio=$numOficio;
    }
    public function getCveCereso(){
        return $this->cveCereso;
    }
    public function setCveCereso($cveCereso){
        $this->cveCereso=$cveCereso;
    }
    public function getNombreAgente(){
        return $this->nombreAgente;
    }
    public function setNombreAgente($nombreAgente){
        $this->nombreAgente=$nombreAgente;
    }
    public function getObservaciones(){
        return $this->observaciones;
    }
    public function setObservaciones($observaciones){
        $this->observaciones=$observaciones;
    }
    public function toString(){
        return array("idDetencionSolicitud"=>$this->idDetencionSolicitud,
"idImputadoSolicitud"=>$this->idImputadoSolicitud,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion,
"fechaDetencion"=>$this->fechaDetencion,
"numOficio"=>$this->numOficio,
"cveCereso"=>$this->cveCereso,
"nombreAgente"=>$this->nombreAgente,
"observaciones"=>$this->observaciones);
    }
}
?>