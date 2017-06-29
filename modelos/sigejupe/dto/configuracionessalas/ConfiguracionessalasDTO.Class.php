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

class ConfiguracionessalasDTO {
    private $idConfiguracionSala;
    private $cveHorario;
    private $cveSala;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    private $desSala;
    public function getIdConfiguracionSala(){
        return $this->idConfiguracionSala;
    }
    public function setIdConfiguracionSala($idConfiguracionSala){
        $this->idConfiguracionSala=$idConfiguracionSala;
    }
    public function getCveHorario(){
        return $this->cveHorario;
    }
    public function setCveHorario($cveHorario){
        $this->cveHorario=$cveHorario;
    }
    public function getCveSala(){
        return $this->cveSala;
    }
    public function setCveSala($cveSala){
        $this->cveSala=$cveSala;
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
    public function getDesSala(){
        return $this->desSala;
    }
    public function setDesSala($desSala){
        $this->desSala = $desSala;
    }
    public function toString(){
        return array("idConfiguracionSala"=>$this->idConfiguracionSala,
                    "cveHorario"=>$this->cveHorario,
                    "cveSala"=>$this->cveSala,
                    "activo"=>$this->activo,
                    "fechaRegistro"=>$this->fechaRegistro,
                    "fechaActualizacion"=>$this->fechaActualizacion,
                    "desSala"=>$this->desSala);
    }
}
?>