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

class ActuacionesfirmadasDTO {
    private $idActuacionFirmada;
    private $idReferencia;
    private $cveTipoActuacion;
    private $cveTipoCarpeta;
    private $cveUsuario;
    private $cveGrupo;
    private $fileNameFirma;
    private $transferenciaFirma;
    private $tokenFirma;
    private $idRegistroFirma;
    private $activo;
    private $fechaActualizacion;
    private $fechaRegistro;
    public function getIdActuacionFirmada(){
        return $this->idActuacionFirmada;
    }
    public function setIdActuacionFirmada($idActuacionFirmada){
        $this->idActuacionFirmada=$idActuacionFirmada;
    }
    public function getIdReferencia(){
        return $this->idReferencia;
    }
    public function setIdReferencia($idReferencia){
        $this->idReferencia=$idReferencia;
    }
    public function getCveTipoActuacion(){
        return $this->cveTipoActuacion;
    }
    public function setCveTipoActuacion($cveTipoActuacion){
        $this->cveTipoActuacion=$cveTipoActuacion;
    }
    public function getCveTipoCarpeta(){
        return $this->cveTipoCarpeta;
    }
    public function setCveTipoCarpeta($cveTipoCarpeta){
        $this->cveTipoCarpeta=$cveTipoCarpeta;
    }
    public function getCveUsuario(){
        return $this->cveUsuario;
    }
    public function setCveUsuario($cveUsuario){
        $this->cveUsuario=$cveUsuario;
    }
    public function getCveGrupo(){
        return $this->cveGrupo;
    }
    public function setCveGrupo($cveGrupo){
        $this->cveGrupo=$cveGrupo;
    }
    public function getFileNameFirma(){
        return $this->fileNameFirma;
    }
    public function setFileNameFirma($fileNameFirma){
        $this->fileNameFirma=$fileNameFirma;
    }
    public function getTransferenciaFirma(){
        return $this->transferenciaFirma;
    }
    public function setTransferenciaFirma($transferenciaFirma){
        $this->transferenciaFirma=$transferenciaFirma;
    }
    public function getTokenFirma(){
        return $this->tokenFirma;
    }
    public function setTokenFirma($tokenFirma){
        $this->tokenFirma=$tokenFirma;
    }
    public function getIdRegistroFirma(){
        return $this->idRegistroFirma;
    }
    public function setIdRegistroFirma($idRegistroFirma){
        $this->idRegistroFirma=$idRegistroFirma;
    }
    public function getActivo(){
        return $this->activo;
    }
    public function setActivo($activo){
        $this->activo=$activo;
    }
    public function getFechaActualizacion(){
        return $this->fechaActualizacion;
    }
    public function setFechaActualizacion($fechaActualizacion){
        $this->fechaActualizacion=$fechaActualizacion;
    }
    public function getFechaRegistro(){
        return $this->fechaRegistro;
    }
    public function setFechaRegistro($fechaRegistro){
        $this->fechaRegistro=$fechaRegistro;
    }
    public function toString(){
        return array("idActuacionFirmada"=>$this->idActuacionFirmada,
"idReferencia"=>$this->idReferencia,
"cveTipoActuacion"=>$this->cveTipoActuacion,
"cveTipoCarpeta"=>$this->cveTipoCarpeta,
"cveUsuario"=>$this->cveUsuario,
"cveGrupo"=>$this->cveGrupo,
"fileNameFirma"=>$this->fileNameFirma,
"transferenciaFirma"=>$this->transferenciaFirma,
"tokenFirma"=>$this->tokenFirma,
"idRegistroFirma"=>$this->idRegistroFirma,
"activo"=>$this->activo,
"fechaActualizacion"=>$this->fechaActualizacion,
"fechaRegistro"=>$this->fechaRegistro);
    }
}
?>