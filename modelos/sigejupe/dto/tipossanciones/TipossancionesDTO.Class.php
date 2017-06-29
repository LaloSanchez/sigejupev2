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

class TipossancionesDTO {
    private $cveTipoSancion;
    private $desTipoSancion;
    private $Beneficio;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getCveTipoSancion(){
        return $this->cveTipoSancion;
    }
    public function setCveTipoSancion($cveTipoSancion){
        $this->cveTipoSancion=$cveTipoSancion;
    }
    public function getDesTipoSancion(){
        return $this->desTipoSancion;
    }
    public function setDesTipoSancion($desTipoSancion){
        $this->desTipoSancion=$desTipoSancion;
    }
    public function getBeneficio(){
        return $this->Beneficio;
    }
    public function setBeneficio($Beneficio){
        $this->Beneficio=$Beneficio;
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
        return array("cveTipoSancion"=>$this->cveTipoSancion,
"desTipoSancion"=>$this->desTipoSancion,
"Beneficio"=>$this->Beneficio,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>