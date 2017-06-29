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

class BeneficiosamparadosDTO {
    private $idBeneficioAmparado;
    private $idBeneficioES;
    private $NumAmparo;
    private $AniAmparo;
    private $CveJuzgado;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdBeneficioAmparado(){
        return $this->idBeneficioAmparado;
    }
    public function setIdBeneficioAmparado($idBeneficioAmparado){
        $this->idBeneficioAmparado=$idBeneficioAmparado;
    }
    public function getIdBeneficioES(){
        return $this->idBeneficioES;
    }
    public function setIdBeneficioES($idBeneficioES){
        $this->idBeneficioES=$idBeneficioES;
    }
    public function getNumAmparo(){
        return $this->NumAmparo;
    }
    public function setNumAmparo($NumAmparo){
        $this->NumAmparo=$NumAmparo;
    }
    public function getAniAmparo(){
        return $this->AniAmparo;
    }
    public function setAniAmparo($AniAmparo){
        $this->AniAmparo=$AniAmparo;
    }
    public function getCveJuzgado(){
        return $this->CveJuzgado;
    }
    public function setCveJuzgado($CveJuzgado){
        $this->CveJuzgado=$CveJuzgado;
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
        return array("idBeneficioAmparado"=>$this->idBeneficioAmparado,
"idBeneficioES"=>$this->idBeneficioES,
"NumAmparo"=>$this->NumAmparo,
"AniAmparo"=>$this->AniAmparo,
"CveJuzgado"=>$this->CveJuzgado,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>