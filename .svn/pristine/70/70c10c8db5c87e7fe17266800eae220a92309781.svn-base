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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/suspensionesapeladas/SuspensionesapeladasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/suspensionesapeladas/SuspensionesapeladasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class SuspensionesapeladasFacade {
private $proveedor;
public function __construct() {
}
public function validarSuspensionesapeladas($SuspensionesapeladasDto){
$SuspensionesapeladasDto->setidSuspensionApelada(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SuspensionesapeladasDto->getidSuspensionApelada(),"utf8"):strtoupper($SuspensionesapeladasDto->getidSuspensionApelada()))))));
if($this->esFecha($SuspensionesapeladasDto->getidSuspensionApelada())){
$SuspensionesapeladasDto->setidSuspensionApelada($this->fechaMysql($SuspensionesapeladasDto->getidSuspensionApelada()));
}
$SuspensionesapeladasDto->setidSuspensionCondicional(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SuspensionesapeladasDto->getidSuspensionCondicional(),"utf8"):strtoupper($SuspensionesapeladasDto->getidSuspensionCondicional()))))));
if($this->esFecha($SuspensionesapeladasDto->getidSuspensionCondicional())){
$SuspensionesapeladasDto->setidSuspensionCondicional($this->fechaMysql($SuspensionesapeladasDto->getidSuspensionCondicional()));
}
$SuspensionesapeladasDto->setcveSentido(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SuspensionesapeladasDto->getcveSentido(),"utf8"):strtoupper($SuspensionesapeladasDto->getcveSentido()))))));
if($this->esFecha($SuspensionesapeladasDto->getcveSentido())){
$SuspensionesapeladasDto->setcveSentido($this->fechaMysql($SuspensionesapeladasDto->getcveSentido()));
}
$SuspensionesapeladasDto->setNumToca(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SuspensionesapeladasDto->getNumToca(),"utf8"):strtoupper($SuspensionesapeladasDto->getNumToca()))))));
if($this->esFecha($SuspensionesapeladasDto->getNumToca())){
$SuspensionesapeladasDto->setNumToca($this->fechaMysql($SuspensionesapeladasDto->getNumToca()));
}
$SuspensionesapeladasDto->setAnioToca(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SuspensionesapeladasDto->getAnioToca(),"utf8"):strtoupper($SuspensionesapeladasDto->getAnioToca()))))));
if($this->esFecha($SuspensionesapeladasDto->getAnioToca())){
$SuspensionesapeladasDto->setAnioToca($this->fechaMysql($SuspensionesapeladasDto->getAnioToca()));
}
$SuspensionesapeladasDto->setCveSala(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SuspensionesapeladasDto->getCveSala(),"utf8"):strtoupper($SuspensionesapeladasDto->getCveSala()))))));
if($this->esFecha($SuspensionesapeladasDto->getCveSala())){
$SuspensionesapeladasDto->setCveSala($this->fechaMysql($SuspensionesapeladasDto->getCveSala()));
}
$SuspensionesapeladasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SuspensionesapeladasDto->getactivo(),"utf8"):strtoupper($SuspensionesapeladasDto->getactivo()))))));
if($this->esFecha($SuspensionesapeladasDto->getactivo())){
$SuspensionesapeladasDto->setactivo($this->fechaMysql($SuspensionesapeladasDto->getactivo()));
}
$SuspensionesapeladasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SuspensionesapeladasDto->getfechaRegistro(),"utf8"):strtoupper($SuspensionesapeladasDto->getfechaRegistro()))))));
if($this->esFecha($SuspensionesapeladasDto->getfechaRegistro())){
$SuspensionesapeladasDto->setfechaRegistro($this->fechaMysql($SuspensionesapeladasDto->getfechaRegistro()));
}
$SuspensionesapeladasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SuspensionesapeladasDto->getfechaActualizacion(),"utf8"):strtoupper($SuspensionesapeladasDto->getfechaActualizacion()))))));
if($this->esFecha($SuspensionesapeladasDto->getfechaActualizacion())){
$SuspensionesapeladasDto->setfechaActualizacion($this->fechaMysql($SuspensionesapeladasDto->getfechaActualizacion()));
}
return $SuspensionesapeladasDto;
}
public function selectSuspensionesapeladas($SuspensionesapeladasDto){
$SuspensionesapeladasDto=$this->validarSuspensionesapeladas($SuspensionesapeladasDto);
$SuspensionesapeladasController = new SuspensionesapeladasController();
$SuspensionesapeladasDto = $SuspensionesapeladasController->selectSuspensionesapeladas($SuspensionesapeladasDto);
if($SuspensionesapeladasDto!=""){
$dtoToJson = new DtoToJson($SuspensionesapeladasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertSuspensionesapeladas($SuspensionesapeladasDto){
$SuspensionesapeladasDto=$this->validarSuspensionesapeladas($SuspensionesapeladasDto);
$SuspensionesapeladasController = new SuspensionesapeladasController();
$SuspensionesapeladasDto = $SuspensionesapeladasController->insertSuspensionesapeladas($SuspensionesapeladasDto);
if($SuspensionesapeladasDto!=""){
$dtoToJson = new DtoToJson($SuspensionesapeladasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateSuspensionesapeladas($SuspensionesapeladasDto){
$SuspensionesapeladasDto=$this->validarSuspensionesapeladas($SuspensionesapeladasDto);
$SuspensionesapeladasController = new SuspensionesapeladasController();
$SuspensionesapeladasDto = $SuspensionesapeladasController->updateSuspensionesapeladas($SuspensionesapeladasDto);
if($SuspensionesapeladasDto!=""){
$dtoToJson = new DtoToJson($SuspensionesapeladasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteSuspensionesapeladas($SuspensionesapeladasDto){
$SuspensionesapeladasDto=$this->validarSuspensionesapeladas($SuspensionesapeladasDto);
$SuspensionesapeladasController = new SuspensionesapeladasController();
$SuspensionesapeladasDto = $SuspensionesapeladasController->deleteSuspensionesapeladas($SuspensionesapeladasDto);
if($SuspensionesapeladasDto==true){
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



@$idSuspensionApelada=$_POST["idSuspensionApelada"];
@$idSuspensionCondicional=$_POST["idSuspensionCondicional"];
@$cveSentido=$_POST["cveSentido"];
@$NumToca=$_POST["NumToca"];
@$AnioToca=$_POST["AnioToca"];
@$CveSala=$_POST["CveSala"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$suspensionesapeladasFacade = new SuspensionesapeladasFacade();
$suspensionesapeladasDto = new SuspensionesapeladasDTO();

$suspensionesapeladasDto->setIdSuspensionApelada($idSuspensionApelada);
$suspensionesapeladasDto->setIdSuspensionCondicional($idSuspensionCondicional);
$suspensionesapeladasDto->setCveSentido($cveSentido);
$suspensionesapeladasDto->setNumToca($NumToca);
$suspensionesapeladasDto->setAnioToca($AnioToca);
$suspensionesapeladasDto->setCveSala($CveSala);
$suspensionesapeladasDto->setActivo($activo);
$suspensionesapeladasDto->setFechaRegistro($fechaRegistro);
$suspensionesapeladasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idSuspensionApelada=="") ){
$suspensionesapeladasDto=$suspensionesapeladasFacade->insertSuspensionesapeladas($suspensionesapeladasDto);
echo $suspensionesapeladasDto;
} else if(($accion=="guardar") && ($idSuspensionApelada!="")){
$suspensionesapeladasDto=$suspensionesapeladasFacade->updateSuspensionesapeladas($suspensionesapeladasDto);
echo $suspensionesapeladasDto;
} else if($accion=="consultar"){
$suspensionesapeladasDto=$suspensionesapeladasFacade->selectSuspensionesapeladas($suspensionesapeladasDto);
echo $suspensionesapeladasDto;
} else if( ($accion=="baja") && ($idSuspensionApelada!="") ){
$suspensionesapeladasDto=$suspensionesapeladasFacade->deleteSuspensionesapeladas($suspensionesapeladasDto);
echo $suspensionesapeladasDto;
} else if( ($accion=="seleccionar") && ($idSuspensionApelada!="") ){
$suspensionesapeladasDto=$suspensionesapeladasFacade->selectSuspensionesapeladas($suspensionesapeladasDto);
echo $suspensionesapeladasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>