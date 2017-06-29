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

class EtapastiposcarpetasDTO {
    private $idEtapaTipoCarpeta;
    private $cveEtapaProcesal;
    private $cveTipoCarpeta;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdEtapaTipoCarpeta(){
        return $this->idEtapaTipoCarpeta;
    }
    public function setIdEtapaTipoCarpeta($idEtapaTipoCarpeta){
        $this->idEtapaTipoCarpeta=$idEtapaTipoCarpeta;
    }
    public function getCveEtapaProcesal(){
        return $this->cveEtapaProcesal;
    }
    public function setCveEtapaProcesal($cveEtapaProcesal){
        $this->cveEtapaProcesal=$cveEtapaProcesal;
    }
    public function getCveTipoCarpeta(){
        return $this->cveTipoCarpeta;
    }
    public function setCveTipoCarpeta($cveTipoCarpeta){
        $this->cveTipoCarpeta=$cveTipoCarpeta;
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
        return array("idEtapaTipoCarpeta"=>$this->idEtapaTipoCarpeta,
"cveEtapaProcesal"=>$this->cveEtapaProcesal,
"cveTipoCarpeta"=>$this->cveTipoCarpeta,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>