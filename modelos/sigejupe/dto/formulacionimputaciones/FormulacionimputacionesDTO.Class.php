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

class FormulacionimputacionesDTO {
    private $idFormulacionImputacion;
    private $idActuacion;
    private $idImpOfeDelCarpeta;
    private $cveTipoFormulacion;
    private $fechaFormulacion;
    private $idJuzgador;
    private $activo;
    public function getIdFormulacionImputacion(){
        return $this->idFormulacionImputacion;
    }
    public function setIdFormulacionImputacion($idFormulacionImputacion){
        $this->idFormulacionImputacion=$idFormulacionImputacion;
    }
    public function getIdActuacion(){
        return $this->idActuacion;
    }
    public function setIdActuacion($idActuacion){
        $this->idActuacion=$idActuacion;
    }
    public function getIdImpOfeDelCarpeta(){
        return $this->idImpOfeDelCarpeta;
    }
    public function setIdImpOfeDelCarpeta($idImpOfeDelCarpeta){
        $this->idImpOfeDelCarpeta=$idImpOfeDelCarpeta;
    }
    public function getCveTipoFormulacion(){
        return $this->cveTipoFormulacion;
    }
    public function setCveTipoFormulacion($cveTipoFormulacion){
        $this->cveTipoFormulacion=$cveTipoFormulacion;
    }
    public function getFechaFormulacion(){
        return $this->fechaFormulacion;
    }
    public function setFechaFormulacion($fechaFormulacion){
        $this->fechaFormulacion=$fechaFormulacion;
    }
    public function getIdJuzgador(){
        return $this->idJuzgador;
    }
    public function setIdJuzgador($idJuzgador){
        $this->idJuzgador=$idJuzgador;
    }
    public function getActivo(){
        return $this->activo;
    }
    public function setActivo($activo){
        $this->activo=$activo;
    }
    public function toString(){
        return array("idFormulacionImputacion"=>$this->idFormulacionImputacion,
"idActuacion"=>$this->idActuacion,
"idImpOfeDelCarpeta"=>$this->idImpOfeDelCarpeta,
"cveTipoFormulacion"=>$this->cveTipoFormulacion,
"fechaFormulacion"=>$this->fechaFormulacion,
"idJuzgador"=>$this->idJuzgador,
"activo"=>$this->activo);
    }
}
?>