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

class PersonasnotificartradicionalDTO {
    private $idPersonasNotificarT;
    private $idActuacion;
    private $idReferenciaParte;
    private $cveTipoParte;
    private $fechaNotificacion;
    private $activo;
    private $fechaRegistro;
    private $fechaModificacion;
    private $Instructivo;
    private $Correo;
    public function getIdPersonasNotificarT(){
        return $this->idPersonasNotificarT;
    }
    public function setIdPersonasNotificarT($idPersonasNotificarT){
        $this->idPersonasNotificarT=$idPersonasNotificarT;
    }
    public function getIdActuacion(){
        return $this->idActuacion;
    }
    public function setIdActuacion($idActuacion){
        $this->idActuacion=$idActuacion;
    }
    public function getIdReferenciaParte(){
        return $this->idReferenciaParte;
    }
    public function setIdReferenciaParte($idReferenciaParte){
        $this->idReferenciaParte=$idReferenciaParte;
    }
    public function getCveTipoParte(){
        return $this->cveTipoParte;
    }
    public function setCveTipoParte($cveTipoParte){
        $this->cveTipoParte=$cveTipoParte;
    }
    public function getFechaNotificacion(){
        return $this->fechaNotificacion;
    }
    public function setFechaNotificacion($fechaNotificacion){
        $this->fechaNotificacion=$fechaNotificacion;
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
    public function getFechaModificacion(){
        return $this->fechaModificacion;
    }
    public function setFechaModificacion($fechaModificacion){
        $this->fechaModificacion=$fechaModificacion;
    }
    public function getInstructivo(){
        return $this->Instructivo;
    }
    public function setInstructivo($Instructivo){
        $this->Instructivo=$Instructivo;
    }
    public function getCorreo(){
        return $this->Correo;
    }
    public function setCorreo($Correo){
        $this->Correo=$Correo;
    }
    public function toString(){
        return array("idPersonasNotificarT"=>$this->idPersonasNotificarT,
"idActuacion"=>$this->idActuacion,
"idReferenciaParte"=>$this->idReferenciaParte,
"cveTipoParte"=>$this->cveTipoParte,
"fechaNotificacion"=>$this->fechaNotificacion,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaModificacion"=>$this->fechaModificacion,
"Instructivo"=>$this->Instructivo,
"Correo"=>$this->Correo);
    }
}
?>