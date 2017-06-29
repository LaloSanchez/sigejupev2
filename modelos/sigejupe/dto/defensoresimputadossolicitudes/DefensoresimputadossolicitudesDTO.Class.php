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

class DefensoresimputadossolicitudesDTO {
    private $idDefensorImputadoSolicitud;
    private $idImputadoSolicitud;
    private $cveTipoDefensor;
    private $nombre;
    private $telefono;
    private $celular;
    private $email;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdDefensorImputadoSolicitud(){
        return $this->idDefensorImputadoSolicitud;
    }
    public function setIdDefensorImputadoSolicitud($idDefensorImputadoSolicitud){
        $this->idDefensorImputadoSolicitud=$idDefensorImputadoSolicitud;
    }
    public function getIdImputadoSolicitud(){
        return $this->idImputadoSolicitud;
    }
    public function setIdImputadoSolicitud($idImputadoSolicitud){
        $this->idImputadoSolicitud=$idImputadoSolicitud;
    }
    public function getCveTipoDefensor(){
        return $this->cveTipoDefensor;
    }
    public function setCveTipoDefensor($cveTipoDefensor){
        $this->cveTipoDefensor=$cveTipoDefensor;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function setTelefono($telefono){
        $this->telefono=$telefono;
    }
    public function getCelular(){
        return $this->celular;
    }
    public function setCelular($celular){
        $this->celular=$celular;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email=$email;
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
        return array("idDefensorImputadoSolicitud"=>$this->idDefensorImputadoSolicitud,
"idImputadoSolicitud"=>$this->idImputadoSolicitud,
"cveTipoDefensor"=>$this->cveTipoDefensor,
"nombre"=>$this->nombre,
"telefono"=>$this->telefono,
"celular"=>$this->celular,
"email"=>$this->email,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>