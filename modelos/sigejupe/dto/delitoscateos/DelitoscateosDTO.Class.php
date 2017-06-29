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

class DelitoscateosDTO {
    private $idDelitoCateo;
    private $idSolicitudCateo;
    private $cveDelito;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdDelitoCateo(){
        return $this->idDelitoCateo;
    }
    public function setIdDelitoCateo($idDelitoCateo){
        $this->idDelitoCateo=$idDelitoCateo;
    }
    public function getIdSolicitudCateo(){
        return $this->idSolicitudCateo;
    }
    public function setIdSolicitudCateo($idSolicitudCateo){
        $this->idSolicitudCateo=$idSolicitudCateo;
    }
    public function getCveDelito(){
        return $this->cveDelito;
    }
    public function setCveDelito($cveDelito){
        $this->cveDelito=$cveDelito;
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
        return array("idDelitoCateo"=>$this->idDelitoCateo,
"idSolicitudCateo"=>$this->idSolicitudCateo,
"cveDelito"=>$this->cveDelito,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>