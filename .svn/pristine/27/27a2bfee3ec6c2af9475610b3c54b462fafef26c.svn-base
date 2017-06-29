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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/actuacionesestatus/ActuacionesestatusDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/actuacionesestatus/ActuacionesestatusController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class ActuacionesestatusFacade {
private $proveedor;
public function __construct() {
}
public function validarActuacionesestatus($ActuacionesestatusDto){
$ActuacionesestatusDto->setidActuacionesEstatus(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ActuacionesestatusDto->getidActuacionesEstatus(),"utf8"):strtoupper($ActuacionesestatusDto->getidActuacionesEstatus()))))));
if($this->esFecha($ActuacionesestatusDto->getidActuacionesEstatus())){
$ActuacionesestatusDto->setidActuacionesEstatus($this->fechaMysql($ActuacionesestatusDto->getidActuacionesEstatus()));
}
$ActuacionesestatusDto->setidActuacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ActuacionesestatusDto->getidActuacion(),"utf8"):strtoupper($ActuacionesestatusDto->getidActuacion()))))));
if($this->esFecha($ActuacionesestatusDto->getidActuacion())){
$ActuacionesestatusDto->setidActuacion($this->fechaMysql($ActuacionesestatusDto->getidActuacion()));
}
$ActuacionesestatusDto->setcveEstatus(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ActuacionesestatusDto->getcveEstatus(),"utf8"):strtoupper($ActuacionesestatusDto->getcveEstatus()))))));
if($this->esFecha($ActuacionesestatusDto->getcveEstatus())){
$ActuacionesestatusDto->setcveEstatus($this->fechaMysql($ActuacionesestatusDto->getcveEstatus()));
}
$ActuacionesestatusDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ActuacionesestatusDto->getfechaRegistro(),"utf8"):strtoupper($ActuacionesestatusDto->getfechaRegistro()))))));
if($this->esFecha($ActuacionesestatusDto->getfechaRegistro())){
$ActuacionesestatusDto->setfechaRegistro($this->fechaMysql($ActuacionesestatusDto->getfechaRegistro()));
}
$ActuacionesestatusDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ActuacionesestatusDto->getfechaActualizacion(),"utf8"):strtoupper($ActuacionesestatusDto->getfechaActualizacion()))))));
if($this->esFecha($ActuacionesestatusDto->getfechaActualizacion())){
$ActuacionesestatusDto->setfechaActualizacion($this->fechaMysql($ActuacionesestatusDto->getfechaActualizacion()));
}
$ActuacionesestatusDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ActuacionesestatusDto->getactivo(),"utf8"):strtoupper($ActuacionesestatusDto->getactivo()))))));
if($this->esFecha($ActuacionesestatusDto->getactivo())){
$ActuacionesestatusDto->setactivo($this->fechaMysql($ActuacionesestatusDto->getactivo()));
}
return $ActuacionesestatusDto;
}
public function selectActuacionesestatus($ActuacionesestatusDto){
$ActuacionesestatusDto=$this->validarActuacionesestatus($ActuacionesestatusDto);
$ActuacionesestatusController = new ActuacionesestatusController();
$ActuacionesestatusDto = $ActuacionesestatusController->selectActuacionesestatus($ActuacionesestatusDto);
if($ActuacionesestatusDto!=""){
$dtoToJson = new DtoToJson($ActuacionesestatusDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertActuacionesestatus($ActuacionesestatusDto){
$ActuacionesestatusDto=$this->validarActuacionesestatus($ActuacionesestatusDto);
$ActuacionesestatusController = new ActuacionesestatusController();
$ActuacionesestatusDto = $ActuacionesestatusController->insertActuacionesestatus($ActuacionesestatusDto);
if($ActuacionesestatusDto!=""){
$dtoToJson = new DtoToJson($ActuacionesestatusDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateActuacionesestatus($ActuacionesestatusDto){
$ActuacionesestatusDto=$this->validarActuacionesestatus($ActuacionesestatusDto);
$ActuacionesestatusController = new ActuacionesestatusController();
$ActuacionesestatusDto = $ActuacionesestatusController->updateActuacionesestatus($ActuacionesestatusDto);
if($ActuacionesestatusDto!=""){
$dtoToJson = new DtoToJson($ActuacionesestatusDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function updateActuacionesestatusJuez($ActuacionesestatusDto){
	$ActuacionesestatusDto=$this->validarActuacionesestatus($ActuacionesestatusDto);
	$ActuacionesestatusController = new ActuacionesestatusController();
	$Actuacionesestatus = $ActuacionesestatusController->updateActuacionesestatusJuez($ActuacionesestatusDto);
	return $Actuacionesestatus;
}
public function deleteActuacionesestatus($ActuacionesestatusDto){
$ActuacionesestatusDto=$this->validarActuacionesestatus($ActuacionesestatusDto);
$ActuacionesestatusController = new ActuacionesestatusController();
$ActuacionesestatusDto = $ActuacionesestatusController->deleteActuacionesestatus($ActuacionesestatusDto);
if($ActuacionesestatusDto==true){
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



@$idActuacionesEstatus=$_POST["idActuacionesEstatus"];
@$idActuacion=$_POST["idActuacion"];
@$cveEstatus=$_POST["cveEstatus"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$activo=$_POST["activo"];
@$accion=$_POST["accion"];

$actuacionesestatusFacade = new ActuacionesestatusFacade();
$actuacionesestatusDto = new ActuacionesestatusDTO();

$actuacionesestatusDto->setIdActuacionesEstatus($idActuacionesEstatus);
$actuacionesestatusDto->setIdActuacion($idActuacion);
$actuacionesestatusDto->setCveEstatus($cveEstatus);
$actuacionesestatusDto->setFechaRegistro($fechaRegistro);
$actuacionesestatusDto->setFechaActualizacion($fechaActualizacion);
$actuacionesestatusDto->setActivo($activo);

if( ($accion=="guardar") && ($idActuacionesEstatus=="") ){
$actuacionesestatusDto=$actuacionesestatusFacade->insertActuacionesestatus($actuacionesestatusDto);
echo $actuacionesestatusDto;
} else if(($accion=="guardar") && ($idActuacionesEstatus!="")){
$actuacionesestatusDto=$actuacionesestatusFacade->updateActuacionesestatus($actuacionesestatusDto);
echo $actuacionesestatusDto;
} else if($accion=="consultar"){
$actuacionesestatusDto=$actuacionesestatusFacade->selectActuacionesestatus($actuacionesestatusDto);
echo $actuacionesestatusDto;
} else if( ($accion=="baja") && ($idActuacionesEstatus!="") ){
$actuacionesestatusDto=$actuacionesestatusFacade->deleteActuacionesestatus($actuacionesestatusDto);
echo $actuacionesestatusDto;
} else if( ($accion=="seleccionar") && ($idActuacionesEstatus!="") ){
$actuacionesestatusDto=$actuacionesestatusFacade->selectActuacionesestatus($actuacionesestatusDto);
echo $actuacionesestatusDto;
} else if( $accion=="updateActuacionesestatusJuez" ){
	$actuacionesestatus=$actuacionesestatusFacade->updateActuacionesestatusJuez($actuacionesestatusDto);
	echo $actuacionesestatus;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>