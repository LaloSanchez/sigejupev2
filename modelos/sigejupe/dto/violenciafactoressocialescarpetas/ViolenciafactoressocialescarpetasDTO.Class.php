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

class ViolenciafactoressocialescarpetasDTO {
    /*
     * Se agrega el parametro activo
     */
    private $idViolenciaFactorSocialCarpeta;
    private $cveFactorCultural;
    private $idViolenciaDeGeneroCarpeta;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdViolenciaFactorSocialCarpeta(){
        return $this->idViolenciaFactorSocialCarpeta;
    }
    public function setIdViolenciaFactorSocialCarpeta($idViolenciaFactorSocialCarpeta){
        $this->idViolenciaFactorSocialCarpeta=$idViolenciaFactorSocialCarpeta;
    }
    public function getCveFactorCultural(){
        return $this->cveFactorCultural;
    }
    public function setCveFactorCultural($cveFactorCultural){
        $this->cveFactorCultural=$cveFactorCultural;
    }
    public function getIdViolenciaDeGeneroCarpeta(){
        return $this->idViolenciaDeGeneroCarpeta;
    }
    public function setIdViolenciaDeGeneroCarpeta($idViolenciaDeGeneroCarpeta){
        $this->idViolenciaDeGeneroCarpeta=$idViolenciaDeGeneroCarpeta;
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
        return array("idViolenciaFactorSocialCarpeta"=>$this->idViolenciaFactorSocialCarpeta,
"cveFactorCultural"=>$this->cveFactorCultural,
"idViolenciaDeGeneroCarpeta"=>$this->idViolenciaDeGeneroCarpeta,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>