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

class NacionalidadesofendidoscarpetasDTO {
    private $idNacionalidadOfendidoCarpeta;
    private $cvePais;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    private $idOfendidoCarpeta;
    public function getIdNacionalidadOfendidoCarpeta(){
        return $this->idNacionalidadOfendidoCarpeta;
    }
    public function setIdNacionalidadOfendidoCarpeta($idNacionalidadOfendidoCarpeta){
        $this->idNacionalidadOfendidoCarpeta=$idNacionalidadOfendidoCarpeta;
    }
    public function getCvePais(){
        return $this->cvePais;
    }
    public function setCvePais($cvePais){
        $this->cvePais=$cvePais;
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
    public function getIdOfendidoCarpeta(){
        return $this->idOfendidoCarpeta;
    }
    public function setIdOfendidoCarpeta($idOfendidoCarpeta){
        $this->idOfendidoCarpeta=$idOfendidoCarpeta;
    }
    public function toString(){
        return array("idNacionalidadOfendidoCarpeta"=>$this->idNacionalidadOfendidoCarpeta,
"cvePais"=>$this->cvePais,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion,
"idOfendidoCarpeta"=>$this->idOfendidoCarpeta);
    }
}
?>