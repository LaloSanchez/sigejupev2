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

class MagistradosproyectistasDTO {
    private $idMagistradoProyectista;
    private $cveUsuarioMagistrado;
    private $cveUsuarioProyectista;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdMagistradoProyectista(){
        return $this->idMagistradoProyectista;
    }
    public function setIdMagistradoProyectista($idMagistradoProyectista){
        $this->idMagistradoProyectista=$idMagistradoProyectista;
    }
    public function getCveUsuarioMagistrado(){
        return $this->cveUsuarioMagistrado;
    }
    public function setCveUsuarioMagistrado($cveUsuarioMagistrado){
        $this->cveUsuarioMagistrado=$cveUsuarioMagistrado;
    }
    public function getCveUsuarioProyectista(){
        return $this->cveUsuarioProyectista;
    }
    public function setCveUsuarioProyectista($cveUsuarioProyectista){
        $this->cveUsuarioProyectista=$cveUsuarioProyectista;
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
        return array("idMagistradoProyectista"=>$this->idMagistradoProyectista,
"cveUsuarioMagistrado"=>$this->cveUsuarioMagistrado,
"cveUsuarioProyectista"=>$this->cveUsuarioProyectista,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>