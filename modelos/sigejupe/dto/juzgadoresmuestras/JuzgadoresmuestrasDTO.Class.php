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

class JuzgadoresmuestrasDTO {
    private $idJuzgadorMuestra;
    private $idSolicitudMuestra;
    private $idJuzgador;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdJuzgadorMuestra(){
        return $this->idJuzgadorMuestra;
    }
    public function setIdJuzgadorMuestra($idJuzgadorMuestra){
        $this->idJuzgadorMuestra=$idJuzgadorMuestra;
    }
    public function getIdSolicitudMuestra(){
        return $this->idSolicitudMuestra;
    }
    public function setIdSolicitudMuestra($idSolicitudMuestra){
        $this->idSolicitudMuestra=$idSolicitudMuestra;
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
        return array("idJuzgadorMuestra"=>$this->idJuzgadorMuestra,
"idSolicitudMuestra"=>$this->idSolicitudMuestra,
"idJuzgador"=>$this->idJuzgador,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>