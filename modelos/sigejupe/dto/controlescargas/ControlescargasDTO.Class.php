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

class ControlescargasDTO {
    private $idControlCarga;
    private $idRegionSala;
    private $cveTipoCarpeta;
    private $cveDelito;
    private $cveJuzgado;
    private $totalAsignados;
    private $anioControl;
    private $cveConfiguracionCarga;
    private $fecharegistro;
    private $fechaActualizacion;
    public function getIdControlCarga(){
        return $this->idControlCarga;
    }
    public function setIdControlCarga($idControlCarga){
        $this->idControlCarga=$idControlCarga;
    }
    public function getIdRegionSala(){
        return $this->idRegionSala;
    }
    public function setIdRegionSala($idRegionSala){
        $this->idRegionSala=$idRegionSala;
    }
    public function getCveTipoCarpeta(){
        return $this->cveTipoCarpeta;
    }
    public function setCveTipoCarpeta($cveTipoCarpeta){
        $this->cveTipoCarpeta=$cveTipoCarpeta;
    }
    public function getCveDelito(){
        return $this->cveDelito;
    }
    public function setCveDelito($cveDelito){
        $this->cveDelito=$cveDelito;
    }
    public function getCveJuzgado(){
        return $this->cveJuzgado;
    }
    public function setCveJuzgado($cveJuzgado){
        $this->cveJuzgado=$cveJuzgado;
    }
    public function getTotalAsignados(){
        return $this->totalAsignados;
    }
    public function setTotalAsignados($totalAsignados){
        $this->totalAsignados=$totalAsignados;
    }
    public function getAnioControl(){
        return $this->anioControl;
    }
    public function setAnioControl($anioControl){
        $this->anioControl=$anioControl;
    }
    public function getCveConfiguracionCarga(){
        return $this->cveConfiguracionCarga;
    }
    public function setCveConfiguracionCarga($cveConfiguracionCarga){
        $this->cveConfiguracionCarga=$cveConfiguracionCarga;
    }
    public function getFecharegistro(){
        return $this->fecharegistro;
    }
    public function setFecharegistro($fecharegistro){
        $this->fecharegistro=$fecharegistro;
    }
    public function getFechaActualizacion(){
        return $this->fechaActualizacion;
    }
    public function setFechaActualizacion($fechaActualizacion){
        $this->fechaActualizacion=$fechaActualizacion;
    }
    public function toString(){
        return array("idControlCarga"=>$this->idControlCarga,
"idRegionSala"=>$this->idRegionSala,
"cveTipoCarpeta"=>$this->cveTipoCarpeta,
"cveDelito"=>$this->cveDelito,
"cveJuzgado"=>$this->cveJuzgado,
"totalAsignados"=>$this->totalAsignados,
"anioControl"=>$this->anioControl,
"cveConfiguracionCarga"=>$this->cveConfiguracionCarga,
"fecharegistro"=>$this->fecharegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>