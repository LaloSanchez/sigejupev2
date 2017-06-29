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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/naturalezas/NaturalezasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/naturalezas/NaturalezasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class NaturalezasFacade {
private $proveedor;
public function __construct() {
}
public function validarNaturalezas($NaturalezasDto){
$NaturalezasDto->setcveNaturaleza(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NaturalezasDto->getcveNaturaleza(),"utf8"):strtoupper($NaturalezasDto->getcveNaturaleza()))))));
if($this->esFecha($NaturalezasDto->getcveNaturaleza())){
$NaturalezasDto->setcveNaturaleza($this->fechaMysql($NaturalezasDto->getcveNaturaleza()));
}
$NaturalezasDto->setdesNaturaleza(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NaturalezasDto->getdesNaturaleza(),"utf8"):strtoupper($NaturalezasDto->getdesNaturaleza()))))));
if($this->esFecha($NaturalezasDto->getdesNaturaleza())){
$NaturalezasDto->setdesNaturaleza($this->fechaMysql($NaturalezasDto->getdesNaturaleza()));
}
$NaturalezasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NaturalezasDto->getactivo(),"utf8"):strtoupper($NaturalezasDto->getactivo()))))));
if($this->esFecha($NaturalezasDto->getactivo())){
$NaturalezasDto->setactivo($this->fechaMysql($NaturalezasDto->getactivo()));
}
$NaturalezasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NaturalezasDto->getfechaRegistro(),"utf8"):strtoupper($NaturalezasDto->getfechaRegistro()))))));
if($this->esFecha($NaturalezasDto->getfechaRegistro())){
$NaturalezasDto->setfechaRegistro($this->fechaMysql($NaturalezasDto->getfechaRegistro()));
}
$NaturalezasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NaturalezasDto->getfechaActualizacion(),"utf8"):strtoupper($NaturalezasDto->getfechaActualizacion()))))));
if($this->esFecha($NaturalezasDto->getfechaActualizacion())){
$NaturalezasDto->setfechaActualizacion($this->fechaMysql($NaturalezasDto->getfechaActualizacion()));
}
return $NaturalezasDto;
}
public function selectNaturalezas($NaturalezasDto){
$NaturalezasDto=$this->validarNaturalezas($NaturalezasDto);
$NaturalezasController = new NaturalezasController();
$NaturalezasDto = $NaturalezasController->selectNaturalezas($NaturalezasDto);
if($NaturalezasDto!=""){
$dtoToJson = new DtoToJson($NaturalezasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertNaturalezas($NaturalezasDto){
$NaturalezasDto=$this->validarNaturalezas($NaturalezasDto);
$NaturalezasController = new NaturalezasController();
$NaturalezasDto = $NaturalezasController->insertNaturalezas($NaturalezasDto);
if($NaturalezasDto!=""){
$dtoToJson = new DtoToJson($NaturalezasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateNaturalezas($NaturalezasDto){
$NaturalezasDto=$this->validarNaturalezas($NaturalezasDto);
$NaturalezasController = new NaturalezasController();
$NaturalezasDto = $NaturalezasController->updateNaturalezas($NaturalezasDto);
if($NaturalezasDto!=""){
$dtoToJson = new DtoToJson($NaturalezasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteNaturalezas($NaturalezasDto){
$NaturalezasDto=$this->validarNaturalezas($NaturalezasDto);
$NaturalezasController = new NaturalezasController();
$NaturalezasDto = $NaturalezasController->deleteNaturalezas($NaturalezasDto);
if($NaturalezasDto==true){
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



@$cveNaturaleza=$_POST["cveNaturaleza"];
@$desNaturaleza=$_POST["desNaturaleza"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$naturalezasFacade = new NaturalezasFacade();
$naturalezasDto = new NaturalezasDTO();

$naturalezasDto->setCveNaturaleza($cveNaturaleza);
$naturalezasDto->setDesNaturaleza($desNaturaleza);
$naturalezasDto->setActivo($activo);
$naturalezasDto->setFechaRegistro($fechaRegistro);
$naturalezasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveNaturaleza=="") ){
$naturalezasDto=$naturalezasFacade->insertNaturalezas($naturalezasDto);
echo $naturalezasDto;
} else if(($accion=="guardar") && ($cveNaturaleza!="")){
$naturalezasDto=$naturalezasFacade->updateNaturalezas($naturalezasDto);
echo $naturalezasDto;
} else if($accion=="consultar"){
$naturalezasDto=$naturalezasFacade->selectNaturalezas($naturalezasDto);
echo $naturalezasDto;
} else if( ($accion=="baja") && ($cveNaturaleza!="") ){
$naturalezasDto=$naturalezasFacade->deleteNaturalezas($naturalezasDto);
echo $naturalezasDto;
} else if( ($accion=="seleccionar") && ($cveNaturaleza!="") ){
$naturalezasDto=$naturalezasFacade->selectNaturalezas($naturalezasDto);
echo $naturalezasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>