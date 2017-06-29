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

class PersonasnotificarDTO {
    private $idPersonasNotificar;
    private $idActuacion;
    private $idRelacionExpedienteJuzgado;
    private $fechaNotificacion;
    private $activo;
    private $fechaRegistro;
    private $fechaModificacion;
    private $Instructivo;
    private $Correo;
    public function getIdPersonasNotificar(){
        return $this->idPersonasNotificar;
    }
    public function setIdPersonasNotificar($idPersonasNotificar){
        $this->idPersonasNotificar=$idPersonasNotificar;
    }
    public function getIdActuacion(){
        return $this->idActuacion;
    }
    public function setIdActuacion($idActuacion){
        $this->idActuacion=$idActuacion;
    }
    public function getIdRelacionExpedienteJuzgado(){
        return $this->idRelacionExpedienteJuzgado;
    }
    public function setIdRelacionExpedienteJuzgado($idRelacionExpedienteJuzgado){
        $this->idRelacionExpedienteJuzgado=$idRelacionExpedienteJuzgado;
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
        return array("idPersonasNotificar"=>$this->idPersonasNotificar,
"idActuacion"=>$this->idActuacion,
"idRelacionExpedienteJuzgado"=>$this->idRelacionExpedienteJuzgado,
"fechaNotificacion"=>$this->fechaNotificacion,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaModificacion"=>$this->fechaModificacion,
"Instructivo"=>$this->Instructivo,
"Correo"=>$this->Correo);
    }
}
?>