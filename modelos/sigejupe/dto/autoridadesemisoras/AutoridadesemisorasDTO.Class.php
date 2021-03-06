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

class AutoridadesemisorasDTO {
    private $cveAutoridadEmisora;
    private $desAutoridadEmisora;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getCveAutoridadEmisora(){
        return $this->cveAutoridadEmisora;
    }
    public function setCveAutoridadEmisora($cveAutoridadEmisora){
        $this->cveAutoridadEmisora=$cveAutoridadEmisora;
    }
    public function getDesAutoridadEmisora(){
        return $this->desAutoridadEmisora;
    }
    public function setDesAutoridadEmisora($desAutoridadEmisora){
        $this->desAutoridadEmisora=$desAutoridadEmisora;
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
        return array("cveAutoridadEmisora"=>$this->cveAutoridadEmisora,
"desAutoridadEmisora"=>$this->desAutoridadEmisora,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>