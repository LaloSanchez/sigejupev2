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

class JuzgadorescateosDTO {
    private $idJuzgadorCateo;
    private $idSolicitudCateo;
    private $idJuzgador;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdJuzgadorCateo(){
        return $this->idJuzgadorCateo;
    }
    public function setIdJuzgadorCateo($idJuzgadorCateo){
        $this->idJuzgadorCateo=$idJuzgadorCateo;
    }
    public function getIdSolicitudCateo(){
        return $this->idSolicitudCateo;
    }
    public function setIdSolicitudCateo($idSolicitudCateo){
        $this->idSolicitudCateo=$idSolicitudCateo;
    }
    public function getIdJuzgador(){
        return $this->idJuzgador;
    }
    public function setIdJuzgador($idJuzgador){
        $this->idJuzgador=$idJuzgador;
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
        return array("idJuzgadorCateo"=>$this->idJuzgadorCateo,
"idSolicitudCateo"=>$this->idSolicitudCateo,
"idJuzgador"=>$this->idJuzgador,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>