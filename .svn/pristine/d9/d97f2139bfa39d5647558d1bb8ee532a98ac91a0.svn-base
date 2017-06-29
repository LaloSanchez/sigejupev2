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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/personasordenes/PersonasordenesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/personasordenes/PersonasordenesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class PersonasordenesFacade {
private $proveedor;
public function __construct() {
}
public function validarPersonasordenes($PersonasordenesDto){
$PersonasordenesDto->setidPersonaOrden(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasordenesDto->getidPersonaOrden(),"utf8"):strtoupper($PersonasordenesDto->getidPersonaOrden()))))));
if($this->esFecha($PersonasordenesDto->getidPersonaOrden())){
$PersonasordenesDto->setidPersonaOrden($this->fechaMysql($PersonasordenesDto->getidPersonaOrden()));
}
$PersonasordenesDto->setidSolicitudOrden(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasordenesDto->getidSolicitudOrden(),"utf8"):strtoupper($PersonasordenesDto->getidSolicitudOrden()))))));
if($this->esFecha($PersonasordenesDto->getidSolicitudOrden())){
$PersonasordenesDto->setidSolicitudOrden($this->fechaMysql($PersonasordenesDto->getidSolicitudOrden()));
}
$PersonasordenesDto->setpaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasordenesDto->getpaterno(),"utf8"):strtoupper($PersonasordenesDto->getpaterno()))))));
if($this->esFecha($PersonasordenesDto->getpaterno())){
$PersonasordenesDto->setpaterno($this->fechaMysql($PersonasordenesDto->getpaterno()));
}
$PersonasordenesDto->setmaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasordenesDto->getmaterno(),"utf8"):strtoupper($PersonasordenesDto->getmaterno()))))));
if($this->esFecha($PersonasordenesDto->getmaterno())){
$PersonasordenesDto->setmaterno($this->fechaMysql($PersonasordenesDto->getmaterno()));
}
$PersonasordenesDto->setnombre(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasordenesDto->getnombre(),"utf8"):strtoupper($PersonasordenesDto->getnombre()))))));
if($this->esFecha($PersonasordenesDto->getnombre())){
$PersonasordenesDto->setnombre($this->fechaMysql($PersonasordenesDto->getnombre()));
}
$PersonasordenesDto->setdomicilio(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasordenesDto->getdomicilio(),"utf8"):strtoupper($PersonasordenesDto->getdomicilio()))))));
if($this->esFecha($PersonasordenesDto->getdomicilio())){
$PersonasordenesDto->setdomicilio($this->fechaMysql($PersonasordenesDto->getdomicilio()));
}
$PersonasordenesDto->setcveMunicipio(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasordenesDto->getcveMunicipio(),"utf8"):strtoupper($PersonasordenesDto->getcveMunicipio()))))));
if($this->esFecha($PersonasordenesDto->getcveMunicipio())){
$PersonasordenesDto->setcveMunicipio($this->fechaMysql($PersonasordenesDto->getcveMunicipio()));
}
$PersonasordenesDto->setcveGenero(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasordenesDto->getcveGenero(),"utf8"):strtoupper($PersonasordenesDto->getcveGenero()))))));
if($this->esFecha($PersonasordenesDto->getcveGenero())){
$PersonasordenesDto->setcveGenero($this->fechaMysql($PersonasordenesDto->getcveGenero()));
}
$PersonasordenesDto->setcveOrigen(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasordenesDto->getcveOrigen(),"utf8"):strtoupper($PersonasordenesDto->getcveOrigen()))))));
if($this->esFecha($PersonasordenesDto->getcveOrigen())){
$PersonasordenesDto->setcveOrigen($this->fechaMysql($PersonasordenesDto->getcveOrigen()));
}
return $PersonasordenesDto;
}
public function selectPersonasordenes($PersonasordenesDto){
$PersonasordenesDto=$this->validarPersonasordenes($PersonasordenesDto);
$PersonasordenesController = new PersonasordenesController();
$PersonasordenesDto = $PersonasordenesController->selectPersonasordenes($PersonasordenesDto);
if($PersonasordenesDto!=""){
$dtoToJson = new DtoToJson($PersonasordenesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertPersonasordenes($PersonasordenesDto){
$PersonasordenesDto=$this->validarPersonasordenes($PersonasordenesDto);
$PersonasordenesController = new PersonasordenesController();
$PersonasordenesDto = $PersonasordenesController->insertPersonasordenes($PersonasordenesDto);
if($PersonasordenesDto!=""){
$dtoToJson = new DtoToJson($PersonasordenesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updatePersonasordenes($PersonasordenesDto){
$PersonasordenesDto=$this->validarPersonasordenes($PersonasordenesDto);
$PersonasordenesController = new PersonasordenesController();
$PersonasordenesDto = $PersonasordenesController->updatePersonasordenes($PersonasordenesDto);
if($PersonasordenesDto!=""){
$dtoToJson = new DtoToJson($PersonasordenesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deletePersonasordenes($PersonasordenesDto){
$PersonasordenesDto=$this->validarPersonasordenes($PersonasordenesDto);
$PersonasordenesController = new PersonasordenesController();
$PersonasordenesDto = $PersonasordenesController->deletePersonasordenes($PersonasordenesDto);
if($PersonasordenesDto==true){
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



@$idPersonaOrden=$_POST["idPersonaOrden"];
@$idSolicitudOrden=$_POST["idSolicitudOrden"];
@$paterno=$_POST["paterno"];
@$materno=$_POST["materno"];
@$nombre=$_POST["nombre"];
@$domicilio=$_POST["domicilio"];
@$cveMunicipio=$_POST["cveMunicipio"];
@$cveGenero=$_POST["cveGenero"];
@$cveOrigen=$_POST["cveOrigen"];
@$accion=$_POST["accion"];

$personasordenesFacade = new PersonasordenesFacade();
$personasordenesDto = new PersonasordenesDTO();

$personasordenesDto->setIdPersonaOrden($idPersonaOrden);
$personasordenesDto->setIdSolicitudOrden($idSolicitudOrden);
$personasordenesDto->setPaterno($paterno);
$personasordenesDto->setMaterno($materno);
$personasordenesDto->setNombre($nombre);
$personasordenesDto->setDomicilio($domicilio);
$personasordenesDto->setCveMunicipio($cveMunicipio);
$personasordenesDto->setCveGenero($cveGenero);
$personasordenesDto->setCveOrigen($cveOrigen);

if( ($accion=="guardar") && ($idPersonaOrden=="") ){
$personasordenesDto=$personasordenesFacade->insertPersonasordenes($personasordenesDto);
echo $personasordenesDto;
} else if(($accion=="guardar") && ($idPersonaOrden!="")){
$personasordenesDto=$personasordenesFacade->updatePersonasordenes($personasordenesDto);
echo $personasordenesDto;
} else if($accion=="consultar"){
$personasordenesDto=$personasordenesFacade->selectPersonasordenes($personasordenesDto);
echo $personasordenesDto;
} else if( ($accion=="baja") && ($idPersonaOrden!="") ){
$personasordenesDto=$personasordenesFacade->deletePersonasordenes($personasordenesDto);
echo $personasordenesDto;
} else if( ($accion=="seleccionar") && ($idPersonaOrden!="") ){
$personasordenesDto=$personasordenesFacade->selectPersonasordenes($personasordenesDto);
echo $personasordenesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>