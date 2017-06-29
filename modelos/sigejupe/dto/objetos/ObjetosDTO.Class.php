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

class ObjetosDTO {
    private $idObjeto;
    private $idSolicitudCateo;
    private $desObjeto;
    private $domicilio;
    private $fechaRegistro;
    private $fechaActualizacion;
    private $cveOrigen;
    public function getIdObjeto(){
        return $this->idObjeto;
    }
    public function setIdObjeto($idObjeto){
        $this->idObjeto=$idObjeto;
    }
    public function getIdSolicitudCateo(){
        return $this->idSolicitudCateo;
    }
    public function setIdSolicitudCateo($idSolicitudCateo){
        $this->idSolicitudCateo=$idSolicitudCateo;
    }
    public function getDesObjeto(){
        return $this->desObjeto;
    }
    public function setDesObjeto($desObjeto){
        $this->desObjeto=$desObjeto;
    }
    public function getDomicilio(){
        return $this->domicilio;
    }
    public function setDomicilio($domicilio){
        $this->domicilio=$domicilio;
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
    public function getCveOrigen(){
        return $this->cveOrigen;
    }
    public function setCveOrigen($cveOrigen){
        $this->cveOrigen=$cveOrigen;
    }
    public function toString(){
        return array("idObjeto"=>$this->idObjeto,
"idSolicitudCateo"=>$this->idSolicitudCateo,
"desObjeto"=>$this->desObjeto,
"domicilio"=>$this->domicilio,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion,
"cveOrigen"=>$this->cveOrigen);
    }
}
?>