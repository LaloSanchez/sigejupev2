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

class AudienciasDTO {
    private $idAudiencia;
    private $idSolicitudAudiencia;
    private $numero;
    private $anio;
    private $cveTipoCarpeta;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    private $fechaInicial;
    private $fechaFinal;
    private $cveCatAudiencia;
    private $cveJuzgado;
    private $cveJuzgadoDesahoga;
    private $cveAdscripcionSolicita;
    private $cveUsuario;
    private $idReferencia;
    private $detenido;
    private $cveEstatusAudiencia;
    private $cveSala;
    private $peso;
    private $variable;
    private $idAudienciaAuronix;
    public function getIdAudiencia(){
        return $this->idAudiencia;
    }
    public function setIdAudiencia($idAudiencia){
        $this->idAudiencia=$idAudiencia;
    }
    public function getIdSolicitudAudiencia(){
        return $this->idSolicitudAudiencia;
    }
    public function setIdSolicitudAudiencia($idSolicitudAudiencia){
        $this->idSolicitudAudiencia=$idSolicitudAudiencia;
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
    public function getCveTipoCarpeta(){
        return $this->cveTipoCarpeta;
    }
    public function setCveTipoCarpeta($cveTipoCarpeta){
        $this->cveTipoCarpeta=$cveTipoCarpeta;
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
    public function getCveCatAudiencia(){
        return $this->cveCatAudiencia;
    }
    public function setCveCatAudiencia($cveCatAudiencia){
        $this->cveCatAudiencia=$cveCatAudiencia;
    }
    public function getCveJuzgado(){
        return $this->cveJuzgado;
    }
    public function setCveJuzgado($cveJuzgado){
        $this->cveJuzgado=$cveJuzgado;
    }
    public function getCveJuzgadoDesahoga(){
        return $this->cveJuzgadoDesahoga;
    }
    public function setCveJuzgadoDesahoga($cveJuzgadoDesahoga){
        $this->cveJuzgadoDesahoga=$cveJuzgadoDesahoga;
    }
    public function getCveAdscripcionSolicita(){
        return $this->cveAdscripcionSolicita;
    }
    public function setCveAdscripcionSolicita($cveAdscripcionSolicita){
        $this->cveAdscripcionSolicita=$cveAdscripcionSolicita;
    }
    public function getCveUsuario(){
        return $this->cveUsuario;
    }
    public function setCveUsuario($cveUsuario){
        $this->cveUsuario=$cveUsuario;
    }
    public function getIdReferencia(){
        return $this->idReferencia;
    }
    public function setIdReferencia($idReferencia){
        $this->idReferencia=$idReferencia;
    }
    public function getDetenido(){
        return $this->detenido;
    }
    public function setDetenido($detenido){
        $this->detenido=$detenido;
    }
    public function getCveEstatusAudiencia(){
        return $this->cveEstatusAudiencia;
    }
    public function setCveEstatusAudiencia($cveEstatusAudiencia){
        $this->cveEstatusAudiencia=$cveEstatusAudiencia;
    }
    public function getCveSala(){
        return $this->cveSala;
    }
    public function setCveSala($cveSala){
        $this->cveSala=$cveSala;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function setPeso($peso){
        $this->peso=$peso;
    }
    public function getVariable(){
        return $this->variable;
    }
    public function setVariable($variable){
        $this->variable=$variable;
    }
    public function getIdAudienciaAuronix() {
        return $this->idAudienciaAuronix;
    }
    public function setIdAudienciaAuronix($idAudienciaAuronix) {
        $this->idAudienciaAuronix = $idAudienciaAuronix;
    }

    public function toString(){
        return array("idAudiencia"=>$this->idAudiencia,
"idSolicitudAudiencia"=>$this->idSolicitudAudiencia,
"numero"=>$this->numero,
"anio"=>$this->anio,
"cveTipoCarpeta"=>$this->cveTipoCarpeta,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion,
"fechaInicial"=>$this->fechaInicial,
"fechaFinal"=>$this->fechaFinal,
"cveCatAudiencia"=>$this->cveCatAudiencia,
"cveJuzgado"=>$this->cveJuzgado,
"cveJuzgadoDesahoga"=>$this->cveJuzgadoDesahoga,
"cveAdscripcionSolicita"=>$this->cveAdscripcionSolicita,
"cveUsuario"=>$this->cveUsuario,
"idReferencia"=>$this->idReferencia,
"detenido"=>$this->detenido,
"cveEstatusAudiencia"=>$this->cveEstatusAudiencia,
"cveSala"=>$this->cveSala,
"peso"=>$this->peso,
"variable"=>$this->variable,
"idAudienciaAuronix"=>$this->idAudienciaAuronix);
    }
}
?>