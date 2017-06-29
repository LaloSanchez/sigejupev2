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

class RespuestasolicitudordenDTO {
    private $cveRespuestaSolicitudOrden;
    private $desRespuestaSolicitudOrden;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getCveRespuestaSolicitudOrden(){
        return $this->cveRespuestaSolicitudOrden;
    }
    public function setCveRespuestaSolicitudOrden($cveRespuestaSolicitudOrden){
        $this->cveRespuestaSolicitudOrden=$cveRespuestaSolicitudOrden;
    }
    public function getDesRespuestaSolicitudOrden(){
        return $this->desRespuestaSolicitudOrden;
    }
    public function setDesRespuestaSolicitudOrden($desRespuestaSolicitudOrden){
        $this->desRespuestaSolicitudOrden=$desRespuestaSolicitudOrden;
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
        return array("cveRespuestaSolicitudOrden"=>$this->cveRespuestaSolicitudOrden,
"desRespuestaSolicitudOrden"=>$this->desRespuestaSolicitudOrden,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>