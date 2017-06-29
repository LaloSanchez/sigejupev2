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

class ArbolDTO {
    private $idArbol;
    private $idPadre;
    private $idHijo;
    private $cveTipoCarpeta;
    private $cveTipoActuacion;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdArbol(){
        return $this->idArbol;
    }
    public function setIdArbol($idArbol){
        $this->idArbol=$idArbol;
    }
    public function getIdPadre(){
        return $this->idPadre;
    }
    public function setIdPadre($idPadre){
        $this->idPadre=$idPadre;
    }
    public function getIdHijo(){
        return $this->idHijo;
    }
    public function setIdHijo($idHijo){
        $this->idHijo=$idHijo;
    }
    public function getCveTipoCarpeta(){
        return $this->cveTipoCarpeta;
    }
    public function setCveTipoCarpeta($cveTipoCarpeta){
        $this->cveTipoCarpeta=$cveTipoCarpeta;
    }
    public function getCveTipoActuacion(){
        return $this->cveTipoActuacion;
    }
    public function setCveTipoActuacion($cveTipoActuacion){
        $this->cveTipoActuacion=$cveTipoActuacion;
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
        return array("idArbol"=>$this->idArbol,
"idPadre"=>$this->idPadre,
"idHijo"=>$this->idHijo,
"cveTipoCarpeta"=>$this->cveTipoCarpeta,
"cveTipoActuacion"=>$this->cveTipoActuacion,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>