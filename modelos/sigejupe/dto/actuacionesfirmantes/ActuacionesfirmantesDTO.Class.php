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

class ActuacionesfirmantesDTO {
    private $idActuacionFirmante;
    private $cveTipoActuacion;
    private $cveTipoCarpeta;
    private $cveGrupo;
    private $orden;
    private $relacionado;
    private $activo;
    private $fechaActualizacion;
    private $fechaRegistro;
    public function getIdActuacionFirmante(){
        return $this->idActuacionFirmante;
    }
    public function setIdActuacionFirmante($idActuacionFirmante){
        $this->idActuacionFirmante=$idActuacionFirmante;
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
    public function getCveGrupo(){
        return $this->cveGrupo;
    }
    public function setCveGrupo($cveGrupo){
        $this->cveGrupo=$cveGrupo;
    }
    public function getOrden(){
        return $this->orden;
    }
    public function setOrden($orden){
        $this->orden=$orden;
    }
    public function getRelacionado(){
        return $this->relacionado;
    }
    public function setRelacionado($relacionado){
        $this->relacionado=$relacionado;
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
        return array("idActuacionFirmante"=>$this->idActuacionFirmante,
"cveTipoActuacion"=>$this->cveTipoActuacion,
"cveTipoCarpeta"=>$this->cveTipoCarpeta,
"cveGrupo"=>$this->cveGrupo,
"orden"=>$this->orden,
"relacionado"=>$this->relacionado,
"activo"=>$this->activo,
"fechaActualizacion"=>$this->fechaActualizacion,
"fechaRegistro"=>$this->fechaRegistro);
    }
}
?>