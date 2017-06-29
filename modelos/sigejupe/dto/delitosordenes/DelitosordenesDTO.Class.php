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

class DelitosordenesDTO {
    private $idDelitoOrden;
    private $idSolicitudOrden;
    private $cveDelito;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdDelitoOrden(){
        return $this->idDelitoOrden;
    }
    public function setIdDelitoOrden($idDelitoOrden){
        $this->idDelitoOrden=$idDelitoOrden;
    }
    public function getIdSolicitudOrden(){
        return $this->idSolicitudOrden;
    }
    public function setIdSolicitudOrden($idSolicitudOrden){
        $this->idSolicitudOrden=$idSolicitudOrden;
    }
    public function getCveDelito(){
        return $this->cveDelito;
    }
    public function setCveDelito($cveDelito){
        $this->cveDelito=$cveDelito;
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
        return array("idDelitoOrden"=>$this->idDelitoOrden,
"idSolicitudOrden"=>$this->idSolicitudOrden,
"cveDelito"=>$this->cveDelito,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>