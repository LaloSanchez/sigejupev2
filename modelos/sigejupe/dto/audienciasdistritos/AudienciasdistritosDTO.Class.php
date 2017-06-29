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

class AudienciasdistritosDTO {
    private $idAudienciaDistrito;
    private $cveDistrito;
    private $cveCatAudiencia;
    private $minHorasDesahogar;
    private $maxHorasDesahogar;
    private $holgura;
    private $minDuracion;
    private $maxDuracion;
    private $finSemana;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdAudienciaDistrito(){
        return $this->idAudienciaDistrito;
    }
    public function setIdAudienciaDistrito($idAudienciaDistrito){
        $this->idAudienciaDistrito=$idAudienciaDistrito;
    }
    public function getCveDistrito(){
        return $this->cveDistrito;
    }
    public function setCveDistrito($cveDistrito){
        $this->cveDistrito=$cveDistrito;
    }
    public function getCveCatAudiencia(){
        return $this->cveCatAudiencia;
    }
    public function setCveCatAudiencia($cveCatAudiencia){
        $this->cveCatAudiencia=$cveCatAudiencia;
    }
    public function getMinHorasDesahogar(){
        return $this->minHorasDesahogar;
    }
    public function setMinHorasDesahogar($minHorasDesahogar){
        $this->minHorasDesahogar=$minHorasDesahogar;
    }
    public function getMaxHorasDesahogar(){
        return $this->maxHorasDesahogar;
    }
    public function setMaxHorasDesahogar($maxHorasDesahogar){
        $this->maxHorasDesahogar=$maxHorasDesahogar;
    }
    public function getHolgura(){
        return $this->holgura;
    }
    public function setHolgura($holgura){
        $this->holgura=$holgura;
    }
    public function getMinDuracion(){
        return $this->minDuracion;
    }
    public function setMinDuracion($minDuracion){
        $this->minDuracion=$minDuracion;
    }
    public function getMaxDuracion(){
        return $this->maxDuracion;
    }
    public function setMaxDuracion($maxDuracion){
        $this->maxDuracion=$maxDuracion;
    }
    public function getFinSemana(){
        return $this->finSemana;
    }
    public function setFinSemana($finSemana){
        $this->finSemana=$finSemana;
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
        return array("idAudienciaDistrito"=>$this->idAudienciaDistrito,
"cveDistrito"=>$this->cveDistrito,
"cveCatAudiencia"=>$this->cveCatAudiencia,
"minHorasDesahogar"=>$this->minHorasDesahogar,
"maxHorasDesahogar"=>$this->maxHorasDesahogar,
"holgura"=>$this->holgura,
"minDuracion"=>$this->minDuracion,
"maxDuracion"=>$this->maxDuracion,
"finSemana"=>$this->finSemana,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>