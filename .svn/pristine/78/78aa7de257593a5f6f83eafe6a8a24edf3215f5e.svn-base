<?php

/*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 FACADES
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/victimadeviolenciadegenero/VictimadeviolenciadegeneroDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/victimadeviolenciadegenero/VictimadeviolenciadegeneroController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class VictimadeviolenciadegeneroFacade {
private $proveedor;
public function __construct() {
}
public function validarVictimadeviolenciadegenero($VictimadeviolenciadegeneroDto){
$VictimadeviolenciadegeneroDto->setcveVictimaDeViolenciaDeGenero(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($VictimadeviolenciadegeneroDto->getcveVictimaDeViolenciaDeGenero(),"utf8"):strtoupper($VictimadeviolenciadegeneroDto->getcveVictimaDeViolenciaDeGenero()))))));
if($this->esFecha($VictimadeviolenciadegeneroDto->getcveVictimaDeViolenciaDeGenero())){
$VictimadeviolenciadegeneroDto->setcveVictimaDeViolenciaDeGenero($this->fechaMysql($VictimadeviolenciadegeneroDto->getcveVictimaDeViolenciaDeGenero()));
}
$VictimadeviolenciadegeneroDto->setdesVictimaDeViolenciaDeGenero(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($VictimadeviolenciadegeneroDto->getdesVictimaDeViolenciaDeGenero(),"utf8"):strtoupper($VictimadeviolenciadegeneroDto->getdesVictimaDeViolenciaDeGenero()))))));
if($this->esFecha($VictimadeviolenciadegeneroDto->getdesVictimaDeViolenciaDeGenero())){
$VictimadeviolenciadegeneroDto->setdesVictimaDeViolenciaDeGenero($this->fechaMysql($VictimadeviolenciadegeneroDto->getdesVictimaDeViolenciaDeGenero()));
}
$VictimadeviolenciadegeneroDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($VictimadeviolenciadegeneroDto->getactivo(),"utf8"):strtoupper($VictimadeviolenciadegeneroDto->getactivo()))))));
if($this->esFecha($VictimadeviolenciadegeneroDto->getactivo())){
$VictimadeviolenciadegeneroDto->setactivo($this->fechaMysql($VictimadeviolenciadegeneroDto->getactivo()));
}
$VictimadeviolenciadegeneroDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($VictimadeviolenciadegeneroDto->getfechaRegistro(),"utf8"):strtoupper($VictimadeviolenciadegeneroDto->getfechaRegistro()))))));
if($this->esFecha($VictimadeviolenciadegeneroDto->getfechaRegistro())){
$VictimadeviolenciadegeneroDto->setfechaRegistro($this->fechaMysql($VictimadeviolenciadegeneroDto->getfechaRegistro()));
}
$VictimadeviolenciadegeneroDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($VictimadeviolenciadegeneroDto->getfechaActualizacion(),"utf8"):strtoupper($VictimadeviolenciadegeneroDto->getfechaActualizacion()))))));
if($this->esFecha($VictimadeviolenciadegeneroDto->getfechaActualizacion())){
$VictimadeviolenciadegeneroDto->setfechaActualizacion($this->fechaMysql($VictimadeviolenciadegeneroDto->getfechaActualizacion()));
}
return $VictimadeviolenciadegeneroDto;
}
public function selectVictimadeviolenciadegenero($VictimadeviolenciadegeneroDto){
$VictimadeviolenciadegeneroDto=$this->validarVictimadeviolenciadegenero($VictimadeviolenciadegeneroDto);
$VictimadeviolenciadegeneroController = new VictimadeviolenciadegeneroController();
$VictimadeviolenciadegeneroDto = $VictimadeviolenciadegeneroController->selectVictimadeviolenciadegenero($VictimadeviolenciadegeneroDto);
if($VictimadeviolenciadegeneroDto!=""){
$dtoToJson = new DtoToJson($VictimadeviolenciadegeneroDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertVictimadeviolenciadegenero($VictimadeviolenciadegeneroDto){
$VictimadeviolenciadegeneroDto=$this->validarVictimadeviolenciadegenero($VictimadeviolenciadegeneroDto);
$VictimadeviolenciadegeneroController = new VictimadeviolenciadegeneroController();
$VictimadeviolenciadegeneroDto = $VictimadeviolenciadegeneroController->insertVictimadeviolenciadegenero($VictimadeviolenciadegeneroDto);
if($VictimadeviolenciadegeneroDto!=""){
$dtoToJson = new DtoToJson($VictimadeviolenciadegeneroDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateVictimadeviolenciadegenero($VictimadeviolenciadegeneroDto){
$VictimadeviolenciadegeneroDto=$this->validarVictimadeviolenciadegenero($VictimadeviolenciadegeneroDto);
$VictimadeviolenciadegeneroController = new VictimadeviolenciadegeneroController();
$VictimadeviolenciadegeneroDto = $VictimadeviolenciadegeneroController->updateVictimadeviolenciadegenero($VictimadeviolenciadegeneroDto);
if($VictimadeviolenciadegeneroDto!=""){
$dtoToJson = new DtoToJson($VictimadeviolenciadegeneroDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteVictimadeviolenciadegenero($VictimadeviolenciadegeneroDto){
$VictimadeviolenciadegeneroDto=$this->validarVictimadeviolenciadegenero($VictimadeviolenciadegeneroDto);
$VictimadeviolenciadegeneroController = new VictimadeviolenciadegeneroController();
$VictimadeviolenciadegeneroDto = $VictimadeviolenciadegeneroController->deleteVictimadeviolenciadegenero($VictimadeviolenciadegeneroDto);
if($VictimadeviolenciadegeneroDto==true){
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"REGISTRO ELIMINADO DE FORMA CORRECTA"));
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
}
private function esFecha($fecha) {
if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecha)) {
return true;
}
return false;
}
private function esFechaMysql($fecha) {
if (preg_match('/^\d{4}\-\d{1,2}\-\d{1,2}$/', $fecha)) {
return true;
}
return false;
}
private function fechaMysql($fecha) {
list($dia, $mes, $year) = explode("/", $fecha);
return $year . "-" . $mes . "-" . $dia;
}
private function fechaNormal($fecha) {
list($dia, $mes, $year) = explode("/", $fecha);
return $year . "-" . $mes . "-" . $dia;
}
}



@$cveVictimaDeViolenciaDeGenero=$_POST["cveVictimaDeViolenciaDeGenero"];
@$desVictimaDeViolenciaDeGenero=$_POST["desVictimaDeViolenciaDeGenero"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$victimadeviolenciadegeneroFacade = new VictimadeviolenciadegeneroFacade();
$victimadeviolenciadegeneroDto = new VictimadeviolenciadegeneroDTO();

$victimadeviolenciadegeneroDto->setCveVictimaDeViolenciaDeGenero($cveVictimaDeViolenciaDeGenero);
$victimadeviolenciadegeneroDto->setDesVictimaDeViolenciaDeGenero($desVictimaDeViolenciaDeGenero);
$victimadeviolenciadegeneroDto->setActivo($activo);
$victimadeviolenciadegeneroDto->setFechaRegistro($fechaRegistro);
$victimadeviolenciadegeneroDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveVictimaDeViolenciaDeGenero=="") ){
$victimadeviolenciadegeneroDto=$victimadeviolenciadegeneroFacade->insertVictimadeviolenciadegenero($victimadeviolenciadegeneroDto);
echo $victimadeviolenciadegeneroDto;
} else if(($accion=="guardar") && ($cveVictimaDeViolenciaDeGenero!="")){
$victimadeviolenciadegeneroDto=$victimadeviolenciadegeneroFacade->updateVictimadeviolenciadegenero($victimadeviolenciadegeneroDto);
echo $victimadeviolenciadegeneroDto;
} else if($accion=="consultar"){
$victimadeviolenciadegeneroDto=$victimadeviolenciadegeneroFacade->selectVictimadeviolenciadegenero($victimadeviolenciadegeneroDto);
echo $victimadeviolenciadegeneroDto;
} else if( ($accion=="baja") && ($cveVictimaDeViolenciaDeGenero!="") ){
$victimadeviolenciadegeneroDto=$victimadeviolenciadegeneroFacade->deleteVictimadeviolenciadegenero($victimadeviolenciadegeneroDto);
echo $victimadeviolenciadegeneroDto;
} else if( ($accion=="seleccionar") && ($cveVictimaDeViolenciaDeGenero!="") ){
$victimadeviolenciadegeneroDto=$victimadeviolenciadegeneroFacade->selectVictimadeviolenciadegenero($victimadeviolenciadegeneroDto);
echo $victimadeviolenciadegeneroDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}


?>