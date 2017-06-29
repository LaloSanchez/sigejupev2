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

class TutoresofendidosmuestrasDTO {
    private $idTutorOfendidoMuestra;
    private $idOfendidoMuestra;
    private $cveTipoTutor;
    private $nombre;
    private $paterno;
    private $materno;
    private $cveGenero;
    private $fechaNacimiento;
    private $domicilio;
    private $telefono;
    private $email;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdTutorOfendidoMuestra(){
        return $this->idTutorOfendidoMuestra;
    }
    public function setIdTutorOfendidoMuestra($idTutorOfendidoMuestra){
        $this->idTutorOfendidoMuestra=$idTutorOfendidoMuestra;
    }
    public function getIdOfendidoMuestra(){
        return $this->idOfendidoMuestra;
    }
    public function setIdOfendidoMuestra($idOfendidoMuestra){
        $this->idOfendidoMuestra=$idOfendidoMuestra;
    }
    public function getCveTipoTutor(){
        return $this->cveTipoTutor;
    }
    public function setCveTipoTutor($cveTipoTutor){
        $this->cveTipoTutor=$cveTipoTutor;
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
    public function getCveGenero(){
        return $this->cveGenero;
    }
    public function setCveGenero($cveGenero){
        $this->cveGenero=$cveGenero;
    }
    public function getFechaNacimiento(){
        return $this->fechaNacimiento;
    }
    public function setFechaNacimiento($fechaNacimiento){
        $this->fechaNacimiento=$fechaNacimiento;
    }
    public function getDomicilio(){
        return $this->domicilio;
    }
    public function setDomicilio($domicilio){
        $this->domicilio=$domicilio;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function setTelefono($telefono){
        $this->telefono=$telefono;
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
        return array("idTutorOfendidoMuestra"=>$this->idTutorOfendidoMuestra,
"idOfendidoMuestra"=>$this->idOfendidoMuestra,
"cveTipoTutor"=>$this->cveTipoTutor,
"nombre"=>$this->nombre,
"paterno"=>$this->paterno,
"materno"=>$this->materno,
"cveGenero"=>$this->cveGenero,
"fechaNacimiento"=>$this->fechaNacimiento,
"domicilio"=>$this->domicilio,
"telefono"=>$this->telefono,
"email"=>$this->email,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>