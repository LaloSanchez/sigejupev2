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

class TiposresolucionesDTO {
    private $cveTipoResolucion;
    private $desTipoResolucion;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getCveTipoResolucion(){
        return $this->cveTipoResolucion;
    }
    public function setCveTipoResolucion($cveTipoResolucion){
        $this->cveTipoResolucion=$cveTipoResolucion;
    }
    public function getDesTipoResolucion(){
        return $this->desTipoResolucion;
    }
    public function setDesTipoResolucion($desTipoResolucion){
        $this->desTipoResolucion=$desTipoResolucion;
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
        return array("cveTipoResolucion"=>$this->cveTipoResolucion,
"desTipoResolucion"=>$this->desTipoResolucion,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>