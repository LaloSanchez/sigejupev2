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

class CarpetasjudicialesDTO {
    /*
     * Se agrega el atributo cveConsignacionA
     */
    private $idCarpetaJudicial;
    private $cveEtapaProcesal;
    private $cveConsignacion;
    private $cveTipoCarpeta;
    private $cveConsignacionA;
    private $numero;
    private $anio;
    private $fechaRadicacion;
    private $fechaRegistro;
    private $fechaActualizacion;
    private $activo;
    private $cveJuzgado;
    private $carpetaInv;
    private $nuc;
    private $cveUsuario;
    private $observaciones;
    private $numImputados;
    private $numOfendidos;
    private $numDelitos;
    private $cveEstatusCarpeta;
    private $incompetencia;
    private $cveTipoIncompetencia;
    private $acumulado;
    private $numAcumulado;
    private $fechaTermino;
    private $cveConclucion;
    private $ponderacion;
    public function getIdCarpetaJudicial(){
        return $this->idCarpetaJudicial;
    }
    public function setIdCarpetaJudicial($idCarpetaJudicial){
        $this->idCarpetaJudicial=$idCarpetaJudicial;
    }
    public function getCveEtapaProcesal(){
        return $this->cveEtapaProcesal;
    }
    public function setCveEtapaProcesal($cveEtapaProcesal){
        $this->cveEtapaProcesal=$cveEtapaProcesal;
    }
    public function getCveConsignacion(){
        return $this->cveConsignacion;
    }
    public function setCveConsignacion($cveConsignacion){
        $this->cveConsignacion=$cveConsignacion;
    }
    public function getCveTipoCarpeta(){
        return $this->cveTipoCarpeta;
    }
    public function setCveTipoCarpeta($cveTipoCarpeta){
        $this->cveTipoCarpeta=$cveTipoCarpeta;
    }
    
    function getCveConsignacionA() {
        return $this->cveConsignacionA;
    }

    function setCveConsignacionA($cveConsignacionA) {
        $this->cveConsignacionA = $cveConsignacionA;
    }

    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($numero){
        $this->numero=$numero;
    }
    public function getAnio(){
        return $this->anio;
    }
    public function setAnio($anio){
        $this->anio=$anio;
    }
    public function getFechaRadicacion(){
        return $this->fechaRadicacion;
    }
    public function setFechaRadicacion($fechaRadicacion){
        $this->fechaRadicacion=$fechaRadicacion;
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
    public function getActivo(){
        return $this->activo;
    }
    public function setActivo($activo){
        $this->activo=$activo;
    }
    public function getCveJuzgado(){
        return $this->cveJuzgado;
    }
    public function setCveJuzgado($cveJuzgado){
        $this->cveJuzgado=$cveJuzgado;
    }
    public function getCarpetaInv(){
        return $this->carpetaInv;
    }
    public function setCarpetaInv($carpetaInv){
        $this->carpetaInv=$carpetaInv;
    }
    public function getNuc(){
        return $this->nuc;
    }
    public function setNuc($nuc){
        $this->nuc=$nuc;
    }
    public function getCveUsuario(){
        return $this->cveUsuario;
    }
    public function setCveUsuario($cveUsuario){
        $this->cveUsuario=$cveUsuario;
    }
    public function getObservaciones(){
        return $this->observaciones;
    }
    public function setObservaciones($observaciones){
        $this->observaciones=$observaciones;
    }
    public function getNumImputados(){
        return $this->numImputados;
    }
    public function setNumImputados($numImputados){
        $this->numImputados=$numImputados;
    }
    public function getNumOfendidos(){
        return $this->numOfendidos;
    }
    public function setNumOfendidos($numOfendidos){
        $this->numOfendidos=$numOfendidos;
    }
    public function getNumDelitos(){
        return $this->numDelitos;
    }
    public function setNumDelitos($numDelitos){
        $this->numDelitos=$numDelitos;
    }
    public function getCveEstatusCarpeta(){
        return $this->cveEstatusCarpeta;
    }
    public function setCveEstatusCarpeta($cveEstatusCarpeta){
        $this->cveEstatusCarpeta=$cveEstatusCarpeta;
    }
    public function getIncompetencia(){
        return $this->incompetencia;
    }
    public function setIncompetencia($incompetencia){
        $this->incompetencia=$incompetencia;
    }
    public function getCveTipoIncompetencia(){
        return $this->cveTipoIncompetencia;
    }
    public function setCveTipoIncompetencia($cveTipoIncompetencia){
        $this->cveTipoIncompetencia=$cveTipoIncompetencia;
    }
    public function getAcumulado(){
        return $this->acumulado;
    }
    public function setAcumulado($acumulado){
        $this->acumulado=$acumulado;
    }
    public function getNumAcumulado(){
        return $this->numAcumulado;
    }
    public function setNumAcumulado($numAcumulado){
        $this->numAcumulado=$numAcumulado;
    }
    public function getFechaTermino(){
        return $this->fechaTermino;
    }
    public function setFechaTermino($fechaTermino){
        $this->fechaTermino=$fechaTermino;
    }
    public function getCveConclucion(){
        return $this->cveConclucion;
    }
    public function setCveConclucion($cveConclucion){
        $this->cveConclucion=$cveConclucion;
    }
    public function getPonderacion(){
        return $this->ponderacion;
    }
    public function setPonderacion($ponderacion){
        $this->ponderacion=$ponderacion;
    }
    public function toString(){
        return array("idCarpetaJudicial"=>$this->idCarpetaJudicial,
"cveEtapaProcesal"=>$this->cveEtapaProcesal,
"cveConsignacion"=>$this->cveConsignacion,
"cveTipoCarpeta"=>$this->cveTipoCarpeta,
"cveConsignacionA"=>$this->cveConsignacionA,
"numero"=>$this->numero,
"anio"=>$this->anio,
"fechaRadicacion"=>$this->fechaRadicacion,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion,
"activo"=>$this->activo,
"cveJuzgado"=>$this->cveJuzgado,
"carpetaInv"=>$this->carpetaInv,
"nuc"=>$this->nuc,
"cveUsuario"=>$this->cveUsuario,
"observaciones"=>$this->observaciones,
"numImputados"=>$this->numImputados,
"numOfendidos"=>$this->numOfendidos,
"numDelitos"=>$this->numDelitos,
"cveEstatusCarpeta"=>$this->cveEstatusCarpeta,
"incompetencia"=>$this->incompetencia,
"cveTipoIncompetencia"=>$this->cveTipoIncompetencia,
"acumulado"=>$this->acumulado,
"numAcumulado"=>$this->numAcumulado,
"fechaTermino"=>$this->fechaTermino,
"cveConclucion"=>$this->cveConclucion,
"ponderacion"=>$this->ponderacion);
    }
}
?>