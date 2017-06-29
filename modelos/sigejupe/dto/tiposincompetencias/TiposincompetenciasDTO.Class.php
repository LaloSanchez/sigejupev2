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

class TiposincompetenciasDTO {
    private $cveTipoIncompetencia;
    private $desTipoIncompetencia;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getCveTipoIncompetencia(){
        return $this->cveTipoIncompetencia;
    }
    public function setCveTipoIncompetencia($cveTipoIncompetencia){
        $this->cveTipoIncompetencia=$cveTipoIncompetencia;
    }
    public function getDesTipoIncompetencia(){
        return $this->desTipoIncompetencia;
    }
    public function setDesTipoIncompetencia($desTipoIncompetencia){
        $this->desTipoIncompetencia=$desTipoIncompetencia;
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
        return array("cveTipoIncompetencia"=>$this->cveTipoIncompetencia,
"desTipoIncompetencia"=>$this->desTipoIncompetencia,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>