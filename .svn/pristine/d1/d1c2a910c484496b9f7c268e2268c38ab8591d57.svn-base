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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/personascomparecencias/PersonascomparecenciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/personascomparecencias/PersonascomparecenciasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class PersonascomparecenciasFacade {
private $proveedor;
public function __construct() {
}
public function validarPersonascomparecencias($PersonascomparecenciasDto){
$PersonascomparecenciasDto->setidPersonacomparecencia(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonascomparecenciasDto->getidPersonacomparecencia(),"utf8"):strtoupper($PersonascomparecenciasDto->getidPersonacomparecencia()))))));
if($this->esFecha($PersonascomparecenciasDto->getidPersonacomparecencia())){
$PersonascomparecenciasDto->setidPersonacomparecencia($this->fechaMysql($PersonascomparecenciasDto->getidPersonacomparecencia()));
}
$PersonascomparecenciasDto->setidComparecencia(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonascomparecenciasDto->getidComparecencia(),"utf8"):strtoupper($PersonascomparecenciasDto->getidComparecencia()))))));
if($this->esFecha($PersonascomparecenciasDto->getidComparecencia())){
$PersonascomparecenciasDto->setidComparecencia($this->fechaMysql($PersonascomparecenciasDto->getidComparecencia()));
}
$PersonascomparecenciasDto->setcveTipoParte(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonascomparecenciasDto->getcveTipoParte(),"utf8"):strtoupper($PersonascomparecenciasDto->getcveTipoParte()))))));
if($this->esFecha($PersonascomparecenciasDto->getcveTipoParte())){
$PersonascomparecenciasDto->setcveTipoParte($this->fechaMysql($PersonascomparecenciasDto->getcveTipoParte()));
}
$PersonascomparecenciasDto->setcveTipoPersona(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonascomparecenciasDto->getcveTipoPersona(),"utf8"):strtoupper($PersonascomparecenciasDto->getcveTipoPersona()))))));
if($this->esFecha($PersonascomparecenciasDto->getcveTipoPersona())){
$PersonascomparecenciasDto->setcveTipoPersona($this->fechaMysql($PersonascomparecenciasDto->getcveTipoPersona()));
}
$PersonascomparecenciasDto->setnombre(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonascomparecenciasDto->getnombre(),"utf8"):strtoupper($PersonascomparecenciasDto->getnombre()))))));
if($this->esFecha($PersonascomparecenciasDto->getnombre())){
$PersonascomparecenciasDto->setnombre($this->fechaMysql($PersonascomparecenciasDto->getnombre()));
}
$PersonascomparecenciasDto->setpaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonascomparecenciasDto->getpaterno(),"utf8"):strtoupper($PersonascomparecenciasDto->getpaterno()))))));
if($this->esFecha($PersonascomparecenciasDto->getpaterno())){
$PersonascomparecenciasDto->setpaterno($this->fechaMysql($PersonascomparecenciasDto->getpaterno()));
}
$PersonascomparecenciasDto->setmaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonascomparecenciasDto->getmaterno(),"utf8"):strtoupper($PersonascomparecenciasDto->getmaterno()))))));
if($this->esFecha($PersonascomparecenciasDto->getmaterno())){
$PersonascomparecenciasDto->setmaterno($this->fechaMysql($PersonascomparecenciasDto->getmaterno()));
}
$PersonascomparecenciasDto->setnombrePersonaMoral(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonascomparecenciasDto->getnombrePersonaMoral(),"utf8"):strtoupper($PersonascomparecenciasDto->getnombrePersonaMoral()))))));
if($this->esFecha($PersonascomparecenciasDto->getnombrePersonaMoral())){
$PersonascomparecenciasDto->setnombrePersonaMoral($this->fechaMysql($PersonascomparecenciasDto->getnombrePersonaMoral()));
}
$PersonascomparecenciasDto->setcveGenero(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonascomparecenciasDto->getcveGenero(),"utf8"):strtoupper($PersonascomparecenciasDto->getcveGenero()))))));
if($this->esFecha($PersonascomparecenciasDto->getcveGenero())){
$PersonascomparecenciasDto->setcveGenero($this->fechaMysql($PersonascomparecenciasDto->getcveGenero()));
}
$PersonascomparecenciasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonascomparecenciasDto->getfechaActualizacion(),"utf8"):strtoupper($PersonascomparecenciasDto->getfechaActualizacion()))))));
if($this->esFecha($PersonascomparecenciasDto->getfechaActualizacion())){
$PersonascomparecenciasDto->setfechaActualizacion($this->fechaMysql($PersonascomparecenciasDto->getfechaActualizacion()));
}
$PersonascomparecenciasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonascomparecenciasDto->getfechaRegistro(),"utf8"):strtoupper($PersonascomparecenciasDto->getfechaRegistro()))))));
if($this->esFecha($PersonascomparecenciasDto->getfechaRegistro())){
$PersonascomparecenciasDto->setfechaRegistro($this->fechaMysql($PersonascomparecenciasDto->getfechaRegistro()));
}
return $PersonascomparecenciasDto;
}
public function selectPersonascomparecencias($PersonascomparecenciasDto){
$PersonascomparecenciasDto=$this->validarPersonascomparecencias($PersonascomparecenciasDto);
$PersonascomparecenciasController = new PersonascomparecenciasController();
$PersonascomparecenciasDto = $PersonascomparecenciasController->selectPersonascomparecencias($PersonascomparecenciasDto);
if($PersonascomparecenciasDto!=""){
$dtoToJson = new DtoToJson($PersonascomparecenciasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertPersonascomparecencias($PersonascomparecenciasDto){
$PersonascomparecenciasDto=$this->validarPersonascomparecencias($PersonascomparecenciasDto);
$PersonascomparecenciasController = new PersonascomparecenciasController();
$PersonascomparecenciasDto = $PersonascomparecenciasController->insertPersonascomparecencias($PersonascomparecenciasDto);
if($PersonascomparecenciasDto!=""){
$dtoToJson = new DtoToJson($PersonascomparecenciasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updatePersonascomparecencias($PersonascomparecenciasDto){
$PersonascomparecenciasDto=$this->validarPersonascomparecencias($PersonascomparecenciasDto);
$PersonascomparecenciasController = new PersonascomparecenciasController();
$PersonascomparecenciasDto = $PersonascomparecenciasController->updatePersonascomparecencias($PersonascomparecenciasDto);
if($PersonascomparecenciasDto!=""){
$dtoToJson = new DtoToJson($PersonascomparecenciasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deletePersonascomparecencias($PersonascomparecenciasDto){
$PersonascomparecenciasDto=$this->validarPersonascomparecencias($PersonascomparecenciasDto);
$PersonascomparecenciasController = new PersonascomparecenciasController();
$PersonascomparecenciasDto = $PersonascomparecenciasController->deletePersonascomparecencias($PersonascomparecenciasDto);
if($PersonascomparecenciasDto==true){
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



@$idPersonacomparecencia=$_POST["idPersonacomparecencia"];
@$idComparecencia=$_POST["idComparecencia"];
@$cveTipoParte=$_POST["cveTipoParte"];
@$cveTipoPersona=$_POST["cveTipoPersona"];
@$nombre=$_POST["nombre"];
@$paterno=$_POST["paterno"];
@$materno=$_POST["materno"];
@$nombrePersonaMoral=$_POST["nombrePersonaMoral"];
@$cveGenero=$_POST["cveGenero"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$accion=$_POST["accion"];

$personascomparecenciasFacade = new PersonascomparecenciasFacade();
$personascomparecenciasDto = new PersonascomparecenciasDTO();

$personascomparecenciasDto->setIdPersonacomparecencia($idPersonacomparecencia);
$personascomparecenciasDto->setIdComparecencia($idComparecencia);
$personascomparecenciasDto->setCveTipoParte($cveTipoParte);
$personascomparecenciasDto->setCveTipoPersona($cveTipoPersona);
$personascomparecenciasDto->setNombre($nombre);
$personascomparecenciasDto->setPaterno($paterno);
$personascomparecenciasDto->setMaterno($materno);
$personascomparecenciasDto->setNombrePersonaMoral($nombrePersonaMoral);
$personascomparecenciasDto->setCveGenero($cveGenero);
$personascomparecenciasDto->setFechaActualizacion($fechaActualizacion);
$personascomparecenciasDto->setFechaRegistro($fechaRegistro);

if( ($accion=="guardar") && ($idPersonacomparecencia=="") ){
$personascomparecenciasDto=$personascomparecenciasFacade->insertPersonascomparecencias($personascomparecenciasDto);
echo $personascomparecenciasDto;
} else if(($accion=="guardar") && ($idPersonacomparecencia!="")){
$personascomparecenciasDto=$personascomparecenciasFacade->updatePersonascomparecencias($personascomparecenciasDto);
echo $personascomparecenciasDto;
} else if($accion=="consultar"){
$personascomparecenciasDto=$personascomparecenciasFacade->selectPersonascomparecencias($personascomparecenciasDto);
echo $personascomparecenciasDto;
} else if( ($accion=="baja") && ($idPersonacomparecencia!="") ){
$personascomparecenciasDto=$personascomparecenciasFacade->deletePersonascomparecencias($personascomparecenciasDto);
echo $personascomparecenciasDto;
} else if( ($accion=="seleccionar") && ($idPersonacomparecencia!="") ){
$personascomparecenciasDto=$personascomparecenciasFacade->selectPersonascomparecencias($personascomparecenciasDto);
echo $personascomparecenciasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>