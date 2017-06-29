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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/consignacionesacciones/ConsignacionesaccionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/consignacionesacciones/ConsignacionesaccionesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class ConsignacionesaccionesFacade {
private $proveedor;
public function __construct() {
}
public function validarConsignacionesacciones($ConsignacionesaccionesDto){
$ConsignacionesaccionesDto->setcveConsignacionA(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConsignacionesaccionesDto->getcveConsignacionA(),"utf8"):strtoupper($ConsignacionesaccionesDto->getcveConsignacionA()))))));
if($this->esFecha($ConsignacionesaccionesDto->getcveConsignacionA())){
$ConsignacionesaccionesDto->setcveConsignacionA($this->fechaMysql($ConsignacionesaccionesDto->getcveConsignacionA()));
}
$ConsignacionesaccionesDto->setdesConsignacionA(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConsignacionesaccionesDto->getdesConsignacionA(),"utf8"):strtoupper($ConsignacionesaccionesDto->getdesConsignacionA()))))));
if($this->esFecha($ConsignacionesaccionesDto->getdesConsignacionA())){
$ConsignacionesaccionesDto->setdesConsignacionA($this->fechaMysql($ConsignacionesaccionesDto->getdesConsignacionA()));
}
$ConsignacionesaccionesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConsignacionesaccionesDto->getactivo(),"utf8"):strtoupper($ConsignacionesaccionesDto->getactivo()))))));
if($this->esFecha($ConsignacionesaccionesDto->getactivo())){
$ConsignacionesaccionesDto->setactivo($this->fechaMysql($ConsignacionesaccionesDto->getactivo()));
}
$ConsignacionesaccionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConsignacionesaccionesDto->getfechaRegistro(),"utf8"):strtoupper($ConsignacionesaccionesDto->getfechaRegistro()))))));
if($this->esFecha($ConsignacionesaccionesDto->getfechaRegistro())){
$ConsignacionesaccionesDto->setfechaRegistro($this->fechaMysql($ConsignacionesaccionesDto->getfechaRegistro()));
}
$ConsignacionesaccionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConsignacionesaccionesDto->getfechaActualizacion(),"utf8"):strtoupper($ConsignacionesaccionesDto->getfechaActualizacion()))))));
if($this->esFecha($ConsignacionesaccionesDto->getfechaActualizacion())){
$ConsignacionesaccionesDto->setfechaActualizacion($this->fechaMysql($ConsignacionesaccionesDto->getfechaActualizacion()));
}
return $ConsignacionesaccionesDto;
}
public function selectConsignacionesacciones($ConsignacionesaccionesDto){
$ConsignacionesaccionesDto=$this->validarConsignacionesacciones($ConsignacionesaccionesDto);
$ConsignacionesaccionesController = new ConsignacionesaccionesController();
$ConsignacionesaccionesDto = $ConsignacionesaccionesController->selectConsignacionesacciones($ConsignacionesaccionesDto);
if($ConsignacionesaccionesDto!=""){
$dtoToJson = new DtoToJson($ConsignacionesaccionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertConsignacionesacciones($ConsignacionesaccionesDto){
$ConsignacionesaccionesDto=$this->validarConsignacionesacciones($ConsignacionesaccionesDto);
$ConsignacionesaccionesController = new ConsignacionesaccionesController();
$ConsignacionesaccionesDto = $ConsignacionesaccionesController->insertConsignacionesacciones($ConsignacionesaccionesDto);
if($ConsignacionesaccionesDto!=""){
$dtoToJson = new DtoToJson($ConsignacionesaccionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateConsignacionesacciones($ConsignacionesaccionesDto){
$ConsignacionesaccionesDto=$this->validarConsignacionesacciones($ConsignacionesaccionesDto);
$ConsignacionesaccionesController = new ConsignacionesaccionesController();
$ConsignacionesaccionesDto = $ConsignacionesaccionesController->updateConsignacionesacciones($ConsignacionesaccionesDto);
if($ConsignacionesaccionesDto!=""){
$dtoToJson = new DtoToJson($ConsignacionesaccionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteConsignacionesacciones($ConsignacionesaccionesDto){
$ConsignacionesaccionesDto=$this->validarConsignacionesacciones($ConsignacionesaccionesDto);
$ConsignacionesaccionesController = new ConsignacionesaccionesController();
$ConsignacionesaccionesDto = $ConsignacionesaccionesController->deleteConsignacionesacciones($ConsignacionesaccionesDto);
if($ConsignacionesaccionesDto==true){
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



@$cveConsignacionA=$_POST["cveConsignacionA"];
@$desConsignacionA=$_POST["desConsignacionA"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$consignacionesaccionesFacade = new ConsignacionesaccionesFacade();
$consignacionesaccionesDto = new ConsignacionesaccionesDTO();

$consignacionesaccionesDto->setCveConsignacionA($cveConsignacionA);
$consignacionesaccionesDto->setDesConsignacionA($desConsignacionA);
$consignacionesaccionesDto->setActivo($activo);
$consignacionesaccionesDto->setFechaRegistro($fechaRegistro);
$consignacionesaccionesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveConsignacionA=="") ){
$consignacionesaccionesDto=$consignacionesaccionesFacade->insertConsignacionesacciones($consignacionesaccionesDto);
echo $consignacionesaccionesDto;
} else if(($accion=="guardar") && ($cveConsignacionA!="")){
$consignacionesaccionesDto=$consignacionesaccionesFacade->updateConsignacionesacciones($consignacionesaccionesDto);
echo $consignacionesaccionesDto;
} else if($accion=="consultar"){
$consignacionesaccionesDto=$consignacionesaccionesFacade->selectConsignacionesacciones($consignacionesaccionesDto);
echo $consignacionesaccionesDto;
} else if( ($accion=="baja") && ($cveConsignacionA!="") ){
$consignacionesaccionesDto=$consignacionesaccionesFacade->deleteConsignacionesacciones($consignacionesaccionesDto);
echo $consignacionesaccionesDto;
} else if( ($accion=="seleccionar") && ($cveConsignacionA!="") ){
$consignacionesaccionesDto=$consignacionesaccionesFacade->selectConsignacionesacciones($consignacionesaccionesDto);
echo $consignacionesaccionesDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>