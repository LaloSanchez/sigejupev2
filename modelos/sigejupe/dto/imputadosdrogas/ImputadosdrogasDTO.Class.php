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

class ImputadosdrogasDTO {
    private $idImputadoDroga;
    private $idImputadoSolicitud;
    private $cveDroga;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdImputadoDroga(){
        return $this->idImputadoDroga;
    }
    public function setIdImputadoDroga($idImputadoDroga){
        $this->idImputadoDroga=$idImputadoDroga;
    }
    public function getIdImputadoSolicitud(){
        return $this->idImputadoSolicitud;
    }
    public function setIdImputadoSolicitud($idImputadoSolicitud){
        $this->idImputadoSolicitud=$idImputadoSolicitud;
    }
    public function getCveDroga(){
        return $this->cveDroga;
    }
    public function setCveDroga($cveDroga){
        $this->cveDroga=$cveDroga;
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
        return array("idImputadoDroga"=>$this->idImputadoDroga,
"idImputadoSolicitud"=>$this->idImputadoSolicitud,
"cveDroga"=>$this->cveDroga,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>