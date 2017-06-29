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

class ExhortosDTO {
    private $idExhorto;
    private $IdExhortoGenerado;
    private $numExhorto;
    private $aniExhorto;
    private $cveJuzgado;
    private $cveEstadoProcedencia;
    private $cveJuzgadoProcedencia;
    private $juzgadoProcedencia;
    private $carpetaInv;
    private $nuc;
    private $numero;
    private $anio;
    private $cveTipoCarpeta;
    private $numOficio;
    private $aniOficio;
    private $fecOficio;
    private $fecTermino;
    private $textoExhorto;
    private $telefono;
    private $correo;
    private $facultadoAcordar;
    private $urldocs;
    private $sintesis;
    private $observaciones;
    private $cveConsignacion;
    private $cveEstatusExhorto;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdExhorto(){
        return $this->idExhorto;
    }
    public function setIdExhorto($idExhorto){
        $this->idExhorto=$idExhorto;
    }
    public function getIdExhortoGenerado(){
        return $this->IdExhortoGenerado;
    }
    public function setIdExhortoGenerado($IdExhortoGenerado){
        $this->IdExhortoGenerado=$IdExhortoGenerado;
    }
    public function getNumExhorto(){
        return $this->numExhorto;
    }
    public function setNumExhorto($numExhorto){
        $this->numExhorto=$numExhorto;
    }
    public function getAniExhorto(){
        return $this->aniExhorto;
    }
    public function setAniExhorto($aniExhorto){
        $this->aniExhorto=$aniExhorto;
    }
    public function getCveJuzgado(){
        return $this->cveJuzgado;
    }
    public function setCveJuzgado($cveJuzgado){
        $this->cveJuzgado=$cveJuzgado;
    }
    public function getCveEstadoProcedencia(){
        return $this->cveEstadoProcedencia;
    }
    public function setCveEstadoProcedencia($cveEstadoProcedencia){
        $this->cveEstadoProcedencia=$cveEstadoProcedencia;
    }
    public function getCveJuzgadoProcedencia(){
        return $this->cveJuzgadoProcedencia;
    }
    public function setCveJuzgadoProcedencia($cveJuzgadoProcedencia){
        $this->cveJuzgadoProcedencia=$cveJuzgadoProcedencia;
    }
    public function getJuzgadoProcedencia(){
        return $this->juzgadoProcedencia;
    }
    public function setJuzgadoProcedencia($juzgadoProcedencia){
        $this->juzgadoProcedencia=$juzgadoProcedencia;
    }
    public function getCarpetaInv(){
        return $this->carpetaInv;
    }
    public function setCarpetaInv($carpetaInv){
        $this->carpetaInv=$carpetaInv;
    }
    public function getNuc(){
        return $this->nuc;
    }
    public function setNuc($nuc){
        $this->nuc=$nuc;
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
    public function getCveTipoCarpeta(){
        return $this->cveTipoCarpeta;
    }
    public function setCveTipoCarpeta($cveTipoCarpeta){
        $this->cveTipoCarpeta=$cveTipoCarpeta;
    }
    public function getNumOficio(){
        return $this->numOficio;
    }
    public function setNumOficio($numOficio){
        $this->numOficio=$numOficio;
    }
    public function getAniOficio(){
        return $this->aniOficio;
    }
    public function setAniOficio($aniOficio){
        $this->aniOficio=$aniOficio;
    }
    public function getFecOficio(){
        return $this->fecOficio;
    }
    public function setFecOficio($fecOficio){
        $this->fecOficio=$fecOficio;
    }
    public function getFecTermino(){
        return $this->fecTermino;
    }
    public function setFecTermino($fecTermino){
        $this->fecTermino=$fecTermino;
    }
    public function getTextoExhorto(){
        return $this->textoExhorto;
    }
    public function setTextoExhorto($textoExhorto){
        $this->textoExhorto=$textoExhorto;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function setTelefono($telefono){
        $this->telefono=$telefono;
    }
    public function getCorreo(){
        return $this->correo;
    }
    public function setCorreo($correo){
        $this->correo=$correo;
    }
    public function getFacultadoAcordar(){
        return $this->facultadoAcordar;
    }
    public function setFacultadoAcordar($facultadoAcordar){
        $this->facultadoAcordar=$facultadoAcordar;
    }
    public function getUrldocs(){
        return $this->urldocs;
    }
    public function setUrldocs($urldocs){
        $this->urldocs=$urldocs;
    }
    public function getSintesis(){
        return $this->sintesis;
    }
    public function setSintesis($sintesis){
        $this->sintesis=$sintesis;
    }
    public function getObservaciones(){
        return $this->observaciones;
    }
    public function setObservaciones($observaciones){
        $this->observaciones=$observaciones;
    }
    public function getCveConsignacion(){
        return $this->cveConsignacion;
    }
    public function setCveConsignacion($cveConsignacion){
        $this->cveConsignacion=$cveConsignacion;
    }
    public function getCveEstatusExhorto(){
        return $this->cveEstatusExhorto;
    }
    public function setCveEstatusExhorto($cveEstatusExhorto){
        $this->cveEstatusExhorto=$cveEstatusExhorto;
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
        return array("idExhorto"=>$this->idExhorto,
"IdExhortoGenerado"=>$this->IdExhortoGenerado,
"numExhorto"=>$this->numExhorto,
"aniExhorto"=>$this->aniExhorto,
"cveJuzgado"=>$this->cveJuzgado,
"cveEstadoProcedencia"=>$this->cveEstadoProcedencia,
"cveJuzgadoProcedencia"=>$this->cveJuzgadoProcedencia,
"juzgadoProcedencia"=>$this->juzgadoProcedencia,
"carpetaInv"=>$this->carpetaInv,
"nuc"=>$this->nuc,
"numero"=>$this->numero,
"anio"=>$this->anio,
"cveTipoCarpeta"=>$this->cveTipoCarpeta,
"numOficio"=>$this->numOficio,
"aniOficio"=>$this->aniOficio,
"fecOficio"=>$this->fecOficio,
"fecTermino"=>$this->fecTermino,
"textoExhorto"=>$this->textoExhorto,
"telefono"=>$this->telefono,
"correo"=>$this->correo,
"facultadoAcordar"=>$this->facultadoAcordar,
"urldocs"=>$this->urldocs,
"sintesis"=>$this->sintesis,
"observaciones"=>$this->observaciones,
"cveConsignacion"=>$this->cveConsignacion,
"cveEstatusExhorto"=>$this->cveEstatusExhorto,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>