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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/dialectoindigena/DialectoindigenaDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/dialectoindigena/DialectoindigenaController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class DialectoindigenaFacade {
private $proveedor;
public function __construct() {
}
public function validarDialectoindigena($DialectoindigenaDto){
$DialectoindigenaDto->setcveDialectoIndigena(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DialectoindigenaDto->getcveDialectoIndigena(),"utf8"):strtoupper($DialectoindigenaDto->getcveDialectoIndigena()))))));
if($this->esFecha($DialectoindigenaDto->getcveDialectoIndigena())){
$DialectoindigenaDto->setcveDialectoIndigena($this->fechaMysql($DialectoindigenaDto->getcveDialectoIndigena()));
}
$DialectoindigenaDto->setdesDialectoIndigena(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DialectoindigenaDto->getdesDialectoIndigena(),"utf8"):strtoupper($DialectoindigenaDto->getdesDialectoIndigena()))))));
if($this->esFecha($DialectoindigenaDto->getdesDialectoIndigena())){
$DialectoindigenaDto->setdesDialectoIndigena($this->fechaMysql($DialectoindigenaDto->getdesDialectoIndigena()));
}
$DialectoindigenaDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DialectoindigenaDto->getactivo(),"utf8"):strtoupper($DialectoindigenaDto->getactivo()))))));
if($this->esFecha($DialectoindigenaDto->getactivo())){
$DialectoindigenaDto->setactivo($this->fechaMysql($DialectoindigenaDto->getactivo()));
}
$DialectoindigenaDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DialectoindigenaDto->getfechaRegistro(),"utf8"):strtoupper($DialectoindigenaDto->getfechaRegistro()))))));
if($this->esFecha($DialectoindigenaDto->getfechaRegistro())){
$DialectoindigenaDto->setfechaRegistro($this->fechaMysql($DialectoindigenaDto->getfechaRegistro()));
}
$DialectoindigenaDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DialectoindigenaDto->getfechaActualizacion(),"utf8"):strtoupper($DialectoindigenaDto->getfechaActualizacion()))))));
if($this->esFecha($DialectoindigenaDto->getfechaActualizacion())){
$DialectoindigenaDto->setfechaActualizacion($this->fechaMysql($DialectoindigenaDto->getfechaActualizacion()));
}
return $DialectoindigenaDto;
}
public function selectDialectoindigena($DialectoindigenaDto){
$DialectoindigenaDto=$this->validarDialectoindigena($DialectoindigenaDto);
$DialectoindigenaController = new DialectoindigenaController();
$DialectoindigenaDto = $DialectoindigenaController->selectDialectoindigena($DialectoindigenaDto);
if($DialectoindigenaDto!=""){
$dtoToJson = new DtoToJson($DialectoindigenaDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertDialectoindigena($DialectoindigenaDto){
$DialectoindigenaDto=$this->validarDialectoindigena($DialectoindigenaDto);
$DialectoindigenaController = new DialectoindigenaController();
$DialectoindigenaDto = $DialectoindigenaController->insertDialectoindigena($DialectoindigenaDto);
if($DialectoindigenaDto!=""){
$dtoToJson = new DtoToJson($DialectoindigenaDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateDialectoindigena($DialectoindigenaDto){
$DialectoindigenaDto=$this->validarDialectoindigena($DialectoindigenaDto);
$DialectoindigenaController = new DialectoindigenaController();
$DialectoindigenaDto = $DialectoindigenaController->updateDialectoindigena($DialectoindigenaDto);
if($DialectoindigenaDto!=""){
$dtoToJson = new DtoToJson($DialectoindigenaDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteDialectoindigena($DialectoindigenaDto){
$DialectoindigenaDto=$this->validarDialectoindigena($DialectoindigenaDto);
$DialectoindigenaController = new DialectoindigenaController();
$DialectoindigenaDto = $DialectoindigenaController->deleteDialectoindigena($DialectoindigenaDto);
if($DialectoindigenaDto==true){
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



@$cveDialectoIndigena=$_POST["cveDialectoIndigena"];
@$desDialectoIndigena=$_POST["desDialectoIndigena"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$dialectoindigenaFacade = new DialectoindigenaFacade();
$dialectoindigenaDto = new DialectoindigenaDTO();

$dialectoindigenaDto->setCveDialectoIndigena($cveDialectoIndigena);
$dialectoindigenaDto->setDesDialectoIndigena($desDialectoIndigena);
$dialectoindigenaDto->setActivo($activo);
$dialectoindigenaDto->setFechaRegistro($fechaRegistro);
$dialectoindigenaDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveDialectoIndigena=="") ){
$dialectoindigenaDto=$dialectoindigenaFacade->insertDialectoindigena($dialectoindigenaDto);
echo $dialectoindigenaDto;
} else if(($accion=="guardar") && ($cveDialectoIndigena!="")){
$dialectoindigenaDto=$dialectoindigenaFacade->updateDialectoindigena($dialectoindigenaDto);
echo $dialectoindigenaDto;
} else if($accion=="consultar"){
$dialectoindigenaDto=$dialectoindigenaFacade->selectDialectoindigena($dialectoindigenaDto);
echo $dialectoindigenaDto;
} else if( ($accion=="baja") && ($cveDialectoIndigena!="") ){
$dialectoindigenaDto=$dialectoindigenaFacade->deleteDialectoindigena($dialectoindigenaDto);
echo $dialectoindigenaDto;
} else if( ($accion=="seleccionar") && ($cveDialectoIndigena!="") ){
$dialectoindigenaDto=$dialectoindigenaFacade->selectDialectoindigena($dialectoindigenaDto);
echo $dialectoindigenaDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>