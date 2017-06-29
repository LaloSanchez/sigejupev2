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

class ControlsalasDTO {
    private $idControlSala;
    private $anio;
    private $cveMes;
    private $cveSala;
    private $totalHoras;
    private $control;
    private $totalAsignados;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdControlSala(){
        return $this->idControlSala;
    }
    public function setIdControlSala($idControlSala){
        $this->idControlSala=$idControlSala;
    }
    public function getAnio(){
        return $this->anio;
    }
    public function setAnio($anio){
        $this->anio=$anio;
    }
    public function getCveMes(){
        return $this->cveMes;
    }
    public function setCveMes($cveMes){
        $this->cveMes=$cveMes;
    }
    public function getCveSala(){
        return $this->cveSala;
    }
    public function setCveSala($cveSala){
        $this->cveSala=$cveSala;
    }
    public function getTotalHoras(){
        return $this->totalHoras;
    }
    public function setTotalHoras($totalHoras){
        $this->totalHoras=$totalHoras;
    }
    public function getControl(){
        return $this->control;
    }
    public function setControl($control){
        $this->control=$control;
    }
    public function getTotalAsignados(){
        return $this->totalAsignados;
    }
    public function setTotalAsignados($totalAsignados){
        $this->totalAsignados=$totalAsignados;
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
        return array("idControlSala"=>$this->idControlSala,
"anio"=>$this->anio,
"cveMes"=>$this->cveMes,
"cveSala"=>$this->cveSala,
"totalHoras"=>$this->totalHoras,
"control"=>$this->control,
"totalAsignados"=>$this->totalAsignados,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>