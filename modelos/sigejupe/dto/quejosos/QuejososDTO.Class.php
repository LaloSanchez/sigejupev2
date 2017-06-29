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

class QuejososDTO {
    private $idQuejoso;
    private $idAmparo;
    private $idImputadoCarpeta;
    private $idOfendidoCarpeta;
    private $paternoQ;
    private $maternoQ;
    private $nombreQ;
    private $NombreMoral;
    private $domicilio;
    private $cveTipoPersona;
    private $email;
    private $cveMunicipio;
    private $cveGenero;
    private $activo;
    public function getIdQuejoso(){
        return $this->idQuejoso;
    }
    public function setIdQuejoso($idQuejoso){
        $this->idQuejoso=$idQuejoso;
    }
    public function getIdImputadoCarpeta(){
        return $this->idImputadoCarpeta;
    }
    public function setIdImputadoCarpeta($idImputadoCarpeta){
        $this->idImputadoCarpeta=$idImputadoCarpeta;
    }
    public function getidOfendidoCarpeta(){
        return $this->idOfendidoCarpeta;
    }
    public function setidOfendidoCarpeta($idOfendidoCarpeta){
        $this->idOfendidoCarpeta=$idOfendidoCarpeta;
    }
    public function getIdAmparo(){
        return $this->idAmparo;
    }
    public function setIdAmparo($idAmparo){
        $this->idAmparo=$idAmparo;
    }
    public function getPaternoQ(){
        return $this->paternoQ;
    }
    public function setPaternoQ($paternoQ){
        $this->paternoQ=$paternoQ;
    }
    public function getMaternoQ(){
        return $this->maternoQ;
    }
    public function setMaternoQ($maternoQ){
        $this->maternoQ=$maternoQ;
    }
    public function getNombreQ(){
        return $this->nombreQ;
    }
    public function setNombreQ($nombreQ){
        $this->nombreQ=$nombreQ;
    }
    public function getNombreMoral(){
        return $this->NombreMoral;
    }
    public function setNombreMoral($NombreMoral){
        $this->NombreMoral=$NombreMoral;
    }
    public function getDomicilio(){
        return $this->domicilio;
    }
    public function setDomicilio($domicilio){
        $this->domicilio=$domicilio;
    }
    public function getCveTipoPersona(){
        return $this->cveTipoPersona;
    }
    public function setCveTipoPersona($cveTipoPersona){
        $this->cveTipoPersona=$cveTipoPersona;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email=$email;
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
    public function getActivo(){
        return $this->activo;
    }
    public function setActivo($activo){
        $this->activo=$activo;
    }
    public function toString(){
        return array("idQuejoso"=>$this->idQuejoso,
"idAmparo"=>$this->idAmparo,
"idImputadoCarpeta"=>$this->idImputadoCarpeta,
"idOfendidoCarpeta"=>$this->idOfendidoCarpeta,
"paternoQ"=>$this->paternoQ,
"maternoQ"=>$this->maternoQ,
"nombreQ"=>$this->nombreQ,
"NombreMoral"=>$this->NombreMoral,
"domicilio"=>$this->domicilio,
"cveTipoPersona"=>$this->cveTipoPersona,
"email"=>$this->email,
"cveMunicipio"=>$this->cveMunicipio,
"cveGenero"=>$this->cveGenero,
"activo"=>$this->activo);
    }
}
?>