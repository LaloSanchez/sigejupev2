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

class GruposmuestrasjuzgadosDTO {
    private $cveGrupoMuestraJuzgado;
    private $cveJuzgado;
    private $cveGrupoMuestra;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getCveGrupoMuestraJuzgado(){
        return $this->cveGrupoMuestraJuzgado;
    }
    public function setCveGrupoMuestraJuzgado($cveGrupoMuestraJuzgado){
        $this->cveGrupoMuestraJuzgado=$cveGrupoMuestraJuzgado;
    }
    public function getCveJuzgado(){
        return $this->cveJuzgado;
    }
    public function setCveJuzgado($cveJuzgado){
        $this->cveJuzgado=$cveJuzgado;
    }
    public function getCveGrupoMuestra(){
        return $this->cveGrupoMuestra;
    }
    public function setCveGrupoMuestra($cveGrupoMuestra){
        $this->cveGrupoMuestra=$cveGrupoMuestra;
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
        return array("cveGrupoMuestraJuzgado"=>$this->cveGrupoMuestraJuzgado,
"cveJuzgado"=>$this->cveJuzgado,
"cveGrupoMuestra"=>$this->cveGrupoMuestra,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>