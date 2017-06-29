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

class TipossentenciasDTO {
    private $cveTipoSentencia;
    private $desTipoSentencia;
    private $cveInstancia;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getCveTipoSentencia(){
        return $this->cveTipoSentencia;
    }
    public function setCveTipoSentencia($cveTipoSentencia){
        $this->cveTipoSentencia=$cveTipoSentencia;
    }
    public function getDesTipoSentencia(){
        return $this->desTipoSentencia;
    }
    public function setDesTipoSentencia($desTipoSentencia){
        $this->desTipoSentencia=$desTipoSentencia;
    }
    public function getCveInstancia(){
        return $this->cveInstancia;
    }
    public function setCveInstancia($cveInstancia){
        $this->cveInstancia=$cveInstancia;
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
        return array("cveTipoSentencia"=>$this->cveTipoSentencia,
"desTipoSentencia"=>$this->desTipoSentencia,
"cveInstancia"=>$this->cveInstancia,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>