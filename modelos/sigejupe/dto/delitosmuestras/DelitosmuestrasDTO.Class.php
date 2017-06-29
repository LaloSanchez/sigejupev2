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

class DelitosmuestrasDTO {
    private $idDelitoMuestra;
    private $idSolicitudMuestra;
    private $cveDelito;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdDelitoMuestra(){
        return $this->idDelitoMuestra;
    }
    public function setIdDelitoMuestra($idDelitoMuestra){
        $this->idDelitoMuestra=$idDelitoMuestra;
    }
    public function getIdSolicitudMuestra(){
        return $this->idSolicitudMuestra;
    }
    public function setIdSolicitudMuestra($idSolicitudMuestra){
        $this->idSolicitudMuestra=$idSolicitudMuestra;
    }
    public function getCveDelito(){
        return $this->cveDelito;
    }
    public function setCveDelito($cveDelito){
        $this->cveDelito=$cveDelito;
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
        return array("idDelitoMuestra"=>$this->idDelitoMuestra,
"idSolicitudMuestra"=>$this->idSolicitudMuestra,
"cveDelito"=>$this->cveDelito,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>