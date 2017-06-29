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

class RemisionapelacionesDTO {
    private $idRemisionApelacion;
    private $idActuacion;
    private $idOficio;
    private $idResolucionCombatida;
    private $otraResolucionCombatida;
    private $cveCatResolucionCombatida;
    private $cveRecurso;
    private $cveEfecto;
    private $agravios;
    private $fecCorreTraslado;
    private $fecInterponeRecurso;
    private $fecNotificaSenAut;
    private $fecAdhesion;
    private $emplazamiento;
    private $cveSentido;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    private $idActuacionCopia;
    private $idResolucionesCarpetasCombatidas;
    public function getIdRemisionApelacion(){
        return $this->idRemisionApelacion;
    }
    public function setIdRemisionApelacion($idRemisionApelacion){
        $this->idRemisionApelacion=$idRemisionApelacion;
    }
    public function getIdActuacion(){
        return $this->idActuacion;
    }
    public function setIdActuacion($idActuacion){
        $this->idActuacion=$idActuacion;
    }
    public function getIdOficio(){
        return $this->idOficio;
    }
    public function setIdOficio($idOficio){
        $this->idOficio=$idOficio;
    }
    public function getIdResolucionCombatida(){
        return $this->idResolucionCombatida;
    }
    public function setIdResolucionCombatida($idResolucionCombatida){
        $this->idResolucionCombatida=$idResolucionCombatida;
    }
    public function getOtraResolucionCombatida(){
        return $this->otraResolucionCombatida;
    }
    public function setOtraResolucionCombatida($otraResolucionCombatida){
        $this->otraResolucionCombatida=$otraResolucionCombatida;
    }
    public function getCveCatResolucionCombatida(){
        return $this->cveCatResolucionCombatida;
    }
    public function setCveCatResolucionCombatida($cveCatResolucionCombatida){
        $this->cveCatResolucionCombatida=$cveCatResolucionCombatida;
    }
    public function getCveRecurso(){
        return $this->cveRecurso;
    }
    public function setCveRecurso($cveRecurso){
        $this->cveRecurso=$cveRecurso;
    }
    public function getCveEfecto(){
        return $this->cveEfecto;
    }
    public function setCveEfecto($cveEfecto){
        $this->cveEfecto=$cveEfecto;
    }
    public function getAgravios(){
        return $this->agravios;
    }
    public function setAgravios($agravios){
        $this->agravios=$agravios;
    }
    public function getFecCorreTraslado(){
        return $this->fecCorreTraslado;
    }
    public function setFecCorreTraslado($fecCorreTraslado){
        $this->fecCorreTraslado=$fecCorreTraslado;
    }
    public function getFecInterponeRecurso(){
        return $this->fecInterponeRecurso;
    }
    public function setFecInterponeRecurso($fecInterponeRecurso){
        $this->fecInterponeRecurso=$fecInterponeRecurso;
    }
    public function getFecNotificaSenAut(){
        return $this->fecNotificaSenAut;
    }
    public function setFecNotificaSenAut($fecNotificaSenAut){
        $this->fecNotificaSenAut=$fecNotificaSenAut;
    }
    public function getFecAdhesion(){
        return $this->fecAdhesion;
    }
    public function setFecAdhesion($fecAdhesion){
        $this->fecAdhesion=$fecAdhesion;
    }
    public function getEmplazamiento(){
        return $this->emplazamiento;
    }
    public function setEmplazamiento($emplazamiento){
        $this->emplazamiento=$emplazamiento;
    }
    public function getCveSentido(){
        return $this->cveSentido;
    }
    public function setCveSentido($cveSentido){
        $this->cveSentido=$cveSentido;
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
    public function getIdActuacionCopia(){
        return $this->idActuacionCopia;
    }
    public function setIdActuacionCopia($idActuacionCopia){
        $this->idActuacionCopia=$idActuacionCopia;
    }
    public function getIdResolucionesCarpetasCombatidas(){
        return $this->idResolucionesCarpetasCombatidas;
    }
    public function setIdResolucionesCarpetasCombatidas($idResolucionesCarpetasCombatidas){
        $this->idResolucionesCarpetasCombatidas=$idResolucionesCarpetasCombatidas;
    }
    public function toString(){
        return array("idRemisionApelacion"=>$this->idRemisionApelacion,
"idActuacion"=>$this->idActuacion,
"idOficio"=>$this->idOficio,
"idResolucionCombatida"=>$this->idResolucionCombatida,
"otraResolucionCombatida"=>$this->otraResolucionCombatida,
"cveCatResolucionCombatida"=>$this->cveCatResolucionCombatida,
"cveRecurso"=>$this->cveRecurso,
"cveEfecto"=>$this->cveEfecto,
"agravios"=>$this->agravios,
"fecCorreTraslado"=>$this->fecCorreTraslado,
"fecInterponeRecurso"=>$this->fecInterponeRecurso,
"fecNotificaSenAut"=>$this->fecNotificaSenAut,
"fecAdhesion"=>$this->fecAdhesion,
"emplazamiento"=>$this->emplazamiento,
"cveSentido"=>$this->cveSentido,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion,
"idActuacionCopia"=>$this->idActuacionCopia,
"idResolucionesCarpetasCombatidas"=>$this->idResolucionesCarpetasCombatidas);
    }
}
?>