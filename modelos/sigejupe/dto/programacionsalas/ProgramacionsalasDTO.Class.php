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

class ProgramacionsalasDTO {
    private $idDisponibilidadSala;
    private $fechaInicio;
    private $fechaTermino;
    private $cveSala;
    private $idProgramacion;
    private $idAtencionSala;
    private $desSala;
    private $cveJuzgado;
    private $cveCondicion;
    private $desCondicion;
    private $cveHorario;
    private $horarioInicial;
    private $horarioFinal;
    private $diaSemana;
    
    public function getIdDisponibilidadSala(){
        return $this->idDisponibilidadSala;
    }
    public function setIdDisponibilidadSala($idDisponibilidadSala){
        $this->idDisponibilidadSala=$idDisponibilidadSala;
    }
    public function getFechaInicio(){
        return $this->fechaInicio;
    }
    public function setFechaInicio($fechaInicio){
        $this->fechaInicio=$fechaInicio;
    }
    public function getFechaTermino(){
        return $this->fechaTermino;
    }
    public function setFechaTermino($fechaTermino){
        $this->fechaTermino=$fechaTermino;
    }
    public function getCveSala(){
        return $this->cveSala;
    }
    public function setCveSala($cveSala){
        $this->cveSala=$cveSala;
    }
    public function getIdProgramacion(){
        return $this->idProgramacion;
    }
    public function setIdProgramacion($idProgramacion){
        $this->idProgramacion=$idProgramacion;
    }
    public function setIdAtencionSala($idAtencionSala){
        $this->idAtencionSala = $idAtencionSala;
    }
    public function getIdAtencionSala(){
        return $this->idAtencionSala;
    }
    public function setDesSala($desSala){
        $this->desSala = $desSala;
    }
    public function getDesSala(){
        return $this->desSala;
    }
    public function setCveJuzgado($cveJuzgado){
        $this->cveJuzgado = $cveJuzgado;
    }
    public function getCveJuzgado(){
        return $this->cveJuzgado;
    }
    public function setCveCondicion($cveCondicion){
        $this->cveCondicion = $cveCondicion;
    }
    public function getCveCondicion(){
        return $this->cveCondicion;
    }
    public function setDesCondicion($desCondicion){
        $this->desCondicion = $desCondicion;
    }
    public function getDesCondicion(){
        return $this->desCondicion;
    }
    public function setCveHorario($cveHorario){
        $this->cveHorario = $cveHorario;
    }
    public function getCveHorario(){
        return $this->cveHorario;
    }
    public function setHorarioInicial($horarioInicial){
        $this->horarioInicial = $horarioInicial;
    }
    public function getHorarioInicial(){
        return $this->horarioInicial;
    }
    public function setHorarioFinal($horarioFinal){
        $this->horarioFinal = $horarioFinal;
    }
    public function getHorarioFinal(){
        return $this->horarioFinal;
    }
    public function setDiaSemana($diaSemana){
        $this->diaSemana = $diaSemana;
    }
    public function getDiaSemana(){
        return $this->diaSemana;
    }

    public function toString(){
        return array("idDisponibilidadSala"=>$this->idDisponibilidadSala,
                     "fechaInicio"=>$this->fechaInicio,
                     "fechaTermino"=>$this->fechaTermino,
                     "cveSala"=>$this->cveSala,
                     "idProgramacion"=>$this->idProgramacion,
                     "idAtencionSala"=>$this->idAtencionSala,
                     "desSala"=>$this->desSala,
                     "cveJuzgado"=>$this->cveJuzgado,
                     "cveCondicion"=>$this->cveCondicion,
                     "desCondicion"=>$this->desCondicion,
                     "cveHorario"=>$this->cveHorario,
                     "horarioInicial"=>$this->horarioInicial,
                     "horarioFinal"=>$this->horarioFinal,
                     "diaSemana"=>$this->diaSemana
                    );
    }
}
?>