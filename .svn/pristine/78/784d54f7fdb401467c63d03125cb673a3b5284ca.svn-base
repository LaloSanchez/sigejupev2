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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/suspensioncondicionales/SuspensioncondicionalesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/suspensioncondicionales/SuspensioncondicionalesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class SuspensioncondicionalesFacade {
private $proveedor;
public function __construct() {
}
public function validarSuspensioncondicionales($SuspensioncondicionalesDto){
$SuspensioncondicionalesDto->setidSuspensionCondicional(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SuspensioncondicionalesDto->getidSuspensionCondicional(),"utf8"):strtoupper($SuspensioncondicionalesDto->getidSuspensionCondicional()))))));
if($this->esFecha($SuspensioncondicionalesDto->getidSuspensionCondicional())){
$SuspensioncondicionalesDto->setidSuspensionCondicional($this->fechaMysql($SuspensioncondicionalesDto->getidSuspensionCondicional()));
}
$SuspensioncondicionalesDto->setidActuacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SuspensioncondicionalesDto->getidActuacion(),"utf8"):strtoupper($SuspensioncondicionalesDto->getidActuacion()))))));
if($this->esFecha($SuspensioncondicionalesDto->getidActuacion())){
$SuspensioncondicionalesDto->setidActuacion($this->fechaMysql($SuspensioncondicionalesDto->getidActuacion()));
}
$SuspensioncondicionalesDto->setidImputadoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SuspensioncondicionalesDto->getidImputadoCarpeta(),"utf8"):strtoupper($SuspensioncondicionalesDto->getidImputadoCarpeta()))))));
if($this->esFecha($SuspensioncondicionalesDto->getidImputadoCarpeta())){
$SuspensioncondicionalesDto->setidImputadoCarpeta($this->fechaMysql($SuspensioncondicionalesDto->getidImputadoCarpeta()));
}
$SuspensioncondicionalesDto->setcveTipoSuspensionCondicional(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SuspensioncondicionalesDto->getcveTipoSuspensionCondicional(),"utf8"):strtoupper($SuspensioncondicionalesDto->getcveTipoSuspensionCondicional()))))));
if($this->esFecha($SuspensioncondicionalesDto->getcveTipoSuspensionCondicional())){
$SuspensioncondicionalesDto->setcveTipoSuspensionCondicional($this->fechaMysql($SuspensioncondicionalesDto->getcveTipoSuspensionCondicional()));
}
$SuspensioncondicionalesDto->setApelada(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SuspensioncondicionalesDto->getApelada(),"utf8"):strtoupper($SuspensioncondicionalesDto->getApelada()))))));
if($this->esFecha($SuspensioncondicionalesDto->getApelada())){
$SuspensioncondicionalesDto->setApelada($this->fechaMysql($SuspensioncondicionalesDto->getApelada()));
}
$SuspensioncondicionalesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SuspensioncondicionalesDto->getactivo(),"utf8"):strtoupper($SuspensioncondicionalesDto->getactivo()))))));
if($this->esFecha($SuspensioncondicionalesDto->getactivo())){
$SuspensioncondicionalesDto->setactivo($this->fechaMysql($SuspensioncondicionalesDto->getactivo()));
}
$SuspensioncondicionalesDto->setfechaInicio(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SuspensioncondicionalesDto->getfechaInicio(),"utf8"):strtoupper($SuspensioncondicionalesDto->getfechaInicio()))))));
if($this->esFecha($SuspensioncondicionalesDto->getfechaInicio())){
$SuspensioncondicionalesDto->setfechaInicio($this->fechaMysql($SuspensioncondicionalesDto->getfechaInicio()));
}
$SuspensioncondicionalesDto->setfechaTermina(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SuspensioncondicionalesDto->getfechaTermina(),"utf8"):strtoupper($SuspensioncondicionalesDto->getfechaTermina()))))));
if($this->esFecha($SuspensioncondicionalesDto->getfechaTermina())){
$SuspensioncondicionalesDto->setfechaTermina($this->fechaMysql($SuspensioncondicionalesDto->getfechaTermina()));
}
return $SuspensioncondicionalesDto;
}
public function selectSuspensioncondicionales($SuspensioncondicionalesDto){
$SuspensioncondicionalesDto=$this->validarSuspensioncondicionales($SuspensioncondicionalesDto);
$SuspensioncondicionalesController = new SuspensioncondicionalesController();
$SuspensioncondicionalesDto = $SuspensioncondicionalesController->selectSuspensioncondicionales($SuspensioncondicionalesDto);
if($SuspensioncondicionalesDto!=""){
$dtoToJson = new DtoToJson($SuspensioncondicionalesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertSuspensioncondicionales($SuspensioncondicionalesDto){
$SuspensioncondicionalesDto=$this->validarSuspensioncondicionales($SuspensioncondicionalesDto);
$SuspensioncondicionalesController = new SuspensioncondicionalesController();
$SuspensioncondicionalesDto = $SuspensioncondicionalesController->insertSuspensioncondicionales($SuspensioncondicionalesDto);
if($SuspensioncondicionalesDto!=""){
$dtoToJson = new DtoToJson($SuspensioncondicionalesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateSuspensioncondicionales($SuspensioncondicionalesDto){
$SuspensioncondicionalesDto=$this->validarSuspensioncondicionales($SuspensioncondicionalesDto);
$SuspensioncondicionalesController = new SuspensioncondicionalesController();
$SuspensioncondicionalesDto = $SuspensioncondicionalesController->updateSuspensioncondicionales($SuspensioncondicionalesDto);
if($SuspensioncondicionalesDto!=""){
$dtoToJson = new DtoToJson($SuspensioncondicionalesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteSuspensioncondicionales($SuspensioncondicionalesDto){
$SuspensioncondicionalesDto=$this->validarSuspensioncondicionales($SuspensioncondicionalesDto);
$SuspensioncondicionalesController = new SuspensioncondicionalesController();
$SuspensioncondicionalesDto = $SuspensioncondicionalesController->deleteSuspensioncondicionales($SuspensioncondicionalesDto);
if($SuspensioncondicionalesDto==true){
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



@$idSuspensionCondicional=$_POST["idSuspensionCondicional"];
@$idActuacion=$_POST["idActuacion"];
@$idImputadoCarpeta=$_POST["idImputadoCarpeta"];
@$cveTipoSuspensionCondicional=$_POST["cveTipoSuspensionCondicional"];
@$Apelada=$_POST["Apelada"];
@$activo=$_POST["activo"];
@$fechaInicio=$_POST["fechaInicio"];
@$fechaTermina=$_POST["fechaTermina"];
@$accion=$_POST["accion"];

$suspensioncondicionalesFacade = new SuspensioncondicionalesFacade();
$suspensioncondicionalesDto = new SuspensioncondicionalesDTO();

$suspensioncondicionalesDto->setIdSuspensionCondicional($idSuspensionCondicional);
$suspensioncondicionalesDto->setIdActuacion($idActuacion);
$suspensioncondicionalesDto->setIdImputadoCarpeta($idImputadoCarpeta);
$suspensioncondicionalesDto->setCveTipoSuspensionCondicional($cveTipoSuspensionCondicional);
$suspensioncondicionalesDto->setApelada($Apelada);
$suspensioncondicionalesDto->setActivo($activo);
$suspensioncondicionalesDto->setFechaInicio($fechaInicio);
$suspensioncondicionalesDto->setFechaTermina($fechaTermina);

if( ($accion=="guardar") && ($idSuspensionCondicional=="") ){
$suspensioncondicionalesDto=$suspensioncondicionalesFacade->insertSuspensioncondicionales($suspensioncondicionalesDto);
echo $suspensioncondicionalesDto;
} else if(($accion=="guardar") && ($idSuspensionCondicional!="")){
$suspensioncondicionalesDto=$suspensioncondicionalesFacade->updateSuspensioncondicionales($suspensioncondicionalesDto);
echo $suspensioncondicionalesDto;
} else if($accion=="consultar"){
$suspensioncondicionalesDto=$suspensioncondicionalesFacade->selectSuspensioncondicionales($suspensioncondicionalesDto);
echo $suspensioncondicionalesDto;
} else if( ($accion=="baja") && ($idSuspensionCondicional!="") ){
$suspensioncondicionalesDto=$suspensioncondicionalesFacade->deleteSuspensioncondicionales($suspensioncondicionalesDto);
echo $suspensioncondicionalesDto;
} else if( ($accion=="seleccionar") && ($idSuspensionCondicional!="") ){
$suspensioncondicionalesDto=$suspensioncondicionalesFacade->selectSuspensioncondicionales($suspensioncondicionalesDto);
echo $suspensioncondicionalesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>