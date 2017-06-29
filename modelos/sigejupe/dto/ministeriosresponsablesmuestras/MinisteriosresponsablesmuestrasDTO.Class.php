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

class MinisteriosresponsablesmuestrasDTO {
    private $idMinisterioResponsableMuestras;
    private $idSolicitudMuestra;
    private $nombre;
    private $paterno;
    private $materno;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdMinisterioResponsableMuestras(){
        return $this->idMinisterioResponsableMuestras;
    }
    public function setIdMinisterioResponsableMuestras($idMinisterioResponsableMuestras){
        $this->idMinisterioResponsableMuestras=$idMinisterioResponsableMuestras;
    }
    public function getIdSolicitudMuestra(){
        return $this->idSolicitudMuestra;
    }
    public function setIdSolicitudMuestra($idSolicitudMuestra){
        $this->idSolicitudMuestra=$idSolicitudMuestra;
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
        return array("idMinisterioResponsableMuestras"=>$this->idMinisterioResponsableMuestras,
"idSolicitudMuestra"=>$this->idSolicitudMuestra,
"nombre"=>$this->nombre,
"paterno"=>$this->paterno,
"materno"=>$this->materno,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>