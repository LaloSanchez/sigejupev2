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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/consignaciones/ConsignacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/consignaciones/ConsignacionesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class ConsignacionesFacade {
private $proveedor;
public function __construct() {
}
public function validarConsignaciones($ConsignacionesDto){
$ConsignacionesDto->setcveConsignacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConsignacionesDto->getcveConsignacion(),"utf8"):strtoupper($ConsignacionesDto->getcveConsignacion()))))));
if($this->esFecha($ConsignacionesDto->getcveConsignacion())){
$ConsignacionesDto->setcveConsignacion($this->fechaMysql($ConsignacionesDto->getcveConsignacion()));
}
$ConsignacionesDto->setdesConsignacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConsignacionesDto->getdesConsignacion(),"utf8"):strtoupper($ConsignacionesDto->getdesConsignacion()))))));
if($this->esFecha($ConsignacionesDto->getdesConsignacion())){
$ConsignacionesDto->setdesConsignacion($this->fechaMysql($ConsignacionesDto->getdesConsignacion()));
}
$ConsignacionesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConsignacionesDto->getactivo(),"utf8"):strtoupper($ConsignacionesDto->getactivo()))))));
if($this->esFecha($ConsignacionesDto->getactivo())){
$ConsignacionesDto->setactivo($this->fechaMysql($ConsignacionesDto->getactivo()));
}
$ConsignacionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConsignacionesDto->getfechaRegistro(),"utf8"):strtoupper($ConsignacionesDto->getfechaRegistro()))))));
if($this->esFecha($ConsignacionesDto->getfechaRegistro())){
$ConsignacionesDto->setfechaRegistro($this->fechaMysql($ConsignacionesDto->getfechaRegistro()));
}
$ConsignacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConsignacionesDto->getfechaActualizacion(),"utf8"):strtoupper($ConsignacionesDto->getfechaActualizacion()))))));
if($this->esFecha($ConsignacionesDto->getfechaActualizacion())){
$ConsignacionesDto->setfechaActualizacion($this->fechaMysql($ConsignacionesDto->getfechaActualizacion()));
}
return $ConsignacionesDto;
}
public function selectConsignaciones($ConsignacionesDto){
$ConsignacionesDto=$this->validarConsignaciones($ConsignacionesDto);
$ConsignacionesController = new ConsignacionesController();
$ConsignacionesDto = $ConsignacionesController->selectConsignaciones($ConsignacionesDto);
if($ConsignacionesDto!=""){
$dtoToJson = new DtoToJson($ConsignacionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertConsignaciones($ConsignacionesDto){
$ConsignacionesDto=$this->validarConsignaciones($ConsignacionesDto);
$ConsignacionesController = new ConsignacionesController();
$ConsignacionesDto = $ConsignacionesController->insertConsignaciones($ConsignacionesDto);
if($ConsignacionesDto!=""){
$dtoToJson = new DtoToJson($ConsignacionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateConsignaciones($ConsignacionesDto){
$ConsignacionesDto=$this->validarConsignaciones($ConsignacionesDto);
$ConsignacionesController = new ConsignacionesController();
$ConsignacionesDto = $ConsignacionesController->updateConsignaciones($ConsignacionesDto);
if($ConsignacionesDto!=""){
$dtoToJson = new DtoToJson($ConsignacionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteConsignaciones($ConsignacionesDto){
$ConsignacionesDto=$this->validarConsignaciones($ConsignacionesDto);
$ConsignacionesController = new ConsignacionesController();
$ConsignacionesDto = $ConsignacionesController->deleteConsignaciones($ConsignacionesDto);
if($ConsignacionesDto==true){
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



@$cveConsignacion=$_POST["cveConsignacion"];
@$desConsignacion=$_POST["desConsignacion"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$consignacionesFacade = new ConsignacionesFacade();
$consignacionesDto = new ConsignacionesDTO();

$consignacionesDto->setCveConsignacion($cveConsignacion);
$consignacionesDto->setDesConsignacion($desConsignacion);
$consignacionesDto->setActivo($activo);
$consignacionesDto->setFechaRegistro($fechaRegistro);
$consignacionesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveConsignacion=="") ){
$consignacionesDto=$consignacionesFacade->insertConsignaciones($consignacionesDto);
echo $consignacionesDto;
} else if(($accion=="guardar") && ($cveConsignacion!="")){
$consignacionesDto=$consignacionesFacade->updateConsignaciones($consignacionesDto);
echo $consignacionesDto;
} else if($accion=="consultar"){
$consignacionesDto=$consignacionesFacade->selectConsignaciones($consignacionesDto);
echo $consignacionesDto;
} else if( ($accion=="baja") && ($cveConsignacion!="") ){
$consignacionesDto=$consignacionesFacade->deleteConsignaciones($consignacionesDto);
echo $consignacionesDto;
} else if( ($accion=="seleccionar") && ($cveConsignacion!="") ){
$consignacionesDto=$consignacionesFacade->selectConsignaciones($consignacionesDto);
echo $consignacionesDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>