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

class ConfiguracionesjuzgadoresDTO {
    private $idConfiguracionJuzgador;
    private $IdHorarioJuzgador;
    private $IdJuzgador;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdConfiguracionJuzgador(){
        return $this->idConfiguracionJuzgador;
    }
    public function setIdConfiguracionJuzgador($idConfiguracionJuzgador){
        $this->idConfiguracionJuzgador=$idConfiguracionJuzgador;
    }
    public function getIdHorarioJuzgador(){
        return $this->IdHorarioJuzgador;
    }
    public function setIdHorarioJuzgador($IdHorarioJuzgador){
        $this->IdHorarioJuzgador=$IdHorarioJuzgador;
    }
    public function getIdJuzgador(){
        return $this->IdJuzgador;
    }
    public function setIdJuzgador($IdJuzgador){
        $this->IdJuzgador=$IdJuzgador;
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
        return array("idConfiguracionJuzgador"=>$this->idConfiguracionJuzgador,
"IdHorarioJuzgador"=>$this->IdHorarioJuzgador,
"IdJuzgador"=>$this->IdJuzgador,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>