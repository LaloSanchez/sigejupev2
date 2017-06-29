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

class JuzgadorescarpetasDTO {
    private $idJuzgadorCarpeta;
    private $idJuzgador;
    private $idCarpetaJudicial;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdJuzgadorCarpeta(){
        return $this->idJuzgadorCarpeta;
    }
    public function setIdJuzgadorCarpeta($idJuzgadorCarpeta){
        $this->idJuzgadorCarpeta=$idJuzgadorCarpeta;
    }
    public function getIdJuzgador(){
        return $this->idJuzgador;
    }
    public function setIdJuzgador($idJuzgador){
        $this->idJuzgador=$idJuzgador;
    }
    public function getIdCarpetaJudicial(){
        return $this->idCarpetaJudicial;
    }
    public function setIdCarpetaJudicial($idCarpetaJudicial){
        $this->idCarpetaJudicial=$idCarpetaJudicial;
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
        return array("idJuzgadorCarpeta"=>$this->idJuzgadorCarpeta,
"idJuzgador"=>$this->idJuzgador,
"idCarpetaJudicial"=>$this->idCarpetaJudicial,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>