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

class EfectosofendidosDTO {
    private $idEfectoOfendido;
    private $cveDetalleEfecto;
    private $idImpOfeDelSolicitud;
    private $IdReferencia;
    private $origen;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdEfectoOfendido(){
        return $this->idEfectoOfendido;
    }
    public function setIdEfectoOfendido($idEfectoOfendido){
        $this->idEfectoOfendido=$idEfectoOfendido;
    }
    public function getCveDetalleEfecto(){
        return $this->cveDetalleEfecto;
    }
    public function setCveDetalleEfecto($cveDetalleEfecto){
        $this->cveDetalleEfecto=$cveDetalleEfecto;
    }
    public function getIdImpOfeDelSolicitud(){
        return $this->idImpOfeDelSolicitud;
    }
    public function setIdImpOfeDelSolicitud($idImpOfeDelSolicitud){
        $this->idImpOfeDelSolicitud=$idImpOfeDelSolicitud;
    }
    public function getIdReferencia(){
        return $this->IdReferencia;
    }
    public function setIdReferencia($IdReferencia){
        $this->IdReferencia=$IdReferencia;
    }
    public function getOrigen(){
        return $this->origen;
    }
    public function setOrigen($origen){
        $this->origen=$origen;
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
        return array("idEfectoOfendido"=>$this->idEfectoOfendido,
"cveDetalleEfecto"=>$this->cveDetalleEfecto,
"idImpOfeDelSolicitud"=>$this->idImpOfeDelSolicitud,
"IdReferencia"=>$this->IdReferencia,
"origen"=>$this->origen,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>