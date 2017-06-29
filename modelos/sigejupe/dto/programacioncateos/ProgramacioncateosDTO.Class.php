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

class ProgramacioncateosDTO {
    private $idProgramacionCateo;
    private $idJuzgador;
    private $cveGrupoJuzgado;
    private $fechaInicio;
    private $fechaFinal;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdProgramacionCateo(){
        return $this->idProgramacionCateo;
    }
    public function setIdProgramacionCateo($idProgramacionCateo){
        $this->idProgramacionCateo=$idProgramacionCateo;
    }
    public function getIdJuzgador(){
        return $this->idJuzgador;
    }
    public function setIdJuzgador($idJuzgador){
        $this->idJuzgador=$idJuzgador;
    }
    public function getCveGrupoJuzgado(){
        return $this->cveGrupoJuzgado;
    }
    public function setCveGrupoJuzgado($cveGrupoJuzgado){
        $this->cveGrupoJuzgado=$cveGrupoJuzgado;
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
    public function toString(){
        return array("idProgramacionCateo"=>$this->idProgramacionCateo,
"idJuzgador"=>$this->idJuzgador,
"cveGrupoJuzgado"=>$this->cveGrupoJuzgado,
"fechaInicio"=>$this->fechaInicio,
"fechaFinal"=>$this->fechaFinal,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>