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

class HorariosjuzgadoresDTO {
    private $idHorarioJuzgador;
    private $desHorario;
    private $horarioInicial;
    private $horarioFinal;
    private $cveJuzgado;
    private $desJuzgado;
    private $cveTipoJuzgador;
    private $desTipoJuzgador;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdHorarioJuzgador(){
        return $this->idHorarioJuzgador;
    }
    public function setIdHorarioJuzgador($idHorarioJuzgador){
        $this->idHorarioJuzgador=$idHorarioJuzgador;
    }
    public function getDesHorario(){
        return $this->desHorario;
    }
    public function setDesHorario($desHorario){
        $this->desHorario=$desHorario;
    }
    public function getHorarioInicial(){
        return $this->horarioInicial;
    }
    public function setHorarioInicial($horarioInicial){
        $this->horarioInicial=$horarioInicial;
    }
    public function getHorarioFinal(){
        return $this->horarioFinal;
    }
    public function setHorarioFinal($horarioFinal){
        $this->horarioFinal=$horarioFinal;
    }
    public function getCveJuzgado(){
        return $this->cveJuzgado;
    }
    public function setCveJuzgado($cveJuzgado){
        $this->cveJuzgado=$cveJuzgado;
    }
    public function getDesJuzgado(){
        return $this->desJuzgado;
    }
    public function setDesJuzgado($desJuzgado){
        $this->desJuzgado = $desJuzgado;
    }
    public function getCveTipoJuzgador(){
        return $this->cveTipoJuzgador;
    }
    public function setCveTipoJuzgador($cveTipoJuzgador){
        $this->cveTipoJuzgador=$cveTipoJuzgador;
    }
    public function getDesTipoJuzgador(){
        return $this->desTipoJuzgador;
    }
    public function setDesTipoJuzgador($desTipoJuzgador){
        $this->desTipoJuzgador = $desTipoJuzgador;
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
        return array("idHorarioJuzgador"=>$this->idHorarioJuzgador,
                     "desHorario"=>$this->desHorario,
                     "horarioInicial"=>$this->horarioInicial,
                     "horarioFinal"=>$this->horarioFinal,
                     "cveJuzgado"=>$this->cveJuzgado,
                     "desJuzgado"=>$this->desJuzgado,
                     "cveTipoJuzgador"=>$this->cveTipoJuzgador,
                     "desTipoJuzgador"=>$this->desTipoJuzgador,
                     "activo"=>$this->activo,
                     "fechaRegistro"=>$this->fechaRegistro,
                     "fechaActualizacion"=>$this->fechaActualizacion
                    );
    }
}
?>