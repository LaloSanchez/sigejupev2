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

class ProgramacionjuzgadoresDTO {
    private $idProgramacionJuzgador;
    private $idJuzgador;
    private $cveRolJuzgador;
    private $fechaInicio;
    private $fechaFinal;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    private $idProgramacion;
    public function getIdProgramacionJuzgador(){
        return $this->idProgramacionJuzgador;
    }
    public function setIdProgramacionJuzgador($idProgramacionJuzgador){
        $this->idProgramacionJuzgador=$idProgramacionJuzgador;
    }
    public function getIdJuzgador(){
        return $this->idJuzgador;
    }
    public function setIdJuzgador($idJuzgador){
        $this->idJuzgador=$idJuzgador;
    }
    public function getCveRolJuzgador(){
        return $this->cveRolJuzgador;
    }
    public function setCveRolJuzgador($cveRolJuzgador){
        $this->cveRolJuzgador=$cveRolJuzgador;
    }
    public function getFechaInicio(){
        return $this->fechaInicio;
    }
    public function setFechaInicio($fechaInicio){
        $this->fechaInicio=$fechaInicio;
    }
    public function getFechaFinal(){
        return $this->fechaFinal;
    }
    public function setFechaFinal($fechaFinal){
        $this->fechaFinal=$fechaFinal;
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
    public function getIdProgramacion(){
        return $this->idProgramacion;
    }
    public function setIdProgramacion($idProgramacion){
        $this->idProgramacion=$idProgramacion;
    }
    public function toString(){
        return array("idProgramacionJuzgador"=>$this->idProgramacionJuzgador,
"idJuzgador"=>$this->idJuzgador,
"cveRolJuzgador"=>$this->cveRolJuzgador,
"fechaInicio"=>$this->fechaInicio,
"fechaFinal"=>$this->fechaFinal,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion,
"idProgramacion"=>$this->idProgramacion);
    }
}
?>