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

class OrdenesapeladasDTO {
    private $idOrdenApelada;
    private $idOrdenImputado;
    private $cveSentido;
    private $fechaRegistro;
    private $fechaActualizacion;
    private $activo;
    public function getIdOrdenApelada(){
        return $this->idOrdenApelada;
    }
    public function setIdOrdenApelada($idOrdenApelada){
        $this->idOrdenApelada=$idOrdenApelada;
    }
    public function getIdOrdenImputado(){
        return $this->idOrdenImputado;
    }
    public function setIdOrdenImputado($idOrdenImputado){
        $this->idOrdenImputado=$idOrdenImputado;
    }
    public function getCveSentido(){
        return $this->cveSentido;
    }
    public function setCveSentido($cveSentido){
        $this->cveSentido=$cveSentido;
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
    public function getActivo(){
        return $this->activo;
    }
    public function setActivo($activo){
        $this->activo=$activo;
    }
    public function getNumToca(){
        return $this->numtoca;
    }
    public function setNumToca($numtoca){
        $this->numtoca=$numtoca;
    }
    public function getAnioToca(){
        return $this->aniotoca;
    }
    public function setAnioToca($aniotoca){
        $this->aniotoca=$aniotoca;
    }
    public function getCveSala(){
        return $this->cvesala;
    }
    public function setCveSala($cvesala){
        $this->cvesala=$cvesala;
    }
    public function toString(){
        return array("idOrdenApelada"=>$this->idOrdenApelada,
"idOrdenImputado"=>$this->idOrdenImputado,
"cveSentido"=>$this->cveSentido,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion,
"activo"=>$this->activo);
    }
}
?>