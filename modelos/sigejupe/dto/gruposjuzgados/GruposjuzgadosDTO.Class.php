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

class GruposjuzgadosDTO {
    private $cveGrupoJuzgado;
    private $cveJuzgado;
    private $cveGrupoCateo;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getCveGrupoJuzgado(){
        return $this->cveGrupoJuzgado;
    }
    public function setCveGrupoJuzgado($cveGrupoJuzgado){
        $this->cveGrupoJuzgado=$cveGrupoJuzgado;
    }
    public function getCveJuzgado(){
        return $this->cveJuzgado;
    }
    public function setCveJuzgado($cveJuzgado){
        $this->cveJuzgado=$cveJuzgado;
    }
    public function getCveGrupoCateo(){
        return $this->cveGrupoCateo;
    }
    public function setCveGrupoCateo($cveGrupoCateo){
        $this->cveGrupoCateo=$cveGrupoCateo;
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
        return array("cveGrupoJuzgado"=>$this->cveGrupoJuzgado,
"cveJuzgado"=>$this->cveJuzgado,
"cveGrupoCateo"=>$this->cveGrupoCateo,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>