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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/consumaciones/ConsumacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/consumaciones/ConsumacionesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class ConsumacionesFacade {
private $proveedor;
public function __construct() {
}
public function validarConsumaciones($ConsumacionesDto){
$ConsumacionesDto->setcveConsumacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConsumacionesDto->getcveConsumacion(),"utf8"):strtoupper($ConsumacionesDto->getcveConsumacion()))))));
if($this->esFecha($ConsumacionesDto->getcveConsumacion())){
$ConsumacionesDto->setcveConsumacion($this->fechaMysql($ConsumacionesDto->getcveConsumacion()));
}
$ConsumacionesDto->setdesConsumacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConsumacionesDto->getdesConsumacion(),"utf8"):strtoupper($ConsumacionesDto->getdesConsumacion()))))));
if($this->esFecha($ConsumacionesDto->getdesConsumacion())){
$ConsumacionesDto->setdesConsumacion($this->fechaMysql($ConsumacionesDto->getdesConsumacion()));
}
$ConsumacionesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConsumacionesDto->getactivo(),"utf8"):strtoupper($ConsumacionesDto->getactivo()))))));
if($this->esFecha($ConsumacionesDto->getactivo())){
$ConsumacionesDto->setactivo($this->fechaMysql($ConsumacionesDto->getactivo()));
}
$ConsumacionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConsumacionesDto->getfechaRegistro(),"utf8"):strtoupper($ConsumacionesDto->getfechaRegistro()))))));
if($this->esFecha($ConsumacionesDto->getfechaRegistro())){
$ConsumacionesDto->setfechaRegistro($this->fechaMysql($ConsumacionesDto->getfechaRegistro()));
}
$ConsumacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConsumacionesDto->getfechaActualizacion(),"utf8"):strtoupper($ConsumacionesDto->getfechaActualizacion()))))));
if($this->esFecha($ConsumacionesDto->getfechaActualizacion())){
$ConsumacionesDto->setfechaActualizacion($this->fechaMysql($ConsumacionesDto->getfechaActualizacion()));
}
return $ConsumacionesDto;
}
public function selectConsumaciones($ConsumacionesDto){
$ConsumacionesDto=$this->validarConsumaciones($ConsumacionesDto);
$ConsumacionesController = new ConsumacionesController();
$ConsumacionesDto = $ConsumacionesController->selectConsumaciones($ConsumacionesDto);
if($ConsumacionesDto!=""){
$dtoToJson = new DtoToJson($ConsumacionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertConsumaciones($ConsumacionesDto){
$ConsumacionesDto=$this->validarConsumaciones($ConsumacionesDto);
$ConsumacionesController = new ConsumacionesController();
$ConsumacionesDto = $ConsumacionesController->insertConsumaciones($ConsumacionesDto);
if($ConsumacionesDto!=""){
$dtoToJson = new DtoToJson($ConsumacionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateConsumaciones($ConsumacionesDto){
$ConsumacionesDto=$this->validarConsumaciones($ConsumacionesDto);
$ConsumacionesController = new ConsumacionesController();
$ConsumacionesDto = $ConsumacionesController->updateConsumaciones($ConsumacionesDto);
if($ConsumacionesDto!=""){
$dtoToJson = new DtoToJson($ConsumacionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteConsumaciones($ConsumacionesDto){
$ConsumacionesDto=$this->validarConsumaciones($ConsumacionesDto);
$ConsumacionesController = new ConsumacionesController();
$ConsumacionesDto = $ConsumacionesController->deleteConsumaciones($ConsumacionesDto);
if($ConsumacionesDto==true){
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



@$cveConsumacion=$_POST["cveConsumacion"];
@$desConsumacion=$_POST["desConsumacion"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$consumacionesFacade = new ConsumacionesFacade();
$consumacionesDto = new ConsumacionesDTO();

$consumacionesDto->setCveConsumacion($cveConsumacion);
$consumacionesDto->setDesConsumacion($desConsumacion);
$consumacionesDto->setActivo($activo);
$consumacionesDto->setFechaRegistro($fechaRegistro);
$consumacionesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveConsumacion=="") ){
$consumacionesDto=$consumacionesFacade->insertConsumaciones($consumacionesDto);
echo $consumacionesDto;
} else if(($accion=="guardar") && ($cveConsumacion!="")){
$consumacionesDto=$consumacionesFacade->updateConsumaciones($consumacionesDto);
echo $consumacionesDto;
} else if($accion=="consultar"){
$consumacionesDto=$consumacionesFacade->selectConsumaciones($consumacionesDto);
echo $consumacionesDto;
} else if( ($accion=="baja") && ($cveConsumacion!="") ){
$consumacionesDto=$consumacionesFacade->deleteConsumaciones($consumacionesDto);
echo $consumacionesDto;
} else if( ($accion=="seleccionar") && ($cveConsumacion!="") ){
$consumacionesDto=$consumacionesFacade->selectConsumaciones($consumacionesDto);
echo $consumacionesDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>