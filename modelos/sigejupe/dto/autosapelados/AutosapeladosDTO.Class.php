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

class AutosapeladosDTO {
    private $idAutoApelado;
    private $idAutoImputado;
    private $cveSentido;
    private $NumToca;
    private $AnioToca;
    private $CveSala;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;

    public function getIdAutoApelado(){
        return $this->idAutoApelado;
    }
    public function setIdAutoApelado($idAutoApelado){
        $this->idAutoApelado=$idAutoApelado;
    }
    public function getIdAutoImputado(){
        return $this->idAutoImputado;
    }
    public function setIdAutoImputado($idAutoImputado){
        $this->idAutoImputado=$idAutoImputado;
    }
    public function getCveSentido(){
        return $this->cveSentido;
    }
    public function setCveSentido($cveSentido){
        $this->cveSentido=$cveSentido;
    }
    public function getNumToca(){
        return $this->NumToca;
    }
    public function setNumToca($NumToca){
        $this->NumToca=$NumToca;
    }
    public function getAnioToca(){
        return $this->AnioToca;
    }
    public function setAnioToca($AnioToca){
        $this->AnioToca=$AnioToca;
    }
    public function getCveSala(){
        return $this->CveSala;
    }
    public function setCveSala($CveSala){
        $this->CveSala=$CveSala;
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
        return array("idAutoApelado"=>$this->idAutoApelado,
"idAutoImputado"=>$this->idAutoImputado,
"cveSentido"=>$this->cveSentido,
"NumToca"=>$this->NumToca,
"AnioToca"=>$this->AnioToca,
"CveSala"=>$this->CveSala,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>