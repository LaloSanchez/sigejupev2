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

class TomamuestrasDTO {
    private $idTomaMuestra;
    private $idSolicitudMuestra;
    private $idImputadoMuestra;
    private $idOfendidoMuestra;
    private $cveMuestra;
    public function getIdTomaMuestra(){
        return $this->idTomaMuestra;
    }
    public function setIdTomaMuestra($idTomaMuestra){
        $this->idTomaMuestra=$idTomaMuestra;
    }
    public function getIdSolicitudMuestra(){
        return $this->idSolicitudMuestra;
    }
    public function setIdSolicitudMuestra($idSolicitudMuestra){
        $this->idSolicitudMuestra=$idSolicitudMuestra;
    }
    public function getIdImputadoMuestra(){
        return $this->idImputadoMuestra;
    }
    public function setIdImputadoMuestra($idImputadoMuestra){
        $this->idImputadoMuestra=$idImputadoMuestra;
    }
    public function getIdOfendidoMuestra(){
        return $this->idOfendidoMuestra;
    }
    public function setIdOfendidoMuestra($idOfendidoMuestra){
        $this->idOfendidoMuestra=$idOfendidoMuestra;
    }
    public function getCveMuestra(){
        return $this->cveMuestra;
    }
    public function setCveMuestra($cveMuestra){
        $this->cveMuestra=$cveMuestra;
    }
    public function toString(){
        return array("idTomaMuestra"=>$this->idTomaMuestra,
"idSolicitudMuestra"=>$this->idSolicitudMuestra,
"idImputadoMuestra"=>$this->idImputadoMuestra,
"idOfendidoMuestra"=>$this->idOfendidoMuestra,
"cveMuestra"=>$this->cveMuestra);
    }
}
?>