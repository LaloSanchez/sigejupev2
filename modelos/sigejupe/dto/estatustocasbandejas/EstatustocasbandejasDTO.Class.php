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

class EstatustocasbandejasDTO {
    private $idEstatusTocaBandeja;
    private $idCarpetaJudicial;
    private $recibido;
    private $cveUsuario;
    private $origen;
    private $cveTipoCarpeta;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdEstatusTocaBandeja(){
        return $this->idEstatusTocaBandeja;
    }
    public function setIdEstatusTocaBandeja($idEstatusTocaBandeja){
        $this->idEstatusTocaBandeja=$idEstatusTocaBandeja;
    }
    public function getIdCarpetaJudicial(){
        return $this->idCarpetaJudicial;
    }
    public function setIdCarpetaJudicial($idCarpetaJudicial){
        $this->idCarpetaJudicial=$idCarpetaJudicial;
    }
    public function getRecibido(){
        return $this->recibido;
    }
    public function setRecibido($recibido){
        $this->recibido=$recibido;
    }
    public function getCveUsuario(){
        return $this->cveUsuario;
    }
    public function setCveUsuario($cveUsuario){
        $this->cveUsuario=$cveUsuario;
    }
    public function getOrigen(){
        return $this->origen;
    }
    public function setOrigen($origen){
        $this->origen=$origen;
    }
    public function getCveTipoCarpeta(){
        return $this->cveTipoCarpeta;
    }
    public function setCveTipoCarpeta($cveTipoCarpeta){
        $this->cveTipoCarpeta=$cveTipoCarpeta;
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
        return array("idEstatusTocaBandeja"=>$this->idEstatusTocaBandeja,
"idCarpetaJudicial"=>$this->idCarpetaJudicial,
"recibido"=>$this->recibido,
"cveUsuario"=>$this->cveUsuario,
"origen"=>$this->origen,
"cveTipoCarpeta"=>$this->cveTipoCarpeta,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>