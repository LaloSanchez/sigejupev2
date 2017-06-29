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

class ConfiguracionescargasDTO {
    private $cveConfiguracionCarga;
    private $cveRegion;
    private $topeCarga;
    private $tipoProceso;
    private $inicia;
    private $termina;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getCveConfiguracionCarga(){
        return $this->cveConfiguracionCarga;
    }
    public function setCveConfiguracionCarga($cveConfiguracionCarga){
        $this->cveConfiguracionCarga=$cveConfiguracionCarga;
    }
    public function getCveRegion(){
        return $this->cveRegion;
    }
    public function setCveRegion($cveRegion){
        $this->cveRegion=$cveRegion;
    }
    public function getTopeCarga(){
        return $this->topeCarga;
    }
    public function setTopeCarga($topeCarga){
        $this->topeCarga=$topeCarga;
    }
    public function getTipoProceso(){
        return $this->tipoProceso;
    }
    public function setTipoProceso($tipoProceso){
        $this->tipoProceso=$tipoProceso;
    }
    public function getInicia(){
        return $this->inicia;
    }
    public function setInicia($inicia){
        $this->inicia=$inicia;
    }
    public function getTermina(){
        return $this->termina;
    }
    public function setTermina($termina){
        $this->termina=$termina;
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
        return array("cveConfiguracionCarga"=>$this->cveConfiguracionCarga,
"cveRegion"=>$this->cveRegion,
"topeCarga"=>$this->topeCarga,
"tipoProceso"=>$this->tipoProceso,
"inicia"=>$this->inicia,
"termina"=>$this->termina,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>