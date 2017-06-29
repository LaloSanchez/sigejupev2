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

class ActuacionesestatusradDTO {
    private $idActuacionesEstatusRad;
    private $idActuacion;
    private $cveTipoEstatusRadicacion;
    private $fechaRegistro;
    private $fechaActualizacion;
    private $activo;
    public function getIdActuacionesEstatusRad(){
        return $this->idActuacionesEstatusRad;
    }
    public function setIdActuacionesEstatusRad($idActuacionesEstatusRad){
        $this->idActuacionesEstatusRad=$idActuacionesEstatusRad;
    }
    public function getIdActuacion(){
        return $this->idActuacion;
    }
    public function setIdActuacion($idActuacion){
        $this->idActuacion=$idActuacion;
    }
    public function getCveTipoEstatusRadicacion(){
        return $this->cveTipoEstatusRadicacion;
    }
    public function setCveTipoEstatusRadicacion($cveTipoEstatusRadicacion){
        $this->cveTipoEstatusRadicacion=$cveTipoEstatusRadicacion;
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
    public function getActivo(){
        return $this->activo;
    }
    public function setActivo($activo){
        $this->activo=$activo;
    }
    public function toString(){
        return array("idActuacionesEstatusRad"=>$this->idActuacionesEstatusRad,
"idActuacion"=>$this->idActuacion,
"cveTipoEstatusRadicacion"=>$this->cveTipoEstatusRadicacion,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion,
"activo"=>$this->activo);
    }
}
?>