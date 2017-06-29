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

class AutoresaudienciasDTO {
    private $idAutorAudiencia;
    private $cveCatAudiencia;
    private $cveGrupo;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdAutorAudiencia(){
        return $this->idAutorAudiencia;
    }
    public function setIdAutorAudiencia($idAutorAudiencia){
        $this->idAutorAudiencia=$idAutorAudiencia;
    }
    public function getCveCatAudiencia(){
        return $this->cveCatAudiencia;
    }
    public function setCveCatAudiencia($cveCatAudiencia){
        $this->cveCatAudiencia=$cveCatAudiencia;
    }
    public function getCveGrupo(){
        return $this->cveGrupo;
    }
    public function setCveGrupo($cveGrupo){
        $this->cveGrupo=$cveGrupo;
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
        return array("idAutorAudiencia"=>$this->idAutorAudiencia,
"cveCatAudiencia"=>$this->cveCatAudiencia,
"cveGrupo"=>$this->cveGrupo,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>