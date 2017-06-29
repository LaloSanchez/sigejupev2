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

class SecuenciasDTO {
    private $idSecuencia;
    private $cveRolJuzgador;
    private $cveJuzgado;
    private $aparicion;
    private $orden;
    private $descansaFinSemana;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    //////////////////////////////////////////////////////
    //////////////PARAMETROS DE INNER////////////////
    //////////////////////////////////////////////////////
    private $desRol;
    private $desJuzgado;
    //////////////////////////////////////////////////////
    //////////////PARAMETROS DE PAGINACION////////////////
    //////////////////////////////////////////////////////
    private $totalPaginas;
    private $pagina;
    public function getIdSecuencia(){
        return $this->idSecuencia;
    }
    public function setIdSecuencia($idSecuencia){
        $this->idSecuencia=$idSecuencia;
    }
    public function getCveRolJuzgador(){
        return $this->cveRolJuzgador;
    }
    public function setCveRolJuzgador($cveRolJuzgador){
        $this->cveRolJuzgador=$cveRolJuzgador;
    }
    public function getCveJuzgado(){
        return $this->cveJuzgado;
    }
    public function setCveJuzgado($cveJuzgado){
        $this->cveJuzgado=$cveJuzgado;
    }
    public function getAparicion(){
        return $this->aparicion;
    }
    public function setAparicion($aparicion){
        $this->aparicion=$aparicion;
    }
    public function getOrden(){
        return $this->orden;
    }
    public function setOrden($orden){
        $this->orden=$orden;
    }
    public function getDescansaFinSemana(){
        return $this->descansaFinSemana;
    }
    public function setDescansaFinSemana($descansaFinSemana){
        $this->descansaFinSemana=$descansaFinSemana;
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
    //////////////////////////////////////////////////////
    //////////////PARAMETROS DE INNER////////////////
    //////////////////////////////////////////////////////
    public function getDesRol(){
        return $this->desRol;
    }
    public function setDesRol($desRol){
        $this->desRol=$desRol;
    }
    public function getDesJuzgado(){
        return $this->desJuzgado;
    }
    public function setDesJuzgado($desJuzgado){
        $this->desJuzgado=$desJuzgado;
    }
    //////////////////////////////////////////////////////
    //////////////PARAMETROS DE PAGINACION////////////////
    //////////////////////////////////////////////////////
    public function getTotalPaginas(){
        return $this->totalPaginas;
    }
    public function setTotalPaginas($totalPaginas){
        $this->totalPaginas=$totalPaginas;
    }
    public function getPagina(){
        return $this->pagina;
    }
    public function setPagina($pagina){
        $this->pagina=$pagina;
    }
    public function toString(){
        return array("idSecuencia"=>$this->idSecuencia,
                        "cveRolJuzgador"=>$this->cveRolJuzgador,
                        "cveJuzgado"=>$this->cveJuzgado,
                        "aparicion"=>$this->aparicion,
                        "orden"=>$this->orden,
                        "descansaFinSemana"=>$this->descansaFinSemana,
                        "activo"=>$this->activo,
                        "fechaRegistro"=>$this->fechaRegistro,
                        "fechaActualizacion"=>$this->fechaActualizacion,
                        "desJuzgado"=>$this->desJuzgado,
                        "desRol"=>$this->desRol,
                        "totalPaginas"=>$this->totalPaginas,
                        "pagina"=>$this->pagina);
    }
}
?>