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

class PersonasordenesDTO {
    private $idPersonaOrden;
    private $idSolicitudOrden;
    private $paterno;
    private $materno;
    private $nombre;
    private $domicilio;
    private $cveMunicipio;
    private $cveGenero;
    private $cveOrigen;
    public function getIdPersonaOrden(){
        return $this->idPersonaOrden;
    }
    public function setIdPersonaOrden($idPersonaOrden){
        $this->idPersonaOrden=$idPersonaOrden;
    }
    public function getIdSolicitudOrden(){
        return $this->idSolicitudOrden;
    }
    public function setIdSolicitudOrden($idSolicitudOrden){
        $this->idSolicitudOrden=$idSolicitudOrden;
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
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function getDomicilio(){
        return $this->domicilio;
    }
    public function setDomicilio($domicilio){
        $this->domicilio=$domicilio;
    }
    public function getCveMunicipio(){
        return $this->cveMunicipio;
    }
    public function setCveMunicipio($cveMunicipio){
        $this->cveMunicipio=$cveMunicipio;
    }
    public function getCveGenero(){
        return $this->cveGenero;
    }
    public function setCveGenero($cveGenero){
        $this->cveGenero=$cveGenero;
    }
    public function getCveOrigen(){
        return $this->cveOrigen;
    }
    public function setCveOrigen($cveOrigen){
        $this->cveOrigen=$cveOrigen;
    }
    public function toString(){
        return array("idPersonaOrden"=>$this->idPersonaOrden,
"idSolicitudOrden"=>$this->idSolicitudOrden,
"paterno"=>$this->paterno,
"materno"=>$this->materno,
"nombre"=>$this->nombre,
"domicilio"=>$this->domicilio,
"cveMunicipio"=>$this->cveMunicipio,
"cveGenero"=>$this->cveGenero,
"cveOrigen"=>$this->cveOrigen);
    }
}
?>