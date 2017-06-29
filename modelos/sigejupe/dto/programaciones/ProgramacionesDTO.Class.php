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

class ProgramacionesDTO {
    private $idProgramacion;
    private $cveMes;
    private $anio;
    private $fechaInicial;
    private $fechaFinal;
    private $fechaRegistro;
    private $fechaActualizacion;
    private $cveJuzgado;
    private $desMes;
    private $desJuzgado;
    public function getIdProgramacion(){
        return $this->idProgramacion;
    }
    public function setIdProgramacion($idProgramacion){
        $this->idProgramacion=$idProgramacion;
    }
    public function getCveMes(){
        return $this->cveMes;
    }
    public function setCveMes($cveMes){
        $this->cveMes=$cveMes;
    }
    public function getAnio(){
        return $this->anio;
    }
    public function setAnio($anio){
        $this->anio=$anio;
    }
    public function getFechaInicial(){
        return $this->fechaInicial;
    }
    public function setFechaInicial($fechaInicial){
        $this->fechaInicial=$fechaInicial;
    }
    public function getFechaFinal(){
        return $this->fechaFinal;
    }
    public function setFechaFinal($fechaFinal){
        $this->fechaFinal=$fechaFinal;
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
    public function getCveJuzgado(){
        return $this->cveJuzgado;
    }
    public function setCveJuzgado($cveJuzgado){
        $this->cveJuzgado=$cveJuzgado;
    }
    public function setDesMes($desMes){
        $this->desMes=$desMes;
    }
    public function getDesMes(){
        return $this->desMes;
    }
    public function setDesJuzgado($desJuzgado){
        $this->desJuzgado=$desJuzgado;
    }
    public function getDesJuzgado(){
        return $this->desJuzgado;
    }
    public function toString(){
        return array("idProgramacion"=>$this->idProgramacion,
                    "cveMes"=>$this->cveMes,
                    "anio"=>$this->anio,
                    "fechaInicial"=>$this->fechaInicial,
                    "fechaFinal"=>$this->fechaFinal,
                    "fechaRegistro"=>$this->fechaRegistro,
                    "fechaActualizacion"=>$this->fechaActualizacion,
                    "cveJuzgado"=>$this->cveJuzgado,
                    "desMes"=>$this->desMes,
                    "desJuzgado"=>$this->desJuzgado);
    }
}
?>