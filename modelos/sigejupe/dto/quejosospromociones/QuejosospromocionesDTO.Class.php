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

class QuejosospromocionesDTO {
    private $idQuejosoProm;
    private $idActuacion;
    private $idImputadoCarpeta;
    private $idOfendidoCarpeta;
    private $paternoQ;
    private $maternoQ;
    private $nombreQ;
    private $NombreMoral;
    private $cveTipoPersona;
    private $cveGenero;
    private $domicilio;
    private $email;
    private $telefono;
    private $cveMunicipio;
    private $activo;
    public function getIdQuejosoProm(){
        return $this->idQuejosoProm;
    }
    public function setIdQuejosoProm($idQuejosoProm){
        $this->idQuejosoProm=$idQuejosoProm;
    }
    public function getIdActuacion(){
        return $this->idActuacion;
    }
    public function setIdActuacion($idActuacion){
        $this->idActuacion=$idActuacion;
    }
    public function getIdImputadoCarpeta(){
        return $this->idImputadoCarpeta;
    }
    public function setIdImputadoCarpeta($idImputadoCarpeta){
        $this->idImputadoCarpeta=$idImputadoCarpeta;
    }
    public function getIdOfendidoCarpeta(){
        return $this->idOfendidoCarpeta;
    }
    public function setIdOfendidoCarpeta($idOfendidoCarpeta){
        $this->idOfendidoCarpeta=$idOfendidoCarpeta;
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
    public function getCveTipoPersona(){
        return $this->cveTipoPersona;
    }
    public function setCveTipoPersona($cveTipoPersona){
        $this->cveTipoPersona=$cveTipoPersona;
    }
    public function getCveGenero(){
        return $this->cveGenero;
    }
    public function setCveGenero($cveGenero){
        $this->cveGenero=$cveGenero;
    }
    public function getDomicilio(){
        return $this->domicilio;
    }
    public function setDomicilio($domicilio){
        $this->domicilio=$domicilio;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function setTelefono($telefono){
        $this->telefono=$telefono;
    }
    public function getCveMunicipio(){
        return $this->cveMunicipio;
    }
    public function setCveMunicipio($cveMunicipio){
        $this->cveMunicipio=$cveMunicipio;
    }
    public function getActivo(){
        return $this->activo;
    }
    public function setActivo($activo){
        $this->activo=$activo;
    }
    public function toString(){
        return array("idQuejosoProm"=>$this->idQuejosoProm,
"idActuacion"=>$this->idActuacion,
"idImputadoCarpeta"=>$this->idImputadoCarpeta,
"idOfendidoCarpeta"=>$this->idOfendidoCarpeta,
"paternoQ"=>$this->paternoQ,
"maternoQ"=>$this->maternoQ,
"nombreQ"=>$this->nombreQ,
"NombreMoral"=>$this->NombreMoral,
"cveTipoPersona"=>$this->cveTipoPersona,
"cveGenero"=>$this->cveGenero,
"domicilio"=>$this->domicilio,
"email"=>$this->email,
"telefono"=>$this->telefono,
"cveMunicipio"=>$this->cveMunicipio,
"activo"=>$this->activo);
    }
}
?>