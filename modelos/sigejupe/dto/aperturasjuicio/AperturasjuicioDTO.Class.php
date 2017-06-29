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

class AperturasjuicioDTO {
    private $idAperturaJuicio;
    private $idActuacion;
    private $idImputadoCarpeta;
    private $IdAudienciaJuicio;
    private $Apelada;
    private $activo;
    private $fechaInicio;
    public function getIdAperturaJuicio(){
        return $this->idAperturaJuicio;
    }
    public function setIdAperturaJuicio($idAperturaJuicio){
        $this->idAperturaJuicio=$idAperturaJuicio;
    }
    public function getIdActuacion(){
        return $this->idActuacion;
    }
    public function setIdActuacion($idActuacion){
        $this->idActuacion=$idActuacion;
    }
    public function getIdImputadoCarpeta(){
        return $this->idImputadoCarpeta;
    }
    public function setIdImputadoCarpeta($idImputadoCarpeta){
        $this->idImputadoCarpeta=$idImputadoCarpeta;
    }
    public function getIdAudienciaJuicio(){
        return $this->IdAudienciaJuicio;
    }
    public function setIdAudienciaJuicio($IdAudienciaJuicio){
        $this->IdAudienciaJuicio=$IdAudienciaJuicio;
    }
    public function getApelada(){
        return $this->Apelada;
    }
    public function setApelada($Apelada){
        $this->Apelada=$Apelada;
    }
    public function getActivo(){
        return $this->activo;
    }
    public function setActivo($activo){
        $this->activo=$activo;
    }
    public function getFechaInicio(){
        return $this->fechaInicio;
    }
    public function setFechaInicio($fechaInicio){
        $this->fechaInicio=$fechaInicio;
    }
    public function toString(){
        return array("idAperturaJuicio"=>$this->idAperturaJuicio,
"idActuacion"=>$this->idActuacion,
"idImputadoCarpeta"=>$this->idImputadoCarpeta,
"IdAudienciaJuicio"=>$this->IdAudienciaJuicio,
"Apelada"=>$this->Apelada,
"activo"=>$this->activo,
"fechaInicio"=>$this->fechaInicio);
    }
}
?>