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

class IncompetenciasDTO {
    private $idIncompetencias;
    private $idActuacion;
    private $cveTipoIncompetencia;
    private $cveJuzgadoOrigen;
    private $cveTipoCarpetaOrigen;
    private $numero;
    private $anio;
    private $otroTipoCarpetaOrigen;
    private $otroJuzgadoOrigen;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdIncompetencias(){
        return $this->idIncompetencias;
    }
    public function setIdIncompetencias($idIncompetencias){
        $this->idIncompetencias=$idIncompetencias;
    }
    public function getIdActuacion(){
        return $this->idActuacion;
    }
    public function setIdActuacion($idActuacion){
        $this->idActuacion=$idActuacion;
    }
    public function getCveTipoIncompetencia(){
        return $this->cveTipoIncompetencia;
    }
    public function setCveTipoIncompetencia($cveTipoIncompetencia){
        $this->cveTipoIncompetencia=$cveTipoIncompetencia;
    }
    public function getCveJuzgadoOrigen(){
        return $this->cveJuzgadoOrigen;
    }
    public function setCveJuzgadoOrigen($cveJuzgadoOrigen){
        $this->cveJuzgadoOrigen=$cveJuzgadoOrigen;
    }
    public function getCveTipoCarpetaOrigen(){
        return $this->cveTipoCarpetaOrigen;
    }
    public function setCveTipoCarpetaOrigen($cveTipoCarpetaOrigen){
        $this->cveTipoCarpetaOrigen=$cveTipoCarpetaOrigen;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($numero){
        $this->numero=$numero;
    }
    public function getAnio(){
        return $this->anio;
    }
    public function setAnio($anio){
        $this->anio=$anio;
    }
    public function getOtroTipoCarpetaOrigen(){
        return $this->otroTipoCarpetaOrigen;
    }
    public function setOtroTipoCarpetaOrigen($otroTipoCarpetaOrigen){
        $this->otroTipoCarpetaOrigen=$otroTipoCarpetaOrigen;
    }
    public function getOtroJuzgadoOrigen(){
        return $this->otroJuzgadoOrigen;
    }
    public function setOtroJuzgadoOrigen($otroJuzgadoOrigen){
        $this->otroJuzgadoOrigen=$otroJuzgadoOrigen;
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
        return array("idIncompetencias"=>$this->idIncompetencias,
"idActuacion"=>$this->idActuacion,
"cveTipoIncompetencia"=>$this->cveTipoIncompetencia,
"cveJuzgadoOrigen"=>$this->cveJuzgadoOrigen,
"cveTipoCarpetaOrigen"=>$this->cveTipoCarpetaOrigen,
"numero"=>$this->numero,
"anio"=>$this->anio,
"otroTipoCarpetaOrigen"=>$this->otroTipoCarpetaOrigen,
"otroJuzgadoOrigen"=>$this->otroJuzgadoOrigen,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>