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

class UltimoroljuzgadorDTO {
    private $idUltimoRolJuzgador;
    private $idProgramacion;
    private $cveRolJuzgador;
    private $aparicion;
    private $idJuzgador;
    private $numSemana;
    //////////////////////////////////////////////////////
    //////////////PARAMETROS DE INNER////////////////
    //////////////////////////////////////////////////////
    private $cveJuzgado;
    private $nombreJuzgador;
    private $rolDesc;
    private $tipoDesc;
    private $idSecuencia;

    public function getIdUltimoRolJuzgador(){
        return $this->idUltimoRolJuzgador;
    }
    public function setIdUltimoRolJuzgador($idUltimoRolJuzgador){
        $this->idUltimoRolJuzgador=$idUltimoRolJuzgador;
    }
    public function getIdProgramacion(){
        return $this->idProgramacion;
    }
    public function setIdProgramacion($idProgramacion){
        $this->idProgramacion=$idProgramacion;
    }
    public function getCveRolJuzgador(){
        return $this->cveRolJuzgador;
    }
    public function setCveRolJuzgador($cveRolJuzgador){
        $this->cveRolJuzgador=$cveRolJuzgador;
    }
    public function getAparicion(){
        return $this->aparicion;
    }
    public function setAparicion($aparicion){
        $this->aparicion=$aparicion;
    }
    public function getIdJuzgador(){
        return $this->idJuzgador;
    }
    public function setIdJuzgador($idJuzgador){
        $this->idJuzgador=$idJuzgador;
    }
    public function getNumSemana(){
        return $this->numSemana;
    }
    public function setNumSemana($numSemana){
        $this->numSemana=$numSemana;
    }
    //////////////////////////////////////////////////////
    //////////////PARAMETROS DE INNER////////////////
    //////////////////////////////////////////////////////
    public function getCveJuzgado(){
        return $this->cveJuzgado;
    }
    public function setCveJuzgado($cveJuzgado){
        $this->cveJuzgado=$cveJuzgado;
    }
    public function getNombreJuzgador(){
        return $this->nombreJuzgador;
    }
    public function setNombreJuzgador($nombreJuzgador){
        $this->nombreJuzgador=$nombreJuzgador;
    }
    public function getRolDesc(){
        return $this->rolDesc;
    }
    public function setRolDesc($rolDesc){
        $this->rolDesc=$rolDesc;
    }
    public function getTipoDesc(){
        return $this->tipoDesc;
    }
    public function setTipoDesc($tipoDesc){
        $this->tipoDesc=$tipoDesc;
    }
    public function getIdSecuencia(){
        return $this->idSecuencia;
    }
    public function setIdSecuencia($idSecuencia){
        $this->idSecuencia=$idSecuencia;
    }

    public function toString(){
        return array("idUltimoRolJuzgador"=>$this->idUltimoRolJuzgador,
                        "idProgramacion"=>$this->idProgramacion,
                        "cveRolJuzgador"=>$this->cveRolJuzgador,
                        "aparicion"=>$this->aparicion,
                        "idJuzgador"=>$this->idJuzgador,
                        "numSemana"=>$this->numSemana,
                        "cveJuzgado"=>$this->cveJuzgado,
                        "nombreJuzgador"=>$this->nombreJuzgador,
                        "rolDesc"=>$this->rolDesc,
                        "tipoDesc"=>$this->tipoDesc,
                        "idSecuencia"=>$this->idSecuencia
                        );
    }
}
?>