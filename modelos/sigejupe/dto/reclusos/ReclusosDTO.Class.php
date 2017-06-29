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

class ReclusosDTO {
    private $idRecluso;
    private $idIngresoCereso;
    private $idImputadoCarpeta;
    private $nombre;
    private $paterno;
    private $materno;
    private $alias;
    private $detenido;
    private $cveGenero;
    private $cveEstadoPsicofisico;
    private $activo;
    public function getIdRecluso(){
        return $this->idRecluso;
    }
    public function setIdRecluso($idRecluso){
        $this->idRecluso=$idRecluso;
    }
    public function getIdIngresoCereso(){
        return $this->idIngresoCereso;
    }
    public function setIdIngresoCereso($idIngresoCereso){
        $this->idIngresoCereso=$idIngresoCereso;
    }
    public function getIdImputadoCarpeta(){
        return $this->idImputadoCarpeta;
    }
    public function setIdImputadoCarpeta($idImputadoCarpeta){
        $this->idImputadoCarpeta=$idImputadoCarpeta;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function getPaterno(){
        return $this->paterno;
    }
    public function setPaterno($paterno){
        $this->paterno=$paterno;
    }
    public function getMaterno(){
        return $this->materno;
    }
    public function setMaterno($materno){
        $this->materno=$materno;
    }
    public function getAlias(){
        return $this->alias;
    }
    public function setAlias($alias){
        $this->alias=$alias;
    }
    public function getDetenido(){
        return $this->detenido;
    }
    public function setDetenido($detenido){
        $this->detenido=$detenido;
    }
    public function getCveGenero(){
        return $this->cveGenero;
    }
    public function setCveGenero($cveGenero){
        $this->cveGenero=$cveGenero;
    }
    public function getCveEstadoPsicofisico(){
        return $this->cveEstadoPsicofisico;
    }
    public function setCveEstadoPsicofisico($cveEstadoPsicofisico){
        $this->cveEstadoPsicofisico=$cveEstadoPsicofisico;
    }
    public function getActivo(){
        return $this->activo;
    }
    public function setActivo($activo){
        $this->activo=$activo;
    }
    public function toString(){
        return array("idRecluso"=>$this->idRecluso,
"idIngresoCereso"=>$this->idIngresoCereso,
"idImputadoCarpeta"=>$this->idImputadoCarpeta,
"nombre"=>$this->nombre,
"paterno"=>$this->paterno,
"materno"=>$this->materno,
"alias"=>$this->alias,
"detenido"=>$this->detenido,
"cveGenero"=>$this->cveGenero,
"cveEstadoPsicofisico"=>$this->cveEstadoPsicofisico,
"activo"=>$this->activo);
    }
}
?>