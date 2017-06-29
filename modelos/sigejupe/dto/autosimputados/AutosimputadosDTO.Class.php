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

class AutosimputadosDTO {
    private $idAutoImputado;
    private $idActuacion;
    private $idImputadoCarpeta;
    private $Apelacion;
    private $activo;
    public function getIdAutoImputado(){
        return $this->idAutoImputado;
    }
    public function setIdAutoImputado($idAutoImputado){
        $this->idAutoImputado=$idAutoImputado;
    }
    public function getIdActuacion(){
        return $this->idActuacion;
    }
    public function setIdActuacion($idActuacion){
        $this->idActuacion=$idActuacion;
    }
    public function getIdImputadoCarpeta(){
        return $this->idImputadoCarpeta;
    }
    public function setIdImputadoCarpeta($idImputadoCarpeta){
        $this->idImputadoCarpeta=$idImputadoCarpeta;
    }
    public function getApelacion(){
        return $this->Apelacion;
    }
    public function setApelacion($Apelacion){
        $this->Apelacion=$Apelacion;
    }
    public function getActivo(){
        return $this->activo;
    }
    public function setActivo($activo){
        $this->activo=$activo;
    }
    public function toString(){
        return array("idAutoImputado"=>$this->idAutoImputado,
"idActuacion"=>$this->idActuacion,
"idImputadoCarpeta"=>$this->idImputadoCarpeta,
"Apelacion"=>$this->Apelacion,
"activo"=>$this->activo);
    }
}
?>