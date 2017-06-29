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

class HomicidiosdolososDTO {
    private $cveHomicidioDoloso;
    private $desHomicidioDoloso;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getCveHomicidioDoloso(){
        return $this->cveHomicidioDoloso;
    }
    public function setCveHomicidioDoloso($cveHomicidioDoloso){
        $this->cveHomicidioDoloso=$cveHomicidioDoloso;
    }
    public function getDesHomicidioDoloso(){
        return $this->desHomicidioDoloso;
    }
    public function setDesHomicidioDoloso($desHomicidioDoloso){
        $this->desHomicidioDoloso=$desHomicidioDoloso;
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
        return array("cveHomicidioDoloso"=>$this->cveHomicidioDoloso,
"desHomicidioDoloso"=>$this->desHomicidioDoloso,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>