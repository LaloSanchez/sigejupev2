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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/actasaudiencias/ActasaudienciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/actasaudiencias/ActasaudienciasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class ActasaudienciasFacade {
private $proveedor;
public function __construct() {
}
public function validarActasaudiencias($ActasaudienciasDto){
$ActasaudienciasDto->setidActasAudiencia(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ActasaudienciasDto->getidActasAudiencia(),"utf8"):strtoupper($ActasaudienciasDto->getidActasAudiencia()))))));
if($this->esFecha($ActasaudienciasDto->getidActasAudiencia())){
$ActasaudienciasDto->setidActasAudiencia($this->fechaMysql($ActasaudienciasDto->getidActasAudiencia()));
}
$ActasaudienciasDto->setidActuacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ActasaudienciasDto->getidActuacion(),"utf8"):strtoupper($ActasaudienciasDto->getidActuacion()))))));
if($this->esFecha($ActasaudienciasDto->getidActuacion())){
$ActasaudienciasDto->setidActuacion($this->fechaMysql($ActasaudienciasDto->getidActuacion()));
}
$ActasaudienciasDto->setidAudiencia(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ActasaudienciasDto->getidAudiencia(),"utf8"):strtoupper($ActasaudienciasDto->getidAudiencia()))))));
if($this->esFecha($ActasaudienciasDto->getidAudiencia())){
$ActasaudienciasDto->setidAudiencia($this->fechaMysql($ActasaudienciasDto->getidAudiencia()));
}
$ActasaudienciasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ActasaudienciasDto->getfechaRegistro(),"utf8"):strtoupper($ActasaudienciasDto->getfechaRegistro()))))));
if($this->esFecha($ActasaudienciasDto->getfechaRegistro())){
$ActasaudienciasDto->setfechaRegistro($this->fechaMysql($ActasaudienciasDto->getfechaRegistro()));
}
$ActasaudienciasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ActasaudienciasDto->getfechaActualizacion(),"utf8"):strtoupper($ActasaudienciasDto->getfechaActualizacion()))))));
if($this->esFecha($ActasaudienciasDto->getfechaActualizacion())){
$ActasaudienciasDto->setfechaActualizacion($this->fechaMysql($ActasaudienciasDto->getfechaActualizacion()));
}
return $ActasaudienciasDto;
}
public function selectActasaudiencias($ActasaudienciasDto){
$ActasaudienciasDto=$this->validarActasaudiencias($ActasaudienciasDto);
$ActasaudienciasController = new ActasaudienciasController();
$ActasaudienciasDto = $ActasaudienciasController->selectActasaudiencias($ActasaudienciasDto);
if($ActasaudienciasDto!=""){
$dtoToJson = new DtoToJson($ActasaudienciasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertActasaudiencias($ActasaudienciasDto){
$ActasaudienciasDto=$this->validarActasaudiencias($ActasaudienciasDto);
$ActasaudienciasController = new ActasaudienciasController();
$ActasaudienciasDto = $ActasaudienciasController->insertActasaudiencias($ActasaudienciasDto);
if($ActasaudienciasDto!=""){
$dtoToJson = new DtoToJson($ActasaudienciasDto);
return $dtoToJson->toJson("ACTAS AUDIENCIAS - REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"ACTAS AUDIENCIAS - OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateActasaudiencias($ActasaudienciasDto){
$ActasaudienciasDto=$this->validarActasaudiencias($ActasaudienciasDto);
$ActasaudienciasController = new ActasaudienciasController();
$ActasaudienciasDto = $ActasaudienciasController->updateActasaudiencias($ActasaudienciasDto);
if($ActasaudienciasDto!=""){
$dtoToJson = new DtoToJson($ActasaudienciasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}

public function updateAudiencia($ActasaudienciasDto){
	$ActasaudienciasDto=$this->validarActasaudiencias($ActasaudienciasDto);
	$ActasaudienciasController = new ActasaudienciasController();
	$ActasaudienciasDto = $ActasaudienciasController->updateAudiencia($ActasaudienciasDto);
	if($ActasaudienciasDto!=""){
		$dtoToJson = new DtoToJson($ActasaudienciasDto);
		return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
	}
	$jsonDto = new Encode_JSON();
	return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}

public function borradoLogico($ActasaudienciasDto){
	$ActasaudienciasDto=$this->validarActasaudiencias($ActasaudienciasDto);
	$ActasaudienciasController = new ActasaudienciasController();
	$ActasaudienciasDto = $ActasaudienciasController->borradoLogico($ActasaudienciasDto);
	if($ActasaudienciasDto!=""){
		$dtoToJson = new DtoToJson($ActasaudienciasDto);
		return $dtoToJson->toJson("REGISTRO BORRADO");
	}
	$jsonDto = new Encode_JSON();
	return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL BORRADO"));
}

public function guardarRelacion($ActasaudienciasDto){
	$ActasaudienciasDto=$this->validarActasaudiencias($ActasaudienciasDto);
	$ActasaudienciasController = new ActasaudienciasController();
	$ActasaudienciasDto = $ActasaudienciasController->guardarRelacion($ActasaudienciasDto);
	if($ActasaudienciasDto!=""){
		$dtoToJson = new DtoToJson($ActasaudienciasDto);
		return $dtoToJson->toJson("ACTAS AUDIENCIAS - REGISTRO REALIZADO DE FORMA CORRECTA");
	}
	$jsonDto = new Encode_JSON();
	return $jsonDto->encode(array("totalCount"=>"0","text"=>"ACTAS AUDIENCIAS - OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}

public function deleteActasaudiencias($ActasaudienciasDto){
$ActasaudienciasDto=$this->validarActasaudiencias($ActasaudienciasDto);
$ActasaudienciasController = new ActasaudienciasController();
$ActasaudienciasDto = $ActasaudienciasController->deleteActasaudiencias($ActasaudienciasDto);
if($ActasaudienciasDto==true){
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



@$idActasAudiencia=$_POST["idActasAudiencia"];
@$idActuacion=$_POST["idActuacion"];
@$idAudiencia=$_POST["idAudiencia"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$actasaudienciasFacade = new ActasaudienciasFacade();
$actasaudienciasDto = new ActasaudienciasDTO();

$actasaudienciasDto->setIdActasAudiencia($idActasAudiencia);
$actasaudienciasDto->setIdActuacion($idActuacion);
$actasaudienciasDto->setIdAudiencia($idAudiencia);
$actasaudienciasDto->setFechaRegistro($fechaRegistro);
$actasaudienciasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idActasAudiencia=="") ){
$actasaudienciasDto=$actasaudienciasFacade->insertActasaudiencias($actasaudienciasDto);
echo $actasaudienciasDto;
} else if(($accion=="guardar") && ($idActasAudiencia!="")){
$actasaudienciasDto=$actasaudienciasFacade->updateActasaudiencias($actasaudienciasDto);
echo $actasaudienciasDto;
} else if($accion=="consultar"){
$actasaudienciasDto=$actasaudienciasFacade->selectActasaudiencias($actasaudienciasDto);
echo $actasaudienciasDto;
} else if( ($accion=="baja") && ($idActasAudiencia!="") ){
$actasaudienciasDto=$actasaudienciasFacade->deleteActasaudiencias($actasaudienciasDto);
echo $actasaudienciasDto;
} else if( ($accion=="seleccionar") && ($idActasAudiencia!="") ){
$actasaudienciasDto=$actasaudienciasFacade->selectActasaudiencias($actasaudienciasDto);
echo $actasaudienciasDto;
} else if($accion=="borradoLogico"){
	$actasaudienciasDto=$actasaudienciasFacade->borradoLogico($actasaudienciasDto);
	echo $actasaudienciasDto;
}else if($accion=="guardarRelacion"){ 
	$actasaudienciasDto=$actasaudienciasFacade->guardarRelacion($actasaudienciasDto);
	echo $actasaudienciasDto;
}else if($accion=="actualizaAudiencia"){ 
	$actasaudienciasDto=$actasaudienciasFacade->updateAudiencia($actasaudienciasDto);
	echo $actasaudienciasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>