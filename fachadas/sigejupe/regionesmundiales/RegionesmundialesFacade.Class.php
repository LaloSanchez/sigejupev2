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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/regionesmundiales/RegionesmundialesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/regionesmundiales/RegionesmundialesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class RegionesmundialesFacade {
private $proveedor;
public function __construct() {
}
public function validarRegionesmundiales($RegionesmundialesDto){
$RegionesmundialesDto->setcveRegionMundial(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RegionesmundialesDto->getcveRegionMundial(),"utf8"):strtoupper($RegionesmundialesDto->getcveRegionMundial()))))));
if($this->esFecha($RegionesmundialesDto->getcveRegionMundial())){
$RegionesmundialesDto->setcveRegionMundial($this->fechaMysql($RegionesmundialesDto->getcveRegionMundial()));
}
$RegionesmundialesDto->setdesRegionMundial(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RegionesmundialesDto->getdesRegionMundial(),"utf8"):strtoupper($RegionesmundialesDto->getdesRegionMundial()))))));
if($this->esFecha($RegionesmundialesDto->getdesRegionMundial())){
$RegionesmundialesDto->setdesRegionMundial($this->fechaMysql($RegionesmundialesDto->getdesRegionMundial()));
}
$RegionesmundialesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RegionesmundialesDto->getactivo(),"utf8"):strtoupper($RegionesmundialesDto->getactivo()))))));
if($this->esFecha($RegionesmundialesDto->getactivo())){
$RegionesmundialesDto->setactivo($this->fechaMysql($RegionesmundialesDto->getactivo()));
}
$RegionesmundialesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RegionesmundialesDto->getfechaRegistro(),"utf8"):strtoupper($RegionesmundialesDto->getfechaRegistro()))))));
if($this->esFecha($RegionesmundialesDto->getfechaRegistro())){
$RegionesmundialesDto->setfechaRegistro($this->fechaMysql($RegionesmundialesDto->getfechaRegistro()));
}
$RegionesmundialesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RegionesmundialesDto->getfechaActualizacion(),"utf8"):strtoupper($RegionesmundialesDto->getfechaActualizacion()))))));
if($this->esFecha($RegionesmundialesDto->getfechaActualizacion())){
$RegionesmundialesDto->setfechaActualizacion($this->fechaMysql($RegionesmundialesDto->getfechaActualizacion()));
}
return $RegionesmundialesDto;
}
public function selectRegionesmundiales($RegionesmundialesDto){
$RegionesmundialesDto=$this->validarRegionesmundiales($RegionesmundialesDto);
$RegionesmundialesController = new RegionesmundialesController();
$RegionesmundialesDto = $RegionesmundialesController->selectRegionesmundiales($RegionesmundialesDto);
if($RegionesmundialesDto!=""){
$dtoToJson = new DtoToJson($RegionesmundialesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertRegionesmundiales($RegionesmundialesDto){
$RegionesmundialesDto=$this->validarRegionesmundiales($RegionesmundialesDto);
$RegionesmundialesController = new RegionesmundialesController();
$RegionesmundialesDto = $RegionesmundialesController->insertRegionesmundiales($RegionesmundialesDto);
if($RegionesmundialesDto!=""){
$dtoToJson = new DtoToJson($RegionesmundialesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateRegionesmundiales($RegionesmundialesDto){
$RegionesmundialesDto=$this->validarRegionesmundiales($RegionesmundialesDto);
$RegionesmundialesController = new RegionesmundialesController();
$RegionesmundialesDto = $RegionesmundialesController->updateRegionesmundiales($RegionesmundialesDto);
if($RegionesmundialesDto!=""){
$dtoToJson = new DtoToJson($RegionesmundialesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteRegionesmundiales($RegionesmundialesDto){
$RegionesmundialesDto=$this->validarRegionesmundiales($RegionesmundialesDto);
$RegionesmundialesController = new RegionesmundialesController();
$RegionesmundialesDto = $RegionesmundialesController->deleteRegionesmundiales($RegionesmundialesDto);
if($RegionesmundialesDto==true){
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



@$cveRegionMundial=$_POST["cveRegionMundial"];
@$desRegionMundial=$_POST["desRegionMundial"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$regionesmundialesFacade = new RegionesmundialesFacade();
$regionesmundialesDto = new RegionesmundialesDTO();

$regionesmundialesDto->setCveRegionMundial($cveRegionMundial);
$regionesmundialesDto->setDesRegionMundial($desRegionMundial);
$regionesmundialesDto->setActivo($activo);
$regionesmundialesDto->setFechaRegistro($fechaRegistro);
$regionesmundialesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveRegionMundial=="") ){
$regionesmundialesDto=$regionesmundialesFacade->insertRegionesmundiales($regionesmundialesDto);
echo $regionesmundialesDto;
} else if(($accion=="guardar") && ($cveRegionMundial!="")){
$regionesmundialesDto=$regionesmundialesFacade->updateRegionesmundiales($regionesmundialesDto);
echo $regionesmundialesDto;
} else if($accion=="consultar"){
$regionesmundialesDto=$regionesmundialesFacade->selectRegionesmundiales($regionesmundialesDto);
echo $regionesmundialesDto;
} else if( ($accion=="baja") && ($cveRegionMundial!="") ){
$regionesmundialesDto=$regionesmundialesFacade->deleteRegionesmundiales($regionesmundialesDto);
echo $regionesmundialesDto;
} else if( ($accion=="seleccionar") && ($cveRegionMundial!="") ){
$regionesmundialesDto=$regionesmundialesFacade->selectRegionesmundiales($regionesmundialesDto);
echo $regionesmundialesDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>