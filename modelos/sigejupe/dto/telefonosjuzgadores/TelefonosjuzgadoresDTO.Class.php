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

class TelefonosjuzgadoresDTO {
    private $idTelefonJuzgador;
    private $idJuzgador;
    private $cveTipoLada;
    private $telefono;
    private $celular;
    private $email;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdTelefonJuzgador(){
        return $this->idTelefonJuzgador;
    }
    public function setIdTelefonJuzgador($idTelefonJuzgador){
        $this->idTelefonJuzgador=$idTelefonJuzgador;
    }
    public function getIdJuzgador(){
        return $this->idJuzgador;
    }
    public function setIdJuzgador($idJuzgador){
        $this->idJuzgador=$idJuzgador;
    }
    public function getCveTipoLada(){
        return $this->cveTipoLada;
    }
    public function setCveTipoLada($cveTipoLada){
        $this->cveTipoLada=$cveTipoLada;
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
        return array("idTelefonJuzgador"=>$this->idTelefonJuzgador,
"idJuzgador"=>$this->idJuzgador,
"cveTipoLada"=>$this->cveTipoLada,
"telefono"=>$this->telefono,
"celular"=>$this->celular,
"email"=>$this->email,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>