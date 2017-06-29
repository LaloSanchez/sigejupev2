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

class BitacorawsDTO {
    private $idBitacoraws;
    private $cveAccionws;
    private $descEstatusBitacoraws;
    private $observacionesOrigen;
    private $observacionesDestino;
    private $hrefOrigen;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdBitacoraws(){
        return $this->idBitacoraws;
    }
    public function setIdBitacoraws($idBitacoraws){
        $this->idBitacoraws=$idBitacoraws;
    }
    public function getCveAccionws(){
        return $this->cveAccionws;
    }
    public function setCveAccionws($cveAccionws){
        $this->cveAccionws=$cveAccionws;
    }
    public function getDescEstatusBitacoraws(){
        return $this->descEstatusBitacoraws;
    }
    public function setDescEstatusBitacoraws($descEstatusBitacoraws){
        $this->descEstatusBitacoraws=$descEstatusBitacoraws;
    }
    public function getObservacionesOrigen(){
        return $this->observacionesOrigen;
    }
    public function setObservacionesOrigen($observacionesOrigen){
        $this->observacionesOrigen=$observacionesOrigen;
    }
    public function getObservacionesDestino(){
        return $this->observacionesDestino;
    }
    public function setObservacionesDestino($observacionesDestino){
        $this->observacionesDestino=$observacionesDestino;
    }
    public function getHrefOrigen(){
        return $this->hrefOrigen;
    }
    public function setHrefOrigen($hrefOrigen){
        $this->hrefOrigen=$hrefOrigen;
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
        return array("idBitacoraws"=>$this->idBitacoraws,
"cveAccionws"=>$this->cveAccionws,
"descEstatusBitacoraws"=>$this->descEstatusBitacoraws,
"observacionesOrigen"=>$this->observacionesOrigen,
"observacionesDestino"=>$this->observacionesDestino,
"hrefOrigen"=>$this->hrefOrigen,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>