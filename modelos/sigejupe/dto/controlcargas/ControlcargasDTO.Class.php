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

class ControlcargasDTO {
    private $idControlCarga;
    private $anioCarga;
    private $cveMes;
    private $cveJuzgado;
    private $idJuzgador;
    private $cveFuncionJuzgador;
    private $totalPuntaje;
    private $totalAsignado;
    private $control;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdControlCarga(){
        return $this->idControlCarga;
    }
    public function setIdControlCarga($idControlCarga){
        $this->idControlCarga=$idControlCarga;
    }
    public function getAnioCarga(){
        return $this->anioCarga;
    }
    public function setAnioCarga($anioCarga){
        $this->anioCarga=$anioCarga;
    }
    public function getCveMes(){
        return $this->cveMes;
    }
    public function setCveMes($cveMes){
        $this->cveMes=$cveMes;
    }
    public function getCveJuzgado(){
        return $this->cveJuzgado;
    }
    public function setCveJuzgado($cveJuzgado){
        $this->cveJuzgado=$cveJuzgado;
    }
    public function getIdJuzgador(){
        return $this->idJuzgador;
    }
    public function setIdJuzgador($idJuzgador){
        $this->idJuzgador=$idJuzgador;
    }
    public function getCveFuncionJuzgador(){
        return $this->cveFuncionJuzgador;
    }
    public function setCveFuncionJuzgador($cveFuncionJuzgador){
        $this->cveFuncionJuzgador=$cveFuncionJuzgador;
    }
    public function getTotalPuntaje(){
        return $this->totalPuntaje;
    }
    public function setTotalPuntaje($totalPuntaje){
        $this->totalPuntaje=$totalPuntaje;
    }
    public function getTotalAsignado(){
        return $this->totalAsignado;
    }
    public function setTotalAsignado($totalAsignado){
        $this->totalAsignado=$totalAsignado;
    }
    public function getControl(){
        return $this->control;
    }
    public function setControl($control){
        $this->control=$control;
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
        return array("idControlCarga"=>$this->idControlCarga,
"anioCarga"=>$this->anioCarga,
"cveMes"=>$this->cveMes,
"cveJuzgado"=>$this->cveJuzgado,
"idJuzgador"=>$this->idJuzgador,
"cveFuncionJuzgador"=>$this->cveFuncionJuzgador,
"totalPuntaje"=>$this->totalPuntaje,
"totalAsignado"=>$this->totalAsignado,
"control"=>$this->control,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>