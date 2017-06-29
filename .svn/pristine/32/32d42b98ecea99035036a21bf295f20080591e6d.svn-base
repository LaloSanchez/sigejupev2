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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/personas/PersonasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/personas/PersonasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class PersonasFacade {
private $proveedor;
public function __construct() {
}
public function validarPersonas($PersonasDto){
$PersonasDto->setidPersona(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasDto->getidPersona(),"utf8"):strtoupper($PersonasDto->getidPersona()))))));
if($this->esFecha($PersonasDto->getidPersona())){
$PersonasDto->setidPersona($this->fechaMysql($PersonasDto->getidPersona()));
}
$PersonasDto->setidSolicitudCateo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasDto->getidSolicitudCateo(),"utf8"):strtoupper($PersonasDto->getidSolicitudCateo()))))));
if($this->esFecha($PersonasDto->getidSolicitudCateo())){
$PersonasDto->setidSolicitudCateo($this->fechaMysql($PersonasDto->getidSolicitudCateo()));
}
$PersonasDto->setpaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasDto->getpaterno(),"utf8"):strtoupper($PersonasDto->getpaterno()))))));
if($this->esFecha($PersonasDto->getpaterno())){
$PersonasDto->setpaterno($this->fechaMysql($PersonasDto->getpaterno()));
}
$PersonasDto->setmaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasDto->getmaterno(),"utf8"):strtoupper($PersonasDto->getmaterno()))))));
if($this->esFecha($PersonasDto->getmaterno())){
$PersonasDto->setmaterno($this->fechaMysql($PersonasDto->getmaterno()));
}
$PersonasDto->setnombre(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasDto->getnombre(),"utf8"):strtoupper($PersonasDto->getnombre()))))));
if($this->esFecha($PersonasDto->getnombre())){
$PersonasDto->setnombre($this->fechaMysql($PersonasDto->getnombre()));
}
$PersonasDto->setdomicilio(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasDto->getdomicilio(),"utf8"):strtoupper($PersonasDto->getdomicilio()))))));
if($this->esFecha($PersonasDto->getdomicilio())){
$PersonasDto->setdomicilio($this->fechaMysql($PersonasDto->getdomicilio()));
}
$PersonasDto->setcveMunicipio(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasDto->getcveMunicipio(),"utf8"):strtoupper($PersonasDto->getcveMunicipio()))))));
if($this->esFecha($PersonasDto->getcveMunicipio())){
$PersonasDto->setcveMunicipio($this->fechaMysql($PersonasDto->getcveMunicipio()));
}
$PersonasDto->setcveGenero(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasDto->getcveGenero(),"utf8"):strtoupper($PersonasDto->getcveGenero()))))));
if($this->esFecha($PersonasDto->getcveGenero())){
$PersonasDto->setcveGenero($this->fechaMysql($PersonasDto->getcveGenero()));
}
return $PersonasDto;
}
public function selectPersonas($PersonasDto){
$PersonasDto=$this->validarPersonas($PersonasDto);
$PersonasController = new PersonasController();
$PersonasDto = $PersonasController->selectPersonas($PersonasDto);
if($PersonasDto!=""){
$dtoToJson = new DtoToJson($PersonasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertPersonas($PersonasDto){
$PersonasDto=$this->validarPersonas($PersonasDto);
$PersonasController = new PersonasController();
$PersonasDto = $PersonasController->insertPersonas($PersonasDto);
if($PersonasDto!=""){
$dtoToJson = new DtoToJson($PersonasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updatePersonas($PersonasDto){
$PersonasDto=$this->validarPersonas($PersonasDto);
$PersonasController = new PersonasController();
$PersonasDto = $PersonasController->updatePersonas($PersonasDto);
if($PersonasDto!=""){
$dtoToJson = new DtoToJson($PersonasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deletePersonas($PersonasDto){
$PersonasDto=$this->validarPersonas($PersonasDto);
$PersonasController = new PersonasController();
$PersonasDto = $PersonasController->deletePersonas($PersonasDto);
if($PersonasDto==true){
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



@$idPersona=$_POST["idPersona"];
@$idSolicitudCateo=$_POST["idSolicitudCateo"];
@$paterno=$_POST["paterno"];
@$materno=$_POST["materno"];
@$nombre=$_POST["nombre"];
@$domicilio=$_POST["domicilio"];
@$cveMunicipio=$_POST["cveMunicipio"];
@$cveGenero=$_POST["cveGenero"];
@$accion=$_POST["accion"];

$personasFacade = new PersonasFacade();
$personasDto = new PersonasDTO();

$personasDto->setIdPersona($idPersona);
$personasDto->setIdSolicitudCateo($idSolicitudCateo);
$personasDto->setPaterno($paterno);
$personasDto->setMaterno($materno);
$personasDto->setNombre($nombre);
$personasDto->setDomicilio($domicilio);
$personasDto->setCveMunicipio($cveMunicipio);
$personasDto->setCveGenero($cveGenero);

if( ($accion=="guardar") && ($idPersona=="") ){
$personasDto=$personasFacade->insertPersonas($personasDto);
echo $personasDto;
} else if(($accion=="guardar") && ($idPersona!="")){
$personasDto=$personasFacade->updatePersonas($personasDto);
echo $personasDto;
} else if($accion=="consultar"){
$personasDto=$personasFacade->selectPersonas($personasDto);
echo $personasDto;
} else if( ($accion=="baja") && ($idPersona!="") ){
$personasDto=$personasFacade->deletePersonas($personasDto);
echo $personasDto;
} else if( ($accion=="seleccionar") && ($idPersona!="") ){
$personasDto=$personasFacade->selectPersonas($personasDto);
echo $personasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>